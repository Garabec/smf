<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_d10a35f2dae87644dcdd587ea5f9ba086b20cdb8463ca33bf58e5e3512ef2101 extends Twig_Template
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
        $__internal_762c78e37398a6188d13ba00a3b68c9dfc25546317e4d63c32bd80d8849b7db8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_762c78e37398a6188d13ba00a3b68c9dfc25546317e4d63c32bd80d8849b7db8->enter($__internal_762c78e37398a6188d13ba00a3b68c9dfc25546317e4d63c32bd80d8849b7db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_698d475c8f3ea530e5d16c9cb2879e89660a165c5926b22784e90042c873fb44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_698d475c8f3ea530e5d16c9cb2879e89660a165c5926b22784e90042c873fb44->enter($__internal_698d475c8f3ea530e5d16c9cb2879e89660a165c5926b22784e90042c873fb44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_762c78e37398a6188d13ba00a3b68c9dfc25546317e4d63c32bd80d8849b7db8->leave($__internal_762c78e37398a6188d13ba00a3b68c9dfc25546317e4d63c32bd80d8849b7db8_prof);

        
        $__internal_698d475c8f3ea530e5d16c9cb2879e89660a165c5926b22784e90042c873fb44->leave($__internal_698d475c8f3ea530e5d16c9cb2879e89660a165c5926b22784e90042c873fb44_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
