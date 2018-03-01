<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_1d6f285278dd4ce61e124db53abeb6f13b88787e7556b720f58ab2c0fb70f46e extends Twig_Template
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
        $__internal_e6e468372167d640c59ae07ba2466a9fa2ff0c2a1145968a90c9fa76023ea7b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6e468372167d640c59ae07ba2466a9fa2ff0c2a1145968a90c9fa76023ea7b4->enter($__internal_e6e468372167d640c59ae07ba2466a9fa2ff0c2a1145968a90c9fa76023ea7b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_315ef51d64bd18b2c77a3a80891f741bb88180295f0d79ad817f177fe0714c75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_315ef51d64bd18b2c77a3a80891f741bb88180295f0d79ad817f177fe0714c75->enter($__internal_315ef51d64bd18b2c77a3a80891f741bb88180295f0d79ad817f177fe0714c75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_e6e468372167d640c59ae07ba2466a9fa2ff0c2a1145968a90c9fa76023ea7b4->leave($__internal_e6e468372167d640c59ae07ba2466a9fa2ff0c2a1145968a90c9fa76023ea7b4_prof);

        
        $__internal_315ef51d64bd18b2c77a3a80891f741bb88180295f0d79ad817f177fe0714c75->leave($__internal_315ef51d64bd18b2c77a3a80891f741bb88180295f0d79ad817f177fe0714c75_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
