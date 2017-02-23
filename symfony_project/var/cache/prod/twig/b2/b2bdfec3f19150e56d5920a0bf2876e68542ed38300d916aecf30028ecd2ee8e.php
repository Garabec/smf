<?php

/* CoreBundle:Post:show.html.twig */
class __TwigTemplate_bdcbb3a13362ee79ac37432c1e1c95ef96bb9861c2f7747bdb01c60b24399595 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_section($context, array $blocks = array())
    {
        echo " 
                     
    <article>
           <header>
              <h2><a  href=\"#\">";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</a></h2> 
           </header>
    
            <p> 
              <time datetime=\"";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "createdAt", array()), "c"), "html", null, true);
        echo "\" > ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "createdAt", array())), "html", null, true);
        echo " </time>
              ";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.author"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author", array()), "name", array()), "html", null, true);
        echo "
            </p>

            <p>
               ";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "body", array()), "html", null, true);
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
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "comments", array()));
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
    }

    // line 42
    public function block_form($context, array $blocks = array())
    {
        // line 43
        echo "    
    <div class=\"col-md-6 bg-success \">     

      <h3>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.post.comment.write"), "html", null, true);
        echo ":</h3>
  
      ";
        // line 48
        $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme((isset($context["form"]) ? $context["form"] : null), array(0 => "bootstrap_3_layout.html.twig"));
        // line 49
        echo "      
      ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : null), 'form', array("action" => ($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_core_post_createcomment", array("slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()))) . "#comments")));
        echo "
      
    </div>  

";
    }

    // line 62
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
                   
    <h3>";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.author"), "html", null, true);
        echo "</h3>
            <a  href=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_core_author_show", array("slug" => $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author", array()), "slug", array()))), "html", null, true);
        echo "\" >
            ";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author", array()), "name", array()), "html", null, true);
        echo "</a>
                       
";
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
        return array (  175 => 66,  171 => 65,  167 => 64,  161 => 62,  152 => 50,  149 => 49,  147 => 48,  142 => 46,  137 => 43,  134 => 42,  125 => 54,  123 => 42,  116 => 37,  99 => 34,  96 => 33,  79 => 32,  72 => 28,  60 => 19,  51 => 15,  45 => 14,  38 => 10,  30 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle:Post:show.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/CoreBundle/Resources/views/Post/show.html.twig");
    }
}
