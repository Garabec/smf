<?php

/* AdminBundle::layout.html.twig */
class __TwigTemplate_3087303555021982f6f2febc74e87784f0c71f34568727817d53a6248701319b extends Twig_Template
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
        $__internal_97a6dc9b30c0c81de91ea3566688d9f38ad3acd1da1e5b7b1d455cfd2d99fc54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97a6dc9b30c0c81de91ea3566688d9f38ad3acd1da1e5b7b1d455cfd2d99fc54->enter($__internal_97a6dc9b30c0c81de91ea3566688d9f38ad3acd1da1e5b7b1d455cfd2d99fc54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::layout.html.twig"));

        $__internal_f2f01c283aed80ac5e6523543a56750c443d96f28c6accafa455e1f33472ff35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f01c283aed80ac5e6523543a56750c443d96f28c6accafa455e1f33472ff35->enter($__internal_f2f01c283aed80ac5e6523543a56750c443d96f28c6accafa455e1f33472ff35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97a6dc9b30c0c81de91ea3566688d9f38ad3acd1da1e5b7b1d455cfd2d99fc54->leave($__internal_97a6dc9b30c0c81de91ea3566688d9f38ad3acd1da1e5b7b1d455cfd2d99fc54_prof);

        
        $__internal_f2f01c283aed80ac5e6523543a56750c443d96f28c6accafa455e1f33472ff35->leave($__internal_f2f01c283aed80ac5e6523543a56750c443d96f28c6accafa455e1f33472ff35_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ec30c06a43d2044c1e2214c223cad20f6fbfb881c37ffdb13d1bc6ce0b3c6905 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec30c06a43d2044c1e2214c223cad20f6fbfb881c37ffdb13d1bc6ce0b3c6905->enter($__internal_ec30c06a43d2044c1e2214c223cad20f6fbfb881c37ffdb13d1bc6ce0b3c6905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0bcf6cba391ac20f08a4ae411a10433ef06283e15190ddb5ebc774b5eb1f0a8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bcf6cba391ac20f08a4ae411a10433ef06283e15190ddb5ebc774b5eb1f0a8f->enter($__internal_0bcf6cba391ac20f08a4ae411a10433ef06283e15190ddb5ebc774b5eb1f0a8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_0bcf6cba391ac20f08a4ae411a10433ef06283e15190ddb5ebc774b5eb1f0a8f->leave($__internal_0bcf6cba391ac20f08a4ae411a10433ef06283e15190ddb5ebc774b5eb1f0a8f_prof);

        
        $__internal_ec30c06a43d2044c1e2214c223cad20f6fbfb881c37ffdb13d1bc6ce0b3c6905->leave($__internal_ec30c06a43d2044c1e2214c223cad20f6fbfb881c37ffdb13d1bc6ce0b3c6905_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_fbb74d227bb24dea9ea35576cd9e79824bb5e9f95a8667b40c809208d90d3caf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbb74d227bb24dea9ea35576cd9e79824bb5e9f95a8667b40c809208d90d3caf->enter($__internal_fbb74d227bb24dea9ea35576cd9e79824bb5e9f95a8667b40c809208d90d3caf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_045ea62ed277ae49bbf02b99f33fc877e0c03680603edd49f0507b6afcc0fc65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_045ea62ed277ae49bbf02b99f33fc877e0c03680603edd49f0507b6afcc0fc65->enter($__internal_045ea62ed277ae49bbf02b99f33fc877e0c03680603edd49f0507b6afcc0fc65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Blog";
        
        $__internal_045ea62ed277ae49bbf02b99f33fc877e0c03680603edd49f0507b6afcc0fc65->leave($__internal_045ea62ed277ae49bbf02b99f33fc877e0c03680603edd49f0507b6afcc0fc65_prof);

        
        $__internal_fbb74d227bb24dea9ea35576cd9e79824bb5e9f95a8667b40c809208d90d3caf->leave($__internal_fbb74d227bb24dea9ea35576cd9e79824bb5e9f95a8667b40c809208d90d3caf_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fb3ecbf4265e03b7fcf97064bb209ef456eafeadca539db1a10d1c9a33d5c1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fb3ecbf4265e03b7fcf97064bb209ef456eafeadca539db1a10d1c9a33d5c1f->enter($__internal_7fb3ecbf4265e03b7fcf97064bb209ef456eafeadca539db1a10d1c9a33d5c1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_cf20719438548561fa11c81d976cf629b932c2abf97b447cf377066c50714a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf20719438548561fa11c81d976cf629b932c2abf97b447cf377066c50714a5f->enter($__internal_cf20719438548561fa11c81d976cf629b932c2abf97b447cf377066c50714a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
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
        
        $__internal_cf20719438548561fa11c81d976cf629b932c2abf97b447cf377066c50714a5f->leave($__internal_cf20719438548561fa11c81d976cf629b932c2abf97b447cf377066c50714a5f_prof);

        
        $__internal_7fb3ecbf4265e03b7fcf97064bb209ef456eafeadca539db1a10d1c9a33d5c1f->leave($__internal_7fb3ecbf4265e03b7fcf97064bb209ef456eafeadca539db1a10d1c9a33d5c1f_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_65c77f0e013908aa3c94051dd7900791e18d71b1bfb90ff0ec841b9619fcaf56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65c77f0e013908aa3c94051dd7900791e18d71b1bfb90ff0ec841b9619fcaf56->enter($__internal_65c77f0e013908aa3c94051dd7900791e18d71b1bfb90ff0ec841b9619fcaf56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6658f7ad0a017a8b0b3a86b51fe44aa6d214b458b1a9e2cbef3f278bcf48336a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6658f7ad0a017a8b0b3a86b51fe44aa6d214b458b1a9e2cbef3f278bcf48336a->enter($__internal_6658f7ad0a017a8b0b3a86b51fe44aa6d214b458b1a9e2cbef3f278bcf48336a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6658f7ad0a017a8b0b3a86b51fe44aa6d214b458b1a9e2cbef3f278bcf48336a->leave($__internal_6658f7ad0a017a8b0b3a86b51fe44aa6d214b458b1a9e2cbef3f278bcf48336a_prof);

        
        $__internal_65c77f0e013908aa3c94051dd7900791e18d71b1bfb90ff0ec841b9619fcaf56->leave($__internal_65c77f0e013908aa3c94051dd7900791e18d71b1bfb90ff0ec841b9619fcaf56_prof);

    }

    // line 36
    public function block_section($context, array $blocks = array())
    {
        $__internal_807b59d7a465c07b43c9290a0cf1acf0ec86e2766cd9b1e764c6e1263a901e5c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_807b59d7a465c07b43c9290a0cf1acf0ec86e2766cd9b1e764c6e1263a901e5c->enter($__internal_807b59d7a465c07b43c9290a0cf1acf0ec86e2766cd9b1e764c6e1263a901e5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_85c8fadda571f5290d4ad318933941fdd55f72e8c4bbfe66d4db0131fca939b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85c8fadda571f5290d4ad318933941fdd55f72e8c4bbfe66d4db0131fca939b6->enter($__internal_85c8fadda571f5290d4ad318933941fdd55f72e8c4bbfe66d4db0131fca939b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 37
        echo "            ";
        
        $__internal_85c8fadda571f5290d4ad318933941fdd55f72e8c4bbfe66d4db0131fca939b6->leave($__internal_85c8fadda571f5290d4ad318933941fdd55f72e8c4bbfe66d4db0131fca939b6_prof);

        
        $__internal_807b59d7a465c07b43c9290a0cf1acf0ec86e2766cd9b1e764c6e1263a901e5c->leave($__internal_807b59d7a465c07b43c9290a0cf1acf0ec86e2766cd9b1e764c6e1263a901e5c_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_1c29207a639a543ed1c7463300a182d72ab85ac8775fa413a2b6f91e18b719ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c29207a639a543ed1c7463300a182d72ab85ac8775fa413a2b6f91e18b719ed->enter($__internal_1c29207a639a543ed1c7463300a182d72ab85ac8775fa413a2b6f91e18b719ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_5d171ac3ccc4564a45443042987f8d11140ab1d0d590366f0ba321ff2a81fa55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d171ac3ccc4564a45443042987f8d11140ab1d0d590366f0ba321ff2a81fa55->enter($__internal_5d171ac3ccc4564a45443042987f8d11140ab1d0d590366f0ba321ff2a81fa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo " 
            ";
        
        $__internal_5d171ac3ccc4564a45443042987f8d11140ab1d0d590366f0ba321ff2a81fa55->leave($__internal_5d171ac3ccc4564a45443042987f8d11140ab1d0d590366f0ba321ff2a81fa55_prof);

        
        $__internal_1c29207a639a543ed1c7463300a182d72ab85ac8775fa413a2b6f91e18b719ed->leave($__internal_1c29207a639a543ed1c7463300a182d72ab85ac8775fa413a2b6f91e18b719ed_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_4fee7429c8cb7579c8cdc3efab9e03f10eb2233beb84db066598cb59ba732f94 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fee7429c8cb7579c8cdc3efab9e03f10eb2233beb84db066598cb59ba732f94->enter($__internal_4fee7429c8cb7579c8cdc3efab9e03f10eb2233beb84db066598cb59ba732f94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4564db0254d9665bdf44fede31171982cf6b723ff19001e1e72f6f526d64011d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4564db0254d9665bdf44fede31171982cf6b723ff19001e1e72f6f526d64011d->enter($__internal_4564db0254d9665bdf44fede31171982cf6b723ff19001e1e72f6f526d64011d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_4564db0254d9665bdf44fede31171982cf6b723ff19001e1e72f6f526d64011d->leave($__internal_4564db0254d9665bdf44fede31171982cf6b723ff19001e1e72f6f526d64011d_prof);

        
        $__internal_4fee7429c8cb7579c8cdc3efab9e03f10eb2233beb84db066598cb59ba732f94->leave($__internal_4fee7429c8cb7579c8cdc3efab9e03f10eb2233beb84db066598cb59ba732f94_prof);

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
        return array (  245 => 64,  242 => 63,  233 => 62,  214 => 43,  204 => 37,  195 => 36,  180 => 45,  178 => 43,  171 => 38,  169 => 36,  153 => 30,  139 => 51,  137 => 30,  131 => 26,  125 => 24,  123 => 23,  119 => 22,  115 => 21,  110 => 19,  103 => 14,  94 => 13,  76 => 11,  62 => 6,  58 => 5,  55 => 4,  46 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block stylesheets %}

<link rel=\"stylesheet\" type=\"text/css\" href={{ asset('bundles/core/css/bootstrap.css') }} >
<link rel=\"stylesheet\" type=\"text/css\" href={{ asset('bundles/core/css/bootstrap-theme.css') }} >


{% endblock %}

{% block title %}Symfony Blog{% endblock %}

{% block body %}


<nav class=\"navbar navbar-inverse\">
    
<a href=\"#\"><h1>Admin  Blog</h1></a>
<a href=\"{{path('blog_core_post_index')}}\" ><button type=\"button\" class=\"btn btn-primary\">Home</button></a>

<a href=\"{{ path('blog_admin_post_index') }}\" ><button type=\"button\" class=\"btn btn-primary\">Post list</button></a>
<a href=\"{{ path('blog_admin_author_index') }}\" ><button type=\"button\" class=\"btn btn-primary\">Author list</button></a>
{% if app.user %}
<a href=\"{{ path('blog_admin_security_logout') }}\" ><button type=\"button\" class=\"btn btn-primary\">logout</button></a>
{% endif %}
</nav>

<div class=\"container\">
    
{% block content %} 

   <div class=\"row\">
       
          <div class=\"col-md-8\">
              
            {% block section %}
            {% endblock %}
         
          </div>
          
          <div class=\"col-md-4 bg-success \">
              
            {% block sidebar %} 
            {% endblock %}
            
          </div>
          
    </div>  
    
{% endblock %}

</div>


{% endblock %}






{% block javascripts %}

<script src=\"{{ asset('bundles/core/js/bootstrap.js') }}\"></script>

{% endblock %}", "AdminBundle::layout.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/AdminBundle/Resources/views/layout.html.twig");
    }
}
