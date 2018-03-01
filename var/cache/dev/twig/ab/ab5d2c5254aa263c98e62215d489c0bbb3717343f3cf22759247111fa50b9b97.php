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
        $__internal_948c4daaaf98ff233b198b140b9337cb3c732c60a1a2c50b1dfcfe916353861e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_948c4daaaf98ff233b198b140b9337cb3c732c60a1a2c50b1dfcfe916353861e->enter($__internal_948c4daaaf98ff233b198b140b9337cb3c732c60a1a2c50b1dfcfe916353861e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_72feb8bb480dd3ec7381d4dd422b9054e300187e5dbc1b8ed72a3295e947237c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72feb8bb480dd3ec7381d4dd422b9054e300187e5dbc1b8ed72a3295e947237c->enter($__internal_72feb8bb480dd3ec7381d4dd422b9054e300187e5dbc1b8ed72a3295e947237c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_948c4daaaf98ff233b198b140b9337cb3c732c60a1a2c50b1dfcfe916353861e->leave($__internal_948c4daaaf98ff233b198b140b9337cb3c732c60a1a2c50b1dfcfe916353861e_prof);

        
        $__internal_72feb8bb480dd3ec7381d4dd422b9054e300187e5dbc1b8ed72a3295e947237c->leave($__internal_72feb8bb480dd3ec7381d4dd422b9054e300187e5dbc1b8ed72a3295e947237c_prof);

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
