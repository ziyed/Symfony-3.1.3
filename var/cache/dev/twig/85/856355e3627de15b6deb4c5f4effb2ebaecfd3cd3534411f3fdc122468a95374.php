<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_6f88863c80050ea432b32af33a8278dd2a092a7b57b1d3662842a83b1ebed6d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fe336418b9e52bb25767ce326643d6239a1610be5f71455e33eb72e08607e9f3 = $this->env->getExtension("native_profiler");
        $__internal_fe336418b9e52bb25767ce326643d6239a1610be5f71455e33eb72e08607e9f3->enter($__internal_fe336418b9e52bb25767ce326643d6239a1610be5f71455e33eb72e08607e9f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_fe336418b9e52bb25767ce326643d6239a1610be5f71455e33eb72e08607e9f3->leave($__internal_fe336418b9e52bb25767ce326643d6239a1610be5f71455e33eb72e08607e9f3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
