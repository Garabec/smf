<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_3e361b5d8dfa3bd28b58639544312c46e89483d20b9a8e585327448a76455b77 extends Twig_Template
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
        $__internal_d32698541e068e9033202b2e06545242e8a01732c2760f21542affb650288d10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d32698541e068e9033202b2e06545242e8a01732c2760f21542affb650288d10->enter($__internal_d32698541e068e9033202b2e06545242e8a01732c2760f21542affb650288d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_1f7f3e034cd4fd23d43734f817ea2207fa5c51544641739dbfc2e98f84c0069b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f7f3e034cd4fd23d43734f817ea2207fa5c51544641739dbfc2e98f84c0069b->enter($__internal_1f7f3e034cd4fd23d43734f817ea2207fa5c51544641739dbfc2e98f84c0069b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_d32698541e068e9033202b2e06545242e8a01732c2760f21542affb650288d10->leave($__internal_d32698541e068e9033202b2e06545242e8a01732c2760f21542affb650288d10_prof);

        
        $__internal_1f7f3e034cd4fd23d43734f817ea2207fa5c51544641739dbfc2e98f84c0069b->leave($__internal_1f7f3e034cd4fd23d43734f817ea2207fa5c51544641739dbfc2e98f84c0069b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
