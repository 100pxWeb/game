<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_09be88ddfab0327f7e86e979ed57bec476ccdd4dbcd2c049198c858476924126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f07cf4e83687bedfe221e203418e9bdfac4248ff9651c4fa7e748f9c4d0be0d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f07cf4e83687bedfe221e203418e9bdfac4248ff9651c4fa7e748f9c4d0be0d2->enter($__internal_f07cf4e83687bedfe221e203418e9bdfac4248ff9651c4fa7e748f9c4d0be0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_bfa51d04c6d817e07d3bd89d292a8bdefa26b0807a6c52ab99745f03a0b56b78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bfa51d04c6d817e07d3bd89d292a8bdefa26b0807a6c52ab99745f03a0b56b78->enter($__internal_bfa51d04c6d817e07d3bd89d292a8bdefa26b0807a6c52ab99745f03a0b56b78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f07cf4e83687bedfe221e203418e9bdfac4248ff9651c4fa7e748f9c4d0be0d2->leave($__internal_f07cf4e83687bedfe221e203418e9bdfac4248ff9651c4fa7e748f9c4d0be0d2_prof);

        
        $__internal_bfa51d04c6d817e07d3bd89d292a8bdefa26b0807a6c52ab99745f03a0b56b78->leave($__internal_bfa51d04c6d817e07d3bd89d292a8bdefa26b0807a6c52ab99745f03a0b56b78_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_fccb6a4f27ae1d711432b6d562550bd1797436ccbe3743b7c2dda5a842a54d02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fccb6a4f27ae1d711432b6d562550bd1797436ccbe3743b7c2dda5a842a54d02->enter($__internal_fccb6a4f27ae1d711432b6d562550bd1797436ccbe3743b7c2dda5a842a54d02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_1cc78eda5cc5fdfdbebf91b4785ce22bd2cf4e3c592f59780733c3b276175d26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1cc78eda5cc5fdfdbebf91b4785ce22bd2cf4e3c592f59780733c3b276175d26->enter($__internal_1cc78eda5cc5fdfdbebf91b4785ce22bd2cf4e3c592f59780733c3b276175d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_1cc78eda5cc5fdfdbebf91b4785ce22bd2cf4e3c592f59780733c3b276175d26->leave($__internal_1cc78eda5cc5fdfdbebf91b4785ce22bd2cf4e3c592f59780733c3b276175d26_prof);

        
        $__internal_fccb6a4f27ae1d711432b6d562550bd1797436ccbe3743b7c2dda5a842a54d02->leave($__internal_fccb6a4f27ae1d711432b6d562550bd1797436ccbe3743b7c2dda5a842a54d02_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\Symfony\\game\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
