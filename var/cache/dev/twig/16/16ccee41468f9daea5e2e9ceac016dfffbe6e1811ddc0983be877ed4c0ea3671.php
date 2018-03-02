<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_61c8bb1badaf70942009c083bd6551c21e9185ce0fa67483f107ddeab6f485a1 extends Twig_Template
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
        $__internal_8fbd9ee77c96f50cc08d13f2863c7fa70814d0538a5bb30892f74bd3a9da620f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fbd9ee77c96f50cc08d13f2863c7fa70814d0538a5bb30892f74bd3a9da620f->enter($__internal_8fbd9ee77c96f50cc08d13f2863c7fa70814d0538a5bb30892f74bd3a9da620f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_104c736ee99281995d32224fb4dd4304d497291400d546b34cd48bc4c26457a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104c736ee99281995d32224fb4dd4304d497291400d546b34cd48bc4c26457a5->enter($__internal_104c736ee99281995d32224fb4dd4304d497291400d546b34cd48bc4c26457a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_8fbd9ee77c96f50cc08d13f2863c7fa70814d0538a5bb30892f74bd3a9da620f->leave($__internal_8fbd9ee77c96f50cc08d13f2863c7fa70814d0538a5bb30892f74bd3a9da620f_prof);

        
        $__internal_104c736ee99281995d32224fb4dd4304d497291400d546b34cd48bc4c26457a5->leave($__internal_104c736ee99281995d32224fb4dd4304d497291400d546b34cd48bc4c26457a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
