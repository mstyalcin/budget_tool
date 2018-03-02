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
        $__internal_b4ffd2100a583f0929a741f258d939d12b861f4b9cbf061161c8d9c0f19e1242 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4ffd2100a583f0929a741f258d939d12b861f4b9cbf061161c8d9c0f19e1242->enter($__internal_b4ffd2100a583f0929a741f258d939d12b861f4b9cbf061161c8d9c0f19e1242_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_cf5e1c6167dada6a6ef35c7e2f09871b025e6175985649d1e8905807c109c386 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5e1c6167dada6a6ef35c7e2f09871b025e6175985649d1e8905807c109c386->enter($__internal_cf5e1c6167dada6a6ef35c7e2f09871b025e6175985649d1e8905807c109c386_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_b4ffd2100a583f0929a741f258d939d12b861f4b9cbf061161c8d9c0f19e1242->leave($__internal_b4ffd2100a583f0929a741f258d939d12b861f4b9cbf061161c8d9c0f19e1242_prof);

        
        $__internal_cf5e1c6167dada6a6ef35c7e2f09871b025e6175985649d1e8905807c109c386->leave($__internal_cf5e1c6167dada6a6ef35c7e2f09871b025e6175985649d1e8905807c109c386_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_46c79bb7e5ea676a8e10f602363a264947fd9834a3ae02bd411fe140f47c25e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46c79bb7e5ea676a8e10f602363a264947fd9834a3ae02bd411fe140f47c25e5->enter($__internal_46c79bb7e5ea676a8e10f602363a264947fd9834a3ae02bd411fe140f47c25e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8e4ae4b1bbe46efed6c22e83b7d0a085014303391497e1146dec18a3224ecb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8e4ae4b1bbe46efed6c22e83b7d0a085014303391497e1146dec18a3224ecb7->enter($__internal_b8e4ae4b1bbe46efed6c22e83b7d0a085014303391497e1146dec18a3224ecb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b8e4ae4b1bbe46efed6c22e83b7d0a085014303391497e1146dec18a3224ecb7->leave($__internal_b8e4ae4b1bbe46efed6c22e83b7d0a085014303391497e1146dec18a3224ecb7_prof);

        
        $__internal_46c79bb7e5ea676a8e10f602363a264947fd9834a3ae02bd411fe140f47c25e5->leave($__internal_46c79bb7e5ea676a8e10f602363a264947fd9834a3ae02bd411fe140f47c25e5_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_b998e5f998506ffdabeb1a4c8ddc3b9da53d4a11b30e965891023a2b4dcdcda9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b998e5f998506ffdabeb1a4c8ddc3b9da53d4a11b30e965891023a2b4dcdcda9->enter($__internal_b998e5f998506ffdabeb1a4c8ddc3b9da53d4a11b30e965891023a2b4dcdcda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_af0527ad35c0d8b8509f04f8db33547015a857a1af068333b53078b8ea7c4257 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af0527ad35c0d8b8509f04f8db33547015a857a1af068333b53078b8ea7c4257->enter($__internal_af0527ad35c0d8b8509f04f8db33547015a857a1af068333b53078b8ea7c4257_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_af0527ad35c0d8b8509f04f8db33547015a857a1af068333b53078b8ea7c4257->leave($__internal_af0527ad35c0d8b8509f04f8db33547015a857a1af068333b53078b8ea7c4257_prof);

        
        $__internal_b998e5f998506ffdabeb1a4c8ddc3b9da53d4a11b30e965891023a2b4dcdcda9->leave($__internal_b998e5f998506ffdabeb1a4c8ddc3b9da53d4a11b30e965891023a2b4dcdcda9_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e80b3bcf93c2b2672161c09dd7b0b1dd36fb6f18ee01f5d1ed5cc362d9341ed1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e80b3bcf93c2b2672161c09dd7b0b1dd36fb6f18ee01f5d1ed5cc362d9341ed1->enter($__internal_e80b3bcf93c2b2672161c09dd7b0b1dd36fb6f18ee01f5d1ed5cc362d9341ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e32461b17fce7868d92097488cd65013662b969729aad08b078ed4467ae68249 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e32461b17fce7868d92097488cd65013662b969729aad08b078ed4467ae68249->enter($__internal_e32461b17fce7868d92097488cd65013662b969729aad08b078ed4467ae68249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e32461b17fce7868d92097488cd65013662b969729aad08b078ed4467ae68249->leave($__internal_e32461b17fce7868d92097488cd65013662b969729aad08b078ed4467ae68249_prof);

        
        $__internal_e80b3bcf93c2b2672161c09dd7b0b1dd36fb6f18ee01f5d1ed5cc362d9341ed1->leave($__internal_e80b3bcf93c2b2672161c09dd7b0b1dd36fb6f18ee01f5d1ed5cc362d9341ed1_prof);

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
