<?php

/* planet/buildings.html.twig */
class __TwigTemplate_96f3da3e4cbb1c975c5230a788afe42d737af4410e66df46948ee5b311a88ba3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "planet/buildings.html.twig", 1);
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
        $__internal_751087b847b0859110707c7bcb9b902fe5d165ba9eaa6210083470000b24f7e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_751087b847b0859110707c7bcb9b902fe5d165ba9eaa6210083470000b24f7e6->enter($__internal_751087b847b0859110707c7bcb9b902fe5d165ba9eaa6210083470000b24f7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planet/buildings.html.twig"));

        $__internal_5e03ee6a216ed587445ab9f3eb65db64f8e2575e608fe4ae085346e46146bb25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e03ee6a216ed587445ab9f3eb65db64f8e2575e608fe4ae085346e46146bb25->enter($__internal_5e03ee6a216ed587445ab9f3eb65db64f8e2575e608fe4ae085346e46146bb25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "planet/buildings.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_751087b847b0859110707c7bcb9b902fe5d165ba9eaa6210083470000b24f7e6->leave($__internal_751087b847b0859110707c7bcb9b902fe5d165ba9eaa6210083470000b24f7e6_prof);

        
        $__internal_5e03ee6a216ed587445ab9f3eb65db64f8e2575e608fe4ae085346e46146bb25->leave($__internal_5e03ee6a216ed587445ab9f3eb65db64f8e2575e608fe4ae085346e46146bb25_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e598318afd4b120246257a70c1fe0d313d45419b4a1a2ce803e562f569861383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e598318afd4b120246257a70c1fe0d313d45419b4a1a2ce803e562f569861383->enter($__internal_e598318afd4b120246257a70c1fe0d313d45419b4a1a2ce803e562f569861383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_64523a66e39d8b6835e7ad5f32cc7cabd9b05f971145369f2c0a64e78f1c82b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64523a66e39d8b6835e7ad5f32cc7cabd9b05f971145369f2c0a64e78f1c82b4->enter($__internal_64523a66e39d8b6835e7ad5f32cc7cabd9b05f971145369f2c0a64e78f1c82b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Building
";
        
        $__internal_64523a66e39d8b6835e7ad5f32cc7cabd9b05f971145369f2c0a64e78f1c82b4->leave($__internal_64523a66e39d8b6835e7ad5f32cc7cabd9b05f971145369f2c0a64e78f1c82b4_prof);

        
        $__internal_e598318afd4b120246257a70c1fe0d313d45419b4a1a2ce803e562f569861383->leave($__internal_e598318afd4b120246257a70c1fe0d313d45419b4a1a2ce803e562f569861383_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_6bf829fe9ca1209337c5c507db527f11211888c355ee3647a78ffb4ac4a9d4fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6bf829fe9ca1209337c5c507db527f11211888c355ee3647a78ffb4ac4a9d4fd->enter($__internal_6bf829fe9ca1209337c5c507db527f11211888c355ee3647a78ffb4ac4a9d4fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_efee55aa4596a15ee8b2cd0df8a6366de40416f8330ff32d31cdfe7c1098e629 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efee55aa4596a15ee8b2cd0df8a6366de40416f8330ff32d31cdfe7c1098e629->enter($__internal_efee55aa4596a15ee8b2cd0df8a6366de40416f8330ff32d31cdfe7c1098e629_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    buildings go in here
";
        
        $__internal_efee55aa4596a15ee8b2cd0df8a6366de40416f8330ff32d31cdfe7c1098e629->leave($__internal_efee55aa4596a15ee8b2cd0df8a6366de40416f8330ff32d31cdfe7c1098e629_prof);

        
        $__internal_6bf829fe9ca1209337c5c507db527f11211888c355ee3647a78ffb4ac4a9d4fd->leave($__internal_6bf829fe9ca1209337c5c507db527f11211888c355ee3647a78ffb4ac4a9d4fd_prof);

    }

    public function getTemplateName()
    {
        return "planet/buildings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    Building
{% endblock %}

{% block main %}
    buildings go in here
{% endblock %}", "planet/buildings.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\app\\Resources\\views\\planet\\buildings.html.twig");
    }
}
