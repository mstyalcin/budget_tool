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
        $__internal_b7cc5b6ac1fbb9d6225e756a7b5f52156359fdbd04daa2606bd1d4b5da7e1acb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7cc5b6ac1fbb9d6225e756a7b5f52156359fdbd04daa2606bd1d4b5da7e1acb->enter($__internal_b7cc5b6ac1fbb9d6225e756a7b5f52156359fdbd04daa2606bd1d4b5da7e1acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_09ef65f82743c34c5618d1fa1a3575bbc76ae6a496a71b2d8239e3d0de849bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09ef65f82743c34c5618d1fa1a3575bbc76ae6a496a71b2d8239e3d0de849bc8->enter($__internal_09ef65f82743c34c5618d1fa1a3575bbc76ae6a496a71b2d8239e3d0de849bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

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
        
        $__internal_b7cc5b6ac1fbb9d6225e756a7b5f52156359fdbd04daa2606bd1d4b5da7e1acb->leave($__internal_b7cc5b6ac1fbb9d6225e756a7b5f52156359fdbd04daa2606bd1d4b5da7e1acb_prof);

        
        $__internal_09ef65f82743c34c5618d1fa1a3575bbc76ae6a496a71b2d8239e3d0de849bc8->leave($__internal_09ef65f82743c34c5618d1fa1a3575bbc76ae6a496a71b2d8239e3d0de849bc8_prof);

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
