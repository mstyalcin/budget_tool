<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_b9efcfe4ff31370ced7fde70f65349f8c1b6da2d5dff4ea3afb5251994a47e43 extends Twig_Template
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
        $__internal_d89ff4ef75371599ca1ed7306884deb5aef2c223840e61d753cb4d670c30a8fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89ff4ef75371599ca1ed7306884deb5aef2c223840e61d753cb4d670c30a8fd->enter($__internal_d89ff4ef75371599ca1ed7306884deb5aef2c223840e61d753cb4d670c30a8fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5e1594bd38f93185ad9ab19f266c965e9761efacbc3672d37154a216d1ecf95d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e1594bd38f93185ad9ab19f266c965e9761efacbc3672d37154a216d1ecf95d->enter($__internal_5e1594bd38f93185ad9ab19f266c965e9761efacbc3672d37154a216d1ecf95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_d89ff4ef75371599ca1ed7306884deb5aef2c223840e61d753cb4d670c30a8fd->leave($__internal_d89ff4ef75371599ca1ed7306884deb5aef2c223840e61d753cb4d670c30a8fd_prof);

        
        $__internal_5e1594bd38f93185ad9ab19f266c965e9761efacbc3672d37154a216d1ecf95d->leave($__internal_5e1594bd38f93185ad9ab19f266c965e9761efacbc3672d37154a216d1ecf95d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
