<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_9c7a17c8476bb2d0059571037e75a3b9fe2b744715362ce8bb387a3ed0284f68 extends Twig_Template
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
        $__internal_aa60ba65cb31505ef61602e397bd95f74022875a54f31fe9511db008a7f4b982 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aa60ba65cb31505ef61602e397bd95f74022875a54f31fe9511db008a7f4b982->enter($__internal_aa60ba65cb31505ef61602e397bd95f74022875a54f31fe9511db008a7f4b982_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_74916399e33847ab9356da2cc4d730bb4232ca7517c6ea6d78d816018fa42487 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74916399e33847ab9356da2cc4d730bb4232ca7517c6ea6d78d816018fa42487->enter($__internal_74916399e33847ab9356da2cc4d730bb4232ca7517c6ea6d78d816018fa42487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_aa60ba65cb31505ef61602e397bd95f74022875a54f31fe9511db008a7f4b982->leave($__internal_aa60ba65cb31505ef61602e397bd95f74022875a54f31fe9511db008a7f4b982_prof);

        
        $__internal_74916399e33847ab9356da2cc4d730bb4232ca7517c6ea6d78d816018fa42487->leave($__internal_74916399e33847ab9356da2cc4d730bb4232ca7517c6ea6d78d816018fa42487_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
