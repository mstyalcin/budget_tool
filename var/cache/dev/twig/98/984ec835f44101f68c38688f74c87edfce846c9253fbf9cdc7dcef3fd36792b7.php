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
        $__internal_80db2b906544d9d04169ae11c8cd0cca4aaf152cb4b5a18da9b93e9fc03fb233 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80db2b906544d9d04169ae11c8cd0cca4aaf152cb4b5a18da9b93e9fc03fb233->enter($__internal_80db2b906544d9d04169ae11c8cd0cca4aaf152cb4b5a18da9b93e9fc03fb233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $__internal_ce520a66cd0656066293c4e6fd88754ac3d2d37ed143de5ee2621497422911de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce520a66cd0656066293c4e6fd88754ac3d2d37ed143de5ee2621497422911de->enter($__internal_ce520a66cd0656066293c4e6fd88754ac3d2d37ed143de5ee2621497422911de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80db2b906544d9d04169ae11c8cd0cca4aaf152cb4b5a18da9b93e9fc03fb233->leave($__internal_80db2b906544d9d04169ae11c8cd0cca4aaf152cb4b5a18da9b93e9fc03fb233_prof);

        
        $__internal_ce520a66cd0656066293c4e6fd88754ac3d2d37ed143de5ee2621497422911de->leave($__internal_ce520a66cd0656066293c4e6fd88754ac3d2d37ed143de5ee2621497422911de_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fbe25189547ff284bb0420403d3b4537a3340c042a15fad6368d46c57c35c715 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe25189547ff284bb0420403d3b4537a3340c042a15fad6368d46c57c35c715->enter($__internal_fbe25189547ff284bb0420403d3b4537a3340c042a15fad6368d46c57c35c715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_54dbe2fd7537bf584aea36ede3629f81c6dfd98ac331d23f064970894b77cdb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54dbe2fd7537bf584aea36ede3629f81c6dfd98ac331d23f064970894b77cdb1->enter($__internal_54dbe2fd7537bf584aea36ede3629f81c6dfd98ac331d23f064970894b77cdb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_54dbe2fd7537bf584aea36ede3629f81c6dfd98ac331d23f064970894b77cdb1->leave($__internal_54dbe2fd7537bf584aea36ede3629f81c6dfd98ac331d23f064970894b77cdb1_prof);

        
        $__internal_fbe25189547ff284bb0420403d3b4537a3340c042a15fad6368d46c57c35c715->leave($__internal_fbe25189547ff284bb0420403d3b4537a3340c042a15fad6368d46c57c35c715_prof);

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
