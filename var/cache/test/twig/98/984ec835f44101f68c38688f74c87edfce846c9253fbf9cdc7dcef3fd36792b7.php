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
        $__internal_c64e8b808c8745ba6810e03fab8112fa7b62dfa6bdb92c88e61707db4631dd66 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c64e8b808c8745ba6810e03fab8112fa7b62dfa6bdb92c88e61707db4631dd66->enter($__internal_c64e8b808c8745ba6810e03fab8112fa7b62dfa6bdb92c88e61707db4631dd66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_ccb69bb68bd7b28737c9313fe8ed64e4a056df79c727e93d3c5b9c3ce1706261 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb69bb68bd7b28737c9313fe8ed64e4a056df79c727e93d3c5b9c3ce1706261->enter($__internal_ccb69bb68bd7b28737c9313fe8ed64e4a056df79c727e93d3c5b9c3ce1706261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c64e8b808c8745ba6810e03fab8112fa7b62dfa6bdb92c88e61707db4631dd66->leave($__internal_c64e8b808c8745ba6810e03fab8112fa7b62dfa6bdb92c88e61707db4631dd66_prof);

        
        $__internal_ccb69bb68bd7b28737c9313fe8ed64e4a056df79c727e93d3c5b9c3ce1706261->leave($__internal_ccb69bb68bd7b28737c9313fe8ed64e4a056df79c727e93d3c5b9c3ce1706261_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b124d4666983a151a494a78b17fd5e7946905bde1119a91f221d82f0354bb08 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b124d4666983a151a494a78b17fd5e7946905bde1119a91f221d82f0354bb08->enter($__internal_4b124d4666983a151a494a78b17fd5e7946905bde1119a91f221d82f0354bb08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6d5d57ded8410cf30cfd3905cfa38d8f339bc54261368d9e41c63338704f8ac4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d5d57ded8410cf30cfd3905cfa38d8f339bc54261368d9e41c63338704f8ac4->enter($__internal_6d5d57ded8410cf30cfd3905cfa38d8f339bc54261368d9e41c63338704f8ac4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6d5d57ded8410cf30cfd3905cfa38d8f339bc54261368d9e41c63338704f8ac4->leave($__internal_6d5d57ded8410cf30cfd3905cfa38d8f339bc54261368d9e41c63338704f8ac4_prof);

        
        $__internal_4b124d4666983a151a494a78b17fd5e7946905bde1119a91f221d82f0354bb08->leave($__internal_4b124d4666983a151a494a78b17fd5e7946905bde1119a91f221d82f0354bb08_prof);

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
