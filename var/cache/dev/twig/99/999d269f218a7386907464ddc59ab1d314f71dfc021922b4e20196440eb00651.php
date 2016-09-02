<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_675475f4f7eaf4a1e8558dbb16ad24fe5c41d55b4c4aa78727ad90869c747a6f extends Twig_Template
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
        $__internal_5da4db505d271f3ad163aa65b5a3b1d5245693c40e8136ca513ab3361f25c9a7 = $this->env->getExtension("native_profiler");
        $__internal_5da4db505d271f3ad163aa65b5a3b1d5245693c40e8136ca513ab3361f25c9a7->enter($__internal_5da4db505d271f3ad163aa65b5a3b1d5245693c40e8136ca513ab3361f25c9a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_5da4db505d271f3ad163aa65b5a3b1d5245693c40e8136ca513ab3361f25c9a7->leave($__internal_5da4db505d271f3ad163aa65b5a3b1d5245693c40e8136ca513ab3361f25c9a7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
