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
class __TwigTemplate_e631327940e814033ae0c30d50e2c38df4877f44786bc4d23d26f035f0aeb063 extends Template
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
            <label for=\"staticAmp_hasard\" class=\"form-label\">Amplitude hasard</label>
                <input type=\"range\" class=\"form-range\" min=\"0\" max=\"1\" step=\"0.1\" id=\"staticAmp_hasard\" name=\"amp_hasard\">
            <label for=\"staticAmp_rot\" class=\"form-label\">Amplitude rotation</label>
                <input type=\"range\" class=\"form-range\" min=\"0\" max=\"1\" step=\"0.001\" id=\"staticAmp_rot\" name=\"amp_rot\">
            <label for=\"staticNb_col\" class=\"form-label\">Nombre colonnes</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"10\" step=\"1\" id=\"staticNb_col\" name=\"nb_col\">
            <label for=\"staticNb_lignes\" class=\"form-label\">Nombre lignes</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"10\" step=\"1\" id=\"staticNb_lignes\" name=\"nb_lignes\">
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
        return "artmath/nee_carre.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 27,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
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
            <label for=\"staticAmp_hasard\" class=\"form-label\">Amplitude hasard</label>
                <input type=\"range\" class=\"form-range\" min=\"0\" max=\"1\" step=\"0.1\" id=\"staticAmp_hasard\" name=\"amp_hasard\">
            <label for=\"staticAmp_rot\" class=\"form-label\">Amplitude rotation</label>
                <input type=\"range\" class=\"form-range\" min=\"0\" max=\"1\" step=\"0.001\" id=\"staticAmp_rot\" name=\"amp_rot\">
            <label for=\"staticNb_col\" class=\"form-label\">Nombre colonnes</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"10\" step=\"1\" id=\"staticNb_col\" name=\"nb_col\">
            <label for=\"staticNb_lignes\" class=\"form-label\">Nombre lignes</label>
                <input type=\"range\" class=\"form-range\" min=\"1\" max=\"10\" step=\"1\" id=\"staticNb_lignes\" name=\"nb_lignes\">
        </div>
        <div>
            <button type=\"submit\" class=\"btn btn-primary\" name=\"calculer\" value=\"1\">Calculer</button>
            <button type=\"submit\" class=\"btn btn-danger\" name=\"imprimer\" value=\"1\">Imprimer</button>
        </div>
    </form>

    <h1> Résultat : </h1>
    <img src=\"{{fichier}}\" width=\"100%\">
</div>
{% endblock %}", "artmath/nee_carre.html.twig", "F:\\Documents\\GitHub\\SAE24\\templates\\artmath\\nee_carre.html.twig");
    }
}
