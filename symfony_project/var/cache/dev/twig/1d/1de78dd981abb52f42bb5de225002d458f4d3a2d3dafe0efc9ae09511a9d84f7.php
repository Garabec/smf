<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_6774218eb6a5a486dac4da706f811628e20c19be55042cc4627dc88794e8ce5e extends Twig_Template
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
        $__internal_ff006e3a638a361fc2ec91713c5728ed8eab69665ed96c823499daa270fc95b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff006e3a638a361fc2ec91713c5728ed8eab69665ed96c823499daa270fc95b2->enter($__internal_ff006e3a638a361fc2ec91713c5728ed8eab69665ed96c823499daa270fc95b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_785adfee5381fbbcdedbaaf68e694c68d78e0169428c40fd201727eed246a0c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785adfee5381fbbcdedbaaf68e694c68d78e0169428c40fd201727eed246a0c9->enter($__internal_785adfee5381fbbcdedbaaf68e694c68d78e0169428c40fd201727eed246a0c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_ff006e3a638a361fc2ec91713c5728ed8eab69665ed96c823499daa270fc95b2->leave($__internal_ff006e3a638a361fc2ec91713c5728ed8eab69665ed96c823499daa270fc95b2_prof);

        
        $__internal_785adfee5381fbbcdedbaaf68e694c68d78e0169428c40fd201727eed246a0c9->leave($__internal_785adfee5381fbbcdedbaaf68e694c68d78e0169428c40fd201727eed246a0c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
