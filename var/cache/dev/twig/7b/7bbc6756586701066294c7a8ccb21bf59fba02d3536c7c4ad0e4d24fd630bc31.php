<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_6d0f50cba474bfec7fecf72838ccc16de71bea2a7b088bceb8b45da9ee452166 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2ae87522b8246b231c2a79c6e85360e625980950b63440598ea8b142996de032 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ae87522b8246b231c2a79c6e85360e625980950b63440598ea8b142996de032->enter($__internal_2ae87522b8246b231c2a79c6e85360e625980950b63440598ea8b142996de032_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_d681d879cee96d2ada2930723e7bb8a67c7bf45e3f4fdea4eba78fb7163dfe01 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d681d879cee96d2ada2930723e7bb8a67c7bf45e3f4fdea4eba78fb7163dfe01->enter($__internal_d681d879cee96d2ada2930723e7bb8a67c7bf45e3f4fdea4eba78fb7163dfe01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2ae87522b8246b231c2a79c6e85360e625980950b63440598ea8b142996de032->leave($__internal_2ae87522b8246b231c2a79c6e85360e625980950b63440598ea8b142996de032_prof);

        
        $__internal_d681d879cee96d2ada2930723e7bb8a67c7bf45e3f4fdea4eba78fb7163dfe01->leave($__internal_d681d879cee96d2ada2930723e7bb8a67c7bf45e3f4fdea4eba78fb7163dfe01_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_ad44aa421bf656c5965d1b8a386d0bad752394332a5675a4109f000e4ac0f6a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad44aa421bf656c5965d1b8a386d0bad752394332a5675a4109f000e4ac0f6a0->enter($__internal_ad44aa421bf656c5965d1b8a386d0bad752394332a5675a4109f000e4ac0f6a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_752788999841eef398a5abefefc9e8ea5097801e4c536db7854ba091c62e5ba2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_752788999841eef398a5abefefc9e8ea5097801e4c536db7854ba091c62e5ba2->enter($__internal_752788999841eef398a5abefefc9e8ea5097801e4c536db7854ba091c62e5ba2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_752788999841eef398a5abefefc9e8ea5097801e4c536db7854ba091c62e5ba2->leave($__internal_752788999841eef398a5abefefc9e8ea5097801e4c536db7854ba091c62e5ba2_prof);

        
        $__internal_ad44aa421bf656c5965d1b8a386d0bad752394332a5675a4109f000e4ac0f6a0->leave($__internal_ad44aa421bf656c5965d1b8a386d0bad752394332a5675a4109f000e4ac0f6a0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
