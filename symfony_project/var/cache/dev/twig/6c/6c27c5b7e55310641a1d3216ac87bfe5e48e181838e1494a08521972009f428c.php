<?php

/* CoreBundle:Post:_comment.html.twig */
class __TwigTemplate_bf60f36a73285ff91cc44d40ad2fba9dc03e599a8258a05a5c5abe4a5841a96f extends Twig_Template
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
        $__internal_a79949f9853707f4427441aee17d9397054ed093ab72ec0c415fb2daded96924 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a79949f9853707f4427441aee17d9397054ed093ab72ec0c415fb2daded96924->enter($__internal_a79949f9853707f4427441aee17d9397054ed093ab72ec0c415fb2daded96924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:_comment.html.twig"));

        $__internal_d2620b6dc8e9997ecd49703c71bc2b420354ed4f5d4005daa6cf0a1403e6b232 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2620b6dc8e9997ecd49703c71bc2b420354ed4f5d4005daa6cf0a1403e6b232->enter($__internal_d2620b6dc8e9997ecd49703c71bc2b420354ed4f5d4005daa6cf0a1403e6b232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:_comment.html.twig"));

        // line 1
        echo "<article>
    <header>
            <p> 
    
            ";
        // line 5
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.post.comment.on")), "html", null, true);
        echo ":<time datetime=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createdAt", array()), "c"), "html", null, true);
        echo "\" > ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "createdAt", array())), "html", null, true);
        echo " </time> 
    
               ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.post.comment.by"), "html", null, true);
        echo ": <a href=\"#\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "author", array()), "html", null, true);
        echo "</a>
            
            </p>
    </header>

    <p class=\"text-success\" >
        
        ";
        // line 14
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")), "body", array()), "html", null, true));
        echo "   
        
    </p>
    
</article>
  ";
        
        $__internal_a79949f9853707f4427441aee17d9397054ed093ab72ec0c415fb2daded96924->leave($__internal_a79949f9853707f4427441aee17d9397054ed093ab72ec0c415fb2daded96924_prof);

        
        $__internal_d2620b6dc8e9997ecd49703c71bc2b420354ed4f5d4005daa6cf0a1403e6b232->leave($__internal_d2620b6dc8e9997ecd49703c71bc2b420354ed4f5d4005daa6cf0a1403e6b232_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle:Post:_comment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  40 => 7,  31 => 5,  25 => 1,);
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
            <p> 
    
            {{\"blog.core.post.comment.on\" | trans | capitalize  }}:<time datetime=\"{{ comment.createdAt | date('c') }}\" > {{ comment.createdAt | date }} </time> 
    
               {{\"blog.core.post.comment.by\" | trans }}: <a href=\"#\">{{ comment.author}}</a>
            
            </p>
    </header>

    <p class=\"text-success\" >
        
        {{ comment.body | nl2br}}   
        
    </p>
    
</article>
  ", "CoreBundle:Post:_comment.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/CoreBundle/Resources/views/Post/_comment.html.twig");
    }
}
