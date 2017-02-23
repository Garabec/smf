<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_41498893b183159ec2234fb88e7b4394d771aa9e1067d7f83c0f2a71ddabdb9d extends Twig_Template
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
        $__internal_13e17850c3dbc9ab06ee4c44dd1ff1dd93576e6b6cdcc878d8d86256fda52c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13e17850c3dbc9ab06ee4c44dd1ff1dd93576e6b6cdcc878d8d86256fda52c6d->enter($__internal_13e17850c3dbc9ab06ee4c44dd1ff1dd93576e6b6cdcc878d8d86256fda52c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_5ea571c1acc0f9c1c22a4db6f6afcd786a012eb886013a8febafb4846e2da204 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ea571c1acc0f9c1c22a4db6f6afcd786a012eb886013a8febafb4846e2da204->enter($__internal_5ea571c1acc0f9c1c22a4db6f6afcd786a012eb886013a8febafb4846e2da204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_13e17850c3dbc9ab06ee4c44dd1ff1dd93576e6b6cdcc878d8d86256fda52c6d->leave($__internal_13e17850c3dbc9ab06ee4c44dd1ff1dd93576e6b6cdcc878d8d86256fda52c6d_prof);

        
        $__internal_5ea571c1acc0f9c1c22a4db6f6afcd786a012eb886013a8febafb4846e2da204->leave($__internal_5ea571c1acc0f9c1c22a4db6f6afcd786a012eb886013a8febafb4846e2da204_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
