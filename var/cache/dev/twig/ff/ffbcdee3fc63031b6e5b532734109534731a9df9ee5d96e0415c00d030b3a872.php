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
        $__internal_d985eb9a47ea640156f6e2ff1ac5d040b937cc33e39f543b1e909a24326c0ec2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d985eb9a47ea640156f6e2ff1ac5d040b937cc33e39f543b1e909a24326c0ec2->enter($__internal_d985eb9a47ea640156f6e2ff1ac5d040b937cc33e39f543b1e909a24326c0ec2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_47dc5dba598de806d18ab350e1a1636208a11a8bbee72809ffe2f3b4d33850f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47dc5dba598de806d18ab350e1a1636208a11a8bbee72809ffe2f3b4d33850f2->enter($__internal_47dc5dba598de806d18ab350e1a1636208a11a8bbee72809ffe2f3b4d33850f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_d985eb9a47ea640156f6e2ff1ac5d040b937cc33e39f543b1e909a24326c0ec2->leave($__internal_d985eb9a47ea640156f6e2ff1ac5d040b937cc33e39f543b1e909a24326c0ec2_prof);

        
        $__internal_47dc5dba598de806d18ab350e1a1636208a11a8bbee72809ffe2f3b4d33850f2->leave($__internal_47dc5dba598de806d18ab350e1a1636208a11a8bbee72809ffe2f3b4d33850f2_prof);

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
