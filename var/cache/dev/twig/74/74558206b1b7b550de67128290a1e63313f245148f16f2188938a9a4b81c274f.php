<?php

/* form_div_layout.html.twig */
class __TwigTemplate_f76a21bfa07b22ecf1841ca3b0ac79f0663b74e8baa8badb04a09fc72d485a40 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_widget' => array($this, 'block_form_widget'),
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'form_widget_compound' => array($this, 'block_form_widget_compound'),
            'collection_widget' => array($this, 'block_collection_widget'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'choice_widget' => array($this, 'block_choice_widget'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_options' => array($this, 'block_choice_widget_options'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
            'number_widget' => array($this, 'block_number_widget'),
            'integer_widget' => array($this, 'block_integer_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'url_widget' => array($this, 'block_url_widget'),
            'search_widget' => array($this, 'block_search_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'password_widget' => array($this, 'block_password_widget'),
            'hidden_widget' => array($this, 'block_hidden_widget'),
            'email_widget' => array($this, 'block_email_widget'),
            'range_widget' => array($this, 'block_range_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'submit_widget' => array($this, 'block_submit_widget'),
            'reset_widget' => array($this, 'block_reset_widget'),
            'tel_widget' => array($this, 'block_tel_widget'),
            'color_widget' => array($this, 'block_color_widget'),
            'form_label' => array($this, 'block_form_label'),
            'button_label' => array($this, 'block_button_label'),
            'repeated_row' => array($this, 'block_repeated_row'),
            'form_row' => array($this, 'block_form_row'),
            'button_row' => array($this, 'block_button_row'),
            'hidden_row' => array($this, 'block_hidden_row'),
            'form' => array($this, 'block_form'),
            'form_start' => array($this, 'block_form_start'),
            'form_end' => array($this, 'block_form_end'),
            'form_errors' => array($this, 'block_form_errors'),
            'form_rest' => array($this, 'block_form_rest'),
            'form_rows' => array($this, 'block_form_rows'),
            'widget_attributes' => array($this, 'block_widget_attributes'),
            'widget_container_attributes' => array($this, 'block_widget_container_attributes'),
            'button_attributes' => array($this, 'block_button_attributes'),
            'attributes' => array($this, 'block_attributes'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eda8f2180bf877ca55754783783866f1efc432ddcb85ad55ca815cd77666a335 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eda8f2180bf877ca55754783783866f1efc432ddcb85ad55ca815cd77666a335->enter($__internal_eda8f2180bf877ca55754783783866f1efc432ddcb85ad55ca815cd77666a335_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        $__internal_ad9c355a7b0e19e92beb9f73e16485cad5fb8e53ed786160e2068110d47afb11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad9c355a7b0e19e92beb9f73e16485cad5fb8e53ed786160e2068110d47afb11->enter($__internal_ad9c355a7b0e19e92beb9f73e16485cad5fb8e53ed786160e2068110d47afb11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_div_layout.html.twig"));

        // line 3
        $this->displayBlock('form_widget', $context, $blocks);
        // line 11
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 16
        $this->displayBlock('form_widget_compound', $context, $blocks);
        // line 26
        $this->displayBlock('collection_widget', $context, $blocks);
        // line 33
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 37
        $this->displayBlock('choice_widget', $context, $blocks);
        // line 45
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 54
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 74
        $this->displayBlock('choice_widget_options', $context, $blocks);
        // line 87
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 91
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 108
        $this->displayBlock('date_widget', $context, $blocks);
        // line 122
        $this->displayBlock('time_widget', $context, $blocks);
        // line 133
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 168
        $this->displayBlock('number_widget', $context, $blocks);
        // line 174
        $this->displayBlock('integer_widget', $context, $blocks);
        // line 179
        $this->displayBlock('money_widget', $context, $blocks);
        // line 183
        $this->displayBlock('url_widget', $context, $blocks);
        // line 188
        $this->displayBlock('search_widget', $context, $blocks);
        // line 193
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 198
        $this->displayBlock('password_widget', $context, $blocks);
        // line 203
        $this->displayBlock('hidden_widget', $context, $blocks);
        // line 208
        $this->displayBlock('email_widget', $context, $blocks);
        // line 213
        $this->displayBlock('range_widget', $context, $blocks);
        // line 218
        $this->displayBlock('button_widget', $context, $blocks);
        // line 234
        $this->displayBlock('submit_widget', $context, $blocks);
        // line 239
        $this->displayBlock('reset_widget', $context, $blocks);
        // line 244
        $this->displayBlock('tel_widget', $context, $blocks);
        // line 249
        $this->displayBlock('color_widget', $context, $blocks);
        // line 256
        $this->displayBlock('form_label', $context, $blocks);
        // line 278
        $this->displayBlock('button_label', $context, $blocks);
        // line 282
        $this->displayBlock('repeated_row', $context, $blocks);
        // line 290
        $this->displayBlock('form_row', $context, $blocks);
        // line 298
        $this->displayBlock('button_row', $context, $blocks);
        // line 304
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 310
        $this->displayBlock('form', $context, $blocks);
        // line 316
        $this->displayBlock('form_start', $context, $blocks);
        // line 330
        $this->displayBlock('form_end', $context, $blocks);
        // line 337
        $this->displayBlock('form_errors', $context, $blocks);
        // line 347
        $this->displayBlock('form_rest', $context, $blocks);
        // line 368
        echo "
";
        // line 371
        $this->displayBlock('form_rows', $context, $blocks);
        // line 377
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 384
        $this->displayBlock('widget_container_attributes', $context, $blocks);
        // line 389
        $this->displayBlock('button_attributes', $context, $blocks);
        // line 394
        $this->displayBlock('attributes', $context, $blocks);
        
        $__internal_eda8f2180bf877ca55754783783866f1efc432ddcb85ad55ca815cd77666a335->leave($__internal_eda8f2180bf877ca55754783783866f1efc432ddcb85ad55ca815cd77666a335_prof);

        
        $__internal_ad9c355a7b0e19e92beb9f73e16485cad5fb8e53ed786160e2068110d47afb11->leave($__internal_ad9c355a7b0e19e92beb9f73e16485cad5fb8e53ed786160e2068110d47afb11_prof);

    }

    // line 3
    public function block_form_widget($context, array $blocks = array())
    {
        $__internal_c3806a8b760e98b01736ad974da5d31a869bd56b58f1435addb5871c82bb0553 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3806a8b760e98b01736ad974da5d31a869bd56b58f1435addb5871c82bb0553->enter($__internal_c3806a8b760e98b01736ad974da5d31a869bd56b58f1435addb5871c82bb0553_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        $__internal_1d1f45cbd1d1a8d8c74f980379a64bd85750753b9162c42fcbc6d869461180f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d1f45cbd1d1a8d8c74f980379a64bd85750753b9162c42fcbc6d869461180f0->enter($__internal_1d1f45cbd1d1a8d8c74f980379a64bd85750753b9162c42fcbc6d869461180f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget"));

        // line 4
        if ((isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 4, $this->getSourceContext()); })())) {
            // line 5
            $this->displayBlock("form_widget_compound", $context, $blocks);
        } else {
            // line 7
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_1d1f45cbd1d1a8d8c74f980379a64bd85750753b9162c42fcbc6d869461180f0->leave($__internal_1d1f45cbd1d1a8d8c74f980379a64bd85750753b9162c42fcbc6d869461180f0_prof);

        
        $__internal_c3806a8b760e98b01736ad974da5d31a869bd56b58f1435addb5871c82bb0553->leave($__internal_c3806a8b760e98b01736ad974da5d31a869bd56b58f1435addb5871c82bb0553_prof);

    }

    // line 11
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_16a2cd73fa2effd5b176d7b80ba419c476e4bcf5f19186fa8c3cdf10477fda7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16a2cd73fa2effd5b176d7b80ba419c476e4bcf5f19186fa8c3cdf10477fda7d->enter($__internal_16a2cd73fa2effd5b176d7b80ba419c476e4bcf5f19186fa8c3cdf10477fda7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_c3c908caa566d5ee908173bbadaced906fa27e8606349cf6b87db949d02d87d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3c908caa566d5ee908173bbadaced906fa27e8606349cf6b87db949d02d87d8->enter($__internal_c3c908caa566d5ee908173bbadaced906fa27e8606349cf6b87db949d02d87d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 12
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 12, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 13
        echo "<input type=\"";
        echo twig_escape_filter($this->env, (isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
            echo "\" ";
        }
        echo "/>";
        
        $__internal_c3c908caa566d5ee908173bbadaced906fa27e8606349cf6b87db949d02d87d8->leave($__internal_c3c908caa566d5ee908173bbadaced906fa27e8606349cf6b87db949d02d87d8_prof);

        
        $__internal_16a2cd73fa2effd5b176d7b80ba419c476e4bcf5f19186fa8c3cdf10477fda7d->leave($__internal_16a2cd73fa2effd5b176d7b80ba419c476e4bcf5f19186fa8c3cdf10477fda7d_prof);

    }

    // line 16
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_3e81e550fc1eddf3d7ecb534e06324589eac7cf41a2399775d26489f777467ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e81e550fc1eddf3d7ecb534e06324589eac7cf41a2399775d26489f777467ae->enter($__internal_3e81e550fc1eddf3d7ecb534e06324589eac7cf41a2399775d26489f777467ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_59c607de821874e38838c19613bf2ba1fae1b9caadbe6d0d5c3db4322b8875a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_59c607de821874e38838c19613bf2ba1fae1b9caadbe6d0d5c3db4322b8875a1->enter($__internal_59c607de821874e38838c19613bf2ba1fae1b9caadbe6d0d5c3db4322b8875a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 17
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 18
        if (Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()))) {
            // line 19
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'errors');
        }
        // line 21
        $this->displayBlock("form_rows", $context, $blocks);
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 22, $this->getSourceContext()); })()), 'rest');
        // line 23
        echo "</div>";
        
        $__internal_59c607de821874e38838c19613bf2ba1fae1b9caadbe6d0d5c3db4322b8875a1->leave($__internal_59c607de821874e38838c19613bf2ba1fae1b9caadbe6d0d5c3db4322b8875a1_prof);

        
        $__internal_3e81e550fc1eddf3d7ecb534e06324589eac7cf41a2399775d26489f777467ae->leave($__internal_3e81e550fc1eddf3d7ecb534e06324589eac7cf41a2399775d26489f777467ae_prof);

    }

    // line 26
    public function block_collection_widget($context, array $blocks = array())
    {
        $__internal_e67bc727a770ae9f0c628b7a47ba2011bc3d74d0a7c5fd2321553efd0eee8ccc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67bc727a770ae9f0c628b7a47ba2011bc3d74d0a7c5fd2321553efd0eee8ccc->enter($__internal_e67bc727a770ae9f0c628b7a47ba2011bc3d74d0a7c5fd2321553efd0eee8ccc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        $__internal_d44705f7adcc32cbcb7e562b4b12ced66871461fc7df1366434e83f63527546a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d44705f7adcc32cbcb7e562b4b12ced66871461fc7df1366434e83f63527546a->enter($__internal_d44705f7adcc32cbcb7e562b4b12ced66871461fc7df1366434e83f63527546a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "collection_widget"));

        // line 27
        if (array_key_exists("prototype", $context)) {
            // line 28
            $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 28, $this->getSourceContext()); })()), array("data-prototype" => $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["prototype"]) || array_key_exists("prototype", $context) ? $context["prototype"] : (function () { throw new Twig_Error_Runtime('Variable "prototype" does not exist.', 28, $this->getSourceContext()); })()), 'row')));
        }
        // line 30
        $this->displayBlock("form_widget", $context, $blocks);
        
        $__internal_d44705f7adcc32cbcb7e562b4b12ced66871461fc7df1366434e83f63527546a->leave($__internal_d44705f7adcc32cbcb7e562b4b12ced66871461fc7df1366434e83f63527546a_prof);

        
        $__internal_e67bc727a770ae9f0c628b7a47ba2011bc3d74d0a7c5fd2321553efd0eee8ccc->leave($__internal_e67bc727a770ae9f0c628b7a47ba2011bc3d74d0a7c5fd2321553efd0eee8ccc_prof);

    }

    // line 33
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_d4bbec8f6405efe5c5c92f651e95da7cfc89321ff0a13ebdbf7f0fba235e9cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4bbec8f6405efe5c5c92f651e95da7cfc89321ff0a13ebdbf7f0fba235e9cf9->enter($__internal_d4bbec8f6405efe5c5c92f651e95da7cfc89321ff0a13ebdbf7f0fba235e9cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_da8f074a0de1e4768f80afab11dab1a25b307ca4c4f448932d6e4843ba7e68ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da8f074a0de1e4768f80afab11dab1a25b307ca4c4f448932d6e4843ba7e68ec->enter($__internal_da8f074a0de1e4768f80afab11dab1a25b307ca4c4f448932d6e4843ba7e68ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 34
        echo "<textarea ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 34, $this->getSourceContext()); })()), "html", null, true);
        echo "</textarea>";
        
        $__internal_da8f074a0de1e4768f80afab11dab1a25b307ca4c4f448932d6e4843ba7e68ec->leave($__internal_da8f074a0de1e4768f80afab11dab1a25b307ca4c4f448932d6e4843ba7e68ec_prof);

        
        $__internal_d4bbec8f6405efe5c5c92f651e95da7cfc89321ff0a13ebdbf7f0fba235e9cf9->leave($__internal_d4bbec8f6405efe5c5c92f651e95da7cfc89321ff0a13ebdbf7f0fba235e9cf9_prof);

    }

    // line 37
    public function block_choice_widget($context, array $blocks = array())
    {
        $__internal_12b098f510251cf5dbd422438c99c465ca6e18b51eb6e55803c01e9f6de583ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b098f510251cf5dbd422438c99c465ca6e18b51eb6e55803c01e9f6de583ab->enter($__internal_12b098f510251cf5dbd422438c99c465ca6e18b51eb6e55803c01e9f6de583ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        $__internal_f5075e3b6f6f58e2ccf2e2b33c68168e34657a36e39885a4fa46261de33d044b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5075e3b6f6f58e2ccf2e2b33c68168e34657a36e39885a4fa46261de33d044b->enter($__internal_f5075e3b6f6f58e2ccf2e2b33c68168e34657a36e39885a4fa46261de33d044b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget"));

        // line 38
        if ((isset($context["expanded"]) || array_key_exists("expanded", $context) ? $context["expanded"] : (function () { throw new Twig_Error_Runtime('Variable "expanded" does not exist.', 38, $this->getSourceContext()); })())) {
            // line 39
            $this->displayBlock("choice_widget_expanded", $context, $blocks);
        } else {
            // line 41
            $this->displayBlock("choice_widget_collapsed", $context, $blocks);
        }
        
        $__internal_f5075e3b6f6f58e2ccf2e2b33c68168e34657a36e39885a4fa46261de33d044b->leave($__internal_f5075e3b6f6f58e2ccf2e2b33c68168e34657a36e39885a4fa46261de33d044b_prof);

        
        $__internal_12b098f510251cf5dbd422438c99c465ca6e18b51eb6e55803c01e9f6de583ab->leave($__internal_12b098f510251cf5dbd422438c99c465ca6e18b51eb6e55803c01e9f6de583ab_prof);

    }

    // line 45
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_5774c930144f760c728e94937ec60b797f578e7271c2645b7376e54f437b7453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5774c930144f760c728e94937ec60b797f578e7271c2645b7376e54f437b7453->enter($__internal_5774c930144f760c728e94937ec60b797f578e7271c2645b7376e54f437b7453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_95d9c4112aca89a95f59d06a7a8b48917ca3868e73e80201f267295e79e3f688 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95d9c4112aca89a95f59d06a7a8b48917ca3868e73e80201f267295e79e3f688->enter($__internal_95d9c4112aca89a95f59d06a7a8b48917ca3868e73e80201f267295e79e3f688_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 46
        echo "<div ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 47
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 47, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 48
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget');
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'label', array("translation_domain" => (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 49, $this->getSourceContext()); })())));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "</div>";
        
        $__internal_95d9c4112aca89a95f59d06a7a8b48917ca3868e73e80201f267295e79e3f688->leave($__internal_95d9c4112aca89a95f59d06a7a8b48917ca3868e73e80201f267295e79e3f688_prof);

        
        $__internal_5774c930144f760c728e94937ec60b797f578e7271c2645b7376e54f437b7453->leave($__internal_5774c930144f760c728e94937ec60b797f578e7271c2645b7376e54f437b7453_prof);

    }

    // line 54
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_ede471f5b9ed79c7324af045af278a8e6eb68dc7f3db3105a16f04c2e26eeb0a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ede471f5b9ed79c7324af045af278a8e6eb68dc7f3db3105a16f04c2e26eeb0a->enter($__internal_ede471f5b9ed79c7324af045af278a8e6eb68dc7f3db3105a16f04c2e26eeb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_a00a7fc5e58b4d6c6de763354ac800c4e18120525ebb3a10a6750de20f70ffb5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a00a7fc5e58b4d6c6de763354ac800c4e18120525ebb3a10a6750de20f70ffb5->enter($__internal_a00a7fc5e58b4d6c6de763354ac800c4e18120525ebb3a10a6750de20f70ffb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 55
        if ((((((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 55, $this->getSourceContext()); })()) && (null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 55, $this->getSourceContext()); })()))) &&  !(isset($context["placeholder_in_choices"]) || array_key_exists("placeholder_in_choices", $context) ? $context["placeholder_in_choices"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder_in_choices" does not exist.', 55, $this->getSourceContext()); })())) &&  !(isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 55, $this->getSourceContext()); })())) && ( !twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "size", array(), "any", true, true) || (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 55, $this->getSourceContext()); })()), "size", array()) <= 1)))) {
            // line 56
            $context["required"] = false;
        }
        // line 58
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if ((isset($context["multiple"]) || array_key_exists("multiple", $context) ? $context["multiple"] : (function () { throw new Twig_Error_Runtime('Variable "multiple" does not exist.', 58, $this->getSourceContext()); })())) {
            echo " multiple=\"multiple\"";
        }
        echo ">";
        // line 59
        if ( !(null === (isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 59, $this->getSourceContext()); })()))) {
            // line 60
            echo "<option value=\"\"";
            if (((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 60, $this->getSourceContext()); })()) && twig_test_empty((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 60, $this->getSourceContext()); })())))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()) != "")) ? (((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()) === false)) ? ((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["placeholder"]) || array_key_exists("placeholder", $context) ? $context["placeholder"] : (function () { throw new Twig_Error_Runtime('Variable "placeholder" does not exist.', 60, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 60, $this->getSourceContext()); })()))))) : ("")), "html", null, true);
            echo "</option>";
        }
        // line 62
        if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 62, $this->getSourceContext()); })())) > 0)) {
            // line 63
            $context["options"] = (isset($context["preferred_choices"]) || array_key_exists("preferred_choices", $context) ? $context["preferred_choices"] : (function () { throw new Twig_Error_Runtime('Variable "preferred_choices" does not exist.', 63, $this->getSourceContext()); })());
            // line 64
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 65
            if (((twig_length_filter($this->env, (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 65, $this->getSourceContext()); })())) > 0) &&  !(null === (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 65, $this->getSourceContext()); })())))) {
                // line 66
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, (isset($context["separator"]) || array_key_exists("separator", $context) ? $context["separator"] : (function () { throw new Twig_Error_Runtime('Variable "separator" does not exist.', 66, $this->getSourceContext()); })()), "html", null, true);
                echo "</option>";
            }
        }
        // line 69
        $context["options"] = (isset($context["choices"]) || array_key_exists("choices", $context) ? $context["choices"] : (function () { throw new Twig_Error_Runtime('Variable "choices" does not exist.', 69, $this->getSourceContext()); })());
        // line 70
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 71
        echo "</select>";
        
        $__internal_a00a7fc5e58b4d6c6de763354ac800c4e18120525ebb3a10a6750de20f70ffb5->leave($__internal_a00a7fc5e58b4d6c6de763354ac800c4e18120525ebb3a10a6750de20f70ffb5_prof);

        
        $__internal_ede471f5b9ed79c7324af045af278a8e6eb68dc7f3db3105a16f04c2e26eeb0a->leave($__internal_ede471f5b9ed79c7324af045af278a8e6eb68dc7f3db3105a16f04c2e26eeb0a_prof);

    }

    // line 74
    public function block_choice_widget_options($context, array $blocks = array())
    {
        $__internal_e547ef050d0c202cc22420cdcc6b9e2881abfb46b428ad62e829a235c679b700 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e547ef050d0c202cc22420cdcc6b9e2881abfb46b428ad62e829a235c679b700->enter($__internal_e547ef050d0c202cc22420cdcc6b9e2881abfb46b428ad62e829a235c679b700_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        $__internal_eaa1283909fb01e40f6191d438565853b84cca660f72569d479a1a0d2cb04e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eaa1283909fb01e40f6191d438565853b84cca660f72569d479a1a0d2cb04e4f->enter($__internal_eaa1283909fb01e40f6191d438565853b84cca660f72569d479a1a0d2cb04e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_options"));

        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) || array_key_exists("options", $context) ? $context["options"] : (function () { throw new Twig_Error_Runtime('Variable "options" does not exist.', 75, $this->getSourceContext()); })()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["group_label"] => $context["choice"]) {
            // line 76
            if (twig_test_iterable($context["choice"])) {
                // line 77
                echo "<optgroup label=\"";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })()) === false)) ? ($context["group_label"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["group_label"], array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 77, $this->getSourceContext()); })())))), "html", null, true);
                echo "\">
                ";
                // line 78
                $context["options"] = $context["choice"];
                // line 79
                $this->displayBlock("choice_widget_options", $context, $blocks);
                // line 80
                echo "</optgroup>";
            } else {
                // line 82
                echo "<option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "value", array()), "html", null, true);
                echo "\"";
                if (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array())) {
                    $__internal_c48b7bda04e9dfbe84425d1bed68c37db553f4abb8e09aa2c16397ccee2bd70c = array("attr" => twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "attr", array()));
                    if (!is_array($__internal_c48b7bda04e9dfbe84425d1bed68c37db553f4abb8e09aa2c16397ccee2bd70c)) {
                        throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                    }
                    $context['_parent'] = $context;
                    $context = array_merge($context, $__internal_c48b7bda04e9dfbe84425d1bed68c37db553f4abb8e09aa2c16397ccee2bd70c);
                    $this->displayBlock("attributes", $context, $blocks);
                    $context = $context['_parent'];
                }
                if (Symfony\Bridge\Twig\Extension\twig_is_selected_choice($context["choice"], (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 82, $this->getSourceContext()); })()))) {
                    echo " selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, ((((isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })()) === false)) ? (twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), $context["choice"], "label", array()), array(), (isset($context["choice_translation_domain"]) || array_key_exists("choice_translation_domain", $context) ? $context["choice_translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "choice_translation_domain" does not exist.', 82, $this->getSourceContext()); })())))), "html", null, true);
                echo "</option>";
            }
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['group_label'], $context['choice'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_eaa1283909fb01e40f6191d438565853b84cca660f72569d479a1a0d2cb04e4f->leave($__internal_eaa1283909fb01e40f6191d438565853b84cca660f72569d479a1a0d2cb04e4f_prof);

        
        $__internal_e547ef050d0c202cc22420cdcc6b9e2881abfb46b428ad62e829a235c679b700->leave($__internal_e547ef050d0c202cc22420cdcc6b9e2881abfb46b428ad62e829a235c679b700_prof);

    }

    // line 87
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_847a8caea21f19f7374f4536a7f1fec792bffbbdc5c91ae4d3e462b0aa0c730b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_847a8caea21f19f7374f4536a7f1fec792bffbbdc5c91ae4d3e462b0aa0c730b->enter($__internal_847a8caea21f19f7374f4536a7f1fec792bffbbdc5c91ae4d3e462b0aa0c730b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_9e2e947207ffcf5813b62d972b09771a0f7c9888c42b9de9f9eb7192577bbf93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e2e947207ffcf5813b62d972b09771a0f7c9888c42b9de9f9eb7192577bbf93->enter($__internal_9e2e947207ffcf5813b62d972b09771a0f7c9888c42b9de9f9eb7192577bbf93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 88
        echo "<input type=\"checkbox\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 88, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 88, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_9e2e947207ffcf5813b62d972b09771a0f7c9888c42b9de9f9eb7192577bbf93->leave($__internal_9e2e947207ffcf5813b62d972b09771a0f7c9888c42b9de9f9eb7192577bbf93_prof);

        
        $__internal_847a8caea21f19f7374f4536a7f1fec792bffbbdc5c91ae4d3e462b0aa0c730b->leave($__internal_847a8caea21f19f7374f4536a7f1fec792bffbbdc5c91ae4d3e462b0aa0c730b_prof);

    }

    // line 91
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_2c38551efe376d128c4973c0501aa9ee5f43d7dd5cd87e180dc90af0d10ccdb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c38551efe376d128c4973c0501aa9ee5f43d7dd5cd87e180dc90af0d10ccdb6->enter($__internal_2c38551efe376d128c4973c0501aa9ee5f43d7dd5cd87e180dc90af0d10ccdb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c1f92f93ca5a7b23ea24a3e8fea3f105e610d37f7631ea5806f30898313f0310 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1f92f93ca5a7b23ea24a3e8fea3f105e610d37f7631ea5806f30898313f0310->enter($__internal_c1f92f93ca5a7b23ea24a3e8fea3f105e610d37f7631ea5806f30898313f0310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 92
        echo "<input type=\"radio\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (array_key_exists("value", $context)) {
            echo " value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new Twig_Error_Runtime('Variable "value" does not exist.', 92, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        if ((isset($context["checked"]) || array_key_exists("checked", $context) ? $context["checked"] : (function () { throw new Twig_Error_Runtime('Variable "checked" does not exist.', 92, $this->getSourceContext()); })())) {
            echo " checked=\"checked\"";
        }
        echo " />";
        
        $__internal_c1f92f93ca5a7b23ea24a3e8fea3f105e610d37f7631ea5806f30898313f0310->leave($__internal_c1f92f93ca5a7b23ea24a3e8fea3f105e610d37f7631ea5806f30898313f0310_prof);

        
        $__internal_2c38551efe376d128c4973c0501aa9ee5f43d7dd5cd87e180dc90af0d10ccdb6->leave($__internal_2c38551efe376d128c4973c0501aa9ee5f43d7dd5cd87e180dc90af0d10ccdb6_prof);

    }

    // line 95
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_74cdbfd131a97044d45b5b1527abe55ce7a0b9359f69c2b32b33a88cd03d5045 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74cdbfd131a97044d45b5b1527abe55ce7a0b9359f69c2b32b33a88cd03d5045->enter($__internal_74cdbfd131a97044d45b5b1527abe55ce7a0b9359f69c2b32b33a88cd03d5045_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_ff35d82dd254d436b4102b4ad4ee1f136946d9c59cf1a52684a1954b5fbd07e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff35d82dd254d436b4102b4ad4ee1f136946d9c59cf1a52684a1954b5fbd07e0->enter($__internal_ff35d82dd254d436b4102b4ad4ee1f136946d9c59cf1a52684a1954b5fbd07e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 96
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 96, $this->getSourceContext()); })()) == "single_text")) {
            // line 97
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 99
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 100
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 100, $this->getSourceContext()); })()), "date", array()), 'errors');
            // line 101
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 101, $this->getSourceContext()); })()), "time", array()), 'errors');
            // line 102
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 102, $this->getSourceContext()); })()), "date", array()), 'widget');
            // line 103
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 103, $this->getSourceContext()); })()), "time", array()), 'widget');
            // line 104
            echo "</div>";
        }
        
        $__internal_ff35d82dd254d436b4102b4ad4ee1f136946d9c59cf1a52684a1954b5fbd07e0->leave($__internal_ff35d82dd254d436b4102b4ad4ee1f136946d9c59cf1a52684a1954b5fbd07e0_prof);

        
        $__internal_74cdbfd131a97044d45b5b1527abe55ce7a0b9359f69c2b32b33a88cd03d5045->leave($__internal_74cdbfd131a97044d45b5b1527abe55ce7a0b9359f69c2b32b33a88cd03d5045_prof);

    }

    // line 108
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_19441452f3f9df335ec137d3e8b311e6a3bc775af6a63720c650ae058246702c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19441452f3f9df335ec137d3e8b311e6a3bc775af6a63720c650ae058246702c->enter($__internal_19441452f3f9df335ec137d3e8b311e6a3bc775af6a63720c650ae058246702c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5ecdb607008919f15fa05f93f663dd3d07c78dd25e9e31a42b6a74fb392ac18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5ecdb607008919f15fa05f93f663dd3d07c78dd25e9e31a42b6a74fb392ac18f->enter($__internal_5ecdb607008919f15fa05f93f663dd3d07c78dd25e9e31a42b6a74fb392ac18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 109
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 109, $this->getSourceContext()); })()) == "single_text")) {
            // line 110
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 112
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 113
            echo twig_replace_filter((isset($context["date_pattern"]) || array_key_exists("date_pattern", $context) ? $context["date_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "date_pattern" does not exist.', 113, $this->getSourceContext()); })()), array("{{ year }}" =>             // line 114
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 114, $this->getSourceContext()); })()), "year", array()), 'widget'), "{{ month }}" =>             // line 115
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 115, $this->getSourceContext()); })()), "month", array()), 'widget'), "{{ day }}" =>             // line 116
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 116, $this->getSourceContext()); })()), "day", array()), 'widget')));
            // line 118
            echo "</div>";
        }
        
        $__internal_5ecdb607008919f15fa05f93f663dd3d07c78dd25e9e31a42b6a74fb392ac18f->leave($__internal_5ecdb607008919f15fa05f93f663dd3d07c78dd25e9e31a42b6a74fb392ac18f_prof);

        
        $__internal_19441452f3f9df335ec137d3e8b311e6a3bc775af6a63720c650ae058246702c->leave($__internal_19441452f3f9df335ec137d3e8b311e6a3bc775af6a63720c650ae058246702c_prof);

    }

    // line 122
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_1a979b744b59f3ea5a9bd0cf7122ca2b49147e093edfb4278a77a111324d1293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a979b744b59f3ea5a9bd0cf7122ca2b49147e093edfb4278a77a111324d1293->enter($__internal_1a979b744b59f3ea5a9bd0cf7122ca2b49147e093edfb4278a77a111324d1293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_ceb69b1c14899a73165584c35ca57dc367ffece20015289ebc9efca2cde76b20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ceb69b1c14899a73165584c35ca57dc367ffece20015289ebc9efca2cde76b20->enter($__internal_ceb69b1c14899a73165584c35ca57dc367ffece20015289ebc9efca2cde76b20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 123
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 123, $this->getSourceContext()); })()) == "single_text")) {
            // line 124
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 126
            $context["vars"] = ((((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 126, $this->getSourceContext()); })()) == "text")) ? (array("attr" => array("size" => 1))) : (array()));
            // line 127
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 128
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "hour", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "minute", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 128, $this->getSourceContext()); })())) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 128, $this->getSourceContext()); })()), "second", array()), 'widget', (isset($context["vars"]) || array_key_exists("vars", $context) ? $context["vars"] : (function () { throw new Twig_Error_Runtime('Variable "vars" does not exist.', 128, $this->getSourceContext()); })()));
            }
            // line 129
            echo "        </div>";
        }
        
        $__internal_ceb69b1c14899a73165584c35ca57dc367ffece20015289ebc9efca2cde76b20->leave($__internal_ceb69b1c14899a73165584c35ca57dc367ffece20015289ebc9efca2cde76b20_prof);

        
        $__internal_1a979b744b59f3ea5a9bd0cf7122ca2b49147e093edfb4278a77a111324d1293->leave($__internal_1a979b744b59f3ea5a9bd0cf7122ca2b49147e093edfb4278a77a111324d1293_prof);

    }

    // line 133
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_822c02f0c4704dab4ef189011853046015c3967d4ab17d6db7d8658a32d567d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_822c02f0c4704dab4ef189011853046015c3967d4ab17d6db7d8658a32d567d3->enter($__internal_822c02f0c4704dab4ef189011853046015c3967d4ab17d6db7d8658a32d567d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_bc8b4631e0e64dadf20820bc61946e73ef48071622a48c74f9d91e725a1540bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc8b4631e0e64dadf20820bc61946e73ef48071622a48c74f9d91e725a1540bb->enter($__internal_bc8b4631e0e64dadf20820bc61946e73ef48071622a48c74f9d91e725a1540bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 134
        if (((isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 134, $this->getSourceContext()); })()) == "single_text")) {
            // line 135
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 137
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 138
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 138, $this->getSourceContext()); })()), 'errors');
            // line 139
            echo "<table class=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter((isset($context["table_class"]) || array_key_exists("table_class", $context) ? $context["table_class"] : (function () { throw new Twig_Error_Runtime('Variable "table_class" does not exist.', 139, $this->getSourceContext()); })()), "")) : ("")), "html", null, true);
            echo "\">
                <thead>
                    <tr>";
            // line 142
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 142, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 142, $this->getSourceContext()); })()), "years", array()), 'label');
                echo "</th>";
            }
            // line 143
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 143, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 143, $this->getSourceContext()); })()), "months", array()), 'label');
                echo "</th>";
            }
            // line 144
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 144, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 144, $this->getSourceContext()); })()), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 145
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 145, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 145, $this->getSourceContext()); })()), "days", array()), 'label');
                echo "</th>";
            }
            // line 146
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 146, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 146, $this->getSourceContext()); })()), "hours", array()), 'label');
                echo "</th>";
            }
            // line 147
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 147, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 147, $this->getSourceContext()); })()), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 148
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 148, $this->getSourceContext()); })())) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 148, $this->getSourceContext()); })()), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 149
            echo "</tr>
                </thead>
                <tbody>
                    <tr>";
            // line 153
            if ((isset($context["with_years"]) || array_key_exists("with_years", $context) ? $context["with_years"] : (function () { throw new Twig_Error_Runtime('Variable "with_years" does not exist.', 153, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 153, $this->getSourceContext()); })()), "years", array()), 'widget');
                echo "</td>";
            }
            // line 154
            if ((isset($context["with_months"]) || array_key_exists("with_months", $context) ? $context["with_months"] : (function () { throw new Twig_Error_Runtime('Variable "with_months" does not exist.', 154, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 154, $this->getSourceContext()); })()), "months", array()), 'widget');
                echo "</td>";
            }
            // line 155
            if ((isset($context["with_weeks"]) || array_key_exists("with_weeks", $context) ? $context["with_weeks"] : (function () { throw new Twig_Error_Runtime('Variable "with_weeks" does not exist.', 155, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 155, $this->getSourceContext()); })()), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 156
            if ((isset($context["with_days"]) || array_key_exists("with_days", $context) ? $context["with_days"] : (function () { throw new Twig_Error_Runtime('Variable "with_days" does not exist.', 156, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 156, $this->getSourceContext()); })()), "days", array()), 'widget');
                echo "</td>";
            }
            // line 157
            if ((isset($context["with_hours"]) || array_key_exists("with_hours", $context) ? $context["with_hours"] : (function () { throw new Twig_Error_Runtime('Variable "with_hours" does not exist.', 157, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 157, $this->getSourceContext()); })()), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 158
            if ((isset($context["with_minutes"]) || array_key_exists("with_minutes", $context) ? $context["with_minutes"] : (function () { throw new Twig_Error_Runtime('Variable "with_minutes" does not exist.', 158, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 158, $this->getSourceContext()); })()), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 159
            if ((isset($context["with_seconds"]) || array_key_exists("with_seconds", $context) ? $context["with_seconds"] : (function () { throw new Twig_Error_Runtime('Variable "with_seconds" does not exist.', 159, $this->getSourceContext()); })())) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 159, $this->getSourceContext()); })()), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 160
            echo "</tr>
                </tbody>
            </table>";
            // line 163
            if ((isset($context["with_invert"]) || array_key_exists("with_invert", $context) ? $context["with_invert"] : (function () { throw new Twig_Error_Runtime('Variable "with_invert" does not exist.', 163, $this->getSourceContext()); })())) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 163, $this->getSourceContext()); })()), "invert", array()), 'widget');
            }
            // line 164
            echo "</div>";
        }
        
        $__internal_bc8b4631e0e64dadf20820bc61946e73ef48071622a48c74f9d91e725a1540bb->leave($__internal_bc8b4631e0e64dadf20820bc61946e73ef48071622a48c74f9d91e725a1540bb_prof);

        
        $__internal_822c02f0c4704dab4ef189011853046015c3967d4ab17d6db7d8658a32d567d3->leave($__internal_822c02f0c4704dab4ef189011853046015c3967d4ab17d6db7d8658a32d567d3_prof);

    }

    // line 168
    public function block_number_widget($context, array $blocks = array())
    {
        $__internal_a6c1f4dffa8c8df9c09f0b196c6a526d44c9ef2abb146ed1c8d28f638c694667 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a6c1f4dffa8c8df9c09f0b196c6a526d44c9ef2abb146ed1c8d28f638c694667->enter($__internal_a6c1f4dffa8c8df9c09f0b196c6a526d44c9ef2abb146ed1c8d28f638c694667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        $__internal_ead011b9f4c9c9e9e2777d282a92e5a718b9ba137c37bd8c4684e0f0b65250fb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead011b9f4c9c9e9e2777d282a92e5a718b9ba137c37bd8c4684e0f0b65250fb->enter($__internal_ead011b9f4c9c9e9e2777d282a92e5a718b9ba137c37bd8c4684e0f0b65250fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "number_widget"));

        // line 170
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 170, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 171
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_ead011b9f4c9c9e9e2777d282a92e5a718b9ba137c37bd8c4684e0f0b65250fb->leave($__internal_ead011b9f4c9c9e9e2777d282a92e5a718b9ba137c37bd8c4684e0f0b65250fb_prof);

        
        $__internal_a6c1f4dffa8c8df9c09f0b196c6a526d44c9ef2abb146ed1c8d28f638c694667->leave($__internal_a6c1f4dffa8c8df9c09f0b196c6a526d44c9ef2abb146ed1c8d28f638c694667_prof);

    }

    // line 174
    public function block_integer_widget($context, array $blocks = array())
    {
        $__internal_58fea36672b9fccd56f3b96874fd0a3a9859f3fdba52fdd9f6f566c2d38f697f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58fea36672b9fccd56f3b96874fd0a3a9859f3fdba52fdd9f6f566c2d38f697f->enter($__internal_58fea36672b9fccd56f3b96874fd0a3a9859f3fdba52fdd9f6f566c2d38f697f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        $__internal_3c42981f6c2edb6cb90d761694d0b3cb52e06443402b9c8dfdecab37f979ec76 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c42981f6c2edb6cb90d761694d0b3cb52e06443402b9c8dfdecab37f979ec76->enter($__internal_3c42981f6c2edb6cb90d761694d0b3cb52e06443402b9c8dfdecab37f979ec76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "integer_widget"));

        // line 175
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 175, $this->getSourceContext()); })()), "number")) : ("number"));
        // line 176
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3c42981f6c2edb6cb90d761694d0b3cb52e06443402b9c8dfdecab37f979ec76->leave($__internal_3c42981f6c2edb6cb90d761694d0b3cb52e06443402b9c8dfdecab37f979ec76_prof);

        
        $__internal_58fea36672b9fccd56f3b96874fd0a3a9859f3fdba52fdd9f6f566c2d38f697f->leave($__internal_58fea36672b9fccd56f3b96874fd0a3a9859f3fdba52fdd9f6f566c2d38f697f_prof);

    }

    // line 179
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_44d2f40b2b550a4a00eb7907e63490b21974da72ac933b6ed01c10c35ff74a72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44d2f40b2b550a4a00eb7907e63490b21974da72ac933b6ed01c10c35ff74a72->enter($__internal_44d2f40b2b550a4a00eb7907e63490b21974da72ac933b6ed01c10c35ff74a72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_92326be128f0ab1037f2d80730fc8250300426139b2ad1c4c7e87a84d5730bdf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92326be128f0ab1037f2d80730fc8250300426139b2ad1c4c7e87a84d5730bdf->enter($__internal_92326be128f0ab1037f2d80730fc8250300426139b2ad1c4c7e87a84d5730bdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 180
        echo twig_replace_filter((isset($context["money_pattern"]) || array_key_exists("money_pattern", $context) ? $context["money_pattern"] : (function () { throw new Twig_Error_Runtime('Variable "money_pattern" does not exist.', 180, $this->getSourceContext()); })()), array("{{ widget }}" =>         $this->renderBlock("form_widget_simple", $context, $blocks)));
        
        $__internal_92326be128f0ab1037f2d80730fc8250300426139b2ad1c4c7e87a84d5730bdf->leave($__internal_92326be128f0ab1037f2d80730fc8250300426139b2ad1c4c7e87a84d5730bdf_prof);

        
        $__internal_44d2f40b2b550a4a00eb7907e63490b21974da72ac933b6ed01c10c35ff74a72->leave($__internal_44d2f40b2b550a4a00eb7907e63490b21974da72ac933b6ed01c10c35ff74a72_prof);

    }

    // line 183
    public function block_url_widget($context, array $blocks = array())
    {
        $__internal_705981b04f4b6662d675a02218bd590be271f09c7c1aa1fc98130e8877e64e1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_705981b04f4b6662d675a02218bd590be271f09c7c1aa1fc98130e8877e64e1a->enter($__internal_705981b04f4b6662d675a02218bd590be271f09c7c1aa1fc98130e8877e64e1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        $__internal_2e3611b42eec19a71eac2262e287fab3533de07e3b09aaa24aa97e6e0f7d13a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2e3611b42eec19a71eac2262e287fab3533de07e3b09aaa24aa97e6e0f7d13a3->enter($__internal_2e3611b42eec19a71eac2262e287fab3533de07e3b09aaa24aa97e6e0f7d13a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "url_widget"));

        // line 184
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 184, $this->getSourceContext()); })()), "url")) : ("url"));
        // line 185
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2e3611b42eec19a71eac2262e287fab3533de07e3b09aaa24aa97e6e0f7d13a3->leave($__internal_2e3611b42eec19a71eac2262e287fab3533de07e3b09aaa24aa97e6e0f7d13a3_prof);

        
        $__internal_705981b04f4b6662d675a02218bd590be271f09c7c1aa1fc98130e8877e64e1a->leave($__internal_705981b04f4b6662d675a02218bd590be271f09c7c1aa1fc98130e8877e64e1a_prof);

    }

    // line 188
    public function block_search_widget($context, array $blocks = array())
    {
        $__internal_12cba264b0cab54d7d0856929547a0fc179d550796e1dc39d4df8366cc94c389 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12cba264b0cab54d7d0856929547a0fc179d550796e1dc39d4df8366cc94c389->enter($__internal_12cba264b0cab54d7d0856929547a0fc179d550796e1dc39d4df8366cc94c389_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        $__internal_769aebf46badb597ae4973b4a82c2fa40193e9e099f9f68f3224026e6e29fecd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_769aebf46badb597ae4973b4a82c2fa40193e9e099f9f68f3224026e6e29fecd->enter($__internal_769aebf46badb597ae4973b4a82c2fa40193e9e099f9f68f3224026e6e29fecd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "search_widget"));

        // line 189
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 189, $this->getSourceContext()); })()), "search")) : ("search"));
        // line 190
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_769aebf46badb597ae4973b4a82c2fa40193e9e099f9f68f3224026e6e29fecd->leave($__internal_769aebf46badb597ae4973b4a82c2fa40193e9e099f9f68f3224026e6e29fecd_prof);

        
        $__internal_12cba264b0cab54d7d0856929547a0fc179d550796e1dc39d4df8366cc94c389->leave($__internal_12cba264b0cab54d7d0856929547a0fc179d550796e1dc39d4df8366cc94c389_prof);

    }

    // line 193
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_05f44c107aecacec9ae8ac4a76f4561fdc41a734cdcbccb63939994fac62f010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05f44c107aecacec9ae8ac4a76f4561fdc41a734cdcbccb63939994fac62f010->enter($__internal_05f44c107aecacec9ae8ac4a76f4561fdc41a734cdcbccb63939994fac62f010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_9c9676c28b124babde22f1947167b653bba3c4316919eb4fe4b64b85790e8935 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c9676c28b124babde22f1947167b653bba3c4316919eb4fe4b64b85790e8935->enter($__internal_9c9676c28b124babde22f1947167b653bba3c4316919eb4fe4b64b85790e8935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 194
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 194, $this->getSourceContext()); })()), "text")) : ("text"));
        // line 195
        $this->displayBlock("form_widget_simple", $context, $blocks);
        echo " %";
        
        $__internal_9c9676c28b124babde22f1947167b653bba3c4316919eb4fe4b64b85790e8935->leave($__internal_9c9676c28b124babde22f1947167b653bba3c4316919eb4fe4b64b85790e8935_prof);

        
        $__internal_05f44c107aecacec9ae8ac4a76f4561fdc41a734cdcbccb63939994fac62f010->leave($__internal_05f44c107aecacec9ae8ac4a76f4561fdc41a734cdcbccb63939994fac62f010_prof);

    }

    // line 198
    public function block_password_widget($context, array $blocks = array())
    {
        $__internal_ee73786c12668e9d49719c66c7656fb61ec0652ff3814b4227358f382041fb21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee73786c12668e9d49719c66c7656fb61ec0652ff3814b4227358f382041fb21->enter($__internal_ee73786c12668e9d49719c66c7656fb61ec0652ff3814b4227358f382041fb21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        $__internal_3883f2fe25e8ee1cb6be7c32fb6872cfce667f1d79aae39413ef63370d39b5ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3883f2fe25e8ee1cb6be7c32fb6872cfce667f1d79aae39413ef63370d39b5ea->enter($__internal_3883f2fe25e8ee1cb6be7c32fb6872cfce667f1d79aae39413ef63370d39b5ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "password_widget"));

        // line 199
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 199, $this->getSourceContext()); })()), "password")) : ("password"));
        // line 200
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_3883f2fe25e8ee1cb6be7c32fb6872cfce667f1d79aae39413ef63370d39b5ea->leave($__internal_3883f2fe25e8ee1cb6be7c32fb6872cfce667f1d79aae39413ef63370d39b5ea_prof);

        
        $__internal_ee73786c12668e9d49719c66c7656fb61ec0652ff3814b4227358f382041fb21->leave($__internal_ee73786c12668e9d49719c66c7656fb61ec0652ff3814b4227358f382041fb21_prof);

    }

    // line 203
    public function block_hidden_widget($context, array $blocks = array())
    {
        $__internal_8401090b0c2f876d21490782d6ccc294c99dfad7a52cc65ce35bcca44d1a0a77 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8401090b0c2f876d21490782d6ccc294c99dfad7a52cc65ce35bcca44d1a0a77->enter($__internal_8401090b0c2f876d21490782d6ccc294c99dfad7a52cc65ce35bcca44d1a0a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        $__internal_68b338a1179a37bc87fb5bb7c9958132d36f62eb89648d838afecd3e11ae3378 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68b338a1179a37bc87fb5bb7c9958132d36f62eb89648d838afecd3e11ae3378->enter($__internal_68b338a1179a37bc87fb5bb7c9958132d36f62eb89648d838afecd3e11ae3378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_widget"));

        // line 204
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 204, $this->getSourceContext()); })()), "hidden")) : ("hidden"));
        // line 205
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_68b338a1179a37bc87fb5bb7c9958132d36f62eb89648d838afecd3e11ae3378->leave($__internal_68b338a1179a37bc87fb5bb7c9958132d36f62eb89648d838afecd3e11ae3378_prof);

        
        $__internal_8401090b0c2f876d21490782d6ccc294c99dfad7a52cc65ce35bcca44d1a0a77->leave($__internal_8401090b0c2f876d21490782d6ccc294c99dfad7a52cc65ce35bcca44d1a0a77_prof);

    }

    // line 208
    public function block_email_widget($context, array $blocks = array())
    {
        $__internal_a1aaca19d67d93eba12a6eb2359fef62630b7733fa4018eb3ada1825154e22ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1aaca19d67d93eba12a6eb2359fef62630b7733fa4018eb3ada1825154e22ad->enter($__internal_a1aaca19d67d93eba12a6eb2359fef62630b7733fa4018eb3ada1825154e22ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        $__internal_699fe0b293437b2c7694afa8a52d7ebdd0fd60eccd1674a6eee357d8dc22005f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_699fe0b293437b2c7694afa8a52d7ebdd0fd60eccd1674a6eee357d8dc22005f->enter($__internal_699fe0b293437b2c7694afa8a52d7ebdd0fd60eccd1674a6eee357d8dc22005f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "email_widget"));

        // line 209
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 209, $this->getSourceContext()); })()), "email")) : ("email"));
        // line 210
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_699fe0b293437b2c7694afa8a52d7ebdd0fd60eccd1674a6eee357d8dc22005f->leave($__internal_699fe0b293437b2c7694afa8a52d7ebdd0fd60eccd1674a6eee357d8dc22005f_prof);

        
        $__internal_a1aaca19d67d93eba12a6eb2359fef62630b7733fa4018eb3ada1825154e22ad->leave($__internal_a1aaca19d67d93eba12a6eb2359fef62630b7733fa4018eb3ada1825154e22ad_prof);

    }

    // line 213
    public function block_range_widget($context, array $blocks = array())
    {
        $__internal_afb6c12fc0b538c52ea179725e81c79b62cf114b87ab3f9d4690bb6d9328edcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_afb6c12fc0b538c52ea179725e81c79b62cf114b87ab3f9d4690bb6d9328edcb->enter($__internal_afb6c12fc0b538c52ea179725e81c79b62cf114b87ab3f9d4690bb6d9328edcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        $__internal_9bba96fae0b35c34dafa2219f4d12a6fc407ff4bc0e3bf5f5790b611ad6e934f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bba96fae0b35c34dafa2219f4d12a6fc407ff4bc0e3bf5f5790b611ad6e934f->enter($__internal_9bba96fae0b35c34dafa2219f4d12a6fc407ff4bc0e3bf5f5790b611ad6e934f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "range_widget"));

        // line 214
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 214, $this->getSourceContext()); })()), "range")) : ("range"));
        // line 215
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_9bba96fae0b35c34dafa2219f4d12a6fc407ff4bc0e3bf5f5790b611ad6e934f->leave($__internal_9bba96fae0b35c34dafa2219f4d12a6fc407ff4bc0e3bf5f5790b611ad6e934f_prof);

        
        $__internal_afb6c12fc0b538c52ea179725e81c79b62cf114b87ab3f9d4690bb6d9328edcb->leave($__internal_afb6c12fc0b538c52ea179725e81c79b62cf114b87ab3f9d4690bb6d9328edcb_prof);

    }

    // line 218
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_2dd4b22634be2c7eefd361dc9194e45283ce255a3242483165ec4db113c95109 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd4b22634be2c7eefd361dc9194e45283ce255a3242483165ec4db113c95109->enter($__internal_2dd4b22634be2c7eefd361dc9194e45283ce255a3242483165ec4db113c95109_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_f7368282e2c3bf00472a8779c8130ac928467c6c3186420c17b8a1913d291cf4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7368282e2c3bf00472a8779c8130ac928467c6c3186420c17b8a1913d291cf4->enter($__internal_f7368282e2c3bf00472a8779c8130ac928467c6c3186420c17b8a1913d291cf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 219
        if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 219, $this->getSourceContext()); })()))) {
            // line 220
            if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 220, $this->getSourceContext()); })()))) {
                // line 221
                $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 221, $this->getSourceContext()); })()), array("%name%" =>                 // line 222
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 222, $this->getSourceContext()); })()), "%id%" =>                 // line 223
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 223, $this->getSourceContext()); })())));
            } elseif ((            // line 225
(isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 225, $this->getSourceContext()); })()) === false)) {
                // line 226
                $context["translation_domain"] = false;
            } else {
                // line 228
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 228, $this->getSourceContext()); })()));
            }
        }
        // line 231
        echo "<button type=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 231, $this->getSourceContext()); })()), "button")) : ("button")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo ">";
        echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 231, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 231, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 231, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 231, $this->getSourceContext()); })())))), "html", null, true);
        echo "</button>";
        
        $__internal_f7368282e2c3bf00472a8779c8130ac928467c6c3186420c17b8a1913d291cf4->leave($__internal_f7368282e2c3bf00472a8779c8130ac928467c6c3186420c17b8a1913d291cf4_prof);

        
        $__internal_2dd4b22634be2c7eefd361dc9194e45283ce255a3242483165ec4db113c95109->leave($__internal_2dd4b22634be2c7eefd361dc9194e45283ce255a3242483165ec4db113c95109_prof);

    }

    // line 234
    public function block_submit_widget($context, array $blocks = array())
    {
        $__internal_cb88371fa474263c59acc703635a868ec0ffc469133709275abefa3361e35d57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb88371fa474263c59acc703635a868ec0ffc469133709275abefa3361e35d57->enter($__internal_cb88371fa474263c59acc703635a868ec0ffc469133709275abefa3361e35d57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        $__internal_2b5ac670455570a1acdf9e3b5af3277c57304e99947de9d5921fc623f196b690 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b5ac670455570a1acdf9e3b5af3277c57304e99947de9d5921fc623f196b690->enter($__internal_2b5ac670455570a1acdf9e3b5af3277c57304e99947de9d5921fc623f196b690_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_widget"));

        // line 235
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 235, $this->getSourceContext()); })()), "submit")) : ("submit"));
        // line 236
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_2b5ac670455570a1acdf9e3b5af3277c57304e99947de9d5921fc623f196b690->leave($__internal_2b5ac670455570a1acdf9e3b5af3277c57304e99947de9d5921fc623f196b690_prof);

        
        $__internal_cb88371fa474263c59acc703635a868ec0ffc469133709275abefa3361e35d57->leave($__internal_cb88371fa474263c59acc703635a868ec0ffc469133709275abefa3361e35d57_prof);

    }

    // line 239
    public function block_reset_widget($context, array $blocks = array())
    {
        $__internal_300aed5186dc7a6af907913e66717d847a8c31d0781ab8ade40fc41c16dd2898 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_300aed5186dc7a6af907913e66717d847a8c31d0781ab8ade40fc41c16dd2898->enter($__internal_300aed5186dc7a6af907913e66717d847a8c31d0781ab8ade40fc41c16dd2898_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        $__internal_2cbab20027932b3777874e2460697b64d006d3d8dfabbc72f7b6fe580da13bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2cbab20027932b3777874e2460697b64d006d3d8dfabbc72f7b6fe580da13bad->enter($__internal_2cbab20027932b3777874e2460697b64d006d3d8dfabbc72f7b6fe580da13bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_widget"));

        // line 240
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 240, $this->getSourceContext()); })()), "reset")) : ("reset"));
        // line 241
        $this->displayBlock("button_widget", $context, $blocks);
        
        $__internal_2cbab20027932b3777874e2460697b64d006d3d8dfabbc72f7b6fe580da13bad->leave($__internal_2cbab20027932b3777874e2460697b64d006d3d8dfabbc72f7b6fe580da13bad_prof);

        
        $__internal_300aed5186dc7a6af907913e66717d847a8c31d0781ab8ade40fc41c16dd2898->leave($__internal_300aed5186dc7a6af907913e66717d847a8c31d0781ab8ade40fc41c16dd2898_prof);

    }

    // line 244
    public function block_tel_widget($context, array $blocks = array())
    {
        $__internal_d0abda066ca2a3c64da81b2237308af1960621e43187683f448d65e96422a6d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0abda066ca2a3c64da81b2237308af1960621e43187683f448d65e96422a6d4->enter($__internal_d0abda066ca2a3c64da81b2237308af1960621e43187683f448d65e96422a6d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        $__internal_2990a6fe2f117abab1375b2e6ac059ad04b81d3e3403d7f153545e30150153ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2990a6fe2f117abab1375b2e6ac059ad04b81d3e3403d7f153545e30150153ae->enter($__internal_2990a6fe2f117abab1375b2e6ac059ad04b81d3e3403d7f153545e30150153ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tel_widget"));

        // line 245
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 245, $this->getSourceContext()); })()), "tel")) : ("tel"));
        // line 246
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_2990a6fe2f117abab1375b2e6ac059ad04b81d3e3403d7f153545e30150153ae->leave($__internal_2990a6fe2f117abab1375b2e6ac059ad04b81d3e3403d7f153545e30150153ae_prof);

        
        $__internal_d0abda066ca2a3c64da81b2237308af1960621e43187683f448d65e96422a6d4->leave($__internal_d0abda066ca2a3c64da81b2237308af1960621e43187683f448d65e96422a6d4_prof);

    }

    // line 249
    public function block_color_widget($context, array $blocks = array())
    {
        $__internal_ecddaceee84a04773dfce2420126684138d98c2cc437b016ac54c980ee5e3ac6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecddaceee84a04773dfce2420126684138d98c2cc437b016ac54c980ee5e3ac6->enter($__internal_ecddaceee84a04773dfce2420126684138d98c2cc437b016ac54c980ee5e3ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        $__internal_8be122045dced6cb0f477470ffbb57a52c63e6e66b13ab439848c04bc454c0ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be122045dced6cb0f477470ffbb57a52c63e6e66b13ab439848c04bc454c0ee->enter($__internal_8be122045dced6cb0f477470ffbb57a52c63e6e66b13ab439848c04bc454c0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "color_widget"));

        // line 250
        $context["type"] = ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) || array_key_exists("type", $context) ? $context["type"] : (function () { throw new Twig_Error_Runtime('Variable "type" does not exist.', 250, $this->getSourceContext()); })()), "color")) : ("color"));
        // line 251
        $this->displayBlock("form_widget_simple", $context, $blocks);
        
        $__internal_8be122045dced6cb0f477470ffbb57a52c63e6e66b13ab439848c04bc454c0ee->leave($__internal_8be122045dced6cb0f477470ffbb57a52c63e6e66b13ab439848c04bc454c0ee_prof);

        
        $__internal_ecddaceee84a04773dfce2420126684138d98c2cc437b016ac54c980ee5e3ac6->leave($__internal_ecddaceee84a04773dfce2420126684138d98c2cc437b016ac54c980ee5e3ac6_prof);

    }

    // line 256
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_434bd7a8b468c332598fe976d92cd5595a65e198a5c673c983fb4bf4f9c31b94 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434bd7a8b468c332598fe976d92cd5595a65e198a5c673c983fb4bf4f9c31b94->enter($__internal_434bd7a8b468c332598fe976d92cd5595a65e198a5c673c983fb4bf4f9c31b94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_7374dc998dcac2a42ee2d0988fe23b18af0b77b841186b8840ed74556e5e5c6d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7374dc998dcac2a42ee2d0988fe23b18af0b77b841186b8840ed74556e5e5c6d->enter($__internal_7374dc998dcac2a42ee2d0988fe23b18af0b77b841186b8840ed74556e5e5c6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 257
        if ( !((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 257, $this->getSourceContext()); })()) === false)) {
            // line 258
            if ( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 258, $this->getSourceContext()); })())) {
                // line 259
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 259, $this->getSourceContext()); })()), array("for" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 259, $this->getSourceContext()); })())));
            }
            // line 261
            if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 261, $this->getSourceContext()); })())) {
                // line 262
                $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 262, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 264
            if (twig_test_empty((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 264, $this->getSourceContext()); })()))) {
                // line 265
                if ( !twig_test_empty((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 265, $this->getSourceContext()); })()))) {
                    // line 266
                    $context["label"] = twig_replace_filter((isset($context["label_format"]) || array_key_exists("label_format", $context) ? $context["label_format"] : (function () { throw new Twig_Error_Runtime('Variable "label_format" does not exist.', 266, $this->getSourceContext()); })()), array("%name%" =>                     // line 267
(isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 267, $this->getSourceContext()); })()), "%id%" =>                     // line 268
(isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 268, $this->getSourceContext()); })())));
                } else {
                    // line 271
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize((isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 271, $this->getSourceContext()); })()));
                }
            }
            // line 274
            echo "<";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 274, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            if ((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 274, $this->getSourceContext()); })())) {
                $__internal_9c8e57b9efbcdd3bc642ef3faf2230b90a142413304468c80e81667f79d6be14 = array("attr" => (isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 274, $this->getSourceContext()); })()));
                if (!is_array($__internal_9c8e57b9efbcdd3bc642ef3faf2230b90a142413304468c80e81667f79d6be14)) {
                    throw new Twig_Error_Runtime('Variables passed to the "with" tag must be a hash.');
                }
                $context['_parent'] = $context;
                $context = array_merge($context, $__internal_9c8e57b9efbcdd3bc642ef3faf2230b90a142413304468c80e81667f79d6be14);
                $this->displayBlock("attributes", $context, $blocks);
                $context = $context['_parent'];
            }
            echo ">";
            echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 274, $this->getSourceContext()); })()) === false)) ? ((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 274, $this->getSourceContext()); })())) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 274, $this->getSourceContext()); })()), array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 274, $this->getSourceContext()); })())))), "html", null, true);
            echo "</";
            echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter((isset($context["element"]) || array_key_exists("element", $context) ? $context["element"] : (function () { throw new Twig_Error_Runtime('Variable "element" does not exist.', 274, $this->getSourceContext()); })()), "label")) : ("label")), "html", null, true);
            echo ">";
        }
        
        $__internal_7374dc998dcac2a42ee2d0988fe23b18af0b77b841186b8840ed74556e5e5c6d->leave($__internal_7374dc998dcac2a42ee2d0988fe23b18af0b77b841186b8840ed74556e5e5c6d_prof);

        
        $__internal_434bd7a8b468c332598fe976d92cd5595a65e198a5c673c983fb4bf4f9c31b94->leave($__internal_434bd7a8b468c332598fe976d92cd5595a65e198a5c673c983fb4bf4f9c31b94_prof);

    }

    // line 278
    public function block_button_label($context, array $blocks = array())
    {
        $__internal_44a7bc8250315ecb73482223f22dfd0ef49811e42747e453ead5ed1f17c6cfd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_44a7bc8250315ecb73482223f22dfd0ef49811e42747e453ead5ed1f17c6cfd5->enter($__internal_44a7bc8250315ecb73482223f22dfd0ef49811e42747e453ead5ed1f17c6cfd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        $__internal_37703c1e24f51343caab974102ac6bbcb73b0225978e5f943230c350c326b5e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_37703c1e24f51343caab974102ac6bbcb73b0225978e5f943230c350c326b5e0->enter($__internal_37703c1e24f51343caab974102ac6bbcb73b0225978e5f943230c350c326b5e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_label"));

        
        $__internal_37703c1e24f51343caab974102ac6bbcb73b0225978e5f943230c350c326b5e0->leave($__internal_37703c1e24f51343caab974102ac6bbcb73b0225978e5f943230c350c326b5e0_prof);

        
        $__internal_44a7bc8250315ecb73482223f22dfd0ef49811e42747e453ead5ed1f17c6cfd5->leave($__internal_44a7bc8250315ecb73482223f22dfd0ef49811e42747e453ead5ed1f17c6cfd5_prof);

    }

    // line 282
    public function block_repeated_row($context, array $blocks = array())
    {
        $__internal_86078c52408c52b948f34ebad8b65c7f5001bc8ab4f2bf4f15e56b4a6e1b0632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86078c52408c52b948f34ebad8b65c7f5001bc8ab4f2bf4f15e56b4a6e1b0632->enter($__internal_86078c52408c52b948f34ebad8b65c7f5001bc8ab4f2bf4f15e56b4a6e1b0632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        $__internal_4f57df2ff2ab54c63b552dd761899b8aeafcd8a4cc505e58c0a994d98ca8df5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f57df2ff2ab54c63b552dd761899b8aeafcd8a4cc505e58c0a994d98ca8df5d->enter($__internal_4f57df2ff2ab54c63b552dd761899b8aeafcd8a4cc505e58c0a994d98ca8df5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "repeated_row"));

        // line 287
        $this->displayBlock("form_rows", $context, $blocks);
        
        $__internal_4f57df2ff2ab54c63b552dd761899b8aeafcd8a4cc505e58c0a994d98ca8df5d->leave($__internal_4f57df2ff2ab54c63b552dd761899b8aeafcd8a4cc505e58c0a994d98ca8df5d_prof);

        
        $__internal_86078c52408c52b948f34ebad8b65c7f5001bc8ab4f2bf4f15e56b4a6e1b0632->leave($__internal_86078c52408c52b948f34ebad8b65c7f5001bc8ab4f2bf4f15e56b4a6e1b0632_prof);

    }

    // line 290
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_08be63da7d5ec2e55b89759e80ec1da12552a002973483d7fc48a684ce24aa95 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08be63da7d5ec2e55b89759e80ec1da12552a002973483d7fc48a684ce24aa95->enter($__internal_08be63da7d5ec2e55b89759e80ec1da12552a002973483d7fc48a684ce24aa95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_378c30bacdb2ac9041e8642a96e13f7bd8fb3ea4bfb317fd76e693263d34a560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_378c30bacdb2ac9041e8642a96e13f7bd8fb3ea4bfb317fd76e693263d34a560->enter($__internal_378c30bacdb2ac9041e8642a96e13f7bd8fb3ea4bfb317fd76e693263d34a560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 291
        echo "<div>";
        // line 292
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 292, $this->getSourceContext()); })()), 'label');
        // line 293
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 293, $this->getSourceContext()); })()), 'errors');
        // line 294
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 294, $this->getSourceContext()); })()), 'widget');
        // line 295
        echo "</div>";
        
        $__internal_378c30bacdb2ac9041e8642a96e13f7bd8fb3ea4bfb317fd76e693263d34a560->leave($__internal_378c30bacdb2ac9041e8642a96e13f7bd8fb3ea4bfb317fd76e693263d34a560_prof);

        
        $__internal_08be63da7d5ec2e55b89759e80ec1da12552a002973483d7fc48a684ce24aa95->leave($__internal_08be63da7d5ec2e55b89759e80ec1da12552a002973483d7fc48a684ce24aa95_prof);

    }

    // line 298
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_1d03ec4ff59876e6ae6c9cc386462c0cf97467eab4ae296b5582bf4d5125ed7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d03ec4ff59876e6ae6c9cc386462c0cf97467eab4ae296b5582bf4d5125ed7a->enter($__internal_1d03ec4ff59876e6ae6c9cc386462c0cf97467eab4ae296b5582bf4d5125ed7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_41d87705eb7d18663032f807396576ffe82189864545d71a721670c20907d8f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41d87705eb7d18663032f807396576ffe82189864545d71a721670c20907d8f8->enter($__internal_41d87705eb7d18663032f807396576ffe82189864545d71a721670c20907d8f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 299
        echo "<div>";
        // line 300
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 300, $this->getSourceContext()); })()), 'widget');
        // line 301
        echo "</div>";
        
        $__internal_41d87705eb7d18663032f807396576ffe82189864545d71a721670c20907d8f8->leave($__internal_41d87705eb7d18663032f807396576ffe82189864545d71a721670c20907d8f8_prof);

        
        $__internal_1d03ec4ff59876e6ae6c9cc386462c0cf97467eab4ae296b5582bf4d5125ed7a->leave($__internal_1d03ec4ff59876e6ae6c9cc386462c0cf97467eab4ae296b5582bf4d5125ed7a_prof);

    }

    // line 304
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_2b5739b64f1ed4d0e05d05a90823b6f09d075a69e7acf02a46608a97a29238b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b5739b64f1ed4d0e05d05a90823b6f09d075a69e7acf02a46608a97a29238b8->enter($__internal_2b5739b64f1ed4d0e05d05a90823b6f09d075a69e7acf02a46608a97a29238b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_7aa4228e5f9706a94b458f3e6fd434058c7ccbb0b5920cf2af0b04dfb3b52f0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aa4228e5f9706a94b458f3e6fd434058c7ccbb0b5920cf2af0b04dfb3b52f0b->enter($__internal_7aa4228e5f9706a94b458f3e6fd434058c7ccbb0b5920cf2af0b04dfb3b52f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 305
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 305, $this->getSourceContext()); })()), 'widget');
        
        $__internal_7aa4228e5f9706a94b458f3e6fd434058c7ccbb0b5920cf2af0b04dfb3b52f0b->leave($__internal_7aa4228e5f9706a94b458f3e6fd434058c7ccbb0b5920cf2af0b04dfb3b52f0b_prof);

        
        $__internal_2b5739b64f1ed4d0e05d05a90823b6f09d075a69e7acf02a46608a97a29238b8->leave($__internal_2b5739b64f1ed4d0e05d05a90823b6f09d075a69e7acf02a46608a97a29238b8_prof);

    }

    // line 310
    public function block_form($context, array $blocks = array())
    {
        $__internal_d50b9c20def22514a178b234e248b4e2f57fa7baafa55a28464dc7d8a9ab7027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d50b9c20def22514a178b234e248b4e2f57fa7baafa55a28464dc7d8a9ab7027->enter($__internal_d50b9c20def22514a178b234e248b4e2f57fa7baafa55a28464dc7d8a9ab7027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_f541bc4deb56a031aa4ec0f1cc540534e26926443547b39141ca01b4c3702ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f541bc4deb56a031aa4ec0f1cc540534e26926443547b39141ca01b4c3702ca5->enter($__internal_f541bc4deb56a031aa4ec0f1cc540534e26926443547b39141ca01b4c3702ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        // line 311
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 311, $this->getSourceContext()); })()), 'form_start');
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 312, $this->getSourceContext()); })()), 'widget');
        // line 313
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 313, $this->getSourceContext()); })()), 'form_end');
        
        $__internal_f541bc4deb56a031aa4ec0f1cc540534e26926443547b39141ca01b4c3702ca5->leave($__internal_f541bc4deb56a031aa4ec0f1cc540534e26926443547b39141ca01b4c3702ca5_prof);

        
        $__internal_d50b9c20def22514a178b234e248b4e2f57fa7baafa55a28464dc7d8a9ab7027->leave($__internal_d50b9c20def22514a178b234e248b4e2f57fa7baafa55a28464dc7d8a9ab7027_prof);

    }

    // line 316
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_2841108a180ad505304cd4b337f4e4a6bb1cedc96080bacb2e6f39f682e12949 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2841108a180ad505304cd4b337f4e4a6bb1cedc96080bacb2e6f39f682e12949->enter($__internal_2841108a180ad505304cd4b337f4e4a6bb1cedc96080bacb2e6f39f682e12949_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_c9a0504f60e4898c362153df9c6bfaac27fbb14533732c6e76906f39fb422918 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9a0504f60e4898c362153df9c6bfaac27fbb14533732c6e76906f39fb422918->enter($__internal_c9a0504f60e4898c362153df9c6bfaac27fbb14533732c6e76906f39fb422918_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 317
        twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 317, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
        // line 318
        $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 318, $this->getSourceContext()); })()));
        // line 319
        if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 319, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
            // line 320
            $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 320, $this->getSourceContext()); })());
        } else {
            // line 322
            $context["form_method"] = "POST";
        }
        // line 324
        echo "<form name=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) || array_key_exists("name", $context) ? $context["name"] : (function () { throw new Twig_Error_Runtime('Variable "name" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
        echo "\" method=\"";
        echo twig_escape_filter($this->env, twig_lower_filter($this->env, (isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 324, $this->getSourceContext()); })())), "html", null, true);
        echo "\"";
        if (((isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 324, $this->getSourceContext()); })()) != "")) {
            echo " action=\"";
            echo twig_escape_filter($this->env, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new Twig_Error_Runtime('Variable "action" does not exist.', 324, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 324, $this->getSourceContext()); })()));
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
        if ((isset($context["multipart"]) || array_key_exists("multipart", $context) ? $context["multipart"] : (function () { throw new Twig_Error_Runtime('Variable "multipart" does not exist.', 324, $this->getSourceContext()); })())) {
            echo " enctype=\"multipart/form-data\"";
        }
        echo ">";
        // line 325
        if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 325, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 325, $this->getSourceContext()); })()))) {
            // line 326
            echo "<input type=\"hidden\" name=\"_method\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 326, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />";
        }
        
        $__internal_c9a0504f60e4898c362153df9c6bfaac27fbb14533732c6e76906f39fb422918->leave($__internal_c9a0504f60e4898c362153df9c6bfaac27fbb14533732c6e76906f39fb422918_prof);

        
        $__internal_2841108a180ad505304cd4b337f4e4a6bb1cedc96080bacb2e6f39f682e12949->leave($__internal_2841108a180ad505304cd4b337f4e4a6bb1cedc96080bacb2e6f39f682e12949_prof);

    }

    // line 330
    public function block_form_end($context, array $blocks = array())
    {
        $__internal_b40602d90f4624adddc96c95fc75a8935c5fe0b79ce2e9e1306d00222b9167c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b40602d90f4624adddc96c95fc75a8935c5fe0b79ce2e9e1306d00222b9167c2->enter($__internal_b40602d90f4624adddc96c95fc75a8935c5fe0b79ce2e9e1306d00222b9167c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        $__internal_53053d678ceef888eddbaedf9c923d3d352dccb0270b2be76f4bf9decd56f7ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53053d678ceef888eddbaedf9c923d3d352dccb0270b2be76f4bf9decd56f7ae->enter($__internal_53053d678ceef888eddbaedf9c923d3d352dccb0270b2be76f4bf9decd56f7ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_end"));

        // line 331
        if (( !array_key_exists("render_rest", $context) || (isset($context["render_rest"]) || array_key_exists("render_rest", $context) ? $context["render_rest"] : (function () { throw new Twig_Error_Runtime('Variable "render_rest" does not exist.', 331, $this->getSourceContext()); })()))) {
            // line 332
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 332, $this->getSourceContext()); })()), 'rest');
        }
        // line 334
        echo "</form>";
        
        $__internal_53053d678ceef888eddbaedf9c923d3d352dccb0270b2be76f4bf9decd56f7ae->leave($__internal_53053d678ceef888eddbaedf9c923d3d352dccb0270b2be76f4bf9decd56f7ae_prof);

        
        $__internal_b40602d90f4624adddc96c95fc75a8935c5fe0b79ce2e9e1306d00222b9167c2->leave($__internal_b40602d90f4624adddc96c95fc75a8935c5fe0b79ce2e9e1306d00222b9167c2_prof);

    }

    // line 337
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_3b615f39780390ddc42064044a9d76e792b8b4f9c996dd7a35cf1447c3f6bf11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b615f39780390ddc42064044a9d76e792b8b4f9c996dd7a35cf1447c3f6bf11->enter($__internal_3b615f39780390ddc42064044a9d76e792b8b4f9c996dd7a35cf1447c3f6bf11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_ea80dbfacaeab75c297939852d4a3d2bafeb35dc12bcc497b57091ddcea78a15 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea80dbfacaeab75c297939852d4a3d2bafeb35dc12bcc497b57091ddcea78a15->enter($__internal_ea80dbfacaeab75c297939852d4a3d2bafeb35dc12bcc497b57091ddcea78a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 338
        if ((twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 338, $this->getSourceContext()); })())) > 0)) {
            // line 339
            echo "<ul>";
            // line 340
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 340, $this->getSourceContext()); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 341
                echo "<li>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 343
            echo "</ul>";
        }
        
        $__internal_ea80dbfacaeab75c297939852d4a3d2bafeb35dc12bcc497b57091ddcea78a15->leave($__internal_ea80dbfacaeab75c297939852d4a3d2bafeb35dc12bcc497b57091ddcea78a15_prof);

        
        $__internal_3b615f39780390ddc42064044a9d76e792b8b4f9c996dd7a35cf1447c3f6bf11->leave($__internal_3b615f39780390ddc42064044a9d76e792b8b4f9c996dd7a35cf1447c3f6bf11_prof);

    }

    // line 347
    public function block_form_rest($context, array $blocks = array())
    {
        $__internal_6c18d6769e2f898575c8acec68e5df7c1361602e106284dac0e8dd6dc359c8b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c18d6769e2f898575c8acec68e5df7c1361602e106284dac0e8dd6dc359c8b8->enter($__internal_6c18d6769e2f898575c8acec68e5df7c1361602e106284dac0e8dd6dc359c8b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        $__internal_ad74b52980b12a66c0ef3aecc71ac2ff38f7014acbe2a544e634da845d3df110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad74b52980b12a66c0ef3aecc71ac2ff38f7014acbe2a544e634da845d3df110->enter($__internal_ad74b52980b12a66c0ef3aecc71ac2ff38f7014acbe2a544e634da845d3df110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rest"));

        // line 348
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 348, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 349
            if ( !twig_get_attribute($this->env, $this->getSourceContext(), $context["child"], "rendered", array())) {
                // line 350
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 354
        if (( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 354, $this->getSourceContext()); })()), "methodRendered", array()) && Symfony\Bridge\Twig\Extension\twig_is_root_form((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 354, $this->getSourceContext()); })())))) {
            // line 355
            twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 355, $this->getSourceContext()); })()), "setMethodRendered", array(), "method");
            // line 356
            $context["method"] = twig_upper_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 356, $this->getSourceContext()); })()));
            // line 357
            if (twig_in_filter((isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 357, $this->getSourceContext()); })()), array(0 => "GET", 1 => "POST"))) {
                // line 358
                $context["form_method"] = (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 358, $this->getSourceContext()); })());
            } else {
                // line 360
                $context["form_method"] = "POST";
            }
            // line 363
            if (((isset($context["form_method"]) || array_key_exists("form_method", $context) ? $context["form_method"] : (function () { throw new Twig_Error_Runtime('Variable "form_method" does not exist.', 363, $this->getSourceContext()); })()) != (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 363, $this->getSourceContext()); })()))) {
                // line 364
                echo "<input type=\"hidden\" name=\"_method\" value=\"";
                echo twig_escape_filter($this->env, (isset($context["method"]) || array_key_exists("method", $context) ? $context["method"] : (function () { throw new Twig_Error_Runtime('Variable "method" does not exist.', 364, $this->getSourceContext()); })()), "html", null, true);
                echo "\" />";
            }
        }
        
        $__internal_ad74b52980b12a66c0ef3aecc71ac2ff38f7014acbe2a544e634da845d3df110->leave($__internal_ad74b52980b12a66c0ef3aecc71ac2ff38f7014acbe2a544e634da845d3df110_prof);

        
        $__internal_6c18d6769e2f898575c8acec68e5df7c1361602e106284dac0e8dd6dc359c8b8->leave($__internal_6c18d6769e2f898575c8acec68e5df7c1361602e106284dac0e8dd6dc359c8b8_prof);

    }

    // line 371
    public function block_form_rows($context, array $blocks = array())
    {
        $__internal_aebcc9a88ff3981a0631b5030ecd8c8803a99d3244491db33840022453a24b07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aebcc9a88ff3981a0631b5030ecd8c8803a99d3244491db33840022453a24b07->enter($__internal_aebcc9a88ff3981a0631b5030ecd8c8803a99d3244491db33840022453a24b07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        $__internal_d10a6dcf7b452ccb30d5858732396484fbb2830c8df990c2a977d7a32c6e2eae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d10a6dcf7b452ccb30d5858732396484fbb2830c8df990c2a977d7a32c6e2eae->enter($__internal_d10a6dcf7b452ccb30d5858732396484fbb2830c8df990c2a977d7a32c6e2eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_rows"));

        // line 372
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 372, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
            // line 373
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'row');
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_d10a6dcf7b452ccb30d5858732396484fbb2830c8df990c2a977d7a32c6e2eae->leave($__internal_d10a6dcf7b452ccb30d5858732396484fbb2830c8df990c2a977d7a32c6e2eae_prof);

        
        $__internal_aebcc9a88ff3981a0631b5030ecd8c8803a99d3244491db33840022453a24b07->leave($__internal_aebcc9a88ff3981a0631b5030ecd8c8803a99d3244491db33840022453a24b07_prof);

    }

    // line 377
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_57ea59937968e775405d0f662131f408b6f1b0067543f94797f9d9a2734a28e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57ea59937968e775405d0f662131f408b6f1b0067543f94797f9d9a2734a28e4->enter($__internal_57ea59937968e775405d0f662131f408b6f1b0067543f94797f9d9a2734a28e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_f7984425754efceeac90128e50386a94d974f16585e75ec72531fc792a34ba65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7984425754efceeac90128e50386a94d974f16585e75ec72531fc792a34ba65->enter($__internal_f7984425754efceeac90128e50386a94d974f16585e75ec72531fc792a34ba65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 378
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 378, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 378, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        // line 379
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 379, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 380
        if ((isset($context["required"]) || array_key_exists("required", $context) ? $context["required"] : (function () { throw new Twig_Error_Runtime('Variable "required" does not exist.', 380, $this->getSourceContext()); })())) {
            echo " required=\"required\"";
        }
        // line 381
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_f7984425754efceeac90128e50386a94d974f16585e75ec72531fc792a34ba65->leave($__internal_f7984425754efceeac90128e50386a94d974f16585e75ec72531fc792a34ba65_prof);

        
        $__internal_57ea59937968e775405d0f662131f408b6f1b0067543f94797f9d9a2734a28e4->leave($__internal_57ea59937968e775405d0f662131f408b6f1b0067543f94797f9d9a2734a28e4_prof);

    }

    // line 384
    public function block_widget_container_attributes($context, array $blocks = array())
    {
        $__internal_13a3139b1cb7f8e926d9c8d8702eff342d7ef50e6c828b2dc7e34cbfa60b5dd7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13a3139b1cb7f8e926d9c8d8702eff342d7ef50e6c828b2dc7e34cbfa60b5dd7->enter($__internal_13a3139b1cb7f8e926d9c8d8702eff342d7ef50e6c828b2dc7e34cbfa60b5dd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        $__internal_7a92f9d967bfa30e3cd2d6eeb3642587140cd8bd852597ba557234c3b27318b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7a92f9d967bfa30e3cd2d6eeb3642587140cd8bd852597ba557234c3b27318b2->enter($__internal_7a92f9d967bfa30e3cd2d6eeb3642587140cd8bd852597ba557234c3b27318b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_container_attributes"));

        // line 385
        if ( !twig_test_empty((isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 385, $this->getSourceContext()); })()))) {
            echo "id=\"";
            echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 385, $this->getSourceContext()); })()), "html", null, true);
            echo "\"";
        }
        // line 386
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_7a92f9d967bfa30e3cd2d6eeb3642587140cd8bd852597ba557234c3b27318b2->leave($__internal_7a92f9d967bfa30e3cd2d6eeb3642587140cd8bd852597ba557234c3b27318b2_prof);

        
        $__internal_13a3139b1cb7f8e926d9c8d8702eff342d7ef50e6c828b2dc7e34cbfa60b5dd7->leave($__internal_13a3139b1cb7f8e926d9c8d8702eff342d7ef50e6c828b2dc7e34cbfa60b5dd7_prof);

    }

    // line 389
    public function block_button_attributes($context, array $blocks = array())
    {
        $__internal_7925ad19d316a974f86fc598f1afa91511722bad848c66696133eb448ec84f90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7925ad19d316a974f86fc598f1afa91511722bad848c66696133eb448ec84f90->enter($__internal_7925ad19d316a974f86fc598f1afa91511722bad848c66696133eb448ec84f90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        $__internal_e1f4e13bb13a90922d6b3625fa8002c59c2e1acaa814d823af603dccd1dee66a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f4e13bb13a90922d6b3625fa8002c59c2e1acaa814d823af603dccd1dee66a->enter($__internal_e1f4e13bb13a90922d6b3625fa8002c59c2e1acaa814d823af603dccd1dee66a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_attributes"));

        // line 390
        echo "id=\"";
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new Twig_Error_Runtime('Variable "id" does not exist.', 390, $this->getSourceContext()); })()), "html", null, true);
        echo "\" name=\"";
        echo twig_escape_filter($this->env, (isset($context["full_name"]) || array_key_exists("full_name", $context) ? $context["full_name"] : (function () { throw new Twig_Error_Runtime('Variable "full_name" does not exist.', 390, $this->getSourceContext()); })()), "html", null, true);
        echo "\"";
        if ((isset($context["disabled"]) || array_key_exists("disabled", $context) ? $context["disabled"] : (function () { throw new Twig_Error_Runtime('Variable "disabled" does not exist.', 390, $this->getSourceContext()); })())) {
            echo " disabled=\"disabled\"";
        }
        // line 391
        $this->displayBlock("attributes", $context, $blocks);
        
        $__internal_e1f4e13bb13a90922d6b3625fa8002c59c2e1acaa814d823af603dccd1dee66a->leave($__internal_e1f4e13bb13a90922d6b3625fa8002c59c2e1acaa814d823af603dccd1dee66a_prof);

        
        $__internal_7925ad19d316a974f86fc598f1afa91511722bad848c66696133eb448ec84f90->leave($__internal_7925ad19d316a974f86fc598f1afa91511722bad848c66696133eb448ec84f90_prof);

    }

    // line 394
    public function block_attributes($context, array $blocks = array())
    {
        $__internal_fcb456d9beaf0135b4b066b7d540315f536e068b2cdd4322901b6f28e8526acb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcb456d9beaf0135b4b066b7d540315f536e068b2cdd4322901b6f28e8526acb->enter($__internal_fcb456d9beaf0135b4b066b7d540315f536e068b2cdd4322901b6f28e8526acb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        $__internal_f331b21aabd2c346d84499d58d610bf6ed380b7959eff5de7d8af4ef0cef122c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f331b21aabd2c346d84499d58d610bf6ed380b7959eff5de7d8af4ef0cef122c->enter($__internal_f331b21aabd2c346d84499d58d610bf6ed380b7959eff5de7d8af4ef0cef122c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "attributes"));

        // line 395
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 395, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            // line 396
            echo " ";
            // line 397
            if (twig_in_filter($context["attrname"], array(0 => "placeholder", 1 => "title"))) {
                // line 398
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, ((((isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 398, $this->getSourceContext()); })()) === false)) ? ($context["attrvalue"]) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["attrvalue"], array(), (isset($context["translation_domain"]) || array_key_exists("translation_domain", $context) ? $context["translation_domain"] : (function () { throw new Twig_Error_Runtime('Variable "translation_domain" does not exist.', 398, $this->getSourceContext()); })())))), "html", null, true);
                echo "\"";
            } elseif ((            // line 399
$context["attrvalue"] === true)) {
                // line 400
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "\"";
            } elseif ( !(            // line 401
$context["attrvalue"] === false)) {
                // line 402
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_f331b21aabd2c346d84499d58d610bf6ed380b7959eff5de7d8af4ef0cef122c->leave($__internal_f331b21aabd2c346d84499d58d610bf6ed380b7959eff5de7d8af4ef0cef122c_prof);

        
        $__internal_fcb456d9beaf0135b4b066b7d540315f536e068b2cdd4322901b6f28e8526acb->leave($__internal_fcb456d9beaf0135b4b066b7d540315f536e068b2cdd4322901b6f28e8526acb_prof);

    }

    public function getTemplateName()
    {
        return "form_div_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  1658 => 402,  1656 => 401,  1651 => 400,  1649 => 399,  1644 => 398,  1642 => 397,  1640 => 396,  1636 => 395,  1627 => 394,  1617 => 391,  1608 => 390,  1599 => 389,  1589 => 386,  1583 => 385,  1574 => 384,  1564 => 381,  1560 => 380,  1556 => 379,  1550 => 378,  1541 => 377,  1527 => 373,  1523 => 372,  1514 => 371,  1500 => 364,  1498 => 363,  1495 => 360,  1492 => 358,  1490 => 357,  1488 => 356,  1486 => 355,  1484 => 354,  1477 => 350,  1475 => 349,  1471 => 348,  1462 => 347,  1451 => 343,  1443 => 341,  1439 => 340,  1437 => 339,  1435 => 338,  1426 => 337,  1416 => 334,  1413 => 332,  1411 => 331,  1402 => 330,  1389 => 326,  1387 => 325,  1360 => 324,  1357 => 322,  1354 => 320,  1352 => 319,  1350 => 318,  1348 => 317,  1339 => 316,  1329 => 313,  1327 => 312,  1325 => 311,  1316 => 310,  1306 => 305,  1297 => 304,  1287 => 301,  1285 => 300,  1283 => 299,  1274 => 298,  1264 => 295,  1262 => 294,  1260 => 293,  1258 => 292,  1256 => 291,  1247 => 290,  1237 => 287,  1228 => 282,  1211 => 278,  1184 => 274,  1180 => 271,  1177 => 268,  1176 => 267,  1175 => 266,  1173 => 265,  1171 => 264,  1168 => 262,  1166 => 261,  1163 => 259,  1161 => 258,  1159 => 257,  1150 => 256,  1140 => 251,  1138 => 250,  1129 => 249,  1119 => 246,  1117 => 245,  1108 => 244,  1098 => 241,  1096 => 240,  1087 => 239,  1077 => 236,  1075 => 235,  1066 => 234,  1050 => 231,  1046 => 228,  1043 => 226,  1041 => 225,  1039 => 223,  1038 => 222,  1037 => 221,  1035 => 220,  1033 => 219,  1024 => 218,  1014 => 215,  1012 => 214,  1003 => 213,  993 => 210,  991 => 209,  982 => 208,  972 => 205,  970 => 204,  961 => 203,  951 => 200,  949 => 199,  940 => 198,  929 => 195,  927 => 194,  918 => 193,  908 => 190,  906 => 189,  897 => 188,  887 => 185,  885 => 184,  876 => 183,  866 => 180,  857 => 179,  847 => 176,  845 => 175,  836 => 174,  826 => 171,  824 => 170,  815 => 168,  804 => 164,  800 => 163,  796 => 160,  790 => 159,  784 => 158,  778 => 157,  772 => 156,  766 => 155,  760 => 154,  754 => 153,  749 => 149,  743 => 148,  737 => 147,  731 => 146,  725 => 145,  719 => 144,  713 => 143,  707 => 142,  701 => 139,  699 => 138,  695 => 137,  692 => 135,  690 => 134,  681 => 133,  670 => 129,  660 => 128,  655 => 127,  653 => 126,  650 => 124,  648 => 123,  639 => 122,  628 => 118,  626 => 116,  625 => 115,  624 => 114,  623 => 113,  619 => 112,  616 => 110,  614 => 109,  605 => 108,  594 => 104,  592 => 103,  590 => 102,  588 => 101,  586 => 100,  582 => 99,  579 => 97,  577 => 96,  568 => 95,  548 => 92,  539 => 91,  519 => 88,  510 => 87,  469 => 82,  466 => 80,  464 => 79,  462 => 78,  457 => 77,  455 => 76,  438 => 75,  429 => 74,  419 => 71,  417 => 70,  415 => 69,  409 => 66,  407 => 65,  405 => 64,  403 => 63,  401 => 62,  392 => 60,  390 => 59,  383 => 58,  380 => 56,  378 => 55,  369 => 54,  359 => 51,  353 => 49,  351 => 48,  347 => 47,  343 => 46,  334 => 45,  323 => 41,  320 => 39,  318 => 38,  309 => 37,  295 => 34,  286 => 33,  276 => 30,  273 => 28,  271 => 27,  262 => 26,  252 => 23,  250 => 22,  248 => 21,  245 => 19,  243 => 18,  239 => 17,  230 => 16,  210 => 13,  208 => 12,  199 => 11,  188 => 7,  185 => 5,  183 => 4,  174 => 3,  164 => 394,  162 => 389,  160 => 384,  158 => 377,  156 => 371,  153 => 368,  151 => 347,  149 => 337,  147 => 330,  145 => 316,  143 => 310,  141 => 304,  139 => 298,  137 => 290,  135 => 282,  133 => 278,  131 => 256,  129 => 249,  127 => 244,  125 => 239,  123 => 234,  121 => 218,  119 => 213,  117 => 208,  115 => 203,  113 => 198,  111 => 193,  109 => 188,  107 => 183,  105 => 179,  103 => 174,  101 => 168,  99 => 133,  97 => 122,  95 => 108,  93 => 95,  91 => 91,  89 => 87,  87 => 74,  85 => 54,  83 => 45,  81 => 37,  79 => 33,  77 => 26,  75 => 16,  73 => 11,  71 => 3,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# Widgets #}

{%- block form_widget -%}
    {% if compound %}
        {{- block('form_widget_compound') -}}
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock form_widget -%}

{%- block form_widget_simple -%}
    {%- set type = type|default('text') -%}
    <input type=\"{{ type }}\" {{ block('widget_attributes') }} {% if value is not empty %}value=\"{{ value }}\" {% endif %}/>
{%- endblock form_widget_simple -%}

{%- block form_widget_compound -%}
    <div {{ block('widget_container_attributes') }}>
        {%- if form is rootform -%}
            {{ form_errors(form) }}
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </div>
{%- endblock form_widget_compound -%}

{%- block collection_widget -%}
    {% if prototype is defined %}
        {%- set attr = attr|merge({'data-prototype': form_row(prototype) }) -%}
    {% endif %}
    {{- block('form_widget') -}}
{%- endblock collection_widget -%}

{%- block textarea_widget -%}
    <textarea {{ block('widget_attributes') }}>{{ value }}</textarea>
{%- endblock textarea_widget -%}

{%- block choice_widget -%}
    {% if expanded %}
        {{- block('choice_widget_expanded') -}}
    {% else %}
        {{- block('choice_widget_collapsed') -}}
    {% endif %}
{%- endblock choice_widget -%}

{%- block choice_widget_expanded -%}
    <div {{ block('widget_container_attributes') }}>
    {%- for child in form %}
        {{- form_widget(child) -}}
        {{- form_label(child, null, {translation_domain: choice_translation_domain}) -}}
    {% endfor -%}
    </div>
{%- endblock choice_widget_expanded -%}

{%- block choice_widget_collapsed -%}
    {%- if required and placeholder is none and not placeholder_in_choices and not multiple and (attr.size is not defined or attr.size <= 1) -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\"{% endif %}>
        {%- if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ placeholder != '' ? (translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain)) }}</option>
        {%- endif -%}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {%- if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif -%}
        {%- endif -%}
        {%- set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed -%}

{%- block choice_widget_options -%}
    {% for group_label, choice in options %}
        {%- if choice is iterable -%}
            <optgroup label=\"{{ choice_translation_domain is same as(false) ? group_label : group_label|trans({}, choice_translation_domain) }}\">
                {% set options = choice %}
                {{- block('choice_widget_options') -}}
            </optgroup>
        {%- else -%}
            <option value=\"{{ choice.value }}\"{% if choice.attr %}{% with { attr: choice.attr } %}{{ block('attributes') }}{% endwith %}{% endif %}{% if choice is selectedchoice(value) %} selected=\"selected\"{% endif %}>{{ choice_translation_domain is same as(false) ? choice.label : choice.label|trans({}, choice_translation_domain) }}</option>
        {%- endif -%}
    {% endfor %}
{%- endblock choice_widget_options -%}

{%- block checkbox_widget -%}
    <input type=\"checkbox\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock checkbox_widget -%}

{%- block radio_widget -%}
    <input type=\"radio\" {{ block('widget_attributes') }}{% if value is defined %} value=\"{{ value }}\"{% endif %}{% if checked %} checked=\"checked\"{% endif %} />
{%- endblock radio_widget -%}

{%- block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date) -}}
            {{- form_widget(form.time) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget -%}

{%- block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- date_pattern|replace({
                '{{ year }}':  form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}':   form_widget(form.day),
            })|raw -}}
        </div>
    {%- endif -%}
{%- endblock date_widget -%}

{%- block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{ block('form_widget_simple') }}
    {%- else -%}
        {%- set vars = widget == 'text' ? { 'attr': { 'size': 1 }} : {} -%}
        <div {{ block('widget_container_attributes') }}>
            {{ form_widget(form.hour, vars) }}{% if with_minutes %}:{{ form_widget(form.minute, vars) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second, vars) }}{% endif %}
        </div>
    {%- endif -%}
{%- endblock time_widget -%}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <table class=\"{{ table_class|default('') }}\">
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
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{%- block number_widget -%}
    {# type=\"number\" doesn't work with floats #}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }}
{%- endblock number_widget -%}

{%- block integer_widget -%}
    {%- set type = type|default('number') -%}
    {{ block('form_widget_simple') }}
{%- endblock integer_widget -%}

{%- block money_widget -%}
    {{ money_pattern|replace({ '{{ widget }}': block('form_widget_simple') })|raw }}
{%- endblock money_widget -%}

{%- block url_widget -%}
    {%- set type = type|default('url') -%}
    {{ block('form_widget_simple') }}
{%- endblock url_widget -%}

{%- block search_widget -%}
    {%- set type = type|default('search') -%}
    {{ block('form_widget_simple') }}
{%- endblock search_widget -%}

{%- block percent_widget -%}
    {%- set type = type|default('text') -%}
    {{ block('form_widget_simple') }} %
{%- endblock percent_widget -%}

{%- block password_widget -%}
    {%- set type = type|default('password') -%}
    {{ block('form_widget_simple') }}
{%- endblock password_widget -%}

{%- block hidden_widget -%}
    {%- set type = type|default('hidden') -%}
    {{ block('form_widget_simple') }}
{%- endblock hidden_widget -%}

{%- block email_widget -%}
    {%- set type = type|default('email') -%}
    {{ block('form_widget_simple') }}
{%- endblock email_widget -%}

{%- block range_widget -%}
    {% set type = type|default('range') %}
    {{- block('form_widget_simple') -}}
{%- endblock range_widget %}

{%- block button_widget -%}
    {%- if label is empty -%}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- elseif label is same as(false) -%}
            {% set translation_domain = false %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {%- endif -%}
    <button type=\"{{ type|default('button') }}\" {{ block('button_attributes') }}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</button>
{%- endblock button_widget -%}

{%- block submit_widget -%}
    {%- set type = type|default('submit') -%}
    {{ block('button_widget') }}
{%- endblock submit_widget -%}

{%- block reset_widget -%}
    {%- set type = type|default('reset') -%}
    {{ block('button_widget') }}
{%- endblock reset_widget -%}

{%- block tel_widget -%}
    {%- set type = type|default('tel') -%}
    {{ block('form_widget_simple') }}
{%- endblock tel_widget -%}

{%- block color_widget -%}
    {%- set type = type|default('color') -%}
    {{ block('form_widget_simple') }}
{%- endblock color_widget -%}

{# Labels #}

{%- block form_label -%}
    {% if label is not same as(false) -%}
        {% if not compound -%}
            {% set label_attr = label_attr|merge({'for': id}) %}
        {%- endif -%}
        {% if required -%}
            {% set label_attr = label_attr|merge({'class': (label_attr.class|default('') ~ ' required')|trim}) %}
        {%- endif -%}
        {% if label is empty -%}
            {%- if label_format is not empty -%}
                {% set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) %}
            {%- else -%}
                {% set label = name|humanize %}
            {%- endif -%}
        {%- endif -%}
        <{{ element|default('label') }}{% if label_attr %}{% with { attr: label_attr } %}{{ block('attributes') }}{% endwith %}{% endif %}>{{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}</{{ element|default('label') }}>
    {%- endif -%}
{%- endblock form_label -%}

{%- block button_label -%}{%- endblock -%}

{# Rows #}

{%- block repeated_row -%}
    {#
    No need to render the errors here, as all errors are mapped
    to the first child (see RepeatedTypeValidatorExtension).
    #}
    {{- block('form_rows') -}}
{%- endblock repeated_row -%}

{%- block form_row -%}
    <div>
        {{- form_label(form) -}}
        {{- form_errors(form) -}}
        {{- form_widget(form) -}}
    </div>
{%- endblock form_row -%}

{%- block button_row -%}
    <div>
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row -%}

{%- block hidden_row -%}
    {{ form_widget(form) }}
{%- endblock hidden_row -%}

{# Misc #}

{%- block form -%}
    {{ form_start(form) }}
        {{- form_widget(form) -}}
    {{ form_end(form) }}
{%- endblock form -%}

{%- block form_start -%}
    {%- do form.setMethodRendered() -%}
    {% set method = method|upper %}
    {%- if method in [\"GET\", \"POST\"] -%}
        {% set form_method = method %}
    {%- else -%}
        {% set form_method = \"POST\" %}
    {%- endif -%}
    <form name=\"{{ name }}\" method=\"{{ form_method|lower }}\"{% if action != '' %} action=\"{{ action }}\"{% endif %}{% for attrname, attrvalue in attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}{% if multipart %} enctype=\"multipart/form-data\"{% endif %}>
    {%- if form_method != method -%}
        <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
    {%- endif -%}
{%- endblock form_start -%}

{%- block form_end -%}
    {%- if not render_rest is defined or render_rest -%}
        {{ form_rest(form) }}
    {%- endif -%}
    </form>
{%- endblock form_end -%}

{%- block form_errors -%}
    {%- if errors|length > 0 -%}
    <ul>
        {%- for error in errors -%}
            <li>{{ error.message }}</li>
        {%- endfor -%}
    </ul>
    {%- endif -%}
{%- endblock form_errors -%}

{%- block form_rest -%}
    {% for child in form -%}
        {% if not child.rendered %}
            {{- form_row(child) -}}
        {% endif %}
    {%- endfor -%}

    {% if not form.methodRendered and form is rootform %}
        {%- do form.setMethodRendered() -%}
        {% set method = method|upper %}
        {%- if method in [\"GET\", \"POST\"] -%}
            {% set form_method = method %}
        {%- else -%}
            {% set form_method = \"POST\" %}
        {%- endif -%}

        {%- if form_method != method -%}
            <input type=\"hidden\" name=\"_method\" value=\"{{ method }}\" />
        {%- endif -%}
    {% endif -%}
{% endblock form_rest %}

{# Support #}

{%- block form_rows -%}
    {% for child in form %}
        {{- form_row(child) -}}
    {% endfor %}
{%- endblock form_rows -%}

{%- block widget_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"
    {%- if disabled %} disabled=\"disabled\"{% endif -%}
    {%- if required %} required=\"required\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_attributes -%}

{%- block widget_container_attributes -%}
    {%- if id is not empty %}id=\"{{ id }}\"{% endif -%}
    {{ block('attributes') }}
{%- endblock widget_container_attributes -%}

{%- block button_attributes -%}
    id=\"{{ id }}\" name=\"{{ full_name }}\"{% if disabled %} disabled=\"disabled\"{% endif -%}
    {{ block('attributes') }}
{%- endblock button_attributes -%}

{% block attributes -%}
    {%- for attrname, attrvalue in attr -%}
        {{- \" \" -}}
        {%- if attrname in ['placeholder', 'title'] -%}
            {{- attrname }}=\"{{ translation_domain is same as(false) ? attrvalue : attrvalue|trans({}, translation_domain) }}\"
        {%- elseif attrvalue is same as(true) -%}
            {{- attrname }}=\"{{ attrname }}\"
        {%- elseif attrvalue is not same as(false) -%}
            {{- attrname }}=\"{{ attrvalue }}\"
        {%- endif -%}
    {%- endfor -%}
{%- endblock attributes -%}
", "form_div_layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\game\\vendor\\symfony\\twig-bridge\\Resources\\views\\Form\\form_div_layout.html.twig");
    }
}
