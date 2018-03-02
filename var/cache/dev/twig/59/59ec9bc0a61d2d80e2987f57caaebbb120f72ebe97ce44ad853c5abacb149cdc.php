<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_481ba6e4e5dcc6295fda0ddf9a8a01fa21a3379226fc36b416252e4ce269d970 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_d7e341107268cc59813b3563680d551745e28a5fbc96d13e8010966c9f2bd6ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7e341107268cc59813b3563680d551745e28a5fbc96d13e8010966c9f2bd6ca->enter($__internal_d7e341107268cc59813b3563680d551745e28a5fbc96d13e8010966c9f2bd6ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_1ac48fee5345603a3febbdfd30eab6ae103a47e723da14e7b3c70a9adf37272a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac48fee5345603a3febbdfd30eab6ae103a47e723da14e7b3c70a9adf37272a->enter($__internal_1ac48fee5345603a3febbdfd30eab6ae103a47e723da14e7b3c70a9adf37272a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7e341107268cc59813b3563680d551745e28a5fbc96d13e8010966c9f2bd6ca->leave($__internal_d7e341107268cc59813b3563680d551745e28a5fbc96d13e8010966c9f2bd6ca_prof);

        
        $__internal_1ac48fee5345603a3febbdfd30eab6ae103a47e723da14e7b3c70a9adf37272a->leave($__internal_1ac48fee5345603a3febbdfd30eab6ae103a47e723da14e7b3c70a9adf37272a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e57290e4e726d0cabd39208b809f427c73247acdef05a2001c842d7251c513e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57290e4e726d0cabd39208b809f427c73247acdef05a2001c842d7251c513e0->enter($__internal_e57290e4e726d0cabd39208b809f427c73247acdef05a2001c842d7251c513e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6c34037f80405fbb435ad3315a35f269097954e5d5a2e841c29703a5665162ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c34037f80405fbb435ad3315a35f269097954e5d5a2e841c29703a5665162ff->enter($__internal_6c34037f80405fbb435ad3315a35f269097954e5d5a2e841c29703a5665162ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_6c34037f80405fbb435ad3315a35f269097954e5d5a2e841c29703a5665162ff->leave($__internal_6c34037f80405fbb435ad3315a35f269097954e5d5a2e841c29703a5665162ff_prof);

        
        $__internal_e57290e4e726d0cabd39208b809f427c73247acdef05a2001c842d7251c513e0->leave($__internal_e57290e4e726d0cabd39208b809f427c73247acdef05a2001c842d7251c513e0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Group/edit.html.twig");
    }
}
