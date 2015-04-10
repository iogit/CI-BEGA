<!-- START FOOTER -->
<footer id="footer" class="with-separation-top">
    <aside id="widgets" class="container">
        <div class="row">
            <!-- WIDGET -->
            <div class="col-md-4 widget animate-me fadeInLeft">
                <img src="<?php echo $images."logo-header.png";?>" id="footer-logo" alt="Logo footer">

            </div>
            <!-- WIDGET -->
            <div class="col-md-4 widget animate-me fadeInUp">
                <h4>SİTE HARİTASI</h4>
                <ul>
                    <li><a href="index">Ana Sayfa</a></li>
                    <li><a href="portfolio">Hakkımızda</a></li>
                    <li><a href="referance">Referanslar</a></li>
                    <li><a href="contact">İletişim</a></li>
                </ul>
            </div>
            <!-- WIDGET -->
            <div class="col-md-4 widget animate-me fadeInRight">
                <h4>İLETİŞİM</h4>
                <ul class="contact-informations">
                    <p style="font-family: arial, helvetica, sans-serif">MELİH GÖKÇEK BULVARI EMİNEL İŞ MERKEZİ NO:18/123
                            İVEDİK OSB YENİMAHALLE/ANKARA TÜRKİYE</p>
                    <li class="contact-phone"> 0 (312) 426 87 87</li>
                    <li class="contact-phone"> 0 (312) 428 18 38</li>
                </ul>
                <ul class="widget-social">
                    <!-- ALL ICONS AVAILABLE ->http://fortawesome.github.io/Font-Awesome/icons/#brand-->
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-skype"></i></a></li>
                    <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
            </div>
        </div>
    </aside>
    <div id="copyright" class="animate-me fadeInUp">
        <div class="container">
            <p>&#169; 2015 Bega Savunma Teknolojileri Sanayi .</p>
            <ul id="footer-navigation">
                <li> Yazılım</li>
                <li><a href="#" style="font-size: 12px; color: #a94442; text-transform: none;"> oraklius@gmail.com </a></li>


            </ul>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

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
<!-- END BODY -->
</html>