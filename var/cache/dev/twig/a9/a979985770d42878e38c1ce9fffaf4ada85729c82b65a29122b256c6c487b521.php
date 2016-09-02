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
        $__internal_e208ccdaccadd827156da56345778ed1793daee1c81231bdee144a6a4e2831f9 = $this->env->getExtension("native_profiler");
        $__internal_e208ccdaccadd827156da56345778ed1793daee1c81231bdee144a6a4e2831f9->enter($__internal_e208ccdaccadd827156da56345778ed1793daee1c81231bdee144a6a4e2831f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_e208ccdaccadd827156da56345778ed1793daee1c81231bdee144a6a4e2831f9->leave($__internal_e208ccdaccadd827156da56345778ed1793daee1c81231bdee144a6a4e2831f9_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_5056e0b779f08456133930ae4d1556cdc60213fcae40c31370952b3305652afd = $this->env->getExtension("native_profiler");
        $__internal_5056e0b779f08456133930ae4d1556cdc60213fcae40c31370952b3305652afd->enter($__internal_5056e0b779f08456133930ae4d1556cdc60213fcae40c31370952b3305652afd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_5056e0b779f08456133930ae4d1556cdc60213fcae40c31370952b3305652afd->leave($__internal_5056e0b779f08456133930ae4d1556cdc60213fcae40c31370952b3305652afd_prof);

    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_7a009e7cd4d283f99cefe1159ab6355033b5b4daeadd76855f8c0141e18a555b = $this->env->getExtension("native_profiler");
        $__internal_7a009e7cd4d283f99cefe1159ab6355033b5b4daeadd76855f8c0141e18a555b->enter($__internal_7a009e7cd4d283f99cefe1159ab6355033b5b4daeadd76855f8c0141e18a555b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
        
        $__internal_7a009e7cd4d283f99cefe1159ab6355033b5b4daeadd76855f8c0141e18a555b->leave($__internal_7a009e7cd4d283f99cefe1159ab6355033b5b4daeadd76855f8c0141e18a555b_prof);

    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
        $__internal_743eca94c6bd7e22e6f2e44daa892cc9d154268b0ff0b0357b1c7544e07b824d = $this->env->getExtension("native_profiler");
        $__internal_743eca94c6bd7e22e6f2e44daa892cc9d154268b0ff0b0357b1c7544e07b824d->enter($__internal_743eca94c6bd7e22e6f2e44daa892cc9d154268b0ff0b0357b1c7544e07b824d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_743eca94c6bd7e22e6f2e44daa892cc9d154268b0ff0b0357b1c7544e07b824d->leave($__internal_743eca94c6bd7e22e6f2e44daa892cc9d154268b0ff0b0357b1c7544e07b824d_prof);

    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a3f3faee831ba8b4a50ccd1d5a7f31fadb5728cafb8170a669714eb17184c5d7 = $this->env->getExtension("native_profiler");
        $__internal_a3f3faee831ba8b4a50ccd1d5a7f31fadb5728cafb8170a669714eb17184c5d7->enter($__internal_a3f3faee831ba8b4a50ccd1d5a7f31fadb5728cafb8170a669714eb17184c5d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 31
        echo "        <script src=\"js/jquery.min.js\"></script>
        <script src=\"js/bootstrap.js\"></script>    
    ";
        
        $__internal_a3f3faee831ba8b4a50ccd1d5a7f31fadb5728cafb8170a669714eb17184c5d7->leave($__internal_a3f3faee831ba8b4a50ccd1d5a7f31fadb5728cafb8170a669714eb17184c5d7_prof);

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
