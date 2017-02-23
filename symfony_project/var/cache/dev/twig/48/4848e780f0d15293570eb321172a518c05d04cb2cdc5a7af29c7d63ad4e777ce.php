<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_7ae9916251f94fe9e346f1728bc644ce3f4646052f3d1845ecb49b22fce5f5a7 extends Twig_Template
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
        $__internal_8c376004de5339cf90363c68dd4f448a9fdf297cddffb39baee15c72fa0e05b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8c376004de5339cf90363c68dd4f448a9fdf297cddffb39baee15c72fa0e05b7->enter($__internal_8c376004de5339cf90363c68dd4f448a9fdf297cddffb39baee15c72fa0e05b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_b3648df98e04b20feca4521eac0e0d7d0ca8f9d61f6b82e6fd720d3ba0ab9616 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3648df98e04b20feca4521eac0e0d7d0ca8f9d61f6b82e6fd720d3ba0ab9616->enter($__internal_b3648df98e04b20feca4521eac0e0d7d0ca8f9d61f6b82e6fd720d3ba0ab9616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_8c376004de5339cf90363c68dd4f448a9fdf297cddffb39baee15c72fa0e05b7->leave($__internal_8c376004de5339cf90363c68dd4f448a9fdf297cddffb39baee15c72fa0e05b7_prof);

        
        $__internal_b3648df98e04b20feca4521eac0e0d7d0ca8f9d61f6b82e6fd720d3ba0ab9616->leave($__internal_b3648df98e04b20feca4521eac0e0d7d0ca8f9d61f6b82e6fd720d3ba0ab9616_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
