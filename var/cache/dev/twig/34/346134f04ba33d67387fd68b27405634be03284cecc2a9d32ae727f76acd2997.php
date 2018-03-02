<?php

/* default/new_initiative.html.twig */
class __TwigTemplate_9ecea9c84171fa84023bb35917cd7183038db94f55052b6d2f7929d094c01e42 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/new_initiative.html.twig", 1);
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
        $__internal_acb3cd6e557a3283b29eb4337df29e314b0bc6c4925a9ede6c6bb80b6793329a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acb3cd6e557a3283b29eb4337df29e314b0bc6c4925a9ede6c6bb80b6793329a->enter($__internal_acb3cd6e557a3283b29eb4337df29e314b0bc6c4925a9ede6c6bb80b6793329a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new_initiative.html.twig"));

        $__internal_f07bb3f22627abc9c494c3fee98f7db6179d403fd06d2348a943009a4d29f690 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07bb3f22627abc9c494c3fee98f7db6179d403fd06d2348a943009a4d29f690->enter($__internal_f07bb3f22627abc9c494c3fee98f7db6179d403fd06d2348a943009a4d29f690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new_initiative.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acb3cd6e557a3283b29eb4337df29e314b0bc6c4925a9ede6c6bb80b6793329a->leave($__internal_acb3cd6e557a3283b29eb4337df29e314b0bc6c4925a9ede6c6bb80b6793329a_prof);

        
        $__internal_f07bb3f22627abc9c494c3fee98f7db6179d403fd06d2348a943009a4d29f690->leave($__internal_f07bb3f22627abc9c494c3fee98f7db6179d403fd06d2348a943009a4d29f690_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_95c6dd3cdbff880175c96beee4f54f3fa8a3645b8fcdcc41c9e1d0ab430d443c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95c6dd3cdbff880175c96beee4f54f3fa8a3645b8fcdcc41c9e1d0ab430d443c->enter($__internal_95c6dd3cdbff880175c96beee4f54f3fa8a3645b8fcdcc41c9e1d0ab430d443c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9fcf89bb777bb5cd93f700fbea1827fbc82bc66e266bb99a56ac767dc3f5be56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9fcf89bb777bb5cd93f700fbea1827fbc82bc66e266bb99a56ac767dc3f5be56->enter($__internal_9fcf89bb777bb5cd93f700fbea1827fbc82bc66e266bb99a56ac767dc3f5be56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">

            ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "flashes", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 8
            echo "                <div class=\"flash-notice\">
                    ";
            // line 9
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
                </div>
                <br/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "
            <div id=\"welcome\">
                <h1><span>Add New Initiative</span></h1>
            </div>

            ";
        // line 18
        if ((array_key_exists("errors", $context) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 19
            echo "            <h3>Budget has the following errors</h3>
            <ul>
                ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 22
                echo "                    <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "            </ul>
            ";
        }
        // line 26
        echo "            

            <form method=\"post\">

                <label for=\"title\">Title</label>
                <input type=\"input\" id=\"title\" name=\"title\" value=\"\" placeholder=\"\"> <br/>

                <label for=\"value\">Value</label>
                <input type=\"input\" id=\"value\" name=\"value\" value=\"\" placeholder=\"\"><br/>

                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Submit</button>
            </form>

            <br/><br/>
            <h5>Current Initiatives List</h5>
            ";
        // line 41
        if (array_key_exists("initiatives", $context)) {
            // line 42
            echo "            <table border=\"1\" width=\"50%\" >
                <tr>
                    <th>Title</th>
                    <th>Value</th>
                </tr>
                ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["initiatives"] ?? $this->getContext($context, "initiatives")));
            foreach ($context['_seq'] as $context["_key"] => $context["initiative"]) {
                // line 48
                echo "                <tr>
                    <th>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["initiative"], "title", array()), "html", null, true);
                echo "</th>
                    <th>";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($context["initiative"], "value", array()), "html", null, true);
                echo "</th>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['initiative'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            </table>
            ";
        }
        // line 55
        echo "        </div>
    </div>
";
        
        $__internal_9fcf89bb777bb5cd93f700fbea1827fbc82bc66e266bb99a56ac767dc3f5be56->leave($__internal_9fcf89bb777bb5cd93f700fbea1827fbc82bc66e266bb99a56ac767dc3f5be56_prof);

        
        $__internal_95c6dd3cdbff880175c96beee4f54f3fa8a3645b8fcdcc41c9e1d0ab430d443c->leave($__internal_95c6dd3cdbff880175c96beee4f54f3fa8a3645b8fcdcc41c9e1d0ab430d443c_prof);

    }

    public function getTemplateName()
    {
        return "default/new_initiative.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  151 => 55,  147 => 53,  138 => 50,  134 => 49,  131 => 48,  127 => 47,  120 => 42,  118 => 41,  101 => 26,  97 => 24,  88 => 22,  84 => 21,  80 => 19,  78 => 18,  71 => 13,  61 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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

            {% for message in app.flashes('success') %}
                <div class=\"flash-notice\">
                    {{ message }}
                </div>
                <br/>
            {% endfor %}

            <div id=\"welcome\">
                <h1><span>Add New Initiative</span></h1>
            </div>

            {% if errors is defined and errors|length > 0%}
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

                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Submit</button>
            </form>

            <br/><br/>
            <h5>Current Initiatives List</h5>
            {% if initiatives is defined %}
            <table border=\"1\" width=\"50%\" >
                <tr>
                    <th>Title</th>
                    <th>Value</th>
                </tr>
                {% for initiative in initiatives %}
                <tr>
                    <th>{{ initiative.title }}</th>
                    <th>{{ initiative.value }}</th>
                </tr>
                {% endfor %}
            </table>
            {% endif %}
        </div>
    </div>
{% endblock %}", "default/new_initiative.html.twig", "/home/myalcin/budget_tool/app/Resources/views/default/new_initiative.html.twig");
    }
}
