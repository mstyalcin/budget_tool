<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_b0b3cc6a23f9b616759c938c4b2965f3f10c61f140780f431ceb9e167d69a527 extends Twig_Template
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
        $__internal_76ae9d19410b49d16090fe5584fd7e3832631fb733438b5d54acbb9a063b9a41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76ae9d19410b49d16090fe5584fd7e3832631fb733438b5d54acbb9a063b9a41->enter($__internal_76ae9d19410b49d16090fe5584fd7e3832631fb733438b5d54acbb9a063b9a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_705e13ae688d410774f120815ef6f872be8ac8059c68bc3725ebb21489a8a2e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705e13ae688d410774f120815ef6f872be8ac8059c68bc3725ebb21489a8a2e3->enter($__internal_705e13ae688d410774f120815ef6f872be8ac8059c68bc3725ebb21489a8a2e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_76ae9d19410b49d16090fe5584fd7e3832631fb733438b5d54acbb9a063b9a41->leave($__internal_76ae9d19410b49d16090fe5584fd7e3832631fb733438b5d54acbb9a063b9a41_prof);

        
        $__internal_705e13ae688d410774f120815ef6f872be8ac8059c68bc3725ebb21489a8a2e3->leave($__internal_705e13ae688d410774f120815ef6f872be8ac8059c68bc3725ebb21489a8a2e3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
