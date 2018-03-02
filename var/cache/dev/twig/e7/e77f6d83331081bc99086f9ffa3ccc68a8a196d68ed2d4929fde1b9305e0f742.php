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
        $__internal_fbcd32d7ae637956e20f05187afa8ee11b26f654cf9caaad801863e79ab8c36d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbcd32d7ae637956e20f05187afa8ee11b26f654cf9caaad801863e79ab8c36d->enter($__internal_fbcd32d7ae637956e20f05187afa8ee11b26f654cf9caaad801863e79ab8c36d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_26e7ee04f6d91b194454f29dc0b72c7b6a135092eb751e1ed642314edbd48817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26e7ee04f6d91b194454f29dc0b72c7b6a135092eb751e1ed642314edbd48817->enter($__internal_26e7ee04f6d91b194454f29dc0b72c7b6a135092eb751e1ed642314edbd48817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_fbcd32d7ae637956e20f05187afa8ee11b26f654cf9caaad801863e79ab8c36d->leave($__internal_fbcd32d7ae637956e20f05187afa8ee11b26f654cf9caaad801863e79ab8c36d_prof);

        
        $__internal_26e7ee04f6d91b194454f29dc0b72c7b6a135092eb751e1ed642314edbd48817->leave($__internal_26e7ee04f6d91b194454f29dc0b72c7b6a135092eb751e1ed642314edbd48817_prof);

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
