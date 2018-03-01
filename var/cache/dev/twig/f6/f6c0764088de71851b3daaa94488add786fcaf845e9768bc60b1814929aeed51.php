<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_6811aa10dc63a6d9db36df9ef5b6a96a68abac25a23b30b478889cb905ee173d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_a3a2c30b133929bafbfaf13d2dce401760b9eb642073976f7fe4f573b3366c95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a3a2c30b133929bafbfaf13d2dce401760b9eb642073976f7fe4f573b3366c95->enter($__internal_a3a2c30b133929bafbfaf13d2dce401760b9eb642073976f7fe4f573b3366c95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_5d5480ea2aaa284a3a419eab8977a162c022c75a7afe430f7d49e25ccfd4c4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5480ea2aaa284a3a419eab8977a162c022c75a7afe430f7d49e25ccfd4c4f7->enter($__internal_5d5480ea2aaa284a3a419eab8977a162c022c75a7afe430f7d49e25ccfd4c4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a3a2c30b133929bafbfaf13d2dce401760b9eb642073976f7fe4f573b3366c95->leave($__internal_a3a2c30b133929bafbfaf13d2dce401760b9eb642073976f7fe4f573b3366c95_prof);

        
        $__internal_5d5480ea2aaa284a3a419eab8977a162c022c75a7afe430f7d49e25ccfd4c4f7->leave($__internal_5d5480ea2aaa284a3a419eab8977a162c022c75a7afe430f7d49e25ccfd4c4f7_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_28912bf2ab3339966b3819f7b354585a63a9bcedc2ffb378b2b97b48945712b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28912bf2ab3339966b3819f7b354585a63a9bcedc2ffb378b2b97b48945712b1->enter($__internal_28912bf2ab3339966b3819f7b354585a63a9bcedc2ffb378b2b97b48945712b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b5b60781b228558780164cf0bc1f34a45e40b5dd0ae0f7ee723d67b017d124c3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5b60781b228558780164cf0bc1f34a45e40b5dd0ae0f7ee723d67b017d124c3->enter($__internal_b5b60781b228558780164cf0bc1f34a45e40b5dd0ae0f7ee723d67b017d124c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_b5b60781b228558780164cf0bc1f34a45e40b5dd0ae0f7ee723d67b017d124c3->leave($__internal_b5b60781b228558780164cf0bc1f34a45e40b5dd0ae0f7ee723d67b017d124c3_prof);

        
        $__internal_28912bf2ab3339966b3819f7b354585a63a9bcedc2ffb378b2b97b48945712b1->leave($__internal_28912bf2ab3339966b3819f7b354585a63a9bcedc2ffb378b2b97b48945712b1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show.html.twig");
    }
}
