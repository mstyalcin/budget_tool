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
        $__internal_57713a921b338d11914e263ddaa5b4506677ae8091c44b2a3166106023c3aba8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57713a921b338d11914e263ddaa5b4506677ae8091c44b2a3166106023c3aba8->enter($__internal_57713a921b338d11914e263ddaa5b4506677ae8091c44b2a3166106023c3aba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_734a9680766f678283dfad96dca593a1c5b920932fc2932d4d7db465f9ec2bb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734a9680766f678283dfad96dca593a1c5b920932fc2932d4d7db465f9ec2bb3->enter($__internal_734a9680766f678283dfad96dca593a1c5b920932fc2932d4d7db465f9ec2bb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_57713a921b338d11914e263ddaa5b4506677ae8091c44b2a3166106023c3aba8->leave($__internal_57713a921b338d11914e263ddaa5b4506677ae8091c44b2a3166106023c3aba8_prof);

        
        $__internal_734a9680766f678283dfad96dca593a1c5b920932fc2932d4d7db465f9ec2bb3->leave($__internal_734a9680766f678283dfad96dca593a1c5b920932fc2932d4d7db465f9ec2bb3_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_720ba87bf2e5fb09225306feb98f2b10492956658ed83dccffebeb11a32d14f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_720ba87bf2e5fb09225306feb98f2b10492956658ed83dccffebeb11a32d14f5->enter($__internal_720ba87bf2e5fb09225306feb98f2b10492956658ed83dccffebeb11a32d14f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_083684e69157a4a4bb9f6264c5536b7d9f43131356bd6600d846dd08ac7ca3cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_083684e69157a4a4bb9f6264c5536b7d9f43131356bd6600d846dd08ac7ca3cd->enter($__internal_083684e69157a4a4bb9f6264c5536b7d9f43131356bd6600d846dd08ac7ca3cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_083684e69157a4a4bb9f6264c5536b7d9f43131356bd6600d846dd08ac7ca3cd->leave($__internal_083684e69157a4a4bb9f6264c5536b7d9f43131356bd6600d846dd08ac7ca3cd_prof);

        
        $__internal_720ba87bf2e5fb09225306feb98f2b10492956658ed83dccffebeb11a32d14f5->leave($__internal_720ba87bf2e5fb09225306feb98f2b10492956658ed83dccffebeb11a32d14f5_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_b4c740a8e0572d36fbf8f7ebab74fbd96711e3de9edb44a12896c970b25588aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4c740a8e0572d36fbf8f7ebab74fbd96711e3de9edb44a12896c970b25588aa->enter($__internal_b4c740a8e0572d36fbf8f7ebab74fbd96711e3de9edb44a12896c970b25588aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_6286625af2b8a91ecf3cc501a96aa2867f8e87e862291aef6e4d0d83a9ccef17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6286625af2b8a91ecf3cc501a96aa2867f8e87e862291aef6e4d0d83a9ccef17->enter($__internal_6286625af2b8a91ecf3cc501a96aa2867f8e87e862291aef6e4d0d83a9ccef17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_6286625af2b8a91ecf3cc501a96aa2867f8e87e862291aef6e4d0d83a9ccef17->leave($__internal_6286625af2b8a91ecf3cc501a96aa2867f8e87e862291aef6e4d0d83a9ccef17_prof);

        
        $__internal_b4c740a8e0572d36fbf8f7ebab74fbd96711e3de9edb44a12896c970b25588aa->leave($__internal_b4c740a8e0572d36fbf8f7ebab74fbd96711e3de9edb44a12896c970b25588aa_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_4c4409f1cceb9111650705c4f2d403e63c16cb631d227620eb12be0f8aa45868 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c4409f1cceb9111650705c4f2d403e63c16cb631d227620eb12be0f8aa45868->enter($__internal_4c4409f1cceb9111650705c4f2d403e63c16cb631d227620eb12be0f8aa45868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_5502e56368e0f48367adda4707a8dc4e1838b2b8ec86811c6786088ac5388be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5502e56368e0f48367adda4707a8dc4e1838b2b8ec86811c6786088ac5388be7->enter($__internal_5502e56368e0f48367adda4707a8dc4e1838b2b8ec86811c6786088ac5388be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_5502e56368e0f48367adda4707a8dc4e1838b2b8ec86811c6786088ac5388be7->leave($__internal_5502e56368e0f48367adda4707a8dc4e1838b2b8ec86811c6786088ac5388be7_prof);

        
        $__internal_4c4409f1cceb9111650705c4f2d403e63c16cb631d227620eb12be0f8aa45868->leave($__internal_4c4409f1cceb9111650705c4f2d403e63c16cb631d227620eb12be0f8aa45868_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_513ebc8735e586a7c8feacb71beb0c72d2d6acde4694ee8c60fb2fd85b81982f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_513ebc8735e586a7c8feacb71beb0c72d2d6acde4694ee8c60fb2fd85b81982f->enter($__internal_513ebc8735e586a7c8feacb71beb0c72d2d6acde4694ee8c60fb2fd85b81982f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_e602cf9659f8ec0fa2007021160b67c03e2374e788b6396db91b1094262f9094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e602cf9659f8ec0fa2007021160b67c03e2374e788b6396db91b1094262f9094->enter($__internal_e602cf9659f8ec0fa2007021160b67c03e2374e788b6396db91b1094262f9094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

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
        
        $__internal_e602cf9659f8ec0fa2007021160b67c03e2374e788b6396db91b1094262f9094->leave($__internal_e602cf9659f8ec0fa2007021160b67c03e2374e788b6396db91b1094262f9094_prof);

        
        $__internal_513ebc8735e586a7c8feacb71beb0c72d2d6acde4694ee8c60fb2fd85b81982f->leave($__internal_513ebc8735e586a7c8feacb71beb0c72d2d6acde4694ee8c60fb2fd85b81982f_prof);

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
