<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_7ae854b56c6f75abcbcd82745561cefd7af161a420a8cfa0de33ba62b78890d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_8b229282962122beada186776ad7967e81344a6a9b3fa216d97b9c8b485df123 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b229282962122beada186776ad7967e81344a6a9b3fa216d97b9c8b485df123->enter($__internal_8b229282962122beada186776ad7967e81344a6a9b3fa216d97b9c8b485df123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_1aef394f3b332bde4516636452e297852edebd17fb6549a6cf6924d8a5a0d694 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aef394f3b332bde4516636452e297852edebd17fb6549a6cf6924d8a5a0d694->enter($__internal_1aef394f3b332bde4516636452e297852edebd17fb6549a6cf6924d8a5a0d694_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b229282962122beada186776ad7967e81344a6a9b3fa216d97b9c8b485df123->leave($__internal_8b229282962122beada186776ad7967e81344a6a9b3fa216d97b9c8b485df123_prof);

        
        $__internal_1aef394f3b332bde4516636452e297852edebd17fb6549a6cf6924d8a5a0d694->leave($__internal_1aef394f3b332bde4516636452e297852edebd17fb6549a6cf6924d8a5a0d694_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f1f2cae21a01e49f3914df90baf101038db9ed6fe8e5348cdbd4c6440dab999d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f1f2cae21a01e49f3914df90baf101038db9ed6fe8e5348cdbd4c6440dab999d->enter($__internal_f1f2cae21a01e49f3914df90baf101038db9ed6fe8e5348cdbd4c6440dab999d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_454cb3ca7db87d8c80c3a3bb073ec4e69727c8e44359d319c08ee8b0223b4e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_454cb3ca7db87d8c80c3a3bb073ec4e69727c8e44359d319c08ee8b0223b4e64->enter($__internal_454cb3ca7db87d8c80c3a3bb073ec4e69727c8e44359d319c08ee8b0223b4e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_454cb3ca7db87d8c80c3a3bb073ec4e69727c8e44359d319c08ee8b0223b4e64->leave($__internal_454cb3ca7db87d8c80c3a3bb073ec4e69727c8e44359d319c08ee8b0223b4e64_prof);

        
        $__internal_f1f2cae21a01e49f3914df90baf101038db9ed6fe8e5348cdbd4c6440dab999d->leave($__internal_f1f2cae21a01e49f3914df90baf101038db9ed6fe8e5348cdbd4c6440dab999d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/check_email.html.twig");
    }
}
