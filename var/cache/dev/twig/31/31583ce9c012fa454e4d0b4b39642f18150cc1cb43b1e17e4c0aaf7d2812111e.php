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
        $__internal_658091bba9e8c66ced1dbd38852741444706f4b8e15852e676167618e3f577df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_658091bba9e8c66ced1dbd38852741444706f4b8e15852e676167618e3f577df->enter($__internal_658091bba9e8c66ced1dbd38852741444706f4b8e15852e676167618e3f577df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "welcome.html.twig"));

        $__internal_9d6a7363e69e8d7ed2d99e5504ead72c6029eac0881c70c4a25c6558338a2256 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d6a7363e69e8d7ed2d99e5504ead72c6029eac0881c70c4a25c6558338a2256->enter($__internal_9d6a7363e69e8d7ed2d99e5504ead72c6029eac0881c70c4a25c6558338a2256_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "welcome.html.twig"));

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
";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["error_login"]) || array_key_exists("error_login", $context) ? $context["error_login"] : (function () { throw new Twig_Error_Runtime('Variable "error_login" does not exist.', 12, $this->getSourceContext()); })()), "html", null, true);
        echo "
<footer class=\"footer\">
    <div class=\"container text-center\">
        ";
        // line 15
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 15, $this->getSourceContext()); })()), 'form_start');
        echo "
        ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 16, $this->getSourceContext()); })()), 'widget');
        echo "
        ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 17, $this->getSourceContext()); })()), 'form_end');
        echo "
    </div>
</footer>


    <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("dist/assets/app.js"), "html", null, true);
        echo "\"></script>


</body>
</html>";
        
        $__internal_658091bba9e8c66ced1dbd38852741444706f4b8e15852e676167618e3f577df->leave($__internal_658091bba9e8c66ced1dbd38852741444706f4b8e15852e676167618e3f577df_prof);

        
        $__internal_9d6a7363e69e8d7ed2d99e5504ead72c6029eac0881c70c4a25c6558338a2256->leave($__internal_9d6a7363e69e8d7ed2d99e5504ead72c6029eac0881c70c4a25c6558338a2256_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_5a900fe153a7826d8e19e9f8e15f41bab7a453a9d3ba5c89d284bcf55020f5af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5a900fe153a7826d8e19e9f8e15f41bab7a453a9d3ba5c89d284bcf55020f5af->enter($__internal_5a900fe153a7826d8e19e9f8e15f41bab7a453a9d3ba5c89d284bcf55020f5af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b8ec0bf329f17cdef4dfafb2571956b6b31a29b0d137028f8ee46fb9ca4dbbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8ec0bf329f17cdef4dfafb2571956b6b31a29b0d137028f8ee46fb9ca4dbbdc->enter($__internal_b8ec0bf329f17cdef4dfafb2571956b6b31a29b0d137028f8ee46fb9ca4dbbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome to the SpaceBar";
        
        $__internal_b8ec0bf329f17cdef4dfafb2571956b6b31a29b0d137028f8ee46fb9ca4dbbdc->leave($__internal_b8ec0bf329f17cdef4dfafb2571956b6b31a29b0d137028f8ee46fb9ca4dbbdc_prof);

        
        $__internal_5a900fe153a7826d8e19e9f8e15f41bab7a453a9d3ba5c89d284bcf55020f5af->leave($__internal_5a900fe153a7826d8e19e9f8e15f41bab7a453a9d3ba5c89d284bcf55020f5af_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_400735783e47156d455eae43375fb659f898cf68b8fd8d18360835d10f0b3725 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400735783e47156d455eae43375fb659f898cf68b8fd8d18360835d10f0b3725->enter($__internal_400735783e47156d455eae43375fb659f898cf68b8fd8d18360835d10f0b3725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_57a997f19a41243cb87e3c4307806dfaf0bd315d4dd0f25ca52b92bba0f5de8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57a997f19a41243cb87e3c4307806dfaf0bd315d4dd0f25ca52b92bba0f5de8c->enter($__internal_57a997f19a41243cb87e3c4307806dfaf0bd315d4dd0f25ca52b92bba0f5de8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "        <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/styles.css"), "html", null, true);
        echo "\">
    ";
        
        $__internal_57a997f19a41243cb87e3c4307806dfaf0bd315d4dd0f25ca52b92bba0f5de8c->leave($__internal_57a997f19a41243cb87e3c4307806dfaf0bd315d4dd0f25ca52b92bba0f5de8c_prof);

        
        $__internal_400735783e47156d455eae43375fb659f898cf68b8fd8d18360835d10f0b3725->leave($__internal_400735783e47156d455eae43375fb659f898cf68b8fd8d18360835d10f0b3725_prof);

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
        return array (  108 => 8,  99 => 7,  81 => 4,  66 => 22,  58 => 17,  54 => 16,  50 => 15,  44 => 12,  40 => 10,  38 => 7,  32 => 4,  27 => 1,);
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
