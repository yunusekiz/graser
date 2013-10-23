 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/index.css" type="text/css" rel="stylesheet" />
<!--[if IE 6]>
<script type="text/javascript" src="js/dd_belated_png.js"></script>
<script>DD_belatedPNG.fix('#logo a, .box-top, .box-bottom, .form-button, .form-button span, .pdf-icon, .header-contact, .rss a img');</script>  
    
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/Anivers_400.font.js"></script>
<script type="text/javascript" src="js/jqueryslidemenu.js"></script>
<script type="text/javascript" src="js/jquery.cycle.js"></script>
<script type="text/javascript" src="js/slimbox2.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>  
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
    Cufon.replace('h1, h2', { fontFamily: 'Anivers' });
    $(document).ready(function(){  
         $("#contactform").validate();  
    });         
</script>


<title>{title}</title>
</head>

<body>
<div id="top">
    <div id="logo"><a href="{base}">Metosan</a></div>
    
<!--     <div id="search">
        <form action="#" method="post">
            <fieldset>
                <div class="search-input-bg">
                    <input type="text" class="search-input" value="search" name="search" 
                    onfocus="if(this.value=='search') {this.value='';}" onblur="if(this.value=='') {this.value='search'}" />
                </div>
                <div class="form-button"><span><input type="submit" value="GO" name="go" /></span></div>          
            </fieldset>
        </form>     
    </div> -->
    <div id="myslidemenu" class="jqueryslidemenu">
        <ul class="primary-menu">
            <li><a href="{base}">Anasayfa</a></li>
            <li><a href="{base}hakkimizda">Kurumsal</a>
                <ul>
                    <li><a href="{base}hakkimizda">Hakkımızda</a></li>  

                </ul>                
            </li>
            <li><a href="{base}uygulamalar">Uygulamalar</a>
                <ul>
                    <li><a href="{base}uygulamalar/ahsap_kapi_sistemleri">Ahşap Kapı Sistemleri</a></li>
                    <li><a href="{base}uygulamalar/ahsap_dolap_sistemleri">Ahşap Dolap Sistemleri</a></li> 
                    <li><a href="{base}uygulamalar/ahsap_dekorasyon_urunleri">Ahşap Dekorasyon Ürünleri</a></li>
                    <li><a href="{base}uygulamalar/ahsap_montaj">Ahşap Ürün Montajı</a></li>                  
                    <li><a href="{base}uygulamalar/ahsap_dis_mekan_urunleri">Ahşap Dış Mekan Ürünleri</a></li>
                    <li><a href="{base}uygulamalar/ahsap_ev">Ahşap Ev </a></li>
                </ul>
            </li>
            <li><a href="{base}projeler">Projeler </a>
                <ul>
                    <li><a href="{base}projeler/konut">Konut</a></li>
                    <li><a href="{base}projeler/taahhut">Taahhüt Projeleri</a></li> 
                </ul>
            </li>
            <li><a href="{base}is_guvenligi">İş Sağlığı & Güvenliği </a></li>
            <li><a href="{base}iletisim">İletişim</a></li>
        </ul>
    </div>
</div>

<div id="header-wrapper">
    <div id="header">
        <div class="header-intro">
            <h1>İletişim</h1>
            <p>
                guncelleniyor
            </p>        
        </div>
<!--         <div class="header-contact">
            <div class="hc-content">
                <h2><a href="contact.html">Contact Us</a></h2>
                <p class="contact-tagline">Don't hesitate to send us a message!</p>
            </div>
            <img src="images/contact_icon.png" alt="" class="hc-icon" />
        </div> -->
    </div>
</div>

<div id="content-wrapper">
    <div id="content">

        <div id="inner-content">
<!--             <p>
                Proin volutpat, justo in tempus rutrum, nulla nunc cursus ipsum, in ornare nunc diam ac sapien. Sed convallis velit sem, ac commodo nulla.             
            </p>
            <p>
                Allamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in anim id est laborum.            
            </p> -->
                         
              
            
            <form action="iletisim/mesaj" method="post" id="contactform"><!-- Contact form -->
                <fieldset class="contact-fieldset">
                    <h2 style="color:#993333;">Mesaj Kutusu</h2>
                    <ul>
                        <li>
                            <label for="contactname">İsim, Soyisim:</label>
                            <div class="ctinput-bg"><input type="text" name="name" id="contactname" value="" class="contact-input required" /></div>
                        </li>
                        <li>
                            <label for="email">Eposta:</label>
                            <div class="ctinput-bg"><input type="text" id="email" name="email" class="contact-input required email" /></div>
                        </li>     
                        <li>
                            <label for="subject">Konu:</label>
                            <div class="ctinput-bg"><input type="text" name="subject" id="subject" class="contact-input required" /></div>
                        </li>
                        <li>
                            <label for="message">Mesaj:</label>
                            <div class="cttxtarea-bg"><textarea rows="6" cols="40" id="message" name="message" class="contact-textarea required"></textarea></div>
                        </li>
                        <li>
                            <div class="form-button contact-submit">
                                <span><input type="submit" value="&nbsp;&nbsp;Gönder&nbsp;&nbsp;" name="submit" /></span>
                            </div>
                        </li>                      
                    </ul>
                </fieldset>
            </form>
                                    
        </div>     
        <!-- if you plan on using a left aligned sidebar put the sidebar div just before inner-content 
        div and have a look in general.css to move a margin property from #inner-content to #sidebar -->                                  
        <div id="sidebar">
            
            <div class="map-box">
                <h2 class="kirmizi">Harita</h2>   
                <a href="images/map_big.jpg" rel="lightbox" title="Metosan"><img src="images/map_small.jpg" alt="" class="map-img" /></a>
                <!-- <span class="map-txt">Click on the map to view a larger image.</span> -->
            </div>       

            <div class="box">
                <h2 class="kirmizi">İletişim bilgilerimiz</h2>            
                <div class="box-top"></div>
                <div class="box-middle">
                    <div class="box-content">
                        <ul class="hq-address">
                        {contact_iteration}
                            <li>
                                <strong>Merkez Ofis:</strong><br/>
                                Metosan Mobilya, Dekorasyon, Tekstil, Orman Ürünleri, İnşaat Taahhüt San. Ve Tic. Ltd. Şti.
                                <br/>
                            </li>
                            <li>
                                <strong>Adres :</strong> {address}
                            </li>
                            <li>
                                <strong>Telefon:</strong> {phone}<br />
                                <strong>Faks:</strong> {fax}
                            </li>
                            <li>
                                Eposta: <a href="mailto:info@innovaconstruct.com">{email}</a>
                            </li>
                        {/contact_iteration}                                                        
                        </ul>               
                    </div>
                </div>
                <div class="box-bottom"></div>                                
            </div> 
        
        </div>
        
        <div id="footer">
            <ul id="footer-menu">
                <li><a href="{base}">Anasayfa</a></li>  
                <li><a href="{base}hakkimizda">Hakkımızda</a></li>
                <li><a href="{base}uygulamalar">Uygulamalar</a></li> 
                <li><a href="{base}projeler">Projeler</a></li>  
                <li><a href="{base}referanslar">Referanslar</a></li>
                <li><a href="{base}is_guvenligi">İş Sağlığı & Güvenliği</a></li>
                <li><a href="{base}iletisim">İletişim</a></li>                     
            </ul>
            <div class="footer-copyright"><a href="http://www.masalhane.com">Masalhane Tasarım</a></div>
        
        </div>
        
    </div>

</div>
<div><img src="images/metosan_bant.png" class="bant"> </div>
</body>

</html>
