<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0be84f0dcfd80b3fda745df9aecad38bbe9765482a6e09afe70418d652a7c165 extends Twig_Template
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
        $__internal_c2c2ca0d22eb477359484346f24f489a67e50e71edd66cf6b1b123650795d3c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2c2ca0d22eb477359484346f24f489a67e50e71edd66cf6b1b123650795d3c3->enter($__internal_c2c2ca0d22eb477359484346f24f489a67e50e71edd66cf6b1b123650795d3c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_acc2d18519a73f36b4bb3c6ca3c9c242107a5f6e24b3ba4257027b5cc6bbc4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acc2d18519a73f36b4bb3c6ca3c9c242107a5f6e24b3ba4257027b5cc6bbc4f7->enter($__internal_acc2d18519a73f36b4bb3c6ca3c9c242107a5f6e24b3ba4257027b5cc6bbc4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_c2c2ca0d22eb477359484346f24f489a67e50e71edd66cf6b1b123650795d3c3->leave($__internal_c2c2ca0d22eb477359484346f24f489a67e50e71edd66cf6b1b123650795d3c3_prof);

        
        $__internal_acc2d18519a73f36b4bb3c6ca3c9c242107a5f6e24b3ba4257027b5cc6bbc4f7->leave($__internal_acc2d18519a73f36b4bb3c6ca3c9c242107a5f6e24b3ba4257027b5cc6bbc4f7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php foreach (\$attr as \$k => \$v): ?>
<?php if ('placeholder' === \$k || 'title' === \$k): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$v, array(), \$translation_domain) : \$v)) ?>
<?php elseif (true === \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (false !== \$v): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/attributes.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
