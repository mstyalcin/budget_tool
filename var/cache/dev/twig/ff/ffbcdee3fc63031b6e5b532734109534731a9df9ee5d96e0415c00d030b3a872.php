<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_f099fc96f6c4bdc2627f4db5980f7bfd4bd3005352c87a19779e0587d7440481 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1299deaa702d4a06b8373e15a8ade6a4ed6a3d1e10181f680661dfc4e3a24537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1299deaa702d4a06b8373e15a8ade6a4ed6a3d1e10181f680661dfc4e3a24537->enter($__internal_1299deaa702d4a06b8373e15a8ade6a4ed6a3d1e10181f680661dfc4e3a24537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_81bba5360edb8fe114d7c0086cc717393c7d93dd6cb926c976223976785df3da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81bba5360edb8fe114d7c0086cc717393c7d93dd6cb926c976223976785df3da->enter($__internal_81bba5360edb8fe114d7c0086cc717393c7d93dd6cb926c976223976785df3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_1299deaa702d4a06b8373e15a8ade6a4ed6a3d1e10181f680661dfc4e3a24537->leave($__internal_1299deaa702d4a06b8373e15a8ade6a4ed6a3d1e10181f680661dfc4e3a24537_prof);

        
        $__internal_81bba5360edb8fe114d7c0086cc717393c7d93dd6cb926c976223976785df3da->leave($__internal_81bba5360edb8fe114d7c0086cc717393c7d93dd6cb926c976223976785df3da_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
