<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_5554eb430ba0c1f43cffcf482c8b7a9c0181992effeb59091fa0a2e6c5b6b133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4314c5e0c84ec0220e8e50f25a9ae1e48c8cf72f7f038bcdbb80ca0a9db3d848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4314c5e0c84ec0220e8e50f25a9ae1e48c8cf72f7f038bcdbb80ca0a9db3d848->enter($__internal_4314c5e0c84ec0220e8e50f25a9ae1e48c8cf72f7f038bcdbb80ca0a9db3d848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_c9732fa28674d81094f9cd951555282ee88ab71fca3ac525572482fc6d4326ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9732fa28674d81094f9cd951555282ee88ab71fca3ac525572482fc6d4326ef->enter($__internal_c9732fa28674d81094f9cd951555282ee88ab71fca3ac525572482fc6d4326ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4314c5e0c84ec0220e8e50f25a9ae1e48c8cf72f7f038bcdbb80ca0a9db3d848->leave($__internal_4314c5e0c84ec0220e8e50f25a9ae1e48c8cf72f7f038bcdbb80ca0a9db3d848_prof);

        
        $__internal_c9732fa28674d81094f9cd951555282ee88ab71fca3ac525572482fc6d4326ef->leave($__internal_c9732fa28674d81094f9cd951555282ee88ab71fca3ac525572482fc6d4326ef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8bb4a9ed363aa391349d8ec248f5f06eedf95a384bfb0de1fef05c56b3ad893c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bb4a9ed363aa391349d8ec248f5f06eedf95a384bfb0de1fef05c56b3ad893c->enter($__internal_8bb4a9ed363aa391349d8ec248f5f06eedf95a384bfb0de1fef05c56b3ad893c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d1fac682c5232c55b8e424250016427ee3effb74144a26eef857066897f6210e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1fac682c5232c55b8e424250016427ee3effb74144a26eef857066897f6210e->enter($__internal_d1fac682c5232c55b8e424250016427ee3effb74144a26eef857066897f6210e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d1fac682c5232c55b8e424250016427ee3effb74144a26eef857066897f6210e->leave($__internal_d1fac682c5232c55b8e424250016427ee3effb74144a26eef857066897f6210e_prof);

        
        $__internal_8bb4a9ed363aa391349d8ec248f5f06eedf95a384bfb0de1fef05c56b3ad893c->leave($__internal_8bb4a9ed363aa391349d8ec248f5f06eedf95a384bfb0de1fef05c56b3ad893c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6e5815f42b8a7d0b227484452e6bdfe4aa07c5edb84cfc674a79ecf9f70559bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e5815f42b8a7d0b227484452e6bdfe4aa07c5edb84cfc674a79ecf9f70559bb->enter($__internal_6e5815f42b8a7d0b227484452e6bdfe4aa07c5edb84cfc674a79ecf9f70559bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ae3cfcb7b68d1172a44e384d39878cd531f61d17dda5cdd5a81a81938d7f224e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae3cfcb7b68d1172a44e384d39878cd531f61d17dda5cdd5a81a81938d7f224e->enter($__internal_ae3cfcb7b68d1172a44e384d39878cd531f61d17dda5cdd5a81a81938d7f224e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ae3cfcb7b68d1172a44e384d39878cd531f61d17dda5cdd5a81a81938d7f224e->leave($__internal_ae3cfcb7b68d1172a44e384d39878cd531f61d17dda5cdd5a81a81938d7f224e_prof);

        
        $__internal_6e5815f42b8a7d0b227484452e6bdfe4aa07c5edb84cfc674a79ecf9f70559bb->leave($__internal_6e5815f42b8a7d0b227484452e6bdfe4aa07c5edb84cfc674a79ecf9f70559bb_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}
