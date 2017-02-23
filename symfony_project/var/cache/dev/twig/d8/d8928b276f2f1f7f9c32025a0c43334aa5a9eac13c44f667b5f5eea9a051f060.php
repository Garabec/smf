<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_9577c930a5dc09eabd358c4a7576c74186a2867903236f073e8eecc851ff18c0 extends Twig_Template
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
        $__internal_5257d53e989883aeaadb4c76519b80e5baea7340961937d1abf7fe8ec563759c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5257d53e989883aeaadb4c76519b80e5baea7340961937d1abf7fe8ec563759c->enter($__internal_5257d53e989883aeaadb4c76519b80e5baea7340961937d1abf7fe8ec563759c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_f02916673028821a73b96f77298f718353e13fe9fb22a967444a2b62640fd2ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f02916673028821a73b96f77298f718353e13fe9fb22a967444a2b62640fd2ef->enter($__internal_f02916673028821a73b96f77298f718353e13fe9fb22a967444a2b62640fd2ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_5257d53e989883aeaadb4c76519b80e5baea7340961937d1abf7fe8ec563759c->leave($__internal_5257d53e989883aeaadb4c76519b80e5baea7340961937d1abf7fe8ec563759c_prof);

        
        $__internal_f02916673028821a73b96f77298f718353e13fe9fb22a967444a2b62640fd2ef->leave($__internal_f02916673028821a73b96f77298f718353e13fe9fb22a967444a2b62640fd2ef_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
", "TwigBundle:Exception:error.atom.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
