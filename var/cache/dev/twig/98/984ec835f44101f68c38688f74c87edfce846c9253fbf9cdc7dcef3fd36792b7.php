<?php

/* default/login.html.twig */
class __TwigTemplate_ee961488d3b8d7f75b283e4ce33df82334f7d6d5110d965f0791c53e263b4c0c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/login.html.twig", 1);
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
        $__internal_f79071d9989ab8a059509999772b058e982e5c046dbfa8cec73d52f4f44b191f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f79071d9989ab8a059509999772b058e982e5c046dbfa8cec73d52f4f44b191f->enter($__internal_f79071d9989ab8a059509999772b058e982e5c046dbfa8cec73d52f4f44b191f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_7b12f5cb7b085bfcc27fd45b0f28b0ec5d4da1057eb46ecbe81a0cc9025159b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b12f5cb7b085bfcc27fd45b0f28b0ec5d4da1057eb46ecbe81a0cc9025159b7->enter($__internal_7b12f5cb7b085bfcc27fd45b0f28b0ec5d4da1057eb46ecbe81a0cc9025159b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f79071d9989ab8a059509999772b058e982e5c046dbfa8cec73d52f4f44b191f->leave($__internal_f79071d9989ab8a059509999772b058e982e5c046dbfa8cec73d52f4f44b191f_prof);

        
        $__internal_7b12f5cb7b085bfcc27fd45b0f28b0ec5d4da1057eb46ecbe81a0cc9025159b7->leave($__internal_7b12f5cb7b085bfcc27fd45b0f28b0ec5d4da1057eb46ecbe81a0cc9025159b7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7a5b2bb4ae2b856c44f4afe33959792c00483b48cca474f8c3e0da333884955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a5b2bb4ae2b856c44f4afe33959792c00483b48cca474f8c3e0da333884955->enter($__internal_f7a5b2bb4ae2b856c44f4afe33959792c00483b48cca474f8c3e0da333884955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_41ba97f55795dd625e7a1aa7f2ead20e2bac1cef9de5141021be7fd73915c3e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ba97f55795dd625e7a1aa7f2ead20e2bac1cef9de5141021be7fd73915c3e1->enter($__internal_41ba97f55795dd625e7a1aa7f2ead20e2bac1cef9de5141021be7fd73915c3e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\">
                <h1><span>Login</span></h1>
            </div>

            <form method=\"post\">

                <label for=\"title\">User</label>
                <input type=\"input\" id=\"title\" name=\"title\" value=\"xxx\" placeholder=\"\"> <br/>

                <label for=\"value\">Password</label>
                <input type=\"password\" id=\"value\" name=\"value\" value=\"yyy\" placeholder=\"\"><br/>

                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Login</button>
            </form>

        </div>
    </div>
";
        
        $__internal_41ba97f55795dd625e7a1aa7f2ead20e2bac1cef9de5141021be7fd73915c3e1->leave($__internal_41ba97f55795dd625e7a1aa7f2ead20e2bac1cef9de5141021be7fd73915c3e1_prof);

        
        $__internal_f7a5b2bb4ae2b856c44f4afe33959792c00483b48cca474f8c3e0da333884955->leave($__internal_f7a5b2bb4ae2b856c44f4afe33959792c00483b48cca474f8c3e0da333884955_prof);

    }

    public function getTemplateName()
    {
        return "default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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
                <h1><span>Login</span></h1>
            </div>

            <form method=\"post\">

                <label for=\"title\">User</label>
                <input type=\"input\" id=\"title\" name=\"title\" value=\"xxx\" placeholder=\"\"> <br/>

                <label for=\"value\">Password</label>
                <input type=\"password\" id=\"value\" name=\"value\" value=\"yyy\" placeholder=\"\"><br/>

                <button class=\"btn btn-lg btn-primary btn-block\" type=\"submit\">Login</button>
            </form>

        </div>
    </div>
{% endblock %}", "default/login.html.twig", "/home/myalcin/budget_tool/app/Resources/views/default/login.html.twig");
    }
}
