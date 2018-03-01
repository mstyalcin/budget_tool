<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_f072bb457faad82d262e89df58c07aa48caa41f94a16c80213dd0012d72fe0ce extends Twig_Template
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
        $__internal_dfa7a4a89ef899198d2382c7a760dfbb47c3e30fd85e1ce996417011faa1e2c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfa7a4a89ef899198d2382c7a760dfbb47c3e30fd85e1ce996417011faa1e2c6->enter($__internal_dfa7a4a89ef899198d2382c7a760dfbb47c3e30fd85e1ce996417011faa1e2c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_71e10649418a26e5f72bbed8369246caa31560e1e7d4e129281d974a6ac091f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71e10649418a26e5f72bbed8369246caa31560e1e7d4e129281d974a6ac091f6->enter($__internal_71e10649418a26e5f72bbed8369246caa31560e1e7d4e129281d974a6ac091f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_dfa7a4a89ef899198d2382c7a760dfbb47c3e30fd85e1ce996417011faa1e2c6->leave($__internal_dfa7a4a89ef899198d2382c7a760dfbb47c3e30fd85e1ce996417011faa1e2c6_prof);

        
        $__internal_71e10649418a26e5f72bbed8369246caa31560e1e7d4e129281d974a6ac091f6->leave($__internal_71e10649418a26e5f72bbed8369246caa31560e1e7d4e129281d974a6ac091f6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
