<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_8d8df87e5158a5648bb1f916757f816724d5cf79f98596010ebdf15a0409d686 extends Twig_Template
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
        $__internal_35485f40c3c00aa295f3e8657d546a33fe88ad6c44ade3abff9709ea4623fd11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35485f40c3c00aa295f3e8657d546a33fe88ad6c44ade3abff9709ea4623fd11->enter($__internal_35485f40c3c00aa295f3e8657d546a33fe88ad6c44ade3abff9709ea4623fd11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_df843c5fd204aa0fcd07a0cf1f6f627684fb5beaa346b1f5b34d0e2d19d78865 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df843c5fd204aa0fcd07a0cf1f6f627684fb5beaa346b1f5b34d0e2d19d78865->enter($__internal_df843c5fd204aa0fcd07a0cf1f6f627684fb5beaa346b1f5b34d0e2d19d78865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_35485f40c3c00aa295f3e8657d546a33fe88ad6c44ade3abff9709ea4623fd11->leave($__internal_35485f40c3c00aa295f3e8657d546a33fe88ad6c44ade3abff9709ea4623fd11_prof);

        
        $__internal_df843c5fd204aa0fcd07a0cf1f6f627684fb5beaa346b1f5b34d0e2d19d78865->leave($__internal_df843c5fd204aa0fcd07a0cf1f6f627684fb5beaa346b1f5b34d0e2d19d78865_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Group/show_content.html.twig");
    }
}
