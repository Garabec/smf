<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_f9b27fbafe9f37a60c8342fabd494eb9aeac540d576e7ee08d2d2713ad06ca26 extends Twig_Template
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
        $__internal_da7b1ade6a7cf6ae707e8bda7d1c6e08eff8e586c4a4f3b8bea83430f5cd61ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da7b1ade6a7cf6ae707e8bda7d1c6e08eff8e586c4a4f3b8bea83430f5cd61ff->enter($__internal_da7b1ade6a7cf6ae707e8bda7d1c6e08eff8e586c4a4f3b8bea83430f5cd61ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_40960230baacc3bc6ce41fc75314434346b018867a45203d3896c29ddfee05a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_40960230baacc3bc6ce41fc75314434346b018867a45203d3896c29ddfee05a5->enter($__internal_40960230baacc3bc6ce41fc75314434346b018867a45203d3896c29ddfee05a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_da7b1ade6a7cf6ae707e8bda7d1c6e08eff8e586c4a4f3b8bea83430f5cd61ff->leave($__internal_da7b1ade6a7cf6ae707e8bda7d1c6e08eff8e586c4a4f3b8bea83430f5cd61ff_prof);

        
        $__internal_40960230baacc3bc6ce41fc75314434346b018867a45203d3896c29ddfee05a5->leave($__internal_40960230baacc3bc6ce41fc75314434346b018867a45203d3896c29ddfee05a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
