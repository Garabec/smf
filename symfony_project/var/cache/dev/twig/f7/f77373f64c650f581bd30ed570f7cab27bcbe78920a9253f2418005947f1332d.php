<?php

/* AdminBundle:author:show.html.twig */
class __TwigTemplate_6b4b4c41a56fa1387d00c662bcb379c693d1801ddf901cd0020cbc5d15da2f08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "AdminBundle:author:show.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff08222a2b3d27eeffbd3c420badd50ae8c99f70158a7c011ad4aa4ceb3c1726 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff08222a2b3d27eeffbd3c420badd50ae8c99f70158a7c011ad4aa4ceb3c1726->enter($__internal_ff08222a2b3d27eeffbd3c420badd50ae8c99f70158a7c011ad4aa4ceb3c1726_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:author:show.html.twig"));

        $__internal_93e4334e030b54b85dd26e66cf5354d9487046a1f733a8cb8ddf01cd90464c25 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93e4334e030b54b85dd26e66cf5354d9487046a1f733a8cb8ddf01cd90464c25->enter($__internal_93e4334e030b54b85dd26e66cf5354d9487046a1f733a8cb8ddf01cd90464c25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:author:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff08222a2b3d27eeffbd3c420badd50ae8c99f70158a7c011ad4aa4ceb3c1726->leave($__internal_ff08222a2b3d27eeffbd3c420badd50ae8c99f70158a7c011ad4aa4ceb3c1726_prof);

        
        $__internal_93e4334e030b54b85dd26e66cf5354d9487046a1f733a8cb8ddf01cd90464c25->leave($__internal_93e4334e030b54b85dd26e66cf5354d9487046a1f733a8cb8ddf01cd90464c25_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_dd4ced1d0f341bee1df5faa3af271896999a628f5984dd815d4af96086682a3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd4ced1d0f341bee1df5faa3af271896999a628f5984dd815d4af96086682a3e->enter($__internal_dd4ced1d0f341bee1df5faa3af271896999a628f5984dd815d4af96086682a3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_b655bc0ea9d7f1378975fce615e8371bfaaf305ee9a2665963903d11de1bbedb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b655bc0ea9d7f1378975fce615e8371bfaaf305ee9a2665963903d11de1bbedb->enter($__internal_b655bc0ea9d7f1378975fce615e8371bfaaf305ee9a2665963903d11de1bbedb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Author</h1>


<div class=\"row\">
  <div class=\"col-md-6\">
      
  
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "slug", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_author_index");
        echo "\"><button type=\"button\" class=\"btn btn-success\">Back to the list</button></a>
        </li>
    </ul>
    
    </div>
 
</div>
";
        
        $__internal_b655bc0ea9d7f1378975fce615e8371bfaaf305ee9a2665963903d11de1bbedb->leave($__internal_b655bc0ea9d7f1378975fce615e8371bfaaf305ee9a2665963903d11de1bbedb_prof);

        
        $__internal_dd4ced1d0f341bee1df5faa3af271896999a628f5984dd815d4af96086682a3e->leave($__internal_dd4ced1d0f341bee1df5faa3af271896999a628f5984dd815d4af96086682a3e_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:author:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 30,  76 => 23,  69 => 19,  62 => 15,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"AdminBundle::layout.html.twig\" %}

{% block content %}
    <h1>Author</h1>


<div class=\"row\">
  <div class=\"col-md-6\">
      
  
    <table class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ author.id }}</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>{{ author.name }}</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>{{ author.slug }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('blog_admin_author_index') }}\"><button type=\"button\" class=\"btn btn-success\">Back to the list</button></a>
        </li>
    </ul>
    
    </div>
 
</div>
{% endblock %}
", "AdminBundle:author:show.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/AdminBundle/Resources/views/author/show.html.twig");
    }
}
