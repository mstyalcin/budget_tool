<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_1d43af13bd7d7cf665227c04a180764f7851a2bb5f0f093327d156597ebbd820 extends Twig_Template
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
        $__internal_471306dc636d7a1035b677d449421ff53584c246a0303134698a4850bac6ff28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_471306dc636d7a1035b677d449421ff53584c246a0303134698a4850bac6ff28->enter($__internal_471306dc636d7a1035b677d449421ff53584c246a0303134698a4850bac6ff28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_7c0ece37e73cf855c4bb1455a88fc8c7da2b996b60eb0ab23aaca53daa8a2c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c0ece37e73cf855c4bb1455a88fc8c7da2b996b60eb0ab23aaca53daa8a2c26->enter($__internal_7c0ece37e73cf855c4bb1455a88fc8c7da2b996b60eb0ab23aaca53daa8a2c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_471306dc636d7a1035b677d449421ff53584c246a0303134698a4850bac6ff28->leave($__internal_471306dc636d7a1035b677d449421ff53584c246a0303134698a4850bac6ff28_prof);

        
        $__internal_7c0ece37e73cf855c4bb1455a88fc8c7da2b996b60eb0ab23aaca53daa8a2c26->leave($__internal_7c0ece37e73cf855c4bb1455a88fc8c7da2b996b60eb0ab23aaca53daa8a2c26_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
