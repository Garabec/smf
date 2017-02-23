<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5da6977b2df7501b4aa759451d50263c9af3bc286139b2d0fb9dbd161547c8eb extends Twig_Template
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
        $__internal_f9951163c7d9f2840006ecb4d637fb40e93343e4a57911e2b0fe995f5979ff32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9951163c7d9f2840006ecb4d637fb40e93343e4a57911e2b0fe995f5979ff32->enter($__internal_f9951163c7d9f2840006ecb4d637fb40e93343e4a57911e2b0fe995f5979ff32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        $__internal_561cc654487dd6cbca9c856eb7bebde0dbcd89455762089ccfe9eda8cb01eeba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_561cc654487dd6cbca9c856eb7bebde0dbcd89455762089ccfe9eda8cb01eeba->enter($__internal_561cc654487dd6cbca9c856eb7bebde0dbcd89455762089ccfe9eda8cb01eeba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_f9951163c7d9f2840006ecb4d637fb40e93343e4a57911e2b0fe995f5979ff32->leave($__internal_f9951163c7d9f2840006ecb4d637fb40e93343e4a57911e2b0fe995f5979ff32_prof);

        
        $__internal_561cc654487dd6cbca9c856eb7bebde0dbcd89455762089ccfe9eda8cb01eeba->leave($__internal_561cc654487dd6cbca9c856eb7bebde0dbcd89455762089ccfe9eda8cb01eeba_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "TwigBundle:Exception:error.rdf.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.rdf.twig");
    }
}
