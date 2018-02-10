<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_13476f6ac7a2c6c18a8f227843ec0b7d48f72631d569298438478ce3219e779c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ade6e02d047ec67ad4e4597038597c47b96c6b14f166912771dc05d122404638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ade6e02d047ec67ad4e4597038597c47b96c6b14f166912771dc05d122404638->enter($__internal_ade6e02d047ec67ad4e4597038597c47b96c6b14f166912771dc05d122404638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_607a4311781457b94e2619d9b7c1eaa6d5c606dd0b438703b6da3b35853c7cea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_607a4311781457b94e2619d9b7c1eaa6d5c606dd0b438703b6da3b35853c7cea->enter($__internal_607a4311781457b94e2619d9b7c1eaa6d5c606dd0b438703b6da3b35853c7cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_ade6e02d047ec67ad4e4597038597c47b96c6b14f166912771dc05d122404638->leave($__internal_ade6e02d047ec67ad4e4597038597c47b96c6b14f166912771dc05d122404638_prof);

        
        $__internal_607a4311781457b94e2619d9b7c1eaa6d5c606dd0b438703b6da3b35853c7cea->leave($__internal_607a4311781457b94e2619d9b7c1eaa6d5c606dd0b438703b6da3b35853c7cea_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_43dd798ae6d84a9fe3cc0dada54a44e85c71cbd774a40c55ddf85c3fbd5edbdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43dd798ae6d84a9fe3cc0dada54a44e85c71cbd774a40c55ddf85c3fbd5edbdb->enter($__internal_43dd798ae6d84a9fe3cc0dada54a44e85c71cbd774a40c55ddf85c3fbd5edbdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_44eca11d7233cf4f5ca08b7f6f0eef2cac0b98531e22b6787293b53dcfd19db1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44eca11d7233cf4f5ca08b7f6f0eef2cac0b98531e22b6787293b53dcfd19db1->enter($__internal_44eca11d7233cf4f5ca08b7f6f0eef2cac0b98531e22b6787293b53dcfd19db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_44eca11d7233cf4f5ca08b7f6f0eef2cac0b98531e22b6787293b53dcfd19db1->leave($__internal_44eca11d7233cf4f5ca08b7f6f0eef2cac0b98531e22b6787293b53dcfd19db1_prof);

        
        $__internal_43dd798ae6d84a9fe3cc0dada54a44e85c71cbd774a40c55ddf85c3fbd5edbdb->leave($__internal_43dd798ae6d84a9fe3cc0dada54a44e85c71cbd774a40c55ddf85c3fbd5edbdb_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_8b1c4cc33a855af82c423c627a26fd86099f3a72c789da2fa688980accd349b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b1c4cc33a855af82c423c627a26fd86099f3a72c789da2fa688980accd349b6->enter($__internal_8b1c4cc33a855af82c423c627a26fd86099f3a72c789da2fa688980accd349b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3119f67485199b197fd786bcfffb37c58d00c1876b7827dfaf2086e3f1db276c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3119f67485199b197fd786bcfffb37c58d00c1876b7827dfaf2086e3f1db276c->enter($__internal_3119f67485199b197fd786bcfffb37c58d00c1876b7827dfaf2086e3f1db276c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_3119f67485199b197fd786bcfffb37c58d00c1876b7827dfaf2086e3f1db276c->leave($__internal_3119f67485199b197fd786bcfffb37c58d00c1876b7827dfaf2086e3f1db276c_prof);

        
        $__internal_8b1c4cc33a855af82c423c627a26fd86099f3a72c789da2fa688980accd349b6->leave($__internal_8b1c4cc33a855af82c423c627a26fd86099f3a72c789da2fa688980accd349b6_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_f18b8f8e8c57e33aba69ad0ebee7854a5adfa768542de530556029587e560170 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f18b8f8e8c57e33aba69ad0ebee7854a5adfa768542de530556029587e560170->enter($__internal_f18b8f8e8c57e33aba69ad0ebee7854a5adfa768542de530556029587e560170_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e9aad636f8375c5d289cc789fbf397cf4dfbe779ae83ca9af3f9268931a836c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9aad636f8375c5d289cc789fbf397cf4dfbe779ae83ca9af3f9268931a836c1->enter($__internal_e9aad636f8375c5d289cc789fbf397cf4dfbe779ae83ca9af3f9268931a836c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e9aad636f8375c5d289cc789fbf397cf4dfbe779ae83ca9af3f9268931a836c1->leave($__internal_e9aad636f8375c5d289cc789fbf397cf4dfbe779ae83ca9af3f9268931a836c1_prof);

        
        $__internal_f18b8f8e8c57e33aba69ad0ebee7854a5adfa768542de530556029587e560170->leave($__internal_f18b8f8e8c57e33aba69ad0ebee7854a5adfa768542de530556029587e560170_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\xampp\\htdocs\\Symfony\\game\\vendor\\symfony\\twig-bundle\\Resources\\views\\layout.html.twig");
    }
}
