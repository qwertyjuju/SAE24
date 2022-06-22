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
class __TwigTemplate_e0c04923964f94dc2b812c704f095b83acb54b22363eece985d43048218825ff extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
  
        ";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "
        ";
        // line 17
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </head>
    <body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"/\">Menu</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/koch\">Koch</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/nee_carre\">Nee carree</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/suite_carre\">Suite carre</a>
                </li>
            </ul>
        </div>
    </nav>
    ";
        // line 42
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "    <footer class=\"bg-secondary\">
        <div class=\"row\">
            <div class=\"col-6\">
                <h3>Réseaux</h3>
                <a href=\"https://github.com/qwertyjuju\" class=\"fa fa-github font-32\"></a>
                <a href=\"https://www.linkedin.com/in/julien-andreoli-73974517b/\" class=\"fa fa-linkedin font-32\"></a>
            </div>
            <div class=\"col-6\">
                <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-sa/4.0/\">
                    <img class=\"align-right\" alt=\"Licence Creative Commons\" style=\"border-width:0\" src=\"img/creative-commons.png\">
                </a><br />
                Ce(tte) œuvre est mise à disposition selon les termes de la'|trans <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-sa/4.0/\"> Licence Creative Commons Attribution - Pas d'Utilisation Commerciale - Partage dans les Mêmes Conditions 4.0 International</a>..
                </div>
            </div>
        </div>
    </footer>
    <script src=\"js/jquery.min.js\"></script> 
    <script src=\"js/bootstrap.bundle.min.js\"></script>
    <script src=\"js/prism.js\" data-manual></script>
    <script src=\"js/custom.js\"></script>
    ";
        // line 64
        echo "    ";
        // line 65
        echo "    ";
        // line 66
        echo "    ";
        // line 67
        echo "    ";
        // line 68
        echo "    ";
        // line 69
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Art Mathématique";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 9
        echo "            ";
        // line 10
        echo "            ";
        // line 11
        echo "            ";
        // line 12
        echo "            <link href=\"css/bootstrap.css\" rel=\"stylesheet\">
            <link href=\"css/font-awesome.css\" rel=\"stylesheet\">
            <link href=\"css/csssite.css\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 18
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
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

    public function getDebugInfo()
    {
        return array (  205 => 42,  195 => 18,  185 => 17,  172 => 12,  170 => 11,  168 => 10,  166 => 9,  156 => 8,  137 => 5,  125 => 69,  123 => 68,  121 => 67,  119 => 66,  117 => 65,  115 => 64,  93 => 43,  91 => 42,  66 => 19,  64 => 17,  61 => 16,  59 => 8,  53 => 5,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Art Mathématique{% endblock %}</title>
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text></svg>\">
  
        {% block stylesheets %}
            {###########################################}
            {# Utilise le style sketchy de bootswatch  #}
            {###########################################}
            <link href=\"css/bootstrap.css\" rel=\"stylesheet\">
            <link href=\"css/font-awesome.css\" rel=\"stylesheet\">
            <link href=\"css/csssite.css\" rel=\"stylesheet\">
        {% endblock %}

        {% block javascripts %}
        {% endblock %}
    </head>
    <body>
    <nav class=\"navbar navbar-expand-lg navbar-light bg-light\">
        <div class=\"container-fluid\">
            <a class=\"navbar-brand\" href=\"/\">Menu</a>
            <button class=\"navbar-toggler\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarColor03\" aria-controls=\"navbarColor03\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
            </button>

            <div class=\"collapse navbar-collapse\" id=\"navbarColor03\">
            <ul class=\"navbar-nav me-auto\">
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/koch\">Koch</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/nee_carre\">Nee carree</a>
                </li>
                <li class=\"nav-item\">
                <a class=\"nav-link\" href=\"/suite_carre\">Suite carre</a>
                </li>
            </ul>
        </div>
    </nav>
    {% block body %}{% endblock %}
    <footer class=\"bg-secondary\">
        <div class=\"row\">
            <div class=\"col-6\">
                <h3>Réseaux</h3>
                <a href=\"https://github.com/qwertyjuju\" class=\"fa fa-github font-32\"></a>
                <a href=\"https://www.linkedin.com/in/julien-andreoli-73974517b/\" class=\"fa fa-linkedin font-32\"></a>
            </div>
            <div class=\"col-6\">
                <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-sa/4.0/\">
                    <img class=\"align-right\" alt=\"Licence Creative Commons\" style=\"border-width:0\" src=\"img/creative-commons.png\">
                </a><br />
                Ce(tte) œuvre est mise à disposition selon les termes de la'|trans <a rel=\"license\" href=\"http://creativecommons.org/licenses/by-nc-sa/4.0/\"> Licence Creative Commons Attribution - Pas d'Utilisation Commerciale - Partage dans les Mêmes Conditions 4.0 International</a>..
                </div>
            </div>
        </div>
    </footer>
    <script src=\"js/jquery.min.js\"></script> 
    <script src=\"js/bootstrap.bundle.min.js\"></script>
    <script src=\"js/prism.js\" data-manual></script>
    <script src=\"js/custom.js\"></script>
    {###########################################}
    {# <script src=\"{{ asset('js/jquery.min.js') }}\"></script> #}
    {# <script src=\"{{ asset('js/bootstrap.bundle.min.js') }}\"></script> #}
    {# <script src=\"{{ asset('js/prism.js') }}\" data-manual></script> #}
    {#  <script src=\"{{ asset('js/custom.js') }}\"></script> #}
    {###########################################}
    </body>
</html>
", "base.html.twig", "/var/www/artmath/templates/base.html.twig");
    }
}
