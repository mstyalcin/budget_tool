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
        $__internal_7f967d84594a9a92f7acdc93efa8ee681eebf63cb263a93624f03e0c6288c13e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f967d84594a9a92f7acdc93efa8ee681eebf63cb263a93624f03e0c6288c13e->enter($__internal_7f967d84594a9a92f7acdc93efa8ee681eebf63cb263a93624f03e0c6288c13e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_391d807a9721a2ee1eb9939739a17210ceb3b8a1baa494a83e42db2876c54866 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391d807a9721a2ee1eb9939739a17210ceb3b8a1baa494a83e42db2876c54866->enter($__internal_391d807a9721a2ee1eb9939739a17210ceb3b8a1baa494a83e42db2876c54866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_7f967d84594a9a92f7acdc93efa8ee681eebf63cb263a93624f03e0c6288c13e->leave($__internal_7f967d84594a9a92f7acdc93efa8ee681eebf63cb263a93624f03e0c6288c13e_prof);

        
        $__internal_391d807a9721a2ee1eb9939739a17210ceb3b8a1baa494a83e42db2876c54866->leave($__internal_391d807a9721a2ee1eb9939739a17210ceb3b8a1baa494a83e42db2876c54866_prof);

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
