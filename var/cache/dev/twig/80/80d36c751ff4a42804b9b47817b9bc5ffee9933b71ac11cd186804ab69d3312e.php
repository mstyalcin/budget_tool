<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_cf7724ffb5f8faac459b67016573acecdf829c2424fb3e1d59c76d0510683245 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_21964879768244d57c43742c785dedbe7e430c6ca5498cf1d81ca899f2db9d4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21964879768244d57c43742c785dedbe7e430c6ca5498cf1d81ca899f2db9d4e->enter($__internal_21964879768244d57c43742c785dedbe7e430c6ca5498cf1d81ca899f2db9d4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_b63ba2f23127f6c22cfd7b79253a517a6a3030e8f03693c9665fc12f11c9d51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b63ba2f23127f6c22cfd7b79253a517a6a3030e8f03693c9665fc12f11c9d51a->enter($__internal_b63ba2f23127f6c22cfd7b79253a517a6a3030e8f03693c9665fc12f11c9d51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21964879768244d57c43742c785dedbe7e430c6ca5498cf1d81ca899f2db9d4e->leave($__internal_21964879768244d57c43742c785dedbe7e430c6ca5498cf1d81ca899f2db9d4e_prof);

        
        $__internal_b63ba2f23127f6c22cfd7b79253a517a6a3030e8f03693c9665fc12f11c9d51a->leave($__internal_b63ba2f23127f6c22cfd7b79253a517a6a3030e8f03693c9665fc12f11c9d51a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ddb919505632f5b72c1d1c7ba746a45e4f50eaca4d70c56217d2f245f806ef52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddb919505632f5b72c1d1c7ba746a45e4f50eaca4d70c56217d2f245f806ef52->enter($__internal_ddb919505632f5b72c1d1c7ba746a45e4f50eaca4d70c56217d2f245f806ef52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_54506c1f65106d9898316ac0b4fe25212b71e5cd8ddea0b813912b8ec19ae97e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54506c1f65106d9898316ac0b4fe25212b71e5cd8ddea0b813912b8ec19ae97e->enter($__internal_54506c1f65106d9898316ac0b4fe25212b71e5cd8ddea0b813912b8ec19ae97e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_54506c1f65106d9898316ac0b4fe25212b71e5cd8ddea0b813912b8ec19ae97e->leave($__internal_54506c1f65106d9898316ac0b4fe25212b71e5cd8ddea0b813912b8ec19ae97e_prof);

        
        $__internal_ddb919505632f5b72c1d1c7ba746a45e4f50eaca4d70c56217d2f245f806ef52->leave($__internal_ddb919505632f5b72c1d1c7ba746a45e4f50eaca4d70c56217d2f245f806ef52_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/show.html.twig");
    }
}
