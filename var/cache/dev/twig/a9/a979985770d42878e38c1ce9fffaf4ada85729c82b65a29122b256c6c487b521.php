<?php

/* base.html.twig */
class __TwigTemplate_3e8fe802bb3aab10b241f7918b07341befca9d9c7196c4e23cd9a0b7b7a038ec extends Twig_Template
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
        $__internal_28c73885e113127315f794e20e6ebca8af86a9ab82ba845162a88536090286ef = $this->env->getExtension("native_profiler");
        $__internal_28c73885e113127315f794e20e6ebca8af86a9ab82ba845162a88536090286ef->enter($__internal_28c73885e113127315f794e20e6ebca8af86a9ab82ba845162a88536090286ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_28c73885e113127315f794e20e6ebca8af86a9ab82ba845162a88536090286ef->leave($__internal_28c73885e113127315f794e20e6ebca8af86a9ab82ba845162a88536090286ef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0a899e692dbdee4d3139ce3426c87d806e879997c4b3d33f740e40a6dea9fe92 = $this->env->getExtension("native_profiler");
        $__internal_0a899e692dbdee4d3139ce3426c87d806e879997c4b3d33f740e40a6dea9fe92->enter($__internal_0a899e692dbdee4d3139ce3426c87d806e879997c4b3d33f740e40a6dea9fe92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0a899e692dbdee4d3139ce3426c87d806e879997c4b3d33f740e40a6dea9fe92->leave($__internal_0a899e692dbdee4d3139ce3426c87d806e879997c4b3d33f740e40a6dea9fe92_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d3a7c371dc003f3cac51fc0466fadfd4c68e3c6f37ebf96e1c4a5f4b70b5a057 = $this->env->getExtension("native_profiler");
        $__internal_d3a7c371dc003f3cac51fc0466fadfd4c68e3c6f37ebf96e1c4a5f4b70b5a057->enter($__internal_d3a7c371dc003f3cac51fc0466fadfd4c68e3c6f37ebf96e1c4a5f4b70b5a057_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_d3a7c371dc003f3cac51fc0466fadfd4c68e3c6f37ebf96e1c4a5f4b70b5a057->leave($__internal_d3a7c371dc003f3cac51fc0466fadfd4c68e3c6f37ebf96e1c4a5f4b70b5a057_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_fa67c8db631191f910c12fb95de6aa71d7428c5d2154495f2ca71a5ef4fc54bf = $this->env->getExtension("native_profiler");
        $__internal_fa67c8db631191f910c12fb95de6aa71d7428c5d2154495f2ca71a5ef4fc54bf->enter($__internal_fa67c8db631191f910c12fb95de6aa71d7428c5d2154495f2ca71a5ef4fc54bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fa67c8db631191f910c12fb95de6aa71d7428c5d2154495f2ca71a5ef4fc54bf->leave($__internal_fa67c8db631191f910c12fb95de6aa71d7428c5d2154495f2ca71a5ef4fc54bf_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3e89b6a5744c64c9bd4b2d3690a2e40815442ceafa4aef9e2558c83e8e48ed68 = $this->env->getExtension("native_profiler");
        $__internal_3e89b6a5744c64c9bd4b2d3690a2e40815442ceafa4aef9e2558c83e8e48ed68->enter($__internal_3e89b6a5744c64c9bd4b2d3690a2e40815442ceafa4aef9e2558c83e8e48ed68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_3e89b6a5744c64c9bd4b2d3690a2e40815442ceafa4aef9e2558c83e8e48ed68->leave($__internal_3e89b6a5744c64c9bd4b2d3690a2e40815442ceafa4aef9e2558c83e8e48ed68_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
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
