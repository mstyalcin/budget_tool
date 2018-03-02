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
        $__internal_b489cbc13ad1666b5889950503fd8b7d6eb5a6d062d0804d86f3f6d5c5a8c3c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b489cbc13ad1666b5889950503fd8b7d6eb5a6d062d0804d86f3f6d5c5a8c3c4->enter($__internal_b489cbc13ad1666b5889950503fd8b7d6eb5a6d062d0804d86f3f6d5c5a8c3c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_7d1dd328f9158fb1ba1611d2455382594e6791a1222d2b83bb5918b58701652e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d1dd328f9158fb1ba1611d2455382594e6791a1222d2b83bb5918b58701652e->enter($__internal_7d1dd328f9158fb1ba1611d2455382594e6791a1222d2b83bb5918b58701652e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_b489cbc13ad1666b5889950503fd8b7d6eb5a6d062d0804d86f3f6d5c5a8c3c4->leave($__internal_b489cbc13ad1666b5889950503fd8b7d6eb5a6d062d0804d86f3f6d5c5a8c3c4_prof);

        
        $__internal_7d1dd328f9158fb1ba1611d2455382594e6791a1222d2b83bb5918b58701652e->leave($__internal_7d1dd328f9158fb1ba1611d2455382594e6791a1222d2b83bb5918b58701652e_prof);

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
