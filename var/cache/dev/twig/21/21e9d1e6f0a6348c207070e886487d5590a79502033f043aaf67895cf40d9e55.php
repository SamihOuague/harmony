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
class __TwigTemplate_61d2aac208ca8b4b978a87882347313500fe929228a3c8af81283450823331e6 extends Template
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
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <script src=\"https://code.jquery.com/jquery-3.5.1.js\" integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\" crossorigin=\"anonymous\"></script>
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Barlow&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\" integrity=\"sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==\" crossorigin=\"anonymous\" />
        <style type=\"text/css\">
          .exampleFormControlSelect1 {
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url(\"chevron.png\");
            background-repeat: no-repeat;
            background-position-x: 95%;
            background-position-y: 10px;
            border: 1px solid #dfdfdf;
            border-radius: 2px;
            margin-right: 2rem;
            padding-right: 2rem;
            font-family: 'Montserrat'; 
            color: #3B4754; 
            background-color: white; 
            border-radius: 5px;
          }
          .navlink {
            font-size: 25px;
          }
        </style>
        <title>";
        // line 33
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 34
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 35
        echo "    </head>
    <body class=\"bg-light\" style=\"height: 100%; overflow-x: hidden;\">
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light border-bottom border-muted\" style=\"min-height: 65px;\">
            <div class=\"container d-flex justify-content-lg-around justify-content-between\">
                <a class=\"navbar-brand\" href=\"/\">
                  <img src=\"https://harmony-promotion.com/images/harmony-promotion.png\" style=\"margin-right: 25px;\" width=\"65\" alt=\"logo harmony-promotion\"/>
                </a>
                <button class=\"navbar-toggler text-center\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav ml-auto w-100 d-flex justify-content-around\" style=\"font-size: 14px;\">
                      <li class=\"nav-item d-flex align-items-center justify-content-center\">
                        <a class=\"nav-link\" style=\"font-size: 16px; font-family: 'Montserrat';\" href=\"";
        // line 48
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("programme");
        echo "\">PROGRAMMES</a>
                      </li>
                      <li class=\"nav-item d-flex align-items-center text-center justify-content-center\">
                        <a class=\"nav-link\" style=\"font-size: 16px; font-family: 'Montserrat';\" href=\"";
        // line 51
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guide");
        echo "\">GUIDE DE <br class=\"d-none d-lg-block d-xl-block\"/>L'IMMOBILIER</a>
                      </li>
                      <li class=\"nav-item d-flex align-items-center text-center justify-content-center\">
                        <a class=\"nav-link\" style=\"font-size: 16px; font-family: 'Montserrat';\" href=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("harmony");
        echo "\">HARMONY <br class=\"d-none d-lg-block d-xl-block\"/>PROMOTION</a>
                      </li>
                      <!--<li class=\"nav-item d-flex align-items-center justify-content-center\">
                        <a class=\"nav-link\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("news");
        echo "\">ACTUS/NEWS</a>
                      </li>-->
                      <li class=\"nav-item d-flex align-items-center justify-content-center\">
                        <a class=\"nav-link\" style=\"font-size: 16px; font-family: 'Montserrat';\" href=\"";
        // line 60
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">CONTACT</a>
                      </li>
                      <li class=\"nav-item d-flex align-items-center justify-content-center\">
                        <a class=\"nav-link\" href=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">
\t\t\t\t                  <div class=\"container\" style=\"height: 55px; background-image: url('/images/phone.png'); background-size: 100%; background-repeat: no-repeat; width: 145px; background-color: #8DC63F; border-radius: 5px;\">
\t\t\t\t                  \t<!--<p style=\"font-family: 'Montserrat';\">0 801 900 500</p>-->
\t\t\t\t                  </div>
                        </a>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
        ";
        // line 73
        $this->displayBlock('body', $context, $blocks);
        // line 74
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 75
        echo "        <div id=\"anticovid\" class=\"fixed-bottom bg-success text-light d-flex justify-content-between\" style=\"height: 150px; opacity: 0.8;\">
          <div style=\"margin: 10px 25px;\">
            <img src=\"https://harmony-promotion.com/images/covid.png\" alt=\"stop covid\" width=\"100\"/>
          </div>
          <div style=\"margin: 10px 0px; overflow: scroll;\" class=\"w-75\">
            <p class=\"text-justify\">Chers clients et partenaires,<br/><br/>
                La situation que nous traversons est inédite, et les décisions gouvernementales récentes bouleversent notre quotidien et nos activités professionnelles.
                Dans ces circonstances nous tenons à vous affirmer tout notre soutien et notre solidarité, et vous indiquer que notre équipe est toujours opérationnelle à distance. Elle est pleinement mobilisée pour assurer l’activité quotidienne et préparer dès maintenant les prochains mois. Nous avons tout particulièrement adapté nos actions ces derniers jours, et nous nous concentrons sur l’accompagnement de nos clients et partenaires. Nous restons à vos côtés. Harmony Promotion est optimiste et convaincu de l’utilité d’un modèle de promotion immobilière plus vertueux, durable, simple et proche de chacun. Nous serons très attentifs à vos suggestions : n’hésitez pas à partager vos idées sur contact@harmony-prestige.com
                Nous vous remercions de votre confiance. Prenez soin de vous, de vos équipes, de vos proches.<br/><br/>
                L’équipe Harmony Promotion</p>
          </div>
          <a href=\"#\" id=\"closecovid\" class=\"btn text-light\">
            <i style=\"font-size: 32px;\" class=\"far fa-window-close\"></i>
          </a>
        </div>
        <script>
          if (localStorage.getItem(\"closecovid\"))
            \$(\"#anticovid\").remove();
          \$(\"#closecovid\").click((e) => {
            localStorage.setItem(\"closecovid\", true)
            \$(\"#anticovid\").remove();
            e.preventDefault();
          });
        </script>
        <footer class=\"container-fluid\" style=\"background-color: white; padding: 50px 0; overflow: hidden;\">
          <div class=\"row\">
            <div class=\"col-lg-2 text-center offset-lg-1\">
              <img style=\"margin: 25px 0;\" width=\"100\" src=\"https://harmony-promotion.com/images/harmony-promotion.png\" alt=\"Harmony Logo\"/>
            </div>
            <div class=\"col-lg-2 text-center\">
              <h4 style=\"font-family: 'Barlow'; color: #336336; margin: 25px 0px;\">MENU</h4>
              <a href=\"";
        // line 106
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("programme");
        echo "\" class=\"text-muted\" style=\"font-size: 18px;\">Tous les programmes</a><br/>
              <a href=\"";
        // line 107
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guide");
        echo "\" class=\"text-muted\" style=\"font-size: 18px;\">Guide de l'acheteur</a><br/>
              <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guide");
        echo "\" class=\"text-muted\" style=\"font-size: 18px;\">Guide de l'investisseur</a><br/>
            </div>
            <div class=\"col-lg-2 text-center\">
              <h4 style=\"font-family: 'Barlow'; color: #336336; margin: 25px 0px;\">ENTREPRISE</h4>
              <a href=\"#\" class=\"text-muted\" style=\"font-size: 18px;\">Carrière</a><br/>
              <a href=\"#\" class=\"text-muted\" style=\"font-size: 18px;\">Mentions légales</a><br/>
            </div>
            <div class=\"col-lg-2 text-center\">
              <h4 style=\"font-family: 'Barlow'; color: #336336; margin: 25px 0px;\">DÉCOUVRIR</h4>
              <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("harmony");
        echo "#team\" class=\"text-muted\" style=\"font-size: 18px;\">Notre team</a><br/>
              <a href=\"";
        // line 118
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("harmony");
        echo "\" class=\"text-muted\" style=\"font-size: 18px;\">Nos valeurs</a><br/>
            </div>
            <div class=\"col-lg-2 text-center\">
              <h4 style=\"font-family: 'Barlow'; color: #336336; margin: 25px 0px;\">CONTACT</h4>
              <a href=\"";
        // line 122
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rappel");
        echo "\"><img src=\"https://harmony-promotion.com/images/appel-v.png\" width=\"35\" style=\"margin: 25px;\" alt=\"logo telephone\"/></a>
              <a href=\"";
        // line 123
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\"><img src=\"https://harmony-promotion.com/images/mail-v.png\" width=\"35\" style=\"margin: 25px;\" alt=\"logo mail\"/></a>
            </div>
          </div>
        </footer>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    </body>
</html>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 33
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 34
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

    // line 73
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

    // line 74
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        
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
        return array (  291 => 74,  273 => 73,  255 => 34,  236 => 33,  218 => 123,  214 => 122,  207 => 118,  203 => 117,  191 => 108,  187 => 107,  183 => 106,  150 => 75,  147 => 74,  145 => 73,  132 => 63,  126 => 60,  120 => 57,  114 => 54,  108 => 51,  102 => 48,  87 => 35,  85 => 34,  81 => 33,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html style=\"height: 100%;\">
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <script src=\"https://code.jquery.com/jquery-3.5.1.js\" integrity=\"sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=\" crossorigin=\"anonymous\"></script>
        <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\">
        <link href=\"https://fonts.googleapis.com/css2?family=Barlow&display=swap\" rel=\"stylesheet\">
        <link href=\"https://fonts.googleapis.com/css2?family=Montserrat:wght@400&display=swap\" rel=\"stylesheet\">
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css\" integrity=\"sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==\" crossorigin=\"anonymous\" />
        <style type=\"text/css\">
          .exampleFormControlSelect1 {
            -webkit-appearance: none;
            -moz-appearance: none;
            background-image: url(\"chevron.png\");
            background-repeat: no-repeat;
            background-position-x: 95%;
            background-position-y: 10px;
            border: 1px solid #dfdfdf;
            border-radius: 2px;
            margin-right: 2rem;
            padding-right: 2rem;
            font-family: 'Montserrat'; 
            color: #3B4754; 
            background-color: white; 
            border-radius: 5px;
          }
          .navlink {
            font-size: 25px;
          }
        </style>
        <title>{% block title %}Welcome!{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
    </head>
    <body class=\"bg-light\" style=\"height: 100%; overflow-x: hidden;\">
        <nav class=\"navbar navbar-expand-lg navbar-light bg-light border-bottom border-muted\" style=\"min-height: 65px;\">
            <div class=\"container d-flex justify-content-lg-around justify-content-between\">
                <a class=\"navbar-brand\" href=\"/\">
                  <img src=\"https://harmony-promotion.com/images/harmony-promotion.png\" style=\"margin-right: 25px;\" width=\"65\" alt=\"logo harmony-promotion\"/>
                </a>
                <button class=\"navbar-toggler text-center\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
                  <span class=\"navbar-toggler-icon\"></span>
                </button>
                <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
                    <ul class=\"navbar-nav ml-auto w-100 d-flex justify-content-around\" style=\"font-size: 14px;\">
                      <li class=\"nav-item d-flex align-items-center justify-content-center\">
                        <a class=\"nav-link\" style=\"font-size: 16px; font-family: 'Montserrat';\" href=\"{{ path('programme') }}\">PROGRAMMES</a>
                      </li>
                      <li class=\"nav-item d-flex align-items-center text-center justify-content-center\">
                        <a class=\"nav-link\" style=\"font-size: 16px; font-family: 'Montserrat';\" href=\"{{  path('guide') }}\">GUIDE DE <br class=\"d-none d-lg-block d-xl-block\"/>L'IMMOBILIER</a>
                      </li>
                      <li class=\"nav-item d-flex align-items-center text-center justify-content-center\">
                        <a class=\"nav-link\" style=\"font-size: 16px; font-family: 'Montserrat';\" href=\"{{ path('harmony') }}\">HARMONY <br class=\"d-none d-lg-block d-xl-block\"/>PROMOTION</a>
                      </li>
                      <!--<li class=\"nav-item d-flex align-items-center justify-content-center\">
                        <a class=\"nav-link\" href=\"{{ path('news') }}\">ACTUS/NEWS</a>
                      </li>-->
                      <li class=\"nav-item d-flex align-items-center justify-content-center\">
                        <a class=\"nav-link\" style=\"font-size: 16px; font-family: 'Montserrat';\" href=\"{{ path('contact') }}\">CONTACT</a>
                      </li>
                      <li class=\"nav-item d-flex align-items-center justify-content-center\">
                        <a class=\"nav-link\" href=\"{{ path('contact') }}\">
\t\t\t\t                  <div class=\"container\" style=\"height: 55px; background-image: url('/images/phone.png'); background-size: 100%; background-repeat: no-repeat; width: 145px; background-color: #8DC63F; border-radius: 5px;\">
\t\t\t\t                  \t<!--<p style=\"font-family: 'Montserrat';\">0 801 900 500</p>-->
\t\t\t\t                  </div>
                        </a>
                      </li>
                    </ul>
                </div>
            </div>
        </nav>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
        <div id=\"anticovid\" class=\"fixed-bottom bg-success text-light d-flex justify-content-between\" style=\"height: 150px; opacity: 0.8;\">
          <div style=\"margin: 10px 25px;\">
            <img src=\"https://harmony-promotion.com/images/covid.png\" alt=\"stop covid\" width=\"100\"/>
          </div>
          <div style=\"margin: 10px 0px; overflow: scroll;\" class=\"w-75\">
            <p class=\"text-justify\">Chers clients et partenaires,<br/><br/>
                La situation que nous traversons est inédite, et les décisions gouvernementales récentes bouleversent notre quotidien et nos activités professionnelles.
                Dans ces circonstances nous tenons à vous affirmer tout notre soutien et notre solidarité, et vous indiquer que notre équipe est toujours opérationnelle à distance. Elle est pleinement mobilisée pour assurer l’activité quotidienne et préparer dès maintenant les prochains mois. Nous avons tout particulièrement adapté nos actions ces derniers jours, et nous nous concentrons sur l’accompagnement de nos clients et partenaires. Nous restons à vos côtés. Harmony Promotion est optimiste et convaincu de l’utilité d’un modèle de promotion immobilière plus vertueux, durable, simple et proche de chacun. Nous serons très attentifs à vos suggestions : n’hésitez pas à partager vos idées sur contact@harmony-prestige.com
                Nous vous remercions de votre confiance. Prenez soin de vous, de vos équipes, de vos proches.<br/><br/>
                L’équipe Harmony Promotion</p>
          </div>
          <a href=\"#\" id=\"closecovid\" class=\"btn text-light\">
            <i style=\"font-size: 32px;\" class=\"far fa-window-close\"></i>
          </a>
        </div>
        <script>
          if (localStorage.getItem(\"closecovid\"))
            \$(\"#anticovid\").remove();
          \$(\"#closecovid\").click((e) => {
            localStorage.setItem(\"closecovid\", true)
            \$(\"#anticovid\").remove();
            e.preventDefault();
          });
        </script>
        <footer class=\"container-fluid\" style=\"background-color: white; padding: 50px 0; overflow: hidden;\">
          <div class=\"row\">
            <div class=\"col-lg-2 text-center offset-lg-1\">
              <img style=\"margin: 25px 0;\" width=\"100\" src=\"https://harmony-promotion.com/images/harmony-promotion.png\" alt=\"Harmony Logo\"/>
            </div>
            <div class=\"col-lg-2 text-center\">
              <h4 style=\"font-family: 'Barlow'; color: #336336; margin: 25px 0px;\">MENU</h4>
              <a href=\"{{ path('programme') }}\" class=\"text-muted\" style=\"font-size: 18px;\">Tous les programmes</a><br/>
              <a href=\"{{ path('guide') }}\" class=\"text-muted\" style=\"font-size: 18px;\">Guide de l'acheteur</a><br/>
              <a href=\"{{ path('guide') }}\" class=\"text-muted\" style=\"font-size: 18px;\">Guide de l'investisseur</a><br/>
            </div>
            <div class=\"col-lg-2 text-center\">
              <h4 style=\"font-family: 'Barlow'; color: #336336; margin: 25px 0px;\">ENTREPRISE</h4>
              <a href=\"#\" class=\"text-muted\" style=\"font-size: 18px;\">Carrière</a><br/>
              <a href=\"#\" class=\"text-muted\" style=\"font-size: 18px;\">Mentions légales</a><br/>
            </div>
            <div class=\"col-lg-2 text-center\">
              <h4 style=\"font-family: 'Barlow'; color: #336336; margin: 25px 0px;\">DÉCOUVRIR</h4>
              <a href=\"{{ path('harmony') }}#team\" class=\"text-muted\" style=\"font-size: 18px;\">Notre team</a><br/>
              <a href=\"{{ path('harmony') }}\" class=\"text-muted\" style=\"font-size: 18px;\">Nos valeurs</a><br/>
            </div>
            <div class=\"col-lg-2 text-center\">
              <h4 style=\"font-family: 'Barlow'; color: #336336; margin: 25px 0px;\">CONTACT</h4>
              <a href=\"{{ path('rappel') }}\"><img src=\"https://harmony-promotion.com/images/appel-v.png\" width=\"35\" style=\"margin: 25px;\" alt=\"logo telephone\"/></a>
              <a href=\"{{ path('contact') }}\"><img src=\"https://harmony-promotion.com/images/mail-v.png\" width=\"35\" style=\"margin: 25px;\" alt=\"logo mail\"/></a>
            </div>
          </div>
        </footer>
        <script src=\"https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js\" integrity=\"sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q\" crossorigin=\"anonymous\"></script>
        <script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js\"></script>
    </body>
</html>", "base.html.twig", "/home/souaguen/Bureau/harmonypresent/templates/base.html.twig");
    }
}
