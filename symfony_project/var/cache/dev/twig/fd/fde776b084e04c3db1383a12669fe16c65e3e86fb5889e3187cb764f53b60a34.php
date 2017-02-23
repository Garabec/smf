<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_c90c972e0f98d17c3b4948b2beecee2bea8401743fb82bed3912282d3fcbcb6f extends Twig_Template
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
        $__internal_94892e1fb775c4df4b7c5b09fb04d9fa22b5ff839d2843a75c549d47ff17664f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94892e1fb775c4df4b7c5b09fb04d9fa22b5ff839d2843a75c549d47ff17664f->enter($__internal_94892e1fb775c4df4b7c5b09fb04d9fa22b5ff839d2843a75c549d47ff17664f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a2a25412d2f65798e0b2074b879e284d3fe8abc745f2385b4ef2398e1b96ab55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2a25412d2f65798e0b2074b879e284d3fe8abc745f2385b4ef2398e1b96ab55->enter($__internal_a2a25412d2f65798e0b2074b879e284d3fe8abc745f2385b4ef2398e1b96ab55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_94892e1fb775c4df4b7c5b09fb04d9fa22b5ff839d2843a75c549d47ff17664f->leave($__internal_94892e1fb775c4df4b7c5b09fb04d9fa22b5ff839d2843a75c549d47ff17664f_prof);

        
        $__internal_a2a25412d2f65798e0b2074b879e284d3fe8abc745f2385b4ef2398e1b96ab55->leave($__internal_a2a25412d2f65798e0b2074b879e284d3fe8abc745f2385b4ef2398e1b96ab55_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}
