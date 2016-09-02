<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_21d0aa3c79e1bddc6d89e7cbb85843f9ae2453bda513ed53a9286cdcfc760248 extends Twig_Template
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
        $__internal_c1825145508319edb90b4bcc179dc197e623de46ad1806590e19fe827c656c52 = $this->env->getExtension("native_profiler");
        $__internal_c1825145508319edb90b4bcc179dc197e623de46ad1806590e19fe827c656c52->enter($__internal_c1825145508319edb90b4bcc179dc197e623de46ad1806590e19fe827c656c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_c1825145508319edb90b4bcc179dc197e623de46ad1806590e19fe827c656c52->leave($__internal_c1825145508319edb90b4bcc179dc197e623de46ad1806590e19fe827c656c52_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
