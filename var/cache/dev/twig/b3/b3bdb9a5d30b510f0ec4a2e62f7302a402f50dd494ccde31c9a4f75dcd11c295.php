<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_9a5db22b768910612b3be71b41b954972a3ebdb4e6cbfb9cc1bf1d941f6ac3bf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a7696d7d9d0cf01a4530d211be1524125acccbf79d9ba327e6867ae2d43fee50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7696d7d9d0cf01a4530d211be1524125acccbf79d9ba327e6867ae2d43fee50->enter($__internal_a7696d7d9d0cf01a4530d211be1524125acccbf79d9ba327e6867ae2d43fee50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_ebc01e20b13ec4ada93b8984f4f4279d055f7ee43cdca8f8f55dff4af0e2184c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc01e20b13ec4ada93b8984f4f4279d055f7ee43cdca8f8f55dff4af0e2184c->enter($__internal_ebc01e20b13ec4ada93b8984f4f4279d055f7ee43cdca8f8f55dff4af0e2184c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7696d7d9d0cf01a4530d211be1524125acccbf79d9ba327e6867ae2d43fee50->leave($__internal_a7696d7d9d0cf01a4530d211be1524125acccbf79d9ba327e6867ae2d43fee50_prof);

        
        $__internal_ebc01e20b13ec4ada93b8984f4f4279d055f7ee43cdca8f8f55dff4af0e2184c->leave($__internal_ebc01e20b13ec4ada93b8984f4f4279d055f7ee43cdca8f8f55dff4af0e2184c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_46d3f8e993de1fab00e4510f3038bc2f030d20e048454a4c09f52de726bb3778 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46d3f8e993de1fab00e4510f3038bc2f030d20e048454a4c09f52de726bb3778->enter($__internal_46d3f8e993de1fab00e4510f3038bc2f030d20e048454a4c09f52de726bb3778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0dc9dcd8925351e8c555d66229a2421ccbe444781ae99e5217795135e7fafdb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dc9dcd8925351e8c555d66229a2421ccbe444781ae99e5217795135e7fafdb0->enter($__internal_0dc9dcd8925351e8c555d66229a2421ccbe444781ae99e5217795135e7fafdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_0dc9dcd8925351e8c555d66229a2421ccbe444781ae99e5217795135e7fafdb0->leave($__internal_0dc9dcd8925351e8c555d66229a2421ccbe444781ae99e5217795135e7fafdb0_prof);

        
        $__internal_46d3f8e993de1fab00e4510f3038bc2f030d20e048454a4c09f52de726bb3778->leave($__internal_46d3f8e993de1fab00e4510f3038bc2f030d20e048454a4c09f52de726bb3778_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-requests\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
