<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_b344b74d359b11265951191a5cf85b76bc329e7c5e7ee59f14de4f99fca1554e extends Twig_Template
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
        $__internal_81537f1ba64c97d2d615a4285b130b2652762004dc66dfe19567291e74d3530d = $this->env->getExtension("native_profiler");
        $__internal_81537f1ba64c97d2d615a4285b130b2652762004dc66dfe19567291e74d3530d->enter($__internal_81537f1ba64c97d2d615a4285b130b2652762004dc66dfe19567291e74d3530d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_81537f1ba64c97d2d615a4285b130b2652762004dc66dfe19567291e74d3530d->leave($__internal_81537f1ba64c97d2d615a4285b130b2652762004dc66dfe19567291e74d3530d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
