<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_801dbec70a2167c8bcee5d77af02963d4b0bdfb40bfc9a73389b2548af08b494 extends Twig_Template
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
        $__internal_135c3eb09f266ad07b267d5188114709fc6ee440548612439a6b7b130c30a9e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_135c3eb09f266ad07b267d5188114709fc6ee440548612439a6b7b130c30a9e5->enter($__internal_135c3eb09f266ad07b267d5188114709fc6ee440548612439a6b7b130c30a9e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_24450c4042882b7b317c30633cc4051e57aa65ec93eb4b6e3447b91b45794937 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24450c4042882b7b317c30633cc4051e57aa65ec93eb4b6e3447b91b45794937->enter($__internal_24450c4042882b7b317c30633cc4051e57aa65ec93eb4b6e3447b91b45794937_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_135c3eb09f266ad07b267d5188114709fc6ee440548612439a6b7b130c30a9e5->leave($__internal_135c3eb09f266ad07b267d5188114709fc6ee440548612439a6b7b130c30a9e5_prof);

        
        $__internal_24450c4042882b7b317c30633cc4051e57aa65ec93eb4b6e3447b91b45794937->leave($__internal_24450c4042882b7b317c30633cc4051e57aa65ec93eb4b6e3447b91b45794937_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
