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
        $__internal_6cfb22e853a8335bde69a2f6e994c312f4e7ba3eae1761e7368d1eea4d01ac68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cfb22e853a8335bde69a2f6e994c312f4e7ba3eae1761e7368d1eea4d01ac68->enter($__internal_6cfb22e853a8335bde69a2f6e994c312f4e7ba3eae1761e7368d1eea4d01ac68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_f381684de55970fcf3172c20642213d0aeef3fb9a451ecfb9e6350d3f406fc5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f381684de55970fcf3172c20642213d0aeef3fb9a451ecfb9e6350d3f406fc5c->enter($__internal_f381684de55970fcf3172c20642213d0aeef3fb9a451ecfb9e6350d3f406fc5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6cfb22e853a8335bde69a2f6e994c312f4e7ba3eae1761e7368d1eea4d01ac68->leave($__internal_6cfb22e853a8335bde69a2f6e994c312f4e7ba3eae1761e7368d1eea4d01ac68_prof);

        
        $__internal_f381684de55970fcf3172c20642213d0aeef3fb9a451ecfb9e6350d3f406fc5c->leave($__internal_f381684de55970fcf3172c20642213d0aeef3fb9a451ecfb9e6350d3f406fc5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b49ae7744f132d255682a26e16355f97ca8b55f0deb27c24a8072f75c7e35f34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b49ae7744f132d255682a26e16355f97ca8b55f0deb27c24a8072f75c7e35f34->enter($__internal_b49ae7744f132d255682a26e16355f97ca8b55f0deb27c24a8072f75c7e35f34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_a2dc4d4f37b473eca20e6bbd36cf0c75682c3890b7a8b747a00a15f6dfdb83d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2dc4d4f37b473eca20e6bbd36cf0c75682c3890b7a8b747a00a15f6dfdb83d6->enter($__internal_a2dc4d4f37b473eca20e6bbd36cf0c75682c3890b7a8b747a00a15f6dfdb83d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_a2dc4d4f37b473eca20e6bbd36cf0c75682c3890b7a8b747a00a15f6dfdb83d6->leave($__internal_a2dc4d4f37b473eca20e6bbd36cf0c75682c3890b7a8b747a00a15f6dfdb83d6_prof);

        
        $__internal_b49ae7744f132d255682a26e16355f97ca8b55f0deb27c24a8072f75c7e35f34->leave($__internal_b49ae7744f132d255682a26e16355f97ca8b55f0deb27c24a8072f75c7e35f34_prof);

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
