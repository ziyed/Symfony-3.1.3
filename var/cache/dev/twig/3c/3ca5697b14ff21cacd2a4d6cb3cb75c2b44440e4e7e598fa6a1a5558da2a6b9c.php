<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_5720cb50677e902e96e165837e8ff9a0f1e94e818aca75bba6daea4603cc8ae8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f8a9ceaf9faaf6728c8c3f91219fb99d3a9210ae7cb6a2bda98cd478f00b0d9b = $this->env->getExtension("native_profiler");
        $__internal_f8a9ceaf9faaf6728c8c3f91219fb99d3a9210ae7cb6a2bda98cd478f00b0d9b->enter($__internal_f8a9ceaf9faaf6728c8c3f91219fb99d3a9210ae7cb6a2bda98cd478f00b0d9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f8a9ceaf9faaf6728c8c3f91219fb99d3a9210ae7cb6a2bda98cd478f00b0d9b->leave($__internal_f8a9ceaf9faaf6728c8c3f91219fb99d3a9210ae7cb6a2bda98cd478f00b0d9b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8301540e3eebceba1c4a3ad015c593e3ecdf0bc3ce55a0df5de5a1bbb4639189 = $this->env->getExtension("native_profiler");
        $__internal_8301540e3eebceba1c4a3ad015c593e3ecdf0bc3ce55a0df5de5a1bbb4639189->enter($__internal_8301540e3eebceba1c4a3ad015c593e3ecdf0bc3ce55a0df5de5a1bbb4639189_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8301540e3eebceba1c4a3ad015c593e3ecdf0bc3ce55a0df5de5a1bbb4639189->leave($__internal_8301540e3eebceba1c4a3ad015c593e3ecdf0bc3ce55a0df5de5a1bbb4639189_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c418bd12dd4f5cbeef7d4eec3aef75af7e699dda568c2fd733e9052d4ec3c114 = $this->env->getExtension("native_profiler");
        $__internal_c418bd12dd4f5cbeef7d4eec3aef75af7e699dda568c2fd733e9052d4ec3c114->enter($__internal_c418bd12dd4f5cbeef7d4eec3aef75af7e699dda568c2fd733e9052d4ec3c114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c418bd12dd4f5cbeef7d4eec3aef75af7e699dda568c2fd733e9052d4ec3c114->leave($__internal_c418bd12dd4f5cbeef7d4eec3aef75af7e699dda568c2fd733e9052d4ec3c114_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
