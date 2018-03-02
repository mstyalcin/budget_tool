<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_9ec7411a635cd5e77ca5c71dd8140aeae649a4bd484c4e49699738fa52c2c0ce extends Twig_Template
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
        $__internal_21b204a0840a9ef7304a63902c27dacfd387c72bc0654ad9a82f49f7864b317f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_21b204a0840a9ef7304a63902c27dacfd387c72bc0654ad9a82f49f7864b317f->enter($__internal_21b204a0840a9ef7304a63902c27dacfd387c72bc0654ad9a82f49f7864b317f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_f46f7def8547826e541075b3d9ac36d799b57493f52a220f37d46ab3a38878ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f46f7def8547826e541075b3d9ac36d799b57493f52a220f37d46ab3a38878ec->enter($__internal_f46f7def8547826e541075b3d9ac36d799b57493f52a220f37d46ab3a38878ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_21b204a0840a9ef7304a63902c27dacfd387c72bc0654ad9a82f49f7864b317f->leave($__internal_21b204a0840a9ef7304a63902c27dacfd387c72bc0654ad9a82f49f7864b317f_prof);

        
        $__internal_f46f7def8547826e541075b3d9ac36d799b57493f52a220f37d46ab3a38878ec->leave($__internal_f46f7def8547826e541075b3d9ac36d799b57493f52a220f37d46ab3a38878ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
