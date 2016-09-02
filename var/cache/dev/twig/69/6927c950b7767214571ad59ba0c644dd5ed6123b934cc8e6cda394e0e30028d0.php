<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_ceb631af2b5f5a36e7493592ee5d6f3f289f9780aadbc6be6ab66342ae868a5d extends Twig_Template
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
        $__internal_9ce28e47ed587d3cb4580f9a202171248f456fdcf5f0baf3c8065f849400ddc7 = $this->env->getExtension("native_profiler");
        $__internal_9ce28e47ed587d3cb4580f9a202171248f456fdcf5f0baf3c8065f849400ddc7->enter($__internal_9ce28e47ed587d3cb4580f9a202171248f456fdcf5f0baf3c8065f849400ddc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_9ce28e47ed587d3cb4580f9a202171248f456fdcf5f0baf3c8065f849400ddc7->leave($__internal_9ce28e47ed587d3cb4580f9a202171248f456fdcf5f0baf3c8065f849400ddc7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
