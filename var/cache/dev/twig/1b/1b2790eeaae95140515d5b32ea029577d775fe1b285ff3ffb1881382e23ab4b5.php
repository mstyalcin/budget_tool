<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_e71a413152038b47de4c0f732045dacd46411bb2022b8d2e839899c2d27572f8 extends Twig_Template
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
        $__internal_4f83a357001b5da8ed8ddc7abb224f7226e00928684a977cdf95dc500bd9cf00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f83a357001b5da8ed8ddc7abb224f7226e00928684a977cdf95dc500bd9cf00->enter($__internal_4f83a357001b5da8ed8ddc7abb224f7226e00928684a977cdf95dc500bd9cf00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_ba20e3e92fdb4c4fca36528bf60a450c1b9ad0481c9f5e055fd9ca49a2e27d58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba20e3e92fdb4c4fca36528bf60a450c1b9ad0481c9f5e055fd9ca49a2e27d58->enter($__internal_ba20e3e92fdb4c4fca36528bf60a450c1b9ad0481c9f5e055fd9ca49a2e27d58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_4f83a357001b5da8ed8ddc7abb224f7226e00928684a977cdf95dc500bd9cf00->leave($__internal_4f83a357001b5da8ed8ddc7abb224f7226e00928684a977cdf95dc500bd9cf00_prof);

        
        $__internal_ba20e3e92fdb4c4fca36528bf60a450c1b9ad0481c9f5e055fd9ca49a2e27d58->leave($__internal_ba20e3e92fdb4c4fca36528bf60a450c1b9ad0481c9f5e055fd9ca49a2e27d58_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
