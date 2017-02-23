<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_8d99689769345f1c8c7a128e4e619e52b23dbe8474808c1687ce17db57ff9870 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "CoreBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'section' => array($this, 'block_section'),
            'sidebar' => array($this, 'block_sidebar'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "
<link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/bootstrap.css"), "html", null, true);
        echo " >
<link rel=\"stylesheet\" type=\"text/css\" href=";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/css/bootstrap-theme.css"), "html", null, true);
        echo " >


";
    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        echo "Symfony Blog";
    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        // line 14
        echo "

<nav class=\"navbar navbar-inverse\">
    
<a href=\"#\"><h1>Symfony 3 Blog</h1></a>
<a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_core_post_index");
        echo "\" ><button type=\"button\" class=\"btn btn-primary\">Home</button></a>

</nav>

<div class=\"container\">
    
";
        // line 25
        $this->displayBlock('content', $context, $blocks);
        // line 58
        echo "
</div>


";
    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        echo " 

   <div class=\"row\">
       
          <div class=\"col-md-8\">
            
         ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
            // line 32
            echo "         
            ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 34
                echo "            
              <p class=\"bg-info\">";
                // line 35
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</p>
            
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "         
         ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "            
            
              
            ";
        // line 43
        $this->displayBlock('section', $context, $blocks);
        // line 45
        echo "         
          </div>
          
          <div class=\"col-md-4 bg-success \">
              
            ";
        // line 50
        $this->displayBlock('sidebar', $context, $blocks);
        // line 52
        echo "            
          </div>
          
    </div>  
    
";
    }

    // line 43
    public function block_section($context, array $blocks = array())
    {
        // line 44
        echo "            ";
    }

    // line 50
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
            ";
    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        // line 70
        echo "
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "CoreBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 71,  169 => 70,  166 => 69,  159 => 50,  155 => 44,  152 => 43,  143 => 52,  141 => 50,  134 => 45,  132 => 43,  127 => 40,  120 => 38,  111 => 35,  108 => 34,  104 => 33,  101 => 32,  97 => 31,  87 => 25,  79 => 58,  77 => 25,  68 => 19,  61 => 14,  58 => 13,  52 => 11,  44 => 6,  40 => 5,  37 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle::layout.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/CoreBundle/Resources/views/layout.html.twig");
    }
}
