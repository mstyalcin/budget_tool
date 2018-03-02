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
        $__internal_f9b6a12299ce1e110daf3a29bbd93e25acdcba998133e6f7a5f3b145f2c7b756 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9b6a12299ce1e110daf3a29bbd93e25acdcba998133e6f7a5f3b145f2c7b756->enter($__internal_f9b6a12299ce1e110daf3a29bbd93e25acdcba998133e6f7a5f3b145f2c7b756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_8bbebb46bb86f6f709bbde82cf622220f72ece0bd0de23c8d4a0c849f7a8132b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bbebb46bb86f6f709bbde82cf622220f72ece0bd0de23c8d4a0c849f7a8132b->enter($__internal_8bbebb46bb86f6f709bbde82cf622220f72ece0bd0de23c8d4a0c849f7a8132b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f9b6a12299ce1e110daf3a29bbd93e25acdcba998133e6f7a5f3b145f2c7b756->leave($__internal_f9b6a12299ce1e110daf3a29bbd93e25acdcba998133e6f7a5f3b145f2c7b756_prof);

        
        $__internal_8bbebb46bb86f6f709bbde82cf622220f72ece0bd0de23c8d4a0c849f7a8132b->leave($__internal_8bbebb46bb86f6f709bbde82cf622220f72ece0bd0de23c8d4a0c849f7a8132b_prof);

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
