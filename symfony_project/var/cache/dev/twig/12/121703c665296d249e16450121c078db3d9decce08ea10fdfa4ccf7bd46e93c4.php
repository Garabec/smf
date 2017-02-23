<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_eb3a399e519dcfdcee375c48dfd27b5ff6fefd3d5d78a0ab95bcbb780916590b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_351f06ee2100628cbadd67fdce337d6e968a0fa771186145d6469b8f2b45b13d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_351f06ee2100628cbadd67fdce337d6e968a0fa771186145d6469b8f2b45b13d->enter($__internal_351f06ee2100628cbadd67fdce337d6e968a0fa771186145d6469b8f2b45b13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_258481b0dca7a54024f9b4ec934b16a0d629d174f196a2d58df111071fc6b246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_258481b0dca7a54024f9b4ec934b16a0d629d174f196a2d58df111071fc6b246->enter($__internal_258481b0dca7a54024f9b4ec934b16a0d629d174f196a2d58df111071fc6b246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_351f06ee2100628cbadd67fdce337d6e968a0fa771186145d6469b8f2b45b13d->leave($__internal_351f06ee2100628cbadd67fdce337d6e968a0fa771186145d6469b8f2b45b13d_prof);

        
        $__internal_258481b0dca7a54024f9b4ec934b16a0d629d174f196a2d58df111071fc6b246->leave($__internal_258481b0dca7a54024f9b4ec934b16a0d629d174f196a2d58df111071fc6b246_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.rdf.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
