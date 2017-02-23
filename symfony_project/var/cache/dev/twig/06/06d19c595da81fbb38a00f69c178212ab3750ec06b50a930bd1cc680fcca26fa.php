<?php

/* AdminBundle:post:new.html.twig */
class __TwigTemplate_9caff62aa46dcafc6e9ab8ee7186479980dae4840ec9baeecda9dcf2b9b8003f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "AdminBundle:post:new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38617ea7431826477d35c6ce1667e1d242a7834136a0e6725f8a45697fb326a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38617ea7431826477d35c6ce1667e1d242a7834136a0e6725f8a45697fb326a4->enter($__internal_38617ea7431826477d35c6ce1667e1d242a7834136a0e6725f8a45697fb326a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:post:new.html.twig"));

        $__internal_76d40b38e63e7ca70b7c787af8179efda4e951f95a402dfa1a6be7524abe90d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76d40b38e63e7ca70b7c787af8179efda4e951f95a402dfa1a6be7524abe90d9->enter($__internal_76d40b38e63e7ca70b7c787af8179efda4e951f95a402dfa1a6be7524abe90d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38617ea7431826477d35c6ce1667e1d242a7834136a0e6725f8a45697fb326a4->leave($__internal_38617ea7431826477d35c6ce1667e1d242a7834136a0e6725f8a45697fb326a4_prof);

        
        $__internal_76d40b38e63e7ca70b7c787af8179efda4e951f95a402dfa1a6be7524abe90d9->leave($__internal_76d40b38e63e7ca70b7c787af8179efda4e951f95a402dfa1a6be7524abe90d9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_18b0823db4234efaeb3a95d0b6f54087afc219b26ad3b314147f263d7dbeed8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18b0823db4234efaeb3a95d0b6f54087afc219b26ad3b314147f263d7dbeed8c->enter($__internal_18b0823db4234efaeb3a95d0b6f54087afc219b26ad3b314147f263d7dbeed8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_df0d485067b97ebbf74fc4a9a7aaf0139c91cc72cfc55e609227bb977a7686f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df0d485067b97ebbf74fc4a9a7aaf0139c91cc72cfc55e609227bb977a7686f9->enter($__internal_df0d485067b97ebbf74fc4a9a7aaf0139c91cc72cfc55e609227bb977a7686f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Post creation</h1>
    
";
        // line 6
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 7
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 8
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 14
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_post_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_df0d485067b97ebbf74fc4a9a7aaf0139c91cc72cfc55e609227bb977a7686f9->leave($__internal_df0d485067b97ebbf74fc4a9a7aaf0139c91cc72cfc55e609227bb977a7686f9_prof);

        
        $__internal_18b0823db4234efaeb3a95d0b6f54087afc219b26ad3b314147f263d7dbeed8c->leave($__internal_18b0823db4234efaeb3a95d0b6f54087afc219b26ad3b314147f263d7dbeed8c_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:post:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 14,  65 => 10,  60 => 8,  55 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
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

{% block content %}
    <h1>Post creation</h1>
    
{% form_theme form 'bootstrap_3_layout.html.twig' %}
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('blog_admin_post_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "AdminBundle:post:new.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/AdminBundle/Resources/views/post/new.html.twig");
    }
}
