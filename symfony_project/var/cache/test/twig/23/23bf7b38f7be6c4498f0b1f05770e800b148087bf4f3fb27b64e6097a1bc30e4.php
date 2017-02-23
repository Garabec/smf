<?php

/* author/new.html.twig */
class __TwigTemplate_d303f0ec5275b8664f3e1a8b68e57d1719cfdcb4209f4be4e5362d670b8a7632 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "author/new.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_285ba9600cc5d8c37fcfe2647e4c279c79430c18aa4a898e56359afafbafd25f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_285ba9600cc5d8c37fcfe2647e4c279c79430c18aa4a898e56359afafbafd25f->enter($__internal_285ba9600cc5d8c37fcfe2647e4c279c79430c18aa4a898e56359afafbafd25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/new.html.twig"));

        $__internal_52e85b1feef12104f9d19e14504e2a2faf2e27c46cdfedf35a0dea64be95d1d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_52e85b1feef12104f9d19e14504e2a2faf2e27c46cdfedf35a0dea64be95d1d5->enter($__internal_52e85b1feef12104f9d19e14504e2a2faf2e27c46cdfedf35a0dea64be95d1d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_285ba9600cc5d8c37fcfe2647e4c279c79430c18aa4a898e56359afafbafd25f->leave($__internal_285ba9600cc5d8c37fcfe2647e4c279c79430c18aa4a898e56359afafbafd25f_prof);

        
        $__internal_52e85b1feef12104f9d19e14504e2a2faf2e27c46cdfedf35a0dea64be95d1d5->leave($__internal_52e85b1feef12104f9d19e14504e2a2faf2e27c46cdfedf35a0dea64be95d1d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_969540fa4805938fc810603cb5a95d06a0eddc697731443ac77d329ef54cd87b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_969540fa4805938fc810603cb5a95d06a0eddc697731443ac77d329ef54cd87b->enter($__internal_969540fa4805938fc810603cb5a95d06a0eddc697731443ac77d329ef54cd87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_f227c9be94d89195c4c75853a17903f9992341b7b2885077f1cb251d559d87aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f227c9be94d89195c4c75853a17903f9992341b7b2885077f1cb251d559d87aa->enter($__internal_f227c9be94d89195c4c75853a17903f9992341b7b2885077f1cb251d559d87aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Author creation</h1>

    ";
        // line 6
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
        
        $__internal_f227c9be94d89195c4c75853a17903f9992341b7b2885077f1cb251d559d87aa->leave($__internal_f227c9be94d89195c4c75853a17903f9992341b7b2885077f1cb251d559d87aa_prof);

        
        $__internal_969540fa4805938fc810603cb5a95d06a0eddc697731443ac77d329ef54cd87b->leave($__internal_969540fa4805938fc810603cb5a95d06a0eddc697731443ac77d329ef54cd87b_prof);

    }

    public function getTemplateName()
    {
        return "author/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 13,  62 => 9,  57 => 7,  53 => 6,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Author creation</h1>

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
", "author/new.html.twig", "/home/ubuntu/workspace/symfony_project/app/Resources/views/author/new.html.twig");
    }
}
