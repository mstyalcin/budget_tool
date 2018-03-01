<?php

/* @Twig/Exception/error.html.twig */
class __TwigTemplate_1bb7dfddc0ff2cce37b27cf40d58bdd3592aff960c50b9c0baa99bf445ea3267 extends Twig_Template
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
        $__internal_bde51bfff20539b7baa6df933d1f06c99690071cc77ee5e8b624d835bcb0b908 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bde51bfff20539b7baa6df933d1f06c99690071cc77ee5e8b624d835bcb0b908->enter($__internal_bde51bfff20539b7baa6df933d1f06c99690071cc77ee5e8b624d835bcb0b908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        $__internal_dbc0cbbab98b087fb4edebcb027fdfdc1bfa53e974a2bf79cf7aab7a6ca1aaa8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dbc0cbbab98b087fb4edebcb027fdfdc1bfa53e974a2bf79cf7aab7a6ca1aaa8->enter($__internal_dbc0cbbab98b087fb4edebcb027fdfdc1bfa53e974a2bf79cf7aab7a6ca1aaa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <title>An Error Occurred: ";
        // line 5
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"";
        // line 9
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
";
        
        $__internal_bde51bfff20539b7baa6df933d1f06c99690071cc77ee5e8b624d835bcb0b908->leave($__internal_bde51bfff20539b7baa6df933d1f06c99690071cc77ee5e8b624d835bcb0b908_prof);

        
        $__internal_dbc0cbbab98b087fb4edebcb027fdfdc1bfa53e974a2bf79cf7aab7a6ca1aaa8->leave($__internal_dbc0cbbab98b087fb4edebcb027fdfdc1bfa53e974a2bf79cf7aab7a6ca1aaa8_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 9,  34 => 5,  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <title>An Error Occurred: {{ status_text }}</title>
    </head>
    <body>
        <h1>Oops! An Error Occurred</h1>
        <h2>The server returned a \"{{ status_code }} {{ status_text }}\".</h2>

        <div>
            Something is broken. Please let us know what you were doing when this error occurred.
            We will fix it as soon as possible. Sorry for any inconvenience caused.
        </div>
    </body>
</html>
", "@Twig/Exception/error.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.html.twig");
    }
}
