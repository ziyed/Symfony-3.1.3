<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_a4da8efd57b7a057fe63ebd6f422a8b3e7037d7cebe8a64acf622d4b174579a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2abca03b3651a8acd3ecb3c4bb6ebd35e558f1f214ab67cca6d305289ca80ca = $this->env->getExtension("native_profiler");
        $__internal_a2abca03b3651a8acd3ecb3c4bb6ebd35e558f1f214ab67cca6d305289ca80ca->enter($__internal_a2abca03b3651a8acd3ecb3c4bb6ebd35e558f1f214ab67cca6d305289ca80ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_a2abca03b3651a8acd3ecb3c4bb6ebd35e558f1f214ab67cca6d305289ca80ca->leave($__internal_a2abca03b3651a8acd3ecb3c4bb6ebd35e558f1f214ab67cca6d305289ca80ca_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ab59f14e767e7331a7b9ce614f88c4a525fc1f752296081f85f1997895a012bc = $this->env->getExtension("native_profiler");
        $__internal_ab59f14e767e7331a7b9ce614f88c4a525fc1f752296081f85f1997895a012bc->enter($__internal_ab59f14e767e7331a7b9ce614f88c4a525fc1f752296081f85f1997895a012bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ab59f14e767e7331a7b9ce614f88c4a525fc1f752296081f85f1997895a012bc->leave($__internal_ab59f14e767e7331a7b9ce614f88c4a525fc1f752296081f85f1997895a012bc_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
