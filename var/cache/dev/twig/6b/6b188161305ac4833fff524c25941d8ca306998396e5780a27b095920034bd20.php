<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_a7ab5dc8dfc8540df6892d023fecd0de772aaefb5f7a17dcd6d98a2cea1b728c extends Twig_Template
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
        $__internal_26f1647dc9aeb5308dcbb88683f8472287d3294e30ab4b6a8673d414ca504ff2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26f1647dc9aeb5308dcbb88683f8472287d3294e30ab4b6a8673d414ca504ff2->enter($__internal_26f1647dc9aeb5308dcbb88683f8472287d3294e30ab4b6a8673d414ca504ff2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d047dbbcc82fd42106bcdc19ea01f01b009ad0f0ecab2eb59ce945089c417fbc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d047dbbcc82fd42106bcdc19ea01f01b009ad0f0ecab2eb59ce945089c417fbc->enter($__internal_d047dbbcc82fd42106bcdc19ea01f01b009ad0f0ecab2eb59ce945089c417fbc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_26f1647dc9aeb5308dcbb88683f8472287d3294e30ab4b6a8673d414ca504ff2->leave($__internal_26f1647dc9aeb5308dcbb88683f8472287d3294e30ab4b6a8673d414ca504ff2_prof);

        
        $__internal_d047dbbcc82fd42106bcdc19ea01f01b009ad0f0ecab2eb59ce945089c417fbc->leave($__internal_d047dbbcc82fd42106bcdc19ea01f01b009ad0f0ecab2eb59ce945089c417fbc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
