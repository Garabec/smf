<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_18dcf4bd50f8d2dfd6040d2fe59c74a46843a23480af22890819b63c2ef6b17a extends Twig_Template
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
        $__internal_c4d2487134c51bf4f0c6493c6884ff2e871b4bd24e73cb4a4055f0d45d31cfde = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c4d2487134c51bf4f0c6493c6884ff2e871b4bd24e73cb4a4055f0d45d31cfde->enter($__internal_c4d2487134c51bf4f0c6493c6884ff2e871b4bd24e73cb4a4055f0d45d31cfde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6252acb53ada7d3ac4bca2323728a310acf18d10dd73d225b99217c91dd690c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6252acb53ada7d3ac4bca2323728a310acf18d10dd73d225b99217c91dd690c8->enter($__internal_6252acb53ada7d3ac4bca2323728a310acf18d10dd73d225b99217c91dd690c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c4d2487134c51bf4f0c6493c6884ff2e871b4bd24e73cb4a4055f0d45d31cfde->leave($__internal_c4d2487134c51bf4f0c6493c6884ff2e871b4bd24e73cb4a4055f0d45d31cfde_prof);

        
        $__internal_6252acb53ada7d3ac4bca2323728a310acf18d10dd73d225b99217c91dd690c8->leave($__internal_6252acb53ada7d3ac4bca2323728a310acf18d10dd73d225b99217c91dd690c8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
