<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_9deec5dab0fb528cdad6875a176992f86a301f89ca5fb7c1bfb5c5f2e5333832 extends Twig_Template
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
        $__internal_8bcd38a205e78c6039b0c216eb49533126a657a0aaf3030346d04a1d3e50a72a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bcd38a205e78c6039b0c216eb49533126a657a0aaf3030346d04a1d3e50a72a->enter($__internal_8bcd38a205e78c6039b0c216eb49533126a657a0aaf3030346d04a1d3e50a72a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_521133edaef33f8228a7cd02422d952d1b0c667d431e5b548711c31f04696770 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_521133edaef33f8228a7cd02422d952d1b0c667d431e5b548711c31f04696770->enter($__internal_521133edaef33f8228a7cd02422d952d1b0c667d431e5b548711c31f04696770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_8bcd38a205e78c6039b0c216eb49533126a657a0aaf3030346d04a1d3e50a72a->leave($__internal_8bcd38a205e78c6039b0c216eb49533126a657a0aaf3030346d04a1d3e50a72a_prof);

        
        $__internal_521133edaef33f8228a7cd02422d952d1b0c667d431e5b548711c31f04696770->leave($__internal_521133edaef33f8228a7cd02422d952d1b0c667d431e5b548711c31f04696770_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
