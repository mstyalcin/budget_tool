<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_26b44532e7218e92e5c8c7328e8a8d53224bedd0f50225e77c009556501ebe6c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a13ae18960a6b7ba9e050bbe0b3f264c4a4ec5855cf72fe7e28a2c7e0070c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a13ae18960a6b7ba9e050bbe0b3f264c4a4ec5855cf72fe7e28a2c7e0070c83->enter($__internal_4a13ae18960a6b7ba9e050bbe0b3f264c4a4ec5855cf72fe7e28a2c7e0070c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_585c38d5b9000ba3a57372ad68cd29cb02c9bce5f8826464b7393057b218931a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585c38d5b9000ba3a57372ad68cd29cb02c9bce5f8826464b7393057b218931a->enter($__internal_585c38d5b9000ba3a57372ad68cd29cb02c9bce5f8826464b7393057b218931a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a13ae18960a6b7ba9e050bbe0b3f264c4a4ec5855cf72fe7e28a2c7e0070c83->leave($__internal_4a13ae18960a6b7ba9e050bbe0b3f264c4a4ec5855cf72fe7e28a2c7e0070c83_prof);

        
        $__internal_585c38d5b9000ba3a57372ad68cd29cb02c9bce5f8826464b7393057b218931a->leave($__internal_585c38d5b9000ba3a57372ad68cd29cb02c9bce5f8826464b7393057b218931a_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_7fd02e2828d1343a6fcec2342a877c6d8523c4c7b7f982949361f352ef023615 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fd02e2828d1343a6fcec2342a877c6d8523c4c7b7f982949361f352ef023615->enter($__internal_7fd02e2828d1343a6fcec2342a877c6d8523c4c7b7f982949361f352ef023615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_187a980586f2af08aa37d37ff6491f9eb6437d26b2db122fd9daba13114cb08f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_187a980586f2af08aa37d37ff6491f9eb6437d26b2db122fd9daba13114cb08f->enter($__internal_187a980586f2af08aa37d37ff6491f9eb6437d26b2db122fd9daba13114cb08f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_187a980586f2af08aa37d37ff6491f9eb6437d26b2db122fd9daba13114cb08f->leave($__internal_187a980586f2af08aa37d37ff6491f9eb6437d26b2db122fd9daba13114cb08f_prof);

        
        $__internal_7fd02e2828d1343a6fcec2342a877c6d8523c4c7b7f982949361f352ef023615->leave($__internal_7fd02e2828d1343a6fcec2342a877c6d8523c4c7b7f982949361f352ef023615_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7f4919497b3da3b8bc8d95398ba7d896dc664d85b5a7d96dd827a246996f39d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f4919497b3da3b8bc8d95398ba7d896dc664d85b5a7d96dd827a246996f39d->enter($__internal_b7f4919497b3da3b8bc8d95398ba7d896dc664d85b5a7d96dd827a246996f39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4e7a8dfb3217ef22b44bca1d1a6830d0f1f2974f986360077e94c2d4fbd634ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e7a8dfb3217ef22b44bca1d1a6830d0f1f2974f986360077e94c2d4fbd634ff->enter($__internal_4e7a8dfb3217ef22b44bca1d1a6830d0f1f2974f986360077e94c2d4fbd634ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_4e7a8dfb3217ef22b44bca1d1a6830d0f1f2974f986360077e94c2d4fbd634ff->leave($__internal_4e7a8dfb3217ef22b44bca1d1a6830d0f1f2974f986360077e94c2d4fbd634ff_prof);

        
        $__internal_b7f4919497b3da3b8bc8d95398ba7d896dc664d85b5a7d96dd827a246996f39d->leave($__internal_b7f4919497b3da3b8bc8d95398ba7d896dc664d85b5a7d96dd827a246996f39d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
