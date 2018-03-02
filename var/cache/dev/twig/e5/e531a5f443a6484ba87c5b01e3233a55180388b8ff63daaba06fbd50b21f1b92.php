<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_e430b77aba1bd6b68b9d06c09bc219d12f2f2766c0d072e69fd3cd5f5b4313de extends Twig_Template
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
        $__internal_1a5ee61dbd89f63ce680c4e6dae87f9aa39929fbfab07b9ce1f522b920edcd9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a5ee61dbd89f63ce680c4e6dae87f9aa39929fbfab07b9ce1f522b920edcd9e->enter($__internal_1a5ee61dbd89f63ce680c4e6dae87f9aa39929fbfab07b9ce1f522b920edcd9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_8b77f670e3f155fbd1fffe98c968d5b19593d615c4dc0776f38d7b5c55c31162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b77f670e3f155fbd1fffe98c968d5b19593d615c4dc0776f38d7b5c55c31162->enter($__internal_8b77f670e3f155fbd1fffe98c968d5b19593d615c4dc0776f38d7b5c55c31162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1a5ee61dbd89f63ce680c4e6dae87f9aa39929fbfab07b9ce1f522b920edcd9e->leave($__internal_1a5ee61dbd89f63ce680c4e6dae87f9aa39929fbfab07b9ce1f522b920edcd9e_prof);

        
        $__internal_8b77f670e3f155fbd1fffe98c968d5b19593d615c4dc0776f38d7b5c55c31162->leave($__internal_8b77f670e3f155fbd1fffe98c968d5b19593d615c4dc0776f38d7b5c55c31162_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
