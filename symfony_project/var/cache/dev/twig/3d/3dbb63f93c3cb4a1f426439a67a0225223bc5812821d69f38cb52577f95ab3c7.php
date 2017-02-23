<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_fa969d26d10d7f4e130a9f49941e6792fb223b2e429490e0a5566f1a61d40aeb extends Twig_Template
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
        $__internal_3c38b134e9ccd42503b94dc731d8a4690d5679e0aad9b3399f2701a2e30fb777 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c38b134e9ccd42503b94dc731d8a4690d5679e0aad9b3399f2701a2e30fb777->enter($__internal_3c38b134e9ccd42503b94dc731d8a4690d5679e0aad9b3399f2701a2e30fb777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c87778e214d64e5fd47e79391e6f850cce2f3a99b3eddb191578c4a410685194 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87778e214d64e5fd47e79391e6f850cce2f3a99b3eddb191578c4a410685194->enter($__internal_c87778e214d64e5fd47e79391e6f850cce2f3a99b3eddb191578c4a410685194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_3c38b134e9ccd42503b94dc731d8a4690d5679e0aad9b3399f2701a2e30fb777->leave($__internal_3c38b134e9ccd42503b94dc731d8a4690d5679e0aad9b3399f2701a2e30fb777_prof);

        
        $__internal_c87778e214d64e5fd47e79391e6f850cce2f3a99b3eddb191578c4a410685194->leave($__internal_c87778e214d64e5fd47e79391e6f850cce2f3a99b3eddb191578c4a410685194_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
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
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}
