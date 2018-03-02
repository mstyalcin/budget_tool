<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_04b9befdd14edd5ee6495cce8a94843ba5570f67778bcc4d42e09a4ff78024de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_6446af5f588befc0c07b280ed2328636b8649967b413bead85198620643d318a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6446af5f588befc0c07b280ed2328636b8649967b413bead85198620643d318a->enter($__internal_6446af5f588befc0c07b280ed2328636b8649967b413bead85198620643d318a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_2d7421a851863f7a0dd2de82853acd6f3dd957391c3e03a7db2158fcd3d0e26e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d7421a851863f7a0dd2de82853acd6f3dd957391c3e03a7db2158fcd3d0e26e->enter($__internal_2d7421a851863f7a0dd2de82853acd6f3dd957391c3e03a7db2158fcd3d0e26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6446af5f588befc0c07b280ed2328636b8649967b413bead85198620643d318a->leave($__internal_6446af5f588befc0c07b280ed2328636b8649967b413bead85198620643d318a_prof);

        
        $__internal_2d7421a851863f7a0dd2de82853acd6f3dd957391c3e03a7db2158fcd3d0e26e->leave($__internal_2d7421a851863f7a0dd2de82853acd6f3dd957391c3e03a7db2158fcd3d0e26e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6c88f46d6c60a1848cd4c03a649eb5b5155c7bbe372f0676ae7b7eda29d302c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c88f46d6c60a1848cd4c03a649eb5b5155c7bbe372f0676ae7b7eda29d302c4->enter($__internal_6c88f46d6c60a1848cd4c03a649eb5b5155c7bbe372f0676ae7b7eda29d302c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3d2612c1ff9c321d4a104dabc8652103bf92f2d38d4abd80c836aafddf37bb35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2612c1ff9c321d4a104dabc8652103bf92f2d38d4abd80c836aafddf37bb35->enter($__internal_3d2612c1ff9c321d4a104dabc8652103bf92f2d38d4abd80c836aafddf37bb35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_3d2612c1ff9c321d4a104dabc8652103bf92f2d38d4abd80c836aafddf37bb35->leave($__internal_3d2612c1ff9c321d4a104dabc8652103bf92f2d38d4abd80c836aafddf37bb35_prof);

        
        $__internal_6c88f46d6c60a1848cd4c03a649eb5b5155c7bbe372f0676ae7b7eda29d302c4->leave($__internal_6c88f46d6c60a1848cd4c03a649eb5b5155c7bbe372f0676ae7b7eda29d302c4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
