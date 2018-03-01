<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_fa2a72c56fd03980f4978ce3cb544a6f5908a1717172c3da7e320ab26a5aa0f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_6485899eb27f7b070b166b5deffef5dbf2843b89b3b6f6ed6a277c9eb8b72a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6485899eb27f7b070b166b5deffef5dbf2843b89b3b6f6ed6a277c9eb8b72a1d->enter($__internal_6485899eb27f7b070b166b5deffef5dbf2843b89b3b6f6ed6a277c9eb8b72a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_04a5972456a55dc86de73b24ffd36212fdb498eb73e1115d81a2d673771d624d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04a5972456a55dc86de73b24ffd36212fdb498eb73e1115d81a2d673771d624d->enter($__internal_04a5972456a55dc86de73b24ffd36212fdb498eb73e1115d81a2d673771d624d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6485899eb27f7b070b166b5deffef5dbf2843b89b3b6f6ed6a277c9eb8b72a1d->leave($__internal_6485899eb27f7b070b166b5deffef5dbf2843b89b3b6f6ed6a277c9eb8b72a1d_prof);

        
        $__internal_04a5972456a55dc86de73b24ffd36212fdb498eb73e1115d81a2d673771d624d->leave($__internal_04a5972456a55dc86de73b24ffd36212fdb498eb73e1115d81a2d673771d624d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a364f958cfc05522ec461da173a97f82f33127ec68bdc8c7495fa73469d5c366 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a364f958cfc05522ec461da173a97f82f33127ec68bdc8c7495fa73469d5c366->enter($__internal_a364f958cfc05522ec461da173a97f82f33127ec68bdc8c7495fa73469d5c366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_2ad4ed0d041d3253cfd51b4eb024cc210ff3e691a230b029541937cbc4c64d44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ad4ed0d041d3253cfd51b4eb024cc210ff3e691a230b029541937cbc4c64d44->enter($__internal_2ad4ed0d041d3253cfd51b4eb024cc210ff3e691a230b029541937cbc4c64d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_2ad4ed0d041d3253cfd51b4eb024cc210ff3e691a230b029541937cbc4c64d44->leave($__internal_2ad4ed0d041d3253cfd51b4eb024cc210ff3e691a230b029541937cbc4c64d44_prof);

        
        $__internal_a364f958cfc05522ec461da173a97f82f33127ec68bdc8c7495fa73469d5c366->leave($__internal_a364f958cfc05522ec461da173a97f82f33127ec68bdc8c7495fa73469d5c366_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
