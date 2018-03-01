<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_04b9befdd14edd5ee6495cce8a94843ba5570f67778bcc4d42e09a4ff78024de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_48585eda4e59c161c67eaf7e349bb0107687f07c617c09660ae166f0996f6e1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48585eda4e59c161c67eaf7e349bb0107687f07c617c09660ae166f0996f6e1a->enter($__internal_48585eda4e59c161c67eaf7e349bb0107687f07c617c09660ae166f0996f6e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_6891966168cbf3c4df2be3b655b01529d143d12889b8738e2806a1190142a2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6891966168cbf3c4df2be3b655b01529d143d12889b8738e2806a1190142a2b3->enter($__internal_6891966168cbf3c4df2be3b655b01529d143d12889b8738e2806a1190142a2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48585eda4e59c161c67eaf7e349bb0107687f07c617c09660ae166f0996f6e1a->leave($__internal_48585eda4e59c161c67eaf7e349bb0107687f07c617c09660ae166f0996f6e1a_prof);

        
        $__internal_6891966168cbf3c4df2be3b655b01529d143d12889b8738e2806a1190142a2b3->leave($__internal_6891966168cbf3c4df2be3b655b01529d143d12889b8738e2806a1190142a2b3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_028504c8e0bfcc01f2a679d80e3d96108511ca7acbd74d7e0f8cee40dd00de4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_028504c8e0bfcc01f2a679d80e3d96108511ca7acbd74d7e0f8cee40dd00de4f->enter($__internal_028504c8e0bfcc01f2a679d80e3d96108511ca7acbd74d7e0f8cee40dd00de4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3bd58104eaea55e526fed06272dba36a7056060f1f2781fabece7b7b35941b76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bd58104eaea55e526fed06272dba36a7056060f1f2781fabece7b7b35941b76->enter($__internal_3bd58104eaea55e526fed06272dba36a7056060f1f2781fabece7b7b35941b76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_3bd58104eaea55e526fed06272dba36a7056060f1f2781fabece7b7b35941b76->leave($__internal_3bd58104eaea55e526fed06272dba36a7056060f1f2781fabece7b7b35941b76_prof);

        
        $__internal_028504c8e0bfcc01f2a679d80e3d96108511ca7acbd74d7e0f8cee40dd00de4f->leave($__internal_028504c8e0bfcc01f2a679d80e3d96108511ca7acbd74d7e0f8cee40dd00de4f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/request.html.twig");
    }
}
