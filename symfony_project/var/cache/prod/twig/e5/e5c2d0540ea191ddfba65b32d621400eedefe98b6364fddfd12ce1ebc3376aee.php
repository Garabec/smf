<?php

/* AdminBundle::layout.html.twig */
class __TwigTemplate_97f550dcab3d464a41e1801021557ede7842523d68ccb4b754b575d70549ee20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AdminBundle::layout.html.twig", 1);
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
    
<a href=\"#\"><h1>Admin  Blog</h1></a>
<a href=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_core_post_index");
        echo "\" ><button type=\"button\" class=\"btn btn-primary\">Home</button></a>

<a href=\"";
        // line 21
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_post_index");
        echo "\" ><button type=\"button\" class=\"btn btn-primary\">Post list</button></a>
<a href=\"";
        // line 22
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_author_index");
        echo "\" ><button type=\"button\" class=\"btn btn-primary\">Author list</button></a>
";
        // line 23
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array())) {
            // line 24
            echo "<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_security_logout");
            echo "\" ><button type=\"button\" class=\"btn btn-primary\">logout</button></a>
";
        }
        // line 26
        echo "</nav>

<div class=\"container\">
    
";
        // line 30
        $this->displayBlock('content', $context, $blocks);
        // line 51
        echo "
</div>


";
    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        echo " 

   <div class=\"row\">
       
          <div class=\"col-md-8\">
              
            ";
        // line 36
        $this->displayBlock('section', $context, $blocks);
        // line 38
        echo "         
          </div>
          
          <div class=\"col-md-4 bg-success \">
              
            ";
        // line 43
        $this->displayBlock('sidebar', $context, $blocks);
        // line 45
        echo "            
          </div>
          
    </div>  
    
";
    }

    // line 36
    public function block_section($context, array $blocks = array())
    {
        // line 37
        echo "            ";
    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
            ";
    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        // line 63
        echo "
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
    }

    public function getTemplateName()
    {
        return "AdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  155 => 64,  152 => 63,  149 => 62,  142 => 43,  138 => 37,  135 => 36,  126 => 45,  124 => 43,  117 => 38,  115 => 36,  105 => 30,  97 => 51,  95 => 30,  89 => 26,  83 => 24,  81 => 23,  77 => 22,  73 => 21,  68 => 19,  61 => 14,  58 => 13,  52 => 11,  44 => 6,  40 => 5,  37 => 4,  34 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle::layout.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/AdminBundle/Resources/views/layout.html.twig");
    }
}
