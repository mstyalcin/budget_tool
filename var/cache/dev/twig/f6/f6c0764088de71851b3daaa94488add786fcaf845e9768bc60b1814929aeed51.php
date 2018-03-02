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
        $__internal_6ff9072d0328982d8f3f9bdd29bb5e13daf7bb62f6c1dd42f288d738df7c662f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ff9072d0328982d8f3f9bdd29bb5e13daf7bb62f6c1dd42f288d738df7c662f->enter($__internal_6ff9072d0328982d8f3f9bdd29bb5e13daf7bb62f6c1dd42f288d738df7c662f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_c930bdf0cb6a27e94ed375e0b071996a15502a2856ad445e83db435639cb6d07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c930bdf0cb6a27e94ed375e0b071996a15502a2856ad445e83db435639cb6d07->enter($__internal_c930bdf0cb6a27e94ed375e0b071996a15502a2856ad445e83db435639cb6d07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ff9072d0328982d8f3f9bdd29bb5e13daf7bb62f6c1dd42f288d738df7c662f->leave($__internal_6ff9072d0328982d8f3f9bdd29bb5e13daf7bb62f6c1dd42f288d738df7c662f_prof);

        
        $__internal_c930bdf0cb6a27e94ed375e0b071996a15502a2856ad445e83db435639cb6d07->leave($__internal_c930bdf0cb6a27e94ed375e0b071996a15502a2856ad445e83db435639cb6d07_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_610ac98281cf8891b0f62ecc542a6da281f0be971f310aa79c3513cf11a5ac2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610ac98281cf8891b0f62ecc542a6da281f0be971f310aa79c3513cf11a5ac2e->enter($__internal_610ac98281cf8891b0f62ecc542a6da281f0be971f310aa79c3513cf11a5ac2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_8d63614c73ce2335d22453e468455c669139a2f6c2a8f754ce7350d7f8b71634 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d63614c73ce2335d22453e468455c669139a2f6c2a8f754ce7350d7f8b71634->enter($__internal_8d63614c73ce2335d22453e468455c669139a2f6c2a8f754ce7350d7f8b71634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_8d63614c73ce2335d22453e468455c669139a2f6c2a8f754ce7350d7f8b71634->leave($__internal_8d63614c73ce2335d22453e468455c669139a2f6c2a8f754ce7350d7f8b71634_prof);

        
        $__internal_610ac98281cf8891b0f62ecc542a6da281f0be971f310aa79c3513cf11a5ac2e->leave($__internal_610ac98281cf8891b0f62ecc542a6da281f0be971f310aa79c3513cf11a5ac2e_prof);

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
