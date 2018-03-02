<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_ec416e03217a3aec189a9d755b2511ba70848f3dd3b036c5dc3f5ff39e9a9384 extends Twig_Template
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
        $__internal_051c5ee3d30958f466ad74cd9bf7fb035664fd01e0167c02cb05ee951fe07d7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_051c5ee3d30958f466ad74cd9bf7fb035664fd01e0167c02cb05ee951fe07d7f->enter($__internal_051c5ee3d30958f466ad74cd9bf7fb035664fd01e0167c02cb05ee951fe07d7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_9329801493e518eb98656ea0ccd7e0f34bd4073663f4b30030da3a38605c60d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9329801493e518eb98656ea0ccd7e0f34bd4073663f4b30030da3a38605c60d3->enter($__internal_9329801493e518eb98656ea0ccd7e0f34bd4073663f4b30030da3a38605c60d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_051c5ee3d30958f466ad74cd9bf7fb035664fd01e0167c02cb05ee951fe07d7f->leave($__internal_051c5ee3d30958f466ad74cd9bf7fb035664fd01e0167c02cb05ee951fe07d7f_prof);

        
        $__internal_9329801493e518eb98656ea0ccd7e0f34bd4073663f4b30030da3a38605c60d3->leave($__internal_9329801493e518eb98656ea0ccd7e0f34bd4073663f4b30030da3a38605c60d3_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
", "@Twig/Exception/error.rdf.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
