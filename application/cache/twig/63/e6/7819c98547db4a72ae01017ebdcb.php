<?php

/* view.html */
class __TwigTemplate_63e67819c98547db4a72ae01017ebdcb extends Twig_Template
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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["all_auto"]) ? $context["all_auto"] : null));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["auto"]) {
            // line 2
            echo "    ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : null), "brand_name"), "html", null, true);
            echo "-";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auto"]) ? $context["auto"] : null), "auto_title"), "html", null, true);
            echo "
";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 4
            echo "    hic kayit bulunamadi
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "view.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 4,  24 => 2,  19 => 1,);
    }
}
