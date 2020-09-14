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

/* default/show.html.twig */
class __TwigTemplate_70a2c0ad01034b4b17cb56c9eab954e5298892ed1243b23564d4baa12811dfb5 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "default/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "default/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        echo "<h1>Posts</h1>";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div id=\"fh5co-main\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t<h2>";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        echo "</h2>
                    <span style=\"font-style: italic; font-size: 15px; color: #EF5353;\"><i class=\"icon-user\"></i> Posted by ";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "fullname", [], "any", false, false, false, 11), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 11, $this->source); })()), "publishedAt", [], "any", false, false, false, 11)), "html", null, true);
        echo "</span>
\t\t\t\t\t<div class=\"fh5co-spacer fh5co-spacer-sm\"></div>
\t\t\t\t\t<p>";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 13, $this->source); })()), "content", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
\t\t\t\t\t<a href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("homepage");
        echo "\" class=\"btn btn-primary\"><i class=\"icon-arrow-left2\"></i> Back</a>\t\t\t\t\t
\t\t\t\t\t<a href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("comment", ["post" => twig_get_attribute($this->env, $this->source, (isset($context["post"]) || array_key_exists("post", $context) ? $context["post"] : (function () { throw new RuntimeError('Variable "post" does not exist.', 15, $this->source); })()), "id", [], "any", false, false, false, 15)]), "html", null, true);
        echo "\" class=\"btn btn-primary\"><i class=\"icon-speech-bubble\"></i> Add comment</a>
\t\t\t\t</div>
        \t</div>
       </div>
\t</div>
\t";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "default/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 15,  109 => 14,  105 => 13,  98 => 11,  94 => 10,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block header %}<h1>Posts</h1>{% endblock %}

{% block body %}
    <div id=\"fh5co-main\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-8 col-md-offset-2\">
\t\t\t\t\t<h2>{{ post.title }}</h2>
                    <span style=\"font-style: italic; font-size: 15px; color: #EF5353;\"><i class=\"icon-user\"></i> Posted by {{ post.fullname }} - {{ post.publishedAt|date }}</span>
\t\t\t\t\t<div class=\"fh5co-spacer fh5co-spacer-sm\"></div>
\t\t\t\t\t<p>{{ post.content }}</p>
\t\t\t\t\t<a href=\"{{ path('homepage') }}\" class=\"btn btn-primary\"><i class=\"icon-arrow-left2\"></i> Back</a>\t\t\t\t\t
\t\t\t\t\t<a href=\"{{ path('comment', {post: post.id}) }}\" class=\"btn btn-primary\"><i class=\"icon-speech-bubble\"></i> Add comment</a>
\t\t\t\t</div>
        \t</div>
       </div>
\t</div>
\t{# <div id=\"fh5co-main\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t{% for comment in comments %}
\t\t\t\t<div class=\"col-md-2 col-md-offset-2\">
\t\t\t\t\t<h2>{{ comment.title }}</h2>
                    <span style=\"font-style: italic; font-size: 15px; color: #EF5353;\"><i class=\"icon-user\"></i> Posted by {{ comment.fullname }} - {{ comment.publishedAt|date }}</span>
\t\t\t\t\t<div class=\"fh5co-spacer fh5co-spacer-sm\"></div>
\t\t\t\t\t<p>{{ comment.content }}</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5 col-md-offset-2\">
\t\t\t\t\t<h2>{{ comment.title }}</h2>
                    <span style=\"font-style: italic; font-size: 15px; color: #EF5353;\"><i class=\"icon-user\"></i> Posted by {{ comment.fullname }} - {{ comment.publishedAt|date }}</span>
\t\t\t\t\t<div class=\"fh5co-spacer fh5co-spacer-sm\"></div>
\t\t\t\t\t<p>{{ comment.content }}</p>
\t\t\t\t</div>
\t\t\t{% endfor %}
        \t</div>
       </div>
\t</div> #}
{% endblock %}", "default/show.html.twig", "/home/guillaumeg/Periodico/periodico/app/Resources/views/default/show.html.twig");
    }
}
