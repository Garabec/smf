<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_6961beed43c5f7cc65d65b281e3d8cb9c9594a6100bc06185a9764d895feb2a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bb0d53e392ad681935fcae77b8b6086e6e7864a090cefda3ef822558e257db91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb0d53e392ad681935fcae77b8b6086e6e7864a090cefda3ef822558e257db91->enter($__internal_bb0d53e392ad681935fcae77b8b6086e6e7864a090cefda3ef822558e257db91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_6041edd496ee3ae4af35d69f054fc289ccaada043ccb55cccd0042c92cf09b49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6041edd496ee3ae4af35d69f054fc289ccaada043ccb55cccd0042c92cf09b49->enter($__internal_6041edd496ee3ae4af35d69f054fc289ccaada043ccb55cccd0042c92cf09b49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bb0d53e392ad681935fcae77b8b6086e6e7864a090cefda3ef822558e257db91->leave($__internal_bb0d53e392ad681935fcae77b8b6086e6e7864a090cefda3ef822558e257db91_prof);

        
        $__internal_6041edd496ee3ae4af35d69f054fc289ccaada043ccb55cccd0042c92cf09b49->leave($__internal_6041edd496ee3ae4af35d69f054fc289ccaada043ccb55cccd0042c92cf09b49_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c2cc5ebede3a5e85fd736588dc6a38e83b06211e895cdd0d86063160e31cf3d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2cc5ebede3a5e85fd736588dc6a38e83b06211e895cdd0d86063160e31cf3d6->enter($__internal_c2cc5ebede3a5e85fd736588dc6a38e83b06211e895cdd0d86063160e31cf3d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_54fbcaa08b4745280a69e5bda0a3c2630a5a3cc1ee73996cee748d69801a8c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54fbcaa08b4745280a69e5bda0a3c2630a5a3cc1ee73996cee748d69801a8c16->enter($__internal_54fbcaa08b4745280a69e5bda0a3c2630a5a3cc1ee73996cee748d69801a8c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_54fbcaa08b4745280a69e5bda0a3c2630a5a3cc1ee73996cee748d69801a8c16->leave($__internal_54fbcaa08b4745280a69e5bda0a3c2630a5a3cc1ee73996cee748d69801a8c16_prof);

        
        $__internal_c2cc5ebede3a5e85fd736588dc6a38e83b06211e895cdd0d86063160e31cf3d6->leave($__internal_c2cc5ebede3a5e85fd736588dc6a38e83b06211e895cdd0d86063160e31cf3d6_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_aa201d76ca2d0dfc18ee9273f48e30c21969e6bff6111f645f9533132a4b4153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa201d76ca2d0dfc18ee9273f48e30c21969e6bff6111f645f9533132a4b4153->enter($__internal_aa201d76ca2d0dfc18ee9273f48e30c21969e6bff6111f645f9533132a4b4153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5e83118a6c5132f58458c291ae082ba58a24f91780700e57a7975c63040bb19b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e83118a6c5132f58458c291ae082ba58a24f91780700e57a7975c63040bb19b->enter($__internal_5e83118a6c5132f58458c291ae082ba58a24f91780700e57a7975c63040bb19b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_5e83118a6c5132f58458c291ae082ba58a24f91780700e57a7975c63040bb19b->leave($__internal_5e83118a6c5132f58458c291ae082ba58a24f91780700e57a7975c63040bb19b_prof);

        
        $__internal_aa201d76ca2d0dfc18ee9273f48e30c21969e6bff6111f645f9533132a4b4153->leave($__internal_aa201d76ca2d0dfc18ee9273f48e30c21969e6bff6111f645f9533132a4b4153_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_944ab954eb3e8a83090bc9fc0bad84ea6d0cbc44399ecc34c50f395b85d0ad2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_944ab954eb3e8a83090bc9fc0bad84ea6d0cbc44399ecc34c50f395b85d0ad2d->enter($__internal_944ab954eb3e8a83090bc9fc0bad84ea6d0cbc44399ecc34c50f395b85d0ad2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_833c1e9a94b0f19e5c7f3b3534ed78eaa503b3687e1fee67673b6a5fe35f92f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833c1e9a94b0f19e5c7f3b3534ed78eaa503b3687e1fee67673b6a5fe35f92f3->enter($__internal_833c1e9a94b0f19e5c7f3b3534ed78eaa503b3687e1fee67673b6a5fe35f92f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_833c1e9a94b0f19e5c7f3b3534ed78eaa503b3687e1fee67673b6a5fe35f92f3->leave($__internal_833c1e9a94b0f19e5c7f3b3534ed78eaa503b3687e1fee67673b6a5fe35f92f3_prof);

        
        $__internal_944ab954eb3e8a83090bc9fc0bad84ea6d0cbc44399ecc34c50f395b85d0ad2d->leave($__internal_944ab954eb3e8a83090bc9fc0bad84ea6d0cbc44399ecc34c50f395b85d0ad2d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
