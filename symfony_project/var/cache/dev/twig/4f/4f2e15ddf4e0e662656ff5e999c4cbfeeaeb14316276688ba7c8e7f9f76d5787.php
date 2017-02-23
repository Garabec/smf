<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_36255b3d14bc970c72ffe43b35a8441f85454e63c25459183c75f637e96e8613 extends Twig_Template
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
        $__internal_ecbc9b301b1b70884b7840c9f16f2dffd55dd0245dcb5bd6dca0ff73353b7814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ecbc9b301b1b70884b7840c9f16f2dffd55dd0245dcb5bd6dca0ff73353b7814->enter($__internal_ecbc9b301b1b70884b7840c9f16f2dffd55dd0245dcb5bd6dca0ff73353b7814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_73bd46b2a6876310ecf73135430c57b88d5071866d565902a88e35ec567f6913 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_73bd46b2a6876310ecf73135430c57b88d5071866d565902a88e35ec567f6913->enter($__internal_73bd46b2a6876310ecf73135430c57b88d5071866d565902a88e35ec567f6913_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ecbc9b301b1b70884b7840c9f16f2dffd55dd0245dcb5bd6dca0ff73353b7814->leave($__internal_ecbc9b301b1b70884b7840c9f16f2dffd55dd0245dcb5bd6dca0ff73353b7814_prof);

        
        $__internal_73bd46b2a6876310ecf73135430c57b88d5071866d565902a88e35ec567f6913->leave($__internal_73bd46b2a6876310ecf73135430c57b88d5071866d565902a88e35ec567f6913_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
