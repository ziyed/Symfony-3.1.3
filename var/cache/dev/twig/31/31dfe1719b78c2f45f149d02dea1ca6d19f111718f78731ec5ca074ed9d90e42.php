<?php

/* base.html.twig */
class __TwigTemplate_fc4f254704042b8b5326419dde6d050c054dbf44ac27357a250da86d99f1ac28 extends Twig_Template
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
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Welcome!";
    }

    // line 12
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 13
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    ";
    }

    // line 24
    public function block_body($context, array $blocks = array())
    {
    }

    // line 30
    public function block_javascripts($context, array $blocks = array())
    {
        // line 31
        echo "        <script src=\"js/jquery.min.js\"></script>
        <script src=\"js/bootstrap.js\"></script>    
    ";
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
        return array (  105 => 31,  102 => 30,  97 => 24,  91 => 14,  86 => 13,  83 => 12,  77 => 11,  71 => 34,  69 => 30,  66 => 29,  64 => 28,  59 => 25,  57 => 24,  52 => 21,  50 => 20,  44 => 16,  42 => 12,  38 => 11,  34 => 10,  23 => 1,);
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
