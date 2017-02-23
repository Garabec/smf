<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_4f8c662b766f2b716ca4398913ae8b21e3f46194c1a213ee4d646f884c3c1810 extends Twig_Template
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
        $__internal_08ec4ba2f22754270b324f066d629568a008b5c013a3d4d7babdfbefd764d9f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08ec4ba2f22754270b324f066d629568a008b5c013a3d4d7babdfbefd764d9f6->enter($__internal_08ec4ba2f22754270b324f066d629568a008b5c013a3d4d7babdfbefd764d9f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_d6c2804ad3755c5adc17df4ee358e4abe18c9c3dfd8492df3ff458838bfd5ec7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c2804ad3755c5adc17df4ee358e4abe18c9c3dfd8492df3ff458838bfd5ec7->enter($__internal_d6c2804ad3755c5adc17df4ee358e4abe18c9c3dfd8492df3ff458838bfd5ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_08ec4ba2f22754270b324f066d629568a008b5c013a3d4d7babdfbefd764d9f6->leave($__internal_08ec4ba2f22754270b324f066d629568a008b5c013a3d4d7babdfbefd764d9f6_prof);

        
        $__internal_d6c2804ad3755c5adc17df4ee358e4abe18c9c3dfd8492df3ff458838bfd5ec7->leave($__internal_d6c2804ad3755c5adc17df4ee358e4abe18c9c3dfd8492df3ff458838bfd5ec7_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
