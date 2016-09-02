<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_8531067b49fc1c50e7c695251a5dcd287bdb48d817758291e3c7abace5a6c15c extends Twig_Template
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
        $__internal_11d64296cb00b1e5b402e11d69f961cc5eab9047fbcb93912199173c97dce76c = $this->env->getExtension("native_profiler");
        $__internal_11d64296cb00b1e5b402e11d69f961cc5eab9047fbcb93912199173c97dce76c->enter($__internal_11d64296cb00b1e5b402e11d69f961cc5eab9047fbcb93912199173c97dce76c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_11d64296cb00b1e5b402e11d69f961cc5eab9047fbcb93912199173c97dce76c->leave($__internal_11d64296cb00b1e5b402e11d69f961cc5eab9047fbcb93912199173c97dce76c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
