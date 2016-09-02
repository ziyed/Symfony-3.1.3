<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_f145fc2ace02f5940b37d31b140c7b74f2b86c665a5b24d3febe2827105c68f1 extends Twig_Template
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
        $__internal_3dc58664929ddfb17541ca9396e8af43562bff4ef0e24e60bfffcf02d13f1d04 = $this->env->getExtension("native_profiler");
        $__internal_3dc58664929ddfb17541ca9396e8af43562bff4ef0e24e60bfffcf02d13f1d04->enter($__internal_3dc58664929ddfb17541ca9396e8af43562bff4ef0e24e60bfffcf02d13f1d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_3dc58664929ddfb17541ca9396e8af43562bff4ef0e24e60bfffcf02d13f1d04->leave($__internal_3dc58664929ddfb17541ca9396e8af43562bff4ef0e24e60bfffcf02d13f1d04_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
