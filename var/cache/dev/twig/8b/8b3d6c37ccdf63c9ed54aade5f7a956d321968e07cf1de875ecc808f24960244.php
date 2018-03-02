<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_ddfa1aeb25717b1ba5ef6db1fe00b777c14325d397c3835630ce6014427dd9c3 extends Twig_Template
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
        $__internal_284cd58073ded66bf63101f0afafb7ca53952a351f6e616d5f5fbf2dac932cd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_284cd58073ded66bf63101f0afafb7ca53952a351f6e616d5f5fbf2dac932cd7->enter($__internal_284cd58073ded66bf63101f0afafb7ca53952a351f6e616d5f5fbf2dac932cd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_761790ab116a012e5f93bb79bc57b3c0224bbc7c1bb179894b1fd0bfe60b6f0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_761790ab116a012e5f93bb79bc57b3c0224bbc7c1bb179894b1fd0bfe60b6f0f->enter($__internal_761790ab116a012e5f93bb79bc57b3c0224bbc7c1bb179894b1fd0bfe60b6f0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_284cd58073ded66bf63101f0afafb7ca53952a351f6e616d5f5fbf2dac932cd7->leave($__internal_284cd58073ded66bf63101f0afafb7ca53952a351f6e616d5f5fbf2dac932cd7_prof);

        
        $__internal_761790ab116a012e5f93bb79bc57b3c0224bbc7c1bb179894b1fd0bfe60b6f0f->leave($__internal_761790ab116a012e5f93bb79bc57b3c0224bbc7c1bb179894b1fd0bfe60b6f0f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
