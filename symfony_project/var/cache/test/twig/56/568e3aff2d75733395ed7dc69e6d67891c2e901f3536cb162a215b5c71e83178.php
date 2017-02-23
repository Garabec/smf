<?php

/* author/show.html.twig */
class __TwigTemplate_9e14920dbc8c038ab53bc1d7e3edac2436d0ee703322f7af6ca28cc61c6d3382 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "author/show.html.twig", 1);
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
        $__internal_3d2f8b6296292b1905fe57b8ef87ba9f6639ef56a71e1373142fca1165d4881a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2f8b6296292b1905fe57b8ef87ba9f6639ef56a71e1373142fca1165d4881a->enter($__internal_3d2f8b6296292b1905fe57b8ef87ba9f6639ef56a71e1373142fca1165d4881a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/show.html.twig"));

        $__internal_832442f607ae407a79341bf8536c71b903a4912aadaa80a1a87818712fe04aa2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_832442f607ae407a79341bf8536c71b903a4912aadaa80a1a87818712fe04aa2->enter($__internal_832442f607ae407a79341bf8536c71b903a4912aadaa80a1a87818712fe04aa2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "author/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d2f8b6296292b1905fe57b8ef87ba9f6639ef56a71e1373142fca1165d4881a->leave($__internal_3d2f8b6296292b1905fe57b8ef87ba9f6639ef56a71e1373142fca1165d4881a_prof);

        
        $__internal_832442f607ae407a79341bf8536c71b903a4912aadaa80a1a87818712fe04aa2->leave($__internal_832442f607ae407a79341bf8536c71b903a4912aadaa80a1a87818712fe04aa2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41c84d5eb7386fe678a4ba566f765df0b20fbbfa80010a52ad4642e37e20f3b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41c84d5eb7386fe678a4ba566f765df0b20fbbfa80010a52ad4642e37e20f3b1->enter($__internal_41c84d5eb7386fe678a4ba566f765df0b20fbbfa80010a52ad4642e37e20f3b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_6dd7b1db0f010af7f307779e18e4d0ee05c086c378e2f7b7e39524ff23c0784c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dd7b1db0f010af7f307779e18e4d0ee05c086c378e2f7b7e39524ff23c0784c->enter($__internal_6dd7b1db0f010af7f307779e18e4d0ee05c086c378e2f7b7e39524ff23c0784c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Author</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : $this->getContext($context, "author")), "slug", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_admin_author_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6dd7b1db0f010af7f307779e18e4d0ee05c086c378e2f7b7e39524ff23c0784c->leave($__internal_6dd7b1db0f010af7f307779e18e4d0ee05c086c378e2f7b7e39524ff23c0784c_prof);

        
        $__internal_41c84d5eb7386fe678a4ba566f765df0b20fbbfa80010a52ad4642e37e20f3b1->leave($__internal_41c84d5eb7386fe678a4ba566f765df0b20fbbfa80010a52ad4642e37e20f3b1_prof);

    }

    public function getTemplateName()
    {
        return "author/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 25,  71 => 18,  64 => 14,  57 => 10,  49 => 4,  40 => 3,  11 => 1,);
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
    <h1>Author</h1>

    <table>
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
            <a href=\"{{ path('blog_admin_author_index') }}\">Back to the list</a>
        </li>
    </ul>
{% endblock %}
", "author/show.html.twig", "/home/ubuntu/workspace/symfony_project/app/Resources/views/author/show.html.twig");
    }
}
