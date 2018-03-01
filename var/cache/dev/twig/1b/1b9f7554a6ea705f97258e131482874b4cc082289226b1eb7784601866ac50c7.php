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
        $__internal_32c6ac7e5956702a099786549ee505ec07ed6071d0491fc72b088973e412db5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c6ac7e5956702a099786549ee505ec07ed6071d0491fc72b088973e412db5e->enter($__internal_32c6ac7e5956702a099786549ee505ec07ed6071d0491fc72b088973e412db5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_1b9e463f4ba9d0051c3979ff370ca3ba0cf18b9df0edbb7cfef8db4e90180b13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9e463f4ba9d0051c3979ff370ca3ba0cf18b9df0edbb7cfef8db4e90180b13->enter($__internal_1b9e463f4ba9d0051c3979ff370ca3ba0cf18b9df0edbb7cfef8db4e90180b13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_32c6ac7e5956702a099786549ee505ec07ed6071d0491fc72b088973e412db5e->leave($__internal_32c6ac7e5956702a099786549ee505ec07ed6071d0491fc72b088973e412db5e_prof);

        
        $__internal_1b9e463f4ba9d0051c3979ff370ca3ba0cf18b9df0edbb7cfef8db4e90180b13->leave($__internal_1b9e463f4ba9d0051c3979ff370ca3ba0cf18b9df0edbb7cfef8db4e90180b13_prof);

    }

    // line 35
    public function block_body($context, array $blocks = array())
    {
        $__internal_9eaba68506a911fd20c24cc76371a0b7e6148111d82893991a692e971ab92238 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9eaba68506a911fd20c24cc76371a0b7e6148111d82893991a692e971ab92238->enter($__internal_9eaba68506a911fd20c24cc76371a0b7e6148111d82893991a692e971ab92238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f70b6b9627f965d15b49dcb0ee45f2af42e72a929ccfa447ee950588eaedde4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f70b6b9627f965d15b49dcb0ee45f2af42e72a929ccfa447ee950588eaedde4->enter($__internal_6f70b6b9627f965d15b49dcb0ee45f2af42e72a929ccfa447ee950588eaedde4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_6f70b6b9627f965d15b49dcb0ee45f2af42e72a929ccfa447ee950588eaedde4->leave($__internal_6f70b6b9627f965d15b49dcb0ee45f2af42e72a929ccfa447ee950588eaedde4_prof);

        
        $__internal_9eaba68506a911fd20c24cc76371a0b7e6148111d82893991a692e971ab92238->leave($__internal_9eaba68506a911fd20c24cc76371a0b7e6148111d82893991a692e971ab92238_prof);

    }

    // line 36
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1475191e199c24505b506f37ba000e469b6eeccabc01f0a70bde75e249a1eadd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1475191e199c24505b506f37ba000e469b6eeccabc01f0a70bde75e249a1eadd->enter($__internal_1475191e199c24505b506f37ba000e469b6eeccabc01f0a70bde75e249a1eadd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_836bf47b4c6930f3b1addd41930ccf406a3e544d54f1110a14c25e5caa98d98f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_836bf47b4c6930f3b1addd41930ccf406a3e544d54f1110a14c25e5caa98d98f->enter($__internal_836bf47b4c6930f3b1addd41930ccf406a3e544d54f1110a14c25e5caa98d98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_836bf47b4c6930f3b1addd41930ccf406a3e544d54f1110a14c25e5caa98d98f->leave($__internal_836bf47b4c6930f3b1addd41930ccf406a3e544d54f1110a14c25e5caa98d98f_prof);

        
        $__internal_1475191e199c24505b506f37ba000e469b6eeccabc01f0a70bde75e249a1eadd->leave($__internal_1475191e199c24505b506f37ba000e469b6eeccabc01f0a70bde75e249a1eadd_prof);

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
