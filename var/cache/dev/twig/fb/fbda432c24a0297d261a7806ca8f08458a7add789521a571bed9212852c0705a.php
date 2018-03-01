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
        $__internal_6a81a9695b6f1db484ba4bd886d74e18ffc4f55bb9387098f38e43fc8e6771ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a81a9695b6f1db484ba4bd886d74e18ffc4f55bb9387098f38e43fc8e6771ed->enter($__internal_6a81a9695b6f1db484ba4bd886d74e18ffc4f55bb9387098f38e43fc8e6771ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4d6456e2bbe6b1ccd77d2a7c8a3916b9e4b60d67e41e3dc99987820c9170ba1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d6456e2bbe6b1ccd77d2a7c8a3916b9e4b60d67e41e3dc99987820c9170ba1f->enter($__internal_4d6456e2bbe6b1ccd77d2a7c8a3916b9e4b60d67e41e3dc99987820c9170ba1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6a81a9695b6f1db484ba4bd886d74e18ffc4f55bb9387098f38e43fc8e6771ed->leave($__internal_6a81a9695b6f1db484ba4bd886d74e18ffc4f55bb9387098f38e43fc8e6771ed_prof);

        
        $__internal_4d6456e2bbe6b1ccd77d2a7c8a3916b9e4b60d67e41e3dc99987820c9170ba1f->leave($__internal_4d6456e2bbe6b1ccd77d2a7c8a3916b9e4b60d67e41e3dc99987820c9170ba1f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_13ba7d3bbe705471f175bf5b7adead01cc2b6d0d84971b499b035ecdad51d522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13ba7d3bbe705471f175bf5b7adead01cc2b6d0d84971b499b035ecdad51d522->enter($__internal_13ba7d3bbe705471f175bf5b7adead01cc2b6d0d84971b499b035ecdad51d522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fa0f19316ae88333743db32e4ba298289fb5c855d4e20de1abc56d11fe9da9f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0f19316ae88333743db32e4ba298289fb5c855d4e20de1abc56d11fe9da9f9->enter($__internal_fa0f19316ae88333743db32e4ba298289fb5c855d4e20de1abc56d11fe9da9f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_fa0f19316ae88333743db32e4ba298289fb5c855d4e20de1abc56d11fe9da9f9->leave($__internal_fa0f19316ae88333743db32e4ba298289fb5c855d4e20de1abc56d11fe9da9f9_prof);

        
        $__internal_13ba7d3bbe705471f175bf5b7adead01cc2b6d0d84971b499b035ecdad51d522->leave($__internal_13ba7d3bbe705471f175bf5b7adead01cc2b6d0d84971b499b035ecdad51d522_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d12b603482caabf48e8e86e24983f4b756f3c5f67e8e747ae0cdafae0d3dcf6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12b603482caabf48e8e86e24983f4b756f3c5f67e8e747ae0cdafae0d3dcf6d->enter($__internal_d12b603482caabf48e8e86e24983f4b756f3c5f67e8e747ae0cdafae0d3dcf6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e698acc5566215c53cc469531af1ce8fa7f9f0c0f45ba875f961cf7685a6fb28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e698acc5566215c53cc469531af1ce8fa7f9f0c0f45ba875f961cf7685a6fb28->enter($__internal_e698acc5566215c53cc469531af1ce8fa7f9f0c0f45ba875f961cf7685a6fb28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_e698acc5566215c53cc469531af1ce8fa7f9f0c0f45ba875f961cf7685a6fb28->leave($__internal_e698acc5566215c53cc469531af1ce8fa7f9f0c0f45ba875f961cf7685a6fb28_prof);

        
        $__internal_d12b603482caabf48e8e86e24983f4b756f3c5f67e8e747ae0cdafae0d3dcf6d->leave($__internal_d12b603482caabf48e8e86e24983f4b756f3c5f67e8e747ae0cdafae0d3dcf6d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_34782e8194d13fd4d63fc21dbd321945539ac68447cbcc4a90b9f216f3afe3ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34782e8194d13fd4d63fc21dbd321945539ac68447cbcc4a90b9f216f3afe3ba->enter($__internal_34782e8194d13fd4d63fc21dbd321945539ac68447cbcc4a90b9f216f3afe3ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7530ec83a887e8a021ca5dc534467a5ae94702e7f484906f1c7d9647c89c5c2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7530ec83a887e8a021ca5dc534467a5ae94702e7f484906f1c7d9647c89c5c2f->enter($__internal_7530ec83a887e8a021ca5dc534467a5ae94702e7f484906f1c7d9647c89c5c2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_7530ec83a887e8a021ca5dc534467a5ae94702e7f484906f1c7d9647c89c5c2f->leave($__internal_7530ec83a887e8a021ca5dc534467a5ae94702e7f484906f1c7d9647c89c5c2f_prof);

        
        $__internal_34782e8194d13fd4d63fc21dbd321945539ac68447cbcc4a90b9f216f3afe3ba->leave($__internal_34782e8194d13fd4d63fc21dbd321945539ac68447cbcc4a90b9f216f3afe3ba_prof);

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
