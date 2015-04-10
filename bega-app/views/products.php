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

            $prdct_name_short="";
            if(25<strlen($prdct_name)){
                $prdct_name_short = substr($prdct_name, 0, 20);
                $prdct_name_short.="...";

            }else{

                $prdct_name_short =$prdct_name;
            }

            $prdct_addDate=strftime("%b %d %Y %X",strtotime($row["prdct_addDate"]));


            $product_list.='        <tr><td>
                                <div class="blog-thumbnail" style="width: 50px;">
                                    <a href="d?id='.$prdct_id.'">
                                        <img style="max-width:100%; max-height:100%;" src="'.$images.'/products/'.$prdct_id.'.jpg" alt="Thumbnail Image">
                                    </a>
                                </div>
                            </td>
                            <td>'.$part_number.'</td>
                            <td>'.$nsn_number.'</td>
                            <td>'.$prdct_name.'</td>
                            <td>'.$prdct_name_short.'</td>


                        </tr>
                        ';

        }

    }else

    {
        //Turkish manipulation
        //$product_list="you have no products listed in your store yet";
        $product_list="";

    }

}
?>
<!-- START BODY -->
<body>

<div id="page">
    <!-- START HEADER -->
    <header id="header" class="small with-separation-bottom">
        <!-- POINTER ANIMATED -->
        <canvas id="header-canvas"></canvas>

        <!-- TOP NAVIGATION -->
        <div id="top-navigation">


            <ul class="animate-me fadeInDown" data-wow-duration="1.2s">
                <li class="menu-item" style="font-size:15px; font-family:arial, helvetica, sans-serif"><i class="fa fa-home"></i><a href="./">Ana Sayfa</a> </li>
                <li class="menu-item" style="font-size:15px; font-family:arial, helvetica, sans-serif"><i class="fa fa-phone"></i> 0 (312) 426 87 87 </li>
                <li class="menu-item" style="font-size:15px; font-family: arial, helvetica, sans-serif"><i class="fa fa-fax"></i> 0 (312) 428 18 38 </li>

                <!--<li class="menu-item"><a href="faq.html"><i class="fa fa-question"></i> FAQ</a></li>
                <li class="menu-item"><a href="page.html"><i class="fa fa-link"></i> Just a link</a></li>-->
                <li class="menu-item"><span class="navigation-social">Sosyal Medya</span> <a href="#"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-twitter"></i></a> <a href="#"><i class="fa fa-youtube"></i></a></li>
                <li class="menu-item">
                    <!-- SEARCHFORM -->
                    <div id="search-container" class="animate-me fadeInDown">
                        <form role="search" method="get" action="#example" >

                        </form>
                    </div>
                    <a href="products" id="search-toggle"><i class="fa"></i></a>
                </li>
                <li class="menu-item menu-item-has-children language-switcher">
                    <!-- LANGUAGES -->
                    <a href="#"><i class="fa fa-flag"></i> Türkçe <i class="fa fa-angle-down"></i></a>
                    <ul class="sub-menu bounceInDown">
                        <li class="menu-item"><a href="#">French</a></li>
                        <li class="menu-item"><a href="#">English</a></li>
                        <li class="menu-item"><a href="#">German</a></li>
                    </ul>
                </li>


            </ul>

        </div>

        <!-- MOBILE NAVIGATION -->
        <nav id="navigation-mobile"></nav>

        <!-- MAIN MENU -->
        <nav id="navigation">
            <!-- DISPLAY MOBILE MENU -->
            <a href="#" id="show-mobile-menu"><i class="fa fa-bars"></i></a>
            <!-- CLOSE MOBILE MENU -->
            <a href="#" id="close-navigation-mobile"><i class="fa fa-long-arrow-left"></i></a>

            <ul id="left-navigation" class="animate-me fadeInLeftBig">
                <li class="menu-item menu-item-has-children">
                    <a href="about" data-description="">HAKKIMIZDA</a>

                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="#" data-description="">KABİLEYETLERİMİZ</a>
                    <ul class="sub-menu bounceInDown">
                        <li class="menu-item"><a href="products">Askeri Haberleşme Sistemleri</a></li>
                        <li class="menu-item"><a href="products">Elektro-Optik Sistemler </a></li>
                        <li class="menu-item"><a href="products">Silah Sistemleri</a></li>
                        <li class="menu-item"><a href="products">Kablo</a></li>
                        <li class="menu-item"><a href="products">Ürünler</a></li>
                    </ul>


                </li>



            </ul>
            <div  class="animate-me flipInX" data-wow-duration="3s">
                <a href="#" id="logo-navigation">
                    <span></span>
                </a>
            </div>


            <ul id="right-navigation" class="animate-me fadeInRightBig">
                <li class="menu-item menu-item-has-children"><a href="referance" data-description="">REFERANSLAR</a>
                    <ul class="sub-menu bounceInDown">
                        <!--
                        <li class="menu-item"><a href="index2.html">Deneme1</a></li>
                        <li class="menu-item"><a href="index3.html">Deneme2</a></li>
                        <li class="menu-item"><a href="index.html"><i class="fa fa-star"></i> Deneme3 </a></li>
                    -->
                    </ul>
                </li>
                <li class="menu-item"><a href="contact" data-description="">İLETİŞİM</a></li>

            </ul>
            <!--
                        <ul>
                            <form id="contact-form" method="post" action="contact_processing.php" class="form-horizontal"  style="min-width:200px; margin:0 auto; margin-top:25%;">
                                <!-- NAME
                                <div class="control-group row"  style="width:500px; margin: 0 auto; position:relative;">

                                    <div class="controls col-md-9" style="position:relative; float:left;">
                                        <input id="contact-name" name="contact-name" type="text" placeholder="Stok No veya Parca No. ..." class="input-xlarge form-control" required="">
                                    </div>

                                    <div class="">
                                        <input type="hidden" name="submitted" id="submitted" value="true" />
                                        <button type="submit" class="btn btn-default" name="submitted"><i class="fa fa-search"></i> ARA</button>
                                    </div>
                                </div>
                            </form>

                        </ul>-->
        </nav>

        <!-- SHADOW -->
        <div id="shade"></div>

        <!-- HEADER SLIDER -->
        <div class="flexslider" id="header-slider">
            <ul class="slides">
                <li><img src="<?php echo $images."backgrounds/bgturk.jpg";?>" alt="SLider Image"></li>
            </ul>
        </div>

    </header>
    <!-- END HEADER -->

    <!-- START MAIN CONTAINER -->
    <div style="height: 25px;"></div>
    <div class="main-container">
        <div class="container">
            <!-- SKILLS -->
            <h2 class="with-breaker animate-me fadeInUp">
                <span>Bega savunma teknolojileri sanayi ürünler</span>

            </h2>

            <!--Bootstrap data table html begin-->
            <div class="container2">
                <section>


                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead class="color_header">
                        <tr>
                            <th></th>
                            <th>Parça Numarası</th>
                            <th>NSN</th>
                            <th>Ürün Adı</th>
                            <th>Tanımlama</th>

                        </tr>
                        </thead>

                        <tfoot>
                        <tr  class="color_header">
                            <th></th>
                            <th>Parça Numarası</th>
                            <th>NSN</th>
                            <th>Ürün Adı</th>
                            <th>Tanımlama</th>

                        </tr>
                        </tfoot>

                        <tbody>
                        <?php echo $product_list; ?>

                        </tbody>
                    </table>
                </section>
            </div>

            <!--Bootstrap data table html end-->

            <table id="skills-container" class="skills">
                <tr class="skills-row">
                    <td class="skill animate-me zoomIn">
                        <h4><i class="fa fa-phone-square"></i>Telefon</h4>
                        <p style="font-family: arial, helvetica, sans-serif">TEL: 0 (312) 426 87 87
                        </p>
                        <p style="font-family: arial, helvetica, sans-serif"> FAX: 0 (312) 428 18 38</p>
                    </td>
                    <td class="skill animate-me zoomIn">
                        <h4><i class="fa fa-envelope"></i>E-mail</h4>
                        <p>bozcan@begasavunma.com</p>
                    </td>
                    <td class="skill animate-me zoomIn">
                        <h4><i class="fa fa-location-arrow"></i>Adres</h4>
                        <p style="font-family: arial, helvetica, sans-serif">MELİH GÖKÇEK BULVARI EMİNEL İŞ MERKEZİ NO:18/123
                            İVEDİK OSB YENİMAHALLE/ANKARA TÜRKİYE</p>
                    </td>
                </tr>

            </table>

        </div>

        <!-- CUSTOM CONTAINER -->

    </div>
    <!-- END MAIN CONTAINER -->


