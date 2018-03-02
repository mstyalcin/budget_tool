<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_81a9e5401dc4dca1cf2825130da666f896a7b13f191c9bb327e5234d04c21ebb extends Twig_Template
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
        $__internal_97748fe1e946c674b1a36249cc23a6041fea8382170428b41dac55e4861e76f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97748fe1e946c674b1a36249cc23a6041fea8382170428b41dac55e4861e76f7->enter($__internal_97748fe1e946c674b1a36249cc23a6041fea8382170428b41dac55e4861e76f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_f27a8616e022c061798d7f348baa1cb35f71580c1f0cead06792ef29f5501e89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f27a8616e022c061798d7f348baa1cb35f71580c1f0cead06792ef29f5501e89->enter($__internal_f27a8616e022c061798d7f348baa1cb35f71580c1f0cead06792ef29f5501e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_97748fe1e946c674b1a36249cc23a6041fea8382170428b41dac55e4861e76f7->leave($__internal_97748fe1e946c674b1a36249cc23a6041fea8382170428b41dac55e4861e76f7_prof);

        
        $__internal_f27a8616e022c061798d7f348baa1cb35f71580c1f0cead06792ef29f5501e89->leave($__internal_f27a8616e022c061798d7f348baa1cb35f71580c1f0cead06792ef29f5501e89_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
