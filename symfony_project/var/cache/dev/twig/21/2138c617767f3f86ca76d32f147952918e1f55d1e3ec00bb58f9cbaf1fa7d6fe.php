<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_26ff8b2ec022e1e4122a15ba86925423b84c87ff0496da7fe897767efe921d56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4ba66a8be56c83171b70e246e2c255f1ee992653bd397d6ebc228df3b6919af9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ba66a8be56c83171b70e246e2c255f1ee992653bd397d6ebc228df3b6919af9->enter($__internal_4ba66a8be56c83171b70e246e2c255f1ee992653bd397d6ebc228df3b6919af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_8eb8745d989c027773283bd99f9d3ed4c5ba90a688d7940d1dfb8e535a34d026 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb8745d989c027773283bd99f9d3ed4c5ba90a688d7940d1dfb8e535a34d026->enter($__internal_8eb8745d989c027773283bd99f9d3ed4c5ba90a688d7940d1dfb8e535a34d026_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_4ba66a8be56c83171b70e246e2c255f1ee992653bd397d6ebc228df3b6919af9->leave($__internal_4ba66a8be56c83171b70e246e2c255f1ee992653bd397d6ebc228df3b6919af9_prof);

        
        $__internal_8eb8745d989c027773283bd99f9d3ed4c5ba90a688d7940d1dfb8e535a34d026->leave($__internal_8eb8745d989c027773283bd99f9d3ed4c5ba90a688d7940d1dfb8e535a34d026_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_afa8c33d1b7de487fdb1705a32f4e901fe94aa8e1a49bcb7e2107596ceac00ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_afa8c33d1b7de487fdb1705a32f4e901fe94aa8e1a49bcb7e2107596ceac00ab->enter($__internal_afa8c33d1b7de487fdb1705a32f4e901fe94aa8e1a49bcb7e2107596ceac00ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_509f88ef5f878734c3917fc3c80545f58980289c8a42665cdde29f3cfb00d073 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_509f88ef5f878734c3917fc3c80545f58980289c8a42665cdde29f3cfb00d073->enter($__internal_509f88ef5f878734c3917fc3c80545f58980289c8a42665cdde29f3cfb00d073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_509f88ef5f878734c3917fc3c80545f58980289c8a42665cdde29f3cfb00d073->leave($__internal_509f88ef5f878734c3917fc3c80545f58980289c8a42665cdde29f3cfb00d073_prof);

        
        $__internal_afa8c33d1b7de487fdb1705a32f4e901fe94aa8e1a49bcb7e2107596ceac00ab->leave($__internal_afa8c33d1b7de487fdb1705a32f4e901fe94aa8e1a49bcb7e2107596ceac00ab_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
