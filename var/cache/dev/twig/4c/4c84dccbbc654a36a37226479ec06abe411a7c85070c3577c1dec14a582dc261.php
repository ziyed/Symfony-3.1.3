<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_828de4168fb3193561da17534fd9aefb0bbc4b01e4346ae491389f2211da9b2b extends Twig_Template
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
        $__internal_1da15367bedc06ea81c969da34d7ed9ce41790e85b7a5185bcb259abf4decad8 = $this->env->getExtension("native_profiler");
        $__internal_1da15367bedc06ea81c969da34d7ed9ce41790e85b7a5185bcb259abf4decad8->enter($__internal_1da15367bedc06ea81c969da34d7ed9ce41790e85b7a5185bcb259abf4decad8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_1da15367bedc06ea81c969da34d7ed9ce41790e85b7a5185bcb259abf4decad8->leave($__internal_1da15367bedc06ea81c969da34d7ed9ce41790e85b7a5185bcb259abf4decad8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
