<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_27a2864a961e782e53391a8265531b5340dec56c4968cc86c45d01c23d732cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_26c5cd00e90744d244cc48aa9d0a769d762045ade7ed57a1efd9eff133e31669 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c5cd00e90744d244cc48aa9d0a769d762045ade7ed57a1efd9eff133e31669->enter($__internal_26c5cd00e90744d244cc48aa9d0a769d762045ade7ed57a1efd9eff133e31669_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_7b2e560b9f733ec1c1d83de088da1fee0844e5396a86d26e32f1b9f271826d21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b2e560b9f733ec1c1d83de088da1fee0844e5396a86d26e32f1b9f271826d21->enter($__internal_7b2e560b9f733ec1c1d83de088da1fee0844e5396a86d26e32f1b9f271826d21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26c5cd00e90744d244cc48aa9d0a769d762045ade7ed57a1efd9eff133e31669->leave($__internal_26c5cd00e90744d244cc48aa9d0a769d762045ade7ed57a1efd9eff133e31669_prof);

        
        $__internal_7b2e560b9f733ec1c1d83de088da1fee0844e5396a86d26e32f1b9f271826d21->leave($__internal_7b2e560b9f733ec1c1d83de088da1fee0844e5396a86d26e32f1b9f271826d21_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dd9786485cdf411d8fddb21242a1fa9af630b22468dc7f4d33742dafe2b2f81f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9786485cdf411d8fddb21242a1fa9af630b22468dc7f4d33742dafe2b2f81f->enter($__internal_dd9786485cdf411d8fddb21242a1fa9af630b22468dc7f4d33742dafe2b2f81f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_7654c25ec732678f3eece0ff49d501583a643825ac6a49402668cc239ec9a238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7654c25ec732678f3eece0ff49d501583a643825ac6a49402668cc239ec9a238->enter($__internal_7654c25ec732678f3eece0ff49d501583a643825ac6a49402668cc239ec9a238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_7654c25ec732678f3eece0ff49d501583a643825ac6a49402668cc239ec9a238->leave($__internal_7654c25ec732678f3eece0ff49d501583a643825ac6a49402668cc239ec9a238_prof);

        
        $__internal_dd9786485cdf411d8fddb21242a1fa9af630b22468dc7f4d33742dafe2b2f81f->leave($__internal_dd9786485cdf411d8fddb21242a1fa9af630b22468dc7f4d33742dafe2b2f81f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
