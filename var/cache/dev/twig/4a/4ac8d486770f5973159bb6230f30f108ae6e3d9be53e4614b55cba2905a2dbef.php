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

/* artmath/suite_carre.html.twig */
class __TwigTemplate_31510c32eb44b0fd625cf4dc6ad8e0662f3b46313ceb3344aaaf964e68f8041e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artmath/suite_carre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artmath/suite_carre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "artmath/suite_carre.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Art mathématique";
        
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
        echo "<div>
    <h1>Paramètres :</h1>
    <!-- C'est grâce à l'attribut name que l'on peut récupérer la valeur associée dans symfony -->
    <form method=\"post\" action=\"/calculer_suite_carre\">
        <div>
            <label for=\"staticTaille\" class=\"form-label\">Taille</label>
                <input type=\"range\" class=\"form-range\" min=\"300\" max=\"1920\" step=\"1\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () { throw new RuntimeError('Variable "taille" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\" id=\"staticTaille\" name=\"taille\">
            <label for=\"staticRemplissage\" class=\"form-label\">Remplissage</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"1920\" step=\"1\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["remplissage"]) || array_key_exists("remplissage", $context) ? $context["remplissage"] : (function () { throw new RuntimeError('Variable "remplissage" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\" id=\"staticRemplissage\" name=\"remplissage\">
            <label for=\"staticNb_carres\" class=\"form-label\">Nombre Carres</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"10000\" step=\"1\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["nb_carres"]) || array_key_exists("nb_carres", $context) ? $context["nb_carres"] : (function () { throw new RuntimeError('Variable "nb_carres" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" id=\"staticNb_carres\" name=\"nb_carres\">
            <label for=\"staticDecalage\" class=\"form-label\">Décalage</label>
                <input type=\"range\" class=\"form-range\" min=\"0.001\" max=\"0.999\" step=\"0.001\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["decalage"]) || array_key_exists("decalage", $context) ? $context["decalage"] : (function () { throw new RuntimeError('Variable "decalage" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" id=\"staticDecalage\" name=\"decalage\">
        </div>
        <div>
            <button type=\"submit\" class=\"btn btn-primary\" name=\"calculer\" value=\"1\">Calculer</button>
            <button type=\"submit\" class=\"btn btn-danger\" name=\"imprimer\" value=\"1\">Imprimer</button>
        </div>
    </form>

    <h1> Résultat : </h1>
    <img src=\"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["fichier"]) || array_key_exists("fichier", $context) ? $context["fichier"] : (function () { throw new RuntimeError('Variable "fichier" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\" width=\"100%\">
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "artmath/suite_carre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 27,  111 => 18,  106 => 16,  101 => 14,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Art mathématique{% endblock %}

{% block body %}
<div>
    <h1>Paramètres :</h1>
    <!-- C'est grâce à l'attribut name que l'on peut récupérer la valeur associée dans symfony -->
    <form method=\"post\" action=\"/calculer_suite_carre\">
        <div>
            <label for=\"staticTaille\" class=\"form-label\">Taille</label>
                <input type=\"range\" class=\"form-range\" min=\"300\" max=\"1920\" step=\"1\" value=\"{{taille}}\" id=\"staticTaille\" name=\"taille\">
            <label for=\"staticRemplissage\" class=\"form-label\">Remplissage</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"1920\" step=\"1\" value=\"{{remplissage}}\" id=\"staticRemplissage\" name=\"remplissage\">
            <label for=\"staticNb_carres\" class=\"form-label\">Nombre Carres</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"10000\" step=\"1\" value=\"{{nb_carres}}\" id=\"staticNb_carres\" name=\"nb_carres\">
            <label for=\"staticDecalage\" class=\"form-label\">Décalage</label>
                <input type=\"range\" class=\"form-range\" min=\"0.001\" max=\"0.999\" step=\"0.001\" value=\"{{decalage}}\" id=\"staticDecalage\" name=\"decalage\">
        </div>
        <div>
            <button type=\"submit\" class=\"btn btn-primary\" name=\"calculer\" value=\"1\">Calculer</button>
            <button type=\"submit\" class=\"btn btn-danger\" name=\"imprimer\" value=\"1\">Imprimer</button>
        </div>
    </form>

    <h1> Résultat : </h1>
    <img src=\"{{fichier}}\" width=\"100%\">
</div>
{% endblock %}", "artmath/suite_carre.html.twig", "/var/www/artmath/templates/artmath/suite_carre.html.twig");
    }
}
