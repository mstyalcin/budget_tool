<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_9f2c83bb05739af094f0ce1fb6576bd3cd95d0724a43ed878715252792842e6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
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
        $__internal_144f9609f91fbd5459af38c8a222294f34c398db9f5185f81f30b44190e58110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144f9609f91fbd5459af38c8a222294f34c398db9f5185f81f30b44190e58110->enter($__internal_144f9609f91fbd5459af38c8a222294f34c398db9f5185f81f30b44190e58110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_f6187bd1a51a0b77e484764ba82fe06205c71506f2d3813e4dc06a7e17936b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6187bd1a51a0b77e484764ba82fe06205c71506f2d3813e4dc06a7e17936b5d->enter($__internal_f6187bd1a51a0b77e484764ba82fe06205c71506f2d3813e4dc06a7e17936b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_144f9609f91fbd5459af38c8a222294f34c398db9f5185f81f30b44190e58110->leave($__internal_144f9609f91fbd5459af38c8a222294f34c398db9f5185f81f30b44190e58110_prof);

        
        $__internal_f6187bd1a51a0b77e484764ba82fe06205c71506f2d3813e4dc06a7e17936b5d->leave($__internal_f6187bd1a51a0b77e484764ba82fe06205c71506f2d3813e4dc06a7e17936b5d_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5439cdf90108a7b48f56fabf4f9e37e64fbb52c65d75f04b7a1e1ca4eb30c026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5439cdf90108a7b48f56fabf4f9e37e64fbb52c65d75f04b7a1e1ca4eb30c026->enter($__internal_5439cdf90108a7b48f56fabf4f9e37e64fbb52c65d75f04b7a1e1ca4eb30c026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_85b2103d9b21379c6feccc37c7a44d213791e70d02dfc3a513e9011fee0047fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85b2103d9b21379c6feccc37c7a44d213791e70d02dfc3a513e9011fee0047fa->enter($__internal_85b2103d9b21379c6feccc37c7a44d213791e70d02dfc3a513e9011fee0047fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_85b2103d9b21379c6feccc37c7a44d213791e70d02dfc3a513e9011fee0047fa->leave($__internal_85b2103d9b21379c6feccc37c7a44d213791e70d02dfc3a513e9011fee0047fa_prof);

        
        $__internal_5439cdf90108a7b48f56fabf4f9e37e64fbb52c65d75f04b7a1e1ca4eb30c026->leave($__internal_5439cdf90108a7b48f56fabf4f9e37e64fbb52c65d75f04b7a1e1ca4eb30c026_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/check_email.html.twig");
    }
}
