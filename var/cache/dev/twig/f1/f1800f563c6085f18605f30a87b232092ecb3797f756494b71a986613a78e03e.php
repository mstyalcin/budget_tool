<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_951b05ec52f99e45e61bd38eaaf6a4aabd2937734d575e777c1c15a0fe643da7 extends Twig_Template
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
        $__internal_aa756d1babf377dbf13421c93c34b8c84d25b14b1e8c5a5292f24c017b95bedc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa756d1babf377dbf13421c93c34b8c84d25b14b1e8c5a5292f24c017b95bedc->enter($__internal_aa756d1babf377dbf13421c93c34b8c84d25b14b1e8c5a5292f24c017b95bedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_4470107fa9fc091fac7baccf521093a46e5a145160be9705675965711e375da6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4470107fa9fc091fac7baccf521093a46e5a145160be9705675965711e375da6->enter($__internal_4470107fa9fc091fac7baccf521093a46e5a145160be9705675965711e375da6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_aa756d1babf377dbf13421c93c34b8c84d25b14b1e8c5a5292f24c017b95bedc->leave($__internal_aa756d1babf377dbf13421c93c34b8c84d25b14b1e8c5a5292f24c017b95bedc_prof);

        
        $__internal_4470107fa9fc091fac7baccf521093a46e5a145160be9705675965711e375da6->leave($__internal_4470107fa9fc091fac7baccf521093a46e5a145160be9705675965711e375da6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
