<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_db8471757d0ca7da99f025e519c273cc85662dc1cfde3a9bc707a67088aebf9d extends Twig_Template
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
        $__internal_2bf42cd2917a6feeed978892c84d8f34ad0ad25e1b9a076a8b28f2828efca2e7 = $this->env->getExtension("native_profiler");
        $__internal_2bf42cd2917a6feeed978892c84d8f34ad0ad25e1b9a076a8b28f2828efca2e7->enter($__internal_2bf42cd2917a6feeed978892c84d8f34ad0ad25e1b9a076a8b28f2828efca2e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_2bf42cd2917a6feeed978892c84d8f34ad0ad25e1b9a076a8b28f2828efca2e7->leave($__internal_2bf42cd2917a6feeed978892c84d8f34ad0ad25e1b9a076a8b28f2828efca2e7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
