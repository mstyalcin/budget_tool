<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_ec416e03217a3aec189a9d755b2511ba70848f3dd3b036c5dc3f5ff39e9a9384 extends Twig_Template
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
        $__internal_238d492ee7fbf5fb8714010c56ef86182f4a6e2feeba5165f0de7726ec0b57b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_238d492ee7fbf5fb8714010c56ef86182f4a6e2feeba5165f0de7726ec0b57b7->enter($__internal_238d492ee7fbf5fb8714010c56ef86182f4a6e2feeba5165f0de7726ec0b57b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_1b2a0744c15aeaa1f437e12ee215f7ae65adcd766ad1838d2cfd22e28794a50c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2a0744c15aeaa1f437e12ee215f7ae65adcd766ad1838d2cfd22e28794a50c->enter($__internal_1b2a0744c15aeaa1f437e12ee215f7ae65adcd766ad1838d2cfd22e28794a50c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_238d492ee7fbf5fb8714010c56ef86182f4a6e2feeba5165f0de7726ec0b57b7->leave($__internal_238d492ee7fbf5fb8714010c56ef86182f4a6e2feeba5165f0de7726ec0b57b7_prof);

        
        $__internal_1b2a0744c15aeaa1f437e12ee215f7ae65adcd766ad1838d2cfd22e28794a50c->leave($__internal_1b2a0744c15aeaa1f437e12ee215f7ae65adcd766ad1838d2cfd22e28794a50c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
