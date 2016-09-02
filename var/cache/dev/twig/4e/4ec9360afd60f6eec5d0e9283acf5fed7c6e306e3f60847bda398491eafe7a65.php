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
        $__internal_8c6fee53f2b5120689e8ebbb86e54a447ec0e03980dff0810f7fbaa929fbba7c = $this->env->getExtension("native_profiler");
        $__internal_8c6fee53f2b5120689e8ebbb86e54a447ec0e03980dff0810f7fbaa929fbba7c->enter($__internal_8c6fee53f2b5120689e8ebbb86e54a447ec0e03980dff0810f7fbaa929fbba7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c6fee53f2b5120689e8ebbb86e54a447ec0e03980dff0810f7fbaa929fbba7c->leave($__internal_8c6fee53f2b5120689e8ebbb86e54a447ec0e03980dff0810f7fbaa929fbba7c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_95628416c3970a0e52919f2ff2aef7c0cfc1d290c7eb70d3acfdadfc4bd461fa = $this->env->getExtension("native_profiler");
        $__internal_95628416c3970a0e52919f2ff2aef7c0cfc1d290c7eb70d3acfdadfc4bd461fa->enter($__internal_95628416c3970a0e52919f2ff2aef7c0cfc1d290c7eb70d3acfdadfc4bd461fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_95628416c3970a0e52919f2ff2aef7c0cfc1d290c7eb70d3acfdadfc4bd461fa->leave($__internal_95628416c3970a0e52919f2ff2aef7c0cfc1d290c7eb70d3acfdadfc4bd461fa_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_46c8ddbad3eae9eb57393b43c4059c7bb5a5b5b7175fd3bbbd7f7c3719fdeb1f = $this->env->getExtension("native_profiler");
        $__internal_46c8ddbad3eae9eb57393b43c4059c7bb5a5b5b7175fd3bbbd7f7c3719fdeb1f->enter($__internal_46c8ddbad3eae9eb57393b43c4059c7bb5a5b5b7175fd3bbbd7f7c3719fdeb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_46c8ddbad3eae9eb57393b43c4059c7bb5a5b5b7175fd3bbbd7f7c3719fdeb1f->leave($__internal_46c8ddbad3eae9eb57393b43c4059c7bb5a5b5b7175fd3bbbd7f7c3719fdeb1f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bcad44180d2c70d224ddacb58519c3e2d865dca82530c8a80edd1c8e9958fc58 = $this->env->getExtension("native_profiler");
        $__internal_bcad44180d2c70d224ddacb58519c3e2d865dca82530c8a80edd1c8e9958fc58->enter($__internal_bcad44180d2c70d224ddacb58519c3e2d865dca82530c8a80edd1c8e9958fc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_bcad44180d2c70d224ddacb58519c3e2d865dca82530c8a80edd1c8e9958fc58->leave($__internal_bcad44180d2c70d224ddacb58519c3e2d865dca82530c8a80edd1c8e9958fc58_prof);

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
