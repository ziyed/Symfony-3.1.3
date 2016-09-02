<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_10db91b0c1004ed41b23ba8de9efdf97cb648b9ae8fb5ce9d46f2e75cc19f633 extends Twig_Template
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
        $__internal_7ac85e3bb8cb2e0e336ac119d01eb26d487b01e05d6c1673729a81dcfb127d06 = $this->env->getExtension("native_profiler");
        $__internal_7ac85e3bb8cb2e0e336ac119d01eb26d487b01e05d6c1673729a81dcfb127d06->enter($__internal_7ac85e3bb8cb2e0e336ac119d01eb26d487b01e05d6c1673729a81dcfb127d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_7ac85e3bb8cb2e0e336ac119d01eb26d487b01e05d6c1673729a81dcfb127d06->leave($__internal_7ac85e3bb8cb2e0e336ac119d01eb26d487b01e05d6c1673729a81dcfb127d06_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
