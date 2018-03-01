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
        $__internal_2c823da2d8741dad58e55aa72e5ed15b2158045f37c3346dadaa04f026bab775 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c823da2d8741dad58e55aa72e5ed15b2158045f37c3346dadaa04f026bab775->enter($__internal_2c823da2d8741dad58e55aa72e5ed15b2158045f37c3346dadaa04f026bab775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_14329b9e907032bbeb8d7b437bb89f57af83b40ddb563edfb70a9040c5446d96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14329b9e907032bbeb8d7b437bb89f57af83b40ddb563edfb70a9040c5446d96->enter($__internal_14329b9e907032bbeb8d7b437bb89f57af83b40ddb563edfb70a9040c5446d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2c823da2d8741dad58e55aa72e5ed15b2158045f37c3346dadaa04f026bab775->leave($__internal_2c823da2d8741dad58e55aa72e5ed15b2158045f37c3346dadaa04f026bab775_prof);

        
        $__internal_14329b9e907032bbeb8d7b437bb89f57af83b40ddb563edfb70a9040c5446d96->leave($__internal_14329b9e907032bbeb8d7b437bb89f57af83b40ddb563edfb70a9040c5446d96_prof);

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
