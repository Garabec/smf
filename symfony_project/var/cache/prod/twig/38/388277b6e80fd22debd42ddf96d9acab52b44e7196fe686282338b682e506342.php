<?php

/* CoreBundle:Post:_comment.html.twig */
class __TwigTemplate_8f7c688152a0d141cc646fcce9b85d46791ae0da0357f777b275dd0660b0ffec extends Twig_Template
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
            <p> 
    
            ";
        // line 5
        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.post.comment.on")), "html", null, true);
        echo ":<time datetime=\"";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "createdAt", array()), "c"), "html", null, true);
        echo "\" > ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "createdAt", array())), "html", null, true);
        echo " </time> 
    
               ";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.core.post.comment.by"), "html", null, true);
        echo ": <a href=\"#\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "author", array()), "html", null, true);
        echo "</a>
            
            </p>
    </header>

    <p class=\"text-success\" >
        
        ";
        // line 14
        echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["comment"]) ? $context["comment"] : null), "body", array()), "html", null, true));
        echo "   
        
    </p>
    
</article>
  ";
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
        return array (  46 => 14,  34 => 7,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle:Post:_comment.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/CoreBundle/Resources/views/Post/_comment.html.twig");
    }
}
