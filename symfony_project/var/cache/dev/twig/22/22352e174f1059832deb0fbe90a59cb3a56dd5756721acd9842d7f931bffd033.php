<?php

/* AdminBundle:post:edit.html.twig */
class __TwigTemplate_9b62c0190267593d8c6208fa4f63dcd7bff63db304e35923c4c8fddecdc4eab6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "AdminBundle:post:edit.html.twig", 1);
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
        $__internal_df6158f36d925102d18482e3623ee66a3a493e1df2df9b0719dd5f441664c455 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_df6158f36d925102d18482e3623ee66a3a493e1df2df9b0719dd5f441664c455->enter($__internal_df6158f36d925102d18482e3623ee66a3a493e1df2df9b0719dd5f441664c455_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:post:edit.html.twig"));

        $__internal_3fa512371eec5a0d3949b59e9e5fd51356d39256fb4e35c3b85b605623c5de16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa512371eec5a0d3949b59e9e5fd51356d39256fb4e35c3b85b605623c5de16->enter($__internal_3fa512371eec5a0d3949b59e9e5fd51356d39256fb4e35c3b85b605623c5de16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:post:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df6158f36d925102d18482e3623ee66a3a493e1df2df9b0719dd5f441664c455->leave($__internal_df6158f36d925102d18482e3623ee66a3a493e1df2df9b0719dd5f441664c455_prof);

        
        $__internal_3fa512371eec5a0d3949b59e9e5fd51356d39256fb4e35c3b85b605623c5de16->leave($__internal_3fa512371eec5a0d3949b59e9e5fd51356d39256fb4e35c3b85b605623c5de16_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_37e3aaa7bb267065fb4ee41faacf7f4be25446b30842fae29f6b2a7c89761e76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37e3aaa7bb267065fb4ee41faacf7f4be25446b30842fae29f6b2a7c89761e76->enter($__internal_37e3aaa7bb267065fb4ee41faacf7f4be25446b30842fae29f6b2a7c89761e76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_282f55606d1b397985438d15361d4022c97c74b80a47c32e2034a3f56e47f354 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_282f55606d1b397985438d15361d4022c97c74b80a47c32e2034a3f56e47f354->enter($__internal_282f55606d1b397985438d15361d4022c97c74b80a47c32e2034a3f56e47f354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_post_index");
        echo "\"><button type=\"button\" class=\"btn btn-default\">Back to the list</button></a>
<br>
    <h1>Post edit</h1>


    
<div class=\"row\">
  <div class=\"col-md-6\">
 
";
        // line 13
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 14
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 15
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\"class=\"btn btn-info\" value=\"Edit\" />
    ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "


 </div>
  
<div class=\"col-md-6\">
    
            
       
            ";
        // line 26
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\"  class=\"btn btn-danger\" value=\"Delete\">
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
       
    
  </div>
  </div>
 
";
        
        $__internal_282f55606d1b397985438d15361d4022c97c74b80a47c32e2034a3f56e47f354->leave($__internal_282f55606d1b397985438d15361d4022c97c74b80a47c32e2034a3f56e47f354_prof);

        
        $__internal_37e3aaa7bb267065fb4ee41faacf7f4be25446b30842fae29f6b2a7c89761e76->leave($__internal_37e3aaa7bb267065fb4ee41faacf7f4be25446b30842fae29f6b2a7c89761e76_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:post:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 28,  86 => 26,  74 => 17,  69 => 15,  64 => 14,  62 => 13,  49 => 4,  40 => 3,  11 => 1,);
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
<a href=\"{{ path('blog_admin_post_index') }}\"><button type=\"button\" class=\"btn btn-default\">Back to the list</button></a>
<br>
    <h1>Post edit</h1>


    
<div class=\"row\">
  <div class=\"col-md-6\">
 
{% form_theme edit_form 'bootstrap_3_layout.html.twig' %}
    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\"class=\"btn btn-info\" value=\"Edit\" />
    {{ form_end(edit_form) }}


 </div>
  
<div class=\"col-md-6\">
    
            
       
            {{ form_start(delete_form) }}
                <input type=\"submit\"  class=\"btn btn-danger\" value=\"Delete\">
            {{ form_end(delete_form) }}
       
    
  </div>
  </div>
 
{% endblock %}
", "AdminBundle:post:edit.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/AdminBundle/Resources/views/post/edit.html.twig");
    }
}
