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
        $__internal_78a9900df3d44f29ef67a3c4874b5e1948c9ae08a71580018d7d1a491f9f8b33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78a9900df3d44f29ef67a3c4874b5e1948c9ae08a71580018d7d1a491f9f8b33->enter($__internal_78a9900df3d44f29ef67a3c4874b5e1948c9ae08a71580018d7d1a491f9f8b33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_e181143f4a5805678e157b85a2d627f16851bfd93bb2c23161e9a84e9548b955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e181143f4a5805678e157b85a2d627f16851bfd93bb2c23161e9a84e9548b955->enter($__internal_e181143f4a5805678e157b85a2d627f16851bfd93bb2c23161e9a84e9548b955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_78a9900df3d44f29ef67a3c4874b5e1948c9ae08a71580018d7d1a491f9f8b33->leave($__internal_78a9900df3d44f29ef67a3c4874b5e1948c9ae08a71580018d7d1a491f9f8b33_prof);

        
        $__internal_e181143f4a5805678e157b85a2d627f16851bfd93bb2c23161e9a84e9548b955->leave($__internal_e181143f4a5805678e157b85a2d627f16851bfd93bb2c23161e9a84e9548b955_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_74b8bd868a71896c8131ace04ac9cacb72fd4b65d24dd669d9c3929c34ea5331 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74b8bd868a71896c8131ace04ac9cacb72fd4b65d24dd669d9c3929c34ea5331->enter($__internal_74b8bd868a71896c8131ace04ac9cacb72fd4b65d24dd669d9c3929c34ea5331_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d5f791c69af0b0a9cbd47de5dda7a131b2da9635de63d0f607c61c4171e0f1ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5f791c69af0b0a9cbd47de5dda7a131b2da9635de63d0f607c61c4171e0f1ab->enter($__internal_d5f791c69af0b0a9cbd47de5dda7a131b2da9635de63d0f607c61c4171e0f1ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_d5f791c69af0b0a9cbd47de5dda7a131b2da9635de63d0f607c61c4171e0f1ab->leave($__internal_d5f791c69af0b0a9cbd47de5dda7a131b2da9635de63d0f607c61c4171e0f1ab_prof);

        
        $__internal_74b8bd868a71896c8131ace04ac9cacb72fd4b65d24dd669d9c3929c34ea5331->leave($__internal_74b8bd868a71896c8131ace04ac9cacb72fd4b65d24dd669d9c3929c34ea5331_prof);

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
