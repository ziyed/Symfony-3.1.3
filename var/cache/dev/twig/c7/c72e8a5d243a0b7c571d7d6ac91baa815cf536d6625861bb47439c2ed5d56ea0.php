<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_00e57a5a82c1271cc7086094f7b3f15489c42d8c514a0192ebb5fd40b216f2b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
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
        $__internal_df635ba5c9fa24285862edede047f54e50f883893a3ec3b8ed3f588d3f27581a = $this->env->getExtension("native_profiler");
        $__internal_df635ba5c9fa24285862edede047f54e50f883893a3ec3b8ed3f588d3f27581a->enter($__internal_df635ba5c9fa24285862edede047f54e50f883893a3ec3b8ed3f588d3f27581a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df635ba5c9fa24285862edede047f54e50f883893a3ec3b8ed3f588d3f27581a->leave($__internal_df635ba5c9fa24285862edede047f54e50f883893a3ec3b8ed3f588d3f27581a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f0815c7cf1568d1c52841acfbed073b6fb877bed988dda82d9ba69fab9471efa = $this->env->getExtension("native_profiler");
        $__internal_f0815c7cf1568d1c52841acfbed073b6fb877bed988dda82d9ba69fab9471efa->enter($__internal_f0815c7cf1568d1c52841acfbed073b6fb877bed988dda82d9ba69fab9471efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f0815c7cf1568d1c52841acfbed073b6fb877bed988dda82d9ba69fab9471efa->leave($__internal_f0815c7cf1568d1c52841acfbed073b6fb877bed988dda82d9ba69fab9471efa_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f8ce758b1adb9bf5834d87a1070580959041f10141826d452755b9c62dade8f8 = $this->env->getExtension("native_profiler");
        $__internal_f8ce758b1adb9bf5834d87a1070580959041f10141826d452755b9c62dade8f8->enter($__internal_f8ce758b1adb9bf5834d87a1070580959041f10141826d452755b9c62dade8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f8ce758b1adb9bf5834d87a1070580959041f10141826d452755b9c62dade8f8->leave($__internal_f8ce758b1adb9bf5834d87a1070580959041f10141826d452755b9c62dade8f8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
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
