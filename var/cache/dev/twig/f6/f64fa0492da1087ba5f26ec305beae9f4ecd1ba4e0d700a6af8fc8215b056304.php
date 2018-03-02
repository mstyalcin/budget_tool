<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_5cf8e80ea521bf61e643ee03c2dfe755c9d4864c2c7bf2c64f7e135233c84008 extends Twig_Template
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
        $__internal_f63933f35321491a1f6c56761372e743fc17c15af474e3a7e8afb0709574043b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f63933f35321491a1f6c56761372e743fc17c15af474e3a7e8afb0709574043b->enter($__internal_f63933f35321491a1f6c56761372e743fc17c15af474e3a7e8afb0709574043b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_2b24265dcfc867ad79eff22602b041c361a0b130bfab11f76a2cf84dea165976 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b24265dcfc867ad79eff22602b041c361a0b130bfab11f76a2cf84dea165976->enter($__internal_2b24265dcfc867ad79eff22602b041c361a0b130bfab11f76a2cf84dea165976_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_f63933f35321491a1f6c56761372e743fc17c15af474e3a7e8afb0709574043b->leave($__internal_f63933f35321491a1f6c56761372e743fc17c15af474e3a7e8afb0709574043b_prof);

        
        $__internal_2b24265dcfc867ad79eff22602b041c361a0b130bfab11f76a2cf84dea165976->leave($__internal_2b24265dcfc867ad79eff22602b041c361a0b130bfab11f76a2cf84dea165976_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
