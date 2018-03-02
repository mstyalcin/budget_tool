<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_3074221b836b08f5e016716cc13c6469d96fa8493179ae94b2ff9626bb27c704 extends Twig_Template
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
        $__internal_6718411f4e422eb0df590382c0c207414794ecea9837cec403749a49d8dd0400 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6718411f4e422eb0df590382c0c207414794ecea9837cec403749a49d8dd0400->enter($__internal_6718411f4e422eb0df590382c0c207414794ecea9837cec403749a49d8dd0400_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_49b86d34f04cea6bc8ae71749af28db41de2ff60d2e402567ec514be23942cac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49b86d34f04cea6bc8ae71749af28db41de2ff60d2e402567ec514be23942cac->enter($__internal_49b86d34f04cea6bc8ae71749af28db41de2ff60d2e402567ec514be23942cac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_6718411f4e422eb0df590382c0c207414794ecea9837cec403749a49d8dd0400->leave($__internal_6718411f4e422eb0df590382c0c207414794ecea9837cec403749a49d8dd0400_prof);

        
        $__internal_49b86d34f04cea6bc8ae71749af28db41de2ff60d2e402567ec514be23942cac->leave($__internal_49b86d34f04cea6bc8ae71749af28db41de2ff60d2e402567ec514be23942cac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
