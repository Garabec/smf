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
        $__internal_67911e4d8e3cb1bfbc2cd5d22247ad5dba2648bbc118f0e36eba20940d5e2f09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67911e4d8e3cb1bfbc2cd5d22247ad5dba2648bbc118f0e36eba20940d5e2f09->enter($__internal_67911e4d8e3cb1bfbc2cd5d22247ad5dba2648bbc118f0e36eba20940d5e2f09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

        $__internal_c2e949011989ea59be207788c895113ecb85dc40a87aef7eb9e5ae2dc8a7eec0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2e949011989ea59be207788c895113ecb85dc40a87aef7eb9e5ae2dc8a7eec0->enter($__internal_c2e949011989ea59be207788c895113ecb85dc40a87aef7eb9e5ae2dc8a7eec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.txt.twig"));

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
        
        $__internal_67911e4d8e3cb1bfbc2cd5d22247ad5dba2648bbc118f0e36eba20940d5e2f09->leave($__internal_67911e4d8e3cb1bfbc2cd5d22247ad5dba2648bbc118f0e36eba20940d5e2f09_prof);

        
        $__internal_c2e949011989ea59be207788c895113ecb85dc40a87aef7eb9e5ae2dc8a7eec0->leave($__internal_c2e949011989ea59be207788c895113ecb85dc40a87aef7eb9e5ae2dc8a7eec0_prof);

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
