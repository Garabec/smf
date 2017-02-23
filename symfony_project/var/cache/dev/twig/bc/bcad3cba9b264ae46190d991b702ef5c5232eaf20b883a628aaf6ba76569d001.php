<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_ae6a5df481e32d80aa16975a05ac78d2f463c1c31b31ae841c91075b763a7bf7 extends Twig_Template
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
        $__internal_91147a99db403520ad8834c20ad38d5e72432f1a64415023c9195db5402d15c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91147a99db403520ad8834c20ad38d5e72432f1a64415023c9195db5402d15c6->enter($__internal_91147a99db403520ad8834c20ad38d5e72432f1a64415023c9195db5402d15c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_4a4f0a974a94d2778c95f053616abb6a959fa8922989ef7b6b34d1846f87f461 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a4f0a974a94d2778c95f053616abb6a959fa8922989ef7b6b34d1846f87f461->enter($__internal_4a4f0a974a94d2778c95f053616abb6a959fa8922989ef7b6b34d1846f87f461_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_91147a99db403520ad8834c20ad38d5e72432f1a64415023c9195db5402d15c6->leave($__internal_91147a99db403520ad8834c20ad38d5e72432f1a64415023c9195db5402d15c6_prof);

        
        $__internal_4a4f0a974a94d2778c95f053616abb6a959fa8922989ef7b6b34d1846f87f461->leave($__internal_4a4f0a974a94d2778c95f053616abb6a959fa8922989ef7b6b34d1846f87f461_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
