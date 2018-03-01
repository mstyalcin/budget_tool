<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_ff1af9c4ddf14f0ca9da9d7bbe3519290e5813a383de7107d01aa9a917d91676 extends Twig_Template
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
        $__internal_68e24a1964465ef61a69c7c6c3343cbea4e3db6745b742517cbb620d2667a1ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68e24a1964465ef61a69c7c6c3343cbea4e3db6745b742517cbb620d2667a1ef->enter($__internal_68e24a1964465ef61a69c7c6c3343cbea4e3db6745b742517cbb620d2667a1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_a53a2329654db6446b3ed596546bf5c95ccdfc971d8713098d8718d34bc7025a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a53a2329654db6446b3ed596546bf5c95ccdfc971d8713098d8718d34bc7025a->enter($__internal_a53a2329654db6446b3ed596546bf5c95ccdfc971d8713098d8718d34bc7025a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_68e24a1964465ef61a69c7c6c3343cbea4e3db6745b742517cbb620d2667a1ef->leave($__internal_68e24a1964465ef61a69c7c6c3343cbea4e3db6745b742517cbb620d2667a1ef_prof);

        
        $__internal_a53a2329654db6446b3ed596546bf5c95ccdfc971d8713098d8718d34bc7025a->leave($__internal_a53a2329654db6446b3ed596546bf5c95ccdfc971d8713098d8718d34bc7025a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
