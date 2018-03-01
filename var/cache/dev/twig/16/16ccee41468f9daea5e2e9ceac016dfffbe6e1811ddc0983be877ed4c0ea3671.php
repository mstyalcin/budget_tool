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
        $__internal_a43b3511d2f0bdae2089736f59198644db870cfe27e7d9760798de96c58faa17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a43b3511d2f0bdae2089736f59198644db870cfe27e7d9760798de96c58faa17->enter($__internal_a43b3511d2f0bdae2089736f59198644db870cfe27e7d9760798de96c58faa17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_a73f1e0e438c74a4526886d60bf775e283e1c185150f35fcee00eb956b29616a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a73f1e0e438c74a4526886d60bf775e283e1c185150f35fcee00eb956b29616a->enter($__internal_a73f1e0e438c74a4526886d60bf775e283e1c185150f35fcee00eb956b29616a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_a43b3511d2f0bdae2089736f59198644db870cfe27e7d9760798de96c58faa17->leave($__internal_a43b3511d2f0bdae2089736f59198644db870cfe27e7d9760798de96c58faa17_prof);

        
        $__internal_a73f1e0e438c74a4526886d60bf775e283e1c185150f35fcee00eb956b29616a->leave($__internal_a73f1e0e438c74a4526886d60bf775e283e1c185150f35fcee00eb956b29616a_prof);

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
