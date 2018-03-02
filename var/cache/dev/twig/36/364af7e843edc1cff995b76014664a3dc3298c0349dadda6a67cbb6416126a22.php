<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_14d3d8ba891d22e8095fdf5e384162de2c41e69ac79c94734c896b2ad67e0f47 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_780f93d4662696a5188fc1e6817d2b5662358876ad5b0b200184d11eb90debf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_780f93d4662696a5188fc1e6817d2b5662358876ad5b0b200184d11eb90debf3->enter($__internal_780f93d4662696a5188fc1e6817d2b5662358876ad5b0b200184d11eb90debf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_0309aa8adb499bc2db2f96234b434f6b5044914996ad79c1cef0d1fd3defd541 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0309aa8adb499bc2db2f96234b434f6b5044914996ad79c1cef0d1fd3defd541->enter($__internal_0309aa8adb499bc2db2f96234b434f6b5044914996ad79c1cef0d1fd3defd541_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_780f93d4662696a5188fc1e6817d2b5662358876ad5b0b200184d11eb90debf3->leave($__internal_780f93d4662696a5188fc1e6817d2b5662358876ad5b0b200184d11eb90debf3_prof);

        
        $__internal_0309aa8adb499bc2db2f96234b434f6b5044914996ad79c1cef0d1fd3defd541->leave($__internal_0309aa8adb499bc2db2f96234b434f6b5044914996ad79c1cef0d1fd3defd541_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8c581bf2066335aac1a4c94ffd6da1e729504634e233d3ffbcd68a63d42335bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c581bf2066335aac1a4c94ffd6da1e729504634e233d3ffbcd68a63d42335bb->enter($__internal_8c581bf2066335aac1a4c94ffd6da1e729504634e233d3ffbcd68a63d42335bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_92a7bcecab961ffb9f050efa0f898251144202ee15edd6f8eea85124fdf693e1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92a7bcecab961ffb9f050efa0f898251144202ee15edd6f8eea85124fdf693e1->enter($__internal_92a7bcecab961ffb9f050efa0f898251144202ee15edd6f8eea85124fdf693e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_92a7bcecab961ffb9f050efa0f898251144202ee15edd6f8eea85124fdf693e1->leave($__internal_92a7bcecab961ffb9f050efa0f898251144202ee15edd6f8eea85124fdf693e1_prof);

        
        $__internal_8c581bf2066335aac1a4c94ffd6da1e729504634e233d3ffbcd68a63d42335bb->leave($__internal_8c581bf2066335aac1a4c94ffd6da1e729504634e233d3ffbcd68a63d42335bb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_9adfe66e441c2ce1fae9b0e0314d855f80e601347f12dbedb8c7884503e327da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9adfe66e441c2ce1fae9b0e0314d855f80e601347f12dbedb8c7884503e327da->enter($__internal_9adfe66e441c2ce1fae9b0e0314d855f80e601347f12dbedb8c7884503e327da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3c7088389f94f0e28aa6634dce75a6af99d5634aa008bd1f8112e7f0fbf95a05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c7088389f94f0e28aa6634dce75a6af99d5634aa008bd1f8112e7f0fbf95a05->enter($__internal_3c7088389f94f0e28aa6634dce75a6af99d5634aa008bd1f8112e7f0fbf95a05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_3c7088389f94f0e28aa6634dce75a6af99d5634aa008bd1f8112e7f0fbf95a05->leave($__internal_3c7088389f94f0e28aa6634dce75a6af99d5634aa008bd1f8112e7f0fbf95a05_prof);

        
        $__internal_9adfe66e441c2ce1fae9b0e0314d855f80e601347f12dbedb8c7884503e327da->leave($__internal_9adfe66e441c2ce1fae9b0e0314d855f80e601347f12dbedb8c7884503e327da_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_9ffb1a8ed3439c32fc3e042a8f47ac56d27b965daa0e6230d508daec4225704d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ffb1a8ed3439c32fc3e042a8f47ac56d27b965daa0e6230d508daec4225704d->enter($__internal_9ffb1a8ed3439c32fc3e042a8f47ac56d27b965daa0e6230d508daec4225704d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_172dd05eb83acbb9258c2ea5c01ee6151ef0c206eeb525de1a9f122fcb509c26 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_172dd05eb83acbb9258c2ea5c01ee6151ef0c206eeb525de1a9f122fcb509c26->enter($__internal_172dd05eb83acbb9258c2ea5c01ee6151ef0c206eeb525de1a9f122fcb509c26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_172dd05eb83acbb9258c2ea5c01ee6151ef0c206eeb525de1a9f122fcb509c26->leave($__internal_172dd05eb83acbb9258c2ea5c01ee6151ef0c206eeb525de1a9f122fcb509c26_prof);

        
        $__internal_9ffb1a8ed3439c32fc3e042a8f47ac56d27b965daa0e6230d508daec4225704d->leave($__internal_9ffb1a8ed3439c32fc3e042a8f47ac56d27b965daa0e6230d508daec4225704d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
