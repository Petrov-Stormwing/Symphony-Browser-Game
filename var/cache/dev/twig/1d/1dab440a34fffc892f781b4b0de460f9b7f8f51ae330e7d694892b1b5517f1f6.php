<?php

/* universe/planet/shipyard.html.twig */
class __TwigTemplate_c75b68581d1c5d21320d7e1262eef8ab46e91c1b263339c6ba6d5bf02eebd19c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "universe/planet/shipyard.html.twig", 1);
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
        $__internal_900e252bf93320b33189a92bf86b07aae93db10fcd3a38793ec822f045517636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_900e252bf93320b33189a92bf86b07aae93db10fcd3a38793ec822f045517636->enter($__internal_900e252bf93320b33189a92bf86b07aae93db10fcd3a38793ec822f045517636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "universe/planet/shipyard.html.twig"));

        $__internal_d756373184d23a541d3f3cddabe280900d9c909cb1b61987450c1219a71dd147 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d756373184d23a541d3f3cddabe280900d9c909cb1b61987450c1219a71dd147->enter($__internal_d756373184d23a541d3f3cddabe280900d9c909cb1b61987450c1219a71dd147_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "universe/planet/shipyard.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_900e252bf93320b33189a92bf86b07aae93db10fcd3a38793ec822f045517636->leave($__internal_900e252bf93320b33189a92bf86b07aae93db10fcd3a38793ec822f045517636_prof);

        
        $__internal_d756373184d23a541d3f3cddabe280900d9c909cb1b61987450c1219a71dd147->leave($__internal_d756373184d23a541d3f3cddabe280900d9c909cb1b61987450c1219a71dd147_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c8f30298684fa7d74a3962c335e4ab1803ff0fa5632794ab1a9b8a745243784c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8f30298684fa7d74a3962c335e4ab1803ff0fa5632794ab1a9b8a745243784c->enter($__internal_c8f30298684fa7d74a3962c335e4ab1803ff0fa5632794ab1a9b8a745243784c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5cf8b19afffce377a7ba789aeeb5ebb799e4fe755c38215861ddb895bf817951 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cf8b19afffce377a7ba789aeeb5ebb799e4fe755c38215861ddb895bf817951->enter($__internal_5cf8b19afffce377a7ba789aeeb5ebb799e4fe755c38215861ddb895bf817951_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Shipyard
";
        
        $__internal_5cf8b19afffce377a7ba789aeeb5ebb799e4fe755c38215861ddb895bf817951->leave($__internal_5cf8b19afffce377a7ba789aeeb5ebb799e4fe755c38215861ddb895bf817951_prof);

        
        $__internal_c8f30298684fa7d74a3962c335e4ab1803ff0fa5632794ab1a9b8a745243784c->leave($__internal_c8f30298684fa7d74a3962c335e4ab1803ff0fa5632794ab1a9b8a745243784c_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_e7e4a9673767376b5de8fd55511cf817f6e3c47189e0dc498da21532a5955e37 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e7e4a9673767376b5de8fd55511cf817f6e3c47189e0dc498da21532a5955e37->enter($__internal_e7e4a9673767376b5de8fd55511cf817f6e3c47189e0dc498da21532a5955e37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_600c5a5236ef5d1c854bc2ce8a6fd5d2b22e8790326b804fd718cba0df69b815 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600c5a5236ef5d1c854bc2ce8a6fd5d2b22e8790326b804fd718cba0df69b815->enter($__internal_600c5a5236ef5d1c854bc2ce8a6fd5d2b22e8790326b804fd718cba0df69b815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <div class=\"container body-content\">
        <div class=\"row\">

            ";
        // line 12
        echo "                ";
        // line 13
        echo "                ";
        // line 14
        echo "                ";
        // line 15
        echo "                ";
        // line 16
        echo "            ";
        // line 17
        echo "
            <table id=\"text-center\" style=\"width:100%\" border=\"1\" >
                <tr id=\"text-center\">
                    <th>Picture</th>
                    <th>Amount</th>
                    <th>Name</th>
                    <th>Minerals</th>
                    <th>Hydrogen</th>
                    <th>Time to build</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td><img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/nk11_1.jpg"), "html", null, true);
        echo "\"></td>
                    <td>0</td>
                    <td>Fighter</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>Start Construction</td>
                </tr>

                <tr>
                    <td><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/nk13_1.jpg"), "html", null, true);
        echo "\"></td>
                    <td>0</td>
                    <td>Battleship</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>Start Construction</td>
                </tr>

                <tr>
                    <td><img src=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/nk9_1.jpg"), "html", null, true);
        echo "\"></td>
                    <td>0</td>
                    <td>Transporter</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>Start Construction</td>
                </tr>

                <tr>
                    <td><img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/nk43.jpg"), "html", null, true);
        echo "\"></td>
                    <td>0</td>
                    <td>Colonizer</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>Start Construction</td>
                </tr>
            </table>
        </div>
    </div>
";
        
        $__internal_600c5a5236ef5d1c854bc2ce8a6fd5d2b22e8790326b804fd718cba0df69b815->leave($__internal_600c5a5236ef5d1c854bc2ce8a6fd5d2b22e8790326b804fd718cba0df69b815_prof);

        
        $__internal_e7e4a9673767376b5de8fd55511cf817f6e3c47189e0dc498da21532a5955e37->leave($__internal_e7e4a9673767376b5de8fd55511cf817f6e3c47189e0dc498da21532a5955e37_prof);

    }

    public function getTemplateName()
    {
        return "universe/planet/shipyard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 60,  126 => 50,  113 => 40,  100 => 30,  85 => 17,  83 => 16,  81 => 15,  79 => 14,  77 => 13,  75 => 12,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    Shipyard
{% endblock %}

{% block main %}
    <div class=\"container body-content\">
        <div class=\"row\">

            {#<div id=\"text-center\">#}
                {#<img src=\"{{ asset('img/f1.gif') }}\">#}
                {#{{ Minerals }}#}
                {#<img src=\"{{ asset('img/f2.gif') }}\">#}
                {#{{ Hydrogen }}#}
            {#</div>#}

            <table id=\"text-center\" style=\"width:100%\" border=\"1\" >
                <tr id=\"text-center\">
                    <th>Picture</th>
                    <th>Amount</th>
                    <th>Name</th>
                    <th>Minerals</th>
                    <th>Hydrogen</th>
                    <th>Time to build</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td><img src=\"{{ asset('img/nk11_1.jpg') }}\"></td>
                    <td>0</td>
                    <td>Fighter</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>Start Construction</td>
                </tr>

                <tr>
                    <td><img src=\"{{ asset('img/nk13_1.jpg') }}\"></td>
                    <td>0</td>
                    <td>Battleship</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>Start Construction</td>
                </tr>

                <tr>
                    <td><img src=\"{{ asset('img/nk9_1.jpg') }}\"></td>
                    <td>0</td>
                    <td>Transporter</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>Start Construction</td>
                </tr>

                <tr>
                    <td><img src=\"{{ asset('img/nk43.jpg') }}\"></td>
                    <td>0</td>
                    <td>Colonizer</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>Start Construction</td>
                </tr>
            </table>
        </div>
    </div>
{% endblock %}", "universe/planet/shipyard.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\app\\Resources\\views\\universe\\planet\\shipyard.html.twig");
    }
}
