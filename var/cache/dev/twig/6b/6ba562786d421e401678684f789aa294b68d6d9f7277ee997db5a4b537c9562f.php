<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_b1489e473dcac497b8b57550fd5518df2f83a334385803ca72c4bd6346fe21fa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_fd0687639cf363f3d7e8a65adc562f9e9cac24ce7d542dafb1a5779dd4f69ad5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd0687639cf363f3d7e8a65adc562f9e9cac24ce7d542dafb1a5779dd4f69ad5->enter($__internal_fd0687639cf363f3d7e8a65adc562f9e9cac24ce7d542dafb1a5779dd4f69ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_2696bba302a627c1be364395ae05c6baa984e03a5c514755c30c416ee221a0d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2696bba302a627c1be364395ae05c6baa984e03a5c514755c30c416ee221a0d7->enter($__internal_2696bba302a627c1be364395ae05c6baa984e03a5c514755c30c416ee221a0d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd0687639cf363f3d7e8a65adc562f9e9cac24ce7d542dafb1a5779dd4f69ad5->leave($__internal_fd0687639cf363f3d7e8a65adc562f9e9cac24ce7d542dafb1a5779dd4f69ad5_prof);

        
        $__internal_2696bba302a627c1be364395ae05c6baa984e03a5c514755c30c416ee221a0d7->leave($__internal_2696bba302a627c1be364395ae05c6baa984e03a5c514755c30c416ee221a0d7_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_266afc6ffbf4798e2514df909252351de0086bc4b6d41db899800c94d8b8384e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_266afc6ffbf4798e2514df909252351de0086bc4b6d41db899800c94d8b8384e->enter($__internal_266afc6ffbf4798e2514df909252351de0086bc4b6d41db899800c94d8b8384e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_ba0366c0ee05b62af57cd697fdee3de130c9d53aaad6b0f978d91c1bc1d268c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ba0366c0ee05b62af57cd697fdee3de130c9d53aaad6b0f978d91c1bc1d268c1->enter($__internal_ba0366c0ee05b62af57cd697fdee3de130c9d53aaad6b0f978d91c1bc1d268c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_ba0366c0ee05b62af57cd697fdee3de130c9d53aaad6b0f978d91c1bc1d268c1->leave($__internal_ba0366c0ee05b62af57cd697fdee3de130c9d53aaad6b0f978d91c1bc1d268c1_prof);

        
        $__internal_266afc6ffbf4798e2514df909252351de0086bc4b6d41db899800c94d8b8384e->leave($__internal_266afc6ffbf4798e2514df909252351de0086bc4b6d41db899800c94d8b8384e_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_4fdeec9cf9dac17f800c6a6be9d774bb6631e784efae2e26a76c07fe838538e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fdeec9cf9dac17f800c6a6be9d774bb6631e784efae2e26a76c07fe838538e2->enter($__internal_4fdeec9cf9dac17f800c6a6be9d774bb6631e784efae2e26a76c07fe838538e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cb70247e9bce409e568ad0e6987854ac93098cdc04a10de6809e2daf0bfa9499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb70247e9bce409e568ad0e6987854ac93098cdc04a10de6809e2daf0bfa9499->enter($__internal_cb70247e9bce409e568ad0e6987854ac93098cdc04a10de6809e2daf0bfa9499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cb70247e9bce409e568ad0e6987854ac93098cdc04a10de6809e2daf0bfa9499->leave($__internal_cb70247e9bce409e568ad0e6987854ac93098cdc04a10de6809e2daf0bfa9499_prof);

        
        $__internal_4fdeec9cf9dac17f800c6a6be9d774bb6631e784efae2e26a76c07fe838538e2->leave($__internal_4fdeec9cf9dac17f800c6a6be9d774bb6631e784efae2e26a76c07fe838538e2_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5c7984793da0730f3eff9054cd34f0570262d020d330d5a324beb820214b7684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c7984793da0730f3eff9054cd34f0570262d020d330d5a324beb820214b7684->enter($__internal_5c7984793da0730f3eff9054cd34f0570262d020d330d5a324beb820214b7684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_5d5fc94837b3fbaeb071f63a8f6748e83b7900ea0ffdd62d638a48d719419e2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d5fc94837b3fbaeb071f63a8f6748e83b7900ea0ffdd62d638a48d719419e2f->enter($__internal_5d5fc94837b3fbaeb071f63a8f6748e83b7900ea0ffdd62d638a48d719419e2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_5d5fc94837b3fbaeb071f63a8f6748e83b7900ea0ffdd62d638a48d719419e2f->leave($__internal_5d5fc94837b3fbaeb071f63a8f6748e83b7900ea0ffdd62d638a48d719419e2f_prof);

        
        $__internal_5c7984793da0730f3eff9054cd34f0570262d020d330d5a324beb820214b7684->leave($__internal_5c7984793da0730f3eff9054cd34f0570262d020d330d5a324beb820214b7684_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\Symfony\\game\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
