<?php

/* @Debug/Profiler/dump.html.twig */
class __TwigTemplate_7cce7a2c619debed1e65430e3f2340b8f98cc13eaf4e9ee115890444f4125a99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@Debug/Profiler/dump.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d4185816ab0baffcf737ea14befd8c17601daf214a9989964f14791b761a5fc1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d4185816ab0baffcf737ea14befd8c17601daf214a9989964f14791b761a5fc1->enter($__internal_d4185816ab0baffcf737ea14befd8c17601daf214a9989964f14791b761a5fc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $__internal_9da388c95b353d1961ebcce331263a49f731aa911557c34c9c240a00e9411f17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9da388c95b353d1961ebcce331263a49f731aa911557c34c9c240a00e9411f17->enter($__internal_9da388c95b353d1961ebcce331263a49f731aa911557c34c9c240a00e9411f17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Debug/Profiler/dump.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4185816ab0baffcf737ea14befd8c17601daf214a9989964f14791b761a5fc1->leave($__internal_d4185816ab0baffcf737ea14befd8c17601daf214a9989964f14791b761a5fc1_prof);

        
        $__internal_9da388c95b353d1961ebcce331263a49f731aa911557c34c9c240a00e9411f17->leave($__internal_9da388c95b353d1961ebcce331263a49f731aa911557c34c9c240a00e9411f17_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_2e5eb220b688a5d3c72c848c8a79a944f8d33930bce5681304dff9039d6aaac6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e5eb220b688a5d3c72c848c8a79a944f8d33930bce5681304dff9039d6aaac6->enter($__internal_2e5eb220b688a5d3c72c848c8a79a944f8d33930bce5681304dff9039d6aaac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f649f0caec77f3aa1e472167097a00ab06df0a91181f3e49cb381a248bd7e65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f649f0caec77f3aa1e472167097a00ab06df0a91181f3e49cb381a248bd7e65->enter($__internal_6f649f0caec77f3aa1e472167097a00ab06df0a91181f3e49cb381a248bd7e65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dumpsCount", array())) {
            // line 5
            echo "        ";
            ob_start();
            // line 6
            echo "            ";
            echo twig_include($this->env, $context, "@Debug/Profiler/icon.svg");
            echo "
            <span class=\"sf-toolbar-value\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dumpsCount", array()), "html", null, true);
            echo "</span>
        ";
            $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 9
            echo "
        ";
            // line 10
            ob_start();
            // line 11
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "getDumps", array(0 => "html"), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
                // line 12
                echo "                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    ";
                // line 14
                if ($this->getAttribute($context["dump"], "file", array())) {
                    // line 15
                    echo "                        ";
                    $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                    // line 16
                    echo "                        ";
                    if (($context["link"] ?? $this->getContext($context, "link"))) {
                        // line 17
                        echo "                            <a href=\"";
                        echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
                        echo "\" title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</a>
                        ";
                    } else {
                        // line 19
                        echo "                            <abbr title=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                        echo "</abbr>
                        ";
                    }
                    // line 21
                    echo "                    ";
                } else {
                    // line 22
                    echo "                        ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "
                    ";
                }
                // line 24
                echo "                    </span>
                    <span class=\"sf-toolbar-file-line\">line ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
                echo "</span>

                    ";
                // line 27
                echo $this->getAttribute($context["dump"], "data", array());
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            echo "        ";
            $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
            // line 31
            echo "
        ";
            // line 32
            echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => true));
            echo "
    ";
        }
        
        $__internal_6f649f0caec77f3aa1e472167097a00ab06df0a91181f3e49cb381a248bd7e65->leave($__internal_6f649f0caec77f3aa1e472167097a00ab06df0a91181f3e49cb381a248bd7e65_prof);

        
        $__internal_2e5eb220b688a5d3c72c848c8a79a944f8d33930bce5681304dff9039d6aaac6->leave($__internal_2e5eb220b688a5d3c72c848c8a79a944f8d33930bce5681304dff9039d6aaac6_prof);

    }

    // line 36
    public function block_menu($context, array $blocks = array())
    {
        $__internal_f04ec236e63c7a90ba648e33089a26e1da4a21147017ee0a61aa4bdcdf573b0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f04ec236e63c7a90ba648e33089a26e1da4a21147017ee0a61aa4bdcdf573b0b->enter($__internal_f04ec236e63c7a90ba648e33089a26e1da4a21147017ee0a61aa4bdcdf573b0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_62a13351bb93670a2fcefab91023fc0adcf66b8003bb342e666f5100c5b429bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62a13351bb93670a2fcefab91023fc0adcf66b8003bb342e666f5100c5b429bb->enter($__internal_62a13351bb93670a2fcefab91023fc0adcf66b8003bb342e666f5100c5b429bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 37
        echo "    <span class=\"label ";
        echo ((($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "dumpsCount", array()) == 0)) ? ("disabled") : (""));
        echo "\">
        <span class=\"icon\">";
        // line 38
        echo twig_include($this->env, $context, "@Debug/Profiler/icon.svg");
        echo "</span>
        <strong>Debug</strong>
    </span>
";
        
        $__internal_62a13351bb93670a2fcefab91023fc0adcf66b8003bb342e666f5100c5b429bb->leave($__internal_62a13351bb93670a2fcefab91023fc0adcf66b8003bb342e666f5100c5b429bb_prof);

        
        $__internal_f04ec236e63c7a90ba648e33089a26e1da4a21147017ee0a61aa4bdcdf573b0b->leave($__internal_f04ec236e63c7a90ba648e33089a26e1da4a21147017ee0a61aa4bdcdf573b0b_prof);

    }

    // line 43
    public function block_panel($context, array $blocks = array())
    {
        $__internal_da8df209b4462f0affda1ae24148d7f5de4bd61e72465061dfe2d791916046eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8df209b4462f0affda1ae24148d7f5de4bd61e72465061dfe2d791916046eb->enter($__internal_da8df209b4462f0affda1ae24148d7f5de4bd61e72465061dfe2d791916046eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_4f712ce252e1c86ed863d1f32c768ff43965f60be11b828b8264fd2c2f21bbf3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f712ce252e1c86ed863d1f32c768ff43965f60be11b828b8264fd2c2f21bbf3->enter($__internal_4f712ce252e1c86ed863d1f32c768ff43965f60be11b828b8264fd2c2f21bbf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 44
        echo "    <h2>Dumped Contents</h2>

    ";
        // line 46
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "getDumps", array(0 => "html"), "method"));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["dump"]) {
            // line 47
            echo "        <div class=\"sf-dump sf-reset\">
            <span class=\"metadata\">In
                ";
            // line 49
            if ($this->getAttribute($context["dump"], "line", array())) {
                // line 50
                echo "                    ";
                $context["link"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()));
                // line 51
                echo "                    ";
                if (($context["link"] ?? $this->getContext($context, "link"))) {
                    // line 52
                    echo "                        <a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 54
                    echo "                        <abbr title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "file", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                    echo "</abbr>
                    ";
                }
                // line 56
                echo "                ";
            } else {
                // line 57
                echo "                    ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "name", array()), "html", null, true);
                echo "
                ";
            }
            // line 59
            echo "                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["dump"], "line", array()), "html", null, true);
            echo "</a>:
            </span>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index0", array()), "html", null, true);
            echo "\">
                <div class=\"trace\">
                    ";
            // line 64
            echo (($this->getAttribute($context["dump"], "fileExcerpt", array())) ? ($this->getAttribute($context["dump"], "fileExcerpt", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt($this->getAttribute($context["dump"], "file", array()), $this->getAttribute($context["dump"], "line", array()))));
            echo "
                </div>
            </div>

            ";
            // line 68
            echo $this->getAttribute($context["dump"], "data", array());
            echo "
        </div>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 71
            echo "        <div class=\"empty\">
            <p>No content was dumped.</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dump'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_4f712ce252e1c86ed863d1f32c768ff43965f60be11b828b8264fd2c2f21bbf3->leave($__internal_4f712ce252e1c86ed863d1f32c768ff43965f60be11b828b8264fd2c2f21bbf3_prof);

        
        $__internal_da8df209b4462f0affda1ae24148d7f5de4bd61e72465061dfe2d791916046eb->leave($__internal_da8df209b4462f0affda1ae24148d7f5de4bd61e72465061dfe2d791916046eb_prof);

    }

    public function getTemplateName()
    {
        return "@Debug/Profiler/dump.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 71,  271 => 68,  264 => 64,  259 => 62,  250 => 59,  244 => 57,  241 => 56,  233 => 54,  223 => 52,  220 => 51,  217 => 50,  215 => 49,  211 => 47,  193 => 46,  189 => 44,  180 => 43,  166 => 38,  161 => 37,  152 => 36,  139 => 32,  136 => 31,  133 => 30,  124 => 27,  119 => 25,  116 => 24,  110 => 22,  107 => 21,  99 => 19,  89 => 17,  86 => 16,  83 => 15,  81 => 14,  77 => 12,  72 => 11,  70 => 10,  67 => 9,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block toolbar %}
    {% if collector.dumpsCount %}
        {% set icon %}
            {{ include('@Debug/Profiler/icon.svg') }}
            <span class=\"sf-toolbar-value\">{{ collector.dumpsCount }}</span>
        {% endset %}

        {% set text %}
            {% for dump in collector.getDumps('html') %}
                <div class=\"sf-toolbar-info-piece\">
                    <span>
                    {% if dump.file %}
                        {% set link = dump.file|file_link(dump.line) %}
                        {% if link %}
                            <a href=\"{{ link }}\" title=\"{{ dump.file }}\">{{ dump.name }}</a>
                        {% else %}
                            <abbr title=\"{{ dump.file }}\">{{ dump.name }}</abbr>
                        {% endif %}
                    {% else %}
                        {{ dump.name }}
                    {% endif %}
                    </span>
                    <span class=\"sf-toolbar-file-line\">line {{ dump.line }}</span>

                    {{ dump.data|raw }}
                </div>
            {% endfor %}
        {% endset %}

        {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { 'link': true }) }}
    {% endif %}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.dumpsCount == 0 ? 'disabled' }}\">
        <span class=\"icon\">{{ include('@Debug/Profiler/icon.svg') }}</span>
        <strong>Debug</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Dumped Contents</h2>

    {% for dump in collector.getDumps('html') %}
        <div class=\"sf-dump sf-reset\">
            <span class=\"metadata\">In
                {% if dump.line %}
                    {% set link = dump.file|file_link(dump.line) %}
                    {% if link %}
                        <a href=\"{{ link }}\" title=\"{{ dump.file }}\">{{ dump.name }}</a>
                    {% else %}
                        <abbr title=\"{{ dump.file }}\">{{ dump.name }}</abbr>
                    {% endif %}
                {% else %}
                    {{ dump.name }}
                {% endif %}
                line <a class=\"text-small sf-toggle\" data-toggle-selector=\"#sf-trace-{{ loop.index0 }}\">{{ dump.line }}</a>:
            </span>

            <div class=\"sf-dump-compact hidden\" id=\"sf-trace-{{ loop.index0 }}\">
                <div class=\"trace\">
                    {{ dump.fileExcerpt ? dump.fileExcerpt|raw : dump.file|file_excerpt(dump.line) }}
                </div>
            </div>

            {{ dump.data|raw }}
        </div>
    {% else %}
        <div class=\"empty\">
            <p>No content was dumped.</p>
        </div>
    {% endfor %}
{% endblock %}
", "@Debug/Profiler/dump.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\DebugBundle\\Resources\\views\\Profiler\\dump.html.twig");
    }
}
