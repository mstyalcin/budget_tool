<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_51b5ce7653fcce3b78aac30d2b250cc886a4ea8c1aa44624a9f3b88b2fd080aa extends Twig_Template
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
        $__internal_1198ad16307af4b9da3c4fe2038289dd2d5c2ba5b0ceafe9e400d8143dc43e28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1198ad16307af4b9da3c4fe2038289dd2d5c2ba5b0ceafe9e400d8143dc43e28->enter($__internal_1198ad16307af4b9da3c4fe2038289dd2d5c2ba5b0ceafe9e400d8143dc43e28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_956ce735620c86306feb070553df72460ed6a4a296c5a48339d2330365836434 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_956ce735620c86306feb070553df72460ed6a4a296c5a48339d2330365836434->enter($__internal_956ce735620c86306feb070553df72460ed6a4a296c5a48339d2330365836434_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_1198ad16307af4b9da3c4fe2038289dd2d5c2ba5b0ceafe9e400d8143dc43e28->leave($__internal_1198ad16307af4b9da3c4fe2038289dd2d5c2ba5b0ceafe9e400d8143dc43e28_prof);

        
        $__internal_956ce735620c86306feb070553df72460ed6a4a296c5a48339d2330365836434->leave($__internal_956ce735620c86306feb070553df72460ed6a4a296c5a48339d2330365836434_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
