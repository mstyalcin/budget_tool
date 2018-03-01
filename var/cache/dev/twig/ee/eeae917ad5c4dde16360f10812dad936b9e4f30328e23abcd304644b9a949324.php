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
        $__internal_4365eb035d3b79b23a0a580cccce6ab8dcd20bf32a42fc19f1e1720744f6e4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4365eb035d3b79b23a0a580cccce6ab8dcd20bf32a42fc19f1e1720744f6e4ff->enter($__internal_4365eb035d3b79b23a0a580cccce6ab8dcd20bf32a42fc19f1e1720744f6e4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_fd742f198ea470c2e24ed1b60492a58aadca47bbd2880006c0921adfa3c43cc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd742f198ea470c2e24ed1b60492a58aadca47bbd2880006c0921adfa3c43cc0->enter($__internal_fd742f198ea470c2e24ed1b60492a58aadca47bbd2880006c0921adfa3c43cc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4365eb035d3b79b23a0a580cccce6ab8dcd20bf32a42fc19f1e1720744f6e4ff->leave($__internal_4365eb035d3b79b23a0a580cccce6ab8dcd20bf32a42fc19f1e1720744f6e4ff_prof);

        
        $__internal_fd742f198ea470c2e24ed1b60492a58aadca47bbd2880006c0921adfa3c43cc0->leave($__internal_fd742f198ea470c2e24ed1b60492a58aadca47bbd2880006c0921adfa3c43cc0_prof);

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
