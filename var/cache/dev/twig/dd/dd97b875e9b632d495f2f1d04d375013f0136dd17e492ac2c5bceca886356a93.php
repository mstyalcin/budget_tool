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
        $__internal_b1b482a89cb0ab64d7ec00c0e3897533f4f6c1b08d2d7d1d5b342e6ecea8f437 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b1b482a89cb0ab64d7ec00c0e3897533f4f6c1b08d2d7d1d5b342e6ecea8f437->enter($__internal_b1b482a89cb0ab64d7ec00c0e3897533f4f6c1b08d2d7d1d5b342e6ecea8f437_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_0acc4c2864406e24b45097d62088357aa16b1e777169d3408deabacc7702f14b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0acc4c2864406e24b45097d62088357aa16b1e777169d3408deabacc7702f14b->enter($__internal_0acc4c2864406e24b45097d62088357aa16b1e777169d3408deabacc7702f14b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1b482a89cb0ab64d7ec00c0e3897533f4f6c1b08d2d7d1d5b342e6ecea8f437->leave($__internal_b1b482a89cb0ab64d7ec00c0e3897533f4f6c1b08d2d7d1d5b342e6ecea8f437_prof);

        
        $__internal_0acc4c2864406e24b45097d62088357aa16b1e777169d3408deabacc7702f14b->leave($__internal_0acc4c2864406e24b45097d62088357aa16b1e777169d3408deabacc7702f14b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2f4f34c48ff90aa39bb3236de072ed3da9895c4ffaa2a1eb233efb7ccf7cb396 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f4f34c48ff90aa39bb3236de072ed3da9895c4ffaa2a1eb233efb7ccf7cb396->enter($__internal_2f4f34c48ff90aa39bb3236de072ed3da9895c4ffaa2a1eb233efb7ccf7cb396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_596e5037de3e27d1789e70d795538ede4a45ee4d5d206f344f4546fcdd9a68df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_596e5037de3e27d1789e70d795538ede4a45ee4d5d206f344f4546fcdd9a68df->enter($__internal_596e5037de3e27d1789e70d795538ede4a45ee4d5d206f344f4546fcdd9a68df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_596e5037de3e27d1789e70d795538ede4a45ee4d5d206f344f4546fcdd9a68df->leave($__internal_596e5037de3e27d1789e70d795538ede4a45ee4d5d206f344f4546fcdd9a68df_prof);

        
        $__internal_2f4f34c48ff90aa39bb3236de072ed3da9895c4ffaa2a1eb233efb7ccf7cb396->leave($__internal_2f4f34c48ff90aa39bb3236de072ed3da9895c4ffaa2a1eb233efb7ccf7cb396_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_d03407b86d02448330998820c25f690dd04f3463f61babc8928e1fc75349bd45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d03407b86d02448330998820c25f690dd04f3463f61babc8928e1fc75349bd45->enter($__internal_d03407b86d02448330998820c25f690dd04f3463f61babc8928e1fc75349bd45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fa2af7ad229a7f35232d70ec3cd66e23c5d8841148ea924d1f56d4bac218108b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2af7ad229a7f35232d70ec3cd66e23c5d8841148ea924d1f56d4bac218108b->enter($__internal_fa2af7ad229a7f35232d70ec3cd66e23c5d8841148ea924d1f56d4bac218108b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fa2af7ad229a7f35232d70ec3cd66e23c5d8841148ea924d1f56d4bac218108b->leave($__internal_fa2af7ad229a7f35232d70ec3cd66e23c5d8841148ea924d1f56d4bac218108b_prof);

        
        $__internal_d03407b86d02448330998820c25f690dd04f3463f61babc8928e1fc75349bd45->leave($__internal_d03407b86d02448330998820c25f690dd04f3463f61babc8928e1fc75349bd45_prof);

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
