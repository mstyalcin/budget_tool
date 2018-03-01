<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_87b8b8c8dc539883211c64f16cfbda548026a53abc6c121105adce3af3b8d319 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_246693b0ec813a25915a67caca0f6a8dad3400caa6c4361523b5548682a0dd57 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_246693b0ec813a25915a67caca0f6a8dad3400caa6c4361523b5548682a0dd57->enter($__internal_246693b0ec813a25915a67caca0f6a8dad3400caa6c4361523b5548682a0dd57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_5e2e978898ff8f2abe24ce3c7c7ee8a0bffb1a1f46374d04ed1fcaefc4d1426e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2e978898ff8f2abe24ce3c7c7ee8a0bffb1a1f46374d04ed1fcaefc4d1426e->enter($__internal_5e2e978898ff8f2abe24ce3c7c7ee8a0bffb1a1f46374d04ed1fcaefc4d1426e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_246693b0ec813a25915a67caca0f6a8dad3400caa6c4361523b5548682a0dd57->leave($__internal_246693b0ec813a25915a67caca0f6a8dad3400caa6c4361523b5548682a0dd57_prof);

        
        $__internal_5e2e978898ff8f2abe24ce3c7c7ee8a0bffb1a1f46374d04ed1fcaefc4d1426e->leave($__internal_5e2e978898ff8f2abe24ce3c7c7ee8a0bffb1a1f46374d04ed1fcaefc4d1426e_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f0d9d1a3075897480aeb5e833fc6a0ee5203dcfedf266327a542d5fb06dfc47a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0d9d1a3075897480aeb5e833fc6a0ee5203dcfedf266327a542d5fb06dfc47a->enter($__internal_f0d9d1a3075897480aeb5e833fc6a0ee5203dcfedf266327a542d5fb06dfc47a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_9b26b7453eb39ec8bc26c2dc342909b2115a4598edf355ec92320de42edff6ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b26b7453eb39ec8bc26c2dc342909b2115a4598edf355ec92320de42edff6ae->enter($__internal_9b26b7453eb39ec8bc26c2dc342909b2115a4598edf355ec92320de42edff6ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? $this->getContext($context, "expanded")))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_9b26b7453eb39ec8bc26c2dc342909b2115a4598edf355ec92320de42edff6ae->leave($__internal_9b26b7453eb39ec8bc26c2dc342909b2115a4598edf355ec92320de42edff6ae_prof);

        
        $__internal_f0d9d1a3075897480aeb5e833fc6a0ee5203dcfedf266327a542d5fb06dfc47a->leave($__internal_f0d9d1a3075897480aeb5e833fc6a0ee5203dcfedf266327a542d5fb06dfc47a_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_285bef22bc919a5d99203ec51241ed13d1ebe7726945e12008f1c06669140860 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285bef22bc919a5d99203ec51241ed13d1ebe7726945e12008f1c06669140860->enter($__internal_285bef22bc919a5d99203ec51241ed13d1ebe7726945e12008f1c06669140860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_546d869c571642f11864f8700f5b4329f20efbc859541e94175b1bc54bfccc74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_546d869c571642f11864f8700f5b4329f20efbc859541e94175b1bc54bfccc74->enter($__internal_546d869c571642f11864f8700f5b4329f20efbc859541e94175b1bc54bfccc74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_546d869c571642f11864f8700f5b4329f20efbc859541e94175b1bc54bfccc74->leave($__internal_546d869c571642f11864f8700f5b4329f20efbc859541e94175b1bc54bfccc74_prof);

        
        $__internal_285bef22bc919a5d99203ec51241ed13d1ebe7726945e12008f1c06669140860->leave($__internal_285bef22bc919a5d99203ec51241ed13d1ebe7726945e12008f1c06669140860_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_26158d0a3fe7193e00195ce5a4966d4b8e73f6ed863daaab5c1bac3076f7cac1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26158d0a3fe7193e00195ce5a4966d4b8e73f6ed863daaab5c1bac3076f7cac1->enter($__internal_26158d0a3fe7193e00195ce5a4966d4b8e73f6ed863daaab5c1bac3076f7cac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_379da85a2e383ae48ea85e0c914d4afab05fc6743c9d35f9193b33f2eaa6b781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_379da85a2e383ae48ea85e0c914d4afab05fc6743c9d35f9193b33f2eaa6b781->enter($__internal_379da85a2e383ae48ea85e0c914d4afab05fc6743c9d35f9193b33f2eaa6b781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? $this->getContext($context, "expanded")))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_379da85a2e383ae48ea85e0c914d4afab05fc6743c9d35f9193b33f2eaa6b781->leave($__internal_379da85a2e383ae48ea85e0c914d4afab05fc6743c9d35f9193b33f2eaa6b781_prof);

        
        $__internal_26158d0a3fe7193e00195ce5a4966d4b8e73f6ed863daaab5c1bac3076f7cac1->leave($__internal_26158d0a3fe7193e00195ce5a4966d4b8e73f6ed863daaab5c1bac3076f7cac1_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_7086a498a225f1392a63cdafbcbe58e68296c6d51b8bf898998e1e2796a3df91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7086a498a225f1392a63cdafbcbe58e68296c6d51b8bf898998e1e2796a3df91->enter($__internal_7086a498a225f1392a63cdafbcbe58e68296c6d51b8bf898998e1e2796a3df91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_ec8afe87326dfa386e47463fcd1f2ad7ea82cedf2678e1c24067c7527aa5f615 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec8afe87326dfa386e47463fcd1f2ad7ea82cedf2678e1c24067c7527aa5f615->enter($__internal_ec8afe87326dfa386e47463fcd1f2ad7ea82cedf2678e1c24067c7527aa5f615_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_ec8afe87326dfa386e47463fcd1f2ad7ea82cedf2678e1c24067c7527aa5f615->leave($__internal_ec8afe87326dfa386e47463fcd1f2ad7ea82cedf2678e1c24067c7527aa5f615_prof);

        
        $__internal_7086a498a225f1392a63cdafbcbe58e68296c6d51b8bf898998e1e2796a3df91->leave($__internal_7086a498a225f1392a63cdafbcbe58e68296c6d51b8bf898998e1e2796a3df91_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_96549779333c0dc2739db3526275094c725e6882c6566acf50e1b9cbadca4a1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96549779333c0dc2739db3526275094c725e6882c6566acf50e1b9cbadca4a1a->enter($__internal_96549779333c0dc2739db3526275094c725e6882c6566acf50e1b9cbadca4a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_69b4270ea015ca759a843644b06e28d411beb03f913d07c85f4c7b9464792804 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b4270ea015ca759a843644b06e28d411beb03f913d07c85f4c7b9464792804->enter($__internal_69b4270ea015ca759a843644b06e28d411beb03f913d07c85f4c7b9464792804_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_69b4270ea015ca759a843644b06e28d411beb03f913d07c85f4c7b9464792804->leave($__internal_69b4270ea015ca759a843644b06e28d411beb03f913d07c85f4c7b9464792804_prof);

        
        $__internal_96549779333c0dc2739db3526275094c725e6882c6566acf50e1b9cbadca4a1a->leave($__internal_96549779333c0dc2739db3526275094c725e6882c6566acf50e1b9cbadca4a1a_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_a1b9bdb72a4690e9004b31735ba2436a27b3484401f654c8677e9d700fdffad6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1b9bdb72a4690e9004b31735ba2436a27b3484401f654c8677e9d700fdffad6->enter($__internal_a1b9bdb72a4690e9004b31735ba2436a27b3484401f654c8677e9d700fdffad6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_ae110af8720e27612bda6fb916ed7a6693331037f1a4fd91d577f6127e960d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae110af8720e27612bda6fb916ed7a6693331037f1a4fd91d577f6127e960d30->enter($__internal_ae110af8720e27612bda6fb916ed7a6693331037f1a4fd91d577f6127e960d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_ae110af8720e27612bda6fb916ed7a6693331037f1a4fd91d577f6127e960d30->leave($__internal_ae110af8720e27612bda6fb916ed7a6693331037f1a4fd91d577f6127e960d30_prof);

        
        $__internal_a1b9bdb72a4690e9004b31735ba2436a27b3484401f654c8677e9d700fdffad6->leave($__internal_a1b9bdb72a4690e9004b31735ba2436a27b3484401f654c8677e9d700fdffad6_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_0cf06a4d56ea77ec334b9958c9cb64b30afcef8305203262835f67445e89c0a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cf06a4d56ea77ec334b9958c9cb64b30afcef8305203262835f67445e89c0a5->enter($__internal_0cf06a4d56ea77ec334b9958c9cb64b30afcef8305203262835f67445e89c0a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_7e4f47054a538833fd46faccdfc5d2ae4f8a281d03c62617ed217b664efb2493 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e4f47054a538833fd46faccdfc5d2ae4f8a281d03c62617ed217b664efb2493->enter($__internal_7e4f47054a538833fd46faccdfc5d2ae4f8a281d03c62617ed217b664efb2493_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_7e4f47054a538833fd46faccdfc5d2ae4f8a281d03c62617ed217b664efb2493->leave($__internal_7e4f47054a538833fd46faccdfc5d2ae4f8a281d03c62617ed217b664efb2493_prof);

        
        $__internal_0cf06a4d56ea77ec334b9958c9cb64b30afcef8305203262835f67445e89c0a5->leave($__internal_0cf06a4d56ea77ec334b9958c9cb64b30afcef8305203262835f67445e89c0a5_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_631991e2d85613cef6d91f76ec7eb52c725f5f7b8c50ddf4763fd79041cf2c60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_631991e2d85613cef6d91f76ec7eb52c725f5f7b8c50ddf4763fd79041cf2c60->enter($__internal_631991e2d85613cef6d91f76ec7eb52c725f5f7b8c50ddf4763fd79041cf2c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_6c4b3c7e603a862d3ecded1a917bd1c9ab65f79c6df8b77883f5ba57afbdb713 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c4b3c7e603a862d3ecded1a917bd1c9ab65f79c6df8b77883f5ba57afbdb713->enter($__internal_6c4b3c7e603a862d3ecded1a917bd1c9ab65f79c6df8b77883f5ba57afbdb713_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_6c4b3c7e603a862d3ecded1a917bd1c9ab65f79c6df8b77883f5ba57afbdb713->leave($__internal_6c4b3c7e603a862d3ecded1a917bd1c9ab65f79c6df8b77883f5ba57afbdb713_prof);

        
        $__internal_631991e2d85613cef6d91f76ec7eb52c725f5f7b8c50ddf4763fd79041cf2c60->leave($__internal_631991e2d85613cef6d91f76ec7eb52c725f5f7b8c50ddf4763fd79041cf2c60_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
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
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_4_horizontal_layout.html.twig");
    }
}
