<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_7398657e1c875a8beededc8972ed3edb8ed5ed5141948d908f4faea145339e5b extends Twig_Template
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
        $__internal_fe7325891146ea8e8ddb944f9a4ecf0033f8bc28397f58ccb769ae1fc1f7de17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fe7325891146ea8e8ddb944f9a4ecf0033f8bc28397f58ccb769ae1fc1f7de17->enter($__internal_fe7325891146ea8e8ddb944f9a4ecf0033f8bc28397f58ccb769ae1fc1f7de17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_3a411a6ba6fd9f2075f272cad9ca527312fa308a3e5ff4faeb9410dcbaabc970 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a411a6ba6fd9f2075f272cad9ca527312fa308a3e5ff4faeb9410dcbaabc970->enter($__internal_3a411a6ba6fd9f2075f272cad9ca527312fa308a3e5ff4faeb9410dcbaabc970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_fe7325891146ea8e8ddb944f9a4ecf0033f8bc28397f58ccb769ae1fc1f7de17->leave($__internal_fe7325891146ea8e8ddb944f9a4ecf0033f8bc28397f58ccb769ae1fc1f7de17_prof);

        
        $__internal_3a411a6ba6fd9f2075f272cad9ca527312fa308a3e5ff4faeb9410dcbaabc970->leave($__internal_3a411a6ba6fd9f2075f272cad9ca527312fa308a3e5ff4faeb9410dcbaabc970_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
