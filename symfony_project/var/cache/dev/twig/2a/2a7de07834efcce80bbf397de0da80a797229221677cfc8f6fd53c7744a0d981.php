<?php

/* AdminBundle:author:new.html.twig */
class __TwigTemplate_00e5b17cf0ce2ae8facc34dfe34df364890be15912426cee1aeef98382a2975f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "AdminBundle:author:new.html.twig", 1);
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
        $__internal_f6aa84f6478b119001801b0f8025037ac767b8cb9d6635546a13d36e2ee5f9fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f6aa84f6478b119001801b0f8025037ac767b8cb9d6635546a13d36e2ee5f9fe->enter($__internal_f6aa84f6478b119001801b0f8025037ac767b8cb9d6635546a13d36e2ee5f9fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:author:new.html.twig"));

        $__internal_16780a551521b1d006982d3a1e72069915316b6bd0d359b6ef23c7206c2698dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16780a551521b1d006982d3a1e72069915316b6bd0d359b6ef23c7206c2698dd->enter($__internal_16780a551521b1d006982d3a1e72069915316b6bd0d359b6ef23c7206c2698dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:author:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f6aa84f6478b119001801b0f8025037ac767b8cb9d6635546a13d36e2ee5f9fe->leave($__internal_f6aa84f6478b119001801b0f8025037ac767b8cb9d6635546a13d36e2ee5f9fe_prof);

        
        $__internal_16780a551521b1d006982d3a1e72069915316b6bd0d359b6ef23c7206c2698dd->leave($__internal_16780a551521b1d006982d3a1e72069915316b6bd0d359b6ef23c7206c2698dd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f0ffcf5e40626648a861799f744e3ff04fcbd1d0be8a0ea713704491d356860e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0ffcf5e40626648a861799f744e3ff04fcbd1d0be8a0ea713704491d356860e->enter($__internal_f0ffcf5e40626648a861799f744e3ff04fcbd1d0be8a0ea713704491d356860e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_58ac028ffa8841548d191540a3b90b36b26699e7f960d4c66f9e001002124861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58ac028ffa8841548d191540a3b90b36b26699e7f960d4c66f9e001002124861->enter($__internal_58ac028ffa8841548d191540a3b90b36b26699e7f960d4c66f9e001002124861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Author creation</h1>
";
        // line 5
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 6
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_author_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_58ac028ffa8841548d191540a3b90b36b26699e7f960d4c66f9e001002124861->leave($__internal_58ac028ffa8841548d191540a3b90b36b26699e7f960d4c66f9e001002124861_prof);

        
        $__internal_f0ffcf5e40626648a861799f744e3ff04fcbd1d0be8a0ea713704491d356860e->leave($__internal_f0ffcf5e40626648a861799f744e3ff04fcbd1d0be8a0ea713704491d356860e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:author:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 13,  64 => 9,  59 => 7,  54 => 6,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AdminBundle::layout.html.twig\"%}

{% block content %}
    <h1>Author creation</h1>
{% form_theme form 'bootstrap_3_layout.html.twig' %}
    {{ form_start(form) }}
        {{ form_widget(form) }}
        <input type=\"submit\" value=\"Create\" />
    {{ form_end(form) }}

    <ul>
        <li>
            <a href=\"{{ path('blog_admin_author_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "AdminBundle:author:new.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/AdminBundle/Resources/views/author/new.html.twig");
    }
}
