<?php

/* backend_views/admin_main_view.php */
class __TwigTemplate_b68c076c039aaf631114802ac1020bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"body-wrapper\" > <!-- Wrapper for the radial gradient background -->
\t\t
\t\t<div id=\"sidebar\"><div id=\"sidebar-wrapper\"> <!-- Sidebar with logo and menu -->
\t\t\t
\t\t\t<h1 id=\"sidebar-title\"><a href=\"#\">Admin Template</a></h1>
\t\t  
\t\t\t<!-- Logo (221px wide) -->
\t\t\t<a href=\"{base}backend/home\"><img id=\"logo\" src=\"{base}assets/backend_assets/images/logo.png\" alt=\"Simpla Admin logo\" /></a>
\t\t  
\t\t\t<!-- Sidebar Profile links -->
\t\t\t<div id=\"profile-links\">

\t\t\t\t<br />
\t\t\t\t<a href=\"{base}backend/pass/changePass\" title=\"Şifremi Değiştir\" style=\"color:#9F6\">Şifremi Değiştir</a> |
                <a href=\"#\" title=\"Oturumu Kapat\" style=\"color:#F00\" data-reveal-id=\"myModal\">Oturumu Kapat</a>
\t\t\t</div>        
\t\t\t
\t\t\t<ul id=\"main-nav\">  <!-- Accordion Menu -->
\t\t\t\t
\t\t\t\t<li>
\t\t\t\t\t<a href=\"#\" class=\"nav-top-item {slider_current_nav}\">
\t\t\t\t\t\tSlider
\t\t\t\t\t</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"{base}backend/slider/addItemForm\" class=\"{big_slider_current}\">Yeni Kayıt Ekle</a></li>
\t\t\t\t\t\t<li><a href=\"{base}backend/slider/allItems\" class=\"{big_slider_current}\">Kayıtları Düzenle/Sil</a></li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t</ul>

\t\t\t\t</li>
\t\t\t\t<li> 
\t\t\t\t\t<a href=\"#\" class=\"nav-top-item {ref_current_nav}\"> <!-- Add the class \"current\" to current menu item -->
\t\t\t\t\tMarkalar
\t\t\t\t\t</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"{base}backend/brand/addItemForm\" class=\"{add_ref_current}\">Yeni Kayıt Ekle</a></li>
\t\t\t\t\t\t<li><a href=\"{base}backend/brand/allItems\" class=\"{edit_ref_current}\">Kayıtları Düzenle/Sil</a></li> <!-- Add class \"current\" to sub menu items also -->
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t
\t\t\t\t<li> 
\t\t\t\t\t<a href=\"#\" class=\"nav-top-item {ref_current_nav}\"> <!-- Add the class \"current\" to current menu item -->
\t\t\t\t\tKiralık Araçlar (detaylar)
\t\t\t\t\t</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"{base}backend/auto/addItemForm\" class=\"{add_ref_current}\">Yeni Kayıt Ekle</a></li>
\t\t\t\t\t\t<li><a href=\"{base}backend/auto/allItems\" class=\"{edit_ref_current}\">Kayıtları Düzenle/Sil</a></li> <!-- Add class \"current\" to sub menu items also -->
\t\t\t\t\t</ul>
\t\t\t\t</li>

\t\t\t\t<li> 
\t\t\t\t\t<a href=\"#\" class=\"nav-top-item {ref_current_nav}\"> <!-- Add the class \"current\" to current menu item -->
\t\t\t\t\tDuyurular
\t\t\t\t\t</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"{base}backend/news/addItemForm\" class=\"{add_ref_current}\">Yeni Kayıt Ekle</a></li>
\t\t\t\t\t\t<li><a href=\"{base}backend/news/allItems\" class=\"{edit_ref_current}\">Kayıtları Düzenle/Sil</a></li> <!-- Add class \"current\" to sub menu items also -->
\t\t\t\t\t</ul>
\t\t\t\t</li>\t\t\t\t

\t\t\t\t<li> 
\t\t\t\t\t<a href=\"#\" class=\"nav-top-item {ref_current_nav}\"> <!-- Add the class \"current\" to current menu item -->
\t\t\t\t\tReferanslar
\t\t\t\t\t</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"{base}backend/reference/updateItemDetailForm\" class=\"{edit_ref_current}\">Kayıt Düzenle/Sil</a></li> <!-- Add class \"current\" to sub menu items also -->
\t\t\t\t\t</ul>
\t\t\t\t</li>\t\t


\t\t\t\t<li> 
\t\t\t\t\t<a href=\"#\" class=\"nav-top-item {ref_current_nav}\"> <!-- Add the class \"current\" to current menu item -->
\t\t\t\t\tHakkımızda
\t\t\t\t\t</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"{base}backend/about/editAboutUs\" class=\"{edit_ref_current}\">Kayıt Düzenle/Sil</a></li> <!-- Add class \"current\" to sub menu items also -->
\t\t\t\t\t</ul>
\t\t\t\t</li>\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t

\t\t\t\t<li> 
\t\t\t\t\t<a href=\"#\" class=\"nav-top-item {ref_current_nav}\"> <!-- Add the class \"current\" to current menu item -->
\t\t\t\t\tİletisim
\t\t\t\t\t</a>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"{base}backend/contact/editContact\" class=\"{add_ref_current}\">Kayıt Düzenle/Sil</a></li>
\t\t\t\t\t</ul>

\t\t\t\t</li>\t                
\t\t\t\t
\t\t\t</ul> <!-- End #main-nav -->
\t\t\t
\t\t\t<div id=\"messages\" style=\"display: none\"> <!-- Messages are shown when a link with these attributes are clicked: href=\"#messages\" rel=\"modal\"  -->
\t\t\t\t
\t\t\t\t<h3>3 Messages</h3>
\t\t\t 
\t\t\t\t<p>
\t\t\t\t\t<strong>17th May 2009</strong>User<br />
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
\t\t\t\t\t<small><a href=\"#\" class=\"remove-link\" title=\"Remove message\">Remove</a></small>
\t\t\t\t</p>
\t\t\t 
\t\t\t\t<p>
\t\t\t\t\t<strong>2nd May 2009</strong>User<br />
\t\t\t\t\tUt a est eget ligula molestie gravida. Curabitur massa. Donec eleifend, libero at sagittis mollis, tellus est malesuada tellus, at luctus turpis elit sit amet quam. Vivamus pretium ornare est.
\t\t\t\t\t<small><a href=\"#\" class=\"remove-link\" title=\"Remove message\">Remove</a></small>
\t\t\t\t</p>
\t\t\t 
\t\t\t\t<p>
\t\t\t\t\t<strong>25th April 2009</strong>User<br />
\t\t\t\t\tLorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna. Cras in mi at felis aliquet congue.
\t\t\t\t\t<small><a href=\"#\" class=\"remove-link\" title=\"Remove message\">Remove</a></small>
\t\t\t\t</p>
\t\t\t\t
\t\t\t\t<form action=\"\" method=\"post\">
\t\t\t\t\t
\t\t\t\t\t<h4>New Message</h4>
\t\t\t\t\t
\t\t\t\t\t<fieldset>
\t\t\t\t\t\t<textarea class=\"textarea\" name=\"textfield\" cols=\"79\" rows=\"5\"></textarea>
\t\t\t\t\t</fieldset>
\t\t\t\t\t
\t\t\t\t\t<fieldset>
\t\t\t\t\t
\t\t\t\t\t\t<select name=\"dropdown\" class=\"small-input\">
\t\t\t\t\t\t\t<option value=\"option1\">Send to...</option>
\t\t\t\t\t\t\t<option value=\"option2\">Everyone</option>
\t\t\t\t\t\t\t<option value=\"option3\">Admin</option>
\t\t\t\t\t\t\t<option value=\"option4\">Admin</option>
\t\t\t\t\t\t</select>
\t\t\t\t\t\t
\t\t\t\t\t\t<input class=\"button\" type=\"submit\" value=\"Send\" />
\t\t\t\t\t\t
\t\t\t\t\t</fieldset>
\t\t\t\t\t
\t\t\t\t</form>
\t\t\t\t
\t\t\t</div> <!-- End #messages -->
\t\t\t
\t\t</div></div> <!-- End #sidebar -->
        
        \t\t<div id=\"main-content\"> <!-- Main Content Section with everything -->\t
\t\t\t\t
\t\t\t
\t\t\t<!-- Page Head -->
\t\t\t<h2>Hoşgeldiniz</h2>
\t\t\t<p id=\"page-intro\">Ne Yapmak İstersiniz?</p>
\t\t\t
\t\t\t<ul class=\"shortcut-buttons-set\">
\t\t\t\t
<!-- \t\t\t\t<li><a class=\"shortcut-button\" href=\"{base}backend/about/editAboutUs\"><span>
\t\t\t\t\t<img src=\"{base}assets/backend_assets/images/icons/about_us_48.png\" alt=\"icon\" /><br />
\t\t\t\t\tHakkımızda Metnini Düzenle
\t\t\t\t</span></a></li>
\t\t\t\t
\t\t\t\t<li><a class=\"shortcut-button\" href=\"{base}backend/contact/editContact\"><span>
\t\t\t\t\t<img src=\"{base}assets/backend_assets/images/icons/contact_48.png\" alt=\"icon\" /><br />
\t\t\t\t\tİletişim Bilgilerini Düzenle
\t\t\t\t</span></a></li>
\t\t\t\t -->
\t\t\t\t<!--<li><a class=\"shortcut-button\" href=\"#\"><span>
\t\t\t\t\t<img src=\"{base}assets/backend_assets/images/icons/services_48.png\" alt=\"icon\" /><br />
\t\t\t\t\tHizmetlerimiz Metnini Düzenle
\t\t\t\t</span></a></li>-->
<!-- \t\t\t\t<li><a class=\"shortcut-button\" href=\"{base}backend/news/addNews\"><span>
\t\t\t\t\t<img src=\"{base}assets/backend_assets/images/icons/news_48.png\" alt=\"icon\" /><br />
\t\t\t\t\tYeni Bir Haber Ekle
\t\t\t\t</span></a></li> -->
<!--\t\t\t\t<li><a class=\"shortcut-button\" href=\"#\" ><span>
\t\t\t\t\t<img src=\"{base}assets/backend_assets/images/icons/gallery_48.png\" alt=\"icon\" /><br />
\t\t\t\t\tGaleriye Resim Ekle
\t\t\t\t</span></a></li>-->
                
<!-- \t\t\t\t<li><a class=\"shortcut-button\" href=\"{base}backend/reference/addReference\" ><span>
\t\t\t\t\t<img src=\"{base}assets/backend_assets/images/icons/references_45.gif\" alt=\"icon\" /><br />
\t\t\t\t\tYeni Bir Referans Ekle
\t\t\t\t</span></a></li>      -->           
\t\t\t\t
\t\t\t</ul><!-- End .shortcut-buttons-set -->
            
            <div class=\"clear\"></div>
            
\t\t\t<!-- Start Notifications -->
            
         <!-- Start Reveal Modal Popup -->   
\t\t<div id=\"myModal\" class=\"reveal-modal small\">
\t\t\t<h3><center>Oturum Kapatılıyor ?</center></h3>
            <center><a href=\"{base}logout\"><input type=\"button\" value=\"Kapat\" /></a></center>
\t\t\t<a class=\"close-reveal-modal\" title=\"İptal\">&#215;</a>
\t\t</div>
         <!-- End Reveal Modal Popup -->";
    }

    public function getTemplateName()
    {
        return "backend_views/admin_main_view.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
