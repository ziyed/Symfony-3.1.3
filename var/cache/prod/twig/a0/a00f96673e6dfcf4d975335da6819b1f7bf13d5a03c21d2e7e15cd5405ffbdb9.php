<?php

/* base.html.twig */
class __TwigTemplate_c778510ba4221448222160ed99ed22253a9257942e606efcde3b6a41b12e970f extends Twig_Template
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
        $__internal_d5e3eb26a38ee617d407872a9a41c22cf0da7bd33c140d59ad5e9e71f6d3a9e3 = $this->env->getExtension("native_profiler");
        $__internal_d5e3eb26a38ee617d407872a9a41c22cf0da7bd33c140d59ad5e9e71f6d3a9e3->enter($__internal_d5e3eb26a38ee617d407872a9a41c22cf0da7bd33c140d59ad5e9e71f6d3a9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    <title>";
        // line 11
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 12
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "  </head>

  <body>

    ";
        // line 20
        $this->loadTemplate("common/header.html.twig", "base.html.twig", 20)->display($context);
        // line 21
        echo "
    <div class=\"container\">

      ";
        // line 24
        $this->displayBlock('body', $context, $blocks);
        // line 25
        echo "
    </div><!-- /.container -->

    ";
        // line 28
        $this->loadTemplate("common/footer.html.twig", "base.html.twig", 28)->display($context);
        // line 29
        echo "    
    ";
        // line 30
        $this->displayBlock('javascripts', $context, $blocks);
        // line 34
        echo "  </body>
</html>
";
        
        $__internal_d5e3eb26a38ee617d407872a9a41c22cf0da7bd33c140d59ad5e9e71f6d3a9e3->leave($__internal_d5e3eb26a38ee617d407872a9a41c22cf0da7bd33c140d59ad5e9e71f6d3a9e3_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_003b50f5ae34d9a96c0f66b48cac543b3d60f2913bbd01f2508103491cf6f80e = $this->env->getExtension("native_profiler");
        $__internal_003b50f5ae34d9a96c0f66b48cac543b3d60f2913bbd01f2508103491cf6f80e->enter($__internal_003b50f5ae34d9a96c0f66b48cac543b3d60f2913bbd01f2508103491cf6f80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_003b50f5ae34d9a96c0f66b48cac543b3d60f2913bbd01f2508103491cf6f80e->leave($__internal_003b50f5ae34d9a96c0f66b48cac543b3d60f2913bbd01f2508103491cf6f80e_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_24d92d77b02f38d38ba4fa10f3458be3639e9ae39ec44200c330348fe8a035f2 = $this->env->getExtension("native_profiler");
        $__internal_24d92d77b02f38d38ba4fa10f3458be3639e9ae39ec44200c330348fe8a035f2->enter($__internal_24d92d77b02f38d38ba4fa10f3458be3639e9ae39ec44200c330348fe8a035f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        
        $__internal_24d92d77b02f38d38ba4fa10f3458be3639e9ae39ec44200c330348fe8a035f2->leave($__internal_24d92d77b02f38d38ba4fa10f3458be3639e9ae39ec44200c330348fe8a035f2_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_d57f64bd7271d2db403478f81a89619b629e828a82678d2974d3726231872b88 = $this->env->getExtension("native_profiler");
        $__internal_d57f64bd7271d2db403478f81a89619b629e828a82678d2974d3726231872b88->enter($__internal_d57f64bd7271d2db403478f81a89619b629e828a82678d2974d3726231872b88_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_d57f64bd7271d2db403478f81a89619b629e828a82678d2974d3726231872b88->leave($__internal_d57f64bd7271d2db403478f81a89619b629e828a82678d2974d3726231872b88_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c9e7ec1412e907e325b4a7753acd59f32373fca054177001bf294825cfcc7038 = $this->env->getExtension("native_profiler");
        $__internal_c9e7ec1412e907e325b4a7753acd59f32373fca054177001bf294825cfcc7038->enter($__internal_c9e7ec1412e907e325b4a7753acd59f32373fca054177001bf294825cfcc7038_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "        <script src=\"js/jquery.min.js\"></script>
        <script src=\"js/bootstrap.js\"></script>    
    ";
        
        $__internal_c9e7ec1412e907e325b4a7753acd59f32373fca054177001bf294825cfcc7038->leave($__internal_c9e7ec1412e907e325b4a7753acd59f32373fca054177001bf294825cfcc7038_prof);

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
        return array (  132 => 31,  126 => 30,  115 => 24,  106 => 14,  101 => 13,  95 => 12,  83 => 11,  74 => 34,  72 => 30,  69 => 29,  67 => 28,  62 => 25,  60 => 24,  55 => 21,  53 => 20,  47 => 16,  45 => 12,  41 => 11,  37 => 10,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->*/
/*     <meta name="description" content="">*/
/*     <meta name="author" content="">*/
/*     <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     <title>{% block title %}Welcome!{% endblock %}</title>*/
/*     {% block stylesheets %}*/
/*         <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet" />*/
/*         <link href="{{ asset('css/style.css') }}" rel="stylesheet" />*/
/*     {% endblock %}*/
/*   </head>*/
/* */
/*   <body>*/
/* */
/*     {% include 'common/header.html.twig' %}*/
/* */
/*     <div class="container">*/
/* */
/*       {% block body %}{% endblock %}*/
/* */
/*     </div><!-- /.container -->*/
/* */
/*     {% include 'common/footer.html.twig' %}*/
/*     */
/*     {% block javascripts %}*/
/*         <script src="js/jquery.min.js"></script>*/
/*         <script src="js/bootstrap.js"></script>    */
/*     {% endblock %}*/
/*   </body>*/
/* </html>*/
/* */
