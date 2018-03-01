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
        $__internal_4350687150429cb204635778948fc87c5473c4715bccc3094861d60f56f5ba44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4350687150429cb204635778948fc87c5473c4715bccc3094861d60f56f5ba44->enter($__internal_4350687150429cb204635778948fc87c5473c4715bccc3094861d60f56f5ba44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_fbbcfe281604929e33671c64bb766d5e90ba9da0bf099c09f05630b5009ed8b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbbcfe281604929e33671c64bb766d5e90ba9da0bf099c09f05630b5009ed8b2->enter($__internal_fbbcfe281604929e33671c64bb766d5e90ba9da0bf099c09f05630b5009ed8b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_4350687150429cb204635778948fc87c5473c4715bccc3094861d60f56f5ba44->leave($__internal_4350687150429cb204635778948fc87c5473c4715bccc3094861d60f56f5ba44_prof);

        
        $__internal_fbbcfe281604929e33671c64bb766d5e90ba9da0bf099c09f05630b5009ed8b2->leave($__internal_fbbcfe281604929e33671c64bb766d5e90ba9da0bf099c09f05630b5009ed8b2_prof);

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
