<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_fa2a72c56fd03980f4978ce3cb544a6f5908a1717172c3da7e320ab26a5aa0f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_f630f0cd16c23cb1341fc00d83ae638314085520e10aa9bc67e19645987065d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f630f0cd16c23cb1341fc00d83ae638314085520e10aa9bc67e19645987065d0->enter($__internal_f630f0cd16c23cb1341fc00d83ae638314085520e10aa9bc67e19645987065d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_6efc636c218722054de33aa24ab08cce8e5e0b9eed8a8b04c14b5b5ec73ddb5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6efc636c218722054de33aa24ab08cce8e5e0b9eed8a8b04c14b5b5ec73ddb5e->enter($__internal_6efc636c218722054de33aa24ab08cce8e5e0b9eed8a8b04c14b5b5ec73ddb5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f630f0cd16c23cb1341fc00d83ae638314085520e10aa9bc67e19645987065d0->leave($__internal_f630f0cd16c23cb1341fc00d83ae638314085520e10aa9bc67e19645987065d0_prof);

        
        $__internal_6efc636c218722054de33aa24ab08cce8e5e0b9eed8a8b04c14b5b5ec73ddb5e->leave($__internal_6efc636c218722054de33aa24ab08cce8e5e0b9eed8a8b04c14b5b5ec73ddb5e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4ad73694f63dce9339157a10287d30617b0420ddb9df00be02b4f3e9fadf1c54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ad73694f63dce9339157a10287d30617b0420ddb9df00be02b4f3e9fadf1c54->enter($__internal_4ad73694f63dce9339157a10287d30617b0420ddb9df00be02b4f3e9fadf1c54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bea634f2152c3bca0efcab0a033a2979381ac54167b914246fc963efaf128c57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bea634f2152c3bca0efcab0a033a2979381ac54167b914246fc963efaf128c57->enter($__internal_bea634f2152c3bca0efcab0a033a2979381ac54167b914246fc963efaf128c57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_bea634f2152c3bca0efcab0a033a2979381ac54167b914246fc963efaf128c57->leave($__internal_bea634f2152c3bca0efcab0a033a2979381ac54167b914246fc963efaf128c57_prof);

        
        $__internal_4ad73694f63dce9339157a10287d30617b0420ddb9df00be02b4f3e9fadf1c54->leave($__internal_4ad73694f63dce9339157a10287d30617b0420ddb9df00be02b4f3e9fadf1c54_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "/home/myalcin/budget_tool/vendor/friendsofsymfony/user-bundle/Resources/views/Registration/register.html.twig");
    }
}
