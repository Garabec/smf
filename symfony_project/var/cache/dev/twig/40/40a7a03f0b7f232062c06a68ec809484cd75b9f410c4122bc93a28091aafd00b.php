<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d0bf4d150e0ec0de8aad5ac1927183f751af4f2328fc0d12c09145a25d43e779 extends Twig_Template
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
        $__internal_ea58208b7fb75d34f993d615e255cd2731ada0624b82d11f9c900b68f74810ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea58208b7fb75d34f993d615e255cd2731ada0624b82d11f9c900b68f74810ed->enter($__internal_ea58208b7fb75d34f993d615e255cd2731ada0624b82d11f9c900b68f74810ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_7f92b0c62d75663038dc6b282deb4732aa06cc4766b1b217c2065fa6f1298a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f92b0c62d75663038dc6b282deb4732aa06cc4766b1b217c2065fa6f1298a5b->enter($__internal_7f92b0c62d75663038dc6b282deb4732aa06cc4766b1b217c2065fa6f1298a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_ea58208b7fb75d34f993d615e255cd2731ada0624b82d11f9c900b68f74810ed->leave($__internal_ea58208b7fb75d34f993d615e255cd2731ada0624b82d11f9c900b68f74810ed_prof);

        
        $__internal_7f92b0c62d75663038dc6b282deb4732aa06cc4766b1b217c2065fa6f1298a5b->leave($__internal_7f92b0c62d75663038dc6b282deb4732aa06cc4766b1b217c2065fa6f1298a5b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
