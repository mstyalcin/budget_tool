<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_b9b19aeb4ef0e3a740a73f1e67fa3c3829c675d24d405bf2dda1bcf761ddb6c6 extends Twig_Template
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
        $__internal_4e5717bdeb7a5d9e9d4f3678709c600a3349a69b5c8362d8ae413be308c7865e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e5717bdeb7a5d9e9d4f3678709c600a3349a69b5c8362d8ae413be308c7865e->enter($__internal_4e5717bdeb7a5d9e9d4f3678709c600a3349a69b5c8362d8ae413be308c7865e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_67c183d47f9bf3eee6f64786b6ccb283a905638273fdcf8f8c94e56626b0345e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67c183d47f9bf3eee6f64786b6ccb283a905638273fdcf8f8c94e56626b0345e->enter($__internal_67c183d47f9bf3eee6f64786b6ccb283a905638273fdcf8f8c94e56626b0345e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_4e5717bdeb7a5d9e9d4f3678709c600a3349a69b5c8362d8ae413be308c7865e->leave($__internal_4e5717bdeb7a5d9e9d4f3678709c600a3349a69b5c8362d8ae413be308c7865e_prof);

        
        $__internal_67c183d47f9bf3eee6f64786b6ccb283a905638273fdcf8f8c94e56626b0345e->leave($__internal_67c183d47f9bf3eee6f64786b6ccb283a905638273fdcf8f8c94e56626b0345e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
