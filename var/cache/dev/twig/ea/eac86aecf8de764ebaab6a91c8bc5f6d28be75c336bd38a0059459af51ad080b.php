<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_7ae854b56c6f75abcbcd82745561cefd7af161a420a8cfa0de33ba62b78890d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_a359448b4b7cef2388ca4da948432ddb9ac6772f3c9d5d7a87fddac730877709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a359448b4b7cef2388ca4da948432ddb9ac6772f3c9d5d7a87fddac730877709->enter($__internal_a359448b4b7cef2388ca4da948432ddb9ac6772f3c9d5d7a87fddac730877709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_4df88e14237f5b002b3642319512100b35adc64704f4c9d6091d28c4558eb303 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4df88e14237f5b002b3642319512100b35adc64704f4c9d6091d28c4558eb303->enter($__internal_4df88e14237f5b002b3642319512100b35adc64704f4c9d6091d28c4558eb303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a359448b4b7cef2388ca4da948432ddb9ac6772f3c9d5d7a87fddac730877709->leave($__internal_a359448b4b7cef2388ca4da948432ddb9ac6772f3c9d5d7a87fddac730877709_prof);

        
        $__internal_4df88e14237f5b002b3642319512100b35adc64704f4c9d6091d28c4558eb303->leave($__internal_4df88e14237f5b002b3642319512100b35adc64704f4c9d6091d28c4558eb303_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9448d788e1ced5435ee466936766305fbc819eaabf5c52ae151c5d442855737c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9448d788e1ced5435ee466936766305fbc819eaabf5c52ae151c5d442855737c->enter($__internal_9448d788e1ced5435ee466936766305fbc819eaabf5c52ae151c5d442855737c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f54d9e24d22b68994d5667ff1038f39fd9116739041e5f9db994c55b05300cf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f54d9e24d22b68994d5667ff1038f39fd9116739041e5f9db994c55b05300cf6->enter($__internal_f54d9e24d22b68994d5667ff1038f39fd9116739041e5f9db994c55b05300cf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_f54d9e24d22b68994d5667ff1038f39fd9116739041e5f9db994c55b05300cf6->leave($__internal_f54d9e24d22b68994d5667ff1038f39fd9116739041e5f9db994c55b05300cf6_prof);

        
        $__internal_9448d788e1ced5435ee466936766305fbc819eaabf5c52ae151c5d442855737c->leave($__internal_9448d788e1ced5435ee466936766305fbc819eaabf5c52ae151c5d442855737c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
