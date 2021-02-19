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
    @media (max-width: 620px) {
        .accordion {
            font-size: 7px;
        }
        #ddplan 
        {
            font-size: 7px;
            border: 1px solid white;
            border-radius: 5px;
        }
    }
    @media (min-width: 620px) and (max-width: 780px) {
        .accordion {
            font-size: 10px;
        }
        #ddplan 
        {
            font-size: 10px; 
            border: 1px solid white;
            border-radius: 5px;
        }
    }
    @media (min-width: 780px) {
        .accordion {
            font-size: 14px;
        }
        #ddplan 
        {
            font-size: 14px;
            border: 1px solid white;
            border-radius: 5px;
        }
    }

    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div style=\"background-image: url('/uploads/pages/";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 45, $this->source); })()), "miniature", [], "any", false, false, false, 45), "html", null, true);
        echo "'); height: 500px; background-size: cover;\">
    <div class=\"d-flex justify-content-between align-items-end h-100\" style=\"padding: 0px 5%;\">
        <div class=\"d-none d-md-block\" style=\"
            width: 90px; 
            height: 90px; 
            background-color: ";
        // line 50
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 50, $this->source); })()), "isPrestige", [], "any", false, false, false, 50)) {
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
        // line 58
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 58, $this->source); })()), "isPrestige", [], "any", false, false, false, 58)) {
            echo "bg-light";
        }
        echo " d-flex justify-content-end flex-column\" style=\"
                                height: ";
        // line 59
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 59, $this->source); })()), "isPrestige", [], "any", false, false, false, 59)) {
            echo " 270px ";
        } else {
            echo " 220px ";
        }
        echo "; 
                                width: 450px; 
                                margin-bottom: 50px;
                                border-radius: 0px 50px 0px 50px;
                                overflow: ";
        // line 63
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 63, $this->source); })()), "isPrestige", [], "any", false, false, false, 63)) {
            echo "visible";
        } else {
            echo "hidden";
        }
        echo ";
                                ";
        // line 64
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 64, $this->source); })()), "isPrestige", [], "any", false, false, false, 64)) {
            echo "background-color: rgba(255, 255, 255, 0.6);";
        }
        echo "\">
            ";
        // line 65
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 65, $this->source); })()), "isPrestige", [], "any", false, false, false, 65)) {
            echo "<img src=\"https://harmony-promotion.com/images/pastille.svg\" alt=\"Pastille prestige\" class=\"d-none d-md-block\" width=\"100\" style=\"position: relative; left: 400px; top: 100px;\"/>";
        }
        // line 66
        echo "            <div class=\"h-100\" style=\"padding: 25px 35px; font-family: 'Montserrat'; color: ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 66, $this->source); })()), "isPrestige", [], "any", false, false, false, 66)) {
            echo "rgb(0, 48, 60)";
        } else {
            echo "#336336";
        }
        echo ";\">
                <h1 style=\"font-family: 'Barlow'; margin-top: 20px; font-size: 31px;\">";
        // line 67
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 67, $this->source); })()), "title", [], "any", false, false, false, 67), "html", null, true);
        echo "</h1>
                ";
        // line 68
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 68, $this->source); })()), "isPrestige", [], "any", false, false, false, 68)) {
            echo "<div style=\"border: 2px solid #B1A06B; width: 50px; left: -55px; top: -20px; position: relative;\"></div>";
        }
        // line 69
        echo "                <h3 style=\"";
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 69, $this->source); })()), "isPrestige", [], "any", false, false, false, 69)) {
            echo "color: #8DC63F;";
        }
        echo "font-size: 25px;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 69, $this->source); })()), "ville", [], "any", false, false, false, 69), "html", null, true);
        echo "</h3>
                ";
        // line 70
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 70, $this->source); })()), "isPrestige", [], "any", false, false, false, 70)) {
            echo "<h3 style=\"";
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 70, $this->source); })()), "isPrestige", [], "any", false, false, false, 70)) {
                echo "color: #8DC63F;";
            }
            echo "font-size: 25px;\">Programme neuf</h3>";
        }
        // line 71
        echo "            </div>
            <div class=\"d-flex ";
        // line 72
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 72, $this->source); })()), "isPrestige", [], "any", false, false, false, 72)) {
            echo "justify-content-around align-items-center";
        }
        echo "\" 
                                                                                            style=\"background-color: ";
        // line 73
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 73, $this->source); })()), "isPrestige", [], "any", false, false, false, 73)) {
            echo "#336336";
        }
        echo "; 
                                                                                                    height: 100px; 
                                                                                                    width: 100%;\">
                <a href=\"/rappel/";
        // line 76
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 76, $this->source); })()), "id", [], "any", false, false, false, 76), "html", null, true);
        echo "/programme\">
                    <img width=\"45\" style=\"margin: ";
        // line 77
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 77, $this->source); })()), "isPrestige", [], "any", false, false, false, 77)) {
            echo "5px";
        } else {
            echo "0 0px 25px 35px";
        }
        echo ";\" src=\"";
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 77, $this->source); })()), "isPrestige", [], "any", false, false, false, 77)) {
            echo "https://harmony-promotion.com/images/appelP.svg";
        } else {
            echo "https://harmony-promotion.com/images/appel-w.png";
        }
        echo "\"/>
                </a>
                <a href=\"/brochure/";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 79, $this->source); })()), "id", [], "any", false, false, false, 79), "html", null, true);
        echo "/programme\">
                    <img width=\"45\" style=\"margin: ";
        // line 80
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 80, $this->source); })()), "isPrestige", [], "any", false, false, false, 80)) {
            echo "5px";
        } else {
            echo "0 0px 25px 35px";
        }
        echo ";\" src=\"";
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 80, $this->source); })()), "isPrestige", [], "any", false, false, false, 80)) {
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
        // line 87
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 87, $this->source); })()), "isPrestige", [], "any", false, false, false, 87)) {
            echo "text-center";
        }
        echo "\" style=\"border-bottom: 2px solid #d39c2f; padding: 80px 0px;\">
    <div class=\"row\">
        <div class=\"col-md-8 offset-md-2\">
            ";
        // line 90
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 90, $this->source); })()), "isPrestige", [], "any", false, false, false, 90)) {
            // line 91
            echo "                <h4 style=\"color: #336336; font-family: 'Barlow';\">Nos commerciaux sont à votre disposition dans notre bureau de vente !</h4>
                <h5 style=\"font-family: 'Barlow';\">40-42 Avenue Maurice Berteaux, 94420 Le Plessis-Trévise</h5>
                <a href=\"";
            // line 93
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rappel");
            echo "\" class=\"btn btn-success\" style=\"margin-top: 35px; width: 220px; padding: 10px; font-size: 18px;\">Prendre rendez-vous</a>
            ";
        } else {
            // line 95
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
        // line 109
        echo "        </div>
    </div>
</div>
<div class=\"container\" style=\"padding-top: 100px;\">
    <h2 class=\"text-center\" style=\"font-family: 'Barlow'; color: ";
        // line 113
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 113, $this->source); })()), "isPrestige", [], "any", false, false, false, 113)) {
            echo "#336336";
        } else {
            echo "rgb(0, 48, 60)";
        }
        echo ";\">Biens disponibles</h2>
    ";
        // line 114
        if ((1 === twig_compare(twig_length_filter($this->env, (isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new RuntimeError('Variable "biens" does not exist.', 114, $this->source); })())), 0))) {
            // line 115
            echo "        <h3 class=\"text-center\" style=\"font-family: 'Montserrat'; margin-bottom: 50px;\">Tout ce dont vous rêvez à portée de main</h3>
    ";
        } else {
            // line 117
            echo "        <h3 class=\"text-center\" style=\"font-family: 'Montserrat'; margin-bottom: 50px;\">Les biens de ce programme seront disponibles prochainement</h3>
    ";
        }
        // line 119
        echo "    ";
        if ((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new RuntimeError('Variable "biens" does not exist.', 119, $this->source); })())) {
            // line 120
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new RuntimeError('Variable "biens" does not exist.', 120, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
                // line 121
                echo "            <div class=\"accordion\" id=\"bien";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 121), "html", null, true);
                echo "\">
                <div style=\"padding: 15px 0; background-color: #336336; color: white; border-radius: 5px; border: 2px solid silver;\">
                    <div id=\"heading";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 123), "html", null, true);
                echo "\" class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"d-flex justify-content-around align-items-center w-100\">
                            <span class=\"text-center w-100\">";
                // line 125
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "title", [], "any", false, false, false, 125), "html", null, true);
                echo "</span>
                            <span class=\"text-center w-100\">Jusqu'à ";
                // line 126
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "surface", [], "any", false, false, false, 126), "html", null, true);
                echo " m2</span>
                            <span class=\"text-center w-100\">À partir de ";
                // line 127
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "prix", [], "any", false, false, false, 127), "html", null, true);
                echo " €</span>
                            <span class=\"text-center w-100\">";
                // line 128
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "disponible", [], "any", false, false, false, 128), "html", null, true);
                echo " disponible";
                if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["bien"], "disponible", [], "any", false, false, false, 128), 1))) {
                    echo "s";
                }
                echo "</span>
                            <span id=\"ddplan\" class=\"text-center w-100 border border-light\">Plan 2D</span>
                        </div>
                        <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bien-";
                // line 131
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 131), "html", null, true);
                echo "\" aria-expanded=\"true\" aria-controls=\"bien-";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 131), "html", null, true);
                echo "\">
                            <i class=\"fas fa-chevron-down text-light\"></i>
                        </button>
                    </div>
                </div>
                <div id=\"bien-";
                // line 136
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 136), "html", null, true);
                echo "\" class=\"collapse\" aria-labelledby=\"heading";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 136), "html", null, true);
                echo "\" data-parent=\"#bien";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 136), "html", null, true);
                echo "\">
                    <div class=\"d-flex justify-content-around\" style=\"padding: 15px 0; background-color: #D39C2F; border-radius: 5px; border: 2px solid silver;\">
                        <span class=\"text-center w-100\">Lot</span>
                        <span class=\"text-center w-100\">Surface (m2)</span>
                        <span class=\"text-center w-100\">Étage</span>
                        <span class=\"text-center w-100\">Orientation</span>
                        <span class=\"text-center w-100\">Extérieur</span>
                        <span class=\"text-center w-100\">Parking</span>
                        <span class=\"text-center w-100\">Actions</span>
                    </div>
                    ";
                // line 146
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["bien"], "lots", [], "any", false, false, false, 146));
                foreach ($context['_seq'] as $context["_key"] => $context["lot"]) {
                    // line 147
                    echo "                        <div class=\"d-flex justify-content-around align-items-center bg-light\" style=\"padding: 15px 0; border-radius: 5px; border: 2px solid silver;\">
                            <span class=\"text-center w-100\">";
                    // line 148
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "lot", [], "any", false, false, false, 148), "html", null, true);
                    echo "</span>
                            <span class=\"text-center w-100\">";
                    // line 149
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "surface", [], "any", false, false, false, 149), "html", null, true);
                    echo " m2</span>
                            <span class=\"text-center w-100\">";
                    // line 150
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "etage", [], "any", false, false, false, 150), "html", null, true);
                    echo "</span>
                            <span class=\"text-center w-100\">";
                    // line 151
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "orientation", [], "any", false, false, false, 151), "html", null, true);
                    echo "</span>
                            <span class=\"text-center w-100\">";
                    // line 152
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "exterieur", [], "any", false, false, false, 152), "html", null, true);
                    echo "</span>
                            <span class=\"text-center w-100\">-</span>
                            <span class=\"text-center w-100\">                            
                                <a href=\"/rappel/";
                    // line 155
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "id", [], "any", false, false, false, 155), "html", null, true);
                    echo "/bien\">
                                    <img src=\"https://harmony-promotion.com/images/phone-black.png\" width=\"35\" alt=\"rappel\" style=\"margin-right: 5px;\"/>
                                </a>
                                <a href=\"/brochure/";
                    // line 158
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["lot"], "id", [], "any", false, false, false, 158), "html", null, true);
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
                // line 164
                echo "                </div>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 167
            echo "    ";
        }
        // line 168
        echo "</div>
<div class=\"d-flex justify-content-center flex-wrap\" style=\"border-top: 2px solid #d39c2f; margin-top: 100px; padding: 50px 0px;\">
    <div class=\"bg-light border border-muted\" style=\"max-width: 750px; padding: 50px;\">
        <h3 style=\"color: ";
        // line 171
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 171, $this->source); })()), "isPrestige", [], "any", false, false, false, 171)) {
            echo "background-color: rgb(0, 48, 60)";
        } else {
            echo "#336336";
        }
        echo "; font-family: 'Barlow'; margin-bottom: 50px;\">";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 171, $this->source); })()), "subtitle", [], "any", false, false, false, 171), "html", null, true);
        echo "</h3>
        <p style=\"font-family: 'Barlow'; font-size: 21px;\">";
        // line 172
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 172, $this->source); })()), "text", [], "any", false, false, false, 172), "html", null, true);
        echo "</p>
        <a class=\"btn ";
        // line 173
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 173, $this->source); })()), "isPrestige", [], "any", false, false, false, 173)) {
            echo "text-light";
        } else {
            echo "btn-success";
        }
        echo "\" style=\"margin-top: 50px; font-size: 18px; padding: 10px; ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 173, $this->source); })()), "isPrestige", [], "any", false, false, false, 173)) {
            echo "background-color: rgb(0, 48, 60);";
        }
        echo "\" href=\"/brochure/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 173, $this->source); })()), "id", [], "any", false, false, false, 173), "html", null, true);
        echo "/programme\">Demander la brochure</a>
    </div>
    <div style=\"border-style: solid;
                border-color: black;
                border-width: 1px 1px 1px 0px;
                height: 350px;
                width: 450px;
                ";
        // line 180
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 180, $this->source); })()), "img1", [], "any", false, false, false, 180)) {
            // line 181
            echo "                    background-image: url(/uploads/pages/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 181, $this->source); })()), "img1", [], "any", false, false, false, 181), "html", null, true);
            echo ");
                    background-size: cover;
                ";
        }
        // line 183
        echo "\">
    </div>
</div>
<div class=\"container-fluid text-center\" style=\"padding-top: 50px; border-top: 2px solid #d39c2f; border-bottom: 100px solid #d39c2f; padding: 50px 0 0 0;\">
    <h2 style=\"color: ";
        // line 187
        if (twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 187, $this->source); })()), "isPrestige", [], "any", false, false, false, 187)) {
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
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 194, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["prog"]) {
            // line 195
            echo "            ";
            if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, $context["prog"], "id", [], "any", false, false, false, 195), twig_get_attribute($this->env, $this->source, (isset($context["programme"]) || array_key_exists("programme", $context) ? $context["programme"] : (function () { throw new RuntimeError('Variable "programme" does not exist.', 195, $this->source); })()), "id", [], "any", false, false, false, 195)))) {
                // line 196
                echo "                <a href=\"/detail/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "id", [], "any", false, false, false, 196), "html", null, true);
                echo "\" style=\"text-decoration: none;\">
                    <div style=\"margin: 10px 25px; max-width: 240px; height: 350px; border-radius: 25px; box-shadow: 6px 6px 2px 0px rgba(0,0,0,0.16); overflow: hidden;\">
                        <div style=\"min-height: 150px; background-image: url('/uploads/pages/";
                // line 198
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "miniature", [], "any", false, false, false, 198), "html", null, true);
                echo "'); background-size: cover; width: 100%;\">
                        </div>
                        <div class=\"h-100\" ";
                // line 200
                if (twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 200)) {
                    echo "style=\"background-color: rgb(0, 48, 60);\"";
                }
                echo ">
                            <div class=\"d-flex justify-content-end\" style=\"padding-right: 10px;\">
                                <div class=\"text-center d-inline-block ";
                // line 202
                if (twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 202)) {
                    echo "text-dark bg-light";
                } else {
                    echo "text-light";
                }
                echo "\" style=\"margin-top: -10px; background-color: ";
                if ( !twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 202)) {
                    echo "rgb(144, 188, 85)";
                }
                echo "; padding: 5px 12px;\">
                                    ";
                // line 203
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "tag", [], "any", false, false, false, 203), "html", null, true);
                echo "
                                </div>
                            </div>
                            <div style=\"padding: 20px;\">
                                <h2 style=\"font-family: 'Barlow'; font-size: 18px; color: ";
                // line 207
                if ( !twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 207)) {
                    echo "#336336";
                } else {
                    echo "white";
                }
                echo "; font-weight: 700;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "title", [], "any", false, false, false, 207), "html", null, true);
                echo "</h2>
                                <h3 style=\"font-family: 'Montserrat'; font-size: 18px; color: ";
                // line 208
                if ( !twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 208)) {
                    echo "#d39c2f";
                } else {
                    echo "white";
                }
                echo ";\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "ville", [], "any", false, false, false, 208), "html", null, true);
                echo "</h3>
                                <div style=\"border: 2px solid ";
                // line 209
                if (twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 209)) {
                    echo " #B1A06B ";
                } else {
                    echo " #f8f9fa ";
                }
                echo "; width: 50px; margin: 5px 0;\"></div>
                                <p class=\"text-muted text-justify\" style=\"font-size: 13px; word-wrap: break-word; hyphens: auto;\">";
                // line 210
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "text", [], "any", false, false, false, 210), 0, 80), "html", null, true);
                echo "...</p>
                            </div>
                        </div>
                    </div>
                </a>
            ";
            }
            // line 216
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prog'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        echo "    </div>
</div>
<script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById(\"map\"), {
          center: { lat: ";
        // line 222
        echo twig_escape_filter($this->env, (isset($context["lat"]) || array_key_exists("lat", $context) ? $context["lat"] : (function () { throw new RuntimeError('Variable "lat" does not exist.', 222, $this->source); })()), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, (isset($context["lng"]) || array_key_exists("lng", $context) ? $context["lng"] : (function () { throw new RuntimeError('Variable "lng" does not exist.', 222, $this->source); })()), "html", null, true);
        echo " },
          zoom: 15,
        });
        map.setTilt(45);
        const marker = new google.maps.Marker({
            position: { lat: ";
        // line 227
        echo twig_escape_filter($this->env, (isset($context["lat"]) || array_key_exists("lat", $context) ? $context["lat"] : (function () { throw new RuntimeError('Variable "lat" does not exist.', 227, $this->source); })()), "html", null, true);
        echo ", lng: ";
        echo twig_escape_filter($this->env, (isset($context["lng"]) || array_key_exists("lng", $context) ? $context["lng"] : (function () { throw new RuntimeError('Variable "lng" does not exist.', 227, $this->source); })()), "html", null, true);
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
        return array (  639 => 227,  629 => 222,  622 => 217,  616 => 216,  607 => 210,  599 => 209,  589 => 208,  579 => 207,  572 => 203,  560 => 202,  553 => 200,  548 => 198,  542 => 196,  539 => 195,  535 => 194,  521 => 187,  515 => 183,  508 => 181,  506 => 180,  486 => 173,  482 => 172,  472 => 171,  467 => 168,  464 => 167,  456 => 164,  444 => 158,  438 => 155,  432 => 152,  428 => 151,  424 => 150,  420 => 149,  416 => 148,  413 => 147,  409 => 146,  392 => 136,  382 => 131,  372 => 128,  368 => 127,  364 => 126,  360 => 125,  355 => 123,  349 => 121,  344 => 120,  341 => 119,  337 => 117,  333 => 115,  331 => 114,  323 => 113,  317 => 109,  301 => 95,  296 => 93,  292 => 91,  290 => 90,  282 => 87,  262 => 80,  258 => 79,  243 => 77,  239 => 76,  231 => 73,  225 => 72,  222 => 71,  214 => 70,  205 => 69,  201 => 68,  197 => 67,  188 => 66,  184 => 65,  178 => 64,  170 => 63,  159 => 59,  153 => 58,  138 => 50,  130 => 45,  89 => 6,  79 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Harmony Promotion | {{programme.title}}{% endblock %}

{% block body %}
<style>
    @media (max-width: 620px) {
        .accordion {
            font-size: 7px;
        }
        #ddplan 
        {
            font-size: 7px;
            border: 1px solid white;
            border-radius: 5px;
        }
    }
    @media (min-width: 620px) and (max-width: 780px) {
        .accordion {
            font-size: 10px;
        }
        #ddplan 
        {
            font-size: 10px; 
            border: 1px solid white;
            border-radius: 5px;
        }
    }
    @media (min-width: 780px) {
        .accordion {
            font-size: 14px;
        }
        #ddplan 
        {
            font-size: 14px;
            border: 1px solid white;
            border-radius: 5px;
        }
    }

    .example-wrapper { margin: 1em auto; max-width: 800px; width: 95%; font: 18px/1.5 sans-serif; }
    .example-wrapper code { background: #F5F5F5; padding: 2px 6px; }
</style>

<div style=\"background-image: url('/uploads/pages/{{programme.miniature}}'); height: 500px; background-size: cover;\">
    <div class=\"d-flex justify-content-between align-items-end h-100\" style=\"padding: 0px 5%;\">
        <div class=\"d-none d-md-block\" style=\"
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
            {% if programme.isPrestige %}<img src=\"https://harmony-promotion.com/images/pastille.svg\" alt=\"Pastille prestige\" class=\"d-none d-md-block\" width=\"100\" style=\"position: relative; left: 400px; top: 100px;\"/>{% endif %}
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
                <div style=\"padding: 15px 0; background-color: #336336; color: white; border-radius: 5px; border: 2px solid silver;\">
                    <div id=\"heading{{bien.id}}\" class=\"d-flex justify-content-between align-items-center\">
                        <div class=\"d-flex justify-content-around align-items-center w-100\">
                            <span class=\"text-center w-100\">{{bien.title}}</span>
                            <span class=\"text-center w-100\">Jusqu'à {{bien.surface}} m2</span>
                            <span class=\"text-center w-100\">À partir de {{bien.prix}} €</span>
                            <span class=\"text-center w-100\">{{bien.disponible}} disponible{% if bien.disponible > 1 %}s{% endif %}</span>
                            <span id=\"ddplan\" class=\"text-center w-100 border border-light\">Plan 2D</span>
                        </div>
                        <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bien-{{bien.id}}\" aria-expanded=\"true\" aria-controls=\"bien-{{bien.id}}\">
                            <i class=\"fas fa-chevron-down text-light\"></i>
                        </button>
                    </div>
                </div>
                <div id=\"bien-{{bien.id}}\" class=\"collapse\" aria-labelledby=\"heading{{bien.id}}\" data-parent=\"#bien{{bien.id}}\">
                    <div class=\"d-flex justify-content-around\" style=\"padding: 15px 0; background-color: #D39C2F; border-radius: 5px; border: 2px solid silver;\">
                        <span class=\"text-center w-100\">Lot</span>
                        <span class=\"text-center w-100\">Surface (m2)</span>
                        <span class=\"text-center w-100\">Étage</span>
                        <span class=\"text-center w-100\">Orientation</span>
                        <span class=\"text-center w-100\">Extérieur</span>
                        <span class=\"text-center w-100\">Parking</span>
                        <span class=\"text-center w-100\">Actions</span>
                    </div>
                    {% for lot in bien.lots %}
                        <div class=\"d-flex justify-content-around align-items-center bg-light\" style=\"padding: 15px 0; border-radius: 5px; border: 2px solid silver;\">
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
                    <div style=\"margin: 10px 25px; max-width: 240px; height: 350px; border-radius: 25px; box-shadow: 6px 6px 2px 0px rgba(0,0,0,0.16); overflow: hidden;\">
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
