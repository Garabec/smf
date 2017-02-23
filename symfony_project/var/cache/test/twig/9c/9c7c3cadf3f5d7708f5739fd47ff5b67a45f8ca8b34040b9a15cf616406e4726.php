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
        $__internal_48d6f281e1b97bcf47fee57daa4c80f102bb49c9f611599ea83be59aa337b39e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48d6f281e1b97bcf47fee57daa4c80f102bb49c9f611599ea83be59aa337b39e->enter($__internal_48d6f281e1b97bcf47fee57daa4c80f102bb49c9f611599ea83be59aa337b39e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Author:show.html.twig"));

        $__internal_600fc301ccf4e639575cbe5bcfad5e800afc41682e1426265df0e636b43000e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_600fc301ccf4e639575cbe5bcfad5e800afc41682e1426265df0e636b43000e8->enter($__internal_600fc301ccf4e639575cbe5bcfad5e800afc41682e1426265df0e636b43000e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Author:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_48d6f281e1b97bcf47fee57daa4c80f102bb49c9f611599ea83be59aa337b39e->leave($__internal_48d6f281e1b97bcf47fee57daa4c80f102bb49c9f611599ea83be59aa337b39e_prof);

        
        $__internal_600fc301ccf4e639575cbe5bcfad5e800afc41682e1426265df0e636b43000e8->leave($__internal_600fc301ccf4e639575cbe5bcfad5e800afc41682e1426265df0e636b43000e8_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a4b642e8ead7981ade3d99628dbc73b016b6578aaea4c3470fba8fdbdae78b52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4b642e8ead7981ade3d99628dbc73b016b6578aaea4c3470fba8fdbdae78b52->enter($__internal_a4b642e8ead7981ade3d99628dbc73b016b6578aaea4c3470fba8fdbdae78b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0e29474c20f3e3da9c33b3182d6d6806099e1fd584e71089af16fadebf585d2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e29474c20f3e3da9c33b3182d6d6806099e1fd584e71089af16fadebf585d2f->enter($__internal_0e29474c20f3e3da9c33b3182d6d6806099e1fd584e71089af16fadebf585d2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_0e29474c20f3e3da9c33b3182d6d6806099e1fd584e71089af16fadebf585d2f->leave($__internal_0e29474c20f3e3da9c33b3182d6d6806099e1fd584e71089af16fadebf585d2f_prof);

        
        $__internal_a4b642e8ead7981ade3d99628dbc73b016b6578aaea4c3470fba8fdbdae78b52->leave($__internal_a4b642e8ead7981ade3d99628dbc73b016b6578aaea4c3470fba8fdbdae78b52_prof);

    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        $__internal_d815567de5f11d51d8e23272e6dbe6e4477359fd1020e679d577171c12a33e33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d815567de5f11d51d8e23272e6dbe6e4477359fd1020e679d577171c12a33e33->enter($__internal_d815567de5f11d51d8e23272e6dbe6e4477359fd1020e679d577171c12a33e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_fd891de2b5ca2303d1d4a0c4b286e7a504ed602f7934baf61e6e9ebd6219c5f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd891de2b5ca2303d1d4a0c4b286e7a504ed602f7934baf61e6e9ebd6219c5f8->enter($__internal_fd891de2b5ca2303d1d4a0c4b286e7a504ed602f7934baf61e6e9ebd6219c5f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

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
        
        $__internal_fd891de2b5ca2303d1d4a0c4b286e7a504ed602f7934baf61e6e9ebd6219c5f8->leave($__internal_fd891de2b5ca2303d1d4a0c4b286e7a504ed602f7934baf61e6e9ebd6219c5f8_prof);

        
        $__internal_d815567de5f11d51d8e23272e6dbe6e4477359fd1020e679d577171c12a33e33->leave($__internal_d815567de5f11d51d8e23272e6dbe6e4477359fd1020e679d577171c12a33e33_prof);

    }

    // line 35
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_06548bd858ff25fffe178c70e29a10a68fa4ce6001cdd60c17b770a31c0be299 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06548bd858ff25fffe178c70e29a10a68fa4ce6001cdd60c17b770a31c0be299->enter($__internal_06548bd858ff25fffe178c70e29a10a68fa4ce6001cdd60c17b770a31c0be299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_c050633ff592fdb7812b5a5163470e5b19e5ddc53eb90e1814b2e269c3a066f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c050633ff592fdb7812b5a5163470e5b19e5ddc53eb90e1814b2e269c3a066f9->enter($__internal_c050633ff592fdb7812b5a5163470e5b19e5ddc53eb90e1814b2e269c3a066f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_c050633ff592fdb7812b5a5163470e5b19e5ddc53eb90e1814b2e269c3a066f9->leave($__internal_c050633ff592fdb7812b5a5163470e5b19e5ddc53eb90e1814b2e269c3a066f9_prof);

        
        $__internal_06548bd858ff25fffe178c70e29a10a68fa4ce6001cdd60c17b770a31c0be299->leave($__internal_06548bd858ff25fffe178c70e29a10a68fa4ce6001cdd60c17b770a31c0be299_prof);

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
