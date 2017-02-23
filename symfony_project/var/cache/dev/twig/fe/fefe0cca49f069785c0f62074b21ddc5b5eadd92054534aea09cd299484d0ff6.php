<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_85dc0def7a102310406a40c2d3161d84832e225d8804834f2eb2f99ebd7ee22d extends Twig_Template
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
        $__internal_2ce261f61564106eb3961eac695605707f9edcb35af154f8553efb0657162259 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ce261f61564106eb3961eac695605707f9edcb35af154f8553efb0657162259->enter($__internal_2ce261f61564106eb3961eac695605707f9edcb35af154f8553efb0657162259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_9ec12dc0e3bb4fa74e10ff5ebcdfa0551089b2119d32bf29833b5a36628ed6f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ec12dc0e3bb4fa74e10ff5ebcdfa0551089b2119d32bf29833b5a36628ed6f3->enter($__internal_9ec12dc0e3bb4fa74e10ff5ebcdfa0551089b2119d32bf29833b5a36628ed6f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_2ce261f61564106eb3961eac695605707f9edcb35af154f8553efb0657162259->leave($__internal_2ce261f61564106eb3961eac695605707f9edcb35af154f8553efb0657162259_prof);

        
        $__internal_9ec12dc0e3bb4fa74e10ff5ebcdfa0551089b2119d32bf29833b5a36628ed6f3->leave($__internal_9ec12dc0e3bb4fa74e10ff5ebcdfa0551089b2119d32bf29833b5a36628ed6f3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}
