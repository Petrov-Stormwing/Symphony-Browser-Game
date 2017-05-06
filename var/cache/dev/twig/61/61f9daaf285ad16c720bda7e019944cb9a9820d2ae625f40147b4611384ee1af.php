<?php

/* universe/planet/overview.html.twig */
class __TwigTemplate_21d86ea0fd4da83323b288e20a5532579560511cd964c4e2e42c640bfe26073f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "universe/planet/overview.html.twig", 1);
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
        $__internal_eb344c3f790bb04d1b39deafb27612e732ed8465f54719d50ad1fa8a76957d75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb344c3f790bb04d1b39deafb27612e732ed8465f54719d50ad1fa8a76957d75->enter($__internal_eb344c3f790bb04d1b39deafb27612e732ed8465f54719d50ad1fa8a76957d75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "universe/planet/overview.html.twig"));

        $__internal_6c8c24664065878ed8591cad01f12b27b659b8bcf51ad178544e44cb2c6d7494 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c8c24664065878ed8591cad01f12b27b659b8bcf51ad178544e44cb2c6d7494->enter($__internal_6c8c24664065878ed8591cad01f12b27b659b8bcf51ad178544e44cb2c6d7494_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "universe/planet/overview.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb344c3f790bb04d1b39deafb27612e732ed8465f54719d50ad1fa8a76957d75->leave($__internal_eb344c3f790bb04d1b39deafb27612e732ed8465f54719d50ad1fa8a76957d75_prof);

        
        $__internal_6c8c24664065878ed8591cad01f12b27b659b8bcf51ad178544e44cb2c6d7494->leave($__internal_6c8c24664065878ed8591cad01f12b27b659b8bcf51ad178544e44cb2c6d7494_prof);

    }

    // line 3
    public function block_main($context, array $blocks = array())
    {
        $__internal_8bea13d4de4fe58b3673964f94cebc2d6b0e53bcf26952a41f4973ee23b7cfab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bea13d4de4fe58b3673964f94cebc2d6b0e53bcf26952a41f4973ee23b7cfab->enter($__internal_8bea13d4de4fe58b3673964f94cebc2d6b0e53bcf26952a41f4973ee23b7cfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_1104adf504ee18c7f6faea363fc9b6893aa87d7d0391783eaffaf55b2712d390 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1104adf504ee18c7f6faea363fc9b6893aa87d7d0391783eaffaf55b2712d390->enter($__internal_1104adf504ee18c7f6faea363fc9b6893aa87d7d0391783eaffaf55b2712d390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 4
        echo "    <div class=\"container body-content\">

        <div id=\"text-center\">
            <img src=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/f1.gif"), "html", null, true);
        echo "\">
            ";
        // line 8
        echo twig_escape_filter($this->env, ($context["Minerals"] ?? $this->getContext($context, "Minerals")), "html", null, true);
        echo "
            <img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/f2.gif"), "html", null, true);
        echo "\">
            ";
        // line 10
        echo twig_escape_filter($this->env, ($context["Hydrogen"] ?? $this->getContext($context, "Hydrogen")), "html", null, true);
        echo "
        </div>

        <div class=\"row\">
            <table id=\"text-center\" style=\"width:100%\" border=\"1\">
                <tr id=\"text-center\">
                    <th>Shipyard</th>
                    <th>Amount</th>
                    <th>Name</th>
                    <th>Minerals</th>
                    <th>Hydrogen</th>
                    <th>Time left</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td><img src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/nk11_1.jpg"), "html", null, true);
        echo "\"></td>
                    <td>0</td>
                    <td>Fighter</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>In Construction</td>
                </tr>
            </table>
            <br/>
            <table id=\"text-center\" style=\"width:100%\" border=\"1\">
                <tr id=\"text-center\">
                    <th>Building</th>
                    <th>Level</th>
                    <th>Name</th>
                    <th>Minerals</th>
                    <th>Hydrogen</th>
                    <th>Time left</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td><img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/bs11.jpg"), "html", null, true);
        echo "\"></td>
                    <td>0</td>
                    <td>Shipyard</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>In Construction</td>
                </tr>
            </table>

        </div>
    </div>
";
        
        $__internal_1104adf504ee18c7f6faea363fc9b6893aa87d7d0391783eaffaf55b2712d390->leave($__internal_1104adf504ee18c7f6faea363fc9b6893aa87d7d0391783eaffaf55b2712d390_prof);

        
        $__internal_8bea13d4de4fe58b3673964f94cebc2d6b0e53bcf26952a41f4973ee23b7cfab->leave($__internal_8bea13d4de4fe58b3673964f94cebc2d6b0e53bcf26952a41f4973ee23b7cfab_prof);

    }

    public function getTemplateName()
    {
        return "universe/planet/overview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 48,  85 => 26,  66 => 10,  62 => 9,  58 => 8,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <div class=\"container body-content\">

        <div id=\"text-center\">
            <img src=\"{{ asset('img/f1.gif') }}\">
            {{ Minerals }}
            <img src=\"{{ asset('img/f2.gif') }}\">
            {{ Hydrogen }}
        </div>

        <div class=\"row\">
            <table id=\"text-center\" style=\"width:100%\" border=\"1\">
                <tr id=\"text-center\">
                    <th>Shipyard</th>
                    <th>Amount</th>
                    <th>Name</th>
                    <th>Minerals</th>
                    <th>Hydrogen</th>
                    <th>Time left</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td><img src=\"{{ asset('img/nk11_1.jpg') }}\"></td>
                    <td>0</td>
                    <td>Fighter</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>In Construction</td>
                </tr>
            </table>
            <br/>
            <table id=\"text-center\" style=\"width:100%\" border=\"1\">
                <tr id=\"text-center\">
                    <th>Building</th>
                    <th>Level</th>
                    <th>Name</th>
                    <th>Minerals</th>
                    <th>Hydrogen</th>
                    <th>Time left</th>
                    <th>Status</th>
                </tr>

                <tr>
                    <td><img src=\"{{ asset('img/bs11.jpg') }}\"></td>
                    <td>0</td>
                    <td>Shipyard</td>
                    <td>94</td>
                    <td>45</td>
                    <td>30s</td>
                    <td>In Construction</td>
                </tr>
            </table>

        </div>
    </div>
{% endblock %}

", "universe/planet/overview.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\app\\Resources\\views\\universe\\planet\\overview.html.twig");
    }
}
