<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_e0e73a4fd81f43a5eaaaecfd66862c14c7d5d528a1cefc32c1486713c3e63b30 extends Twig_Template
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
        $__internal_6ccf7a1a5376dc99dad6318ccff1da133f06fe6ca5fcb4ce4186fde5f07836ce = $this->env->getExtension("native_profiler");
        $__internal_6ccf7a1a5376dc99dad6318ccff1da133f06fe6ca5fcb4ce4186fde5f07836ce->enter($__internal_6ccf7a1a5376dc99dad6318ccff1da133f06fe6ca5fcb4ce4186fde5f07836ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_6ccf7a1a5376dc99dad6318ccff1da133f06fe6ca5fcb4ce4186fde5f07836ce->leave($__internal_6ccf7a1a5376dc99dad6318ccff1da133f06fe6ca5fcb4ce4186fde5f07836ce_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
