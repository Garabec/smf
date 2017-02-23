<?php

/* AdminBundle:Security:login.html.twig */
class __TwigTemplate_4770ff8052f664b0d0bd1fd2d8f465e85db6bee7bbb4adb733dc2d56c647fdf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "AdminBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section' => array($this, 'block_section'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_361c9b5bdc42f9d76c0d30389f32e70e400ead3cc2cd1d9c8380dd9ee9efc8c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_361c9b5bdc42f9d76c0d30389f32e70e400ead3cc2cd1d9c8380dd9ee9efc8c0->enter($__internal_361c9b5bdc42f9d76c0d30389f32e70e400ead3cc2cd1d9c8380dd9ee9efc8c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Security:login.html.twig"));

        $__internal_6642d3d295f4155ce23d644bfbd7d91722755ff8abff4e10dfecdedbb67c29dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6642d3d295f4155ce23d644bfbd7d91722755ff8abff4e10dfecdedbb67c29dc->enter($__internal_6642d3d295f4155ce23d644bfbd7d91722755ff8abff4e10dfecdedbb67c29dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_361c9b5bdc42f9d76c0d30389f32e70e400ead3cc2cd1d9c8380dd9ee9efc8c0->leave($__internal_361c9b5bdc42f9d76c0d30389f32e70e400ead3cc2cd1d9c8380dd9ee9efc8c0_prof);

        
        $__internal_6642d3d295f4155ce23d644bfbd7d91722755ff8abff4e10dfecdedbb67c29dc->leave($__internal_6642d3d295f4155ce23d644bfbd7d91722755ff8abff4e10dfecdedbb67c29dc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_b625881339ed5fea02fcf6d65354e3739bcf1723d2054ba84ea402f72e2d58c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b625881339ed5fea02fcf6d65354e3739bcf1723d2054ba84ea402f72e2d58c1->enter($__internal_b625881339ed5fea02fcf6d65354e3739bcf1723d2054ba84ea402f72e2d58c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_fc933e771578d79f0bcb6a0552754bb6d0bed276775c6727c8f07a359dc62687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fc933e771578d79f0bcb6a0552754bb6d0bed276775c6727c8f07a359dc62687->enter($__internal_fc933e771578d79f0bcb6a0552754bb6d0bed276775c6727c8f07a359dc62687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.admin.security.title"), "html", null, true);
        
        $__internal_fc933e771578d79f0bcb6a0552754bb6d0bed276775c6727c8f07a359dc62687->leave($__internal_fc933e771578d79f0bcb6a0552754bb6d0bed276775c6727c8f07a359dc62687_prof);

        
        $__internal_b625881339ed5fea02fcf6d65354e3739bcf1723d2054ba84ea402f72e2d58c1->leave($__internal_b625881339ed5fea02fcf6d65354e3739bcf1723d2054ba84ea402f72e2d58c1_prof);

    }

    // line 5
    public function block_section($context, array $blocks = array())
    {
        $__internal_b62655dec4c727bd8c9dd22dafdded5130bb3a5d72ec583ba0adc77a94c7e580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b62655dec4c727bd8c9dd22dafdded5130bb3a5d72ec583ba0adc77a94c7e580->enter($__internal_b62655dec4c727bd8c9dd22dafdded5130bb3a5d72ec583ba0adc77a94c7e580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_97f54fb03fd100e0626f6f8415f491439a18727f75f19bb636eb30682587b578 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f54fb03fd100e0626f6f8415f491439a18727f75f19bb636eb30682587b578->enter($__internal_97f54fb03fd100e0626f6f8415f491439a18727f75f19bb636eb30682587b578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        // line 6
        echo "

";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 9
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 11
        echo "
<div class=\"row\">
  <div class=\"col-md-6\">
      
 <h2 class=\"bg-info\" >";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.admin.security.name"), "html", null, true);
        echo "</h2>
 <hr>     
      
  
 <form action=\"";
        // line 19
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_security_login");
        echo "\" method=\"post\">
    <div class=\"form-group\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" /> <br>

    <label for=\"password\">Password:</label>
    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" /> <br>

    ";
        // line 32
        echo "
    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">login</button>
    </div>
</form>

 </div>
  
</div>

";
        
        $__internal_97f54fb03fd100e0626f6f8415f491439a18727f75f19bb636eb30682587b578->leave($__internal_97f54fb03fd100e0626f6f8415f491439a18727f75f19bb636eb30682587b578_prof);

        
        $__internal_b62655dec4c727bd8c9dd22dafdded5130bb3a5d72ec583ba0adc77a94c7e580->leave($__internal_b62655dec4c727bd8c9dd22dafdded5130bb3a5d72ec583ba0adc77a94c7e580_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 32,  99 => 22,  93 => 19,  86 => 15,  80 => 11,  74 => 9,  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"CoreBundle::layout.html.twig\" %}

{% block title %}{{ \"blog.admin.security.title\" | trans }}{% endblock %}

{% block section %}


{% if error %}
    <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<div class=\"row\">
  <div class=\"col-md-6\">
      
 <h2 class=\"bg-info\" >{{ \"blog.admin.security.name\" | trans }}</h2>
 <hr>     
      
  
 <form action=\"{{ path('blog_admin_security_login') }}\" method=\"post\">
    <div class=\"form-group\">
    <label for=\"username\">Username:</label>
    <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" /> <br>

    <label for=\"password\">Password:</label>
    <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" /> <br>

    {#
        If you want to control the URL the user
        is redirected to on success (more details below)
        <input type=\"hidden\" name=\"_target_path\" value=\"/account\" />
    #}

    <button type=\"submit\" class=\"btn btn-primary btn-lg btn-block\">login</button>
    </div>
</form>

 </div>
  
</div>

{% endblock %}
", "AdminBundle:Security:login.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/AdminBundle/Resources/views/Security/login.html.twig");
    }
}
