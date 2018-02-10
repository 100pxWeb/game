<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_d203856af2fe4defece12afae3d92c0bffad1cae9fa6ff0abda468b117559128 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e45644263354bce04e23d8657e9dd8a797f7230ab478718401ef4c9f620e61fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e45644263354bce04e23d8657e9dd8a797f7230ab478718401ef4c9f620e61fe->enter($__internal_e45644263354bce04e23d8657e9dd8a797f7230ab478718401ef4c9f620e61fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_81eace67ebda051fe8bdb1a4cbf766e5fa5195ea083c3eb776b4dacaf0d91044 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81eace67ebda051fe8bdb1a4cbf766e5fa5195ea083c3eb776b4dacaf0d91044->enter($__internal_81eace67ebda051fe8bdb1a4cbf766e5fa5195ea083c3eb776b4dacaf0d91044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e45644263354bce04e23d8657e9dd8a797f7230ab478718401ef4c9f620e61fe->leave($__internal_e45644263354bce04e23d8657e9dd8a797f7230ab478718401ef4c9f620e61fe_prof);

        
        $__internal_81eace67ebda051fe8bdb1a4cbf766e5fa5195ea083c3eb776b4dacaf0d91044->leave($__internal_81eace67ebda051fe8bdb1a4cbf766e5fa5195ea083c3eb776b4dacaf0d91044_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2ca211ba32496498c0f26ffe9b9cc74e60d76c1472e558ac02dc359ee676ae52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ca211ba32496498c0f26ffe9b9cc74e60d76c1472e558ac02dc359ee676ae52->enter($__internal_2ca211ba32496498c0f26ffe9b9cc74e60d76c1472e558ac02dc359ee676ae52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_72e56179a9411afaa2d9632a4fc493b343574cbe9450c8517cba4044224e497a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72e56179a9411afaa2d9632a4fc493b343574cbe9450c8517cba4044224e497a->enter($__internal_72e56179a9411afaa2d9632a4fc493b343574cbe9450c8517cba4044224e497a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_72e56179a9411afaa2d9632a4fc493b343574cbe9450c8517cba4044224e497a->leave($__internal_72e56179a9411afaa2d9632a4fc493b343574cbe9450c8517cba4044224e497a_prof);

        
        $__internal_2ca211ba32496498c0f26ffe9b9cc74e60d76c1472e558ac02dc359ee676ae52->leave($__internal_2ca211ba32496498c0f26ffe9b9cc74e60d76c1472e558ac02dc359ee676ae52_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_082a1992f17a10ac01e858ae0152f9284215a544464556beb05ebb1932f2af9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_082a1992f17a10ac01e858ae0152f9284215a544464556beb05ebb1932f2af9b->enter($__internal_082a1992f17a10ac01e858ae0152f9284215a544464556beb05ebb1932f2af9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_15670daa5b6f91b5bc00b257d4e845114cd79bf8dda5c55792e0fc1675d4db0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15670daa5b6f91b5bc00b257d4e845114cd79bf8dda5c55792e0fc1675d4db0b->enter($__internal_15670daa5b6f91b5bc00b257d4e845114cd79bf8dda5c55792e0fc1675d4db0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_15670daa5b6f91b5bc00b257d4e845114cd79bf8dda5c55792e0fc1675d4db0b->leave($__internal_15670daa5b6f91b5bc00b257d4e845114cd79bf8dda5c55792e0fc1675d4db0b_prof);

        
        $__internal_082a1992f17a10ac01e858ae0152f9284215a544464556beb05ebb1932f2af9b->leave($__internal_082a1992f17a10ac01e858ae0152f9284215a544464556beb05ebb1932f2af9b_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f7bb4ed065301abd02599ef4e7a190b1f8c237c1a947e978cca0c2277470e9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7bb4ed065301abd02599ef4e7a190b1f8c237c1a947e978cca0c2277470e9ac->enter($__internal_f7bb4ed065301abd02599ef4e7a190b1f8c237c1a947e978cca0c2277470e9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5f73a1dee8fc6a02024aae41d307d8f2a411f7d563aeb2bd7f76c12a97a476a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f73a1dee8fc6a02024aae41d307d8f2a411f7d563aeb2bd7f76c12a97a476a3->enter($__internal_5f73a1dee8fc6a02024aae41d307d8f2a411f7d563aeb2bd7f76c12a97a476a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_5f73a1dee8fc6a02024aae41d307d8f2a411f7d563aeb2bd7f76c12a97a476a3->leave($__internal_5f73a1dee8fc6a02024aae41d307d8f2a411f7d563aeb2bd7f76c12a97a476a3_prof);

        
        $__internal_f7bb4ed065301abd02599ef4e7a190b1f8c237c1a947e978cca0c2277470e9ac->leave($__internal_f7bb4ed065301abd02599ef4e7a190b1f8c237c1a947e978cca0c2277470e9ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\Symfony\\game\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
