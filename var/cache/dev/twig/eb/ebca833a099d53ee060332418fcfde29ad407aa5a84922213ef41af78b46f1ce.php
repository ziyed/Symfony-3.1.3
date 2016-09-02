<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_705d81f9f2f8923d216242e3d6310fa3850f01419fc08321b77c115e0c758fdd extends Twig_Template
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
        $__internal_d1a5d4543bd480d94eacfe1cc7a2d328cfac3e977cc61ba99b54d178aa6b1593 = $this->env->getExtension("native_profiler");
        $__internal_d1a5d4543bd480d94eacfe1cc7a2d328cfac3e977cc61ba99b54d178aa6b1593->enter($__internal_d1a5d4543bd480d94eacfe1cc7a2d328cfac3e977cc61ba99b54d178aa6b1593_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_d1a5d4543bd480d94eacfe1cc7a2d328cfac3e977cc61ba99b54d178aa6b1593->leave($__internal_d1a5d4543bd480d94eacfe1cc7a2d328cfac3e977cc61ba99b54d178aa6b1593_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (isset($prototype)): ?>*/
/*     <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>*/
/* <?php endif ?>*/
/* <?php echo $view['form']->widget($form, array('attr' => $attr)) ?>*/
/* */
