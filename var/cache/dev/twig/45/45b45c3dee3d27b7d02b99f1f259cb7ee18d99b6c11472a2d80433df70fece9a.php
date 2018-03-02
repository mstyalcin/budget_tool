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
        $__internal_78d5b2b35b10a378929636b71295bdfde48a68b66d6b5e4a2af4b96b75a6af0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_78d5b2b35b10a378929636b71295bdfde48a68b66d6b5e4a2af4b96b75a6af0f->enter($__internal_78d5b2b35b10a378929636b71295bdfde48a68b66d6b5e4a2af4b96b75a6af0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_e0da8f5a061b286a6bd8e2777911c0ea1e7dea860a0093dc180ec02f59f46891 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0da8f5a061b286a6bd8e2777911c0ea1e7dea860a0093dc180ec02f59f46891->enter($__internal_e0da8f5a061b286a6bd8e2777911c0ea1e7dea860a0093dc180ec02f59f46891_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_78d5b2b35b10a378929636b71295bdfde48a68b66d6b5e4a2af4b96b75a6af0f->leave($__internal_78d5b2b35b10a378929636b71295bdfde48a68b66d6b5e4a2af4b96b75a6af0f_prof);

        
        $__internal_e0da8f5a061b286a6bd8e2777911c0ea1e7dea860a0093dc180ec02f59f46891->leave($__internal_e0da8f5a061b286a6bd8e2777911c0ea1e7dea860a0093dc180ec02f59f46891_prof);

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
