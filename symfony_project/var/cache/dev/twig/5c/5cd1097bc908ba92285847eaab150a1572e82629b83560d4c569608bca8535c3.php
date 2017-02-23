<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_efa42914988465c87bec9b905cac86342421122f44d389c500962668127a4c3e extends Twig_Template
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
        $__internal_41ccf75676b9481d4af6f8e8fcd03f88adb23ff6b89b011a4798a3e49bc24d25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ccf75676b9481d4af6f8e8fcd03f88adb23ff6b89b011a4798a3e49bc24d25->enter($__internal_41ccf75676b9481d4af6f8e8fcd03f88adb23ff6b89b011a4798a3e49bc24d25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_9a30f2fe15ecdf77ee0890052f97d09ceb6c925c4e4557ddd2469bb8646c761e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a30f2fe15ecdf77ee0890052f97d09ceb6c925c4e4557ddd2469bb8646c761e->enter($__internal_9a30f2fe15ecdf77ee0890052f97d09ceb6c925c4e4557ddd2469bb8646c761e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_41ccf75676b9481d4af6f8e8fcd03f88adb23ff6b89b011a4798a3e49bc24d25->leave($__internal_41ccf75676b9481d4af6f8e8fcd03f88adb23ff6b89b011a4798a3e49bc24d25_prof);

        
        $__internal_9a30f2fe15ecdf77ee0890052f97d09ceb6c925c4e4557ddd2469bb8646c761e->leave($__internal_9a30f2fe15ecdf77ee0890052f97d09ceb6c925c4e4557ddd2469bb8646c761e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
