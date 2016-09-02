<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_e08ef461339022860c7350a126671f979ddda79b353418486b3e62b4d17736c1 extends Twig_Template
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
        $__internal_b6bbf440ebb3653b3501a1982b877d5a73b91fbab42c9d2251bc35f9ec1af69e = $this->env->getExtension("native_profiler");
        $__internal_b6bbf440ebb3653b3501a1982b877d5a73b91fbab42c9d2251bc35f9ec1af69e->enter($__internal_b6bbf440ebb3653b3501a1982b877d5a73b91fbab42c9d2251bc35f9ec1af69e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_b6bbf440ebb3653b3501a1982b877d5a73b91fbab42c9d2251bc35f9ec1af69e->leave($__internal_b6bbf440ebb3653b3501a1982b877d5a73b91fbab42c9d2251bc35f9ec1af69e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
