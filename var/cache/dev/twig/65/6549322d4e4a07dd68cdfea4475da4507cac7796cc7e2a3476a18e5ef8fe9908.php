<?php

/* game.html.twig */
class __TwigTemplate_2ed5c719e8b04625c2b0669061f378451bb160ee4729042f1229e48736009793 extends Twig_Template
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
        $__internal_e0a31597c6bca5eedac12f5ab102e052f3127f41965f3d8e301044f441e878eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0a31597c6bca5eedac12f5ab102e052f3127f41965f3d8e301044f441e878eb->enter($__internal_e0a31597c6bca5eedac12f5ab102e052f3127f41965f3d8e301044f441e878eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "game.html.twig"));

        $__internal_422169ffdd57b02994fb4f78a128eb93a900c7e5692651d5f482ae8d511fa48d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_422169ffdd57b02994fb4f78a128eb93a900c7e5692651d5f482ae8d511fa48d->enter($__internal_422169ffdd57b02994fb4f78a128eb93a900c7e5692651d5f482ae8d511fa48d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "game.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"pl\">
<head>
    <title></title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

</head>
<body>
<div id=\"app\">bbbbbbbbbbbbbbbbb CONTENT</div>

<footer class=\"footer\">
    <div class=\"container text-center\">
        yo yo oyoy
        ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new Twig_Error_Runtime('Variable "test" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "
    </div>
</footer>
<script type=\"text/javascript\" src=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/assets/app.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_e0a31597c6bca5eedac12f5ab102e052f3127f41965f3d8e301044f441e878eb->leave($__internal_e0a31597c6bca5eedac12f5ab102e052f3127f41965f3d8e301044f441e878eb_prof);

        
        $__internal_422169ffdd57b02994fb4f78a128eb93a900c7e5692651d5f482ae8d511fa48d->leave($__internal_422169ffdd57b02994fb4f78a128eb93a900c7e5692651d5f482ae8d511fa48d_prof);

    }

    public function getTemplateName()
    {
        return "game.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 18,  41 => 15,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"pl\">
<head>
    <title></title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

</head>
<body>
<div id=\"app\">bbbbbbbbbbbbbbbbb CONTENT</div>

<footer class=\"footer\">
    <div class=\"container text-center\">
        yo yo oyoy
        {{ test }}
    </div>
</footer>
<script type=\"text/javascript\" src=\"{{ asset('dist/assets/app.js') }}\"></script>
</body>
</html>", "game.html.twig", "C:\\xampp\\htdocs\\Symfony\\game\\templates\\game.html.twig");
    }
}
