<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_a44aedb0224213ce4b1c107d83986da1b926a3a151e7224fceb4996b5e417720 extends Twig_Template
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
        $__internal_656cd77279ec531164b5bef86b27b900e052938cd4379a9bee30ff19ff5414ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_656cd77279ec531164b5bef86b27b900e052938cd4379a9bee30ff19ff5414ee->enter($__internal_656cd77279ec531164b5bef86b27b900e052938cd4379a9bee30ff19ff5414ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_6e55d7817590a9958f70c52c5af797ed7bc446a9ef063a5cd985777bd0401f2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e55d7817590a9958f70c52c5af797ed7bc446a9ef063a5cd985777bd0401f2f->enter($__internal_6e55d7817590a9958f70c52c5af797ed7bc446a9ef063a5cd985777bd0401f2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_656cd77279ec531164b5bef86b27b900e052938cd4379a9bee30ff19ff5414ee->leave($__internal_656cd77279ec531164b5bef86b27b900e052938cd4379a9bee30ff19ff5414ee_prof);

        
        $__internal_6e55d7817590a9958f70c52c5af797ed7bc446a9ef063a5cd985777bd0401f2f->leave($__internal_6e55d7817590a9958f70c52c5af797ed7bc446a9ef063a5cd985777bd0401f2f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
