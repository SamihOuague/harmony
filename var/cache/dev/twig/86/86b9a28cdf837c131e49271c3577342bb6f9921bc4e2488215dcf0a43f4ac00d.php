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

/* home/guide.html.twig */
class __TwigTemplate_cd2ac377b2774fad738a181dff549374730179312bcb462593f32f17e22d12f6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/guide.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/guide.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/guide.html.twig", 1);
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

        echo "Harmony Promotion | Guide de l'immobilier";
        
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
        echo "<div class=\"d-flex justify-content-center align-items-end\" style=\"height: 250px; 
            background-image: url('https://harmony-promotion.com/images/guide.png'); 
            background-repeat: no-repeat; 
            background-size: cover;\">
    <div id=\"achat\" class=\"d-flex justify-content-center align-items-center text-light font-weight-bold\" style=\"width: 200px; height: 60px; margin: 0 10px; background-color: #D39C2F; font-size: 21px; font-family: 'Barlow'; border-radius: 10px 10px 0px 0px; cursor: pointer;\">
        <span>Acheter</span>
    </div>
    <div id=\"vente\" class=\"d-flex justify-content-center align-items-center text-light font-weight-bold\" style=\"width: 200px; height: 60px; margin: 0 10px; background-color: rgb(59, 71, 84); font-size: 21px; font-family: 'Barlow'; border-radius: 10px 10px 0px 0px; cursor: pointer;\">
        <span>Investir</span>
    </div>
</div>
<div id=\"acheteur\" class=\"container\" style=\"font-size: 19px;\">
    <h1 class=\"text-center\" style=\"font-family: 'Barlow'; margin: 50px 0; color: #336336;\">Le petit guide de l'acheteur</h1>

    <p class=\"text-muted\">Dans ce guide vous trouverez <strong>toutes les bonnes pratiques et démarches nécessaires pour acheter de votre logement</strong> en toute sérénité.</p>

    <p class=\"text-muted\">Tout d’abord, pourquoi acheter dans le neuf ?</p>

    <p class=\"text-muted\">L’immobilier neuf vous garantit l’acquisition d’un bien conforme aux dernières normes de construction en vigueur, c’est l’assurance d’une qualité de construction et la garantie d’un confort de vie maximale !</p>

    <p class=\"text-muted\">Acheter neuf vous donne également accès à un certain nombre de dispositifs gouvernementaux facilitant l’accession.<br/>
    Pour vous, nous avons simplifié, en 8 grandes étapes, votre processus d’achat :</p>
    <ol>
        <li>Anticiper son budget</li>
        <li>Rechercher un bien immobilier neuf</li>
        <li>Signer le contrat de réservation</li>
        <li>Financer son projet immobilier</li>
        <li>Passer chez le notaire</li>
        <li>Payer son logement</li>
        <li>Visiter son bien</li>
        <li>Prendre ses clés</li>
    </ol>
    <p>Pour tout savoir sur chacune de ces étapes demandez notre guide complet juste ici :</p>
    <div class=\"text-center\">
        <a href=\"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("telecharge");
        echo "\" class=\"btn btn-success\" style=\"margin: 50px 0;\">Télécharger le guide</a>
    </div>
</div>
<div id=\"investisseur\" class=\"container d-none\" style=\"font-size: 19px;\">
    <h1 class=\"text-center\" style=\"font-family: 'Barlow'; margin: 50px 0; color: #336336;\">Le petit guide de l'investisseur</h1>

    <p class=\"text-muted\">Vous cherchez à investir mais ne savez pas quel dispositif sera le plus adapté pour vous ?</p>

    <p class=\"text-muted\">Nous vous comprenons, il n'est pas toujours évident de s'y retrouver parmi les nombreux procédés d'investissement immobilier.<br/>
    Voici pourquoi nous avons concocté un guide de l'investisseur, simple et clair, dont les dispositifs sont décortiqués et expliqués en un seul document :</p>
    <p class=\"text-muted\">PINEL<br/>
    LMNP<br/>
    PARA-HÔTELIER</p>
    <p class=\"text-muted\">L’immobilier neuf vous garantit l’acquisition d’un bien conforme aux dernières normes de construction en vigueur, c’est l’assurance d’une qualité de construction et la garantie d’un confort de vie maximale !</p>

    <p class=\"text-muted\">Saviez-vous qu'investir dans un bien neuf présentes de nombreux avantages ? En effet les frais de notaire sont réduits, vous partez également l'esprit tranquille puisqu'il n'y a aucun travail à prévoir et vous êtes assurés que le logement bénéficiera des dernières normes en vigueur lui assurant une performance énergétique optimale.</p>
    <p class=\"text-muted\">Outre les avantages fiscaux qu'ils représentent, l'investissement immobilier dans le neuf vous permet de bénéficier des appels de fonds, tout comme les acheteurs. Enfin, comme vous le savez surement, \"la pierre\" est une valeur sûre et d'avenir.</p>
    <p>Pour tout savoir sur chacun des dispositifs demandez votre guide complet juste ici :</p>
    <div class=\"text-center\">
        <a href=\"";
        // line 59
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("telecharge");
        echo "\" class=\"btn btn-success\" style=\"margin: 50px 0;\">Télécharger le guide</a>
    </div>
</div>
<div class=\"container\" style=\"padding: 50px;\">
    <h1 class=\"text-center\" style=\"font-family: 'Barlow'; margin-bottom: 50px; \">FAQ</h1>
    <div class=\"alert alert-dark\">
        <div class=\"d-flex justify-content-between flex-no-wrap\">
            <h2 class=\"alert-heading\" style=\"margin: 15px 0;\">Qui est Harmony Promotion ?</h2>
            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bien1\" aria-expanded=\"true\" aria-controls=\"bien1\">
                <i class=\"fas fa-chevron-down\"></i>
            </button>
        </div>
        <div id=\"bien1\" class=\"collapse\" aria-labelledby=\"heading\" data-parent=\"#bien1\">
            <hr/>
            <p class=\"text-justify\" style=\"font-family: 'Montserrat';\">
                Nihil est enim virtute amabilius, nihil quod magis adliciat ad diligendum, quippe cum propter virtutem et probitatem etiam eos, quos numquam vidimus, 
                quodam modo diligamus. Quis est qui C. Fabrici, M'. Curi non cum caritate aliqua benevola memoriam usurpet, quos numquam viderit? quis autem est, 
                qui Tarquinium Superbum, qui Sp. Cassium, Sp. Maelium non oderit? Cum duobus ducibus de imperio in Italia est decertatum, Pyrrho et Hannibale; 
                ab altero propter probitatem eius non nimis alienos animos habemus, alterum propter crudelitatem semper haec civitas oderit.
            </p>
        </div>
    </div>
    <div class=\"alert alert-dark\">
        <div class=\"d-flex justify-content-between flex-no-wrap\">
            <h2 class=\"alert-heading\" style=\"margin: 15px 0;\">C’est quoi un logement neuf ?</h2>
            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bien2\" aria-expanded=\"true\" aria-controls=\"bien2\">
                <i class=\"fas fa-chevron-down\"></i>
            </button>
        </div>
        <div id=\"bien2\" class=\"collapse\" aria-labelledby=\"heading\" data-parent=\"#bien2\">
            <hr/>
            <p class=\"text-justify\" style=\"font-family: 'Montserrat';\">
                Nihil est enim virtute amabilius, nihil quod magis adliciat ad diligendum, quippe cum propter virtutem et probitatem etiam eos, quos numquam vidimus, 
                quodam modo diligamus. Quis est qui C. Fabrici, M'. Curi non cum caritate aliqua benevola memoriam usurpet, quos numquam viderit? quis autem est, 
                qui Tarquinium Superbum, qui Sp. Cassium, Sp. Maelium non oderit? Cum duobus ducibus de imperio in Italia est decertatum, Pyrrho et Hannibale; 
                ab altero propter probitatem eius non nimis alienos animos habemus, alterum propter crudelitatem semper haec civitas oderit.
            </p>
        </div>
    </div>
    <div class=\"alert alert-dark\">
        <div class=\"d-flex justify-content-between flex-no-wrap\">
            <h2 class=\"alert-heading\" style=\"margin: 15px 0;\">Comment se passe l’achat d’un appartement sur plan ?</h2>
            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bien3\" aria-expanded=\"true\" aria-controls=\"bien3\">
                <i class=\"fas fa-chevron-down\"></i>
            </button>
        </div>
        <div id=\"bien3\" class=\"collapse\" aria-labelledby=\"heading\" data-parent=\"#bien3\">
            <hr/>
            <p class=\"text-justify\" style=\"font-family: 'Montserrat';\">
                Nihil est enim virtute amabilius, nihil quod magis adliciat ad diligendum, quippe cum propter virtutem et probitatem etiam eos, quos numquam vidimus, 
                quodam modo diligamus. Quis est qui C. Fabrici, M'. Curi non cum caritate aliqua benevola memoriam usurpet, quos numquam viderit? quis autem est, 
                qui Tarquinium Superbum, qui Sp. Cassium, Sp. Maelium non oderit? Cum duobus ducibus de imperio in Italia est decertatum, Pyrrho et Hannibale; 
                ab altero propter probitatem eius non nimis alienos animos habemus, alterum propter crudelitatem semper haec civitas oderit.
            </p>
        </div>
    </div>
    <div class=\"alert alert-dark\">
        <div class=\"d-flex justify-content-between flex-no-wrap\">
            <h2 class=\"alert-heading\" style=\"margin: 15px 0;\">Pourquoi acheter chez Harmony Promotion ?</h2>
            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bien4\" aria-expanded=\"true\" aria-controls=\"bien4\">
                <i class=\"fas fa-chevron-down\"></i>
            </button>
        </div>
        <div id=\"bien4\" class=\"collapse\" aria-labelledby=\"heading\" data-parent=\"#bien4\">
            <hr/>
            <p class=\"text-justify\" style=\"font-family: 'Montserrat';\">
                Nihil est enim virtute amabilius, nihil quod magis adliciat ad diligendum, quippe cum propter virtutem et probitatem etiam eos, quos numquam vidimus, 
                quodam modo diligamus. Quis est qui C. Fabrici, M'. Curi non cum caritate aliqua benevola memoriam usurpet, quos numquam viderit? quis autem est, 
                qui Tarquinium Superbum, qui Sp. Cassium, Sp. Maelium non oderit? Cum duobus ducibus de imperio in Italia est decertatum, Pyrrho et Hannibale; 
                ab altero propter probitatem eius non nimis alienos animos habemus, alterum propter crudelitatem semper haec civitas oderit.
            </p>
        </div>
    </div>
    <div class=\"alert alert-dark\">
        <div class=\"d-flex justify-content-between flex-no-wrap\">
            <h2 class=\"alert-heading\" style=\"margin: 15px 0;\">Pourquoi investir dans l’immobilier neuf en 2021 ?</h2>
            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bien5\" aria-expanded=\"true\" aria-controls=\"bien5\">
                <i class=\"fas fa-chevron-down\"></i>
            </button>
        </div>
        <div id=\"bien5\" class=\"collapse\" aria-labelledby=\"heading\" data-parent=\"#bien5\">
            <hr/>
            <p class=\"text-justify\" style=\"font-family: 'Montserrat';\">
                Nihil est enim virtute amabilius, nihil quod magis adliciat ad diligendum, quippe cum propter virtutem et probitatem etiam eos, quos numquam vidimus, 
                quodam modo diligamus. Quis est qui C. Fabrici, M'. Curi non cum caritate aliqua benevola memoriam usurpet, quos numquam viderit? quis autem est, 
                qui Tarquinium Superbum, qui Sp. Cassium, Sp. Maelium non oderit? Cum duobus ducibus de imperio in Italia est decertatum, Pyrrho et Hannibale; 
                ab altero propter probitatem eius non nimis alienos animos habemus, alterum propter crudelitatem semper haec civitas oderit.
            </p>
        </div>
    </div>

</div>
<script>
    let achat = true;
    let vente = false;
    \$(\"#achat\").click((elt) => {
        if (!achat) {
            \$(elt.currentTarget).css(\"background-color\", \"rgb(211, 156, 47)\");
            \$(\"#vente\").css(\"background-color\", \"rgb(59, 71, 84)\");
            \$(\"#acheteur\").removeClass(\"d-none\");
            \$(\"#investisseur\").addClass(\"d-none\");
            vente = false;
            achat = true;
        }
    });
    \$(\"#vente\").click((elt) => {
        if (!vente) {
            \$(elt.currentTarget).css(\"background-color\", \"rgb(211, 156, 47)\");
            \$(\"#achat\").css(\"background-color\", \"rgb(59, 71, 84)\");
            \$(\"#investisseur\").removeClass(\"d-none\");
            \$(\"#acheteur\").addClass(\"d-none\");
            vente = true;
            achat = false;
        }
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/guide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 59,  124 => 40,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Harmony Promotion | Guide de l'immobilier{% endblock %}

{% block body %}
<div class=\"d-flex justify-content-center align-items-end\" style=\"height: 250px; 
            background-image: url('https://harmony-promotion.com/images/guide.png'); 
            background-repeat: no-repeat; 
            background-size: cover;\">
    <div id=\"achat\" class=\"d-flex justify-content-center align-items-center text-light font-weight-bold\" style=\"width: 200px; height: 60px; margin: 0 10px; background-color: #D39C2F; font-size: 21px; font-family: 'Barlow'; border-radius: 10px 10px 0px 0px; cursor: pointer;\">
        <span>Acheter</span>
    </div>
    <div id=\"vente\" class=\"d-flex justify-content-center align-items-center text-light font-weight-bold\" style=\"width: 200px; height: 60px; margin: 0 10px; background-color: rgb(59, 71, 84); font-size: 21px; font-family: 'Barlow'; border-radius: 10px 10px 0px 0px; cursor: pointer;\">
        <span>Investir</span>
    </div>
</div>
<div id=\"acheteur\" class=\"container\" style=\"font-size: 19px;\">
    <h1 class=\"text-center\" style=\"font-family: 'Barlow'; margin: 50px 0; color: #336336;\">Le petit guide de l'acheteur</h1>

    <p class=\"text-muted\">Dans ce guide vous trouverez <strong>toutes les bonnes pratiques et démarches nécessaires pour acheter de votre logement</strong> en toute sérénité.</p>

    <p class=\"text-muted\">Tout d’abord, pourquoi acheter dans le neuf ?</p>

    <p class=\"text-muted\">L’immobilier neuf vous garantit l’acquisition d’un bien conforme aux dernières normes de construction en vigueur, c’est l’assurance d’une qualité de construction et la garantie d’un confort de vie maximale !</p>

    <p class=\"text-muted\">Acheter neuf vous donne également accès à un certain nombre de dispositifs gouvernementaux facilitant l’accession.<br/>
    Pour vous, nous avons simplifié, en 8 grandes étapes, votre processus d’achat :</p>
    <ol>
        <li>Anticiper son budget</li>
        <li>Rechercher un bien immobilier neuf</li>
        <li>Signer le contrat de réservation</li>
        <li>Financer son projet immobilier</li>
        <li>Passer chez le notaire</li>
        <li>Payer son logement</li>
        <li>Visiter son bien</li>
        <li>Prendre ses clés</li>
    </ol>
    <p>Pour tout savoir sur chacune de ces étapes demandez notre guide complet juste ici :</p>
    <div class=\"text-center\">
        <a href=\"{{ path('telecharge') }}\" class=\"btn btn-success\" style=\"margin: 50px 0;\">Télécharger le guide</a>
    </div>
</div>
<div id=\"investisseur\" class=\"container d-none\" style=\"font-size: 19px;\">
    <h1 class=\"text-center\" style=\"font-family: 'Barlow'; margin: 50px 0; color: #336336;\">Le petit guide de l'investisseur</h1>

    <p class=\"text-muted\">Vous cherchez à investir mais ne savez pas quel dispositif sera le plus adapté pour vous ?</p>

    <p class=\"text-muted\">Nous vous comprenons, il n'est pas toujours évident de s'y retrouver parmi les nombreux procédés d'investissement immobilier.<br/>
    Voici pourquoi nous avons concocté un guide de l'investisseur, simple et clair, dont les dispositifs sont décortiqués et expliqués en un seul document :</p>
    <p class=\"text-muted\">PINEL<br/>
    LMNP<br/>
    PARA-HÔTELIER</p>
    <p class=\"text-muted\">L’immobilier neuf vous garantit l’acquisition d’un bien conforme aux dernières normes de construction en vigueur, c’est l’assurance d’une qualité de construction et la garantie d’un confort de vie maximale !</p>

    <p class=\"text-muted\">Saviez-vous qu'investir dans un bien neuf présentes de nombreux avantages ? En effet les frais de notaire sont réduits, vous partez également l'esprit tranquille puisqu'il n'y a aucun travail à prévoir et vous êtes assurés que le logement bénéficiera des dernières normes en vigueur lui assurant une performance énergétique optimale.</p>
    <p class=\"text-muted\">Outre les avantages fiscaux qu'ils représentent, l'investissement immobilier dans le neuf vous permet de bénéficier des appels de fonds, tout comme les acheteurs. Enfin, comme vous le savez surement, \"la pierre\" est une valeur sûre et d'avenir.</p>
    <p>Pour tout savoir sur chacun des dispositifs demandez votre guide complet juste ici :</p>
    <div class=\"text-center\">
        <a href=\"{{ path('telecharge') }}\" class=\"btn btn-success\" style=\"margin: 50px 0;\">Télécharger le guide</a>
    </div>
</div>
<div class=\"container\" style=\"padding: 50px;\">
    <h1 class=\"text-center\" style=\"font-family: 'Barlow'; margin-bottom: 50px; \">FAQ</h1>
    <div class=\"alert alert-dark\">
        <div class=\"d-flex justify-content-between flex-no-wrap\">
            <h2 class=\"alert-heading\" style=\"margin: 15px 0;\">Qui est Harmony Promotion ?</h2>
            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bien1\" aria-expanded=\"true\" aria-controls=\"bien1\">
                <i class=\"fas fa-chevron-down\"></i>
            </button>
        </div>
        <div id=\"bien1\" class=\"collapse\" aria-labelledby=\"heading\" data-parent=\"#bien1\">
            <hr/>
            <p class=\"text-justify\" style=\"font-family: 'Montserrat';\">
                Nihil est enim virtute amabilius, nihil quod magis adliciat ad diligendum, quippe cum propter virtutem et probitatem etiam eos, quos numquam vidimus, 
                quodam modo diligamus. Quis est qui C. Fabrici, M'. Curi non cum caritate aliqua benevola memoriam usurpet, quos numquam viderit? quis autem est, 
                qui Tarquinium Superbum, qui Sp. Cassium, Sp. Maelium non oderit? Cum duobus ducibus de imperio in Italia est decertatum, Pyrrho et Hannibale; 
                ab altero propter probitatem eius non nimis alienos animos habemus, alterum propter crudelitatem semper haec civitas oderit.
            </p>
        </div>
    </div>
    <div class=\"alert alert-dark\">
        <div class=\"d-flex justify-content-between flex-no-wrap\">
            <h2 class=\"alert-heading\" style=\"margin: 15px 0;\">C’est quoi un logement neuf ?</h2>
            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bien2\" aria-expanded=\"true\" aria-controls=\"bien2\">
                <i class=\"fas fa-chevron-down\"></i>
            </button>
        </div>
        <div id=\"bien2\" class=\"collapse\" aria-labelledby=\"heading\" data-parent=\"#bien2\">
            <hr/>
            <p class=\"text-justify\" style=\"font-family: 'Montserrat';\">
                Nihil est enim virtute amabilius, nihil quod magis adliciat ad diligendum, quippe cum propter virtutem et probitatem etiam eos, quos numquam vidimus, 
                quodam modo diligamus. Quis est qui C. Fabrici, M'. Curi non cum caritate aliqua benevola memoriam usurpet, quos numquam viderit? quis autem est, 
                qui Tarquinium Superbum, qui Sp. Cassium, Sp. Maelium non oderit? Cum duobus ducibus de imperio in Italia est decertatum, Pyrrho et Hannibale; 
                ab altero propter probitatem eius non nimis alienos animos habemus, alterum propter crudelitatem semper haec civitas oderit.
            </p>
        </div>
    </div>
    <div class=\"alert alert-dark\">
        <div class=\"d-flex justify-content-between flex-no-wrap\">
            <h2 class=\"alert-heading\" style=\"margin: 15px 0;\">Comment se passe l’achat d’un appartement sur plan ?</h2>
            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bien3\" aria-expanded=\"true\" aria-controls=\"bien3\">
                <i class=\"fas fa-chevron-down\"></i>
            </button>
        </div>
        <div id=\"bien3\" class=\"collapse\" aria-labelledby=\"heading\" data-parent=\"#bien3\">
            <hr/>
            <p class=\"text-justify\" style=\"font-family: 'Montserrat';\">
                Nihil est enim virtute amabilius, nihil quod magis adliciat ad diligendum, quippe cum propter virtutem et probitatem etiam eos, quos numquam vidimus, 
                quodam modo diligamus. Quis est qui C. Fabrici, M'. Curi non cum caritate aliqua benevola memoriam usurpet, quos numquam viderit? quis autem est, 
                qui Tarquinium Superbum, qui Sp. Cassium, Sp. Maelium non oderit? Cum duobus ducibus de imperio in Italia est decertatum, Pyrrho et Hannibale; 
                ab altero propter probitatem eius non nimis alienos animos habemus, alterum propter crudelitatem semper haec civitas oderit.
            </p>
        </div>
    </div>
    <div class=\"alert alert-dark\">
        <div class=\"d-flex justify-content-between flex-no-wrap\">
            <h2 class=\"alert-heading\" style=\"margin: 15px 0;\">Pourquoi acheter chez Harmony Promotion ?</h2>
            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bien4\" aria-expanded=\"true\" aria-controls=\"bien4\">
                <i class=\"fas fa-chevron-down\"></i>
            </button>
        </div>
        <div id=\"bien4\" class=\"collapse\" aria-labelledby=\"heading\" data-parent=\"#bien4\">
            <hr/>
            <p class=\"text-justify\" style=\"font-family: 'Montserrat';\">
                Nihil est enim virtute amabilius, nihil quod magis adliciat ad diligendum, quippe cum propter virtutem et probitatem etiam eos, quos numquam vidimus, 
                quodam modo diligamus. Quis est qui C. Fabrici, M'. Curi non cum caritate aliqua benevola memoriam usurpet, quos numquam viderit? quis autem est, 
                qui Tarquinium Superbum, qui Sp. Cassium, Sp. Maelium non oderit? Cum duobus ducibus de imperio in Italia est decertatum, Pyrrho et Hannibale; 
                ab altero propter probitatem eius non nimis alienos animos habemus, alterum propter crudelitatem semper haec civitas oderit.
            </p>
        </div>
    </div>
    <div class=\"alert alert-dark\">
        <div class=\"d-flex justify-content-between flex-no-wrap\">
            <h2 class=\"alert-heading\" style=\"margin: 15px 0;\">Pourquoi investir dans l’immobilier neuf en 2021 ?</h2>
            <button class=\"btn btn-link\" type=\"button\" data-toggle=\"collapse\" data-target=\"#bien5\" aria-expanded=\"true\" aria-controls=\"bien5\">
                <i class=\"fas fa-chevron-down\"></i>
            </button>
        </div>
        <div id=\"bien5\" class=\"collapse\" aria-labelledby=\"heading\" data-parent=\"#bien5\">
            <hr/>
            <p class=\"text-justify\" style=\"font-family: 'Montserrat';\">
                Nihil est enim virtute amabilius, nihil quod magis adliciat ad diligendum, quippe cum propter virtutem et probitatem etiam eos, quos numquam vidimus, 
                quodam modo diligamus. Quis est qui C. Fabrici, M'. Curi non cum caritate aliqua benevola memoriam usurpet, quos numquam viderit? quis autem est, 
                qui Tarquinium Superbum, qui Sp. Cassium, Sp. Maelium non oderit? Cum duobus ducibus de imperio in Italia est decertatum, Pyrrho et Hannibale; 
                ab altero propter probitatem eius non nimis alienos animos habemus, alterum propter crudelitatem semper haec civitas oderit.
            </p>
        </div>
    </div>

</div>
<script>
    let achat = true;
    let vente = false;
    \$(\"#achat\").click((elt) => {
        if (!achat) {
            \$(elt.currentTarget).css(\"background-color\", \"rgb(211, 156, 47)\");
            \$(\"#vente\").css(\"background-color\", \"rgb(59, 71, 84)\");
            \$(\"#acheteur\").removeClass(\"d-none\");
            \$(\"#investisseur\").addClass(\"d-none\");
            vente = false;
            achat = true;
        }
    });
    \$(\"#vente\").click((elt) => {
        if (!vente) {
            \$(elt.currentTarget).css(\"background-color\", \"rgb(211, 156, 47)\");
            \$(\"#achat\").css(\"background-color\", \"rgb(59, 71, 84)\");
            \$(\"#investisseur\").removeClass(\"d-none\");
            \$(\"#acheteur\").addClass(\"d-none\");
            vente = true;
            achat = false;
        }
    });
</script>
{% endblock %}", "home/guide.html.twig", "/home/souaguen/Bureau/harmonypresent/templates/home/guide.html.twig");
    }
}
