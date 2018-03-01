<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_74404cfbaab62615167fa8295a48daeebaad5590d20ad9ca14845a1f5d98fa59 extends Twig_Template
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
        $__internal_3575c9c9c37804eff4ebd38c73c2aead82fe1bdaea7b021b837ea04ec50be26b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3575c9c9c37804eff4ebd38c73c2aead82fe1bdaea7b021b837ea04ec50be26b->enter($__internal_3575c9c9c37804eff4ebd38c73c2aead82fe1bdaea7b021b837ea04ec50be26b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_5ecc742e3da7a9e45414dd3b12d72c5e0f5ae9f0421a4b1db06ce506d4d24b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ecc742e3da7a9e45414dd3b12d72c5e0f5ae9f0421a4b1db06ce506d4d24b30->enter($__internal_5ecc742e3da7a9e45414dd3b12d72c5e0f5ae9f0421a4b1db06ce506d4d24b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_3575c9c9c37804eff4ebd38c73c2aead82fe1bdaea7b021b837ea04ec50be26b->leave($__internal_3575c9c9c37804eff4ebd38c73c2aead82fe1bdaea7b021b837ea04ec50be26b_prof);

        
        $__internal_5ecc742e3da7a9e45414dd3b12d72c5e0f5ae9f0421a4b1db06ce506d4d24b30->leave($__internal_5ecc742e3da7a9e45414dd3b12d72c5e0f5ae9f0421a4b1db06ce506d4d24b30_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
