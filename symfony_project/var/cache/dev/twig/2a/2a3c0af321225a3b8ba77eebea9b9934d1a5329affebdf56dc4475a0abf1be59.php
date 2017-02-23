<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_4f07dc9e890ff18fe6b941831389faa1cda91da3a1e4ba0105c7c5cd3493b95d extends Twig_Template
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
        $__internal_e91acf21cc4b98b3a95460aa3dadbbf8c6c21f0552960b4cd9a376779d0fbd15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e91acf21cc4b98b3a95460aa3dadbbf8c6c21f0552960b4cd9a376779d0fbd15->enter($__internal_e91acf21cc4b98b3a95460aa3dadbbf8c6c21f0552960b4cd9a376779d0fbd15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_318667addfc8d65a3da98f9dc57947efc76607143c2fcfe463f532e24a482b7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_318667addfc8d65a3da98f9dc57947efc76607143c2fcfe463f532e24a482b7c->enter($__internal_318667addfc8d65a3da98f9dc57947efc76607143c2fcfe463f532e24a482b7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_e91acf21cc4b98b3a95460aa3dadbbf8c6c21f0552960b4cd9a376779d0fbd15->leave($__internal_e91acf21cc4b98b3a95460aa3dadbbf8c6c21f0552960b4cd9a376779d0fbd15_prof);

        
        $__internal_318667addfc8d65a3da98f9dc57947efc76607143c2fcfe463f532e24a482b7c->leave($__internal_318667addfc8d65a3da98f9dc57947efc76607143c2fcfe463f532e24a482b7c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
