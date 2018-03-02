<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_2857855144c5f3f98beb624a2081a7af3f2e97b0cbeeaae6a32e2ab4dbcbe28a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_5942800c9ef867ed71284790f902b5c4dc3cab16c67726ea049d526c4f707877 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5942800c9ef867ed71284790f902b5c4dc3cab16c67726ea049d526c4f707877->enter($__internal_5942800c9ef867ed71284790f902b5c4dc3cab16c67726ea049d526c4f707877_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_76720e13719aa805e48ab14b08791a6d290b2c5e1fccf4a7423de6c240718f74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76720e13719aa805e48ab14b08791a6d290b2c5e1fccf4a7423de6c240718f74->enter($__internal_76720e13719aa805e48ab14b08791a6d290b2c5e1fccf4a7423de6c240718f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5942800c9ef867ed71284790f902b5c4dc3cab16c67726ea049d526c4f707877->leave($__internal_5942800c9ef867ed71284790f902b5c4dc3cab16c67726ea049d526c4f707877_prof);

        
        $__internal_76720e13719aa805e48ab14b08791a6d290b2c5e1fccf4a7423de6c240718f74->leave($__internal_76720e13719aa805e48ab14b08791a6d290b2c5e1fccf4a7423de6c240718f74_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ab9bb97dcbf89a0b4676fc020ff8582a157ad63d33d954e147f82b160df905f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab9bb97dcbf89a0b4676fc020ff8582a157ad63d33d954e147f82b160df905f5->enter($__internal_ab9bb97dcbf89a0b4676fc020ff8582a157ad63d33d954e147f82b160df905f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_e3928cccbb6143774949ec4b53149ae7988f9898eb4c2644d951cd1d4754ca1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3928cccbb6143774949ec4b53149ae7988f9898eb4c2644d951cd1d4754ca1c->enter($__internal_e3928cccbb6143774949ec4b53149ae7988f9898eb4c2644d951cd1d4754ca1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_e3928cccbb6143774949ec4b53149ae7988f9898eb4c2644d951cd1d4754ca1c->leave($__internal_e3928cccbb6143774949ec4b53149ae7988f9898eb4c2644d951cd1d4754ca1c_prof);

        
        $__internal_ab9bb97dcbf89a0b4676fc020ff8582a157ad63d33d954e147f82b160df905f5->leave($__internal_ab9bb97dcbf89a0b4676fc020ff8582a157ad63d33d954e147f82b160df905f5_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/confirmed.html.twig");
    }
}
