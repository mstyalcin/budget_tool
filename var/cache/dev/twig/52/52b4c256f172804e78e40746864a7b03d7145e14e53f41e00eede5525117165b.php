<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9deec5dab0fb528cdad6875a176992f86a301f89ca5fb7c1bfb5c5f2e5333832 extends Twig_Template
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
        $__internal_ccbda474a0af595ac1bb84d14495b556b15f1b401cf297285b553cb533a22562 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccbda474a0af595ac1bb84d14495b556b15f1b401cf297285b553cb533a22562->enter($__internal_ccbda474a0af595ac1bb84d14495b556b15f1b401cf297285b553cb533a22562_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_e51114ec02977c9a200a4682aff0610223c46fd7acfd14d365005a9f2b6e7878 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e51114ec02977c9a200a4682aff0610223c46fd7acfd14d365005a9f2b6e7878->enter($__internal_e51114ec02977c9a200a4682aff0610223c46fd7acfd14d365005a9f2b6e7878_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_ccbda474a0af595ac1bb84d14495b556b15f1b401cf297285b553cb533a22562->leave($__internal_ccbda474a0af595ac1bb84d14495b556b15f1b401cf297285b553cb533a22562_prof);

        
        $__internal_e51114ec02977c9a200a4682aff0610223c46fd7acfd14d365005a9f2b6e7878->leave($__internal_e51114ec02977c9a200a4682aff0610223c46fd7acfd14d365005a9f2b6e7878_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
