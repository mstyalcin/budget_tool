<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b9efcfe4ff31370ced7fde70f65349f8c1b6da2d5dff4ea3afb5251994a47e43 extends Twig_Template
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
        $__internal_91bbd23714ebe2340b65250c67b121bd0f9b74f38e3b32db2b1fbdb799ccd6a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91bbd23714ebe2340b65250c67b121bd0f9b74f38e3b32db2b1fbdb799ccd6a6->enter($__internal_91bbd23714ebe2340b65250c67b121bd0f9b74f38e3b32db2b1fbdb799ccd6a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_369eaa233acc7c78b51444ff6acd4281034b017640d2714aeacf4dc2562c2db5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_369eaa233acc7c78b51444ff6acd4281034b017640d2714aeacf4dc2562c2db5->enter($__internal_369eaa233acc7c78b51444ff6acd4281034b017640d2714aeacf4dc2562c2db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_91bbd23714ebe2340b65250c67b121bd0f9b74f38e3b32db2b1fbdb799ccd6a6->leave($__internal_91bbd23714ebe2340b65250c67b121bd0f9b74f38e3b32db2b1fbdb799ccd6a6_prof);

        
        $__internal_369eaa233acc7c78b51444ff6acd4281034b017640d2714aeacf4dc2562c2db5->leave($__internal_369eaa233acc7c78b51444ff6acd4281034b017640d2714aeacf4dc2562c2db5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
