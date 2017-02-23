<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_cef81ba7b488630302524363a6fbf9a0fc8d9536d5f8a8e9b933433f29f2cbed extends Twig_Template
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
        $__internal_a501962504043594e468afbc8aead1230ed01e9570ef0d93450e60af0bc0bc95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a501962504043594e468afbc8aead1230ed01e9570ef0d93450e60af0bc0bc95->enter($__internal_a501962504043594e468afbc8aead1230ed01e9570ef0d93450e60af0bc0bc95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_d96489d823f0677063e592ac5cdd3995815f894f2f749ce8bc6482ba2094fadc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96489d823f0677063e592ac5cdd3995815f894f2f749ce8bc6482ba2094fadc->enter($__internal_d96489d823f0677063e592ac5cdd3995815f894f2f749ce8bc6482ba2094fadc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a501962504043594e468afbc8aead1230ed01e9570ef0d93450e60af0bc0bc95->leave($__internal_a501962504043594e468afbc8aead1230ed01e9570ef0d93450e60af0bc0bc95_prof);

        
        $__internal_d96489d823f0677063e592ac5cdd3995815f894f2f749ce8bc6482ba2094fadc->leave($__internal_d96489d823f0677063e592ac5cdd3995815f894f2f749ce8bc6482ba2094fadc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a51b4a74be07fbe7e53a86e28fde6042287b4247561cc7b1aca6399fc8aa55b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a51b4a74be07fbe7e53a86e28fde6042287b4247561cc7b1aca6399fc8aa55b1->enter($__internal_a51b4a74be07fbe7e53a86e28fde6042287b4247561cc7b1aca6399fc8aa55b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_961f4d81b63fe392e4550ce2434abb6a93b063b5e12580c4ee2f832e32c5f4b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_961f4d81b63fe392e4550ce2434abb6a93b063b5e12580c4ee2f832e32c5f4b7->enter($__internal_961f4d81b63fe392e4550ce2434abb6a93b063b5e12580c4ee2f832e32c5f4b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_961f4d81b63fe392e4550ce2434abb6a93b063b5e12580c4ee2f832e32c5f4b7->leave($__internal_961f4d81b63fe392e4550ce2434abb6a93b063b5e12580c4ee2f832e32c5f4b7_prof);

        
        $__internal_a51b4a74be07fbe7e53a86e28fde6042287b4247561cc7b1aca6399fc8aa55b1->leave($__internal_a51b4a74be07fbe7e53a86e28fde6042287b4247561cc7b1aca6399fc8aa55b1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_7d0cc1a72d9f436846eb1fe9820d9410047ad73a7afd549dd55dff974149ecbd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d0cc1a72d9f436846eb1fe9820d9410047ad73a7afd549dd55dff974149ecbd->enter($__internal_7d0cc1a72d9f436846eb1fe9820d9410047ad73a7afd549dd55dff974149ecbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e50aa1c7aa8e1c8ad15d3d1e5aea98e29ed516c90aa4f3d8f076221a6d1c4591 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e50aa1c7aa8e1c8ad15d3d1e5aea98e29ed516c90aa4f3d8f076221a6d1c4591->enter($__internal_e50aa1c7aa8e1c8ad15d3d1e5aea98e29ed516c90aa4f3d8f076221a6d1c4591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e50aa1c7aa8e1c8ad15d3d1e5aea98e29ed516c90aa4f3d8f076221a6d1c4591->leave($__internal_e50aa1c7aa8e1c8ad15d3d1e5aea98e29ed516c90aa4f3d8f076221a6d1c4591_prof);

        
        $__internal_7d0cc1a72d9f436846eb1fe9820d9410047ad73a7afd549dd55dff974149ecbd->leave($__internal_7d0cc1a72d9f436846eb1fe9820d9410047ad73a7afd549dd55dff974149ecbd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_62deaf57484c409ae4928d8734786e7fbf09afa01becb1753c849acb3d684097 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_62deaf57484c409ae4928d8734786e7fbf09afa01becb1753c849acb3d684097->enter($__internal_62deaf57484c409ae4928d8734786e7fbf09afa01becb1753c849acb3d684097_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7fa8aed1e3686e39e0caa2633885b111cb8b97905b9c42327c6f845f067ce035 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7fa8aed1e3686e39e0caa2633885b111cb8b97905b9c42327c6f845f067ce035->enter($__internal_7fa8aed1e3686e39e0caa2633885b111cb8b97905b9c42327c6f845f067ce035_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_7fa8aed1e3686e39e0caa2633885b111cb8b97905b9c42327c6f845f067ce035->leave($__internal_7fa8aed1e3686e39e0caa2633885b111cb8b97905b9c42327c6f845f067ce035_prof);

        
        $__internal_62deaf57484c409ae4928d8734786e7fbf09afa01becb1753c849acb3d684097->leave($__internal_62deaf57484c409ae4928d8734786e7fbf09afa01becb1753c849acb3d684097_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
