<?php

/* ModelBundle:Default:index.html.twig */
class __TwigTemplate_01484ea800e78d4bb585db1a7bda8313a7b553512bb1a39c19af28c8daf0dc7b extends Twig_Template
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
        $__internal_a8b8a0500d0d4d8cd2e66503a78e2ceb7ce22216d25dc96668f7155a0989b141 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a8b8a0500d0d4d8cd2e66503a78e2ceb7ce22216d25dc96668f7155a0989b141->enter($__internal_a8b8a0500d0d4d8cd2e66503a78e2ceb7ce22216d25dc96668f7155a0989b141_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModelBundle:Default:index.html.twig"));

        $__internal_41deb54968cb1694faae9ac47ebe6d920a10ef67b8431133faa4765f4a607eef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41deb54968cb1694faae9ac47ebe6d920a10ef67b8431133faa4765f4a607eef->enter($__internal_41deb54968cb1694faae9ac47ebe6d920a10ef67b8431133faa4765f4a607eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ModelBundle:Default:index.html.twig"));

        // line 1
        echo "Hello World!
";
        
        $__internal_a8b8a0500d0d4d8cd2e66503a78e2ceb7ce22216d25dc96668f7155a0989b141->leave($__internal_a8b8a0500d0d4d8cd2e66503a78e2ceb7ce22216d25dc96668f7155a0989b141_prof);

        
        $__internal_41deb54968cb1694faae9ac47ebe6d920a10ef67b8431133faa4765f4a607eef->leave($__internal_41deb54968cb1694faae9ac47ebe6d920a10ef67b8431133faa4765f4a607eef_prof);

    }

    public function getTemplateName()
    {
        return "ModelBundle:Default:index.html.twig";
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
        return new Twig_Source("Hello World!
", "ModelBundle:Default:index.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/ModelBundle/Resources/views/Default/index.html.twig");
    }
}
