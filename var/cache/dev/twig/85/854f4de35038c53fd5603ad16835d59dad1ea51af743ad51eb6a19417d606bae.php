<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_f9df129903a0f2de01d444decfddab57abf798578cf08dfc8e085a2a40a90ee7 extends Twig_Template
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
        $__internal_850abbc2c0d157bc47ebf91d3f8da483f52468de2a18016ad4a6acc7e2d0643d = $this->env->getExtension("native_profiler");
        $__internal_850abbc2c0d157bc47ebf91d3f8da483f52468de2a18016ad4a6acc7e2d0643d->enter($__internal_850abbc2c0d157bc47ebf91d3f8da483f52468de2a18016ad4a6acc7e2d0643d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_850abbc2c0d157bc47ebf91d3f8da483f52468de2a18016ad4a6acc7e2d0643d->leave($__internal_850abbc2c0d157bc47ebf91d3f8da483f52468de2a18016ad4a6acc7e2d0643d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
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
