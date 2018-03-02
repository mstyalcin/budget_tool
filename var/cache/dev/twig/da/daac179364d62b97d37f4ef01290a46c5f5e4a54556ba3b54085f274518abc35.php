<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_7c0849cff7667c6473393206d221a3e99f592b27fba76c3665627383d103cbdc extends Twig_Template
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
        $__internal_81ec394c056957e968abd5f2c34b71bfe03e154a8a73798213db7c2332ae9d45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81ec394c056957e968abd5f2c34b71bfe03e154a8a73798213db7c2332ae9d45->enter($__internal_81ec394c056957e968abd5f2c34b71bfe03e154a8a73798213db7c2332ae9d45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_f3e3d6b823ee56b8043948967b2eea80d5679b4b12bc4c0d89df396d83165d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3e3d6b823ee56b8043948967b2eea80d5679b4b12bc4c0d89df396d83165d30->enter($__internal_f3e3d6b823ee56b8043948967b2eea80d5679b4b12bc4c0d89df396d83165d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_81ec394c056957e968abd5f2c34b71bfe03e154a8a73798213db7c2332ae9d45->leave($__internal_81ec394c056957e968abd5f2c34b71bfe03e154a8a73798213db7c2332ae9d45_prof);

        
        $__internal_f3e3d6b823ee56b8043948967b2eea80d5679b4b12bc4c0d89df396d83165d30->leave($__internal_f3e3d6b823ee56b8043948967b2eea80d5679b4b12bc4c0d89df396d83165d30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
