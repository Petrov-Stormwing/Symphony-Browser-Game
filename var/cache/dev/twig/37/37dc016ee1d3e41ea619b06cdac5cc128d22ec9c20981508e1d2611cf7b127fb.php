<?php

/* features/about.html.twig */
class __TwigTemplate_74097821a085aa9d2ab04bfaafbca8ce9b8592e9ac3f1d2c967508372ecce484 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "features/about.html.twig", 1);
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
        $__internal_e73682d16cfd292a6e81bdc13d71a1fca1740b78b0c106f0cec33619dfba37dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e73682d16cfd292a6e81bdc13d71a1fca1740b78b0c106f0cec33619dfba37dc->enter($__internal_e73682d16cfd292a6e81bdc13d71a1fca1740b78b0c106f0cec33619dfba37dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "features/about.html.twig"));

        $__internal_48e5a0f1e8b4dcc06331b3f172b543e66b842cd07d25e64b6350f6e6aff94efd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48e5a0f1e8b4dcc06331b3f172b543e66b842cd07d25e64b6350f6e6aff94efd->enter($__internal_48e5a0f1e8b4dcc06331b3f172b543e66b842cd07d25e64b6350f6e6aff94efd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "features/about.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e73682d16cfd292a6e81bdc13d71a1fca1740b78b0c106f0cec33619dfba37dc->leave($__internal_e73682d16cfd292a6e81bdc13d71a1fca1740b78b0c106f0cec33619dfba37dc_prof);

        
        $__internal_48e5a0f1e8b4dcc06331b3f172b543e66b842cd07d25e64b6350f6e6aff94efd->leave($__internal_48e5a0f1e8b4dcc06331b3f172b543e66b842cd07d25e64b6350f6e6aff94efd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_85c9faebd2c6bf1b9256fcc0c147134492564b31af4024163c808ea2de547098 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_85c9faebd2c6bf1b9256fcc0c147134492564b31af4024163c808ea2de547098->enter($__internal_85c9faebd2c6bf1b9256fcc0c147134492564b31af4024163c808ea2de547098_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_43e3788a85263ad4fe3d223af5e28c8f13ace5a9259b43c93a0dfd2146c3d7b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43e3788a85263ad4fe3d223af5e28c8f13ace5a9259b43c93a0dfd2146c3d7b8->enter($__internal_43e3788a85263ad4fe3d223af5e28c8f13ace5a9259b43c93a0dfd2146c3d7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    About
";
        
        $__internal_43e3788a85263ad4fe3d223af5e28c8f13ace5a9259b43c93a0dfd2146c3d7b8->leave($__internal_43e3788a85263ad4fe3d223af5e28c8f13ace5a9259b43c93a0dfd2146c3d7b8_prof);

        
        $__internal_85c9faebd2c6bf1b9256fcc0c147134492564b31af4024163c808ea2de547098->leave($__internal_85c9faebd2c6bf1b9256fcc0c147134492564b31af4024163c808ea2de547098_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_662b2f9c016b3e72941ec4bb4d718d853c4db7332f2e2d7250ddd9637c363920 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_662b2f9c016b3e72941ec4bb4d718d853c4db7332f2e2d7250ddd9637c363920->enter($__internal_662b2f9c016b3e72941ec4bb4d718d853c4db7332f2e2d7250ddd9637c363920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_464cb39f1205170ca3250b7df425706910b0be27acce8879752d88d6ae835e79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_464cb39f1205170ca3250b7df425706910b0be27acce8879752d88d6ae835e79->enter($__internal_464cb39f1205170ca3250b7df425706910b0be27acce8879752d88d6ae835e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <div class=\"text-center\">
        <h1>Xel'Naga Enterprise</h1>

        <h2> Game Designer</h2>
        <p>Simeon Petrov</p>

        <h2> Lead Developer</h2>
        <p>Simeon Petrov</p>

        <h2> Designer </h2>
        <p>Simeon Petrov</p>

        <h2> Art </h2>
        <p>Star Empire RIP </p>
    </div>

";
        
        $__internal_464cb39f1205170ca3250b7df425706910b0be27acce8879752d88d6ae835e79->leave($__internal_464cb39f1205170ca3250b7df425706910b0be27acce8879752d88d6ae835e79_prof);

        
        $__internal_662b2f9c016b3e72941ec4bb4d718d853c4db7332f2e2d7250ddd9637c363920->leave($__internal_662b2f9c016b3e72941ec4bb4d718d853c4db7332f2e2d7250ddd9637c363920_prof);

    }

    public function getTemplateName()
    {
        return "features/about.html.twig";
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
    About
{% endblock %}

{% block main %}
    <div class=\"text-center\">
        <h1>Xel'Naga Enterprise</h1>

        <h2> Game Designer</h2>
        <p>Simeon Petrov</p>

        <h2> Lead Developer</h2>
        <p>Simeon Petrov</p>

        <h2> Designer </h2>
        <p>Simeon Petrov</p>

        <h2> Art </h2>
        <p>Star Empire RIP </p>
    </div>

{% endblock %}", "features/about.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\app\\Resources\\views\\features\\about.html.twig");
    }
}
