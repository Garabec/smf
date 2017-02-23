<?php

/* author/index.html.twig */
class __TwigTemplate_484b752c26155b7e5ebc3bbb0223de5f567f423daf14ce48bb3ecf9fd00ae8ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "author/index.html.twig", 1);
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
        $__internal_f41f98f98f2fb16a279519a7b849e163353bdad24cb9cfda3a7a442643f25efe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f41f98f98f2fb16a279519a7b849e163353bdad24cb9cfda3a7a442643f25efe->enter($__internal_f41f98f98f2fb16a279519a7b849e163353bdad24cb9cfda3a7a442643f25efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/index.html.twig"));

        $__internal_be9ee75d1865919d9952fdc5f489ab2f5fc812d5849a2e88ca3f9270a301e60e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be9ee75d1865919d9952fdc5f489ab2f5fc812d5849a2e88ca3f9270a301e60e->enter($__internal_be9ee75d1865919d9952fdc5f489ab2f5fc812d5849a2e88ca3f9270a301e60e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f41f98f98f2fb16a279519a7b849e163353bdad24cb9cfda3a7a442643f25efe->leave($__internal_f41f98f98f2fb16a279519a7b849e163353bdad24cb9cfda3a7a442643f25efe_prof);

        
        $__internal_be9ee75d1865919d9952fdc5f489ab2f5fc812d5849a2e88ca3f9270a301e60e->leave($__internal_be9ee75d1865919d9952fdc5f489ab2f5fc812d5849a2e88ca3f9270a301e60e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8f8d86262e5ab1da7e8400dd192155539dff2f4bcdc68c21af01a70056d3d274 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f8d86262e5ab1da7e8400dd192155539dff2f4bcdc68c21af01a70056d3d274->enter($__internal_8f8d86262e5ab1da7e8400dd192155539dff2f4bcdc68c21af01a70056d3d274_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_14ad5ce687279acf77880023d615d0b274a2ecc620ea7b42857e605c2dc6df0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ad5ce687279acf77880023d615d0b274a2ecc620ea7b42857e605c2dc6df0b->enter($__internal_14ad5ce687279acf77880023d615d0b274a2ecc620ea7b42857e605c2dc6df0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Authors list</h1>

    <table>
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
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["authors"]) ? $context["authors"] : $this->getContext($context, "authors")));
        foreach ($context['_seq'] as $context["_key"] => $context["author"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_author_show", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "name", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["author"], "slug", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_author_show", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\">Show</a>
                        </li>
                         <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_author_edit", array("id" => $this->getAttribute($context["author"], "id", array()))), "html", null, true);
            echo "\">Edit</a>
                        </li>
                    
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['author'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_author_new");
        echo "\">Create a new author</a>
        </li>
    </ul>
    
";
        
        $__internal_14ad5ce687279acf77880023d615d0b274a2ecc620ea7b42857e605c2dc6df0b->leave($__internal_14ad5ce687279acf77880023d615d0b274a2ecc620ea7b42857e605c2dc6df0b_prof);

        
        $__internal_8f8d86262e5ab1da7e8400dd192155539dff2f4bcdc68c21af01a70056d3d274->leave($__internal_8f8d86262e5ab1da7e8400dd192155539dff2f4bcdc68c21af01a70056d3d274_prof);

    }

    public function getTemplateName()
    {
        return "author/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 38,  106 => 34,  93 => 27,  87 => 24,  80 => 20,  76 => 19,  70 => 18,  67 => 17,  63 => 16,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Authors list</h1>

    <table>
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
                            <a href=\"{{ path('blog_admin_author_show', { 'id': author.id }) }}\">Show</a>
                        </li>
                         <li>
                            <a href=\"{{ path('blog_admin_author_edit', { 'id': author.id }) }}\">Edit</a>
                        </li>
                    
                    </ul>
                </td>
            </tr>
        {% endfor %}
        </tbody>
    </table>
    <ul>
        <li>
            <a href=\"{{ path('blog_admin_author_new') }}\">Create a new author</a>
        </li>
    </ul>
    
{% endblock %}
", "author/index.html.twig", "/home/ubuntu/workspace/symfony_project/app/Resources/views/author/index.html.twig");
    }
}
