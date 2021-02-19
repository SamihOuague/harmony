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

/* news/index.html.twig */
class __TwigTemplate_3cd8623f0eb9bc2840773bc4a14b97a99bd5f1c13bde004005078759497b3f9b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "news/index.html.twig", 1);
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

        echo "Harmony Promotion | Actus & News";
        
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
        echo "    <div style=\"background-image: url(./images/newsbg.png); background-size: 100%; overflow: hidden; background-repeat: no-repeat;\">
        <div class=\"d-flex justify-content-center align-items-center\" style=\"box-shadow: 5px 5px 5px #8080802e; border-radius: 20px; background-color: white; min-white: 300px; max-width: 458px; margin: 10% 0px 0px 5%; padding: 20px; font-size: 14px;\">
            <div style=\"width: 380px;\">
                <h1 style=\"font-family: 'Barlow'; font-size: 25px; font-weight: 800;\">HARMONY NEWS</h1>
                <br/>
                <p style=\"font-family: 'Montserrat'; font-weight: 600;\">Que vous soyez acquéreur, partenaire privé ou institutionnel, journaliste, futur collaborateur ou encore que vous soyez simplement intéressé par nos services, notre équipe vous propose de découvrir notre actualité.</p>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) || array_key_exists("articles", $context) ? $context["articles"] : (function () { throw new RuntimeError('Variable "articles" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 17
            echo "                    <div class=\"col-lg-4 d-flex justify-content-center\" style=\"margin-top: 90px;\">
                        <div style=\"width: 300px; height: 400px;\">
                            <img src=\"./news/";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "miniature", [], "any", false, false, false, 19), "html", null, true);
            echo "\" alt=\"Article 1\" style=\"width: 100%;\"/>
                            <div style=\"box-shadow: 5px 5px 5px #8080802e;
                                        border-radius: 0px 20px 20px 20px; 
                                        background-color: white; 
                                        height: 250px; 
                                        position: relative; 
                                        top: -100px; 
                                        left: 50px;
                                        font-family: 'Montserrat';
                                        padding: 20px;\">
                                <h3 style=\"font-weight: 600; font-size: 18px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "title", [], "any", false, false, false, 29), "html", null, true);
            echo "</h3>
                                <br/>
                                <p class=\"text-justify\" style=\"hyphens: auto;\">";
            // line 31
            echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "snippet", [], "any", false, false, false, 31), 0, 80), "html", null, true);
            echo "... <a style=\"color: #8FB91E; font-weight: 800; margin-left: 20px;\" href=\"/article/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo "\">Lire plus</a></p>
                                <p style=\"margin-top: 25px;\">
                                    <strong style=\"font-weight: 800; \">L'equipe d'Harmony Promotion</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            </div>
        </div>
        <div class=\"text-center\" style=\"padding-top: 30px;background-color: white; margin-top: 75px;\">
            <h2 style=\"margin: 50px; font-size: 30px;font-family: 'Barlow'; color: #336336;\">ILS PARLENT DE NOUS</h2>
            <img src=\"./images/talkabout.png\" style=\"width: 70%; margin-bottom: 75px;\" alt=\"Il parle de nous\"/>
        <div>
        <div style=\"background-color: #F4F4F4; padding: 100px 0;\">
            <h2 style=\"font-size: 30px; font-family: 'Barlow'; color: #336336;\">ELEMENTS POUR LA PRESSE</h2>
            <div class=\"d-flex justify-content-center flex-wrap\">
                <div>
                    <div class=\"d-flex align-items-center\" style=\"padding: 10px; font-size: 17px; width: 300px; background-color: white; margin: 15px; box-shadow: 5px 5px 5px #8080802e; border-radius: 10px; height: 70px;\">
                        <img width=\"50\" src=\"images/iconpress1.png\" alt=\"icon press 1\"/>    
                        <span class=\"text-left\" style=\"font-weight: 800; color: #336336; font-family: 'Montserrat'\">
                        PLAQUETTE INSTITUTIONELLE</span>
                    </div>
                    <a href=\"#telecharge\" style=\"font-size: 18px; font-family: 'Barlow'; color: #8DC640; font-weight: 500;\">Telecharger</a>
                    <br/><br/>
                </div>
                <div>
                    <div class=\"d-flex align-items-center\" style=\"padding: 10px; font-size: 17px; width: 300px; margin: 15px; background-color: white; box-shadow: 5px 5px 5px #8080802e; border-radius: 10px; height: 70px;\">
                        <img style=\"margin-right: 10px;\" width=\"28\" src=\"images/iconpress2.png\" alt=\"icon press 2\"/>
                        <span class=\"text-left\" style=\"font-weight: 800; color: #336336; font-family: 'Montserrat'\">
                        VISUELS PROGRAMMES</span>
                    </div>
                    <a href=\"#telecharge\" style=\"font-size: 18px; font-family: 'Barlow'; color: #8DC640; font-weight: 500;\">Telecharger</a>
                    <br/><br/>
                <div>
            </div>
        </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "news/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 39,  126 => 31,  121 => 29,  108 => 19,  104 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Harmony Promotion | Actus & News{% endblock %}

{% block body %}
    <div style=\"background-image: url(./images/newsbg.png); background-size: 100%; overflow: hidden; background-repeat: no-repeat;\">
        <div class=\"d-flex justify-content-center align-items-center\" style=\"box-shadow: 5px 5px 5px #8080802e; border-radius: 20px; background-color: white; min-white: 300px; max-width: 458px; margin: 10% 0px 0px 5%; padding: 20px; font-size: 14px;\">
            <div style=\"width: 380px;\">
                <h1 style=\"font-family: 'Barlow'; font-size: 25px; font-weight: 800;\">HARMONY NEWS</h1>
                <br/>
                <p style=\"font-family: 'Montserrat'; font-weight: 600;\">Que vous soyez acquéreur, partenaire privé ou institutionnel, journaliste, futur collaborateur ou encore que vous soyez simplement intéressé par nos services, notre équipe vous propose de découvrir notre actualité.</p>
            </div>
        </div>
        <div class=\"container\">
            <div class=\"row\">
                {% for article in articles %}
                    <div class=\"col-lg-4 d-flex justify-content-center\" style=\"margin-top: 90px;\">
                        <div style=\"width: 300px; height: 400px;\">
                            <img src=\"./news/{{ article.miniature }}\" alt=\"Article 1\" style=\"width: 100%;\"/>
                            <div style=\"box-shadow: 5px 5px 5px #8080802e;
                                        border-radius: 0px 20px 20px 20px; 
                                        background-color: white; 
                                        height: 250px; 
                                        position: relative; 
                                        top: -100px; 
                                        left: 50px;
                                        font-family: 'Montserrat';
                                        padding: 20px;\">
                                <h3 style=\"font-weight: 600; font-size: 18px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;\">{{ article.title }}</h3>
                                <br/>
                                <p class=\"text-justify\" style=\"hyphens: auto;\">{{ article.snippet|slice(0, 80) }}... <a style=\"color: #8FB91E; font-weight: 800; margin-left: 20px;\" href=\"/article/{{article.id}}\">Lire plus</a></p>
                                <p style=\"margin-top: 25px;\">
                                    <strong style=\"font-weight: 800; \">L'equipe d'Harmony Promotion</strong>
                                </p>
                            </div>
                        </div>
                    </div>
                {% endfor %}
            </div>
        </div>
        <div class=\"text-center\" style=\"padding-top: 30px;background-color: white; margin-top: 75px;\">
            <h2 style=\"margin: 50px; font-size: 30px;font-family: 'Barlow'; color: #336336;\">ILS PARLENT DE NOUS</h2>
            <img src=\"./images/talkabout.png\" style=\"width: 70%; margin-bottom: 75px;\" alt=\"Il parle de nous\"/>
        <div>
        <div style=\"background-color: #F4F4F4; padding: 100px 0;\">
            <h2 style=\"font-size: 30px; font-family: 'Barlow'; color: #336336;\">ELEMENTS POUR LA PRESSE</h2>
            <div class=\"d-flex justify-content-center flex-wrap\">
                <div>
                    <div class=\"d-flex align-items-center\" style=\"padding: 10px; font-size: 17px; width: 300px; background-color: white; margin: 15px; box-shadow: 5px 5px 5px #8080802e; border-radius: 10px; height: 70px;\">
                        <img width=\"50\" src=\"images/iconpress1.png\" alt=\"icon press 1\"/>    
                        <span class=\"text-left\" style=\"font-weight: 800; color: #336336; font-family: 'Montserrat'\">
                        PLAQUETTE INSTITUTIONELLE</span>
                    </div>
                    <a href=\"#telecharge\" style=\"font-size: 18px; font-family: 'Barlow'; color: #8DC640; font-weight: 500;\">Telecharger</a>
                    <br/><br/>
                </div>
                <div>
                    <div class=\"d-flex align-items-center\" style=\"padding: 10px; font-size: 17px; width: 300px; margin: 15px; background-color: white; box-shadow: 5px 5px 5px #8080802e; border-radius: 10px; height: 70px;\">
                        <img style=\"margin-right: 10px;\" width=\"28\" src=\"images/iconpress2.png\" alt=\"icon press 2\"/>
                        <span class=\"text-left\" style=\"font-weight: 800; color: #336336; font-family: 'Montserrat'\">
                        VISUELS PROGRAMMES</span>
                    </div>
                    <a href=\"#telecharge\" style=\"font-size: 18px; font-family: 'Barlow'; color: #8DC640; font-weight: 500;\">Telecharger</a>
                    <br/><br/>
                <div>
            </div>
        </div>
        </div>
    </div>
{% endblock %}", "news/index.html.twig", "/home/souaguen/Bureau/harmonypresent/templates/news/index.html.twig");
    }
}
