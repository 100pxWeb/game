<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_c111adb8adaa74d0f7ff4cf541a21bd9152e08735f3460ffbfb9145217f6bd78 extends Twig_Template
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
        $__internal_9bb6f583067abdd5b755fb623a624496e63e4b6b76e05a5a0eeb8526b63fab7d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9bb6f583067abdd5b755fb623a624496e63e4b6b76e05a5a0eeb8526b63fab7d->enter($__internal_9bb6f583067abdd5b755fb623a624496e63e4b6b76e05a5a0eeb8526b63fab7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_2ceaf910322a5e3e3f8b587b9e8753ef9905db68afdce820464b8e729207ed7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ceaf910322a5e3e3f8b587b9e8753ef9905db68afdce820464b8e729207ed7f->enter($__internal_2ceaf910322a5e3e3f8b587b9e8753ef9905db68afdce820464b8e729207ed7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_9bb6f583067abdd5b755fb623a624496e63e4b6b76e05a5a0eeb8526b63fab7d->leave($__internal_9bb6f583067abdd5b755fb623a624496e63e4b6b76e05a5a0eeb8526b63fab7d_prof);

        
        $__internal_2ceaf910322a5e3e3f8b587b9e8753ef9905db68afdce820464b8e729207ed7f->leave($__internal_2ceaf910322a5e3e3f8b587b9e8753ef9905db68afdce820464b8e729207ed7f_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\xampp\\htdocs\\Symfony\\game\\vendor\\symfony\\web-profiler-bundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
