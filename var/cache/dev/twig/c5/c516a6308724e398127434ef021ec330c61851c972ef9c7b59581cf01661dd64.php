<?php

/* universe/universe.html.twig */
class __TwigTemplate_d7c3ab81c000ff4464f1cbb58e3fb8281f4e0db9826af25b84c2ecc26ee7bbc1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "universe/universe.html.twig", 1);
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
        $__internal_802dcdf8b6e8bda6d4cc1fa2c6e2d05e2d4d6b50ea0a4d679d2493ce4ae53dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_802dcdf8b6e8bda6d4cc1fa2c6e2d05e2d4d6b50ea0a4d679d2493ce4ae53dd0->enter($__internal_802dcdf8b6e8bda6d4cc1fa2c6e2d05e2d4d6b50ea0a4d679d2493ce4ae53dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "universe/universe.html.twig"));

        $__internal_e02e0748889ec6e290552e216c67c7c231798270a11b9ef80930b5a51a039361 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e02e0748889ec6e290552e216c67c7c231798270a11b9ef80930b5a51a039361->enter($__internal_e02e0748889ec6e290552e216c67c7c231798270a11b9ef80930b5a51a039361_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "universe/universe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_802dcdf8b6e8bda6d4cc1fa2c6e2d05e2d4d6b50ea0a4d679d2493ce4ae53dd0->leave($__internal_802dcdf8b6e8bda6d4cc1fa2c6e2d05e2d4d6b50ea0a4d679d2493ce4ae53dd0_prof);

        
        $__internal_e02e0748889ec6e290552e216c67c7c231798270a11b9ef80930b5a51a039361->leave($__internal_e02e0748889ec6e290552e216c67c7c231798270a11b9ef80930b5a51a039361_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_e95bf885bb4316afa3d5303386455030bb3193331e76da0d8c8411d9736e8691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e95bf885bb4316afa3d5303386455030bb3193331e76da0d8c8411d9736e8691->enter($__internal_e95bf885bb4316afa3d5303386455030bb3193331e76da0d8c8411d9736e8691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8995d062a9b27cec4ecd11a21a153a6612ea67e3f8c6ae0fa6476f24cd35239 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8995d062a9b27cec4ecd11a21a153a6612ea67e3f8c6ae0fa6476f24cd35239->enter($__internal_b8995d062a9b27cec4ecd11a21a153a6612ea67e3f8c6ae0fa6476f24cd35239_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Galaxy Map
";
        
        $__internal_b8995d062a9b27cec4ecd11a21a153a6612ea67e3f8c6ae0fa6476f24cd35239->leave($__internal_b8995d062a9b27cec4ecd11a21a153a6612ea67e3f8c6ae0fa6476f24cd35239_prof);

        
        $__internal_e95bf885bb4316afa3d5303386455030bb3193331e76da0d8c8411d9736e8691->leave($__internal_e95bf885bb4316afa3d5303386455030bb3193331e76da0d8c8411d9736e8691_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_ee2358aa4530e9c15fbc350744d6978ca836f924987e40b0015896e14289f0ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee2358aa4530e9c15fbc350744d6978ca836f924987e40b0015896e14289f0ad->enter($__internal_ee2358aa4530e9c15fbc350744d6978ca836f924987e40b0015896e14289f0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_6983765246722140586ad57950eec7d24f13463420adc182d527d316135a4080 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6983765246722140586ad57950eec7d24f13463420adc182d527d316135a4080->enter($__internal_6983765246722140586ad57950eec7d24f13463420adc182d527d316135a4080_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <div class=\"container\">
        <div class=\"col-md-2 col-md-offset-2\">
            <table border=\"1\">
                ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["planet_matrix"] ?? $this->getContext($context, "planet_matrix")));
        foreach ($context['_seq'] as $context["x"] => $context["coordinates"]) {
            // line 12
            echo "                    <tr>
                        ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["coordinates"]);
            foreach ($context['_seq'] as $context["y"] => $context["planet"]) {
                // line 14
                echo "                            <td id=\"map_planet\">
                                ";
                // line 15
                if (($context["planet"] == null)) {
                    // line 16
                    echo "                                    <img src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bg1.jpg"), "html", null, true);
                    echo "\" id=\"map_planet\">
                                ";
                } else {
                    // line 18
                    echo "                                    ";
                    if (($this->getAttribute($context["planet"], "user", array()) == ($context["user"] ?? $this->getContext($context, "user")))) {
                        // line 19
                        echo "                                        <a href=\"";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("overview");
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/str1.png"), "html", null, true);
                        echo "\" id=\"map_planet\"></a>
                                    ";
                    } else {
                        // line 21
                        echo "                                        <a href=\"";
                        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("campaign");
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/str2.png"), "html", null, true);
                        echo "\" id=\"map_planet\"></a>
                                    ";
                    }
                    // line 23
                    echo "                                ";
                }
                // line 24
                echo "                            </td>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['y'], $context['planet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 26
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['x'], $context['coordinates'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </table>
        </div>
    </div>
";
        
        $__internal_6983765246722140586ad57950eec7d24f13463420adc182d527d316135a4080->leave($__internal_6983765246722140586ad57950eec7d24f13463420adc182d527d316135a4080_prof);

        
        $__internal_ee2358aa4530e9c15fbc350744d6978ca836f924987e40b0015896e14289f0ad->leave($__internal_ee2358aa4530e9c15fbc350744d6978ca836f924987e40b0015896e14289f0ad_prof);

    }

    public function getTemplateName()
    {
        return "universe/universe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 28,  126 => 26,  119 => 24,  116 => 23,  108 => 21,  100 => 19,  97 => 18,  91 => 16,  89 => 15,  86 => 14,  82 => 13,  79 => 12,  75 => 11,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    Galaxy Map
{% endblock %}

{% block main %}
    <div class=\"container\">
        <div class=\"col-md-2 col-md-offset-2\">
            <table border=\"1\">
                {% for x,coordinates in planet_matrix %}
                    <tr>
                        {% for y,planet in coordinates %}
                            <td id=\"map_planet\">
                                {% if planet == null %}
                                    <img src=\"{{ asset('img/bg1.jpg') }}\" id=\"map_planet\">
                                {% else %}
                                    {% if planet.user == user %}
                                        <a href=\"{{ path('overview') }}\"><img src=\"{{ asset('img/str1.png') }}\" id=\"map_planet\"></a>
                                    {% else %}
                                        <a href=\"{{ path('campaign') }}\"><img src=\"{{ asset('img/str2.png') }}\" id=\"map_planet\"></a>
                                    {% endif %}
                                {% endif %}
                            </td>
                        {% endfor %}
                    </tr>
                {% endfor %}
            </table>
        </div>
    </div>
{% endblock %}", "universe/universe.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\app\\Resources\\views\\universe\\universe.html.twig");
    }
}
