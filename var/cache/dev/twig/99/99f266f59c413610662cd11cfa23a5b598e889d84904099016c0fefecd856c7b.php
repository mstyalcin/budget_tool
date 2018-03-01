<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_68f8a600a97daab33526f76ef500b32f261595419993e3dba667d3bdc4d891bd extends Twig_Template
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
        $__internal_60c9e1a0214571b10e15e7bd115a0db33b53064cef8145cd914b39d0dfb0ac34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60c9e1a0214571b10e15e7bd115a0db33b53064cef8145cd914b39d0dfb0ac34->enter($__internal_60c9e1a0214571b10e15e7bd115a0db33b53064cef8145cd914b39d0dfb0ac34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_c196e2e986b09cb7bd104b813970489e49e125bcdf8c00a38fae21be0d11e777 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c196e2e986b09cb7bd104b813970489e49e125bcdf8c00a38fae21be0d11e777->enter($__internal_c196e2e986b09cb7bd104b813970489e49e125bcdf8c00a38fae21be0d11e777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_60c9e1a0214571b10e15e7bd115a0db33b53064cef8145cd914b39d0dfb0ac34->leave($__internal_60c9e1a0214571b10e15e7bd115a0db33b53064cef8145cd914b39d0dfb0ac34_prof);

        
        $__internal_c196e2e986b09cb7bd104b813970489e49e125bcdf8c00a38fae21be0d11e777->leave($__internal_c196e2e986b09cb7bd104b813970489e49e125bcdf8c00a38fae21be0d11e777_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
