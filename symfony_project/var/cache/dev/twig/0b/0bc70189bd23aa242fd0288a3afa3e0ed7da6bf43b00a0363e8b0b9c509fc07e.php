<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_654e981c86bc59099411dd533f3bbb5580a567486f9feee562946508d3c56198 extends Twig_Template
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
        $__internal_18974e442f5dc2fa9eba5139cb85ec6337fa338a1a273fa137a0c0af8744e3d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18974e442f5dc2fa9eba5139cb85ec6337fa338a1a273fa137a0c0af8744e3d1->enter($__internal_18974e442f5dc2fa9eba5139cb85ec6337fa338a1a273fa137a0c0af8744e3d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_ba8649726bf5f5c149cd97820e72171265a6f3e3b8ed5ba5e5921435b6036170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba8649726bf5f5c149cd97820e72171265a6f3e3b8ed5ba5e5921435b6036170->enter($__internal_ba8649726bf5f5c149cd97820e72171265a6f3e3b8ed5ba5e5921435b6036170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_18974e442f5dc2fa9eba5139cb85ec6337fa338a1a273fa137a0c0af8744e3d1->leave($__internal_18974e442f5dc2fa9eba5139cb85ec6337fa338a1a273fa137a0c0af8744e3d1_prof);

        
        $__internal_ba8649726bf5f5c149cd97820e72171265a6f3e3b8ed5ba5e5921435b6036170->leave($__internal_ba8649726bf5f5c149cd97820e72171265a6f3e3b8ed5ba5e5921435b6036170_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
