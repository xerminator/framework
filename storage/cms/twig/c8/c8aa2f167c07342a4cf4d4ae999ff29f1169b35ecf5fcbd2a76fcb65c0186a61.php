<?php

/* C:\xampp\htdocs\framework/themes/rainlab-vanilla/layouts/default.htm */
class __TwigTemplate_88c8044f09fc6830761738fa87ea962f0d03699311f9f4a3e45cfb7bd45cc072 extends Twig_Template
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
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</title>
        <meta name=\"description\" content=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_description", array()), "html", null, true);
        echo "\">
        <meta name=\"title\" content=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "meta_title", array()), "html", null, true);
        echo "\">
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/october.png");
        echo "\" />
        ";
        // line 11
        echo $this->env->getExtension('CMS')->assetsFunction('css');
        echo $this->env->getExtension('CMS')->displayBlock('styles');
        // line 12
        echo "        <link href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/less/theme.less"));
        // line 14
        echo "\" rel=\"stylesheet\">
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">

            <!-- Nav -->
            <nav id=\"layout-nav\" class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("home");
        echo "\">Vanilla</a>
                    </div>
                    <div class=\"collapse navbar-collapse navbar-main-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"";
        // line 35
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "account")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("account");
        echo "\">Account</a></li>
                            <li class=\"";
        // line 36
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "blog")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("blog");
        echo "\">Blog</a></li>
                            <li class=\"";
        // line 37
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "forum")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("forum");
        echo "\">Forum</a></li>
                            <li class=\"";
        // line 38
        if (($this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "id", array()) == "overframework")) {
            echo "active";
        }
        echo "\"><a href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFilter("overframework");
        echo "\">over framework</a></li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            ";
        // line 41
        if (($context["user"] ?? null)) {
            // line 42
            echo "                                <li><a href=\"#\" data-request=\"onLogout\">Logout</a></li>
                            ";
        }
        // line 44
        echo "                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        ";
        // line 51
        $context["jumbotronTexture"] = twig_random($this->env, array(0 => "carbon", 1 => "dustnscratches", 2 => "elegant", 3 => "grunge", 4 => "leather", 5 => "lines", 6 => "plaid", 7 => "wood"));
        // line 52
        echo "
        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"jumbotron\" style=\"background-image:url(";
        // line 55
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter((("assets/images/textures/" . ($context["jumbotronTexture"] ?? null)) . ".png"));
        echo ")\">
                <div class=\"container\">
                    <h1>";
        // line 57
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "title", array()), "html", null, true);
        echo "</h1>
                    <p>";
        // line 58
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["this"] ?? null), "page", array()), "description", array()), "html", null, true);
        echo "</p>
                </div>
            </div>
            <div class=\"container\">
                ";
        // line 62
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 63
        echo "            </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 68
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 69
        echo "        </footer>

        <!-- Scripts -->
        <script src=\"";
        // line 72
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/javascript/jquery.js", 1 => "assets/vendor/bootstrap/js/transition.js", 2 => "assets/vendor/bootstrap/js/alert.js", 3 => "assets/vendor/bootstrap/js/button.js", 4 => "assets/vendor/bootstrap/js/carousel.js", 5 => "assets/vendor/bootstrap/js/collapse.js", 6 => "assets/vendor/bootstrap/js/dropdown.js", 7 => "assets/vendor/bootstrap/js/modal.js", 8 => "assets/vendor/bootstrap/js/tooltip.js", 9 => "assets/vendor/bootstrap/js/popover.js", 10 => "assets/vendor/bootstrap/js/scrollspy.js", 11 => "assets/vendor/bootstrap/js/tab.js", 12 => "assets/vendor/bootstrap/js/affix.js", 13 => "assets/javascript/app.js"));
        // line 87
        echo "\"></script>
        ";
        // line 88
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 89
        echo "        ";
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 90
        echo "
    </body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\framework/themes/rainlab-vanilla/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 90,  177 => 89,  170 => 88,  167 => 87,  165 => 72,  160 => 69,  156 => 68,  149 => 63,  147 => 62,  140 => 58,  136 => 57,  131 => 55,  126 => 52,  124 => 51,  115 => 44,  111 => 42,  109 => 41,  99 => 38,  91 => 37,  83 => 36,  75 => 35,  68 => 31,  49 => 14,  46 => 12,  43 => 11,  39 => 10,  33 => 7,  29 => 6,  25 => 5,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <title>October CMS - {{ this.page.title }}</title>
        <meta name=\"description\" content=\"{{ this.page.meta_description }}\">
        <meta name=\"title\" content=\"{{ this.page.meta_title }}\">
        <meta name=\"author\" content=\"October CMS\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" type=\"image/png\" href=\"{{ 'assets/images/october.png'|theme }}\" />
        {% styles %}
        <link href=\"{{ [
            'assets/less/theme.less'
        ]|theme }}\" rel=\"stylesheet\">
    </head>
    <body>

        <!-- Header -->
        <header id=\"layout-header\">

            <!-- Nav -->
            <nav id=\"layout-nav\" class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"navbar-header\">
                        <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-main-collapse\">
                            <span class=\"sr-only\">Toggle navigation</span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                            <span class=\"icon-bar\"></span>
                        </button>
                        <a class=\"navbar-brand\" href=\"{{ 'home'|page }}\">Vanilla</a>
                    </div>
                    <div class=\"collapse navbar-collapse navbar-main-collapse\">
                        <ul class=\"nav navbar-nav\">
                            <li class=\"{% if this.page.id == 'account' %}active{% endif %}\"><a href=\"{{ 'account'|page }}\">Account</a></li>
                            <li class=\"{% if this.page.id == 'blog' %}active{% endif %}\"><a href=\"{{ 'blog'|page }}\">Blog</a></li>
                            <li class=\"{% if this.page.id == 'forum' %}active{% endif %}\"><a href=\"{{ 'forum'|page }}\">Forum</a></li>
                            <li class=\"{% if this.page.id == 'overframework' %}active{% endif %}\"><a href=\"{{ 'overframework'|page }}\">over framework</a></li>
                        </ul>
                        <ul class=\"nav navbar-nav navbar-right\">
                            {% if user %}
                                <li><a href=\"#\" data-request=\"onLogout\">Logout</a></li>
                            {% endif %}
                        </ul>
                    </div>
                </div>
            </nav>

        </header>

        {% set jumbotronTexture = random(['carbon', 'dustnscratches', 'elegant', 'grunge', 'leather', 'lines', 'plaid', 'wood']) %}

        <!-- Content -->
        <section id=\"layout-content\">
            <div class=\"jumbotron\" style=\"background-image:url({{ ('assets/images/textures/'~jumbotronTexture~'.png')|theme }})\">
                <div class=\"container\">
                    <h1>{{ this.page.title }}</h1>
                    <p>{{ this.page.description }}</p>
                </div>
            </div>
            <div class=\"container\">
                {% page %}
            </div>
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial \"footer\" %}
        </footer>

        <!-- Scripts -->
        <script src=\"{{ [
            'assets/javascript/jquery.js',
            'assets/vendor/bootstrap/js/transition.js',
            'assets/vendor/bootstrap/js/alert.js',
            'assets/vendor/bootstrap/js/button.js',
            'assets/vendor/bootstrap/js/carousel.js',
            'assets/vendor/bootstrap/js/collapse.js',
            'assets/vendor/bootstrap/js/dropdown.js',
            'assets/vendor/bootstrap/js/modal.js',
            'assets/vendor/bootstrap/js/tooltip.js',
            'assets/vendor/bootstrap/js/popover.js',
            'assets/vendor/bootstrap/js/scrollspy.js',
            'assets/vendor/bootstrap/js/tab.js',
            'assets/vendor/bootstrap/js/affix.js',
            'assets/javascript/app.js'
        ]|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

    </body>
</html>", "C:\\xampp\\htdocs\\framework/themes/rainlab-vanilla/layouts/default.htm", "");
    }
}
