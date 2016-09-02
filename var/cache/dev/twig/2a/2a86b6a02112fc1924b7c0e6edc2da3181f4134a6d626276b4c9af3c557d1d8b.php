<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_098cf83c283932eda1c1c5a3f1667b311f6207b6d02ec36ef428a3052f852181 extends Twig_Template
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
        $__internal_b17d5cfab70a25c488abd868a102bb500289351a08c1e5d55a5d9852b6ab83a2 = $this->env->getExtension("native_profiler");
        $__internal_b17d5cfab70a25c488abd868a102bb500289351a08c1e5d55a5d9852b6ab83a2->enter($__internal_b17d5cfab70a25c488abd868a102bb500289351a08c1e5d55a5d9852b6ab83a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_b17d5cfab70a25c488abd868a102bb500289351a08c1e5d55a5d9852b6ab83a2->leave($__internal_b17d5cfab70a25c488abd868a102bb500289351a08c1e5d55a5d9852b6ab83a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
