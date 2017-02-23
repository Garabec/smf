<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_f5a75f50d0dc4e0cab8230838bd56aa0baef63d5e8c6a245568fe678b9287b03 extends Twig_Template
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
        $__internal_0f59af09f948a89adf2586bd1c3ae734fb2dd07a3c54df76073fdd6f5661abcf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f59af09f948a89adf2586bd1c3ae734fb2dd07a3c54df76073fdd6f5661abcf->enter($__internal_0f59af09f948a89adf2586bd1c3ae734fb2dd07a3c54df76073fdd6f5661abcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_03ff62d9f5f87b02f8cee253c4e95c8e1368d690cb158525a537c1e8e8b95914 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ff62d9f5f87b02f8cee253c4e95c8e1368d690cb158525a537c1e8e8b95914->enter($__internal_03ff62d9f5f87b02f8cee253c4e95c8e1368d690cb158525a537c1e8e8b95914_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_0f59af09f948a89adf2586bd1c3ae734fb2dd07a3c54df76073fdd6f5661abcf->leave($__internal_0f59af09f948a89adf2586bd1c3ae734fb2dd07a3c54df76073fdd6f5661abcf_prof);

        
        $__internal_03ff62d9f5f87b02f8cee253c4e95c8e1368d690cb158525a537c1e8e8b95914->leave($__internal_03ff62d9f5f87b02f8cee253c4e95c8e1368d690cb158525a537c1e8e8b95914_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
", "TwigBundle:Exception:exception.atom.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
