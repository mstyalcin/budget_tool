<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_4988eb23707d8fdeb5a3076d68e58262a30b1e39da2d608b743765576fe38c49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b50a7b96b6f115bce5854f7990d703d80ad627375714acc191678a278995ce17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b50a7b96b6f115bce5854f7990d703d80ad627375714acc191678a278995ce17->enter($__internal_b50a7b96b6f115bce5854f7990d703d80ad627375714acc191678a278995ce17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_f1ece51b21f12d8424deac6a6d920b0ed04db23120444b5cc80932376a7e7af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1ece51b21f12d8424deac6a6d920b0ed04db23120444b5cc80932376a7e7af9->enter($__internal_f1ece51b21f12d8424deac6a6d920b0ed04db23120444b5cc80932376a7e7af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b50a7b96b6f115bce5854f7990d703d80ad627375714acc191678a278995ce17->leave($__internal_b50a7b96b6f115bce5854f7990d703d80ad627375714acc191678a278995ce17_prof);

        
        $__internal_f1ece51b21f12d8424deac6a6d920b0ed04db23120444b5cc80932376a7e7af9->leave($__internal_f1ece51b21f12d8424deac6a6d920b0ed04db23120444b5cc80932376a7e7af9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_43c455c5429fa975e42a575b41fd77649d3b99fc16a3dd1748f0bd686c82f50b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c455c5429fa975e42a575b41fd77649d3b99fc16a3dd1748f0bd686c82f50b->enter($__internal_43c455c5429fa975e42a575b41fd77649d3b99fc16a3dd1748f0bd686c82f50b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e3c56dfb79946bb9a33e9f386f79c1a17fc1ac66335940761da548daf303a633 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3c56dfb79946bb9a33e9f386f79c1a17fc1ac66335940761da548daf303a633->enter($__internal_e3c56dfb79946bb9a33e9f386f79c1a17fc1ac66335940761da548daf303a633_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_e3c56dfb79946bb9a33e9f386f79c1a17fc1ac66335940761da548daf303a633->leave($__internal_e3c56dfb79946bb9a33e9f386f79c1a17fc1ac66335940761da548daf303a633_prof);

        
        $__internal_43c455c5429fa975e42a575b41fd77649d3b99fc16a3dd1748f0bd686c82f50b->leave($__internal_43c455c5429fa975e42a575b41fd77649d3b99fc16a3dd1748f0bd686c82f50b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_15f5069b8821a03c7a7370dd1a06e71b505b393a1f83ba8aec88e951aa75b3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f5069b8821a03c7a7370dd1a06e71b505b393a1f83ba8aec88e951aa75b3dc->enter($__internal_15f5069b8821a03c7a7370dd1a06e71b505b393a1f83ba8aec88e951aa75b3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_360f123e764320f43aee842cefce37aae9d6f75beeae2ba8cb389dd60ddcb738 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_360f123e764320f43aee842cefce37aae9d6f75beeae2ba8cb389dd60ddcb738->enter($__internal_360f123e764320f43aee842cefce37aae9d6f75beeae2ba8cb389dd60ddcb738_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_360f123e764320f43aee842cefce37aae9d6f75beeae2ba8cb389dd60ddcb738->leave($__internal_360f123e764320f43aee842cefce37aae9d6f75beeae2ba8cb389dd60ddcb738_prof);

        
        $__internal_15f5069b8821a03c7a7370dd1a06e71b505b393a1f83ba8aec88e951aa75b3dc->leave($__internal_15f5069b8821a03c7a7370dd1a06e71b505b393a1f83ba8aec88e951aa75b3dc_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
