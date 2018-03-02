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
        $__internal_ac3fa38294563031720b378fca18956dd66c85f122d011182333599ab5dd3630 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac3fa38294563031720b378fca18956dd66c85f122d011182333599ab5dd3630->enter($__internal_ac3fa38294563031720b378fca18956dd66c85f122d011182333599ab5dd3630_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_bbe64945cf1d44d104e631647bbfe2ce55ade6d4128209ea00628e6d786fb4bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbe64945cf1d44d104e631647bbfe2ce55ade6d4128209ea00628e6d786fb4bb->enter($__internal_bbe64945cf1d44d104e631647bbfe2ce55ade6d4128209ea00628e6d786fb4bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_ac3fa38294563031720b378fca18956dd66c85f122d011182333599ab5dd3630->leave($__internal_ac3fa38294563031720b378fca18956dd66c85f122d011182333599ab5dd3630_prof);

        
        $__internal_bbe64945cf1d44d104e631647bbfe2ce55ade6d4128209ea00628e6d786fb4bb->leave($__internal_bbe64945cf1d44d104e631647bbfe2ce55ade6d4128209ea00628e6d786fb4bb_prof);

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
