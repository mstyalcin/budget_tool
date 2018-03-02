<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_68f8a600a97daab33526f76ef500b32f261595419993e3dba667d3bdc4d891bd extends Twig_Template
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
        $__internal_f96615093a4a7774dc20b0fd7f048c896528a5ea86fac31c0031acfda799ba9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f96615093a4a7774dc20b0fd7f048c896528a5ea86fac31c0031acfda799ba9e->enter($__internal_f96615093a4a7774dc20b0fd7f048c896528a5ea86fac31c0031acfda799ba9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_3d00612dee358ade538c0fa41d8a30b83b86cccfe3eb6aa04ce66a8529b98e9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d00612dee358ade538c0fa41d8a30b83b86cccfe3eb6aa04ce66a8529b98e9d->enter($__internal_3d00612dee358ade538c0fa41d8a30b83b86cccfe3eb6aa04ce66a8529b98e9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_f96615093a4a7774dc20b0fd7f048c896528a5ea86fac31c0031acfda799ba9e->leave($__internal_f96615093a4a7774dc20b0fd7f048c896528a5ea86fac31c0031acfda799ba9e_prof);

        
        $__internal_3d00612dee358ade538c0fa41d8a30b83b86cccfe3eb6aa04ce66a8529b98e9d->leave($__internal_3d00612dee358ade538c0fa41d8a30b83b86cccfe3eb6aa04ce66a8529b98e9d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
", "@Twig/Exception/exception.atom.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
