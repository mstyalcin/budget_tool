<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_fffaeb478b2987bb7b5ece03ef70a3245bd567e390a16a1695e114d312304c59 extends Twig_Template
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
        $__internal_d8b37e2c741601b859bfd7aa59d7f4f267d261fcbba25f29a7109010e6ca4003 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b37e2c741601b859bfd7aa59d7f4f267d261fcbba25f29a7109010e6ca4003->enter($__internal_d8b37e2c741601b859bfd7aa59d7f4f267d261fcbba25f29a7109010e6ca4003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_a1c05e7e9bb5a315a756de631431f3e5c92452cfe66ef488b6d8150b2d89a2bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1c05e7e9bb5a315a756de631431f3e5c92452cfe66ef488b6d8150b2d89a2bb->enter($__internal_a1c05e7e9bb5a315a756de631431f3e5c92452cfe66ef488b6d8150b2d89a2bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d8b37e2c741601b859bfd7aa59d7f4f267d261fcbba25f29a7109010e6ca4003->leave($__internal_d8b37e2c741601b859bfd7aa59d7f4f267d261fcbba25f29a7109010e6ca4003_prof);

        
        $__internal_a1c05e7e9bb5a315a756de631431f3e5c92452cfe66ef488b6d8150b2d89a2bb->leave($__internal_a1c05e7e9bb5a315a756de631431f3e5c92452cfe66ef488b6d8150b2d89a2bb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
