<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_9e97f735c8ec4a7cc10a5bb0bc20fd297dd43e8cef9b9c7ff651f0a4c0e37cdf extends Twig_Template
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
        $__internal_6d71207c9b6b3f39d7efebf1bfe491b8ca184c635e46f0d884bc2a180adba747 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d71207c9b6b3f39d7efebf1bfe491b8ca184c635e46f0d884bc2a180adba747->enter($__internal_6d71207c9b6b3f39d7efebf1bfe491b8ca184c635e46f0d884bc2a180adba747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_fb86df7eb83a098dc847a854ebb68b3f3c43b2a9270a56d55d640100857729fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb86df7eb83a098dc847a854ebb68b3f3c43b2a9270a56d55d640100857729fc->enter($__internal_fb86df7eb83a098dc847a854ebb68b3f3c43b2a9270a56d55d640100857729fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_6d71207c9b6b3f39d7efebf1bfe491b8ca184c635e46f0d884bc2a180adba747->leave($__internal_6d71207c9b6b3f39d7efebf1bfe491b8ca184c635e46f0d884bc2a180adba747_prof);

        
        $__internal_fb86df7eb83a098dc847a854ebb68b3f3c43b2a9270a56d55d640100857729fc->leave($__internal_fb86df7eb83a098dc847a854ebb68b3f3c43b2a9270a56d55d640100857729fc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
