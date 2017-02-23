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
        $__internal_05c7b0dbd54733fa012e03cd23c7906daa836c9f25639d1485952f3ba4552bee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_05c7b0dbd54733fa012e03cd23c7906daa836c9f25639d1485952f3ba4552bee->enter($__internal_05c7b0dbd54733fa012e03cd23c7906daa836c9f25639d1485952f3ba4552bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::layout.html.twig"));

        $__internal_60f4f7767856063778e20d846961b31ab0507b62d84e277f77d9a945e7238f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60f4f7767856063778e20d846961b31ab0507b62d84e277f77d9a945e7238f11->enter($__internal_60f4f7767856063778e20d846961b31ab0507b62d84e277f77d9a945e7238f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05c7b0dbd54733fa012e03cd23c7906daa836c9f25639d1485952f3ba4552bee->leave($__internal_05c7b0dbd54733fa012e03cd23c7906daa836c9f25639d1485952f3ba4552bee_prof);

        
        $__internal_60f4f7767856063778e20d846961b31ab0507b62d84e277f77d9a945e7238f11->leave($__internal_60f4f7767856063778e20d846961b31ab0507b62d84e277f77d9a945e7238f11_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c1946f534ffb1305cc8348fd96f1afbf337cf77a6e29bfc4e06e9288e3039243 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1946f534ffb1305cc8348fd96f1afbf337cf77a6e29bfc4e06e9288e3039243->enter($__internal_c1946f534ffb1305cc8348fd96f1afbf337cf77a6e29bfc4e06e9288e3039243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_75dd25aa966736eb39cf3728ee56a3c09306c47cf9f25bda0188e3b221b1c100 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75dd25aa966736eb39cf3728ee56a3c09306c47cf9f25bda0188e3b221b1c100->enter($__internal_75dd25aa966736eb39cf3728ee56a3c09306c47cf9f25bda0188e3b221b1c100_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_75dd25aa966736eb39cf3728ee56a3c09306c47cf9f25bda0188e3b221b1c100->leave($__internal_75dd25aa966736eb39cf3728ee56a3c09306c47cf9f25bda0188e3b221b1c100_prof);

        
        $__internal_c1946f534ffb1305cc8348fd96f1afbf337cf77a6e29bfc4e06e9288e3039243->leave($__internal_c1946f534ffb1305cc8348fd96f1afbf337cf77a6e29bfc4e06e9288e3039243_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_7d07dd133165bd983adbaeb002a71004bc4775f81a9d3e5cb56e72b0ebe73f48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7d07dd133165bd983adbaeb002a71004bc4775f81a9d3e5cb56e72b0ebe73f48->enter($__internal_7d07dd133165bd983adbaeb002a71004bc4775f81a9d3e5cb56e72b0ebe73f48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e99c890c9426ee2385998d09ef3196206c009f596e2fb72fb8043a7395b9c31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e99c890c9426ee2385998d09ef3196206c009f596e2fb72fb8043a7395b9c31->enter($__internal_8e99c890c9426ee2385998d09ef3196206c009f596e2fb72fb8043a7395b9c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Blog";
        
        $__internal_8e99c890c9426ee2385998d09ef3196206c009f596e2fb72fb8043a7395b9c31->leave($__internal_8e99c890c9426ee2385998d09ef3196206c009f596e2fb72fb8043a7395b9c31_prof);

        
        $__internal_7d07dd133165bd983adbaeb002a71004bc4775f81a9d3e5cb56e72b0ebe73f48->leave($__internal_7d07dd133165bd983adbaeb002a71004bc4775f81a9d3e5cb56e72b0ebe73f48_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_06220dea9f735a44141a2cf733b51ea79c077110a393079385d203a39241edd0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06220dea9f735a44141a2cf733b51ea79c077110a393079385d203a39241edd0->enter($__internal_06220dea9f735a44141a2cf733b51ea79c077110a393079385d203a39241edd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7c78eb7c5682189da21faffb350773a28d3c082889425aa864af400bd7da24b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c78eb7c5682189da21faffb350773a28d3c082889425aa864af400bd7da24b8->enter($__internal_7c78eb7c5682189da21faffb350773a28d3c082889425aa864af400bd7da24b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7c78eb7c5682189da21faffb350773a28d3c082889425aa864af400bd7da24b8->leave($__internal_7c78eb7c5682189da21faffb350773a28d3c082889425aa864af400bd7da24b8_prof);

        
        $__internal_06220dea9f735a44141a2cf733b51ea79c077110a393079385d203a39241edd0->leave($__internal_06220dea9f735a44141a2cf733b51ea79c077110a393079385d203a39241edd0_prof);

    }

    // line 30
    public function block_content($context, array $blocks = array())
    {
        $__internal_5593f1273fdb02849e4aa203d9a04ff36c3f373b13581d7b4f378366463c7256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5593f1273fdb02849e4aa203d9a04ff36c3f373b13581d7b4f378366463c7256->enter($__internal_5593f1273fdb02849e4aa203d9a04ff36c3f373b13581d7b4f378366463c7256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a2b61fba093319b7034f2c66f12d294db2711e26e980b7ba11e8a2184fd9333d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2b61fba093319b7034f2c66f12d294db2711e26e980b7ba11e8a2184fd9333d->enter($__internal_a2b61fba093319b7034f2c66f12d294db2711e26e980b7ba11e8a2184fd9333d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a2b61fba093319b7034f2c66f12d294db2711e26e980b7ba11e8a2184fd9333d->leave($__internal_a2b61fba093319b7034f2c66f12d294db2711e26e980b7ba11e8a2184fd9333d_prof);

        
        $__internal_5593f1273fdb02849e4aa203d9a04ff36c3f373b13581d7b4f378366463c7256->leave($__internal_5593f1273fdb02849e4aa203d9a04ff36c3f373b13581d7b4f378366463c7256_prof);

    }

    // line 36
    public function block_section($context, array $blocks = array())
    {
        $__internal_791f2c0ae828de2ed1b80359064c382a7b22911a7c337095ec9c0181c41f7114 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_791f2c0ae828de2ed1b80359064c382a7b22911a7c337095ec9c0181c41f7114->enter($__internal_791f2c0ae828de2ed1b80359064c382a7b22911a7c337095ec9c0181c41f7114_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_8f3ff7f1d09242db4afcb151476de03ed96e111a3c7713b174260b0840e87cc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f3ff7f1d09242db4afcb151476de03ed96e111a3c7713b174260b0840e87cc8->enter($__internal_8f3ff7f1d09242db4afcb151476de03ed96e111a3c7713b174260b0840e87cc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 37
        echo "            ";
        
        $__internal_8f3ff7f1d09242db4afcb151476de03ed96e111a3c7713b174260b0840e87cc8->leave($__internal_8f3ff7f1d09242db4afcb151476de03ed96e111a3c7713b174260b0840e87cc8_prof);

        
        $__internal_791f2c0ae828de2ed1b80359064c382a7b22911a7c337095ec9c0181c41f7114->leave($__internal_791f2c0ae828de2ed1b80359064c382a7b22911a7c337095ec9c0181c41f7114_prof);

    }

    // line 43
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_086bd4acfa99264952f334884513c5eb7a4913b51846ec9c24112273dd4545c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_086bd4acfa99264952f334884513c5eb7a4913b51846ec9c24112273dd4545c2->enter($__internal_086bd4acfa99264952f334884513c5eb7a4913b51846ec9c24112273dd4545c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_cc3496bd6ffc97aba2b363ea84e44ba2ec7ec4613ca97669c3d10e0fdefca8bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc3496bd6ffc97aba2b363ea84e44ba2ec7ec4613ca97669c3d10e0fdefca8bf->enter($__internal_cc3496bd6ffc97aba2b363ea84e44ba2ec7ec4613ca97669c3d10e0fdefca8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo " 
            ";
        
        $__internal_cc3496bd6ffc97aba2b363ea84e44ba2ec7ec4613ca97669c3d10e0fdefca8bf->leave($__internal_cc3496bd6ffc97aba2b363ea84e44ba2ec7ec4613ca97669c3d10e0fdefca8bf_prof);

        
        $__internal_086bd4acfa99264952f334884513c5eb7a4913b51846ec9c24112273dd4545c2->leave($__internal_086bd4acfa99264952f334884513c5eb7a4913b51846ec9c24112273dd4545c2_prof);

    }

    // line 62
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_abf787370a7d71ee9044efbdd9d0f0a5ca79ddca54b7666cde169975d985ed1f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abf787370a7d71ee9044efbdd9d0f0a5ca79ddca54b7666cde169975d985ed1f->enter($__internal_abf787370a7d71ee9044efbdd9d0f0a5ca79ddca54b7666cde169975d985ed1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_ba7e200e75db72794435b081a09c8084e329f75f8a47af54285cbd53cd859e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba7e200e75db72794435b081a09c8084e329f75f8a47af54285cbd53cd859e9f->enter($__internal_ba7e200e75db72794435b081a09c8084e329f75f8a47af54285cbd53cd859e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 63
        echo "
<script src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_ba7e200e75db72794435b081a09c8084e329f75f8a47af54285cbd53cd859e9f->leave($__internal_ba7e200e75db72794435b081a09c8084e329f75f8a47af54285cbd53cd859e9f_prof);

        
        $__internal_abf787370a7d71ee9044efbdd9d0f0a5ca79ddca54b7666cde169975d985ed1f->leave($__internal_abf787370a7d71ee9044efbdd9d0f0a5ca79ddca54b7666cde169975d985ed1f_prof);

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
