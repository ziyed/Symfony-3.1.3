<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_0afb35f21f6ffaada4ef70dbc5de093fb2499039781df4a323e6887e59364f2a extends Twig_Template
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
        $__internal_6a683e9392439f3c53f662941827619ee97968239010cc9c25b2ce41aa7a9076 = $this->env->getExtension("native_profiler");
        $__internal_6a683e9392439f3c53f662941827619ee97968239010cc9c25b2ce41aa7a9076->enter($__internal_6a683e9392439f3c53f662941827619ee97968239010cc9c25b2ce41aa7a9076_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_6a683e9392439f3c53f662941827619ee97968239010cc9c25b2ce41aa7a9076->leave($__internal_6a683e9392439f3c53f662941827619ee97968239010cc9c25b2ce41aa7a9076_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
