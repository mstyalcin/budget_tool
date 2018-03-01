<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e430b77aba1bd6b68b9d06c09bc219d12f2f2766c0d072e69fd3cd5f5b4313de extends Twig_Template
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
        $__internal_a39f89b3ac112e64790d0d170728f2328d6083769eb38a0f974824b598c7c073 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a39f89b3ac112e64790d0d170728f2328d6083769eb38a0f974824b598c7c073->enter($__internal_a39f89b3ac112e64790d0d170728f2328d6083769eb38a0f974824b598c7c073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_46ce920d3a9e45bf9b8fc4c45f216dc833da7204fe53686e4d1fff0c60d5dcca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ce920d3a9e45bf9b8fc4c45f216dc833da7204fe53686e4d1fff0c60d5dcca->enter($__internal_46ce920d3a9e45bf9b8fc4c45f216dc833da7204fe53686e4d1fff0c60d5dcca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a39f89b3ac112e64790d0d170728f2328d6083769eb38a0f974824b598c7c073->leave($__internal_a39f89b3ac112e64790d0d170728f2328d6083769eb38a0f974824b598c7c073_prof);

        
        $__internal_46ce920d3a9e45bf9b8fc4c45f216dc833da7204fe53686e4d1fff0c60d5dcca->leave($__internal_46ce920d3a9e45bf9b8fc4c45f216dc833da7204fe53686e4d1fff0c60d5dcca_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
