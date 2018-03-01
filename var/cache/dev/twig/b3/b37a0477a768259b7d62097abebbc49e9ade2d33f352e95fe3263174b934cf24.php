<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_e93611eea60a37cca220c6b053b39d7299464e7c407582e22f8a606a080aa7fc extends Twig_Template
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
        $__internal_00444f0c55534cd6de151b61809d60e22393ef377c2c373eaf6886d8e9bbb15f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00444f0c55534cd6de151b61809d60e22393ef377c2c373eaf6886d8e9bbb15f->enter($__internal_00444f0c55534cd6de151b61809d60e22393ef377c2c373eaf6886d8e9bbb15f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_ddda1a7bd9e4370b1a14b39a7d65a615b3c5cadeba73bbdb1635ec4718fb737f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddda1a7bd9e4370b1a14b39a7d65a615b3c5cadeba73bbdb1635ec4718fb737f->enter($__internal_ddda1a7bd9e4370b1a14b39a7d65a615b3c5cadeba73bbdb1635ec4718fb737f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_00444f0c55534cd6de151b61809d60e22393ef377c2c373eaf6886d8e9bbb15f->leave($__internal_00444f0c55534cd6de151b61809d60e22393ef377c2c373eaf6886d8e9bbb15f_prof);

        
        $__internal_ddda1a7bd9e4370b1a14b39a7d65a615b3c5cadeba73bbdb1635ec4718fb737f->leave($__internal_ddda1a7bd9e4370b1a14b39a7d65a615b3c5cadeba73bbdb1635ec4718fb737f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}
