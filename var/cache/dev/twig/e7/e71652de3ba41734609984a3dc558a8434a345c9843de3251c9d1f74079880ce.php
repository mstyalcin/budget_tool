<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_9c233fe9030a2effcd484918a5eaa50b4eb0877e1fdcdb2c03d7545c1c9a5bc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_e9a3ca5d267efcde8feb46d9b196badd9887545402b7d823cf96b9cfba599bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9a3ca5d267efcde8feb46d9b196badd9887545402b7d823cf96b9cfba599bdf->enter($__internal_e9a3ca5d267efcde8feb46d9b196badd9887545402b7d823cf96b9cfba599bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_196844da0bc6a5c0080d2cb1f8d9152059e3bd46e05546080f77ac1ec56d952a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196844da0bc6a5c0080d2cb1f8d9152059e3bd46e05546080f77ac1ec56d952a->enter($__internal_196844da0bc6a5c0080d2cb1f8d9152059e3bd46e05546080f77ac1ec56d952a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9a3ca5d267efcde8feb46d9b196badd9887545402b7d823cf96b9cfba599bdf->leave($__internal_e9a3ca5d267efcde8feb46d9b196badd9887545402b7d823cf96b9cfba599bdf_prof);

        
        $__internal_196844da0bc6a5c0080d2cb1f8d9152059e3bd46e05546080f77ac1ec56d952a->leave($__internal_196844da0bc6a5c0080d2cb1f8d9152059e3bd46e05546080f77ac1ec56d952a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a7558845e012a245070b5658f8d570e6064e0c63da9e9bdc5f9ade81d48918a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7558845e012a245070b5658f8d570e6064e0c63da9e9bdc5f9ade81d48918a7->enter($__internal_a7558845e012a245070b5658f8d570e6064e0c63da9e9bdc5f9ade81d48918a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d74f21cd7f12766f796950ed20b7505a65f51449037d67ff0596bb72a75bb579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d74f21cd7f12766f796950ed20b7505a65f51449037d67ff0596bb72a75bb579->enter($__internal_d74f21cd7f12766f796950ed20b7505a65f51449037d67ff0596bb72a75bb579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_d74f21cd7f12766f796950ed20b7505a65f51449037d67ff0596bb72a75bb579->leave($__internal_d74f21cd7f12766f796950ed20b7505a65f51449037d67ff0596bb72a75bb579_prof);

        
        $__internal_a7558845e012a245070b5658f8d570e6064e0c63da9e9bdc5f9ade81d48918a7->leave($__internal_a7558845e012a245070b5658f8d570e6064e0c63da9e9bdc5f9ade81d48918a7_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
