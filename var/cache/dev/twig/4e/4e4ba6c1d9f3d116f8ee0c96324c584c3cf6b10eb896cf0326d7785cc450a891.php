<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_becab780cc20b4ad983c8580be9b61ab6cda72f4848eaa6f7bb84aa2868580fb extends Twig_Template
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
        $__internal_6cc3ade8626c927be92b51edd57b388f17f4d98bef53f1c0e5e6ecc74477eaba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc3ade8626c927be92b51edd57b388f17f4d98bef53f1c0e5e6ecc74477eaba->enter($__internal_6cc3ade8626c927be92b51edd57b388f17f4d98bef53f1c0e5e6ecc74477eaba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_1c6a2d14513698dff389f0ae85ea4fea9cc5f1cde23cb34ba3b4dd0e5fa3d4fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c6a2d14513698dff389f0ae85ea4fea9cc5f1cde23cb34ba3b4dd0e5fa3d4fc->enter($__internal_1c6a2d14513698dff389f0ae85ea4fea9cc5f1cde23cb34ba3b4dd0e5fa3d4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6cc3ade8626c927be92b51edd57b388f17f4d98bef53f1c0e5e6ecc74477eaba->leave($__internal_6cc3ade8626c927be92b51edd57b388f17f4d98bef53f1c0e5e6ecc74477eaba_prof);

        
        $__internal_1c6a2d14513698dff389f0ae85ea4fea9cc5f1cde23cb34ba3b4dd0e5fa3d4fc->leave($__internal_1c6a2d14513698dff389f0ae85ea4fea9cc5f1cde23cb34ba3b4dd0e5fa3d4fc_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_9fd79f1548114a2ea402ea98b0e8487bb39d65645542e6286fa358e76e9ccb09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd79f1548114a2ea402ea98b0e8487bb39d65645542e6286fa358e76e9ccb09->enter($__internal_9fd79f1548114a2ea402ea98b0e8487bb39d65645542e6286fa358e76e9ccb09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_a602097c3c3d4ed467a8e4935c0d17ca52c1c8f0c001e14226e604e4b3ec6bc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a602097c3c3d4ed467a8e4935c0d17ca52c1c8f0c001e14226e604e4b3ec6bc1->enter($__internal_a602097c3c3d4ed467a8e4935c0d17ca52c1c8f0c001e14226e604e4b3ec6bc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_a602097c3c3d4ed467a8e4935c0d17ca52c1c8f0c001e14226e604e4b3ec6bc1->leave($__internal_a602097c3c3d4ed467a8e4935c0d17ca52c1c8f0c001e14226e604e4b3ec6bc1_prof);

        
        $__internal_9fd79f1548114a2ea402ea98b0e8487bb39d65645542e6286fa358e76e9ccb09->leave($__internal_9fd79f1548114a2ea402ea98b0e8487bb39d65645542e6286fa358e76e9ccb09_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c2b2886ffbb671d8a8f79f948b1e20ce6a8843d7b08201a946cc5cd0075aa673 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2b2886ffbb671d8a8f79f948b1e20ce6a8843d7b08201a946cc5cd0075aa673->enter($__internal_c2b2886ffbb671d8a8f79f948b1e20ce6a8843d7b08201a946cc5cd0075aa673_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_374e8a5c346bb75ab0f52d892d6e60aacecca514764835078c17da9abea63496 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_374e8a5c346bb75ab0f52d892d6e60aacecca514764835078c17da9abea63496->enter($__internal_374e8a5c346bb75ab0f52d892d6e60aacecca514764835078c17da9abea63496_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_374e8a5c346bb75ab0f52d892d6e60aacecca514764835078c17da9abea63496->leave($__internal_374e8a5c346bb75ab0f52d892d6e60aacecca514764835078c17da9abea63496_prof);

        
        $__internal_c2b2886ffbb671d8a8f79f948b1e20ce6a8843d7b08201a946cc5cd0075aa673->leave($__internal_c2b2886ffbb671d8a8f79f948b1e20ce6a8843d7b08201a946cc5cd0075aa673_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7b63c6972de3bd6ada0686fb9944368137741cc5a8d2739a05ccf11c88b3c7ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b63c6972de3bd6ada0686fb9944368137741cc5a8d2739a05ccf11c88b3c7ba->enter($__internal_7b63c6972de3bd6ada0686fb9944368137741cc5a8d2739a05ccf11c88b3c7ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_6ed564b7f10f1d770f423836672bb65bf4a4e0f51a1e782f8146dfa7487ba6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed564b7f10f1d770f423836672bb65bf4a4e0f51a1e782f8146dfa7487ba6b2->enter($__internal_6ed564b7f10f1d770f423836672bb65bf4a4e0f51a1e782f8146dfa7487ba6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6ed564b7f10f1d770f423836672bb65bf4a4e0f51a1e782f8146dfa7487ba6b2->leave($__internal_6ed564b7f10f1d770f423836672bb65bf4a4e0f51a1e782f8146dfa7487ba6b2_prof);

        
        $__internal_7b63c6972de3bd6ada0686fb9944368137741cc5a8d2739a05ccf11c88b3c7ba->leave($__internal_7b63c6972de3bd6ada0686fb9944368137741cc5a8d2739a05ccf11c88b3c7ba_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/email.txt.twig");
    }
}
