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
        $__internal_6f01093680c11fb0472b8091be2eb404ba5fb3ec5dba25fc640ef3f518dc5f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f01093680c11fb0472b8091be2eb404ba5fb3ec5dba25fc640ef3f518dc5f8f->enter($__internal_6f01093680c11fb0472b8091be2eb404ba5fb3ec5dba25fc640ef3f518dc5f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:show.html.twig"));

        $__internal_f612a72c6e60fa5f5541cea61596e2cfff3290032a5c9064a365ef52f1707ba6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f612a72c6e60fa5f5541cea61596e2cfff3290032a5c9064a365ef52f1707ba6->enter($__internal_f612a72c6e60fa5f5541cea61596e2cfff3290032a5c9064a365ef52f1707ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f01093680c11fb0472b8091be2eb404ba5fb3ec5dba25fc640ef3f518dc5f8f->leave($__internal_6f01093680c11fb0472b8091be2eb404ba5fb3ec5dba25fc640ef3f518dc5f8f_prof);

        
        $__internal_f612a72c6e60fa5f5541cea61596e2cfff3290032a5c9064a365ef52f1707ba6->leave($__internal_f612a72c6e60fa5f5541cea61596e2cfff3290032a5c9064a365ef52f1707ba6_prof);

    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        $__internal_f45a2d342bb3eb72324a159900d15bda5b53d91038cdec12ca85fa3760ee1969 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f45a2d342bb3eb72324a159900d15bda5b53d91038cdec12ca85fa3760ee1969->enter($__internal_f45a2d342bb3eb72324a159900d15bda5b53d91038cdec12ca85fa3760ee1969_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_8983505adda0a1ff0c421390e74aaf3020693eed9258d3c30ca7d9a0567ca55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8983505adda0a1ff0c421390e74aaf3020693eed9258d3c30ca7d9a0567ca55f->enter($__internal_8983505adda0a1ff0c421390e74aaf3020693eed9258d3c30ca7d9a0567ca55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

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
        
        $__internal_8983505adda0a1ff0c421390e74aaf3020693eed9258d3c30ca7d9a0567ca55f->leave($__internal_8983505adda0a1ff0c421390e74aaf3020693eed9258d3c30ca7d9a0567ca55f_prof);

        
        $__internal_f45a2d342bb3eb72324a159900d15bda5b53d91038cdec12ca85fa3760ee1969->leave($__internal_f45a2d342bb3eb72324a159900d15bda5b53d91038cdec12ca85fa3760ee1969_prof);

    }

    // line 42
    public function block_form($context, array $blocks = array())
    {
        $__internal_f361742437050ac5d437d339aaeefe4d0c9b3f5fd12965085627275001bf3c20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f361742437050ac5d437d339aaeefe4d0c9b3f5fd12965085627275001bf3c20->enter($__internal_f361742437050ac5d437d339aaeefe4d0c9b3f5fd12965085627275001bf3c20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_29b02cebf0718ebd812a70daa11008d9aa03ae96675c342b8aa09a11302ff995 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29b02cebf0718ebd812a70daa11008d9aa03ae96675c342b8aa09a11302ff995->enter($__internal_29b02cebf0718ebd812a70daa11008d9aa03ae96675c342b8aa09a11302ff995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

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
        
        $__internal_29b02cebf0718ebd812a70daa11008d9aa03ae96675c342b8aa09a11302ff995->leave($__internal_29b02cebf0718ebd812a70daa11008d9aa03ae96675c342b8aa09a11302ff995_prof);

        
        $__internal_f361742437050ac5d437d339aaeefe4d0c9b3f5fd12965085627275001bf3c20->leave($__internal_f361742437050ac5d437d339aaeefe4d0c9b3f5fd12965085627275001bf3c20_prof);

    }

    // line 62
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_14f321659f8a845cda272992f6ecaf09283702a70d43d13f1a7ec2724444f3ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14f321659f8a845cda272992f6ecaf09283702a70d43d13f1a7ec2724444f3ce->enter($__internal_14f321659f8a845cda272992f6ecaf09283702a70d43d13f1a7ec2724444f3ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_45e69c7be5358de11e1dc35e49d360fd8af43f340cb525b61b6d1a3af985df31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45e69c7be5358de11e1dc35e49d360fd8af43f340cb525b61b6d1a3af985df31->enter($__internal_45e69c7be5358de11e1dc35e49d360fd8af43f340cb525b61b6d1a3af985df31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_45e69c7be5358de11e1dc35e49d360fd8af43f340cb525b61b6d1a3af985df31->leave($__internal_45e69c7be5358de11e1dc35e49d360fd8af43f340cb525b61b6d1a3af985df31_prof);

        
        $__internal_14f321659f8a845cda272992f6ecaf09283702a70d43d13f1a7ec2724444f3ce->leave($__internal_14f321659f8a845cda272992f6ecaf09283702a70d43d13f1a7ec2724444f3ce_prof);

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
