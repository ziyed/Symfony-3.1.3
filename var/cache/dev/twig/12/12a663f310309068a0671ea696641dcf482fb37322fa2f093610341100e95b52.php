<?php

/* ::base.html.twig */
class __TwigTemplate_77c54f1a3ff02b01fb2b903f45658407011d16a0e28f2e6401ef625d7d9360bd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c21e6b3bdf777be69c0f7742e9da93f0707cbec964ce89b777b2446f60358473 = $this->env->getExtension("native_profiler");
        $__internal_c21e6b3bdf777be69c0f7742e9da93f0707cbec964ce89b777b2446f60358473->enter($__internal_c21e6b3bdf777be69c0f7742e9da93f0707cbec964ce89b777b2446f60358473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_c21e6b3bdf777be69c0f7742e9da93f0707cbec964ce89b777b2446f60358473->leave($__internal_c21e6b3bdf777be69c0f7742e9da93f0707cbec964ce89b777b2446f60358473_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_277023b5c74a63ebd6eac232f0d8f85b03f1235d2cd04e1e71c46ee3b9a2706f = $this->env->getExtension("native_profiler");
        $__internal_277023b5c74a63ebd6eac232f0d8f85b03f1235d2cd04e1e71c46ee3b9a2706f->enter($__internal_277023b5c74a63ebd6eac232f0d8f85b03f1235d2cd04e1e71c46ee3b9a2706f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_277023b5c74a63ebd6eac232f0d8f85b03f1235d2cd04e1e71c46ee3b9a2706f->leave($__internal_277023b5c74a63ebd6eac232f0d8f85b03f1235d2cd04e1e71c46ee3b9a2706f_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bc43eda2375f9528e8b82ae8627c5af4a02782c532d604d68a0712878020c336 = $this->env->getExtension("native_profiler");
        $__internal_bc43eda2375f9528e8b82ae8627c5af4a02782c532d604d68a0712878020c336->enter($__internal_bc43eda2375f9528e8b82ae8627c5af4a02782c532d604d68a0712878020c336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_bc43eda2375f9528e8b82ae8627c5af4a02782c532d604d68a0712878020c336->leave($__internal_bc43eda2375f9528e8b82ae8627c5af4a02782c532d604d68a0712878020c336_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_e99f80cba26bb5b1b637c18b644332034c45f06afcf69ca669507d9767404f78 = $this->env->getExtension("native_profiler");
        $__internal_e99f80cba26bb5b1b637c18b644332034c45f06afcf69ca669507d9767404f78->enter($__internal_e99f80cba26bb5b1b637c18b644332034c45f06afcf69ca669507d9767404f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e99f80cba26bb5b1b637c18b644332034c45f06afcf69ca669507d9767404f78->leave($__internal_e99f80cba26bb5b1b637c18b644332034c45f06afcf69ca669507d9767404f78_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3ca764602981be1e7277e4dfcdd19539cc0187b9bae16448bb44d406380ca542 = $this->env->getExtension("native_profiler");
        $__internal_3ca764602981be1e7277e4dfcdd19539cc0187b9bae16448bb44d406380ca542->enter($__internal_3ca764602981be1e7277e4dfcdd19539cc0187b9bae16448bb44d406380ca542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3ca764602981be1e7277e4dfcdd19539cc0187b9bae16448bb44d406380ca542->leave($__internal_3ca764602981be1e7277e4dfcdd19539cc0187b9bae16448bb44d406380ca542_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
