<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_38bc60e9abcbac7d0d915e847f0e2618475f3925e91c7233f8fdf035c86a5de1 extends Twig_Template
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
        $__internal_18a13b1fd38bedf7b0e7807be2ece2e3bf134414f305f6850642fd713dde0dc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a13b1fd38bedf7b0e7807be2ece2e3bf134414f305f6850642fd713dde0dc6->enter($__internal_18a13b1fd38bedf7b0e7807be2ece2e3bf134414f305f6850642fd713dde0dc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_2e1ae2301d1b233100eefb62e4cb700fbc9cfcb76aa4fb4d720e2372b5992cc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e1ae2301d1b233100eefb62e4cb700fbc9cfcb76aa4fb4d720e2372b5992cc1->enter($__internal_2e1ae2301d1b233100eefb62e4cb700fbc9cfcb76aa4fb4d720e2372b5992cc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_18a13b1fd38bedf7b0e7807be2ece2e3bf134414f305f6850642fd713dde0dc6->leave($__internal_18a13b1fd38bedf7b0e7807be2ece2e3bf134414f305f6850642fd713dde0dc6_prof);

        
        $__internal_2e1ae2301d1b233100eefb62e4cb700fbc9cfcb76aa4fb4d720e2372b5992cc1->leave($__internal_2e1ae2301d1b233100eefb62e4cb700fbc9cfcb76aa4fb4d720e2372b5992cc1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
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
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
