<?php

/* AdminBundle:post:index.html.twig */
class __TwigTemplate_53ec75c33e10cfa1efdf176f786c34be3ef009ca0f0e5c072501bd89d19851af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "AdminBundle:post:index.html.twig", 1);
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
        $__internal_b31d7c21ff197a249ddcf189eb7a0c01ac0e089fb9c5f023661a222a9ca7d8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b31d7c21ff197a249ddcf189eb7a0c01ac0e089fb9c5f023661a222a9ca7d8df->enter($__internal_b31d7c21ff197a249ddcf189eb7a0c01ac0e089fb9c5f023661a222a9ca7d8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:post:index.html.twig"));

        $__internal_32888e758cca38c1ac0047752a9656085464833d19b30ad39123ef14927d44bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32888e758cca38c1ac0047752a9656085464833d19b30ad39123ef14927d44bd->enter($__internal_32888e758cca38c1ac0047752a9656085464833d19b30ad39123ef14927d44bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b31d7c21ff197a249ddcf189eb7a0c01ac0e089fb9c5f023661a222a9ca7d8df->leave($__internal_b31d7c21ff197a249ddcf189eb7a0c01ac0e089fb9c5f023661a222a9ca7d8df_prof);

        
        $__internal_32888e758cca38c1ac0047752a9656085464833d19b30ad39123ef14927d44bd->leave($__internal_32888e758cca38c1ac0047752a9656085464833d19b30ad39123ef14927d44bd_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_a1ad413f712b9c07c1560bab455ef8f590ff3325c4bb61f1eba6c6f80362ff58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1ad413f712b9c07c1560bab455ef8f590ff3325c4bb61f1eba6c6f80362ff58->enter($__internal_a1ad413f712b9c07c1560bab455ef8f590ff3325c4bb61f1eba6c6f80362ff58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_80df8825dff6b1d2bc563bc18411c3352897d380303681d3c093292be0426b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80df8825dff6b1d2bc563bc18411c3352897d380303681d3c093292be0426b80->enter($__internal_80df8825dff6b1d2bc563bc18411c3352897d380303681d3c093292be0426b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Posts list</h1>


    <ul>
        <li>
            <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_post_new");
        echo "\"><button type=\"button\" class=\"btn btn-success\">Create a new post</button></a>
        </li>
    </ul>
    
    <table class=\"table table-striped\" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Body</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 25
            echo "            <tr>
                <td><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "slug", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "body", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-primary\">Show</button></a>
                        </li>
                        <br>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\"><button type=\"button\" class=\"btn btn-warning\">Edit</button></a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    
";
        
        $__internal_80df8825dff6b1d2bc563bc18411c3352897d380303681d3c093292be0426b80->leave($__internal_80df8825dff6b1d2bc563bc18411c3352897d380303681d3c093292be0426b80_prof);

        
        $__internal_a1ad413f712b9c07c1560bab455ef8f590ff3325c4bb61f1eba6c6f80362ff58->leave($__internal_a1ad413f712b9c07c1560bab455ef8f590ff3325c4bb61f1eba6c6f80362ff58_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 43,  109 => 37,  102 => 33,  95 => 29,  91 => 28,  87 => 27,  81 => 26,  78 => 25,  74 => 24,  56 => 9,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Posts list</h1>


    <ul>
        <li>
            <a href=\"{{ path('blog_admin_post_new') }}\"><button type=\"button\" class=\"btn btn-success\">Create a new post</button></a>
        </li>
    </ul>
    
    <table class=\"table table-striped\" >
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Slug</th>
                <th>Body</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        {% for post in posts %}
            <tr>
                <td><a href=\"{{ path('blog_admin_post_show', { 'id': post.id }) }}\">{{ post.id }}</a></td>
                <td>{{ post.title }}</td>
                <td>{{ post.slug }}</td>
                <td>{{ post.body }}</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"{{ path('blog_admin_post_show', { 'id': post.id }) }}\"><button type=\"button\" class=\"btn btn-primary\">Show</button></a>
                        </li>
                        <br>
                        <li>
                            <a href=\"{{ path('blog_admin_post_edit', { 'id': post.id }) }}\"><button type=\"button\" class=\"btn btn-warning\">Edit</button></a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    
{% endblock %}
", "AdminBundle:post:index.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/AdminBundle/Resources/views/post/index.html.twig");
    }
}
