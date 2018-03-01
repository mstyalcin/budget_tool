<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_49bb974e56e11c68bc338419765de7be76379401802c1623d8804632636b5b8c extends Twig_Template
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
        $__internal_31ead5826d7f9738da1757a0ad4ce1638be602c62957e0367eda9da70ca0f632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31ead5826d7f9738da1757a0ad4ce1638be602c62957e0367eda9da70ca0f632->enter($__internal_31ead5826d7f9738da1757a0ad4ce1638be602c62957e0367eda9da70ca0f632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_52483462999c113f3c6f4d78cbae87799790b99e4ee3160ef9111c5bb4062c5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52483462999c113f3c6f4d78cbae87799790b99e4ee3160ef9111c5bb4062c5e->enter($__internal_52483462999c113f3c6f4d78cbae87799790b99e4ee3160ef9111c5bb4062c5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_31ead5826d7f9738da1757a0ad4ce1638be602c62957e0367eda9da70ca0f632->leave($__internal_31ead5826d7f9738da1757a0ad4ce1638be602c62957e0367eda9da70ca0f632_prof);

        
        $__internal_52483462999c113f3c6f4d78cbae87799790b99e4ee3160ef9111c5bb4062c5e->leave($__internal_52483462999c113f3c6f4d78cbae87799790b99e4ee3160ef9111c5bb4062c5e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
