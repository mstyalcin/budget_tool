<?php

/* bootstrap_3_layout.html.twig */
class __TwigTemplate_272e13c85893e077d880aeda02554d4b9340bfcbd54a96cb86b7dbda7c003e25 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da61bfcf2a3ad0cdb95197e4f96f4991aadaf8d80e55ed1da253cd873e87b21a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da61bfcf2a3ad0cdb95197e4f96f4991aadaf8d80e55ed1da253cd873e87b21a->enter($__internal_da61bfcf2a3ad0cdb95197e4f96f4991aadaf8d80e55ed1da253cd873e87b21a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        $__internal_d85de918668e2e706818ad006003e266f6929d962f46450d5a7b3ee219ec0920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d85de918668e2e706818ad006003e266f6929d962f46450d5a7b3ee219ec0920->enter($__internal_d85de918668e2e706818ad006003e266f6929d962f46450d5a7b3ee219ec0920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('button_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 38
        echo "
";
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('form_label', $context, $blocks);
        // line 45
        echo "
";
        // line 46
        $this->displayBlock('choice_label', $context, $blocks);
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('radio_label', $context, $blocks);
        // line 63
        echo "
";
        // line 64
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 88
        echo "
";
        // line 90
        echo "
";
        // line 91
        $this->displayBlock('form_row', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        $this->displayBlock('button_row', $context, $blocks);
        // line 104
        echo "
";
        // line 105
        $this->displayBlock('choice_row', $context, $blocks);
        // line 109
        echo "
";
        // line 110
        $this->displayBlock('date_row', $context, $blocks);
        // line 114
        echo "
";
        // line 115
        $this->displayBlock('time_row', $context, $blocks);
        // line 119
        echo "
";
        // line 120
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 124
        echo "
";
        // line 125
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 131
        echo "
";
        // line 132
        $this->displayBlock('radio_row', $context, $blocks);
        // line 138
        echo "
";
        // line 140
        echo "
";
        // line 141
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_da61bfcf2a3ad0cdb95197e4f96f4991aadaf8d80e55ed1da253cd873e87b21a->leave($__internal_da61bfcf2a3ad0cdb95197e4f96f4991aadaf8d80e55ed1da253cd873e87b21a_prof);

        
        $__internal_d85de918668e2e706818ad006003e266f6929d962f46450d5a7b3ee219ec0920->leave($__internal_d85de918668e2e706818ad006003e266f6929d962f46450d5a7b3ee219ec0920_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_f38d5fc2d6903157988777f99db25a54f62221e0dd543fa795cfa14d7079aae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f38d5fc2d6903157988777f99db25a54f62221e0dd543fa795cfa14d7079aae8->enter($__internal_f38d5fc2d6903157988777f99db25a54f62221e0dd543fa795cfa14d7079aae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_f00a6156a417531fdea3ab53b30b7284e0e98e4729256e9dfc067fb76a8e484a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00a6156a417531fdea3ab53b30b7284e0e98e4729256e9dfc067fb76a8e484a->enter($__internal_f00a6156a417531fdea3ab53b30b7284e0e98e4729256e9dfc067fb76a8e484a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter(($context["type"] ?? $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_f00a6156a417531fdea3ab53b30b7284e0e98e4729256e9dfc067fb76a8e484a->leave($__internal_f00a6156a417531fdea3ab53b30b7284e0e98e4729256e9dfc067fb76a8e484a_prof);

        
        $__internal_f38d5fc2d6903157988777f99db25a54f62221e0dd543fa795cfa14d7079aae8->leave($__internal_f38d5fc2d6903157988777f99db25a54f62221e0dd543fa795cfa14d7079aae8_prof);

    }

    // line 12
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_e23beea90a08d84c1087f1e74f41b9a3d5310c8c1d92936f64de5e7177465550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e23beea90a08d84c1087f1e74f41b9a3d5310c8c1d92936f64de5e7177465550->enter($__internal_e23beea90a08d84c1087f1e74f41b9a3d5310c8c1d92936f64de5e7177465550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_2ed1cc9dbbebacd959d513740003a1ab6d2101286e2b892b46ea70eb63c3035a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ed1cc9dbbebacd959d513740003a1ab6d2101286e2b892b46ea70eb63c3035a->enter($__internal_2ed1cc9dbbebacd959d513740003a1ab6d2101286e2b892b46ea70eb63c3035a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 13
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 14
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_2ed1cc9dbbebacd959d513740003a1ab6d2101286e2b892b46ea70eb63c3035a->leave($__internal_2ed1cc9dbbebacd959d513740003a1ab6d2101286e2b892b46ea70eb63c3035a_prof);

        
        $__internal_e23beea90a08d84c1087f1e74f41b9a3d5310c8c1d92936f64de5e7177465550->leave($__internal_e23beea90a08d84c1087f1e74f41b9a3d5310c8c1d92936f64de5e7177465550_prof);

    }

    // line 17
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_3a17dd6da42d16fd94635f324a9db8aa106b6e2c22baba63b87c29f9948c9b9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a17dd6da42d16fd94635f324a9db8aa106b6e2c22baba63b87c29f9948c9b9e->enter($__internal_3a17dd6da42d16fd94635f324a9db8aa106b6e2c22baba63b87c29f9948c9b9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_1bd977a325750ec85a3f2dd229bbdcb3584bf07abb58ecd870d27038f7ad82bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bd977a325750ec85a3f2dd229bbdcb3584bf07abb58ecd870d27038f7ad82bf->enter($__internal_1bd977a325750ec85a3f2dd229bbdcb3584bf07abb58ecd870d27038f7ad82bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 18
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 19
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 20
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 22
            echo "<div class=\"checkbox\">";
            // line 23
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 24
            echo "</div>";
        }
        
        $__internal_1bd977a325750ec85a3f2dd229bbdcb3584bf07abb58ecd870d27038f7ad82bf->leave($__internal_1bd977a325750ec85a3f2dd229bbdcb3584bf07abb58ecd870d27038f7ad82bf_prof);

        
        $__internal_3a17dd6da42d16fd94635f324a9db8aa106b6e2c22baba63b87c29f9948c9b9e->leave($__internal_3a17dd6da42d16fd94635f324a9db8aa106b6e2c22baba63b87c29f9948c9b9e_prof);

    }

    // line 28
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_9b83fa5570bc6188a99299851b449b3997936b8c9975bee3fa983d59b7cdb6f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b83fa5570bc6188a99299851b449b3997936b8c9975bee3fa983d59b7cdb6f4->enter($__internal_9b83fa5570bc6188a99299851b449b3997936b8c9975bee3fa983d59b7cdb6f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_27d6015b860cd7d0647af6c8d4a6589c01782f8c8d291508bd7385e50448e88f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27d6015b860cd7d0647af6c8d4a6589c01782f8c8d291508bd7385e50448e88f->enter($__internal_27d6015b860cd7d0647af6c8d4a6589c01782f8c8d291508bd7385e50448e88f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 29
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 30
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 33
            echo "<div class=\"radio\">";
            // line 34
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 35
            echo "</div>";
        }
        
        $__internal_27d6015b860cd7d0647af6c8d4a6589c01782f8c8d291508bd7385e50448e88f->leave($__internal_27d6015b860cd7d0647af6c8d4a6589c01782f8c8d291508bd7385e50448e88f_prof);

        
        $__internal_9b83fa5570bc6188a99299851b449b3997936b8c9975bee3fa983d59b7cdb6f4->leave($__internal_9b83fa5570bc6188a99299851b449b3997936b8c9975bee3fa983d59b7cdb6f4_prof);

    }

    // line 41
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_b750d5e7c592285355468fdce2fbae631fa7a812f3d114652973662601d7896e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b750d5e7c592285355468fdce2fbae631fa7a812f3d114652973662601d7896e->enter($__internal_b750d5e7c592285355468fdce2fbae631fa7a812f3d114652973662601d7896e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_04233c993ea095305e2ed5ddf8e804844e1b1f19ec5a2058a27fefba76a7aa81 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_04233c993ea095305e2ed5ddf8e804844e1b1f19ec5a2058a27fefba76a7aa81->enter($__internal_04233c993ea095305e2ed5ddf8e804844e1b1f19ec5a2058a27fefba76a7aa81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 42
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " control-label"))));
        // line 43
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_04233c993ea095305e2ed5ddf8e804844e1b1f19ec5a2058a27fefba76a7aa81->leave($__internal_04233c993ea095305e2ed5ddf8e804844e1b1f19ec5a2058a27fefba76a7aa81_prof);

        
        $__internal_b750d5e7c592285355468fdce2fbae631fa7a812f3d114652973662601d7896e->leave($__internal_b750d5e7c592285355468fdce2fbae631fa7a812f3d114652973662601d7896e_prof);

    }

    // line 46
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_153823f0a1b09931f751f8b418f0966362f0e8d39be263e425904f250609377f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_153823f0a1b09931f751f8b418f0966362f0e8d39be263e425904f250609377f->enter($__internal_153823f0a1b09931f751f8b418f0966362f0e8d39be263e425904f250609377f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_f3de897f3169ab211db2028dfd670ed20112994765bd79c747dfa42b6f1ef5e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f3de897f3169ab211db2028dfd670ed20112994765bd79c747dfa42b6f1ef5e0->enter($__internal_f3de897f3169ab211db2028dfd670ed20112994765bd79c747dfa42b6f1ef5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 48
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 49
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_f3de897f3169ab211db2028dfd670ed20112994765bd79c747dfa42b6f1ef5e0->leave($__internal_f3de897f3169ab211db2028dfd670ed20112994765bd79c747dfa42b6f1ef5e0_prof);

        
        $__internal_153823f0a1b09931f751f8b418f0966362f0e8d39be263e425904f250609377f->leave($__internal_153823f0a1b09931f751f8b418f0966362f0e8d39be263e425904f250609377f_prof);

    }

    // line 52
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_4f11e3e2ad88aa49c0dc254112a79e147895e853cdc27098e133d29672b8c0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f11e3e2ad88aa49c0dc254112a79e147895e853cdc27098e133d29672b8c0b1->enter($__internal_4f11e3e2ad88aa49c0dc254112a79e147895e853cdc27098e133d29672b8c0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_46b0dc93d712c8c57ad7030b682d42756175d4d7da1f15e7785bca0bc5265011 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46b0dc93d712c8c57ad7030b682d42756175d4d7da1f15e7785bca0bc5265011->enter($__internal_46b0dc93d712c8c57ad7030b682d42756175d4d7da1f15e7785bca0bc5265011_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 53
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 55
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_46b0dc93d712c8c57ad7030b682d42756175d4d7da1f15e7785bca0bc5265011->leave($__internal_46b0dc93d712c8c57ad7030b682d42756175d4d7da1f15e7785bca0bc5265011_prof);

        
        $__internal_4f11e3e2ad88aa49c0dc254112a79e147895e853cdc27098e133d29672b8c0b1->leave($__internal_4f11e3e2ad88aa49c0dc254112a79e147895e853cdc27098e133d29672b8c0b1_prof);

    }

    // line 58
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_cdf50209af9a2cc06f1ebe90d41d6349c9c959dd6f380cba47f7ec70bed34867 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdf50209af9a2cc06f1ebe90d41d6349c9c959dd6f380cba47f7ec70bed34867->enter($__internal_cdf50209af9a2cc06f1ebe90d41d6349c9c959dd6f380cba47f7ec70bed34867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_329dbdb80475b06ba5a61fa313813efe22254a760e994882f6efd2ec8670161f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_329dbdb80475b06ba5a61fa313813efe22254a760e994882f6efd2ec8670161f->enter($__internal_329dbdb80475b06ba5a61fa313813efe22254a760e994882f6efd2ec8670161f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 59
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("for" => ($context["id"] ?? $this->getContext($context, "id"))));
        // line 61
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_329dbdb80475b06ba5a61fa313813efe22254a760e994882f6efd2ec8670161f->leave($__internal_329dbdb80475b06ba5a61fa313813efe22254a760e994882f6efd2ec8670161f_prof);

        
        $__internal_cdf50209af9a2cc06f1ebe90d41d6349c9c959dd6f380cba47f7ec70bed34867->leave($__internal_cdf50209af9a2cc06f1ebe90d41d6349c9c959dd6f380cba47f7ec70bed34867_prof);

    }

    // line 64
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_f6560377f7ba65c34e65abc901ac17e7ac0a4b898e12277d752fd45e0a086e6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6560377f7ba65c34e65abc901ac17e7ac0a4b898e12277d752fd45e0a086e6c->enter($__internal_f6560377f7ba65c34e65abc901ac17e7ac0a4b898e12277d752fd45e0a086e6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_5df7a32db556725d75d66c7ef012514010dfa067d4906e2b5c3ca7039cd5c5e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5df7a32db556725d75d66c7ef012514010dfa067d4906e2b5c3ca7039cd5c5e6->enter($__internal_5df7a32db556725d75d66c7ef012514010dfa067d4906e2b5c3ca7039cd5c5e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 66
        if (array_key_exists("widget", $context)) {
            // line 67
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 68
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 70
            if (array_key_exists("parent_label_class", $context)) {
                // line 71
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 73
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 74
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 75
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 76
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 77
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 80
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 83
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 84
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 85
            echo "</label>";
        }
        
        $__internal_5df7a32db556725d75d66c7ef012514010dfa067d4906e2b5c3ca7039cd5c5e6->leave($__internal_5df7a32db556725d75d66c7ef012514010dfa067d4906e2b5c3ca7039cd5c5e6_prof);

        
        $__internal_f6560377f7ba65c34e65abc901ac17e7ac0a4b898e12277d752fd45e0a086e6c->leave($__internal_f6560377f7ba65c34e65abc901ac17e7ac0a4b898e12277d752fd45e0a086e6c_prof);

    }

    // line 91
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_d4179d630852efa35a9e8d3ce720ecc451d1963e9f39e590e77763e9eb846d4a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4179d630852efa35a9e8d3ce720ecc451d1963e9f39e590e77763e9eb846d4a->enter($__internal_d4179d630852efa35a9e8d3ce720ecc451d1963e9f39e590e77763e9eb846d4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_15738e663b1e6d8264e9db076f91efb62f9cd3b491fbe7c10c9097f5d01e35d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15738e663b1e6d8264e9db076f91efb62f9cd3b491fbe7c10c9097f5d01e35d1->enter($__internal_15738e663b1e6d8264e9db076f91efb62f9cd3b491fbe7c10c9097f5d01e35d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 92
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 96
        echo "</div>";
        
        $__internal_15738e663b1e6d8264e9db076f91efb62f9cd3b491fbe7c10c9097f5d01e35d1->leave($__internal_15738e663b1e6d8264e9db076f91efb62f9cd3b491fbe7c10c9097f5d01e35d1_prof);

        
        $__internal_d4179d630852efa35a9e8d3ce720ecc451d1963e9f39e590e77763e9eb846d4a->leave($__internal_d4179d630852efa35a9e8d3ce720ecc451d1963e9f39e590e77763e9eb846d4a_prof);

    }

    // line 99
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_414749c375ab0fd4085925f7028697452976f43e6ea3c660a9bc349f62eda823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_414749c375ab0fd4085925f7028697452976f43e6ea3c660a9bc349f62eda823->enter($__internal_414749c375ab0fd4085925f7028697452976f43e6ea3c660a9bc349f62eda823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_104436b6742b5ef97be521fab9fe478b49f84de5fd1df45e828451229f41dbfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_104436b6742b5ef97be521fab9fe478b49f84de5fd1df45e828451229f41dbfd->enter($__internal_104436b6742b5ef97be521fab9fe478b49f84de5fd1df45e828451229f41dbfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 100
        echo "<div class=\"form-group\">";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 102
        echo "</div>";
        
        $__internal_104436b6742b5ef97be521fab9fe478b49f84de5fd1df45e828451229f41dbfd->leave($__internal_104436b6742b5ef97be521fab9fe478b49f84de5fd1df45e828451229f41dbfd_prof);

        
        $__internal_414749c375ab0fd4085925f7028697452976f43e6ea3c660a9bc349f62eda823->leave($__internal_414749c375ab0fd4085925f7028697452976f43e6ea3c660a9bc349f62eda823_prof);

    }

    // line 105
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_2344d849477b0b1daeddf633476829cc65c19d20b67782f2443df0b7818290a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2344d849477b0b1daeddf633476829cc65c19d20b67782f2443df0b7818290a9->enter($__internal_2344d849477b0b1daeddf633476829cc65c19d20b67782f2443df0b7818290a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_0d8ade5608ff0bcd95bc57372ba3179aebc70d7e4cf7511d23737d218dc76003 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d8ade5608ff0bcd95bc57372ba3179aebc70d7e4cf7511d23737d218dc76003->enter($__internal_0d8ade5608ff0bcd95bc57372ba3179aebc70d7e4cf7511d23737d218dc76003_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 106
        $context["force_error"] = true;
        // line 107
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0d8ade5608ff0bcd95bc57372ba3179aebc70d7e4cf7511d23737d218dc76003->leave($__internal_0d8ade5608ff0bcd95bc57372ba3179aebc70d7e4cf7511d23737d218dc76003_prof);

        
        $__internal_2344d849477b0b1daeddf633476829cc65c19d20b67782f2443df0b7818290a9->leave($__internal_2344d849477b0b1daeddf633476829cc65c19d20b67782f2443df0b7818290a9_prof);

    }

    // line 110
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_baa00a98f3f3d54703baba14a5f8393f8da7631105e00127d53899001ec09d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baa00a98f3f3d54703baba14a5f8393f8da7631105e00127d53899001ec09d3e->enter($__internal_baa00a98f3f3d54703baba14a5f8393f8da7631105e00127d53899001ec09d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_0411193a0cafea68493c443d906b1021f7326c0ea8fd8288014acf2700aa8b39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0411193a0cafea68493c443d906b1021f7326c0ea8fd8288014acf2700aa8b39->enter($__internal_0411193a0cafea68493c443d906b1021f7326c0ea8fd8288014acf2700aa8b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 111
        $context["force_error"] = true;
        // line 112
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0411193a0cafea68493c443d906b1021f7326c0ea8fd8288014acf2700aa8b39->leave($__internal_0411193a0cafea68493c443d906b1021f7326c0ea8fd8288014acf2700aa8b39_prof);

        
        $__internal_baa00a98f3f3d54703baba14a5f8393f8da7631105e00127d53899001ec09d3e->leave($__internal_baa00a98f3f3d54703baba14a5f8393f8da7631105e00127d53899001ec09d3e_prof);

    }

    // line 115
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_c9112225529a970360147966d0b79ac1d6696439ec260d1286ae2bfa3f470ac8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9112225529a970360147966d0b79ac1d6696439ec260d1286ae2bfa3f470ac8->enter($__internal_c9112225529a970360147966d0b79ac1d6696439ec260d1286ae2bfa3f470ac8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_888d2fd6713e2431dbcdd5860093594b7a981fcb2fc3e718315479b8973c6932 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888d2fd6713e2431dbcdd5860093594b7a981fcb2fc3e718315479b8973c6932->enter($__internal_888d2fd6713e2431dbcdd5860093594b7a981fcb2fc3e718315479b8973c6932_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 116
        $context["force_error"] = true;
        // line 117
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_888d2fd6713e2431dbcdd5860093594b7a981fcb2fc3e718315479b8973c6932->leave($__internal_888d2fd6713e2431dbcdd5860093594b7a981fcb2fc3e718315479b8973c6932_prof);

        
        $__internal_c9112225529a970360147966d0b79ac1d6696439ec260d1286ae2bfa3f470ac8->leave($__internal_c9112225529a970360147966d0b79ac1d6696439ec260d1286ae2bfa3f470ac8_prof);

    }

    // line 120
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_5f8bb83e3c47dc5a7cc70038545abe2057d7b6632abd4e2a917c4d1560202730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8bb83e3c47dc5a7cc70038545abe2057d7b6632abd4e2a917c4d1560202730->enter($__internal_5f8bb83e3c47dc5a7cc70038545abe2057d7b6632abd4e2a917c4d1560202730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_f42d36fec7386b911c74b9b450b0ed31b721527af4f8801bafb0bdaf4301daec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f42d36fec7386b911c74b9b450b0ed31b721527af4f8801bafb0bdaf4301daec->enter($__internal_f42d36fec7386b911c74b9b450b0ed31b721527af4f8801bafb0bdaf4301daec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 121
        $context["force_error"] = true;
        // line 122
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_f42d36fec7386b911c74b9b450b0ed31b721527af4f8801bafb0bdaf4301daec->leave($__internal_f42d36fec7386b911c74b9b450b0ed31b721527af4f8801bafb0bdaf4301daec_prof);

        
        $__internal_5f8bb83e3c47dc5a7cc70038545abe2057d7b6632abd4e2a917c4d1560202730->leave($__internal_5f8bb83e3c47dc5a7cc70038545abe2057d7b6632abd4e2a917c4d1560202730_prof);

    }

    // line 125
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_d6176cb2c7ec8a54ee49c110dbb20968d3edf8c8bc61096cd0dc51ee8d3caac2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6176cb2c7ec8a54ee49c110dbb20968d3edf8c8bc61096cd0dc51ee8d3caac2->enter($__internal_d6176cb2c7ec8a54ee49c110dbb20968d3edf8c8bc61096cd0dc51ee8d3caac2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_68c08230cb9be8b351b10f8e405864d043128a297d9b485cbd85ed41f70f99a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68c08230cb9be8b351b10f8e405864d043128a297d9b485cbd85ed41f70f99a9->enter($__internal_68c08230cb9be8b351b10f8e405864d043128a297d9b485cbd85ed41f70f99a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 126
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 129
        echo "</div>";
        
        $__internal_68c08230cb9be8b351b10f8e405864d043128a297d9b485cbd85ed41f70f99a9->leave($__internal_68c08230cb9be8b351b10f8e405864d043128a297d9b485cbd85ed41f70f99a9_prof);

        
        $__internal_d6176cb2c7ec8a54ee49c110dbb20968d3edf8c8bc61096cd0dc51ee8d3caac2->leave($__internal_d6176cb2c7ec8a54ee49c110dbb20968d3edf8c8bc61096cd0dc51ee8d3caac2_prof);

    }

    // line 132
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_d9f5f9fc5f190fc3c54491b437bd653a650ccad8eac2fbe80bee2989dbd37a74 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d9f5f9fc5f190fc3c54491b437bd653a650ccad8eac2fbe80bee2989dbd37a74->enter($__internal_d9f5f9fc5f190fc3c54491b437bd653a650ccad8eac2fbe80bee2989dbd37a74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_240924acfce2ea20ea32b05e6e571556ccb5b43362924106c261080bec077707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240924acfce2ea20ea32b05e6e571556ccb5b43362924106c261080bec077707->enter($__internal_240924acfce2ea20ea32b05e6e571556ccb5b43362924106c261080bec077707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 133
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 136
        echo "</div>";
        
        $__internal_240924acfce2ea20ea32b05e6e571556ccb5b43362924106c261080bec077707->leave($__internal_240924acfce2ea20ea32b05e6e571556ccb5b43362924106c261080bec077707_prof);

        
        $__internal_d9f5f9fc5f190fc3c54491b437bd653a650ccad8eac2fbe80bee2989dbd37a74->leave($__internal_d9f5f9fc5f190fc3c54491b437bd653a650ccad8eac2fbe80bee2989dbd37a74_prof);

    }

    // line 141
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_d972bf1db926af14235208e25f8ac4cd00bb5b5defb1ca5ad8f9193c4345e584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d972bf1db926af14235208e25f8ac4cd00bb5b5defb1ca5ad8f9193c4345e584->enter($__internal_d972bf1db926af14235208e25f8ac4cd00bb5b5defb1ca5ad8f9193c4345e584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6ccf6d4ecc2d6b76ff2f297f9f6b8fd98a9441375f214f7e649661b68bf4481a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ccf6d4ecc2d6b76ff2f297f9f6b8fd98a9441375f214f7e649661b68bf4481a->enter($__internal_6ccf6d4ecc2d6b76ff2f297f9f6b8fd98a9441375f214f7e649661b68bf4481a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 142
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 143
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 144
            echo "    <ul class=\"list-unstyled\">";
            // line 145
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 146
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "</ul>
    ";
            // line 149
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_6ccf6d4ecc2d6b76ff2f297f9f6b8fd98a9441375f214f7e649661b68bf4481a->leave($__internal_6ccf6d4ecc2d6b76ff2f297f9f6b8fd98a9441375f214f7e649661b68bf4481a_prof);

        
        $__internal_d972bf1db926af14235208e25f8ac4cd00bb5b5defb1ca5ad8f9193c4345e584->leave($__internal_d972bf1db926af14235208e25f8ac4cd00bb5b5defb1ca5ad8f9193c4345e584_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  650 => 149,  647 => 148,  639 => 146,  635 => 145,  633 => 144,  627 => 143,  625 => 142,  616 => 141,  606 => 136,  604 => 135,  602 => 134,  596 => 133,  587 => 132,  577 => 129,  575 => 128,  573 => 127,  567 => 126,  558 => 125,  548 => 122,  546 => 121,  537 => 120,  527 => 117,  525 => 116,  516 => 115,  506 => 112,  504 => 111,  495 => 110,  485 => 107,  483 => 106,  474 => 105,  464 => 102,  462 => 101,  460 => 100,  451 => 99,  441 => 96,  439 => 95,  437 => 94,  435 => 93,  429 => 92,  420 => 91,  409 => 85,  405 => 84,  390 => 83,  386 => 80,  383 => 77,  382 => 76,  381 => 75,  379 => 74,  377 => 73,  374 => 71,  372 => 70,  369 => 68,  367 => 67,  365 => 66,  356 => 64,  346 => 61,  344 => 59,  335 => 58,  325 => 55,  323 => 53,  314 => 52,  304 => 49,  302 => 48,  293 => 46,  283 => 43,  281 => 42,  272 => 41,  261 => 35,  259 => 34,  257 => 33,  254 => 31,  252 => 30,  250 => 29,  241 => 28,  230 => 24,  228 => 23,  226 => 22,  223 => 20,  221 => 19,  219 => 18,  210 => 17,  200 => 14,  198 => 13,  189 => 12,  179 => 9,  176 => 7,  174 => 6,  165 => 5,  155 => 141,  152 => 140,  149 => 138,  147 => 132,  144 => 131,  142 => 125,  139 => 124,  137 => 120,  134 => 119,  132 => 115,  129 => 114,  127 => 110,  124 => 109,  122 => 105,  119 => 104,  117 => 99,  114 => 98,  112 => 91,  109 => 90,  106 => 88,  104 => 64,  101 => 63,  99 => 58,  96 => 57,  94 => 52,  91 => 51,  89 => 46,  86 => 45,  84 => 41,  81 => 40,  78 => 38,  76 => 28,  73 => 27,  71 => 17,  68 => 16,  66 => 12,  63 => 11,  61 => 5,  58 => 4,  55 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {%- set label_attr = label_attr|merge({'for': id}) -%}

    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {%- if widget is defined -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form is not rootform %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form is not rootform %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_3_layout.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_layout.html.twig");
    }
}
