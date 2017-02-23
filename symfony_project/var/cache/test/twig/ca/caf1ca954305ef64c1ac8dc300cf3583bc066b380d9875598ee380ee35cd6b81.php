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
        $__internal_491488addd293fca5bd8d2851be1341092cd610d23996823e5c73301db421bd9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491488addd293fca5bd8d2851be1341092cd610d23996823e5c73301db421bd9->enter($__internal_491488addd293fca5bd8d2851be1341092cd610d23996823e5c73301db421bd9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:index.html.twig"));

        $__internal_2c54ea0405442ce2d36e12a4bd70359152c5e8a5c9135593f98b3e3a825f79d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c54ea0405442ce2d36e12a4bd70359152c5e8a5c9135593f98b3e3a825f79d2->enter($__internal_2c54ea0405442ce2d36e12a4bd70359152c5e8a5c9135593f98b3e3a825f79d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_491488addd293fca5bd8d2851be1341092cd610d23996823e5c73301db421bd9->leave($__internal_491488addd293fca5bd8d2851be1341092cd610d23996823e5c73301db421bd9_prof);

        
        $__internal_2c54ea0405442ce2d36e12a4bd70359152c5e8a5c9135593f98b3e3a825f79d2->leave($__internal_2c54ea0405442ce2d36e12a4bd70359152c5e8a5c9135593f98b3e3a825f79d2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8df80851f516fb53e7f5efc4e2af31264f0de2e71a188bfaff6ffda70bf09a46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8df80851f516fb53e7f5efc4e2af31264f0de2e71a188bfaff6ffda70bf09a46->enter($__internal_8df80851f516fb53e7f5efc4e2af31264f0de2e71a188bfaff6ffda70bf09a46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4e636f31b9c7f611b96a7363ea83098d4a82d5c53e9aeb8351552b4980b0ad1e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e636f31b9c7f611b96a7363ea83098d4a82d5c53e9aeb8351552b4980b0ad1e->enter($__internal_4e636f31b9c7f611b96a7363ea83098d4a82d5c53e9aeb8351552b4980b0ad1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "               Welcome to the Symfony Blog
";
        
        $__internal_4e636f31b9c7f611b96a7363ea83098d4a82d5c53e9aeb8351552b4980b0ad1e->leave($__internal_4e636f31b9c7f611b96a7363ea83098d4a82d5c53e9aeb8351552b4980b0ad1e_prof);

        
        $__internal_8df80851f516fb53e7f5efc4e2af31264f0de2e71a188bfaff6ffda70bf09a46->leave($__internal_8df80851f516fb53e7f5efc4e2af31264f0de2e71a188bfaff6ffda70bf09a46_prof);

    }

    // line 12
    public function block_section($context, array $blocks = array())
    {
        $__internal_0053e9dd57acba794919a554b818eb624d919bb6e576343f57f055139b21e153 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0053e9dd57acba794919a554b818eb624d919bb6e576343f57f055139b21e153->enter($__internal_0053e9dd57acba794919a554b818eb624d919bb6e576343f57f055139b21e153_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_8a58b2f8938f479cd0198f6af1b86ee3577fac2d30affe11580f9354dd826ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a58b2f8938f479cd0198f6af1b86ee3577fac2d30affe11580f9354dd826ee2->enter($__internal_8a58b2f8938f479cd0198f6af1b86ee3577fac2d30affe11580f9354dd826ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

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
        
        $__internal_8a58b2f8938f479cd0198f6af1b86ee3577fac2d30affe11580f9354dd826ee2->leave($__internal_8a58b2f8938f479cd0198f6af1b86ee3577fac2d30affe11580f9354dd826ee2_prof);

        
        $__internal_0053e9dd57acba794919a554b818eb624d919bb6e576343f57f055139b21e153->leave($__internal_0053e9dd57acba794919a554b818eb624d919bb6e576343f57f055139b21e153_prof);

    }

    // line 24
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_fe824ec8de9b7f1a285c172661a773626f1a1d299a672ef514e2f699d7817ff7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe824ec8de9b7f1a285c172661a773626f1a1d299a672ef514e2f699d7817ff7->enter($__internal_fe824ec8de9b7f1a285c172661a773626f1a1d299a672ef514e2f699d7817ff7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_c16849ec7f883e57d172b3bc1cab4b242e18ced47de7ad141f1a26b6a3df70a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c16849ec7f883e57d172b3bc1cab4b242e18ced47de7ad141f1a26b6a3df70a1->enter($__internal_c16849ec7f883e57d172b3bc1cab4b242e18ced47de7ad141f1a26b6a3df70a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

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
        
        $__internal_c16849ec7f883e57d172b3bc1cab4b242e18ced47de7ad141f1a26b6a3df70a1->leave($__internal_c16849ec7f883e57d172b3bc1cab4b242e18ced47de7ad141f1a26b6a3df70a1_prof);

        
        $__internal_fe824ec8de9b7f1a285c172661a773626f1a1d299a672ef514e2f699d7817ff7->leave($__internal_fe824ec8de9b7f1a285c172661a773626f1a1d299a672ef514e2f699d7817ff7_prof);

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
