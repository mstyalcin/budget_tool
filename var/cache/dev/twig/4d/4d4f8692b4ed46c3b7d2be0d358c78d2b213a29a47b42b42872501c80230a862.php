<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_c43000fe0a97536004bd1662cc95ba996ed7913a124e700c760bbe10eb132f97 extends Twig_Template
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
        $__internal_1147a5598fbe15fcacda8bd30211d09bf5fb72973beb2cc9cc91479cf0b575b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1147a5598fbe15fcacda8bd30211d09bf5fb72973beb2cc9cc91479cf0b575b4->enter($__internal_1147a5598fbe15fcacda8bd30211d09bf5fb72973beb2cc9cc91479cf0b575b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_2ab3906b8c345f78b7e2f5a0f54eb8dc40476925e345ca0a4e9b9e80a20730cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ab3906b8c345f78b7e2f5a0f54eb8dc40476925e345ca0a4e9b9e80a20730cc->enter($__internal_2ab3906b8c345f78b7e2f5a0f54eb8dc40476925e345ca0a4e9b9e80a20730cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_1147a5598fbe15fcacda8bd30211d09bf5fb72973beb2cc9cc91479cf0b575b4->leave($__internal_1147a5598fbe15fcacda8bd30211d09bf5fb72973beb2cc9cc91479cf0b575b4_prof);

        
        $__internal_2ab3906b8c345f78b7e2f5a0f54eb8dc40476925e345ca0a4e9b9e80a20730cc->leave($__internal_2ab3906b8c345f78b7e2f5a0f54eb8dc40476925e345ca0a4e9b9e80a20730cc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
", "@Twig/Exception/error.atom.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
