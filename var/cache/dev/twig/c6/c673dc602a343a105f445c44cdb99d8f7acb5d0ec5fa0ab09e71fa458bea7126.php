<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_fab36187d647c0229c9568dae93f3ee9c0dcbe0c82aa6ed8a533402f502eaf5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_c445f82265d2cc4626bea07d3f7a63f5d3d362807088d9340987a0f809ad3e96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c445f82265d2cc4626bea07d3f7a63f5d3d362807088d9340987a0f809ad3e96->enter($__internal_c445f82265d2cc4626bea07d3f7a63f5d3d362807088d9340987a0f809ad3e96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_ea0d589fe2d8b48eb753d6d071868f157ff9a3f0e4fa65e52b786ce53bf1dd89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea0d589fe2d8b48eb753d6d071868f157ff9a3f0e4fa65e52b786ce53bf1dd89->enter($__internal_ea0d589fe2d8b48eb753d6d071868f157ff9a3f0e4fa65e52b786ce53bf1dd89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c445f82265d2cc4626bea07d3f7a63f5d3d362807088d9340987a0f809ad3e96->leave($__internal_c445f82265d2cc4626bea07d3f7a63f5d3d362807088d9340987a0f809ad3e96_prof);

        
        $__internal_ea0d589fe2d8b48eb753d6d071868f157ff9a3f0e4fa65e52b786ce53bf1dd89->leave($__internal_ea0d589fe2d8b48eb753d6d071868f157ff9a3f0e4fa65e52b786ce53bf1dd89_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fe48b560108a81f8c0b1c0bf14556a81952f453498977c042b5a35c1932c0935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe48b560108a81f8c0b1c0bf14556a81952f453498977c042b5a35c1932c0935->enter($__internal_fe48b560108a81f8c0b1c0bf14556a81952f453498977c042b5a35c1932c0935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_fa7bf30e94b5296015eafcd7eff8721897377812878352eed2088377b18f7bde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa7bf30e94b5296015eafcd7eff8721897377812878352eed2088377b18f7bde->enter($__internal_fa7bf30e94b5296015eafcd7eff8721897377812878352eed2088377b18f7bde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_fa7bf30e94b5296015eafcd7eff8721897377812878352eed2088377b18f7bde->leave($__internal_fa7bf30e94b5296015eafcd7eff8721897377812878352eed2088377b18f7bde_prof);

        
        $__internal_fe48b560108a81f8c0b1c0bf14556a81952f453498977c042b5a35c1932c0935->leave($__internal_fe48b560108a81f8c0b1c0bf14556a81952f453498977c042b5a35c1932c0935_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list.html.twig");
    }
}
