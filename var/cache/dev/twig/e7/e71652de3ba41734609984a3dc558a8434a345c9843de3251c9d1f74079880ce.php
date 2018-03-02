<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_9c233fe9030a2effcd484918a5eaa50b4eb0877e1fdcdb2c03d7545c1c9a5bc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_dd645210289bcb3b1fe88fd85b6dca46b826324559a860fc6336c82964eba275 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd645210289bcb3b1fe88fd85b6dca46b826324559a860fc6336c82964eba275->enter($__internal_dd645210289bcb3b1fe88fd85b6dca46b826324559a860fc6336c82964eba275_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_0b5a6c9ec81a0c1361c4d559b295874bca79080a9f93086b41e6f8ad53e0e89f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b5a6c9ec81a0c1361c4d559b295874bca79080a9f93086b41e6f8ad53e0e89f->enter($__internal_0b5a6c9ec81a0c1361c4d559b295874bca79080a9f93086b41e6f8ad53e0e89f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd645210289bcb3b1fe88fd85b6dca46b826324559a860fc6336c82964eba275->leave($__internal_dd645210289bcb3b1fe88fd85b6dca46b826324559a860fc6336c82964eba275_prof);

        
        $__internal_0b5a6c9ec81a0c1361c4d559b295874bca79080a9f93086b41e6f8ad53e0e89f->leave($__internal_0b5a6c9ec81a0c1361c4d559b295874bca79080a9f93086b41e6f8ad53e0e89f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8025e57ee9e9245c5b66be94cae9e0a40a992fabfe5fd58748f31fa744f93aaa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8025e57ee9e9245c5b66be94cae9e0a40a992fabfe5fd58748f31fa744f93aaa->enter($__internal_8025e57ee9e9245c5b66be94cae9e0a40a992fabfe5fd58748f31fa744f93aaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_41d0da1995120aa6f8eca3d6d6e073f887785413b105c37588280f25cc9a184f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41d0da1995120aa6f8eca3d6d6e073f887785413b105c37588280f25cc9a184f->enter($__internal_41d0da1995120aa6f8eca3d6d6e073f887785413b105c37588280f25cc9a184f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_41d0da1995120aa6f8eca3d6d6e073f887785413b105c37588280f25cc9a184f->leave($__internal_41d0da1995120aa6f8eca3d6d6e073f887785413b105c37588280f25cc9a184f_prof);

        
        $__internal_8025e57ee9e9245c5b66be94cae9e0a40a992fabfe5fd58748f31fa744f93aaa->leave($__internal_8025e57ee9e9245c5b66be94cae9e0a40a992fabfe5fd58748f31fa744f93aaa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Resetting/reset.html.twig");
    }
}
