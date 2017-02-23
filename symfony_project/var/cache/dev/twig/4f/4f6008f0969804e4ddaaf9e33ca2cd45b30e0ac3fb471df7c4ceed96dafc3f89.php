<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_34210a603256fb6bfb2118b2f52b7a7660c6d126920ba048c0f7308f1d547b42 extends Twig_Template
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
        $__internal_6d182f32ed80ae914e9f16abb9e3fde64010cb2bb90235abff80794a5a45fedc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d182f32ed80ae914e9f16abb9e3fde64010cb2bb90235abff80794a5a45fedc->enter($__internal_6d182f32ed80ae914e9f16abb9e3fde64010cb2bb90235abff80794a5a45fedc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_0571d54247ce92747d533e50e9f450f78881b09e3535bd5f25dc28870f8b701e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0571d54247ce92747d533e50e9f450f78881b09e3535bd5f25dc28870f8b701e->enter($__internal_0571d54247ce92747d533e50e9f450f78881b09e3535bd5f25dc28870f8b701e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_6d182f32ed80ae914e9f16abb9e3fde64010cb2bb90235abff80794a5a45fedc->leave($__internal_6d182f32ed80ae914e9f16abb9e3fde64010cb2bb90235abff80794a5a45fedc_prof);

        
        $__internal_0571d54247ce92747d533e50e9f450f78881b09e3535bd5f25dc28870f8b701e->leave($__internal_0571d54247ce92747d533e50e9f450f78881b09e3535bd5f25dc28870f8b701e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
