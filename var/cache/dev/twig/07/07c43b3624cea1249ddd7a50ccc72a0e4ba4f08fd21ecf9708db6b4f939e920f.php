<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_965bd878597eeb3a88bbc8195e81255da577211aa794f480e6e1d85857872db6 extends Twig_Template
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
        $__internal_5304d7e4eef3abd6d77aa7b76a1cbb23f3522d1d98071a7c4001914803a3c1b3 = $this->env->getExtension("native_profiler");
        $__internal_5304d7e4eef3abd6d77aa7b76a1cbb23f3522d1d98071a7c4001914803a3c1b3->enter($__internal_5304d7e4eef3abd6d77aa7b76a1cbb23f3522d1d98071a7c4001914803a3c1b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_5304d7e4eef3abd6d77aa7b76a1cbb23f3522d1d98071a7c4001914803a3c1b3->leave($__internal_5304d7e4eef3abd6d77aa7b76a1cbb23f3522d1d98071a7c4001914803a3c1b3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
