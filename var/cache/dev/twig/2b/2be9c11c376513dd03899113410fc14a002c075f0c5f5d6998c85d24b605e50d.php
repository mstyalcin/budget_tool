<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_516c655e8641c102a91ad3a73944cf8ab5ca0d67fbf7fa247f3eca9edbd4a734 extends Twig_Template
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
        $__internal_a48273169b47d5b949edaf51c955b7d5d7909b0e01dc042660af084e38081c76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a48273169b47d5b949edaf51c955b7d5d7909b0e01dc042660af084e38081c76->enter($__internal_a48273169b47d5b949edaf51c955b7d5d7909b0e01dc042660af084e38081c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_b1d6423c8e6b7092fe43e7a0334e75b56eb7834597d57afefb46b00b94d5e153 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b1d6423c8e6b7092fe43e7a0334e75b56eb7834597d57afefb46b00b94d5e153->enter($__internal_b1d6423c8e6b7092fe43e7a0334e75b56eb7834597d57afefb46b00b94d5e153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_a48273169b47d5b949edaf51c955b7d5d7909b0e01dc042660af084e38081c76->leave($__internal_a48273169b47d5b949edaf51c955b7d5d7909b0e01dc042660af084e38081c76_prof);

        
        $__internal_b1d6423c8e6b7092fe43e7a0334e75b56eb7834597d57afefb46b00b94d5e153->leave($__internal_b1d6423c8e6b7092fe43e7a0334e75b56eb7834597d57afefb46b00b94d5e153_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
