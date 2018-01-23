<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_0c1b1d178b776aac148f9ac81ae9f70f5787716e0757692c9cf873bd5d8bca7d extends Twig_Template
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
        $__internal_3a64b9bf9017df38d1e8b0ff67a4cb75c6765404a078a0444ab7277c4ffed623 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a64b9bf9017df38d1e8b0ff67a4cb75c6765404a078a0444ab7277c4ffed623->enter($__internal_3a64b9bf9017df38d1e8b0ff67a4cb75c6765404a078a0444ab7277c4ffed623_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_3a64b9bf9017df38d1e8b0ff67a4cb75c6765404a078a0444ab7277c4ffed623->leave($__internal_3a64b9bf9017df38d1e8b0ff67a4cb75c6765404a078a0444ab7277c4ffed623_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_18c634760b126bf3c84bd022a878029ad35b47c4216e3d48ba31db0732d97263 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18c634760b126bf3c84bd022a878029ad35b47c4216e3d48ba31db0732d97263->enter($__internal_18c634760b126bf3c84bd022a878029ad35b47c4216e3d48ba31db0732d97263_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_18c634760b126bf3c84bd022a878029ad35b47c4216e3d48ba31db0732d97263->leave($__internal_18c634760b126bf3c84bd022a878029ad35b47c4216e3d48ba31db0732d97263_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_885eb4ed038076437cecb2e4eecb75af819d95b6174944d0cf2b77a0d996364c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885eb4ed038076437cecb2e4eecb75af819d95b6174944d0cf2b77a0d996364c->enter($__internal_885eb4ed038076437cecb2e4eecb75af819d95b6174944d0cf2b77a0d996364c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_885eb4ed038076437cecb2e4eecb75af819d95b6174944d0cf2b77a0d996364c->leave($__internal_885eb4ed038076437cecb2e4eecb75af819d95b6174944d0cf2b77a0d996364c_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b2025444b43cdede2c59c955e88a8706d4687872abe0440e18b701fb5ce6af0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2025444b43cdede2c59c955e88a8706d4687872abe0440e18b701fb5ce6af0d->enter($__internal_b2025444b43cdede2c59c955e88a8706d4687872abe0440e18b701fb5ce6af0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b2025444b43cdede2c59c955e88a8706d4687872abe0440e18b701fb5ce6af0d->leave($__internal_b2025444b43cdede2c59c955e88a8706d4687872abe0440e18b701fb5ce6af0d_prof);

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
        return array (  119 => 33,  108 => 10,  97 => 7,  85 => 34,  83 => 33,  73 => 26,  63 => 19,  56 => 15,  50 => 11,  48 => 10,  44 => 9,  40 => 8,  36 => 7,  30 => 4,  25 => 1,);
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
", "@Twig/layout.html.twig", "/home/admin01/my_projec/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
