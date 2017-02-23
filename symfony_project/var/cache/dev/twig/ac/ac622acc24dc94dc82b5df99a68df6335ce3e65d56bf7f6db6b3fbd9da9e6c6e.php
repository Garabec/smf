<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c10cf70f033ecf96c3fdcf4f77a5ec0e0b075c2b830c52e9c1600c678778f20a extends Twig_Template
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
        $__internal_695ae1f42164f0b14ed09b7b33fc86362a8cdb6f18e97eb4418d83c586aee37a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_695ae1f42164f0b14ed09b7b33fc86362a8cdb6f18e97eb4418d83c586aee37a->enter($__internal_695ae1f42164f0b14ed09b7b33fc86362a8cdb6f18e97eb4418d83c586aee37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_1adebed3ac811c2f1de668ff5053366ca50f330e5880b6348e89ec6fea42f8dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1adebed3ac811c2f1de668ff5053366ca50f330e5880b6348e89ec6fea42f8dc->enter($__internal_1adebed3ac811c2f1de668ff5053366ca50f330e5880b6348e89ec6fea42f8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_695ae1f42164f0b14ed09b7b33fc86362a8cdb6f18e97eb4418d83c586aee37a->leave($__internal_695ae1f42164f0b14ed09b7b33fc86362a8cdb6f18e97eb4418d83c586aee37a_prof);

        
        $__internal_1adebed3ac811c2f1de668ff5053366ca50f330e5880b6348e89ec6fea42f8dc->leave($__internal_1adebed3ac811c2f1de668ff5053366ca50f330e5880b6348e89ec6fea42f8dc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
