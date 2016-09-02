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
        $__internal_0bec9a2a337b09a5514ca09e37a0c3000fa674fbdc07d477b2b183edaa2c1c05 = $this->env->getExtension("native_profiler");
        $__internal_0bec9a2a337b09a5514ca09e37a0c3000fa674fbdc07d477b2b183edaa2c1c05->enter($__internal_0bec9a2a337b09a5514ca09e37a0c3000fa674fbdc07d477b2b183edaa2c1c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bec9a2a337b09a5514ca09e37a0c3000fa674fbdc07d477b2b183edaa2c1c05->leave($__internal_0bec9a2a337b09a5514ca09e37a0c3000fa674fbdc07d477b2b183edaa2c1c05_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d9147eea3cfb6943e4356a2ab495f1a56c6e793d1eb2128fe69e4d8d062ddafa = $this->env->getExtension("native_profiler");
        $__internal_d9147eea3cfb6943e4356a2ab495f1a56c6e793d1eb2128fe69e4d8d062ddafa->enter($__internal_d9147eea3cfb6943e4356a2ab495f1a56c6e793d1eb2128fe69e4d8d062ddafa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d9147eea3cfb6943e4356a2ab495f1a56c6e793d1eb2128fe69e4d8d062ddafa->leave($__internal_d9147eea3cfb6943e4356a2ab495f1a56c6e793d1eb2128fe69e4d8d062ddafa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_9739b7c8a9a1573d4f329477ace0447e8610cb36ce5c1c4a6fdc3f31c1435bd3 = $this->env->getExtension("native_profiler");
        $__internal_9739b7c8a9a1573d4f329477ace0447e8610cb36ce5c1c4a6fdc3f31c1435bd3->enter($__internal_9739b7c8a9a1573d4f329477ace0447e8610cb36ce5c1c4a6fdc3f31c1435bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_9739b7c8a9a1573d4f329477ace0447e8610cb36ce5c1c4a6fdc3f31c1435bd3->leave($__internal_9739b7c8a9a1573d4f329477ace0447e8610cb36ce5c1c4a6fdc3f31c1435bd3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c564384a633b999aa7e79f9f56ede22fd51e6a3b6e84badab8ae9115e331ff69 = $this->env->getExtension("native_profiler");
        $__internal_c564384a633b999aa7e79f9f56ede22fd51e6a3b6e84badab8ae9115e331ff69->enter($__internal_c564384a633b999aa7e79f9f56ede22fd51e6a3b6e84badab8ae9115e331ff69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c564384a633b999aa7e79f9f56ede22fd51e6a3b6e84badab8ae9115e331ff69->leave($__internal_c564384a633b999aa7e79f9f56ede22fd51e6a3b6e84badab8ae9115e331ff69_prof);

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
