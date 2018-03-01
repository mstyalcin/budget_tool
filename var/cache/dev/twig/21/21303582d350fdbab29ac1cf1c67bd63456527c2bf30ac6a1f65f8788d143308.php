<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_39ba35198238f495e1963bc0b14c2aa3e06f8562f38dea1b0c53c4c9707fd100 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_252f0c3cc9fd211dcecafb603fb50b5fef19c9b7fc6340809cd65f0eac48c055 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_252f0c3cc9fd211dcecafb603fb50b5fef19c9b7fc6340809cd65f0eac48c055->enter($__internal_252f0c3cc9fd211dcecafb603fb50b5fef19c9b7fc6340809cd65f0eac48c055_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_128aefe3fc45d14470e8169960b7fe65ef17d9487ae43e822eacac92f67180a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_128aefe3fc45d14470e8169960b7fe65ef17d9487ae43e822eacac92f67180a9->enter($__internal_128aefe3fc45d14470e8169960b7fe65ef17d9487ae43e822eacac92f67180a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_252f0c3cc9fd211dcecafb603fb50b5fef19c9b7fc6340809cd65f0eac48c055->leave($__internal_252f0c3cc9fd211dcecafb603fb50b5fef19c9b7fc6340809cd65f0eac48c055_prof);

        
        $__internal_128aefe3fc45d14470e8169960b7fe65ef17d9487ae43e822eacac92f67180a9->leave($__internal_128aefe3fc45d14470e8169960b7fe65ef17d9487ae43e822eacac92f67180a9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_458bda54bc2be1022b664e286ec64a05bb587049989fb2e0f78e4eff507cbce0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458bda54bc2be1022b664e286ec64a05bb587049989fb2e0f78e4eff507cbce0->enter($__internal_458bda54bc2be1022b664e286ec64a05bb587049989fb2e0f78e4eff507cbce0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ec9a3ebcbfd7578ccafa4dfa710f6bd0b4dc48655f72661fa5b9e95f7615c9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec9a3ebcbfd7578ccafa4dfa710f6bd0b4dc48655f72661fa5b9e95f7615c9b2->enter($__internal_ec9a3ebcbfd7578ccafa4dfa710f6bd0b4dc48655f72661fa5b9e95f7615c9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_ec9a3ebcbfd7578ccafa4dfa710f6bd0b4dc48655f72661fa5b9e95f7615c9b2->leave($__internal_ec9a3ebcbfd7578ccafa4dfa710f6bd0b4dc48655f72661fa5b9e95f7615c9b2_prof);

        
        $__internal_458bda54bc2be1022b664e286ec64a05bb587049989fb2e0f78e4eff507cbce0->leave($__internal_458bda54bc2be1022b664e286ec64a05bb587049989fb2e0f78e4eff507cbce0_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Group/new.html.twig");
    }
}
