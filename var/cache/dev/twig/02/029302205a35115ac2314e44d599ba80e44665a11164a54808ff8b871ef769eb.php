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
        $__internal_db02a993bb0f6a2fc4a97a2dbcf970b9be04167ece64ca10a1f7b7cba837b547 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_db02a993bb0f6a2fc4a97a2dbcf970b9be04167ece64ca10a1f7b7cba837b547->enter($__internal_db02a993bb0f6a2fc4a97a2dbcf970b9be04167ece64ca10a1f7b7cba837b547_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_2707a9a24e36ca228f8cbb6878a366ecea683d2f15a59f189ffc3c8f38c8c21b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2707a9a24e36ca228f8cbb6878a366ecea683d2f15a59f189ffc3c8f38c8c21b->enter($__internal_2707a9a24e36ca228f8cbb6878a366ecea683d2f15a59f189ffc3c8f38c8c21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_db02a993bb0f6a2fc4a97a2dbcf970b9be04167ece64ca10a1f7b7cba837b547->leave($__internal_db02a993bb0f6a2fc4a97a2dbcf970b9be04167ece64ca10a1f7b7cba837b547_prof);

        
        $__internal_2707a9a24e36ca228f8cbb6878a366ecea683d2f15a59f189ffc3c8f38c8c21b->leave($__internal_2707a9a24e36ca228f8cbb6878a366ecea683d2f15a59f189ffc3c8f38c8c21b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_190cf1a87bd6bd77d0e5fdc1253d7c61b2b5a33d768cc28b0ea3b84eed8575e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190cf1a87bd6bd77d0e5fdc1253d7c61b2b5a33d768cc28b0ea3b84eed8575e4->enter($__internal_190cf1a87bd6bd77d0e5fdc1253d7c61b2b5a33d768cc28b0ea3b84eed8575e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_e510d23fa9bde70c2b7557bbc7f5aa10faf7b680db38efd0cfbbb4edbde39f34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e510d23fa9bde70c2b7557bbc7f5aa10faf7b680db38efd0cfbbb4edbde39f34->enter($__internal_e510d23fa9bde70c2b7557bbc7f5aa10faf7b680db38efd0cfbbb4edbde39f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_e510d23fa9bde70c2b7557bbc7f5aa10faf7b680db38efd0cfbbb4edbde39f34->leave($__internal_e510d23fa9bde70c2b7557bbc7f5aa10faf7b680db38efd0cfbbb4edbde39f34_prof);

        
        $__internal_190cf1a87bd6bd77d0e5fdc1253d7c61b2b5a33d768cc28b0ea3b84eed8575e4->leave($__internal_190cf1a87bd6bd77d0e5fdc1253d7c61b2b5a33d768cc28b0ea3b84eed8575e4_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_58721170693edbc474d661d90fe7456c44c4962b16a4a94bfd3a16929cf94176 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58721170693edbc474d661d90fe7456c44c4962b16a4a94bfd3a16929cf94176->enter($__internal_58721170693edbc474d661d90fe7456c44c4962b16a4a94bfd3a16929cf94176_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_47c61a15d31d0e69c4b86e6e71957777b9435bc0fd32671b5f3bd92660e01c9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47c61a15d31d0e69c4b86e6e71957777b9435bc0fd32671b5f3bd92660e01c9f->enter($__internal_47c61a15d31d0e69c4b86e6e71957777b9435bc0fd32671b5f3bd92660e01c9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_47c61a15d31d0e69c4b86e6e71957777b9435bc0fd32671b5f3bd92660e01c9f->leave($__internal_47c61a15d31d0e69c4b86e6e71957777b9435bc0fd32671b5f3bd92660e01c9f_prof);

        
        $__internal_58721170693edbc474d661d90fe7456c44c4962b16a4a94bfd3a16929cf94176->leave($__internal_58721170693edbc474d661d90fe7456c44c4962b16a4a94bfd3a16929cf94176_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_8f0f67d5b7c1bbe2c18f25291413b76542113b3a6a1895eaa57939c39ee5f7c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f0f67d5b7c1bbe2c18f25291413b76542113b3a6a1895eaa57939c39ee5f7c8->enter($__internal_8f0f67d5b7c1bbe2c18f25291413b76542113b3a6a1895eaa57939c39ee5f7c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b60ee934d72d080ac89ab0a12c2aedbf6a21545ee5aae1a9f14127c857157752 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b60ee934d72d080ac89ab0a12c2aedbf6a21545ee5aae1a9f14127c857157752->enter($__internal_b60ee934d72d080ac89ab0a12c2aedbf6a21545ee5aae1a9f14127c857157752_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b60ee934d72d080ac89ab0a12c2aedbf6a21545ee5aae1a9f14127c857157752->leave($__internal_b60ee934d72d080ac89ab0a12c2aedbf6a21545ee5aae1a9f14127c857157752_prof);

        
        $__internal_8f0f67d5b7c1bbe2c18f25291413b76542113b3a6a1895eaa57939c39ee5f7c8->leave($__internal_8f0f67d5b7c1bbe2c18f25291413b76542113b3a6a1895eaa57939c39ee5f7c8_prof);

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
