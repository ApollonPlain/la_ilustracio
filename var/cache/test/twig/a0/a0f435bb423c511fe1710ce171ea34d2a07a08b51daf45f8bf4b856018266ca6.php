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

/* default/index.html.twig */
class __TwigTemplate_f4f29db45f8df679d511080b54c59b96bdfcc6923588835219c9f3e17bc6996c extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <div class=\"w-full m-0 p-0 bg-cover bg-bottom\" style=\"background-image:url('cover.jpg'); height: 60vh; max-height:460px;\">
        <div class=\"container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal\">
            <!--Title-->
            <p class=\"text-white font-extrabold text-3xl md:text-5xl\">
                👻 Ghostwind CSS
            </p>
            <p class=\"text-xl md:text-2xl text-gray-500\">Welcome to my Blog</p>
        </div>
    </div>
        <div id=\"fh5co-main\">
            <p style=\"text-align: center;\">This blog is a wall especially dedicated to freedom of expression each opinion could be visible of all. 
            <br/>Since our form, express as of now by posting your anger, your messages of loves or hope, your questions...</p>
            <img sty class=\"w-100\"></img>
            <a href=\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post");
        echo "\" class=\"btn btn-primary\" style=\"display: block; width: 25%; margin: 0 auto 20px;\"><i class=\"icon-file-add\"></i> Add post</a>
        </div>

    \t <div id=\"fh5co-board\" data-columns>
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["posts"]) || array_key_exists("posts", $context) ? $context["posts"] : (function () { throw new RuntimeError('Variable "posts" does not exist.', 22, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 23
            echo "        \t<div class=\"item animate-box\">
            \t    ";
            // line 25
            echo "                    <div class=\"fh5co-desc\">
                        <h4>";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "title", [], "any", false, false, false, 26), "html", null, true);
            echo "</h4>
                        <p>";
            // line 27
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "content", [], "any", false, false, false, 27), 0, 100), "html", null, true);
            echo "...</p>
                        <span style=\"font-style: italic; font-size: 12px; color: #EF5353;\"><i class=\"icon-user\"></i> ";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "fullname", [], "any", false, false, false, 28), "html", null, true);
            echo "</span>
                        <span style=\"font-style: italic; font-size: 12px; color: #EF5353; margin-left: 20px;\"><i class=\"icon-calendar\"></i> ";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "publishedAt", [], "any", false, false, false, 29)), "html", null, true);
            echo "</span>
                        <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("post_show", ["id" => twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 30)]), "html", null, true);
            echo "\" class=\"btn btn-block btn-sm btn-outline\" style=\"display: block; text-align: center; padding: 10px; margin: 10px auto 0px; font-size: 13px;\"><i class=\"icon-eye\"></i> Lire la suite</a>
                    </div>
        \t</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "        </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 34,  117 => 30,  113 => 29,  109 => 28,  105 => 27,  101 => 26,  98 => 25,  95 => 23,  91 => 22,  84 => 18,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

    <div class=\"w-full m-0 p-0 bg-cover bg-bottom\" style=\"background-image:url('cover.jpg'); height: 60vh; max-height:460px;\">
        <div class=\"container max-w-4xl mx-auto pt-16 md:pt-32 text-center break-normal\">
            <!--Title-->
            <p class=\"text-white font-extrabold text-3xl md:text-5xl\">
                👻 Ghostwind CSS
            </p>
            <p class=\"text-xl md:text-2xl text-gray-500\">Welcome to my Blog</p>
        </div>
    </div>
        <div id=\"fh5co-main\">
            <p style=\"text-align: center;\">This blog is a wall especially dedicated to freedom of expression each opinion could be visible of all. 
            <br/>Since our form, express as of now by posting your anger, your messages of loves or hope, your questions...</p>
            <img sty class=\"w-100\"></img>
            <a href=\"{{ path('post') }}\" class=\"btn btn-primary\" style=\"display: block; width: 25%; margin: 0 auto 20px;\"><i class=\"icon-file-add\"></i> Add post</a>
        </div>

    \t <div id=\"fh5co-board\" data-columns>
            {% for post in posts %}
        \t<div class=\"item animate-box\">
            \t    {# <a href=\"{{ asset('images/img_10.jpg') }}\" class=\"image-popup fh5co-board-img\"><img src=\"{{ asset('images/img_10.jpg') }}\" alt=\"image\"></a> #}
                    <div class=\"fh5co-desc\">
                        <h4>{{ post.title }}</h4>
                        <p>{{ post.content | slice(0, 100) }}...</p>
                        <span style=\"font-style: italic; font-size: 12px; color: #EF5353;\"><i class=\"icon-user\"></i> {{ post.fullname }}</span>
                        <span style=\"font-style: italic; font-size: 12px; color: #EF5353; margin-left: 20px;\"><i class=\"icon-calendar\"></i> {{ post.publishedAt|date }}</span>
                        <a href=\"{{ path('post_show', {'id': post.id}) }}\" class=\"btn btn-block btn-sm btn-outline\" style=\"display: block; text-align: center; padding: 10px; margin: 10px auto 0px; font-size: 13px;\"><i class=\"icon-eye\"></i> Lire la suite</a>
                    </div>
        \t</div>
            {% endfor %}
        </div>
{% endblock %}
", "default/index.html.twig", "/home/guillaumeg/Periodico/la_ilustracion/app/Resources/views/default/index.html.twig");
    }
}
