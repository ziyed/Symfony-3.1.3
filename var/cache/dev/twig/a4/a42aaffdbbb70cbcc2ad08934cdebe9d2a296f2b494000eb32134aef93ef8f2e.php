<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_c22f7033dbd4f233defd7e1e46971d67970c982d5d1da1d8fc67dd104507c7df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
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
        $__internal_f09f886c48d095c30e2622ae468728a22f2908708bb36efa7c4966afb78ed5a8 = $this->env->getExtension("native_profiler");
        $__internal_f09f886c48d095c30e2622ae468728a22f2908708bb36efa7c4966afb78ed5a8->enter($__internal_f09f886c48d095c30e2622ae468728a22f2908708bb36efa7c4966afb78ed5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f09f886c48d095c30e2622ae468728a22f2908708bb36efa7c4966afb78ed5a8->leave($__internal_f09f886c48d095c30e2622ae468728a22f2908708bb36efa7c4966afb78ed5a8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c9113e3e75d613595d703c654b02dad485860037370076009055109b4dfbbbf8 = $this->env->getExtension("native_profiler");
        $__internal_c9113e3e75d613595d703c654b02dad485860037370076009055109b4dfbbbf8->enter($__internal_c9113e3e75d613595d703c654b02dad485860037370076009055109b4dfbbbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c9113e3e75d613595d703c654b02dad485860037370076009055109b4dfbbbf8->leave($__internal_c9113e3e75d613595d703c654b02dad485860037370076009055109b4dfbbbf8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ed7cdbfc407f147497c156bf4909c8246d7d32c3af0bdb59eb1370a9717ba76c = $this->env->getExtension("native_profiler");
        $__internal_ed7cdbfc407f147497c156bf4909c8246d7d32c3af0bdb59eb1370a9717ba76c->enter($__internal_ed7cdbfc407f147497c156bf4909c8246d7d32c3af0bdb59eb1370a9717ba76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ed7cdbfc407f147497c156bf4909c8246d7d32c3af0bdb59eb1370a9717ba76c->leave($__internal_ed7cdbfc407f147497c156bf4909c8246d7d32c3af0bdb59eb1370a9717ba76c_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_851cdf234e4b869c7df37728a687c42237067ab39864f5e32ce4a37889c78c83 = $this->env->getExtension("native_profiler");
        $__internal_851cdf234e4b869c7df37728a687c42237067ab39864f5e32ce4a37889c78c83->enter($__internal_851cdf234e4b869c7df37728a687c42237067ab39864f5e32ce4a37889c78c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_851cdf234e4b869c7df37728a687c42237067ab39864f5e32ce4a37889c78c83->leave($__internal_851cdf234e4b869c7df37728a687c42237067ab39864f5e32ce4a37889c78c83_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
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
