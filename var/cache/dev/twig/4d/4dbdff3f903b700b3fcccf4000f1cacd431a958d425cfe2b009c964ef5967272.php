<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_6d79a801df08ccb72b2031f77ba884291dcb69dc3b88ba899b64a39d67e4b6d3 extends Twig_Template
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
        $__internal_eda62924bf42e9137edd130d52bd8ccb17f01efba88d9a0f7fb95d5c9a1c09ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eda62924bf42e9137edd130d52bd8ccb17f01efba88d9a0f7fb95d5c9a1c09ea->enter($__internal_eda62924bf42e9137edd130d52bd8ccb17f01efba88d9a0f7fb95d5c9a1c09ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_f0ae3046c43ebd728aa3b754f7e5def787258b06d8c2816bd2930678ad7ff2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0ae3046c43ebd728aa3b754f7e5def787258b06d8c2816bd2930678ad7ff2dc->enter($__internal_f0ae3046c43ebd728aa3b754f7e5def787258b06d8c2816bd2930678ad7ff2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_eda62924bf42e9137edd130d52bd8ccb17f01efba88d9a0f7fb95d5c9a1c09ea->leave($__internal_eda62924bf42e9137edd130d52bd8ccb17f01efba88d9a0f7fb95d5c9a1c09ea_prof);

        
        $__internal_f0ae3046c43ebd728aa3b754f7e5def787258b06d8c2816bd2930678ad7ff2dc->leave($__internal_f0ae3046c43ebd728aa3b754f7e5def787258b06d8c2816bd2930678ad7ff2dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
