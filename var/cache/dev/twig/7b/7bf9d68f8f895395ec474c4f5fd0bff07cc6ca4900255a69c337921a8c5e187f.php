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

/* home/detail.html.twig */
class __TwigTemplate_940a639d2da420c8ad7f1a5d013409339c876e2b5da40a65b02f33aa575804ff extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/detail.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/detail.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/detail.html.twig", 1);
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

        echo "Harmony Promotion | ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        
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
        echo "<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div style=\"background-image: url('/uploads/pages/";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 11, $this->source); })()), "miniature", [], "any", false, false, false, 11), "html", null, true);
        echo "'); height: 500px; background-size: cover;\">
    <div class=\"d-flex justify-content-between align-items-end h-100\" style=\"padding: 0px 5%;\">
        <div style=\"
            width: 90px; 
            height: 90px; 
            background-color: ";
        // line 16
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 16, $this->source); })()), "isPrestige", [], "any", false, false, false, 16)) {
            echo "rgb(0, 48, 60)";
        } else {
            echo "#336336";
        }
        echo "; 
            border-radius: 50%; 
            background-image: url('https://harmony-promotion.com/images/photos.png');
            background-size: 65%;
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: -50px;\">
        </div>
        <div class=\"";
        // line 24
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 24, $this->source); })()), "isPrestige", [], "any", false, false, false, 24)) {
            echo "bg-light";
        }
        echo " d-flex justify-content-end flex-column\" style=\"
                                height: ";
        // line 25
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 25, $this->source); })()), "isPrestige", [], "any", false, false, false, 25)) {
            echo " 270px ";
        } else {
            echo " 220px ";
        }
        echo "; 
                                width: 450px; 
                                margin-bottom: 50px;
                                border-radius: 0px 50px 0px 50px;
                                overflow: ";
        // line 29
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 29, $this->source); })()), "isPrestige", [], "any", false, false, false, 29)) {
            echo "visible";
        } else {
            echo "hidden";
        }
        echo ";
                                ";
        // line 30
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 30, $this->source); })()), "isPrestige", [], "any", false, false, false, 30)) {
            echo "background-color: rgba(255, 255, 255, 0.6);";
        }
        echo "\">
            ";
        // line 31
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 31, $this->source); })()), "isPrestige", [], "any", false, false, false, 31)) {
            echo "<img src=\"https://harmony-promotion.com/images/pastille.svg\" alt=\"Pastille prestige\" width=\"100\" style=\"position: relative; left: 400px; top: 100px;\"/>";
        }
        // line 32
        echo "            <div class=\"h-100\" style=\"padding: 25px 35px; font-family: 'Montserrat'; color: ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 32, $this->source); })()), "isPrestige", [], "any", false, false, false, 32)) {
            echo "rgb(0, 48, 60)";
        } else {
            echo "#336336";
        }
        echo ";\">
                <h1 style=\"font-family: 'Barlow'; margin-top: 20px; font-size: 31px;\">";
        // line 33
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 33, $this->source); })()), "title", [], "any", false, false, false, 33), "html", null, true);
        echo "</h1>
                ";
        // line 34
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 34, $this->source); })()), "isPrestige", [], "any", false, false, false, 34)) {
            echo "<div style=\"border: 2px solid #B1A06B; width: 50px; left: -55px; top: -20px; position: relative;\"></div>";
        }
        // line 35
        echo "                <h3 style=\"";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 35, $this->source); })()), "isPrestige", [], "any", false, false, false, 35)) {
            echo "color: #8DC63F;";
        }
        echo "font-size: 25px;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 35, $this->source); })()), "ville", [], "any", false, false, false, 35), "html", null, true);
        echo "</h3>
                ";
        // line 36
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 36, $this->source); })()), "isPrestige", [], "any", false, false, false, 36)) {
            echo "<h3 style=\"";
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 36, $this->source); })()), "isPrestige", [], "any", false, false, false, 36)) {
                echo "color: #8DC63F;";
            }
            echo "font-size: 25px;\">Programme neuf</h3>";
        }
        // line 37
        echo "            </div>
            <div class=\"d-flex ";
        // line 38
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 38, $this->source); })()), "isPrestige", [], "any", false, false, false, 38)) {
            echo "justify-content-around align-items-center";
        }
        echo "\" 
                                                                                            style=\"background-color: ";
        // line 39
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 39, $this->source); })()), "isPrestige", [], "any", false, false, false, 39)) {
            echo "#336336";
        }
        echo "; 
                                                                                                    height: 100px; 
                                                                                                    width: 100%;\">
                <a href=\"/rappel/";
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42), "html", null, true);
        echo "/programme\">
                    <img width=\"45\" style=\"margin: ";
        // line 43
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 43, $this->source); })()), "isPrestige", [], "any", false, false, false, 43)) {
            echo "5px";
        } else {
            echo "0 0px 25px 35px";
        }
        echo ";\" src=\"";
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 43, $this->source); })()), "isPrestige", [], "any", false, false, false, 43)) {
            echo "https://harmony-promotion.com/images/appelP.svg";
        } else {
            echo "https://harmony-promotion.com/images/appel-w.png";
        }
        echo "\"/>
                </a>
                <a href=\"/brochure/";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 45, $this->source); })()), "id", [], "any", false, false, false, 45), "html", null, true);
        echo "/programme\">
                    <img width=\"45\" style=\"margin: ";
        // line 46
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 46, $this->source); })()), "isPrestige", [], "any", false, false, false, 46)) {
            echo "5px";
        } else {
            echo "0 0px 25px 35px";
        }
        echo ";\" src=\"";
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 46, $this->source); })()), "isPrestige", [], "any", false, false, false, 46)) {
            echo "https://harmony-promotion.com/images/brochureP.svg";
        } else {
            echo "https://harmony-promotion.com/images/brochure-w.png";
        }
        echo "\"/>
                </a>
            </div>
        </div>
    </div>
</div>

<div class=\"container-fluid ";
        // line 53
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 53, $this->source); })()), "isPrestige", [], "any", false, false, false, 53)) {
            echo "text-center";
        }
        echo "\" style=\"border-bottom: 2px solid #d39c2f; padding: 80px 0px;\">
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            ";
        // line 56
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 56, $this->source); })()), "isPrestige", [], "any", false, false, false, 56)) {
            // line 57
            echo "                <h4 style=\"color: #336336; font-family: 'Barlow';\">Nos commerciaux sont à votre disposition dans notre bureau de vente !</h4>
                <h5 style=\"font-family: 'Barlow';\">40-42 Avenue Maurice Berteaux, 94420 Le Plessis-Trévise</h5>
                <a href=\"";
            // line 59
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rappel");
            echo "\" class=\"btn btn-success\" style=\"margin-top: 35px; width: 220px; padding: 10px; font-size: 18px;\">Prendre rendez-vous</a>
            ";
        } else {
            // line 61
            echo "                <h4 class=\"text-center\" style=\"color: rgb(0, 48, 60); font-family: 'Barlow'; font-size: 35px;\">LA GAMME HARMONY PRESTIGE<br/>
                    OÙ RÉINVENTER LE LUXE À LA FRANÇAISE</h4>
                <br/>
                <p class=\"text-muted text-justify\" style=\"font-size: 18px;\">Fervent défenseur de la planète, Harmony Prestige s’appuie sur l’innovation pour créer des biens luxueux et 
                respectueux afin de répondre aux défis environnementaux de notre siècle.</p>
                <p class=\"text-muted text-justify\" style=\"font-size: 18px;\">Plus que l’acquisition d’une résidence principale ou secondaire, Harmony Promotion vous propose une palette de services haut de gamme sur-mesure tels que : 
                le service 3 étoiles pour votre déménagement, la conciergerie au quotidien, la Smart house évolutive pour piloter votre logement ou Harmo’bility, 
                à votre disposition pour vos déplacements.</p>
                <p class=\"text-muted text-justify\" style=\"font-size: 18px;\">Écoute, discrétion et efficacité : vous procurer une expérience dédiée à votre bien-être est une priorité.</p>
                <p class=\"text-muted text-justify\" style=\"font-size: 18px;\">L’innovation, le standing et la performance de nos projets sont au centre de notre stratégie. Nos experts choisissent 
                rigoureusement les emplacements de nos biens pour vous offrir un cadre de vie sélectif 
                et privilégié. Nos partenaires, sont quant à eux reconnus pour leur savoir-faire et leur excellence, 
                nous permettant d’investir ardemment dans l’écologie et créer des programmes immobiliers toujours plus innovants.</p>
            ";
        }
        // line 75
        echo "        </div>
    </div>
</div>
<div class=\"container\" style=\"padding-top: 100px;\">
    <h2 class=\"text-center\" style=\"font-family: 'Barlow'; color: ";
        // line 79
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 79, $this->source); })()), "isPrestige", [], "any", false, false, false, 79)) {
            echo "#336336";
        } else {
            echo "rgb(0, 48, 60)";
        }
        echo ";\">Biens disponibles</h2>
    ";
        // line 80
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new RuntimeError('Variable "biens" does not exist.', 80, $this->source); })())), 0))) {
            // line 81
            echo "        <h3 class=\"text-center\" style=\"font-family: 'Montserrat'; margin-bottom: 50px;\">Tout ce dont vous rêvez à portée de main</h3>
    ";
        } else {
            // line 83
            echo "        <h3 class=\"text-center\" style=\"font-family: 'Montserrat'; margin-bottom: 50px;\">Les biens de ce programme seront disponibles prochainement</h3>
    ";
        }
        // line 85
        echo "    ";
        if ((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new RuntimeError('Variable "biens" does not exist.', 85, $this->source); })())) {
            // line 86
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new RuntimeError('Variable "biens" does not exist.', 86, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
                // line 87
                echo "            <div class=\"accordion\" id=\"bien";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 87), "html", null, true);
                echo "\">
                <div class=\"alert alert-success\">
                    <div id=\"heading";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 89), "html", null, true);
                echo "\" class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"d-flex justify-content-around w-100\">
                            <span class=\"text-center w-100\">";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "title", [], "any", false, false, false, 91), "html", null, true);
                echo "</span>
                            <span class=\"text-center w-100\">Jusqu'à ";
                // line 92
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "surface", [], "any", false, false, false, 92), "html", null, true);
                echo " m2</span>
                            <span class=\"text-center w-100\">À partir de ";
                // line 93
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "prix", [], "any", false, false, false, 93), "html", null, true);
                echo " €</span>
                            <span class=\"text-center w-100\">";
                // line 94
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "disponible", [], "any", false, false, false, 94), "html", null, true);
                echo " disponible";
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bien"], "disponible", [], "any", false, false, false, 94), 1))) {
                    echo "s";
                }
                echo "</span>
                        </div>
                        <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bien-";
                // line 96
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 96), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"bien-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 96), "html", null, true);
                echo "\">
                            <i class=\"fas fa-chevron-down\"></i>
                        </button>
                    </div>
                </div>
                <div id=\"bien-";
                // line 101
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 101), "html", null, true);
                echo "\" class=\"collapse\" aria-labelledby=\"heading";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 101), "html", null, true);
                echo "\" data-parent=\"#bien";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 101), "html", null, true);
                echo "\">
                    <div class=\"alert alert-warning d-flex justify-content-around\">
                        <span class=\"text-center w-100\">Lot</span>
                        <span class=\"text-center w-100\">Surface (m2)</span>
                        <span class=\"text-center w-100\">Étage</span>
                        <span class=\"text-center w-100\">Orientation</span>
                        <span class=\"text-center w-100\">Extérieur</span>
                        <span class=\"text-center w-100\">Parking</span>
                        <span class=\"text-center w-100\">Actions</span>
                    </div>
                    ";
                // line 111
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["bien"], "lots", [], "any", false, false, false, 111));
                foreach ($context['_seq'] as $context["_key"] => $context["lot"]) {
                    // line 112
                    echo "                        <div class=\"alert alert-secondary d-flex justify-content-around align-items-center\">
                            <span class=\"text-center w-100\">";
                    // line 113
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "lot", [], "any", false, false, false, 113), "html", null, true);
                    echo "</span>
                            <span class=\"text-center w-100\">";
                    // line 114
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "surface", [], "any", false, false, false, 114), "html", null, true);
                    echo " m2</span>
                            <span class=\"text-center w-100\">";
                    // line 115
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "etage", [], "any", false, false, false, 115), "html", null, true);
                    echo "</span>
                            <span class=\"text-center w-100\">";
                    // line 116
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "orientation", [], "any", false, false, false, 116), "html", null, true);
                    echo "</span>
                            <span class=\"text-center w-100\">";
                    // line 117
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "exterieur", [], "any", false, false, false, 117), "html", null, true);
                    echo "</span>
                            <span class=\"text-center w-100\">-</span>
                            <span class=\"text-center w-100\">                            
                                <a href=\"/rappel/";
                    // line 120
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "id", [], "any", false, false, false, 120), "html", null, true);
                    echo "/bien\">
                                    <img src=\"https://harmony-promotion.com/images/phone-black.png\" width=\"35\" alt=\"rappel\" style=\"margin-right: 5px;\"/>
                                </a>
                                <a href=\"/brochure/";
                    // line 123
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "id", [], "any", false, false, false, 123), "html", null, true);
                    echo "/bien\">
                                    <img src=\"https://harmony-promotion.com/images/mail-black.png\" width=\"35\" alt=\"brochure\"/>
                                </a>
                            </span>
                        </div>
                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lot'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "    ";
        }
        // line 133
        echo "</div>
<div class=\"d-flex justify-content-center flex-wrap\" style=\"border-top: 2px solid #d39c2f; margin-top: 100px; padding: 50px 0px;\">
    <div class=\"bg-light border border-muted\" style=\"max-width: 750px; padding: 50px;\">
        <h3 style=\"color: ";
        // line 136
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 136, $this->source); })()), "isPrestige", [], "any", false, false, false, 136)) {
            echo "background-color: rgb(0, 48, 60)";
        } else {
            echo "#336336";
        }
        echo "; font-family: 'Barlow'; margin-bottom: 50px;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 136, $this->source); })()), "subtitle", [], "any", false, false, false, 136), "html", null, true);
        echo "</h3>
        <p style=\"font-family: 'Barlow'; font-size: 21px;\">";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 137, $this->source); })()), "text", [], "any", false, false, false, 137), "html", null, true);
        echo "</p>
        <a class=\"btn ";
        // line 138
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 138, $this->source); })()), "isPrestige", [], "any", false, false, false, 138)) {
            echo "text-light";
        } else {
            echo "btn-success";
        }
        echo "\" style=\"margin-top: 50px; font-size: 18px; padding: 10px; ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 138, $this->source); })()), "isPrestige", [], "any", false, false, false, 138)) {
            echo "background-color: rgb(0, 48, 60);";
        }
        echo "\" href=\"/brochure/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 138, $this->source); })()), "id", [], "any", false, false, false, 138), "html", null, true);
        echo "/programme\">Demander la brochure</a>
    </div>
    <div style=\"border-style: solid;
                border-color: black;
                border-width: 1px 1px 1px 0px;
                height: 350px;
                width: 450px;
                ";
        // line 145
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 145, $this->source); })()), "img1", [], "any", false, false, false, 145)) {
            // line 146
            echo "                    background-image: url(/uploads/pages/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 146, $this->source); })()), "img1", [], "any", false, false, false, 146), "html", null, true);
            echo ");
                    background-size: cover;
                ";
        }
        // line 148
        echo "\">
    </div>
</div>
<div class=\"container-fluid text-center\" style=\"padding-top: 50px; border-top: 2px solid #d39c2f; border-bottom: 100px solid #d39c2f; padding: 50px 0 0 0;\">
    <h2 style=\"color: ";
        // line 152
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 152, $this->source); })()), "isPrestige", [], "any", false, false, false, 152)) {
            echo "background-color: rgb(0, 48, 60)";
        } else {
            echo "#336336";
        }
        echo "; font-family: 'Barlow';\">Plan du quartier</h2>
    <h3 style=\"font-family: 'Barlow'; margin-bottom: 50px;\">Tout ce dont vous rêvez à portée de main</h3>
    <div id=\"map\" style=\"height: 600px;\">
    </div>
</div>
<div class=\"container-fluid\" style=\"padding-top: 25px; margin-bottom: 50px;\">
    <div class=\"d-flex justify-content-center flex-wrap\">
        ";
        // line 159
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 159, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prog"]) {
            // line 160
            echo "            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["prog"], "id", [], "any", false, false, false, 160), twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 160, $this->source); })()), "id", [], "any", false, false, false, 160)))) {
                // line 161
                echo "                <a href=\"/detail/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "id", [], "any", false, false, false, 161), "html", null, true);
                echo "\" style=\"text-decoration: none;\">
                    <div style=\"margin: 10px 50px; max-width: 240px; height: 350px; border-radius: 25px; box-shadow: 6px 6px 2px 0px rgba(0,0,0,0.16); overflow: hidden;\">
                        <div style=\"min-height: 150px; background-image: url('/uploads/pages/";
                // line 163
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "miniature", [], "any", false, false, false, 163), "html", null, true);
                echo "'); background-size: cover; width: 100%;\">
                        </div>
                        <div class=\"h-100\" ";
                // line 165
                if (twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 165)) {
                    echo "style=\"background-color: rgb(0, 48, 60);\"";
                }
                echo ">
                            <div class=\"d-flex justify-content-end\" style=\"padding-right: 10px;\">
                                <div class=\"text-center d-inline-block ";
                // line 167
                if (twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 167)) {
                    echo "text-dark bg-light";
                } else {
                    echo "text-light";
                }
                echo "\" style=\"margin-top: -10px; background-color: ";
                if ( !twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 167)) {
                    echo "rgb(144, 188, 85)";
                }
                echo "; padding: 5px 12px;\">
                                    ";
                // line 168
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "tag", [], "any", false, false, false, 168), "html", null, true);
                echo "
                                </div>
                            </div>
                            <div style=\"padding: 20px;\">
                                <h2 style=\"font-family: 'Barlow'; font-size: 18px; color: ";
                // line 172
                if ( !twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 172)) {
                    echo "#336336";
                } else {
                    echo "white";
                }
                echo "; font-weight: 700;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "title", [], "any", false, false, false, 172), "html", null, true);
                echo "</h2>
                                <h3 style=\"font-family: 'Montserrat'; font-size: 18px; color: ";
                // line 173
                if ( !twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 173)) {
                    echo "#d39c2f";
                } else {
                    echo "white";
                }
                echo ";\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "ville", [], "any", false, false, false, 173), "html", null, true);
                echo "</h3>
                                <div style=\"border: 2px solid ";
                // line 174
                if (twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 174)) {
                    echo " #B1A06B ";
                } else {
                    echo " #f8f9fa ";
                }
                echo "; width: 50px; margin: 5px 0;\"></div>
                                <p class=\"text-muted text-justify\" style=\"font-size: 13px; word-wrap: break-word; hyphens: auto;\">";
                // line 175
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "text", [], "any", false, false, false, 175), 0, 80), "html", null, true);
                echo "...</p>
                            </div>
                        </div>
                    </div>
                </a>
            ";
            }
            // line 181
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "    </div>
</div>
<script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById(\"map\"), {
          center: { lat: ";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["lat"]) || array_key_exists("lat", $context) ? $context["lat"] : (function () { throw new RuntimeError('Variable "lat" does not exist.', 187, $this->source); })()), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, (isset($context["lng"]) || array_key_exists("lng", $context) ? $context["lng"] : (function () { throw new RuntimeError('Variable "lng" does not exist.', 187, $this->source); })()), "html", null, true);
        echo " },
          zoom: 15,
        });
        map.setTilt(45);
        const marker = new google.maps.Marker({
            position: { lat: ";
        // line 192
        echo twig_escape_filter($this->env, (isset($context["lat"]) || array_key_exists("lat", $context) ? $context["lat"] : (function () { throw new RuntimeError('Variable "lat" does not exist.', 192, $this->source); })()), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, (isset($context["lng"]) || array_key_exists("lng", $context) ? $context["lng"] : (function () { throw new RuntimeError('Variable "lng" does not exist.', 192, $this->source); })()), "html", null, true);
        echo " },
            map: map,
        });
    }
</script>
<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD75nFLcsn06DgLjQVJRpNJNV5iNnoPuks&callback=initMap\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/detail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  604 => 192,  594 => 187,  587 => 182,  581 => 181,  572 => 175,  564 => 174,  554 => 173,  544 => 172,  537 => 168,  525 => 167,  518 => 165,  513 => 163,  507 => 161,  504 => 160,  500 => 159,  486 => 152,  480 => 148,  473 => 146,  471 => 145,  451 => 138,  447 => 137,  437 => 136,  432 => 133,  429 => 132,  421 => 129,  409 => 123,  403 => 120,  397 => 117,  393 => 116,  389 => 115,  385 => 114,  381 => 113,  378 => 112,  374 => 111,  357 => 101,  347 => 96,  338 => 94,  334 => 93,  330 => 92,  326 => 91,  321 => 89,  315 => 87,  310 => 86,  307 => 85,  303 => 83,  299 => 81,  297 => 80,  289 => 79,  283 => 75,  267 => 61,  262 => 59,  258 => 57,  256 => 56,  248 => 53,  228 => 46,  224 => 45,  209 => 43,  205 => 42,  197 => 39,  191 => 38,  188 => 37,  180 => 36,  171 => 35,  167 => 34,  163 => 33,  154 => 32,  150 => 31,  144 => 30,  136 => 29,  125 => 25,  119 => 24,  104 => 16,  96 => 11,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Harmony Promotion | {{programme.title}}{% endblock %}

{% block body %}
<style>
    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div style=\"background-image: url('/uploads/pages/{{programme.miniature}}'); height: 500px; background-size: cover;\">
    <div class=\"d-flex justify-content-between align-items-end h-100\" style=\"padding: 0px 5%;\">
        <div style=\"
            width: 90px; 
            height: 90px; 
            background-color: {% if programme.isPrestige %}rgb(0, 48, 60){% else %}#336336{% endif %}; 
            border-radius: 50%; 
            background-image: url('https://harmony-promotion.com/images/photos.png');
            background-size: 65%;
            background-repeat: no-repeat;
            background-position: center;
            margin-bottom: -50px;\">
        </div>
        <div class=\"{% if not programme.isPrestige %}bg-light{% endif %} d-flex justify-content-end flex-column\" style=\"
                                height: {% if not programme.isPrestige %} 270px {% else %} 220px {% endif %}; 
                                width: 450px; 
                                margin-bottom: 50px;
                                border-radius: 0px 50px 0px 50px;
                                overflow: {% if programme.isPrestige %}visible{% else %}hidden{% endif %};
                                {% if programme.isPrestige %}background-color: rgba(255, 255, 255, 0.6);{% endif %}\">
            {% if programme.isPrestige %}<img src=\"https://harmony-promotion.com/images/pastille.svg\" alt=\"Pastille prestige\" width=\"100\" style=\"position: relative; left: 400px; top: 100px;\"/>{% endif %}
            <div class=\"h-100\" style=\"padding: 25px 35px; font-family: 'Montserrat'; color: {% if programme.isPrestige %}rgb(0, 48, 60){% else %}#336336{% endif %};\">
                <h1 style=\"font-family: 'Barlow'; margin-top: 20px; font-size: 31px;\">{{programme.title}}</h1>
                {% if programme.isPrestige %}<div style=\"border: 2px solid #B1A06B; width: 50px; left: -55px; top: -20px; position: relative;\"></div>{% endif %}
                <h3 style=\"{% if not programme.isPrestige %}color: #8DC63F;{% endif %}font-size: 25px;\">{{programme.ville}}</h3>
                {% if not programme.isPrestige %}<h3 style=\"{% if not programme.isPrestige %}color: #8DC63F;{% endif %}font-size: 25px;\">Programme neuf</h3>{% endif %}
            </div>
            <div class=\"d-flex {% if not programme.isPrestige %}justify-content-around align-items-center{% endif %}\" 
                                                                                            style=\"background-color: {% if not programme.isPrestige %}#336336{% endif %}; 
                                                                                                    height: 100px; 
                                                                                                    width: 100%;\">
                <a href=\"/rappel/{{programme.id}}/programme\">
                    <img width=\"45\" style=\"margin: {% if not programme.isPrestige %}5px{% else %}0 0px 25px 35px{% endif %};\" src=\"{% if programme.isPrestige %}https://harmony-promotion.com/images/appelP.svg{% else %}https://harmony-promotion.com/images/appel-w.png{% endif %}\"/>
                </a>
                <a href=\"/brochure/{{programme.id}}/programme\">
                    <img width=\"45\" style=\"margin: {% if not programme.isPrestige %}5px{% else %}0 0px 25px 35px{% endif %};\" src=\"{% if programme.isPrestige %}https://harmony-promotion.com/images/brochureP.svg{% else %}https://harmony-promotion.com/images/brochure-w.png{% endif %}\"/>
                </a>
            </div>
        </div>
    </div>
</div>

<div class=\"container-fluid {% if not programme.isPrestige %}text-center{% endif %}\" style=\"border-bottom: 2px solid #d39c2f; padding: 80px 0px;\">
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            {% if not programme.isPrestige %}
                <h4 style=\"color: #336336; font-family: 'Barlow';\">Nos commerciaux sont à votre disposition dans notre bureau de vente !</h4>
                <h5 style=\"font-family: 'Barlow';\">40-42 Avenue Maurice Berteaux, 94420 Le Plessis-Trévise</h5>
                <a href=\"{{ path('rappel') }}\" class=\"btn btn-success\" style=\"margin-top: 35px; width: 220px; padding: 10px; font-size: 18px;\">Prendre rendez-vous</a>
            {% else %}
                <h4 class=\"text-center\" style=\"color: rgb(0, 48, 60); font-family: 'Barlow'; font-size: 35px;\">LA GAMME HARMONY PRESTIGE<br/>
                    OÙ RÉINVENTER LE LUXE À LA FRANÇAISE</h4>
                <br/>
                <p class=\"text-muted text-justify\" style=\"font-size: 18px;\">Fervent défenseur de la planète, Harmony Prestige s’appuie sur l’innovation pour créer des biens luxueux et 
                respectueux afin de répondre aux défis environnementaux de notre siècle.</p>
                <p class=\"text-muted text-justify\" style=\"font-size: 18px;\">Plus que l’acquisition d’une résidence principale ou secondaire, Harmony Promotion vous propose une palette de services haut de gamme sur-mesure tels que : 
                le service 3 étoiles pour votre déménagement, la conciergerie au quotidien, la Smart house évolutive pour piloter votre logement ou Harmo’bility, 
                à votre disposition pour vos déplacements.</p>
                <p class=\"text-muted text-justify\" style=\"font-size: 18px;\">Écoute, discrétion et efficacité : vous procurer une expérience dédiée à votre bien-être est une priorité.</p>
                <p class=\"text-muted text-justify\" style=\"font-size: 18px;\">L’innovation, le standing et la performance de nos projets sont au centre de notre stratégie. Nos experts choisissent 
                rigoureusement les emplacements de nos biens pour vous offrir un cadre de vie sélectif 
                et privilégié. Nos partenaires, sont quant à eux reconnus pour leur savoir-faire et leur excellence, 
                nous permettant d’investir ardemment dans l’écologie et créer des programmes immobiliers toujours plus innovants.</p>
            {% endif %}
        </div>
    </div>
</div>
<div class=\"container\" style=\"padding-top: 100px;\">
    <h2 class=\"text-center\" style=\"font-family: 'Barlow'; color: {% if not programme.isPrestige %}#336336{% else %}rgb(0, 48, 60){% endif %};\">Biens disponibles</h2>
    {% if biens|length > 0 %}
        <h3 class=\"text-center\" style=\"font-family: 'Montserrat'; margin-bottom: 50px;\">Tout ce dont vous rêvez à portée de main</h3>
    {% else %}
        <h3 class=\"text-center\" style=\"font-family: 'Montserrat'; margin-bottom: 50px;\">Les biens de ce programme seront disponibles prochainement</h3>
    {% endif %}
    {% if biens %}
        {% for bien in biens %}
            <div class=\"accordion\" id=\"bien{{bien.id}}\">
                <div class=\"alert alert-success\">
                    <div id=\"heading{{bien.id}}\" class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"d-flex justify-content-around w-100\">
                            <span class=\"text-center w-100\">{{bien.title}}</span>
                            <span class=\"text-center w-100\">Jusqu'à {{bien.surface}} m2</span>
                            <span class=\"text-center w-100\">À partir de {{bien.prix}} €</span>
                            <span class=\"text-center w-100\">{{bien.disponible}} disponible{% if bien.disponible > 1 %}s{% endif %}</span>
                        </div>
                        <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bien-{{bien.id}}\" aria-expanded=\"true\" aria-controls=\"bien-{{bien.id}}\">
                            <i class=\"fas fa-chevron-down\"></i>
                        </button>
                    </div>
                </div>
                <div id=\"bien-{{bien.id}}\" class=\"collapse\" aria-labelledby=\"heading{{bien.id}}\" data-parent=\"#bien{{bien.id}}\">
                    <div class=\"alert alert-warning d-flex justify-content-around\">
                        <span class=\"text-center w-100\">Lot</span>
                        <span class=\"text-center w-100\">Surface (m2)</span>
                        <span class=\"text-center w-100\">Étage</span>
                        <span class=\"text-center w-100\">Orientation</span>
                        <span class=\"text-center w-100\">Extérieur</span>
                        <span class=\"text-center w-100\">Parking</span>
                        <span class=\"text-center w-100\">Actions</span>
                    </div>
                    {% for lot in bien.lots %}
                        <div class=\"alert alert-secondary d-flex justify-content-around align-items-center\">
                            <span class=\"text-center w-100\">{{lot.lot}}</span>
                            <span class=\"text-center w-100\">{{lot.surface}} m2</span>
                            <span class=\"text-center w-100\">{{lot.etage}}</span>
                            <span class=\"text-center w-100\">{{lot.orientation}}</span>
                            <span class=\"text-center w-100\">{{lot.exterieur}}</span>
                            <span class=\"text-center w-100\">-</span>
                            <span class=\"text-center w-100\">                            
                                <a href=\"/rappel/{{lot.id}}/bien\">
                                    <img src=\"https://harmony-promotion.com/images/phone-black.png\" width=\"35\" alt=\"rappel\" style=\"margin-right: 5px;\"/>
                                </a>
                                <a href=\"/brochure/{{lot.id}}/bien\">
                                    <img src=\"https://harmony-promotion.com/images/mail-black.png\" width=\"35\" alt=\"brochure\"/>
                                </a>
                            </span>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% endfor %}
    {% endif %}
</div>
<div class=\"d-flex justify-content-center flex-wrap\" style=\"border-top: 2px solid #d39c2f; margin-top: 100px; padding: 50px 0px;\">
    <div class=\"bg-light border border-muted\" style=\"max-width: 750px; padding: 50px;\">
        <h3 style=\"color: {% if programme.isPrestige %}background-color: rgb(0, 48, 60){% else %}#336336{% endif %}; font-family: 'Barlow'; margin-bottom: 50px;\">{{programme.subtitle}}</h3>
        <p style=\"font-family: 'Barlow'; font-size: 21px;\">{{programme.text}}</p>
        <a class=\"btn {% if programme.isPrestige %}text-light{% else %}btn-success{% endif %}\" style=\"margin-top: 50px; font-size: 18px; padding: 10px; {% if programme.isPrestige %}background-color: rgb(0, 48, 60);{% endif %}\" href=\"/brochure/{{programme.id}}/programme\">Demander la brochure</a>
    </div>
    <div style=\"border-style: solid;
                border-color: black;
                border-width: 1px 1px 1px 0px;
                height: 350px;
                width: 450px;
                {% if programme.img1 %}
                    background-image: url(/uploads/pages/{{ programme.img1 }});
                    background-size: cover;
                {% endif %}\">
    </div>
</div>
<div class=\"container-fluid text-center\" style=\"padding-top: 50px; border-top: 2px solid #d39c2f; border-bottom: 100px solid #d39c2f; padding: 50px 0 0 0;\">
    <h2 style=\"color: {% if programme.isPrestige %}background-color: rgb(0, 48, 60){% else %}#336336{% endif %}; font-family: 'Barlow';\">Plan du quartier</h2>
    <h3 style=\"font-family: 'Barlow'; margin-bottom: 50px;\">Tout ce dont vous rêvez à portée de main</h3>
    <div id=\"map\" style=\"height: 600px;\">
    </div>
</div>
<div class=\"container-fluid\" style=\"padding-top: 25px; margin-bottom: 50px;\">
    <div class=\"d-flex justify-content-center flex-wrap\">
        {% for prog in programmes %}
            {% if prog.id != programme.id %}
                <a href=\"/detail/{{prog.id}}\" style=\"text-decoration: none;\">
                    <div style=\"margin: 10px 50px; max-width: 240px; height: 350px; border-radius: 25px; box-shadow: 6px 6px 2px 0px rgba(0,0,0,0.16); overflow: hidden;\">
                        <div style=\"min-height: 150px; background-image: url('/uploads/pages/{{prog.miniature}}'); background-size: cover; width: 100%;\">
                        </div>
                        <div class=\"h-100\" {% if prog.isPrestige %}style=\"background-color: rgb(0, 48, 60);\"{% endif %}>
                            <div class=\"d-flex justify-content-end\" style=\"padding-right: 10px;\">
                                <div class=\"text-center d-inline-block {% if prog.isPrestige %}text-dark bg-light{% else %}text-light{% endif %}\" style=\"margin-top: -10px; background-color: {% if not prog.isPrestige %}rgb(144, 188, 85){% endif %}; padding: 5px 12px;\">
                                    {{prog.tag}}
                                </div>
                            </div>
                            <div style=\"padding: 20px;\">
                                <h2 style=\"font-family: 'Barlow'; font-size: 18px; color: {% if not prog.isPrestige %}#336336{% else %}white{% endif %}; font-weight: 700;\">{{prog.title}}</h2>
                                <h3 style=\"font-family: 'Montserrat'; font-size: 18px; color: {% if not prog.isPrestige %}#d39c2f{% else %}white{% endif %};\">{{prog.ville}}</h3>
                                <div style=\"border: 2px solid {% if prog.isPrestige %} #B1A06B {% else %} #f8f9fa {% endif %}; width: 50px; margin: 5px 0;\"></div>
                                <p class=\"text-muted text-justify\" style=\"font-size: 13px; word-wrap: break-word; hyphens: auto;\">{{prog.text|slice(0, 80)}}...</p>
                            </div>
                        </div>
                    </div>
                </a>
            {% endif %}
        {% endfor %}
    </div>
</div>
<script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById(\"map\"), {
          center: { lat: {{ lat }}, lng: {{ lng }} },
          zoom: 15,
        });
        map.setTilt(45);
        const marker = new google.maps.Marker({
            position: { lat: {{ lat }}, lng: {{ lng }} },
            map: map,
        });
    }
</script>
<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD75nFLcsn06DgLjQVJRpNJNV5iNnoPuks&callback=initMap\"></script>
{% endblock %}", "home/detail.html.twig", "/home/souaguen/Bureau/harmonypresent/templates/home/detail.html.twig");
    }
}
