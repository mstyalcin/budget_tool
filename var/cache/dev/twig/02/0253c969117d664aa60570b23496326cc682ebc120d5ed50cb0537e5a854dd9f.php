<?php

/* form_table_layout.html.twig */
class __TwigTemplate_f81cdeae50fd55cb73ef7a3e4c67bdac1d09c180c46efb3015e92620abc41b7b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_47dde0a5c03e7460455e3cdb67a596581b76f99aa9ab147193bb04de77765aa0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47dde0a5c03e7460455e3cdb67a596581b76f99aa9ab147193bb04de77765aa0->enter($__internal_47dde0a5c03e7460455e3cdb67a596581b76f99aa9ab147193bb04de77765aa0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_580d6658641b6a09500ff167bf1a040f191c775cc80122999d34d9a7440ae13d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_580d6658641b6a09500ff167bf1a040f191c775cc80122999d34d9a7440ae13d->enter($__internal_580d6658641b6a09500ff167bf1a040f191c775cc80122999d34d9a7440ae13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_47dde0a5c03e7460455e3cdb67a596581b76f99aa9ab147193bb04de77765aa0->leave($__internal_47dde0a5c03e7460455e3cdb67a596581b76f99aa9ab147193bb04de77765aa0_prof);

        
        $__internal_580d6658641b6a09500ff167bf1a040f191c775cc80122999d34d9a7440ae13d->leave($__internal_580d6658641b6a09500ff167bf1a040f191c775cc80122999d34d9a7440ae13d_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_340879fcb4fed55580544bc3aaab8eb9407a8b13ff19b273db5e3f94d4111b9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_340879fcb4fed55580544bc3aaab8eb9407a8b13ff19b273db5e3f94d4111b9c->enter($__internal_340879fcb4fed55580544bc3aaab8eb9407a8b13ff19b273db5e3f94d4111b9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2f0e9b2312d0498452c2fb0cc47d40e32f5020c794f2d2059ea68b9b0774094e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f0e9b2312d0498452c2fb0cc47d40e32f5020c794f2d2059ea68b9b0774094e->enter($__internal_2f0e9b2312d0498452c2fb0cc47d40e32f5020c794f2d2059ea68b9b0774094e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_2f0e9b2312d0498452c2fb0cc47d40e32f5020c794f2d2059ea68b9b0774094e->leave($__internal_2f0e9b2312d0498452c2fb0cc47d40e32f5020c794f2d2059ea68b9b0774094e_prof);

        
        $__internal_340879fcb4fed55580544bc3aaab8eb9407a8b13ff19b273db5e3f94d4111b9c->leave($__internal_340879fcb4fed55580544bc3aaab8eb9407a8b13ff19b273db5e3f94d4111b9c_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_869484d07d90f8cb9a7ea105716263fe47505a7e326d1ffc5596ad30bc986364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_869484d07d90f8cb9a7ea105716263fe47505a7e326d1ffc5596ad30bc986364->enter($__internal_869484d07d90f8cb9a7ea105716263fe47505a7e326d1ffc5596ad30bc986364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_7fab633fde32212180b36ef725ab161ab936e23534e49251ab249ec0ddfa60c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fab633fde32212180b36ef725ab161ab936e23534e49251ab249ec0ddfa60c0->enter($__internal_7fab633fde32212180b36ef725ab161ab936e23534e49251ab249ec0ddfa60c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_7fab633fde32212180b36ef725ab161ab936e23534e49251ab249ec0ddfa60c0->leave($__internal_7fab633fde32212180b36ef725ab161ab936e23534e49251ab249ec0ddfa60c0_prof);

        
        $__internal_869484d07d90f8cb9a7ea105716263fe47505a7e326d1ffc5596ad30bc986364->leave($__internal_869484d07d90f8cb9a7ea105716263fe47505a7e326d1ffc5596ad30bc986364_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_70353fab131152903ad5d8ef0818c546faad1f45d0079f15aecf66034453a177 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70353fab131152903ad5d8ef0818c546faad1f45d0079f15aecf66034453a177->enter($__internal_70353fab131152903ad5d8ef0818c546faad1f45d0079f15aecf66034453a177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_257176838315b0f9fd5082ba2e9e9743f9183bc721b1d066f7cec103846b808d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_257176838315b0f9fd5082ba2e9e9743f9183bc721b1d066f7cec103846b808d->enter($__internal_257176838315b0f9fd5082ba2e9e9743f9183bc721b1d066f7cec103846b808d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_257176838315b0f9fd5082ba2e9e9743f9183bc721b1d066f7cec103846b808d->leave($__internal_257176838315b0f9fd5082ba2e9e9743f9183bc721b1d066f7cec103846b808d_prof);

        
        $__internal_70353fab131152903ad5d8ef0818c546faad1f45d0079f15aecf66034453a177->leave($__internal_70353fab131152903ad5d8ef0818c546faad1f45d0079f15aecf66034453a177_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_9c3f7c0d291524481f072e6850f597a8f70bd3dfc13bcab9e8cda0ca334076f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c3f7c0d291524481f072e6850f597a8f70bd3dfc13bcab9e8cda0ca334076f2->enter($__internal_9c3f7c0d291524481f072e6850f597a8f70bd3dfc13bcab9e8cda0ca334076f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_480bf52014aa0b769737027e6406fa4a1b7b459a1eefdd1f32be2fa285d9489b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480bf52014aa0b769737027e6406fa4a1b7b459a1eefdd1f32be2fa285d9489b->enter($__internal_480bf52014aa0b769737027e6406fa4a1b7b459a1eefdd1f32be2fa285d9489b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_480bf52014aa0b769737027e6406fa4a1b7b459a1eefdd1f32be2fa285d9489b->leave($__internal_480bf52014aa0b769737027e6406fa4a1b7b459a1eefdd1f32be2fa285d9489b_prof);

        
        $__internal_9c3f7c0d291524481f072e6850f597a8f70bd3dfc13bcab9e8cda0ca334076f2->leave($__internal_9c3f7c0d291524481f072e6850f597a8f70bd3dfc13bcab9e8cda0ca334076f2_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form is rootform and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}
