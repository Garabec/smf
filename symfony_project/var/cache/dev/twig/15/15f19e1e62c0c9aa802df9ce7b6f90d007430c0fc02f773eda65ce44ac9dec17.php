<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_2e24a38981590a3970f303c4cd963ba1eed317d1346310fb345f7d943a529c4c extends Twig_Template
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
        $__internal_660c9e9c5642165c324d14358011c2c7a1730b85ee9f430555ebf3ca262b1cf3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_660c9e9c5642165c324d14358011c2c7a1730b85ee9f430555ebf3ca262b1cf3->enter($__internal_660c9e9c5642165c324d14358011c2c7a1730b85ee9f430555ebf3ca262b1cf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_a55bea2a342d34477571c66bb55a13b65c7396e20a38ef176c2b3e2b363f3e64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a55bea2a342d34477571c66bb55a13b65c7396e20a38ef176c2b3e2b363f3e64->enter($__internal_a55bea2a342d34477571c66bb55a13b65c7396e20a38ef176c2b3e2b363f3e64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_660c9e9c5642165c324d14358011c2c7a1730b85ee9f430555ebf3ca262b1cf3->leave($__internal_660c9e9c5642165c324d14358011c2c7a1730b85ee9f430555ebf3ca262b1cf3_prof);

        
        $__internal_a55bea2a342d34477571c66bb55a13b65c7396e20a38ef176c2b3e2b363f3e64->leave($__internal_a55bea2a342d34477571c66bb55a13b65c7396e20a38ef176c2b3e2b363f3e64_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
