<?php

/* CoreBundle:Author:show.html.twig */
class __TwigTemplate_8cf92be8daf53c2a315cbd716fe612c2bb6dcf6505c6f18cc34e9d9f574adcb2 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
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
    }

    // line 10
    public function block_section($context, array $blocks = array())
    {
        echo " 

<article>
    
    <header>
        
         <h1> ";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.author_posts"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "name", array()), "html", null, true);
        echo " </h1> 
        
    </header>
    
                            
   ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
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
    }

    // line 35
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
                   
        <h3>";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.author"), "html", null, true);
        echo " </h3>
                   
    <a  href=\"#\">";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "name", array()), "html", null, true);
        echo "      </a>
                   
  
    ";
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
        return array (  136 => 39,  131 => 37,  125 => 35,  118 => 26,  101 => 23,  98 => 22,  81 => 21,  71 => 16,  61 => 10,  50 => 43,  48 => 35,  41 => 30,  39 => 10,  33 => 6,  30 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle:Author:show.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/CoreBundle/Resources/views/Author/show.html.twig");
    }
}
