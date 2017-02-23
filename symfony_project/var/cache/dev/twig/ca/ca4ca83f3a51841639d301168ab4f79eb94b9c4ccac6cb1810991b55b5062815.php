<?php

/* WebProfilerBundle:Profiler:header.html.twig */
class __TwigTemplate_8a4a05d06410d75510ccf9c286a72b1229b1c26a4c0bec83e85a41d35e46cf51 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5e7a300d8ed72973a5d826c1745c3a72ebd954f7c47d000b4524fda3159669d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e5e7a300d8ed72973a5d826c1745c3a72ebd954f7c47d000b4524fda3159669d->enter($__internal_e5e7a300d8ed72973a5d826c1745c3a72ebd954f7c47d000b4524fda3159669d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        $__internal_dd97683a3b1815fc5e88199d183e00091d444b70955fc85a2baf7cf1dbddda2e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd97683a3b1815fc5e88199d183e00091d444b70955fc85a2baf7cf1dbddda2e->enter($__internal_dd97683a3b1815fc5e88199d183e00091d444b70955fc85a2baf7cf1dbddda2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_e5e7a300d8ed72973a5d826c1745c3a72ebd954f7c47d000b4524fda3159669d->leave($__internal_e5e7a300d8ed72973a5d826c1745c3a72ebd954f7c47d000b4524fda3159669d_prof);

        
        $__internal_dd97683a3b1815fc5e88199d183e00091d444b70955fc85a2baf7cf1dbddda2e->leave($__internal_dd97683a3b1815fc5e88199d183e00091d444b70955fc85a2baf7cf1dbddda2e_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "WebProfilerBundle:Profiler:header.html.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/header.html.twig");
    }
}
