<?php

/* backend_views/admin_footer_view.php */
class __TwigTemplate_aed2268eef9bcd64d3555072684b6098 extends Twig_Template
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
        echo "<script type=\"text/javascript\">
  less = {
    env: \"development\", // or \"production\"
    async: false,       // load imports async
    fileAsync: false,   // load imports async when in a page under
    // a file protocol
    poll: 1000,         // when in watch mode, time in ms between polls
    functions: {},      // user functions, keyed by name
    dumpLineNumbers: \"comments\", // or \"mediaQuery\" or \"all\"
    relativeUrls: false,// whether to adjust url's to be relative
    // if false, url's are already relative to the
    // entry less file
    rootpath: \":/a.com/\"// a path to add on to the start of every url
    //resource
  };
</script>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/less.js/1.3.3/less.min.js\" type=\"text/javascript\"></script>
<div class=\"clear\"></div>        
\t\t\t<div id=\"footer\">
\t\t\t\t<small> <!-- Remove this notice or replace it with whatever you want -->
\t\t\t\t\t\t&#169; Copyright 2013 | <a href=\"#\">JeeMasters</a>
\t\t\t\t</small>
\t\t\t</div><!-- End #footer -->
\t\t
        </div> <!-- End #main-content -->                                                                
\t
\t</div> <!-- end main content -->

</div> <!-- end  body-wrapper -->
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "backend_views/admin_footer_view.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
