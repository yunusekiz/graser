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


<title>{title}</title>
</head>

<body>
<div id="top">
	<div id="logo"><a href="{base}">Metosan</a></div>
    
    
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
            <h1>Referanslar</h1>
            <p>
 				Referanslarımız güncelleniyor...
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
    	<div class="full-width">         
            {ref_iteration}
                {ref_detail}
            {/ref_iteration}                    
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
    <div><img src="images/metosan_bant.png" class="bant"> </div>
<script type="text/javascript">Cufon.now();</script>
</body>

</html>
