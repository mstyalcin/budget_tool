<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_b9f19f98a8baf8c7586874f0ac94675e1f156591bf5fc001c96785a6c10fd3f0 extends Twig_Template
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
        $__internal_1442dc23fccb23a40ccd7f77ce0132d8d94ac98c0c9370182d70c79f43a863ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1442dc23fccb23a40ccd7f77ce0132d8d94ac98c0c9370182d70c79f43a863ed->enter($__internal_1442dc23fccb23a40ccd7f77ce0132d8d94ac98c0c9370182d70c79f43a863ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_b1eb0b7c09026ac211555af09e6764c81390283a483ad1457aeea152376a0520 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1eb0b7c09026ac211555af09e6764c81390283a483ad1457aeea152376a0520->enter($__internal_b1eb0b7c09026ac211555af09e6764c81390283a483ad1457aeea152376a0520_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_1442dc23fccb23a40ccd7f77ce0132d8d94ac98c0c9370182d70c79f43a863ed->leave($__internal_1442dc23fccb23a40ccd7f77ce0132d8d94ac98c0c9370182d70c79f43a863ed_prof);

        
        $__internal_b1eb0b7c09026ac211555af09e6764c81390283a483ad1457aeea152376a0520->leave($__internal_b1eb0b7c09026ac211555af09e6764c81390283a483ad1457aeea152376a0520_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
