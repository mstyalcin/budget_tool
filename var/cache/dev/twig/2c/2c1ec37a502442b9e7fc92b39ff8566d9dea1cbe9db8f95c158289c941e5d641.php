<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_32c5cf93c0e9ec10048a0f093e8bc5cbcab84fe1bde99fbbe7cb2dc71231d3fb extends Twig_Template
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
        $__internal_9783cdf55d7d0de988fa82e9295d70664e2fb4f527ec92772a42e0a62775a968 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9783cdf55d7d0de988fa82e9295d70664e2fb4f527ec92772a42e0a62775a968->enter($__internal_9783cdf55d7d0de988fa82e9295d70664e2fb4f527ec92772a42e0a62775a968_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_75d77a77766017195e7a0c5782ea47783fe764d61e8307f56ffc9505d0a8366c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d77a77766017195e7a0c5782ea47783fe764d61e8307f56ffc9505d0a8366c->enter($__internal_75d77a77766017195e7a0c5782ea47783fe764d61e8307f56ffc9505d0a8366c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_9783cdf55d7d0de988fa82e9295d70664e2fb4f527ec92772a42e0a62775a968->leave($__internal_9783cdf55d7d0de988fa82e9295d70664e2fb4f527ec92772a42e0a62775a968_prof);

        
        $__internal_75d77a77766017195e7a0c5782ea47783fe764d61e8307f56ffc9505d0a8366c->leave($__internal_75d77a77766017195e7a0c5782ea47783fe764d61e8307f56ffc9505d0a8366c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@FOSUser/Group/list_content.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Group/list_content.html.twig");
    }
}
