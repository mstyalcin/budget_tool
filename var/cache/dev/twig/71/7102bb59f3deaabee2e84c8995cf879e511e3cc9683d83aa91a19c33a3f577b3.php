<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1d6f285278dd4ce61e124db53abeb6f13b88787e7556b720f58ab2c0fb70f46e extends Twig_Template
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
        $__internal_961d577a429a0d8f16e39b0262686f9ee00cf96780d2437ddc5bae1f65a917a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_961d577a429a0d8f16e39b0262686f9ee00cf96780d2437ddc5bae1f65a917a2->enter($__internal_961d577a429a0d8f16e39b0262686f9ee00cf96780d2437ddc5bae1f65a917a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_9b9f0bb3b2a1c1acba65ffbc94838897e78b3b8cd31f2abcaf547eba433a6591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b9f0bb3b2a1c1acba65ffbc94838897e78b3b8cd31f2abcaf547eba433a6591->enter($__internal_9b9f0bb3b2a1c1acba65ffbc94838897e78b3b8cd31f2abcaf547eba433a6591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_961d577a429a0d8f16e39b0262686f9ee00cf96780d2437ddc5bae1f65a917a2->leave($__internal_961d577a429a0d8f16e39b0262686f9ee00cf96780d2437ddc5bae1f65a917a2_prof);

        
        $__internal_9b9f0bb3b2a1c1acba65ffbc94838897e78b3b8cd31f2abcaf547eba433a6591->leave($__internal_9b9f0bb3b2a1c1acba65ffbc94838897e78b3b8cd31f2abcaf547eba433a6591_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
