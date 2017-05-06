<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_bd10c2abe5b5e1b13993b0591b40fba4991f810e60d1e52175abd1e7d94b5f06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3d4b429e86a399d04d6ac83afe045f9b2eb78e39bc39f0751066a63a174540d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d4b429e86a399d04d6ac83afe045f9b2eb78e39bc39f0751066a63a174540d6->enter($__internal_3d4b429e86a399d04d6ac83afe045f9b2eb78e39bc39f0751066a63a174540d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_ae65bbb9c967b0638f3f9d1b195287149998b826078b211e29389faf7c092813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae65bbb9c967b0638f3f9d1b195287149998b826078b211e29389faf7c092813->enter($__internal_ae65bbb9c967b0638f3f9d1b195287149998b826078b211e29389faf7c092813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d4b429e86a399d04d6ac83afe045f9b2eb78e39bc39f0751066a63a174540d6->leave($__internal_3d4b429e86a399d04d6ac83afe045f9b2eb78e39bc39f0751066a63a174540d6_prof);

        
        $__internal_ae65bbb9c967b0638f3f9d1b195287149998b826078b211e29389faf7c092813->leave($__internal_ae65bbb9c967b0638f3f9d1b195287149998b826078b211e29389faf7c092813_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_85079e36989794169c949e77ea3d0cc724a43da50b0007c89dccf362ccf6af8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85079e36989794169c949e77ea3d0cc724a43da50b0007c89dccf362ccf6af8c->enter($__internal_85079e36989794169c949e77ea3d0cc724a43da50b0007c89dccf362ccf6af8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_daa8f69d33713290f5ab9cbe95dce4157f08f0249666f2d28d08254d5a1bfc3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_daa8f69d33713290f5ab9cbe95dce4157f08f0249666f2d28d08254d5a1bfc3e->enter($__internal_daa8f69d33713290f5ab9cbe95dce4157f08f0249666f2d28d08254d5a1bfc3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_daa8f69d33713290f5ab9cbe95dce4157f08f0249666f2d28d08254d5a1bfc3e->leave($__internal_daa8f69d33713290f5ab9cbe95dce4157f08f0249666f2d28d08254d5a1bfc3e_prof);

        
        $__internal_85079e36989794169c949e77ea3d0cc724a43da50b0007c89dccf362ccf6af8c->leave($__internal_85079e36989794169c949e77ea3d0cc724a43da50b0007c89dccf362ccf6af8c_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_0b66e77cea0f9cb135a26449b97cc7f08d162932acaf7b524f67278a64619eab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0b66e77cea0f9cb135a26449b97cc7f08d162932acaf7b524f67278a64619eab->enter($__internal_0b66e77cea0f9cb135a26449b97cc7f08d162932acaf7b524f67278a64619eab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2e1ef5167417e658156572c0ee8f2f95c18f73c1b9e6a0d8e9d2af36a640063f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1ef5167417e658156572c0ee8f2f95c18f73c1b9e6a0d8e9d2af36a640063f->enter($__internal_2e1ef5167417e658156572c0ee8f2f95c18f73c1b9e6a0d8e9d2af36a640063f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_2e1ef5167417e658156572c0ee8f2f95c18f73c1b9e6a0d8e9d2af36a640063f->leave($__internal_2e1ef5167417e658156572c0ee8f2f95c18f73c1b9e6a0d8e9d2af36a640063f_prof);

        
        $__internal_0b66e77cea0f9cb135a26449b97cc7f08d162932acaf7b524f67278a64619eab->leave($__internal_0b66e77cea0f9cb135a26449b97cc7f08d162932acaf7b524f67278a64619eab_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
