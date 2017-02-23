<?php

/* AdminBundle:author:index.html.twig */
class __TwigTemplate_4812dc6750f818bd24362a523c58cc8a3cb88ef3f967f0de67bf4f13bad17713 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "AdminBundle:author:index.html.twig", 1);
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
        $__internal_5da237d643f8ab6ca9790b8451f6112137643374b73a5972c5cc73bc3f9a32b4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5da237d643f8ab6ca9790b8451f6112137643374b73a5972c5cc73bc3f9a32b4->enter($__internal_5da237d643f8ab6ca9790b8451f6112137643374b73a5972c5cc73bc3f9a32b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:author:index.html.twig"));

        $__internal_0c2e0fd288b4ff3ee3531a3db5fc284ce72fd059f769e5a02a64364f91702c0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0c2e0fd288b4ff3ee3531a3db5fc284ce72fd059f769e5a02a64364f91702c0a->enter($__internal_0c2e0fd288b4ff3ee3531a3db5fc284ce72fd059f769e5a02a64364f91702c0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:author:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5da237d643f8ab6ca9790b8451f6112137643374b73a5972c5cc73bc3f9a32b4->leave($__internal_5da237d643f8ab6ca9790b8451f6112137643374b73a5972c5cc73bc3f9a32b4_prof);

        
        $__internal_0c2e0fd288b4ff3ee3531a3db5fc284ce72fd059f769e5a02a64364f91702c0a->leave($__internal_0c2e0fd288b4ff3ee3531a3db5fc284ce72fd059f769e5a02a64364f91702c0a_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_e5ef94ef42ae2473ecc6f959e43fabf2514873c2843f44cd0773023948a0d291 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5ef94ef42ae2473ecc6f959e43fabf2514873c2843f44cd0773023948a0d291->enter($__internal_e5ef94ef42ae2473ecc6f959e43fabf2514873c2843f44cd0773023948a0d291_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9871646ada621d13c3c7d45832f6142d2db79e1562e6b962cc6462ec8487f409 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9871646ada621d13c3c7d45832f6142d2db79e1562e6b962cc6462ec8487f409->enter($__internal_9871646ada621d13c3c7d45832f6142d2db79e1562e6b962cc6462ec8487f409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Authors list</h1>
    <ul>
        <li>
            <a href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_author_new");
        echo "\"><button type=\"button\" class=\"btn btn-success\">Create a new author</button></a>
        </li>
    </ul>
    <table class=\"table table-striped\" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_author_show", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "slug", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_author_show", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-warning\">Show</button></a>
                        </li>
                        <br>
                         <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_author_edit", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-info\">Edit</button></a>
                        </li>
                    
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>
    
    
";
        
        $__internal_9871646ada621d13c3c7d45832f6142d2db79e1562e6b962cc6462ec8487f409->leave($__internal_9871646ada621d13c3c7d45832f6142d2db79e1562e6b962cc6462ec8487f409_prof);

        
        $__internal_e5ef94ef42ae2473ecc6f959e43fabf2514873c2843f44cd0773023948a0d291->leave($__internal_e5ef94ef42ae2473ecc6f959e43fabf2514873c2843f44cd0773023948a0d291_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:author:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 39,  101 => 32,  94 => 28,  87 => 24,  83 => 23,  77 => 22,  74 => 21,  70 => 20,  54 => 7,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Authors list</h1>
    <ul>
        <li>
            <a href=\"{{ path('blog_admin_author_new') }}\"><button type=\"button\" class=\"btn btn-success\">Create a new author</button></a>
        </li>
    </ul>
    <table class=\"table table-striped\" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for author in authors %}
            <tr>
                <td><a href=\"{{ path('blog_admin_author_show', { 'id': author.id }) }}\">{{ author.id }}</a></td>
                <td>{{ author.name }}</td>
                <td>{{ author.slug }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('blog_admin_author_show', { 'id': author.id }) }}\"><button type=\"button\" class=\"btn btn-warning\">Show</button></a>
                        </li>
                        <br>
                         <li>
                            <a href=\"{{ path('blog_admin_author_edit', { 'id': author.id }) }}\"><button type=\"button\" class=\"btn btn-info\">Edit</button></a>
                        </li>
                    
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    
    
{% endblock %}
", "AdminBundle:author:index.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/AdminBundle/Resources/views/author/index.html.twig");
    }
}
