<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ae0deb548ed99a91ddc8a7df55d0a1acc3ea1fc685b45c5178e2688d3a04071f extends Twig_Template
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
        $__internal_5d12dd54e49cae1fb3e5ea4c7fe7f01fd8d6dfb9ee87e1087e6a62cbbd44f3d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d12dd54e49cae1fb3e5ea4c7fe7f01fd8d6dfb9ee87e1087e6a62cbbd44f3d2->enter($__internal_5d12dd54e49cae1fb3e5ea4c7fe7f01fd8d6dfb9ee87e1087e6a62cbbd44f3d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_8516b6a657f30caab1a6ed5d28dc986a8984f597e043f307ebd5e45db8d32336 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8516b6a657f30caab1a6ed5d28dc986a8984f597e043f307ebd5e45db8d32336->enter($__internal_8516b6a657f30caab1a6ed5d28dc986a8984f597e043f307ebd5e45db8d32336_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_5d12dd54e49cae1fb3e5ea4c7fe7f01fd8d6dfb9ee87e1087e6a62cbbd44f3d2->leave($__internal_5d12dd54e49cae1fb3e5ea4c7fe7f01fd8d6dfb9ee87e1087e6a62cbbd44f3d2_prof);

        
        $__internal_8516b6a657f30caab1a6ed5d28dc986a8984f597e043f307ebd5e45db8d32336->leave($__internal_8516b6a657f30caab1a6ed5d28dc986a8984f597e043f307ebd5e45db8d32336_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.rdf.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
