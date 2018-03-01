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
        $__internal_3a0044aed50497955cffaf56971fd761414f4b9342f5db940ee6a976e80c5edf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a0044aed50497955cffaf56971fd761414f4b9342f5db940ee6a976e80c5edf->enter($__internal_3a0044aed50497955cffaf56971fd761414f4b9342f5db940ee6a976e80c5edf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_7e5377051b832eb9f76cddc0b1ae3b5dc461583d28ce3452520424ef629a65f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e5377051b832eb9f76cddc0b1ae3b5dc461583d28ce3452520424ef629a65f4->enter($__internal_7e5377051b832eb9f76cddc0b1ae3b5dc461583d28ce3452520424ef629a65f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a0044aed50497955cffaf56971fd761414f4b9342f5db940ee6a976e80c5edf->leave($__internal_3a0044aed50497955cffaf56971fd761414f4b9342f5db940ee6a976e80c5edf_prof);

        
        $__internal_7e5377051b832eb9f76cddc0b1ae3b5dc461583d28ce3452520424ef629a65f4->leave($__internal_7e5377051b832eb9f76cddc0b1ae3b5dc461583d28ce3452520424ef629a65f4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d416330c6072ae97f408d0575024aae0de417cc6ee00089228ff76a0e809fecb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d416330c6072ae97f408d0575024aae0de417cc6ee00089228ff76a0e809fecb->enter($__internal_d416330c6072ae97f408d0575024aae0de417cc6ee00089228ff76a0e809fecb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_b2bcafc455e908634a7bc9ab70048605b85e4e9221fc90d1f9230c04df0f4375 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2bcafc455e908634a7bc9ab70048605b85e4e9221fc90d1f9230c04df0f4375->enter($__internal_b2bcafc455e908634a7bc9ab70048605b85e4e9221fc90d1f9230c04df0f4375_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b2bcafc455e908634a7bc9ab70048605b85e4e9221fc90d1f9230c04df0f4375->leave($__internal_b2bcafc455e908634a7bc9ab70048605b85e4e9221fc90d1f9230c04df0f4375_prof);

        
        $__internal_d416330c6072ae97f408d0575024aae0de417cc6ee00089228ff76a0e809fecb->leave($__internal_d416330c6072ae97f408d0575024aae0de417cc6ee00089228ff76a0e809fecb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1aca9df7f347e08187f5903fb46f25cfb0b25b8f736250ad1d09153413ff8ad9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1aca9df7f347e08187f5903fb46f25cfb0b25b8f736250ad1d09153413ff8ad9->enter($__internal_1aca9df7f347e08187f5903fb46f25cfb0b25b8f736250ad1d09153413ff8ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4cbf64851675deaa192b429fa14c15af45274709795465212570e21a19e39c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbf64851675deaa192b429fa14c15af45274709795465212570e21a19e39c96->enter($__internal_4cbf64851675deaa192b429fa14c15af45274709795465212570e21a19e39c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4cbf64851675deaa192b429fa14c15af45274709795465212570e21a19e39c96->leave($__internal_4cbf64851675deaa192b429fa14c15af45274709795465212570e21a19e39c96_prof);

        
        $__internal_1aca9df7f347e08187f5903fb46f25cfb0b25b8f736250ad1d09153413ff8ad9->leave($__internal_1aca9df7f347e08187f5903fb46f25cfb0b25b8f736250ad1d09153413ff8ad9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_3d36ec602a73af255dc0175862d422a691adb7ad75f449cca245468fb7a506c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d36ec602a73af255dc0175862d422a691adb7ad75f449cca245468fb7a506c9->enter($__internal_3d36ec602a73af255dc0175862d422a691adb7ad75f449cca245468fb7a506c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1535a35c1f9214e7c5353612690e42f8dd561c0e96cd74626de39d143aac7497 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1535a35c1f9214e7c5353612690e42f8dd561c0e96cd74626de39d143aac7497->enter($__internal_1535a35c1f9214e7c5353612690e42f8dd561c0e96cd74626de39d143aac7497_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_1535a35c1f9214e7c5353612690e42f8dd561c0e96cd74626de39d143aac7497->leave($__internal_1535a35c1f9214e7c5353612690e42f8dd561c0e96cd74626de39d143aac7497_prof);

        
        $__internal_3d36ec602a73af255dc0175862d422a691adb7ad75f449cca245468fb7a506c9->leave($__internal_3d36ec602a73af255dc0175862d422a691adb7ad75f449cca245468fb7a506c9_prof);

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
