<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_9d532ec38266dc0534a6ea5d4b8477732014bc7de7bda4dd8a14673edbb02d55 extends Twig_Template
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
        $__internal_17981b1351beecb21d43c8adf92913f0c107fd677ef6d553804976b7b9af7c58 = $this->env->getExtension("native_profiler");
        $__internal_17981b1351beecb21d43c8adf92913f0c107fd677ef6d553804976b7b9af7c58->enter($__internal_17981b1351beecb21d43c8adf92913f0c107fd677ef6d553804976b7b9af7c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_17981b1351beecb21d43c8adf92913f0c107fd677ef6d553804976b7b9af7c58->leave($__internal_17981b1351beecb21d43c8adf92913f0c107fd677ef6d553804976b7b9af7c58_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
