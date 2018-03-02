<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_ab405d075226a12bd25337e39532cee7652324a2fbb7b48236dd0aa5e50a3bbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f8f6635b5dd3985077c90b5555deef02c5549916d0b739afec2a54b6f6e40d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f8f6635b5dd3985077c90b5555deef02c5549916d0b739afec2a54b6f6e40d4->enter($__internal_5f8f6635b5dd3985077c90b5555deef02c5549916d0b739afec2a54b6f6e40d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_f19e7d80ef67d8a09d8676e0bdf113c32373d3524884d15b13ad9635fb2b3e63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f19e7d80ef67d8a09d8676e0bdf113c32373d3524884d15b13ad9635fb2b3e63->enter($__internal_f19e7d80ef67d8a09d8676e0bdf113c32373d3524884d15b13ad9635fb2b3e63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5f8f6635b5dd3985077c90b5555deef02c5549916d0b739afec2a54b6f6e40d4->leave($__internal_5f8f6635b5dd3985077c90b5555deef02c5549916d0b739afec2a54b6f6e40d4_prof);

        
        $__internal_f19e7d80ef67d8a09d8676e0bdf113c32373d3524884d15b13ad9635fb2b3e63->leave($__internal_f19e7d80ef67d8a09d8676e0bdf113c32373d3524884d15b13ad9635fb2b3e63_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e25320e4e597423c1276222c3210c6b86f929c140bce7d69e8ebc061b593f592 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e25320e4e597423c1276222c3210c6b86f929c140bce7d69e8ebc061b593f592->enter($__internal_e25320e4e597423c1276222c3210c6b86f929c140bce7d69e8ebc061b593f592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_1d4f660bfaf4335e1a380438dc9d51e33139317a5fe821f885b64ce0030e69b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d4f660bfaf4335e1a380438dc9d51e33139317a5fe821f885b64ce0030e69b5->enter($__internal_1d4f660bfaf4335e1a380438dc9d51e33139317a5fe821f885b64ce0030e69b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_1d4f660bfaf4335e1a380438dc9d51e33139317a5fe821f885b64ce0030e69b5->leave($__internal_1d4f660bfaf4335e1a380438dc9d51e33139317a5fe821f885b64ce0030e69b5_prof);

        
        $__internal_e25320e4e597423c1276222c3210c6b86f929c140bce7d69e8ebc061b593f592->leave($__internal_e25320e4e597423c1276222c3210c6b86f929c140bce7d69e8ebc061b593f592_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_8ea2855c435b77c469d4f2fdf2c78487afb1aff638f474e41af03ed699b9d8ca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea2855c435b77c469d4f2fdf2c78487afb1aff638f474e41af03ed699b9d8ca->enter($__internal_8ea2855c435b77c469d4f2fdf2c78487afb1aff638f474e41af03ed699b9d8ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_bb5f30da090eff27e8add905e115685ec63de5a7c86d33205657cad4a475b501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb5f30da090eff27e8add905e115685ec63de5a7c86d33205657cad4a475b501->enter($__internal_bb5f30da090eff27e8add905e115685ec63de5a7c86d33205657cad4a475b501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_bb5f30da090eff27e8add905e115685ec63de5a7c86d33205657cad4a475b501->leave($__internal_bb5f30da090eff27e8add905e115685ec63de5a7c86d33205657cad4a475b501_prof);

        
        $__internal_8ea2855c435b77c469d4f2fdf2c78487afb1aff638f474e41af03ed699b9d8ca->leave($__internal_8ea2855c435b77c469d4f2fdf2c78487afb1aff638f474e41af03ed699b9d8ca_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_ff7241934ae3cf5bfa7283f81fed9183233641bc07d04304362d220900327063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff7241934ae3cf5bfa7283f81fed9183233641bc07d04304362d220900327063->enter($__internal_ff7241934ae3cf5bfa7283f81fed9183233641bc07d04304362d220900327063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_cf02287eb6a3f85d7bbc5bda206f050fa46df6bedfb87150b01b82a694b0df22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf02287eb6a3f85d7bbc5bda206f050fa46df6bedfb87150b01b82a694b0df22->enter($__internal_cf02287eb6a3f85d7bbc5bda206f050fa46df6bedfb87150b01b82a694b0df22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_cf02287eb6a3f85d7bbc5bda206f050fa46df6bedfb87150b01b82a694b0df22->leave($__internal_cf02287eb6a3f85d7bbc5bda206f050fa46df6bedfb87150b01b82a694b0df22_prof);

        
        $__internal_ff7241934ae3cf5bfa7283f81fed9183233641bc07d04304362d220900327063->leave($__internal_ff7241934ae3cf5bfa7283f81fed9183233641bc07d04304362d220900327063_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_3f78d31e63b6bf831f9c5e536187c1d92dfffdcf49e4befa162feaeddedb77e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3f78d31e63b6bf831f9c5e536187c1d92dfffdcf49e4befa162feaeddedb77e2->enter($__internal_3f78d31e63b6bf831f9c5e536187c1d92dfffdcf49e4befa162feaeddedb77e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_1720d11aad413a21f09f12dacf7cc1c2385f33b5baff931fa71e18320916b635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1720d11aad413a21f09f12dacf7cc1c2385f33b5baff931fa71e18320916b635->enter($__internal_1720d11aad413a21f09f12dacf7cc1c2385f33b5baff931fa71e18320916b635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_1720d11aad413a21f09f12dacf7cc1c2385f33b5baff931fa71e18320916b635->leave($__internal_1720d11aad413a21f09f12dacf7cc1c2385f33b5baff931fa71e18320916b635_prof);

        
        $__internal_3f78d31e63b6bf831f9c5e536187c1d92dfffdcf49e4befa162feaeddedb77e2->leave($__internal_3f78d31e63b6bf831f9c5e536187c1d92dfffdcf49e4befa162feaeddedb77e2_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_e5f6cddbbe47de1712cacd28a1fd76e1818bec8b0586a2c4dd1324ad0e989ee9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5f6cddbbe47de1712cacd28a1fd76e1818bec8b0586a2c4dd1324ad0e989ee9->enter($__internal_e5f6cddbbe47de1712cacd28a1fd76e1818bec8b0586a2c4dd1324ad0e989ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_0247b7b6ef1464fd8f603e25e6c3c31f912149f01f73cd0dd8853f49915b8e67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0247b7b6ef1464fd8f603e25e6c3c31f912149f01f73cd0dd8853f49915b8e67->enter($__internal_0247b7b6ef1464fd8f603e25e6c3c31f912149f01f73cd0dd8853f49915b8e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_0247b7b6ef1464fd8f603e25e6c3c31f912149f01f73cd0dd8853f49915b8e67->leave($__internal_0247b7b6ef1464fd8f603e25e6c3c31f912149f01f73cd0dd8853f49915b8e67_prof);

        
        $__internal_e5f6cddbbe47de1712cacd28a1fd76e1818bec8b0586a2c4dd1324ad0e989ee9->leave($__internal_e5f6cddbbe47de1712cacd28a1fd76e1818bec8b0586a2c4dd1324ad0e989ee9_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_cf8c2469174d2e703de5bbe88afa7316d17ff00575ff91cf486c6ea7b1d003d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf8c2469174d2e703de5bbe88afa7316d17ff00575ff91cf486c6ea7b1d003d8->enter($__internal_cf8c2469174d2e703de5bbe88afa7316d17ff00575ff91cf486c6ea7b1d003d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_106b2fbf54391b7d07c17919c25fe1c41d172bde519bd1cd704818cb9105d503 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_106b2fbf54391b7d07c17919c25fe1c41d172bde519bd1cd704818cb9105d503->enter($__internal_106b2fbf54391b7d07c17919c25fe1c41d172bde519bd1cd704818cb9105d503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_106b2fbf54391b7d07c17919c25fe1c41d172bde519bd1cd704818cb9105d503->leave($__internal_106b2fbf54391b7d07c17919c25fe1c41d172bde519bd1cd704818cb9105d503_prof);

        
        $__internal_cf8c2469174d2e703de5bbe88afa7316d17ff00575ff91cf486c6ea7b1d003d8->leave($__internal_cf8c2469174d2e703de5bbe88afa7316d17ff00575ff91cf486c6ea7b1d003d8_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_4a82254e0893fddb78ad8d6f985a4df8d78f6086b032136e5ca31b974a52913f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a82254e0893fddb78ad8d6f985a4df8d78f6086b032136e5ca31b974a52913f->enter($__internal_4a82254e0893fddb78ad8d6f985a4df8d78f6086b032136e5ca31b974a52913f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_7ab02a565eb90266f2bad6f5723f7d11f0208b286ad198512f09737d94130ef0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ab02a565eb90266f2bad6f5723f7d11f0208b286ad198512f09737d94130ef0->enter($__internal_7ab02a565eb90266f2bad6f5723f7d11f0208b286ad198512f09737d94130ef0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_7ab02a565eb90266f2bad6f5723f7d11f0208b286ad198512f09737d94130ef0->leave($__internal_7ab02a565eb90266f2bad6f5723f7d11f0208b286ad198512f09737d94130ef0_prof);

        
        $__internal_4a82254e0893fddb78ad8d6f985a4df8d78f6086b032136e5ca31b974a52913f->leave($__internal_4a82254e0893fddb78ad8d6f985a4df8d78f6086b032136e5ca31b974a52913f_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_ed863e9f208f44579e5148ecb6987078ba8198ae2456170aa208ad96de70efad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ed863e9f208f44579e5148ecb6987078ba8198ae2456170aa208ad96de70efad->enter($__internal_ed863e9f208f44579e5148ecb6987078ba8198ae2456170aa208ad96de70efad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_b0fe6a255ba8a0032b36f4d1b26f3d92c4d9f01ee56df127a1026642439e305c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0fe6a255ba8a0032b36f4d1b26f3d92c4d9f01ee56df127a1026642439e305c->enter($__internal_b0fe6a255ba8a0032b36f4d1b26f3d92c4d9f01ee56df127a1026642439e305c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_b0fe6a255ba8a0032b36f4d1b26f3d92c4d9f01ee56df127a1026642439e305c->leave($__internal_b0fe6a255ba8a0032b36f4d1b26f3d92c4d9f01ee56df127a1026642439e305c_prof);

        
        $__internal_ed863e9f208f44579e5148ecb6987078ba8198ae2456170aa208ad96de70efad->leave($__internal_ed863e9f208f44579e5148ecb6987078ba8198ae2456170aa208ad96de70efad_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_fd13585074c7e8dd546d63dd47c216b2eed2efdb55592fb9bb546f172d1d4056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fd13585074c7e8dd546d63dd47c216b2eed2efdb55592fb9bb546f172d1d4056->enter($__internal_fd13585074c7e8dd546d63dd47c216b2eed2efdb55592fb9bb546f172d1d4056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_93b17135e8ca6cbf99f1e2b960b6108b6861a398493e097ef5ed271560694883 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93b17135e8ca6cbf99f1e2b960b6108b6861a398493e097ef5ed271560694883->enter($__internal_93b17135e8ca6cbf99f1e2b960b6108b6861a398493e097ef5ed271560694883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_93b17135e8ca6cbf99f1e2b960b6108b6861a398493e097ef5ed271560694883->leave($__internal_93b17135e8ca6cbf99f1e2b960b6108b6861a398493e097ef5ed271560694883_prof);

        
        $__internal_fd13585074c7e8dd546d63dd47c216b2eed2efdb55592fb9bb546f172d1d4056->leave($__internal_fd13585074c7e8dd546d63dd47c216b2eed2efdb55592fb9bb546f172d1d4056_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f97f02fd9c831a314337ead981ec0bc8faaacfce157157a30e83a6b73a8f02b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f97f02fd9c831a314337ead981ec0bc8faaacfce157157a30e83a6b73a8f02b9->enter($__internal_f97f02fd9c831a314337ead981ec0bc8faaacfce157157a30e83a6b73a8f02b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_6330a5c1d1366e0611cda79466497ce854453d8282e252dfe298034900618872 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6330a5c1d1366e0611cda79466497ce854453d8282e252dfe298034900618872->enter($__internal_6330a5c1d1366e0611cda79466497ce854453d8282e252dfe298034900618872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_6330a5c1d1366e0611cda79466497ce854453d8282e252dfe298034900618872->leave($__internal_6330a5c1d1366e0611cda79466497ce854453d8282e252dfe298034900618872_prof);

        
        $__internal_f97f02fd9c831a314337ead981ec0bc8faaacfce157157a30e83a6b73a8f02b9->leave($__internal_f97f02fd9c831a314337ead981ec0bc8faaacfce157157a30e83a6b73a8f02b9_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5797602ac21e3515fa66901f8a22f779cdab113d8e9f57a583b7a63bbc71c8c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5797602ac21e3515fa66901f8a22f779cdab113d8e9f57a583b7a63bbc71c8c5->enter($__internal_5797602ac21e3515fa66901f8a22f779cdab113d8e9f57a583b7a63bbc71c8c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9f6b50ef1fae09c55e542c1d59a92621c3d3a5c72e296cd0addbf95f8b408d0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6b50ef1fae09c55e542c1d59a92621c3d3a5c72e296cd0addbf95f8b408d0e->enter($__internal_9f6b50ef1fae09c55e542c1d59a92621c3d3a5c72e296cd0addbf95f8b408d0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_9f6b50ef1fae09c55e542c1d59a92621c3d3a5c72e296cd0addbf95f8b408d0e->leave($__internal_9f6b50ef1fae09c55e542c1d59a92621c3d3a5c72e296cd0addbf95f8b408d0e_prof);

        
        $__internal_5797602ac21e3515fa66901f8a22f779cdab113d8e9f57a583b7a63bbc71c8c5->leave($__internal_5797602ac21e3515fa66901f8a22f779cdab113d8e9f57a583b7a63bbc71c8c5_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ffa6ea4f99fc8bec717d1e61487017acb4c51f0f39291c3995928aa6e72ea1a9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa6ea4f99fc8bec717d1e61487017acb4c51f0f39291c3995928aa6e72ea1a9->enter($__internal_ffa6ea4f99fc8bec717d1e61487017acb4c51f0f39291c3995928aa6e72ea1a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_949633ec6440397e6b953f2d87c74ed5c5f24407ea3b108248204e322d34e796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949633ec6440397e6b953f2d87c74ed5c5f24407ea3b108248204e322d34e796->enter($__internal_949633ec6440397e6b953f2d87c74ed5c5f24407ea3b108248204e322d34e796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_949633ec6440397e6b953f2d87c74ed5c5f24407ea3b108248204e322d34e796->leave($__internal_949633ec6440397e6b953f2d87c74ed5c5f24407ea3b108248204e322d34e796_prof);

        
        $__internal_ffa6ea4f99fc8bec717d1e61487017acb4c51f0f39291c3995928aa6e72ea1a9->leave($__internal_ffa6ea4f99fc8bec717d1e61487017acb4c51f0f39291c3995928aa6e72ea1a9_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e017625bc863e5d706c61b2fe34e9c3f473dda182cfb7b9c753a76de7646fcff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e017625bc863e5d706c61b2fe34e9c3f473dda182cfb7b9c753a76de7646fcff->enter($__internal_e017625bc863e5d706c61b2fe34e9c3f473dda182cfb7b9c753a76de7646fcff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_17b5f0a2512f3028944a1e07762ca87c08e9b37651ecf77163e81d960f7945d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_17b5f0a2512f3028944a1e07762ca87c08e9b37651ecf77163e81d960f7945d3->enter($__internal_17b5f0a2512f3028944a1e07762ca87c08e9b37651ecf77163e81d960f7945d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_17b5f0a2512f3028944a1e07762ca87c08e9b37651ecf77163e81d960f7945d3->leave($__internal_17b5f0a2512f3028944a1e07762ca87c08e9b37651ecf77163e81d960f7945d3_prof);

        
        $__internal_e017625bc863e5d706c61b2fe34e9c3f473dda182cfb7b9c753a76de7646fcff->leave($__internal_e017625bc863e5d706c61b2fe34e9c3f473dda182cfb7b9c753a76de7646fcff_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_e0c9473fa7c9e0a663dc1b75112aaa799dbe1c4bc36439ced863123e2d9cad8b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0c9473fa7c9e0a663dc1b75112aaa799dbe1c4bc36439ced863123e2d9cad8b->enter($__internal_e0c9473fa7c9e0a663dc1b75112aaa799dbe1c4bc36439ced863123e2d9cad8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_da2fd359da540b6e235fc500f420aa5d84b40ed0b33ed32a0f73d3d2a9ce757c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da2fd359da540b6e235fc500f420aa5d84b40ed0b33ed32a0f73d3d2a9ce757c->enter($__internal_da2fd359da540b6e235fc500f420aa5d84b40ed0b33ed32a0f73d3d2a9ce757c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_da2fd359da540b6e235fc500f420aa5d84b40ed0b33ed32a0f73d3d2a9ce757c->leave($__internal_da2fd359da540b6e235fc500f420aa5d84b40ed0b33ed32a0f73d3d2a9ce757c_prof);

        
        $__internal_e0c9473fa7c9e0a663dc1b75112aaa799dbe1c4bc36439ced863123e2d9cad8b->leave($__internal_e0c9473fa7c9e0a663dc1b75112aaa799dbe1c4bc36439ced863123e2d9cad8b_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_6d80a281466a7dcc01554c1089f157a9e8b149451545583d550ee96849381bf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d80a281466a7dcc01554c1089f157a9e8b149451545583d550ee96849381bf1->enter($__internal_6d80a281466a7dcc01554c1089f157a9e8b149451545583d550ee96849381bf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_6fd6ca5f88ba2fa073cc827f3df0cab3e907075211f200a2992d60f6428db1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6fd6ca5f88ba2fa073cc827f3df0cab3e907075211f200a2992d60f6428db1ee->enter($__internal_6fd6ca5f88ba2fa073cc827f3df0cab3e907075211f200a2992d60f6428db1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_6fd6ca5f88ba2fa073cc827f3df0cab3e907075211f200a2992d60f6428db1ee->leave($__internal_6fd6ca5f88ba2fa073cc827f3df0cab3e907075211f200a2992d60f6428db1ee_prof);

        
        $__internal_6d80a281466a7dcc01554c1089f157a9e8b149451545583d550ee96849381bf1->leave($__internal_6d80a281466a7dcc01554c1089f157a9e8b149451545583d550ee96849381bf1_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_9d51be68c9782ae89fda190ac46a3d8bca043bdf47b42c58a618bd72c37c1743 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d51be68c9782ae89fda190ac46a3d8bca043bdf47b42c58a618bd72c37c1743->enter($__internal_9d51be68c9782ae89fda190ac46a3d8bca043bdf47b42c58a618bd72c37c1743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_8923f753cbcc3c8ae3c06f64190d87c366f8eee633374e7072242ca692bd1e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8923f753cbcc3c8ae3c06f64190d87c366f8eee633374e7072242ca692bd1e45->enter($__internal_8923f753cbcc3c8ae3c06f64190d87c366f8eee633374e7072242ca692bd1e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_8923f753cbcc3c8ae3c06f64190d87c366f8eee633374e7072242ca692bd1e45->leave($__internal_8923f753cbcc3c8ae3c06f64190d87c366f8eee633374e7072242ca692bd1e45_prof);

        
        $__internal_9d51be68c9782ae89fda190ac46a3d8bca043bdf47b42c58a618bd72c37c1743->leave($__internal_9d51be68c9782ae89fda190ac46a3d8bca043bdf47b42c58a618bd72c37c1743_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_141f3905bbc53470f45a75335bd8ddea21a89a05e0245c0f9c184ebaf849e91e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_141f3905bbc53470f45a75335bd8ddea21a89a05e0245c0f9c184ebaf849e91e->enter($__internal_141f3905bbc53470f45a75335bd8ddea21a89a05e0245c0f9c184ebaf849e91e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_a3906c3645f7849f8e59b286e2d0e098d8efb46af9b9f414787a1483123e2cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a3906c3645f7849f8e59b286e2d0e098d8efb46af9b9f414787a1483123e2cd5->enter($__internal_a3906c3645f7849f8e59b286e2d0e098d8efb46af9b9f414787a1483123e2cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
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
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_a3906c3645f7849f8e59b286e2d0e098d8efb46af9b9f414787a1483123e2cd5->leave($__internal_a3906c3645f7849f8e59b286e2d0e098d8efb46af9b9f414787a1483123e2cd5_prof);

        
        $__internal_141f3905bbc53470f45a75335bd8ddea21a89a05e0245c0f9c184ebaf849e91e->leave($__internal_141f3905bbc53470f45a75335bd8ddea21a89a05e0245c0f9c184ebaf849e91e_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_7f0f5ecaa76189f34ae22a5dc304ec27b67fd9de3c7c49bfbd3bae617532a1b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f0f5ecaa76189f34ae22a5dc304ec27b67fd9de3c7c49bfbd3bae617532a1b4->enter($__internal_7f0f5ecaa76189f34ae22a5dc304ec27b67fd9de3c7c49bfbd3bae617532a1b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_a31d99f8b20324c3904387b76366ba80b20e6cbf04c738004182b285effe1efa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a31d99f8b20324c3904387b76366ba80b20e6cbf04c738004182b285effe1efa->enter($__internal_a31d99f8b20324c3904387b76366ba80b20e6cbf04c738004182b285effe1efa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_a31d99f8b20324c3904387b76366ba80b20e6cbf04c738004182b285effe1efa->leave($__internal_a31d99f8b20324c3904387b76366ba80b20e6cbf04c738004182b285effe1efa_prof);

        
        $__internal_7f0f5ecaa76189f34ae22a5dc304ec27b67fd9de3c7c49bfbd3bae617532a1b4->leave($__internal_7f0f5ecaa76189f34ae22a5dc304ec27b67fd9de3c7c49bfbd3bae617532a1b4_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_91745109a76bd5213045a0efcd1e3ba0017d085c868a649bb4e90ae02bbf008e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91745109a76bd5213045a0efcd1e3ba0017d085c868a649bb4e90ae02bbf008e->enter($__internal_91745109a76bd5213045a0efcd1e3ba0017d085c868a649bb4e90ae02bbf008e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_be3b4387fa15e9ca7297e92f5d0d152ac995f739c8e509b238771f649e2e6e99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be3b4387fa15e9ca7297e92f5d0d152ac995f739c8e509b238771f649e2e6e99->enter($__internal_be3b4387fa15e9ca7297e92f5d0d152ac995f739c8e509b238771f649e2e6e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_be3b4387fa15e9ca7297e92f5d0d152ac995f739c8e509b238771f649e2e6e99->leave($__internal_be3b4387fa15e9ca7297e92f5d0d152ac995f739c8e509b238771f649e2e6e99_prof);

        
        $__internal_91745109a76bd5213045a0efcd1e3ba0017d085c868a649bb4e90ae02bbf008e->leave($__internal_91745109a76bd5213045a0efcd1e3ba0017d085c868a649bb4e90ae02bbf008e_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_fbf34f6604a71266edd094bd3d32be946059b76ad5a2575bd583816ee6e647bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbf34f6604a71266edd094bd3d32be946059b76ad5a2575bd583816ee6e647bd->enter($__internal_fbf34f6604a71266edd094bd3d32be946059b76ad5a2575bd583816ee6e647bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_068023af4e3b486d8b03fb5b233ac23c1caaf1a49fa74fcd3d60aa3608d05d04 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_068023af4e3b486d8b03fb5b233ac23c1caaf1a49fa74fcd3d60aa3608d05d04->enter($__internal_068023af4e3b486d8b03fb5b233ac23c1caaf1a49fa74fcd3d60aa3608d05d04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_068023af4e3b486d8b03fb5b233ac23c1caaf1a49fa74fcd3d60aa3608d05d04->leave($__internal_068023af4e3b486d8b03fb5b233ac23c1caaf1a49fa74fcd3d60aa3608d05d04_prof);

        
        $__internal_fbf34f6604a71266edd094bd3d32be946059b76ad5a2575bd583816ee6e647bd->leave($__internal_fbf34f6604a71266edd094bd3d32be946059b76ad5a2575bd583816ee6e647bd_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_15c8c4b1873cb52e6e9750a76fb20b51c676cf29346da3961537f53ac6c2e5e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15c8c4b1873cb52e6e9750a76fb20b51c676cf29346da3961537f53ac6c2e5e7->enter($__internal_15c8c4b1873cb52e6e9750a76fb20b51c676cf29346da3961537f53ac6c2e5e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_2ace10df863a731be5ac997a3fc7f3c37372f04dc54153ef037d6084b35990b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ace10df863a731be5ac997a3fc7f3c37372f04dc54153ef037d6084b35990b6->enter($__internal_2ace10df863a731be5ac997a3fc7f3c37372f04dc54153ef037d6084b35990b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_2ace10df863a731be5ac997a3fc7f3c37372f04dc54153ef037d6084b35990b6->leave($__internal_2ace10df863a731be5ac997a3fc7f3c37372f04dc54153ef037d6084b35990b6_prof);

        
        $__internal_15c8c4b1873cb52e6e9750a76fb20b51c676cf29346da3961537f53ac6c2e5e7->leave($__internal_15c8c4b1873cb52e6e9750a76fb20b51c676cf29346da3961537f53ac6c2e5e7_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_b34eddc6c74ec017d9f1b9d5fae3967504dd2a00e0919325cd08835beaa11341 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b34eddc6c74ec017d9f1b9d5fae3967504dd2a00e0919325cd08835beaa11341->enter($__internal_b34eddc6c74ec017d9f1b9d5fae3967504dd2a00e0919325cd08835beaa11341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_633f2e3698279eefceec506cf326447085df8d933cdd68f9f7e0be1896a90b30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633f2e3698279eefceec506cf326447085df8d933cdd68f9f7e0be1896a90b30->enter($__internal_633f2e3698279eefceec506cf326447085df8d933cdd68f9f7e0be1896a90b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_633f2e3698279eefceec506cf326447085df8d933cdd68f9f7e0be1896a90b30->leave($__internal_633f2e3698279eefceec506cf326447085df8d933cdd68f9f7e0be1896a90b30_prof);

        
        $__internal_b34eddc6c74ec017d9f1b9d5fae3967504dd2a00e0919325cd08835beaa11341->leave($__internal_b34eddc6c74ec017d9f1b9d5fae3967504dd2a00e0919325cd08835beaa11341_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_ece832b8d2681fba2a8445a4861c0bf5e758292524ab1122102a20e9e3931b2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ece832b8d2681fba2a8445a4861c0bf5e758292524ab1122102a20e9e3931b2d->enter($__internal_ece832b8d2681fba2a8445a4861c0bf5e758292524ab1122102a20e9e3931b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_79cb608a87402bdd22e9370ef6ba253494335702fb8e2c417da8915fbbe744f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79cb608a87402bdd22e9370ef6ba253494335702fb8e2c417da8915fbbe744f2->enter($__internal_79cb608a87402bdd22e9370ef6ba253494335702fb8e2c417da8915fbbe744f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_79cb608a87402bdd22e9370ef6ba253494335702fb8e2c417da8915fbbe744f2->leave($__internal_79cb608a87402bdd22e9370ef6ba253494335702fb8e2c417da8915fbbe744f2_prof);

        
        $__internal_ece832b8d2681fba2a8445a4861c0bf5e758292524ab1122102a20e9e3931b2d->leave($__internal_ece832b8d2681fba2a8445a4861c0bf5e758292524ab1122102a20e9e3931b2d_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_405bfbc92ccbd39082e3d819e023cd9a9609749e1365baf27a6928e43e3e8131 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_405bfbc92ccbd39082e3d819e023cd9a9609749e1365baf27a6928e43e3e8131->enter($__internal_405bfbc92ccbd39082e3d819e023cd9a9609749e1365baf27a6928e43e3e8131_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_b389cfcbc4879e72d3ebb81c0600c558a0d8ffa097beaed4cee689f21a7412dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b389cfcbc4879e72d3ebb81c0600c558a0d8ffa097beaed4cee689f21a7412dc->enter($__internal_b389cfcbc4879e72d3ebb81c0600c558a0d8ffa097beaed4cee689f21a7412dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_b389cfcbc4879e72d3ebb81c0600c558a0d8ffa097beaed4cee689f21a7412dc->leave($__internal_b389cfcbc4879e72d3ebb81c0600c558a0d8ffa097beaed4cee689f21a7412dc_prof);

        
        $__internal_405bfbc92ccbd39082e3d819e023cd9a9609749e1365baf27a6928e43e3e8131->leave($__internal_405bfbc92ccbd39082e3d819e023cd9a9609749e1365baf27a6928e43e3e8131_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_162298be7cca47498f1f8ec09bc470d28ff197cd1980121127436e639a1bb6aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_162298be7cca47498f1f8ec09bc470d28ff197cd1980121127436e639a1bb6aa->enter($__internal_162298be7cca47498f1f8ec09bc470d28ff197cd1980121127436e639a1bb6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_fc04c1fbf7b3ea368dd32b3c758ad559c92dc5abe34b3ff9170ab8c7dc3ce358 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc04c1fbf7b3ea368dd32b3c758ad559c92dc5abe34b3ff9170ab8c7dc3ce358->enter($__internal_fc04c1fbf7b3ea368dd32b3c758ad559c92dc5abe34b3ff9170ab8c7dc3ce358_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_fc04c1fbf7b3ea368dd32b3c758ad559c92dc5abe34b3ff9170ab8c7dc3ce358->leave($__internal_fc04c1fbf7b3ea368dd32b3c758ad559c92dc5abe34b3ff9170ab8c7dc3ce358_prof);

        
        $__internal_162298be7cca47498f1f8ec09bc470d28ff197cd1980121127436e639a1bb6aa->leave($__internal_162298be7cca47498f1f8ec09bc470d28ff197cd1980121127436e639a1bb6aa_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock button_widget %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/foundation_5_layout.html.twig");
    }
}
