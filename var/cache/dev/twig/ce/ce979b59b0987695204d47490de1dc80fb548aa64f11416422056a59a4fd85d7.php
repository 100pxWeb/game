<?php

/* main/game.html.twig */
class __TwigTemplate_91ee3a19ca79b1cb120f73cbc6c147ac5b2adaa64861dbca3b3111d865b8016d extends Twig_Template
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
        $__internal_add082696a20d585840ca7e5135a3681d77aa0f842c6f825a06b2fcac767b37c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_add082696a20d585840ca7e5135a3681d77aa0f842c6f825a06b2fcac767b37c->enter($__internal_add082696a20d585840ca7e5135a3681d77aa0f842c6f825a06b2fcac767b37c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/game.html.twig"));

        $__internal_5fcc8412d477c828a1c8881b19315ea2c368915675943cefb03ab0936e6d7415 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fcc8412d477c828a1c8881b19315ea2c368915675943cefb03ab0936e6d7415->enter($__internal_5fcc8412d477c828a1c8881b19315ea2c368915675943cefb03ab0936e6d7415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "main/game.html.twig"));

        // line 1
        echo "<!doctype html>
<html lang=\"pl\">
<head>
    <title></title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">

</head>
<body>


<footer class=\"footer\">
    <div class=\"container text-center\">
        yo yo oyoy
        ";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["test"]) || array_key_exists("test", $context) ? $context["test"] : (function () { throw new Twig_Error_Runtime('Variable "test" does not exist.', 15, $this->getSourceContext()); })()), "html", null, true);
        echo "
    </div>
</footer>

</body>
</html>";
        
        $__internal_add082696a20d585840ca7e5135a3681d77aa0f842c6f825a06b2fcac767b37c->leave($__internal_add082696a20d585840ca7e5135a3681d77aa0f842c6f825a06b2fcac767b37c_prof);

        
        $__internal_5fcc8412d477c828a1c8881b19315ea2c368915675943cefb03ab0936e6d7415->leave($__internal_5fcc8412d477c828a1c8881b19315ea2c368915675943cefb03ab0936e6d7415_prof);

    }

    public function getTemplateName()
    {
        return "main/game.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 15,  25 => 1,);
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


<footer class=\"footer\">
    <div class=\"container text-center\">
        yo yo oyoy
        {{ test }}
    </div>
</footer>

</body>
</html>", "main/game.html.twig", "C:\\xampp\\htdocs\\Symfony\\game\\templates\\main\\game.html.twig");
    }
}
