<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_60d323e41511724e9a0795bfebea260f337c41c0c6ad284d1e6b781ac0094084 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_1cfb76dfa2b2e2eb32bd532179255c86200be4da0da8aa1300999fc2ff5d529a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cfb76dfa2b2e2eb32bd532179255c86200be4da0da8aa1300999fc2ff5d529a->enter($__internal_1cfb76dfa2b2e2eb32bd532179255c86200be4da0da8aa1300999fc2ff5d529a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_180d3991d6e120cb1ed98d2cee87b9373336297263de5ce88b056db429015299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_180d3991d6e120cb1ed98d2cee87b9373336297263de5ce88b056db429015299->enter($__internal_180d3991d6e120cb1ed98d2cee87b9373336297263de5ce88b056db429015299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1cfb76dfa2b2e2eb32bd532179255c86200be4da0da8aa1300999fc2ff5d529a->leave($__internal_1cfb76dfa2b2e2eb32bd532179255c86200be4da0da8aa1300999fc2ff5d529a_prof);

        
        $__internal_180d3991d6e120cb1ed98d2cee87b9373336297263de5ce88b056db429015299->leave($__internal_180d3991d6e120cb1ed98d2cee87b9373336297263de5ce88b056db429015299_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_ac948ea10af844e5f8f87714ed5df67cef44a39a4ad37c26bfee3e02cbdb4f12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac948ea10af844e5f8f87714ed5df67cef44a39a4ad37c26bfee3e02cbdb4f12->enter($__internal_ac948ea10af844e5f8f87714ed5df67cef44a39a4ad37c26bfee3e02cbdb4f12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_14e54f20cd560b897e938585af26ba018160a0dabff24dda137a7222affee370 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14e54f20cd560b897e938585af26ba018160a0dabff24dda137a7222affee370->enter($__internal_14e54f20cd560b897e938585af26ba018160a0dabff24dda137a7222affee370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_14e54f20cd560b897e938585af26ba018160a0dabff24dda137a7222affee370->leave($__internal_14e54f20cd560b897e938585af26ba018160a0dabff24dda137a7222affee370_prof);

        
        $__internal_ac948ea10af844e5f8f87714ed5df67cef44a39a4ad37c26bfee3e02cbdb4f12->leave($__internal_ac948ea10af844e5f8f87714ed5df67cef44a39a4ad37c26bfee3e02cbdb4f12_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e70764e61a32bf7f262faadd22dc4700c855e3e6ae77409b55008df317f93963 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e70764e61a32bf7f262faadd22dc4700c855e3e6ae77409b55008df317f93963->enter($__internal_e70764e61a32bf7f262faadd22dc4700c855e3e6ae77409b55008df317f93963_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_ed248c6c5435064ffe60e76e2475b99b3033a13f54b614b4027625296954300e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed248c6c5435064ffe60e76e2475b99b3033a13f54b614b4027625296954300e->enter($__internal_ed248c6c5435064ffe60e76e2475b99b3033a13f54b614b4027625296954300e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_ed248c6c5435064ffe60e76e2475b99b3033a13f54b614b4027625296954300e->leave($__internal_ed248c6c5435064ffe60e76e2475b99b3033a13f54b614b4027625296954300e_prof);

        
        $__internal_e70764e61a32bf7f262faadd22dc4700c855e3e6ae77409b55008df317f93963->leave($__internal_e70764e61a32bf7f262faadd22dc4700c855e3e6ae77409b55008df317f93963_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_bfe7215758103e3deff704499582473370305a220c2ac197fc0478a001513604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfe7215758103e3deff704499582473370305a220c2ac197fc0478a001513604->enter($__internal_bfe7215758103e3deff704499582473370305a220c2ac197fc0478a001513604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_28e6ed8e159967bf3ec90e609521e9b7184d54dd5fe03493760e08a0182bc7c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28e6ed8e159967bf3ec90e609521e9b7184d54dd5fe03493760e08a0182bc7c3->enter($__internal_28e6ed8e159967bf3ec90e609521e9b7184d54dd5fe03493760e08a0182bc7c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_28e6ed8e159967bf3ec90e609521e9b7184d54dd5fe03493760e08a0182bc7c3->leave($__internal_28e6ed8e159967bf3ec90e609521e9b7184d54dd5fe03493760e08a0182bc7c3_prof);

        
        $__internal_bfe7215758103e3deff704499582473370305a220c2ac197fc0478a001513604->leave($__internal_bfe7215758103e3deff704499582473370305a220c2ac197fc0478a001513604_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
