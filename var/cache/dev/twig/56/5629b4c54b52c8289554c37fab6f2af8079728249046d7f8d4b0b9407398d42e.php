<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_a02a2e50eb9cafefcc9bf2e97507064928bb563a207d140bd0d6f2ad448fd4ba extends Twig_Template
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
        $__internal_cd05eccfab517f4f2cff88f8fa60e8cea8082292304465d5d94736f04dc894b2 = $this->env->getExtension("native_profiler");
        $__internal_cd05eccfab517f4f2cff88f8fa60e8cea8082292304465d5d94736f04dc894b2->enter($__internal_cd05eccfab517f4f2cff88f8fa60e8cea8082292304465d5d94736f04dc894b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_cd05eccfab517f4f2cff88f8fa60e8cea8082292304465d5d94736f04dc894b2->leave($__internal_cd05eccfab517f4f2cff88f8fa60e8cea8082292304465d5d94736f04dc894b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
