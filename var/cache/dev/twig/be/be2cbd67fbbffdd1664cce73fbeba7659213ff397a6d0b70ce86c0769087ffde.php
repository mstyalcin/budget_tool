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
        $__internal_018c3d116564fb914d813b0063158e2fddd3a4cee042cd029ae691e134a2ebdd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_018c3d116564fb914d813b0063158e2fddd3a4cee042cd029ae691e134a2ebdd->enter($__internal_018c3d116564fb914d813b0063158e2fddd3a4cee042cd029ae691e134a2ebdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_f7537b56054226aa7ca42ec57b8ff784b8ce5e8bccc371ee46eba79b5cf29803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7537b56054226aa7ca42ec57b8ff784b8ce5e8bccc371ee46eba79b5cf29803->enter($__internal_f7537b56054226aa7ca42ec57b8ff784b8ce5e8bccc371ee46eba79b5cf29803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_018c3d116564fb914d813b0063158e2fddd3a4cee042cd029ae691e134a2ebdd->leave($__internal_018c3d116564fb914d813b0063158e2fddd3a4cee042cd029ae691e134a2ebdd_prof);

        
        $__internal_f7537b56054226aa7ca42ec57b8ff784b8ce5e8bccc371ee46eba79b5cf29803->leave($__internal_f7537b56054226aa7ca42ec57b8ff784b8ce5e8bccc371ee46eba79b5cf29803_prof);

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
