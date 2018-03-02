<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_c43000fe0a97536004bd1662cc95ba996ed7913a124e700c760bbe10eb132f97 extends Twig_Template
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
        $__internal_b560c1203c0bb15c060af654438318d36567d4981fc5016990cd484d9a1cfd81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b560c1203c0bb15c060af654438318d36567d4981fc5016990cd484d9a1cfd81->enter($__internal_b560c1203c0bb15c060af654438318d36567d4981fc5016990cd484d9a1cfd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_c56371f62ce4a6dca4067179a15e72fd5226295e6503c07fb987c369582d29d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c56371f62ce4a6dca4067179a15e72fd5226295e6503c07fb987c369582d29d8->enter($__internal_c56371f62ce4a6dca4067179a15e72fd5226295e6503c07fb987c369582d29d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_b560c1203c0bb15c060af654438318d36567d4981fc5016990cd484d9a1cfd81->leave($__internal_b560c1203c0bb15c060af654438318d36567d4981fc5016990cd484d9a1cfd81_prof);

        
        $__internal_c56371f62ce4a6dca4067179a15e72fd5226295e6503c07fb987c369582d29d8->leave($__internal_c56371f62ce4a6dca4067179a15e72fd5226295e6503c07fb987c369582d29d8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
