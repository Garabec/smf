<?php

/* AdminBundle:author:show.html.twig */
class __TwigTemplate_5766f2bcc65ad4354b7b03c69f3e3d5e0682ce4a85651787eaf3318aafa7cc09 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Name</th>
                <td>";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "name", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Slug</th>
                <td>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["author"]) ? $context["author"] : null), "slug", array()), "html", null, true);
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
        return array (  68 => 30,  58 => 23,  51 => 19,  44 => 15,  31 => 4,  28 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "AdminBundle:author:show.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/AdminBundle/Resources/views/author/show.html.twig");
    }
}
