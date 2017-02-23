<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_84801dd7b6c3e9b3a889714345da494cadbe83c73680dc268a8dc6509383b23e extends Twig_Template
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
        $__internal_574623557a1d8e057d59c123c6ef4c323e36ec9fe7c9f84ca27df9496763f9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_574623557a1d8e057d59c123c6ef4c323e36ec9fe7c9f84ca27df9496763f9f6->enter($__internal_574623557a1d8e057d59c123c6ef4c323e36ec9fe7c9f84ca27df9496763f9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_1e296ea1ea328ff2400d6b4dd08b40280609d2ae50253af4727f2afff28bee68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e296ea1ea328ff2400d6b4dd08b40280609d2ae50253af4727f2afff28bee68->enter($__internal_1e296ea1ea328ff2400d6b4dd08b40280609d2ae50253af4727f2afff28bee68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_574623557a1d8e057d59c123c6ef4c323e36ec9fe7c9f84ca27df9496763f9f6->leave($__internal_574623557a1d8e057d59c123c6ef4c323e36ec9fe7c9f84ca27df9496763f9f6_prof);

        
        $__internal_1e296ea1ea328ff2400d6b4dd08b40280609d2ae50253af4727f2afff28bee68->leave($__internal_1e296ea1ea328ff2400d6b4dd08b40280609d2ae50253af4727f2afff28bee68_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
