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
        $__internal_5ecf21a773689992c4c959c7ad88aee7160f752b8c8d3e54093b6904d32ec939 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ecf21a773689992c4c959c7ad88aee7160f752b8c8d3e54093b6904d32ec939->enter($__internal_5ecf21a773689992c4c959c7ad88aee7160f752b8c8d3e54093b6904d32ec939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ce838a80a7adf71d025f46c2064180612c1b95df792157c655e7b9536b77f75a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce838a80a7adf71d025f46c2064180612c1b95df792157c655e7b9536b77f75a->enter($__internal_ce838a80a7adf71d025f46c2064180612c1b95df792157c655e7b9536b77f75a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_5ecf21a773689992c4c959c7ad88aee7160f752b8c8d3e54093b6904d32ec939->leave($__internal_5ecf21a773689992c4c959c7ad88aee7160f752b8c8d3e54093b6904d32ec939_prof);

        
        $__internal_ce838a80a7adf71d025f46c2064180612c1b95df792157c655e7b9536b77f75a->leave($__internal_ce838a80a7adf71d025f46c2064180612c1b95df792157c655e7b9536b77f75a_prof);

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
