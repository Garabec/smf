<?php

/* @Twig/Exception/traces.txt.twig */
class __TwigTemplate_3a86988fee0224e1d3f6fe2e5909fa9140aade21bb42399905979a14a395de2c extends Twig_Template
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
        $__internal_5e91c7d786d79a7f3493e89e61f964a12d12b0d28b19916a7bd690e98ec34624 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e91c7d786d79a7f3493e89e61f964a12d12b0d28b19916a7bd690e98ec34624->enter($__internal_5e91c7d786d79a7f3493e89e61f964a12d12b0d28b19916a7bd690e98ec34624_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_5e910aff51aa68a86d4e6f395917b6ec7b55ddc3613f8449463eead9f6d8ad5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e910aff51aa68a86d4e6f395917b6ec7b55ddc3613f8449463eead9f6d8ad5f->enter($__internal_5e910aff51aa68a86d4e6f395917b6ec7b55ddc3613f8449463eead9f6d8ad5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_5e91c7d786d79a7f3493e89e61f964a12d12b0d28b19916a7bd690e98ec34624->leave($__internal_5e91c7d786d79a7f3493e89e61f964a12d12b0d28b19916a7bd690e98ec34624_prof);

        
        $__internal_5e910aff51aa68a86d4e6f395917b6ec7b55ddc3613f8449463eead9f6d8ad5f->leave($__internal_5e910aff51aa68a86d4e6f395917b6ec7b55ddc3613f8449463eead9f6d8ad5f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "@Twig/Exception/traces.txt.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
