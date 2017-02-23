<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_8c74eba317be288bf7ade78ef20e43fb7a9e3d896237be0f0518cddf496cd65d extends Twig_Template
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
        $__internal_551314fb2f21b2f22e1e41dd28cdc18a86846a9d681e00faf6d6cfa1f144a38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_551314fb2f21b2f22e1e41dd28cdc18a86846a9d681e00faf6d6cfa1f144a38c->enter($__internal_551314fb2f21b2f22e1e41dd28cdc18a86846a9d681e00faf6d6cfa1f144a38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_76a3db5ae93d9de7915475156c595ddea191bd4b87ece26dc25ca15b6efcfed6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76a3db5ae93d9de7915475156c595ddea191bd4b87ece26dc25ca15b6efcfed6->enter($__internal_76a3db5ae93d9de7915475156c595ddea191bd4b87ece26dc25ca15b6efcfed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_551314fb2f21b2f22e1e41dd28cdc18a86846a9d681e00faf6d6cfa1f144a38c->leave($__internal_551314fb2f21b2f22e1e41dd28cdc18a86846a9d681e00faf6d6cfa1f144a38c_prof);

        
        $__internal_76a3db5ae93d9de7915475156c595ddea191bd4b87ece26dc25ca15b6efcfed6->leave($__internal_76a3db5ae93d9de7915475156c595ddea191bd4b87ece26dc25ca15b6efcfed6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}
