<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_becab780cc20b4ad983c8580be9b61ab6cda72f4848eaa6f7bb84aa2868580fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_326e40c5c08369a1788754c2aba2584d40ec21a805c935871328e81b21967750 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_326e40c5c08369a1788754c2aba2584d40ec21a805c935871328e81b21967750->enter($__internal_326e40c5c08369a1788754c2aba2584d40ec21a805c935871328e81b21967750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_42fd0d73c00730fc44a0b1f31f8d3625b87167a314201972f4d77c028c521edc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42fd0d73c00730fc44a0b1f31f8d3625b87167a314201972f4d77c028c521edc->enter($__internal_42fd0d73c00730fc44a0b1f31f8d3625b87167a314201972f4d77c028c521edc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_326e40c5c08369a1788754c2aba2584d40ec21a805c935871328e81b21967750->leave($__internal_326e40c5c08369a1788754c2aba2584d40ec21a805c935871328e81b21967750_prof);

        
        $__internal_42fd0d73c00730fc44a0b1f31f8d3625b87167a314201972f4d77c028c521edc->leave($__internal_42fd0d73c00730fc44a0b1f31f8d3625b87167a314201972f4d77c028c521edc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_e2a85aa216b1ee72b18cd648f8d4976e672410610236f67c4a11b2206ac679d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2a85aa216b1ee72b18cd648f8d4976e672410610236f67c4a11b2206ac679d5->enter($__internal_e2a85aa216b1ee72b18cd648f8d4976e672410610236f67c4a11b2206ac679d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e970a96677803637cc16e77bbb9c6f6d74f3ec8f029179c0fc90c0bafb1a6343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e970a96677803637cc16e77bbb9c6f6d74f3ec8f029179c0fc90c0bafb1a6343->enter($__internal_e970a96677803637cc16e77bbb9c6f6d74f3ec8f029179c0fc90c0bafb1a6343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_e970a96677803637cc16e77bbb9c6f6d74f3ec8f029179c0fc90c0bafb1a6343->leave($__internal_e970a96677803637cc16e77bbb9c6f6d74f3ec8f029179c0fc90c0bafb1a6343_prof);

        
        $__internal_e2a85aa216b1ee72b18cd648f8d4976e672410610236f67c4a11b2206ac679d5->leave($__internal_e2a85aa216b1ee72b18cd648f8d4976e672410610236f67c4a11b2206ac679d5_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_82412ef7280d0c7109cc69b29459c2f3f4ec21d3c95f6282ca5843b885a3ae31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_82412ef7280d0c7109cc69b29459c2f3f4ec21d3c95f6282ca5843b885a3ae31->enter($__internal_82412ef7280d0c7109cc69b29459c2f3f4ec21d3c95f6282ca5843b885a3ae31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_c61f1e86aedf679b88efbcc7b0d91a36d7109a1ddad73aea97af477c142d04ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c61f1e86aedf679b88efbcc7b0d91a36d7109a1ddad73aea97af477c142d04ba->enter($__internal_c61f1e86aedf679b88efbcc7b0d91a36d7109a1ddad73aea97af477c142d04ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c61f1e86aedf679b88efbcc7b0d91a36d7109a1ddad73aea97af477c142d04ba->leave($__internal_c61f1e86aedf679b88efbcc7b0d91a36d7109a1ddad73aea97af477c142d04ba_prof);

        
        $__internal_82412ef7280d0c7109cc69b29459c2f3f4ec21d3c95f6282ca5843b885a3ae31->leave($__internal_82412ef7280d0c7109cc69b29459c2f3f4ec21d3c95f6282ca5843b885a3ae31_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_5abb87a9036673461c818f368812f57422c3f7340a37293110dc32c0b767b8c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5abb87a9036673461c818f368812f57422c3f7340a37293110dc32c0b767b8c9->enter($__internal_5abb87a9036673461c818f368812f57422c3f7340a37293110dc32c0b767b8c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_151172776b3eee83110ac55a5f9e21d1b6e8439106dff963b2984ceb7a963a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_151172776b3eee83110ac55a5f9e21d1b6e8439106dff963b2984ceb7a963a1a->enter($__internal_151172776b3eee83110ac55a5f9e21d1b6e8439106dff963b2984ceb7a963a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_151172776b3eee83110ac55a5f9e21d1b6e8439106dff963b2984ceb7a963a1a->leave($__internal_151172776b3eee83110ac55a5f9e21d1b6e8439106dff963b2984ceb7a963a1a_prof);

        
        $__internal_5abb87a9036673461c818f368812f57422c3f7340a37293110dc32c0b767b8c9->leave($__internal_5abb87a9036673461c818f368812f57422c3f7340a37293110dc32c0b767b8c9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
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
{% block subject %}
{%- autoescape false -%}
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
