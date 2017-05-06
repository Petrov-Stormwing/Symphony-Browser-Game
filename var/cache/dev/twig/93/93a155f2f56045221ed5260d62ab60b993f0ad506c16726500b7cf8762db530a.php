<?php

/* features/support.html.twig */
class __TwigTemplate_3d1ac7c4d176ae2aea20530236faaa61ce373edf5d35f1c7787750e21459c28e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "features/support.html.twig", 1);
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
        $__internal_163e0a55bcf711bb9d5519dc4e20ef7eb1e644f49fd7038cfe59f1a496c0ea15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_163e0a55bcf711bb9d5519dc4e20ef7eb1e644f49fd7038cfe59f1a496c0ea15->enter($__internal_163e0a55bcf711bb9d5519dc4e20ef7eb1e644f49fd7038cfe59f1a496c0ea15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "features/support.html.twig"));

        $__internal_42f6541799abc93142eb607e050f1833287cd0a24f814de16cdd80a82e8abd60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42f6541799abc93142eb607e050f1833287cd0a24f814de16cdd80a82e8abd60->enter($__internal_42f6541799abc93142eb607e050f1833287cd0a24f814de16cdd80a82e8abd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "features/support.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_163e0a55bcf711bb9d5519dc4e20ef7eb1e644f49fd7038cfe59f1a496c0ea15->leave($__internal_163e0a55bcf711bb9d5519dc4e20ef7eb1e644f49fd7038cfe59f1a496c0ea15_prof);

        
        $__internal_42f6541799abc93142eb607e050f1833287cd0a24f814de16cdd80a82e8abd60->leave($__internal_42f6541799abc93142eb607e050f1833287cd0a24f814de16cdd80a82e8abd60_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3a2e372ff6cea0386186321b095d2be913debde0d10e2be480c8f1d1c25725f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a2e372ff6cea0386186321b095d2be913debde0d10e2be480c8f1d1c25725f3->enter($__internal_3a2e372ff6cea0386186321b095d2be913debde0d10e2be480c8f1d1c25725f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_87db22fde303a63125a99b94b0a05d139818956c3e2967deee869b474bc759ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_87db22fde303a63125a99b94b0a05d139818956c3e2967deee869b474bc759ec->enter($__internal_87db22fde303a63125a99b94b0a05d139818956c3e2967deee869b474bc759ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Support
";
        
        $__internal_87db22fde303a63125a99b94b0a05d139818956c3e2967deee869b474bc759ec->leave($__internal_87db22fde303a63125a99b94b0a05d139818956c3e2967deee869b474bc759ec_prof);

        
        $__internal_3a2e372ff6cea0386186321b095d2be913debde0d10e2be480c8f1d1c25725f3->leave($__internal_3a2e372ff6cea0386186321b095d2be913debde0d10e2be480c8f1d1c25725f3_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_93bad6aa380b004926ed25a5f60fa87c9e97b564525b764bf5d906ccbdbd2420 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93bad6aa380b004926ed25a5f60fa87c9e97b564525b764bf5d906ccbdbd2420->enter($__internal_93bad6aa380b004926ed25a5f60fa87c9e97b564525b764bf5d906ccbdbd2420_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_5322fe4684574523db64cffc2a1cf046c3007d421b49cf471c5d7e2fc6781a29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5322fe4684574523db64cffc2a1cf046c3007d421b49cf471c5d7e2fc6781a29->enter($__internal_5322fe4684574523db64cffc2a1cf046c3007d421b49cf471c5d7e2fc6781a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    <div class=\"container\">
        <h1 class=\"text-center\">Support</h1>
        <h3 class=\"text-center\">Write and Submit your ticket</h3>
        <div class=\"col-md-4 col-md-offset-4\">
            ";
        // line 12
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["supportForm"] ?? $this->getContext($context, "supportForm")), 'form_start');
        echo "

            ";
        // line 15
        echo "            ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["supportForm"] ?? $this->getContext($context, "supportForm")), "title", array()), 'row', array("label" => "Ticket Title"));
        // line 17
        echo "

            ";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["supportForm"] ?? $this->getContext($context, "supportForm")), "description", array()), 'row', array("label" => "Discribe the problem you have encountered", "label_attr" => array("col" => "30")));
        // line 22
        echo "

            ";
        // line 24
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["supportForm"] ?? $this->getContext($context, "supportForm")), "type", array()), 'row', array("label" => "Ticket Type"));
        // line 26
        echo "

            ";
        // line 28
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["supportForm"] ?? $this->getContext($context, "supportForm")), "_token", array()), 'row');
        echo "

            <div class=\"text-center\">
                <button class=\"btn btn-primary\" type=\"submit\">Submit your ticket</button>
                <button class=\"btn btn-danger\" type=\"button\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\">Cancel</button>
            </div>
            ";
        // line 34
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["supportForm"] ?? $this->getContext($context, "supportForm")), 'form_end');
        echo "
        </div>
    </div>
";
        
        $__internal_5322fe4684574523db64cffc2a1cf046c3007d421b49cf471c5d7e2fc6781a29->leave($__internal_5322fe4684574523db64cffc2a1cf046c3007d421b49cf471c5d7e2fc6781a29_prof);

        
        $__internal_93bad6aa380b004926ed25a5f60fa87c9e97b564525b764bf5d906ccbdbd2420->leave($__internal_93bad6aa380b004926ed25a5f60fa87c9e97b564525b764bf5d906ccbdbd2420_prof);

    }

    public function getTemplateName()
    {
        return "features/support.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 34,  107 => 32,  100 => 28,  96 => 26,  94 => 24,  90 => 22,  88 => 19,  84 => 17,  81 => 15,  76 => 12,  70 => 8,  61 => 7,  50 => 4,  41 => 3,  11 => 1,);
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
    Support
{% endblock %}

{% block main %}
    <div class=\"container\">
        <h1 class=\"text-center\">Support</h1>
        <h3 class=\"text-center\">Write and Submit your ticket</h3>
        <div class=\"col-md-4 col-md-offset-4\">
            {{ form_start(supportForm) }}

            {#Print row by row each form item, adding some labels#}
            {{ form_row(supportForm.title, {
                'label': 'Ticket Title'
            })  }}

            {{ form_row(supportForm.description, {
                'label': 'Discribe the problem you have encountered',
                'label_attr': {'col': '30'}
            })  }}

            {{ form_row(supportForm.type, {
                'label': 'Ticket Type'
            })  }}

            {{ form_row(supportForm._token) }}

            <div class=\"text-center\">
                <button class=\"btn btn-primary\" type=\"submit\">Submit your ticket</button>
                <button class=\"btn btn-danger\" type=\"button\" href=\"{{ path('home') }}\">Cancel</button>
            </div>
            {{ form_end(supportForm) }}
        </div>
    </div>
{% endblock %}", "features/support.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\app\\Resources\\views\\features\\support.html.twig");
    }
}
