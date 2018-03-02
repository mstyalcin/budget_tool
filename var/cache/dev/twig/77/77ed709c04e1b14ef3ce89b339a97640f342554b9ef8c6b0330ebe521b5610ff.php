<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_8c233cb59d9b701ff049939e3a8f9b9288de8c5c074cbc0c73a9243e49b83121 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_204961f58073a59a238493c585c52dd946857ecadf46f393619a959fe640463d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_204961f58073a59a238493c585c52dd946857ecadf46f393619a959fe640463d->enter($__internal_204961f58073a59a238493c585c52dd946857ecadf46f393619a959fe640463d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_0235a0ea6a373dc9443048d72d1f7288772e1d3b6940a77b742a1a94d5420f5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0235a0ea6a373dc9443048d72d1f7288772e1d3b6940a77b742a1a94d5420f5f->enter($__internal_0235a0ea6a373dc9443048d72d1f7288772e1d3b6940a77b742a1a94d5420f5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_204961f58073a59a238493c585c52dd946857ecadf46f393619a959fe640463d->leave($__internal_204961f58073a59a238493c585c52dd946857ecadf46f393619a959fe640463d_prof);

        
        $__internal_0235a0ea6a373dc9443048d72d1f7288772e1d3b6940a77b742a1a94d5420f5f->leave($__internal_0235a0ea6a373dc9443048d72d1f7288772e1d3b6940a77b742a1a94d5420f5f_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_3368be25f4eda6f42a14330cd8d75b5f2ec756690a827108e84348428cbc0d40 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3368be25f4eda6f42a14330cd8d75b5f2ec756690a827108e84348428cbc0d40->enter($__internal_3368be25f4eda6f42a14330cd8d75b5f2ec756690a827108e84348428cbc0d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_232491df3ae687ad5b7f7bb7f1f98cbbca4dcfa60196b991ff3d42ee495821df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_232491df3ae687ad5b7f7bb7f1f98cbbca4dcfa60196b991ff3d42ee495821df->enter($__internal_232491df3ae687ad5b7f7bb7f1f98cbbca4dcfa60196b991ff3d42ee495821df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_232491df3ae687ad5b7f7bb7f1f98cbbca4dcfa60196b991ff3d42ee495821df->leave($__internal_232491df3ae687ad5b7f7bb7f1f98cbbca4dcfa60196b991ff3d42ee495821df_prof);

        
        $__internal_3368be25f4eda6f42a14330cd8d75b5f2ec756690a827108e84348428cbc0d40->leave($__internal_3368be25f4eda6f42a14330cd8d75b5f2ec756690a827108e84348428cbc0d40_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_31e2da3cd854afbc75ab3ad6e1fafdfd1de5444cfcb0b4a889e920caf9f36b7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31e2da3cd854afbc75ab3ad6e1fafdfd1de5444cfcb0b4a889e920caf9f36b7e->enter($__internal_31e2da3cd854afbc75ab3ad6e1fafdfd1de5444cfcb0b4a889e920caf9f36b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_365788a32253901708d8309bf146ba9fd7ad3286db2ff4e43d44e2780df79dcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_365788a32253901708d8309bf146ba9fd7ad3286db2ff4e43d44e2780df79dcb->enter($__internal_365788a32253901708d8309bf146ba9fd7ad3286db2ff4e43d44e2780df79dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_365788a32253901708d8309bf146ba9fd7ad3286db2ff4e43d44e2780df79dcb->leave($__internal_365788a32253901708d8309bf146ba9fd7ad3286db2ff4e43d44e2780df79dcb_prof);

        
        $__internal_31e2da3cd854afbc75ab3ad6e1fafdfd1de5444cfcb0b4a889e920caf9f36b7e->leave($__internal_31e2da3cd854afbc75ab3ad6e1fafdfd1de5444cfcb0b4a889e920caf9f36b7e_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_6e1d5e1d8045ca8e731352466853dc4a49d7ba06a6ad61f3ed8867e0087950a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e1d5e1d8045ca8e731352466853dc4a49d7ba06a6ad61f3ed8867e0087950a4->enter($__internal_6e1d5e1d8045ca8e731352466853dc4a49d7ba06a6ad61f3ed8867e0087950a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_2c988b499f4a88d7738edda2ba1b4e5669a94e6f7f212c73e76b6061df63d8c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c988b499f4a88d7738edda2ba1b4e5669a94e6f7f212c73e76b6061df63d8c2->enter($__internal_2c988b499f4a88d7738edda2ba1b4e5669a94e6f7f212c73e76b6061df63d8c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_2c988b499f4a88d7738edda2ba1b4e5669a94e6f7f212c73e76b6061df63d8c2->leave($__internal_2c988b499f4a88d7738edda2ba1b4e5669a94e6f7f212c73e76b6061df63d8c2_prof);

        
        $__internal_6e1d5e1d8045ca8e731352466853dc4a49d7ba06a6ad61f3ed8867e0087950a4->leave($__internal_6e1d5e1d8045ca8e731352466853dc4a49d7ba06a6ad61f3ed8867e0087950a4_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c0e69ddbc2527b152054ecfbb6fc583455799a43ddc4beb6de99a5d4089b5b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0e69ddbc2527b152054ecfbb6fc583455799a43ddc4beb6de99a5d4089b5b0b->enter($__internal_c0e69ddbc2527b152054ecfbb6fc583455799a43ddc4beb6de99a5d4089b5b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a70cf50248e81c0270aeb8822780a054ea3743e387d0266b102e8406c0c22321 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a70cf50248e81c0270aeb8822780a054ea3743e387d0266b102e8406c0c22321->enter($__internal_a70cf50248e81c0270aeb8822780a054ea3743e387d0266b102e8406c0c22321_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_a70cf50248e81c0270aeb8822780a054ea3743e387d0266b102e8406c0c22321->leave($__internal_a70cf50248e81c0270aeb8822780a054ea3743e387d0266b102e8406c0c22321_prof);

        
        $__internal_c0e69ddbc2527b152054ecfbb6fc583455799a43ddc4beb6de99a5d4089b5b0b->leave($__internal_c0e69ddbc2527b152054ecfbb6fc583455799a43ddc4beb6de99a5d4089b5b0b_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_edd575c884a94f8cfadafdde684f83683e323f10e4eef65de077cd5807a1ce20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edd575c884a94f8cfadafdde684f83683e323f10e4eef65de077cd5807a1ce20->enter($__internal_edd575c884a94f8cfadafdde684f83683e323f10e4eef65de077cd5807a1ce20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_daeda174678602479f83b19ca807fceb6f7d914c151cebe0c85b8e96fc488689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daeda174678602479f83b19ca807fceb6f7d914c151cebe0c85b8e96fc488689->enter($__internal_daeda174678602479f83b19ca807fceb6f7d914c151cebe0c85b8e96fc488689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_daeda174678602479f83b19ca807fceb6f7d914c151cebe0c85b8e96fc488689->leave($__internal_daeda174678602479f83b19ca807fceb6f7d914c151cebe0c85b8e96fc488689_prof);

        
        $__internal_edd575c884a94f8cfadafdde684f83683e323f10e4eef65de077cd5807a1ce20->leave($__internal_edd575c884a94f8cfadafdde684f83683e323f10e4eef65de077cd5807a1ce20_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_dd9ef997a8cdcf245c1a1422edff37911497db78b7c6d4e924bc5afc2387e64e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd9ef997a8cdcf245c1a1422edff37911497db78b7c6d4e924bc5afc2387e64e->enter($__internal_dd9ef997a8cdcf245c1a1422edff37911497db78b7c6d4e924bc5afc2387e64e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_bc0a4cb91cc2ddb17fa9ba43fb9dc6efb1e3de5d45f1d95ab2380ee3acea0a39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc0a4cb91cc2ddb17fa9ba43fb9dc6efb1e3de5d45f1d95ab2380ee3acea0a39->enter($__internal_bc0a4cb91cc2ddb17fa9ba43fb9dc6efb1e3de5d45f1d95ab2380ee3acea0a39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_bc0a4cb91cc2ddb17fa9ba43fb9dc6efb1e3de5d45f1d95ab2380ee3acea0a39->leave($__internal_bc0a4cb91cc2ddb17fa9ba43fb9dc6efb1e3de5d45f1d95ab2380ee3acea0a39_prof);

        
        $__internal_dd9ef997a8cdcf245c1a1422edff37911497db78b7c6d4e924bc5afc2387e64e->leave($__internal_dd9ef997a8cdcf245c1a1422edff37911497db78b7c6d4e924bc5afc2387e64e_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_009db178824fad16188c9936bb530f0d766b00b2d4411a2b344dc86de2912d9c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_009db178824fad16188c9936bb530f0d766b00b2d4411a2b344dc86de2912d9c->enter($__internal_009db178824fad16188c9936bb530f0d766b00b2d4411a2b344dc86de2912d9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_5dd2497de1691fb525f6c007d4609bc462c212f0baf85125ba8aad5866ea1725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd2497de1691fb525f6c007d4609bc462c212f0baf85125ba8aad5866ea1725->enter($__internal_5dd2497de1691fb525f6c007d4609bc462c212f0baf85125ba8aad5866ea1725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_5dd2497de1691fb525f6c007d4609bc462c212f0baf85125ba8aad5866ea1725->leave($__internal_5dd2497de1691fb525f6c007d4609bc462c212f0baf85125ba8aad5866ea1725_prof);

        
        $__internal_009db178824fad16188c9936bb530f0d766b00b2d4411a2b344dc86de2912d9c->leave($__internal_009db178824fad16188c9936bb530f0d766b00b2d4411a2b344dc86de2912d9c_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6463b7a0d6d98129836ffe26b77f07c71c833bce3bfbfd66f9039d39c904497e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6463b7a0d6d98129836ffe26b77f07c71c833bce3bfbfd66f9039d39c904497e->enter($__internal_6463b7a0d6d98129836ffe26b77f07c71c833bce3bfbfd66f9039d39c904497e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_f570deb063d58a4467b04ca43ba38520c25229e7d7062662e0935f3f8b78e26a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f570deb063d58a4467b04ca43ba38520c25229e7d7062662e0935f3f8b78e26a->enter($__internal_f570deb063d58a4467b04ca43ba38520c25229e7d7062662e0935f3f8b78e26a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_f570deb063d58a4467b04ca43ba38520c25229e7d7062662e0935f3f8b78e26a->leave($__internal_f570deb063d58a4467b04ca43ba38520c25229e7d7062662e0935f3f8b78e26a_prof);

        
        $__internal_6463b7a0d6d98129836ffe26b77f07c71c833bce3bfbfd66f9039d39c904497e->leave($__internal_6463b7a0d6d98129836ffe26b77f07c71c833bce3bfbfd66f9039d39c904497e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}
