<?php

/* @Framework/Form/attributes.html.php */
class __TwigTemplate_0f326b73ea4b78db003ce6f6dd2e66adf729b7f9d011c9b1abe492a35df0eea9 extends Twig_Template
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
        $__internal_bf324b8a047b5dc00e7d0ff50f228e2b0d9c3aa6772d66ed86dd89d992696609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf324b8a047b5dc00e7d0ff50f228e2b0d9c3aa6772d66ed86dd89d992696609->enter($__internal_bf324b8a047b5dc00e7d0ff50f228e2b0d9c3aa6772d66ed86dd89d992696609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        $__internal_1d1a7970447f679c08d5dd89ed81eb2327b08e85c7b898906de57667a4c74dc0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1a7970447f679c08d5dd89ed81eb2327b08e85c7b898906de57667a4c74dc0->enter($__internal_1d1a7970447f679c08d5dd89ed81eb2327b08e85c7b898906de57667a4c74dc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
";
        
        $__internal_bf324b8a047b5dc00e7d0ff50f228e2b0d9c3aa6772d66ed86dd89d992696609->leave($__internal_bf324b8a047b5dc00e7d0ff50f228e2b0d9c3aa6772d66ed86dd89d992696609_prof);

        
        $__internal_1d1a7970447f679c08d5dd89ed81eb2327b08e85c7b898906de57667a4c74dc0->leave($__internal_1d1a7970447f679c08d5dd89ed81eb2327b08e85c7b898906de57667a4c74dc0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
", "@Framework/Form/attributes.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/attributes.html.php");
    }
}
