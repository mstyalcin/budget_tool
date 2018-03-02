<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_c083c2d5c713c16268ea640464cec7a3109b843de9a945c8d2030d5aec735dd5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_627ef43f0f28f3dc06f0baed2ccfc56ca6704cc0773cafe5bd289c9865178f28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_627ef43f0f28f3dc06f0baed2ccfc56ca6704cc0773cafe5bd289c9865178f28->enter($__internal_627ef43f0f28f3dc06f0baed2ccfc56ca6704cc0773cafe5bd289c9865178f28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_3de4dca4209ccecf667ea92c7d18f8926181a0fff12e6f07bf60b8576b9ebcfd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3de4dca4209ccecf667ea92c7d18f8926181a0fff12e6f07bf60b8576b9ebcfd->enter($__internal_3de4dca4209ccecf667ea92c7d18f8926181a0fff12e6f07bf60b8576b9ebcfd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 87
        echo "
";
        // line 88
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 99
        echo "
";
        // line 100
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 124
        echo "
";
        // line 126
        echo "
";
        // line 127
        $this->displayBlock('form_label', $context, $blocks);
        // line 136
        echo "
";
        // line 137
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 162
        echo "
";
        // line 164
        echo "
";
        // line 165
        $this->displayBlock('form_row', $context, $blocks);
        // line 175
        echo "
";
        // line 177
        echo "
";
        // line 178
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_627ef43f0f28f3dc06f0baed2ccfc56ca6704cc0773cafe5bd289c9865178f28->leave($__internal_627ef43f0f28f3dc06f0baed2ccfc56ca6704cc0773cafe5bd289c9865178f28_prof);

        
        $__internal_3de4dca4209ccecf667ea92c7d18f8926181a0fff12e6f07bf60b8576b9ebcfd->leave($__internal_3de4dca4209ccecf667ea92c7d18f8926181a0fff12e6f07bf60b8576b9ebcfd_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_df4131fb014a631baa7d2dc751a478888089381ccf1beea12b03f2fc00645ca0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df4131fb014a631baa7d2dc751a478888089381ccf1beea12b03f2fc00645ca0->enter($__internal_df4131fb014a631baa7d2dc751a478888089381ccf1beea12b03f2fc00645ca0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_2e5bc6be3e599e5074049e0334e024e1e2669c634759ae1ee45fd7eb0712b4bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e5bc6be3e599e5074049e0334e024e1e2669c634759ae1ee45fd7eb0712b4bd->enter($__internal_2e5bc6be3e599e5074049e0334e024e1e2669c634759ae1ee45fd7eb0712b4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_2e5bc6be3e599e5074049e0334e024e1e2669c634759ae1ee45fd7eb0712b4bd->leave($__internal_2e5bc6be3e599e5074049e0334e024e1e2669c634759ae1ee45fd7eb0712b4bd_prof);

        
        $__internal_df4131fb014a631baa7d2dc751a478888089381ccf1beea12b03f2fc00645ca0->leave($__internal_df4131fb014a631baa7d2dc751a478888089381ccf1beea12b03f2fc00645ca0_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_2995eba9a1ed2d5a0565adb4ab9262aeaf6bedf79fc081e61082fdb7f90f3a4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2995eba9a1ed2d5a0565adb4ab9262aeaf6bedf79fc081e61082fdb7f90f3a4e->enter($__internal_2995eba9a1ed2d5a0565adb4ab9262aeaf6bedf79fc081e61082fdb7f90f3a4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_0cc810a99134f5e7a050e8f086f5626b9fddf2baa16a0b32f6fda82fe43334cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cc810a99134f5e7a050e8f086f5626b9fddf2baa16a0b32f6fda82fe43334cb->enter($__internal_0cc810a99134f5e7a050e8f086f5626b9fddf2baa16a0b32f6fda82fe43334cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_0cc810a99134f5e7a050e8f086f5626b9fddf2baa16a0b32f6fda82fe43334cb->leave($__internal_0cc810a99134f5e7a050e8f086f5626b9fddf2baa16a0b32f6fda82fe43334cb_prof);

        
        $__internal_2995eba9a1ed2d5a0565adb4ab9262aeaf6bedf79fc081e61082fdb7f90f3a4e->leave($__internal_2995eba9a1ed2d5a0565adb4ab9262aeaf6bedf79fc081e61082fdb7f90f3a4e_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_f31e9436553425dc0b1dea7dd3528035b3eedbdd60810ce829ff1d43a1a4f28a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f31e9436553425dc0b1dea7dd3528035b3eedbdd60810ce829ff1d43a1a4f28a->enter($__internal_f31e9436553425dc0b1dea7dd3528035b3eedbdd60810ce829ff1d43a1a4f28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_2167e3175ff755fb261dc23e2a1daca56fe29dacf108037fe4ef1db3bab3aad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2167e3175ff755fb261dc23e2a1daca56fe29dacf108037fe4ef1db3bab3aad5->enter($__internal_2167e3175ff755fb261dc23e2a1daca56fe29dacf108037fe4ef1db3bab3aad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_2167e3175ff755fb261dc23e2a1daca56fe29dacf108037fe4ef1db3bab3aad5->leave($__internal_2167e3175ff755fb261dc23e2a1daca56fe29dacf108037fe4ef1db3bab3aad5_prof);

        
        $__internal_f31e9436553425dc0b1dea7dd3528035b3eedbdd60810ce829ff1d43a1a4f28a->leave($__internal_f31e9436553425dc0b1dea7dd3528035b3eedbdd60810ce829ff1d43a1a4f28a_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_bb954d1d4dc71b10a71ef371ad994e4082d1786b76d7708dc4efa1e2f3dd0d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb954d1d4dc71b10a71ef371ad994e4082d1786b76d7708dc4efa1e2f3dd0d2c->enter($__internal_bb954d1d4dc71b10a71ef371ad994e4082d1786b76d7708dc4efa1e2f3dd0d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_8796d56964ab4875134fd7d79ab650cd2c743611c39c34a014bab7c72434439e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8796d56964ab4875134fd7d79ab650cd2c743611c39c34a014bab7c72434439e->enter($__internal_8796d56964ab4875134fd7d79ab650cd2c743611c39c34a014bab7c72434439e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_8796d56964ab4875134fd7d79ab650cd2c743611c39c34a014bab7c72434439e->leave($__internal_8796d56964ab4875134fd7d79ab650cd2c743611c39c34a014bab7c72434439e_prof);

        
        $__internal_bb954d1d4dc71b10a71ef371ad994e4082d1786b76d7708dc4efa1e2f3dd0d2c->leave($__internal_bb954d1d4dc71b10a71ef371ad994e4082d1786b76d7708dc4efa1e2f3dd0d2c_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_be921613157480f6cdd3aad46f816e3ffb40ce1250bf4e89fb3d1de3ee7f13c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be921613157480f6cdd3aad46f816e3ffb40ce1250bf4e89fb3d1de3ee7f13c1->enter($__internal_be921613157480f6cdd3aad46f816e3ffb40ce1250bf4e89fb3d1de3ee7f13c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_26ebeb7289f238f6d695209258850a9a07c67622c846d0581306d83e81a1de25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26ebeb7289f238f6d695209258850a9a07c67622c846d0581306d83e81a1de25->enter($__internal_26ebeb7289f238f6d695209258850a9a07c67622c846d0581306d83e81a1de25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_26ebeb7289f238f6d695209258850a9a07c67622c846d0581306d83e81a1de25->leave($__internal_26ebeb7289f238f6d695209258850a9a07c67622c846d0581306d83e81a1de25_prof);

        
        $__internal_be921613157480f6cdd3aad46f816e3ffb40ce1250bf4e89fb3d1de3ee7f13c1->leave($__internal_be921613157480f6cdd3aad46f816e3ffb40ce1250bf4e89fb3d1de3ee7f13c1_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_55e446e0dd66fc1ccec6cce6a40aff80cc902c3308283c644b60869f16768685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_55e446e0dd66fc1ccec6cce6a40aff80cc902c3308283c644b60869f16768685->enter($__internal_55e446e0dd66fc1ccec6cce6a40aff80cc902c3308283c644b60869f16768685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_59a1e32bc1409febf4822ffe46a33f63e7e62e25aca78efaa33d87d6eaa509e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59a1e32bc1409febf4822ffe46a33f63e7e62e25aca78efaa33d87d6eaa509e4->enter($__internal_59a1e32bc1409febf4822ffe46a33f63e7e62e25aca78efaa33d87d6eaa509e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_59a1e32bc1409febf4822ffe46a33f63e7e62e25aca78efaa33d87d6eaa509e4->leave($__internal_59a1e32bc1409febf4822ffe46a33f63e7e62e25aca78efaa33d87d6eaa509e4_prof);

        
        $__internal_55e446e0dd66fc1ccec6cce6a40aff80cc902c3308283c644b60869f16768685->leave($__internal_55e446e0dd66fc1ccec6cce6a40aff80cc902c3308283c644b60869f16768685_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_99752f537e487b2a2c3d6874ce2fa4cededa408b7d2d2af1ac6326cff04485e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99752f537e487b2a2c3d6874ce2fa4cededa408b7d2d2af1ac6326cff04485e6->enter($__internal_99752f537e487b2a2c3d6874ce2fa4cededa408b7d2d2af1ac6326cff04485e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_8529dbd8e2cf733a2f320b9274e04bb55a339a5ea99ba6856124bba80f4ee0e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8529dbd8e2cf733a2f320b9274e04bb55a339a5ea99ba6856124bba80f4ee0e0->enter($__internal_8529dbd8e2cf733a2f320b9274e04bb55a339a5ea99ba6856124bba80f4ee0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8529dbd8e2cf733a2f320b9274e04bb55a339a5ea99ba6856124bba80f4ee0e0->leave($__internal_8529dbd8e2cf733a2f320b9274e04bb55a339a5ea99ba6856124bba80f4ee0e0_prof);

        
        $__internal_99752f537e487b2a2c3d6874ce2fa4cededa408b7d2d2af1ac6326cff04485e6->leave($__internal_99752f537e487b2a2c3d6874ce2fa4cededa408b7d2d2af1ac6326cff04485e6_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_cffd66383e0ce90b9702119e2d606c85a749542639a2bbd5c384dc40c581b1ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cffd66383e0ce90b9702119e2d606c85a749542639a2bbd5c384dc40c581b1ad->enter($__internal_cffd66383e0ce90b9702119e2d606c85a749542639a2bbd5c384dc40c581b1ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_e5a19bc21a22811f5a4edf5ecc05e691eda6bc59f4a0866e88b86fbfb7d97f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a19bc21a22811f5a4edf5ecc05e691eda6bc59f4a0866e88b86fbfb7d97f5a->enter($__internal_e5a19bc21a22811f5a4edf5ecc05e691eda6bc59f4a0866e88b86fbfb7d97f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_e5a19bc21a22811f5a4edf5ecc05e691eda6bc59f4a0866e88b86fbfb7d97f5a->leave($__internal_e5a19bc21a22811f5a4edf5ecc05e691eda6bc59f4a0866e88b86fbfb7d97f5a_prof);

        
        $__internal_cffd66383e0ce90b9702119e2d606c85a749542639a2bbd5c384dc40c581b1ad->leave($__internal_cffd66383e0ce90b9702119e2d606c85a749542639a2bbd5c384dc40c581b1ad_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2f5cb8056e44cf434591541b50e464a194447a9960796a7606f953155177abd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2f5cb8056e44cf434591541b50e464a194447a9960796a7606f953155177abd0->enter($__internal_2f5cb8056e44cf434591541b50e464a194447a9960796a7606f953155177abd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_eeb50f6e2510c019867d3bef7c536f05e4195d7d7cbaf614471dbc7df19cc60a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeb50f6e2510c019867d3bef7c536f05e4195d7d7cbaf614471dbc7df19cc60a->enter($__internal_eeb50f6e2510c019867d3bef7c536f05e4195d7d7cbaf614471dbc7df19cc60a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_eeb50f6e2510c019867d3bef7c536f05e4195d7d7cbaf614471dbc7df19cc60a->leave($__internal_eeb50f6e2510c019867d3bef7c536f05e4195d7d7cbaf614471dbc7df19cc60a_prof);

        
        $__internal_2f5cb8056e44cf434591541b50e464a194447a9960796a7606f953155177abd0->leave($__internal_2f5cb8056e44cf434591541b50e464a194447a9960796a7606f953155177abd0_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_1ea89d1c3682fc587a2fa97f0c25f945ad259a5d638f6e2536603317e0ae41a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea89d1c3682fc587a2fa97f0c25f945ad259a5d638f6e2536603317e0ae41a9->enter($__internal_1ea89d1c3682fc587a2fa97f0c25f945ad259a5d638f6e2536603317e0ae41a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_f9980eaea72afd1538b84edd0e1eced55845901a2571d8576c166f726e951f33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9980eaea72afd1538b84edd0e1eced55845901a2571d8576c166f726e951f33->enter($__internal_f9980eaea72afd1538b84edd0e1eced55845901a2571d8576c166f726e951f33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } elseif (twig_in_filter("form-check-inline",         // line 77
($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 78
            echo "        <div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo " form-check-inline\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>
    ";
        } else {
            // line 82
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 83
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 84
            echo "</div>";
        }
        
        $__internal_f9980eaea72afd1538b84edd0e1eced55845901a2571d8576c166f726e951f33->leave($__internal_f9980eaea72afd1538b84edd0e1eced55845901a2571d8576c166f726e951f33_prof);

        
        $__internal_1ea89d1c3682fc587a2fa97f0c25f945ad259a5d638f6e2536603317e0ae41a9->leave($__internal_1ea89d1c3682fc587a2fa97f0c25f945ad259a5d638f6e2536603317e0ae41a9_prof);

    }

    // line 88
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_add4e3733bd7bd1a3836f670f7bfddd1f6a478622c27a9a2c802daf32a5bd54d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_add4e3733bd7bd1a3836f670f7bfddd1f6a478622c27a9a2c802daf32a5bd54d->enter($__internal_add4e3733bd7bd1a3836f670f7bfddd1f6a478622c27a9a2c802daf32a5bd54d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_6815aa88a252f217a85f217cea0929ce44829141186928af91c05bc8556febbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6815aa88a252f217a85f217cea0929ce44829141186928af91c05bc8556febbe->enter($__internal_6815aa88a252f217a85f217cea0929ce44829141186928af91c05bc8556febbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 89
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 90
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 91
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 92
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 94
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 95
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 96
            echo "</div>";
        }
        
        $__internal_6815aa88a252f217a85f217cea0929ce44829141186928af91c05bc8556febbe->leave($__internal_6815aa88a252f217a85f217cea0929ce44829141186928af91c05bc8556febbe_prof);

        
        $__internal_add4e3733bd7bd1a3836f670f7bfddd1f6a478622c27a9a2c802daf32a5bd54d->leave($__internal_add4e3733bd7bd1a3836f670f7bfddd1f6a478622c27a9a2c802daf32a5bd54d_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5d7383f5951317ad2d13122d2ef82bcc7597b66ab799838324a6c9205fb4dc6f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d7383f5951317ad2d13122d2ef82bcc7597b66ab799838324a6c9205fb4dc6f->enter($__internal_5d7383f5951317ad2d13122d2ef82bcc7597b66ab799838324a6c9205fb4dc6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_9c7e89a80b4d1199cacfbfe1345b625e0c8ed71e72d26070eb0bb0bca493e762 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c7e89a80b4d1199cacfbfe1345b625e0c8ed71e72d26070eb0bb0bca493e762->enter($__internal_9c7e89a80b4d1199cacfbfe1345b625e0c8ed71e72d26070eb0bb0bca493e762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 101
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 102
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 103
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 104
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 105
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 106
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 110
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 111
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 113
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 115
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 116
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 117
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 121
            echo "</div>";
        }
        
        $__internal_9c7e89a80b4d1199cacfbfe1345b625e0c8ed71e72d26070eb0bb0bca493e762->leave($__internal_9c7e89a80b4d1199cacfbfe1345b625e0c8ed71e72d26070eb0bb0bca493e762_prof);

        
        $__internal_5d7383f5951317ad2d13122d2ef82bcc7597b66ab799838324a6c9205fb4dc6f->leave($__internal_5d7383f5951317ad2d13122d2ef82bcc7597b66ab799838324a6c9205fb4dc6f_prof);

    }

    // line 127
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d7efaeb3280b8dc3bf93648f4a7a95fe7d900bbf83504d0571b2ac9014a44364 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7efaeb3280b8dc3bf93648f4a7a95fe7d900bbf83504d0571b2ac9014a44364->enter($__internal_d7efaeb3280b8dc3bf93648f4a7a95fe7d900bbf83504d0571b2ac9014a44364_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_1ac8e138ce44da3132b36781b8da79e1040f6a319899fd75c76c818dfa35c5e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac8e138ce44da3132b36781b8da79e1040f6a319899fd75c76c818dfa35c5e4->enter($__internal_1ac8e138ce44da3132b36781b8da79e1040f6a319899fd75c76c818dfa35c5e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 128
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 129
            $context["element"] = "legend";
            // line 130
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 132
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 134
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_1ac8e138ce44da3132b36781b8da79e1040f6a319899fd75c76c818dfa35c5e4->leave($__internal_1ac8e138ce44da3132b36781b8da79e1040f6a319899fd75c76c818dfa35c5e4_prof);

        
        $__internal_d7efaeb3280b8dc3bf93648f4a7a95fe7d900bbf83504d0571b2ac9014a44364->leave($__internal_d7efaeb3280b8dc3bf93648f4a7a95fe7d900bbf83504d0571b2ac9014a44364_prof);

    }

    // line 137
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_66f09110205b2315acd1d3cb4bed541cbb63d27305bea2b63e73e2e735b5a482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66f09110205b2315acd1d3cb4bed541cbb63d27305bea2b63e73e2e735b5a482->enter($__internal_66f09110205b2315acd1d3cb4bed541cbb63d27305bea2b63e73e2e735b5a482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_6ba479488c791100d35edd91525ae94025210afa1face548dcbf6a270540a20a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ba479488c791100d35edd91525ae94025210afa1face548dcbf6a270540a20a->enter($__internal_6ba479488c791100d35edd91525ae94025210afa1face548dcbf6a270540a20a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 139
        if (array_key_exists("widget", $context)) {
            // line 140
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 141
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 142
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 144
            if (array_key_exists("parent_label_class", $context)) {
                // line 145
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 147
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 148
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 149
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 150
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 151
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 154
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 157
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
            // line 158
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 159
            echo "</label>";
        }
        
        $__internal_6ba479488c791100d35edd91525ae94025210afa1face548dcbf6a270540a20a->leave($__internal_6ba479488c791100d35edd91525ae94025210afa1face548dcbf6a270540a20a_prof);

        
        $__internal_66f09110205b2315acd1d3cb4bed541cbb63d27305bea2b63e73e2e735b5a482->leave($__internal_66f09110205b2315acd1d3cb4bed541cbb63d27305bea2b63e73e2e735b5a482_prof);

    }

    // line 165
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_51de66827877dc550319d50553e8d7cb48dd994f37ac6f26c320a2984d90df04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51de66827877dc550319d50553e8d7cb48dd994f37ac6f26c320a2984d90df04->enter($__internal_51de66827877dc550319d50553e8d7cb48dd994f37ac6f26c320a2984d90df04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a93f904248575c050c4b89d314c3eaa511877ed73590d146f718200e2e4eb27d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a93f904248575c050c4b89d314c3eaa511877ed73590d146f718200e2e4eb27d->enter($__internal_a93f904248575c050c4b89d314c3eaa511877ed73590d146f718200e2e4eb27d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 166
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 167
            $context["element"] = "fieldset";
        }
        // line 169
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 171
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 173
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_a93f904248575c050c4b89d314c3eaa511877ed73590d146f718200e2e4eb27d->leave($__internal_a93f904248575c050c4b89d314c3eaa511877ed73590d146f718200e2e4eb27d_prof);

        
        $__internal_51de66827877dc550319d50553e8d7cb48dd994f37ac6f26c320a2984d90df04->leave($__internal_51de66827877dc550319d50553e8d7cb48dd994f37ac6f26c320a2984d90df04_prof);

    }

    // line 178
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_ddf29f0ef677d0ffd1767b0f31fbccc5c62ff3e07e853f866782586e9370f40e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddf29f0ef677d0ffd1767b0f31fbccc5c62ff3e07e853f866782586e9370f40e->enter($__internal_ddf29f0ef677d0ffd1767b0f31fbccc5c62ff3e07e853f866782586e9370f40e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2f14354ebff8839b03107f49df93b307097cb5e34fc468e0e79f7782e7c532e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f14354ebff8839b03107f49df93b307097cb5e34fc468e0e79f7782e7c532e8->enter($__internal_2f14354ebff8839b03107f49df93b307097cb5e34fc468e0e79f7782e7c532e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 179
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 180
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 182
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 183
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 185
            echo "</ul>
    </div>";
        }
        
        $__internal_2f14354ebff8839b03107f49df93b307097cb5e34fc468e0e79f7782e7c532e8->leave($__internal_2f14354ebff8839b03107f49df93b307097cb5e34fc468e0e79f7782e7c532e8_prof);

        
        $__internal_ddf29f0ef677d0ffd1767b0f31fbccc5c62ff3e07e853f866782586e9370f40e->leave($__internal_ddf29f0ef677d0ffd1767b0f31fbccc5c62ff3e07e853f866782586e9370f40e_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  683 => 185,  675 => 183,  671 => 182,  662 => 180,  660 => 179,  651 => 178,  639 => 173,  637 => 172,  635 => 171,  633 => 170,  629 => 169,  626 => 167,  624 => 166,  615 => 165,  604 => 159,  600 => 158,  585 => 157,  581 => 154,  578 => 151,  577 => 150,  576 => 149,  574 => 148,  572 => 147,  569 => 145,  567 => 144,  564 => 142,  562 => 141,  560 => 140,  558 => 139,  549 => 137,  539 => 134,  536 => 132,  533 => 130,  531 => 129,  529 => 128,  520 => 127,  509 => 121,  503 => 117,  502 => 116,  501 => 115,  497 => 114,  493 => 113,  490 => 111,  488 => 110,  481 => 106,  480 => 105,  479 => 104,  478 => 103,  474 => 102,  472 => 101,  463 => 100,  452 => 96,  450 => 95,  446 => 94,  443 => 92,  441 => 91,  439 => 90,  437 => 89,  428 => 88,  417 => 84,  415 => 83,  411 => 82,  407 => 80,  405 => 79,  401 => 78,  399 => 77,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 178,  134 => 177,  131 => 175,  129 => 165,  126 => 164,  123 => 162,  121 => 137,  118 => 136,  116 => 127,  113 => 126,  110 => 124,  108 => 100,  105 => 99,  103 => 88,  100 => 87,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
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

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% elseif 'form-check-inline' in parent_label_class %}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }} form-check-inline\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
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
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_layout.html.twig");
    }
}
