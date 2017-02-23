<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_f7a1867220619bd9676a3ea43e9d53ed6698e610bd88444ce15b6cb6fe68773a extends Twig_Template
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
        $__internal_94837e649cfcef70185a7006c02c7010538316c3e9b3cd204ba83894013a2b04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94837e649cfcef70185a7006c02c7010538316c3e9b3cd204ba83894013a2b04->enter($__internal_94837e649cfcef70185a7006c02c7010538316c3e9b3cd204ba83894013a2b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_f7ec77fb37e0d0390348665e0362caf605625db27b7b168f1c7e278d4860b8f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7ec77fb37e0d0390348665e0362caf605625db27b7b168f1c7e278d4860b8f0->enter($__internal_f7ec77fb37e0d0390348665e0362caf605625db27b7b168f1c7e278d4860b8f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_94837e649cfcef70185a7006c02c7010538316c3e9b3cd204ba83894013a2b04->leave($__internal_94837e649cfcef70185a7006c02c7010538316c3e9b3cd204ba83894013a2b04_prof);

        
        $__internal_f7ec77fb37e0d0390348665e0362caf605625db27b7b168f1c7e278d4860b8f0->leave($__internal_f7ec77fb37e0d0390348665e0362caf605625db27b7b168f1c7e278d4860b8f0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}
