<style>

    .img_skill
    {

        width:100px;
    }

    </style>


<!-- START BODY -->
<body>

<!-- LOADER DIV - ONLY HOME -->
<div id="loader">


    <div id="loading-logo"></div>

</div>



<div id="page">

    <!-- START HEADER -->
    <header id="header" class="big with-separation-bottom">

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

        <!-- TEXT SLIDER -->
        <div id="ticker" class="animate-me zoomIn">


        </div>

        <!-- SCROLL BOTTOM -->
        <div id="scroll-bottom" class="animate-me fadeInUpBig">
            <a href="#"><i class="fa fa-angle-double-down"></i></a>
        </div>

        <!-- SHADOW-->

        <div id="shade"></div>



        <!-- SLIDER NAVIGATION (DELETE IF YOU DON'T USE THE SLIDER) -->
        <div class="navigation-slider-container">
            <a href="#" id="sliderPrev"><i class="fa fa-arrow-left"></i></a>
            <a href="#" id="sliderNext"><i class="fa fa-arrow-right"></i></a>
        </div>

        <!-- HEADER SLIDER -->
        <div class="flexslider" id="header-slider" style="height: 1000px;">

            <ul class="slides">

                <li><img src="<?php echo $images."backgrounds/bg1.jpg"; ?>" alt="SLider Image"></li>
                <li><img src="<?php echo $images."backgrounds/bg2.jpg"; ?>" alt="SLider Image"></li>
                <li><img src="<?php echo $images."backgrounds/bg3.jpg"; ?>" alt="SLider Image"></li>
            </ul>
        </div>
        <!-- OR VIDEO -> https://github.com/VodkaBears/Vide -->
        <!--<div id="header-video"
          data-vide-bg="ogv: images/video/video, webm: images/video/video, poster: images/video/poster" data-vide-options="posterType: jpg, loop: true, muted: true, position: 50% 50%">
      </div>-->

    </header>
    <!-- END HEADER -->
 <!--   <div style="filter:alpha(opacity=50); opacity:0.5; width:50%; margin:0 auto; margin-top:-200px; height:100px; background-color:#000000; color:white; position: relative;">
-->


    <!-- START MAIN CONTAINER -->
    <div id="search_start" class="main-container">
        <div class="container">
            <!-- SKILLS -->
            <h2 class="with-breaker animate-me fadeInUp">
                <span>Bega savunma teknolojileri sanayi</span>

            </h2>

            <!--Bootstrap data table html begin-->
            <div class="container2">
              <section>


                  <table id="skills-container" class="skills">
                      <tr class="skills-row">
                          <td class="skill animate-me zoomIn">


                              <a href="products">         <img class="img_skill" src="<?php echo $images."backgrounds/tele.jpg";?>" style=" height: auto;"/></a>
                              <h4 style="text-transform: none; font-size: 14px;" ><i class=""></i>Askeri Haberleşme Sistemleri</h4>
                          </td>
                          <td class="skill animate-me zoomIn">

                              <a href="products">      <img class="img_skill" src="<?php echo $images."backgrounds/eos.jpg";?>" style=" height: auto;"/></a>
                              <h4 style="text-transform: none; font-size: 14px;" ></i>Elektro-Optik Sistemler</h4>

                          </td>
                          <td class="skill animate-me zoomIn">

                              <a href="products">       <img class="img_skill" src="<?php echo $images."backgrounds/ws.jpg";?>" style=" height: auto;"/></a>
                              <h4 style="text-transform: none; font-size: 14px;" ><i class=""></i>Silah Sistemleri</h4>

                          </td>
                          <td class="skill animate-me zoomIn">

                              <a href="products">   <img class="img_skill" src="<?php echo $images."backgrounds/cable.jpg";?>" style=" height: auto;"/></a>
                              <h4 style="text-transform: none; font-size: 14px;" ><i class=""></i>Kablo</h4>

                          </td>
                      </tr>

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


        <!-- SCROLL TOP -->
        <a href="#" id="scroll-top" class="fadeInRight animate-me"><i class="fa fa-angle-double-up"></i></a>
    </div>