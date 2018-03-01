<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3fd53ae1cbb15a96db84a39f8d5ffecc6917c0506d4403e3a5c6e3a20249a138 extends Twig_Template
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
        $__internal_65304472cca33dfba256c28cfa66c3fa717e439a096318a8636c155d793eb7e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65304472cca33dfba256c28cfa66c3fa717e439a096318a8636c155d793eb7e3->enter($__internal_65304472cca33dfba256c28cfa66c3fa717e439a096318a8636c155d793eb7e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_b2ba26bb3584134db89dc3f372c39f36316f98797ad4a3534213889dbf6dc762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2ba26bb3584134db89dc3f372c39f36316f98797ad4a3534213889dbf6dc762->enter($__internal_b2ba26bb3584134db89dc3f372c39f36316f98797ad4a3534213889dbf6dc762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_65304472cca33dfba256c28cfa66c3fa717e439a096318a8636c155d793eb7e3->leave($__internal_65304472cca33dfba256c28cfa66c3fa717e439a096318a8636c155d793eb7e3_prof);

        
        $__internal_b2ba26bb3584134db89dc3f372c39f36316f98797ad4a3534213889dbf6dc762->leave($__internal_b2ba26bb3584134db89dc3f372c39f36316f98797ad4a3534213889dbf6dc762_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
