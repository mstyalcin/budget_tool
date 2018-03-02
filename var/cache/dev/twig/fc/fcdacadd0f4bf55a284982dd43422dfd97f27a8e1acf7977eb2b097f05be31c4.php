<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_4283c9523b8a8364f38c8b4c29b237880bbe8e4c11eb1ac9df3026fe0518156d extends Twig_Template
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
        $__internal_b2f74b3e7b7e0db2538bfc5b3926b383cff8d14ef9ea5c7c6bbc3e01ae85c300 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2f74b3e7b7e0db2538bfc5b3926b383cff8d14ef9ea5c7c6bbc3e01ae85c300->enter($__internal_b2f74b3e7b7e0db2538bfc5b3926b383cff8d14ef9ea5c7c6bbc3e01ae85c300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_7fb0432d32cbfa155fa62bdd498b57f978047b30d5e35d01c3acd9c311fd639b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fb0432d32cbfa155fa62bdd498b57f978047b30d5e35d01c3acd9c311fd639b->enter($__internal_7fb0432d32cbfa155fa62bdd498b57f978047b30d5e35d01c3acd9c311fd639b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b2f74b3e7b7e0db2538bfc5b3926b383cff8d14ef9ea5c7c6bbc3e01ae85c300->leave($__internal_b2f74b3e7b7e0db2538bfc5b3926b383cff8d14ef9ea5c7c6bbc3e01ae85c300_prof);

        
        $__internal_7fb0432d32cbfa155fa62bdd498b57f978047b30d5e35d01c3acd9c311fd639b->leave($__internal_7fb0432d32cbfa155fa62bdd498b57f978047b30d5e35d01c3acd9c311fd639b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
