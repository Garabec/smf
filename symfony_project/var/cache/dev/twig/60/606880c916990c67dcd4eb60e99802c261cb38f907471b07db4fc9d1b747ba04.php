<?php

/* AdminBundle:Default:index.html.twig */
class __TwigTemplate_c88eb94e6b0a1e3bdbe6734d5a6ac2ccbd7e82bf2994625e8a1f30210b6553ff extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "AdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1a6822eb9f915784c2382ae7d9be979de5a2dde971e6e3f67a8fc917a11e47a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6822eb9f915784c2382ae7d9be979de5a2dde971e6e3f67a8fc917a11e47a4->enter($__internal_1a6822eb9f915784c2382ae7d9be979de5a2dde971e6e3f67a8fc917a11e47a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $__internal_4e13cf7e9ec040f8134f89156444a6edcab4194a693816d505839479117352d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e13cf7e9ec040f8134f89156444a6edcab4194a693816d505839479117352d2->enter($__internal_4e13cf7e9ec040f8134f89156444a6edcab4194a693816d505839479117352d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1a6822eb9f915784c2382ae7d9be979de5a2dde971e6e3f67a8fc917a11e47a4->leave($__internal_1a6822eb9f915784c2382ae7d9be979de5a2dde971e6e3f67a8fc917a11e47a4_prof);

        
        $__internal_4e13cf7e9ec040f8134f89156444a6edcab4194a693816d505839479117352d2->leave($__internal_4e13cf7e9ec040f8134f89156444a6edcab4194a693816d505839479117352d2_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AdminBundle::layout.html.twig\" %}


", "AdminBundle:Default:index.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/AdminBundle/Resources/views/Default/index.html.twig");
    }
}
