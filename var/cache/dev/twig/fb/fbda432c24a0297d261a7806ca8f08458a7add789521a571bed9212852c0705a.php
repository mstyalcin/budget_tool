<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_a6d5f47775eae9850b0e5f541b5c0dcb4b38377a11f553de088e708b28b9c897 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d3b3773b7f89494911356ff6531215b25508ca45ec0076be6b011996640c68d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3b3773b7f89494911356ff6531215b25508ca45ec0076be6b011996640c68d9->enter($__internal_d3b3773b7f89494911356ff6531215b25508ca45ec0076be6b011996640c68d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_427ef47fa02c624ebbb092358ca36abb0297f3cc79e4716770bf50f6605ba00f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_427ef47fa02c624ebbb092358ca36abb0297f3cc79e4716770bf50f6605ba00f->enter($__internal_427ef47fa02c624ebbb092358ca36abb0297f3cc79e4716770bf50f6605ba00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d3b3773b7f89494911356ff6531215b25508ca45ec0076be6b011996640c68d9->leave($__internal_d3b3773b7f89494911356ff6531215b25508ca45ec0076be6b011996640c68d9_prof);

        
        $__internal_427ef47fa02c624ebbb092358ca36abb0297f3cc79e4716770bf50f6605ba00f->leave($__internal_427ef47fa02c624ebbb092358ca36abb0297f3cc79e4716770bf50f6605ba00f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_899dcf934f37d03e2f4359fc55222c1a4e555cc9460e13e03c30d7cc034ccc1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_899dcf934f37d03e2f4359fc55222c1a4e555cc9460e13e03c30d7cc034ccc1a->enter($__internal_899dcf934f37d03e2f4359fc55222c1a4e555cc9460e13e03c30d7cc034ccc1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_24ec220192c4b2a88da53ba0772df3cff49d1319b8ee7fe0e80d39ed0ac032dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24ec220192c4b2a88da53ba0772df3cff49d1319b8ee7fe0e80d39ed0ac032dc->enter($__internal_24ec220192c4b2a88da53ba0772df3cff49d1319b8ee7fe0e80d39ed0ac032dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_24ec220192c4b2a88da53ba0772df3cff49d1319b8ee7fe0e80d39ed0ac032dc->leave($__internal_24ec220192c4b2a88da53ba0772df3cff49d1319b8ee7fe0e80d39ed0ac032dc_prof);

        
        $__internal_899dcf934f37d03e2f4359fc55222c1a4e555cc9460e13e03c30d7cc034ccc1a->leave($__internal_899dcf934f37d03e2f4359fc55222c1a4e555cc9460e13e03c30d7cc034ccc1a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7052a9bf7612bbbb3b1b0993245edbf66114e4a07a8ee12396aab43f6ff07c75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7052a9bf7612bbbb3b1b0993245edbf66114e4a07a8ee12396aab43f6ff07c75->enter($__internal_7052a9bf7612bbbb3b1b0993245edbf66114e4a07a8ee12396aab43f6ff07c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5072322647ea7e8832d5aa66de7a950b31259c39324f63fa5191a4cff4ae1a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5072322647ea7e8832d5aa66de7a950b31259c39324f63fa5191a4cff4ae1a63->enter($__internal_5072322647ea7e8832d5aa66de7a950b31259c39324f63fa5191a4cff4ae1a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5072322647ea7e8832d5aa66de7a950b31259c39324f63fa5191a4cff4ae1a63->leave($__internal_5072322647ea7e8832d5aa66de7a950b31259c39324f63fa5191a4cff4ae1a63_prof);

        
        $__internal_7052a9bf7612bbbb3b1b0993245edbf66114e4a07a8ee12396aab43f6ff07c75->leave($__internal_7052a9bf7612bbbb3b1b0993245edbf66114e4a07a8ee12396aab43f6ff07c75_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_fced1f361e9bd1cefde27508242b10b3729afad329530f5837be7afbeb52225c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fced1f361e9bd1cefde27508242b10b3729afad329530f5837be7afbeb52225c->enter($__internal_fced1f361e9bd1cefde27508242b10b3729afad329530f5837be7afbeb52225c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_63b3f28b4a195d854150c25ee42084000042ecc0ce5321f6291104b01510e1c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63b3f28b4a195d854150c25ee42084000042ecc0ce5321f6291104b01510e1c0->enter($__internal_63b3f28b4a195d854150c25ee42084000042ecc0ce5321f6291104b01510e1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_63b3f28b4a195d854150c25ee42084000042ecc0ce5321f6291104b01510e1c0->leave($__internal_63b3f28b4a195d854150c25ee42084000042ecc0ce5321f6291104b01510e1c0_prof);

        
        $__internal_fced1f361e9bd1cefde27508242b10b3729afad329530f5837be7afbeb52225c->leave($__internal_fced1f361e9bd1cefde27508242b10b3729afad329530f5837be7afbeb52225c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
