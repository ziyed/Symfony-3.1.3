<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_720b0c0dff65422d433c326709de9e9044a4d150a7d5e67d4513f9f0b039a4d9 extends Twig_Template
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
        $__internal_0250384a5d26b132807132a4b6220ebf3757964e0e322837aa35b07a59e62266 = $this->env->getExtension("native_profiler");
        $__internal_0250384a5d26b132807132a4b6220ebf3757964e0e322837aa35b07a59e62266->enter($__internal_0250384a5d26b132807132a4b6220ebf3757964e0e322837aa35b07a59e62266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_0250384a5d26b132807132a4b6220ebf3757964e0e322837aa35b07a59e62266->leave($__internal_0250384a5d26b132807132a4b6220ebf3757964e0e322837aa35b07a59e62266_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
