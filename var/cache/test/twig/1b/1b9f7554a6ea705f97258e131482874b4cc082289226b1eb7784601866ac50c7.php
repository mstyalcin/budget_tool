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
        $__internal_98b3807612ae2a09461f1e0496b1895fbd629800bfd5f304892f4a03ddfacd28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98b3807612ae2a09461f1e0496b1895fbd629800bfd5f304892f4a03ddfacd28->enter($__internal_98b3807612ae2a09461f1e0496b1895fbd629800bfd5f304892f4a03ddfacd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_9c6e7db76e9c111856f76abecf90e3fa073c053abb9cc3e29f339c10222ed143 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6e7db76e9c111856f76abecf90e3fa073c053abb9cc3e29f339c10222ed143->enter($__internal_9c6e7db76e9c111856f76abecf90e3fa073c053abb9cc3e29f339c10222ed143_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_98b3807612ae2a09461f1e0496b1895fbd629800bfd5f304892f4a03ddfacd28->leave($__internal_98b3807612ae2a09461f1e0496b1895fbd629800bfd5f304892f4a03ddfacd28_prof);

        
        $__internal_9c6e7db76e9c111856f76abecf90e3fa073c053abb9cc3e29f339c10222ed143->leave($__internal_9c6e7db76e9c111856f76abecf90e3fa073c053abb9cc3e29f339c10222ed143_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_bd96320a0067874010201373f1d03ccfedd7df0bb9367f6413b5d62dd8f0b342 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd96320a0067874010201373f1d03ccfedd7df0bb9367f6413b5d62dd8f0b342->enter($__internal_bd96320a0067874010201373f1d03ccfedd7df0bb9367f6413b5d62dd8f0b342_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f63a6b830ce1b9e982670f836fa5789c6318214065e31eb1c371776503c8e4b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f63a6b830ce1b9e982670f836fa5789c6318214065e31eb1c371776503c8e4b0->enter($__internal_f63a6b830ce1b9e982670f836fa5789c6318214065e31eb1c371776503c8e4b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f63a6b830ce1b9e982670f836fa5789c6318214065e31eb1c371776503c8e4b0->leave($__internal_f63a6b830ce1b9e982670f836fa5789c6318214065e31eb1c371776503c8e4b0_prof);

        
        $__internal_bd96320a0067874010201373f1d03ccfedd7df0bb9367f6413b5d62dd8f0b342->leave($__internal_bd96320a0067874010201373f1d03ccfedd7df0bb9367f6413b5d62dd8f0b342_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e82a98d335f4f7c2ada05658c2e0d4766999bd2e9fd9e2f547c5120dfd2504b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e82a98d335f4f7c2ada05658c2e0d4766999bd2e9fd9e2f547c5120dfd2504b->enter($__internal_0e82a98d335f4f7c2ada05658c2e0d4766999bd2e9fd9e2f547c5120dfd2504b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e99c24db2997e31d57e77da18b17e74971bc8bb42df67fb910128e8d0d552984 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99c24db2997e31d57e77da18b17e74971bc8bb42df67fb910128e8d0d552984->enter($__internal_e99c24db2997e31d57e77da18b17e74971bc8bb42df67fb910128e8d0d552984_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_e99c24db2997e31d57e77da18b17e74971bc8bb42df67fb910128e8d0d552984->leave($__internal_e99c24db2997e31d57e77da18b17e74971bc8bb42df67fb910128e8d0d552984_prof);

        
        $__internal_0e82a98d335f4f7c2ada05658c2e0d4766999bd2e9fd9e2f547c5120dfd2504b->leave($__internal_0e82a98d335f4f7c2ada05658c2e0d4766999bd2e9fd9e2f547c5120dfd2504b_prof);

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
