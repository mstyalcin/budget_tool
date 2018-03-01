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
        $__internal_9b6fd9afb96caf7f04b99c63988744a872f7978b33b7790ecfa69d27fe7c5d01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b6fd9afb96caf7f04b99c63988744a872f7978b33b7790ecfa69d27fe7c5d01->enter($__internal_9b6fd9afb96caf7f04b99c63988744a872f7978b33b7790ecfa69d27fe7c5d01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new_budget.html.twig"));

        $__internal_69360901cda8a98f92159b6ebfce62f5a0ce68836f8be6f1ec072fce82fafb09 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69360901cda8a98f92159b6ebfce62f5a0ce68836f8be6f1ec072fce82fafb09->enter($__internal_69360901cda8a98f92159b6ebfce62f5a0ce68836f8be6f1ec072fce82fafb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/new_budget.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b6fd9afb96caf7f04b99c63988744a872f7978b33b7790ecfa69d27fe7c5d01->leave($__internal_9b6fd9afb96caf7f04b99c63988744a872f7978b33b7790ecfa69d27fe7c5d01_prof);

        
        $__internal_69360901cda8a98f92159b6ebfce62f5a0ce68836f8be6f1ec072fce82fafb09->leave($__internal_69360901cda8a98f92159b6ebfce62f5a0ce68836f8be6f1ec072fce82fafb09_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6e1e0e627bb26a71f846d8a87beeb1ebfa8454574a4b64fdd2b4104dfe68fb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6e1e0e627bb26a71f846d8a87beeb1ebfa8454574a4b64fdd2b4104dfe68fb1->enter($__internal_f6e1e0e627bb26a71f846d8a87beeb1ebfa8454574a4b64fdd2b4104dfe68fb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cfd984faf6483163afffd4deddaa503e02dad6ddb100120cf4fc29d233aea029 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd984faf6483163afffd4deddaa503e02dad6ddb100120cf4fc29d233aea029->enter($__internal_cfd984faf6483163afffd4deddaa503e02dad6ddb100120cf4fc29d233aea029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <input type=\"input\" id=\"value\" name=\"value\" value=\"\" placeholder=\"Numeric Exp: 12.5\"><br/>

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
        
        $__internal_cfd984faf6483163afffd4deddaa503e02dad6ddb100120cf4fc29d233aea029->leave($__internal_cfd984faf6483163afffd4deddaa503e02dad6ddb100120cf4fc29d233aea029_prof);

        
        $__internal_f6e1e0e627bb26a71f846d8a87beeb1ebfa8454574a4b64fdd2b4104dfe68fb1->leave($__internal_f6e1e0e627bb26a71f846d8a87beeb1ebfa8454574a4b64fdd2b4104dfe68fb1_prof);

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
                <input type=\"input\" id=\"value\" name=\"value\" value=\"\" placeholder=\"Numeric Exp: 12.5\"><br/>

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
