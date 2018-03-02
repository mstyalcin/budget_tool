<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_c1e7e20f3f519a57113fdf5287ccc014fbab15fe5dd0165485b8b8b6fe6bdc40 extends Twig_Template
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
        $__internal_a40fc48d19255a43eea292a8f3142075d861a127988931e4af22c802a70cc0d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a40fc48d19255a43eea292a8f3142075d861a127988931e4af22c802a70cc0d9->enter($__internal_a40fc48d19255a43eea292a8f3142075d861a127988931e4af22c802a70cc0d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_23ddc468f7eb4f643d148c10ff39fdf106bcd18945f33f0ebd5a4333e50ccac9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23ddc468f7eb4f643d148c10ff39fdf106bcd18945f33f0ebd5a4333e50ccac9->enter($__internal_23ddc468f7eb4f643d148c10ff39fdf106bcd18945f33f0ebd5a4333e50ccac9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_a40fc48d19255a43eea292a8f3142075d861a127988931e4af22c802a70cc0d9->leave($__internal_a40fc48d19255a43eea292a8f3142075d861a127988931e4af22c802a70cc0d9_prof);

        
        $__internal_23ddc468f7eb4f643d148c10ff39fdf106bcd18945f33f0ebd5a4333e50ccac9->leave($__internal_23ddc468f7eb4f643d148c10ff39fdf106bcd18945f33f0ebd5a4333e50ccac9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
