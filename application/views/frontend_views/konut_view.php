<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="{base}css/index.css" type="text/css" rel="stylesheet" />
<!--[if IE 6]>
<script type="text/javascript" src="js/dd_belated_png.js"></script>
<script>DD_belatedPNG.fix('#logo a, .box-top, .box-bottom, .form-button, .form-button span, .pdf-icon, .header-contact, .rss a img');</script>  
    
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->

<script type="text/javascript" src="{base}js/jquery-1.3.2.min.js"></script>
<script type="text/javascript" src="{base}js/cufon-yui.js"></script>
<script type="text/javascript" src="{base}js/Anivers_400.font.js"></script>
<script type="text/javascript" src="{base}js/jqueryslidemenu.js"></script>
<script type="text/javascript" src="{base}js/jquery.cycle.js"></script>
<script type="text/javascript" src="{base}js/slimbox2.js"></script>
<script type="text/javascript" src="{base}js/custom.js"></script>
<script type="text/javascript">
    Cufon.replace('h1, h2', { fontFamily: 'Anivers' });
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
            <h1>Projeler - Konut </h1>
            <p>
                Konut projelerimiz
            </p>
            <!-- <div class="rss"><a href="#"><img src="images/rss_16.png" alt="" /></a></div>   -->          
        </div>
        <div class="header-contact">
            <div class="hc-content">
                <h2><a href="{base}iletisim">İletişim</a></h2>
                <p class="contact-tagline"  style="color:white;">irtibat bilgilerimiz</p>
            </div>
            <img src="{base}images/contact_icon.png" alt="" class="hc-icon" />
        </div>
    </div>
</div>

<div id="content-wrapper">
    <div id="content">

        <div id="inner-content">
            <h3>Ankara Mamak bölgesinde yer alan kendi arsaları üzerinde konut projeleri üretim ve satışı devam etmektedir.</h3>
            <br/><br/>
            <ul class="project-block">
                {konut_iteration_1} 
                <li><br/>

                    <h3 class="kirmizi">{project_title}</h3>
                    <div class="slide-control"><a href="#" class="strigger-{project_css} sc-arrow">Detay</a></div>
                    <div class="spanel-{project_css} scontent">
                        <div class="scontent-box">&nbsp;
                            <a href="{base}{project_big_photo}" rel="lightbox" title="{project_title}">
                                <img src="{base}{project_thumb_photo}" alt="" />    
                            </a>
                             <p>
                                Tarih : {project_date}
                            </p>                                            
                            <p>
                                {project_detail}
                            </p>  
                        </div>
                    </div>
                    <div class="sline"></div><br/>
                    
                </li>
                {/konut_iteration_1}

            </ul>
        </div>     
        <!-- if you plan on using a left aligned sidebar put the sidebar div just before inner-content 
        div and have a look in general.css to move a margin property from #inner-content to #sidebar -->                                  
        <div id="sidebar">
 
             <div class="box">
                <h2 class="kirmizi">Projelerimiz</h2>            
                <div class="box-top"></div>
                <div class="box-middle">
                    <ul class="box-list">
                        <li class="bl-active"><a href="{base}projeler/konut">Konut</a></li>
                        <li><a href="{base}projeler/taahhut">Taahhüt</a></li>                                             
                    </ul>                   
                </div>
                <div class="box-bottom"></div>                                
            </div>    
            
            <div class="box">
                <h2 class="kirmizi">Hakkımızda</h2>            
                <div class="box-top"></div>
                <div class="box-middle">
                    <div class="box-content">
                        <p>
                           Metosan İnşaat ve Mobilya ltd.Şti. 1998 yılında Ankara’ da kurulmuştur. Konusunda uzman kadrosuyla kalite, güven ve istikrar anlayışı felsefesinde çalışmakta olan firmamız , Konut ve Taahhüt içeren İnşaat projeleri, Ahşap Ev , Ahşap Kapı ve dolap ile Ahşap dekorasyon ve Dış mekan mobilyaları üretim ve montajı konularında faaliyet göstermektedir. Ayrıca Metosan şemsiyesi altında bulundurduğu farklı sektörlerden gelen çözüm ortakları ile çok geniş bir müşteri yelpazesine hizmet edebilmektedir.
                        </p>

                        <a href="{base}hakkimizda" class="button"><span>devamı</span></a>                  
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
<div><img src="{base}images/metosan_bant.png" class="bant"> </div>
<script type="text/javascript">
$(document).ready(function(){
    
{konut_iteration_2}        
    $(".strigger-{project_css}").click(function(){
        $(".spanel-{project_css}").slideToggle("slow");
        $(this).toggleClass("active"); return false;
    });
{/konut_iteration_2}

});
</script>
</body>
</html>
