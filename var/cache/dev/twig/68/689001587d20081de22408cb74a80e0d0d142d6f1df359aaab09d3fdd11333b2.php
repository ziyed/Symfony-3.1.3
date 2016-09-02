<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ebd455a72d1a71e96c2eec6abbb2470ad8f27a4b826fff7de0e4709a0525052e extends Twig_Template
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
        $__internal_bf9994bfc20618e4e75ea9f558b8206c5414c4df43b0d3f2e2570e19e03d5a48 = $this->env->getExtension("native_profiler");
        $__internal_bf9994bfc20618e4e75ea9f558b8206c5414c4df43b0d3f2e2570e19e03d5a48->enter($__internal_bf9994bfc20618e4e75ea9f558b8206c5414c4df43b0d3f2e2570e19e03d5a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_bf9994bfc20618e4e75ea9f558b8206c5414c4df43b0d3f2e2570e19e03d5a48->leave($__internal_bf9994bfc20618e4e75ea9f558b8206c5414c4df43b0d3f2e2570e19e03d5a48_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
