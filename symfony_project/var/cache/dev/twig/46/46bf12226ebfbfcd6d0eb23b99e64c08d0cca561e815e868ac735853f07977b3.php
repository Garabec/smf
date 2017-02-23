<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_e9e8657fc5929190c72155155a2a717d2c35453cf527b50558346905714b6cd2 extends Twig_Template
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
        $__internal_bce5085a80e68825f1eab65b7bb00198540d355120eddc8f5eb9a248e91ab045 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bce5085a80e68825f1eab65b7bb00198540d355120eddc8f5eb9a248e91ab045->enter($__internal_bce5085a80e68825f1eab65b7bb00198540d355120eddc8f5eb9a248e91ab045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_1a8d8b8be530418a6202f61e9839defbb74ccba8d9032bfcb9309527082340fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a8d8b8be530418a6202f61e9839defbb74ccba8d9032bfcb9309527082340fe->enter($__internal_1a8d8b8be530418a6202f61e9839defbb74ccba8d9032bfcb9309527082340fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_bce5085a80e68825f1eab65b7bb00198540d355120eddc8f5eb9a248e91ab045->leave($__internal_bce5085a80e68825f1eab65b7bb00198540d355120eddc8f5eb9a248e91ab045_prof);

        
        $__internal_1a8d8b8be530418a6202f61e9839defbb74ccba8d9032bfcb9309527082340fe->leave($__internal_1a8d8b8be530418a6202f61e9839defbb74ccba8d9032bfcb9309527082340fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
