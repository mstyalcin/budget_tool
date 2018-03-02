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
        $__internal_eef6cc2c043a0ba6a255f58644b90eb7f331bbe0c1fea89024ec7ee85843752d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef6cc2c043a0ba6a255f58644b90eb7f331bbe0c1fea89024ec7ee85843752d->enter($__internal_eef6cc2c043a0ba6a255f58644b90eb7f331bbe0c1fea89024ec7ee85843752d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_2f4268ad00fc8ff7bb0bb00d3a65398cdc0a258b944ca1823fa0d011a978147c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f4268ad00fc8ff7bb0bb00d3a65398cdc0a258b944ca1823fa0d011a978147c->enter($__internal_2f4268ad00fc8ff7bb0bb00d3a65398cdc0a258b944ca1823fa0d011a978147c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eef6cc2c043a0ba6a255f58644b90eb7f331bbe0c1fea89024ec7ee85843752d->leave($__internal_eef6cc2c043a0ba6a255f58644b90eb7f331bbe0c1fea89024ec7ee85843752d_prof);

        
        $__internal_2f4268ad00fc8ff7bb0bb00d3a65398cdc0a258b944ca1823fa0d011a978147c->leave($__internal_2f4268ad00fc8ff7bb0bb00d3a65398cdc0a258b944ca1823fa0d011a978147c_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_140beed14c3b3adbc7349f2ffbdbbda781208f3119a1a3123a5e1bde7839eff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_140beed14c3b3adbc7349f2ffbdbbda781208f3119a1a3123a5e1bde7839eff2->enter($__internal_140beed14c3b3adbc7349f2ffbdbbda781208f3119a1a3123a5e1bde7839eff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_275505fdbc20fb1409d1b0ac2517b5e6228e106a8faba69f5dc7a477e3ea27a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_275505fdbc20fb1409d1b0ac2517b5e6228e106a8faba69f5dc7a477e3ea27a9->enter($__internal_275505fdbc20fb1409d1b0ac2517b5e6228e106a8faba69f5dc7a477e3ea27a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

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
        
        $__internal_275505fdbc20fb1409d1b0ac2517b5e6228e106a8faba69f5dc7a477e3ea27a9->leave($__internal_275505fdbc20fb1409d1b0ac2517b5e6228e106a8faba69f5dc7a477e3ea27a9_prof);

        
        $__internal_140beed14c3b3adbc7349f2ffbdbbda781208f3119a1a3123a5e1bde7839eff2->leave($__internal_140beed14c3b3adbc7349f2ffbdbbda781208f3119a1a3123a5e1bde7839eff2_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_584cb9e1eec8d00f02e4aff8b0e35609f87aba663f2460a2617f17ea540e6711 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_584cb9e1eec8d00f02e4aff8b0e35609f87aba663f2460a2617f17ea540e6711->enter($__internal_584cb9e1eec8d00f02e4aff8b0e35609f87aba663f2460a2617f17ea540e6711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8619bd7a0f432c88a3e01e2f39474564e2969b663ea6d0f9811da61718a73df9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8619bd7a0f432c88a3e01e2f39474564e2969b663ea6d0f9811da61718a73df9->enter($__internal_8619bd7a0f432c88a3e01e2f39474564e2969b663ea6d0f9811da61718a73df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_8619bd7a0f432c88a3e01e2f39474564e2969b663ea6d0f9811da61718a73df9->leave($__internal_8619bd7a0f432c88a3e01e2f39474564e2969b663ea6d0f9811da61718a73df9_prof);

        
        $__internal_584cb9e1eec8d00f02e4aff8b0e35609f87aba663f2460a2617f17ea540e6711->leave($__internal_584cb9e1eec8d00f02e4aff8b0e35609f87aba663f2460a2617f17ea540e6711_prof);

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
