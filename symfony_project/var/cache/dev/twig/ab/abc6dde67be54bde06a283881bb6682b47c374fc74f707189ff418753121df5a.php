<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_9b73f13ec637160cbd6f0190bd65d9de9e8347499c5371db4f79e5853d7f0e0d extends Twig_Template
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
        $__internal_8a1e199050b2d23d235a798e2b0776ee14218d8e977ad70f2776d6f87fd2d2cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8a1e199050b2d23d235a798e2b0776ee14218d8e977ad70f2776d6f87fd2d2cd->enter($__internal_8a1e199050b2d23d235a798e2b0776ee14218d8e977ad70f2776d6f87fd2d2cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_612e7544baa6275c320c0177a2a68e87ffc5ba52b6f70c2dd000df5f495f5106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_612e7544baa6275c320c0177a2a68e87ffc5ba52b6f70c2dd000df5f495f5106->enter($__internal_612e7544baa6275c320c0177a2a68e87ffc5ba52b6f70c2dd000df5f495f5106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_8a1e199050b2d23d235a798e2b0776ee14218d8e977ad70f2776d6f87fd2d2cd->leave($__internal_8a1e199050b2d23d235a798e2b0776ee14218d8e977ad70f2776d6f87fd2d2cd_prof);

        
        $__internal_612e7544baa6275c320c0177a2a68e87ffc5ba52b6f70c2dd000df5f495f5106->leave($__internal_612e7544baa6275c320c0177a2a68e87ffc5ba52b6f70c2dd000df5f495f5106_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
", "TwigBundle:Exception:error.css.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
