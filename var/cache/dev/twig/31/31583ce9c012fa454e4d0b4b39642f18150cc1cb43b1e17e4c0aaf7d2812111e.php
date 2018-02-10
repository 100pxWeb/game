<?php

/* welcome.html.twig */
class __TwigTemplate_84a0f0fddb1a0433199f09e1db0b68577a9b3ce6797bf55a04994c6e51e5bf99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c69d372429529d0ae0e324811ffdf33901b1124fb844886af94a6751b272a05b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c69d372429529d0ae0e324811ffdf33901b1124fb844886af94a6751b272a05b->enter($__internal_c69d372429529d0ae0e324811ffdf33901b1124fb844886af94a6751b272a05b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "welcome.html.twig"));

        $__internal_4a090cb595fd6c89ce21f8ace568727fc0d11579b9650d9d99d383ff6c6b2e19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a090cb595fd6c89ce21f8ace568727fc0d11579b9650d9d99d383ff6c6b2e19->enter($__internal_4a090cb595fd6c89ce21f8ace568727fc0d11579b9650d9d99d383ff6c6b2e19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "welcome.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"pl\">
<head>
    <title>";
        // line 4
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>
<div id=\"app\">APPLICATION CONTENT</div>
";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["error_login"]) || array_key_exists("error_login", $context) ? $context["error_login"] : (function () { throw new Twig_Error_Runtime('Variable "error_login" does not exist.', 13, $this->getSourceContext()); })()), "html", null, true);
        echo "
<footer class=\"footer\">
    <div class=\"container text-center\">
        ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 17
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'widget');
        echo "
        ";
        // line 18
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 18, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>
</footer>


    <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/assets/app.js"), "html", null, true);
        echo "\"></script>


</body>
</html>";
        
        $__internal_c69d372429529d0ae0e324811ffdf33901b1124fb844886af94a6751b272a05b->leave($__internal_c69d372429529d0ae0e324811ffdf33901b1124fb844886af94a6751b272a05b_prof);

        
        $__internal_4a090cb595fd6c89ce21f8ace568727fc0d11579b9650d9d99d383ff6c6b2e19->leave($__internal_4a090cb595fd6c89ce21f8ace568727fc0d11579b9650d9d99d383ff6c6b2e19_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f01605df8466344c41f7ce34bdf024896c2187236c30e766aac8fe6a45f87d3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f01605df8466344c41f7ce34bdf024896c2187236c30e766aac8fe6a45f87d3->enter($__internal_7f01605df8466344c41f7ce34bdf024896c2187236c30e766aac8fe6a45f87d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4c9c9836717f3f2ade76461c08aadb517da5ede4787f236589efd50e80e74676 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c9c9836717f3f2ade76461c08aadb517da5ede4787f236589efd50e80e74676->enter($__internal_4c9c9836717f3f2ade76461c08aadb517da5ede4787f236589efd50e80e74676_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to the SpaceBar";
        
        $__internal_4c9c9836717f3f2ade76461c08aadb517da5ede4787f236589efd50e80e74676->leave($__internal_4c9c9836717f3f2ade76461c08aadb517da5ede4787f236589efd50e80e74676_prof);

        
        $__internal_7f01605df8466344c41f7ce34bdf024896c2187236c30e766aac8fe6a45f87d3->leave($__internal_7f01605df8466344c41f7ce34bdf024896c2187236c30e766aac8fe6a45f87d3_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_685e391b8d4a5099ad0964c309c4ad2ce078fabdc95410657a7a9bbdfd51e6ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_685e391b8d4a5099ad0964c309c4ad2ce078fabdc95410657a7a9bbdfd51e6ba->enter($__internal_685e391b8d4a5099ad0964c309c4ad2ce078fabdc95410657a7a9bbdfd51e6ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ae65974a2880fb1235be2b2d7c89b23bf8c0a205650eb4554575567f2b78236e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae65974a2880fb1235be2b2d7c89b23bf8c0a205650eb4554575567f2b78236e->enter($__internal_ae65974a2880fb1235be2b2d7c89b23bf8c0a205650eb4554575567f2b78236e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_ae65974a2880fb1235be2b2d7c89b23bf8c0a205650eb4554575567f2b78236e->leave($__internal_ae65974a2880fb1235be2b2d7c89b23bf8c0a205650eb4554575567f2b78236e_prof);

        
        $__internal_685e391b8d4a5099ad0964c309c4ad2ce078fabdc95410657a7a9bbdfd51e6ba->leave($__internal_685e391b8d4a5099ad0964c309c4ad2ce078fabdc95410657a7a9bbdfd51e6ba_prof);

    }

    public function getTemplateName()
    {
        return "welcome.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 8,  100 => 7,  82 => 4,  67 => 23,  59 => 18,  55 => 17,  51 => 16,  45 => 13,  40 => 10,  38 => 7,  32 => 4,  27 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"pl\">
<head>
    <title>{% block title %}Welcome to the SpaceBar{% endblock %}</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
    {% endblock %}
</head>
<body>
<div id=\"app\">APPLICATION CONTENT</div>
{{ error_login }}
<footer class=\"footer\">
    <div class=\"container text-center\">
        {{ form_start(form) }}
        {{ form_widget(form) }}
        {{ form_end(form) }}
    </div>
</footer>


    <script type=\"text/javascript\" src=\"{{ asset('dist/assets/app.js') }}\"></script>


</body>
</html>", "welcome.html.twig", "C:\\xampp\\htdocs\\Symfony\\game\\templates\\welcome.html.twig");
    }
}
