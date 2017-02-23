<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_d802a699bb8cf2d0ecc0442bbf59462fe9474e36fb9ba1acade62735d7196a0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9b8a30ec36dfbb74683c2787c57b0e334c0a97c336544ac6915aa1c7f4aa477 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9b8a30ec36dfbb74683c2787c57b0e334c0a97c336544ac6915aa1c7f4aa477->enter($__internal_a9b8a30ec36dfbb74683c2787c57b0e334c0a97c336544ac6915aa1c7f4aa477_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_7ebfe61d39e66b0c770da4dd46ee764c369552221f7f070889feab1ab3e11a49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ebfe61d39e66b0c770da4dd46ee764c369552221f7f070889feab1ab3e11a49->enter($__internal_7ebfe61d39e66b0c770da4dd46ee764c369552221f7f070889feab1ab3e11a49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("purge" => array("status" => "success", "title" => "The profiler database was purged successfully", "message" => "Now you need to browse some pages with the Symfony Profiler enabled to collect data."), "no_token" => array("status" => "error", "title" => (((((        // line 11
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 12
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))), "upload_error" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "No file given or the file was not uploaded successfully."), "already_exists" => array("status" => "error", "title" => "A problem occurred when uploading the data", "message" => "The token already exists in the database."));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9b8a30ec36dfbb74683c2787c57b0e334c0a97c336544ac6915aa1c7f4aa477->leave($__internal_a9b8a30ec36dfbb74683c2787c57b0e334c0a97c336544ac6915aa1c7f4aa477_prof);

        
        $__internal_7ebfe61d39e66b0c770da4dd46ee764c369552221f7f070889feab1ab3e11a49->leave($__internal_7ebfe61d39e66b0c770da4dd46ee764c369552221f7f070889feab1ab3e11a49_prof);

    }

    // line 26
    public function block_summary($context, array $blocks = array())
    {
        $__internal_bf9cee2cc29f15d3d75181e65d50c409cfff7f9a282ca3f1f3d28e0c6d940e9f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf9cee2cc29f15d3d75181e65d50c409cfff7f9a282ca3f1f3d28e0c6d940e9f->enter($__internal_bf9cee2cc29f15d3d75181e65d50c409cfff7f9a282ca3f1f3d28e0c6d940e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_726f188846d4286003e898bea502b2988ba76a1ebc7138926b1aa6979bd3d3db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_726f188846d4286003e898bea502b2988ba76a1ebc7138926b1aa6979bd3d3db->enter($__internal_726f188846d4286003e898bea502b2988ba76a1ebc7138926b1aa6979bd3d3db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 27
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 29
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_726f188846d4286003e898bea502b2988ba76a1ebc7138926b1aa6979bd3d3db->leave($__internal_726f188846d4286003e898bea502b2988ba76a1ebc7138926b1aa6979bd3d3db_prof);

        
        $__internal_bf9cee2cc29f15d3d75181e65d50c409cfff7f9a282ca3f1f3d28e0c6d940e9f->leave($__internal_bf9cee2cc29f15d3d75181e65d50c409cfff7f9a282ca3f1f3d28e0c6d940e9f_prof);

    }

    // line 34
    public function block_panel($context, array $blocks = array())
    {
        $__internal_364200d6e4ac112e01816c88293ab941aaf14b325a886c99ffb665bfa7306e51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_364200d6e4ac112e01816c88293ab941aaf14b325a886c99ffb665bfa7306e51->enter($__internal_364200d6e4ac112e01816c88293ab941aaf14b325a886c99ffb665bfa7306e51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_994d3b417bc33c79749d82b5d41ce6218da40cf8e12ae0d55068bca906d6da6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994d3b417bc33c79749d82b5d41ce6218da40cf8e12ae0d55068bca906d6da6c->enter($__internal_994d3b417bc33c79749d82b5d41ce6218da40cf8e12ae0d55068bca906d6da6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 35
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")), (isset($context["about"]) ? $context["about"] : $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_994d3b417bc33c79749d82b5d41ce6218da40cf8e12ae0d55068bca906d6da6c->leave($__internal_994d3b417bc33c79749d82b5d41ce6218da40cf8e12ae0d55068bca906d6da6c_prof);

        
        $__internal_364200d6e4ac112e01816c88293ab941aaf14b325a886c99ffb665bfa7306e51->leave($__internal_364200d6e4ac112e01816c88293ab941aaf14b325a886c99ffb665bfa7306e51_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 36,  84 => 35,  75 => 34,  61 => 29,  55 => 27,  46 => 26,  36 => 1,  34 => 12,  33 => 11,  32 => 3,  11 => 1,);
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

{% set messages = {
    'purge' : {
        status:  'success',
        title:   'The profiler database was purged successfully',
        message: 'Now you need to browse some pages with the Symfony Profiler enabled to collect data.'
    },
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    },
    'upload_error' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'No file given or the file was not uploaded successfully.'
    },
    'already_exists' : {
        status:  'error',
        title:   'A problem occurred when uploading the data',
        message: 'The token already exists in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}
