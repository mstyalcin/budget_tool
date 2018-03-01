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
        $__internal_6ac32d593b71aea813b1b8e9acded00fdb28bf782fdf3ecd443333ba3dba9ea6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6ac32d593b71aea813b1b8e9acded00fdb28bf782fdf3ecd443333ba3dba9ea6->enter($__internal_6ac32d593b71aea813b1b8e9acded00fdb28bf782fdf3ecd443333ba3dba9ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_9044d2886df5beed59545c98ad94f99e5a413a24619f3ff761d517641a82b6c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9044d2886df5beed59545c98ad94f99e5a413a24619f3ff761d517641a82b6c2->enter($__internal_9044d2886df5beed59545c98ad94f99e5a413a24619f3ff761d517641a82b6c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ac32d593b71aea813b1b8e9acded00fdb28bf782fdf3ecd443333ba3dba9ea6->leave($__internal_6ac32d593b71aea813b1b8e9acded00fdb28bf782fdf3ecd443333ba3dba9ea6_prof);

        
        $__internal_9044d2886df5beed59545c98ad94f99e5a413a24619f3ff761d517641a82b6c2->leave($__internal_9044d2886df5beed59545c98ad94f99e5a413a24619f3ff761d517641a82b6c2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d0d75bb08266a345807d6482351115cb6d51804b427f1f8c5aed99fc0fb1eeb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0d75bb08266a345807d6482351115cb6d51804b427f1f8c5aed99fc0fb1eeb0->enter($__internal_d0d75bb08266a345807d6482351115cb6d51804b427f1f8c5aed99fc0fb1eeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_74208e66abe1e5ba2f6110943c91ed279862d4f7a3491f29f57add9b7660e1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74208e66abe1e5ba2f6110943c91ed279862d4f7a3491f29f57add9b7660e1a4->enter($__internal_74208e66abe1e5ba2f6110943c91ed279862d4f7a3491f29f57add9b7660e1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_74208e66abe1e5ba2f6110943c91ed279862d4f7a3491f29f57add9b7660e1a4->leave($__internal_74208e66abe1e5ba2f6110943c91ed279862d4f7a3491f29f57add9b7660e1a4_prof);

        
        $__internal_d0d75bb08266a345807d6482351115cb6d51804b427f1f8c5aed99fc0fb1eeb0->leave($__internal_d0d75bb08266a345807d6482351115cb6d51804b427f1f8c5aed99fc0fb1eeb0_prof);

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
