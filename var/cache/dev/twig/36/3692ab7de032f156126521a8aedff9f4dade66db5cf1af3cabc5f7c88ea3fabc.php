<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_faf8cc0bb0784a1b73f92af8710ab6894f1b7053be2f8c6514bf9460df9c8d72 extends Twig_Template
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
        $__internal_b64ee3745625db3ce1f277491d8a365b53cc30c69bf3e9e9ab1bc249a1407fcb = $this->env->getExtension("native_profiler");
        $__internal_b64ee3745625db3ce1f277491d8a365b53cc30c69bf3e9e9ab1bc249a1407fcb->enter($__internal_b64ee3745625db3ce1f277491d8a365b53cc30c69bf3e9e9ab1bc249a1407fcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"
<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_b64ee3745625db3ce1f277491d8a365b53cc30c69bf3e9e9ab1bc249a1407fcb->leave($__internal_b64ee3745625db3ce1f277491d8a365b53cc30c69bf3e9e9ab1bc249a1407fcb_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"*/
/* <?php if ($disabled): ?>disabled="disabled" <?php endif ?>*/
/* <?php foreach ($choice_attr as $k => $v): ?>*/
/* <?php if ($v === true): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>*/
/* <?php elseif ($v !== false): ?>*/
/* <?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>*/
/* <?php endif ?>*/
/* <?php endforeach ?>*/
/* */
