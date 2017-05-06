<?php

/* default/homepage.html.twig */
class __TwigTemplate_e8f3c32cd2fbbc77bca565904d166777b894cf3e50e603c0938308075e35f1c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "default/homepage.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2b6e299a97179fd11172e0bb71148c3502f04121a2495fe1e99c691b7f5479da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b6e299a97179fd11172e0bb71148c3502f04121a2495fe1e99c691b7f5479da->enter($__internal_2b6e299a97179fd11172e0bb71148c3502f04121a2495fe1e99c691b7f5479da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $__internal_eea8ddf2894f98beefbd852bf030d0b862c8f87411cc428837834ce256132ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eea8ddf2894f98beefbd852bf030d0b862c8f87411cc428837834ce256132ee9->enter($__internal_eea8ddf2894f98beefbd852bf030d0b862c8f87411cc428837834ce256132ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b6e299a97179fd11172e0bb71148c3502f04121a2495fe1e99c691b7f5479da->leave($__internal_2b6e299a97179fd11172e0bb71148c3502f04121a2495fe1e99c691b7f5479da_prof);

        
        $__internal_eea8ddf2894f98beefbd852bf030d0b862c8f87411cc428837834ce256132ee9->leave($__internal_eea8ddf2894f98beefbd852bf030d0b862c8f87411cc428837834ce256132ee9_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_22e3a2119dbc165e147561b1aef29cb85dc3cc13585c8180fa92afc2014f20cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_22e3a2119dbc165e147561b1aef29cb85dc3cc13585c8180fa92afc2014f20cd->enter($__internal_22e3a2119dbc165e147561b1aef29cb85dc3cc13585c8180fa92afc2014f20cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_cf01a1ce75492a910a787961772994465252f1ba1731272f3fbee1ee0aca57f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf01a1ce75492a910a787961772994465252f1ba1731272f3fbee1ee0aca57f1->enter($__internal_cf01a1ce75492a910a787961772994465252f1ba1731272f3fbee1ee0aca57f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "
    ";
        // line 5
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 6
            echo "        <div class=\"alert alert-success\">
            <strong>";
            // line 7
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</strong>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "
    <div id=\"wrapper\">
        <div id=\"container\" style=\"background-image:";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg1.jpg"), "html", null, true);
        echo "\">
            <div id=\"welcome\" align=\"center\">
                <h1><span>Welcome to</span> Xel'Naga Enterprise 0.0.1</h1>
            </div>

            <div id=\"status\" align=\"center\">
                <p>
                    <svg id=\"icon-status\" width=\"120\" height=\"120\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>
                </p>
            </div>

            ";
        // line 24
        echo "                ";
        // line 25
        echo "                ";
        // line 26
        echo "                ";
        // line 27
        echo "            ";
        // line 28
        echo "
        </div>
    </div>
";
        
        $__internal_cf01a1ce75492a910a787961772994465252f1ba1731272f3fbee1ee0aca57f1->leave($__internal_cf01a1ce75492a910a787961772994465252f1ba1731272f3fbee1ee0aca57f1_prof);

        
        $__internal_22e3a2119dbc165e147561b1aef29cb85dc3cc13585c8180fa92afc2014f20cd->leave($__internal_22e3a2119dbc165e147561b1aef29cb85dc3cc13585c8180fa92afc2014f20cd_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f6350f6d44ff4a427361db1d514be6d9642d1c221e500bfe62fa7f48c6e223fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6350f6d44ff4a427361db1d514be6d9642d1c221e500bfe62fa7f48c6e223fa->enter($__internal_f6350f6d44ff4a427361db1d514be6d9642d1c221e500bfe62fa7f48c6e223fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_dfb6935e85d2db715dce76035a6e4a18c00a435559b69daf784c580dfd87e605 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfb6935e85d2db715dce76035a6e4a18c00a435559b69daf784c580dfd87e605->enter($__internal_dfb6935e85d2db715dce76035a6e4a18c00a435559b69daf784c580dfd87e605_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 34
        echo "<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
";
        
        $__internal_dfb6935e85d2db715dce76035a6e4a18c00a435559b69daf784c580dfd87e605->leave($__internal_dfb6935e85d2db715dce76035a6e4a18c00a435559b69daf784c580dfd87e605_prof);

        
        $__internal_f6350f6d44ff4a427361db1d514be6d9642d1c221e500bfe62fa7f48c6e223fa->leave($__internal_f6350f6d44ff4a427361db1d514be6d9642d1c221e500bfe62fa7f48c6e223fa_prof);

    }

    public function getTemplateName()
    {
        return "default/homepage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 34,  108 => 33,  95 => 28,  93 => 27,  91 => 26,  89 => 25,  87 => 24,  73 => 12,  69 => 10,  60 => 7,  57 => 6,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block main %}

    {% for message in app.session.flashBag.get('success') %}
        <div class=\"alert alert-success\">
            <strong>{{ message }}</strong>
        </div>
    {% endfor %}

    <div id=\"wrapper\">
        <div id=\"container\" style=\"background-image:{{ asset('img/bg1.jpg') }}\">
            <div id=\"welcome\" align=\"center\">
                <h1><span>Welcome to</span> Xel'Naga Enterprise 0.0.1</h1>
            </div>

            <div id=\"status\" align=\"center\">
                <p>
                    <svg id=\"icon-status\" width=\"120\" height=\"120\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>
                </p>
            </div>

            {#<div id=\"next\" align=\"center\">#}
                {#<h2>What's next?</h2>#}
                {#<button class=\"btn-default btn-primary\"> Login </button>#}
                {#<button class=\"btn-default btn-danger\"> Register </button>#}
            {#</div>#}

        </div>
    </div>
{% endblock %}

{% block stylesheets %}
<style>
    body { background: #F5F5F5; font: 18px/1.5 sans-serif; }
    h1, h2 { line-height: 1.2; margin: 0 0 .5em; }
    h1 { font-size: 36px; }
    h2 { font-size: 21px; margin-bottom: 1em; }
    p { margin: 0 0 1em 0; }
    a { color: #0000F0; }
    a:hover { text-decoration: none; }
    code { background: #F5F5F5; max-width: 100px; padding: 2px 6px; word-wrap: break-word; }
    #wrapper { background: #FFF; margin: 1em auto; max-width: 800px; width: 95%; }
    #container { padding: 2em; }
    #welcome, #status { margin-bottom: 2em; }
    #welcome h1 span { display: block; font-size: 75%; }
    #icon-status, #icon-book { float: left; height: 64px; margin-right: 1em; margin-top: -4px; width: 64px; }
    #icon-book { display: none; }

    @media (min-width: 768px) {
        #wrapper { width: 80%; margin: 2em auto; }
        #icon-book { display: inline-block; }
        #status a, #next a { display: block; }

        @-webkit-keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        @keyframes fade-in { 0% { opacity: 0; } 100% { opacity: 1; } }
        .sf-toolbar { opacity: 0; -webkit-animation: fade-in 1s .2s forwards; animation: fade-in 1s .2s forwards;}
    }
</style>
{% endblock %}
", "default/homepage.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\app\\Resources\\views\\default\\homepage.html.twig");
    }
}
