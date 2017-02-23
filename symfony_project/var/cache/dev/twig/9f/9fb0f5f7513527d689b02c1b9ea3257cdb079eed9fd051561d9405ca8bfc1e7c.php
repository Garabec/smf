<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_b9ccfe3347e311f749d150037487235f643865a3b56875fdedd05fa523536474 extends Twig_Template
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
        $__internal_17c8fa327ab72a081062ba052bdaf467886fd2f9fc556c8d7773f7ef03956b30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17c8fa327ab72a081062ba052bdaf467886fd2f9fc556c8d7773f7ef03956b30->enter($__internal_17c8fa327ab72a081062ba052bdaf467886fd2f9fc556c8d7773f7ef03956b30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_7ad309e500a1a244da4b038c50106b0dd0ae6cc9db2921c38a7aa5a0183b7175 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7ad309e500a1a244da4b038c50106b0dd0ae6cc9db2921c38a7aa5a0183b7175->enter($__internal_7ad309e500a1a244da4b038c50106b0dd0ae6cc9db2921c38a7aa5a0183b7175_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_17c8fa327ab72a081062ba052bdaf467886fd2f9fc556c8d7773f7ef03956b30->leave($__internal_17c8fa327ab72a081062ba052bdaf467886fd2f9fc556c8d7773f7ef03956b30_prof);

        
        $__internal_7ad309e500a1a244da4b038c50106b0dd0ae6cc9db2921c38a7aa5a0183b7175->leave($__internal_7ad309e500a1a244da4b038c50106b0dd0ae6cc9db2921c38a7aa5a0183b7175_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
