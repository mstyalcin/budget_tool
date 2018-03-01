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
        $__internal_c00f6f3d837174058e3bff147c3828c9946d3d9cda864f2f0a3eb89128948f37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c00f6f3d837174058e3bff147c3828c9946d3d9cda864f2f0a3eb89128948f37->enter($__internal_c00f6f3d837174058e3bff147c3828c9946d3d9cda864f2f0a3eb89128948f37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_12ea6cfd217be799d70e58eecb9c95d700ffb86e138966bf480728dc2ee375dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ea6cfd217be799d70e58eecb9c95d700ffb86e138966bf480728dc2ee375dc->enter($__internal_12ea6cfd217be799d70e58eecb9c95d700ffb86e138966bf480728dc2ee375dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

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
        
        $__internal_c00f6f3d837174058e3bff147c3828c9946d3d9cda864f2f0a3eb89128948f37->leave($__internal_c00f6f3d837174058e3bff147c3828c9946d3d9cda864f2f0a3eb89128948f37_prof);

        
        $__internal_12ea6cfd217be799d70e58eecb9c95d700ffb86e138966bf480728dc2ee375dc->leave($__internal_12ea6cfd217be799d70e58eecb9c95d700ffb86e138966bf480728dc2ee375dc_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_1dca751334e0c0bc2cc5cf8aaffc0125ec73dc61f5b18e2f55e2cd221739b2d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1dca751334e0c0bc2cc5cf8aaffc0125ec73dc61f5b18e2f55e2cd221739b2d1->enter($__internal_1dca751334e0c0bc2cc5cf8aaffc0125ec73dc61f5b18e2f55e2cd221739b2d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_64464a8993952f3fee78d6a55d8db9f6417bf61ce6f8586c4d579994827e2b59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64464a8993952f3fee78d6a55d8db9f6417bf61ce6f8586c4d579994827e2b59->enter($__internal_64464a8993952f3fee78d6a55d8db9f6417bf61ce6f8586c4d579994827e2b59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_64464a8993952f3fee78d6a55d8db9f6417bf61ce6f8586c4d579994827e2b59->leave($__internal_64464a8993952f3fee78d6a55d8db9f6417bf61ce6f8586c4d579994827e2b59_prof);

        
        $__internal_1dca751334e0c0bc2cc5cf8aaffc0125ec73dc61f5b18e2f55e2cd221739b2d1->leave($__internal_1dca751334e0c0bc2cc5cf8aaffc0125ec73dc61f5b18e2f55e2cd221739b2d1_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_59bfb0b88f1ff3f0e50caf90efdf35b03ea9b1090d89115a266545c666a5f1e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59bfb0b88f1ff3f0e50caf90efdf35b03ea9b1090d89115a266545c666a5f1e6->enter($__internal_59bfb0b88f1ff3f0e50caf90efdf35b03ea9b1090d89115a266545c666a5f1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_fdfbb57fdb2f2ce57c794c501411dfaf61bf04968568a293b4c5df9c6bb21986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fdfbb57fdb2f2ce57c794c501411dfaf61bf04968568a293b4c5df9c6bb21986->enter($__internal_fdfbb57fdb2f2ce57c794c501411dfaf61bf04968568a293b4c5df9c6bb21986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_fdfbb57fdb2f2ce57c794c501411dfaf61bf04968568a293b4c5df9c6bb21986->leave($__internal_fdfbb57fdb2f2ce57c794c501411dfaf61bf04968568a293b4c5df9c6bb21986_prof);

        
        $__internal_59bfb0b88f1ff3f0e50caf90efdf35b03ea9b1090d89115a266545c666a5f1e6->leave($__internal_59bfb0b88f1ff3f0e50caf90efdf35b03ea9b1090d89115a266545c666a5f1e6_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_a72a278188df61c2d4b65c9f408d187abe14f390071e6633f940cf35e5c22f16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a72a278188df61c2d4b65c9f408d187abe14f390071e6633f940cf35e5c22f16->enter($__internal_a72a278188df61c2d4b65c9f408d187abe14f390071e6633f940cf35e5c22f16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_9b47aaecfdb50bb60176a4e47b799e6f648d5e4232bfcd85418a28934d883181 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b47aaecfdb50bb60176a4e47b799e6f648d5e4232bfcd85418a28934d883181->enter($__internal_9b47aaecfdb50bb60176a4e47b799e6f648d5e4232bfcd85418a28934d883181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_9b47aaecfdb50bb60176a4e47b799e6f648d5e4232bfcd85418a28934d883181->leave($__internal_9b47aaecfdb50bb60176a4e47b799e6f648d5e4232bfcd85418a28934d883181_prof);

        
        $__internal_a72a278188df61c2d4b65c9f408d187abe14f390071e6633f940cf35e5c22f16->leave($__internal_a72a278188df61c2d4b65c9f408d187abe14f390071e6633f940cf35e5c22f16_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b3450e1b58c1f795d7ccf9d70bd3698f3462c2ee6af242976ddd641be022edad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3450e1b58c1f795d7ccf9d70bd3698f3462c2ee6af242976ddd641be022edad->enter($__internal_b3450e1b58c1f795d7ccf9d70bd3698f3462c2ee6af242976ddd641be022edad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_b2474b20c0381bed4d41b534305cf5b158c48948e01aab7875b35a3845a3ab73 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2474b20c0381bed4d41b534305cf5b158c48948e01aab7875b35a3845a3ab73->enter($__internal_b2474b20c0381bed4d41b534305cf5b158c48948e01aab7875b35a3845a3ab73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_b2474b20c0381bed4d41b534305cf5b158c48948e01aab7875b35a3845a3ab73->leave($__internal_b2474b20c0381bed4d41b534305cf5b158c48948e01aab7875b35a3845a3ab73_prof);

        
        $__internal_b3450e1b58c1f795d7ccf9d70bd3698f3462c2ee6af242976ddd641be022edad->leave($__internal_b3450e1b58c1f795d7ccf9d70bd3698f3462c2ee6af242976ddd641be022edad_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_d6fb9c30a34939d17b6498757f86950738fb9425e3bb95c667a18a8bcea15955 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6fb9c30a34939d17b6498757f86950738fb9425e3bb95c667a18a8bcea15955->enter($__internal_d6fb9c30a34939d17b6498757f86950738fb9425e3bb95c667a18a8bcea15955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_758333d3aad370c13ccc228a0cf66827589d414b0ce2ef76ab928c520eb07330 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_758333d3aad370c13ccc228a0cf66827589d414b0ce2ef76ab928c520eb07330->enter($__internal_758333d3aad370c13ccc228a0cf66827589d414b0ce2ef76ab928c520eb07330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

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
        
        $__internal_758333d3aad370c13ccc228a0cf66827589d414b0ce2ef76ab928c520eb07330->leave($__internal_758333d3aad370c13ccc228a0cf66827589d414b0ce2ef76ab928c520eb07330_prof);

        
        $__internal_d6fb9c30a34939d17b6498757f86950738fb9425e3bb95c667a18a8bcea15955->leave($__internal_d6fb9c30a34939d17b6498757f86950738fb9425e3bb95c667a18a8bcea15955_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_de5fe21403eaead3a882b9c450ab25275bce408019313841b4313fedc25081bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de5fe21403eaead3a882b9c450ab25275bce408019313841b4313fedc25081bf->enter($__internal_de5fe21403eaead3a882b9c450ab25275bce408019313841b4313fedc25081bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_4345f3a49b439a6083e753e82ee1c8161bf6554730e67e00ac00011edf2eb7a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4345f3a49b439a6083e753e82ee1c8161bf6554730e67e00ac00011edf2eb7a7->enter($__internal_4345f3a49b439a6083e753e82ee1c8161bf6554730e67e00ac00011edf2eb7a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

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
        
        $__internal_4345f3a49b439a6083e753e82ee1c8161bf6554730e67e00ac00011edf2eb7a7->leave($__internal_4345f3a49b439a6083e753e82ee1c8161bf6554730e67e00ac00011edf2eb7a7_prof);

        
        $__internal_de5fe21403eaead3a882b9c450ab25275bce408019313841b4313fedc25081bf->leave($__internal_de5fe21403eaead3a882b9c450ab25275bce408019313841b4313fedc25081bf_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_6cd8bbea569ac967e990a38b9f8e2062c95c431fde0d30664b9fa617aeb3adf0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cd8bbea569ac967e990a38b9f8e2062c95c431fde0d30664b9fa617aeb3adf0->enter($__internal_6cd8bbea569ac967e990a38b9f8e2062c95c431fde0d30664b9fa617aeb3adf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_391339c1f744e6d136a18067050fb7d94db76f7f5f58b42437242ef4c6179210 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_391339c1f744e6d136a18067050fb7d94db76f7f5f58b42437242ef4c6179210->enter($__internal_391339c1f744e6d136a18067050fb7d94db76f7f5f58b42437242ef4c6179210_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_391339c1f744e6d136a18067050fb7d94db76f7f5f58b42437242ef4c6179210->leave($__internal_391339c1f744e6d136a18067050fb7d94db76f7f5f58b42437242ef4c6179210_prof);

        
        $__internal_6cd8bbea569ac967e990a38b9f8e2062c95c431fde0d30664b9fa617aeb3adf0->leave($__internal_6cd8bbea569ac967e990a38b9f8e2062c95c431fde0d30664b9fa617aeb3adf0_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_a2db5f2256e0dfaf53ae8ba3e2b1ec1a318c3303fae03a60fb78dd9080bb03be = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2db5f2256e0dfaf53ae8ba3e2b1ec1a318c3303fae03a60fb78dd9080bb03be->enter($__internal_a2db5f2256e0dfaf53ae8ba3e2b1ec1a318c3303fae03a60fb78dd9080bb03be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_acde7894bfcd00d22c26987eec7ccca5947c1e6df31419b7197362dffcf6c744 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acde7894bfcd00d22c26987eec7ccca5947c1e6df31419b7197362dffcf6c744->enter($__internal_acde7894bfcd00d22c26987eec7ccca5947c1e6df31419b7197362dffcf6c744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

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
        
        $__internal_acde7894bfcd00d22c26987eec7ccca5947c1e6df31419b7197362dffcf6c744->leave($__internal_acde7894bfcd00d22c26987eec7ccca5947c1e6df31419b7197362dffcf6c744_prof);

        
        $__internal_a2db5f2256e0dfaf53ae8ba3e2b1ec1a318c3303fae03a60fb78dd9080bb03be->leave($__internal_a2db5f2256e0dfaf53ae8ba3e2b1ec1a318c3303fae03a60fb78dd9080bb03be_prof);

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
