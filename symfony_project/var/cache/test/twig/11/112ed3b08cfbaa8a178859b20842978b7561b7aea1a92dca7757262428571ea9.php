<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_7e0c62e95dfe4fcf90152190ef2ee6ef44e0334c8e36bb5d91ca68cc9d4f3749 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5866dfecd37e1ec8c4a9ce36d195fd39ebd5a060a14d3e77c9a0e3ccaa6a37ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5866dfecd37e1ec8c4a9ce36d195fd39ebd5a060a14d3e77c9a0e3ccaa6a37ef->enter($__internal_5866dfecd37e1ec8c4a9ce36d195fd39ebd5a060a14d3e77c9a0e3ccaa6a37ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_419558967cb67871555f63e6b731040af3c48ba426bc7ad301b8b2a013057bda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_419558967cb67871555f63e6b731040af3c48ba426bc7ad301b8b2a013057bda->enter($__internal_419558967cb67871555f63e6b731040af3c48ba426bc7ad301b8b2a013057bda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5866dfecd37e1ec8c4a9ce36d195fd39ebd5a060a14d3e77c9a0e3ccaa6a37ef->leave($__internal_5866dfecd37e1ec8c4a9ce36d195fd39ebd5a060a14d3e77c9a0e3ccaa6a37ef_prof);

        
        $__internal_419558967cb67871555f63e6b731040af3c48ba426bc7ad301b8b2a013057bda->leave($__internal_419558967cb67871555f63e6b731040af3c48ba426bc7ad301b8b2a013057bda_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0ab98aab86d1b51cb7e232206863b7517c89f43814af1121ca7d5832f16d2f75 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab98aab86d1b51cb7e232206863b7517c89f43814af1121ca7d5832f16d2f75->enter($__internal_0ab98aab86d1b51cb7e232206863b7517c89f43814af1121ca7d5832f16d2f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2f52e5ad87c8d5008d4537ba39849463c7ad32afa4a14825e7c14a49972b4f02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f52e5ad87c8d5008d4537ba39849463c7ad32afa4a14825e7c14a49972b4f02->enter($__internal_2f52e5ad87c8d5008d4537ba39849463c7ad32afa4a14825e7c14a49972b4f02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2f52e5ad87c8d5008d4537ba39849463c7ad32afa4a14825e7c14a49972b4f02->leave($__internal_2f52e5ad87c8d5008d4537ba39849463c7ad32afa4a14825e7c14a49972b4f02_prof);

        
        $__internal_0ab98aab86d1b51cb7e232206863b7517c89f43814af1121ca7d5832f16d2f75->leave($__internal_0ab98aab86d1b51cb7e232206863b7517c89f43814af1121ca7d5832f16d2f75_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_45046e289e3210d51d59a69eea918e05cb3cb292d892527065cbcdeb5f9a625c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45046e289e3210d51d59a69eea918e05cb3cb292d892527065cbcdeb5f9a625c->enter($__internal_45046e289e3210d51d59a69eea918e05cb3cb292d892527065cbcdeb5f9a625c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_dc9ec96ffca82b67001cee3c1855e457b6be2007444fb498b0e13526f4ebdc76 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc9ec96ffca82b67001cee3c1855e457b6be2007444fb498b0e13526f4ebdc76->enter($__internal_dc9ec96ffca82b67001cee3c1855e457b6be2007444fb498b0e13526f4ebdc76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_dc9ec96ffca82b67001cee3c1855e457b6be2007444fb498b0e13526f4ebdc76->leave($__internal_dc9ec96ffca82b67001cee3c1855e457b6be2007444fb498b0e13526f4ebdc76_prof);

        
        $__internal_45046e289e3210d51d59a69eea918e05cb3cb292d892527065cbcdeb5f9a625c->leave($__internal_45046e289e3210d51d59a69eea918e05cb3cb292d892527065cbcdeb5f9a625c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_c02d607052f37ea04f1613b3535fbccdc2310bcdab6b3d2617cc7376ce491ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c02d607052f37ea04f1613b3535fbccdc2310bcdab6b3d2617cc7376ce491ab0->enter($__internal_c02d607052f37ea04f1613b3535fbccdc2310bcdab6b3d2617cc7376ce491ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_eb1dab77a64b9c28c666bc4344f4b73f2ca8394eb1abdfa5f4ebd44b83f37f67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb1dab77a64b9c28c666bc4344f4b73f2ca8394eb1abdfa5f4ebd44b83f37f67->enter($__internal_eb1dab77a64b9c28c666bc4344f4b73f2ca8394eb1abdfa5f4ebd44b83f37f67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_eb1dab77a64b9c28c666bc4344f4b73f2ca8394eb1abdfa5f4ebd44b83f37f67->leave($__internal_eb1dab77a64b9c28c666bc4344f4b73f2ca8394eb1abdfa5f4ebd44b83f37f67_prof);

        
        $__internal_c02d607052f37ea04f1613b3535fbccdc2310bcdab6b3d2617cc7376ce491ab0->leave($__internal_c02d607052f37ea04f1613b3535fbccdc2310bcdab6b3d2617cc7376ce491ab0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}
