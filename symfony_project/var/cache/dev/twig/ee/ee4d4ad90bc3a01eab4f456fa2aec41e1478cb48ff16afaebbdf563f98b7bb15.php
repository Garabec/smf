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
        $__internal_17abad02c29e4d204f7ac675dd89ea6d06c207b7dd33285aa37bad424423fe6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_17abad02c29e4d204f7ac675dd89ea6d06c207b7dd33285aa37bad424423fe6c->enter($__internal_17abad02c29e4d204f7ac675dd89ea6d06c207b7dd33285aa37bad424423fe6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $__internal_fde04ad71a2321510bb4c073aba16c8b277b1c1c0a1f5f581d401cb98e7f37eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fde04ad71a2321510bb4c073aba16c8b277b1c1c0a1f5f581d401cb98e7f37eb->enter($__internal_fde04ad71a2321510bb4c073aba16c8b277b1c1c0a1f5f581d401cb98e7f37eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17abad02c29e4d204f7ac675dd89ea6d06c207b7dd33285aa37bad424423fe6c->leave($__internal_17abad02c29e4d204f7ac675dd89ea6d06c207b7dd33285aa37bad424423fe6c_prof);

        
        $__internal_fde04ad71a2321510bb4c073aba16c8b277b1c1c0a1f5f581d401cb98e7f37eb->leave($__internal_fde04ad71a2321510bb4c073aba16c8b277b1c1c0a1f5f581d401cb98e7f37eb_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_266979a775c70cc4fef76cec7904333413c70f2e63fad914c6054286f6ccedbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_266979a775c70cc4fef76cec7904333413c70f2e63fad914c6054286f6ccedbb->enter($__internal_266979a775c70cc4fef76cec7904333413c70f2e63fad914c6054286f6ccedbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_635b649b2e0f975d455bc564a67898faa706054f7fbcb20dee3643c645983afb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_635b649b2e0f975d455bc564a67898faa706054f7fbcb20dee3643c645983afb->enter($__internal_635b649b2e0f975d455bc564a67898faa706054f7fbcb20dee3643c645983afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_635b649b2e0f975d455bc564a67898faa706054f7fbcb20dee3643c645983afb->leave($__internal_635b649b2e0f975d455bc564a67898faa706054f7fbcb20dee3643c645983afb_prof);

        
        $__internal_266979a775c70cc4fef76cec7904333413c70f2e63fad914c6054286f6ccedbb->leave($__internal_266979a775c70cc4fef76cec7904333413c70f2e63fad914c6054286f6ccedbb_prof);

    }

    // line 11
    public function block_title($context, array $blocks = array())
    {
        $__internal_edf674d718bb4239e10724854fe128edcb687cbe02d44a481d90071bfd963b2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edf674d718bb4239e10724854fe128edcb687cbe02d44a481d90071bfd963b2b->enter($__internal_edf674d718bb4239e10724854fe128edcb687cbe02d44a481d90071bfd963b2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_794a7717fb8206f0a0e4eff1ab26d35a731342f1298109c9a687cf21b0d9d77d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_794a7717fb8206f0a0e4eff1ab26d35a731342f1298109c9a687cf21b0d9d77d->enter($__internal_794a7717fb8206f0a0e4eff1ab26d35a731342f1298109c9a687cf21b0d9d77d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Symfony Blog";
        
        $__internal_794a7717fb8206f0a0e4eff1ab26d35a731342f1298109c9a687cf21b0d9d77d->leave($__internal_794a7717fb8206f0a0e4eff1ab26d35a731342f1298109c9a687cf21b0d9d77d_prof);

        
        $__internal_edf674d718bb4239e10724854fe128edcb687cbe02d44a481d90071bfd963b2b->leave($__internal_edf674d718bb4239e10724854fe128edcb687cbe02d44a481d90071bfd963b2b_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_fe0cb70b2f15ddf5f69c37383f6e51cdb6126a04c7b546fbba3435f322a0f5d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe0cb70b2f15ddf5f69c37383f6e51cdb6126a04c7b546fbba3435f322a0f5d4->enter($__internal_fe0cb70b2f15ddf5f69c37383f6e51cdb6126a04c7b546fbba3435f322a0f5d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_7502a32575119f14707870038d9da3a31887f8d795cfed640c684ba6229d22d9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7502a32575119f14707870038d9da3a31887f8d795cfed640c684ba6229d22d9->enter($__internal_7502a32575119f14707870038d9da3a31887f8d795cfed640c684ba6229d22d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7502a32575119f14707870038d9da3a31887f8d795cfed640c684ba6229d22d9->leave($__internal_7502a32575119f14707870038d9da3a31887f8d795cfed640c684ba6229d22d9_prof);

        
        $__internal_fe0cb70b2f15ddf5f69c37383f6e51cdb6126a04c7b546fbba3435f322a0f5d4->leave($__internal_fe0cb70b2f15ddf5f69c37383f6e51cdb6126a04c7b546fbba3435f322a0f5d4_prof);

    }

    // line 25
    public function block_content($context, array $blocks = array())
    {
        $__internal_70921e15dfab8dd38b0ab6e385be9bbc74f3463033a96d0c569fce96b6f76721 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70921e15dfab8dd38b0ab6e385be9bbc74f3463033a96d0c569fce96b6f76721->enter($__internal_70921e15dfab8dd38b0ab6e385be9bbc74f3463033a96d0c569fce96b6f76721_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_368412172577c32daf0f50772977ffe865ab3b10fc86d45e528b60fe7d4b1cf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_368412172577c32daf0f50772977ffe865ab3b10fc86d45e528b60fe7d4b1cf1->enter($__internal_368412172577c32daf0f50772977ffe865ab3b10fc86d45e528b60fe7d4b1cf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_368412172577c32daf0f50772977ffe865ab3b10fc86d45e528b60fe7d4b1cf1->leave($__internal_368412172577c32daf0f50772977ffe865ab3b10fc86d45e528b60fe7d4b1cf1_prof);

        
        $__internal_70921e15dfab8dd38b0ab6e385be9bbc74f3463033a96d0c569fce96b6f76721->leave($__internal_70921e15dfab8dd38b0ab6e385be9bbc74f3463033a96d0c569fce96b6f76721_prof);

    }

    // line 43
    public function block_section($context, array $blocks = array())
    {
        $__internal_11eb0c140af7cbdd71f88cb3d9f834d6885881562a8d51c9003796acec7a051e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11eb0c140af7cbdd71f88cb3d9f834d6885881562a8d51c9003796acec7a051e->enter($__internal_11eb0c140af7cbdd71f88cb3d9f834d6885881562a8d51c9003796acec7a051e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_800fffe2d39e39f297bdb1675a7b81b33ec267250bfa91ab5f04361e22606e49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_800fffe2d39e39f297bdb1675a7b81b33ec267250bfa91ab5f04361e22606e49->enter($__internal_800fffe2d39e39f297bdb1675a7b81b33ec267250bfa91ab5f04361e22606e49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 44
        echo "            ";
        
        $__internal_800fffe2d39e39f297bdb1675a7b81b33ec267250bfa91ab5f04361e22606e49->leave($__internal_800fffe2d39e39f297bdb1675a7b81b33ec267250bfa91ab5f04361e22606e49_prof);

        
        $__internal_11eb0c140af7cbdd71f88cb3d9f834d6885881562a8d51c9003796acec7a051e->leave($__internal_11eb0c140af7cbdd71f88cb3d9f834d6885881562a8d51c9003796acec7a051e_prof);

    }

    // line 50
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_15bb48dcc03f144081de4425ba43ad6a11d35357dfdab51bb4eccc61d2a67cfc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15bb48dcc03f144081de4425ba43ad6a11d35357dfdab51bb4eccc61d2a67cfc->enter($__internal_15bb48dcc03f144081de4425ba43ad6a11d35357dfdab51bb4eccc61d2a67cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_0788c57a9a3870f879da7b7bf51b1b118ac5a25cf3a1c9ecd71fc5a7e1b68d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0788c57a9a3870f879da7b7bf51b1b118ac5a25cf3a1c9ecd71fc5a7e1b68d00->enter($__internal_0788c57a9a3870f879da7b7bf51b1b118ac5a25cf3a1c9ecd71fc5a7e1b68d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        echo " 
            ";
        
        $__internal_0788c57a9a3870f879da7b7bf51b1b118ac5a25cf3a1c9ecd71fc5a7e1b68d00->leave($__internal_0788c57a9a3870f879da7b7bf51b1b118ac5a25cf3a1c9ecd71fc5a7e1b68d00_prof);

        
        $__internal_15bb48dcc03f144081de4425ba43ad6a11d35357dfdab51bb4eccc61d2a67cfc->leave($__internal_15bb48dcc03f144081de4425ba43ad6a11d35357dfdab51bb4eccc61d2a67cfc_prof);

    }

    // line 69
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_202f4902a4b9bc4879c5202f8bfd88d72d630cdf0c83cf6374fb1487f0f66fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_202f4902a4b9bc4879c5202f8bfd88d72d630cdf0c83cf6374fb1487f0f66fda->enter($__internal_202f4902a4b9bc4879c5202f8bfd88d72d630cdf0c83cf6374fb1487f0f66fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e7b339de5468fc3b7302ff422dbeae5f2efa028d97558f5a3d6011eae1951f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7b339de5468fc3b7302ff422dbeae5f2efa028d97558f5a3d6011eae1951f80->enter($__internal_e7b339de5468fc3b7302ff422dbeae5f2efa028d97558f5a3d6011eae1951f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 70
        echo "
<script src=\"";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/core/js/bootstrap.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_e7b339de5468fc3b7302ff422dbeae5f2efa028d97558f5a3d6011eae1951f80->leave($__internal_e7b339de5468fc3b7302ff422dbeae5f2efa028d97558f5a3d6011eae1951f80_prof);

        
        $__internal_202f4902a4b9bc4879c5202f8bfd88d72d630cdf0c83cf6374fb1487f0f66fda->leave($__internal_202f4902a4b9bc4879c5202f8bfd88d72d630cdf0c83cf6374fb1487f0f66fda_prof);

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
