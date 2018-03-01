<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_2857855144c5f3f98beb624a2081a7af3f2e97b0cbeeaae6a32e2ab4dbcbe28a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bacaed22eccf24f568255ab59dc1f8b415e9ec90956bc7ba545e7c5c4e363d09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bacaed22eccf24f568255ab59dc1f8b415e9ec90956bc7ba545e7c5c4e363d09->enter($__internal_bacaed22eccf24f568255ab59dc1f8b415e9ec90956bc7ba545e7c5c4e363d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_cd848dbfa6c22a683c8e79e3efc9a87d4aaf6bcee2da001f379a769a923490dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd848dbfa6c22a683c8e79e3efc9a87d4aaf6bcee2da001f379a769a923490dc->enter($__internal_cd848dbfa6c22a683c8e79e3efc9a87d4aaf6bcee2da001f379a769a923490dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bacaed22eccf24f568255ab59dc1f8b415e9ec90956bc7ba545e7c5c4e363d09->leave($__internal_bacaed22eccf24f568255ab59dc1f8b415e9ec90956bc7ba545e7c5c4e363d09_prof);

        
        $__internal_cd848dbfa6c22a683c8e79e3efc9a87d4aaf6bcee2da001f379a769a923490dc->leave($__internal_cd848dbfa6c22a683c8e79e3efc9a87d4aaf6bcee2da001f379a769a923490dc_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9b67f4239b5885b655a340349fa698c9ee1dfae6392d267e2321909e6733fbc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b67f4239b5885b655a340349fa698c9ee1dfae6392d267e2321909e6733fbc6->enter($__internal_9b67f4239b5885b655a340349fa698c9ee1dfae6392d267e2321909e6733fbc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ea04f09f7ccc4d4152ea4c082d3b8a1eb1c50d487588a6c939a3afdf29828db0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea04f09f7ccc4d4152ea4c082d3b8a1eb1c50d487588a6c939a3afdf29828db0->enter($__internal_ea04f09f7ccc4d4152ea4c082d3b8a1eb1c50d487588a6c939a3afdf29828db0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_ea04f09f7ccc4d4152ea4c082d3b8a1eb1c50d487588a6c939a3afdf29828db0->leave($__internal_ea04f09f7ccc4d4152ea4c082d3b8a1eb1c50d487588a6c939a3afdf29828db0_prof);

        
        $__internal_9b67f4239b5885b655a340349fa698c9ee1dfae6392d267e2321909e6733fbc6->leave($__internal_9b67f4239b5885b655a340349fa698c9ee1dfae6392d267e2321909e6733fbc6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
