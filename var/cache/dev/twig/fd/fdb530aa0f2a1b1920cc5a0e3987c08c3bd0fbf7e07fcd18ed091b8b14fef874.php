<?php

/* main/welcome.html.twig */
class __TwigTemplate_12c73134fddd0761acb09609566955cf8b208c0b797ac2cd16d253bc0b69c42f extends Twig_Template
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
        $__internal_4a83e451082a22695d745f495b86de4ee29fc60d0fa57176860b531ef2ee2d3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a83e451082a22695d745f495b86de4ee29fc60d0fa57176860b531ef2ee2d3d->enter($__internal_4a83e451082a22695d745f495b86de4ee29fc60d0fa57176860b531ef2ee2d3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/welcome.html.twig"));

        $__internal_72dba6d6f7aec0e611c10a3e17e19ee910dbf07771781b3e6be8776d5351cf78 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72dba6d6f7aec0e611c10a3e17e19ee910dbf07771781b3e6be8776d5351cf78->enter($__internal_72dba6d6f7aec0e611c10a3e17e19ee910dbf07771781b3e6be8776d5351cf78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/welcome.html.twig"));

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
        
        $__internal_4a83e451082a22695d745f495b86de4ee29fc60d0fa57176860b531ef2ee2d3d->leave($__internal_4a83e451082a22695d745f495b86de4ee29fc60d0fa57176860b531ef2ee2d3d_prof);

        
        $__internal_72dba6d6f7aec0e611c10a3e17e19ee910dbf07771781b3e6be8776d5351cf78->leave($__internal_72dba6d6f7aec0e611c10a3e17e19ee910dbf07771781b3e6be8776d5351cf78_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5971c6a9ab17283bbdc8551c63316b6bd23307388f05507e0644510b4bb34ca5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5971c6a9ab17283bbdc8551c63316b6bd23307388f05507e0644510b4bb34ca5->enter($__internal_5971c6a9ab17283bbdc8551c63316b6bd23307388f05507e0644510b4bb34ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_385dbb236a6577e61ba5388c5c25b8b52e44318afb3d4f32269d72bacea2b972 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_385dbb236a6577e61ba5388c5c25b8b52e44318afb3d4f32269d72bacea2b972->enter($__internal_385dbb236a6577e61ba5388c5c25b8b52e44318afb3d4f32269d72bacea2b972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to the SpaceBar";
        
        $__internal_385dbb236a6577e61ba5388c5c25b8b52e44318afb3d4f32269d72bacea2b972->leave($__internal_385dbb236a6577e61ba5388c5c25b8b52e44318afb3d4f32269d72bacea2b972_prof);

        
        $__internal_5971c6a9ab17283bbdc8551c63316b6bd23307388f05507e0644510b4bb34ca5->leave($__internal_5971c6a9ab17283bbdc8551c63316b6bd23307388f05507e0644510b4bb34ca5_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a629bd9d6ada624233f01c054090492b6e8dbbd065c74d63ff7f849b5cc53086 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a629bd9d6ada624233f01c054090492b6e8dbbd065c74d63ff7f849b5cc53086->enter($__internal_a629bd9d6ada624233f01c054090492b6e8dbbd065c74d63ff7f849b5cc53086_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_be4dd23ba608039a781dd896e9ff2cb10f2ab42b3c278a469950e585e24148a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_be4dd23ba608039a781dd896e9ff2cb10f2ab42b3c278a469950e585e24148a3->enter($__internal_be4dd23ba608039a781dd896e9ff2cb10f2ab42b3c278a469950e585e24148a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_be4dd23ba608039a781dd896e9ff2cb10f2ab42b3c278a469950e585e24148a3->leave($__internal_be4dd23ba608039a781dd896e9ff2cb10f2ab42b3c278a469950e585e24148a3_prof);

        
        $__internal_a629bd9d6ada624233f01c054090492b6e8dbbd065c74d63ff7f849b5cc53086->leave($__internal_a629bd9d6ada624233f01c054090492b6e8dbbd065c74d63ff7f849b5cc53086_prof);

    }

    public function getTemplateName()
    {
        return "main/welcome.html.twig";
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
</html>", "main/welcome.html.twig", "C:\\xampp\\htdocs\\Symfony\\game\\templates\\main\\welcome.html.twig");
    }
}
