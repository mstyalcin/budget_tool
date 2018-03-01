<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_32c4ecc7ef9e1b53178bf7484c3a1557f5df16907efff51a36fc403f4d07e911 extends Twig_Template
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
        $__internal_2f1990017e7bcab60ee98db2f8f419f2e0fdb9964e11b21080b2bb9ff84c1134 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f1990017e7bcab60ee98db2f8f419f2e0fdb9964e11b21080b2bb9ff84c1134->enter($__internal_2f1990017e7bcab60ee98db2f8f419f2e0fdb9964e11b21080b2bb9ff84c1134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_1529977392d2fec1871fc07d284ebdf2a4fb569e7a7a5a6daf9a2d6b9f7f1eb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1529977392d2fec1871fc07d284ebdf2a4fb569e7a7a5a6daf9a2d6b9f7f1eb1->enter($__internal_1529977392d2fec1871fc07d284ebdf2a4fb569e7a7a5a6daf9a2d6b9f7f1eb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_2f1990017e7bcab60ee98db2f8f419f2e0fdb9964e11b21080b2bb9ff84c1134->leave($__internal_2f1990017e7bcab60ee98db2f8f419f2e0fdb9964e11b21080b2bb9ff84c1134_prof);

        
        $__internal_1529977392d2fec1871fc07d284ebdf2a4fb569e7a7a5a6daf9a2d6b9f7f1eb1->leave($__internal_1529977392d2fec1871fc07d284ebdf2a4fb569e7a7a5a6daf9a2d6b9f7f1eb1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
