<?php

/* CoreBundle::bootstrap_3_layout.html.twig */
class __TwigTemplate_a29d27843cfb49446d044d91f2c1db3dae5f6f87849c00f0b92322ce49e824a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "CoreBundle::bootstrap_3_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'button_widget' => array($this, 'block_button_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'form_label' => array($this, 'block_form_label'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0d662592740be871a5ac23894654615ae20a9193aa5e796321667a18587154a7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d662592740be871a5ac23894654615ae20a9193aa5e796321667a18587154a7->enter($__internal_0d662592740be871a5ac23894654615ae20a9193aa5e796321667a18587154a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::bootstrap_3_layout.html.twig"));

        $__internal_39c8ce801793ec8c2e21e0b1311b2dd0b9bc34078cc4e404aa5fdcde2f9ddd34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39c8ce801793ec8c2e21e0b1311b2dd0b9bc34078cc4e404aa5fdcde2f9ddd34->enter($__internal_39c8ce801793ec8c2e21e0b1311b2dd0b9bc34078cc4e404aa5fdcde2f9ddd34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreBundle::bootstrap_3_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('button_widget', $context, $blocks);
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('money_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 41
        echo "
";
        // line 42
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 55
        echo "
";
        // line 56
        $this->displayBlock('date_widget', $context, $blocks);
        // line 74
        echo "
";
        // line 75
        $this->displayBlock('time_widget', $context, $blocks);
        // line 90
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 128
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 152
        echo "
";
        // line 153
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 174
        echo "
";
        // line 176
        echo "
";
        // line 177
        $this->displayBlock('form_label', $context, $blocks);
        // line 181
        echo "
";
        // line 182
        $this->displayBlock('choice_label', $context, $blocks);
        // line 187
        echo "
";
        // line 188
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 191
        echo "
";
        // line 192
        $this->displayBlock('radio_label', $context, $blocks);
        // line 195
        echo "
";
        // line 196
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 220
        echo "
";
        // line 222
        echo "
";
        // line 223
        $this->displayBlock('form_row', $context, $blocks);
        // line 230
        echo "
";
        // line 231
        $this->displayBlock('button_row', $context, $blocks);
        // line 236
        echo "
";
        // line 237
        $this->displayBlock('choice_row', $context, $blocks);
        // line 241
        echo "
";
        // line 242
        $this->displayBlock('date_row', $context, $blocks);
        // line 246
        echo "
";
        // line 247
        $this->displayBlock('time_row', $context, $blocks);
        // line 251
        echo "
";
        // line 252
        $this->displayBlock('datetime_row', $context, $blocks);
        // line 256
        echo "
";
        // line 257
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 263
        echo "
";
        // line 264
        $this->displayBlock('radio_row', $context, $blocks);
        // line 270
        echo "
";
        // line 272
        echo "
";
        // line 273
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_0d662592740be871a5ac23894654615ae20a9193aa5e796321667a18587154a7->leave($__internal_0d662592740be871a5ac23894654615ae20a9193aa5e796321667a18587154a7_prof);

        
        $__internal_39c8ce801793ec8c2e21e0b1311b2dd0b9bc34078cc4e404aa5fdcde2f9ddd34->leave($__internal_39c8ce801793ec8c2e21e0b1311b2dd0b9bc34078cc4e404aa5fdcde2f9ddd34_prof);

    }

    // line 5
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_06a6297e47115256db8babebd803591923f6516cb8321af543f6a6e9cb2c21cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06a6297e47115256db8babebd803591923f6516cb8321af543f6a6e9cb2c21cd->enter($__internal_06a6297e47115256db8babebd803591923f6516cb8321af543f6a6e9cb2c21cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_65653cbb330304fed1a214e2e1fe4c1b356e178139ec9ec6f087eea5e4aaf781 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65653cbb330304fed1a214e2e1fe4c1b356e178139ec9ec6f087eea5e4aaf781->enter($__internal_65653cbb330304fed1a214e2e1fe4c1b356e178139ec9ec6f087eea5e4aaf781_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 6
        if (( !array_key_exists("type", $context) || !twig_in_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(0 => "file", 1 => "hidden")))) {
            // line 7
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        }
        // line 9
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_65653cbb330304fed1a214e2e1fe4c1b356e178139ec9ec6f087eea5e4aaf781->leave($__internal_65653cbb330304fed1a214e2e1fe4c1b356e178139ec9ec6f087eea5e4aaf781_prof);

        
        $__internal_06a6297e47115256db8babebd803591923f6516cb8321af543f6a6e9cb2c21cd->leave($__internal_06a6297e47115256db8babebd803591923f6516cb8321af543f6a6e9cb2c21cd_prof);

    }

    // line 12
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9923d59b04f6e6edcc0389c841aa0d6686fe37edc5dcf6b6c9d12638cde0c9c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9923d59b04f6e6edcc0389c841aa0d6686fe37edc5dcf6b6c9d12638cde0c9c8->enter($__internal_9923d59b04f6e6edcc0389c841aa0d6686fe37edc5dcf6b6c9d12638cde0c9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_522973f0cceb9320c69690090195fe188966857d4c51a302ed27148caa5d44b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_522973f0cceb9320c69690090195fe188966857d4c51a302ed27148caa5d44b6->enter($__internal_522973f0cceb9320c69690090195fe188966857d4c51a302ed27148caa5d44b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 13
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 14
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_522973f0cceb9320c69690090195fe188966857d4c51a302ed27148caa5d44b6->leave($__internal_522973f0cceb9320c69690090195fe188966857d4c51a302ed27148caa5d44b6_prof);

        
        $__internal_9923d59b04f6e6edcc0389c841aa0d6686fe37edc5dcf6b6c9d12638cde0c9c8->leave($__internal_9923d59b04f6e6edcc0389c841aa0d6686fe37edc5dcf6b6c9d12638cde0c9c8_prof);

    }

    // line 17
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_b9f1c39061ffddeda97baf5cde405c66378615c7afce071081b130b740a82b79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9f1c39061ffddeda97baf5cde405c66378615c7afce071081b130b740a82b79->enter($__internal_b9f1c39061ffddeda97baf5cde405c66378615c7afce071081b130b740a82b79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_23d7c5662a007bf417873ffd978858325b749215ddebc8f2d1d67f1f42459d5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23d7c5662a007bf417873ffd978858325b749215ddebc8f2d1d67f1f42459d5b->enter($__internal_23d7c5662a007bf417873ffd978858325b749215ddebc8f2d1d67f1f42459d5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 18
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "btn-default")) : ("btn-default")) . " btn"))));
        // line 19
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_23d7c5662a007bf417873ffd978858325b749215ddebc8f2d1d67f1f42459d5b->leave($__internal_23d7c5662a007bf417873ffd978858325b749215ddebc8f2d1d67f1f42459d5b_prof);

        
        $__internal_b9f1c39061ffddeda97baf5cde405c66378615c7afce071081b130b740a82b79->leave($__internal_b9f1c39061ffddeda97baf5cde405c66378615c7afce071081b130b740a82b79_prof);

    }

    // line 22
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_d7a249157244435c5509dd124edc5032572481904a64704d370ca20869ba377e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7a249157244435c5509dd124edc5032572481904a64704d370ca20869ba377e->enter($__internal_d7a249157244435c5509dd124edc5032572481904a64704d370ca20869ba377e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_47d764547521b2d04590a1ce1909c692884d8a47cd378c6389b9fb7461823c83 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47d764547521b2d04590a1ce1909c692884d8a47cd378c6389b9fb7461823c83->enter($__internal_47d764547521b2d04590a1ce1909c692884d8a47cd378c6389b9fb7461823c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 23
        echo "<div class=\"input-group\">
        ";
        // line 24
        $context["append"] = (is_string($__internal_68514f83f3948d2f4afd20ad726f5d1f31623e475fb3cdb69855b1046b810629 = (isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern"))) && is_string($__internal_7059d215bbc2f3c6f30fc766f227432ea20883fe04c13584b091edf877c98403 = "{{") && ('' === $__internal_7059d215bbc2f3c6f30fc766f227432ea20883fe04c13584b091edf877c98403 || 0 === strpos($__internal_68514f83f3948d2f4afd20ad726f5d1f31623e475fb3cdb69855b1046b810629, $__internal_7059d215bbc2f3c6f30fc766f227432ea20883fe04c13584b091edf877c98403)));
        // line 25
        echo "        ";
        if ( !(isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 26
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 28
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 29
        if ((isset($context["append"]) ? $context["append"] : $this->getContext($context, "append"))) {
            // line 30
            echo "            <span class=\"input-group-addon\">";
            echo twig_escape_filter($this->env, twig_replace_filter((isset($context["money_pattern"]) ? $context["money_pattern"] : $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
        ";
        }
        // line 32
        echo "    </div>";
        
        $__internal_47d764547521b2d04590a1ce1909c692884d8a47cd378c6389b9fb7461823c83->leave($__internal_47d764547521b2d04590a1ce1909c692884d8a47cd378c6389b9fb7461823c83_prof);

        
        $__internal_d7a249157244435c5509dd124edc5032572481904a64704d370ca20869ba377e->leave($__internal_d7a249157244435c5509dd124edc5032572481904a64704d370ca20869ba377e_prof);

    }

    // line 35
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_168855c7bb292fb1f55ae5a212ec0125ada9082e53576adbdc5661a3cd32a5c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_168855c7bb292fb1f55ae5a212ec0125ada9082e53576adbdc5661a3cd32a5c7->enter($__internal_168855c7bb292fb1f55ae5a212ec0125ada9082e53576adbdc5661a3cd32a5c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_e4e2ed7056b3623ee3b8c1c5904087288a18a2ec1be504e02b035cdd8358612b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e4e2ed7056b3623ee3b8c1c5904087288a18a2ec1be504e02b035cdd8358612b->enter($__internal_e4e2ed7056b3623ee3b8c1c5904087288a18a2ec1be504e02b035cdd8358612b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 36
        echo "<div class=\"input-group\">";
        // line 37
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 38
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_e4e2ed7056b3623ee3b8c1c5904087288a18a2ec1be504e02b035cdd8358612b->leave($__internal_e4e2ed7056b3623ee3b8c1c5904087288a18a2ec1be504e02b035cdd8358612b_prof);

        
        $__internal_168855c7bb292fb1f55ae5a212ec0125ada9082e53576adbdc5661a3cd32a5c7->leave($__internal_168855c7bb292fb1f55ae5a212ec0125ada9082e53576adbdc5661a3cd32a5c7_prof);

    }

    // line 42
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_f404ebf56942d32c0432647ff8c4034169f7b06676c7fd23b48bf95e10c51288 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f404ebf56942d32c0432647ff8c4034169f7b06676c7fd23b48bf95e10c51288->enter($__internal_f404ebf56942d32c0432647ff8c4034169f7b06676c7fd23b48bf95e10c51288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_07c3e2646729d2e568fc670751c0b0fdc279e57ed3cfbd5a2b07dca8f39c7da9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07c3e2646729d2e568fc670751c0b0fdc279e57ed3cfbd5a2b07dca8f39c7da9->enter($__internal_07c3e2646729d2e568fc670751c0b0fdc279e57ed3cfbd5a2b07dca8f39c7da9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 43
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 44
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 46
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 47
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 48
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'errors');
            // line 49
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'errors');
            // line 50
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 51
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 52
            echo "</div>";
        }
        
        $__internal_07c3e2646729d2e568fc670751c0b0fdc279e57ed3cfbd5a2b07dca8f39c7da9->leave($__internal_07c3e2646729d2e568fc670751c0b0fdc279e57ed3cfbd5a2b07dca8f39c7da9_prof);

        
        $__internal_f404ebf56942d32c0432647ff8c4034169f7b06676c7fd23b48bf95e10c51288->leave($__internal_f404ebf56942d32c0432647ff8c4034169f7b06676c7fd23b48bf95e10c51288_prof);

    }

    // line 56
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_0fc8ec4b3b8dc7bd0cdb3ab25054926e8baa065cb16cbb0d470668f0c39e9a0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0fc8ec4b3b8dc7bd0cdb3ab25054926e8baa065cb16cbb0d470668f0c39e9a0b->enter($__internal_0fc8ec4b3b8dc7bd0cdb3ab25054926e8baa065cb16cbb0d470668f0c39e9a0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_b4a18ced8df51cc4131d7f85191cd11e8ae88c607be8b6c98cf06a50b5948956 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4a18ced8df51cc4131d7f85191cd11e8ae88c607be8b6c98cf06a50b5948956->enter($__internal_b4a18ced8df51cc4131d7f85191cd11e8ae88c607be8b6c98cf06a50b5948956_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 57
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 58
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 60
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 61
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 62
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 64
            echo twig_replace_filter((isset($context["date_pattern"]) ? $context["date_pattern"] : $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 65
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 66
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 67
$this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 69
            if (( !array_key_exists("datetime", $context) ||  !(isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime")))) {
                // line 70
                echo "</div>";
            }
        }
        
        $__internal_b4a18ced8df51cc4131d7f85191cd11e8ae88c607be8b6c98cf06a50b5948956->leave($__internal_b4a18ced8df51cc4131d7f85191cd11e8ae88c607be8b6c98cf06a50b5948956_prof);

        
        $__internal_0fc8ec4b3b8dc7bd0cdb3ab25054926e8baa065cb16cbb0d470668f0c39e9a0b->leave($__internal_0fc8ec4b3b8dc7bd0cdb3ab25054926e8baa065cb16cbb0d470668f0c39e9a0b_prof);

    }

    // line 75
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_be13740dbc6bcda27730bcea127f29bd266fedc0a42ab61d1133cedecf06caef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be13740dbc6bcda27730bcea127f29bd266fedc0a42ab61d1133cedecf06caef->enter($__internal_be13740dbc6bcda27730bcea127f29bd266fedc0a42ab61d1133cedecf06caef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_678b6aac2722501baed38fead67af6652af046184463e2c1e439fcab27d0d6d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_678b6aac2722501baed38fead67af6652af046184463e2c1e439fcab27d0d6d8->enter($__internal_678b6aac2722501baed38fead67af6652af046184463e2c1e439fcab27d0d6d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 76
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 77
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 79
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 80
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 81
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 83
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hour", array()), 'widget');
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 84
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == (isset($context["datetime"]) ? $context["datetime"] : $this->getContext($context, "datetime"))))) {
                // line 85
                echo "</div>";
            }
        }
        
        $__internal_678b6aac2722501baed38fead67af6652af046184463e2c1e439fcab27d0d6d8->leave($__internal_678b6aac2722501baed38fead67af6652af046184463e2c1e439fcab27d0d6d8_prof);

        
        $__internal_be13740dbc6bcda27730bcea127f29bd266fedc0a42ab61d1133cedecf06caef->leave($__internal_be13740dbc6bcda27730bcea127f29bd266fedc0a42ab61d1133cedecf06caef_prof);

    }

    // line 90
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_1a6409a2e47817a5b83c87b310b683ce2ee67d0d0ebc762d04347bf645a23fe5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a6409a2e47817a5b83c87b310b683ce2ee67d0d0ebc762d04347bf645a23fe5->enter($__internal_1a6409a2e47817a5b83c87b310b683ce2ee67d0d0ebc762d04347bf645a23fe5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_64372430f1b5f4f3db547e89d7abf7bfcc79b7b302bfd2acbc4fbbefa6cc0bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64372430f1b5f4f3db547e89d7abf7bfcc79b7b302bfd2acbc4fbbefa6cc0bff->enter($__internal_64372430f1b5f4f3db547e89d7abf7bfcc79b7b302bfd2acbc4fbbefa6cc0bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 91
        if (((isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 95
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 96
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
            // line 97
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 98
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) ? $context["table_class"] : $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 101
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 102
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 103
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 104
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 105
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 106
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 107
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 108
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 112
            if ((isset($context["with_years"]) ? $context["with_years"] : $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 113
            if ((isset($context["with_months"]) ? $context["with_months"] : $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 114
            if ((isset($context["with_weeks"]) ? $context["with_weeks"] : $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 115
            if ((isset($context["with_days"]) ? $context["with_days"] : $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 116
            if ((isset($context["with_hours"]) ? $context["with_hours"] : $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 117
            if ((isset($context["with_minutes"]) ? $context["with_minutes"] : $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 118
            if ((isset($context["with_seconds"]) ? $context["with_seconds"] : $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 119
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 123
            if ((isset($context["with_invert"]) ? $context["with_invert"] : $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 124
            echo "</div>";
        }
        
        $__internal_64372430f1b5f4f3db547e89d7abf7bfcc79b7b302bfd2acbc4fbbefa6cc0bff->leave($__internal_64372430f1b5f4f3db547e89d7abf7bfcc79b7b302bfd2acbc4fbbefa6cc0bff_prof);

        
        $__internal_1a6409a2e47817a5b83c87b310b683ce2ee67d0d0ebc762d04347bf645a23fe5->leave($__internal_1a6409a2e47817a5b83c87b310b683ce2ee67d0d0ebc762d04347bf645a23fe5_prof);

    }

    // line 128
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_20f99acba1597fee2f883ab39630581e2611d8afdb9592287e6f5dc7d92ddbd8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20f99acba1597fee2f883ab39630581e2611d8afdb9592287e6f5dc7d92ddbd8->enter($__internal_20f99acba1597fee2f883ab39630581e2611d8afdb9592287e6f5dc7d92ddbd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_f00a40818f8bac55c4c94d46d6d37fbb5bd0d00a6eb68d2af1bb97e0e65d38e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00a40818f8bac55c4c94d46d6d37fbb5bd0d00a6eb68d2af1bb97e0e65d38e4->enter($__internal_f00a40818f8bac55c4c94d46d6d37fbb5bd0d00a6eb68d2af1bb97e0e65d38e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 129
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " form-control"))));
        // line 130
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_f00a40818f8bac55c4c94d46d6d37fbb5bd0d00a6eb68d2af1bb97e0e65d38e4->leave($__internal_f00a40818f8bac55c4c94d46d6d37fbb5bd0d00a6eb68d2af1bb97e0e65d38e4_prof);

        
        $__internal_20f99acba1597fee2f883ab39630581e2611d8afdb9592287e6f5dc7d92ddbd8->leave($__internal_20f99acba1597fee2f883ab39630581e2611d8afdb9592287e6f5dc7d92ddbd8_prof);

    }

    // line 133
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_8024f5bccad8e95f51e63fd015300ad8512be1db17e49a40273b4157a961c966 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8024f5bccad8e95f51e63fd015300ad8512be1db17e49a40273b4157a961c966->enter($__internal_8024f5bccad8e95f51e63fd015300ad8512be1db17e49a40273b4157a961c966_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_d5155a67e0ded15b218976e16abedc96729c862847c519567d29c27f68cf8ed1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5155a67e0ded15b218976e16abedc96729c862847c519567d29c27f68cf8ed1->enter($__internal_d5155a67e0ded15b218976e16abedc96729c862847c519567d29c27f68cf8ed1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 134
        if (twig_in_filter("-inline", (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) {
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 136
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 137
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 138
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 142
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 143
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 144
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 145
(isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 146
(isset($context["choice_translation_domain"]) ? $context["choice_translation_domain"] : $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 149
            echo "</div>";
        }
        
        $__internal_d5155a67e0ded15b218976e16abedc96729c862847c519567d29c27f68cf8ed1->leave($__internal_d5155a67e0ded15b218976e16abedc96729c862847c519567d29c27f68cf8ed1_prof);

        
        $__internal_8024f5bccad8e95f51e63fd015300ad8512be1db17e49a40273b4157a961c966->leave($__internal_8024f5bccad8e95f51e63fd015300ad8512be1db17e49a40273b4157a961c966_prof);

    }

    // line 153
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_e77d474d7bb377856b8c5aa187ee570ab01767ae0446cba6b706c0078037b0e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e77d474d7bb377856b8c5aa187ee570ab01767ae0446cba6b706c0078037b0e2->enter($__internal_e77d474d7bb377856b8c5aa187ee570ab01767ae0446cba6b706c0078037b0e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_20b90304f9e9c171de84e87ea467649591dc7cd0c87f6549fd69dffe2c38c892 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20b90304f9e9c171de84e87ea467649591dc7cd0c87f6549fd69dffe2c38c892->enter($__internal_20b90304f9e9c171de84e87ea467649591dc7cd0c87f6549fd69dffe2c38c892_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 154
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 155
        if (twig_in_filter("checkbox-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 156
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 158
            echo "<div class=\"checkbox\">";
            // line 159
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 160
            echo "</div>";
        }
        
        $__internal_20b90304f9e9c171de84e87ea467649591dc7cd0c87f6549fd69dffe2c38c892->leave($__internal_20b90304f9e9c171de84e87ea467649591dc7cd0c87f6549fd69dffe2c38c892_prof);

        
        $__internal_e77d474d7bb377856b8c5aa187ee570ab01767ae0446cba6b706c0078037b0e2->leave($__internal_e77d474d7bb377856b8c5aa187ee570ab01767ae0446cba6b706c0078037b0e2_prof);

    }

    // line 164
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_e4eb2dfd88427757b19245801dfc1c71001c9d1fc442a8902bcbd031b7c526ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4eb2dfd88427757b19245801dfc1c71001c9d1fc442a8902bcbd031b7c526ec->enter($__internal_e4eb2dfd88427757b19245801dfc1c71001c9d1fc442a8902bcbd031b7c526ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_a1b66244e363f848f45893f57fc2171af2a6d3e8c0e0f2ac0e736efc8e22edae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1b66244e363f848f45893f57fc2171af2a6d3e8c0e0f2ac0e736efc8e22edae->enter($__internal_a1b66244e363f848f45893f57fc2171af2a6d3e8c0e0f2ac0e736efc8e22edae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 165
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter((isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")), (($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")))) : ((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : (""))));
        // line 166
        if (twig_in_filter("radio-inline", (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class")))) {
            // line 167
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 169
            echo "<div class=\"radio\">";
            // line 170
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 171
            echo "</div>";
        }
        
        $__internal_a1b66244e363f848f45893f57fc2171af2a6d3e8c0e0f2ac0e736efc8e22edae->leave($__internal_a1b66244e363f848f45893f57fc2171af2a6d3e8c0e0f2ac0e736efc8e22edae_prof);

        
        $__internal_e4eb2dfd88427757b19245801dfc1c71001c9d1fc442a8902bcbd031b7c526ec->leave($__internal_e4eb2dfd88427757b19245801dfc1c71001c9d1fc442a8902bcbd031b7c526ec_prof);

    }

    // line 177
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_458b5df57a2f24dc3de123cd1440fa7ce6d1297bb7f9c147c787b8e0777abe0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_458b5df57a2f24dc3de123cd1440fa7ce6d1297bb7f9c147c787b8e0777abe0d->enter($__internal_458b5df57a2f24dc3de123cd1440fa7ce6d1297bb7f9c147c787b8e0777abe0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_8c767799cdbb7ebee2c44f9d4adc86ae974c15df2c32cb874d062d5a9e50837d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c767799cdbb7ebee2c44f9d4adc86ae974c15df2c32cb874d062d5a9e50837d->enter($__internal_8c767799cdbb7ebee2c44f9d4adc86ae974c15df2c32cb874d062d5a9e50837d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 178
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " control-label"))));
        // line 179
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_8c767799cdbb7ebee2c44f9d4adc86ae974c15df2c32cb874d062d5a9e50837d->leave($__internal_8c767799cdbb7ebee2c44f9d4adc86ae974c15df2c32cb874d062d5a9e50837d_prof);

        
        $__internal_458b5df57a2f24dc3de123cd1440fa7ce6d1297bb7f9c147c787b8e0777abe0d->leave($__internal_458b5df57a2f24dc3de123cd1440fa7ce6d1297bb7f9c147c787b8e0777abe0d_prof);

    }

    // line 182
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_bc5e1b810a1063108918fa83290bf80c20b4f5d698551661b8043cac49dd875b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5e1b810a1063108918fa83290bf80c20b4f5d698551661b8043cac49dd875b->enter($__internal_bc5e1b810a1063108918fa83290bf80c20b4f5d698551661b8043cac49dd875b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_32a65df28b5605fe800ac7997af4b59426581fd62ed615e01389a0c3bbbe2952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32a65df28b5605fe800ac7997af4b59426581fd62ed615e01389a0c3bbbe2952->enter($__internal_32a65df28b5605fe800ac7997af4b59426581fd62ed615e01389a0c3bbbe2952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 184
        $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(twig_replace_filter((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 185
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_32a65df28b5605fe800ac7997af4b59426581fd62ed615e01389a0c3bbbe2952->leave($__internal_32a65df28b5605fe800ac7997af4b59426581fd62ed615e01389a0c3bbbe2952_prof);

        
        $__internal_bc5e1b810a1063108918fa83290bf80c20b4f5d698551661b8043cac49dd875b->leave($__internal_bc5e1b810a1063108918fa83290bf80c20b4f5d698551661b8043cac49dd875b_prof);

    }

    // line 188
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_80d6bf05118b8f8b9c7ea5fa8d3188b0bec785b7c433bc15b8a9ff889a34ea6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d6bf05118b8f8b9c7ea5fa8d3188b0bec785b7c433bc15b8a9ff889a34ea6d->enter($__internal_80d6bf05118b8f8b9c7ea5fa8d3188b0bec785b7c433bc15b8a9ff889a34ea6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_42b07e575d6ad154d6e828e8c9fdedeadae0daaf9497264ea74f20699f479519 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42b07e575d6ad154d6e828e8c9fdedeadae0daaf9497264ea74f20699f479519->enter($__internal_42b07e575d6ad154d6e828e8c9fdedeadae0daaf9497264ea74f20699f479519_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 189
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_42b07e575d6ad154d6e828e8c9fdedeadae0daaf9497264ea74f20699f479519->leave($__internal_42b07e575d6ad154d6e828e8c9fdedeadae0daaf9497264ea74f20699f479519_prof);

        
        $__internal_80d6bf05118b8f8b9c7ea5fa8d3188b0bec785b7c433bc15b8a9ff889a34ea6d->leave($__internal_80d6bf05118b8f8b9c7ea5fa8d3188b0bec785b7c433bc15b8a9ff889a34ea6d_prof);

    }

    // line 192
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_60b6e9e548f850cb80615bb155b0761d082b5718d9d92a3fc90183d287125dcc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60b6e9e548f850cb80615bb155b0761d082b5718d9d92a3fc90183d287125dcc->enter($__internal_60b6e9e548f850cb80615bb155b0761d082b5718d9d92a3fc90183d287125dcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_5d2205f40f2d902591091418d4ec05de49f83863a376e688697a2442c141a792 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d2205f40f2d902591091418d4ec05de49f83863a376e688697a2442c141a792->enter($__internal_5d2205f40f2d902591091418d4ec05de49f83863a376e688697a2442c141a792_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 193
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_5d2205f40f2d902591091418d4ec05de49f83863a376e688697a2442c141a792->leave($__internal_5d2205f40f2d902591091418d4ec05de49f83863a376e688697a2442c141a792_prof);

        
        $__internal_60b6e9e548f850cb80615bb155b0761d082b5718d9d92a3fc90183d287125dcc->leave($__internal_60b6e9e548f850cb80615bb155b0761d082b5718d9d92a3fc90183d287125dcc_prof);

    }

    // line 196
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_7f8af2bc26bb402c273eedcf72508c90d47953ea9ef852855a4939366b5173b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f8af2bc26bb402c273eedcf72508c90d47953ea9ef852855a4939366b5173b7->enter($__internal_7f8af2bc26bb402c273eedcf72508c90d47953ea9ef852855a4939366b5173b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_e1927781160f010513c30f8c3e47d8578ae75b0e10a1c33904e7c1464d99d620 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1927781160f010513c30f8c3e47d8578ae75b0e10a1c33904e7c1464d99d620->enter($__internal_e1927781160f010513c30f8c3e47d8578ae75b0e10a1c33904e7c1464d99d620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 197
        echo "    ";
        // line 198
        echo "    ";
        if (array_key_exists("widget", $context)) {
            // line 199
            echo "        ";
            if ((isset($context["required"]) ? $context["required"] : $this->getContext($context, "required"))) {
                // line 200
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim(((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " required"))));
                // line 201
                echo "        ";
            }
            // line 202
            echo "        ";
            if (array_key_exists("parent_label_class", $context)) {
                // line 203
                echo "            ";
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")), array("class" => trim((((($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["label_attr"]) ? $context["label_attr"] : null), "class", array()), "")) : ("")) . " ") . (isset($context["parent_label_class"]) ? $context["parent_label_class"] : $this->getContext($context, "parent_label_class"))))));
                // line 204
                echo "        ";
            }
            // line 205
            echo "        ";
            if (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false) && twig_test_empty((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))))) {
                // line 206
                if ( !twig_test_empty((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")))) {
                    // line 207
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) ? $context["label_format"] : $this->getContext($context, "label_format")), array("%name%" =>                     // line 208
(isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "%id%" =>                     // line 209
(isset($context["id"]) ? $context["id"] : $this->getContext($context, "id"))));
                } else {
                    // line 212
                    $context["label"] = $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->humanize((isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")));
                }
            }
            // line 215
            echo "        <label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["label_attr"]) ? $context["label_attr"] : $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 216
            echo (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")) === false)) ? (((((isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")) === false)) ? ((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 217
            echo "</label>
    ";
        }
        
        $__internal_e1927781160f010513c30f8c3e47d8578ae75b0e10a1c33904e7c1464d99d620->leave($__internal_e1927781160f010513c30f8c3e47d8578ae75b0e10a1c33904e7c1464d99d620_prof);

        
        $__internal_7f8af2bc26bb402c273eedcf72508c90d47953ea9ef852855a4939366b5173b7->leave($__internal_7f8af2bc26bb402c273eedcf72508c90d47953ea9ef852855a4939366b5173b7_prof);

    }

    // line 223
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8ef4b27bf05de8a662459ef2d978650761bd0cd764bb095d5a1302695aacf47e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ef4b27bf05de8a662459ef2d978650761bd0cd764bb095d5a1302695aacf47e->enter($__internal_8ef4b27bf05de8a662459ef2d978650761bd0cd764bb095d5a1302695aacf47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_2e3d79bc76dae84036ea01905b886c93ef4ca108ed4ace89e6bcc8cfc3b5fda3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2e3d79bc76dae84036ea01905b886c93ef4ca108ed4ace89e6bcc8cfc3b5fda3->enter($__internal_2e3d79bc76dae84036ea01905b886c93ef4ca108ed4ace89e6bcc8cfc3b5fda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 224
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) ? $context["compound"] : $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) ? $context["force_error"] : $this->getContext($context, "force_error")), false)) : (false))) &&  !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 225
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        // line 226
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 227
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 228
        echo "</div>";
        
        $__internal_2e3d79bc76dae84036ea01905b886c93ef4ca108ed4ace89e6bcc8cfc3b5fda3->leave($__internal_2e3d79bc76dae84036ea01905b886c93ef4ca108ed4ace89e6bcc8cfc3b5fda3_prof);

        
        $__internal_8ef4b27bf05de8a662459ef2d978650761bd0cd764bb095d5a1302695aacf47e->leave($__internal_8ef4b27bf05de8a662459ef2d978650761bd0cd764bb095d5a1302695aacf47e_prof);

    }

    // line 231
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_516ea6ac224abfac1e16faab7ab1969f75660f8ab509409c138daa0aabf174e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_516ea6ac224abfac1e16faab7ab1969f75660f8ab509409c138daa0aabf174e0->enter($__internal_516ea6ac224abfac1e16faab7ab1969f75660f8ab509409c138daa0aabf174e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_3ee02ffff233f1824f6eee9e4a05c31e096b9b6b3ee80f9d231fab9b496a7d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ee02ffff233f1824f6eee9e4a05c31e096b9b6b3ee80f9d231fab9b496a7d5e->enter($__internal_3ee02ffff233f1824f6eee9e4a05c31e096b9b6b3ee80f9d231fab9b496a7d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 232
        echo "<div class=\"form-group\">";
        // line 233
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 234
        echo "</div>";
        
        $__internal_3ee02ffff233f1824f6eee9e4a05c31e096b9b6b3ee80f9d231fab9b496a7d5e->leave($__internal_3ee02ffff233f1824f6eee9e4a05c31e096b9b6b3ee80f9d231fab9b496a7d5e_prof);

        
        $__internal_516ea6ac224abfac1e16faab7ab1969f75660f8ab509409c138daa0aabf174e0->leave($__internal_516ea6ac224abfac1e16faab7ab1969f75660f8ab509409c138daa0aabf174e0_prof);

    }

    // line 237
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_799b7ac74584e95360b46c797feebb939aa6ff935b92a0f7903df9e67aea5c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_799b7ac74584e95360b46c797feebb939aa6ff935b92a0f7903df9e67aea5c7c->enter($__internal_799b7ac74584e95360b46c797feebb939aa6ff935b92a0f7903df9e67aea5c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_a76bdee86a54e6e0fb3e194d530896b8c6729f8d195cd8409cf6a867062a33e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a76bdee86a54e6e0fb3e194d530896b8c6729f8d195cd8409cf6a867062a33e5->enter($__internal_a76bdee86a54e6e0fb3e194d530896b8c6729f8d195cd8409cf6a867062a33e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 238
        $context["force_error"] = true;
        // line 239
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_a76bdee86a54e6e0fb3e194d530896b8c6729f8d195cd8409cf6a867062a33e5->leave($__internal_a76bdee86a54e6e0fb3e194d530896b8c6729f8d195cd8409cf6a867062a33e5_prof);

        
        $__internal_799b7ac74584e95360b46c797feebb939aa6ff935b92a0f7903df9e67aea5c7c->leave($__internal_799b7ac74584e95360b46c797feebb939aa6ff935b92a0f7903df9e67aea5c7c_prof);

    }

    // line 242
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_824d7a3ad0609561c915ed57773993dd9152598b414e195d12be65c55c5d150b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_824d7a3ad0609561c915ed57773993dd9152598b414e195d12be65c55c5d150b->enter($__internal_824d7a3ad0609561c915ed57773993dd9152598b414e195d12be65c55c5d150b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_c7e9487c9a1362c15f56e3e71db8d6e22d428e5e50d1ab74386a2442922a80b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7e9487c9a1362c15f56e3e71db8d6e22d428e5e50d1ab74386a2442922a80b6->enter($__internal_c7e9487c9a1362c15f56e3e71db8d6e22d428e5e50d1ab74386a2442922a80b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 243
        $context["force_error"] = true;
        // line 244
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_c7e9487c9a1362c15f56e3e71db8d6e22d428e5e50d1ab74386a2442922a80b6->leave($__internal_c7e9487c9a1362c15f56e3e71db8d6e22d428e5e50d1ab74386a2442922a80b6_prof);

        
        $__internal_824d7a3ad0609561c915ed57773993dd9152598b414e195d12be65c55c5d150b->leave($__internal_824d7a3ad0609561c915ed57773993dd9152598b414e195d12be65c55c5d150b_prof);

    }

    // line 247
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_4ecbad875b39eff6cf0abe8ac1f9f3b5d6e361e799b33640b916845ab5628c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ecbad875b39eff6cf0abe8ac1f9f3b5d6e361e799b33640b916845ab5628c07->enter($__internal_4ecbad875b39eff6cf0abe8ac1f9f3b5d6e361e799b33640b916845ab5628c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_81abca72c81c5b930736c71975416255dad0d39b820ccb21756ee15849a70ea8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_81abca72c81c5b930736c71975416255dad0d39b820ccb21756ee15849a70ea8->enter($__internal_81abca72c81c5b930736c71975416255dad0d39b820ccb21756ee15849a70ea8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 248
        $context["force_error"] = true;
        // line 249
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_81abca72c81c5b930736c71975416255dad0d39b820ccb21756ee15849a70ea8->leave($__internal_81abca72c81c5b930736c71975416255dad0d39b820ccb21756ee15849a70ea8_prof);

        
        $__internal_4ecbad875b39eff6cf0abe8ac1f9f3b5d6e361e799b33640b916845ab5628c07->leave($__internal_4ecbad875b39eff6cf0abe8ac1f9f3b5d6e361e799b33640b916845ab5628c07_prof);

    }

    // line 252
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_bcb22c856ef11cc53d764b49bd794d08f837b5c3887fdaea85df977606550a31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcb22c856ef11cc53d764b49bd794d08f837b5c3887fdaea85df977606550a31->enter($__internal_bcb22c856ef11cc53d764b49bd794d08f837b5c3887fdaea85df977606550a31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_3db91a0e826d9937e4642a7f36dbec49845e1950279b476200a2e32398add551 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db91a0e826d9937e4642a7f36dbec49845e1950279b476200a2e32398add551->enter($__internal_3db91a0e826d9937e4642a7f36dbec49845e1950279b476200a2e32398add551_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 253
        $context["force_error"] = true;
        // line 254
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3db91a0e826d9937e4642a7f36dbec49845e1950279b476200a2e32398add551->leave($__internal_3db91a0e826d9937e4642a7f36dbec49845e1950279b476200a2e32398add551_prof);

        
        $__internal_bcb22c856ef11cc53d764b49bd794d08f837b5c3887fdaea85df977606550a31->leave($__internal_bcb22c856ef11cc53d764b49bd794d08f837b5c3887fdaea85df977606550a31_prof);

    }

    // line 257
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_3d9f37b4634c7f96d3b0f57cecdfc9cd0869e64ff55a07ab643febe71c9d0eb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d9f37b4634c7f96d3b0f57cecdfc9cd0869e64ff55a07ab643febe71c9d0eb0->enter($__internal_3d9f37b4634c7f96d3b0f57cecdfc9cd0869e64ff55a07ab643febe71c9d0eb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_8bd9b46473db998ab56679785c83b6144ba1c3f2ec376d07204e1baa5ff3724f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8bd9b46473db998ab56679785c83b6144ba1c3f2ec376d07204e1baa5ff3724f->enter($__internal_8bd9b46473db998ab56679785c83b6144ba1c3f2ec376d07204e1baa5ff3724f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 258
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 259
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 260
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 261
        echo "</div>";
        
        $__internal_8bd9b46473db998ab56679785c83b6144ba1c3f2ec376d07204e1baa5ff3724f->leave($__internal_8bd9b46473db998ab56679785c83b6144ba1c3f2ec376d07204e1baa5ff3724f_prof);

        
        $__internal_3d9f37b4634c7f96d3b0f57cecdfc9cd0869e64ff55a07ab643febe71c9d0eb0->leave($__internal_3d9f37b4634c7f96d3b0f57cecdfc9cd0869e64ff55a07ab643febe71c9d0eb0_prof);

    }

    // line 264
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_e90036c2702c8d670ab61b40d7f37fb5687cd9f8cd91e32a3fedaae7953238c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e90036c2702c8d670ab61b40d7f37fb5687cd9f8cd91e32a3fedaae7953238c3->enter($__internal_e90036c2702c8d670ab61b40d7f37fb5687cd9f8cd91e32a3fedaae7953238c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_7a9c3070246b5955fcdc74c98cede4c2cd8b941aa989eeec4f49fd6892c62729 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a9c3070246b5955fcdc74c98cede4c2cd8b941aa989eeec4f49fd6892c62729->enter($__internal_7a9c3070246b5955fcdc74c98cede4c2cd8b941aa989eeec4f49fd6892c62729_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 265
        echo "<div class=\"form-group";
        if ( !(isset($context["valid"]) ? $context["valid"] : $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 266
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        // line 267
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        // line 268
        echo "</div>";
        
        $__internal_7a9c3070246b5955fcdc74c98cede4c2cd8b941aa989eeec4f49fd6892c62729->leave($__internal_7a9c3070246b5955fcdc74c98cede4c2cd8b941aa989eeec4f49fd6892c62729_prof);

        
        $__internal_e90036c2702c8d670ab61b40d7f37fb5687cd9f8cd91e32a3fedaae7953238c3->leave($__internal_e90036c2702c8d670ab61b40d7f37fb5687cd9f8cd91e32a3fedaae7953238c3_prof);

    }

    // line 273
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_12555a6aabc7065c03a8d5285b6de8110bd69dad87652c19d2f413e50fd0b582 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12555a6aabc7065c03a8d5285b6de8110bd69dad87652c19d2f413e50fd0b582->enter($__internal_12555a6aabc7065c03a8d5285b6de8110bd69dad87652c19d2f413e50fd0b582_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_5957bd8156953b8a4d769780a955d7578c964ccd70765362811d6abdc835d05a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5957bd8156953b8a4d769780a955d7578c964ccd70765362811d6abdc835d05a->enter($__internal_5957bd8156953b8a4d769780a955d7578c964ccd70765362811d6abdc835d05a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 274
        if ((twig_length_filter($this->env, (isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors"))) > 0)) {
            // line 275
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "<span class=\"help-block\">";
            } else {
                echo "<div class=\"alert alert-danger\">";
            }
            // line 276
            echo "    <ul class=\"list-unstyled\">";
            // line 277
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) ? $context["errors"] : $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 278
                echo "<li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 280
            echo "</ul>
    ";
            // line 281
            if ($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "parent", array())) {
                echo "</span>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_5957bd8156953b8a4d769780a955d7578c964ccd70765362811d6abdc835d05a->leave($__internal_5957bd8156953b8a4d769780a955d7578c964ccd70765362811d6abdc835d05a_prof);

        
        $__internal_12555a6aabc7065c03a8d5285b6de8110bd69dad87652c19d2f413e50fd0b582->leave($__internal_12555a6aabc7065c03a8d5285b6de8110bd69dad87652c19d2f413e50fd0b582_prof);

    }

    public function getTemplateName()
    {
        return "CoreBundle::bootstrap_3_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1135 => 281,  1132 => 280,  1124 => 278,  1120 => 277,  1118 => 276,  1112 => 275,  1110 => 274,  1101 => 273,  1091 => 268,  1089 => 267,  1087 => 266,  1081 => 265,  1072 => 264,  1062 => 261,  1060 => 260,  1058 => 259,  1052 => 258,  1043 => 257,  1033 => 254,  1031 => 253,  1022 => 252,  1012 => 249,  1010 => 248,  1001 => 247,  991 => 244,  989 => 243,  980 => 242,  970 => 239,  968 => 238,  959 => 237,  949 => 234,  947 => 233,  945 => 232,  936 => 231,  926 => 228,  924 => 227,  922 => 226,  920 => 225,  914 => 224,  905 => 223,  893 => 217,  889 => 216,  874 => 215,  870 => 212,  867 => 209,  866 => 208,  865 => 207,  863 => 206,  860 => 205,  857 => 204,  854 => 203,  851 => 202,  848 => 201,  845 => 200,  842 => 199,  839 => 198,  837 => 197,  828 => 196,  818 => 193,  809 => 192,  799 => 189,  790 => 188,  780 => 185,  778 => 184,  769 => 182,  759 => 179,  757 => 178,  748 => 177,  737 => 171,  735 => 170,  733 => 169,  730 => 167,  728 => 166,  726 => 165,  717 => 164,  706 => 160,  704 => 159,  702 => 158,  699 => 156,  697 => 155,  695 => 154,  686 => 153,  675 => 149,  669 => 146,  668 => 145,  667 => 144,  663 => 143,  659 => 142,  652 => 138,  651 => 137,  650 => 136,  646 => 135,  644 => 134,  635 => 133,  625 => 130,  623 => 129,  614 => 128,  603 => 124,  599 => 123,  594 => 119,  588 => 118,  582 => 117,  576 => 116,  570 => 115,  564 => 114,  558 => 113,  552 => 112,  547 => 108,  541 => 107,  535 => 106,  529 => 105,  523 => 104,  517 => 103,  511 => 102,  505 => 101,  500 => 98,  497 => 97,  495 => 96,  491 => 95,  489 => 94,  486 => 92,  484 => 91,  475 => 90,  463 => 85,  460 => 84,  450 => 83,  445 => 81,  443 => 80,  441 => 79,  438 => 77,  436 => 76,  427 => 75,  415 => 70,  413 => 69,  411 => 67,  410 => 66,  409 => 65,  408 => 64,  403 => 62,  401 => 61,  399 => 60,  396 => 58,  394 => 57,  385 => 56,  374 => 52,  372 => 51,  370 => 50,  368 => 49,  366 => 48,  362 => 47,  360 => 46,  357 => 44,  355 => 43,  346 => 42,  335 => 38,  333 => 37,  331 => 36,  322 => 35,  312 => 32,  306 => 30,  304 => 29,  302 => 28,  296 => 26,  293 => 25,  291 => 24,  288 => 23,  279 => 22,  269 => 19,  267 => 18,  258 => 17,  248 => 14,  246 => 13,  237 => 12,  227 => 9,  224 => 7,  222 => 6,  213 => 5,  203 => 273,  200 => 272,  197 => 270,  195 => 264,  192 => 263,  190 => 257,  187 => 256,  185 => 252,  182 => 251,  180 => 247,  177 => 246,  175 => 242,  172 => 241,  170 => 237,  167 => 236,  165 => 231,  162 => 230,  160 => 223,  157 => 222,  154 => 220,  152 => 196,  149 => 195,  147 => 192,  144 => 191,  142 => 188,  139 => 187,  137 => 182,  134 => 181,  132 => 177,  129 => 176,  126 => 174,  124 => 164,  121 => 163,  119 => 153,  116 => 152,  114 => 133,  111 => 132,  109 => 128,  107 => 90,  105 => 75,  102 => 74,  100 => 56,  97 => 55,  95 => 42,  92 => 41,  90 => 35,  87 => 34,  85 => 22,  82 => 21,  80 => 17,  77 => 16,  75 => 12,  72 => 11,  70 => 5,  67 => 4,  64 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block form_widget_simple -%}
    {% if type is not defined or type not in ['file', 'hidden'] %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('btn-default') ~ ' btn')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block money_widget -%}
    <div class=\"input-group\">
        {% set append = money_pattern starts with '{{' %}
        {% if not append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
        {{- block('form_widget_simple') -}}
        {% if append %}
            <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {% if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {% if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {% if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {% endif %}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"checkbox\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {% if 'radio-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"radio\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' control-label')|trim}) -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label %}
    {# Do not display the label if widget is not defined in order to prevent double label rendering #}
    {% if widget is defined %}
        {% if required %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
        {% endif %}
        {% if parent_label_class is defined %}
            {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) %}
        {% endif %}
        {% if label is not same as(false) and label is empty %}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {% endif %}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {% endif %}
{% endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock form_row %}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{- block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
    {% if form.parent %}<span class=\"help-block\">{% else %}<div class=\"alert alert-danger\">{% endif %}
    <ul class=\"list-unstyled\">
        {%- for error in errors -%}
            <li><span class=\"glyphicon glyphicon-exclamation-sign\"></span> {{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {% if form.parent %}</span>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}", "CoreBundle::bootstrap_3_layout.html.twig", "/home/ubuntu/workspace/symfony_project/src/Blog/CoreBundle/Resources/views/bootstrap_3_layout.html.twig");
    }
}
