<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_41515f9e687c3163cd9db34737e7893f76775db0852793839a1214c62cb31c1c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>The time of a Symfony Blog</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"This blog is a wall especially dedicated to freedom of expression each opinion could be visible of all.\" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />

        <!-- Google Webfonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        
        ";
        // line 17
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 18
        echo "        <!-- Main.css -->
        <link rel=\"stylesheet\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">
        <!-- Animate.css -->
        <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/animate.css"), "html", null, true);
        echo "\">
        <!-- Icomoon Icon Fonts-->
        <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/icomoon.css"), "html", null, true);
        echo "\">
        <!-- Magnific Popup -->
        <link rel=\"stylesheet\" href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/magnific-popup.css"), "html", null, true);
        echo "\">
        <!-- Salvattore -->
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/salvattore.css"), "html", null, true);
        echo "\">
        <!-- Theme Style -->
        <link rel=\"stylesheet\" href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        echo "\">
        <!-- Modernizr JS -->
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/modernizr-2.6.2.min.js"), "html", null, true);
        echo "\"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/respond.min.js"), "html", null, true);
        echo "\"></script>
        <![endif]-->

\t</head>
    <body>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "flashes", [0 => [0 => "success", 1 => "warning", 2 => "error"]], "method", false, false, false, 39));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 40
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 41
                echo "                <div class=\"alert alert-";
                echo twig_escape_filter($this->env, twig_replace_filter($context["label"], ["error" => "danger"]), "html", null, true);
                echo "\">
                    ";
                // line 42
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "        ";
        echo twig_include($this->env, $context, "/_menu.html.twig");
        echo "
        <header id=\"fh5co-header\" role=\"banner\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <a href=\"#\" class=\"fh5co-menu-btn js-fh5co-menu-btn\">Menu <i class=\"icon-menu\"></i></a>
                        <a class=\"navbar-brand\" href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo.png"), "html", null, true);
        echo "\" style=\"width: 150px;\"/></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- END .header -->

        <div id=\"fh5co-main\">
            <div class=\"container\">
                <div class=\"row\">   
                    ";
        // line 62
        $this->displayBlock('body', $context, $blocks);
        // line 63
        echo "                </div>
            </div>
        </div>

\t<footer id=\"fh5co-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row row-padded\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<p class=\"fh5co-social-icons\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-linkedin\"></i></a>
\t\t\t\t\t</p>
\t\t\t\t\t<p><small>2017 &copy; Dany PHENGSIAROUN & Fayçal OSSENI. All Rights Reserved.</small></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>

        <!-- jQuery -->
        <script src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <!-- jQuery Easing -->
        <script src=\"";
        // line 86
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
        <!-- Bootstrap -->
        <script src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Waypoints -->
        <script src=\"";
        // line 90
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.waypoints.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Magnific Popup -->
        <script src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Salvattore -->
        <script src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/salvattore.min.js"), "html", null, true);
        echo "\"></script>
        <!-- Main JS -->
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 17
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 62,  238 => 17,  224 => 96,  219 => 94,  214 => 92,  209 => 90,  204 => 88,  199 => 86,  194 => 84,  171 => 63,  169 => 62,  154 => 52,  144 => 46,  138 => 45,  129 => 42,  124 => 41,  119 => 40,  115 => 39,  107 => 34,  101 => 31,  96 => 29,  91 => 27,  86 => 25,  81 => 23,  76 => 21,  71 => 19,  68 => 18,  66 => 17,  57 => 11,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <title>The time of a Symfony Blog</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"This blog is a wall especially dedicated to freedom of expression each opinion could be visible of all.\" />

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />

        <!-- Google Webfonts -->
        <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        
        {% block stylesheets %}{% endblock %}
        <!-- Main.css -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/main.css') }}\">
        <!-- Animate.css -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/animate.css') }}\">
        <!-- Icomoon Icon Fonts-->
        <link rel=\"stylesheet\" href=\"{{ asset('css/icomoon.css') }}\">
        <!-- Magnific Popup -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/magnific-popup.css') }}\">
        <!-- Salvattore -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/salvattore.css') }}\">
        <!-- Theme Style -->
        <link rel=\"stylesheet\" href=\"{{ asset('css/style.css') }}\">
        <!-- Modernizr JS -->
        <script src=\"{{ asset('js/modernizr-2.6.2.min.js') }}\"></script>
        <!-- FOR IE9 below -->
        <!--[if lt IE 9]>
        <script src=\"{{ asset('js/respond.min.js') }}\"></script>
        <![endif]-->

\t</head>
    <body>
        {% for label, messages in app.flashes(['success', 'warning', 'error']) %}
            {% for message in messages %}
                <div class=\"alert alert-{{ label|replace({'error': 'danger'}) }}\">
                    {{ message }}
                </div>
            {% endfor %}
        {% endfor %}
        {{ include ('/_menu.html.twig') }}
        <header id=\"fh5co-header\" role=\"banner\">
            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-12\">
                        <a href=\"#\" class=\"fh5co-menu-btn js-fh5co-menu-btn\">Menu <i class=\"icon-menu\"></i></a>
                        <a class=\"navbar-brand\" href=\"{{ path('homepage') }}\"><img src=\"{{ asset('images/logo.png')}}\" style=\"width: 150px;\"/></a>
                    </div>
                </div>
            </div>
        </header>
        <!-- END .header -->

        <div id=\"fh5co-main\">
            <div class=\"container\">
                <div class=\"row\">   
                    {% block body %}{% endblock %}
                </div>
            </div>
        </div>

\t<footer id=\"fh5co-footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row row-padded\">
\t\t\t\t<div class=\"col-md-12 text-center\">
\t\t\t\t\t<p class=\"fh5co-social-icons\">
\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-twitter\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-facebook\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-instagram\"></i></a>
\t\t\t\t\t\t<a href=\"#\"><i class=\"icon-linkedin\"></i></a>
\t\t\t\t\t</p>
\t\t\t\t\t<p><small>2017 &copy; Dany PHENGSIAROUN & Fayçal OSSENI. All Rights Reserved.</small></p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</footer>

        <!-- jQuery -->
        <script src=\"{{ asset('js/jquery.min.js') }}\"></script>
        <!-- jQuery Easing -->
        <script src=\"{{ asset('js/jquery.easing.1.3.js') }}\"></script>
        <!-- Bootstrap -->
        <script src=\"{{ asset('js/bootstrap.min.js') }}\"></script>
        <!-- Waypoints -->
        <script src=\"{{ asset('js/jquery.waypoints.min.js') }}\"></script>
        <!-- Magnific Popup -->
        <script src=\"{{ asset('js/jquery.magnific-popup.min.js') }}\"></script>
        <!-- Salvattore -->
        <script src=\"{{ asset('js/salvattore.min.js') }}\"></script>
        <!-- Main JS -->
        <script src=\"{{ asset('js/main.js') }}\"></script>
    </body>
</html>
", "base.html.twig", "/home/guillaumeg/Periodico/la_ilustracion/app/Resources/views/base.html.twig");
    }
}
