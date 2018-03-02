<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_3fd53ae1cbb15a96db84a39f8d5ffecc6917c0506d4403e3a5c6e3a20249a138 extends Twig_Template
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
        $__internal_e7b1468a7433f9584f5065f4d6a38968057bf9e54112ddc6a2546a3c049b727d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7b1468a7433f9584f5065f4d6a38968057bf9e54112ddc6a2546a3c049b727d->enter($__internal_e7b1468a7433f9584f5065f4d6a38968057bf9e54112ddc6a2546a3c049b727d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_bbbfa89c0189cbe93e8382661192e8be930b8733da695d8de158195d74d60cee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbbfa89c0189cbe93e8382661192e8be930b8733da695d8de158195d74d60cee->enter($__internal_bbbfa89c0189cbe93e8382661192e8be930b8733da695d8de158195d74d60cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_e7b1468a7433f9584f5065f4d6a38968057bf9e54112ddc6a2546a3c049b727d->leave($__internal_e7b1468a7433f9584f5065f4d6a38968057bf9e54112ddc6a2546a3c049b727d_prof);

        
        $__internal_bbbfa89c0189cbe93e8382661192e8be930b8733da695d8de158195d74d60cee->leave($__internal_bbbfa89c0189cbe93e8382661192e8be930b8733da695d8de158195d74d60cee_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
