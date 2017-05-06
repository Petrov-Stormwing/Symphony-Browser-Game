<?php

/* default/homepage.html.twig */
class __TwigTemplate_44a1c55df374d2aff5fcf61dd95184ad0e7421505ebf60e306346f9af5f51da9 extends Twig_Template
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
        $__internal_4f2ba14d422acd6681fb66d4da4ede113ab0184c1ec48119140110ab81d74499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f2ba14d422acd6681fb66d4da4ede113ab0184c1ec48119140110ab81d74499->enter($__internal_4f2ba14d422acd6681fb66d4da4ede113ab0184c1ec48119140110ab81d74499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $__internal_8b0705e49d532e16d088a4cb272d602dfc69b24ea9f8a512fe5ecbc82df67094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b0705e49d532e16d088a4cb272d602dfc69b24ea9f8a512fe5ecbc82df67094->enter($__internal_8b0705e49d532e16d088a4cb272d602dfc69b24ea9f8a512fe5ecbc82df67094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "default/homepage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4f2ba14d422acd6681fb66d4da4ede113ab0184c1ec48119140110ab81d74499->leave($__internal_4f2ba14d422acd6681fb66d4da4ede113ab0184c1ec48119140110ab81d74499_prof);

        
        $__internal_8b0705e49d532e16d088a4cb272d602dfc69b24ea9f8a512fe5ecbc82df67094->leave($__internal_8b0705e49d532e16d088a4cb272d602dfc69b24ea9f8a512fe5ecbc82df67094_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_7de4137e402f2d618f15e5ce820f9a33d256d2acd320b7c05a05766a12f1f8d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7de4137e402f2d618f15e5ce820f9a33d256d2acd320b7c05a05766a12f1f8d5->enter($__internal_7de4137e402f2d618f15e5ce820f9a33d256d2acd320b7c05a05766a12f1f8d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_13e7849c3de97fff6cc91899b0e5aefb66d87a5dfea2eff44c4447d5313bc19a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e7849c3de97fff6cc91899b0e5aefb66d87a5dfea2eff44c4447d5313bc19a->enter($__internal_13e7849c3de97fff6cc91899b0e5aefb66d87a5dfea2eff44c4447d5313bc19a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\" align=\"center\">
                <h1><span>Welcome to</span> Symfony ";
        // line 7
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "</h1>
            </div>

            <div id=\"status\" align=\"center\">
                <p>
                    <svg id=\"icon-status\" width=\"120\" height=\"120\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>

                    ";
        // line 15
        echo "                    ";
        // line 16
        echo "                </p>
            </div>

            <div id=\"next\" align=\"center\">
                <h2>What's next?</h2>
                <p align=\"center\">
                    Read the documentation to learn
                    <a href=\"http://symfony.com/doc/";
        // line 23
        echo twig_escape_filter($this->env, twig_slice($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), 0, 3), "html", null, true);
        echo "/page_creation.html\">
                        How to create your first page in Symfony
                    </a>
                </p>
            </div>

        </div>
    </div>
";
        
        $__internal_13e7849c3de97fff6cc91899b0e5aefb66d87a5dfea2eff44c4447d5313bc19a->leave($__internal_13e7849c3de97fff6cc91899b0e5aefb66d87a5dfea2eff44c4447d5313bc19a_prof);

        
        $__internal_7de4137e402f2d618f15e5ce820f9a33d256d2acd320b7c05a05766a12f1f8d5->leave($__internal_7de4137e402f2d618f15e5ce820f9a33d256d2acd320b7c05a05766a12f1f8d5_prof);

    }

    // line 33
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ce214ceaa7eaeef15da9cf094ccab83be840e1319d6c656d57e076753992632a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce214ceaa7eaeef15da9cf094ccab83be840e1319d6c656d57e076753992632a->enter($__internal_ce214ceaa7eaeef15da9cf094ccab83be840e1319d6c656d57e076753992632a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_22ae9d099fbd979c5cdf877466b3018d458b6d5f1b52677a5f6bceb1e25e3227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22ae9d099fbd979c5cdf877466b3018d458b6d5f1b52677a5f6bceb1e25e3227->enter($__internal_22ae9d099fbd979c5cdf877466b3018d458b6d5f1b52677a5f6bceb1e25e3227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_22ae9d099fbd979c5cdf877466b3018d458b6d5f1b52677a5f6bceb1e25e3227->leave($__internal_22ae9d099fbd979c5cdf877466b3018d458b6d5f1b52677a5f6bceb1e25e3227_prof);

        
        $__internal_ce214ceaa7eaeef15da9cf094ccab83be840e1319d6c656d57e076753992632a->leave($__internal_ce214ceaa7eaeef15da9cf094ccab83be840e1319d6c656d57e076753992632a_prof);

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
        return array (  104 => 34,  95 => 33,  76 => 23,  67 => 16,  65 => 15,  55 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    <div id=\"wrapper\">
        <div id=\"container\">
            <div id=\"welcome\" align=\"center\">
                <h1><span>Welcome to</span> Symfony {{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}</h1>
            </div>

            <div id=\"status\" align=\"center\">
                <p>
                    <svg id=\"icon-status\" width=\"120\" height=\"120\" viewBox=\"0 0 1792 1792\" xmlns=\"http://www.w3.org/2000/svg\"><path d=\"M1671 566q0 40-28 68l-724 724-136 136q-28 28-68 28t-68-28l-136-136-362-362q-28-28-28-68t28-68l136-136q28-28 68-28t68 28l294 295 656-657q28-28 68-28t68 28l136 136q28 28 28 68z\" fill=\"#759E1A\"/></svg>

                    {#Your application is now ready. You can start working on it at:#}
                    {#<code>{{ base_dir }}</code>#}
                </p>
            </div>

            <div id=\"next\" align=\"center\">
                <h2>What's next?</h2>
                <p align=\"center\">
                    Read the documentation to learn
                    <a href=\"http://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION')[:3] }}/page_creation.html\">
                        How to create your first page in Symfony
                    </a>
                </p>
            </div>

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
