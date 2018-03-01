<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a3553f46fbbd8778cdfd65ce6eb1aca2252895e9731d1536790ddbbf6c3d0429 extends Twig_Template
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
        $__internal_c7722df445bb00e337f9127436806a168c8432317deeea6c695a33e03c9f1835 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7722df445bb00e337f9127436806a168c8432317deeea6c695a33e03c9f1835->enter($__internal_c7722df445bb00e337f9127436806a168c8432317deeea6c695a33e03c9f1835_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_6ac9da3db366c13f551fd4c812ae2c60e94c3140e9f4a4fef5253b3984f6bb1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac9da3db366c13f551fd4c812ae2c60e94c3140e9f4a4fef5253b3984f6bb1f->enter($__internal_6ac9da3db366c13f551fd4c812ae2c60e94c3140e9f4a4fef5253b3984f6bb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_c7722df445bb00e337f9127436806a168c8432317deeea6c695a33e03c9f1835->leave($__internal_c7722df445bb00e337f9127436806a168c8432317deeea6c695a33e03c9f1835_prof);

        
        $__internal_6ac9da3db366c13f551fd4c812ae2c60e94c3140e9f4a4fef5253b3984f6bb1f->leave($__internal_6ac9da3db366c13f551fd4c812ae2c60e94c3140e9f4a4fef5253b3984f6bb1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
