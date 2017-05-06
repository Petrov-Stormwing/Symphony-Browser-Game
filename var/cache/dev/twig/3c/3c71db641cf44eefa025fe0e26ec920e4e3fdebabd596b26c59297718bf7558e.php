<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_df5c3e9132aebab06c01322dba56b125e31ad676300d450657f3b498db87fd9d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_49d22cf36ac4c8269fd9ac577e123787142e0ef9135a005a3304ebaf0970266a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49d22cf36ac4c8269fd9ac577e123787142e0ef9135a005a3304ebaf0970266a->enter($__internal_49d22cf36ac4c8269fd9ac577e123787142e0ef9135a005a3304ebaf0970266a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_3eed18f79e3b4122f6f772a342d0bc41edc666613f428a93bcdbd5895e846a98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3eed18f79e3b4122f6f772a342d0bc41edc666613f428a93bcdbd5895e846a98->enter($__internal_3eed18f79e3b4122f6f772a342d0bc41edc666613f428a93bcdbd5895e846a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_49d22cf36ac4c8269fd9ac577e123787142e0ef9135a005a3304ebaf0970266a->leave($__internal_49d22cf36ac4c8269fd9ac577e123787142e0ef9135a005a3304ebaf0970266a_prof);

        
        $__internal_3eed18f79e3b4122f6f772a342d0bc41edc666613f428a93bcdbd5895e846a98->leave($__internal_3eed18f79e3b4122f6f772a342d0bc41edc666613f428a93bcdbd5895e846a98_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
