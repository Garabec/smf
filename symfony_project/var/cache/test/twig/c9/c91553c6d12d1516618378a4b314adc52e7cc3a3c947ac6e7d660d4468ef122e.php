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
        $__internal_e69316bff2bf3ace19d5f7eec508b21cfc2094fa206554abdbf75c208140e4c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e69316bff2bf3ace19d5f7eec508b21cfc2094fa206554abdbf75c208140e4c9->enter($__internal_e69316bff2bf3ace19d5f7eec508b21cfc2094fa206554abdbf75c208140e4c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Security:login.html.twig"));

        $__internal_33d192f8f8c87fb93ec6ad594a2e878c77106a9e0af519ac6c92857c27b7c5fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33d192f8f8c87fb93ec6ad594a2e878c77106a9e0af519ac6c92857c27b7c5fd->enter($__internal_33d192f8f8c87fb93ec6ad594a2e878c77106a9e0af519ac6c92857c27b7c5fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e69316bff2bf3ace19d5f7eec508b21cfc2094fa206554abdbf75c208140e4c9->leave($__internal_e69316bff2bf3ace19d5f7eec508b21cfc2094fa206554abdbf75c208140e4c9_prof);

        
        $__internal_33d192f8f8c87fb93ec6ad594a2e878c77106a9e0af519ac6c92857c27b7c5fd->leave($__internal_33d192f8f8c87fb93ec6ad594a2e878c77106a9e0af519ac6c92857c27b7c5fd_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_f9d432ab10cc889c0c91f7d215b6448aef74ef69588b256ee9688e4d882541a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9d432ab10cc889c0c91f7d215b6448aef74ef69588b256ee9688e4d882541a3->enter($__internal_f9d432ab10cc889c0c91f7d215b6448aef74ef69588b256ee9688e4d882541a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2d6d8ad47a6c2971eea45dc2dfd1e461b4d0b68a8c38ad123bb7a9d47857e053 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d6d8ad47a6c2971eea45dc2dfd1e461b4d0b68a8c38ad123bb7a9d47857e053->enter($__internal_2d6d8ad47a6c2971eea45dc2dfd1e461b4d0b68a8c38ad123bb7a9d47857e053_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.admin.security.title"), "html", null, true);
        
        $__internal_2d6d8ad47a6c2971eea45dc2dfd1e461b4d0b68a8c38ad123bb7a9d47857e053->leave($__internal_2d6d8ad47a6c2971eea45dc2dfd1e461b4d0b68a8c38ad123bb7a9d47857e053_prof);

        
        $__internal_f9d432ab10cc889c0c91f7d215b6448aef74ef69588b256ee9688e4d882541a3->leave($__internal_f9d432ab10cc889c0c91f7d215b6448aef74ef69588b256ee9688e4d882541a3_prof);

    }

    // line 5
    public function block_section($context, array $blocks = array())
    {
        $__internal_d75c900e195b339ceeadb1debc5ce1d374c17ce664e5a1621a58a935f1d02056 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d75c900e195b339ceeadb1debc5ce1d374c17ce664e5a1621a58a935f1d02056->enter($__internal_d75c900e195b339ceeadb1debc5ce1d374c17ce664e5a1621a58a935f1d02056_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

        $__internal_d86b766f99bdaad564e4472148e7ce4b693a19877498ad98f4989b06327d2165 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d86b766f99bdaad564e4472148e7ce4b693a19877498ad98f4989b06327d2165->enter($__internal_d86b766f99bdaad564e4472148e7ce4b693a19877498ad98f4989b06327d2165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "section"));

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
        
        $__internal_d86b766f99bdaad564e4472148e7ce4b693a19877498ad98f4989b06327d2165->leave($__internal_d86b766f99bdaad564e4472148e7ce4b693a19877498ad98f4989b06327d2165_prof);

        
        $__internal_d75c900e195b339ceeadb1debc5ce1d374c17ce664e5a1621a58a935f1d02056->leave($__internal_d75c900e195b339ceeadb1debc5ce1d374c17ce664e5a1621a58a935f1d02056_prof);

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
