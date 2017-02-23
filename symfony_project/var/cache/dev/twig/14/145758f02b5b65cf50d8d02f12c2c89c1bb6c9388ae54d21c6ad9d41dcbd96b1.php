<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_81969ebf16d28c57b1cc9ba7e1a1d9bb546a2ba473cf2cb6acf9a64cfd19cc21 extends Twig_Template
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
        $__internal_281123c9faafd60772f5135edbd0bfd0c77fa10199666f8aa2cb999d4a024d48 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_281123c9faafd60772f5135edbd0bfd0c77fa10199666f8aa2cb999d4a024d48->enter($__internal_281123c9faafd60772f5135edbd0bfd0c77fa10199666f8aa2cb999d4a024d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_2484b1e2d466bae7535f54e2d8dfbb8062ab9d98ab628b86209e7c35419c6d40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2484b1e2d466bae7535f54e2d8dfbb8062ab9d98ab628b86209e7c35419c6d40->enter($__internal_2484b1e2d466bae7535f54e2d8dfbb8062ab9d98ab628b86209e7c35419c6d40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_281123c9faafd60772f5135edbd0bfd0c77fa10199666f8aa2cb999d4a024d48->leave($__internal_281123c9faafd60772f5135edbd0bfd0c77fa10199666f8aa2cb999d4a024d48_prof);

        
        $__internal_2484b1e2d466bae7535f54e2d8dfbb8062ab9d98ab628b86209e7c35419c6d40->leave($__internal_2484b1e2d466bae7535f54e2d8dfbb8062ab9d98ab628b86209e7c35419c6d40_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
