<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_a2e7c1cfaf310a15fe341c6617cd96c2607b5b350af76e3293ea78599b7c35f2 extends Twig_Template
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
        $__internal_65c1b6337f8a1cee6517d558072708a5e74b54a158e9021fc8ceb71168f16a77 = $this->env->getExtension("native_profiler");
        $__internal_65c1b6337f8a1cee6517d558072708a5e74b54a158e9021fc8ceb71168f16a77->enter($__internal_65c1b6337f8a1cee6517d558072708a5e74b54a158e9021fc8ceb71168f16a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_65c1b6337f8a1cee6517d558072708a5e74b54a158e9021fc8ceb71168f16a77->leave($__internal_65c1b6337f8a1cee6517d558072708a5e74b54a158e9021fc8ceb71168f16a77_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
