<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6d79a801df08ccb72b2031f77ba884291dcb69dc3b88ba899b64a39d67e4b6d3 extends Twig_Template
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
        $__internal_0b9ff64f7f85e6b1c5e9e285a9feb4cbdc1c5136c62e150ecbb577e45e6e5238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b9ff64f7f85e6b1c5e9e285a9feb4cbdc1c5136c62e150ecbb577e45e6e5238->enter($__internal_0b9ff64f7f85e6b1c5e9e285a9feb4cbdc1c5136c62e150ecbb577e45e6e5238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_5884dad7a4a3a62c953fa82fc0c893112253c3f7128ab59bcd7b28a9fd13dff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5884dad7a4a3a62c953fa82fc0c893112253c3f7128ab59bcd7b28a9fd13dff9->enter($__internal_5884dad7a4a3a62c953fa82fc0c893112253c3f7128ab59bcd7b28a9fd13dff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_0b9ff64f7f85e6b1c5e9e285a9feb4cbdc1c5136c62e150ecbb577e45e6e5238->leave($__internal_0b9ff64f7f85e6b1c5e9e285a9feb4cbdc1c5136c62e150ecbb577e45e6e5238_prof);

        
        $__internal_5884dad7a4a3a62c953fa82fc0c893112253c3f7128ab59bcd7b28a9fd13dff9->leave($__internal_5884dad7a4a3a62c953fa82fc0c893112253c3f7128ab59bcd7b28a9fd13dff9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
