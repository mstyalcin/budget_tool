<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_185de5ead20ad9976db073e9867c7a4da0b0b46f77d58be07584dd35da94d34b extends Twig_Template
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
        $__internal_a60032308014ec2aad3e782213ef852752240bb00669d077635f573e03a06ffa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a60032308014ec2aad3e782213ef852752240bb00669d077635f573e03a06ffa->enter($__internal_a60032308014ec2aad3e782213ef852752240bb00669d077635f573e03a06ffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_8f79e0fc84a493acbc7ccd99b238a778f8c6333b602bafc9fa07e6b0579faecd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f79e0fc84a493acbc7ccd99b238a778f8c6333b602bafc9fa07e6b0579faecd->enter($__internal_8f79e0fc84a493acbc7ccd99b238a778f8c6333b602bafc9fa07e6b0579faecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_a60032308014ec2aad3e782213ef852752240bb00669d077635f573e03a06ffa->leave($__internal_a60032308014ec2aad3e782213ef852752240bb00669d077635f573e03a06ffa_prof);

        
        $__internal_8f79e0fc84a493acbc7ccd99b238a778f8c6333b602bafc9fa07e6b0579faecd->leave($__internal_8f79e0fc84a493acbc7ccd99b238a778f8c6333b602bafc9fa07e6b0579faecd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
