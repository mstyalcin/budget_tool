<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_fcac90d6fdb56bd0d7b7f057ee778dcae245e85cf88e9b52cd53476d67ea2c55 extends Twig_Template
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
        $__internal_9be518aa821670e78175a2e1308775e0cdb1d1dd890175ff1c9ec847e8aa7367 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9be518aa821670e78175a2e1308775e0cdb1d1dd890175ff1c9ec847e8aa7367->enter($__internal_9be518aa821670e78175a2e1308775e0cdb1d1dd890175ff1c9ec847e8aa7367_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_7e8458167a99cd31f6d68d2647c18174183479ae40823b9953fea2a80fd98307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e8458167a99cd31f6d68d2647c18174183479ae40823b9953fea2a80fd98307->enter($__internal_7e8458167a99cd31f6d68d2647c18174183479ae40823b9953fea2a80fd98307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_9be518aa821670e78175a2e1308775e0cdb1d1dd890175ff1c9ec847e8aa7367->leave($__internal_9be518aa821670e78175a2e1308775e0cdb1d1dd890175ff1c9ec847e8aa7367_prof);

        
        $__internal_7e8458167a99cd31f6d68d2647c18174183479ae40823b9953fea2a80fd98307->leave($__internal_7e8458167a99cd31f6d68d2647c18174183479ae40823b9953fea2a80fd98307_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/color_widget.html.php");
    }
}
