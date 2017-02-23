<?php

/* AdminBundle:post:show.html.twig */
class __TwigTemplate_f5ab81cc0827ef8b4e498a084371be0c9d248858b61411be397afe66f1b07485 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("AdminBundle::layout.html.twig", "AdminBundle:post:show.html.twig", 1);
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
        $__internal_b2be392593d32425084be551a1d1ed58fe333545872bac9539a68531767add09 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2be392593d32425084be551a1d1ed58fe333545872bac9539a68531767add09->enter($__internal_b2be392593d32425084be551a1d1ed58fe333545872bac9539a68531767add09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:post:show.html.twig"));

        $__internal_733bd9462babe03afe0895faed489b8b84015ef89b4d5d4c766b7b4c991a7ace = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_733bd9462babe03afe0895faed489b8b84015ef89b4d5d4c766b7b4c991a7ace->enter($__internal_733bd9462babe03afe0895faed489b8b84015ef89b4d5d4c766b7b4c991a7ace_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AdminBundle:post:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2be392593d32425084be551a1d1ed58fe333545872bac9539a68531767add09->leave($__internal_b2be392593d32425084be551a1d1ed58fe333545872bac9539a68531767add09_prof);

        
        $__internal_733bd9462babe03afe0895faed489b8b84015ef89b4d5d4c766b7b4c991a7ace->leave($__internal_733bd9462babe03afe0895faed489b8b84015ef89b4d5d4c766b7b4c991a7ace_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_5d03c2fc5818f48253326e8baa4ca366bc07c63bb6b25d6d9038dbe20e6f6d12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d03c2fc5818f48253326e8baa4ca366bc07c63bb6b25d6d9038dbe20e6f6d12->enter($__internal_5d03c2fc5818f48253326e8baa4ca366bc07c63bb6b25d6d9038dbe20e6f6d12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_20ef66663495463cee4e460c68e2231ad1e58cf4e3c3c77d4eff9df61f9765ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20ef66663495463cee4e460c68e2231ad1e58cf4e3c3c77d4eff9df61f9765ff->enter($__internal_20ef66663495463cee4e460c68e2231ad1e58cf4e3c3c77d4eff9df61f9765ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Post</h1>

    <table  class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "title", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "slug", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Body</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "body", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_post_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_post_edit", array("id" => $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_20ef66663495463cee4e460c68e2231ad1e58cf4e3c3c77d4eff9df61f9765ff->leave($__internal_20ef66663495463cee4e460c68e2231ad1e58cf4e3c3c77d4eff9df61f9765ff_prof);

        
        $__internal_5d03c2fc5818f48253326e8baa4ca366bc07c63bb6b25d6d9038dbe20e6f6d12->leave($__internal_5d03c2fc5818f48253326e8baa4ca366bc07c63bb6b25d6d9038dbe20e6f6d12_prof);

    }

    public function getTemplateName()
    {
        return "AdminBundle:post:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 37,  100 => 35,  94 => 32,  88 => 29,  78 => 22,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Post</h1>

    <table  class=\"table table-striped\">
        <tbody>
            <tr>
                <th>Id</th>
                <td>{{ post.id }}</td>
            </tr>
            <tr>
                <th>Title</th>
                <td>{{ post.title }}</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>{{ post.slug }}</td>
            </tr>
            <tr>
                <th>Body</th>
                <td>{{ post.body }}</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"{{ path('blog_admin_post_index') }}\">Back to the list</a>
        </li>
        <li>
            <a href=\"{{ path('blog_admin_post_edit', { 'id': post.id }) }}\">Edit</a>
        </li>
        <li>
            {{ form_start(delete_form) }}
                <input type=\"submit\" value=\"Delete\">
            {{ form_end(delete_form) }}
        </li>
    </ul>
{% endblock %}
", "AdminBundle:post:show.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/AdminBundle/Resources/views/post/show.html.twig");
    }
}
