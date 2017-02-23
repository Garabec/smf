<?php

/* CoreBundle:Post:index.html.twig */
class __TwigTemplate_2091e6eb7afec545c37f59dc609ac88e6e95fdd58d79229a6e1dda2914396a95 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "CoreBundle:Post:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_cd2ea064a169525a43345f7436883addb4c74ccec9fca14a7538e3c13cb444cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd2ea064a169525a43345f7436883addb4c74ccec9fca14a7538e3c13cb444cb->enter($__internal_cd2ea064a169525a43345f7436883addb4c74ccec9fca14a7538e3c13cb444cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:index.html.twig"));

        $__internal_20af02d4d0579d960aa338ffbb0a57f7cfa012d38b4498743c1c6e1cfa9b3b42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20af02d4d0579d960aa338ffbb0a57f7cfa012d38b4498743c1c6e1cfa9b3b42->enter($__internal_20af02d4d0579d960aa338ffbb0a57f7cfa012d38b4498743c1c6e1cfa9b3b42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd2ea064a169525a43345f7436883addb4c74ccec9fca14a7538e3c13cb444cb->leave($__internal_cd2ea064a169525a43345f7436883addb4c74ccec9fca14a7538e3c13cb444cb_prof);

        
        $__internal_20af02d4d0579d960aa338ffbb0a57f7cfa012d38b4498743c1c6e1cfa9b3b42->leave($__internal_20af02d4d0579d960aa338ffbb0a57f7cfa012d38b4498743c1c6e1cfa9b3b42_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_cd22af890ebc2554ac535b95373a79f49a8e2e7054414df0bbf630b85bed6da9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cd22af890ebc2554ac535b95373a79f49a8e2e7054414df0bbf630b85bed6da9->enter($__internal_cd22af890ebc2554ac535b95373a79f49a8e2e7054414df0bbf630b85bed6da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f68f5b56b213bdf6644b061a572fe9f55c5e6e539952a44f43e4aec1c41cd9ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f68f5b56b213bdf6644b061a572fe9f55c5e6e539952a44f43e4aec1c41cd9ef->enter($__internal_f68f5b56b213bdf6644b061a572fe9f55c5e6e539952a44f43e4aec1c41cd9ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "               Welcome to the Symfony Blog
";
        
        $__internal_f68f5b56b213bdf6644b061a572fe9f55c5e6e539952a44f43e4aec1c41cd9ef->leave($__internal_f68f5b56b213bdf6644b061a572fe9f55c5e6e539952a44f43e4aec1c41cd9ef_prof);

        
        $__internal_cd22af890ebc2554ac535b95373a79f49a8e2e7054414df0bbf630b85bed6da9->leave($__internal_cd22af890ebc2554ac535b95373a79f49a8e2e7054414df0bbf630b85bed6da9_prof);

    }

    // line 12
    public function block_section($context, array $blocks = array())
    {
        $__internal_408aca91936fd24c6a7e6bceaa72cdf6c7168bc2852869255a96834621479590 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_408aca91936fd24c6a7e6bceaa72cdf6c7168bc2852869255a96834621479590->enter($__internal_408aca91936fd24c6a7e6bceaa72cdf6c7168bc2852869255a96834621479590_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_1fe461a17c62a5b9c92f3010fce71dc299df42010d95d600eba52620f07be8aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fe461a17c62a5b9c92f3010fce71dc299df42010d95d600eba52620f07be8aa->enter($__internal_1fe461a17c62a5b9c92f3010fce71dc299df42010d95d600eba52620f07be8aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        echo " 

                ";
        // line 14
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
            // line 15
            echo "                
                   ";
            // line 16
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
        // line 19
        echo "                
";
        
        $__internal_1fe461a17c62a5b9c92f3010fce71dc299df42010d95d600eba52620f07be8aa->leave($__internal_1fe461a17c62a5b9c92f3010fce71dc299df42010d95d600eba52620f07be8aa_prof);

        
        $__internal_408aca91936fd24c6a7e6bceaa72cdf6c7168bc2852869255a96834621479590->leave($__internal_408aca91936fd24c6a7e6bceaa72cdf6c7168bc2852869255a96834621479590_prof);

    }

    // line 24
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_ca03e174b590fe02f13a95cef053afca1b70b18c07f2756b260add3c03d87515 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca03e174b590fe02f13a95cef053afca1b70b18c07f2756b260add3c03d87515->enter($__internal_ca03e174b590fe02f13a95cef053afca1b70b18c07f2756b260add3c03d87515_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_20ae63691e93f2a9a469397ba2e0a75aa438390c0d10c0fdb37b43d91283240a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ae63691e93f2a9a469397ba2e0a75aa438390c0d10c0fdb37b43d91283240a->enter($__internal_20ae63691e93f2a9a469397ba2e0a75aa438390c0d10c0fdb37b43d91283240a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo " 
  
  <h3>Latest Post</h3>
     
     ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post_latest"]) ? $context["post_latest"] : $this->getContext($context, "post_latest")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 29
            echo "     
          <p><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></p>
     
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo " 
     
 ";
        
        $__internal_20ae63691e93f2a9a469397ba2e0a75aa438390c0d10c0fdb37b43d91283240a->leave($__internal_20ae63691e93f2a9a469397ba2e0a75aa438390c0d10c0fdb37b43d91283240a_prof);

        
        $__internal_ca03e174b590fe02f13a95cef053afca1b70b18c07f2756b260add3c03d87515->leave($__internal_ca03e174b590fe02f13a95cef053afca1b70b18c07f2756b260add3c03d87515_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 32,  143 => 30,  140 => 29,  136 => 28,  122 => 24,  111 => 19,  94 => 16,  91 => 15,  74 => 14,  62 => 12,  51 => 4,  42 => 3,  11 => 1,);
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

{% block title %}
               Welcome to the Symfony Blog
{% endblock %}




      
              
{% block section %} 

                {% for post in posts %}
                
                   {{ include ('CoreBundle:Post:_post.html.twig', {post: post}) }}
                   
                {% endfor %}
                
{% endblock %}

          
      
{% block sidebar %} 
  
  <h3>Latest Post</h3>
     
     {% for post in post_latest %}
     
          <p><a href=\"{{post.slug}}\">{{post.title}}</a></p>
     
     {% endfor %} 
     
 {% endblock %}
      
     




", "CoreBundle:Post:index.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/CoreBundle/Resources/views/Post/index.html.twig");
    }
}
