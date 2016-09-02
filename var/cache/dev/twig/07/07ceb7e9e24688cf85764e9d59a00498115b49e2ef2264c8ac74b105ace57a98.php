<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_aec6394db06ca880ced3943e5a310f71cb70f291aae2db9e5cff67089f82a987 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_71c04d51833a9f752bd8432d24faddea4330ba00296171f034ebd34be5718449 = $this->env->getExtension("native_profiler");
        $__internal_71c04d51833a9f752bd8432d24faddea4330ba00296171f034ebd34be5718449->enter($__internal_71c04d51833a9f752bd8432d24faddea4330ba00296171f034ebd34be5718449_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_71c04d51833a9f752bd8432d24faddea4330ba00296171f034ebd34be5718449->leave($__internal_71c04d51833a9f752bd8432d24faddea4330ba00296171f034ebd34be5718449_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7564e48181ab2b9722128029e6d75d089e662daf80454e90def22761d5c62792 = $this->env->getExtension("native_profiler");
        $__internal_7564e48181ab2b9722128029e6d75d089e662daf80454e90def22761d5c62792->enter($__internal_7564e48181ab2b9722128029e6d75d089e662daf80454e90def22761d5c62792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7564e48181ab2b9722128029e6d75d089e662daf80454e90def22761d5c62792->leave($__internal_7564e48181ab2b9722128029e6d75d089e662daf80454e90def22761d5c62792_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_dcb22e47220193eef8d124f0822ede44bd1c482ccc207a087a3c177669a83007 = $this->env->getExtension("native_profiler");
        $__internal_dcb22e47220193eef8d124f0822ede44bd1c482ccc207a087a3c177669a83007->enter($__internal_dcb22e47220193eef8d124f0822ede44bd1c482ccc207a087a3c177669a83007_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dcb22e47220193eef8d124f0822ede44bd1c482ccc207a087a3c177669a83007->leave($__internal_dcb22e47220193eef8d124f0822ede44bd1c482ccc207a087a3c177669a83007_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_60a635f142255d72d52cb0f2498280004feaabdf53decb428ead8ab84e4d16b2 = $this->env->getExtension("native_profiler");
        $__internal_60a635f142255d72d52cb0f2498280004feaabdf53decb428ead8ab84e4d16b2->enter($__internal_60a635f142255d72d52cb0f2498280004feaabdf53decb428ead8ab84e4d16b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_60a635f142255d72d52cb0f2498280004feaabdf53decb428ead8ab84e4d16b2->leave($__internal_60a635f142255d72d52cb0f2498280004feaabdf53decb428ead8ab84e4d16b2_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
