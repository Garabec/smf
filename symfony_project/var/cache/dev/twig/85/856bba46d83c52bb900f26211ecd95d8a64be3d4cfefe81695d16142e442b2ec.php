<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_8627aa3a6ba1a59882ec643d044ba5ce31d6118a6359aef98a8212f9a00dfe62 extends Twig_Template
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
        $__internal_6d07a16cc93051a27a60c41c2823ed7025ae0819897a1f627ec60a1c047070bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d07a16cc93051a27a60c41c2823ed7025ae0819897a1f627ec60a1c047070bd->enter($__internal_6d07a16cc93051a27a60c41c2823ed7025ae0819897a1f627ec60a1c047070bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_6ab1468ff4093d63890dadb7f0d06a569539c2ac096db36bb9f819255bf62c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab1468ff4093d63890dadb7f0d06a569539c2ac096db36bb9f819255bf62c42->enter($__internal_6ab1468ff4093d63890dadb7f0d06a569539c2ac096db36bb9f819255bf62c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_6d07a16cc93051a27a60c41c2823ed7025ae0819897a1f627ec60a1c047070bd->leave($__internal_6d07a16cc93051a27a60c41c2823ed7025ae0819897a1f627ec60a1c047070bd_prof);

        
        $__internal_6ab1468ff4093d63890dadb7f0d06a569539c2ac096db36bb9f819255bf62c42->leave($__internal_6ab1468ff4093d63890dadb7f0d06a569539c2ac096db36bb9f819255bf62c42_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/percent_widget.html.php");
    }
}
