<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_50bc65675732f797fa1fc543a326ff54e76b862fbdb3f518558158d9876fb6ba extends Twig_Template
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
        $__internal_66c4f7768670a57b8e38d7bb36a138662b1043575d7e528fffc87be4eddb2ec8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66c4f7768670a57b8e38d7bb36a138662b1043575d7e528fffc87be4eddb2ec8->enter($__internal_66c4f7768670a57b8e38d7bb36a138662b1043575d7e528fffc87be4eddb2ec8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_7711780f4c9ce515c537ab0b51686abf464336152d5cde24a5f629d363d1276b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7711780f4c9ce515c537ab0b51686abf464336152d5cde24a5f629d363d1276b->enter($__internal_7711780f4c9ce515c537ab0b51686abf464336152d5cde24a5f629d363d1276b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_66c4f7768670a57b8e38d7bb36a138662b1043575d7e528fffc87be4eddb2ec8->leave($__internal_66c4f7768670a57b8e38d7bb36a138662b1043575d7e528fffc87be4eddb2ec8_prof);

        
        $__internal_7711780f4c9ce515c537ab0b51686abf464336152d5cde24a5f629d363d1276b->leave($__internal_7711780f4c9ce515c537ab0b51686abf464336152d5cde24a5f629d363d1276b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/home/ubuntu/workspace/symfony_project/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
