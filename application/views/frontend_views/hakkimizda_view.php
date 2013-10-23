
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
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript">
  Cufon.replace('h1, h2', { fontFamily: 'Anivers' });
</script>


<title>Hakkımızda</title>
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
            <h1>Hakkımızda</h1>
            <p>
        guncelleniyor...
            </p>        
    </div>
        <div class="header-contact">
          <div class="hc-content">
                <h2><a href="iletisim">İletişim</a></h2>
                <p class="contact-tagline" style="color:white;">iletişim bilgilerimiz</p>
            </div>
            <img src="images/contact_icon.png" alt="" class="hc-icon" />
        </div>
    </div>
</div>

<div id="content-wrapper">
  <div id="content">

        <div id="inner-content" class="paragraph-adjust">
        <h2 class="kirmizi">Hakkımızda</h2>
            {about_iteration}
                {about_text_detail}
            {/about_iteration}              
        </div>     
        <!-- if you plan on using a left aligned sidebar put the sidebar div just before inner-content 
        div and have a look in general.css to move a margin property from #inner-content to #sidebar -->                                  
        <div id="sidebar">

            <div class="box">
              <h2 style="color: #993333;">Referanslar</h2>
                <div class="box-top"></div>
                <div class="box-middle">
                    <ul class="ln-list">
                        <li>
                            <div class="ln-calendar"></div>
                            <div class="ln-txt">
                              <p><a href="#" class="ln-link">Mesa-Aktürk Parkoran Projesi </a></p>
                                <span class="ln-date">Ahşap Kapı, Süpürgelik, vestiyer, Çamaşır dolabı, banyo dolabı ve ortak alan ahşap pergoleleri imalatı</span>
                            </div>            
                        </li>    
                        <li>
                            <div class="ln-calendar"></div>
                            <div class="ln-txt">
                              <p><a href="#" class="ln-link">Aktürk Yapı Rapsodi Evleri</a></p>
                                <span class="ln-date">Ahşap Doğrama, Kapı, vestiyer,banyo dolabı ve ahşap pergole imalat ve montajı</span>
                            </div>           
                        </li>   
                        <li>
                            <div class="ln-calendar"></div>
                            <div class="ln-txt">
                              <p><a href="#" class="ln-link">Ecetur Blue Waters Oteli </a></p>
                                <span class="ln-date">Otele ait açık restoran ve bar pergole taşıyı sistemleri imalat ve montajı</span>
                            </div>           
                        </li>  
                        <li>
                            <div class="ln-calendar"></div>
                            <div class="ln-txt">
                              <p><a href="#" class="ln-link">Barmek Angora Evleri</a></p>
                                <span class="ln-date">Ahşap Doğrama Üretim ve Montajı</span>
                            </div>           
                        </li>
                        <li>
                            <div class="ln-calendar"></div>
                            <div class="ln-txt">
                                <p><a href="{base}referanslar" class="ln-link">Tüm referanslarımız için tıklayın</a></p>
                            </div>           
                        </li>                                                                                   
                    </ul>
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

