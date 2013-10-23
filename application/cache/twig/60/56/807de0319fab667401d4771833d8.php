<?php

/* backend_views/all_news_view.php */
class __TwigTemplate_6056807de0319fab667401d4771833d8 extends Twig_Template
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
        echo "\t\t\t<div class=\"content-box\"><!-- Start Content Box -->
\t\t\t\t
\t\t\t\t<div class=\"content-box-header\">
\t\t\t\t\t
\t\t\t\t\t<h3><font style=\"margin-left:270px;\">Duyurular (tüm kayıtlar)</font></h3>
\t\t\t\t\t
\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t
\t\t\t\t</div> <!-- End .content-box-header -->
\t\t\t\t
\t\t\t\t<div class=\"content-box-content\">
\t\t\t   
\t\t\t\t\t<div class=\"tab-content default-tab\" id=\"tab1\"> <!-- This is the target div. id must match the href of this div's tab -->
\t\t\t\t\t
\t\t\t\t\t<form action=\"{base}backend/ourTeam/operation\" method=\"post\">
\t\t\t\t\t\t
\t\t\t\t\t\t<table>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t{all_items_header_css}
\t\t\t\t\t\t\t\t\t<th></th>
\t\t\t\t\t\t\t\t    <th>Düzenle<font style=\"margin-left:-2px; margin-right:20px;\"></font></th>
\t\t\t\t\t\t\t\t    <th><font style=\"margin-left:-2px; margin-right:20px;\">Sil</font></th>
\t\t\t\t\t\t\t\t    <th></th>
\t\t\t\t\t\t\t\t    <th></th>
\t\t\t\t\t\t\t\t    <th>Duyuru Tarihi</th>
\t\t\t\t\t\t\t\t    <th>Duyuru Detayı</th>
\t\t\t\t\t\t\t\t{/all_items_header_css}
\t\t\t\t\t\t\t\t</tr>\t
\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t 
\t\t\t\t\t\t 
\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t {all_items}
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"{backend_base}news/updateItemDetailForm/{news_id}\" title=\"Düzenle\"><img src=\"{base}assets/backend_assets/images/icons/pencil.png\" alt=\"Düzenle\" /></a>
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t\t\t<a href=\"{backend_base}news/deleteItem/{news_id}\" title=\"Sil\"><img src=\"{base}assets/backend_assets/images/icons/cross.png\" alt=\"Sil\" /></a>
\t\t\t\t\t\t\t\t\t</td>

\t\t\t\t\t\t\t\t\t<td class=\"cocukdiv_image\"></td>
\t\t\t\t\t\t\t\t\t<td></td>
\t\t\t\t\t\t\t\t\t<td>{news_date}</td>
\t\t\t\t\t\t\t\t\t<td><?php substr({news_detail}, 0,10)?></td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t {/all_items}

\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<tfoot>
\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t<td colspan=\"6\">
<!-- \t\t\t\t\t\t\t\t\t\t<div class=\"bulk-actions align-left\">
\t\t\t\t\t\t\t\t\t\t\t{submit_button_css}
\t\t\t\t\t\t\t\t\t\t\t<input type=\"submit\" class=\"button\" value=\"Seçili Eylemi Uygula\" />
\t\t\t\t\t\t\t\t\t\t\t{/submit_button_css}
\t\t\t\t\t\t\t\t\t\t</div> -->
\t\t\t\t\t\t\t\t\t\t<!-- <a class=\"button\" href=\"#\">Seçili Eylemi Uygula</a> -->
\t\t\t\t\t\t\t\t\t\t<div class=\"clear\"></div>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>
\t\t\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t</tfoot>\t\t\t\t\t\t\t


\t\t\t\t\t\t</table>

\t\t\t\t\t  </form>\t
\t\t\t\t\t\t
\t\t\t\t\t</div> <!-- End #tab1 -->
\t\t\t\t\t     
\t\t\t\t\t
\t\t\t\t</div> <!-- End .content-box-content -->
\t\t\t\t
\t\t\t</div> <!-- End .content-box -->";
    }

    public function getTemplateName()
    {
        return "backend_views/all_news_view.php";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
