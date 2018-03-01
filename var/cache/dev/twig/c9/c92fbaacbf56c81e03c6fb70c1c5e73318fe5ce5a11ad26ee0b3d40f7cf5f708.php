<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_93b95e39af4f6e06b46f55d6f4ea2b8dc1c0c3c0c46ae958133d53fc373dead6 extends Twig_Template
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
        $__internal_292ee4d7c5c8eb7f88fdff97e176b6d5a3bb1f37007d93130b1577a409138b1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_292ee4d7c5c8eb7f88fdff97e176b6d5a3bb1f37007d93130b1577a409138b1e->enter($__internal_292ee4d7c5c8eb7f88fdff97e176b6d5a3bb1f37007d93130b1577a409138b1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_d95acab887280aeaf46c4e2120d7def5672a606340de6bf81e17c160e85da3e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d95acab887280aeaf46c4e2120d7def5672a606340de6bf81e17c160e85da3e8->enter($__internal_d95acab887280aeaf46c4e2120d7def5672a606340de6bf81e17c160e85da3e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_292ee4d7c5c8eb7f88fdff97e176b6d5a3bb1f37007d93130b1577a409138b1e->leave($__internal_292ee4d7c5c8eb7f88fdff97e176b6d5a3bb1f37007d93130b1577a409138b1e_prof);

        
        $__internal_d95acab887280aeaf46c4e2120d7def5672a606340de6bf81e17c160e85da3e8->leave($__internal_d95acab887280aeaf46c4e2120d7def5672a606340de6bf81e17c160e85da3e8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show_content.html.twig");
    }
}
