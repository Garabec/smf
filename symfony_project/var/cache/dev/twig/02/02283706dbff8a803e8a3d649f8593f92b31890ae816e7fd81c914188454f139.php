<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c7eecaaa612e236454a6923b4f58620f2599652aceea5f7cb4ea7f52255ae932 extends Twig_Template
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
        $__internal_46741ab49c9ab15d5525432609a4d367b612bf1053321deee1fd3832f130d18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46741ab49c9ab15d5525432609a4d367b612bf1053321deee1fd3832f130d18f->enter($__internal_46741ab49c9ab15d5525432609a4d367b612bf1053321deee1fd3832f130d18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_b99c660853f3566c6e0f6fa35544ae949aa1e6154a5a0ba9b67a6d25ba273627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99c660853f3566c6e0f6fa35544ae949aa1e6154a5a0ba9b67a6d25ba273627->enter($__internal_b99c660853f3566c6e0f6fa35544ae949aa1e6154a5a0ba9b67a6d25ba273627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_46741ab49c9ab15d5525432609a4d367b612bf1053321deee1fd3832f130d18f->leave($__internal_46741ab49c9ab15d5525432609a4d367b612bf1053321deee1fd3832f130d18f_prof);

        
        $__internal_b99c660853f3566c6e0f6fa35544ae949aa1e6154a5a0ba9b67a6d25ba273627->leave($__internal_b99c660853f3566c6e0f6fa35544ae949aa1e6154a5a0ba9b67a6d25ba273627_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
