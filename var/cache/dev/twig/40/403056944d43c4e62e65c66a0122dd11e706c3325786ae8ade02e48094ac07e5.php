<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_0407d5f2dbe15f52dc2a268045508202bec27dad657e8d8ad357a809b0cb6f3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_fb85304aa5d7d695c7603fdf7e6c8eeb38b76e1d6f36d41cf91b81d343eae406 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb85304aa5d7d695c7603fdf7e6c8eeb38b76e1d6f36d41cf91b81d343eae406->enter($__internal_fb85304aa5d7d695c7603fdf7e6c8eeb38b76e1d6f36d41cf91b81d343eae406_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a22e72b28d34484a0d387bc4339ee7770b5ee4c1008b2fe3c84e4bd8749238e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a22e72b28d34484a0d387bc4339ee7770b5ee4c1008b2fe3c84e4bd8749238e6->enter($__internal_a22e72b28d34484a0d387bc4339ee7770b5ee4c1008b2fe3c84e4bd8749238e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fb85304aa5d7d695c7603fdf7e6c8eeb38b76e1d6f36d41cf91b81d343eae406->leave($__internal_fb85304aa5d7d695c7603fdf7e6c8eeb38b76e1d6f36d41cf91b81d343eae406_prof);

        
        $__internal_a22e72b28d34484a0d387bc4339ee7770b5ee4c1008b2fe3c84e4bd8749238e6->leave($__internal_a22e72b28d34484a0d387bc4339ee7770b5ee4c1008b2fe3c84e4bd8749238e6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_532415d80366ecf645d84b0006e6ce35cae5880bae15bf6ebfd8effa3e3caaf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_532415d80366ecf645d84b0006e6ce35cae5880bae15bf6ebfd8effa3e3caaf1->enter($__internal_532415d80366ecf645d84b0006e6ce35cae5880bae15bf6ebfd8effa3e3caaf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_7f6ab37a474d057817831e144097cedf6dff6244822b2328e62be6959f9acd90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f6ab37a474d057817831e144097cedf6dff6244822b2328e62be6959f9acd90->enter($__internal_7f6ab37a474d057817831e144097cedf6dff6244822b2328e62be6959f9acd90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_7f6ab37a474d057817831e144097cedf6dff6244822b2328e62be6959f9acd90->leave($__internal_7f6ab37a474d057817831e144097cedf6dff6244822b2328e62be6959f9acd90_prof);

        
        $__internal_532415d80366ecf645d84b0006e6ce35cae5880bae15bf6ebfd8effa3e3caaf1->leave($__internal_532415d80366ecf645d84b0006e6ce35cae5880bae15bf6ebfd8effa3e3caaf1_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2fe9e9eddcbeca215418cf95c49e39eef552905f1faf036c68f3ce8b4ff1f83b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fe9e9eddcbeca215418cf95c49e39eef552905f1faf036c68f3ce8b4ff1f83b->enter($__internal_2fe9e9eddcbeca215418cf95c49e39eef552905f1faf036c68f3ce8b4ff1f83b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6932ec399a10b55c53cd25c0e6819dc64a59661ce58ceee667433468aaf20ef9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6932ec399a10b55c53cd25c0e6819dc64a59661ce58ceee667433468aaf20ef9->enter($__internal_6932ec399a10b55c53cd25c0e6819dc64a59661ce58ceee667433468aaf20ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_6932ec399a10b55c53cd25c0e6819dc64a59661ce58ceee667433468aaf20ef9->leave($__internal_6932ec399a10b55c53cd25c0e6819dc64a59661ce58ceee667433468aaf20ef9_prof);

        
        $__internal_2fe9e9eddcbeca215418cf95c49e39eef552905f1faf036c68f3ce8b4ff1f83b->leave($__internal_2fe9e9eddcbeca215418cf95c49e39eef552905f1faf036c68f3ce8b4ff1f83b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b7e0204a65363c6b37a6b0bfdbf72ed94c6c14e522a2c037e3b1b3bde04318ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7e0204a65363c6b37a6b0bfdbf72ed94c6c14e522a2c037e3b1b3bde04318ec->enter($__internal_b7e0204a65363c6b37a6b0bfdbf72ed94c6c14e522a2c037e3b1b3bde04318ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5f30512d243147c736c4d34e88aa41fe0eebe3080c119dbabe37a9362e641732 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f30512d243147c736c4d34e88aa41fe0eebe3080c119dbabe37a9362e641732->enter($__internal_5f30512d243147c736c4d34e88aa41fe0eebe3080c119dbabe37a9362e641732_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_5f30512d243147c736c4d34e88aa41fe0eebe3080c119dbabe37a9362e641732->leave($__internal_5f30512d243147c736c4d34e88aa41fe0eebe3080c119dbabe37a9362e641732_prof);

        
        $__internal_b7e0204a65363c6b37a6b0bfdbf72ed94c6c14e522a2c037e3b1b3bde04318ec->leave($__internal_b7e0204a65363c6b37a6b0bfdbf72ed94c6c14e522a2c037e3b1b3bde04318ec_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
