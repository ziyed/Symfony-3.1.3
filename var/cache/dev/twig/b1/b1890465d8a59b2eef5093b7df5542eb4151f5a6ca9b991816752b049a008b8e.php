<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_d71c263c371a2169f5c1c72da3810c20c3f9fd51bc7c2fdbb07e625bf070e936 extends Twig_Template
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
        $__internal_0bb7dc3e3a58b7505168df1dc1c18eb1f8115886e754040b46ec95d5bb83c4d7 = $this->env->getExtension("native_profiler");
        $__internal_0bb7dc3e3a58b7505168df1dc1c18eb1f8115886e754040b46ec95d5bb83c4d7->enter($__internal_0bb7dc3e3a58b7505168df1dc1c18eb1f8115886e754040b46ec95d5bb83c4d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_0bb7dc3e3a58b7505168df1dc1c18eb1f8115886e754040b46ec95d5bb83c4d7->leave($__internal_0bb7dc3e3a58b7505168df1dc1c18eb1f8115886e754040b46ec95d5bb83c4d7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!isset($render_rest) || $render_rest): ?>*/
/* <?php echo $view['form']->rest($form) ?>*/
/* <?php endif ?>*/
/* </form>*/
/* */
