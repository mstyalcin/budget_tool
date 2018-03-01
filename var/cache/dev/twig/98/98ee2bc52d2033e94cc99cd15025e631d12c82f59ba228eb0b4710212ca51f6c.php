<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_1f931b00601e8941fae97e00dbba19f96432c6f7939e59c760ee1f7a906567f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_7e9def6c2f9e1a60ef071cd9452afc8bd3eda4574545ac9ad0e47c7afc6932c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e9def6c2f9e1a60ef071cd9452afc8bd3eda4574545ac9ad0e47c7afc6932c9->enter($__internal_7e9def6c2f9e1a60ef071cd9452afc8bd3eda4574545ac9ad0e47c7afc6932c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_6d26e8d271e1a92cbb7d256bcafa701824acd61e12ba55809a69e317f2ec7929 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d26e8d271e1a92cbb7d256bcafa701824acd61e12ba55809a69e317f2ec7929->enter($__internal_6d26e8d271e1a92cbb7d256bcafa701824acd61e12ba55809a69e317f2ec7929_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e9def6c2f9e1a60ef071cd9452afc8bd3eda4574545ac9ad0e47c7afc6932c9->leave($__internal_7e9def6c2f9e1a60ef071cd9452afc8bd3eda4574545ac9ad0e47c7afc6932c9_prof);

        
        $__internal_6d26e8d271e1a92cbb7d256bcafa701824acd61e12ba55809a69e317f2ec7929->leave($__internal_6d26e8d271e1a92cbb7d256bcafa701824acd61e12ba55809a69e317f2ec7929_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9831f0c3f6180309568283efec73628e5b76f0fa44e6049db9b1e4d44981353 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9831f0c3f6180309568283efec73628e5b76f0fa44e6049db9b1e4d44981353->enter($__internal_a9831f0c3f6180309568283efec73628e5b76f0fa44e6049db9b1e4d44981353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_38213f011c2ff10a3d8435ebcf2b5cfe5e6b936ee15421bcb7b69ea0d171584d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38213f011c2ff10a3d8435ebcf2b5cfe5e6b936ee15421bcb7b69ea0d171584d->enter($__internal_38213f011c2ff10a3d8435ebcf2b5cfe5e6b936ee15421bcb7b69ea0d171584d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_38213f011c2ff10a3d8435ebcf2b5cfe5e6b936ee15421bcb7b69ea0d171584d->leave($__internal_38213f011c2ff10a3d8435ebcf2b5cfe5e6b936ee15421bcb7b69ea0d171584d_prof);

        
        $__internal_a9831f0c3f6180309568283efec73628e5b76f0fa44e6049db9b1e4d44981353->leave($__internal_a9831f0c3f6180309568283efec73628e5b76f0fa44e6049db9b1e4d44981353_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
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
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Security/login.html.twig");
    }
}
