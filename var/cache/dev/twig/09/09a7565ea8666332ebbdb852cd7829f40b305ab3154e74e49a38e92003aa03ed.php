<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_38b72ff2dd0784eb13a9f37c0e2909093aa1a8670d737a2fd40f7943bb798d04 extends Twig_Template
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
        $__internal_217c5fd18474e39c687d30a6b296519e35994de682b3b3c0ca02c125d1470022 = $this->env->getExtension("native_profiler");
        $__internal_217c5fd18474e39c687d30a6b296519e35994de682b3b3c0ca02c125d1470022->enter($__internal_217c5fd18474e39c687d30a6b296519e35994de682b3b3c0ca02c125d1470022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_217c5fd18474e39c687d30a6b296519e35994de682b3b3c0ca02c125d1470022->leave($__internal_217c5fd18474e39c687d30a6b296519e35994de682b3b3c0ca02c125d1470022_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
