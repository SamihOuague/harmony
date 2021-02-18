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

/* home/harmony.html.twig */
class __TwigTemplate_973ea1538ae6a2ac8bb2948faef0a8ac259d4b807e493fa8f8c32612f76bf502 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/harmony.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/harmony.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/harmony.html.twig", 1);
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

        echo "Harmony Promotion";
        
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
        echo "<div style=\"height: 350px; background-image: url('https://harmony-promotion.com/images/header-harmony-promotion.png'); background-repeat: no-repeat; background-size: cover;\">
    <div class=\"container d-flex flex-column justify-content-center h-100\">
        <h1 style=\"font-family: 'Barlow'; color: #336336;\">HARMONY PROMOTION</h1>
        <h2 style=\"font-family: 'Montserrat'; font-size: 25px;\">Penser autrement, innover, étonner<br/>
        et vivre différement.</h2>
    </div>
</div>
<div class=\"bg-light\">
    <div class=\"container\" style=\"padding-top: 50px;\">
        <h3 style=\"font-family: 'Barlow'; color: #336336;\">TOMORROW IS GREEN</h3>
        <div class=\"row\">
            <div class=\"col-lg-6 order-lg-2 d-flex align-items-center justify-content-center\">
                <img style=\"width: 80%;\" src=\"https://harmony-promotion.com/images/harmony-car.gif\"/>
            </div>
            <div class=\"col-lg-6 order-lg-1\" style=\"padding: 50px;\">
                <div class=\"h-100\" style=\"background-color: white; width: 100%; padding: 50px;\">
                    <div class=\"d-none d-lg-block d-xl-block\" style=\"width: 75px; border: 3px solid #8DC640; position: absolute; right: 20px; top: 170px;\"></div>
                    <h4 style=\"color: #336336; font-family: 'Barlow';\">HARMO’BILITY</h4>
                    <h5 style=\"color: #336336; font-family: 'Montserrat'; font-size: 17px;\">Anticiper les bonnes pratiques de demain</h5>
                    <br/>
                    <p class=\"text-muted\">Pour encourager la mobilité verte et vous donnez l’occasion de tester ces nouveaux moyens de transport, voici Harmo’bility :</p>
                    <ul class=\"text-muted\">
                        <li>Voiture, scooter, vélo et trottinette électriques signés Harmony</li>
                        <li>Bornes de rechargement ou précâblage pour bornes dans les parkings de nos programmes</li>
                        <li>Mise à disposition de ces véhicules</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6 order-lg-1 d-flex align-items-center justify-content-center\">
                <img style=\"width: 80%;\" src=\"https://harmony-promotion.com/images/grand-abre-animation.gif\"/>
            </div>
            <div class=\"col-lg-6 order-lg-2\" style=\"padding: 50px;\">
                <div class=\"h-100\" style=\"background-color: white; width: 100%; padding: 50px;\">
                    <div class=\"d-none d-lg-block d-xl-block\" style=\"width: 75px; border: 3px solid #8DC640; position: absolute; left: 20px; top: 170px;\"></div>
                    <h4 style=\"color: #336336; font-family: 'Barlow';\">PROTÉGER NOTRE PLANÈTE</h4>
                    <h5 style=\"color: #336336; font-family: 'Montserrat'; font-size: 17px;\">En faire plus pour notre Terre</h5>
                    <br/>
                    <p class=\"text-muted\">Nous pensons que chaque plante et chaque être vivant sont essentiels à la vie. C’est pourquoi nous nous engageons et soutenons différents organismes afin d’agir tous ensemble pour préserver la planète :</p>
                    <ul class=\"text-muted\">
                        <li>Plantation de 14 000 arbres</li>
                        <li>Lutter contre le réchauffement climatique</li>
                        <li>Préserver et restaurer la faune et la flore</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6 order-lg-2 d-flex align-items-center justify-content-center\">
                <img style=\"width: 80%;\" src=\"https://harmony-promotion.com/images/economie-circulaire.gif\"/>
            </div>
            <div class=\"col-lg-6 order-lg-1\" style=\"padding: 50px;\">
                <div class=\"h-100\" style=\"background-color: white; width: 100%; padding: 50px;\">
                    <div class=\"d-none d-lg-block d-xl-block\" style=\"width: 75px; border: 3px solid #8DC640; position: absolute; right: 20px; top: 170px;\"></div>
                    <h4 style=\"color: #336336; font-family: 'Barlow';\">L'ECONOMIE CIRCULAIRE</h4>
                    <h5 style=\"color: #336336; font-family: 'Montserrat'; font-size: 17px;\">Choisir de construire autrement</h5>
                    <br/>
                    <p class=\"text-muted\">Afin de changer les pratiques et l’impact des constructions immobilières sur l’environnement nous utilisons, autant que possible, l’économie circulaire afin de produire des biens de manière durable :</p>
                    <ul class=\"text-muted\">
                        <li>Limiter la consommation et le gaspillage des ressources (Matière première, eau, énergie)</li>
                        <li>Limiter la production de déchets</li>
                        <li>Recyclage des matières</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div style=\"background-color: white;\">
    <div class=\"container\" style=\"padding: 50px 0;\">
        <div class=\"row\">
            <div class=\"col-lg-4 text-center\">
                <div style=\"height: 130px;\">
                    <img src=\"https://harmony-promotion.com/images/confort.svg\" class=\"mh-106\" alt=\"Confort\"/>
                </div>
                <h5 style=\"font-size: 25px;font-family: 'Barlow'; color: #336336;\">Confort</h5>
                <br/>
                <p class=\"text-muted\" style=\"font-family: 'Montserrat';\">Notre volonté est de concevoir des logements qui ont pour principaux atouts d’améliorer la qualité de vie et faciliter le quotidien de nos futurs habitants.</p>
            </div>
            <div class=\"col-lg-4 text-center\">
                <div style=\"height: 130px;\">
                    <img src=\"https://harmony-promotion.com/images/environnement.svg\" class=\"mh-106\" alt=\"Environnement\"/>
                </div>
                <h5 style=\"font-size: 25px;font-family: 'Barlow'; color: #336336;\">Respect de l'environnement</h5>
                <br/>
                <p class=\"text-muted\" style=\"font-family: 'Montserrat';\">Préserver notre planète est une priorité pour nous, il est de notre devoir de promoteur de faire évoluer le secteur immobilier vers un monde plus vert.</p>
            </div>
            <div class=\"col-lg-4 text-center\">
                <div style=\"height: 130px;\">
                    <img src=\"https://harmony-promotion.com/images/innovation.svg\" class=\"mh-106\" alt=\"Innovation\"/>
                </div>
                <h5 style=\"font-size: 25px;font-family: 'Barlow'; color: #336336;\">Innovation</h5>
                <br/>
                <p class=\"text-muted\" style=\"font-family: 'Montserrat';\">Ancré dans notre temps, tous nos projets résultent d’une recherche bien menée afin d’innover et se préparer aux technologies de demain.</p>
            </div>
        </div>
    </div>
</div>
<div id=\"team\" class=\"d-flex justify-content-center align-items-center flex-column\" style=\"height: 500px; 
                        background-image: url('https://harmony-promotion.com/images/footer-harmony-promotion.png'); 
                        background-size: cover;\">
    <div style=\"background-color: rgba(255, 255, 255, 0.9); max-width: 650px; padding: 3% 6%;\">
        <h3 class=\"text-center\" style=\"color: #336336;\">LA HARMONY TEAM</h3>
        <br/>
        <p class=\"text-secondary text-justify\" style=\"font-family: 'Montserrat';\">Notre équipe est notre plus grande force, elle travaille avec bienveillance et positivité.</p>

        <p class=\"text-secondary text-justify\" style=\"font-family: 'Montserrat';\">La diversité des talents et la personnalité de chacun participent a notre savoir-faire.
        Par notre engagement, nous faisons évoluer, ensemble, le paysage urbain dans le bon sens.</p>
    </div>
    <div class=\"d-flex justify-content-center\" style=\"margin-top: -20px;\">
        <a href=\"";
        // line 117
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" class=\"btn btn-success\" style=\"width: 200px;\">Nous rejoindre</a>
    </div>
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/harmony.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  201 => 117,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Harmony Promotion{% endblock %}

{% block body %}
<div style=\"height: 350px; background-image: url('https://harmony-promotion.com/images/header-harmony-promotion.png'); background-repeat: no-repeat; background-size: cover;\">
    <div class=\"container d-flex flex-column justify-content-center h-100\">
        <h1 style=\"font-family: 'Barlow'; color: #336336;\">HARMONY PROMOTION</h1>
        <h2 style=\"font-family: 'Montserrat'; font-size: 25px;\">Penser autrement, innover, étonner<br/>
        et vivre différement.</h2>
    </div>
</div>
<div class=\"bg-light\">
    <div class=\"container\" style=\"padding-top: 50px;\">
        <h3 style=\"font-family: 'Barlow'; color: #336336;\">TOMORROW IS GREEN</h3>
        <div class=\"row\">
            <div class=\"col-lg-6 order-lg-2 d-flex align-items-center justify-content-center\">
                <img style=\"width: 80%;\" src=\"https://harmony-promotion.com/images/harmony-car.gif\"/>
            </div>
            <div class=\"col-lg-6 order-lg-1\" style=\"padding: 50px;\">
                <div class=\"h-100\" style=\"background-color: white; width: 100%; padding: 50px;\">
                    <div class=\"d-none d-lg-block d-xl-block\" style=\"width: 75px; border: 3px solid #8DC640; position: absolute; right: 20px; top: 170px;\"></div>
                    <h4 style=\"color: #336336; font-family: 'Barlow';\">HARMO’BILITY</h4>
                    <h5 style=\"color: #336336; font-family: 'Montserrat'; font-size: 17px;\">Anticiper les bonnes pratiques de demain</h5>
                    <br/>
                    <p class=\"text-muted\">Pour encourager la mobilité verte et vous donnez l’occasion de tester ces nouveaux moyens de transport, voici Harmo’bility :</p>
                    <ul class=\"text-muted\">
                        <li>Voiture, scooter, vélo et trottinette électriques signés Harmony</li>
                        <li>Bornes de rechargement ou précâblage pour bornes dans les parkings de nos programmes</li>
                        <li>Mise à disposition de ces véhicules</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6 order-lg-1 d-flex align-items-center justify-content-center\">
                <img style=\"width: 80%;\" src=\"https://harmony-promotion.com/images/grand-abre-animation.gif\"/>
            </div>
            <div class=\"col-lg-6 order-lg-2\" style=\"padding: 50px;\">
                <div class=\"h-100\" style=\"background-color: white; width: 100%; padding: 50px;\">
                    <div class=\"d-none d-lg-block d-xl-block\" style=\"width: 75px; border: 3px solid #8DC640; position: absolute; left: 20px; top: 170px;\"></div>
                    <h4 style=\"color: #336336; font-family: 'Barlow';\">PROTÉGER NOTRE PLANÈTE</h4>
                    <h5 style=\"color: #336336; font-family: 'Montserrat'; font-size: 17px;\">En faire plus pour notre Terre</h5>
                    <br/>
                    <p class=\"text-muted\">Nous pensons que chaque plante et chaque être vivant sont essentiels à la vie. C’est pourquoi nous nous engageons et soutenons différents organismes afin d’agir tous ensemble pour préserver la planète :</p>
                    <ul class=\"text-muted\">
                        <li>Plantation de 14 000 arbres</li>
                        <li>Lutter contre le réchauffement climatique</li>
                        <li>Préserver et restaurer la faune et la flore</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6 order-lg-2 d-flex align-items-center justify-content-center\">
                <img style=\"width: 80%;\" src=\"https://harmony-promotion.com/images/economie-circulaire.gif\"/>
            </div>
            <div class=\"col-lg-6 order-lg-1\" style=\"padding: 50px;\">
                <div class=\"h-100\" style=\"background-color: white; width: 100%; padding: 50px;\">
                    <div class=\"d-none d-lg-block d-xl-block\" style=\"width: 75px; border: 3px solid #8DC640; position: absolute; right: 20px; top: 170px;\"></div>
                    <h4 style=\"color: #336336; font-family: 'Barlow';\">L'ECONOMIE CIRCULAIRE</h4>
                    <h5 style=\"color: #336336; font-family: 'Montserrat'; font-size: 17px;\">Choisir de construire autrement</h5>
                    <br/>
                    <p class=\"text-muted\">Afin de changer les pratiques et l’impact des constructions immobilières sur l’environnement nous utilisons, autant que possible, l’économie circulaire afin de produire des biens de manière durable :</p>
                    <ul class=\"text-muted\">
                        <li>Limiter la consommation et le gaspillage des ressources (Matière première, eau, énergie)</li>
                        <li>Limiter la production de déchets</li>
                        <li>Recyclage des matières</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div style=\"background-color: white;\">
    <div class=\"container\" style=\"padding: 50px 0;\">
        <div class=\"row\">
            <div class=\"col-lg-4 text-center\">
                <div style=\"height: 130px;\">
                    <img src=\"https://harmony-promotion.com/images/confort.svg\" class=\"mh-106\" alt=\"Confort\"/>
                </div>
                <h5 style=\"font-size: 25px;font-family: 'Barlow'; color: #336336;\">Confort</h5>
                <br/>
                <p class=\"text-muted\" style=\"font-family: 'Montserrat';\">Notre volonté est de concevoir des logements qui ont pour principaux atouts d’améliorer la qualité de vie et faciliter le quotidien de nos futurs habitants.</p>
            </div>
            <div class=\"col-lg-4 text-center\">
                <div style=\"height: 130px;\">
                    <img src=\"https://harmony-promotion.com/images/environnement.svg\" class=\"mh-106\" alt=\"Environnement\"/>
                </div>
                <h5 style=\"font-size: 25px;font-family: 'Barlow'; color: #336336;\">Respect de l'environnement</h5>
                <br/>
                <p class=\"text-muted\" style=\"font-family: 'Montserrat';\">Préserver notre planète est une priorité pour nous, il est de notre devoir de promoteur de faire évoluer le secteur immobilier vers un monde plus vert.</p>
            </div>
            <div class=\"col-lg-4 text-center\">
                <div style=\"height: 130px;\">
                    <img src=\"https://harmony-promotion.com/images/innovation.svg\" class=\"mh-106\" alt=\"Innovation\"/>
                </div>
                <h5 style=\"font-size: 25px;font-family: 'Barlow'; color: #336336;\">Innovation</h5>
                <br/>
                <p class=\"text-muted\" style=\"font-family: 'Montserrat';\">Ancré dans notre temps, tous nos projets résultent d’une recherche bien menée afin d’innover et se préparer aux technologies de demain.</p>
            </div>
        </div>
    </div>
</div>
<div id=\"team\" class=\"d-flex justify-content-center align-items-center flex-column\" style=\"height: 500px; 
                        background-image: url('https://harmony-promotion.com/images/footer-harmony-promotion.png'); 
                        background-size: cover;\">
    <div style=\"background-color: rgba(255, 255, 255, 0.9); max-width: 650px; padding: 3% 6%;\">
        <h3 class=\"text-center\" style=\"color: #336336;\">LA HARMONY TEAM</h3>
        <br/>
        <p class=\"text-secondary text-justify\" style=\"font-family: 'Montserrat';\">Notre équipe est notre plus grande force, elle travaille avec bienveillance et positivité.</p>

        <p class=\"text-secondary text-justify\" style=\"font-family: 'Montserrat';\">La diversité des talents et la personnalité de chacun participent a notre savoir-faire.
        Par notre engagement, nous faisons évoluer, ensemble, le paysage urbain dans le bon sens.</p>
    </div>
    <div class=\"d-flex justify-content-center\" style=\"margin-top: -20px;\">
        <a href=\"{{ path('contact') }}\" class=\"btn btn-success\" style=\"width: 200px;\">Nous rejoindre</a>
    </div>
</div>
{% endblock %}", "home/harmony.html.twig", "/home/souaguen/Bureau/harmonypresent/templates/home/harmony.html.twig");
    }
}
