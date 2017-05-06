<?php

/* base.html.twig */
class __TwigTemplate_76ecb4b6eab5e517c7c918daf5462c70d04063a7d433480cdc8b6304e972c54f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'header' => array($this, 'block_header'),
            'main' => array($this, 'block_main'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4c70feb18663297028e55bb4469c494030d73dd09093a670461c35baa6a9cb75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c70feb18663297028e55bb4469c494030d73dd09093a670461c35baa6a9cb75->enter($__internal_4c70feb18663297028e55bb4469c494030d73dd09093a670461c35baa6a9cb75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_15d04bcabcac8b6d4d20554a56b5048e6997409434b8f67ba5d82a246809355d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15d04bcabcac8b6d4d20554a56b5048e6997409434b8f67ba5d82a246809355d->enter($__internal_15d04bcabcac8b6d4d20554a56b5048e6997409434b8f67ba5d82a246809355d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    ";
        // line 6
        echo "    <meta charset=\"UTF-8\"/>
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

    ";
        // line 10
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/jquery-3.2.0.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/bootstrap-datetimepicker.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/moment.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 16
        echo "    <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-theme.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/style.css"), "html", null, true);
        echo "\" type=\"text/css\">

    ";
        // line 22
        echo "    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\"/>";
        // line 28
        echo "</head>

";
        // line 31
        echo "<body>

";
        // line 34
        $this->displayBlock('header', $context, $blocks);
        // line 125
        echo "
<main id=\"wrap\">
    ";
        // line 127
        $this->displayBlock('main', $context, $blocks);
        // line 132
        echo "</main>

<footer id=\"footer noSpaces\">
";
        // line 135
        $this->displayBlock('footer', $context, $blocks);
        // line 178
        echo "</footer>

";
        // line 181
        $this->displayBlock('javascripts', $context, $blocks);
        // line 182
        echo "
</body>
</html>
";
        
        $__internal_4c70feb18663297028e55bb4469c494030d73dd09093a670461c35baa6a9cb75->leave($__internal_4c70feb18663297028e55bb4469c494030d73dd09093a670461c35baa6a9cb75_prof);

        
        $__internal_15d04bcabcac8b6d4d20554a56b5048e6997409434b8f67ba5d82a246809355d->leave($__internal_15d04bcabcac8b6d4d20554a56b5048e6997409434b8f67ba5d82a246809355d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ffa0aac70a92b2ce68610359e29b6ba95ba54b5eae909ceceb41592dda7dd269 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa0aac70a92b2ce68610359e29b6ba95ba54b5eae909ceceb41592dda7dd269->enter($__internal_ffa0aac70a92b2ce68610359e29b6ba95ba54b5eae909ceceb41592dda7dd269_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_7e477d76980570f705c346794608065d49777d2bb198f2fdd352c518f87cc014 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e477d76980570f705c346794608065d49777d2bb198f2fdd352c518f87cc014->enter($__internal_7e477d76980570f705c346794608065d49777d2bb198f2fdd352c518f87cc014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7e477d76980570f705c346794608065d49777d2bb198f2fdd352c518f87cc014->leave($__internal_7e477d76980570f705c346794608065d49777d2bb198f2fdd352c518f87cc014_prof);

        
        $__internal_ffa0aac70a92b2ce68610359e29b6ba95ba54b5eae909ceceb41592dda7dd269->leave($__internal_ffa0aac70a92b2ce68610359e29b6ba95ba54b5eae909ceceb41592dda7dd269_prof);

    }

    // line 34
    public function block_header($context, array $blocks = array())
    {
        $__internal_cc726fd2b8f27118707824eb90174c8bcae6bfa8ebc54d36880ef79867731e53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc726fd2b8f27118707824eb90174c8bcae6bfa8ebc54d36880ef79867731e53->enter($__internal_cc726fd2b8f27118707824eb90174c8bcae6bfa8ebc54d36880ef79867731e53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        $__internal_f23da295068f0367780c94ace86542b1221a871bb711620a97ac38b0c9a7fe96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23da295068f0367780c94ace86542b1221a871bb711620a97ac38b0c9a7fe96->enter($__internal_f23da295068f0367780c94ace86542b1221a871bb711620a97ac38b0c9a7fe96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 35
        echo "    <header>
        <div>
            <img src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("img/headingPicture.jpg"), "html", null, true);
        echo "\" class=\"img-responsive\" width=\"100%\">
        </div>
        <nav class=\"navbar navbar-inverse\">
            <div class=\"container-fluid\">

                <!--Logo-->
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("home");
        echo "\" class=\"navbar-brand\">
                        XELSELENIUS ENTERPRISE
                    </a>

                    <!--Collapse Menu Button-->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#mainNavBar\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

                <!--Menu Items-->
                <div class=\"collapse navbar-collapse\" id=\"mainNavBar\">

                    <!--Left Alignment-->
                    <ul class=\"nav navbar-nav\">
                        ";
        // line 62
        echo "                            ";
        // line 63
        echo "                                ";
        // line 64
        echo "                            ";
        // line 65
        echo "                        ";
        // line 66
        echo "                        <li>
                            <a href=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("map_view");
        echo "\" class=\"navbar-brand\">
                                Galaxy Map
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 72
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("overview");
        echo "\" class=\"navbar-brand\">
                                Planet Overview
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 77
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("buildings");
        echo "\" class=\"navbar-brand\">
                                Buildings
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 82
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("shipyard");
        echo "\" class=\"navbar-brand\">
                                Shipyard
                            </a>
                        </li>
                        ";
        // line 87
        echo "                            ";
        // line 88
        echo "                                ";
        // line 89
        echo "                            ";
        // line 90
        echo "                        ";
        // line 91
        echo "                        ";
        // line 92
        echo "                            ";
        // line 93
        echo "                               ";
        // line 94
        echo "                                        ";
        // line 95
        echo "                            ";
        // line 96
        echo "                                ";
        // line 97
        echo "                                ";
        // line 98
        echo "                            ";
        // line 99
        echo "                        ";
        // line 100
        echo "                    </ul>

                    <!--Right Alignment-->
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"";
        // line 105
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_register_form");
        echo "\" class=\"navbar-brand\">
                                Register
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 110
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login");
        echo "\" class=\"navbar-brand\">
                                Login
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 115
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logoutNotify");
        echo "\" class=\"navbar-brand\">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
";
        
        $__internal_f23da295068f0367780c94ace86542b1221a871bb711620a97ac38b0c9a7fe96->leave($__internal_f23da295068f0367780c94ace86542b1221a871bb711620a97ac38b0c9a7fe96_prof);

        
        $__internal_cc726fd2b8f27118707824eb90174c8bcae6bfa8ebc54d36880ef79867731e53->leave($__internal_cc726fd2b8f27118707824eb90174c8bcae6bfa8ebc54d36880ef79867731e53_prof);

    }

    // line 127
    public function block_main($context, array $blocks = array())
    {
        $__internal_e0cb3adbdbc9adc3de188a8efebe3fa91ee7e9f2137f47067908fedff8478c69 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e0cb3adbdbc9adc3de188a8efebe3fa91ee7e9f2137f47067908fedff8478c69->enter($__internal_e0cb3adbdbc9adc3de188a8efebe3fa91ee7e9f2137f47067908fedff8478c69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_a9324b3f59915a7d7c2644bd00cbe22c981c181bba7d69d2cf0f938f3377a69c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9324b3f59915a7d7c2644bd00cbe22c981c181bba7d69d2cf0f938f3377a69c->enter($__internal_a9324b3f59915a7d7c2644bd00cbe22c981c181bba7d69d2cf0f938f3377a69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_a9324b3f59915a7d7c2644bd00cbe22c981c181bba7d69d2cf0f938f3377a69c->leave($__internal_a9324b3f59915a7d7c2644bd00cbe22c981c181bba7d69d2cf0f938f3377a69c_prof);

        
        $__internal_e0cb3adbdbc9adc3de188a8efebe3fa91ee7e9f2137f47067908fedff8478c69->leave($__internal_e0cb3adbdbc9adc3de188a8efebe3fa91ee7e9f2137f47067908fedff8478c69_prof);

    }

    // line 135
    public function block_footer($context, array $blocks = array())
    {
        $__internal_646472fa88fa1c12e07916f826a6d62564ef9dd584403aeea53ad668aa9ced2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_646472fa88fa1c12e07916f826a6d62564ef9dd584403aeea53ad668aa9ced2f->enter($__internal_646472fa88fa1c12e07916f826a6d62564ef9dd584403aeea53ad668aa9ced2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_ca0d35a84bb4a4b0591e2eb071abbb344387822e7f5bcfdd9fa2fd7c65f5fe43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca0d35a84bb4a4b0591e2eb071abbb344387822e7f5bcfdd9fa2fd7c65f5fe43->enter($__internal_ca0d35a84bb4a4b0591e2eb071abbb344387822e7f5bcfdd9fa2fd7c65f5fe43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 136
        echo "
        <nav class=\"navbar navbar-inverse\" id=\"noSpaces\">
            <div class=\"container-fluid\">

                <!--Logo-->
                <div class=\"navbar-header\">
                    <a href=\"";
        // line 142
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("about");
        echo "\" class=\"navbar-brand\">
                        &copy; 2017 - Xel'Selenius Enterprise
                    </a>

                    <!--Collapse Menu Button-->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#mainNavBar\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

                <!--Menu Items-->
                <div class=\"collapse navbar-collapse\" id=\"mainNavBar\">

                    ";
        // line 158
        echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"";
        // line 160
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("support_form");
        echo "\" class=\"navbar-brand\">
                                Support
                            </a>
                        </li>
                        <li>
                            <a href=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("rules");
        echo "\" class=\"navbar-brand\">
                                Rules
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>";
        
        $__internal_ca0d35a84bb4a4b0591e2eb071abbb344387822e7f5bcfdd9fa2fd7c65f5fe43->leave($__internal_ca0d35a84bb4a4b0591e2eb071abbb344387822e7f5bcfdd9fa2fd7c65f5fe43_prof);

        
        $__internal_646472fa88fa1c12e07916f826a6d62564ef9dd584403aeea53ad668aa9ced2f->leave($__internal_646472fa88fa1c12e07916f826a6d62564ef9dd584403aeea53ad668aa9ced2f_prof);

    }

    // line 181
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_979da49f86ad2cda3b571d900ddb35b03aec4094a26ca4643d963cf0bc0d3c84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_979da49f86ad2cda3b571d900ddb35b03aec4094a26ca4643d963cf0bc0d3c84->enter($__internal_979da49f86ad2cda3b571d900ddb35b03aec4094a26ca4643d963cf0bc0d3c84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_709dbcb7242fc3ba827bf38e8dd73f74471ec41accfae99a10ac9703ec9fb7dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_709dbcb7242fc3ba827bf38e8dd73f74471ec41accfae99a10ac9703ec9fb7dd->enter($__internal_709dbcb7242fc3ba827bf38e8dd73f74471ec41accfae99a10ac9703ec9fb7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_709dbcb7242fc3ba827bf38e8dd73f74471ec41accfae99a10ac9703ec9fb7dd->leave($__internal_709dbcb7242fc3ba827bf38e8dd73f74471ec41accfae99a10ac9703ec9fb7dd_prof);

        
        $__internal_979da49f86ad2cda3b571d900ddb35b03aec4094a26ca4643d963cf0bc0d3c84->leave($__internal_979da49f86ad2cda3b571d900ddb35b03aec4094a26ca4643d963cf0bc0d3c84_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  380 => 181,  362 => 165,  354 => 160,  350 => 158,  332 => 142,  324 => 136,  315 => 135,  298 => 127,  278 => 115,  270 => 110,  262 => 105,  255 => 100,  253 => 99,  251 => 98,  249 => 97,  247 => 96,  245 => 95,  243 => 94,  241 => 93,  239 => 92,  237 => 91,  235 => 90,  233 => 89,  231 => 88,  229 => 87,  222 => 82,  214 => 77,  206 => 72,  198 => 67,  195 => 66,  193 => 65,  191 => 64,  189 => 63,  187 => 62,  167 => 44,  157 => 37,  153 => 35,  144 => 34,  126 => 7,  113 => 182,  111 => 181,  107 => 178,  105 => 135,  100 => 132,  98 => 127,  94 => 125,  92 => 34,  88 => 31,  84 => 28,  80 => 22,  75 => 19,  71 => 18,  67 => 17,  62 => 16,  57 => 13,  53 => 12,  49 => 11,  44 => 10,  39 => 7,  36 => 6,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>

<head>
    {#Standard input for head#}
    <meta charset=\"UTF-8\"/>
    <title>{% block title %}Welcome!{% endblock %}</title>

    {#Bootstrap included here#}
    <script src=\"{{ asset('js/jquery-3.2.0.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap.js') }}\"></script>
    <script src=\"{{ asset('js/bootstrap-datetimepicker.js') }}\"></script>
    <script src=\"{{ asset('js/moment.js') }}\"></script>

    {#Stylesheets included here#}
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-theme.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/bootstrap-datetimepicker.css') }}\" type=\"text/css\">
    <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\" type=\"text/css\">

    {#Favicon#}
    <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\"/>

    {#-------------------------------------------------------------------------#}
    {#            If more things are needed in HEAD they go below              #}
    {#-------------------------------------------------------------------------#}

</head>

{#This is the body - all that is displayed#}
<body>

{#TODO:Header configuration#}
{% block header %}
    <header>
        <div>
            <img src=\"{{ asset('img/headingPicture.jpg') }}\" class=\"img-responsive\" width=\"100%\">
        </div>
        <nav class=\"navbar navbar-inverse\">
            <div class=\"container-fluid\">

                <!--Logo-->
                <div class=\"navbar-header\">
                    <a href=\"{{ path('home') }}\" class=\"navbar-brand\">
                        XELSELENIUS ENTERPRISE
                    </a>

                    <!--Collapse Menu Button-->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#mainNavBar\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

                <!--Menu Items-->
                <div class=\"collapse navbar-collapse\" id=\"mainNavBar\">

                    <!--Left Alignment-->
                    <ul class=\"nav navbar-nav\">
                        {#<li>#}
                            {#<a href=\"{{ path('profile') }}\" class=\"navbar-brand\">#}
                                {#Profile#}
                            {#</a>#}
                        {#</li>#}
                        <li>
                            <a href=\"{{ path('map_view') }}\" class=\"navbar-brand\">
                                Galaxy Map
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path('overview') }}\" class=\"navbar-brand\">
                                Planet Overview
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path('buildings') }}\" class=\"navbar-brand\">
                                Buildings
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path('shipyard') }}\" class=\"navbar-brand\">
                                Shipyard
                            </a>
                        </li>
                        {#<li>#}
                            {#<a href=\"{{ path('fleet') }}\" class=\"navbar-brand\">#}
                                {#Fleet#}
                            {#</a>#}
                        {#</li>#}
                        {#<li class=\"dropdown\">#}
                            {#<a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\"#}
                               {#aria-expanded=\"false\">Admin       <span#}
                                        {#class=\"caret\"></span></a>#}
                            {#<ul class=\"dropdown-menu\" role=\"menu\">#}
                                {#<li><a><h4>Categories</h4></a></li>#}
                                {#<li><a><h4>Users</h4></a></li>#}
                            {#</ul>#}
                        {#</li>#}
                    </ul>

                    <!--Right Alignment-->
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"{{ path('user_register_form') }}\" class=\"navbar-brand\">
                                Register
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path('login') }}\" class=\"navbar-brand\">
                                Login
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path('logoutNotify') }}\" class=\"navbar-brand\">
                                Logout
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
{% endblock %}

<main id=\"wrap\">
    {% block main %}
        {#---------------------------------------------------------------------------#}
        {#   -|==>    Here should go the stuff from the different views       <==|-  #}
        {#---------------------------------------------------------------------------#}
    {% endblock %}
</main>

<footer id=\"footer noSpaces\">
{% block footer %}

        <nav class=\"navbar navbar-inverse\" id=\"noSpaces\">
            <div class=\"container-fluid\">

                <!--Logo-->
                <div class=\"navbar-header\">
                    <a href=\"{{ path('about') }}\" class=\"navbar-brand\">
                        &copy; 2017 - Xel'Selenius Enterprise
                    </a>

                    <!--Collapse Menu Button-->
                    <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#mainNavBar\">
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                </div>

                <!--Menu Items-->
                <div class=\"collapse navbar-collapse\" id=\"mainNavBar\">

                    {#footer right#}
                    <ul class=\"nav navbar-nav navbar-right\">
                        <li>
                            <a href=\"{{ path('support_form') }}\" class=\"navbar-brand\">
                                Support
                            </a>
                        </li>
                        <li>
                            <a href=\"{{ path('rules') }}\" class=\"navbar-brand\">
                                Rules
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        {#---------------------------------------------------------------------------#}
        {#            If more things are needed in FOOTER they go below              #}
        {#---------------------------------------------------------------------------#}

{% endblock %}
</footer>

{#TODO:Scripts inclusion#}
{% block javascripts %}{% endblock %}

</body>
</html>
", "base.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\app\\Resources\\views\\base.html.twig");
    }
}
