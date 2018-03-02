<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_27a2864a961e782e53391a8265531b5340dec56c4968cc86c45d01c23d732cfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_45ac5ea87c4c4dbd3c763a6c6c1379a86b0fccb0f1e41e955d39b27b03036812 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ac5ea87c4c4dbd3c763a6c6c1379a86b0fccb0f1e41e955d39b27b03036812->enter($__internal_45ac5ea87c4c4dbd3c763a6c6c1379a86b0fccb0f1e41e955d39b27b03036812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_3802f0cad419dc113eae513621217e158ec02f2be654d6855b0a28957e2a95ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3802f0cad419dc113eae513621217e158ec02f2be654d6855b0a28957e2a95ce->enter($__internal_3802f0cad419dc113eae513621217e158ec02f2be654d6855b0a28957e2a95ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45ac5ea87c4c4dbd3c763a6c6c1379a86b0fccb0f1e41e955d39b27b03036812->leave($__internal_45ac5ea87c4c4dbd3c763a6c6c1379a86b0fccb0f1e41e955d39b27b03036812_prof);

        
        $__internal_3802f0cad419dc113eae513621217e158ec02f2be654d6855b0a28957e2a95ce->leave($__internal_3802f0cad419dc113eae513621217e158ec02f2be654d6855b0a28957e2a95ce_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1fc8399d03e62e839d46fe33f39c624ece10e58502faa833b7a99bf01e5f9feb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fc8399d03e62e839d46fe33f39c624ece10e58502faa833b7a99bf01e5f9feb->enter($__internal_1fc8399d03e62e839d46fe33f39c624ece10e58502faa833b7a99bf01e5f9feb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d4932177089c015403c2459e28f7d1f6378e877ab2b92666dc429aad70e7ab0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4932177089c015403c2459e28f7d1f6378e877ab2b92666dc429aad70e7ab0d->enter($__internal_d4932177089c015403c2459e28f7d1f6378e877ab2b92666dc429aad70e7ab0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_d4932177089c015403c2459e28f7d1f6378e877ab2b92666dc429aad70e7ab0d->leave($__internal_d4932177089c015403c2459e28f7d1f6378e877ab2b92666dc429aad70e7ab0d_prof);

        
        $__internal_1fc8399d03e62e839d46fe33f39c624ece10e58502faa833b7a99bf01e5f9feb->leave($__internal_1fc8399d03e62e839d46fe33f39c624ece10e58502faa833b7a99bf01e5f9feb_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Profile/edit.html.twig");
    }
}
