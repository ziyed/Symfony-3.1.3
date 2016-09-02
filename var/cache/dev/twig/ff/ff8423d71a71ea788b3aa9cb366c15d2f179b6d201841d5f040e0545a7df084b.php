<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_a447e86d4a7244e6e7df662318abe9bd1a4818d4c99aa50c9cd28385ddc6367d extends Twig_Template
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
        $__internal_62e2697b4f2e1bffb06889859684af9654f8281e3647c2d63e098c0b6f98c6c3 = $this->env->getExtension("native_profiler");
        $__internal_62e2697b4f2e1bffb06889859684af9654f8281e3647c2d63e098c0b6f98c6c3->enter($__internal_62e2697b4f2e1bffb06889859684af9654f8281e3647c2d63e098c0b6f98c6c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_62e2697b4f2e1bffb06889859684af9654f8281e3647c2d63e098c0b6f98c6c3->leave($__internal_62e2697b4f2e1bffb06889859684af9654f8281e3647c2d63e098c0b6f98c6c3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
