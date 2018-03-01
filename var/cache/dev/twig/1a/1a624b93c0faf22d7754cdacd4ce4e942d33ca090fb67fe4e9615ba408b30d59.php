<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_7b6ea27a706f66da5d28251b52981f743c9c125fbbb648e38b994e383742fa9c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_92f41670d334dfe3e0b85c66b52e50c229ae5e1cec687034b580f5a98a5a11a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92f41670d334dfe3e0b85c66b52e50c229ae5e1cec687034b580f5a98a5a11a6->enter($__internal_92f41670d334dfe3e0b85c66b52e50c229ae5e1cec687034b580f5a98a5a11a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_4d939fd9b9b75e9b359326f1ffe48f3fc6e42c4411dac04d8f6d7c69b917df91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d939fd9b9b75e9b359326f1ffe48f3fc6e42c4411dac04d8f6d7c69b917df91->enter($__internal_4d939fd9b9b75e9b359326f1ffe48f3fc6e42c4411dac04d8f6d7c69b917df91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_92f41670d334dfe3e0b85c66b52e50c229ae5e1cec687034b580f5a98a5a11a6->leave($__internal_92f41670d334dfe3e0b85c66b52e50c229ae5e1cec687034b580f5a98a5a11a6_prof);

        
        $__internal_4d939fd9b9b75e9b359326f1ffe48f3fc6e42c4411dac04d8f6d7c69b917df91->leave($__internal_4d939fd9b9b75e9b359326f1ffe48f3fc6e42c4411dac04d8f6d7c69b917df91_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_da99b5c4ad0884c699ab80c1ac29fe72f4d851702b6425fc187bfdb2390bab0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da99b5c4ad0884c699ab80c1ac29fe72f4d851702b6425fc187bfdb2390bab0d->enter($__internal_da99b5c4ad0884c699ab80c1ac29fe72f4d851702b6425fc187bfdb2390bab0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a9d2af2ccf044adf11b3adeba53d77b988dda64ed356077f17a65178b9825ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a9d2af2ccf044adf11b3adeba53d77b988dda64ed356077f17a65178b9825ba->enter($__internal_4a9d2af2ccf044adf11b3adeba53d77b988dda64ed356077f17a65178b9825ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_4a9d2af2ccf044adf11b3adeba53d77b988dda64ed356077f17a65178b9825ba->leave($__internal_4a9d2af2ccf044adf11b3adeba53d77b988dda64ed356077f17a65178b9825ba_prof);

        
        $__internal_da99b5c4ad0884c699ab80c1ac29fe72f4d851702b6425fc187bfdb2390bab0d->leave($__internal_da99b5c4ad0884c699ab80c1ac29fe72f4d851702b6425fc187bfdb2390bab0d_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_6b2138d6da811132084f48f2c7798ecb89a8be563bec37bf9fbed2974d00cb1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b2138d6da811132084f48f2c7798ecb89a8be563bec37bf9fbed2974d00cb1f->enter($__internal_6b2138d6da811132084f48f2c7798ecb89a8be563bec37bf9fbed2974d00cb1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_26344657eb94424088e44983e49e5feabc02224ba99bda5b4c24bd8777db8e1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26344657eb94424088e44983e49e5feabc02224ba99bda5b4c24bd8777db8e1f->enter($__internal_26344657eb94424088e44983e49e5feabc02224ba99bda5b4c24bd8777db8e1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_26344657eb94424088e44983e49e5feabc02224ba99bda5b4c24bd8777db8e1f->leave($__internal_26344657eb94424088e44983e49e5feabc02224ba99bda5b4c24bd8777db8e1f_prof);

        
        $__internal_6b2138d6da811132084f48f2c7798ecb89a8be563bec37bf9fbed2974d00cb1f->leave($__internal_6b2138d6da811132084f48f2c7798ecb89a8be563bec37bf9fbed2974d00cb1f_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_00aa88a4498a538c44595fbdbc0ef6b2cca5f2983b82b45713f36b581d332a6b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00aa88a4498a538c44595fbdbc0ef6b2cca5f2983b82b45713f36b581d332a6b->enter($__internal_00aa88a4498a538c44595fbdbc0ef6b2cca5f2983b82b45713f36b581d332a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_3989a9ccda45fd14443737e7c0578c3ee61e7094c2ff80cf3c345de26a2aa890 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3989a9ccda45fd14443737e7c0578c3ee61e7094c2ff80cf3c345de26a2aa890->enter($__internal_3989a9ccda45fd14443737e7c0578c3ee61e7094c2ff80cf3c345de26a2aa890_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_3989a9ccda45fd14443737e7c0578c3ee61e7094c2ff80cf3c345de26a2aa890->leave($__internal_3989a9ccda45fd14443737e7c0578c3ee61e7094c2ff80cf3c345de26a2aa890_prof);

        
        $__internal_00aa88a4498a538c44595fbdbc0ef6b2cca5f2983b82b45713f36b581d332a6b->leave($__internal_00aa88a4498a538c44595fbdbc0ef6b2cca5f2983b82b45713f36b581d332a6b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
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
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/layout.html.twig");
    }
}
