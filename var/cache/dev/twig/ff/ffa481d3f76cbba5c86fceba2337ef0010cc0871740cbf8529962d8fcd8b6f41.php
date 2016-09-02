<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_ae9569f305fea560b27fc81d722ba1415c1fd41f78cab5ed95ff79589a82d1dc extends Twig_Template
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
        $__internal_04ba1b5a84b6440aa3fc785994f91535a33b3df6f1923e51dafb5d70f0fef2bc = $this->env->getExtension("native_profiler");
        $__internal_04ba1b5a84b6440aa3fc785994f91535a33b3df6f1923e51dafb5d70f0fef2bc->enter($__internal_04ba1b5a84b6440aa3fc785994f91535a33b3df6f1923e51dafb5d70f0fef2bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_04ba1b5a84b6440aa3fc785994f91535a33b3df6f1923e51dafb5d70f0fef2bc->leave($__internal_04ba1b5a84b6440aa3fc785994f91535a33b3df6f1923e51dafb5d70f0fef2bc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
