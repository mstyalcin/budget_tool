<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_1c462975a063a672e51ff5b48177b998b87142fda90f3a0d7af99131471bb11b extends Twig_Template
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
        $__internal_2d83035742e2291a8aeae46b463ed7188244244dc9f4f91cfb7955d4d68c3be8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d83035742e2291a8aeae46b463ed7188244244dc9f4f91cfb7955d4d68c3be8->enter($__internal_2d83035742e2291a8aeae46b463ed7188244244dc9f4f91cfb7955d4d68c3be8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_9f89506caeef5a0414a274196fb0bc55e9e1acbfbce0eb90a78760787a388b60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f89506caeef5a0414a274196fb0bc55e9e1acbfbce0eb90a78760787a388b60->enter($__internal_9f89506caeef5a0414a274196fb0bc55e9e1acbfbce0eb90a78760787a388b60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_2d83035742e2291a8aeae46b463ed7188244244dc9f4f91cfb7955d4d68c3be8->leave($__internal_2d83035742e2291a8aeae46b463ed7188244244dc9f4f91cfb7955d4d68c3be8_prof);

        
        $__internal_9f89506caeef5a0414a274196fb0bc55e9e1acbfbce0eb90a78760787a388b60->leave($__internal_9f89506caeef5a0414a274196fb0bc55e9e1acbfbce0eb90a78760787a388b60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
