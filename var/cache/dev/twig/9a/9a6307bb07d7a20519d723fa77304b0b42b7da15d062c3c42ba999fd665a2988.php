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

/* /user/_login.html.twig */
class __TwigTemplate_a4e058b4ff5fd6cfd7f5ac38b249eef0a820c7b47cb7c09a35e93b1d37358d78 extends \Twig\Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/_login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "/user/_login.html.twig"));

        // line 1
        echo "<div id=\"fh5co-main\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <h2>Login</h2>
                <div class=\"fh5co-spacer fh5co-spacer-sm\"></div>
                <form action=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("login");
        echo "\" method=\"post\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Username\" id=\"username\" name=\"_username\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, ((array_key_exists("last_username", $context)) ? (_twig_default_filter((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 11, $this->source); })()))) : ("")), "html", null, true);
        echo "\" />
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" type=\"password\" placeholder=\"Password\" id=\"password\" name=\"_password\" >
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"form-group\">
                                <button class=\"btn-primary btn\" type=\"submit\"><i class=\"icon-login\"></i> Login</button>
                                <a href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("register");
        echo "\">Register</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "/user/_login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 22,  58 => 11,  51 => 7,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id=\"fh5co-main\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <h2>Login</h2>
                <div class=\"fh5co-spacer fh5co-spacer-sm\"></div>
                <form action=\"{{ path('login') }}\" method=\"post\">
                    <div class=\"row\">
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" type=\"text\" placeholder=\"Username\" id=\"username\" name=\"_username\" value=\"{{ last_username|default() }}\" />
                            </div>
                        </div>
                        <div class=\"col-md-6\">
                            <div class=\"form-group\">
                                <input class=\"form-control\" type=\"password\" placeholder=\"Password\" id=\"password\" name=\"_password\" >
                            </div>
                        </div>
                        <div class=\"col-md-5\">
                            <div class=\"form-group\">
                                <button class=\"btn-primary btn\" type=\"submit\"><i class=\"icon-login\"></i> Login</button>
                                <a href=\"{{ path('register') }}\">Register</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>", "/user/_login.html.twig", "/home/guillaumeg/Periodico/periodico/app/Resources/views/user/_login.html.twig");
    }
}
