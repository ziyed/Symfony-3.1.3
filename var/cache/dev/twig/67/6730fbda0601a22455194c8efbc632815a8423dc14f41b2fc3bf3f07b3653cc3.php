<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_41089f40a36435a0eaec0a67911d1e99a608baecde20f1ed38c6ef0b545bc4c0 extends Twig_Template
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
        $__internal_f9e8535b64fa91a97d899f06bf5791a7c2c0682adc3f4e37b935dd7d16b0cd7c = $this->env->getExtension("native_profiler");
        $__internal_f9e8535b64fa91a97d899f06bf5791a7c2c0682adc3f4e37b935dd7d16b0cd7c->enter($__internal_f9e8535b64fa91a97d899f06bf5791a7c2c0682adc3f4e37b935dd7d16b0cd7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f9e8535b64fa91a97d899f06bf5791a7c2c0682adc3f4e37b935dd7d16b0cd7c->leave($__internal_f9e8535b64fa91a97d899f06bf5791a7c2c0682adc3f4e37b935dd7d16b0cd7c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
