<?php

/* backend_views/admin_header_view.php */
class __TwigTemplate_1fab82c5d880503e96977b77ea08bfe5 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\">
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>JeeMasters-Admin</title>

\t\t\t
\t\t<!--  Google Hosted Libraries Jquery 1.9  -->
\t\t<script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js\"></script>
\t\t<script src=\"http://code.jquery.com/jquery-migrate-1.1.0.min.js\"></script>
\t\t<!--/ Google Hosted Libraries Jquery 1.9  -->

\t\t<!--  Without-CDN Jquery 1.9 -->
\t\t<script src=\"{base}assets/backend_assets/js/jquery-1.9.0.js\"></script>
\t\t<script src=\"{base}assets/backend_assets/js/jquery-migrate-1.1.0.min.js\"></script>
\t\t<!--/ Without-CDN Jquery 1.9 -->



\t\t<!--  \t\t\t\tjQuery Datepicker Assets \t\t\t-->
\t\t<link href=\"{base}assets/backend_assets/jquery_datepicker_assets/css/ui-lightness/jquery-ui-1.10.0.custom.css\" rel=\"stylesheet\">
\t\t<script src=\"{base}assets/backend_assets/jquery_datepicker_assets/js/jquery-ui-1.10.0.custom.js\"></script>
\t\t<!--/ \t\t\t\tjQuery Datepicker Assets \t\t\t-->



<!--                       CSS                       -->
\t  
\t\t<!-- Reset Stylesheet -->
\t\t<link rel=\"stylesheet\" href=\"{base}assets/backend_assets/css/reset.css\" type=\"text/css\" media=\"screen\" />
\t  
\t\t<!-- Main Stylesheet -->
\t\t<link rel=\"stylesheet\" href=\"{base}assets/backend_assets/css/style.css\" type=\"text/css\" media=\"screen\" />
\t\t
\t\t<!-- Invalid Stylesheet. This makes stuff look pretty. Remove it if you want the CSS completely valid -->
\t\t<link rel=\"stylesheet\" href=\"{base}assets/backend_assets/css/invalid.css\" type=\"text/css\" media=\"screen\" />
        \t
\t\t
        <!--                       Reveal Modal Popup Assets                      -->
        
        <!-- Reveal Modal Popup CSS -->
\t  \t<link rel=\"stylesheet\" href=\"{base}assets/backend_assets/reveal_css/reveal.css\">
\t\t<!-- Reveal Modal Popup Scripts -->
\t\t<!-- <script type=\"text/javascript\" src=\"jquery-1.4.4.min.js\"></script> -->
\t\t<!--<script type=\"text/javascript\" src=\"http://code.jquery.com/jquery-1.6.min.js\"></script> -->
\t\t<!--<script type=\"text/javascript\" src=\"{base}assets/backend_assets/reveal_script/jquery-1.6.min.js\"></script>-->
\t\t<script type=\"text/javascript\" src=\"{base}assets/backend_assets/reveal_script/jquery.reveal.js\"></script>
        <!--/                      Reveal Modal Popup Assets                      /-->
        
\t\t
\t\t<!-- Internet Explorer Fixes Stylesheet -->
\t\t
\t\t<!--[if lte IE 7]>
\t\t\t<link rel=\"stylesheet\" href=\"{base}assets/backend_assets/css/ie.css\" type=\"text/css\" media=\"screen\" />
\t\t<![endif]-->
\t\t
\t\t<!--                       Javascripts                       -->
  \t\t
        <!-- MulFile jQuery Plugin -->
        <!--<script src=\"jquery_multifile/jquery.js\" type=\"text/javascript\" language=\"javascript\"></script>
\t\t<script src=\"jquery_multifile/jquery.MultiFile.js\"type=\"text/javascript\" language=\"javascript\"></script>-->
           
        <!--<script type=\"text/javascript\" src=\"{base}assets/backend_assets/jquery_multifile_assets/jquery.js\" language=\"javascript\"></script>-->
\t\t<script type=\"text/javascript\" src=\"{base}assets/backend_assets/jquery_multifile_assets/jquery.MultiFile.js\" language=\"javascript\"></script>
           
\t\t<!-- jQuery -->
\t\t<!--<script type=\"text/javascript\" src=\"{base}assets/backend_assets/scripts/jquery-1.3.2.min.js\"></script>-->
\t\t
\t\t<!-- jQuery Configuration -->
\t\t<script type=\"text/javascript\" src=\"{base}assets/backend_assets/scripts/simpla.jquery.configuration.js\" ></script>
\t\t
\t\t<!-- Facebox jQuery Plugin -->
\t\t<script type=\"text/javascript\" src=\"{base}assets/backend_assets/scripts/facebox.js\" ></script>
\t\t
\t\t<!-- jQuery WYSIWYG Plugin -->
\t\t<script type=\"text/javascript\" src=\"{base}assets/backend_assets/scripts/jquery.wysiwyg.js\" ></script>

\t\t
\t\t<!-- Internet Explorer .png-fix -->
\t\t
\t\t<!--[if IE 6]>
\t\t\t<script type=\"text/javascript\" src=\"scripts/DD_belatedPNG_0.0.7a.js\"></script>
\t\t\t<script type=\"text/javascript\">
\t\t\t\tDD_belatedPNG.fix('.png_bg, img, li');
\t\t\t</script>
\t\t<![endif]-->


\t\t <!--                       Jquery Notification Assets               -->
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"{base}assets/login_assets/notification_css/jquery_notification.css\" />

\t\t<!--<script type=\"text/javascript\" src=\"{base}assets/login_assets/notification_js/jquery_v_1.4.js\"></script>-->
\t\t<script type=\"text/javascript\" src=\"{base}assets/login_assets/notification_js/jquery_notification_v.1.js\"></script>

\t\t<script type=\"text/javascript\">
     \t\t\$(document).ready(function(){
       \t\t\t });
\t\t</script>
\t\t<!--                       Jquery Notification Assets               /-->

    <!-- Arquivos utilizados pelo jQuery lightBox plugin -->
    <script type=\"text/javascript\" src=\"{base}assets/backend_assets/lightbox_js/jquery.lightbox-0.5.js\"></script>
    <link rel=\"stylesheet\" type=\"text/css\" href=\"{base}assets/backend_assets/lightbox_css/jquery.lightbox-0.5.css\" media=\"screen\" />
    <!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->
    
    <!-- Ativando o jQuery lightBox plugin -->
    <script type=\"text/javascript\">
    \$(function() {
        \$('.cocukdiv_image a').lightBox();
    });
    </script>
\t<!-- Arquivos utilizados pelo jQuery lightBox plugin /-->

<!--  DatePicker BootStrap  -->
\t<script>
\t\$(function() {
\t\t\$( \"#datepicker\" ).datepicker({
\t\t\tinline: true
\t\t});
\t\t// Hover states on the static widgets
/*\t\t\$( \"#dialog-link, #icons li\" ).hover(
\t\t\tfunction() {
\t\t\t\t\$( this ).addClass( \"ui-state-hover\" );
\t\t\t},
\t\t\tfunction() {
\t\t\t\t\$( this ).removeClass( \"ui-state-hover\" );
\t\t\t}
\t\t);*/
\t});
\t</script>
<!--/ DatePicker BootStrap  -->
  <!-- include libraries BS3 -->
<!--   <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css\" />
  <script type=\"text/javascript\" src=\"//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js\"></script>
  <link rel=\"stylesheet\" href=\"//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css\" /> -->

  <!-- include summernote -->
<!--   <link rel=\"stylesheet/less\" type=\"text/css\" href=\"{base}assets/backend_assets/summernote/summernote.less\" /> 
  <script type=\"text/javascript\" src=\"{base}assets/backend_assets/summernote/summernote.js\"></script>
 -->
  <script type=\"text/javascript\">
/*    \$(document).ready(function() {
      \$('.summernote').summernote({height: 300, focus: true, tabsize: 2});
    });*/
  </script>\t
</head>
<body>";
    }

    public function getTemplateName()
    {
        return "backend_views/admin_header_view.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
