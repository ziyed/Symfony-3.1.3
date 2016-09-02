<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_ff15de4726945d25e5a3cac9738f75d1d209b39a968835b3dd17243c5e914c03 extends Twig_Template
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
        $__internal_872a3efb3026eea7d918730ce9e019df182437b03c08913778efb991aee27933 = $this->env->getExtension("native_profiler");
        $__internal_872a3efb3026eea7d918730ce9e019df182437b03c08913778efb991aee27933->enter($__internal_872a3efb3026eea7d918730ce9e019df182437b03c08913778efb991aee27933_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_872a3efb3026eea7d918730ce9e019df182437b03c08913778efb991aee27933->leave($__internal_872a3efb3026eea7d918730ce9e019df182437b03c08913778efb991aee27933_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
