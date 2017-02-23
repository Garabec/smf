<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_4aebe034028e8114616fbcf5686bc5f32a1a377d03aaede0586491c66dbe3990 extends Twig_Template
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
        $__internal_c72d3fdd5be462f6ced4c018d1327af3a7a538a3fee43b90a24fb3b41f2e3e79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72d3fdd5be462f6ced4c018d1327af3a7a538a3fee43b90a24fb3b41f2e3e79->enter($__internal_c72d3fdd5be462f6ced4c018d1327af3a7a538a3fee43b90a24fb3b41f2e3e79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_1757bac3777c9ca6f8d6f32ab18097226e6d2ee71aab8a183f326f304dd0da1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1757bac3777c9ca6f8d6f32ab18097226e6d2ee71aab8a183f326f304dd0da1d->enter($__internal_1757bac3777c9ca6f8d6f32ab18097226e6d2ee71aab8a183f326f304dd0da1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_c72d3fdd5be462f6ced4c018d1327af3a7a538a3fee43b90a24fb3b41f2e3e79->leave($__internal_c72d3fdd5be462f6ced4c018d1327af3a7a538a3fee43b90a24fb3b41f2e3e79_prof);

        
        $__internal_1757bac3777c9ca6f8d6f32ab18097226e6d2ee71aab8a183f326f304dd0da1d->leave($__internal_1757bac3777c9ca6f8d6f32ab18097226e6d2ee71aab8a183f326f304dd0da1d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
