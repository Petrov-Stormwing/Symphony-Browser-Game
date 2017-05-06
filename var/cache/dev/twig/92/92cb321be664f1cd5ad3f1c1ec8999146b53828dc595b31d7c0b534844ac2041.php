<?php

/* authentication/register.html.twig */
class __TwigTemplate_a37bda6802b5c0f30d556f70ec04deb64dc8422b3c59ea80cb6b73e0284646cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "authentication/register.html.twig", 1);
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
        $__internal_3e3791462c703e5a21c9aaa2407bdb12427c65db6dabef3b0856a0246fa18225 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3e3791462c703e5a21c9aaa2407bdb12427c65db6dabef3b0856a0246fa18225->enter($__internal_3e3791462c703e5a21c9aaa2407bdb12427c65db6dabef3b0856a0246fa18225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentication/register.html.twig"));

        $__internal_5bde24858cff21725adfdb38f884aab72ea0e02486bc400a92329b66519cd4c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bde24858cff21725adfdb38f884aab72ea0e02486bc400a92329b66519cd4c5->enter($__internal_5bde24858cff21725adfdb38f884aab72ea0e02486bc400a92329b66519cd4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "authentication/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e3791462c703e5a21c9aaa2407bdb12427c65db6dabef3b0856a0246fa18225->leave($__internal_3e3791462c703e5a21c9aaa2407bdb12427c65db6dabef3b0856a0246fa18225_prof);

        
        $__internal_5bde24858cff21725adfdb38f884aab72ea0e02486bc400a92329b66519cd4c5->leave($__internal_5bde24858cff21725adfdb38f884aab72ea0e02486bc400a92329b66519cd4c5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2bda17ef8a3f672117122eece5246a4d0845a31e03180c90406a2ecf66bd01d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bda17ef8a3f672117122eece5246a4d0845a31e03180c90406a2ecf66bd01d4->enter($__internal_2bda17ef8a3f672117122eece5246a4d0845a31e03180c90406a2ecf66bd01d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6179d5ee70caeeff39df6cb7767355e586a365d3411fa4b986b42bc9c308701b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6179d5ee70caeeff39df6cb7767355e586a365d3411fa4b986b42bc9c308701b->enter($__internal_6179d5ee70caeeff39df6cb7767355e586a365d3411fa4b986b42bc9c308701b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Register
";
        
        $__internal_6179d5ee70caeeff39df6cb7767355e586a365d3411fa4b986b42bc9c308701b->leave($__internal_6179d5ee70caeeff39df6cb7767355e586a365d3411fa4b986b42bc9c308701b_prof);

        
        $__internal_2bda17ef8a3f672117122eece5246a4d0845a31e03180c90406a2ecf66bd01d4->leave($__internal_2bda17ef8a3f672117122eece5246a4d0845a31e03180c90406a2ecf66bd01d4_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_5a56edf014689eba752e033e203f5a0e23b8d3a429cf31cb6eb1f28398194e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a56edf014689eba752e033e203f5a0e23b8d3a429cf31cb6eb1f28398194e1e->enter($__internal_5a56edf014689eba752e033e203f5a0e23b8d3a429cf31cb6eb1f28398194e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_8b711b57c09420a4dd7c40402f6aa2b330193ffcba965f8306d9742217f4b613 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b711b57c09420a4dd7c40402f6aa2b330193ffcba965f8306d9742217f4b613->enter($__internal_8b711b57c09420a4dd7c40402f6aa2b330193ffcba965f8306d9742217f4b613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <div class=\"container\">
        <h1 class=\"text-center\">Register</h1>
        <div class=\"col-md-4 col-md-offset-4\">
            ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            <div class=\"text-center\">
                <button class=\"btn btn-primary\" type=\"submit\" formnovalidate>Register!</button>
                <button class=\"btn btn-danger\" type=\"button\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Cancel</button>
            </div>
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_8b711b57c09420a4dd7c40402f6aa2b330193ffcba965f8306d9742217f4b613->leave($__internal_8b711b57c09420a4dd7c40402f6aa2b330193ffcba965f8306d9742217f4b613_prof);

        
        $__internal_5a56edf014689eba752e033e203f5a0e23b8d3a429cf31cb6eb1f28398194e1e->leave($__internal_5a56edf014689eba752e033e203f5a0e23b8d3a429cf31cb6eb1f28398194e1e_prof);

    }

    public function getTemplateName()
    {
        return "authentication/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 17,  85 => 15,  79 => 12,  75 => 11,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    Register
{% endblock %}

{% block main %}
    <div class=\"container\">
        <h1 class=\"text-center\">Register</h1>
        <div class=\"col-md-4 col-md-offset-4\">
            {{ form_start(form) }}
            {{ form_widget(form) }}
            <div class=\"text-center\">
                <button class=\"btn btn-primary\" type=\"submit\" formnovalidate>Register!</button>
                <button class=\"btn btn-danger\" type=\"button\" href=\"{{ path('home') }}\">Cancel</button>
            </div>
            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}", "authentication/register.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\app\\Resources\\views\\authentication\\register.html.twig");
    }
}
