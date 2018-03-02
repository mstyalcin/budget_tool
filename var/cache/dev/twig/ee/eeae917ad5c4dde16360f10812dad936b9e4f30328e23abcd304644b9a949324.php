<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d28270199e1d0ddecc62b714c93e95dd4c4bded817e6a05ca904e01f85a62941 extends Twig_Template
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
        $__internal_2e241b5bc2dc6814d68987ba1a1f00ef44cbc66002bc73b0800a0226c8e67e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e241b5bc2dc6814d68987ba1a1f00ef44cbc66002bc73b0800a0226c8e67e3e->enter($__internal_2e241b5bc2dc6814d68987ba1a1f00ef44cbc66002bc73b0800a0226c8e67e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_4b7eeb5dbc03ecd35daecd217db6a8e2da0197711a59492d1d8659bb6e5e3290 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b7eeb5dbc03ecd35daecd217db6a8e2da0197711a59492d1d8659bb6e5e3290->enter($__internal_4b7eeb5dbc03ecd35daecd217db6a8e2da0197711a59492d1d8659bb6e5e3290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_2e241b5bc2dc6814d68987ba1a1f00ef44cbc66002bc73b0800a0226c8e67e3e->leave($__internal_2e241b5bc2dc6814d68987ba1a1f00ef44cbc66002bc73b0800a0226c8e67e3e_prof);

        
        $__internal_4b7eeb5dbc03ecd35daecd217db6a8e2da0197711a59492d1d8659bb6e5e3290->leave($__internal_4b7eeb5dbc03ecd35daecd217db6a8e2da0197711a59492d1d8659bb6e5e3290_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
