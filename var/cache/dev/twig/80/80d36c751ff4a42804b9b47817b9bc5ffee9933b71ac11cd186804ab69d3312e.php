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
        $__internal_031553ca1f0732dd6df9d1d223ef396e4e4cf33f7420ffa74b9a1ee4a2e0a4fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_031553ca1f0732dd6df9d1d223ef396e4e4cf33f7420ffa74b9a1ee4a2e0a4fe->enter($__internal_031553ca1f0732dd6df9d1d223ef396e4e4cf33f7420ffa74b9a1ee4a2e0a4fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_520b76ad83f4dc6bd79c0372cc08a716082ecfc0d1ed529f1578ee82990053b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_520b76ad83f4dc6bd79c0372cc08a716082ecfc0d1ed529f1578ee82990053b7->enter($__internal_520b76ad83f4dc6bd79c0372cc08a716082ecfc0d1ed529f1578ee82990053b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_031553ca1f0732dd6df9d1d223ef396e4e4cf33f7420ffa74b9a1ee4a2e0a4fe->leave($__internal_031553ca1f0732dd6df9d1d223ef396e4e4cf33f7420ffa74b9a1ee4a2e0a4fe_prof);

        
        $__internal_520b76ad83f4dc6bd79c0372cc08a716082ecfc0d1ed529f1578ee82990053b7->leave($__internal_520b76ad83f4dc6bd79c0372cc08a716082ecfc0d1ed529f1578ee82990053b7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2ccbfda8c8820354ad18cd5d0500ff9bcf547638e16139cb0ab3ff5b129878a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ccbfda8c8820354ad18cd5d0500ff9bcf547638e16139cb0ab3ff5b129878a5->enter($__internal_2ccbfda8c8820354ad18cd5d0500ff9bcf547638e16139cb0ab3ff5b129878a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_54ec1016ed756dc602bff0492ac8e4ea6bc914bb178c347a31853add82973e14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54ec1016ed756dc602bff0492ac8e4ea6bc914bb178c347a31853add82973e14->enter($__internal_54ec1016ed756dc602bff0492ac8e4ea6bc914bb178c347a31853add82973e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_54ec1016ed756dc602bff0492ac8e4ea6bc914bb178c347a31853add82973e14->leave($__internal_54ec1016ed756dc602bff0492ac8e4ea6bc914bb178c347a31853add82973e14_prof);

        
        $__internal_2ccbfda8c8820354ad18cd5d0500ff9bcf547638e16139cb0ab3ff5b129878a5->leave($__internal_2ccbfda8c8820354ad18cd5d0500ff9bcf547638e16139cb0ab3ff5b129878a5_prof);

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
