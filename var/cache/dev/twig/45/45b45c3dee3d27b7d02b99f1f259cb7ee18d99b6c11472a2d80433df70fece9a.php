<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_9b39c1c7e98ad2fdb1534fbb5dad20897395a06f88a773880de7b8d1d67ca173 extends Twig_Template
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
        $__internal_1852127a9780e39b9da9703317e4f687c50672be3a2f39af1529f9557b162a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1852127a9780e39b9da9703317e4f687c50672be3a2f39af1529f9557b162a8a->enter($__internal_1852127a9780e39b9da9703317e4f687c50672be3a2f39af1529f9557b162a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_459bb88fefd85f521ce24e5ff5ec97437eca2da38b30c9985c8e49d24cbfd0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_459bb88fefd85f521ce24e5ff5ec97437eca2da38b30c9985c8e49d24cbfd0d5->enter($__internal_459bb88fefd85f521ce24e5ff5ec97437eca2da38b30c9985c8e49d24cbfd0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1852127a9780e39b9da9703317e4f687c50672be3a2f39af1529f9557b162a8a->leave($__internal_1852127a9780e39b9da9703317e4f687c50672be3a2f39af1529f9557b162a8a_prof);

        
        $__internal_459bb88fefd85f521ce24e5ff5ec97437eca2da38b30c9985c8e49d24cbfd0d5->leave($__internal_459bb88fefd85f521ce24e5ff5ec97437eca2da38b30c9985c8e49d24cbfd0d5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
