<?php

/* universe/planet/buildings.html.twig */
class __TwigTemplate_2d4517ff23f90952c55860d0aabd340189d7099ae6c3ab93ea1520dc40e462c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "universe/planet/buildings.html.twig", 1);
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
        $__internal_a9f7b10b709d8f2d1e33e63db3a5c6af185aa8a106caf42ca8a46061d6ac3eeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9f7b10b709d8f2d1e33e63db3a5c6af185aa8a106caf42ca8a46061d6ac3eeb->enter($__internal_a9f7b10b709d8f2d1e33e63db3a5c6af185aa8a106caf42ca8a46061d6ac3eeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "universe/planet/buildings.html.twig"));

        $__internal_d76a0ce9992ab221882d172241dd52b5710c64f993026a3b5153683db2112ca7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d76a0ce9992ab221882d172241dd52b5710c64f993026a3b5153683db2112ca7->enter($__internal_d76a0ce9992ab221882d172241dd52b5710c64f993026a3b5153683db2112ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "universe/planet/buildings.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9f7b10b709d8f2d1e33e63db3a5c6af185aa8a106caf42ca8a46061d6ac3eeb->leave($__internal_a9f7b10b709d8f2d1e33e63db3a5c6af185aa8a106caf42ca8a46061d6ac3eeb_prof);

        
        $__internal_d76a0ce9992ab221882d172241dd52b5710c64f993026a3b5153683db2112ca7->leave($__internal_d76a0ce9992ab221882d172241dd52b5710c64f993026a3b5153683db2112ca7_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebcd65d63e410c11029ddea0c35db48257f2b2b6775d5126ff7162baf8092376 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebcd65d63e410c11029ddea0c35db48257f2b2b6775d5126ff7162baf8092376->enter($__internal_ebcd65d63e410c11029ddea0c35db48257f2b2b6775d5126ff7162baf8092376_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b69c838b597a8d5185bee9b3b8a4b4551157cbb2f2eac828acfbc10956c905b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69c838b597a8d5185bee9b3b8a4b4551157cbb2f2eac828acfbc10956c905b7->enter($__internal_b69c838b597a8d5185bee9b3b8a4b4551157cbb2f2eac828acfbc10956c905b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Building
";
        
        $__internal_b69c838b597a8d5185bee9b3b8a4b4551157cbb2f2eac828acfbc10956c905b7->leave($__internal_b69c838b597a8d5185bee9b3b8a4b4551157cbb2f2eac828acfbc10956c905b7_prof);

        
        $__internal_ebcd65d63e410c11029ddea0c35db48257f2b2b6775d5126ff7162baf8092376->leave($__internal_ebcd65d63e410c11029ddea0c35db48257f2b2b6775d5126ff7162baf8092376_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_585887a87c2f736d9070c6b882bebfffe1a6078e191ab8cfc527af82ddc5db0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_585887a87c2f736d9070c6b882bebfffe1a6078e191ab8cfc527af82ddc5db0e->enter($__internal_585887a87c2f736d9070c6b882bebfffe1a6078e191ab8cfc527af82ddc5db0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_f5b9a9f5f0c7b1d7a1f4506a0b9d07e23d551dc96102e66d324075bd277f8657 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5b9a9f5f0c7b1d7a1f4506a0b9d07e23d551dc96102e66d324075bd277f8657->enter($__internal_f5b9a9f5f0c7b1d7a1f4506a0b9d07e23d551dc96102e66d324075bd277f8657_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <div class=\"container body-content\">
        <div class=\"row\">

            <div id=\"text-center\">
                <img src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/f1.gif"), "html", null, true);
        echo "\">
                ";
        // line 13
        echo twig_escape_filter($this->env, ($context["Minerals"] ?? $this->getContext($context, "Minerals")), "html", null, true);
        echo "
                <img src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/f2.gif"), "html", null, true);
        echo "\">
                ";
        // line 15
        echo twig_escape_filter($this->env, ($context["Hydrogen"] ?? $this->getContext($context, "Hydrogen")), "html", null, true);
        echo "
            </div>

            <table id=\"text-center\" style=\"width:100%\" border=\"1\" >
                <tr id=\"text-center\">
                    <th>Picture</th>
                    <th>Level</th>
                    <th>Name</th>
                    <th>Minerals</th>
                    <th>Hydrogen</th>
                    <th>Time to build</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bs1.jpg"), "html", null, true);
        echo "\"></td>
                    <td>0</td>
                    <td>Mining Facility</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>Start Construction</td>
                </tr>
                <br/>
                <tr>
                    <td><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bs2.jpg"), "html", null, true);
        echo "\"></td>
                    <td>0</td>
                    <td>Hydrogen Extractor</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>Start Construction</td>
                </tr>
                ";
        // line 49
        echo "                <tr>
                    <td><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bs11.jpg"), "html", null, true);
        echo "\"></td>
                    <td>0</td>
                    <td>Shipyard</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>Start Construction</td>
                </tr>
            </table>
        </div>
    </div>
";
        
        $__internal_f5b9a9f5f0c7b1d7a1f4506a0b9d07e23d551dc96102e66d324075bd277f8657->leave($__internal_f5b9a9f5f0c7b1d7a1f4506a0b9d07e23d551dc96102e66d324075bd277f8657_prof);

        
        $__internal_585887a87c2f736d9070c6b882bebfffe1a6078e191ab8cfc527af82ddc5db0e->leave($__internal_585887a87c2f736d9070c6b882bebfffe1a6078e191ab8cfc527af82ddc5db0e_prof);

    }

    public function getTemplateName()
    {
        return "universe/planet/buildings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 50,  130 => 49,  119 => 40,  106 => 30,  88 => 15,  84 => 14,  80 => 13,  76 => 12,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    <div class=\"container body-content\">
        <div class=\"row\">

            <div id=\"text-center\">
                <img src=\"{{ asset('img/f1.gif') }}\">
                {{ Minerals }}
                <img src=\"{{ asset('img/f2.gif') }}\">
                {{ Hydrogen }}
            </div>

            <table id=\"text-center\" style=\"width:100%\" border=\"1\" >
                <tr id=\"text-center\">
                    <th>Picture</th>
                    <th>Level</th>
                    <th>Name</th>
                    <th>Minerals</th>
                    <th>Hydrogen</th>
                    <th>Time to build</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td><img src=\"{{ asset('img/bs1.jpg') }}\"></td>
                    <td>0</td>
                    <td>Mining Facility</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>Start Construction</td>
                </tr>
                <br/>
                <tr>
                    <td><img src=\"{{ asset('img/bs2.jpg') }}\"></td>
                    <td>0</td>
                    <td>Hydrogen Extractor</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>Start Construction</td>
                </tr>
                {#TODO:Make some space#}
                <tr>
                    <td><img src=\"{{ asset('img/bs11.jpg') }}\"></td>
                    <td>0</td>
                    <td>Shipyard</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>Start Construction</td>
                </tr>
            </table>
        </div>
    </div>
{% endblock %}", "universe/planet/buildings.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\app\\Resources\\views\\universe\\planet\\buildings.html.twig");
    }
}
