<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_227b2fb1a1c4f80e88314314b8e50416e3c66fc6f5cbf5d3a5ac4f1e58d5daa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c570fee19daff428d32d9c56ffc1825e25afaa9fe484446d3f0fbd5d0ab3fcce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c570fee19daff428d32d9c56ffc1825e25afaa9fe484446d3f0fbd5d0ab3fcce->enter($__internal_c570fee19daff428d32d9c56ffc1825e25afaa9fe484446d3f0fbd5d0ab3fcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_e75dee53ab1c4b30cc8dd323135102414efbf37f454b8e608e30cd9c9d0adfbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e75dee53ab1c4b30cc8dd323135102414efbf37f454b8e608e30cd9c9d0adfbd->enter($__internal_e75dee53ab1c4b30cc8dd323135102414efbf37f454b8e608e30cd9c9d0adfbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('date_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('time_widget', $context, $blocks);
        // line 83
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 145
        echo "
";
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('choice_label', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('radio_label', $context, $blocks);
        // line 161
        echo "
";
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('button_row', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('choice_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('date_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('time_row', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('datetime_row', $context, $blocks);
        
        $__internal_c570fee19daff428d32d9c56ffc1825e25afaa9fe484446d3f0fbd5d0ab3fcce->leave($__internal_c570fee19daff428d32d9c56ffc1825e25afaa9fe484446d3f0fbd5d0ab3fcce_prof);

        
        $__internal_e75dee53ab1c4b30cc8dd323135102414efbf37f454b8e608e30cd9c9d0adfbd->leave($__internal_e75dee53ab1c4b30cc8dd323135102414efbf37f454b8e608e30cd9c9d0adfbd_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_2b9a211ee0c59cc3214fc89fdd49fc69a2445ad9e61504ad1fd68bdf9138e2b6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b9a211ee0c59cc3214fc89fdd49fc69a2445ad9e61504ad1fd68bdf9138e2b6->enter($__internal_2b9a211ee0c59cc3214fc89fdd49fc69a2445ad9e61504ad1fd68bdf9138e2b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_de431a60b63a01ed773f15214e660cc73faef62899340edcf6ef879b49b1be59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de431a60b63a01ed773f15214e660cc73faef62899340edcf6ef879b49b1be59->enter($__internal_de431a60b63a01ed773f15214e660cc73faef62899340edcf6ef879b49b1be59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_de431a60b63a01ed773f15214e660cc73faef62899340edcf6ef879b49b1be59->leave($__internal_de431a60b63a01ed773f15214e660cc73faef62899340edcf6ef879b49b1be59_prof);

        
        $__internal_2b9a211ee0c59cc3214fc89fdd49fc69a2445ad9e61504ad1fd68bdf9138e2b6->leave($__internal_2b9a211ee0c59cc3214fc89fdd49fc69a2445ad9e61504ad1fd68bdf9138e2b6_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_14f9d6303e1adcedf7bdce817a54491bec79e659217bbdf36dbf589c7a896f00 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f9d6303e1adcedf7bdce817a54491bec79e659217bbdf36dbf589c7a896f00->enter($__internal_14f9d6303e1adcedf7bdce817a54491bec79e659217bbdf36dbf589c7a896f00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_23f1289b249a05fe38249dc001c3332c299574e9f65e240e9495232f8f88f3a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23f1289b249a05fe38249dc001c3332c299574e9f65e240e9495232f8f88f3a8->enter($__internal_23f1289b249a05fe38249dc001c3332c299574e9f65e240e9495232f8f88f3a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_26397c8cd25d0408b654aa9bb6a27911870871758064babc55e910b039a93684 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_4dcc01c1478da7d8744a6b308e86293444726fdff55977cb93c9a980a2b115cd = "{{") && ('' === $__internal_4dcc01c1478da7d8744a6b308e86293444726fdff55977cb93c9a980a2b115cd || 0 === strpos($__internal_26397c8cd25d0408b654aa9bb6a27911870871758064babc55e910b039a93684, $__internal_4dcc01c1478da7d8744a6b308e86293444726fdff55977cb93c9a980a2b115cd)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_2d9d43f9d4e7f4a5ca6004ea2b785d11977cebc7084a83ff4fa786b75033b4ac = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_4d21de2759e3838d3b602534db1f826a937dccb616c8235129fecba538c5faab = "}}") && ('' === $__internal_4d21de2759e3838d3b602534db1f826a937dccb616c8235129fecba538c5faab || $__internal_4d21de2759e3838d3b602534db1f826a937dccb616c8235129fecba538c5faab === substr($__internal_2d9d43f9d4e7f4a5ca6004ea2b785d11977cebc7084a83ff4fa786b75033b4ac, -strlen($__internal_4d21de2759e3838d3b602534db1f826a937dccb616c8235129fecba538c5faab))));
        // line 13
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter(($context["group_class"] ?? $this->getContext($context, "group_class")), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_23f1289b249a05fe38249dc001c3332c299574e9f65e240e9495232f8f88f3a8->leave($__internal_23f1289b249a05fe38249dc001c3332c299574e9f65e240e9495232f8f88f3a8_prof);

        
        $__internal_14f9d6303e1adcedf7bdce817a54491bec79e659217bbdf36dbf589c7a896f00->leave($__internal_14f9d6303e1adcedf7bdce817a54491bec79e659217bbdf36dbf589c7a896f00_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_d197386f5e0f1f300bca069e55e6f4429b132722018dbb2c16da08ce5ff86df2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d197386f5e0f1f300bca069e55e6f4429b132722018dbb2c16da08ce5ff86df2->enter($__internal_d197386f5e0f1f300bca069e55e6f4429b132722018dbb2c16da08ce5ff86df2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_ffac120ddd2fc27a6d6945187ed21384ad9160387b2e6247ba8875b8944cbc58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffac120ddd2fc27a6d6945187ed21384ad9160387b2e6247ba8875b8944cbc58->enter($__internal_ffac120ddd2fc27a6d6945187ed21384ad9160387b2e6247ba8875b8944cbc58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_ffac120ddd2fc27a6d6945187ed21384ad9160387b2e6247ba8875b8944cbc58->leave($__internal_ffac120ddd2fc27a6d6945187ed21384ad9160387b2e6247ba8875b8944cbc58_prof);

        
        $__internal_d197386f5e0f1f300bca069e55e6f4429b132722018dbb2c16da08ce5ff86df2->leave($__internal_d197386f5e0f1f300bca069e55e6f4429b132722018dbb2c16da08ce5ff86df2_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_09127e050609069f18a65ddbf1049489c7b85099a29de0daac1d9558cbde6a3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09127e050609069f18a65ddbf1049489c7b85099a29de0daac1d9558cbde6a3f->enter($__internal_09127e050609069f18a65ddbf1049489c7b85099a29de0daac1d9558cbde6a3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_de77a4e531cfd77fdc4b06cef6aed3155e2872050c0fbfd9d23e2d22d8d31a24 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de77a4e531cfd77fdc4b06cef6aed3155e2872050c0fbfd9d23e2d22d8d31a24->enter($__internal_de77a4e531cfd77fdc4b06cef6aed3155e2872050c0fbfd9d23e2d22d8d31a24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 36
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 45
            echo "</div>";
        }
        
        $__internal_de77a4e531cfd77fdc4b06cef6aed3155e2872050c0fbfd9d23e2d22d8d31a24->leave($__internal_de77a4e531cfd77fdc4b06cef6aed3155e2872050c0fbfd9d23e2d22d8d31a24_prof);

        
        $__internal_09127e050609069f18a65ddbf1049489c7b85099a29de0daac1d9558cbde6a3f->leave($__internal_09127e050609069f18a65ddbf1049489c7b85099a29de0daac1d9558cbde6a3f_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_cdc9cb899052ab76feebe4a7698b38c348c1fde0918192be5a2c6cba6b5e0461 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdc9cb899052ab76feebe4a7698b38c348c1fde0918192be5a2c6cba6b5e0461->enter($__internal_cdc9cb899052ab76feebe4a7698b38c348c1fde0918192be5a2c6cba6b5e0461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_a9ec0ab779a206d604440288d26086c544d3097d71a57f5603010aec32824eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ec0ab779a206d604440288d26086c544d3097d71a57f5603010aec32824eff->enter($__internal_a9ec0ab779a206d604440288d26086c544d3097d71a57f5603010aec32824eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 50
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 51
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 54
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 55
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 57
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 58
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 59
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 60
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 62
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 63
                echo "</div>";
            }
        }
        
        $__internal_a9ec0ab779a206d604440288d26086c544d3097d71a57f5603010aec32824eff->leave($__internal_a9ec0ab779a206d604440288d26086c544d3097d71a57f5603010aec32824eff_prof);

        
        $__internal_cdc9cb899052ab76feebe4a7698b38c348c1fde0918192be5a2c6cba6b5e0461->leave($__internal_cdc9cb899052ab76feebe4a7698b38c348c1fde0918192be5a2c6cba6b5e0461_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_fb9537bf91e072ccad66d73925bb60e481a52c29024ec860bad029586b349823 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb9537bf91e072ccad66d73925bb60e481a52c29024ec860bad029586b349823->enter($__internal_fb9537bf91e072ccad66d73925bb60e481a52c29024ec860bad029586b349823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_3eab089c111da2355956a0bc4f753e5f84adfaff2462d0f0cba5c383d89a46b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eab089c111da2355956a0bc4f753e5f84adfaff2462d0f0cba5c383d89a46b0->enter($__internal_3eab089c111da2355956a0bc4f753e5f84adfaff2462d0f0cba5c383d89a46b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 69
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 70
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 72
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 73
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 74
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 77
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 78
                echo "</div>";
            }
        }
        
        $__internal_3eab089c111da2355956a0bc4f753e5f84adfaff2462d0f0cba5c383d89a46b0->leave($__internal_3eab089c111da2355956a0bc4f753e5f84adfaff2462d0f0cba5c383d89a46b0_prof);

        
        $__internal_fb9537bf91e072ccad66d73925bb60e481a52c29024ec860bad029586b349823->leave($__internal_fb9537bf91e072ccad66d73925bb60e481a52c29024ec860bad029586b349823_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_b4499763134290e74358d6c1bc7185a93d0daa7db08c25ad97e10df5bd25ab9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4499763134290e74358d6c1bc7185a93d0daa7db08c25ad97e10df5bd25ab9a->enter($__internal_b4499763134290e74358d6c1bc7185a93d0daa7db08c25ad97e10df5bd25ab9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_477604ee6b543e31f657548dd29c7d78f36602480f0b7b0f7369b8fb3de90343 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_477604ee6b543e31f657548dd29c7d78f36602480f0b7b0f7369b8fb3de90343->enter($__internal_477604ee6b543e31f657548dd29c7d78f36602480f0b7b0f7369b8fb3de90343_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 84
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 85
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 87
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 88
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 90
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 91
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 94
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 95
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 96
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 97
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 98
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 99
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 100
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 101
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 105
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 106
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 107
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 108
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 109
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 110
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 111
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 112
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 116
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 117
            echo "</div>";
        }
        
        $__internal_477604ee6b543e31f657548dd29c7d78f36602480f0b7b0f7369b8fb3de90343->leave($__internal_477604ee6b543e31f657548dd29c7d78f36602480f0b7b0f7369b8fb3de90343_prof);

        
        $__internal_b4499763134290e74358d6c1bc7185a93d0daa7db08c25ad97e10df5bd25ab9a->leave($__internal_b4499763134290e74358d6c1bc7185a93d0daa7db08c25ad97e10df5bd25ab9a_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_426506228156c4ec454ef72f741f2541e77f45fcd7ad9c1811e512024d4eaca6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_426506228156c4ec454ef72f741f2541e77f45fcd7ad9c1811e512024d4eaca6->enter($__internal_426506228156c4ec454ef72f741f2541e77f45fcd7ad9c1811e512024d4eaca6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_25c2819e65e52fd5f17d9a534b81059a972780fbebc0c70f5e58b98937234d12 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25c2819e65e52fd5f17d9a534b81059a972780fbebc0c70f5e58b98937234d12->enter($__internal_25c2819e65e52fd5f17d9a534b81059a972780fbebc0c70f5e58b98937234d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_25c2819e65e52fd5f17d9a534b81059a972780fbebc0c70f5e58b98937234d12->leave($__internal_25c2819e65e52fd5f17d9a534b81059a972780fbebc0c70f5e58b98937234d12_prof);

        
        $__internal_426506228156c4ec454ef72f741f2541e77f45fcd7ad9c1811e512024d4eaca6->leave($__internal_426506228156c4ec454ef72f741f2541e77f45fcd7ad9c1811e512024d4eaca6_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_45da07767dcf989f75081d59cd33331c4609bdb8ad5f4aab686c8f1598013c8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45da07767dcf989f75081d59cd33331c4609bdb8ad5f4aab686c8f1598013c8c->enter($__internal_45da07767dcf989f75081d59cd33331c4609bdb8ad5f4aab686c8f1598013c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_89a6664c674e76e02fda2ff7635ee0be525d9c5488cd658bcd6d66aebce4c5f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89a6664c674e76e02fda2ff7635ee0be525d9c5488cd658bcd6d66aebce4c5f3->enter($__internal_89a6664c674e76e02fda2ff7635ee0be525d9c5488cd658bcd6d66aebce4c5f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 127
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 129
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 130
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 131
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 135
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 138
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 139
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "</div>";
        }
        
        $__internal_89a6664c674e76e02fda2ff7635ee0be525d9c5488cd658bcd6d66aebce4c5f3->leave($__internal_89a6664c674e76e02fda2ff7635ee0be525d9c5488cd658bcd6d66aebce4c5f3_prof);

        
        $__internal_45da07767dcf989f75081d59cd33331c4609bdb8ad5f4aab686c8f1598013c8c->leave($__internal_45da07767dcf989f75081d59cd33331c4609bdb8ad5f4aab686c8f1598013c8c_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_0a9f292bc7735050d0d26d0408cbd964c021810e326e04676c54656e9f8f390f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9f292bc7735050d0d26d0408cbd964c021810e326e04676c54656e9f8f390f->enter($__internal_0a9f292bc7735050d0d26d0408cbd964c021810e326e04676c54656e9f8f390f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6f2d959219cf7439a494329e3b6b6ef35780ff8a3cc10d5cec61afccbe482e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2d959219cf7439a494329e3b6b6ef35780ff8a3cc10d5cec61afccbe482e99->enter($__internal_6f2d959219cf7439a494329e3b6b6ef35780ff8a3cc10d5cec61afccbe482e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6f2d959219cf7439a494329e3b6b6ef35780ff8a3cc10d5cec61afccbe482e99->leave($__internal_6f2d959219cf7439a494329e3b6b6ef35780ff8a3cc10d5cec61afccbe482e99_prof);

        
        $__internal_0a9f292bc7735050d0d26d0408cbd964c021810e326e04676c54656e9f8f390f->leave($__internal_0a9f292bc7735050d0d26d0408cbd964c021810e326e04676c54656e9f8f390f_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_d0984cb551750311a49327bbe2f4c8f1254724819f04f881aa978937cfe0ae14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0984cb551750311a49327bbe2f4c8f1254724819f04f881aa978937cfe0ae14->enter($__internal_d0984cb551750311a49327bbe2f4c8f1254724819f04f881aa978937cfe0ae14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_e13dd3b20e672c12e33ef19351360a991dbdc10be10278eabeed85245a6f82b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e13dd3b20e672c12e33ef19351360a991dbdc10be10278eabeed85245a6f82b0->enter($__internal_e13dd3b20e672c12e33ef19351360a991dbdc10be10278eabeed85245a6f82b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e13dd3b20e672c12e33ef19351360a991dbdc10be10278eabeed85245a6f82b0->leave($__internal_e13dd3b20e672c12e33ef19351360a991dbdc10be10278eabeed85245a6f82b0_prof);

        
        $__internal_d0984cb551750311a49327bbe2f4c8f1254724819f04f881aa978937cfe0ae14->leave($__internal_d0984cb551750311a49327bbe2f4c8f1254724819f04f881aa978937cfe0ae14_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_4bbf61639aaf6b3596d60e31ef71cb193da96bcd4e61660741fd8a3c01cab886 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bbf61639aaf6b3596d60e31ef71cb193da96bcd4e61660741fd8a3c01cab886->enter($__internal_4bbf61639aaf6b3596d60e31ef71cb193da96bcd4e61660741fd8a3c01cab886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_405b9bc6d09688413018796ac7c1ddeca5cd5121c0aed7de9b3d987d3ac6989a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_405b9bc6d09688413018796ac7c1ddeca5cd5121c0aed7de9b3d987d3ac6989a->enter($__internal_405b9bc6d09688413018796ac7c1ddeca5cd5121c0aed7de9b3d987d3ac6989a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_405b9bc6d09688413018796ac7c1ddeca5cd5121c0aed7de9b3d987d3ac6989a->leave($__internal_405b9bc6d09688413018796ac7c1ddeca5cd5121c0aed7de9b3d987d3ac6989a_prof);

        
        $__internal_4bbf61639aaf6b3596d60e31ef71cb193da96bcd4e61660741fd8a3c01cab886->leave($__internal_4bbf61639aaf6b3596d60e31ef71cb193da96bcd4e61660741fd8a3c01cab886_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_35f06e36faecffed0290a83abd541c8e660066ac84730909b14cd92ad7b69f4e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f06e36faecffed0290a83abd541c8e660066ac84730909b14cd92ad7b69f4e->enter($__internal_35f06e36faecffed0290a83abd541c8e660066ac84730909b14cd92ad7b69f4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0ac29ee49f790c391be106b101c1c97bc0528a79d191023501221417568d2098 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac29ee49f790c391be106b101c1c97bc0528a79d191023501221417568d2098->enter($__internal_0ac29ee49f790c391be106b101c1c97bc0528a79d191023501221417568d2098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_0ac29ee49f790c391be106b101c1c97bc0528a79d191023501221417568d2098->leave($__internal_0ac29ee49f790c391be106b101c1c97bc0528a79d191023501221417568d2098_prof);

        
        $__internal_35f06e36faecffed0290a83abd541c8e660066ac84730909b14cd92ad7b69f4e->leave($__internal_35f06e36faecffed0290a83abd541c8e660066ac84730909b14cd92ad7b69f4e_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_7a53ff1a63ab4d8b41593e9ec8de1cbe3b26cfc2ecf6708ddaf5138069dfa1c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a53ff1a63ab4d8b41593e9ec8de1cbe3b26cfc2ecf6708ddaf5138069dfa1c0->enter($__internal_7a53ff1a63ab4d8b41593e9ec8de1cbe3b26cfc2ecf6708ddaf5138069dfa1c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ae0bcac27c3a6131955ed83e160ac99f10d992c772910e810c36c7d0302d4122 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae0bcac27c3a6131955ed83e160ac99f10d992c772910e810c36c7d0302d4122->enter($__internal_ae0bcac27c3a6131955ed83e160ac99f10d992c772910e810c36c7d0302d4122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ae0bcac27c3a6131955ed83e160ac99f10d992c772910e810c36c7d0302d4122->leave($__internal_ae0bcac27c3a6131955ed83e160ac99f10d992c772910e810c36c7d0302d4122_prof);

        
        $__internal_7a53ff1a63ab4d8b41593e9ec8de1cbe3b26cfc2ecf6708ddaf5138069dfa1c0->leave($__internal_7a53ff1a63ab4d8b41593e9ec8de1cbe3b26cfc2ecf6708ddaf5138069dfa1c0_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_0a903676e3f3b054656ddcb59cd10750033756145c627b96621bfdcf2d2040b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a903676e3f3b054656ddcb59cd10750033756145c627b96621bfdcf2d2040b8->enter($__internal_0a903676e3f3b054656ddcb59cd10750033756145c627b96621bfdcf2d2040b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_2333fcad67510a2f2c33997fa5ce3376887ebe3fea4c35b024a585f968dbddd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2333fcad67510a2f2c33997fa5ce3376887ebe3fea4c35b024a585f968dbddd8->enter($__internal_2333fcad67510a2f2c33997fa5ce3376887ebe3fea4c35b024a585f968dbddd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2333fcad67510a2f2c33997fa5ce3376887ebe3fea4c35b024a585f968dbddd8->leave($__internal_2333fcad67510a2f2c33997fa5ce3376887ebe3fea4c35b024a585f968dbddd8_prof);

        
        $__internal_0a903676e3f3b054656ddcb59cd10750033756145c627b96621bfdcf2d2040b8->leave($__internal_0a903676e3f3b054656ddcb59cd10750033756145c627b96621bfdcf2d2040b8_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_ff6b6a19b8ab2793c0044f0810e2256f12f2ff60c972397955398d60d605571e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff6b6a19b8ab2793c0044f0810e2256f12f2ff60c972397955398d60d605571e->enter($__internal_ff6b6a19b8ab2793c0044f0810e2256f12f2ff60c972397955398d60d605571e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_23edc72dc0a13ff1f59bd981b8fa46efc5887d7490770fb88474655c9017f714 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23edc72dc0a13ff1f59bd981b8fa46efc5887d7490770fb88474655c9017f714->enter($__internal_23edc72dc0a13ff1f59bd981b8fa46efc5887d7490770fb88474655c9017f714_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_23edc72dc0a13ff1f59bd981b8fa46efc5887d7490770fb88474655c9017f714->leave($__internal_23edc72dc0a13ff1f59bd981b8fa46efc5887d7490770fb88474655c9017f714_prof);

        
        $__internal_ff6b6a19b8ab2793c0044f0810e2256f12f2ff60c972397955398d60d605571e->leave($__internal_ff6b6a19b8ab2793c0044f0810e2256f12f2ff60c972397955398d60d605571e_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_d33d2a0e7bfa325ba9c17ba9976bf50e0104537fc4ffeee0bbedceff001d9fea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d33d2a0e7bfa325ba9c17ba9976bf50e0104537fc4ffeee0bbedceff001d9fea->enter($__internal_d33d2a0e7bfa325ba9c17ba9976bf50e0104537fc4ffeee0bbedceff001d9fea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_a550e15cb28a82b91d6eec8923e9c47e0ca74dedab9b72b31aecba62034e00b1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a550e15cb28a82b91d6eec8923e9c47e0ca74dedab9b72b31aecba62034e00b1->enter($__internal_a550e15cb28a82b91d6eec8923e9c47e0ca74dedab9b72b31aecba62034e00b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a550e15cb28a82b91d6eec8923e9c47e0ca74dedab9b72b31aecba62034e00b1->leave($__internal_a550e15cb28a82b91d6eec8923e9c47e0ca74dedab9b72b31aecba62034e00b1_prof);

        
        $__internal_d33d2a0e7bfa325ba9c17ba9976bf50e0104537fc4ffeee0bbedceff001d9fea->leave($__internal_d33d2a0e7bfa325ba9c17ba9976bf50e0104537fc4ffeee0bbedceff001d9fea_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  745 => 187,  743 => 186,  734 => 185,  724 => 182,  722 => 181,  713 => 180,  703 => 177,  701 => 176,  692 => 175,  682 => 172,  680 => 171,  671 => 170,  661 => 167,  659 => 166,  657 => 165,  648 => 164,  638 => 159,  629 => 158,  619 => 155,  610 => 154,  600 => 151,  598 => 150,  589 => 148,  578 => 142,  572 => 139,  571 => 138,  570 => 137,  566 => 136,  562 => 135,  555 => 131,  554 => 130,  553 => 129,  549 => 128,  547 => 127,  538 => 126,  528 => 123,  526 => 122,  517 => 121,  506 => 117,  502 => 116,  497 => 112,  491 => 111,  485 => 110,  479 => 109,  473 => 108,  467 => 107,  461 => 106,  455 => 105,  450 => 101,  444 => 100,  438 => 99,  432 => 98,  426 => 97,  420 => 96,  414 => 95,  408 => 94,  403 => 91,  400 => 90,  398 => 89,  394 => 88,  392 => 87,  389 => 85,  387 => 84,  378 => 83,  366 => 78,  364 => 77,  354 => 76,  349 => 74,  347 => 73,  345 => 72,  342 => 70,  340 => 69,  331 => 68,  319 => 63,  317 => 62,  315 => 60,  314 => 59,  313 => 58,  312 => 57,  307 => 55,  305 => 54,  303 => 53,  300 => 51,  298 => 50,  289 => 49,  278 => 45,  276 => 44,  274 => 43,  272 => 42,  270 => 41,  266 => 40,  264 => 39,  261 => 37,  259 => 36,  250 => 35,  239 => 31,  237 => 30,  235 => 29,  226 => 28,  215 => 24,  211 => 22,  205 => 20,  203 => 19,  201 => 18,  195 => 16,  193 => 15,  188 => 14,  185 => 13,  182 => 12,  180 => 11,  171 => 10,  161 => 7,  159 => 6,  150 => 5,  140 => 185,  137 => 184,  135 => 180,  132 => 179,  130 => 175,  127 => 174,  125 => 170,  122 => 169,  120 => 164,  117 => 163,  114 => 161,  112 => 158,  109 => 157,  107 => 154,  104 => 153,  102 => 148,  99 => 147,  96 => 145,  94 => 126,  91 => 125,  89 => 121,  87 => 83,  85 => 68,  82 => 67,  80 => 49,  77 => 48,  75 => 35,  72 => 34,  70 => 28,  67 => 27,  65 => 10,  62 => 9,  60 => 5,  57 => 4,  54 => 2,  14 => 1,);
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

{# Widgets #}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group{{ group_class|default('') }}\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {%- if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {%- if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {{- parent() -}}
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {%- if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {%- endfor -%}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{# Rows #}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock choice_row %}

{% block date_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock date_row %}

{% block time_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock time_row %}

{% block datetime_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock datetime_row %}
", "bootstrap_base_layout.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_base_layout.html.twig");
    }
}
