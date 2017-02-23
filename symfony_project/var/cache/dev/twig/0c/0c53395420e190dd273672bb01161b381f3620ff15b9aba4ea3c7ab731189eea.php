<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_413a421e80814edbcc76c54993ca4c991f03be1e65e888a47db6dbc25e9e1944 extends Twig_Template
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
        $__internal_e1f10c055ce47ca25ba39a14475885e7472476e328d16c9f90f38a84f1580a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f10c055ce47ca25ba39a14475885e7472476e328d16c9f90f38a84f1580a1b->enter($__internal_e1f10c055ce47ca25ba39a14475885e7472476e328d16c9f90f38a84f1580a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_4b4acbfdcbf6b1ca1ce5acd557c57ee35c7d31d810d9f6d0ff0719c7bacda335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b4acbfdcbf6b1ca1ce5acd557c57ee35c7d31d810d9f6d0ff0719c7bacda335->enter($__internal_4b4acbfdcbf6b1ca1ce5acd557c57ee35c7d31d810d9f6d0ff0719c7bacda335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_e1f10c055ce47ca25ba39a14475885e7472476e328d16c9f90f38a84f1580a1b->leave($__internal_e1f10c055ce47ca25ba39a14475885e7472476e328d16c9f90f38a84f1580a1b_prof);

        
        $__internal_4b4acbfdcbf6b1ca1ce5acd557c57ee35c7d31d810d9f6d0ff0719c7bacda335->leave($__internal_4b4acbfdcbf6b1ca1ce5acd557c57ee35c7d31d810d9f6d0ff0719c7bacda335_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}
