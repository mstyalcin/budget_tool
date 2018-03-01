<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_7eb6249e76c0d9013f9a527985d2ad3faa724825093d03fe28488a8fb82a0068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_99d6989dc3983be448561850de61a16b788544ed76bfe5cfbb0e24dc44d1f7ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99d6989dc3983be448561850de61a16b788544ed76bfe5cfbb0e24dc44d1f7ad->enter($__internal_99d6989dc3983be448561850de61a16b788544ed76bfe5cfbb0e24dc44d1f7ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_488ca7b834710128656e22fe4b5e34eaafd6a5c2892f6579a22908faea3954ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488ca7b834710128656e22fe4b5e34eaafd6a5c2892f6579a22908faea3954ee->enter($__internal_488ca7b834710128656e22fe4b5e34eaafd6a5c2892f6579a22908faea3954ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_99d6989dc3983be448561850de61a16b788544ed76bfe5cfbb0e24dc44d1f7ad->leave($__internal_99d6989dc3983be448561850de61a16b788544ed76bfe5cfbb0e24dc44d1f7ad_prof);

        
        $__internal_488ca7b834710128656e22fe4b5e34eaafd6a5c2892f6579a22908faea3954ee->leave($__internal_488ca7b834710128656e22fe4b5e34eaafd6a5c2892f6579a22908faea3954ee_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fefe184601c424a949dbdf80a983b98d3ac9bfe437d5db159d0142019b617b6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fefe184601c424a949dbdf80a983b98d3ac9bfe437d5db159d0142019b617b6d->enter($__internal_fefe184601c424a949dbdf80a983b98d3ac9bfe437d5db159d0142019b617b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_8b71718bcd7ae5041a53613f2372b5752d59fa8560f97f18f06281cc1e0ca876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b71718bcd7ae5041a53613f2372b5752d59fa8560f97f18f06281cc1e0ca876->enter($__internal_8b71718bcd7ae5041a53613f2372b5752d59fa8560f97f18f06281cc1e0ca876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_8b71718bcd7ae5041a53613f2372b5752d59fa8560f97f18f06281cc1e0ca876->leave($__internal_8b71718bcd7ae5041a53613f2372b5752d59fa8560f97f18f06281cc1e0ca876_prof);

        
        $__internal_fefe184601c424a949dbdf80a983b98d3ac9bfe437d5db159d0142019b617b6d->leave($__internal_fefe184601c424a949dbdf80a983b98d3ac9bfe437d5db159d0142019b617b6d_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_267653c53b1421bd1416878fbd60a52590bdbced268bc626d9a818823879a7a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267653c53b1421bd1416878fbd60a52590bdbced268bc626d9a818823879a7a9->enter($__internal_267653c53b1421bd1416878fbd60a52590bdbced268bc626d9a818823879a7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_83c12d1d681897a2184d3d338c596e0ab9376c326586787a9736c34aa2b4b37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83c12d1d681897a2184d3d338c596e0ab9376c326586787a9736c34aa2b4b37b->enter($__internal_83c12d1d681897a2184d3d338c596e0ab9376c326586787a9736c34aa2b4b37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_83c12d1d681897a2184d3d338c596e0ab9376c326586787a9736c34aa2b4b37b->leave($__internal_83c12d1d681897a2184d3d338c596e0ab9376c326586787a9736c34aa2b4b37b_prof);

        
        $__internal_267653c53b1421bd1416878fbd60a52590bdbced268bc626d9a818823879a7a9->leave($__internal_267653c53b1421bd1416878fbd60a52590bdbced268bc626d9a818823879a7a9_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a0800ae6a32f65406bbbc4039423add028986b1eb764a030cdcc1864384b96d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0800ae6a32f65406bbbc4039423add028986b1eb764a030cdcc1864384b96d8->enter($__internal_a0800ae6a32f65406bbbc4039423add028986b1eb764a030cdcc1864384b96d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_57eadbcb5334d04a1f45f0821c03a521c1e457b555c2db2e7cb60404d6dec5a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57eadbcb5334d04a1f45f0821c03a521c1e457b555c2db2e7cb60404d6dec5a7->enter($__internal_57eadbcb5334d04a1f45f0821c03a521c1e457b555c2db2e7cb60404d6dec5a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_57eadbcb5334d04a1f45f0821c03a521c1e457b555c2db2e7cb60404d6dec5a7->leave($__internal_57eadbcb5334d04a1f45f0821c03a521c1e457b555c2db2e7cb60404d6dec5a7_prof);

        
        $__internal_a0800ae6a32f65406bbbc4039423add028986b1eb764a030cdcc1864384b96d8->leave($__internal_a0800ae6a32f65406bbbc4039423add028986b1eb764a030cdcc1864384b96d8_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/email.txt.twig");
    }
}
