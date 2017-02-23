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
        $__internal_e57b6d055ae79cef7351f0e0b74d4f1ff15e2770a1dd7e45e45587cd6aaf6e61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e57b6d055ae79cef7351f0e0b74d4f1ff15e2770a1dd7e45e45587cd6aaf6e61->enter($__internal_e57b6d055ae79cef7351f0e0b74d4f1ff15e2770a1dd7e45e45587cd6aaf6e61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:_comment.html.twig"));

        $__internal_4ea0c98a2e171927e9c12131e43770f0d4da38c219b033f2b6b7f69b4b142dbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ea0c98a2e171927e9c12131e43770f0d4da38c219b033f2b6b7f69b4b142dbe->enter($__internal_4ea0c98a2e171927e9c12131e43770f0d4da38c219b033f2b6b7f69b4b142dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle:Post:_comment.html.twig"));

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
        
        $__internal_e57b6d055ae79cef7351f0e0b74d4f1ff15e2770a1dd7e45e45587cd6aaf6e61->leave($__internal_e57b6d055ae79cef7351f0e0b74d4f1ff15e2770a1dd7e45e45587cd6aaf6e61_prof);

        
        $__internal_4ea0c98a2e171927e9c12131e43770f0d4da38c219b033f2b6b7f69b4b142dbe->leave($__internal_4ea0c98a2e171927e9c12131e43770f0d4da38c219b033f2b6b7f69b4b142dbe_prof);

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
