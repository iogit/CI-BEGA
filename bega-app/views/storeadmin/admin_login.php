<?php 
session_start();
if(isset($_SESSION["manager"])){
	
redirect('httpdocs/intro');

exit();	
	}
?>
        
<?php
		
		
		if(isset($_POST["password"])&& isset($_POST["username"]))
		{ 
		
		
	    $manager = preg_replace('#[^A-Za-z0-9]#i','',$_POST["username"]);
	$password = preg_replace('#[^A-Za-z0-9]#i','',$_POST["password"]);
	
	
	//include "../storescripts/connect_to_mysql.php";
	
	$sql=mysql_query("SELECT admn_id FROM admn_tbl WHERE admn_usrName='$manager' AND admn_psswrd='$password' LIMIT 1");
	
	
	$existCount=mysql_num_rows($sql);
	
	if($existCount==1){
	
	while($row=mysql_fetch_array($sql)){
	$id=$row["admn_id"];
	}
	$_SESSION["id"]=$id;
	$_SESSION["manager"]=$manager;
	$_SESSION["password"]=$password;
	redirect("httpdocs/intro");
	exit();
	}else
	{
	$url=base_url();
		echo 'Sifre Yanlis, tekrar dene <a href="intro"> Sifre Ekrani </a>';
		exit();
		
		}}
	
?>

<?php
$css= base_url().'httpdocs/assets/css/';

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin yonetimi </title>


<link rel="stylesheet" type="text/css" media="screen" href="../style/style.css">
    <link href="<?php echo $css.'style.css'; ?>" rel="stylesheet" media="screen">
    <link href="<?php echo $css.'form.css'; ?>" rel="stylesheet" media="screen">
</head>

<body>


<div align="center" id="mainWrapper">

 

<?php //include_once("site_header.php");
$url=base_url();

 ?>
<!--
   <div id="login_form_left">Admin Giris</div>
  
    <div id="login_form_left" align="center" style="margin-left:25px;">
      <p>Kullanici Adi:</p>
      <form id="form1" name="form1" method="post" action="master">
        <p>
       
          <input type="text" name="username" id="username" size="40"/>
        </p>
        <p>Sifre</p>
        <p>
         
          <input type="password" name="password" id="password" size="40" />
        </p>
        <p>
          <input type="submit" name="button" id="button" value="Giris" />
        </p>
      </form>
      <p>&nbsp;</p>
</div>
-->

    <div id="login_form" style="">


        <form id="form1" name="form1" method="post" action="master">
        <fieldset style="width: 50%;"><legend>Admin girişi</legend>
       <!-- <div class="signin-signin">ÜYE GİRİŞİ</div> -->
        <ul style="list-style: none">

            <li>
                <label for="username">Kullanıcı Adı veya E-posta Adresi</label>
                <div>
                    <input type="text" name="username" id="username" size="40" style="padding: 5px;"/>
                </div>
            </li>

            <li>
                <label for="password"><span class="form-label">Şifre</span></label>
                <div>
                    <input type="password" name="password" id="password" size="40" style="padding: 5px;"/>
                </div>



            </li>

            <li>




                <div class="sign-security">
                    Güvenliğiniz için,işlem sonrası çıkış yapmayı unutmayınız.
                </div>
            </li>
            <li>

                <div>


                    <input type="submit" name="button" id="button" value="Giris" />


                </div>
            </li>


        </ul>

        </fieldset>

</form>
    </div>


  
</body>
</html>