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
        $__internal_267e8916d76adeb7fbcad3312f8986ee596eea006155f4981432636ea113b9dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_267e8916d76adeb7fbcad3312f8986ee596eea006155f4981432636ea113b9dd->enter($__internal_267e8916d76adeb7fbcad3312f8986ee596eea006155f4981432636ea113b9dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:post:new.html.twig"));

        $__internal_a09255d94ea60a295f33cf2fcc07eea95c76b968438a1156357896f9947cb850 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a09255d94ea60a295f33cf2fcc07eea95c76b968438a1156357896f9947cb850->enter($__internal_a09255d94ea60a295f33cf2fcc07eea95c76b968438a1156357896f9947cb850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:post:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_267e8916d76adeb7fbcad3312f8986ee596eea006155f4981432636ea113b9dd->leave($__internal_267e8916d76adeb7fbcad3312f8986ee596eea006155f4981432636ea113b9dd_prof);

        
        $__internal_a09255d94ea60a295f33cf2fcc07eea95c76b968438a1156357896f9947cb850->leave($__internal_a09255d94ea60a295f33cf2fcc07eea95c76b968438a1156357896f9947cb850_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1342887a9cde8c113cf8db30306d5b44fdd80156ccd2a6c6f27a8242f677b7f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1342887a9cde8c113cf8db30306d5b44fdd80156ccd2a6c6f27a8242f677b7f6->enter($__internal_1342887a9cde8c113cf8db30306d5b44fdd80156ccd2a6c6f27a8242f677b7f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_64f274028b2b3d80443648396e9f8934357a1246b549f09459ae0ba2e950425a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f274028b2b3d80443648396e9f8934357a1246b549f09459ae0ba2e950425a->enter($__internal_64f274028b2b3d80443648396e9f8934357a1246b549f09459ae0ba2e950425a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_64f274028b2b3d80443648396e9f8934357a1246b549f09459ae0ba2e950425a->leave($__internal_64f274028b2b3d80443648396e9f8934357a1246b549f09459ae0ba2e950425a_prof);

        
        $__internal_1342887a9cde8c113cf8db30306d5b44fdd80156ccd2a6c6f27a8242f677b7f6->leave($__internal_1342887a9cde8c113cf8db30306d5b44fdd80156ccd2a6c6f27a8242f677b7f6_prof);

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
