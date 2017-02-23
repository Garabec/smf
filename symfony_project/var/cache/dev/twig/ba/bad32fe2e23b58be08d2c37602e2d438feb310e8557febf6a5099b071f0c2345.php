<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_9b11616fddd8e1d15f5ff9f41824c5ec9bcf4b4eb2d6d26f8660ca5bd937ffac extends Twig_Template
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
        $__internal_782627007123e27ba5490250d8e07a4c983c8254cfa4b2bcacc3d38bb52cae84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_782627007123e27ba5490250d8e07a4c983c8254cfa4b2bcacc3d38bb52cae84->enter($__internal_782627007123e27ba5490250d8e07a4c983c8254cfa4b2bcacc3d38bb52cae84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_9842906efee4f87020f41d222842c308906a7d88b678b3d527d7b5130b91d518 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9842906efee4f87020f41d222842c308906a7d88b678b3d527d7b5130b91d518->enter($__internal_9842906efee4f87020f41d222842c308906a7d88b678b3d527d7b5130b91d518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_782627007123e27ba5490250d8e07a4c983c8254cfa4b2bcacc3d38bb52cae84->leave($__internal_782627007123e27ba5490250d8e07a4c983c8254cfa4b2bcacc3d38bb52cae84_prof);

        
        $__internal_9842906efee4f87020f41d222842c308906a7d88b678b3d527d7b5130b91d518->leave($__internal_9842906efee4f87020f41d222842c308906a7d88b678b3d527d7b5130b91d518_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/collection_widget.html.php");
    }
}
