<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_9042fb91af084b4139bfd98d99c9f50297ccf233d4a6f2bea6438feecadfe624 extends Twig_Template
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
        $__internal_bae4f895cf94aec526010e225fb3e2b68db85a8f4094068fa5c5175c0fbe3d65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bae4f895cf94aec526010e225fb3e2b68db85a8f4094068fa5c5175c0fbe3d65->enter($__internal_bae4f895cf94aec526010e225fb3e2b68db85a8f4094068fa5c5175c0fbe3d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_633a93f8145270c08f3c6a7436c71717929318300cd63b06cde9a04fc1e8e2b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_633a93f8145270c08f3c6a7436c71717929318300cd63b06cde9a04fc1e8e2b3->enter($__internal_633a93f8145270c08f3c6a7436c71717929318300cd63b06cde9a04fc1e8e2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_bae4f895cf94aec526010e225fb3e2b68db85a8f4094068fa5c5175c0fbe3d65->leave($__internal_bae4f895cf94aec526010e225fb3e2b68db85a8f4094068fa5c5175c0fbe3d65_prof);

        
        $__internal_633a93f8145270c08f3c6a7436c71717929318300cd63b06cde9a04fc1e8e2b3->leave($__internal_633a93f8145270c08f3c6a7436c71717929318300cd63b06cde9a04fc1e8e2b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}
