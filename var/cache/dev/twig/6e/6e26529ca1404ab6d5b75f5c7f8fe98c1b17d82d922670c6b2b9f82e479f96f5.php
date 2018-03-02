<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_e9793ff7195d517eaa620f00baa1ee5b96f8745f85d019dc4eb366949fd5f7c9 extends Twig_Template
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
        $__internal_d91f614ae12f5d76da357f8164d6853f98e8427d72f6abb95070d302a74a1386 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d91f614ae12f5d76da357f8164d6853f98e8427d72f6abb95070d302a74a1386->enter($__internal_d91f614ae12f5d76da357f8164d6853f98e8427d72f6abb95070d302a74a1386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_6d55e82d4e9ad69c3551a80901eceef86a2ea384d6de054855207e9dd1a32886 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d55e82d4e9ad69c3551a80901eceef86a2ea384d6de054855207e9dd1a32886->enter($__internal_6d55e82d4e9ad69c3551a80901eceef86a2ea384d6de054855207e9dd1a32886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_d91f614ae12f5d76da357f8164d6853f98e8427d72f6abb95070d302a74a1386->leave($__internal_d91f614ae12f5d76da357f8164d6853f98e8427d72f6abb95070d302a74a1386_prof);

        
        $__internal_6d55e82d4e9ad69c3551a80901eceef86a2ea384d6de054855207e9dd1a32886->leave($__internal_6d55e82d4e9ad69c3551a80901eceef86a2ea384d6de054855207e9dd1a32886_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "@Twig/Exception/traces.xml.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
