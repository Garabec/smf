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
        $__internal_2067c374d779e447d79c98fbb503c4ed9a22cbcd69a5bbad19d7aa602f981aa5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2067c374d779e447d79c98fbb503c4ed9a22cbcd69a5bbad19d7aa602f981aa5->enter($__internal_2067c374d779e447d79c98fbb503c4ed9a22cbcd69a5bbad19d7aa602f981aa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        $__internal_481cb60dbc4772f410458a96b1987f6b296980909889f5039ab501125c4f0ac1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_481cb60dbc4772f410458a96b1987f6b296980909889f5039ab501125c4f0ac1->enter($__internal_481cb60dbc4772f410458a96b1987f6b296980909889f5039ab501125c4f0ac1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_2067c374d779e447d79c98fbb503c4ed9a22cbcd69a5bbad19d7aa602f981aa5->leave($__internal_2067c374d779e447d79c98fbb503c4ed9a22cbcd69a5bbad19d7aa602f981aa5_prof);

        
        $__internal_481cb60dbc4772f410458a96b1987f6b296980909889f5039ab501125c4f0ac1->leave($__internal_481cb60dbc4772f410458a96b1987f6b296980909889f5039ab501125c4f0ac1_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_8274dcb778555c2345d9e9cc8f345702e06c82cd79ddfa1d81bef004978ccdc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8274dcb778555c2345d9e9cc8f345702e06c82cd79ddfa1d81bef004978ccdc4->enter($__internal_8274dcb778555c2345d9e9cc8f345702e06c82cd79ddfa1d81bef004978ccdc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_543ba5f5bdcfd5ecf647c13a38055936119ed04d4602e5c09ce02be8f002cb90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_543ba5f5bdcfd5ecf647c13a38055936119ed04d4602e5c09ce02be8f002cb90->enter($__internal_543ba5f5bdcfd5ecf647c13a38055936119ed04d4602e5c09ce02be8f002cb90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_543ba5f5bdcfd5ecf647c13a38055936119ed04d4602e5c09ce02be8f002cb90->leave($__internal_543ba5f5bdcfd5ecf647c13a38055936119ed04d4602e5c09ce02be8f002cb90_prof);

        
        $__internal_8274dcb778555c2345d9e9cc8f345702e06c82cd79ddfa1d81bef004978ccdc4->leave($__internal_8274dcb778555c2345d9e9cc8f345702e06c82cd79ddfa1d81bef004978ccdc4_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_4c095a5ac96b21795037a10296c31ff236dbc74dfc43bf4d29727f450904f232 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c095a5ac96b21795037a10296c31ff236dbc74dfc43bf4d29727f450904f232->enter($__internal_4c095a5ac96b21795037a10296c31ff236dbc74dfc43bf4d29727f450904f232_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_3709552b2125cfdd83459ee3e0e51f4619ff92802456ee5cc1ad12f13b986272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3709552b2125cfdd83459ee3e0e51f4619ff92802456ee5cc1ad12f13b986272->enter($__internal_3709552b2125cfdd83459ee3e0e51f4619ff92802456ee5cc1ad12f13b986272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_3709552b2125cfdd83459ee3e0e51f4619ff92802456ee5cc1ad12f13b986272->leave($__internal_3709552b2125cfdd83459ee3e0e51f4619ff92802456ee5cc1ad12f13b986272_prof);

        
        $__internal_4c095a5ac96b21795037a10296c31ff236dbc74dfc43bf4d29727f450904f232->leave($__internal_4c095a5ac96b21795037a10296c31ff236dbc74dfc43bf4d29727f450904f232_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_8101a72d972c908298f020f39bf3d2b0302cba79055c6ce684f439d556fee4d4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8101a72d972c908298f020f39bf3d2b0302cba79055c6ce684f439d556fee4d4->enter($__internal_8101a72d972c908298f020f39bf3d2b0302cba79055c6ce684f439d556fee4d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_42a37e7aa69ad992b3744da1f629924edb800b36fa6e3fd3f3cc275131352a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42a37e7aa69ad992b3744da1f629924edb800b36fa6e3fd3f3cc275131352a6e->enter($__internal_42a37e7aa69ad992b3744da1f629924edb800b36fa6e3fd3f3cc275131352a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_42a37e7aa69ad992b3744da1f629924edb800b36fa6e3fd3f3cc275131352a6e->leave($__internal_42a37e7aa69ad992b3744da1f629924edb800b36fa6e3fd3f3cc275131352a6e_prof);

        
        $__internal_8101a72d972c908298f020f39bf3d2b0302cba79055c6ce684f439d556fee4d4->leave($__internal_8101a72d972c908298f020f39bf3d2b0302cba79055c6ce684f439d556fee4d4_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8f4acc1bb859d685cdcd83ce6e71ac98d33a876ac7d37193ba04816fdcf07c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f4acc1bb859d685cdcd83ce6e71ac98d33a876ac7d37193ba04816fdcf07c7c->enter($__internal_8f4acc1bb859d685cdcd83ce6e71ac98d33a876ac7d37193ba04816fdcf07c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_fbc88f21898e1de8dec71571bd9c2719347a77e3fd82e4bed41ea265d0f7c246 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc88f21898e1de8dec71571bd9c2719347a77e3fd82e4bed41ea265d0f7c246->enter($__internal_fbc88f21898e1de8dec71571bd9c2719347a77e3fd82e4bed41ea265d0f7c246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_fbc88f21898e1de8dec71571bd9c2719347a77e3fd82e4bed41ea265d0f7c246->leave($__internal_fbc88f21898e1de8dec71571bd9c2719347a77e3fd82e4bed41ea265d0f7c246_prof);

        
        $__internal_8f4acc1bb859d685cdcd83ce6e71ac98d33a876ac7d37193ba04816fdcf07c7c->leave($__internal_8f4acc1bb859d685cdcd83ce6e71ac98d33a876ac7d37193ba04816fdcf07c7c_prof);

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
