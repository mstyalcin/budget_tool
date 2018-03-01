<?php

/* default/new_budget.html.twig */
class __TwigTemplate_ef7e943a9d75c79bf46ecf26dbca13b2cbc6095326e5fed1b3fb6d524718e43c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/new_budget.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4a58d5fc99a41b513e5181f0b9634e86989f9b87fcfebd7a3a808b71eb2b78b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4a58d5fc99a41b513e5181f0b9634e86989f9b87fcfebd7a3a808b71eb2b78b->enter($__internal_d4a58d5fc99a41b513e5181f0b9634e86989f9b87fcfebd7a3a808b71eb2b78b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new_budget.html.twig"));

        $__internal_9ecb8ed6d89c64da19e033cfa930e9debf7f2f2f7391b2a560e1e0fe7c584878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ecb8ed6d89c64da19e033cfa930e9debf7f2f2f7391b2a560e1e0fe7c584878->enter($__internal_9ecb8ed6d89c64da19e033cfa930e9debf7f2f2f7391b2a560e1e0fe7c584878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new_budget.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4a58d5fc99a41b513e5181f0b9634e86989f9b87fcfebd7a3a808b71eb2b78b->leave($__internal_d4a58d5fc99a41b513e5181f0b9634e86989f9b87fcfebd7a3a808b71eb2b78b_prof);

        
        $__internal_9ecb8ed6d89c64da19e033cfa930e9debf7f2f2f7391b2a560e1e0fe7c584878->leave($__internal_9ecb8ed6d89c64da19e033cfa930e9debf7f2f2f7391b2a560e1e0fe7c584878_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d6232f33ed54e4d0fc3277b0a3bd977813a5e7552bcdeb9a89082a510086d6de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6232f33ed54e4d0fc3277b0a3bd977813a5e7552bcdeb9a89082a510086d6de->enter($__internal_d6232f33ed54e4d0fc3277b0a3bd977813a5e7552bcdeb9a89082a510086d6de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ddbc2f409a0fb90be2e0995c1ee93a537e8c221340c2b775642e3501099fff9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ddbc2f409a0fb90be2e0995c1ee93a537e8c221340c2b775642e3501099fff9c->enter($__internal_ddbc2f409a0fb90be2e0995c1ee93a537e8c221340c2b775642e3501099fff9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Add New Budget</span></h1>
            </div>

            ";
        // line 10
        if (array_key_exists("errors", $context)) {
            // line 11
            echo "            <h3>Budget has the following errors</h3>
            <ul>
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 14
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "            </ul>
            ";
        }
        // line 18
        echo "
            <form method=\"post\">

                <label for=\"title\">Title</label>
                <input type=\"input\" id=\"title\" name=\"title\" value=\"\" placeholder=\"\"> <br/>

                <label for=\"value\">Value</label>
                <input type=\"input\" id=\"value\" name=\"value\" value=\"\" placeholder=\"\"><br/>

                <label for=\"startdate\">Start Date</label>
                <input type=\"input\" id=\"startdate\" name=\"startdate\"  placeholder=\"YYYY-MM-DD\" ><br/>

                <label for=\"enddate\">End Date</label>
                <input type=\"input\" id=\"enddate\" name=\"enddate\" placeholder=\"YYYY-MM-DD\"><br/>
                <br/>
                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Submit</button>
            </form>

        </div>
    </div>
";
        
        $__internal_ddbc2f409a0fb90be2e0995c1ee93a537e8c221340c2b775642e3501099fff9c->leave($__internal_ddbc2f409a0fb90be2e0995c1ee93a537e8c221340c2b775642e3501099fff9c_prof);

        
        $__internal_d6232f33ed54e4d0fc3277b0a3bd977813a5e7552bcdeb9a89082a510086d6de->leave($__internal_d6232f33ed54e4d0fc3277b0a3bd977813a5e7552bcdeb9a89082a510086d6de_prof);

    }

    public function getTemplateName()
    {
        return "default/new_budget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 18,  76 => 16,  67 => 14,  63 => 13,  59 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Add New Budget</span></h1>
            </div>

            {% if errors is defined %}
            <h3>Budget has the following errors</h3>
            <ul>
                {% for error in errors %}
                    <li>{{ error.message }}</li>
                {% endfor %}
            </ul>
            {% endif %}

            <form method=\"post\">

                <label for=\"title\">Title</label>
                <input type=\"input\" id=\"title\" name=\"title\" value=\"\" placeholder=\"\"> <br/>

                <label for=\"value\">Value</label>
                <input type=\"input\" id=\"value\" name=\"value\" value=\"\" placeholder=\"\"><br/>

                <label for=\"startdate\">Start Date</label>
                <input type=\"input\" id=\"startdate\" name=\"startdate\"  placeholder=\"YYYY-MM-DD\" ><br/>

                <label for=\"enddate\">End Date</label>
                <input type=\"input\" id=\"enddate\" name=\"enddate\" placeholder=\"YYYY-MM-DD\"><br/>
                <br/>
                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Submit</button>
            </form>

        </div>
    </div>
{% endblock %}", "default/new_budget.html.twig", "/home/myalcin/budget_tool/app/Resources/views/default/new_budget.html.twig");
    }
}
