<?php

/* CoreBundle:Post:show.html.twig */
class __TwigTemplate_f5b8009542bff2efb572a27d90f28fb3c068571650c222f71bffd55d5d7ca170 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "CoreBundle:Post:show.html.twig", 1);
        $this->blocks = array(
            'section' => array($this, 'block_section'),
            'form' => array($this, 'block_form'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_57394b2230ae34cd0d9f9b4b9a3d49e05277d91034988c3ab4ed9659a3b290cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57394b2230ae34cd0d9f9b4b9a3d49e05277d91034988c3ab4ed9659a3b290cb->enter($__internal_57394b2230ae34cd0d9f9b4b9a3d49e05277d91034988c3ab4ed9659a3b290cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:show.html.twig"));

        $__internal_f1f7f5b2f72cd34481aa525c9b8cb775281666eb6077959a7c9465211ced63d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1f7f5b2f72cd34481aa525c9b8cb775281666eb6077959a7c9465211ced63d7->enter($__internal_f1f7f5b2f72cd34481aa525c9b8cb775281666eb6077959a7c9465211ced63d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57394b2230ae34cd0d9f9b4b9a3d49e05277d91034988c3ab4ed9659a3b290cb->leave($__internal_57394b2230ae34cd0d9f9b4b9a3d49e05277d91034988c3ab4ed9659a3b290cb_prof);

        
        $__internal_f1f7f5b2f72cd34481aa525c9b8cb775281666eb6077959a7c9465211ced63d7->leave($__internal_f1f7f5b2f72cd34481aa525c9b8cb775281666eb6077959a7c9465211ced63d7_prof);

    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        $__internal_28dc0827bb4961aec58514a2f6a0463649f6fea3ec9adefe65ae6c9f1f7cd9e3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28dc0827bb4961aec58514a2f6a0463649f6fea3ec9adefe65ae6c9f1f7cd9e3->enter($__internal_28dc0827bb4961aec58514a2f6a0463649f6fea3ec9adefe65ae6c9f1f7cd9e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_35754eb248abbf7a3f3d7dceeca8fa9abbfde7a5becd0c6ffe10340be4f18fb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35754eb248abbf7a3f3d7dceeca8fa9abbfde7a5becd0c6ffe10340be4f18fb4->enter($__internal_35754eb248abbf7a3f3d7dceeca8fa9abbfde7a5becd0c6ffe10340be4f18fb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        echo " 
                     
    <article>
           <header>
              <h2><a  href=\"#\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</a></h2> 
           </header>
    
            <p> 
              <time datetime=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdAt", array()), "c"), "html", null, true);
        echo "\" > ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdAt", array())), "html", null, true);
        echo " </time>
              ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.author"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array()), "name", array()), "html", null, true);
        echo "
            </p>

            <p>
               ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "body", array()), "html", null, true);
        echo "   
            </p>
     </article>
  
  
    <a id=\"comments\"></a>
    
     <hr>
     
    <h2>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.post.comment.title"), "html", null, true);
        echo ":</h2>



";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 33
            echo "
      ";
            // line 34
            echo twig_include($this->env, $context, "CoreBundle:Post:_comment.html.twig", array("comment" => $context["comment"]));
            echo "

";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    
  

<br>

";
        // line 42
        $this->displayBlock('form', $context, $blocks);
        // line 54
        echo " 



  
";
        
        $__internal_35754eb248abbf7a3f3d7dceeca8fa9abbfde7a5becd0c6ffe10340be4f18fb4->leave($__internal_35754eb248abbf7a3f3d7dceeca8fa9abbfde7a5becd0c6ffe10340be4f18fb4_prof);

        
        $__internal_28dc0827bb4961aec58514a2f6a0463649f6fea3ec9adefe65ae6c9f1f7cd9e3->leave($__internal_28dc0827bb4961aec58514a2f6a0463649f6fea3ec9adefe65ae6c9f1f7cd9e3_prof);

    }

    // line 42
    public function block_form($context, array $blocks = array())
    {
        $__internal_382807cb1f6034510191e1491988439ed507c4415380ae43dba4e0175c7ec377 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_382807cb1f6034510191e1491988439ed507c4415380ae43dba4e0175c7ec377->enter($__internal_382807cb1f6034510191e1491988439ed507c4415380ae43dba4e0175c7ec377_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_5dbdaf9ffdce3c21bc894b82e4203d36db84ec382649d6954215ba673d542917 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dbdaf9ffdce3c21bc894b82e4203d36db84ec382649d6954215ba673d542917->enter($__internal_5dbdaf9ffdce3c21bc894b82e4203d36db84ec382649d6954215ba673d542917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 43
        echo "    
    <div class=\"col-md-6 bg-success \">     

      <h3>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.post.comment.write"), "html", null, true);
        echo ":</h3>
  
      ";
        // line 48
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_layout.html.twig"));
        // line 49
        echo "      
      ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form', array("action" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_core_post_createcomment", array("slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "slug", array()))) . "#comments")));
        echo "
      
    </div>  

";
        
        $__internal_5dbdaf9ffdce3c21bc894b82e4203d36db84ec382649d6954215ba673d542917->leave($__internal_5dbdaf9ffdce3c21bc894b82e4203d36db84ec382649d6954215ba673d542917_prof);

        
        $__internal_382807cb1f6034510191e1491988439ed507c4415380ae43dba4e0175c7ec377->leave($__internal_382807cb1f6034510191e1491988439ed507c4415380ae43dba4e0175c7ec377_prof);

    }

    // line 62
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_4058a1ff4dacd15be9d3ec86fd8e507f4bafb0ef69dd12ccccec8b3a71be8ab8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4058a1ff4dacd15be9d3ec86fd8e507f4bafb0ef69dd12ccccec8b3a71be8ab8->enter($__internal_4058a1ff4dacd15be9d3ec86fd8e507f4bafb0ef69dd12ccccec8b3a71be8ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_88d518062e5f84a6b694342461ff791743bc7f9c8446937e3a309ba4b506dd59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d518062e5f84a6b694342461ff791743bc7f9c8446937e3a309ba4b506dd59->enter($__internal_88d518062e5f84a6b694342461ff791743bc7f9c8446937e3a309ba4b506dd59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo " 
                   
    <h3>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.author"), "html", null, true);
        echo "</h3>
            <a  href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_core_author_show", array("slug" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array()), "slug", array()))), "html", null, true);
        echo "\" >
            ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array()), "name", array()), "html", null, true);
        echo "</a>
                       
";
        
        $__internal_88d518062e5f84a6b694342461ff791743bc7f9c8446937e3a309ba4b506dd59->leave($__internal_88d518062e5f84a6b694342461ff791743bc7f9c8446937e3a309ba4b506dd59_prof);

        
        $__internal_4058a1ff4dacd15be9d3ec86fd8e507f4bafb0ef69dd12ccccec8b3a71be8ab8->leave($__internal_4058a1ff4dacd15be9d3ec86fd8e507f4bafb0ef69dd12ccccec8b3a71be8ab8_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 66,  213 => 65,  209 => 64,  197 => 62,  182 => 50,  179 => 49,  177 => 48,  172 => 46,  167 => 43,  158 => 42,  143 => 54,  141 => 42,  134 => 37,  117 => 34,  114 => 33,  97 => 32,  90 => 28,  78 => 19,  69 => 15,  63 => 14,  56 => 10,  42 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CoreBundle::layout.html.twig\" %}



               
{% block section %} 
                     
    <article>
           <header>
              <h2><a  href=\"#\">{{post.title}}</a></h2> 
           </header>
    
            <p> 
              <time datetime=\"{{ post.createdAt | date('c') }}\" > {{ post.createdAt | date }} </time>
              {{'blog.core.author' | trans }}: {{ post.author.name }}
            </p>

            <p>
               {{ post.body }}   
            </p>
     </article>
  
  
    <a id=\"comments\"></a>
    
     <hr>
     
    <h2>{{\"blog.core.post.comment.title\" | trans }}:</h2>



{% for comment in post.comments %}

      {{ include ('CoreBundle:Post:_comment.html.twig', {comment: comment}) }}

{% endfor %}
    
  

<br>

{% block form %}
    
    <div class=\"col-md-6 bg-success \">     

      <h3>{{\"blog.core.post.comment.write\" | trans}}:</h3>
  
      {% form_theme form 'bootstrap_3_layout.html.twig' %}
      
      {{ form(form, {action: path('blog_core_post_createcomment', {'slug': post.slug}) ~ '#comments'})}}
      
    </div>  

{% endblock %} 



  
{% endblock %}

           
{% block sidebar %} 
                   
    <h3>{{'blog.core.author' | trans }}</h3>
            <a  href=\"{{path('blog_core_author_show', {'slug': post.author.slug})}}\" >
            {{ post.author.name }}</a>
                       
{% endblock %}
             


", "CoreBundle:Post:show.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/CoreBundle/Resources/views/Post/show.html.twig");
    }
}
