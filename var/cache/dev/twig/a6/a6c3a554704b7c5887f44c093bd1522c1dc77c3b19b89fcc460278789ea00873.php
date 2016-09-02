<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_6dc5a8f7d3cb59eb79786e3bd53378c71389a4a03b1d76f3d700381e2bde1d2f extends Twig_Template
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
        $__internal_3749bb9953da5737a97a634e864a70f491894f802966112e65b931f25124543c = $this->env->getExtension("native_profiler");
        $__internal_3749bb9953da5737a97a634e864a70f491894f802966112e65b931f25124543c->enter($__internal_3749bb9953da5737a97a634e864a70f491894f802966112e65b931f25124543c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3749bb9953da5737a97a634e864a70f491894f802966112e65b931f25124543c->leave($__internal_3749bb9953da5737a97a634e864a70f491894f802966112e65b931f25124543c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
