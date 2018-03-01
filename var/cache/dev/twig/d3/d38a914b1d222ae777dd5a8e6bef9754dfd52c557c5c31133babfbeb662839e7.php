<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_ad08a8c28b84dfe0f7c4727338e061a96686233281ad3a628088403b650b7ee6 extends Twig_Template
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
        $__internal_1047975d44656e0782efe293be4a2cb96cf70f2846f93b55f33227b8581c3db6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1047975d44656e0782efe293be4a2cb96cf70f2846f93b55f33227b8581c3db6->enter($__internal_1047975d44656e0782efe293be4a2cb96cf70f2846f93b55f33227b8581c3db6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_da9eea6d6760acf49e6f3de8c9c1db0a71e6bfd461c89be07cc3fde6a2da77af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da9eea6d6760acf49e6f3de8c9c1db0a71e6bfd461c89be07cc3fde6a2da77af->enter($__internal_da9eea6d6760acf49e6f3de8c9c1db0a71e6bfd461c89be07cc3fde6a2da77af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_1047975d44656e0782efe293be4a2cb96cf70f2846f93b55f33227b8581c3db6->leave($__internal_1047975d44656e0782efe293be4a2cb96cf70f2846f93b55f33227b8581c3db6_prof);

        
        $__internal_da9eea6d6760acf49e6f3de8c9c1db0a71e6bfd461c89be07cc3fde6a2da77af->leave($__internal_da9eea6d6760acf49e6f3de8c9c1db0a71e6bfd461c89be07cc3fde6a2da77af_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
