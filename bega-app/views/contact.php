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
                <li><img src="<?php echo $images."backgrounds/space.jpg";?>" alt="SLider Image"></li>
            </ul>
        </div>

    </header>
    <!-- END HEADER -->

    <!-- START MAIN CONTAINER -->
    <div style="height: 25px;"></div>
    <div class="main-container">
        <div id="contact-container" class="container">
            <!-- S -->
            <h2 class="with-breaker animate-me fadeInUp">
                İLETİŞİM <span>BEGA Savunma</span>
            </h2>
            <p class="center">
                <!--Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vitae dictum ex. Donec nec efficitur ligula. Nullam placerat et erat at ullamcorper. <span class="surline">Fusce quam elit</span>, posuere sit amet libero ut, aliquam vestibulum tellus. Praesent vehicula viverra nisl, nec tristique tellus posuere ac. Praesent eu viverra ligula. Mauris nec pellentesque nisi.</p>
            -->
            <div class="row">
                <div class="col-md-6">
                    <!-- Google Map -->
                    <div id="GoogleMap"></div>

                    <ul class="contact-informations">
                        <p style="font-family: arial, helvetica, sans-serif">MELİH GÖKÇEK BULVARI EMİNEL İŞ MERKEZİ NO:18/123
                            İVEDİK OSB YENİMAHALLE/ANKARA TÜRKİYE</p>
                        <li class="contact-phone" style="list-style: none"> TEL: 0 (312) 426 87 87</li>
                        <li class="contact-phone" style="list-style: none"> FAX: 0 (312) 428 18 38</li>
                    </ul>
                </div>

                <div class="col-md-6">
                    <!-- FORMS -->
                    <form id="contact-form" method="post" action="user-email/user-email.php" class="form-horizontal">
                        <!-- NAME -->
                        <div class="control-group row">
                            <label class="control-label col-md-3" for="contact-name">İSİM</label>
                            <div class="controls col-md-9">
                                <input id="contact-name" name="contact-name" type="text" placeholder="" class="input-xlarge form-control" required="">
                            </div>
                        </div>
                        <!-- EMAIL -->
                        <div class="control-group row">
                            <label class="control-label col-md-3" for="contact-email">Email</label>
                            <div class="controls col-md-9">
                                <input id="contact-email" name="contact-email" type="text" placeholder="" class="input-xlarge form-control" required="">
                            </div>
                        </div>
                        <!-- TOPIC -->
                        <div class="control-group row">
                            <label class="control-label col-md-3" for="contact-topic">KONU</label>
                            <div class="controls col-md-9">
                                <select id="contact-topic" name="contact-topic" class="input-xlarge form-control">
                                    <option>Konu Başlığı Seçiniz</option>
                                    <option selected="selected">Bilgi Alma</option>
                                    <option>Şikayet</option>
                                    <option>Destek</option>
                                    <option>Diğer</option>
                                </select>
                            </div>
                        </div>
                        <!-- MESSAGE -->
                        <div class="control-group row">
                            <label class="control-label col-md-3" for="contact-message">Mesaj</label>
                            <div class="controls col-md-9">
                                <textarea id="contact-message" name="contact-message" class="form-control" rows="5"> </textarea>
                            </div>
                        </div>
                        <!-- CAPTCHA
                        <div class="control-group row">
                            <label class="control-label col-md-3">Captcha</label>
                            <div class="controls col-md-9">
                                <input type="text" name="captcha_code" class="form-control" size="10" maxlength="6" />
                                <a href="#" onclick="document.getElementById('captcha').src = '/securimage/securimage_show.php?' + Math.random(); return false">
                                    <img id="captcha" src="/securimage/securimage_show.php" alt="CAPTCHA Image" />
                                </a>
                            </div>
                        </div>-->
                        <!-- BUTTON -->
                        <div class="control-group text-right">
                            <input type="hidden" name="submitted" id="submitted" value="true" />
                            <button type="submit" class="btn btn-default" name="submitted"><i class="fa fa-paper-plane-o"></i> Gönder</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- CUSTOM CONTAINER -->

    </div>

    <!-- END FOOTER -->

    <!-- SCROLL TOP -->
    <a href="#" id="scroll-top" class="fadeInRight animate-me"><i class="fa fa-angle-double-up"></i></a>
</div>

<!-- SCRIPTS -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- ONLY FOR THE CONTACT PAGE : MAP SCRIPT -->
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
    function initialize() {
        var myLatlng = new google.maps.LatLng(40.000373, 32.772419); //http://itouchmap.com/latlong.html
        var mapOptions = {
            zoom: 15,
            center: myLatlng
        }
        var map = new google.maps.Map(document.getElementById('GoogleMap'), mapOptions);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map,
            title: 'Hello World!'
        });
    }

    google.maps.event.addDomListener(window, 'load', initialize);

</script>