<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_2459af063e5adedd70fb80a8b6c351629c89fd50f21429123840cf509e19757c extends Twig_Template
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
        $__internal_cc74b1105503f544484fa8086f39b428e2d1c67cc79313b1ed6bc67f283094aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc74b1105503f544484fa8086f39b428e2d1c67cc79313b1ed6bc67f283094aa->enter($__internal_cc74b1105503f544484fa8086f39b428e2d1c67cc79313b1ed6bc67f283094aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_b6d84adbe86d60cfaeaf6de5f2a5d458897c0264de156da1d34b8fb6d6d7f444 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6d84adbe86d60cfaeaf6de5f2a5d458897c0264de156da1d34b8fb6d6d7f444->enter($__internal_b6d84adbe86d60cfaeaf6de5f2a5d458897c0264de156da1d34b8fb6d6d7f444_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_cc74b1105503f544484fa8086f39b428e2d1c67cc79313b1ed6bc67f283094aa->leave($__internal_cc74b1105503f544484fa8086f39b428e2d1c67cc79313b1ed6bc67f283094aa_prof);

        
        $__internal_b6d84adbe86d60cfaeaf6de5f2a5d458897c0264de156da1d34b8fb6d6d7f444->leave($__internal_b6d84adbe86d60cfaeaf6de5f2a5d458897c0264de156da1d34b8fb6d6d7f444_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
