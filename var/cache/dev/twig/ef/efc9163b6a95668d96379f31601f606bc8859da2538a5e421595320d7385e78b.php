<?php

/* authentication/login.html.twig */
class __TwigTemplate_5143a993a7dce5ffe46c4a0a6ffe06c6dd65c90ef8909562fb0a9ed7e78a3864 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "authentication/login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_df444414d61909dda241222eae41912a6dc3d8db0824dbccca6da642ae1fb4e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df444414d61909dda241222eae41912a6dc3d8db0824dbccca6da642ae1fb4e3->enter($__internal_df444414d61909dda241222eae41912a6dc3d8db0824dbccca6da642ae1fb4e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentication/login.html.twig"));

        $__internal_5a14ae59a5b713ba4282c9295c00bde22503a820e8490544599376ebd676833b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a14ae59a5b713ba4282c9295c00bde22503a820e8490544599376ebd676833b->enter($__internal_5a14ae59a5b713ba4282c9295c00bde22503a820e8490544599376ebd676833b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentication/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df444414d61909dda241222eae41912a6dc3d8db0824dbccca6da642ae1fb4e3->leave($__internal_df444414d61909dda241222eae41912a6dc3d8db0824dbccca6da642ae1fb4e3_prof);

        
        $__internal_5a14ae59a5b713ba4282c9295c00bde22503a820e8490544599376ebd676833b->leave($__internal_5a14ae59a5b713ba4282c9295c00bde22503a820e8490544599376ebd676833b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_76b1cfcc1692ca001d992a8b376d2ee1dc97c8ab2802cb668ce00b8741294c70 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76b1cfcc1692ca001d992a8b376d2ee1dc97c8ab2802cb668ce00b8741294c70->enter($__internal_76b1cfcc1692ca001d992a8b376d2ee1dc97c8ab2802cb668ce00b8741294c70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a2b0bc9d1a61628d83b811b0bb8441dc63af7af3a3b039aead12e524e00b3f79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b0bc9d1a61628d83b811b0bb8441dc63af7af3a3b039aead12e524e00b3f79->enter($__internal_a2b0bc9d1a61628d83b811b0bb8441dc63af7af3a3b039aead12e524e00b3f79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Log In
";
        
        $__internal_a2b0bc9d1a61628d83b811b0bb8441dc63af7af3a3b039aead12e524e00b3f79->leave($__internal_a2b0bc9d1a61628d83b811b0bb8441dc63af7af3a3b039aead12e524e00b3f79_prof);

        
        $__internal_76b1cfcc1692ca001d992a8b376d2ee1dc97c8ab2802cb668ce00b8741294c70->leave($__internal_76b1cfcc1692ca001d992a8b376d2ee1dc97c8ab2802cb668ce00b8741294c70_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_23c2247dcc5e7083eadb5e8d966dada75c699c0a233283df5e23c90ab2c3c469 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c2247dcc5e7083eadb5e8d966dada75c699c0a233283df5e23c90ab2c3c469->enter($__internal_23c2247dcc5e7083eadb5e8d966dada75c699c0a233283df5e23c90ab2c3c469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_29e3458251588d296a0d1a7169a4e20d52420052ee71852ae61943fa8e1379dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29e3458251588d296a0d1a7169a4e20d52420052ee71852ae61943fa8e1379dd->enter($__internal_29e3458251588d296a0d1a7169a4e20d52420052ee71852ae61943fa8e1379dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            echo "        <div class=\"alert alert-success\">
            <strong>";
            // line 11
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "</strong>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
    <div>
        ";
        // line 17
        echo "        <h1> Log In</h1>

        ";
        // line 20
        echo "        ";
        // line 21
        echo "    </div>

    <form method=\"post\">
        Username: <input title=\"\" type=\"text\" name=\"_username\"/><br/>
        Password: <input title=\"\" type=\"password\" name=\"_password\"/><br/>
        ";
        // line 27
        echo "        <input type=\"submit\" value=\"Login!\">
    </form>

";
        
        $__internal_29e3458251588d296a0d1a7169a4e20d52420052ee71852ae61943fa8e1379dd->leave($__internal_29e3458251588d296a0d1a7169a4e20d52420052ee71852ae61943fa8e1379dd_prof);

        
        $__internal_23c2247dcc5e7083eadb5e8d966dada75c699c0a233283df5e23c90ab2c3c469->leave($__internal_23c2247dcc5e7083eadb5e8d966dada75c699c0a233283df5e23c90ab2c3c469_prof);

    }

    public function getTemplateName()
    {
        return "authentication/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 27,  99 => 21,  97 => 20,  93 => 17,  89 => 14,  80 => 11,  77 => 10,  73 => 9,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"base.html.twig\" %}

{% block title %}
    Log In
{% endblock %}

{% block main %}

    {% for message in app.session.flashBag.get('success') %}
        <div class=\"alert alert-success\">
            <strong>{{ message }}</strong>
        </div>
    {% endfor %}

    <div>
        {#Title#}
        <h1> Log In</h1>

        {#notification service goes here#}
        {#TODO: notification service#}
    </div>

    <form method=\"post\">
        Username: <input title=\"\" type=\"text\" name=\"_username\"/><br/>
        Password: <input title=\"\" type=\"password\" name=\"_password\"/><br/>
        {#<input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\"/>#}
        <input type=\"submit\" value=\"Login!\">
    </form>

{% endblock %}", "authentication/login.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\app\\Resources\\views\\authentication\\login.html.twig");
    }
}
