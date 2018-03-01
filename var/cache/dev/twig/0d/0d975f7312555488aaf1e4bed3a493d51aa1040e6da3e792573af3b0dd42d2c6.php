<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_82f67baeb531d48d8cffb759266e69e0e50b12fe6aada54bd26eccdd256500dc extends Twig_Template
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
        $__internal_0de5d87352523c749578bdc1332f60f3053c0b161c80f4605940f50ec069acca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0de5d87352523c749578bdc1332f60f3053c0b161c80f4605940f50ec069acca->enter($__internal_0de5d87352523c749578bdc1332f60f3053c0b161c80f4605940f50ec069acca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_0d8e4969e92b938081665b32a8897f29110bc4912ae6c62521f0460654b21ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8e4969e92b938081665b32a8897f29110bc4912ae6c62521f0460654b21ac1->enter($__internal_0d8e4969e92b938081665b32a8897f29110bc4912ae6c62521f0460654b21ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_0de5d87352523c749578bdc1332f60f3053c0b161c80f4605940f50ec069acca->leave($__internal_0de5d87352523c749578bdc1332f60f3053c0b161c80f4605940f50ec069acca_prof);

        
        $__internal_0d8e4969e92b938081665b32a8897f29110bc4912ae6c62521f0460654b21ac1->leave($__internal_0d8e4969e92b938081665b32a8897f29110bc4912ae6c62521f0460654b21ac1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
