<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_6dff29d1f9969d03a66d3c708de1b3abf9fd9150591177f2bc5d7b1ff3dcc786 extends Twig_Template
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
        $__internal_e10e3ec6d501b99128e995712ede005f216d503c0560fd05dbcc9f9fdb9d2781 = $this->env->getExtension("native_profiler");
        $__internal_e10e3ec6d501b99128e995712ede005f216d503c0560fd05dbcc9f9fdb9d2781->enter($__internal_e10e3ec6d501b99128e995712ede005f216d503c0560fd05dbcc9f9fdb9d2781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_e10e3ec6d501b99128e995712ede005f216d503c0560fd05dbcc9f9fdb9d2781->leave($__internal_e10e3ec6d501b99128e995712ede005f216d503c0560fd05dbcc9f9fdb9d2781_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
