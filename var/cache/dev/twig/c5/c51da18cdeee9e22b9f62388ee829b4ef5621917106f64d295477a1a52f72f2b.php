<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_5117a2b8803d0116b89beb74d228e8aa6df0244738399c0c9160d4ddb7459414 extends Twig_Template
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
        $__internal_0b4e1aa66fc454319bf239f2bf639de6531470e934f60c3d05bae1ffb3a7e2cc = $this->env->getExtension("native_profiler");
        $__internal_0b4e1aa66fc454319bf239f2bf639de6531470e934f60c3d05bae1ffb3a7e2cc->enter($__internal_0b4e1aa66fc454319bf239f2bf639de6531470e934f60c3d05bae1ffb3a7e2cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_0b4e1aa66fc454319bf239f2bf639de6531470e934f60c3d05bae1ffb3a7e2cc->leave($__internal_0b4e1aa66fc454319bf239f2bf639de6531470e934f60c3d05bae1ffb3a7e2cc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
