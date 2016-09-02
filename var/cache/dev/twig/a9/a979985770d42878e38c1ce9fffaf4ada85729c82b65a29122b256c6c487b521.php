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
        $__internal_14357a42e153ca5c8cd2c4200efbee170ac9d8bf1de3b26275142425d4bba3b8 = $this->env->getExtension("native_profiler");
        $__internal_14357a42e153ca5c8cd2c4200efbee170ac9d8bf1de3b26275142425d4bba3b8->enter($__internal_14357a42e153ca5c8cd2c4200efbee170ac9d8bf1de3b26275142425d4bba3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_14357a42e153ca5c8cd2c4200efbee170ac9d8bf1de3b26275142425d4bba3b8->leave($__internal_14357a42e153ca5c8cd2c4200efbee170ac9d8bf1de3b26275142425d4bba3b8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fa9d44cb0a1d44cd1de8b99c0bad5426febe83d7f0160d9d396ceda8c8bf49c4 = $this->env->getExtension("native_profiler");
        $__internal_fa9d44cb0a1d44cd1de8b99c0bad5426febe83d7f0160d9d396ceda8c8bf49c4->enter($__internal_fa9d44cb0a1d44cd1de8b99c0bad5426febe83d7f0160d9d396ceda8c8bf49c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_fa9d44cb0a1d44cd1de8b99c0bad5426febe83d7f0160d9d396ceda8c8bf49c4->leave($__internal_fa9d44cb0a1d44cd1de8b99c0bad5426febe83d7f0160d9d396ceda8c8bf49c4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f772ac4d816418229d7ea00e9ec97f24304ddbe9798811969f51e27a2ddcb37b = $this->env->getExtension("native_profiler");
        $__internal_f772ac4d816418229d7ea00e9ec97f24304ddbe9798811969f51e27a2ddcb37b->enter($__internal_f772ac4d816418229d7ea00e9ec97f24304ddbe9798811969f51e27a2ddcb37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f772ac4d816418229d7ea00e9ec97f24304ddbe9798811969f51e27a2ddcb37b->leave($__internal_f772ac4d816418229d7ea00e9ec97f24304ddbe9798811969f51e27a2ddcb37b_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_50c9c7b831c2a753fb7ec1783a8488a9f48e874013e3e406d313834938273952 = $this->env->getExtension("native_profiler");
        $__internal_50c9c7b831c2a753fb7ec1783a8488a9f48e874013e3e406d313834938273952->enter($__internal_50c9c7b831c2a753fb7ec1783a8488a9f48e874013e3e406d313834938273952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_50c9c7b831c2a753fb7ec1783a8488a9f48e874013e3e406d313834938273952->leave($__internal_50c9c7b831c2a753fb7ec1783a8488a9f48e874013e3e406d313834938273952_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0851a67bb4d787d9b6b38d3111a4fbc57dd7d1439888fd9de068d117d71a7a7 = $this->env->getExtension("native_profiler");
        $__internal_f0851a67bb4d787d9b6b38d3111a4fbc57dd7d1439888fd9de068d117d71a7a7->enter($__internal_f0851a67bb4d787d9b6b38d3111a4fbc57dd7d1439888fd9de068d117d71a7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_f0851a67bb4d787d9b6b38d3111a4fbc57dd7d1439888fd9de068d117d71a7a7->leave($__internal_f0851a67bb4d787d9b6b38d3111a4fbc57dd7d1439888fd9de068d117d71a7a7_prof);

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
