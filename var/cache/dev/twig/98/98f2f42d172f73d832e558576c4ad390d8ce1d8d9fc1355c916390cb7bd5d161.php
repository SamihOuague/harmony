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

/* home/faq.html.twig */
class __TwigTemplate_fa6a55c285422a022dcbba86271327063060cf19f86cdf54f59375c6b66607ec extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/faq.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/faq.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/faq.html.twig", 1);
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

        echo "Harmony Promotion | FAQ";
        
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
        echo "<div class=\"container\" style=\"padding: 50px;\">
    <h1 class=\"text-center\" style=\"font-family: 'Barlow'; margin-bottom: 50px; \">FOIRES AUX QUESTIONS</h1>
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
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Harmony Promotion | FAQ{% endblock %}

{% block body %}
<div class=\"container\" style=\"padding: 50px;\">
    <h1 class=\"text-center\" style=\"font-family: 'Barlow'; margin-bottom: 50px; \">FOIRES AUX QUESTIONS</h1>
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
{% endblock %}", "home/faq.html.twig", "/var/www/html/harmony/templates/home/faq.html.twig");
    }
}
