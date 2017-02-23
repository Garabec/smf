<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_abbff604a29d986c66b494704456ffecf8291686fe163c131ea7a3937e064cf0 extends Twig_Template
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
        $__internal_e05f3ceb9a72aecc867e5e82cfe77ec2ee576385aad409a3f28ef1175ecc6c33 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e05f3ceb9a72aecc867e5e82cfe77ec2ee576385aad409a3f28ef1175ecc6c33->enter($__internal_e05f3ceb9a72aecc867e5e82cfe77ec2ee576385aad409a3f28ef1175ecc6c33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_b6c63cf0ca37480da94847b8c61cb9c9316a986ea6c154f5bbbbb4bfabaf4f14 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6c63cf0ca37480da94847b8c61cb9c9316a986ea6c154f5bbbbb4bfabaf4f14->enter($__internal_b6c63cf0ca37480da94847b8c61cb9c9316a986ea6c154f5bbbbb4bfabaf4f14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_e05f3ceb9a72aecc867e5e82cfe77ec2ee576385aad409a3f28ef1175ecc6c33->leave($__internal_e05f3ceb9a72aecc867e5e82cfe77ec2ee576385aad409a3f28ef1175ecc6c33_prof);

        
        $__internal_b6c63cf0ca37480da94847b8c61cb9c9316a986ea6c154f5bbbbb4bfabaf4f14->leave($__internal_b6c63cf0ca37480da94847b8c61cb9c9316a986ea6c154f5bbbbb4bfabaf4f14_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
