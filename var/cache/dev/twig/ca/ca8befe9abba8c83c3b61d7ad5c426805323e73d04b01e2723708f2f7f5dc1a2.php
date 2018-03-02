<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_097a3cf4b47118399de08fb8d897c027b7a6035a62e183d2b6d4c1fba6185161 extends Twig_Template
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
        $__internal_953140f30c67732d9e10ba3457aa5dc87d130e04061d687152830d5d56afa392 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_953140f30c67732d9e10ba3457aa5dc87d130e04061d687152830d5d56afa392->enter($__internal_953140f30c67732d9e10ba3457aa5dc87d130e04061d687152830d5d56afa392_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_de1792dabfa96ee3b03a9511f5da83919785bd25c2cbf9800727ee4463ce208c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de1792dabfa96ee3b03a9511f5da83919785bd25c2cbf9800727ee4463ce208c->enter($__internal_de1792dabfa96ee3b03a9511f5da83919785bd25c2cbf9800727ee4463ce208c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_953140f30c67732d9e10ba3457aa5dc87d130e04061d687152830d5d56afa392->leave($__internal_953140f30c67732d9e10ba3457aa5dc87d130e04061d687152830d5d56afa392_prof);

        
        $__internal_de1792dabfa96ee3b03a9511f5da83919785bd25c2cbf9800727ee4463ce208c->leave($__internal_de1792dabfa96ee3b03a9511f5da83919785bd25c2cbf9800727ee4463ce208c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
