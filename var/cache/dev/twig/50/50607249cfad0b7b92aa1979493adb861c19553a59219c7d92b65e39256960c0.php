<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_d3cf0dac3c7f0214c7137141212a4e8a10be4b8e484d3220ceae6f66dc3dd91b extends Twig_Template
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
        $__internal_12d5bb47d103c7dfa1f8691c36ed914996c3f8ebd91ec2a8adfa15324018e07b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12d5bb47d103c7dfa1f8691c36ed914996c3f8ebd91ec2a8adfa15324018e07b->enter($__internal_12d5bb47d103c7dfa1f8691c36ed914996c3f8ebd91ec2a8adfa15324018e07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_cee56e993df4e0996368fc88360110bb11dcd267f1ca1bac019571e566a28889 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cee56e993df4e0996368fc88360110bb11dcd267f1ca1bac019571e566a28889->enter($__internal_cee56e993df4e0996368fc88360110bb11dcd267f1ca1bac019571e566a28889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_12d5bb47d103c7dfa1f8691c36ed914996c3f8ebd91ec2a8adfa15324018e07b->leave($__internal_12d5bb47d103c7dfa1f8691c36ed914996c3f8ebd91ec2a8adfa15324018e07b_prof);

        
        $__internal_cee56e993df4e0996368fc88360110bb11dcd267f1ca1bac019571e566a28889->leave($__internal_cee56e993df4e0996368fc88360110bb11dcd267f1ca1bac019571e566a28889_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
