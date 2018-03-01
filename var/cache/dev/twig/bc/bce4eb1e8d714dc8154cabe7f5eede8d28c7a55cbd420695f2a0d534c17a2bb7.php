<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c1e7e20f3f519a57113fdf5287ccc014fbab15fe5dd0165485b8b8b6fe6bdc40 extends Twig_Template
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
        $__internal_f9eb2cb1508ff7e00067ebaf434b99d1551cad4a78ddf1681ce88109c7752d49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9eb2cb1508ff7e00067ebaf434b99d1551cad4a78ddf1681ce88109c7752d49->enter($__internal_f9eb2cb1508ff7e00067ebaf434b99d1551cad4a78ddf1681ce88109c7752d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_abe2021989add92e88716d2728d164eab02eadab4d6e85127de93b0290f1cb9a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abe2021989add92e88716d2728d164eab02eadab4d6e85127de93b0290f1cb9a->enter($__internal_abe2021989add92e88716d2728d164eab02eadab4d6e85127de93b0290f1cb9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_f9eb2cb1508ff7e00067ebaf434b99d1551cad4a78ddf1681ce88109c7752d49->leave($__internal_f9eb2cb1508ff7e00067ebaf434b99d1551cad4a78ddf1681ce88109c7752d49_prof);

        
        $__internal_abe2021989add92e88716d2728d164eab02eadab4d6e85127de93b0290f1cb9a->leave($__internal_abe2021989add92e88716d2728d164eab02eadab4d6e85127de93b0290f1cb9a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
