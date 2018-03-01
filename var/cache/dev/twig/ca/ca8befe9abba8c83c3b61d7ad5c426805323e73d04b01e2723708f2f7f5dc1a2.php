<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_097a3cf4b47118399de08fb8d897c027b7a6035a62e183d2b6d4c1fba6185161 extends Twig_Template
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
        $__internal_1448b1daecfc11450cfc26a94f31296aa9cfcf385320fa3b983ed268641367a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1448b1daecfc11450cfc26a94f31296aa9cfcf385320fa3b983ed268641367a1->enter($__internal_1448b1daecfc11450cfc26a94f31296aa9cfcf385320fa3b983ed268641367a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_182a9c6d2d41bac65187de44fb3187daf0bc8d2f1a0243790539e2a1306bdd8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182a9c6d2d41bac65187de44fb3187daf0bc8d2f1a0243790539e2a1306bdd8f->enter($__internal_182a9c6d2d41bac65187de44fb3187daf0bc8d2f1a0243790539e2a1306bdd8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_1448b1daecfc11450cfc26a94f31296aa9cfcf385320fa3b983ed268641367a1->leave($__internal_1448b1daecfc11450cfc26a94f31296aa9cfcf385320fa3b983ed268641367a1_prof);

        
        $__internal_182a9c6d2d41bac65187de44fb3187daf0bc8d2f1a0243790539e2a1306bdd8f->leave($__internal_182a9c6d2d41bac65187de44fb3187daf0bc8d2f1a0243790539e2a1306bdd8f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
