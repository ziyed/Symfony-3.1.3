<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_a73754d595c3760c2fb2807399b3c4cde6ebe33a96d4f58df653ec5afca2db76 extends Twig_Template
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
        $__internal_231c7a1c26c63da67f3858794a4ab47038c72b1a3c5010afbeb18055f2c0fdaa = $this->env->getExtension("native_profiler");
        $__internal_231c7a1c26c63da67f3858794a4ab47038c72b1a3c5010afbeb18055f2c0fdaa->enter($__internal_231c7a1c26c63da67f3858794a4ab47038c72b1a3c5010afbeb18055f2c0fdaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_231c7a1c26c63da67f3858794a4ab47038c72b1a3c5010afbeb18055f2c0fdaa->leave($__internal_231c7a1c26c63da67f3858794a4ab47038c72b1a3c5010afbeb18055f2c0fdaa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
