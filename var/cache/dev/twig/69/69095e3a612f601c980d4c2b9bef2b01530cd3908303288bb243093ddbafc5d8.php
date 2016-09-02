<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_e8ec14dfb57d3349d5ed4f4ad15f699a58aaefdb23766658b171690121ea5a2f extends Twig_Template
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
        $__internal_eb6f97ce49aac8b81fb2a9004306701aca7e32d2b0d1f8a857ca4ff1c0dac3ee = $this->env->getExtension("native_profiler");
        $__internal_eb6f97ce49aac8b81fb2a9004306701aca7e32d2b0d1f8a857ca4ff1c0dac3ee->enter($__internal_eb6f97ce49aac8b81fb2a9004306701aca7e32d2b0d1f8a857ca4ff1c0dac3ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_eb6f97ce49aac8b81fb2a9004306701aca7e32d2b0d1f8a857ca4ff1c0dac3ee->leave($__internal_eb6f97ce49aac8b81fb2a9004306701aca7e32d2b0d1f8a857ca4ff1c0dac3ee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
