<?php

/* ::base.html.twig */
class __TwigTemplate_e9e008016f93901b2c296a61d6d6c3e9daeb4ab78ed90afe5a3066591af65a7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7491b79dfd56cd69778d9c34a8b9467dffe456a0e62b7df5cd93134e277a6ac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7491b79dfd56cd69778d9c34a8b9467dffe456a0e62b7df5cd93134e277a6ac3->enter($__internal_7491b79dfd56cd69778d9c34a8b9467dffe456a0e62b7df5cd93134e277a6ac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_af468b0f067e7e31ceb2459676e394893943f5206c83c2227a1d00c24dda86dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af468b0f067e7e31ceb2459676e394893943f5206c83c2227a1d00c24dda86dc->enter($__internal_af468b0f067e7e31ceb2459676e394893943f5206c83c2227a1d00c24dda86dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_7491b79dfd56cd69778d9c34a8b9467dffe456a0e62b7df5cd93134e277a6ac3->leave($__internal_7491b79dfd56cd69778d9c34a8b9467dffe456a0e62b7df5cd93134e277a6ac3_prof);

        
        $__internal_af468b0f067e7e31ceb2459676e394893943f5206c83c2227a1d00c24dda86dc->leave($__internal_af468b0f067e7e31ceb2459676e394893943f5206c83c2227a1d00c24dda86dc_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_a441e91cfd01de72fb51c4f4db24f4e30e0c6aa12748e0738cbed753fb547c3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a441e91cfd01de72fb51c4f4db24f4e30e0c6aa12748e0738cbed753fb547c3e->enter($__internal_a441e91cfd01de72fb51c4f4db24f4e30e0c6aa12748e0738cbed753fb547c3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8e31d1fb1b199b6b0123c0d6413251a2bfd3d1c1097817ec0cee6256b6b68eb4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e31d1fb1b199b6b0123c0d6413251a2bfd3d1c1097817ec0cee6256b6b68eb4->enter($__internal_8e31d1fb1b199b6b0123c0d6413251a2bfd3d1c1097817ec0cee6256b6b68eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_8e31d1fb1b199b6b0123c0d6413251a2bfd3d1c1097817ec0cee6256b6b68eb4->leave($__internal_8e31d1fb1b199b6b0123c0d6413251a2bfd3d1c1097817ec0cee6256b6b68eb4_prof);

        
        $__internal_a441e91cfd01de72fb51c4f4db24f4e30e0c6aa12748e0738cbed753fb547c3e->leave($__internal_a441e91cfd01de72fb51c4f4db24f4e30e0c6aa12748e0738cbed753fb547c3e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_5a74f801ca07eaf3ceedc9b5734c1f3f3f730cdd6c8f444d08c944800483c82c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5a74f801ca07eaf3ceedc9b5734c1f3f3f730cdd6c8f444d08c944800483c82c->enter($__internal_5a74f801ca07eaf3ceedc9b5734c1f3f3f730cdd6c8f444d08c944800483c82c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_2225a3a9e3a54e482b0aff1b63216ea30985661049845d001f25be3ba1f0d6ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2225a3a9e3a54e482b0aff1b63216ea30985661049845d001f25be3ba1f0d6ff->enter($__internal_2225a3a9e3a54e482b0aff1b63216ea30985661049845d001f25be3ba1f0d6ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_2225a3a9e3a54e482b0aff1b63216ea30985661049845d001f25be3ba1f0d6ff->leave($__internal_2225a3a9e3a54e482b0aff1b63216ea30985661049845d001f25be3ba1f0d6ff_prof);

        
        $__internal_5a74f801ca07eaf3ceedc9b5734c1f3f3f730cdd6c8f444d08c944800483c82c->leave($__internal_5a74f801ca07eaf3ceedc9b5734c1f3f3f730cdd6c8f444d08c944800483c82c_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_bf6d14566f9f117d8d3f4fa7b6debbd661c4d5746b9c340a0c0e2efca17f633a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf6d14566f9f117d8d3f4fa7b6debbd661c4d5746b9c340a0c0e2efca17f633a->enter($__internal_bf6d14566f9f117d8d3f4fa7b6debbd661c4d5746b9c340a0c0e2efca17f633a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_58bd682aac320153d0b994de1cd0c5e03267713522630d5219f6ee5680112446 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58bd682aac320153d0b994de1cd0c5e03267713522630d5219f6ee5680112446->enter($__internal_58bd682aac320153d0b994de1cd0c5e03267713522630d5219f6ee5680112446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_58bd682aac320153d0b994de1cd0c5e03267713522630d5219f6ee5680112446->leave($__internal_58bd682aac320153d0b994de1cd0c5e03267713522630d5219f6ee5680112446_prof);

        
        $__internal_bf6d14566f9f117d8d3f4fa7b6debbd661c4d5746b9c340a0c0e2efca17f633a->leave($__internal_bf6d14566f9f117d8d3f4fa7b6debbd661c4d5746b9c340a0c0e2efca17f633a_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1af85175b0aab9ca591ff66c5efafa0413915a4af227f6a3747b566be69fea68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1af85175b0aab9ca591ff66c5efafa0413915a4af227f6a3747b566be69fea68->enter($__internal_1af85175b0aab9ca591ff66c5efafa0413915a4af227f6a3747b566be69fea68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_69682c773cfcec0327a2245ee7ab637cd564a17b019d0d26313f3cc312230fa7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69682c773cfcec0327a2245ee7ab637cd564a17b019d0d26313f3cc312230fa7->enter($__internal_69682c773cfcec0327a2245ee7ab637cd564a17b019d0d26313f3cc312230fa7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_69682c773cfcec0327a2245ee7ab637cd564a17b019d0d26313f3cc312230fa7->leave($__internal_69682c773cfcec0327a2245ee7ab637cd564a17b019d0d26313f3cc312230fa7_prof);

        
        $__internal_1af85175b0aab9ca591ff66c5efafa0413915a4af227f6a3747b566be69fea68->leave($__internal_1af85175b0aab9ca591ff66c5efafa0413915a4af227f6a3747b566be69fea68_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/home/ubuntu/workspace/symfony_project/app/Resources/views/base.html.twig");
    }
}
