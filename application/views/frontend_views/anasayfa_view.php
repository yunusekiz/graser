
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Başlık</title>
        <link href="{base}css/style.css" rel="stylesheet" type="text/css" media="all" />
        
        <!-- nivo slider themes -->
        <link rel="stylesheet" href="{base}nivo-slider/themes/default/default.css" type="text/css" media="screen" />
<!--        <link rel="stylesheet" href="nivo-slider/themes/light/light.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="nivo-slider/themes/dark/dark.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="nivo-slider/themes/bar/bar.css" type="text/css" media="screen" /> -->
        <link rel="stylesheet" href="{base}nivo-slider/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="{base}nivo-slider/demo/style.css" type="text/css" media="screen" />
        <!-- nivo slider themes -->


    </head>
    <body><div id="anasayfa-bg">
    <div class="ortala">
        <div class="sol-menu">
        
        </div>
        <div class="sag-icerik">        
            <div id="header">
                <div id="logo">
                    <h1><a href="index.html">GRASEL</a></h1>
                </div>
                <div id="menu">
                    <ul>
                        <li><a href="{base}index.html" class="aktif">ANASAYFA</a></li>
                        <li><a href="{base}urunler.html">ÜRÜNLER</a></li>
                        <li><a href="{base}galeri.html">GALERİ</a></li>
                        <li><a href="{base}kurumsal.html">KURUMSAL</a></li>
                        <li><a href="{base}iletisim.html">İLETİŞİM</a></li>
                    </ul>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- slider resmin kodu body tagının yanındaki <div id='anasayfa-bg'> divinin içinde, arkaplan olarak atadım !-->
        <div class="slider-wrapper theme-default" style="margin-bottom:50px;">      
            <div id="slider" class="nivoSlider" style="margin-left:-250px;width:906px;margin-top:-38px;">
                {slider_iteration}
                <img src="{slider_big_photo}"  alt=""data-transition="boxRainGrowReverse" />
                {/slider_iteration}
            </div>
        </div>  
            <div id="alt-dortlu">
                <ul>
                    <li><a href=""><img src="img/anasayfa-img1.jpg" alt="" />DOĞAL TAŞ VE<br />CAM <span>NATUREL STONE&#38;GlASS</span></a></li>
                    <li><a href=""><img src="img/anasayfa-img2.jpg" alt="" />DİJİTAL CAM KADRO<br />VE PANOLAR<span>DİJİTAL GLASS TILES AND PANEL</span></a></li>
                    <li><a href=""><img src="img/anasayfa-img3.jpg" alt="" />DOĞAL <br /> TAŞLAR<span>NATUREL STONES</span></a></li>
                    <li><a href=""><img src="img/anasayfa-img4.jpg" alt="" />FÜZYON <br /> CAM <span>FUSION GlASS</span></a></li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="clearfix"></div>
    <div id="footer">
        <div class="ortala">
            <div class="sol-menu"></div>
            <div class="sag-icerik">
                <div id="iletisim-bilgileri">
                    {iletisim_iteration}
                        <div id="address">{address}</div>
                    <p>
                        Tel&nbsp;&nbsp;&nbsp;&nbsp;: {phone}<br />
                        Faks&nbsp;&nbsp;: {fax}
                    </p>
                    {/iletisim_iteration}
                </div>
                <div id="copyright">
                    <p>Copyright © 2013 Graser All Rights Reserved.</p>
                </div>
            </div>
        <div class="clearfix"></div>
        </div>
    </div></div>
    <script type="text/javascript" src="{base}nivo-slider/demo/scripts/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="{base}nivo-slider/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>   
    </body>
</html>