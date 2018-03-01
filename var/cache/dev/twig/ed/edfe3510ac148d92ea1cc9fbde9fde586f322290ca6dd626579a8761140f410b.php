<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_81a9e5401dc4dca1cf2825130da666f896a7b13f191c9bb327e5234d04c21ebb extends Twig_Template
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
        $__internal_ca5a09bd031cd4d51626a29d037b48b6fbed0dba7b378f1962cb0ed1f11ec38e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca5a09bd031cd4d51626a29d037b48b6fbed0dba7b378f1962cb0ed1f11ec38e->enter($__internal_ca5a09bd031cd4d51626a29d037b48b6fbed0dba7b378f1962cb0ed1f11ec38e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_306413c07879b5145616909f7a7797b9a6fd0bd18ade4705f07b8c61e6966347 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_306413c07879b5145616909f7a7797b9a6fd0bd18ade4705f07b8c61e6966347->enter($__internal_306413c07879b5145616909f7a7797b9a6fd0bd18ade4705f07b8c61e6966347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_ca5a09bd031cd4d51626a29d037b48b6fbed0dba7b378f1962cb0ed1f11ec38e->leave($__internal_ca5a09bd031cd4d51626a29d037b48b6fbed0dba7b378f1962cb0ed1f11ec38e_prof);

        
        $__internal_306413c07879b5145616909f7a7797b9a6fd0bd18ade4705f07b8c61e6966347->leave($__internal_306413c07879b5145616909f7a7797b9a6fd0bd18ade4705f07b8c61e6966347_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
