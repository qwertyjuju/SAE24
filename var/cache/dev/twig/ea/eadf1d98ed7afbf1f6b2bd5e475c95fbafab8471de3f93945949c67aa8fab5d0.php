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

/* artmath/nee_carre.html.twig */
class __TwigTemplate_b040b59f1e4dacaed669edcb7e8dae2fd74c53cfc5ada0877f11497fc5c84ba9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artmath/nee_carre.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "artmath/nee_carre.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "artmath/nee_carre.html.twig", 1);
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
    <form method=\"post\" action=\"/calculer_nee_carre\">
        <div>
            <label for=\"staticTaille\" class=\"form-label\">Taille</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"200\" step=\"1\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["taille"]) || array_key_exists("taille", $context) ? $context["taille"] : (function () { throw new RuntimeError('Variable "taille" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\" id=\"staticTaille\" name=\"taille\">
            <label for=\"staticRemplissage\" class=\"form-label\">Remplissage</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"200\" step=\"1\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["remplissage"]) || array_key_exists("remplissage", $context) ? $context["remplissage"] : (function () { throw new RuntimeError('Variable "remplissage" does not exist.', 14, $this->source); })()), "html", null, true);
        echo "\" id=\"staticRemplissage\" name=\"remplissage\">
            <label for=\"staticAmp_hasard\" class=\"form-label\">Amplitude hasard</label>
                <input type=\"range\" class=\"form-range\" min=\"0\" max=\"1\" step=\"0.1\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["amp_hasard"]) || array_key_exists("amp_hasard", $context) ? $context["amp_hasard"] : (function () { throw new RuntimeError('Variable "amp_hasard" does not exist.', 16, $this->source); })()), "html", null, true);
        echo "\" id=\"staticAmp_hasard\" name=\"amp_hasard\">
            <label for=\"staticAmp_rot\" class=\"form-label\">Amplitude rotation</label>
                <input type=\"range\" class=\"form-range\" min=\"0\" max=\"1\" step=\"0.001\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["amp_rot"]) || array_key_exists("amp_rot", $context) ? $context["amp_rot"] : (function () { throw new RuntimeError('Variable "amp_rot" does not exist.', 18, $this->source); })()), "html", null, true);
        echo "\" id=\"staticAmp_rot\" name=\"amp_rot\">
            <label for=\"staticNb_col\" class=\"form-label\">Nombre colonnes</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"10\" step=\"1\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["nb_col"]) || array_key_exists("nb_col", $context) ? $context["nb_col"] : (function () { throw new RuntimeError('Variable "nb_col" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\" id=\"staticNb_col\" name=\"nb_col\">
            <label for=\"staticNb_lignes\" class=\"form-label\">Nombre lignes</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"10\" step=\"1\" value=\"";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["nb_lignes"]) || array_key_exists("nb_lignes", $context) ? $context["nb_lignes"] : (function () { throw new RuntimeError('Variable "nb_lignes" does not exist.', 22, $this->source); })()), "html", null, true);
        echo "\" id=\"staticNb_lignes\" name=\"nb_lignes\">
        </div>
        <div>
            <button type=\"submit\" class=\"btn btn-primary\" name=\"calculer\" value=\"1\">Calculer</button>
            <button type=\"submit\" class=\"btn btn-danger\" name=\"imprimer\" value=\"1\">Imprimer</button>
        </div>
    </form>

    <h1> Résultat : </h1>
    <img src=\"";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["fichier"]) || array_key_exists("fichier", $context) ? $context["fichier"] : (function () { throw new RuntimeError('Variable "fichier" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\" width=\"100%\">
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "artmath/nee_carre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 31,  121 => 22,  116 => 20,  111 => 18,  106 => 16,  101 => 14,  96 => 12,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Art mathématique{% endblock %}

{% block body %}
<div>
    <h1>Paramètres :</h1>
    <!-- C'est grâce à l'attribut name que l'on peut récupérer la valeur associée dans symfony -->
    <form method=\"post\" action=\"/calculer_nee_carre\">
        <div>
            <label for=\"staticTaille\" class=\"form-label\">Taille</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"200\" step=\"1\" value=\"{{taille}}\" id=\"staticTaille\" name=\"taille\">
            <label for=\"staticRemplissage\" class=\"form-label\">Remplissage</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"200\" step=\"1\" value=\"{{remplissage}}\" id=\"staticRemplissage\" name=\"remplissage\">
            <label for=\"staticAmp_hasard\" class=\"form-label\">Amplitude hasard</label>
                <input type=\"range\" class=\"form-range\" min=\"0\" max=\"1\" step=\"0.1\" value=\"{{amp_hasard}}\" id=\"staticAmp_hasard\" name=\"amp_hasard\">
            <label for=\"staticAmp_rot\" class=\"form-label\">Amplitude rotation</label>
                <input type=\"range\" class=\"form-range\" min=\"0\" max=\"1\" step=\"0.001\" value=\"{{amp_rot}}\" id=\"staticAmp_rot\" name=\"amp_rot\">
            <label for=\"staticNb_col\" class=\"form-label\">Nombre colonnes</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"10\" step=\"1\" value=\"{{nb_col}}\" id=\"staticNb_col\" name=\"nb_col\">
            <label for=\"staticNb_lignes\" class=\"form-label\">Nombre lignes</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"10\" step=\"1\" value=\"{{nb_lignes}}\" id=\"staticNb_lignes\" name=\"nb_lignes\">
        </div>
        <div>
            <button type=\"submit\" class=\"btn btn-primary\" name=\"calculer\" value=\"1\">Calculer</button>
            <button type=\"submit\" class=\"btn btn-danger\" name=\"imprimer\" value=\"1\">Imprimer</button>
        </div>
    </form>

    <h1> Résultat : </h1>
    <img src=\"{{fichier}}\" width=\"100%\">
</div>
{% endblock %}", "artmath/nee_carre.html.twig", "/var/www/artmath/templates/artmath/nee_carre.html.twig");
    }
}
