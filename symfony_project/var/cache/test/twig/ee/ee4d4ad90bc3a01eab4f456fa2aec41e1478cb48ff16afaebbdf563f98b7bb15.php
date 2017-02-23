<?php

/* CoreBundle::layout.html.twig */
class __TwigTemplate_0b010c92c81a81c702a3e5230c63bc8936c2955c704b2f4b9290b90cf306cefa extends Twig_Template
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
        $__internal_7163b20c122662b296fd59f350c5989f1433a34f202004c3fb6391487134c3dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7163b20c122662b296fd59f350c5989f1433a34f202004c3fb6391487134c3dc->enter($__internal_7163b20c122662b296fd59f350c5989f1433a34f202004c3fb6391487134c3dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $__internal_0c24b87447cf121d621204be1f3cb8ca9da532c6a4cbdb888de362929583e12f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c24b87447cf121d621204be1f3cb8ca9da532c6a4cbdb888de362929583e12f->enter($__internal_0c24b87447cf121d621204be1f3cb8ca9da532c6a4cbdb888de362929583e12f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7163b20c122662b296fd59f350c5989f1433a34f202004c3fb6391487134c3dc->leave($__internal_7163b20c122662b296fd59f350c5989f1433a34f202004c3fb6391487134c3dc_prof);

        
        $__internal_0c24b87447cf121d621204be1f3cb8ca9da532c6a4cbdb888de362929583e12f->leave($__internal_0c24b87447cf121d621204be1f3cb8ca9da532c6a4cbdb888de362929583e12f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32c52df0d7f79838cf5a703d8c1ad22e24d93c89fd05e83a87c38c34648425c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_32c52df0d7f79838cf5a703d8c1ad22e24d93c89fd05e83a87c38c34648425c6->enter($__internal_32c52df0d7f79838cf5a703d8c1ad22e24d93c89fd05e83a87c38c34648425c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_aeaaf9cd2020074ef7871462c691924291989b5bc7aa6fc68588d35f5beeb61f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aeaaf9cd2020074ef7871462c691924291989b5bc7aa6fc68588d35f5beeb61f->enter($__internal_aeaaf9cd2020074ef7871462c691924291989b5bc7aa6fc68588d35f5beeb61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_aeaaf9cd2020074ef7871462c691924291989b5bc7aa6fc68588d35f5beeb61f->leave($__internal_aeaaf9cd2020074ef7871462c691924291989b5bc7aa6fc68588d35f5beeb61f_prof);

        
        $__internal_32c52df0d7f79838cf5a703d8c1ad22e24d93c89fd05e83a87c38c34648425c6->leave($__internal_32c52df0d7f79838cf5a703d8c1ad22e24d93c89fd05e83a87c38c34648425c6_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_7237c3636e3b20d50367bd305919181960e3277c8110f3deccd5f5c69e3461a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7237c3636e3b20d50367bd305919181960e3277c8110f3deccd5f5c69e3461a2->enter($__internal_7237c3636e3b20d50367bd305919181960e3277c8110f3deccd5f5c69e3461a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5c107618f34fa64fdb39b79acf4d978740238c1783e091dffb98795627e95fc6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c107618f34fa64fdb39b79acf4d978740238c1783e091dffb98795627e95fc6->enter($__internal_5c107618f34fa64fdb39b79acf4d978740238c1783e091dffb98795627e95fc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Blog";
        
        $__internal_5c107618f34fa64fdb39b79acf4d978740238c1783e091dffb98795627e95fc6->leave($__internal_5c107618f34fa64fdb39b79acf4d978740238c1783e091dffb98795627e95fc6_prof);

        
        $__internal_7237c3636e3b20d50367bd305919181960e3277c8110f3deccd5f5c69e3461a2->leave($__internal_7237c3636e3b20d50367bd305919181960e3277c8110f3deccd5f5c69e3461a2_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_6d50aaf8a2146ecd65c2dc685dbfbecc11ede18e5bf1a05efcb1c4d3b17f7196 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d50aaf8a2146ecd65c2dc685dbfbecc11ede18e5bf1a05efcb1c4d3b17f7196->enter($__internal_6d50aaf8a2146ecd65c2dc685dbfbecc11ede18e5bf1a05efcb1c4d3b17f7196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d96812c428d48ded170e328369895a609e5a21ed4bc97ebbd836137f9215f187 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d96812c428d48ded170e328369895a609e5a21ed4bc97ebbd836137f9215f187->enter($__internal_d96812c428d48ded170e328369895a609e5a21ed4bc97ebbd836137f9215f187_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d96812c428d48ded170e328369895a609e5a21ed4bc97ebbd836137f9215f187->leave($__internal_d96812c428d48ded170e328369895a609e5a21ed4bc97ebbd836137f9215f187_prof);

        
        $__internal_6d50aaf8a2146ecd65c2dc685dbfbecc11ede18e5bf1a05efcb1c4d3b17f7196->leave($__internal_6d50aaf8a2146ecd65c2dc685dbfbecc11ede18e5bf1a05efcb1c4d3b17f7196_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_d6be6eb0e25419b6b779bec08f2eb5572f2ed18c5f055ce03b11ff921214bbd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d6be6eb0e25419b6b779bec08f2eb5572f2ed18c5f055ce03b11ff921214bbd5->enter($__internal_d6be6eb0e25419b6b779bec08f2eb5572f2ed18c5f055ce03b11ff921214bbd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e52c1da984948432129c3cebef44e7d94992546f2549711d9ff1bc8ce59e865b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e52c1da984948432129c3cebef44e7d94992546f2549711d9ff1bc8ce59e865b->enter($__internal_e52c1da984948432129c3cebef44e7d94992546f2549711d9ff1bc8ce59e865b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        echo " 

   <div class=\"row\">
       
          <div class=\"col-md-8\">
            
         ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
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
        
        $__internal_e52c1da984948432129c3cebef44e7d94992546f2549711d9ff1bc8ce59e865b->leave($__internal_e52c1da984948432129c3cebef44e7d94992546f2549711d9ff1bc8ce59e865b_prof);

        
        $__internal_d6be6eb0e25419b6b779bec08f2eb5572f2ed18c5f055ce03b11ff921214bbd5->leave($__internal_d6be6eb0e25419b6b779bec08f2eb5572f2ed18c5f055ce03b11ff921214bbd5_prof);

    }

    // line 43
    public function block_section($context, array $blocks = array())
    {
        $__internal_9695eedbdbd74e7ba7d4e722f0c49ed9592cb00294df843659b6c4c3bee99a9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9695eedbdbd74e7ba7d4e722f0c49ed9592cb00294df843659b6c4c3bee99a9b->enter($__internal_9695eedbdbd74e7ba7d4e722f0c49ed9592cb00294df843659b6c4c3bee99a9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_fb21ce47a74d25f537f7a6488c1b7ba9631f2146e3729ae0de0db999d5ddb3c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb21ce47a74d25f537f7a6488c1b7ba9631f2146e3729ae0de0db999d5ddb3c1->enter($__internal_fb21ce47a74d25f537f7a6488c1b7ba9631f2146e3729ae0de0db999d5ddb3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 44
        echo "            ";
        
        $__internal_fb21ce47a74d25f537f7a6488c1b7ba9631f2146e3729ae0de0db999d5ddb3c1->leave($__internal_fb21ce47a74d25f537f7a6488c1b7ba9631f2146e3729ae0de0db999d5ddb3c1_prof);

        
        $__internal_9695eedbdbd74e7ba7d4e722f0c49ed9592cb00294df843659b6c4c3bee99a9b->leave($__internal_9695eedbdbd74e7ba7d4e722f0c49ed9592cb00294df843659b6c4c3bee99a9b_prof);

    }

    // line 50
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_3a1b622bd8a0298c26218ccc79a2a8bb89b385b10b9823589284957c66d9948c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a1b622bd8a0298c26218ccc79a2a8bb89b385b10b9823589284957c66d9948c->enter($__internal_3a1b622bd8a0298c26218ccc79a2a8bb89b385b10b9823589284957c66d9948c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_0f18fab3e79e7222f51df5c2340cce2f0361e53e031196e7e1b4f349223dc412 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f18fab3e79e7222f51df5c2340cce2f0361e53e031196e7e1b4f349223dc412->enter($__internal_0f18fab3e79e7222f51df5c2340cce2f0361e53e031196e7e1b4f349223dc412_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo " 
            ";
        
        $__internal_0f18fab3e79e7222f51df5c2340cce2f0361e53e031196e7e1b4f349223dc412->leave($__internal_0f18fab3e79e7222f51df5c2340cce2f0361e53e031196e7e1b4f349223dc412_prof);

        
        $__internal_3a1b622bd8a0298c26218ccc79a2a8bb89b385b10b9823589284957c66d9948c->leave($__internal_3a1b622bd8a0298c26218ccc79a2a8bb89b385b10b9823589284957c66d9948c_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0542bfb0b590dd3fa745335dc12b6edc45dfb6eba52e18832c6626b9349ad1e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0542bfb0b590dd3fa745335dc12b6edc45dfb6eba52e18832c6626b9349ad1e1->enter($__internal_0542bfb0b590dd3fa745335dc12b6edc45dfb6eba52e18832c6626b9349ad1e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_78f263fa31430ad6d98794b549c6c06138b9f6b9e47dc9e2d83e84cd1dd40e45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_78f263fa31430ad6d98794b549c6c06138b9f6b9e47dc9e2d83e84cd1dd40e45->enter($__internal_78f263fa31430ad6d98794b549c6c06138b9f6b9e47dc9e2d83e84cd1dd40e45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_78f263fa31430ad6d98794b549c6c06138b9f6b9e47dc9e2d83e84cd1dd40e45->leave($__internal_78f263fa31430ad6d98794b549c6c06138b9f6b9e47dc9e2d83e84cd1dd40e45_prof);

        
        $__internal_0542bfb0b590dd3fa745335dc12b6edc45dfb6eba52e18832c6626b9349ad1e1->leave($__internal_0542bfb0b590dd3fa745335dc12b6edc45dfb6eba52e18832c6626b9349ad1e1_prof);

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
        return array (  262 => 71,  259 => 70,  250 => 69,  231 => 50,  221 => 44,  212 => 43,  197 => 52,  195 => 50,  188 => 45,  186 => 43,  181 => 40,  174 => 38,  165 => 35,  162 => 34,  158 => 33,  155 => 32,  151 => 31,  135 => 25,  121 => 58,  119 => 25,  110 => 19,  103 => 14,  94 => 13,  76 => 11,  62 => 6,  58 => 5,  55 => 4,  46 => 3,  11 => 1,);
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
    
<a href=\"#\"><h1>Symfony 3 Blog</h1></a>
<a href=\"{{path('blog_core_post_index')}}\" ><button type=\"button\" class=\"btn btn-primary\">Home</button></a>

</nav>

<div class=\"container\">
    
{% block content %} 

   <div class=\"row\">
       
          <div class=\"col-md-8\">
            
         {% for type, messages in app.session.flashbag.all() %}
         
            {% for message in messages %}
            
              <p class=\"bg-info\">{{message}}</p>
            
            {% endfor %}
         
         {% endfor %}
            
            
              
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

{% endblock %}", "CoreBundle::layout.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/CoreBundle/Resources/views/layout.html.twig");
    }
}
