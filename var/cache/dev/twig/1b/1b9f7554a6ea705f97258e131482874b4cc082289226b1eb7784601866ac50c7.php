<?php

/* base.html.twig */
class __TwigTemplate_58fcb55423d3274a662181a229734752e725144dd63773cc99fa1c7691dad048 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7236a764287405b5b33bc2dc0ab2ee178b37a7b118543594a52500f22e287e01 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7236a764287405b5b33bc2dc0ab2ee178b37a7b118543594a52500f22e287e01->enter($__internal_7236a764287405b5b33bc2dc0ab2ee178b37a7b118543594a52500f22e287e01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ecb656762d978193f32583c1577654e0949100af5e8bf8692afe39cddd85ca45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecb656762d978193f32583c1577654e0949100af5e8bf8692afe39cddd85ca45->enter($__internal_ecb656762d978193f32583c1577654e0949100af5e8bf8692afe39cddd85ca45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Budget Tool</title>
        <style>
            body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
            h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
            h1 { font-size: 36px; }
            h2 { font-size: 21px; margin-bottom: 1em; }
            p { margin: 0 0 1em 0; }
            a { color: #0000F0; }
            a:hover { text-decoration: none; }
            code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
            #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
            #container { padding: 2em; }
            #welcome, #status { margin-bottom: 2em; }
            #welcome h1 span { display: block; font-size: 75%; }
            #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
            #icon-book { display: none; }

            @media (min-width: 768px) {
                #wrapper { width: 80%; margin: 2em auto; }
                #icon-book { display: inline-block; }
                #status a, #next a { display: block; }

                @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
                @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
                .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
            }
        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 35
        $this->displayBlock('body', $context, $blocks);
        // line 36
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 37
        echo "    </body>
</html>
";
        
        $__internal_7236a764287405b5b33bc2dc0ab2ee178b37a7b118543594a52500f22e287e01->leave($__internal_7236a764287405b5b33bc2dc0ab2ee178b37a7b118543594a52500f22e287e01_prof);

        
        $__internal_ecb656762d978193f32583c1577654e0949100af5e8bf8692afe39cddd85ca45->leave($__internal_ecb656762d978193f32583c1577654e0949100af5e8bf8692afe39cddd85ca45_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4500505319486853323c2240c8638aec7bd2067b28fb12ae53d7a6ea9b9c0ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4500505319486853323c2240c8638aec7bd2067b28fb12ae53d7a6ea9b9c0ef->enter($__internal_a4500505319486853323c2240c8638aec7bd2067b28fb12ae53d7a6ea9b9c0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a279fc83f776d0f48b530cd9980c5a3e7228dd1bb91bcc327bfa7302af3f6f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a279fc83f776d0f48b530cd9980c5a3e7228dd1bb91bcc327bfa7302af3f6f13->enter($__internal_a279fc83f776d0f48b530cd9980c5a3e7228dd1bb91bcc327bfa7302af3f6f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a279fc83f776d0f48b530cd9980c5a3e7228dd1bb91bcc327bfa7302af3f6f13->leave($__internal_a279fc83f776d0f48b530cd9980c5a3e7228dd1bb91bcc327bfa7302af3f6f13_prof);

        
        $__internal_a4500505319486853323c2240c8638aec7bd2067b28fb12ae53d7a6ea9b9c0ef->leave($__internal_a4500505319486853323c2240c8638aec7bd2067b28fb12ae53d7a6ea9b9c0ef_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_740ffde03193b878b43f26a64d21bb3c2b9918c5b293a28a7cdaf5369da35efb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740ffde03193b878b43f26a64d21bb3c2b9918c5b293a28a7cdaf5369da35efb->enter($__internal_740ffde03193b878b43f26a64d21bb3c2b9918c5b293a28a7cdaf5369da35efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a5e4d152cea368bf2c8421b227b32b46e7f942e91c33c7caaaea70246e45fc7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5e4d152cea368bf2c8421b227b32b46e7f942e91c33c7caaaea70246e45fc7b->enter($__internal_a5e4d152cea368bf2c8421b227b32b46e7f942e91c33c7caaaea70246e45fc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_a5e4d152cea368bf2c8421b227b32b46e7f942e91c33c7caaaea70246e45fc7b->leave($__internal_a5e4d152cea368bf2c8421b227b32b46e7f942e91c33c7caaaea70246e45fc7b_prof);

        
        $__internal_740ffde03193b878b43f26a64d21bb3c2b9918c5b293a28a7cdaf5369da35efb->leave($__internal_740ffde03193b878b43f26a64d21bb3c2b9918c5b293a28a7cdaf5369da35efb_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 36,  83 => 35,  71 => 37,  68 => 36,  66 => 35,  60 => 32,  27 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>Budget Tool</title>
        <style>
            body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
            h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
            h1 { font-size: 36px; }
            h2 { font-size: 21px; margin-bottom: 1em; }
            p { margin: 0 0 1em 0; }
            a { color: #0000F0; }
            a:hover { text-decoration: none; }
            code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
            #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
            #container { padding: 2em; }
            #welcome, #status { margin-bottom: 2em; }
            #welcome h1 span { display: block; font-size: 75%; }
            #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
            #icon-book { display: none; }

            @media (min-width: 768px) {
                #wrapper { width: 80%; margin: 2em auto; }
                #icon-book { display: inline-block; }
                #status a, #next a { display: block; }

                @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
                @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
                .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
            }
        </style>
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/myalcin/budget_tool/app/Resources/views/base.html.twig");
    }
}
