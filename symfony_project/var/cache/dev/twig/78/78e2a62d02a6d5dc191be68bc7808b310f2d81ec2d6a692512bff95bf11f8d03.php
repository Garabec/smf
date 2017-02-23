<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_1e5ca9791d2181af72e83c4e8a3c9dad8f4116958510f77ad04911f0f6d5eec1 extends Twig_Template
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
        $__internal_48edd27133522de895105385bf50d4901b451edddc014ef7f32811bb3c34c39d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_48edd27133522de895105385bf50d4901b451edddc014ef7f32811bb3c34c39d->enter($__internal_48edd27133522de895105385bf50d4901b451edddc014ef7f32811bb3c34c39d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_99d6b2981f3380c69e1007a9b62b61f70027cfcafdb9b8e0f83b332f5bbd2d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99d6b2981f3380c69e1007a9b62b61f70027cfcafdb9b8e0f83b332f5bbd2d3f->enter($__internal_99d6b2981f3380c69e1007a9b62b61f70027cfcafdb9b8e0f83b332f5bbd2d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_48edd27133522de895105385bf50d4901b451edddc014ef7f32811bb3c34c39d->leave($__internal_48edd27133522de895105385bf50d4901b451edddc014ef7f32811bb3c34c39d_prof);

        
        $__internal_99d6b2981f3380c69e1007a9b62b61f70027cfcafdb9b8e0f83b332f5bbd2d3f->leave($__internal_99d6b2981f3380c69e1007a9b62b61f70027cfcafdb9b8e0f83b332f5bbd2d3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
