<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_db4353e9f2dfb28a36336a62f642f2b58c378b0abeb19e0561716d95ba79c556 extends Twig_Template
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
        $__internal_ff56e0abcc1fa6cff803890a843ecffb2a8046f3e5aad3809687b1cfd6c18b7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff56e0abcc1fa6cff803890a843ecffb2a8046f3e5aad3809687b1cfd6c18b7f->enter($__internal_ff56e0abcc1fa6cff803890a843ecffb2a8046f3e5aad3809687b1cfd6c18b7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_808022d6ebb2f3a855fdd641ec84de9e7eda8779c5fc26905198d696070c5921 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_808022d6ebb2f3a855fdd641ec84de9e7eda8779c5fc26905198d696070c5921->enter($__internal_808022d6ebb2f3a855fdd641ec84de9e7eda8779c5fc26905198d696070c5921_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_ff56e0abcc1fa6cff803890a843ecffb2a8046f3e5aad3809687b1cfd6c18b7f->leave($__internal_ff56e0abcc1fa6cff803890a843ecffb2a8046f3e5aad3809687b1cfd6c18b7f_prof);

        
        $__internal_808022d6ebb2f3a855fdd641ec84de9e7eda8779c5fc26905198d696070c5921->leave($__internal_808022d6ebb2f3a855fdd641ec84de9e7eda8779c5fc26905198d696070c5921_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
