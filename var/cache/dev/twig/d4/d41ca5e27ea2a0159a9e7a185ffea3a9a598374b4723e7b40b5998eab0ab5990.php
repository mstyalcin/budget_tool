<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_33ee2f3f389df3326ec0fa64f41fd91a956a049f0c2198920b6f67b7636b3441 extends Twig_Template
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
        $__internal_0d90481f0e2609c5500bc0cd179086151961aa50b5a39b7512c916f43a739bed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d90481f0e2609c5500bc0cd179086151961aa50b5a39b7512c916f43a739bed->enter($__internal_0d90481f0e2609c5500bc0cd179086151961aa50b5a39b7512c916f43a739bed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_506d09a313c4ce36dbfde6e00ebf1fea241c1c129453aa0a6ece34f282efc8e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_506d09a313c4ce36dbfde6e00ebf1fea241c1c129453aa0a6ece34f282efc8e0->enter($__internal_506d09a313c4ce36dbfde6e00ebf1fea241c1c129453aa0a6ece34f282efc8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_0d90481f0e2609c5500bc0cd179086151961aa50b5a39b7512c916f43a739bed->leave($__internal_0d90481f0e2609c5500bc0cd179086151961aa50b5a39b7512c916f43a739bed_prof);

        
        $__internal_506d09a313c4ce36dbfde6e00ebf1fea241c1c129453aa0a6ece34f282efc8e0->leave($__internal_506d09a313c4ce36dbfde6e00ebf1fea241c1c129453aa0a6ece34f282efc8e0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
