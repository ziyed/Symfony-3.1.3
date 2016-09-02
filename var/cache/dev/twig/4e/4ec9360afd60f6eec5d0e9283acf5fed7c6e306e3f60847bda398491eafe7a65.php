<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_a154728b15fc6a40c3505ece7b54291ed020aaf2f80faa1c04f06eeea8bf4f2a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_451c5cd035b494ce04c5c3407667c0343eff6c4e900c44f6257b0245e990dc42 = $this->env->getExtension("native_profiler");
        $__internal_451c5cd035b494ce04c5c3407667c0343eff6c4e900c44f6257b0245e990dc42->enter($__internal_451c5cd035b494ce04c5c3407667c0343eff6c4e900c44f6257b0245e990dc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_451c5cd035b494ce04c5c3407667c0343eff6c4e900c44f6257b0245e990dc42->leave($__internal_451c5cd035b494ce04c5c3407667c0343eff6c4e900c44f6257b0245e990dc42_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_659e31c32693e3a85a6f6bcbc1334aa434bc287739828b057bc974f750bc7ec2 = $this->env->getExtension("native_profiler");
        $__internal_659e31c32693e3a85a6f6bcbc1334aa434bc287739828b057bc974f750bc7ec2->enter($__internal_659e31c32693e3a85a6f6bcbc1334aa434bc287739828b057bc974f750bc7ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_659e31c32693e3a85a6f6bcbc1334aa434bc287739828b057bc974f750bc7ec2->leave($__internal_659e31c32693e3a85a6f6bcbc1334aa434bc287739828b057bc974f750bc7ec2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c797382069e39b774c9075b2f731fcaef6b50d2e5c9a0fca11853336d3b9f7c = $this->env->getExtension("native_profiler");
        $__internal_2c797382069e39b774c9075b2f731fcaef6b50d2e5c9a0fca11853336d3b9f7c->enter($__internal_2c797382069e39b774c9075b2f731fcaef6b50d2e5c9a0fca11853336d3b9f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c797382069e39b774c9075b2f731fcaef6b50d2e5c9a0fca11853336d3b9f7c->leave($__internal_2c797382069e39b774c9075b2f731fcaef6b50d2e5c9a0fca11853336d3b9f7c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fe2141d62670a3909c17bd116ba17e38481e3bb1a26abff2586109be9e168ed2 = $this->env->getExtension("native_profiler");
        $__internal_fe2141d62670a3909c17bd116ba17e38481e3bb1a26abff2586109be9e168ed2->enter($__internal_fe2141d62670a3909c17bd116ba17e38481e3bb1a26abff2586109be9e168ed2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_fe2141d62670a3909c17bd116ba17e38481e3bb1a26abff2586109be9e168ed2->leave($__internal_fe2141d62670a3909c17bd116ba17e38481e3bb1a26abff2586109be9e168ed2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
