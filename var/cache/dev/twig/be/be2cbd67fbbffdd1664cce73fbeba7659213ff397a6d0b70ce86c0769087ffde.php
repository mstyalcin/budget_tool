<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_7d8dd9d68a77e3a7a3e05284d6ab53918d72af4f75716a7da1befbe3aaac45a6 extends Twig_Template
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
        $__internal_de421725d188f2075927b53f1b1858736e92ce0dc07c382cebee0bf9efe95419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de421725d188f2075927b53f1b1858736e92ce0dc07c382cebee0bf9efe95419->enter($__internal_de421725d188f2075927b53f1b1858736e92ce0dc07c382cebee0bf9efe95419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_fa0b3f8bb169bfb1935dff40a5a6a5d16b64f81b6f3b296d63e6ec6fdc88014f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa0b3f8bb169bfb1935dff40a5a6a5d16b64f81b6f3b296d63e6ec6fdc88014f->enter($__internal_fa0b3f8bb169bfb1935dff40a5a6a5d16b64f81b6f3b296d63e6ec6fdc88014f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_de421725d188f2075927b53f1b1858736e92ce0dc07c382cebee0bf9efe95419->leave($__internal_de421725d188f2075927b53f1b1858736e92ce0dc07c382cebee0bf9efe95419_prof);

        
        $__internal_fa0b3f8bb169bfb1935dff40a5a6a5d16b64f81b6f3b296d63e6ec6fdc88014f->leave($__internal_fa0b3f8bb169bfb1935dff40a5a6a5d16b64f81b6f3b296d63e6ec6fdc88014f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
