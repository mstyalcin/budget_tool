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
        $__internal_883e76dcd10e87c2a7641c69753ba60aff5bc835e48c6fdb9392f6b86eb4b45e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883e76dcd10e87c2a7641c69753ba60aff5bc835e48c6fdb9392f6b86eb4b45e->enter($__internal_883e76dcd10e87c2a7641c69753ba60aff5bc835e48c6fdb9392f6b86eb4b45e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_4b66ee8aef833697a5532dde53b96ede2f1b902eff5cd5a68f208560c216b672 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b66ee8aef833697a5532dde53b96ede2f1b902eff5cd5a68f208560c216b672->enter($__internal_4b66ee8aef833697a5532dde53b96ede2f1b902eff5cd5a68f208560c216b672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_883e76dcd10e87c2a7641c69753ba60aff5bc835e48c6fdb9392f6b86eb4b45e->leave($__internal_883e76dcd10e87c2a7641c69753ba60aff5bc835e48c6fdb9392f6b86eb4b45e_prof);

        
        $__internal_4b66ee8aef833697a5532dde53b96ede2f1b902eff5cd5a68f208560c216b672->leave($__internal_4b66ee8aef833697a5532dde53b96ede2f1b902eff5cd5a68f208560c216b672_prof);

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
