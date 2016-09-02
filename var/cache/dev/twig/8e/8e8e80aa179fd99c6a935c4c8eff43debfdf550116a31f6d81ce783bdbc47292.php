<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_f9439da8fa277f779f10dd6bef6455dcbb9b77e5cbc9c3b851395a24e52968a8 extends Twig_Template
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
        $__internal_dbdced1acef511bb9fa4cdb374949dc8dce1adba1e7e9bfc97e3e7135e2ce86f = $this->env->getExtension("native_profiler");
        $__internal_dbdced1acef511bb9fa4cdb374949dc8dce1adba1e7e9bfc97e3e7135e2ce86f->enter($__internal_dbdced1acef511bb9fa4cdb374949dc8dce1adba1e7e9bfc97e3e7135e2ce86f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_dbdced1acef511bb9fa4cdb374949dc8dce1adba1e7e9bfc97e3e7135e2ce86f->leave($__internal_dbdced1acef511bb9fa4cdb374949dc8dce1adba1e7e9bfc97e3e7135e2ce86f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
