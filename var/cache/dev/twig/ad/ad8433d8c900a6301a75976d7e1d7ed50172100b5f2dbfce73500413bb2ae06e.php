<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_e740d094d03dd9d813063a0488ceb978ea989fd1e2fe7102e01b641babd22463 extends Twig_Template
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
        $__internal_aebb299177b1adcf83a94738815808594925788a46cdbc98897be17c65b20589 = $this->env->getExtension("native_profiler");
        $__internal_aebb299177b1adcf83a94738815808594925788a46cdbc98897be17c65b20589->enter($__internal_aebb299177b1adcf83a94738815808594925788a46cdbc98897be17c65b20589_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_aebb299177b1adcf83a94738815808594925788a46cdbc98897be17c65b20589->leave($__internal_aebb299177b1adcf83a94738815808594925788a46cdbc98897be17c65b20589_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
