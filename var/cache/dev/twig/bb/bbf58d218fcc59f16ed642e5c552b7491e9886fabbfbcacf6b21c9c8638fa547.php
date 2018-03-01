<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_fffaeb478b2987bb7b5ece03ef70a3245bd567e390a16a1695e114d312304c59 extends Twig_Template
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
        $__internal_681b5563ec70f35a04c07c6b50e4786d2c31644e0d062be54c12a86cca7d7a05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_681b5563ec70f35a04c07c6b50e4786d2c31644e0d062be54c12a86cca7d7a05->enter($__internal_681b5563ec70f35a04c07c6b50e4786d2c31644e0d062be54c12a86cca7d7a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_e80c166f0cc79c8f3dff1e42505097af3fdf1fef07d6ab7a7dbabb9df0039af6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e80c166f0cc79c8f3dff1e42505097af3fdf1fef07d6ab7a7dbabb9df0039af6->enter($__internal_e80c166f0cc79c8f3dff1e42505097af3fdf1fef07d6ab7a7dbabb9df0039af6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_681b5563ec70f35a04c07c6b50e4786d2c31644e0d062be54c12a86cca7d7a05->leave($__internal_681b5563ec70f35a04c07c6b50e4786d2c31644e0d062be54c12a86cca7d7a05_prof);

        
        $__internal_e80c166f0cc79c8f3dff1e42505097af3fdf1fef07d6ab7a7dbabb9df0039af6->leave($__internal_e80c166f0cc79c8f3dff1e42505097af3fdf1fef07d6ab7a7dbabb9df0039af6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
