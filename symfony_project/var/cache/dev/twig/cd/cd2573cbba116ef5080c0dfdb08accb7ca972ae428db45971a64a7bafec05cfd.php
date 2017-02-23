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
        $__internal_6eb510b3a7f29b7f8826ed364633a7db27c33f890bf2fb51a54689c2238104c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6eb510b3a7f29b7f8826ed364633a7db27c33f890bf2fb51a54689c2238104c9->enter($__internal_6eb510b3a7f29b7f8826ed364633a7db27c33f890bf2fb51a54689c2238104c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:post:index.html.twig"));

        $__internal_b474a11db4807c050afe62528db006fcfa62a461bb67bb4bf25abbdf682eb7ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b474a11db4807c050afe62528db006fcfa62a461bb67bb4bf25abbdf682eb7ed->enter($__internal_b474a11db4807c050afe62528db006fcfa62a461bb67bb4bf25abbdf682eb7ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:post:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6eb510b3a7f29b7f8826ed364633a7db27c33f890bf2fb51a54689c2238104c9->leave($__internal_6eb510b3a7f29b7f8826ed364633a7db27c33f890bf2fb51a54689c2238104c9_prof);

        
        $__internal_b474a11db4807c050afe62528db006fcfa62a461bb67bb4bf25abbdf682eb7ed->leave($__internal_b474a11db4807c050afe62528db006fcfa62a461bb67bb4bf25abbdf682eb7ed_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_0c828b22f7b6fce70341dbcac951252a7f032cac9672e0fe99cbdff4f1cf61d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c828b22f7b6fce70341dbcac951252a7f032cac9672e0fe99cbdff4f1cf61d2->enter($__internal_0c828b22f7b6fce70341dbcac951252a7f032cac9672e0fe99cbdff4f1cf61d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f078fae6c61590683f28f61a0bf1f1cadfd09538df75f52b8c8d2f5bf0e2618e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f078fae6c61590683f28f61a0bf1f1cadfd09538df75f52b8c8d2f5bf0e2618e->enter($__internal_f078fae6c61590683f28f61a0bf1f1cadfd09538df75f52b8c8d2f5bf0e2618e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f078fae6c61590683f28f61a0bf1f1cadfd09538df75f52b8c8d2f5bf0e2618e->leave($__internal_f078fae6c61590683f28f61a0bf1f1cadfd09538df75f52b8c8d2f5bf0e2618e_prof);

        
        $__internal_0c828b22f7b6fce70341dbcac951252a7f032cac9672e0fe99cbdff4f1cf61d2->leave($__internal_0c828b22f7b6fce70341dbcac951252a7f032cac9672e0fe99cbdff4f1cf61d2_prof);

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
