<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ae0deb548ed99a91ddc8a7df55d0a1acc3ea1fc685b45c5178e2688d3a04071f extends Twig_Template
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
        $__internal_23670f6ce59a6749d5fae9ebbe66e955333ee601901ce8632b8bf199a0ff90b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23670f6ce59a6749d5fae9ebbe66e955333ee601901ce8632b8bf199a0ff90b1->enter($__internal_23670f6ce59a6749d5fae9ebbe66e955333ee601901ce8632b8bf199a0ff90b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_90795bc37f7a5f386b713344088fc8e6f443f550fac0504d2bb914ec8cf1ea38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90795bc37f7a5f386b713344088fc8e6f443f550fac0504d2bb914ec8cf1ea38->enter($__internal_90795bc37f7a5f386b713344088fc8e6f443f550fac0504d2bb914ec8cf1ea38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_23670f6ce59a6749d5fae9ebbe66e955333ee601901ce8632b8bf199a0ff90b1->leave($__internal_23670f6ce59a6749d5fae9ebbe66e955333ee601901ce8632b8bf199a0ff90b1_prof);

        
        $__internal_90795bc37f7a5f386b713344088fc8e6f443f550fac0504d2bb914ec8cf1ea38->leave($__internal_90795bc37f7a5f386b713344088fc8e6f443f550fac0504d2bb914ec8cf1ea38_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
", "@Twig/Exception/exception.rdf.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
