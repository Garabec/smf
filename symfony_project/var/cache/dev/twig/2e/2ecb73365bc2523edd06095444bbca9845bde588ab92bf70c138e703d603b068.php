<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_41ec7ccc60f30c7a73303f55d2a1523be81f0e68090d1545cd5785a7f6f003f9 extends Twig_Template
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
        $__internal_97be4bbd01bbd4f773e13dafbd1a1aef1be32e171a2172fd577f2cc0551cbe4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97be4bbd01bbd4f773e13dafbd1a1aef1be32e171a2172fd577f2cc0551cbe4c->enter($__internal_97be4bbd01bbd4f773e13dafbd1a1aef1be32e171a2172fd577f2cc0551cbe4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_003c4bfaeb239540421b8ea3e47224db665265168adf8f72fe8254c2b1063332 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003c4bfaeb239540421b8ea3e47224db665265168adf8f72fe8254c2b1063332->enter($__internal_003c4bfaeb239540421b8ea3e47224db665265168adf8f72fe8254c2b1063332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_97be4bbd01bbd4f773e13dafbd1a1aef1be32e171a2172fd577f2cc0551cbe4c->leave($__internal_97be4bbd01bbd4f773e13dafbd1a1aef1be32e171a2172fd577f2cc0551cbe4c_prof);

        
        $__internal_003c4bfaeb239540421b8ea3e47224db665265168adf8f72fe8254c2b1063332->leave($__internal_003c4bfaeb239540421b8ea3e47224db665265168adf8f72fe8254c2b1063332_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
