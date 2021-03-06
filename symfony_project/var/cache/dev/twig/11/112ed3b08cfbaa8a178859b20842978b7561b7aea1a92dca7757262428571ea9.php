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
        $__internal_9b430b6238e62b63a1c8210215884ae3fcf702dd2236a8f1014562916ad44bfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b430b6238e62b63a1c8210215884ae3fcf702dd2236a8f1014562916ad44bfb->enter($__internal_9b430b6238e62b63a1c8210215884ae3fcf702dd2236a8f1014562916ad44bfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_110119acb3699b86441cfd5a2f017b9e4957a4d9a92a1a1b202dcb9e63101ae8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110119acb3699b86441cfd5a2f017b9e4957a4d9a92a1a1b202dcb9e63101ae8->enter($__internal_110119acb3699b86441cfd5a2f017b9e4957a4d9a92a1a1b202dcb9e63101ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9b430b6238e62b63a1c8210215884ae3fcf702dd2236a8f1014562916ad44bfb->leave($__internal_9b430b6238e62b63a1c8210215884ae3fcf702dd2236a8f1014562916ad44bfb_prof);

        
        $__internal_110119acb3699b86441cfd5a2f017b9e4957a4d9a92a1a1b202dcb9e63101ae8->leave($__internal_110119acb3699b86441cfd5a2f017b9e4957a4d9a92a1a1b202dcb9e63101ae8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_11fedc33bcab572bc6c0c3302cc52c1014b9127da6f17ade69fdb680654cc28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11fedc33bcab572bc6c0c3302cc52c1014b9127da6f17ade69fdb680654cc28b->enter($__internal_11fedc33bcab572bc6c0c3302cc52c1014b9127da6f17ade69fdb680654cc28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2b2f0a0e6596869446513786122f439b1ff9d7e7efb4a9ca027cd8f5043a1bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b2f0a0e6596869446513786122f439b1ff9d7e7efb4a9ca027cd8f5043a1bf4->enter($__internal_2b2f0a0e6596869446513786122f439b1ff9d7e7efb4a9ca027cd8f5043a1bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_2b2f0a0e6596869446513786122f439b1ff9d7e7efb4a9ca027cd8f5043a1bf4->leave($__internal_2b2f0a0e6596869446513786122f439b1ff9d7e7efb4a9ca027cd8f5043a1bf4_prof);

        
        $__internal_11fedc33bcab572bc6c0c3302cc52c1014b9127da6f17ade69fdb680654cc28b->leave($__internal_11fedc33bcab572bc6c0c3302cc52c1014b9127da6f17ade69fdb680654cc28b_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_caeacfd9565907d35f9dd3c7d7e9f94dd337e71001ad8b2074f71b5e2db46780 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caeacfd9565907d35f9dd3c7d7e9f94dd337e71001ad8b2074f71b5e2db46780->enter($__internal_caeacfd9565907d35f9dd3c7d7e9f94dd337e71001ad8b2074f71b5e2db46780_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ca29621ccf3da5eb3d632fd5bd24ae478cd2430224afa80798cf8d9749394f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca29621ccf3da5eb3d632fd5bd24ae478cd2430224afa80798cf8d9749394f6->enter($__internal_2ca29621ccf3da5eb3d632fd5bd24ae478cd2430224afa80798cf8d9749394f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2ca29621ccf3da5eb3d632fd5bd24ae478cd2430224afa80798cf8d9749394f6->leave($__internal_2ca29621ccf3da5eb3d632fd5bd24ae478cd2430224afa80798cf8d9749394f6_prof);

        
        $__internal_caeacfd9565907d35f9dd3c7d7e9f94dd337e71001ad8b2074f71b5e2db46780->leave($__internal_caeacfd9565907d35f9dd3c7d7e9f94dd337e71001ad8b2074f71b5e2db46780_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_dce8a8bc787103b888a1909b3a3e5d28aedb857445f571cea914c7b20279ead5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dce8a8bc787103b888a1909b3a3e5d28aedb857445f571cea914c7b20279ead5->enter($__internal_dce8a8bc787103b888a1909b3a3e5d28aedb857445f571cea914c7b20279ead5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_09a76a1b42834a2e670c001410ed518408f795075b6611206626ad648f58d750 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09a76a1b42834a2e670c001410ed518408f795075b6611206626ad648f58d750->enter($__internal_09a76a1b42834a2e670c001410ed518408f795075b6611206626ad648f58d750_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_09a76a1b42834a2e670c001410ed518408f795075b6611206626ad648f58d750->leave($__internal_09a76a1b42834a2e670c001410ed518408f795075b6611206626ad648f58d750_prof);

        
        $__internal_dce8a8bc787103b888a1909b3a3e5d28aedb857445f571cea914c7b20279ead5->leave($__internal_dce8a8bc787103b888a1909b3a3e5d28aedb857445f571cea914c7b20279ead5_prof);

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
