<?php

/* CoreBundle:Post:_post.html.twig */
class __TwigTemplate_6b827c5c2e6676acbb29eb1e613b7b3b6083d3eca72fe463c6563e1c3f51f3ed extends Twig_Template
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
        $__internal_16a8d9f9c3991576d53faea2f227bfbaed64785ab5d41047cd9b4d3d70807dd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16a8d9f9c3991576d53faea2f227bfbaed64785ab5d41047cd9b4d3d70807dd0->enter($__internal_16a8d9f9c3991576d53faea2f227bfbaed64785ab5d41047cd9b4d3d70807dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:_post.html.twig"));

        $__internal_ed52275b3a63c88b74523a5c72c1481f2689d5213142cdcc4c27f5279997beaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed52275b3a63c88b74523a5c72c1481f2689d5213142cdcc4c27f5279997beaa->enter($__internal_ed52275b3a63c88b74523a5c72c1481f2689d5213142cdcc4c27f5279997beaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:_post.html.twig"));

        // line 1
        echo "<article>
    
    <header>
        
        <h2> <a  href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_core_post_show", array("slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "slug", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</a> </h2> 
        
    </header>
    
    <p> 
    
      <time datetime=\"";
        // line 11
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdAt", array()), "c"), "html", null, true);
        echo "\" > ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "createdAt", array())), "html", null, true);
        echo " </time> 
    
            <a href=\"#\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "author", array()), "name", array()), "html", null, true);
        echo "</a>
            <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_core_post_show", array("slug" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "slug", array()))), "html", null, true);
        echo "#comments\" > 
            ";
        // line 15
        $context["count"] = twig_length_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "comments", array()));
        // line 16
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Blog\CoreBundle\TwigExtensions\TransPlural')->trans_plural("blog.core.post.comments", (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count"))), "html", null, true);
        echo "
            </a> 
    </p>


    <p>
        
        ";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "body", array()), "html", null, true);
        echo "   
        
    </p>
    
</article>
  
        

";
        
        $__internal_16a8d9f9c3991576d53faea2f227bfbaed64785ab5d41047cd9b4d3d70807dd0->leave($__internal_16a8d9f9c3991576d53faea2f227bfbaed64785ab5d41047cd9b4d3d70807dd0_prof);

        
        $__internal_ed52275b3a63c88b74523a5c72c1481f2689d5213142cdcc4c27f5279997beaa->leave($__internal_ed52275b3a63c88b74523a5c72c1481f2689d5213142cdcc4c27f5279997beaa_prof);

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
        return array (  70 => 23,  59 => 16,  57 => 15,  53 => 14,  49 => 13,  42 => 11,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<article>
    
    <header>
        
        <h2> <a  href=\"{{path('blog_core_post_show',{'slug':post.slug})}}\">{{ post.title }}</a> </h2> 
        
    </header>
    
    <p> 
    
      <time datetime=\"{{ post.createdAt | date('c') }}\" > {{ post.createdAt | date }} </time> 
    
            <a href=\"#\">{{ post.author.name}}</a>
            <a href=\"{{path('blog_core_post_show',{'slug':post.slug})}}#comments\" > 
            {% set count= post.comments | length %}
            {{\"blog.core.post.comments\" | trans_plural(count)}}
            </a> 
    </p>


    <p>
        
        {{ post.body }}   
        
    </p>
    
</article>
  
        

", "CoreBundle:Post:_post.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/CoreBundle/Resources/views/Post/_post.html.twig");
    }
}
