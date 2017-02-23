<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_2ccc05d3374804641910e1c2f07ea0568d6db7282f5787c032f83e64b8e32ff9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_475667620609cd9ba2e2db170f037abfee5c74c98fb57c2dea85a5f9466eef0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_475667620609cd9ba2e2db170f037abfee5c74c98fb57c2dea85a5f9466eef0e->enter($__internal_475667620609cd9ba2e2db170f037abfee5c74c98fb57c2dea85a5f9466eef0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_237372376106fb6987f54da9a730552bf7c355e3ef23665c84b2050f243c4bb2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_237372376106fb6987f54da9a730552bf7c355e3ef23665c84b2050f243c4bb2->enter($__internal_237372376106fb6987f54da9a730552bf7c355e3ef23665c84b2050f243c4bb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_475667620609cd9ba2e2db170f037abfee5c74c98fb57c2dea85a5f9466eef0e->leave($__internal_475667620609cd9ba2e2db170f037abfee5c74c98fb57c2dea85a5f9466eef0e_prof);

        
        $__internal_237372376106fb6987f54da9a730552bf7c355e3ef23665c84b2050f243c4bb2->leave($__internal_237372376106fb6987f54da9a730552bf7c355e3ef23665c84b2050f243c4bb2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_305ce79889f12ecc792631e7e4ea780c6308b3dace4b36e8294c300c23756201 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_305ce79889f12ecc792631e7e4ea780c6308b3dace4b36e8294c300c23756201->enter($__internal_305ce79889f12ecc792631e7e4ea780c6308b3dace4b36e8294c300c23756201_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_c1501a84365d692e8d1ea54618c0793d1c543759bf8c6fef142c6af5994226ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1501a84365d692e8d1ea54618c0793d1c543759bf8c6fef142c6af5994226ee->enter($__internal_c1501a84365d692e8d1ea54618c0793d1c543759bf8c6fef142c6af5994226ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_c1501a84365d692e8d1ea54618c0793d1c543759bf8c6fef142c6af5994226ee->leave($__internal_c1501a84365d692e8d1ea54618c0793d1c543759bf8c6fef142c6af5994226ee_prof);

        
        $__internal_305ce79889f12ecc792631e7e4ea780c6308b3dace4b36e8294c300c23756201->leave($__internal_305ce79889f12ecc792631e7e4ea780c6308b3dace4b36e8294c300c23756201_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_d89d1aff2fda75f5c41b7187a3842bd4dfa155fbd82c608c3c6a9ce97a2041d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d89d1aff2fda75f5c41b7187a3842bd4dfa155fbd82c608c3c6a9ce97a2041d8->enter($__internal_d89d1aff2fda75f5c41b7187a3842bd4dfa155fbd82c608c3c6a9ce97a2041d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_8950a338731cc7ac28506056e2b9d99d4a022a7fdacaa6c538440aef78df4a68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8950a338731cc7ac28506056e2b9d99d4a022a7fdacaa6c538440aef78df4a68->enter($__internal_8950a338731cc7ac28506056e2b9d99d4a022a7fdacaa6c538440aef78df4a68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_8950a338731cc7ac28506056e2b9d99d4a022a7fdacaa6c538440aef78df4a68->leave($__internal_8950a338731cc7ac28506056e2b9d99d4a022a7fdacaa6c538440aef78df4a68_prof);

        
        $__internal_d89d1aff2fda75f5c41b7187a3842bd4dfa155fbd82c608c3c6a9ce97a2041d8->leave($__internal_d89d1aff2fda75f5c41b7187a3842bd4dfa155fbd82c608c3c6a9ce97a2041d8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
