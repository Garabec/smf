<?php

/* post/index.html.twig */
class __TwigTemplate_a3cfe745ac7efa9610d24e7b773515c0ac93c504c60743f9385a0cbd9ca6fea3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "post/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_39966376b726192b486bbcef2bf7bc69d09be49e5c15ac0cc9342cb6a0141718 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39966376b726192b486bbcef2bf7bc69d09be49e5c15ac0cc9342cb6a0141718->enter($__internal_39966376b726192b486bbcef2bf7bc69d09be49e5c15ac0cc9342cb6a0141718_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $__internal_949a5ab71a5f8a07955b3e91106bffa12cd68b25a988a005d69e609675263aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_949a5ab71a5f8a07955b3e91106bffa12cd68b25a988a005d69e609675263aac->enter($__internal_949a5ab71a5f8a07955b3e91106bffa12cd68b25a988a005d69e609675263aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "post/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_39966376b726192b486bbcef2bf7bc69d09be49e5c15ac0cc9342cb6a0141718->leave($__internal_39966376b726192b486bbcef2bf7bc69d09be49e5c15ac0cc9342cb6a0141718_prof);

        
        $__internal_949a5ab71a5f8a07955b3e91106bffa12cd68b25a988a005d69e609675263aac->leave($__internal_949a5ab71a5f8a07955b3e91106bffa12cd68b25a988a005d69e609675263aac_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_459ffab0e7697a1579a249a68b43b34373e6217d6aecccc47eacb7a142dc4063 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_459ffab0e7697a1579a249a68b43b34373e6217d6aecccc47eacb7a142dc4063->enter($__internal_459ffab0e7697a1579a249a68b43b34373e6217d6aecccc47eacb7a142dc4063_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_201f032fcba54257e54bca283ad15c924e764875e82ca7e26e06e37a5dc05095 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_201f032fcba54257e54bca283ad15c924e764875e82ca7e26e06e37a5dc05095->enter($__internal_201f032fcba54257e54bca283ad15c924e764875e82ca7e26e06e37a5dc05095_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Posts list</h1>

    <table>
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
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : $this->getContext($context, "posts")));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "slug", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "body", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_post_show", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_post_edit", array("id" => $this->getAttribute($context["post"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_post_new");
        echo "\">Create a new post</a>
        </li>
    </ul>
";
        
        $__internal_201f032fcba54257e54bca283ad15c924e764875e82ca7e26e06e37a5dc05095->leave($__internal_201f032fcba54257e54bca283ad15c924e764875e82ca7e26e06e37a5dc05095_prof);

        
        $__internal_459ffab0e7697a1579a249a68b43b34373e6217d6aecccc47eacb7a142dc4063->leave($__internal_459ffab0e7697a1579a249a68b43b34373e6217d6aecccc47eacb7a142dc4063_prof);

    }

    public function getTemplateName()
    {
        return "post/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 40,  110 => 35,  98 => 29,  92 => 26,  85 => 22,  81 => 21,  77 => 20,  71 => 19,  68 => 18,  64 => 17,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    <h1>Posts list</h1>

    <table>
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
                            <a href=\"{{ path('blog_admin_post_show', { 'id': post.id }) }}\">show</a>
                        </li>
                        <li>
                            <a href=\"{{ path('blog_admin_post_edit', { 'id': post.id }) }}\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('blog_admin_post_new') }}\">Create a new post</a>
        </li>
    </ul>
{% endblock %}
", "post/index.html.twig", "/home/ubuntu/workspace/symfony_project/app/Resources/views/post/index.html.twig");
    }
}
