<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_383b56536f68ac7b3a5b8fedc7c978050652cd07e28a818418e7786369c04b8b extends Twig_Template
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
        $__internal_5c1b771ec8cfe0594009fc64400c91a20b2cd404a9893c76c3778e960c43ba8d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c1b771ec8cfe0594009fc64400c91a20b2cd404a9893c76c3778e960c43ba8d->enter($__internal_5c1b771ec8cfe0594009fc64400c91a20b2cd404a9893c76c3778e960c43ba8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9e841972a99f098ca249123ba2750e3a865a53538c23c164cd27559e0e05fee7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e841972a99f098ca249123ba2750e3a865a53538c23c164cd27559e0e05fee7->enter($__internal_9e841972a99f098ca249123ba2750e3a865a53538c23c164cd27559e0e05fee7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_5c1b771ec8cfe0594009fc64400c91a20b2cd404a9893c76c3778e960c43ba8d->leave($__internal_5c1b771ec8cfe0594009fc64400c91a20b2cd404a9893c76c3778e960c43ba8d_prof);

        
        $__internal_9e841972a99f098ca249123ba2750e3a865a53538c23c164cd27559e0e05fee7->leave($__internal_9e841972a99f098ca249123ba2750e3a865a53538c23c164cd27559e0e05fee7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
