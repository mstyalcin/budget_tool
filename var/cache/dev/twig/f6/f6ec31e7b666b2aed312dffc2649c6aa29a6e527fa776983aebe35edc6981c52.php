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
        $__internal_116d544dab6c18e950c91e92212391878102936148f0efdd50d9e50a2aff4383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_116d544dab6c18e950c91e92212391878102936148f0efdd50d9e50a2aff4383->enter($__internal_116d544dab6c18e950c91e92212391878102936148f0efdd50d9e50a2aff4383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_9be4b434cdf8dc94cd071c4356584a115af60d1d18f7d774bba10ca1a6743920 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9be4b434cdf8dc94cd071c4356584a115af60d1d18f7d774bba10ca1a6743920->enter($__internal_9be4b434cdf8dc94cd071c4356584a115af60d1d18f7d774bba10ca1a6743920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

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
        
        $__internal_116d544dab6c18e950c91e92212391878102936148f0efdd50d9e50a2aff4383->leave($__internal_116d544dab6c18e950c91e92212391878102936148f0efdd50d9e50a2aff4383_prof);

        
        $__internal_9be4b434cdf8dc94cd071c4356584a115af60d1d18f7d774bba10ca1a6743920->leave($__internal_9be4b434cdf8dc94cd071c4356584a115af60d1d18f7d774bba10ca1a6743920_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_f97b427a0e759b902863e8c13e53f1546b8c8090a015778e6e32169e92452934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f97b427a0e759b902863e8c13e53f1546b8c8090a015778e6e32169e92452934->enter($__internal_f97b427a0e759b902863e8c13e53f1546b8c8090a015778e6e32169e92452934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0230812bcc2e338be18fbae2e55400dd55f230c468b63cd6593dad5c6c220fb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0230812bcc2e338be18fbae2e55400dd55f230c468b63cd6593dad5c6c220fb0->enter($__internal_0230812bcc2e338be18fbae2e55400dd55f230c468b63cd6593dad5c6c220fb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_0230812bcc2e338be18fbae2e55400dd55f230c468b63cd6593dad5c6c220fb0->leave($__internal_0230812bcc2e338be18fbae2e55400dd55f230c468b63cd6593dad5c6c220fb0_prof);

        
        $__internal_f97b427a0e759b902863e8c13e53f1546b8c8090a015778e6e32169e92452934->leave($__internal_f97b427a0e759b902863e8c13e53f1546b8c8090a015778e6e32169e92452934_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_ddebdae7b1948d89ebb55289abad99f477389bd20e9d274b3b9a61f14e7dbe5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddebdae7b1948d89ebb55289abad99f477389bd20e9d274b3b9a61f14e7dbe5c->enter($__internal_ddebdae7b1948d89ebb55289abad99f477389bd20e9d274b3b9a61f14e7dbe5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_52dcd6f30296afde226d3db70cd4202228a8fe3338984e3d69cc9df6a44a6d53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52dcd6f30296afde226d3db70cd4202228a8fe3338984e3d69cc9df6a44a6d53->enter($__internal_52dcd6f30296afde226d3db70cd4202228a8fe3338984e3d69cc9df6a44a6d53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_52dcd6f30296afde226d3db70cd4202228a8fe3338984e3d69cc9df6a44a6d53->leave($__internal_52dcd6f30296afde226d3db70cd4202228a8fe3338984e3d69cc9df6a44a6d53_prof);

        
        $__internal_ddebdae7b1948d89ebb55289abad99f477389bd20e9d274b3b9a61f14e7dbe5c->leave($__internal_ddebdae7b1948d89ebb55289abad99f477389bd20e9d274b3b9a61f14e7dbe5c_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_814e46a89ef83530fee70d5b987858fb5a0ecbfb582a00e545bd050a43dc39ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_814e46a89ef83530fee70d5b987858fb5a0ecbfb582a00e545bd050a43dc39ba->enter($__internal_814e46a89ef83530fee70d5b987858fb5a0ecbfb582a00e545bd050a43dc39ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fb0a49ed948062c0f98636644f314304a9030f34966cbdc2e8132a7e734b4c76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb0a49ed948062c0f98636644f314304a9030f34966cbdc2e8132a7e734b4c76->enter($__internal_fb0a49ed948062c0f98636644f314304a9030f34966cbdc2e8132a7e734b4c76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_fb0a49ed948062c0f98636644f314304a9030f34966cbdc2e8132a7e734b4c76->leave($__internal_fb0a49ed948062c0f98636644f314304a9030f34966cbdc2e8132a7e734b4c76_prof);

        
        $__internal_814e46a89ef83530fee70d5b987858fb5a0ecbfb582a00e545bd050a43dc39ba->leave($__internal_814e46a89ef83530fee70d5b987858fb5a0ecbfb582a00e545bd050a43dc39ba_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_4f66b2927cc83f362df906acfe35a972d53eaa7f5e4e5a476dd156d94b0ece8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f66b2927cc83f362df906acfe35a972d53eaa7f5e4e5a476dd156d94b0ece8a->enter($__internal_4f66b2927cc83f362df906acfe35a972d53eaa7f5e4e5a476dd156d94b0ece8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_e73320901a6f5e46cc322c65094672087009b110cce80954c7e66451289059d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e73320901a6f5e46cc322c65094672087009b110cce80954c7e66451289059d9->enter($__internal_e73320901a6f5e46cc322c65094672087009b110cce80954c7e66451289059d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

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
        
        $__internal_e73320901a6f5e46cc322c65094672087009b110cce80954c7e66451289059d9->leave($__internal_e73320901a6f5e46cc322c65094672087009b110cce80954c7e66451289059d9_prof);

        
        $__internal_4f66b2927cc83f362df906acfe35a972d53eaa7f5e4e5a476dd156d94b0ece8a->leave($__internal_4f66b2927cc83f362df906acfe35a972d53eaa7f5e4e5a476dd156d94b0ece8a_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_f02e4a31c90c92c5cb6b4e928ea73d6f4138967735c1d1426298a721a7d4ac11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f02e4a31c90c92c5cb6b4e928ea73d6f4138967735c1d1426298a721a7d4ac11->enter($__internal_f02e4a31c90c92c5cb6b4e928ea73d6f4138967735c1d1426298a721a7d4ac11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_9c63c567902ece348d0fad2a3bfb6cd904dd745c85aa890745c6cf079237fba4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c63c567902ece348d0fad2a3bfb6cd904dd745c85aa890745c6cf079237fba4->enter($__internal_9c63c567902ece348d0fad2a3bfb6cd904dd745c85aa890745c6cf079237fba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_9c63c567902ece348d0fad2a3bfb6cd904dd745c85aa890745c6cf079237fba4->leave($__internal_9c63c567902ece348d0fad2a3bfb6cd904dd745c85aa890745c6cf079237fba4_prof);

        
        $__internal_f02e4a31c90c92c5cb6b4e928ea73d6f4138967735c1d1426298a721a7d4ac11->leave($__internal_f02e4a31c90c92c5cb6b4e928ea73d6f4138967735c1d1426298a721a7d4ac11_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_2de1a594719f16d850997c2c37d4f545e632041577da876f105151f0bf809e46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2de1a594719f16d850997c2c37d4f545e632041577da876f105151f0bf809e46->enter($__internal_2de1a594719f16d850997c2c37d4f545e632041577da876f105151f0bf809e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_c88fefc90e3d50ef8da915a0b846835e6570c7a377b69e2028e5b3895a77539d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c88fefc90e3d50ef8da915a0b846835e6570c7a377b69e2028e5b3895a77539d->enter($__internal_c88fefc90e3d50ef8da915a0b846835e6570c7a377b69e2028e5b3895a77539d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_c88fefc90e3d50ef8da915a0b846835e6570c7a377b69e2028e5b3895a77539d->leave($__internal_c88fefc90e3d50ef8da915a0b846835e6570c7a377b69e2028e5b3895a77539d_prof);

        
        $__internal_2de1a594719f16d850997c2c37d4f545e632041577da876f105151f0bf809e46->leave($__internal_2de1a594719f16d850997c2c37d4f545e632041577da876f105151f0bf809e46_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_03b0a9b9a3168aacd399a1cd52fce16c059f692c552e5485e09639484bb33632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_03b0a9b9a3168aacd399a1cd52fce16c059f692c552e5485e09639484bb33632->enter($__internal_03b0a9b9a3168aacd399a1cd52fce16c059f692c552e5485e09639484bb33632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_94b4c2eb287a0b6d6a60a5ca27282bd217b39d81da586211e9d4864397b1bfe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94b4c2eb287a0b6d6a60a5ca27282bd217b39d81da586211e9d4864397b1bfe5->enter($__internal_94b4c2eb287a0b6d6a60a5ca27282bd217b39d81da586211e9d4864397b1bfe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_94b4c2eb287a0b6d6a60a5ca27282bd217b39d81da586211e9d4864397b1bfe5->leave($__internal_94b4c2eb287a0b6d6a60a5ca27282bd217b39d81da586211e9d4864397b1bfe5_prof);

        
        $__internal_03b0a9b9a3168aacd399a1cd52fce16c059f692c552e5485e09639484bb33632->leave($__internal_03b0a9b9a3168aacd399a1cd52fce16c059f692c552e5485e09639484bb33632_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_6378cf041ad56f8f620181c45a527405c2ec6b4143a0cbc2cdfe85a2a9f6e026 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6378cf041ad56f8f620181c45a527405c2ec6b4143a0cbc2cdfe85a2a9f6e026->enter($__internal_6378cf041ad56f8f620181c45a527405c2ec6b4143a0cbc2cdfe85a2a9f6e026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_0653e10abcdb297e3649d046979b85ff4ac59fd076ae64e392a7405617cf5fe5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0653e10abcdb297e3649d046979b85ff4ac59fd076ae64e392a7405617cf5fe5->enter($__internal_0653e10abcdb297e3649d046979b85ff4ac59fd076ae64e392a7405617cf5fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_0653e10abcdb297e3649d046979b85ff4ac59fd076ae64e392a7405617cf5fe5->leave($__internal_0653e10abcdb297e3649d046979b85ff4ac59fd076ae64e392a7405617cf5fe5_prof);

        
        $__internal_6378cf041ad56f8f620181c45a527405c2ec6b4143a0cbc2cdfe85a2a9f6e026->leave($__internal_6378cf041ad56f8f620181c45a527405c2ec6b4143a0cbc2cdfe85a2a9f6e026_prof);

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
