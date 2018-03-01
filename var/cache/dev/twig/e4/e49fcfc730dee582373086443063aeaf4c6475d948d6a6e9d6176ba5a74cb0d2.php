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
        $__internal_d6306e147ea866e53deec32eb3007d2f0a38d121197eacc8a250c88a78b3eed4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6306e147ea866e53deec32eb3007d2f0a38d121197eacc8a250c88a78b3eed4->enter($__internal_d6306e147ea866e53deec32eb3007d2f0a38d121197eacc8a250c88a78b3eed4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_4ecaf9eb80cc7f73b6e8e8d568f6d5e1f411ba80fe7b12cf71f043ab1f48614f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ecaf9eb80cc7f73b6e8e8d568f6d5e1f411ba80fe7b12cf71f043ab1f48614f->enter($__internal_4ecaf9eb80cc7f73b6e8e8d568f6d5e1f411ba80fe7b12cf71f043ab1f48614f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

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
        
        $__internal_d6306e147ea866e53deec32eb3007d2f0a38d121197eacc8a250c88a78b3eed4->leave($__internal_d6306e147ea866e53deec32eb3007d2f0a38d121197eacc8a250c88a78b3eed4_prof);

        
        $__internal_4ecaf9eb80cc7f73b6e8e8d568f6d5e1f411ba80fe7b12cf71f043ab1f48614f->leave($__internal_4ecaf9eb80cc7f73b6e8e8d568f6d5e1f411ba80fe7b12cf71f043ab1f48614f_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_434f82dcbf6d50315bc92bfa807fdc042f7051028d5cb8dd07e640ffbae3870d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_434f82dcbf6d50315bc92bfa807fdc042f7051028d5cb8dd07e640ffbae3870d->enter($__internal_434f82dcbf6d50315bc92bfa807fdc042f7051028d5cb8dd07e640ffbae3870d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_49ad5d349533f9e0d97f726082a8fcf4ff351155a1368783c7b01b803eae8fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_49ad5d349533f9e0d97f726082a8fcf4ff351155a1368783c7b01b803eae8fd4->enter($__internal_49ad5d349533f9e0d97f726082a8fcf4ff351155a1368783c7b01b803eae8fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_49ad5d349533f9e0d97f726082a8fcf4ff351155a1368783c7b01b803eae8fd4->leave($__internal_49ad5d349533f9e0d97f726082a8fcf4ff351155a1368783c7b01b803eae8fd4_prof);

        
        $__internal_434f82dcbf6d50315bc92bfa807fdc042f7051028d5cb8dd07e640ffbae3870d->leave($__internal_434f82dcbf6d50315bc92bfa807fdc042f7051028d5cb8dd07e640ffbae3870d_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_247693db4f5e55701dc5be08b6dc1eeb13fdd1f6d6ca0104b3a0b6eda0ec159b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_247693db4f5e55701dc5be08b6dc1eeb13fdd1f6d6ca0104b3a0b6eda0ec159b->enter($__internal_247693db4f5e55701dc5be08b6dc1eeb13fdd1f6d6ca0104b3a0b6eda0ec159b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_eeca2f46edaaf1fe941db15989488a1986bdb411386120caefebb34d82fa4978 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eeca2f46edaaf1fe941db15989488a1986bdb411386120caefebb34d82fa4978->enter($__internal_eeca2f46edaaf1fe941db15989488a1986bdb411386120caefebb34d82fa4978_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_eeca2f46edaaf1fe941db15989488a1986bdb411386120caefebb34d82fa4978->leave($__internal_eeca2f46edaaf1fe941db15989488a1986bdb411386120caefebb34d82fa4978_prof);

        
        $__internal_247693db4f5e55701dc5be08b6dc1eeb13fdd1f6d6ca0104b3a0b6eda0ec159b->leave($__internal_247693db4f5e55701dc5be08b6dc1eeb13fdd1f6d6ca0104b3a0b6eda0ec159b_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_306f955beffbc9ea52bb25e0289962f487ef4a0a81674d4e7378f2a2368da568 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_306f955beffbc9ea52bb25e0289962f487ef4a0a81674d4e7378f2a2368da568->enter($__internal_306f955beffbc9ea52bb25e0289962f487ef4a0a81674d4e7378f2a2368da568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_a41c2186cf0126e5c8c74c2cfc96fde7765cb986990327e036e2e6d13a45ed10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a41c2186cf0126e5c8c74c2cfc96fde7765cb986990327e036e2e6d13a45ed10->enter($__internal_a41c2186cf0126e5c8c74c2cfc96fde7765cb986990327e036e2e6d13a45ed10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_a41c2186cf0126e5c8c74c2cfc96fde7765cb986990327e036e2e6d13a45ed10->leave($__internal_a41c2186cf0126e5c8c74c2cfc96fde7765cb986990327e036e2e6d13a45ed10_prof);

        
        $__internal_306f955beffbc9ea52bb25e0289962f487ef4a0a81674d4e7378f2a2368da568->leave($__internal_306f955beffbc9ea52bb25e0289962f487ef4a0a81674d4e7378f2a2368da568_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_9b1dcd2b49acbf9869f90ba4e340401d7f6fc26b7e5e16c3754ba855d5ff35bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b1dcd2b49acbf9869f90ba4e340401d7f6fc26b7e5e16c3754ba855d5ff35bf->enter($__internal_9b1dcd2b49acbf9869f90ba4e340401d7f6fc26b7e5e16c3754ba855d5ff35bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_0c930d9aa449db0bd74bf526798d0f17e507efedaf929cc811a9daa1bb75d59a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c930d9aa449db0bd74bf526798d0f17e507efedaf929cc811a9daa1bb75d59a->enter($__internal_0c930d9aa449db0bd74bf526798d0f17e507efedaf929cc811a9daa1bb75d59a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_0c930d9aa449db0bd74bf526798d0f17e507efedaf929cc811a9daa1bb75d59a->leave($__internal_0c930d9aa449db0bd74bf526798d0f17e507efedaf929cc811a9daa1bb75d59a_prof);

        
        $__internal_9b1dcd2b49acbf9869f90ba4e340401d7f6fc26b7e5e16c3754ba855d5ff35bf->leave($__internal_9b1dcd2b49acbf9869f90ba4e340401d7f6fc26b7e5e16c3754ba855d5ff35bf_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_7f5b25b0caccd24e81da1092af30768ef3a0cbbff24da5eddc3bce4be49f0bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f5b25b0caccd24e81da1092af30768ef3a0cbbff24da5eddc3bce4be49f0bd9->enter($__internal_7f5b25b0caccd24e81da1092af30768ef3a0cbbff24da5eddc3bce4be49f0bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_f31113745aeb2c8eb03ed00971802e5b5d64f9fb15dd5d2c8b6139f74d910cca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f31113745aeb2c8eb03ed00971802e5b5d64f9fb15dd5d2c8b6139f74d910cca->enter($__internal_f31113745aeb2c8eb03ed00971802e5b5d64f9fb15dd5d2c8b6139f74d910cca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_f31113745aeb2c8eb03ed00971802e5b5d64f9fb15dd5d2c8b6139f74d910cca->leave($__internal_f31113745aeb2c8eb03ed00971802e5b5d64f9fb15dd5d2c8b6139f74d910cca_prof);

        
        $__internal_7f5b25b0caccd24e81da1092af30768ef3a0cbbff24da5eddc3bce4be49f0bd9->leave($__internal_7f5b25b0caccd24e81da1092af30768ef3a0cbbff24da5eddc3bce4be49f0bd9_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a04a9b318221ce2ea050c732043276e0e7c6c72acfbe815b4bfc3e161ee68dbf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a04a9b318221ce2ea050c732043276e0e7c6c72acfbe815b4bfc3e161ee68dbf->enter($__internal_a04a9b318221ce2ea050c732043276e0e7c6c72acfbe815b4bfc3e161ee68dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_2574f7942768bdb0df404bbf8a058735d03ea82ee6b228952266fd9b5b7dd07b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2574f7942768bdb0df404bbf8a058735d03ea82ee6b228952266fd9b5b7dd07b->enter($__internal_2574f7942768bdb0df404bbf8a058735d03ea82ee6b228952266fd9b5b7dd07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_2574f7942768bdb0df404bbf8a058735d03ea82ee6b228952266fd9b5b7dd07b->leave($__internal_2574f7942768bdb0df404bbf8a058735d03ea82ee6b228952266fd9b5b7dd07b_prof);

        
        $__internal_a04a9b318221ce2ea050c732043276e0e7c6c72acfbe815b4bfc3e161ee68dbf->leave($__internal_a04a9b318221ce2ea050c732043276e0e7c6c72acfbe815b4bfc3e161ee68dbf_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_0667ac32f555581bbafb1872662d5d7b9b1cf7b5998bff234fe9f3151cc70993 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0667ac32f555581bbafb1872662d5d7b9b1cf7b5998bff234fe9f3151cc70993->enter($__internal_0667ac32f555581bbafb1872662d5d7b9b1cf7b5998bff234fe9f3151cc70993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_fe5cbaa3f44e1eef2de8e0c2745739ff0ac2ecf8c9588b16760f17de20d2d105 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5cbaa3f44e1eef2de8e0c2745739ff0ac2ecf8c9588b16760f17de20d2d105->enter($__internal_fe5cbaa3f44e1eef2de8e0c2745739ff0ac2ecf8c9588b16760f17de20d2d105_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_fe5cbaa3f44e1eef2de8e0c2745739ff0ac2ecf8c9588b16760f17de20d2d105->leave($__internal_fe5cbaa3f44e1eef2de8e0c2745739ff0ac2ecf8c9588b16760f17de20d2d105_prof);

        
        $__internal_0667ac32f555581bbafb1872662d5d7b9b1cf7b5998bff234fe9f3151cc70993->leave($__internal_0667ac32f555581bbafb1872662d5d7b9b1cf7b5998bff234fe9f3151cc70993_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_4fa263dec02fefbd29e4d839f893d340bb483fe4da5cbb2cbd1ef752e3c457f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa263dec02fefbd29e4d839f893d340bb483fe4da5cbb2cbd1ef752e3c457f5->enter($__internal_4fa263dec02fefbd29e4d839f893d340bb483fe4da5cbb2cbd1ef752e3c457f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_95e8a3d823c0a6cde92b9dbf58cb594d5c44f8b0db03fe74e92cae31f50d7d6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95e8a3d823c0a6cde92b9dbf58cb594d5c44f8b0db03fe74e92cae31f50d7d6b->enter($__internal_95e8a3d823c0a6cde92b9dbf58cb594d5c44f8b0db03fe74e92cae31f50d7d6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_95e8a3d823c0a6cde92b9dbf58cb594d5c44f8b0db03fe74e92cae31f50d7d6b->leave($__internal_95e8a3d823c0a6cde92b9dbf58cb594d5c44f8b0db03fe74e92cae31f50d7d6b_prof);

        
        $__internal_4fa263dec02fefbd29e4d839f893d340bb483fe4da5cbb2cbd1ef752e3c457f5->leave($__internal_4fa263dec02fefbd29e4d839f893d340bb483fe4da5cbb2cbd1ef752e3c457f5_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_599e9edad1cf5d92403544af8a7da539978557ca0f3b7c301c34a6b2c5e82aba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_599e9edad1cf5d92403544af8a7da539978557ca0f3b7c301c34a6b2c5e82aba->enter($__internal_599e9edad1cf5d92403544af8a7da539978557ca0f3b7c301c34a6b2c5e82aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_cb94166b900fbcbde6057f28aeb0a967dfd915db09aa7f5a8150bf7bd7766af0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb94166b900fbcbde6057f28aeb0a967dfd915db09aa7f5a8150bf7bd7766af0->enter($__internal_cb94166b900fbcbde6057f28aeb0a967dfd915db09aa7f5a8150bf7bd7766af0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_cb94166b900fbcbde6057f28aeb0a967dfd915db09aa7f5a8150bf7bd7766af0->leave($__internal_cb94166b900fbcbde6057f28aeb0a967dfd915db09aa7f5a8150bf7bd7766af0_prof);

        
        $__internal_599e9edad1cf5d92403544af8a7da539978557ca0f3b7c301c34a6b2c5e82aba->leave($__internal_599e9edad1cf5d92403544af8a7da539978557ca0f3b7c301c34a6b2c5e82aba_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_dab4f627033594a2247d518461e2e850e4a7a420446faee6247f466c5e158172 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dab4f627033594a2247d518461e2e850e4a7a420446faee6247f466c5e158172->enter($__internal_dab4f627033594a2247d518461e2e850e4a7a420446faee6247f466c5e158172_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_062711e79f27dd656a34cfd76db6ccc16a3dbb12548e1a9072a5db1d95d34101 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_062711e79f27dd656a34cfd76db6ccc16a3dbb12548e1a9072a5db1d95d34101->enter($__internal_062711e79f27dd656a34cfd76db6ccc16a3dbb12548e1a9072a5db1d95d34101_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_062711e79f27dd656a34cfd76db6ccc16a3dbb12548e1a9072a5db1d95d34101->leave($__internal_062711e79f27dd656a34cfd76db6ccc16a3dbb12548e1a9072a5db1d95d34101_prof);

        
        $__internal_dab4f627033594a2247d518461e2e850e4a7a420446faee6247f466c5e158172->leave($__internal_dab4f627033594a2247d518461e2e850e4a7a420446faee6247f466c5e158172_prof);

    }

    // line 88
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_446359c8cadc16beae05fb3b4fc980d9fbea65cdc74cec1a06215fab5759a163 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_446359c8cadc16beae05fb3b4fc980d9fbea65cdc74cec1a06215fab5759a163->enter($__internal_446359c8cadc16beae05fb3b4fc980d9fbea65cdc74cec1a06215fab5759a163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_fdee7c1356d68242788a864b68253fed214164e58a2c61ef40e69d0f6c945a6b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdee7c1356d68242788a864b68253fed214164e58a2c61ef40e69d0f6c945a6b->enter($__internal_fdee7c1356d68242788a864b68253fed214164e58a2c61ef40e69d0f6c945a6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_fdee7c1356d68242788a864b68253fed214164e58a2c61ef40e69d0f6c945a6b->leave($__internal_fdee7c1356d68242788a864b68253fed214164e58a2c61ef40e69d0f6c945a6b_prof);

        
        $__internal_446359c8cadc16beae05fb3b4fc980d9fbea65cdc74cec1a06215fab5759a163->leave($__internal_446359c8cadc16beae05fb3b4fc980d9fbea65cdc74cec1a06215fab5759a163_prof);

    }

    // line 100
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_670292be3e10cd67441c57631bf8a1efb4eac2a82e582fd32a7149d559a783d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670292be3e10cd67441c57631bf8a1efb4eac2a82e582fd32a7149d559a783d4->enter($__internal_670292be3e10cd67441c57631bf8a1efb4eac2a82e582fd32a7149d559a783d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_7450800636d00b0a08b48c8d427ca21df2db6d7dab8e9298d915932a97e40413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7450800636d00b0a08b48c8d427ca21df2db6d7dab8e9298d915932a97e40413->enter($__internal_7450800636d00b0a08b48c8d427ca21df2db6d7dab8e9298d915932a97e40413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_7450800636d00b0a08b48c8d427ca21df2db6d7dab8e9298d915932a97e40413->leave($__internal_7450800636d00b0a08b48c8d427ca21df2db6d7dab8e9298d915932a97e40413_prof);

        
        $__internal_670292be3e10cd67441c57631bf8a1efb4eac2a82e582fd32a7149d559a783d4->leave($__internal_670292be3e10cd67441c57631bf8a1efb4eac2a82e582fd32a7149d559a783d4_prof);

    }

    // line 127
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_08161ebb9a37532101104468f2f2bbe97c658a4ff1358c460446f92f65f2ee87 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08161ebb9a37532101104468f2f2bbe97c658a4ff1358c460446f92f65f2ee87->enter($__internal_08161ebb9a37532101104468f2f2bbe97c658a4ff1358c460446f92f65f2ee87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8a6eefd752fadd7a72d0c551bbe378372b2ee49144fde95d3ab373f4f0e3140d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a6eefd752fadd7a72d0c551bbe378372b2ee49144fde95d3ab373f4f0e3140d->enter($__internal_8a6eefd752fadd7a72d0c551bbe378372b2ee49144fde95d3ab373f4f0e3140d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_8a6eefd752fadd7a72d0c551bbe378372b2ee49144fde95d3ab373f4f0e3140d->leave($__internal_8a6eefd752fadd7a72d0c551bbe378372b2ee49144fde95d3ab373f4f0e3140d_prof);

        
        $__internal_08161ebb9a37532101104468f2f2bbe97c658a4ff1358c460446f92f65f2ee87->leave($__internal_08161ebb9a37532101104468f2f2bbe97c658a4ff1358c460446f92f65f2ee87_prof);

    }

    // line 137
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_17660666f32fc5f0dceca2a51750ab17528d8a56d83fb86ebefdcbf2aba2ce82 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17660666f32fc5f0dceca2a51750ab17528d8a56d83fb86ebefdcbf2aba2ce82->enter($__internal_17660666f32fc5f0dceca2a51750ab17528d8a56d83fb86ebefdcbf2aba2ce82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_f286e717779f9d3793eb2b665b46a477b07a3f70595bb9bb660c1454276717a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f286e717779f9d3793eb2b665b46a477b07a3f70595bb9bb660c1454276717a2->enter($__internal_f286e717779f9d3793eb2b665b46a477b07a3f70595bb9bb660c1454276717a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_f286e717779f9d3793eb2b665b46a477b07a3f70595bb9bb660c1454276717a2->leave($__internal_f286e717779f9d3793eb2b665b46a477b07a3f70595bb9bb660c1454276717a2_prof);

        
        $__internal_17660666f32fc5f0dceca2a51750ab17528d8a56d83fb86ebefdcbf2aba2ce82->leave($__internal_17660666f32fc5f0dceca2a51750ab17528d8a56d83fb86ebefdcbf2aba2ce82_prof);

    }

    // line 165
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_e876d32714ed9897b77a4cdfbadf7b30ca8db846195e5f8c830302c30b7ff773 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e876d32714ed9897b77a4cdfbadf7b30ca8db846195e5f8c830302c30b7ff773->enter($__internal_e876d32714ed9897b77a4cdfbadf7b30ca8db846195e5f8c830302c30b7ff773_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_ba791543d3a5aded8b409906ef83ccec17ed649df89400867dd1cd09271d9f07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba791543d3a5aded8b409906ef83ccec17ed649df89400867dd1cd09271d9f07->enter($__internal_ba791543d3a5aded8b409906ef83ccec17ed649df89400867dd1cd09271d9f07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_ba791543d3a5aded8b409906ef83ccec17ed649df89400867dd1cd09271d9f07->leave($__internal_ba791543d3a5aded8b409906ef83ccec17ed649df89400867dd1cd09271d9f07_prof);

        
        $__internal_e876d32714ed9897b77a4cdfbadf7b30ca8db846195e5f8c830302c30b7ff773->leave($__internal_e876d32714ed9897b77a4cdfbadf7b30ca8db846195e5f8c830302c30b7ff773_prof);

    }

    // line 178
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_f39b27dedfd17df578826209b4906e0a64f0047904ea5dfdec3b8f7be78d703a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f39b27dedfd17df578826209b4906e0a64f0047904ea5dfdec3b8f7be78d703a->enter($__internal_f39b27dedfd17df578826209b4906e0a64f0047904ea5dfdec3b8f7be78d703a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_562b19bde9ab4548fd65e9ab690c576475c0e55e826cfbd76774e24ad58512dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_562b19bde9ab4548fd65e9ab690c576475c0e55e826cfbd76774e24ad58512dc->enter($__internal_562b19bde9ab4548fd65e9ab690c576475c0e55e826cfbd76774e24ad58512dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_562b19bde9ab4548fd65e9ab690c576475c0e55e826cfbd76774e24ad58512dc->leave($__internal_562b19bde9ab4548fd65e9ab690c576475c0e55e826cfbd76774e24ad58512dc_prof);

        
        $__internal_f39b27dedfd17df578826209b4906e0a64f0047904ea5dfdec3b8f7be78d703a->leave($__internal_f39b27dedfd17df578826209b4906e0a64f0047904ea5dfdec3b8f7be78d703a_prof);

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
