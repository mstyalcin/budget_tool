<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_93825f0c7238c4301ad41276fd1c63641f2734c0def4149794edf8f380ae0a93 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3c11d7a34d61189de590d586fd3bb4cd2d20c38fb20babf42b0802b12528bd6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c11d7a34d61189de590d586fd3bb4cd2d20c38fb20babf42b0802b12528bd6a->enter($__internal_3c11d7a34d61189de590d586fd3bb4cd2d20c38fb20babf42b0802b12528bd6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_41f2c647b0a6b89e2df55b3d0f95f2c550dd7d204fd64ad1081cbbe680a84c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41f2c647b0a6b89e2df55b3d0f95f2c550dd7d204fd64ad1081cbbe680a84c5e->enter($__internal_41f2c647b0a6b89e2df55b3d0f95f2c550dd7d204fd64ad1081cbbe680a84c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3c11d7a34d61189de590d586fd3bb4cd2d20c38fb20babf42b0802b12528bd6a->leave($__internal_3c11d7a34d61189de590d586fd3bb4cd2d20c38fb20babf42b0802b12528bd6a_prof);

        
        $__internal_41f2c647b0a6b89e2df55b3d0f95f2c550dd7d204fd64ad1081cbbe680a84c5e->leave($__internal_41f2c647b0a6b89e2df55b3d0f95f2c550dd7d204fd64ad1081cbbe680a84c5e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_ec309455483e2e61383a5b5a5c632504d8c33e6433d15e9cc383037edfc618bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec309455483e2e61383a5b5a5c632504d8c33e6433d15e9cc383037edfc618bb->enter($__internal_ec309455483e2e61383a5b5a5c632504d8c33e6433d15e9cc383037edfc618bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_0da1e463e76c8611ff320381da92784dfc1d28f4b143d69ec5761049f12fd778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0da1e463e76c8611ff320381da92784dfc1d28f4b143d69ec5761049f12fd778->enter($__internal_0da1e463e76c8611ff320381da92784dfc1d28f4b143d69ec5761049f12fd778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_0da1e463e76c8611ff320381da92784dfc1d28f4b143d69ec5761049f12fd778->leave($__internal_0da1e463e76c8611ff320381da92784dfc1d28f4b143d69ec5761049f12fd778_prof);

        
        $__internal_ec309455483e2e61383a5b5a5c632504d8c33e6433d15e9cc383037edfc618bb->leave($__internal_ec309455483e2e61383a5b5a5c632504d8c33e6433d15e9cc383037edfc618bb_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_4705e1c6ff53744ffba9d188065156af76fa9ccf33399e71abea27043806997b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4705e1c6ff53744ffba9d188065156af76fa9ccf33399e71abea27043806997b->enter($__internal_4705e1c6ff53744ffba9d188065156af76fa9ccf33399e71abea27043806997b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a3433a81884f6deb32deab348804879830c8cb81d3935e1ceae7ac880d930ef1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3433a81884f6deb32deab348804879830c8cb81d3935e1ceae7ac880d930ef1->enter($__internal_a3433a81884f6deb32deab348804879830c8cb81d3935e1ceae7ac880d930ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_a3433a81884f6deb32deab348804879830c8cb81d3935e1ceae7ac880d930ef1->leave($__internal_a3433a81884f6deb32deab348804879830c8cb81d3935e1ceae7ac880d930ef1_prof);

        
        $__internal_4705e1c6ff53744ffba9d188065156af76fa9ccf33399e71abea27043806997b->leave($__internal_4705e1c6ff53744ffba9d188065156af76fa9ccf33399e71abea27043806997b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
