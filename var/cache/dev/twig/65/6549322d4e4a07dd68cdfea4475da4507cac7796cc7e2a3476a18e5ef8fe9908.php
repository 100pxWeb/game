<?php

/* game.html.twig */
class __TwigTemplate_2ed5c719e8b04625c2b0669061f378451bb160ee4729042f1229e48736009793 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_82bd45e913a18fdcd13d113e788a06a416cdc3d0aa234a00886993ef33d549ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_82bd45e913a18fdcd13d113e788a06a416cdc3d0aa234a00886993ef33d549ca->enter($__internal_82bd45e913a18fdcd13d113e788a06a416cdc3d0aa234a00886993ef33d549ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "game.html.twig"));

        $__internal_5082b5ab270e574d26bbfa7f59c302ab4c70d29b94644d240aca4c577b428028 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5082b5ab270e574d26bbfa7f59c302ab4c70d29b94644d240aca4c577b428028->enter($__internal_5082b5ab270e574d26bbfa7f59c302ab4c70d29b94644d240aca4c577b428028_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "game.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"pl\">
<head>
    <title></title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 10
        echo "</head>
<body>
<div id=\"app\">bbbbbbbbbbbbbbbbb CONTENT</div>

<footer class=\"footer\">
    <div class=\"container text-center\">
        yo yo oyoy
        ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new Twig_Error_Runtime('Variable "test" does not exist.', 17, $this->getSourceContext()); })()), "html", null, true);
        echo "
    </div>
</footer>
<script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/assets/app.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
        
        $__internal_82bd45e913a18fdcd13d113e788a06a416cdc3d0aa234a00886993ef33d549ca->leave($__internal_82bd45e913a18fdcd13d113e788a06a416cdc3d0aa234a00886993ef33d549ca_prof);

        
        $__internal_5082b5ab270e574d26bbfa7f59c302ab4c70d29b94644d240aca4c577b428028->leave($__internal_5082b5ab270e574d26bbfa7f59c302ab4c70d29b94644d240aca4c577b428028_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a999cdd87438bfff95a36f4903307b2360165725c01d08a6bd7b19c3169af3a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a999cdd87438bfff95a36f4903307b2360165725c01d08a6bd7b19c3169af3a7->enter($__internal_a999cdd87438bfff95a36f4903307b2360165725c01d08a6bd7b19c3169af3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_190e8b9cd5fff754d97f66568745201a4dc6affaeef06edd5fbfa5adb5c73ab0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_190e8b9cd5fff754d97f66568745201a4dc6affaeef06edd5fbfa5adb5c73ab0->enter($__internal_190e8b9cd5fff754d97f66568745201a4dc6affaeef06edd5fbfa5adb5c73ab0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_190e8b9cd5fff754d97f66568745201a4dc6affaeef06edd5fbfa5adb5c73ab0->leave($__internal_190e8b9cd5fff754d97f66568745201a4dc6affaeef06edd5fbfa5adb5c73ab0_prof);

        
        $__internal_a999cdd87438bfff95a36f4903307b2360165725c01d08a6bd7b19c3169af3a7->leave($__internal_a999cdd87438bfff95a36f4903307b2360165725c01d08a6bd7b19c3169af3a7_prof);

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
        return array (  73 => 8,  64 => 7,  51 => 20,  45 => 17,  36 => 10,  34 => 7,  26 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!doctype html>
<html lang=\"pl\">
<head>
    <title></title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"{{ asset('css/styles.css') }}\">
    {% endblock %}
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
