<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_105d8736bdbb5b05d81c410e3847f64f623023a053d6690e04514f484610cebb extends Twig_Template
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
        $__internal_0781190ff5cce3080d41eb90d14874ca765fba3b02e2b923ecf1276b94482716 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0781190ff5cce3080d41eb90d14874ca765fba3b02e2b923ecf1276b94482716->enter($__internal_0781190ff5cce3080d41eb90d14874ca765fba3b02e2b923ecf1276b94482716_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_dddabbb0149c013c4509c7c5d9ba178f4343256f1114c909942a88eaae386980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dddabbb0149c013c4509c7c5d9ba178f4343256f1114c909942a88eaae386980->enter($__internal_dddabbb0149c013c4509c7c5d9ba178f4343256f1114c909942a88eaae386980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_0781190ff5cce3080d41eb90d14874ca765fba3b02e2b923ecf1276b94482716->leave($__internal_0781190ff5cce3080d41eb90d14874ca765fba3b02e2b923ecf1276b94482716_prof);

        
        $__internal_dddabbb0149c013c4509c7c5d9ba178f4343256f1114c909942a88eaae386980->leave($__internal_dddabbb0149c013c4509c7c5d9ba178f4343256f1114c909942a88eaae386980_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
