<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_fcac90d6fdb56bd0d7b7f057ee778dcae245e85cf88e9b52cd53476d67ea2c55 extends Twig_Template
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
        $__internal_e2702fbdc64120079d1da97087f0100019a4f28754764289ead00010e9c0ec47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2702fbdc64120079d1da97087f0100019a4f28754764289ead00010e9c0ec47->enter($__internal_e2702fbdc64120079d1da97087f0100019a4f28754764289ead00010e9c0ec47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_d1380b207d68cdc7d648ee878091695d329731ca782c3576c3deabef99773fc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1380b207d68cdc7d648ee878091695d329731ca782c3576c3deabef99773fc2->enter($__internal_d1380b207d68cdc7d648ee878091695d329731ca782c3576c3deabef99773fc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_e2702fbdc64120079d1da97087f0100019a4f28754764289ead00010e9c0ec47->leave($__internal_e2702fbdc64120079d1da97087f0100019a4f28754764289ead00010e9c0ec47_prof);

        
        $__internal_d1380b207d68cdc7d648ee878091695d329731ca782c3576c3deabef99773fc2->leave($__internal_d1380b207d68cdc7d648ee878091695d329731ca782c3576c3deabef99773fc2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/color_widget.html.php");
    }
}
