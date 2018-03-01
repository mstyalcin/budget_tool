<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_04de49f606eb76c9e8c2d20ae4aab7d4a71e8bafa6d895af7672846deeac1499 extends Twig_Template
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
        $__internal_63706f9045e9bad36eedfdc7c5d92e963bad122654fc2fb871550cc6c7830bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63706f9045e9bad36eedfdc7c5d92e963bad122654fc2fb871550cc6c7830bad->enter($__internal_63706f9045e9bad36eedfdc7c5d92e963bad122654fc2fb871550cc6c7830bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_039adf62e59120823a6769854b852e75ce2c7cc49247f6241d470d1780ffa72b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_039adf62e59120823a6769854b852e75ce2c7cc49247f6241d470d1780ffa72b->enter($__internal_039adf62e59120823a6769854b852e75ce2c7cc49247f6241d470d1780ffa72b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_63706f9045e9bad36eedfdc7c5d92e963bad122654fc2fb871550cc6c7830bad->leave($__internal_63706f9045e9bad36eedfdc7c5d92e963bad122654fc2fb871550cc6c7830bad_prof);

        
        $__internal_039adf62e59120823a6769854b852e75ce2c7cc49247f6241d470d1780ffa72b->leave($__internal_039adf62e59120823a6769854b852e75ce2c7cc49247f6241d470d1780ffa72b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
