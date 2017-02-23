<?php

/* CoreBundle:Author:show.html.twig */
class __TwigTemplate_bae78deba0128eb7fa48e2c57266ff40427ecb90c1ed87e0688a0a7801701fe5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "CoreBundle:Author:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'section' => array($this, 'block_section'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_48b39d426d80aee26fca011bf3ed43967b748c8f82b56e5a439bd0280e798888 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48b39d426d80aee26fca011bf3ed43967b748c8f82b56e5a439bd0280e798888->enter($__internal_48b39d426d80aee26fca011bf3ed43967b748c8f82b56e5a439bd0280e798888_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Author:show.html.twig"));

        $__internal_8844513dbfaf41a3f8357189639a4025de0d46cc9bb95dfb145f69f1b34e3233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8844513dbfaf41a3f8357189639a4025de0d46cc9bb95dfb145f69f1b34e3233->enter($__internal_8844513dbfaf41a3f8357189639a4025de0d46cc9bb95dfb145f69f1b34e3233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Author:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48b39d426d80aee26fca011bf3ed43967b748c8f82b56e5a439bd0280e798888->leave($__internal_48b39d426d80aee26fca011bf3ed43967b748c8f82b56e5a439bd0280e798888_prof);

        
        $__internal_8844513dbfaf41a3f8357189639a4025de0d46cc9bb95dfb145f69f1b34e3233->leave($__internal_8844513dbfaf41a3f8357189639a4025de0d46cc9bb95dfb145f69f1b34e3233_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_46874c89eea615763f189e84400acb6df2b87b603d76f914926df315e152463e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46874c89eea615763f189e84400acb6df2b87b603d76f914926df315e152463e->enter($__internal_46874c89eea615763f189e84400acb6df2b87b603d76f914926df315e152463e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e6ba7a6cca02285fc00d5c67ed25e3f5f1ceb52b91e20ebe66c54e3f3574ebef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6ba7a6cca02285fc00d5c67ed25e3f5f1ceb52b91e20ebe66c54e3f3574ebef->enter($__internal_e6ba7a6cca02285fc00d5c67ed25e3f5f1ceb52b91e20ebe66c54e3f3574ebef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
  <div class=\"row\">
  <div class=\"col-md-8\">
       
";
        // line 10
        $this->displayBlock('section', $context, $blocks);
        // line 30
        echo "
  </div>
  
<div class=\"col-md-4 bg-success \">
      
    ";
        // line 35
        $this->displayBlock('sidebar', $context, $blocks);
        // line 43
        echo "    
</div>


</div>


";
        
        $__internal_e6ba7a6cca02285fc00d5c67ed25e3f5f1ceb52b91e20ebe66c54e3f3574ebef->leave($__internal_e6ba7a6cca02285fc00d5c67ed25e3f5f1ceb52b91e20ebe66c54e3f3574ebef_prof);

        
        $__internal_46874c89eea615763f189e84400acb6df2b87b603d76f914926df315e152463e->leave($__internal_46874c89eea615763f189e84400acb6df2b87b603d76f914926df315e152463e_prof);

    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        $__internal_4a8b1704f9342dae973326eafc1bdcab3f7738568dbe4330d7b7e3739397c45c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a8b1704f9342dae973326eafc1bdcab3f7738568dbe4330d7b7e3739397c45c->enter($__internal_4a8b1704f9342dae973326eafc1bdcab3f7738568dbe4330d7b7e3739397c45c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_f027007c3f688c9f690caee29248690c04621266614ca54f8dd9ec4100164179 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f027007c3f688c9f690caee29248690c04621266614ca54f8dd9ec4100164179->enter($__internal_f027007c3f688c9f690caee29248690c04621266614ca54f8dd9ec4100164179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        echo " 

<article>
    
    <header>
        
         <h1> ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.author_posts"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "name", array()), "html", null, true);
        echo " </h1> 
        
    </header>
    
                            
   ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 22
            echo "
        ";
            // line 23
            echo twig_include($this->env, $context, "CoreBundle:Post:_post.html.twig", array("post" => $context["post"]));
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "   
</article>

";
        
        $__internal_f027007c3f688c9f690caee29248690c04621266614ca54f8dd9ec4100164179->leave($__internal_f027007c3f688c9f690caee29248690c04621266614ca54f8dd9ec4100164179_prof);

        
        $__internal_4a8b1704f9342dae973326eafc1bdcab3f7738568dbe4330d7b7e3739397c45c->leave($__internal_4a8b1704f9342dae973326eafc1bdcab3f7738568dbe4330d7b7e3739397c45c_prof);

    }

    // line 35
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_7d366ef8adddae27aba93a25f1b12fc5866c519637e57039833fd4550c1abe28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d366ef8adddae27aba93a25f1b12fc5866c519637e57039833fd4550c1abe28->enter($__internal_7d366ef8adddae27aba93a25f1b12fc5866c519637e57039833fd4550c1abe28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_c028a8203bf56371d022fc1e41e203e093b4ad012821a6bffe0b4424bada63c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c028a8203bf56371d022fc1e41e203e093b4ad012821a6bffe0b4424bada63c5->enter($__internal_c028a8203bf56371d022fc1e41e203e093b4ad012821a6bffe0b4424bada63c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo " 
                   
        <h3>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.author"), "html", null, true);
        echo " </h3>
                   
    <a  href=\"#\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "name", array()), "html", null, true);
        echo "      </a>
                   
  
    ";
        
        $__internal_c028a8203bf56371d022fc1e41e203e093b4ad012821a6bffe0b4424bada63c5->leave($__internal_c028a8203bf56371d022fc1e41e203e093b4ad012821a6bffe0b4424bada63c5_prof);

        
        $__internal_7d366ef8adddae27aba93a25f1b12fc5866c519637e57039833fd4550c1abe28->leave($__internal_7d366ef8adddae27aba93a25f1b12fc5866c519637e57039833fd4550c1abe28_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Author:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 39,  173 => 37,  161 => 35,  148 => 26,  131 => 23,  128 => 22,  111 => 21,  101 => 16,  85 => 10,  68 => 43,  66 => 35,  59 => 30,  57 => 10,  51 => 6,  42 => 5,  11 => 1,);
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



{% block content %}

  <div class=\"row\">
  <div class=\"col-md-8\">
       
{% block section %} 

<article>
    
    <header>
        
         <h1> {{'blog.core.author_posts' | trans}}: {{ author.name }} </h1> 
        
    </header>
    
                            
   {% for post in posts %}

        {{ include ('CoreBundle:Post:_post.html.twig', {post: post}) }}

   {% endfor %}
   
</article>

{% endblock %}

  </div>
  
<div class=\"col-md-4 bg-success \">
      
    {% block sidebar %} 
                   
        <h3>{{'blog.core.author' | trans }} </h3>
                   
    <a  href=\"#\">{{ author.name }}      </a>
                   
  
    {% endblock %}
    
</div>


</div>


{% endblock %}", "CoreBundle:Author:show.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/CoreBundle/Resources/views/Author/show.html.twig");
    }
}
