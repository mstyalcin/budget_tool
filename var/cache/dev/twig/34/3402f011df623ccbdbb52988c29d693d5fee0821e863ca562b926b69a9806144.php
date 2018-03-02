<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_04de49f606eb76c9e8c2d20ae4aab7d4a71e8bafa6d895af7672846deeac1499 extends Twig_Template
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
        $__internal_aa08d66e2bb6897c0d1661bbb4fb666e634f23965d779f1872d952df2a5bb288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa08d66e2bb6897c0d1661bbb4fb666e634f23965d779f1872d952df2a5bb288->enter($__internal_aa08d66e2bb6897c0d1661bbb4fb666e634f23965d779f1872d952df2a5bb288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_4d8d3bdb58a3fd831d64622965f76d92d558c023eb9c7b78441528fb8d959359 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d8d3bdb58a3fd831d64622965f76d92d558c023eb9c7b78441528fb8d959359->enter($__internal_4d8d3bdb58a3fd831d64622965f76d92d558c023eb9c7b78441528fb8d959359_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_aa08d66e2bb6897c0d1661bbb4fb666e634f23965d779f1872d952df2a5bb288->leave($__internal_aa08d66e2bb6897c0d1661bbb4fb666e634f23965d779f1872d952df2a5bb288_prof);

        
        $__internal_4d8d3bdb58a3fd831d64622965f76d92d558c023eb9c7b78441528fb8d959359->leave($__internal_4d8d3bdb58a3fd831d64622965f76d92d558c023eb9c7b78441528fb8d959359_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
