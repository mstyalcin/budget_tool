<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_14bdbcd01a10f9aa5356acb376469b44bfaed6a57ffab4bdcaa34d0eef282d81 extends Twig_Template
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
        $__internal_e2f4c5c350633d76d5cc503c731b92faa7cb5feaf942c0600cf3f0afefbb3c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e2f4c5c350633d76d5cc503c731b92faa7cb5feaf942c0600cf3f0afefbb3c41->enter($__internal_e2f4c5c350633d76d5cc503c731b92faa7cb5feaf942c0600cf3f0afefbb3c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_90335dec4eb3230f6496e431a0e1cf0c9874f5e69d17863cd54dde5377f0be3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90335dec4eb3230f6496e431a0e1cf0c9874f5e69d17863cd54dde5377f0be3f->enter($__internal_90335dec4eb3230f6496e431a0e1cf0c9874f5e69d17863cd54dde5377f0be3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_e2f4c5c350633d76d5cc503c731b92faa7cb5feaf942c0600cf3f0afefbb3c41->leave($__internal_e2f4c5c350633d76d5cc503c731b92faa7cb5feaf942c0600cf3f0afefbb3c41_prof);

        
        $__internal_90335dec4eb3230f6496e431a0e1cf0c9874f5e69d17863cd54dde5377f0be3f->leave($__internal_90335dec4eb3230f6496e431a0e1cf0c9874f5e69d17863cd54dde5377f0be3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
