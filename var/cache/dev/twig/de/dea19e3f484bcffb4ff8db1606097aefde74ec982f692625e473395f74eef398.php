<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_79eb5376682b5c27bdcd580900bc80148f9c3ac089637fa0d752c9b78f757ce4 extends Twig_Template
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
        $__internal_d902d3b66aadf14c963a985b8ab56b163073633646588e7c3eda811724cabbaa = $this->env->getExtension("native_profiler");
        $__internal_d902d3b66aadf14c963a985b8ab56b163073633646588e7c3eda811724cabbaa->enter($__internal_d902d3b66aadf14c963a985b8ab56b163073633646588e7c3eda811724cabbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d902d3b66aadf14c963a985b8ab56b163073633646588e7c3eda811724cabbaa->leave($__internal_d902d3b66aadf14c963a985b8ab56b163073633646588e7c3eda811724cabbaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
