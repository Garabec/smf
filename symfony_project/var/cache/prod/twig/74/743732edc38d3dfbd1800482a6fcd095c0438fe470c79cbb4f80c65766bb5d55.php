<?php

/* AdminBundle:Security:login.html.twig */
class __TwigTemplate_5554cc33779b0d337151c4a6812772961b08593acd3f1dacd630a963600d70d0 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("blog.admin.security.title"), "html", null, true);
    }

    // line 5
    public function block_section($context, array $blocks = array())
    {
        // line 6
        echo "

";
        // line 8
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 9
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "messageData", array()), "security"), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
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
        return array (  77 => 32,  69 => 22,  63 => 19,  56 => 15,  50 => 11,  44 => 9,  42 => 8,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle:Security:login.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/AdminBundle/Resources/views/Security/login.html.twig");
    }
}
