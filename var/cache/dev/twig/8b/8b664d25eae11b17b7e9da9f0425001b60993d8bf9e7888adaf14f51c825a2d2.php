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
        $__internal_ccfe1e51fe0d81d645beb408c7190ef1fbaf06d5fcd67cc88d5fca8b0683e944 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccfe1e51fe0d81d645beb408c7190ef1fbaf06d5fcd67cc88d5fca8b0683e944->enter($__internal_ccfe1e51fe0d81d645beb408c7190ef1fbaf06d5fcd67cc88d5fca8b0683e944_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_5ba3d2b46b2af205208016184a7ec2cade1ca732a2f335cb9e0fba9e44fc093e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ba3d2b46b2af205208016184a7ec2cade1ca732a2f335cb9e0fba9e44fc093e->enter($__internal_5ba3d2b46b2af205208016184a7ec2cade1ca732a2f335cb9e0fba9e44fc093e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccfe1e51fe0d81d645beb408c7190ef1fbaf06d5fcd67cc88d5fca8b0683e944->leave($__internal_ccfe1e51fe0d81d645beb408c7190ef1fbaf06d5fcd67cc88d5fca8b0683e944_prof);

        
        $__internal_5ba3d2b46b2af205208016184a7ec2cade1ca732a2f335cb9e0fba9e44fc093e->leave($__internal_5ba3d2b46b2af205208016184a7ec2cade1ca732a2f335cb9e0fba9e44fc093e_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_e9af3dfeae489b5954568142e1f9c1f62a99c32b7efdfab4e424ca95b0b769a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9af3dfeae489b5954568142e1f9c1f62a99c32b7efdfab4e424ca95b0b769a0->enter($__internal_e9af3dfeae489b5954568142e1f9c1f62a99c32b7efdfab4e424ca95b0b769a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_61b444dd8cd593bf97bf94fd4266dacd4dc1b9ca1dae05b0bf6b47d407bf31fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61b444dd8cd593bf97bf94fd4266dacd4dc1b9ca1dae05b0bf6b47d407bf31fc->enter($__internal_61b444dd8cd593bf97bf94fd4266dacd4dc1b9ca1dae05b0bf6b47d407bf31fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_61b444dd8cd593bf97bf94fd4266dacd4dc1b9ca1dae05b0bf6b47d407bf31fc->leave($__internal_61b444dd8cd593bf97bf94fd4266dacd4dc1b9ca1dae05b0bf6b47d407bf31fc_prof);

        
        $__internal_e9af3dfeae489b5954568142e1f9c1f62a99c32b7efdfab4e424ca95b0b769a0->leave($__internal_e9af3dfeae489b5954568142e1f9c1f62a99c32b7efdfab4e424ca95b0b769a0_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_deb5fea7421a0c7c8f5ad6bc5ee53c9aed511223d882683d3f3208b2ed7d8841 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deb5fea7421a0c7c8f5ad6bc5ee53c9aed511223d882683d3f3208b2ed7d8841->enter($__internal_deb5fea7421a0c7c8f5ad6bc5ee53c9aed511223d882683d3f3208b2ed7d8841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_e70475943090943ba6352c1d2dc9db4c0592a52c7eaa55fe5ab4bfbd224a3662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e70475943090943ba6352c1d2dc9db4c0592a52c7eaa55fe5ab4bfbd224a3662->enter($__internal_e70475943090943ba6352c1d2dc9db4c0592a52c7eaa55fe5ab4bfbd224a3662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_e70475943090943ba6352c1d2dc9db4c0592a52c7eaa55fe5ab4bfbd224a3662->leave($__internal_e70475943090943ba6352c1d2dc9db4c0592a52c7eaa55fe5ab4bfbd224a3662_prof);

        
        $__internal_deb5fea7421a0c7c8f5ad6bc5ee53c9aed511223d882683d3f3208b2ed7d8841->leave($__internal_deb5fea7421a0c7c8f5ad6bc5ee53c9aed511223d882683d3f3208b2ed7d8841_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_9fd68f18aa9e5d549b86f72859b3c154a911a1e6172ba1d812f6775041f7452b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fd68f18aa9e5d549b86f72859b3c154a911a1e6172ba1d812f6775041f7452b->enter($__internal_9fd68f18aa9e5d549b86f72859b3c154a911a1e6172ba1d812f6775041f7452b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_36a0c40b57c0032d4eb98a16b240e1dbf4cef00ff724708ea8fb125d60566acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36a0c40b57c0032d4eb98a16b240e1dbf4cef00ff724708ea8fb125d60566acc->enter($__internal_36a0c40b57c0032d4eb98a16b240e1dbf4cef00ff724708ea8fb125d60566acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_36a0c40b57c0032d4eb98a16b240e1dbf4cef00ff724708ea8fb125d60566acc->leave($__internal_36a0c40b57c0032d4eb98a16b240e1dbf4cef00ff724708ea8fb125d60566acc_prof);

        
        $__internal_9fd68f18aa9e5d549b86f72859b3c154a911a1e6172ba1d812f6775041f7452b->leave($__internal_9fd68f18aa9e5d549b86f72859b3c154a911a1e6172ba1d812f6775041f7452b_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_a782874b56b937c2416db03b5a4ced7d2a4823b43853625e22061c5f5d810f05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a782874b56b937c2416db03b5a4ced7d2a4823b43853625e22061c5f5d810f05->enter($__internal_a782874b56b937c2416db03b5a4ced7d2a4823b43853625e22061c5f5d810f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_115a2effcb9c9a5dcac0ca28e3d31f33f4a039c62ce8d92429663fa8e2fced5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_115a2effcb9c9a5dcac0ca28e3d31f33f4a039c62ce8d92429663fa8e2fced5f->enter($__internal_115a2effcb9c9a5dcac0ca28e3d31f33f4a039c62ce8d92429663fa8e2fced5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_115a2effcb9c9a5dcac0ca28e3d31f33f4a039c62ce8d92429663fa8e2fced5f->leave($__internal_115a2effcb9c9a5dcac0ca28e3d31f33f4a039c62ce8d92429663fa8e2fced5f_prof);

        
        $__internal_a782874b56b937c2416db03b5a4ced7d2a4823b43853625e22061c5f5d810f05->leave($__internal_a782874b56b937c2416db03b5a4ced7d2a4823b43853625e22061c5f5d810f05_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_a0cf2f7eac5f1cb7b389615b5b55ed5b9fb66929c8aec5e248abab5dfd37fcce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0cf2f7eac5f1cb7b389615b5b55ed5b9fb66929c8aec5e248abab5dfd37fcce->enter($__internal_a0cf2f7eac5f1cb7b389615b5b55ed5b9fb66929c8aec5e248abab5dfd37fcce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_701fcf5b29bc6bf084ead5e95b73e61914161538d43cac0f91ba49b1792bd735 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_701fcf5b29bc6bf084ead5e95b73e61914161538d43cac0f91ba49b1792bd735->enter($__internal_701fcf5b29bc6bf084ead5e95b73e61914161538d43cac0f91ba49b1792bd735_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_701fcf5b29bc6bf084ead5e95b73e61914161538d43cac0f91ba49b1792bd735->leave($__internal_701fcf5b29bc6bf084ead5e95b73e61914161538d43cac0f91ba49b1792bd735_prof);

        
        $__internal_a0cf2f7eac5f1cb7b389615b5b55ed5b9fb66929c8aec5e248abab5dfd37fcce->leave($__internal_a0cf2f7eac5f1cb7b389615b5b55ed5b9fb66929c8aec5e248abab5dfd37fcce_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_0acf99f67cda0e622a3e07ccd7cd3e9ad99da3f29a180dba2133acf959055251 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0acf99f67cda0e622a3e07ccd7cd3e9ad99da3f29a180dba2133acf959055251->enter($__internal_0acf99f67cda0e622a3e07ccd7cd3e9ad99da3f29a180dba2133acf959055251_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_671501923ea29ed74b336e19a744f930447ac6771b2c2b09733fc005bac51b86 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671501923ea29ed74b336e19a744f930447ac6771b2c2b09733fc005bac51b86->enter($__internal_671501923ea29ed74b336e19a744f930447ac6771b2c2b09733fc005bac51b86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

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
        
        $__internal_671501923ea29ed74b336e19a744f930447ac6771b2c2b09733fc005bac51b86->leave($__internal_671501923ea29ed74b336e19a744f930447ac6771b2c2b09733fc005bac51b86_prof);

        
        $__internal_0acf99f67cda0e622a3e07ccd7cd3e9ad99da3f29a180dba2133acf959055251->leave($__internal_0acf99f67cda0e622a3e07ccd7cd3e9ad99da3f29a180dba2133acf959055251_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_43c4a9059bf15779d453257c5c5ec4a09d40fc4e6250caf4ef9023fa1db87626 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43c4a9059bf15779d453257c5c5ec4a09d40fc4e6250caf4ef9023fa1db87626->enter($__internal_43c4a9059bf15779d453257c5c5ec4a09d40fc4e6250caf4ef9023fa1db87626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d3b0c9b30cac77e33a869a513878ca1e940b704b1edee6fa66d5cdc3356d5df5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3b0c9b30cac77e33a869a513878ca1e940b704b1edee6fa66d5cdc3356d5df5->enter($__internal_d3b0c9b30cac77e33a869a513878ca1e940b704b1edee6fa66d5cdc3356d5df5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

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
        
        $__internal_d3b0c9b30cac77e33a869a513878ca1e940b704b1edee6fa66d5cdc3356d5df5->leave($__internal_d3b0c9b30cac77e33a869a513878ca1e940b704b1edee6fa66d5cdc3356d5df5_prof);

        
        $__internal_43c4a9059bf15779d453257c5c5ec4a09d40fc4e6250caf4ef9023fa1db87626->leave($__internal_43c4a9059bf15779d453257c5c5ec4a09d40fc4e6250caf4ef9023fa1db87626_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_af58176e7a6c0fe734455b127c7d08c09f75ab0e67cbd2d3d5d13d05d542815a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af58176e7a6c0fe734455b127c7d08c09f75ab0e67cbd2d3d5d13d05d542815a->enter($__internal_af58176e7a6c0fe734455b127c7d08c09f75ab0e67cbd2d3d5d13d05d542815a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_2f44486a8dbf73559072fd8f489d222b6739c1ee2750cd56f729d5fc87954fd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f44486a8dbf73559072fd8f489d222b6739c1ee2750cd56f729d5fc87954fd0->enter($__internal_2f44486a8dbf73559072fd8f489d222b6739c1ee2750cd56f729d5fc87954fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

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
        
        $__internal_2f44486a8dbf73559072fd8f489d222b6739c1ee2750cd56f729d5fc87954fd0->leave($__internal_2f44486a8dbf73559072fd8f489d222b6739c1ee2750cd56f729d5fc87954fd0_prof);

        
        $__internal_af58176e7a6c0fe734455b127c7d08c09f75ab0e67cbd2d3d5d13d05d542815a->leave($__internal_af58176e7a6c0fe734455b127c7d08c09f75ab0e67cbd2d3d5d13d05d542815a_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_37f076bcfcc2d5ebd0d4af56e2cb695411f11032f6aa13101889275a832795f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37f076bcfcc2d5ebd0d4af56e2cb695411f11032f6aa13101889275a832795f9->enter($__internal_37f076bcfcc2d5ebd0d4af56e2cb695411f11032f6aa13101889275a832795f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_e86ed669c040f058c57358688f3854c0f8dbe1f1312985aa7edd928d7a80d706 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e86ed669c040f058c57358688f3854c0f8dbe1f1312985aa7edd928d7a80d706->enter($__internal_e86ed669c040f058c57358688f3854c0f8dbe1f1312985aa7edd928d7a80d706_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

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
        
        $__internal_e86ed669c040f058c57358688f3854c0f8dbe1f1312985aa7edd928d7a80d706->leave($__internal_e86ed669c040f058c57358688f3854c0f8dbe1f1312985aa7edd928d7a80d706_prof);

        
        $__internal_37f076bcfcc2d5ebd0d4af56e2cb695411f11032f6aa13101889275a832795f9->leave($__internal_37f076bcfcc2d5ebd0d4af56e2cb695411f11032f6aa13101889275a832795f9_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_c0b3ac9c8c2cc024d574144e10ed4cbb641f4bec714d5c223b95071ead7fcdcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0b3ac9c8c2cc024d574144e10ed4cbb641f4bec714d5c223b95071ead7fcdcc->enter($__internal_c0b3ac9c8c2cc024d574144e10ed4cbb641f4bec714d5c223b95071ead7fcdcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_2e69d768889faee39315bd9f3be8bdb8b3c22d57ec2fb621bac21fb9d19ff5ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e69d768889faee39315bd9f3be8bdb8b3c22d57ec2fb621bac21fb9d19ff5ef->enter($__internal_2e69d768889faee39315bd9f3be8bdb8b3c22d57ec2fb621bac21fb9d19ff5ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_2e69d768889faee39315bd9f3be8bdb8b3c22d57ec2fb621bac21fb9d19ff5ef->leave($__internal_2e69d768889faee39315bd9f3be8bdb8b3c22d57ec2fb621bac21fb9d19ff5ef_prof);

        
        $__internal_c0b3ac9c8c2cc024d574144e10ed4cbb641f4bec714d5c223b95071ead7fcdcc->leave($__internal_c0b3ac9c8c2cc024d574144e10ed4cbb641f4bec714d5c223b95071ead7fcdcc_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_c2d4409d5a5fc0f4c3b2458de6dfa50b9d95c55341193a18a09d6cf070d2470b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2d4409d5a5fc0f4c3b2458de6dfa50b9d95c55341193a18a09d6cf070d2470b->enter($__internal_c2d4409d5a5fc0f4c3b2458de6dfa50b9d95c55341193a18a09d6cf070d2470b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_961340634e2328cac1f14aa4ed5e0a64340390c6b52d78f46a62e9e1f167c94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961340634e2328cac1f14aa4ed5e0a64340390c6b52d78f46a62e9e1f167c94e->enter($__internal_961340634e2328cac1f14aa4ed5e0a64340390c6b52d78f46a62e9e1f167c94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_961340634e2328cac1f14aa4ed5e0a64340390c6b52d78f46a62e9e1f167c94e->leave($__internal_961340634e2328cac1f14aa4ed5e0a64340390c6b52d78f46a62e9e1f167c94e_prof);

        
        $__internal_c2d4409d5a5fc0f4c3b2458de6dfa50b9d95c55341193a18a09d6cf070d2470b->leave($__internal_c2d4409d5a5fc0f4c3b2458de6dfa50b9d95c55341193a18a09d6cf070d2470b_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_20eabc6b51b3ec0475809bff9458b73140f90f04a190464d85eda185ffbcd162 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20eabc6b51b3ec0475809bff9458b73140f90f04a190464d85eda185ffbcd162->enter($__internal_20eabc6b51b3ec0475809bff9458b73140f90f04a190464d85eda185ffbcd162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_7379e051a0397baabc1c4f6083c6bdfe69f3033e686f45e0889d3038b5c0ba2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7379e051a0397baabc1c4f6083c6bdfe69f3033e686f45e0889d3038b5c0ba2d->enter($__internal_7379e051a0397baabc1c4f6083c6bdfe69f3033e686f45e0889d3038b5c0ba2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_7379e051a0397baabc1c4f6083c6bdfe69f3033e686f45e0889d3038b5c0ba2d->leave($__internal_7379e051a0397baabc1c4f6083c6bdfe69f3033e686f45e0889d3038b5c0ba2d_prof);

        
        $__internal_20eabc6b51b3ec0475809bff9458b73140f90f04a190464d85eda185ffbcd162->leave($__internal_20eabc6b51b3ec0475809bff9458b73140f90f04a190464d85eda185ffbcd162_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_536e962b5fee04c53ec904a0fda22cb0e3b75131876e86c6df9a1ac9c78f6f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_536e962b5fee04c53ec904a0fda22cb0e3b75131876e86c6df9a1ac9c78f6f16->enter($__internal_536e962b5fee04c53ec904a0fda22cb0e3b75131876e86c6df9a1ac9c78f6f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_340fff67dd234523cd2d794ed5863be565a947fb049b26e5c0571b455d93e121 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_340fff67dd234523cd2d794ed5863be565a947fb049b26e5c0571b455d93e121->enter($__internal_340fff67dd234523cd2d794ed5863be565a947fb049b26e5c0571b455d93e121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_340fff67dd234523cd2d794ed5863be565a947fb049b26e5c0571b455d93e121->leave($__internal_340fff67dd234523cd2d794ed5863be565a947fb049b26e5c0571b455d93e121_prof);

        
        $__internal_536e962b5fee04c53ec904a0fda22cb0e3b75131876e86c6df9a1ac9c78f6f16->leave($__internal_536e962b5fee04c53ec904a0fda22cb0e3b75131876e86c6df9a1ac9c78f6f16_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_33e8fd0af1c669376711ce011937f5b46aa1a02b8e81da4111c3ce3fc7724d2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33e8fd0af1c669376711ce011937f5b46aa1a02b8e81da4111c3ce3fc7724d2c->enter($__internal_33e8fd0af1c669376711ce011937f5b46aa1a02b8e81da4111c3ce3fc7724d2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_19f058a51f7215d23f15435637676d3c719d30133009893a97c3fb488c1e2280 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19f058a51f7215d23f15435637676d3c719d30133009893a97c3fb488c1e2280->enter($__internal_19f058a51f7215d23f15435637676d3c719d30133009893a97c3fb488c1e2280_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

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
        
        $__internal_19f058a51f7215d23f15435637676d3c719d30133009893a97c3fb488c1e2280->leave($__internal_19f058a51f7215d23f15435637676d3c719d30133009893a97c3fb488c1e2280_prof);

        
        $__internal_33e8fd0af1c669376711ce011937f5b46aa1a02b8e81da4111c3ce3fc7724d2c->leave($__internal_33e8fd0af1c669376711ce011937f5b46aa1a02b8e81da4111c3ce3fc7724d2c_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_cf72f00aa27b072ef916e9fab980eebb55270dbe8c429edecb73228f656c4759 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf72f00aa27b072ef916e9fab980eebb55270dbe8c429edecb73228f656c4759->enter($__internal_cf72f00aa27b072ef916e9fab980eebb55270dbe8c429edecb73228f656c4759_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_e8f321d48b616db14df7ffeb96e1372d2a3b4d8a2fba6104ee8ddfd00b79391f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f321d48b616db14df7ffeb96e1372d2a3b4d8a2fba6104ee8ddfd00b79391f->enter($__internal_e8f321d48b616db14df7ffeb96e1372d2a3b4d8a2fba6104ee8ddfd00b79391f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_e8f321d48b616db14df7ffeb96e1372d2a3b4d8a2fba6104ee8ddfd00b79391f->leave($__internal_e8f321d48b616db14df7ffeb96e1372d2a3b4d8a2fba6104ee8ddfd00b79391f_prof);

        
        $__internal_cf72f00aa27b072ef916e9fab980eebb55270dbe8c429edecb73228f656c4759->leave($__internal_cf72f00aa27b072ef916e9fab980eebb55270dbe8c429edecb73228f656c4759_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_201e62c05636d6a24042df430d64ec78f4d9ce12b2b4163524467094a5993969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_201e62c05636d6a24042df430d64ec78f4d9ce12b2b4163524467094a5993969->enter($__internal_201e62c05636d6a24042df430d64ec78f4d9ce12b2b4163524467094a5993969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_1f16d9c1d7ebca488f7efd5d63caa9d76e75c95d7fc81479bbcd2e96bce6f4a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f16d9c1d7ebca488f7efd5d63caa9d76e75c95d7fc81479bbcd2e96bce6f4a0->enter($__internal_1f16d9c1d7ebca488f7efd5d63caa9d76e75c95d7fc81479bbcd2e96bce6f4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_1f16d9c1d7ebca488f7efd5d63caa9d76e75c95d7fc81479bbcd2e96bce6f4a0->leave($__internal_1f16d9c1d7ebca488f7efd5d63caa9d76e75c95d7fc81479bbcd2e96bce6f4a0_prof);

        
        $__internal_201e62c05636d6a24042df430d64ec78f4d9ce12b2b4163524467094a5993969->leave($__internal_201e62c05636d6a24042df430d64ec78f4d9ce12b2b4163524467094a5993969_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_275e382ef03af3c8152616fe3fe298792078a206b3861ebf1872ac7b0749b7c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_275e382ef03af3c8152616fe3fe298792078a206b3861ebf1872ac7b0749b7c6->enter($__internal_275e382ef03af3c8152616fe3fe298792078a206b3861ebf1872ac7b0749b7c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_96013005704a15699d9118d57ab3424f913252b90f10c2df0f97517dc0c32332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96013005704a15699d9118d57ab3424f913252b90f10c2df0f97517dc0c32332->enter($__internal_96013005704a15699d9118d57ab3424f913252b90f10c2df0f97517dc0c32332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_96013005704a15699d9118d57ab3424f913252b90f10c2df0f97517dc0c32332->leave($__internal_96013005704a15699d9118d57ab3424f913252b90f10c2df0f97517dc0c32332_prof);

        
        $__internal_275e382ef03af3c8152616fe3fe298792078a206b3861ebf1872ac7b0749b7c6->leave($__internal_275e382ef03af3c8152616fe3fe298792078a206b3861ebf1872ac7b0749b7c6_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_841dde4465510676f5af8314461a39fc3b7e47069226157619743c4302202713 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_841dde4465510676f5af8314461a39fc3b7e47069226157619743c4302202713->enter($__internal_841dde4465510676f5af8314461a39fc3b7e47069226157619743c4302202713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_92efd2295e3a9b864275772acc2fcf20a13c858f803ff06a0305179047aace1c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_92efd2295e3a9b864275772acc2fcf20a13c858f803ff06a0305179047aace1c->enter($__internal_92efd2295e3a9b864275772acc2fcf20a13c858f803ff06a0305179047aace1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_92efd2295e3a9b864275772acc2fcf20a13c858f803ff06a0305179047aace1c->leave($__internal_92efd2295e3a9b864275772acc2fcf20a13c858f803ff06a0305179047aace1c_prof);

        
        $__internal_841dde4465510676f5af8314461a39fc3b7e47069226157619743c4302202713->leave($__internal_841dde4465510676f5af8314461a39fc3b7e47069226157619743c4302202713_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_be3b43986c8fdd91e5c2ef6b95e8c351a3ed9cb4fc97a8da88ca41ef9e19ff51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be3b43986c8fdd91e5c2ef6b95e8c351a3ed9cb4fc97a8da88ca41ef9e19ff51->enter($__internal_be3b43986c8fdd91e5c2ef6b95e8c351a3ed9cb4fc97a8da88ca41ef9e19ff51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_ca0a1dcf0ef8befdf6057b96cd3e3d2ecf1e7577792155b69c82221f82df65ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0a1dcf0ef8befdf6057b96cd3e3d2ecf1e7577792155b69c82221f82df65ee->enter($__internal_ca0a1dcf0ef8befdf6057b96cd3e3d2ecf1e7577792155b69c82221f82df65ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ca0a1dcf0ef8befdf6057b96cd3e3d2ecf1e7577792155b69c82221f82df65ee->leave($__internal_ca0a1dcf0ef8befdf6057b96cd3e3d2ecf1e7577792155b69c82221f82df65ee_prof);

        
        $__internal_be3b43986c8fdd91e5c2ef6b95e8c351a3ed9cb4fc97a8da88ca41ef9e19ff51->leave($__internal_be3b43986c8fdd91e5c2ef6b95e8c351a3ed9cb4fc97a8da88ca41ef9e19ff51_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_1d12ada3861a7b7b95f3962ead68aaf33d8bec196e3ced5ce921868a99bf7ae7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d12ada3861a7b7b95f3962ead68aaf33d8bec196e3ced5ce921868a99bf7ae7->enter($__internal_1d12ada3861a7b7b95f3962ead68aaf33d8bec196e3ced5ce921868a99bf7ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_62e7dcf6464c4cc68c582d5ac12453ba18bed31f8563621ab3d636f7029471a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62e7dcf6464c4cc68c582d5ac12453ba18bed31f8563621ab3d636f7029471a1->enter($__internal_62e7dcf6464c4cc68c582d5ac12453ba18bed31f8563621ab3d636f7029471a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_62e7dcf6464c4cc68c582d5ac12453ba18bed31f8563621ab3d636f7029471a1->leave($__internal_62e7dcf6464c4cc68c582d5ac12453ba18bed31f8563621ab3d636f7029471a1_prof);

        
        $__internal_1d12ada3861a7b7b95f3962ead68aaf33d8bec196e3ced5ce921868a99bf7ae7->leave($__internal_1d12ada3861a7b7b95f3962ead68aaf33d8bec196e3ced5ce921868a99bf7ae7_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_6a73553cd5db7af57247bfffa37eb89736775e8b4661842583ee501bbd21aaae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a73553cd5db7af57247bfffa37eb89736775e8b4661842583ee501bbd21aaae->enter($__internal_6a73553cd5db7af57247bfffa37eb89736775e8b4661842583ee501bbd21aaae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_ea61c8189d31a8e1123c16eab271f7d75cbf0774da15cee0c919257e2cb5ee58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea61c8189d31a8e1123c16eab271f7d75cbf0774da15cee0c919257e2cb5ee58->enter($__internal_ea61c8189d31a8e1123c16eab271f7d75cbf0774da15cee0c919257e2cb5ee58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ea61c8189d31a8e1123c16eab271f7d75cbf0774da15cee0c919257e2cb5ee58->leave($__internal_ea61c8189d31a8e1123c16eab271f7d75cbf0774da15cee0c919257e2cb5ee58_prof);

        
        $__internal_6a73553cd5db7af57247bfffa37eb89736775e8b4661842583ee501bbd21aaae->leave($__internal_6a73553cd5db7af57247bfffa37eb89736775e8b4661842583ee501bbd21aaae_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_2b0141e3454f6e73b2dcf9148d2e8b350c8edb8fe2b7e77d05dfae63d53c5c96 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b0141e3454f6e73b2dcf9148d2e8b350c8edb8fe2b7e77d05dfae63d53c5c96->enter($__internal_2b0141e3454f6e73b2dcf9148d2e8b350c8edb8fe2b7e77d05dfae63d53c5c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_bd2c9bc0c9aafe25f43162884c212ccc24f446501536d202265758ad91a1e413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd2c9bc0c9aafe25f43162884c212ccc24f446501536d202265758ad91a1e413->enter($__internal_bd2c9bc0c9aafe25f43162884c212ccc24f446501536d202265758ad91a1e413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_bd2c9bc0c9aafe25f43162884c212ccc24f446501536d202265758ad91a1e413->leave($__internal_bd2c9bc0c9aafe25f43162884c212ccc24f446501536d202265758ad91a1e413_prof);

        
        $__internal_2b0141e3454f6e73b2dcf9148d2e8b350c8edb8fe2b7e77d05dfae63d53c5c96->leave($__internal_2b0141e3454f6e73b2dcf9148d2e8b350c8edb8fe2b7e77d05dfae63d53c5c96_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6461bc9ae3c89fc38252f16989fbb8b7df1cf3482ccbaa133bb195417d8174bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6461bc9ae3c89fc38252f16989fbb8b7df1cf3482ccbaa133bb195417d8174bc->enter($__internal_6461bc9ae3c89fc38252f16989fbb8b7df1cf3482ccbaa133bb195417d8174bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d38b6867cd264a0d97f500ed40c6b13f81ca9ad3d82a7002084c85e0aff1a985 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d38b6867cd264a0d97f500ed40c6b13f81ca9ad3d82a7002084c85e0aff1a985->enter($__internal_d38b6867cd264a0d97f500ed40c6b13f81ca9ad3d82a7002084c85e0aff1a985_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_d38b6867cd264a0d97f500ed40c6b13f81ca9ad3d82a7002084c85e0aff1a985->leave($__internal_d38b6867cd264a0d97f500ed40c6b13f81ca9ad3d82a7002084c85e0aff1a985_prof);

        
        $__internal_6461bc9ae3c89fc38252f16989fbb8b7df1cf3482ccbaa133bb195417d8174bc->leave($__internal_6461bc9ae3c89fc38252f16989fbb8b7df1cf3482ccbaa133bb195417d8174bc_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_58fd9cfdcde3f4c39c84c2884addfdf3d2c2f85d8a5cea93ca70b59ebd48e096 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58fd9cfdcde3f4c39c84c2884addfdf3d2c2f85d8a5cea93ca70b59ebd48e096->enter($__internal_58fd9cfdcde3f4c39c84c2884addfdf3d2c2f85d8a5cea93ca70b59ebd48e096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_3ff328afe9ae56d652cdf91c969dca8ac58ee9430cc27fcfb0721fe5726410f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ff328afe9ae56d652cdf91c969dca8ac58ee9430cc27fcfb0721fe5726410f0->enter($__internal_3ff328afe9ae56d652cdf91c969dca8ac58ee9430cc27fcfb0721fe5726410f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

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
        
        $__internal_3ff328afe9ae56d652cdf91c969dca8ac58ee9430cc27fcfb0721fe5726410f0->leave($__internal_3ff328afe9ae56d652cdf91c969dca8ac58ee9430cc27fcfb0721fe5726410f0_prof);

        
        $__internal_58fd9cfdcde3f4c39c84c2884addfdf3d2c2f85d8a5cea93ca70b59ebd48e096->leave($__internal_58fd9cfdcde3f4c39c84c2884addfdf3d2c2f85d8a5cea93ca70b59ebd48e096_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6c4895aa02311173e869de9e957c572986256239ee999abe064ce4d51882691e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c4895aa02311173e869de9e957c572986256239ee999abe064ce4d51882691e->enter($__internal_6c4895aa02311173e869de9e957c572986256239ee999abe064ce4d51882691e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_a47676753061ce130afbc2aec3fa6ae37decdba89cd82fa834f9eaf3d0018858 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47676753061ce130afbc2aec3fa6ae37decdba89cd82fa834f9eaf3d0018858->enter($__internal_a47676753061ce130afbc2aec3fa6ae37decdba89cd82fa834f9eaf3d0018858_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_a47676753061ce130afbc2aec3fa6ae37decdba89cd82fa834f9eaf3d0018858->leave($__internal_a47676753061ce130afbc2aec3fa6ae37decdba89cd82fa834f9eaf3d0018858_prof);

        
        $__internal_6c4895aa02311173e869de9e957c572986256239ee999abe064ce4d51882691e->leave($__internal_6c4895aa02311173e869de9e957c572986256239ee999abe064ce4d51882691e_prof);

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
