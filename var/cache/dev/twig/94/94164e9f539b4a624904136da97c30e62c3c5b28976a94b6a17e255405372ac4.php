<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_36cb82f75196bf9e4aab021893c45f899aca6e790c49083d9bb97811da40c120 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_d831bca9c5dcfecc576bdda9c032e4c0e38a03f0fff33f13ee759c94a938c540 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d831bca9c5dcfecc576bdda9c032e4c0e38a03f0fff33f13ee759c94a938c540->enter($__internal_d831bca9c5dcfecc576bdda9c032e4c0e38a03f0fff33f13ee759c94a938c540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_c612ceb7511aa6c2fbe03e80f696af95875bb664b74e40fef0c4e4af93dad699 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c612ceb7511aa6c2fbe03e80f696af95875bb664b74e40fef0c4e4af93dad699->enter($__internal_c612ceb7511aa6c2fbe03e80f696af95875bb664b74e40fef0c4e4af93dad699_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d831bca9c5dcfecc576bdda9c032e4c0e38a03f0fff33f13ee759c94a938c540->leave($__internal_d831bca9c5dcfecc576bdda9c032e4c0e38a03f0fff33f13ee759c94a938c540_prof);

        
        $__internal_c612ceb7511aa6c2fbe03e80f696af95875bb664b74e40fef0c4e4af93dad699->leave($__internal_c612ceb7511aa6c2fbe03e80f696af95875bb664b74e40fef0c4e4af93dad699_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3b608658804a4fef71d5006b54f9c42f7573abcc390a75a4f2e4ea959b568160 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b608658804a4fef71d5006b54f9c42f7573abcc390a75a4f2e4ea959b568160->enter($__internal_3b608658804a4fef71d5006b54f9c42f7573abcc390a75a4f2e4ea959b568160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_60c23b55e9bec51a2c681201a1af0ef3c6edf8a771b7fa6e185d9f486fc31009 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60c23b55e9bec51a2c681201a1af0ef3c6edf8a771b7fa6e185d9f486fc31009->enter($__internal_60c23b55e9bec51a2c681201a1af0ef3c6edf8a771b7fa6e185d9f486fc31009_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_60c23b55e9bec51a2c681201a1af0ef3c6edf8a771b7fa6e185d9f486fc31009->leave($__internal_60c23b55e9bec51a2c681201a1af0ef3c6edf8a771b7fa6e185d9f486fc31009_prof);

        
        $__internal_3b608658804a4fef71d5006b54f9c42f7573abcc390a75a4f2e4ea959b568160->leave($__internal_3b608658804a4fef71d5006b54f9c42f7573abcc390a75a4f2e4ea959b568160_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24ea4eee85ccd0cfb06f4203b590cc457975b9126ca8772a20e322b3a1df1988 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24ea4eee85ccd0cfb06f4203b590cc457975b9126ca8772a20e322b3a1df1988->enter($__internal_24ea4eee85ccd0cfb06f4203b590cc457975b9126ca8772a20e322b3a1df1988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e9fabe674d58b069bc78218e4a27bb3877f423188db34a93e39eebbf9ccf78a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fabe674d58b069bc78218e4a27bb3877f423188db34a93e39eebbf9ccf78a4->enter($__internal_e9fabe674d58b069bc78218e4a27bb3877f423188db34a93e39eebbf9ccf78a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e9fabe674d58b069bc78218e4a27bb3877f423188db34a93e39eebbf9ccf78a4->leave($__internal_e9fabe674d58b069bc78218e4a27bb3877f423188db34a93e39eebbf9ccf78a4_prof);

        
        $__internal_24ea4eee85ccd0cfb06f4203b590cc457975b9126ca8772a20e322b3a1df1988->leave($__internal_24ea4eee85ccd0cfb06f4203b590cc457975b9126ca8772a20e322b3a1df1988_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d34f3a5b7cb48f17dc69697c124251e2349021bf5c9bb8bd2578b6d35f072f7b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d34f3a5b7cb48f17dc69697c124251e2349021bf5c9bb8bd2578b6d35f072f7b->enter($__internal_d34f3a5b7cb48f17dc69697c124251e2349021bf5c9bb8bd2578b6d35f072f7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_70e8e5948249ea77126f1b27ccd440bfbe54af600b30a0cea397c58b689e2344 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_70e8e5948249ea77126f1b27ccd440bfbe54af600b30a0cea397c58b689e2344->enter($__internal_70e8e5948249ea77126f1b27ccd440bfbe54af600b30a0cea397c58b689e2344_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_70e8e5948249ea77126f1b27ccd440bfbe54af600b30a0cea397c58b689e2344->leave($__internal_70e8e5948249ea77126f1b27ccd440bfbe54af600b30a0cea397c58b689e2344_prof);

        
        $__internal_d34f3a5b7cb48f17dc69697c124251e2349021bf5c9bb8bd2578b6d35f072f7b->leave($__internal_d34f3a5b7cb48f17dc69697c124251e2349021bf5c9bb8bd2578b6d35f072f7b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
