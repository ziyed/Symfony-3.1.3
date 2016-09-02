<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_0ebdacd1751da0100417097ac3780081a2a890775746a93b3708bff6db1a7dc0 extends Twig_Template
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
        $__internal_4de65a8e8df64a476324e44d9f3e6cd7a1a9132d1f31ff6b8fb4bcf24aa8268e = $this->env->getExtension("native_profiler");
        $__internal_4de65a8e8df64a476324e44d9f3e6cd7a1a9132d1f31ff6b8fb4bcf24aa8268e->enter($__internal_4de65a8e8df64a476324e44d9f3e6cd7a1a9132d1f31ff6b8fb4bcf24aa8268e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4de65a8e8df64a476324e44d9f3e6cd7a1a9132d1f31ff6b8fb4bcf24aa8268e->leave($__internal_4de65a8e8df64a476324e44d9f3e6cd7a1a9132d1f31ff6b8fb4bcf24aa8268e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
