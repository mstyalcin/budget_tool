<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_8c0daf5ea819e95f88daba415f1ea297f384fcfa8abbe2130a4338d1fd3cb5ee extends Twig_Template
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
        $__internal_61c07d84b5f7fbf33e2828322ffb6b9dad204950f69b5db401cfc9369afb7332 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61c07d84b5f7fbf33e2828322ffb6b9dad204950f69b5db401cfc9369afb7332->enter($__internal_61c07d84b5f7fbf33e2828322ffb6b9dad204950f69b5db401cfc9369afb7332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_c93874adf794258ae87d47e7af343759061eb5e97cdf120630138aae1c43db34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c93874adf794258ae87d47e7af343759061eb5e97cdf120630138aae1c43db34->enter($__internal_c93874adf794258ae87d47e7af343759061eb5e97cdf120630138aae1c43db34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_61c07d84b5f7fbf33e2828322ffb6b9dad204950f69b5db401cfc9369afb7332->leave($__internal_61c07d84b5f7fbf33e2828322ffb6b9dad204950f69b5db401cfc9369afb7332_prof);

        
        $__internal_c93874adf794258ae87d47e7af343759061eb5e97cdf120630138aae1c43db34->leave($__internal_c93874adf794258ae87d47e7af343759061eb5e97cdf120630138aae1c43db34_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
