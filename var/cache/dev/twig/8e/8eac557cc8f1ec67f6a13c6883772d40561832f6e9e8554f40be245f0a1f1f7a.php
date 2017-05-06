<?php

/* planet/overview.html.twig */
class __TwigTemplate_228a55978716626ef37e4e0edb9c015c8cc0def0fff1c791efbac68c832bc138 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planet/overview.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_85dda80094d2c4c30685f692212faeb8f92ef733a02ec855c86bfd286c42dbcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85dda80094d2c4c30685f692212faeb8f92ef733a02ec855c86bfd286c42dbcd->enter($__internal_85dda80094d2c4c30685f692212faeb8f92ef733a02ec855c86bfd286c42dbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planet/overview.html.twig"));

        $__internal_b2b96cf232804b1bfd5b55967e6696a8fe313c939f1a34de093310e369dbfe2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2b96cf232804b1bfd5b55967e6696a8fe313c939f1a34de093310e369dbfe2e->enter($__internal_b2b96cf232804b1bfd5b55967e6696a8fe313c939f1a34de093310e369dbfe2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planet/overview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_85dda80094d2c4c30685f692212faeb8f92ef733a02ec855c86bfd286c42dbcd->leave($__internal_85dda80094d2c4c30685f692212faeb8f92ef733a02ec855c86bfd286c42dbcd_prof);

        
        $__internal_b2b96cf232804b1bfd5b55967e6696a8fe313c939f1a34de093310e369dbfe2e->leave($__internal_b2b96cf232804b1bfd5b55967e6696a8fe313c939f1a34de093310e369dbfe2e_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_1f09b68b2574a9d5688db7a3909ac4b8e349c13fcdb8af5b0282bbb879bd3fca = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f09b68b2574a9d5688db7a3909ac4b8e349c13fcdb8af5b0282bbb879bd3fca->enter($__internal_1f09b68b2574a9d5688db7a3909ac4b8e349c13fcdb8af5b0282bbb879bd3fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_3ef16b9e6726f9514e12be5d2dcf3da2eecb8f747c3f6161fbecb436064b64eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ef16b9e6726f9514e12be5d2dcf3da2eecb8f747c3f6161fbecb436064b64eb->enter($__internal_3ef16b9e6726f9514e12be5d2dcf3da2eecb8f747c3f6161fbecb436064b64eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"col-md-4 col-md-offset-4\">
                <h1 class=\"col-md-4 col-md-offset-4\">Xel'Naga</h1>
        </div>
    </div>
";
        
        $__internal_3ef16b9e6726f9514e12be5d2dcf3da2eecb8f747c3f6161fbecb436064b64eb->leave($__internal_3ef16b9e6726f9514e12be5d2dcf3da2eecb8f747c3f6161fbecb436064b64eb_prof);

        
        $__internal_1f09b68b2574a9d5688db7a3909ac4b8e349c13fcdb8af5b0282bbb879bd3fca->leave($__internal_1f09b68b2574a9d5688db7a3909ac4b8e349c13fcdb8af5b0282bbb879bd3fca_prof);

    }

    public function getTemplateName()
    {
        return "planet/overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block main %}
    <div class=\"container\">
        <div class=\"col-md-4 col-md-offset-4\">
                <h1 class=\"col-md-4 col-md-offset-4\">Xel'Naga</h1>
        </div>
    </div>
{% endblock %}

", "planet/overview.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\app\\Resources\\views\\planet\\overview.html.twig");
    }
}
