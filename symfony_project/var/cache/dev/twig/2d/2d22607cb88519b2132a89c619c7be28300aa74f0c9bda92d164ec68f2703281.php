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
        $__internal_a4823631b4f4799f19528936c43eb7e7d19a2142b29e8b13c2433a189c1925af = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a4823631b4f4799f19528936c43eb7e7d19a2142b29e8b13c2433a189c1925af->enter($__internal_a4823631b4f4799f19528936c43eb7e7d19a2142b29e8b13c2433a189c1925af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:author:index.html.twig"));

        $__internal_c52293110fe5a4352ea1d68b9d236663c0271938d4976e03e2b8d6d1aec2846d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52293110fe5a4352ea1d68b9d236663c0271938d4976e03e2b8d6d1aec2846d->enter($__internal_c52293110fe5a4352ea1d68b9d236663c0271938d4976e03e2b8d6d1aec2846d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:author:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4823631b4f4799f19528936c43eb7e7d19a2142b29e8b13c2433a189c1925af->leave($__internal_a4823631b4f4799f19528936c43eb7e7d19a2142b29e8b13c2433a189c1925af_prof);

        
        $__internal_c52293110fe5a4352ea1d68b9d236663c0271938d4976e03e2b8d6d1aec2846d->leave($__internal_c52293110fe5a4352ea1d68b9d236663c0271938d4976e03e2b8d6d1aec2846d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_f51ce668fbb679fbbc0fa68f047884c1001551c7cf9ddc7fa8c8107aa9f4b186 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f51ce668fbb679fbbc0fa68f047884c1001551c7cf9ddc7fa8c8107aa9f4b186->enter($__internal_f51ce668fbb679fbbc0fa68f047884c1001551c7cf9ddc7fa8c8107aa9f4b186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a5a8cc320bf631551f090fab55a6577051444764181f0e07bb430b791ba157c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5a8cc320bf631551f090fab55a6577051444764181f0e07bb430b791ba157c6->enter($__internal_a5a8cc320bf631551f090fab55a6577051444764181f0e07bb430b791ba157c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_a5a8cc320bf631551f090fab55a6577051444764181f0e07bb430b791ba157c6->leave($__internal_a5a8cc320bf631551f090fab55a6577051444764181f0e07bb430b791ba157c6_prof);

        
        $__internal_f51ce668fbb679fbbc0fa68f047884c1001551c7cf9ddc7fa8c8107aa9f4b186->leave($__internal_f51ce668fbb679fbbc0fa68f047884c1001551c7cf9ddc7fa8c8107aa9f4b186_prof);

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
