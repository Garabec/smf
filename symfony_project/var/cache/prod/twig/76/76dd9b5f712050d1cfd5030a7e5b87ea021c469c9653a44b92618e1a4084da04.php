<?php

/* CoreBundle:Post:index.html.twig */
class __TwigTemplate_8075a935c38b48b15730565b9dc8e2fd33569844a4454fa9fd11752206c352bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreBundle::layout.html.twig", "CoreBundle:Post:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'section' => array($this, 'block_section'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "               Welcome to the Symfony Blog
";
    }

    // line 12
    public function block_section($context, array $blocks = array())
    {
        echo " 

                ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) ? $context["posts"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 15
            echo "                
                   ";
            // line 16
            echo twig_include($this->env, $context, "CoreBundle:Post:_post.html.twig", array("post" => $context["post"]));
            echo "
                   
                ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                
";
    }

    // line 24
    public function block_sidebar($context, array $blocks = array())
    {
        echo " 
  
  <h3>Latest Post</h3>
     
     ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["post_latest"]) ? $context["post_latest"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 29
            echo "     
          <p><a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "slug", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["post"], "title", array()), "html", null, true);
            echo "</a></p>
     
     ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo " 
     
 ";
    }

    public function getTemplateName()
    {
        return "CoreBundle:Post:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 32,  101 => 30,  98 => 29,  94 => 28,  86 => 24,  81 => 19,  64 => 16,  61 => 15,  44 => 14,  38 => 12,  33 => 4,  30 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "CoreBundle:Post:index.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/CoreBundle/Resources/views/Post/index.html.twig");
    }
}
