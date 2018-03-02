<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_c007cc5a64e24c97d259588a11025b9486a5ef2c53b938d871c21f975fe2140c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_70196b9fe07a7f4db17607348295c1a109213196cb5987ff0534c50f05c2a8b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70196b9fe07a7f4db17607348295c1a109213196cb5987ff0534c50f05c2a8b6->enter($__internal_70196b9fe07a7f4db17607348295c1a109213196cb5987ff0534c50f05c2a8b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_29932572b772b7e30130adca43418e6cf56ca957c269dfaeee6fe5a9d2e3aea0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29932572b772b7e30130adca43418e6cf56ca957c269dfaeee6fe5a9d2e3aea0->enter($__internal_29932572b772b7e30130adca43418e6cf56ca957c269dfaeee6fe5a9d2e3aea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70196b9fe07a7f4db17607348295c1a109213196cb5987ff0534c50f05c2a8b6->leave($__internal_70196b9fe07a7f4db17607348295c1a109213196cb5987ff0534c50f05c2a8b6_prof);

        
        $__internal_29932572b772b7e30130adca43418e6cf56ca957c269dfaeee6fe5a9d2e3aea0->leave($__internal_29932572b772b7e30130adca43418e6cf56ca957c269dfaeee6fe5a9d2e3aea0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7ff0d1dba9ed61e2c17aa153ddad90c902b81d702be5a68338b1fa18b1b69b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ff0d1dba9ed61e2c17aa153ddad90c902b81d702be5a68338b1fa18b1b69b7f->enter($__internal_7ff0d1dba9ed61e2c17aa153ddad90c902b81d702be5a68338b1fa18b1b69b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_91039015e8374cee639f02754d511ec75bd17a12d909f27e9038aa231773353e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_91039015e8374cee639f02754d511ec75bd17a12d909f27e9038aa231773353e->enter($__internal_91039015e8374cee639f02754d511ec75bd17a12d909f27e9038aa231773353e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_91039015e8374cee639f02754d511ec75bd17a12d909f27e9038aa231773353e->leave($__internal_91039015e8374cee639f02754d511ec75bd17a12d909f27e9038aa231773353e_prof);

        
        $__internal_7ff0d1dba9ed61e2c17aa153ddad90c902b81d702be5a68338b1fa18b1b69b7f->leave($__internal_7ff0d1dba9ed61e2c17aa153ddad90c902b81d702be5a68338b1fa18b1b69b7f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/ChangePassword/change_password.html.twig");
    }
}
