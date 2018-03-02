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
        $__internal_432944890f6de17710a2fb18c8e95bb84d685ce8cf086a71256a7a4cb005eb39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_432944890f6de17710a2fb18c8e95bb84d685ce8cf086a71256a7a4cb005eb39->enter($__internal_432944890f6de17710a2fb18c8e95bb84d685ce8cf086a71256a7a4cb005eb39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_695379d3a414fdef646ca1b0cd1553b23472966aa8e535307ebdfaa14fc241ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_695379d3a414fdef646ca1b0cd1553b23472966aa8e535307ebdfaa14fc241ea->enter($__internal_695379d3a414fdef646ca1b0cd1553b23472966aa8e535307ebdfaa14fc241ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

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
        
        $__internal_432944890f6de17710a2fb18c8e95bb84d685ce8cf086a71256a7a4cb005eb39->leave($__internal_432944890f6de17710a2fb18c8e95bb84d685ce8cf086a71256a7a4cb005eb39_prof);

        
        $__internal_695379d3a414fdef646ca1b0cd1553b23472966aa8e535307ebdfaa14fc241ea->leave($__internal_695379d3a414fdef646ca1b0cd1553b23472966aa8e535307ebdfaa14fc241ea_prof);

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
