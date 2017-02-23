<?php

/* CoreBundle:Post:_post.html.twig */
class __TwigTemplate_0b48ead5fb3dd27b6c4dfb4a5d52473ad23672ff89c1572ff36317b55f8d593b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<article>
    
    <header>
        
        <h2> <a  href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_core_post_show", array("slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "title", array()), "html", null, true);
        echo "</a> </h2> 
        
    </header>
    
    <p> 
    
      <time datetime=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "createdAt", array()), "c"), "html", null, true);
        echo "\" > ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "createdAt", array())), "html", null, true);
        echo " </time> 
    
            <a href=\"#\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "author", array()), "name", array()), "html", null, true);
        echo "</a>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_core_post_show", array("slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "slug", array()))), "html", null, true);
        echo "#comments\" > 
            ";
        // line 15
        $context["count"] = twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "comments", array()));
        // line 16
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Blog\CoreBundle\TwigExtensions\TransPlural')->trans_plural("blog.core.post.comments", (isset($context["count"]) ? $context["count"] : null)), "html", null, true);
        echo "
            </a> 
    </p>


    <p>
        
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "body", array()), "html", null, true);
        echo "   
        
    </p>
    
</article>
  
        

";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Post:_post.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 23,  53 => 16,  51 => 15,  47 => 14,  43 => 13,  36 => 11,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle:Post:_post.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/CoreBundle/Resources/views/Post/_post.html.twig");
    }
}
