<?php

/* AdminBundle:author:edit.html.twig */
class __TwigTemplate_0c3e54132fde7664215b6aaa4c8b222a41e1c6d8556bf44eaac5dbd5f954ead4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "AdminBundle:author:edit.html.twig", 1);
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
        $__internal_1ea3025ef6bdd92a8014bd97bb7d2d68f49c0469b38d65a32166d67545591ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ea3025ef6bdd92a8014bd97bb7d2d68f49c0469b38d65a32166d67545591ccb->enter($__internal_1ea3025ef6bdd92a8014bd97bb7d2d68f49c0469b38d65a32166d67545591ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:author:edit.html.twig"));

        $__internal_df6af3a66aa43b001e4d781d1a13a08e4a4d4e2e9283dcb1240b12ed01a64070 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df6af3a66aa43b001e4d781d1a13a08e4a4d4e2e9283dcb1240b12ed01a64070->enter($__internal_df6af3a66aa43b001e4d781d1a13a08e4a4d4e2e9283dcb1240b12ed01a64070_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:author:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ea3025ef6bdd92a8014bd97bb7d2d68f49c0469b38d65a32166d67545591ccb->leave($__internal_1ea3025ef6bdd92a8014bd97bb7d2d68f49c0469b38d65a32166d67545591ccb_prof);

        
        $__internal_df6af3a66aa43b001e4d781d1a13a08e4a4d4e2e9283dcb1240b12ed01a64070->leave($__internal_df6af3a66aa43b001e4d781d1a13a08e4a4d4e2e9283dcb1240b12ed01a64070_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5a03b7970551bcbeddd0350776a115356cfee5e5b8651457d4da7377f3ed4a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a03b7970551bcbeddd0350776a115356cfee5e5b8651457d4da7377f3ed4a56->enter($__internal_5a03b7970551bcbeddd0350776a115356cfee5e5b8651457d4da7377f3ed4a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8d9d83ae5103aa51610f16549626202a48e5b14261f650a147fa9d9675269980 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d9d83ae5103aa51610f16549626202a48e5b14261f650a147fa9d9675269980->enter($__internal_8d9d83ae5103aa51610f16549626202a48e5b14261f650a147fa9d9675269980_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Author edit</h1>
    
   <div class=\"row\">
  <div class=\"col-md-4\">
      
 
";
        // line 10
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 11
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" class=\"btn btn-info\" value=\"Edit\" />
    ";
        // line 14
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
    </div>
<div class=\"col-md-4\">
    <ul>
        
        <li>
            ";
        // line 20
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
        <br>
        <li>
            <a href=\"";
        // line 26
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_author_index");
        echo "\"><button type=\"button\" class=\"btn btn-success\">Back to the list</button></a>
        </li>
    </ul>
    
     </div>
  
</div> 
";
        
        $__internal_8d9d83ae5103aa51610f16549626202a48e5b14261f650a147fa9d9675269980->leave($__internal_8d9d83ae5103aa51610f16549626202a48e5b14261f650a147fa9d9675269980_prof);

        
        $__internal_5a03b7970551bcbeddd0350776a115356cfee5e5b8651457d4da7377f3ed4a56->leave($__internal_5a03b7970551bcbeddd0350776a115356cfee5e5b8651457d4da7377f3ed4a56_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:author:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 26,  83 => 22,  78 => 20,  69 => 14,  64 => 12,  59 => 11,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Author edit</h1>
    
   <div class=\"row\">
  <div class=\"col-md-4\">
      
 
{% form_theme edit_form 'bootstrap_3_layout.html.twig' %}
    {{ form_start(edit_form) }}
        {{ form_widget(edit_form) }}
        <input type=\"submit\" class=\"btn btn-info\" value=\"Edit\" />
    {{ form_end(edit_form) }}
    </div>
<div class=\"col-md-4\">
    <ul>
        
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" class=\"btn btn-danger\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
        <br>
        <li>
            <a href=\"{{ path('blog_admin_author_index') }}\"><button type=\"button\" class=\"btn btn-success\">Back to the list</button></a>
        </li>
    </ul>
    
     </div>
  
</div> 
{% endblock %}
", "AdminBundle:author:edit.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/AdminBundle/Resources/views/author/edit.html.twig");
    }
}
