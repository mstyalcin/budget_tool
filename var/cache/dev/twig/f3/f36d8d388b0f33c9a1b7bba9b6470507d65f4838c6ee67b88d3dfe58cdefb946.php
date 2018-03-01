<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_c007cc5a64e24c97d259588a11025b9486a5ef2c53b938d871c21f975fe2140c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_4dff231d2b682916def345bac05a9b8bf82fc48d890419bc80a92957bb922b7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4dff231d2b682916def345bac05a9b8bf82fc48d890419bc80a92957bb922b7c->enter($__internal_4dff231d2b682916def345bac05a9b8bf82fc48d890419bc80a92957bb922b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_22fa17fb4d70cb844c50fc77870b33a11cadb8953b428e3689bfe4d724715686 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22fa17fb4d70cb844c50fc77870b33a11cadb8953b428e3689bfe4d724715686->enter($__internal_22fa17fb4d70cb844c50fc77870b33a11cadb8953b428e3689bfe4d724715686_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4dff231d2b682916def345bac05a9b8bf82fc48d890419bc80a92957bb922b7c->leave($__internal_4dff231d2b682916def345bac05a9b8bf82fc48d890419bc80a92957bb922b7c_prof);

        
        $__internal_22fa17fb4d70cb844c50fc77870b33a11cadb8953b428e3689bfe4d724715686->leave($__internal_22fa17fb4d70cb844c50fc77870b33a11cadb8953b428e3689bfe4d724715686_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa0d9bf188e3f003acb075dd5970a0f9a8f6772c21a16f63d1dc1062eb9fca4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa0d9bf188e3f003acb075dd5970a0f9a8f6772c21a16f63d1dc1062eb9fca4b->enter($__internal_aa0d9bf188e3f003acb075dd5970a0f9a8f6772c21a16f63d1dc1062eb9fca4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ce3d7b9afc7f0106bd0e51393b518551bfea1219a21b45be64d5b8669f33acf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce3d7b9afc7f0106bd0e51393b518551bfea1219a21b45be64d5b8669f33acf4->enter($__internal_ce3d7b9afc7f0106bd0e51393b518551bfea1219a21b45be64d5b8669f33acf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_ce3d7b9afc7f0106bd0e51393b518551bfea1219a21b45be64d5b8669f33acf4->leave($__internal_ce3d7b9afc7f0106bd0e51393b518551bfea1219a21b45be64d5b8669f33acf4_prof);

        
        $__internal_aa0d9bf188e3f003acb075dd5970a0f9a8f6772c21a16f63d1dc1062eb9fca4b->leave($__internal_aa0d9bf188e3f003acb075dd5970a0f9a8f6772c21a16f63d1dc1062eb9fca4b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
