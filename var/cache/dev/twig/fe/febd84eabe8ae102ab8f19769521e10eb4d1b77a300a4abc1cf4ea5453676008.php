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

/* /_menu.html.twig */
class __TwigTemplate_64656d902b119151421d6ae1973723d33163d10754084ec9e3a5e2f18ebed38d extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/_menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/_menu.html.twig"));

        // line 1
        echo "<div id=\"fh5co-offcanvass\">
    <a href=\"#\" class=\"fh5co-offcanvass-close js-fh5co-offcanvass-close\">Menu <i class=\"icon-cross\"></i> </a>
    <h1 class=\"fh5co-logo\"><a class=\"navbar-brand\" href=\"";
        // line 3
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\">The time of a Symfony Blog</a></h1>
    <ul>
        <li";
        // line 5
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 5, $this->source); })()), "request", [], "any", false, false, false, 5), "get", [0 => "_route"], "method", false, false, false, 5) == "homepage")) ? (" class=\"active\"") : (""));
        echo "><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\"><i class=\"icon-home\"></i> Homepage</a></li>
        <li";
        // line 6
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "request", [], "any", false, false, false, 6), "get", [0 => "_route"], "method", false, false, false, 6) == "about")) ? (" class=\"active\"") : (""));
        echo "><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("about");
        echo "\"><i class=\"icon-info\"></i> About</a></li>
        <li";
        // line 7
        echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "request", [], "any", false, false, false, 7), "get", [0 => "_route"], "method", false, false, false, 7) == "contact")) ? (" class=\"active\"") : (""));
        echo "><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"><i class=\"icon-mail2\"></i> Contact</a></li><br/>
        ";
        // line 8
        if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "user", [], "any", false, false, false, 8)) {
            // line 9
            echo "            <li";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "request", [], "any", false, false, false, 9), "get", [0 => "_route"], "method", false, false, false, 9) == "profile")) ? (" class=\"active\"") : (""));
            echo "><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("profile");
            echo "\"><i class=\"icon-user\"></i> Profile</a></li> 
            <li";
            // line 10
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "request", [], "any", false, false, false, 10), "get", [0 => "_route"], "method", false, false, false, 10) == "post")) ? (" class=\"active\"") : (""));
            echo "><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
            echo "\"><i class=\"icon-file-add\"></i> Add Post</a></li><br/>
        ";
            // line 11
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN")) {
                // line 12
                echo "            <li";
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "request", [], "any", false, false, false, 12), "get", [0 => "_route"], "method", false, false, false, 12) == "admin_users")) ? (" class=\"active\"") : (""));
                echo "><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_user_list");
                echo "\"><i class=\"icon-users\"></i> Users</a></li>                 
            <li";
                // line 13
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "request", [], "any", false, false, false, 13), "get", [0 => "_route"], "method", false, false, false, 13) == "admin_users")) ? (" class=\"active\"") : (""));
                echo "><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_post_list");
                echo "\"><i class=\"icon-file\"></i> Posts</a></li>                 
            <li";
                // line 14
                echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "request", [], "any", false, false, false, 14), "get", [0 => "_route"], "method", false, false, false, 14) == "admin_contact_list")) ? (" class=\"active\"") : (""));
                echo "><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_contact_list");
                echo "\"><i class=\"icon-v-card\"></i> Contacts</a></li><br/>
        ";
            }
            // line 15
            echo " 
            <li><a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("logout");
            echo "\"><i class=\"icon-log-out\"></i> Logout (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "fullname", [], "any", false, false, false, 16), "html", null, true);
            echo ")</a></li>
        ";
        } else {
            // line 18
            echo "            <li";
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "request", [], "any", false, false, false, 18), "get", [0 => "_route"], "method", false, false, false, 18) == "register")) ? (" class=\"active\"") : (""));
            echo "><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
            echo "\"><i class=\"icon-add-user\"></i> Register</a></li>
            <li";
            // line 19
            echo (((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "request", [], "any", false, false, false, 19), "get", [0 => "_route"], "method", false, false, false, 19) == "login")) ? (" class=\"active\"") : (""));
            echo "><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
            echo "\"><i class=\"icon-login\"></i> Login</a></li>
        ";
        }
        // line 21
        echo "    </ul>
    <h3 class=\"fh5co-lead\">Language</h3>
    <p class=\"fh5co-social-icons\">
        <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "get", [0 => "_route"], "method", false, false, false, 24), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "request", [], "any", false, false, false, 24), "get", [0 => "_route_params"], "method", false, false, false, 24), ["_locale" => "fr"])), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/france.png"), "html", null, true);
        echo "\" alt=\"image\" style=\"width:30px;\"></a>
        <a href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", [0 => "_route"], "method", false, false, false, 25), twig_array_merge(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "request", [], "any", false, false, false, 25), "get", [0 => "_route_params"], "method", false, false, false, 25), ["_locale" => "en"])), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/uk.png"), "html", null, true);
        echo "\" alt=\"image\" style=\"width:30px;\"></a>
    </p>
    <h3 class=\"fh5co-lead\">Connect with us</h3>
    <p class=\"fh5co-social-icons\">
        <a href=\"#\"><i class=\"icon-twitter\"></i></a>
        <a href=\"#\"><i class=\"icon-facebook\"></i></a>
        <a href=\"#\"><i class=\"icon-instagram\"></i></a>
    </p>
</div>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 25,  136 => 24,  131 => 21,  124 => 19,  117 => 18,  110 => 16,  107 => 15,  100 => 14,  94 => 13,  87 => 12,  85 => 11,  79 => 10,  72 => 9,  70 => 8,  64 => 7,  58 => 6,  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"fh5co-offcanvass\">
    <a href=\"#\" class=\"fh5co-offcanvass-close js-fh5co-offcanvass-close\">Menu <i class=\"icon-cross\"></i> </a>
    <h1 class=\"fh5co-logo\"><a class=\"navbar-brand\" href=\"{{ path('homepage') }}\">The time of a Symfony Blog</a></h1>
    <ul>
        <li{{ app.request.get('_route') == 'homepage' ? ' class=\"active\"'}}><a href=\"{{ path('homepage') }}\"><i class=\"icon-home\"></i> Homepage</a></li>
        <li{{ app.request.get('_route') == 'about' ? ' class=\"active\"'}}><a href=\"{{ path('about') }}\"><i class=\"icon-info\"></i> About</a></li>
        <li{{ app.request.get('_route') == 'contact' ? ' class=\"active\"'}}><a href=\"{{ path('contact') }}\"><i class=\"icon-mail2\"></i> Contact</a></li><br/>
        {% if app.user %}
            <li{{ app.request.get('_route') == 'profile' ? ' class=\"active\"'}}><a href=\"{{ path('profile') }}\"><i class=\"icon-user\"></i> Profile</a></li> 
            <li{{ app.request.get('_route') == 'post' ? ' class=\"active\"'}}><a href=\"{{ path('post') }}\"><i class=\"icon-file-add\"></i> Add Post</a></li><br/>
        {% if is_granted('ROLE_ADMIN') %}
            <li{{ app.request.get('_route') == 'admin_users' ? ' class=\"active\"'}}><a href=\"{{ path('admin_user_list') }}\"><i class=\"icon-users\"></i> Users</a></li>                 
            <li{{ app.request.get('_route') == 'admin_users' ? ' class=\"active\"'}}><a href=\"{{ path('admin_post_list') }}\"><i class=\"icon-file\"></i> Posts</a></li>                 
            <li{{ app.request.get('_route') == 'admin_contact_list' ? ' class=\"active\"'}}><a href=\"{{ path('admin_contact_list') }}\"><i class=\"icon-v-card\"></i> Contacts</a></li><br/>
        {% endif %} 
            <li><a href=\"{{ path('logout') }}\"><i class=\"icon-log-out\"></i> Logout ({{ app.user.fullname }})</a></li>
        {% else %}
            <li{{ app.request.get('_route') == 'register' ? ' class=\"active\"'}}><a href=\"{{ path('register') }}\"><i class=\"icon-add-user\"></i> Register</a></li>
            <li{{ app.request.get('_route') == 'login' ? ' class=\"active\"'}}><a href=\"{{ path('login') }}\"><i class=\"icon-login\"></i> Login</a></li>
        {% endif %}
    </ul>
    <h3 class=\"fh5co-lead\">Language</h3>
    <p class=\"fh5co-social-icons\">
        <a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'fr'})) }}\"><img src=\"{{ asset('images/france.png') }}\" alt=\"image\" style=\"width:30px;\"></a>
        <a href=\"{{ path(app.request.get('_route'), app.request.get('_route_params')|merge({'_locale': 'en'})) }}\"><img src=\"{{ asset('images/uk.png') }}\" alt=\"image\" style=\"width:30px;\"></a>
    </p>
    <h3 class=\"fh5co-lead\">Connect with us</h3>
    <p class=\"fh5co-social-icons\">
        <a href=\"#\"><i class=\"icon-twitter\"></i></a>
        <a href=\"#\"><i class=\"icon-facebook\"></i></a>
        <a href=\"#\"><i class=\"icon-instagram\"></i></a>
    </p>
</div>
", "/_menu.html.twig", "/home/guillaumeg/Periodico/periodico/app/Resources/views/_menu.html.twig");
    }
}
