<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b361422222539f6f94563d364216aa202d9e13d7bf6f1208019f78d1390ba864 extends Twig_Template
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
        $__internal_d2def38add33484b6ae9aef74668dcf7418cb7bab44466fb8970ee72462dc521 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2def38add33484b6ae9aef74668dcf7418cb7bab44466fb8970ee72462dc521->enter($__internal_d2def38add33484b6ae9aef74668dcf7418cb7bab44466fb8970ee72462dc521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_9cc7e65d49e4984d4a208c6ab7e9a9cb5aa1adb65b281195d02d92ce14eb987b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cc7e65d49e4984d4a208c6ab7e9a9cb5aa1adb65b281195d02d92ce14eb987b->enter($__internal_9cc7e65d49e4984d4a208c6ab7e9a9cb5aa1adb65b281195d02d92ce14eb987b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_d2def38add33484b6ae9aef74668dcf7418cb7bab44466fb8970ee72462dc521->leave($__internal_d2def38add33484b6ae9aef74668dcf7418cb7bab44466fb8970ee72462dc521_prof);

        
        $__internal_9cc7e65d49e4984d4a208c6ab7e9a9cb5aa1adb65b281195d02d92ce14eb987b->leave($__internal_9cc7e65d49e4984d4a208c6ab7e9a9cb5aa1adb65b281195d02d92ce14eb987b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
