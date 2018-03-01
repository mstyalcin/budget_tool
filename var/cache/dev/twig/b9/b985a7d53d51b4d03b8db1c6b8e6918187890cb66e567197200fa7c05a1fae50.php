<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_102f04a56a3d4944dfc6366c63dfb31f9cf6b7926393de22e7c234f955252dba extends Twig_Template
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
        $__internal_f7bb70d87934ae04ff0e1803742fee91d71cee55e365f08513562dfadf2b360b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7bb70d87934ae04ff0e1803742fee91d71cee55e365f08513562dfadf2b360b->enter($__internal_f7bb70d87934ae04ff0e1803742fee91d71cee55e365f08513562dfadf2b360b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_22232fb2d57d6af12084abaf34073847d0b83f7ec13ac953c5b935abb84b715f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22232fb2d57d6af12084abaf34073847d0b83f7ec13ac953c5b935abb84b715f->enter($__internal_22232fb2d57d6af12084abaf34073847d0b83f7ec13ac953c5b935abb84b715f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_f7bb70d87934ae04ff0e1803742fee91d71cee55e365f08513562dfadf2b360b->leave($__internal_f7bb70d87934ae04ff0e1803742fee91d71cee55e365f08513562dfadf2b360b_prof);

        
        $__internal_22232fb2d57d6af12084abaf34073847d0b83f7ec13ac953c5b935abb84b715f->leave($__internal_22232fb2d57d6af12084abaf34073847d0b83f7ec13ac953c5b935abb84b715f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
