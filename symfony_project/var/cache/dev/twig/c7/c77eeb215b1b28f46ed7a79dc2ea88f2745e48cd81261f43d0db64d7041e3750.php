<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_52707d071390e5811e19c5e56d39455729f392ab0da19a7c786a3f59e1c66f04 extends Twig_Template
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
        $__internal_211b9695a9012fbfc6fd57e84e33cb44093cb3beb40a28ba3a278e229b12cd53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_211b9695a9012fbfc6fd57e84e33cb44093cb3beb40a28ba3a278e229b12cd53->enter($__internal_211b9695a9012fbfc6fd57e84e33cb44093cb3beb40a28ba3a278e229b12cd53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_27594c36982cb5d344e625c89692d6f164ef886ae92a2129df5f4c93fbf13c18 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27594c36982cb5d344e625c89692d6f164ef886ae92a2129df5f4c93fbf13c18->enter($__internal_27594c36982cb5d344e625c89692d6f164ef886ae92a2129df5f4c93fbf13c18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_211b9695a9012fbfc6fd57e84e33cb44093cb3beb40a28ba3a278e229b12cd53->leave($__internal_211b9695a9012fbfc6fd57e84e33cb44093cb3beb40a28ba3a278e229b12cd53_prof);

        
        $__internal_27594c36982cb5d344e625c89692d6f164ef886ae92a2129df5f4c93fbf13c18->leave($__internal_27594c36982cb5d344e625c89692d6f164ef886ae92a2129df5f4c93fbf13c18_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}
