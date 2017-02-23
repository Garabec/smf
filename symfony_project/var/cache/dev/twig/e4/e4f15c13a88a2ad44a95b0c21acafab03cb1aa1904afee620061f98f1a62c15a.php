<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_9ad9db4fe50c8c0ce798e928d0e1a52406a4b8e87147636fa31c730a8bc016d3 extends Twig_Template
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
        $__internal_041b91a467c5703d2cd37dcc545e98591696bc9940d52fdca91ca6f315704e5f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_041b91a467c5703d2cd37dcc545e98591696bc9940d52fdca91ca6f315704e5f->enter($__internal_041b91a467c5703d2cd37dcc545e98591696bc9940d52fdca91ca6f315704e5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        $__internal_e6e5221489163b82f3e35492a0fa11bbc1cac4fdbc993c344c75db6420529708 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6e5221489163b82f3e35492a0fa11bbc1cac4fdbc993c344c75db6420529708->enter($__internal_e6e5221489163b82f3e35492a0fa11bbc1cac4fdbc993c344c75db6420529708_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_041b91a467c5703d2cd37dcc545e98591696bc9940d52fdca91ca6f315704e5f->leave($__internal_041b91a467c5703d2cd37dcc545e98591696bc9940d52fdca91ca6f315704e5f_prof);

        
        $__internal_e6e5221489163b82f3e35492a0fa11bbc1cac4fdbc993c344c75db6420529708->leave($__internal_e6e5221489163b82f3e35492a0fa11bbc1cac4fdbc993c344c75db6420529708_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
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
        return new Twig_Source("<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
", "@Framework/Form/button_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_widget.html.php");
    }
}
