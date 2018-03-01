<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d3cf0dac3c7f0214c7137141212a4e8a10be4b8e484d3220ceae6f66dc3dd91b extends Twig_Template
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
        $__internal_d3795d0799a2ec9ef92b8639ab15ae9cff60cdcf2e527606eb8f1325a6918aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3795d0799a2ec9ef92b8639ab15ae9cff60cdcf2e527606eb8f1325a6918aa0->enter($__internal_d3795d0799a2ec9ef92b8639ab15ae9cff60cdcf2e527606eb8f1325a6918aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_cbadc106f056745cc7a0bfe1b73cfe574afdf9c58f8e200a06d75ee8c50c9117 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbadc106f056745cc7a0bfe1b73cfe574afdf9c58f8e200a06d75ee8c50c9117->enter($__internal_cbadc106f056745cc7a0bfe1b73cfe574afdf9c58f8e200a06d75ee8c50c9117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_d3795d0799a2ec9ef92b8639ab15ae9cff60cdcf2e527606eb8f1325a6918aa0->leave($__internal_d3795d0799a2ec9ef92b8639ab15ae9cff60cdcf2e527606eb8f1325a6918aa0_prof);

        
        $__internal_cbadc106f056745cc7a0bfe1b73cfe574afdf9c58f8e200a06d75ee8c50c9117->leave($__internal_cbadc106f056745cc7a0bfe1b73cfe574afdf9c58f8e200a06d75ee8c50c9117_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
