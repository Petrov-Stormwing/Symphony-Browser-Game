<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eead566be21e5a1f4cf6fef4744ff7e2341152406359e9ebc9763e34ca91c81b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c2ac66f176ef08c1d5d8f78ac359cf74a93853a322380a7cea74ee0eba0fbb78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2ac66f176ef08c1d5d8f78ac359cf74a93853a322380a7cea74ee0eba0fbb78->enter($__internal_c2ac66f176ef08c1d5d8f78ac359cf74a93853a322380a7cea74ee0eba0fbb78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_6359b0a358ca875aafd65e9d233ea22ca3c9ea87972433f14d967df8c7f0b555 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6359b0a358ca875aafd65e9d233ea22ca3c9ea87972433f14d967df8c7f0b555->enter($__internal_6359b0a358ca875aafd65e9d233ea22ca3c9ea87972433f14d967df8c7f0b555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c2ac66f176ef08c1d5d8f78ac359cf74a93853a322380a7cea74ee0eba0fbb78->leave($__internal_c2ac66f176ef08c1d5d8f78ac359cf74a93853a322380a7cea74ee0eba0fbb78_prof);

        
        $__internal_6359b0a358ca875aafd65e9d233ea22ca3c9ea87972433f14d967df8c7f0b555->leave($__internal_6359b0a358ca875aafd65e9d233ea22ca3c9ea87972433f14d967df8c7f0b555_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_575f0cf76e3b4037d5f5c76825f01ad1eed81c8eedaba959e67a203056a083eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575f0cf76e3b4037d5f5c76825f01ad1eed81c8eedaba959e67a203056a083eb->enter($__internal_575f0cf76e3b4037d5f5c76825f01ad1eed81c8eedaba959e67a203056a083eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8355b03ddc4b7350bc3e6e429742aa062f13eb03b2e763e38681bab182a1c39e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8355b03ddc4b7350bc3e6e429742aa062f13eb03b2e763e38681bab182a1c39e->enter($__internal_8355b03ddc4b7350bc3e6e429742aa062f13eb03b2e763e38681bab182a1c39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_8355b03ddc4b7350bc3e6e429742aa062f13eb03b2e763e38681bab182a1c39e->leave($__internal_8355b03ddc4b7350bc3e6e429742aa062f13eb03b2e763e38681bab182a1c39e_prof);

        
        $__internal_575f0cf76e3b4037d5f5c76825f01ad1eed81c8eedaba959e67a203056a083eb->leave($__internal_575f0cf76e3b4037d5f5c76825f01ad1eed81c8eedaba959e67a203056a083eb_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_dfdd8a15dd8a49bf2b78431eaca09955118871cb4a081ec8bde2e782fb0ed607 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dfdd8a15dd8a49bf2b78431eaca09955118871cb4a081ec8bde2e782fb0ed607->enter($__internal_dfdd8a15dd8a49bf2b78431eaca09955118871cb4a081ec8bde2e782fb0ed607_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_696d86ae321c9e64a566f4e66704ec7aace7d911ae81adfe34a803a89327ab2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_696d86ae321c9e64a566f4e66704ec7aace7d911ae81adfe34a803a89327ab2c->enter($__internal_696d86ae321c9e64a566f4e66704ec7aace7d911ae81adfe34a803a89327ab2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_696d86ae321c9e64a566f4e66704ec7aace7d911ae81adfe34a803a89327ab2c->leave($__internal_696d86ae321c9e64a566f4e66704ec7aace7d911ae81adfe34a803a89327ab2c_prof);

        
        $__internal_dfdd8a15dd8a49bf2b78431eaca09955118871cb4a081ec8bde2e782fb0ed607->leave($__internal_dfdd8a15dd8a49bf2b78431eaca09955118871cb4a081ec8bde2e782fb0ed607_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_a613ae33d280571993033f3a2967f1dc2cca8039fa903eeb848a33d995bc0f2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a613ae33d280571993033f3a2967f1dc2cca8039fa903eeb848a33d995bc0f2c->enter($__internal_a613ae33d280571993033f3a2967f1dc2cca8039fa903eeb848a33d995bc0f2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09c3456161d17bcf4aaa4393dc78f584f3d2251cf45812dc82becbd7bc9698c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09c3456161d17bcf4aaa4393dc78f584f3d2251cf45812dc82becbd7bc9698c8->enter($__internal_09c3456161d17bcf4aaa4393dc78f584f3d2251cf45812dc82becbd7bc9698c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_09c3456161d17bcf4aaa4393dc78f584f3d2251cf45812dc82becbd7bc9698c8->leave($__internal_09c3456161d17bcf4aaa4393dc78f584f3d2251cf45812dc82becbd7bc9698c8_prof);

        
        $__internal_a613ae33d280571993033f3a2967f1dc2cca8039fa903eeb848a33d995bc0f2c->leave($__internal_a613ae33d280571993033f3a2967f1dc2cca8039fa903eeb848a33d995bc0f2c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
