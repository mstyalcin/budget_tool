<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_7c0849cff7667c6473393206d221a3e99f592b27fba76c3665627383d103cbdc extends Twig_Template
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
        $__internal_dc0ac5bfddb191f01038d6222d72725151cc0374ce33b212b1664073395bc59d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc0ac5bfddb191f01038d6222d72725151cc0374ce33b212b1664073395bc59d->enter($__internal_dc0ac5bfddb191f01038d6222d72725151cc0374ce33b212b1664073395bc59d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_5cc3cf865cf4d2512017fbf9ce318c4ed528dbed51542846e0070ee825708667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cc3cf865cf4d2512017fbf9ce318c4ed528dbed51542846e0070ee825708667->enter($__internal_5cc3cf865cf4d2512017fbf9ce318c4ed528dbed51542846e0070ee825708667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_dc0ac5bfddb191f01038d6222d72725151cc0374ce33b212b1664073395bc59d->leave($__internal_dc0ac5bfddb191f01038d6222d72725151cc0374ce33b212b1664073395bc59d_prof);

        
        $__internal_5cc3cf865cf4d2512017fbf9ce318c4ed528dbed51542846e0070ee825708667->leave($__internal_5cc3cf865cf4d2512017fbf9ce318c4ed528dbed51542846e0070ee825708667_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
