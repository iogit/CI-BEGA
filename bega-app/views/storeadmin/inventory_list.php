<?php  //just be sure this session is for admin
session_start();
if(!isset($_SESSION["manager"])){
	
redirect("httpdocs/master");

exit();	
	}
		
		$managerID=preg_replace('#[^0-9]#i',"",$_SESSION["id"]);
	    $manager=preg_replace('#[^A-Za-z0-9]#i',"",$_SESSION["manager"]);
	    $password=preg_replace('#[^A-Za-z0-9]#i',"",$_SESSION["password"]);
	
	
	//include "../storescripts/connect_to_mysql.php";
	
	$sql=mysql_query("SELECT * FROM admn_tbl WHERE admn_id='$managerID' AND admn_usrName='$manager' AND admn_psswrd='$password' LIMIT 1");
	
	
	$existCount=mysql_num_rows($sql);
	
	if($existCount==0){
	//header("location:../index.php");
	echo "Your session couldnt be successfull !";
	exit();
	}
	
?>
<?php 
//error reporting
error_reporting(E_ALL);
ini_set('display_errors','1');

?>

<?php 
//delete item question to admin 
$url=base_url();
if(isset($_GET['deleteid'])){

$message=''.$_GET['deleteid'].' Numarali Urunu Gercekten Silmek Istiyormusun ? <a href="inventory?yesdelete='.$_GET['deleteid'].'">Evet</a>|<a href="inventory">Hayır</a>';

echo $message;

exit();

}
if(isset($_GET['yesdelete'])){
//remove item form system and delete its picture
//delete from database first
//delete from database first
$id_to_delete=$_GET['yesdelete'];
$id_to_delete_xs=$id_to_delete.'_xs';
$sql=mysql_query("DELETE FROM prdcts_tbl where prdct_id='$id_to_delete' LIMIT 1") or die(mysql_error);

//unlink the picture
$pictodelete=("assets/images/products/$id_to_delete.jpg");
if(file_exists($pictodelete)){
	
	unlink($pictodelete);
	}
	
	/*$pictodeletexs=("assets/images/products/$id_to_delete_xs.jpg");
	
if(file_exists($pictodeletexs)){
	
	unlink($pictodeletexs);
	}
*/
  redirect("httpdocs/inventory");
exit();

}



?>



<?php 
//parse the from data and add inventory item to the system



if(isset($_POST['product_name'])){
	$product_name=mysql_real_escape_string($_POST['product_name']);
	$shortDesc=mysql_real_escape_string($_POST['textarea1']);
	$longDesc=mysql_real_escape_string($_POST['textarea2']);
	$part_number=mysql_real_escape_string($_POST['parca_numarasi']);
	$nsn_number=mysql_real_escape_string($_POST['nsn']);

	

	/* $brndsql=mysql_query("SELECT brnd_id FROM brnd_tbl WHERE brnd_name='$brand' LIMIT 1");
	
		
		$brndCount=mysql_num_rows($brndsql);
		
		
		if($brndCount==1){
         $row=mysql_fetch_array($brndsql);
        
		
			$brnd_id=$row["brnd_id"];
			

		}else{
		echo 'Sorry an error occurred Error: X090x106ILP, <a href="'.$url.'inventory">   Click here </a>';
		exit();
			}
			
	$ctgrysql=mysql_query("SELECT ctgry_id FROM ctgrs_tbl WHERE ctgry_name='$category' LIMIT 1");
    $ctgryCount=mysql_num_rows($ctgrysql);
	
	if($ctgryCount==1){
	 $row=mysql_fetch_array($ctgrysql);
	  $ctgry_id=$row["ctgry_id"];
	}else{
	
	echo 'Sorry an error occurred Error: X108x118ILP, <a href="'.$url.'inventory">   Click here </a>';
		exit();
	}
	
	//see if that product name is an identical match to another product in the system
	*/
	
	$sql=mysql_query("SELECT prdct_id FROM prdct_tbl WHERE prdct_name='$product_name' LIMIT 1");
	
	$productMatch=mysql_num_rows($sql); //count the output amount
	$url=base_url();
	if($productMatch>0)
	{
		echo 'Sorry you tried to place a duplicate "Product Name" into the system, <a href="inventory"> Click here </a>';
		exit();
		}
		
	/*
	if($units_inStock==0){
	
	$prdct_available="no";
	}else{
	$prdct_available="yes";
	
	}
	*/
	
	//add this product into the database

	$sql=mysql_query("INSERT INTO prdcts_tbl (prdct_name, part_number, nsn_number, prdct_shortDesc, prdct_longDesc, prdct_addDate) VALUES('$product_name','$part_number','$nsn_number','$shortDesc','$longDesc', now())") or die(mysql_error());
	
	$pid=mysql_insert_id();
	$url=base_url();
	//place image in the folder
	$newname="$pid.jpg";

	move_uploaded_file($_FILES['fileField']['tmp_name'],"assets/images/products/$newname");
	
	//redirect('thumb?thumb='.$pid.'');
	  redirect("httpdocs/inventory"); //to prevent to sending same data to database when the page refreshed.
	exit();
}

?>


<?php
//this block grabs the whole list for viewing
if($product_list==""){
$sql=mysql_query("SELECT * FROM prdcts_tbl ORDER BY prdct_addDate DESC");  //or ASC
$productCount=mysql_num_rows($sql); //count output amount
$url=base_url();
if($productCount>0)
{

	while($row=mysql_fetch_array($sql))
	{
	$prdct_id=$row["prdct_id"];
	$prdct_name=$row["prdct_name"];
	$part_number=$row["part_number"];
	$nsn_number=$row["nsn_number"];
	$prdct_shortDesc=$row["prdct_shortDesc"];
	$prdct_longDesc=$row["prdct_longDesc"];

	$prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));


        $product_list.='        <tr><td>
                                <div class="blog-thumbnail" style="width: 50px;">
                                    <a href="blog-single.html">
                                        <img style="max-width:100%; max-height:100%;" src="'.$images.'/products/'.$prdct_id.'.jpg" alt="Thumbnail Image">
                                    </a>
                                </div>
                            </td>
                            <td>'.$part_number.'</td>
                            <td>'.$nsn_number.'</td>
                            <td>'.$prdct_name.'</td>
                            <td>'.$prdct_shortDesc.'</td>
                            <td> <div id="admin_delete"><a href="inventory?deleteid='.$prdct_id.'">Sil</a></div></td>

                        </tr>
                        ';

        /*
	$product_list.='<tr>';
	$product_list.="<td bgcolor='#FFFFFF'> $prdct_id </td>"; 
	$product_list.="<td bgcolor='#d7e0ec'>$prdct_name</td>"; 
    //$product_list.="<td bgcolor='#FFFFFF'>$$prdct_unitPrice</td>";
	//$product_list.="<td bgcolor='#d7e0ec'>$ctgry_id</td>"; 
	
	//$product_list.="<td bgcolor='#FFFFFF'>$brnd_id</td>";
	$product_list.="<td bgcolor='#d7e0ec'>$prdct_shortDesc</td>";
	
	$product_list.="
    <td bgcolor='#FFFFFF'><div style='width: 490px; height:75px; overflow: auto; padding:4px;'>$prdct_longDesc</div></td>";
	//$product_list.="<td bgcolor='#d7e0ec'>%&nbsp$prdct_discount </td>";
	$product_list.="<td bgcolor='#FFFFFF'>$part_number</td> ";
	$product_list.="<td bgcolor='#d7e0ec'>$nsn_number</td>";
	//$product_list.="<td bgcolor='#FFFFFF'>$dscnt_available</td>";
	//$product_list.="<td bgcolor='#d7e0ec'>$shipping</td>";
	$product_list.="<td bgcolor='#FFFFFF'>$prdct_addDate</td>";
	
	
	
	$product_list.="<td bgcolor='#FFFFFF'> <div id='admin_edit'><a href='inventory_edit?pid=$prdct_id'>Düzenle</a> </a>&nbsp; <div id='admin_delete'><a href='inventory?deleteid=$prdct_id'>Sil</a></div><br/></td>";
$product_list.='<tr>';


        */
	}
	
	
	
	
		
	}else
	
	{
        //Turkish manipulation
	//$product_list="you have no products listed in your store yet";
	//$product_list="";

		}

}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/html">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inventory list </title>
    <link href="<?php echo $css.'animate.min.css'; ?>" rel="stylesheet" media="screen">
    <link href="<?php echo $css.'bootstrap.min.css'; ?>" rel="stylesheet" media="screen">
    <link href="<?php echo $css.'font-awesome.min.css'; ?>" rel="stylesheet" media="screen">
    <link href="<?php echo $css.'options.css'; ?>" rel="stylesheet" media="screen">
    <link href="<?php echo $css.'responsive.css'; ?>" rel="stylesheet" media="screen">
    <link href="<?php echo $css.'style.css'; ?>" rel="stylesheet" media="screen">
    <link href="<?php echo $css.'form.css'; ?>" rel="stylesheet" media="screen">


    <script src="<?php echo $js.'html5shiv.js'; ?>"></script>
    <script src="<?php echo $js.'respond.min.js'; ?>"></script>
    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:900,300,400,200,800' rel='stylesheet' type='text/css'>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>

    <![endif]-->

    <!-- Bootstrap table head -->
    <link rel="stylesheet" type="text/css" href="<?php echo $data_table."media/css/jquery.dataTables.css";?>">
    <link rel="stylesheet" type="text/css" href="<?php echo $data_table."resources/syntax/shCore.css";?>">

    <style type="text/css" class="init">
    </style>
    <script type="text/javascript" language="javascript" src="<?php echo $data_table."media/js/jquery.js";?>"></script>
    <script type="text/javascript" language="javascript" src="<?php echo $data_table."media/js/jquery.dataTables.js";?>"></script>

    <script type="text/javascript" language="javascript" class="init">

        $(document).ready(function() {
            $('#example').dataTable( {
                "order": [[ 3, "desc" ]]
            } );
        } );

    </script>

    <!--Bootstrap table end-->


<link rel="stylesheet" type="text/css" media="screen" href="../style/style.css">
<style type="text/css">
#mainWrapper h3 {
	color: #666;
}
</style>
</head>
<body>

<div align="center" id="mainWrapper">
<?php //include_once("site_header.php");  ?>
  
  
  
<div id="invList">

<!-- Admin paneli Urun Listeleme Syfasi Urun Arama -->
	<!--
 <form id="search_formInv" method="post" action="<?= site_url('search_inventory');?>">
	<div class="invNav">
        <label for="phrase"></label>
        <input type="text" name="phrase" id="phrase" />
		<input type="submit" value="Ara" id="search_button" />
		
	    <a href="<?php base_url();?>inventory"> &nbsp &nbsp&nbsp &nbsp &nbsp&nbsp+ Tüm Ürünleri Göster &nbsp &nbsp&nbsp</a>
		  <a href="#invAddForm">+ Yeni Ürün Ekle &nbsp</a>
		  <a href="<?php base_url();?>home">+ Ana Sayfa &nbsp</a>
	</div>
	   
    </form>
	-->
	
	
	
 <!--Urun Arama Bitis-->

  <?php //include_once("site_footer.php"); ?>

    <div id="top-navigation" style="text-align: right;">


        <ul class="animate-me fadeInDown" style="text-align: right; padding-right: 18%;">

            <!--<li class="menu-item"><a href="faq.html"><i class="fa fa-question"></i> FAQ</a></li>
            <li class="menu-item"><a href="page.html"><i class="fa fa-link"></i> Just a link</a></li>-->

                <!-- LANGUAGES -->
            <li class="menu-item"><a href="#registration_form"><i class="fa fa-flag"></i>Yeni Ürün Ekle</a></li>
                    <li class="menu-item"><a href="logout"><i class="fa fa-sign-out"></i>Çıkış</a></li>





        </ul>

    </div>
    <!-- START MAIN CONTAINER -->
    <div class="main-container">











        <div class="container">
            <!-- SKILLS -->
            <h2 class="with-breaker animate-me fadeInUp">
                İÇERİK YÖNETİMİ<span>Bega savunma teknolojileri sanayi</span>

            </h2>

            <!--Bootstrap data table html begin-->
            <div class="container" style="text-align: left;">
                <section>


                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead class="color_header2">
                        <tr>
                            <th></th>
                            <th>Parça Numarası</th>
                            <th>NSN</th>
                            <th>Ürün Adı</th>
                            <th>Tanımlama</th>
                            <th>Düzenle</th>

                        </tr>
                        </thead>

                        <tfoot>
                        <tr class="color_header2">
                            <th></th>
                            <th>Parça Numarası</th>
                            <th>NSN</th>
                            <th>Ürün Adı</th>
                            <th>Tanımlama</th>
                            <th>Düzenle</th>

                        </tr>
                        </tfoot>

                        <tbody>

                       <?php echo $product_list; ?>

                        </tbody>
                    </table>



                </section>
            </div>


            <!--Bootstrap data table html end-->

        </div>

    </div>

    <?php $url=base_url();?>
    <div id="registration_form">
        <form action="<?php $url; ?>inventory" enctype="multipart/form-data" name="myForm" method="post">
            <fieldset>

            <table>

                <tr>
                    <td>Ürün Adı</td>
                    <td><label><input name="product_name" type="text" id="product_name" maxlength="50"/> </label></td>
                </tr>
                <tr>
                    <td>Parca Numarasi</td>
                    <td><label><input name="parca_numarasi" type="text" id="parca_numarasi" maxlength="20"/> </label></td>
                </tr>
                <tr>
                    <td>NSN Numarasi</td>
                    <td><label><input name="nsn" type="text" id="nsn" maxlength="20"/> </label></td>
                </tr>
                <tr>
                    <td>Ürün Kisa Detayı</td>
                    <td><label><textarea name="textarea1" id="textarea1" cols="70" rows="5"></textarea></label></td>
                </tr>
                <tr>
                    <td>Ürün Detayı Uzun</td>
                    <td><label><textarea name="textarea2" id="textarea2" cols="70" rows="5"></textarea></label></td>
                </tr>

                <tr>
                    <td>Ürün Resmi</td>
                    <td><label><input type="file" name="fileField" id="fileField" /></label></td>
                </tr>


                </tr>


                <tr>
                    <td>&nbsp;</td>
                    <td><label><input type="submit" name="button" id="button" value="Yeni Ürün Ekle"/></label></td>
                </tr>

            </table>
</fieldset>
        </form>
        </div>


    <p>

            <!--Product add form end-->

        </div>


        <!-- SCROLL TOP -->
        <a href="#" id="scroll-top" class="fadeInRight animate-me"><i class="fa fa-angle-double-up"></i></a>
    </div>

    <!-- SCRIPTS -->
    <script src="<?php echo $js.'plugins.js';?>"></script>
    <script type="text/javascript">
        /*TEXT TICKER (ONLY FOR HOME PAGE)*/
        $('#ticker-text').vTicker('init', {
            speed: 300,
            pause: 2000
        });
    </script>
    <script src="<?php echo $js.'custom.js';?>"></script>

</body>



</html>