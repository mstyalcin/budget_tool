<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_8942207e1560a7567bd470103ce56d8ee9bbe0960def7c2f5a56c808c06a5be8 extends Twig_Template
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
        $__internal_6a5e190f96321ab504b7e1c65affbe681fd88e1767e74423803b077dc661a23a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a5e190f96321ab504b7e1c65affbe681fd88e1767e74423803b077dc661a23a->enter($__internal_6a5e190f96321ab504b7e1c65affbe681fd88e1767e74423803b077dc661a23a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_875acbf47e7a23aa3509186d190797a8be27250cfc5cd2bed58c2efdff1bbb51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_875acbf47e7a23aa3509186d190797a8be27250cfc5cd2bed58c2efdff1bbb51->enter($__internal_875acbf47e7a23aa3509186d190797a8be27250cfc5cd2bed58c2efdff1bbb51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6a5e190f96321ab504b7e1c65affbe681fd88e1767e74423803b077dc661a23a->leave($__internal_6a5e190f96321ab504b7e1c65affbe681fd88e1767e74423803b077dc661a23a_prof);

        
        $__internal_875acbf47e7a23aa3509186d190797a8be27250cfc5cd2bed58c2efdff1bbb51->leave($__internal_875acbf47e7a23aa3509186d190797a8be27250cfc5cd2bed58c2efdff1bbb51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
