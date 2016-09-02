<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_2e9a2ad3b6104d98717203a2e0a1cc6a4d85b0e9bbcac594e6f61b0976151ee3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d374b685bd39014e15a8a63a6d29d1632cc7e255f6c174cb218b50df6385042f = $this->env->getExtension("native_profiler");
        $__internal_d374b685bd39014e15a8a63a6d29d1632cc7e255f6c174cb218b50df6385042f->enter($__internal_d374b685bd39014e15a8a63a6d29d1632cc7e255f6c174cb218b50df6385042f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d374b685bd39014e15a8a63a6d29d1632cc7e255f6c174cb218b50df6385042f->leave($__internal_d374b685bd39014e15a8a63a6d29d1632cc7e255f6c174cb218b50df6385042f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d428f9a7c5b0578c9236c95c05a96277ae0eba5d4f60dd5ca752116e8091baa8 = $this->env->getExtension("native_profiler");
        $__internal_d428f9a7c5b0578c9236c95c05a96277ae0eba5d4f60dd5ca752116e8091baa8->enter($__internal_d428f9a7c5b0578c9236c95c05a96277ae0eba5d4f60dd5ca752116e8091baa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d428f9a7c5b0578c9236c95c05a96277ae0eba5d4f60dd5ca752116e8091baa8->leave($__internal_d428f9a7c5b0578c9236c95c05a96277ae0eba5d4f60dd5ca752116e8091baa8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_02e6f4db48c0a484d4615f2b2cc4e9525f030ab77437f177a70255f9ec52f858 = $this->env->getExtension("native_profiler");
        $__internal_02e6f4db48c0a484d4615f2b2cc4e9525f030ab77437f177a70255f9ec52f858->enter($__internal_02e6f4db48c0a484d4615f2b2cc4e9525f030ab77437f177a70255f9ec52f858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_02e6f4db48c0a484d4615f2b2cc4e9525f030ab77437f177a70255f9ec52f858->leave($__internal_02e6f4db48c0a484d4615f2b2cc4e9525f030ab77437f177a70255f9ec52f858_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3361c0836dac6a8c90747cd86cd715c11c0a804abccf82c2d74b33b7032257a0 = $this->env->getExtension("native_profiler");
        $__internal_3361c0836dac6a8c90747cd86cd715c11c0a804abccf82c2d74b33b7032257a0->enter($__internal_3361c0836dac6a8c90747cd86cd715c11c0a804abccf82c2d74b33b7032257a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_3361c0836dac6a8c90747cd86cd715c11c0a804abccf82c2d74b33b7032257a0->leave($__internal_3361c0836dac6a8c90747cd86cd715c11c0a804abccf82c2d74b33b7032257a0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
