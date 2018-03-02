<?php

/* @WebProfiler/Collector/translation.html.twig */
class __TwigTemplate_0fc56c21be7d84fe16cd51ecfc52e463db78d9142ddb292e9074c89bd6adb32d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/translation.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
            'messages' => array($this, 'block_messages'),
            'defined_messages' => array($this, 'block_defined_messages'),
            'fallback_messages' => array($this, 'block_fallback_messages'),
            'missing_messages' => array($this, 'block_missing_messages'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4bf061765a3500bf6b6f90a6b4b8369e619d052af8950be77d36f6a6fc2e63fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4bf061765a3500bf6b6f90a6b4b8369e619d052af8950be77d36f6a6fc2e63fd->enter($__internal_4bf061765a3500bf6b6f90a6b4b8369e619d052af8950be77d36f6a6fc2e63fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        $__internal_5f0336f39cd3bbd8bdcbd46d31f6d929b2c744c16041421bd93582b5c24b45d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f0336f39cd3bbd8bdcbd46d31f6d929b2c744c16041421bd93582b5c24b45d5->enter($__internal_5f0336f39cd3bbd8bdcbd46d31f6d929b2c744c16041421bd93582b5c24b45d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/translation.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4bf061765a3500bf6b6f90a6b4b8369e619d052af8950be77d36f6a6fc2e63fd->leave($__internal_4bf061765a3500bf6b6f90a6b4b8369e619d052af8950be77d36f6a6fc2e63fd_prof);

        
        $__internal_5f0336f39cd3bbd8bdcbd46d31f6d929b2c744c16041421bd93582b5c24b45d5->leave($__internal_5f0336f39cd3bbd8bdcbd46d31f6d929b2c744c16041421bd93582b5c24b45d5_prof);

    }

    // line 5
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_e97abde035a9f748fc54870919dcc79b5c1809d0da98fcff05c588ac0b762fd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e97abde035a9f748fc54870919dcc79b5c1809d0da98fcff05c588ac0b762fd7->enter($__internal_e97abde035a9f748fc54870919dcc79b5c1809d0da98fcff05c588ac0b762fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_5118aa10e8ceedc4305a4c9773129d3792089552f954eea06bbe08ad57daf014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5118aa10e8ceedc4305a4c9773129d3792089552f954eea06bbe08ad57daf014->enter($__internal_5118aa10e8ceedc4305a4c9773129d3792089552f954eea06bbe08ad57daf014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 6
        echo "    ";
        if (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messages", array()))) {
            // line 7
            echo "        ";
            ob_start();
            // line 8
            echo "            ";
            echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
            echo "
            ";
            // line 9
            $context["status_color"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array())) ? ("red") : ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array())) ? ("yellow") : (""))));
            // line 10
            echo "            ";
            $context["error_count"] = ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()));
            // line 11
            echo "            <span class=\"sf-toolbar-value\">";
            echo twig_escape_filter($this->env, ((($context["error_count"] ?? $this->getContext($context, "error_count"))) ? (($context["error_count"] ?? $this->getContext($context, "error_count"))) : ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countDefines", array()))), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 13
            echo "
        ";
            // line 14
            ob_start();
            // line 15
            echo "            <div class=\"sf-toolbar-info-piece\">
                <b>Locale</b>
                <span class=\"sf-toolbar-status\">
                    ";
            // line 18
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "locale", array()), "-")) : ("-")), "html", null, true);
            echo "
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 23
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array())) ? ("red") : (""));
            echo "\">
                    ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 30
            echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array())) ? ("yellow") : (""));
            echo "\">
                    ";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
            echo "
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countDefines", array()), "html", null, true);
            echo "</span>
            </div>
        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 40
            echo "
        ";
            // line 41
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
            echo "
    ";
        }
        
        $__internal_5118aa10e8ceedc4305a4c9773129d3792089552f954eea06bbe08ad57daf014->leave($__internal_5118aa10e8ceedc4305a4c9773129d3792089552f954eea06bbe08ad57daf014_prof);

        
        $__internal_e97abde035a9f748fc54870919dcc79b5c1809d0da98fcff05c588ac0b762fd7->leave($__internal_e97abde035a9f748fc54870919dcc79b5c1809d0da98fcff05c588ac0b762fd7_prof);

    }

    // line 45
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8ab1edaa315bc1ddddd19c575e66ae442812be54c10f4e77b4b0de6023bd6c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ab1edaa315bc1ddddd19c575e66ae442812be54c10f4e77b4b0de6023bd6c3b->enter($__internal_8ab1edaa315bc1ddddd19c575e66ae442812be54c10f4e77b4b0de6023bd6c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e242933675dcf83136740fe4a437acdd95a7b0a1164c3de8d1635c1fdb68672c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e242933675dcf83136740fe4a437acdd95a7b0a1164c3de8d1635c1fdb68672c->enter($__internal_e242933675dcf83136740fe4a437acdd95a7b0a1164c3de8d1635c1fdb68672c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 46
        echo "    <span class=\"label label-status-";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array())) ? ("error") : ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array())) ? ("warning") : (""))));
        echo " ";
        echo ((twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messages", array()))) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 47
        echo twig_include($this->env, $context, "@WebProfiler/Icon/translation.svg");
        echo "</span>
        <strong>Translation</strong>
        ";
        // line 49
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()) || $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()))) {
            // line 50
            echo "            ";
            $context["error_count"] = ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()) + $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()));
            // line 51
            echo "            <span class=\"count\">
                <span>";
            // line 52
            echo twig_escape_filter($this->env, ($context["error_count"] ?? $this->getContext($context, "error_count")), "html", null, true);
            echo "</span>
            </span>
        ";
        }
        // line 55
        echo "    </span>
";
        
        $__internal_e242933675dcf83136740fe4a437acdd95a7b0a1164c3de8d1635c1fdb68672c->leave($__internal_e242933675dcf83136740fe4a437acdd95a7b0a1164c3de8d1635c1fdb68672c_prof);

        
        $__internal_8ab1edaa315bc1ddddd19c575e66ae442812be54c10f4e77b4b0de6023bd6c3b->leave($__internal_8ab1edaa315bc1ddddd19c575e66ae442812be54c10f4e77b4b0de6023bd6c3b_prof);

    }

    // line 58
    public function block_panel($context, array $blocks = array())
    {
        $__internal_52cd178182371294e272d385623a4d4e69eb5ed34d994d640e8e1c872afc73f2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52cd178182371294e272d385623a4d4e69eb5ed34d994d640e8e1c872afc73f2->enter($__internal_52cd178182371294e272d385623a4d4e69eb5ed34d994d640e8e1c872afc73f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_240fbbf436da3126848dc5ad0df9c554a8411b9397b41671f045b25b7cb067ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_240fbbf436da3126848dc5ad0df9c554a8411b9397b41671f045b25b7cb067ac->enter($__internal_240fbbf436da3126848dc5ad0df9c554a8411b9397b41671f045b25b7cb067ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 59
        echo "    ";
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messages", array()))) {
            // line 60
            echo "        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    ";
        } else {
            // line 65
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_240fbbf436da3126848dc5ad0df9c554a8411b9397b41671f045b25b7cb067ac->leave($__internal_240fbbf436da3126848dc5ad0df9c554a8411b9397b41671f045b25b7cb067ac_prof);

        
        $__internal_52cd178182371294e272d385623a4d4e69eb5ed34d994d640e8e1c872afc73f2->leave($__internal_52cd178182371294e272d385623a4d4e69eb5ed34d994d640e8e1c872afc73f2_prof);

    }

    // line 69
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_737e1c6db5d89e804bf6bae9a3bbee926fcddb580b9f9ec901acaf35cd56983c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_737e1c6db5d89e804bf6bae9a3bbee926fcddb580b9f9ec901acaf35cd56983c->enter($__internal_737e1c6db5d89e804bf6bae9a3bbee926fcddb580b9f9ec901acaf35cd56983c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_caa498c0521142db81314f1760687fc198ea3de990b40305738932f1968501d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_caa498c0521142db81314f1760687fc198ea3de990b40305738932f1968501d0->enter($__internal_caa498c0521142db81314f1760687fc198ea3de990b40305738932f1968501d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 70
        echo "
    <h2>Translation Locales</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 75
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["collector"] ?? null), "locale", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["collector"] ?? null), "locale", array()), "-")) : ("-")), "html", null, true);
        echo "</span>
            <span class=\"label\">Locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">";
        // line 79
        echo twig_escape_filter($this->env, _twig_default_filter(twig_join_filter($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "fallbackLocales", array()), ", "), "-"), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback locales</span>
        </div>
    </div>

    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 88
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countDefines", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 93
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 98
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
        echo "</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    ";
        // line 105
        $this->displayBlock('messages', $context, $blocks);
        // line 185
        echo "
";
        
        $__internal_caa498c0521142db81314f1760687fc198ea3de990b40305738932f1968501d0->leave($__internal_caa498c0521142db81314f1760687fc198ea3de990b40305738932f1968501d0_prof);

        
        $__internal_737e1c6db5d89e804bf6bae9a3bbee926fcddb580b9f9ec901acaf35cd56983c->leave($__internal_737e1c6db5d89e804bf6bae9a3bbee926fcddb580b9f9ec901acaf35cd56983c_prof);

    }

    // line 105
    public function block_messages($context, array $blocks = array())
    {
        $__internal_59ac21962159f9f9c7a0baf760969c07e31a779319d2f8cd6080fc8a90d8b24a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59ac21962159f9f9c7a0baf760969c07e31a779319d2f8cd6080fc8a90d8b24a->enter($__internal_59ac21962159f9f9c7a0baf760969c07e31a779319d2f8cd6080fc8a90d8b24a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        $__internal_14f450fa70006c3ef63fc63f7e8feb3c57c007850461f07cf816c035cb8520a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14f450fa70006c3ef63fc63f7e8feb3c57c007850461f07cf816c035cb8520a8->enter($__internal_14f450fa70006c3ef63fc63f7e8feb3c57c007850461f07cf816c035cb8520a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "messages"));

        // line 106
        echo "
    ";
        // line 108
        echo "    ";
        list($context["messages_defined"], $context["messages_missing"], $context["messages_fallback"]) =         array(array(), array(), array());
        // line 109
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "messages", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 110
            echo "        ";
            if (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_DEFINED"))) {
                // line 111
                echo "            ";
                $context["messages_defined"] = twig_array_merge(($context["messages_defined"] ?? $this->getContext($context, "messages_defined")), array(0 => $context["message"]));
                // line 112
                echo "        ";
            } elseif (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_MISSING"))) {
                // line 113
                echo "            ";
                $context["messages_missing"] = twig_array_merge(($context["messages_missing"] ?? $this->getContext($context, "messages_missing")), array(0 => $context["message"]));
                // line 114
                echo "        ";
            } elseif (($this->getAttribute($context["message"], "state", array()) == twig_constant("Symfony\\Component\\Translation\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK"))) {
                // line 115
                echo "            ";
                $context["messages_fallback"] = twig_array_merge(($context["messages_fallback"] ?? $this->getContext($context, "messages_fallback")), array(0 => $context["message"]));
                // line 116
                echo "        ";
            }
            // line 117
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
        echo "
    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">";
        // line 121
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countDefines", array()), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                ";
        // line 128
        if (twig_test_empty(($context["messages_defined"] ?? $this->getContext($context, "messages_defined")))) {
            // line 129
            echo "                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                ";
        } else {
            // line 133
            echo "                    ";
            $this->displayBlock('defined_messages', $context, $blocks);
            // line 136
            echo "                ";
        }
        // line 137
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge ";
        // line 141
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array())) ? ("status-warning") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countFallbacks", array()), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                ";
        // line 149
        if (twig_test_empty(($context["messages_fallback"] ?? $this->getContext($context, "messages_fallback")))) {
            // line 150
            echo "                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                ";
        } else {
            // line 154
            echo "                    ";
            $this->displayBlock('fallback_messages', $context, $blocks);
            // line 157
            echo "                ";
        }
        // line 158
        echo "            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge ";
        // line 162
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array())) ? ("status-error") : (""));
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "countMissings", array()), "html", null, true);
        echo "</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                ";
        // line 171
        if (twig_test_empty(($context["messages_missing"] ?? $this->getContext($context, "messages_missing")))) {
            // line 172
            echo "                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                ";
        } else {
            // line 176
            echo "                    ";
            $this->displayBlock('missing_messages', $context, $blocks);
            // line 179
            echo "                ";
        }
        // line 180
        echo "            </div>
        </div>
    </div>

    ";
        
        $__internal_14f450fa70006c3ef63fc63f7e8feb3c57c007850461f07cf816c035cb8520a8->leave($__internal_14f450fa70006c3ef63fc63f7e8feb3c57c007850461f07cf816c035cb8520a8_prof);

        
        $__internal_59ac21962159f9f9c7a0baf760969c07e31a779319d2f8cd6080fc8a90d8b24a->leave($__internal_59ac21962159f9f9c7a0baf760969c07e31a779319d2f8cd6080fc8a90d8b24a_prof);

    }

    // line 133
    public function block_defined_messages($context, array $blocks = array())
    {
        $__internal_b4617919f6583351a1ffcde2da92ce660d573d8fa2549ee28a3c61110a7babea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4617919f6583351a1ffcde2da92ce660d573d8fa2549ee28a3c61110a7babea->enter($__internal_b4617919f6583351a1ffcde2da92ce660d573d8fa2549ee28a3c61110a7babea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "defined_messages"));

        $__internal_6ff3a9e4b08464076e895e4014409abdaf74ca0c2ffab6a5ee9e0c380a9df260 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff3a9e4b08464076e895e4014409abdaf74ca0c2ffab6a5ee9e0c380a9df260->enter($__internal_6ff3a9e4b08464076e895e4014409abdaf74ca0c2ffab6a5ee9e0c380a9df260_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "defined_messages"));

        // line 134
        echo "                        ";
        echo $context["helper"]->getrender_table(($context["messages_defined"] ?? $this->getContext($context, "messages_defined")));
        echo "
                    ";
        
        $__internal_6ff3a9e4b08464076e895e4014409abdaf74ca0c2ffab6a5ee9e0c380a9df260->leave($__internal_6ff3a9e4b08464076e895e4014409abdaf74ca0c2ffab6a5ee9e0c380a9df260_prof);

        
        $__internal_b4617919f6583351a1ffcde2da92ce660d573d8fa2549ee28a3c61110a7babea->leave($__internal_b4617919f6583351a1ffcde2da92ce660d573d8fa2549ee28a3c61110a7babea_prof);

    }

    // line 154
    public function block_fallback_messages($context, array $blocks = array())
    {
        $__internal_40393a27f18901a33699ac48fbad296e1a10295f16504ecc385a27feba7f0d32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40393a27f18901a33699ac48fbad296e1a10295f16504ecc385a27feba7f0d32->enter($__internal_40393a27f18901a33699ac48fbad296e1a10295f16504ecc385a27feba7f0d32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fallback_messages"));

        $__internal_abaadfd4ad233b962903bd6cebce406c846cf972b3f7738328df603d305f77f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_abaadfd4ad233b962903bd6cebce406c846cf972b3f7738328df603d305f77f8->enter($__internal_abaadfd4ad233b962903bd6cebce406c846cf972b3f7738328df603d305f77f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fallback_messages"));

        // line 155
        echo "                        ";
        echo $context["helper"]->getrender_table(($context["messages_fallback"] ?? $this->getContext($context, "messages_fallback")));
        echo "
                    ";
        
        $__internal_abaadfd4ad233b962903bd6cebce406c846cf972b3f7738328df603d305f77f8->leave($__internal_abaadfd4ad233b962903bd6cebce406c846cf972b3f7738328df603d305f77f8_prof);

        
        $__internal_40393a27f18901a33699ac48fbad296e1a10295f16504ecc385a27feba7f0d32->leave($__internal_40393a27f18901a33699ac48fbad296e1a10295f16504ecc385a27feba7f0d32_prof);

    }

    // line 176
    public function block_missing_messages($context, array $blocks = array())
    {
        $__internal_01a72e4d1fe5a93614562299a50a32f217ccf32e08e631912bcf545cacf64d6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01a72e4d1fe5a93614562299a50a32f217ccf32e08e631912bcf545cacf64d6e->enter($__internal_01a72e4d1fe5a93614562299a50a32f217ccf32e08e631912bcf545cacf64d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missing_messages"));

        $__internal_d5c13663b15bc6e91f697de9fefc7ee6b4af004a993bade56843e0678c3dfdfa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5c13663b15bc6e91f697de9fefc7ee6b4af004a993bade56843e0678c3dfdfa->enter($__internal_d5c13663b15bc6e91f697de9fefc7ee6b4af004a993bade56843e0678c3dfdfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "missing_messages"));

        // line 177
        echo "                        ";
        echo $context["helper"]->getrender_table(($context["messages_missing"] ?? $this->getContext($context, "messages_missing")));
        echo "
                    ";
        
        $__internal_d5c13663b15bc6e91f697de9fefc7ee6b4af004a993bade56843e0678c3dfdfa->leave($__internal_d5c13663b15bc6e91f697de9fefc7ee6b4af004a993bade56843e0678c3dfdfa_prof);

        
        $__internal_01a72e4d1fe5a93614562299a50a32f217ccf32e08e631912bcf545cacf64d6e->leave($__internal_01a72e4d1fe5a93614562299a50a32f217ccf32e08e631912bcf545cacf64d6e_prof);

    }

    // line 188
    public function getrender_table($__messages__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "messages" => $__messages__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_319e6d64d35cfd253d4ef183f86c6e9d9ab0db3cd979a9bf5d69ffe97361b650 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_319e6d64d35cfd253d4ef183f86c6e9d9ab0db3cd979a9bf5d69ffe97361b650->enter($__internal_319e6d64d35cfd253d4ef183f86c6e9d9ab0db3cd979a9bf5d69ffe97361b650_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            $__internal_ddbe424e800c198dd718ff877001dda616bb6c1faebbee58acea468141f057d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ddbe424e800c198dd718ff877001dda616bb6c1faebbee58acea468141f057d1->enter($__internal_ddbe424e800c198dd718ff877001dda616bb6c1faebbee58acea468141f057d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_table"));

            // line 189
            echo "    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        ";
            // line 200
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["messages"] ?? $this->getContext($context, "messages")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 201
                echo "            <tr>
                <td class=\"font-normal text-small nowrap\">";
                // line 202
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "locale", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small text-bold nowrap\">";
                // line 203
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "domain", array()), "html", null, true);
                echo "</td>
                <td class=\"font-normal text-small nowrap\">";
                // line 204
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "count", array()), "html", null, true);
                echo "</td>
                <td>
                    <span class=\"nowrap\">";
                // line 206
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", array()), "html", null, true);
                echo "</span>

                    ";
                // line 208
                if ( !(null === $this->getAttribute($context["message"], "transChoiceNumber", array()))) {
                    // line 209
                    echo "                        <small class=\"newline\">(pluralization is used)</small>
                    ";
                }
                // line 211
                echo "
                    ";
                // line 212
                if ((twig_length_filter($this->env, $this->getAttribute($context["message"], "parameters", array())) > 0)) {
                    // line 213
                    echo "                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-";
                    // line 215
                    echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                    echo "\" class=\"hidden\">
                            ";
                    // line 216
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["message"], "parameters", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["parameters"]) {
                        // line 217
                        echo "                                ";
                        echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $context["parameters"], 1));
                        echo "
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['parameters'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 219
                    echo "                        </div>
                    ";
                }
                // line 221
                echo "                </td>
                <td class=\"prewrap\">";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "translation", array()), "html", null, true);
                echo "</td>
            </tr>
        ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "        </tbody>
    </table>
";
            
            $__internal_ddbe424e800c198dd718ff877001dda616bb6c1faebbee58acea468141f057d1->leave($__internal_ddbe424e800c198dd718ff877001dda616bb6c1faebbee58acea468141f057d1_prof);

            
            $__internal_319e6d64d35cfd253d4ef183f86c6e9d9ab0db3cd979a9bf5d69ffe97361b650->leave($__internal_319e6d64d35cfd253d4ef183f86c6e9d9ab0db3cd979a9bf5d69ffe97361b650_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/translation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  650 => 225,  633 => 222,  630 => 221,  626 => 219,  617 => 217,  613 => 216,  609 => 215,  603 => 213,  601 => 212,  598 => 211,  594 => 209,  592 => 208,  587 => 206,  582 => 204,  578 => 203,  574 => 202,  571 => 201,  554 => 200,  541 => 189,  523 => 188,  510 => 177,  501 => 176,  488 => 155,  479 => 154,  466 => 134,  457 => 133,  443 => 180,  440 => 179,  437 => 176,  431 => 172,  429 => 171,  415 => 162,  409 => 158,  406 => 157,  403 => 154,  397 => 150,  395 => 149,  382 => 141,  376 => 137,  373 => 136,  370 => 133,  364 => 129,  362 => 128,  352 => 121,  347 => 118,  341 => 117,  338 => 116,  335 => 115,  332 => 114,  329 => 113,  326 => 112,  323 => 111,  320 => 110,  315 => 109,  312 => 108,  309 => 106,  300 => 105,  289 => 185,  287 => 105,  277 => 98,  269 => 93,  261 => 88,  249 => 79,  242 => 75,  235 => 70,  226 => 69,  212 => 65,  205 => 60,  202 => 59,  193 => 58,  182 => 55,  176 => 52,  173 => 51,  170 => 50,  168 => 49,  163 => 47,  156 => 46,  147 => 45,  134 => 41,  131 => 40,  125 => 37,  116 => 31,  112 => 30,  103 => 24,  99 => 23,  91 => 18,  86 => 15,  84 => 14,  81 => 13,  75 => 11,  72 => 10,  70 => 9,  65 => 8,  62 => 7,  59 => 6,  50 => 5,  40 => 1,  38 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% import _self as helper %}

{% block toolbar %}
    {% if collector.messages|length %}
        {% set icon %}
            {{ include('@WebProfiler/Icon/translation.svg') }}
            {% set status_color = collector.countMissings ? 'red' : collector.countFallbacks ? 'yellow' %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"sf-toolbar-value\">{{ error_count ?: collector.countDefines }}</span>
        {% endset %}

        {% set text %}
            <div class=\"sf-toolbar-info-piece\">
                <b>Locale</b>
                <span class=\"sf-toolbar-status\">
                    {{ collector.locale|default('-') }}
                </span>
            </div>
            <div class=\"sf-toolbar-info-piece\">
                <b>Missing messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countMissings ? 'red' }}\">
                    {{ collector.countMissings }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Fallback messages</b>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.countFallbacks ? 'yellow' }}\">
                    {{ collector.countFallbacks }}
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>Defined messages</b>
                <span class=\"sf-toolbar-status\">{{ collector.countDefines }}</span>
            </div>
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.countMissings ? 'error' : collector.countFallbacks ? 'warning' }} {{ collector.messages is empty ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/translation.svg') }}</span>
        <strong>Translation</strong>
        {% if collector.countMissings or collector.countFallbacks %}
            {% set error_count = collector.countMissings + collector.countFallbacks %}
            <span class=\"count\">
                <span>{{ error_count }}</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    {% if collector.messages is empty %}
        <h2>Translations</h2>
        <div class=\"empty\">
            <p>No translations have been called.</p>
        </div>
    {% else %}
        {{ block('panelContent') }}
    {% endif %}
{% endblock %}

{% block panelContent %}

    <h2>Translation Locales</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.locale|default('-') }}</span>
            <span class=\"label\">Locale</span>
        </div>
        <div class=\"metric\">
            <span class=\"value\">{{ collector.fallbackLocales|join(', ')|default('-') }}</span>
            <span class=\"label\">Fallback locales</span>
        </div>
    </div>

    <h2>Translation Metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.countDefines }}</span>
            <span class=\"label\">Defined messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countFallbacks }}</span>
            <span class=\"label\">Fallback messages</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.countMissings }}</span>
            <span class=\"label\">Missing messages</span>
        </div>
    </div>

    <h2>Translation Messages</h2>

    {% block messages %}

    {# sort translation messages in groups #}
    {% set messages_defined, messages_missing, messages_fallback = [], [], [] %}
    {% for message in collector.messages %}
        {% if message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_DEFINED') %}
            {% set messages_defined = messages_defined|merge([message]) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_MISSING') %}
            {% set messages_missing = messages_missing|merge([message]) %}
        {% elseif message.state == constant('Symfony\\\\Component\\\\Translation\\\\DataCollectorTranslator::MESSAGE_EQUALS_FALLBACK') %}
            {% set messages_fallback = messages_fallback|merge([message]) %}
        {% endif %}
    {% endfor %}

    <div class=\"sf-tabs\">
        <div class=\"tab\">
            <h3 class=\"tab-title\">Defined <span class=\"badge\">{{ collector.countDefines }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are correctly translated into the given locale.
                </p>

                {% if messages_defined is empty %}
                    <div class=\"empty\">
                        <p>None of the used translation messages are defined for the given locale.</p>
                    </div>
                {% else %}
                    {% block defined_messages %}
                        {{ helper.render_table(messages_defined) }}
                    {% endblock %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Fallback <span class=\"badge {{ collector.countFallbacks ? 'status-warning' }}\">{{ collector.countFallbacks }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale
                    but Symfony found them in the fallback locale catalog.
                </p>

                {% if messages_fallback is empty %}
                    <div class=\"empty\">
                        <p>No fallback translation messages were used.</p>
                    </div>
                {% else %}
                    {% block fallback_messages %}
                        {{ helper.render_table(messages_fallback) }}
                    {% endblock %}
                {% endif %}
            </div>
        </div>

        <div class=\"tab\">
            <h3 class=\"tab-title\">Missing <span class=\"badge {{ collector.countMissings ? 'status-error' }}\">{{ collector.countMissings }}</span></h3>

            <div class=\"tab-content\">
                <p class=\"help\">
                    These messages are not available for the given locale and cannot
                    be found in the fallback locales. Add them to the translation
                    catalogue to avoid Symfony outputting untranslated contents.
                </p>

                {% if messages_missing is empty %}
                    <div class=\"empty\">
                        <p>There are no messages of this category.</p>
                    </div>
                {% else %}
                    {% block missing_messages %}
                        {{ helper.render_table(messages_missing) }}
                    {% endblock %}
                {% endif %}
            </div>
        </div>
    </div>

    {% endblock messages %}

{% endblock %}

{% macro render_table(messages) %}
    <table>
        <thead>
            <tr>
                <th>Locale</th>
                <th>Domain</th>
                <th>Times used</th>
                <th>Message ID</th>
                <th>Message Preview</th>
            </tr>
        </thead>
        <tbody>
        {% for message in messages %}
            <tr>
                <td class=\"font-normal text-small nowrap\">{{ message.locale }}</td>
                <td class=\"font-normal text-small text-bold nowrap\">{{ message.domain }}</td>
                <td class=\"font-normal text-small nowrap\">{{ message.count }}</td>
                <td>
                    <span class=\"nowrap\">{{ message.id }}</span>

                    {% if message.transChoiceNumber is not null %}
                        <small class=\"newline\">(pluralization is used)</small>
                    {% endif %}

                    {% if message.parameters|length > 0 %}
                        <button class=\"btn-link newline text-small sf-toggle\" data-toggle-selector=\"#parameters-{{ loop.index }}\" data-toggle-alt-content=\"Hide parameters\">Show parameters</button>

                        <div id=\"parameters-{{ loop.index }}\" class=\"hidden\">
                            {% for parameters in message.parameters %}
                                {{ profiler_dump(parameters, maxDepth=1) }}
                            {% endfor %}
                        </div>
                    {% endif %}
                </td>
                <td class=\"prewrap\">{{ message.translation }}</td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
{% endmacro %}
", "@WebProfiler/Collector/translation.html.twig", "/home/myalcin/budget_tool/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/translation.html.twig");
    }
}
