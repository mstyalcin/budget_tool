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
        $__internal_87f802ceac24c2110e70f3a89ee1718198b84426a3adb5236eec30c474a348bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87f802ceac24c2110e70f3a89ee1718198b84426a3adb5236eec30c474a348bd->enter($__internal_87f802ceac24c2110e70f3a89ee1718198b84426a3adb5236eec30c474a348bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_2160062d61fee6b886117b9b7a05568ed1e1aef9b8f9dfc93d1f36728bd63e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2160062d61fee6b886117b9b7a05568ed1e1aef9b8f9dfc93d1f36728bd63e21->enter($__internal_2160062d61fee6b886117b9b7a05568ed1e1aef9b8f9dfc93d1f36728bd63e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_87f802ceac24c2110e70f3a89ee1718198b84426a3adb5236eec30c474a348bd->leave($__internal_87f802ceac24c2110e70f3a89ee1718198b84426a3adb5236eec30c474a348bd_prof);

        
        $__internal_2160062d61fee6b886117b9b7a05568ed1e1aef9b8f9dfc93d1f36728bd63e21->leave($__internal_2160062d61fee6b886117b9b7a05568ed1e1aef9b8f9dfc93d1f36728bd63e21_prof);

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
