<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_9f2c83bb05739af094f0ce1fb6576bd3cd95d0724a43ed878715252792842e6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_31b9a08214ebffbf43087d6c8fdc98010cf4076749843e52b76ccb8494a7e94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31b9a08214ebffbf43087d6c8fdc98010cf4076749843e52b76ccb8494a7e94a->enter($__internal_31b9a08214ebffbf43087d6c8fdc98010cf4076749843e52b76ccb8494a7e94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_5008ec9044e83299cf3e0f7a9bff2c61a0a0cad3b65566ec8420fe210a27306c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5008ec9044e83299cf3e0f7a9bff2c61a0a0cad3b65566ec8420fe210a27306c->enter($__internal_5008ec9044e83299cf3e0f7a9bff2c61a0a0cad3b65566ec8420fe210a27306c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31b9a08214ebffbf43087d6c8fdc98010cf4076749843e52b76ccb8494a7e94a->leave($__internal_31b9a08214ebffbf43087d6c8fdc98010cf4076749843e52b76ccb8494a7e94a_prof);

        
        $__internal_5008ec9044e83299cf3e0f7a9bff2c61a0a0cad3b65566ec8420fe210a27306c->leave($__internal_5008ec9044e83299cf3e0f7a9bff2c61a0a0cad3b65566ec8420fe210a27306c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_75217489c8a79723588a4a7c883828a07bfda0f3709f1823aae469ad142dac92 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_75217489c8a79723588a4a7c883828a07bfda0f3709f1823aae469ad142dac92->enter($__internal_75217489c8a79723588a4a7c883828a07bfda0f3709f1823aae469ad142dac92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d2691a9d467c0e9db204442045fe8171e23fb290465f37180b30b314d3b298c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2691a9d467c0e9db204442045fe8171e23fb290465f37180b30b314d3b298c8->enter($__internal_d2691a9d467c0e9db204442045fe8171e23fb290465f37180b30b314d3b298c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_d2691a9d467c0e9db204442045fe8171e23fb290465f37180b30b314d3b298c8->leave($__internal_d2691a9d467c0e9db204442045fe8171e23fb290465f37180b30b314d3b298c8_prof);

        
        $__internal_75217489c8a79723588a4a7c883828a07bfda0f3709f1823aae469ad142dac92->leave($__internal_75217489c8a79723588a4a7c883828a07bfda0f3709f1823aae469ad142dac92_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
