<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_38b7afc829521c3973a5fb4ac4eb7255b4f2ac7a855ee49c7b46e122844d858d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf5a49cd2b051fa77ace19e1e39733be345ea75e4422cb9c5f91e137ff9bb91f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf5a49cd2b051fa77ace19e1e39733be345ea75e4422cb9c5f91e137ff9bb91f->enter($__internal_bf5a49cd2b051fa77ace19e1e39733be345ea75e4422cb9c5f91e137ff9bb91f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_7c5892d1a9672a84c1488ce77fee71a126cc0f46b809a874be9405ffb6f5e4f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c5892d1a9672a84c1488ce77fee71a126cc0f46b809a874be9405ffb6f5e4f1->enter($__internal_7c5892d1a9672a84c1488ce77fee71a126cc0f46b809a874be9405ffb6f5e4f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf5a49cd2b051fa77ace19e1e39733be345ea75e4422cb9c5f91e137ff9bb91f->leave($__internal_bf5a49cd2b051fa77ace19e1e39733be345ea75e4422cb9c5f91e137ff9bb91f_prof);

        
        $__internal_7c5892d1a9672a84c1488ce77fee71a126cc0f46b809a874be9405ffb6f5e4f1->leave($__internal_7c5892d1a9672a84c1488ce77fee71a126cc0f46b809a874be9405ffb6f5e4f1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_3193832f7cd981aa64fa6d16c6f967c8cad0f42e0750ec5bc1b00ab969ea42ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3193832f7cd981aa64fa6d16c6f967c8cad0f42e0750ec5bc1b00ab969ea42ef->enter($__internal_3193832f7cd981aa64fa6d16c6f967c8cad0f42e0750ec5bc1b00ab969ea42ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b7f6da2e8659d3972dbd8140b32aa0335437b4894de197aefa44e0bb31674136 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f6da2e8659d3972dbd8140b32aa0335437b4894de197aefa44e0bb31674136->enter($__internal_b7f6da2e8659d3972dbd8140b32aa0335437b4894de197aefa44e0bb31674136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_b7f6da2e8659d3972dbd8140b32aa0335437b4894de197aefa44e0bb31674136->leave($__internal_b7f6da2e8659d3972dbd8140b32aa0335437b4894de197aefa44e0bb31674136_prof);

        
        $__internal_3193832f7cd981aa64fa6d16c6f967c8cad0f42e0750ec5bc1b00ab969ea42ef->leave($__internal_3193832f7cd981aa64fa6d16c6f967c8cad0f42e0750ec5bc1b00ab969ea42ef_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_f88f7e5eee50843a0d3cc21e63f54663ce81d622ee35d5c7c75627db9e57f26c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f88f7e5eee50843a0d3cc21e63f54663ce81d622ee35d5c7c75627db9e57f26c->enter($__internal_f88f7e5eee50843a0d3cc21e63f54663ce81d622ee35d5c7c75627db9e57f26c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_082ae032bfe9ae0d16d9b413beeb5d5539d3908b4da01a092bba97259c4c7fda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_082ae032bfe9ae0d16d9b413beeb5d5539d3908b4da01a092bba97259c4c7fda->enter($__internal_082ae032bfe9ae0d16d9b413beeb5d5539d3908b4da01a092bba97259c4c7fda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_082ae032bfe9ae0d16d9b413beeb5d5539d3908b4da01a092bba97259c4c7fda->leave($__internal_082ae032bfe9ae0d16d9b413beeb5d5539d3908b4da01a092bba97259c4c7fda_prof);

        
        $__internal_f88f7e5eee50843a0d3cc21e63f54663ce81d622ee35d5c7c75627db9e57f26c->leave($__internal_f88f7e5eee50843a0d3cc21e63f54663ce81d622ee35d5c7c75627db9e57f26c_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ff08e8a072ca9421d8cc2d9a6d6c3ae224fbb97ae8efd26dba5d2f1d3c966c42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ff08e8a072ca9421d8cc2d9a6d6c3ae224fbb97ae8efd26dba5d2f1d3c966c42->enter($__internal_ff08e8a072ca9421d8cc2d9a6d6c3ae224fbb97ae8efd26dba5d2f1d3c966c42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_9a23eaae4fc587a49b6ae17a972cba9ac81009f5de75247815fcb9d609e98e3c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a23eaae4fc587a49b6ae17a972cba9ac81009f5de75247815fcb9d609e98e3c->enter($__internal_9a23eaae4fc587a49b6ae17a972cba9ac81009f5de75247815fcb9d609e98e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_9a23eaae4fc587a49b6ae17a972cba9ac81009f5de75247815fcb9d609e98e3c->leave($__internal_9a23eaae4fc587a49b6ae17a972cba9ac81009f5de75247815fcb9d609e98e3c_prof);

        
        $__internal_ff08e8a072ca9421d8cc2d9a6d6c3ae224fbb97ae8efd26dba5d2f1d3c966c42->leave($__internal_ff08e8a072ca9421d8cc2d9a6d6c3ae224fbb97ae8efd26dba5d2f1d3c966c42_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\xampp\\htdocs\\Symfony\\game\\vendor\\symfony\\twig-bundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
