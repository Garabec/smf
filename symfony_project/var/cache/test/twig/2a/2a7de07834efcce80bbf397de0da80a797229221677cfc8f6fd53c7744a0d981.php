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
        $__internal_4e57591ed3e35de17650c7b44a5ba0eb42536e9ee42c19e72a7441a4bdd03eed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e57591ed3e35de17650c7b44a5ba0eb42536e9ee42c19e72a7441a4bdd03eed->enter($__internal_4e57591ed3e35de17650c7b44a5ba0eb42536e9ee42c19e72a7441a4bdd03eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:author:new.html.twig"));

        $__internal_7adc9803c6cb1cd93cf9a6053949587f191fce1662249fb601bd921730597be2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7adc9803c6cb1cd93cf9a6053949587f191fce1662249fb601bd921730597be2->enter($__internal_7adc9803c6cb1cd93cf9a6053949587f191fce1662249fb601bd921730597be2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:author:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e57591ed3e35de17650c7b44a5ba0eb42536e9ee42c19e72a7441a4bdd03eed->leave($__internal_4e57591ed3e35de17650c7b44a5ba0eb42536e9ee42c19e72a7441a4bdd03eed_prof);

        
        $__internal_7adc9803c6cb1cd93cf9a6053949587f191fce1662249fb601bd921730597be2->leave($__internal_7adc9803c6cb1cd93cf9a6053949587f191fce1662249fb601bd921730597be2_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2d378f37eeaf0d858af317b5d9a822ec9b7181c52d24099c97a98aded71eb71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2d378f37eeaf0d858af317b5d9a822ec9b7181c52d24099c97a98aded71eb71->enter($__internal_b2d378f37eeaf0d858af317b5d9a822ec9b7181c52d24099c97a98aded71eb71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3c9dc4b446f3b01cbb2bbac86eeadc860049a13bb5655a9fcbe1b43de3190d52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c9dc4b446f3b01cbb2bbac86eeadc860049a13bb5655a9fcbe1b43de3190d52->enter($__internal_3c9dc4b446f3b01cbb2bbac86eeadc860049a13bb5655a9fcbe1b43de3190d52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_3c9dc4b446f3b01cbb2bbac86eeadc860049a13bb5655a9fcbe1b43de3190d52->leave($__internal_3c9dc4b446f3b01cbb2bbac86eeadc860049a13bb5655a9fcbe1b43de3190d52_prof);

        
        $__internal_b2d378f37eeaf0d858af317b5d9a822ec9b7181c52d24099c97a98aded71eb71->leave($__internal_b2d378f37eeaf0d858af317b5d9a822ec9b7181c52d24099c97a98aded71eb71_prof);

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
