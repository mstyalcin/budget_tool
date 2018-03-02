<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_39ba35198238f495e1963bc0b14c2aa3e06f8562f38dea1b0c53c4c9707fd100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_62058a9c2d061363432b898761e29ff6b400f80a37b485e5af1b16f588830730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62058a9c2d061363432b898761e29ff6b400f80a37b485e5af1b16f588830730->enter($__internal_62058a9c2d061363432b898761e29ff6b400f80a37b485e5af1b16f588830730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_ef8ae1e59b0e2e522adcab3bd43491ae03bfd490536f3274ac0bd9bef577f5bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef8ae1e59b0e2e522adcab3bd43491ae03bfd490536f3274ac0bd9bef577f5bf->enter($__internal_ef8ae1e59b0e2e522adcab3bd43491ae03bfd490536f3274ac0bd9bef577f5bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62058a9c2d061363432b898761e29ff6b400f80a37b485e5af1b16f588830730->leave($__internal_62058a9c2d061363432b898761e29ff6b400f80a37b485e5af1b16f588830730_prof);

        
        $__internal_ef8ae1e59b0e2e522adcab3bd43491ae03bfd490536f3274ac0bd9bef577f5bf->leave($__internal_ef8ae1e59b0e2e522adcab3bd43491ae03bfd490536f3274ac0bd9bef577f5bf_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f641593e388577c4d91f2ebccd614755a75b50ed017b297409467c42b816ff5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f641593e388577c4d91f2ebccd614755a75b50ed017b297409467c42b816ff5d->enter($__internal_f641593e388577c4d91f2ebccd614755a75b50ed017b297409467c42b816ff5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_797aee8c2070db2bba7c054166c338c3a1fc4e824e223638d5062e559ec689de = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_797aee8c2070db2bba7c054166c338c3a1fc4e824e223638d5062e559ec689de->enter($__internal_797aee8c2070db2bba7c054166c338c3a1fc4e824e223638d5062e559ec689de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_797aee8c2070db2bba7c054166c338c3a1fc4e824e223638d5062e559ec689de->leave($__internal_797aee8c2070db2bba7c054166c338c3a1fc4e824e223638d5062e559ec689de_prof);

        
        $__internal_f641593e388577c4d91f2ebccd614755a75b50ed017b297409467c42b816ff5d->leave($__internal_f641593e388577c4d91f2ebccd614755a75b50ed017b297409467c42b816ff5d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
