<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_8b34eed0a4d72f7d13d0ce31d1ecdba51bdf1f9161562bba3be16462e0f02555 extends Twig_Template
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
        $__internal_19f0ad01e94f4a53bca1bdea57ec271e97e55ec1bd84683b753f0a5ddbae58c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f0ad01e94f4a53bca1bdea57ec271e97e55ec1bd84683b753f0a5ddbae58c2->enter($__internal_19f0ad01e94f4a53bca1bdea57ec271e97e55ec1bd84683b753f0a5ddbae58c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_7d61c0d293d9cb245650ca7a0f9c7bd855ce22d5bd52cd1c5a23919668a7bdf5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d61c0d293d9cb245650ca7a0f9c7bd855ce22d5bd52cd1c5a23919668a7bdf5->enter($__internal_7d61c0d293d9cb245650ca7a0f9c7bd855ce22d5bd52cd1c5a23919668a7bdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_19f0ad01e94f4a53bca1bdea57ec271e97e55ec1bd84683b753f0a5ddbae58c2->leave($__internal_19f0ad01e94f4a53bca1bdea57ec271e97e55ec1bd84683b753f0a5ddbae58c2_prof);

        
        $__internal_7d61c0d293d9cb245650ca7a0f9c7bd855ce22d5bd52cd1c5a23919668a7bdf5->leave($__internal_7d61c0d293d9cb245650ca7a0f9c7bd855ce22d5bd52cd1c5a23919668a7bdf5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
