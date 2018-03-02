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
        $__internal_d4b53c8f20a011875a12eca45d58d5a832139fc65bbd5ce2bfc8fecdd3a0c58a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4b53c8f20a011875a12eca45d58d5a832139fc65bbd5ce2bfc8fecdd3a0c58a->enter($__internal_d4b53c8f20a011875a12eca45d58d5a832139fc65bbd5ce2bfc8fecdd3a0c58a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_813fd7839736f0e6b2dfffcacc3dd1b481b4092980a879e29d5f5ce27d6b9c13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_813fd7839736f0e6b2dfffcacc3dd1b481b4092980a879e29d5f5ce27d6b9c13->enter($__internal_813fd7839736f0e6b2dfffcacc3dd1b481b4092980a879e29d5f5ce27d6b9c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4b53c8f20a011875a12eca45d58d5a832139fc65bbd5ce2bfc8fecdd3a0c58a->leave($__internal_d4b53c8f20a011875a12eca45d58d5a832139fc65bbd5ce2bfc8fecdd3a0c58a_prof);

        
        $__internal_813fd7839736f0e6b2dfffcacc3dd1b481b4092980a879e29d5f5ce27d6b9c13->leave($__internal_813fd7839736f0e6b2dfffcacc3dd1b481b4092980a879e29d5f5ce27d6b9c13_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_03673e07001f63bcaa9548a392852e8fea4d28011e2e8feea44c2db02856319d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03673e07001f63bcaa9548a392852e8fea4d28011e2e8feea44c2db02856319d->enter($__internal_03673e07001f63bcaa9548a392852e8fea4d28011e2e8feea44c2db02856319d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_663e46c256548faf1aded83bc71d33f1f2253d38ef4d69724ffaeec23fcc3876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_663e46c256548faf1aded83bc71d33f1f2253d38ef4d69724ffaeec23fcc3876->enter($__internal_663e46c256548faf1aded83bc71d33f1f2253d38ef4d69724ffaeec23fcc3876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_663e46c256548faf1aded83bc71d33f1f2253d38ef4d69724ffaeec23fcc3876->leave($__internal_663e46c256548faf1aded83bc71d33f1f2253d38ef4d69724ffaeec23fcc3876_prof);

        
        $__internal_03673e07001f63bcaa9548a392852e8fea4d28011e2e8feea44c2db02856319d->leave($__internal_03673e07001f63bcaa9548a392852e8fea4d28011e2e8feea44c2db02856319d_prof);

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
