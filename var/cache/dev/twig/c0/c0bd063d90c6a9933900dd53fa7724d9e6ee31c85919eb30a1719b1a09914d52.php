<?php

/* account/profile.html.twig */
class __TwigTemplate_b61979ab6056297c0bc5b9e2f0127e488ac0fdc69ba89b3666b10277219f80eb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "account/profile.html.twig", 1);
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
        $__internal_68891bc4297488405d8d62bc1626747349e1d48ae2b6110230db3a803f77508f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68891bc4297488405d8d62bc1626747349e1d48ae2b6110230db3a803f77508f->enter($__internal_68891bc4297488405d8d62bc1626747349e1d48ae2b6110230db3a803f77508f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/profile.html.twig"));

        $__internal_4832422d0a247f015077fb215c2e88416e5c09a8abdb391ecde7c090a05a0666 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4832422d0a247f015077fb215c2e88416e5c09a8abdb391ecde7c090a05a0666->enter($__internal_4832422d0a247f015077fb215c2e88416e5c09a8abdb391ecde7c090a05a0666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "account/profile.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68891bc4297488405d8d62bc1626747349e1d48ae2b6110230db3a803f77508f->leave($__internal_68891bc4297488405d8d62bc1626747349e1d48ae2b6110230db3a803f77508f_prof);

        
        $__internal_4832422d0a247f015077fb215c2e88416e5c09a8abdb391ecde7c090a05a0666->leave($__internal_4832422d0a247f015077fb215c2e88416e5c09a8abdb391ecde7c090a05a0666_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_ddc7f2052e88d6e5a76fd0602b921be0a86939685f645c3678e3de2fc4ab0e64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddc7f2052e88d6e5a76fd0602b921be0a86939685f645c3678e3de2fc4ab0e64->enter($__internal_ddc7f2052e88d6e5a76fd0602b921be0a86939685f645c3678e3de2fc4ab0e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d7819653c8704272268b7519130858d0b23a1971e162483ef7ff4dc0b5dc0ae1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d7819653c8704272268b7519130858d0b23a1971e162483ef7ff4dc0b5dc0ae1->enter($__internal_d7819653c8704272268b7519130858d0b23a1971e162483ef7ff4dc0b5dc0ae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Profile
";
        
        $__internal_d7819653c8704272268b7519130858d0b23a1971e162483ef7ff4dc0b5dc0ae1->leave($__internal_d7819653c8704272268b7519130858d0b23a1971e162483ef7ff4dc0b5dc0ae1_prof);

        
        $__internal_ddc7f2052e88d6e5a76fd0602b921be0a86939685f645c3678e3de2fc4ab0e64->leave($__internal_ddc7f2052e88d6e5a76fd0602b921be0a86939685f645c3678e3de2fc4ab0e64_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_632f7bc67838bb52550325afb54146c07206e2dd9ab0ded89277731ab24241e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632f7bc67838bb52550325afb54146c07206e2dd9ab0ded89277731ab24241e1->enter($__internal_632f7bc67838bb52550325afb54146c07206e2dd9ab0ded89277731ab24241e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        $__internal_71749c634acd46dbdb0f4f15f659542210e6d6b288f2c2fc64a1b5e24fcb6676 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71749c634acd46dbdb0f4f15f659542210e6d6b288f2c2fc64a1b5e24fcb6676->enter($__internal_71749c634acd46dbdb0f4f15f659542210e6d6b288f2c2fc64a1b5e24fcb6676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "    profile go in here
";
        
        $__internal_71749c634acd46dbdb0f4f15f659542210e6d6b288f2c2fc64a1b5e24fcb6676->leave($__internal_71749c634acd46dbdb0f4f15f659542210e6d6b288f2c2fc64a1b5e24fcb6676_prof);

        
        $__internal_632f7bc67838bb52550325afb54146c07206e2dd9ab0ded89277731ab24241e1->leave($__internal_632f7bc67838bb52550325afb54146c07206e2dd9ab0ded89277731ab24241e1_prof);

    }

    public function getTemplateName()
    {
        return "account/profile.html.twig";
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
    Profile
{% endblock %}

{% block main %}
    profile go in here
{% endblock %}", "account/profile.html.twig", "C:\\xampp\\htdocs\\XelSeleniusEnterprise\\app\\Resources\\views\\account\\profile.html.twig");
    }
}
