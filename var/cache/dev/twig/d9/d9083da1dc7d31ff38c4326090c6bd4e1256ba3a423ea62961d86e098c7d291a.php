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

/* home/index.html.twig */
class __TwigTemplate_6d76ebb590e4612420c61b9e1aaa55217ce6dd0fc755f833f890910ca1421473 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "<style>
    @media (min-width: 1250px) {
        .encart {
            width: 400px;
            min-height: 150px;
            top: 40%;
            left: 10%;
        }
    }

    @media (min-width: 720px) and (max-width: 1250px) {
        .encart {
            width: 400px;
            min-height: 150px;
            top: 40%;
            left: 10%;
        }
    }

    @media (max-width: 720px) {
        .encart {
            width: 200px;
            min-height: 50px;
            top: 20%;
            left: 10%;
        }

        .encart h2 {
            font-size: 16px;
        }

        .encart p {
            font-size: 12px;
        }
    }

    .encart {
        background-color: rgba(255,255,255,0.7);
        border-radius: 0 50px 0 50px;
        position: absolute;
        padding-bottom: 15px;
    }
</style>
    <div id=\"carouselExampleControls\" class=\"carousel slide\" style=\"padding: 0;\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img class=\"d-block w-100\" src=\"https://harmony-promotion.com/admin/uploads/AmplitudeSlider.png\" alt=\"First slide\">
                <div class=\"encart\">
                    <div style=\"font-family: 'Montserrat'; margin: 5%;\">
                        <h2 style=\"font-family: 'Barlow'; color: #336336; font-weight: 600;\">Amplitude</h2>
                        <p>Programme immobilier à Alfortville</p>
                    </div>
                    <button style=\"position: absolute; bottom: -10%; left: 10%;\" class=\"btn btn-success\">
                        En savoir plus
                    </button>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"d-block w-100\" src=\"https://harmony-promotion.com/admin/uploads/TerrasseSlide.png\" alt=\"Second slide\">
                <div class=\"encart\">
                    <div style=\"font-family: 'Montserrat'; margin: 5%;\">
                        <h2 style=\"font-family: 'Barlow'; color: #336336; font-weight: 600;\">Les Terrasses d'Osenat</h2>
                        <p>Programme immobilier au Plessis-Trévise</p>
                    </div>
                    <a href=\"/detail/1\" style=\"position: absolute; bottom: -10%; left: 10%;\" class=\"btn btn-success\">
                        En savoir plus
                    </a>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev text-success\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next text-success\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    <div class=\"d-flex justify-content-center align-items-center\" style=\"height: 80px; background-color: #172F26;\">
            <select class=\"exampleFormControlSelect1\" name=\"lieu\" style=\"height: 45px;\">
                <option disabled selected>Département</option>
                <option value=\"75\">75</option>
                <option value=\"92\">92</option>
                <option value=\"94\">94</option>
                <option value=\"971\">971</option>
            </select>
            <select class=\"exampleFormControlSelect1\" name=\"type\" style=\"height: 45px; margin-left: 2%;\">
                <option disabled selected>Type de bien</option>
                <option value=\"studio\">Studio</option>
                <option value=\"t2\">T2</option>
                <option value=\"t3\">T3</option>
                <option value=\"t4\">T4</option>
                <option value=\"duplex\">T4 Duplex</option>
            </select>
            <button style=\"height: 45px; margin-left: 2%; width: 100%; font-size: 14px; max-width: 140px;\" class=\"btn btn-success\">
                RECHERCHER
            </button>
    </div>
    <div style=\"padding: 50px;\">
        <h2 style=\"font-family: 'Barlow'; font-weight: 600;  color: rgb(0, 48, 60);\" class=\"text-center\">NOS PROGRAMMES</h2>
        <h4 style=\"font-family: 'Montserrat'; margin-bottom: 20px;\" class=\"text-center\">Trouvez votre logement idéal parmi les ";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["nbbiens"]) || array_key_exists("nbbiens", $context) ? $context["nbbiens"] : (function () { throw new RuntimeError('Variable "nbbiens" does not exist.', 107, $this->source); })()), "html", null, true);
        echo " biens disponibles</h4>
        ";
        // line 108
        if ((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 108, $this->source); })())) {
            // line 109
            echo "            <div class=\"d-flex\" style=\"overflow-x: scroll;\">
                ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prog"]) {
                // line 111
                echo "                    <a href=\"/detail/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "id", [], "any", false, false, false, 111), "html", null, true);
                echo "\" style=\"text-decoration: none; margin: 50px 0;\">
                        <div class=\"\" style=\"margin: 0px 15px; min-width: 240px; max-width: 260px; height: 350px; border-radius: 25px; box-shadow: 6px 6px 2px 0px rgba(0,0,0,0.16); overflow: hidden;\">
                            <div class=\"d-flex justify-content-end align-items-start\" style=\"min-height: 150px; background-image: url('/uploads/pages/";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "miniature", [], "any", false, false, false, 113), "html", null, true);
                echo "'); background-size: cover; width: 100%;\">
                                ";
                // line 114
                if (twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 114)) {
                    echo "<img src=\"https://harmony-promotion.com/images/pastille.svg\" alt=\"Pastille prestige\" width=\"75\" style=\"margin: 5px;\"/>";
                }
                // line 115
                echo "                            </div>
                            <div class=\"h-100\" ";
                // line 116
                if (twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 116)) {
                    echo "style=\"background-color: rgb(0, 48, 60);\"";
                }
                echo ">
                                <div class=\"d-flex justify-content-end\" style=\"padding-right: 10px;\">
                                    <div class=\"text-center d-inline-block ";
                // line 118
                if (twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 118)) {
                    echo "text-dark bg-light";
                } else {
                    echo "text-light";
                }
                echo "\" style=\"margin-top: -10px; background-color: ";
                if ( !twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 118)) {
                    echo "rgb(144, 188, 85)";
                }
                echo "; padding: 5px 12px;\">
                                        ";
                // line 119
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "tag", [], "any", false, false, false, 119), "html", null, true);
                echo "
                                    </div>
                                </div>
                                <div style=\"padding: 20px;\">
                                    <h2 style=\"font-family: 'Barlow'; font-size: 18px; color: ";
                // line 123
                if ( !twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 123)) {
                    echo "#336336";
                } else {
                    echo "white";
                }
                echo "; font-weight: 700;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "title", [], "any", false, false, false, 123), "html", null, true);
                echo "</h2>
                                    <h3 style=\"font-family: 'Montserrat'; font-size: 18px; color: ";
                // line 124
                if ( !twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 124)) {
                    echo "#d39c2f";
                } else {
                    echo "white";
                }
                echo ";\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "ville", [], "any", false, false, false, 124), "html", null, true);
                echo "</h3>
                                    <div style=\"border: 2px solid ";
                // line 125
                if (twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 125)) {
                    echo " #B1A06B ";
                } else {
                    echo " #f8f9fa ";
                }
                echo "; width: 50px; margin: 5px 0;\"></div>
                                    <p class=\"text-muted text-justify\" style=\"font-size: 13px; word-wrap: break-word; hyphens: auto;\">";
                // line 126
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "text", [], "any", false, false, false, 126), 0, 80), "html", null, true);
                echo "...</p>
                                </div>
                            </div>
                        </div>
                    </a>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prog'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 132
            echo "            </div>
        ";
        }
        // line 134
        echo "        <div class=\"text-center\" style=\"margin-top: 50px;\">
            <a href=\"";
        // line 135
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("programme");
        echo "\" class=\"text-center btn btn-success\" style=\"padding: 20px;\">TOUS NOS PROGRAMMES</a>
        </div>
    </div>
    <div class=\"d-flex justify-content-center\" style=\"border-top: 2px solid #d39c2f; padding: 25px 0;\">
        <video id=\"myVideo\" autoplay=\"\" frameborder=\"0\" controls=\"\" allowfullscreen=\"\" width=\"70%\" height=\"100%\">
            <source src=\"./images/video.avi\" type=\"video/avi\">
            <source src=\"./images/video.mp4\" type=\"video/mp4\">
            Votre navigateur ne supporte pas la vidéo
        </video>
    </div>
    <div style=\"border-top: 2px solid #d39c2f; border-bottom: 2px solid #d39c2f; padding: 25px 0; background-color: rgba(153, 195, 85, 0.3);\">
        <h2 class=\"text-center\" style=\"font-family: 'Barlow'; font-weight: 800; color: #336336; font-size: 35px;\">Faire le choix de l'immobilier différent</h2>
        <div class=\"container-fluid\">
            <div class=\"row\" style=\"margin-top: 50px;\">
                <div class=\"col-lg-4 text-center\">
                    <img width=\"150\" src=\"https://harmony-promotion.com/images/1.png\" alt=\"Qualite de vie\"/>
                    <h3 style=\"margin: 20px 0; font-weight: 800; color: #336336; font-family: 'Barlow';\">Plus qu'un bien une
                    <br/>qualité de vie</h3>
                    <p style=\"font-family: 'Montserrat';\">Nous sélectionnons avec soin l'emplacement de nos programmes immobiliers pour vous offrir un cadre de vie idéal.</p>
                </div>
                <div class=\"col-lg-4 text-center\">
                    <img width=\"150\" src=\"https://harmony-promotion.com/images/2.png\" alt=\"Qualite de vie\"/>
                    <h3 style=\"margin: 20px 0; font-weight: 800; color: #336336; font-family: 'Barlow';\">Construire et
                    <br/>préserver la planète</h3>
                    <p style=\"font-family: 'Montserrat';\">Notre métier est de bâtir pour votre avenir, l'immobilier d'aujourd'hui et de demain. Aussi, il nous tient à coeur de limiter l'impact de nos projets sur l'environnement.</p>
                </div>
                <div class=\"col-lg-4 text-center\">
                    <img width=\"150\" src=\"https://harmony-promotion.com/images/3.png\" alt=\"Qualite de vie\"/>
                    <h3 style=\"margin: 20px 0; font-weight: 800; color: #336336; font-family: 'Barlow';\">Des logements
                    <br/>2.0</h3>
                    <p style=\"font-family: 'Montserrat';\">Des programmes innovants de la construction à l'utilisation de votre bien : sécurité, confort, énergie, tout est pilotable à distance !</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h2 class=\"text-center\" style=\"font-weight: 600; 
                                        font-family: 'Barlow'; 
                                        color: #336336; 
                                        font-weight: 800; 
                                        margin-top: 50px;
                                        font-size: 35px;\">S'engager pour la nature</h2>
        <div class=\"d-flex justify-content-around flex-wrap\">
            <div class=\"text-center\" style=\"max-width: 350px;\">
                <img src=\"https://harmony-promotion.com/images/arbre.gif\" style=\"width: 100%;\" alt=\"Gif d'arbre\"/>
                <h4 style=\"font-weight: 600; font-family: 'Barlow'; color: #336336; margin-top: 20px;\">Tomorrow is Green</h4>
                <p style=\"font-family: 'Montserrat';\">Dans sa démarche de construction responsable, Harmony Promotion s'engage à planter des arbres chaque année. 
                Afin de préserver la biodiversité et également lutter contre la déforestation.</p>
            </div>
            <div class=\"text-center\" style=\"max-width: 350px;\">
                <img src=\"https://harmony-promotion.com/images/voiture.gif\" style=\"width: 100%;\" alt=\"Gif voiture\"/>
                <h4 style=\"font-weight: 600; font-family: 'Barlow'; color: #336336; margin-top: 20px;\">Harmo'bility'</h4>
                <p style=\"font-family: 'Montserrat';\">Pour vous aider à sauter le pas de la mobilité \"green\", nous mettons à votre disposition, 
                dans tous nos programmes immobiliers, des véhicules électriques et leur borne de rechargement.</p>
            </div>
        </div>
    </div>
    <div style=\"border-top: 2px solid #d39c2f; border-bottom: 2px solid #d39c2f; padding: 50px 0; background-color: rgba(153, 195, 85, 0.3);\">
        <h2 class=\"text-center\" style=\"font-weight: 600; 
                                        font-family: 'Barlow'; 
                                        color: #336336; 
                                        font-weight: 800;
                                        font-size: 35px;\">Vous cherchez à vendre un terrain ?</h2>
        <p class=\"text-center text-muted\" style=\"font-size: 21px;\">Nous recherchons des terrains à acheter, prenons contact !</p>
        <div class=\"text-center\">
            <a href=\"";
        // line 200
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\" style=\"padding: 10px; width: 150px;\" class=\"btn btn-success\">PROPOSER</a>
        </div>
    </div>
    <div class=\"container-fluid\" style=\"border-bottom: 2px solid #d39c2f; padding: 25px 25px;\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <h2 style=\"font-weight: 600; 
                                        font-family: 'Barlow'; 
                                        color: #336336; 
                                        font-weight: 800; 
                                        margin-top: 25px;
                                        font-size: 35px;\">Mon guide de l'immobilier</h2>
                                        <br/>

                <p class=\"text-muted\" style=\"font-family: 'Montserrat'; font-size: 21px;\">Premier achat, investissement immobilier ? Pas toujours facile de s'y retrouver, mais pas de panique ! 
                Nous avons créé les petits guides de l'immobilier pour vous faciliter la tâche !</p>

                <p class=\"text-muted\" style=\"font-family: 'Montserrat'; font-size: 21px;\">Un guide qui rassemble tout ce qu'il faut savoir pour réussir son projet, qu'il s'agisse d'acheter ou d'investir.</p>
                <h3 style=\"font-weight: 600; 
                                        font-family: 'Barlow'; 
                                        color: #336336; 
                                        font-weight: 800; 
                                        margin-top: 25px;
                                        font-size: 31px;\">Je télécharge mon guide : </h3>
                <div class=\"d-flex\" style=\"border: 2px solid #8DC63F; 
                                            width: 320px; 
                                            height: 50px; 
                                            border-radius: 25px; 
                                            overflow: hidden;
                                            margin-top: 25px;\">
                    <div class=\"d-flex align-items-center justify-content-center\" style=\"background-color: #8DC63F; width: 160px;\">
                        <a href=\"";
        // line 231
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guide");
        echo "\">
                            <span class=\"text-light\">ACHETEUR</span>
                        </a>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center\" style=\"width: 160px;\">
                        <a href=\"";
        // line 236
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("guide");
        echo "\">
                            <span class=\"text-dark\">INVESTISSEUR</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 text-center\">
                <img src=\"https://harmony-promotion.com/images/perdu.png\" width=\"100%\" alt=\"Perdu ?\" style=\"margin-top: 50px;\"/>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  404 => 236,  396 => 231,  362 => 200,  294 => 135,  291 => 134,  287 => 132,  275 => 126,  267 => 125,  257 => 124,  247 => 123,  240 => 119,  228 => 118,  221 => 116,  218 => 115,  214 => 114,  210 => 113,  204 => 111,  200 => 110,  197 => 109,  195 => 108,  191 => 107,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Harmony Promotion{% endblock %}

{% block body %}
<style>
    @media (min-width: 1250px) {
        .encart {
            width: 400px;
            min-height: 150px;
            top: 40%;
            left: 10%;
        }
    }

    @media (min-width: 720px) and (max-width: 1250px) {
        .encart {
            width: 400px;
            min-height: 150px;
            top: 40%;
            left: 10%;
        }
    }

    @media (max-width: 720px) {
        .encart {
            width: 200px;
            min-height: 50px;
            top: 20%;
            left: 10%;
        }

        .encart h2 {
            font-size: 16px;
        }

        .encart p {
            font-size: 12px;
        }
    }

    .encart {
        background-color: rgba(255,255,255,0.7);
        border-radius: 0 50px 0 50px;
        position: absolute;
        padding-bottom: 15px;
    }
</style>
    <div id=\"carouselExampleControls\" class=\"carousel slide\" style=\"padding: 0;\" data-ride=\"carousel\">
        <div class=\"carousel-inner\">
            <div class=\"carousel-item active\">
                <img class=\"d-block w-100\" src=\"https://harmony-promotion.com/admin/uploads/AmplitudeSlider.png\" alt=\"First slide\">
                <div class=\"encart\">
                    <div style=\"font-family: 'Montserrat'; margin: 5%;\">
                        <h2 style=\"font-family: 'Barlow'; color: #336336; font-weight: 600;\">Amplitude</h2>
                        <p>Programme immobilier à Alfortville</p>
                    </div>
                    <button style=\"position: absolute; bottom: -10%; left: 10%;\" class=\"btn btn-success\">
                        En savoir plus
                    </button>
                </div>
            </div>
            <div class=\"carousel-item\">
                <img class=\"d-block w-100\" src=\"https://harmony-promotion.com/admin/uploads/TerrasseSlide.png\" alt=\"Second slide\">
                <div class=\"encart\">
                    <div style=\"font-family: 'Montserrat'; margin: 5%;\">
                        <h2 style=\"font-family: 'Barlow'; color: #336336; font-weight: 600;\">Les Terrasses d'Osenat</h2>
                        <p>Programme immobilier au Plessis-Trévise</p>
                    </div>
                    <a href=\"/detail/1\" style=\"position: absolute; bottom: -10%; left: 10%;\" class=\"btn btn-success\">
                        En savoir plus
                    </a>
                </div>
            </div>
        </div>
        <a class=\"carousel-control-prev text-success\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"prev\">
            <span class=\"carousel-control-prev-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Previous</span>
        </a>
        <a class=\"carousel-control-next text-success\" href=\"#carouselExampleControls\" role=\"button\" data-slide=\"next\">
            <span class=\"carousel-control-next-icon\" aria-hidden=\"true\"></span>
            <span class=\"sr-only\">Next</span>
        </a>
    </div>
    <div class=\"d-flex justify-content-center align-items-center\" style=\"height: 80px; background-color: #172F26;\">
            <select class=\"exampleFormControlSelect1\" name=\"lieu\" style=\"height: 45px;\">
                <option disabled selected>Département</option>
                <option value=\"75\">75</option>
                <option value=\"92\">92</option>
                <option value=\"94\">94</option>
                <option value=\"971\">971</option>
            </select>
            <select class=\"exampleFormControlSelect1\" name=\"type\" style=\"height: 45px; margin-left: 2%;\">
                <option disabled selected>Type de bien</option>
                <option value=\"studio\">Studio</option>
                <option value=\"t2\">T2</option>
                <option value=\"t3\">T3</option>
                <option value=\"t4\">T4</option>
                <option value=\"duplex\">T4 Duplex</option>
            </select>
            <button style=\"height: 45px; margin-left: 2%; width: 100%; font-size: 14px; max-width: 140px;\" class=\"btn btn-success\">
                RECHERCHER
            </button>
    </div>
    <div style=\"padding: 50px;\">
        <h2 style=\"font-family: 'Barlow'; font-weight: 600;  color: rgb(0, 48, 60);\" class=\"text-center\">NOS PROGRAMMES</h2>
        <h4 style=\"font-family: 'Montserrat'; margin-bottom: 20px;\" class=\"text-center\">Trouvez votre logement idéal parmi les {{ nbbiens }} biens disponibles</h4>
        {% if (programmes) %}
            <div class=\"d-flex\" style=\"overflow-x: scroll;\">
                {% for prog in programmes %}
                    <a href=\"/detail/{{prog.id}}\" style=\"text-decoration: none; margin: 50px 0;\">
                        <div class=\"\" style=\"margin: 0px 15px; min-width: 240px; max-width: 260px; height: 350px; border-radius: 25px; box-shadow: 6px 6px 2px 0px rgba(0,0,0,0.16); overflow: hidden;\">
                            <div class=\"d-flex justify-content-end align-items-start\" style=\"min-height: 150px; background-image: url('/uploads/pages/{{prog.miniature}}'); background-size: cover; width: 100%;\">
                                {% if prog.isPrestige %}<img src=\"https://harmony-promotion.com/images/pastille.svg\" alt=\"Pastille prestige\" width=\"75\" style=\"margin: 5px;\"/>{% endif %}
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
                {% endfor %}
            </div>
        {% endif %}
        <div class=\"text-center\" style=\"margin-top: 50px;\">
            <a href=\"{{ path('programme') }}\" class=\"text-center btn btn-success\" style=\"padding: 20px;\">TOUS NOS PROGRAMMES</a>
        </div>
    </div>
    <div class=\"d-flex justify-content-center\" style=\"border-top: 2px solid #d39c2f; padding: 25px 0;\">
        <video id=\"myVideo\" autoplay=\"\" frameborder=\"0\" controls=\"\" allowfullscreen=\"\" width=\"70%\" height=\"100%\">
            <source src=\"./images/video.avi\" type=\"video/avi\">
            <source src=\"./images/video.mp4\" type=\"video/mp4\">
            Votre navigateur ne supporte pas la vidéo
        </video>
    </div>
    <div style=\"border-top: 2px solid #d39c2f; border-bottom: 2px solid #d39c2f; padding: 25px 0; background-color: rgba(153, 195, 85, 0.3);\">
        <h2 class=\"text-center\" style=\"font-family: 'Barlow'; font-weight: 800; color: #336336; font-size: 35px;\">Faire le choix de l'immobilier différent</h2>
        <div class=\"container-fluid\">
            <div class=\"row\" style=\"margin-top: 50px;\">
                <div class=\"col-lg-4 text-center\">
                    <img width=\"150\" src=\"https://harmony-promotion.com/images/1.png\" alt=\"Qualite de vie\"/>
                    <h3 style=\"margin: 20px 0; font-weight: 800; color: #336336; font-family: 'Barlow';\">Plus qu'un bien une
                    <br/>qualité de vie</h3>
                    <p style=\"font-family: 'Montserrat';\">Nous sélectionnons avec soin l'emplacement de nos programmes immobiliers pour vous offrir un cadre de vie idéal.</p>
                </div>
                <div class=\"col-lg-4 text-center\">
                    <img width=\"150\" src=\"https://harmony-promotion.com/images/2.png\" alt=\"Qualite de vie\"/>
                    <h3 style=\"margin: 20px 0; font-weight: 800; color: #336336; font-family: 'Barlow';\">Construire et
                    <br/>préserver la planète</h3>
                    <p style=\"font-family: 'Montserrat';\">Notre métier est de bâtir pour votre avenir, l'immobilier d'aujourd'hui et de demain. Aussi, il nous tient à coeur de limiter l'impact de nos projets sur l'environnement.</p>
                </div>
                <div class=\"col-lg-4 text-center\">
                    <img width=\"150\" src=\"https://harmony-promotion.com/images/3.png\" alt=\"Qualite de vie\"/>
                    <h3 style=\"margin: 20px 0; font-weight: 800; color: #336336; font-family: 'Barlow';\">Des logements
                    <br/>2.0</h3>
                    <p style=\"font-family: 'Montserrat';\">Des programmes innovants de la construction à l'utilisation de votre bien : sécurité, confort, énergie, tout est pilotable à distance !</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h2 class=\"text-center\" style=\"font-weight: 600; 
                                        font-family: 'Barlow'; 
                                        color: #336336; 
                                        font-weight: 800; 
                                        margin-top: 50px;
                                        font-size: 35px;\">S'engager pour la nature</h2>
        <div class=\"d-flex justify-content-around flex-wrap\">
            <div class=\"text-center\" style=\"max-width: 350px;\">
                <img src=\"https://harmony-promotion.com/images/arbre.gif\" style=\"width: 100%;\" alt=\"Gif d'arbre\"/>
                <h4 style=\"font-weight: 600; font-family: 'Barlow'; color: #336336; margin-top: 20px;\">Tomorrow is Green</h4>
                <p style=\"font-family: 'Montserrat';\">Dans sa démarche de construction responsable, Harmony Promotion s'engage à planter des arbres chaque année. 
                Afin de préserver la biodiversité et également lutter contre la déforestation.</p>
            </div>
            <div class=\"text-center\" style=\"max-width: 350px;\">
                <img src=\"https://harmony-promotion.com/images/voiture.gif\" style=\"width: 100%;\" alt=\"Gif voiture\"/>
                <h4 style=\"font-weight: 600; font-family: 'Barlow'; color: #336336; margin-top: 20px;\">Harmo'bility'</h4>
                <p style=\"font-family: 'Montserrat';\">Pour vous aider à sauter le pas de la mobilité \"green\", nous mettons à votre disposition, 
                dans tous nos programmes immobiliers, des véhicules électriques et leur borne de rechargement.</p>
            </div>
        </div>
    </div>
    <div style=\"border-top: 2px solid #d39c2f; border-bottom: 2px solid #d39c2f; padding: 50px 0; background-color: rgba(153, 195, 85, 0.3);\">
        <h2 class=\"text-center\" style=\"font-weight: 600; 
                                        font-family: 'Barlow'; 
                                        color: #336336; 
                                        font-weight: 800;
                                        font-size: 35px;\">Vous cherchez à vendre un terrain ?</h2>
        <p class=\"text-center text-muted\" style=\"font-size: 21px;\">Nous recherchons des terrains à acheter, prenons contact !</p>
        <div class=\"text-center\">
            <a href=\"{{ path('contact') }}\" style=\"padding: 10px; width: 150px;\" class=\"btn btn-success\">PROPOSER</a>
        </div>
    </div>
    <div class=\"container-fluid\" style=\"border-bottom: 2px solid #d39c2f; padding: 25px 25px;\">
        <div class=\"row\">
            <div class=\"col-lg-6\">
                <h2 style=\"font-weight: 600; 
                                        font-family: 'Barlow'; 
                                        color: #336336; 
                                        font-weight: 800; 
                                        margin-top: 25px;
                                        font-size: 35px;\">Mon guide de l'immobilier</h2>
                                        <br/>

                <p class=\"text-muted\" style=\"font-family: 'Montserrat'; font-size: 21px;\">Premier achat, investissement immobilier ? Pas toujours facile de s'y retrouver, mais pas de panique ! 
                Nous avons créé les petits guides de l'immobilier pour vous faciliter la tâche !</p>

                <p class=\"text-muted\" style=\"font-family: 'Montserrat'; font-size: 21px;\">Un guide qui rassemble tout ce qu'il faut savoir pour réussir son projet, qu'il s'agisse d'acheter ou d'investir.</p>
                <h3 style=\"font-weight: 600; 
                                        font-family: 'Barlow'; 
                                        color: #336336; 
                                        font-weight: 800; 
                                        margin-top: 25px;
                                        font-size: 31px;\">Je télécharge mon guide : </h3>
                <div class=\"d-flex\" style=\"border: 2px solid #8DC63F; 
                                            width: 320px; 
                                            height: 50px; 
                                            border-radius: 25px; 
                                            overflow: hidden;
                                            margin-top: 25px;\">
                    <div class=\"d-flex align-items-center justify-content-center\" style=\"background-color: #8DC63F; width: 160px;\">
                        <a href=\"{{ path('guide') }}\">
                            <span class=\"text-light\">ACHETEUR</span>
                        </a>
                    </div>
                    <div class=\"d-flex align-items-center justify-content-center\" style=\"width: 160px;\">
                        <a href=\"{{ path('guide') }}\">
                            <span class=\"text-dark\">INVESTISSEUR</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 text-center\">
                <img src=\"https://harmony-promotion.com/images/perdu.png\" width=\"100%\" alt=\"Perdu ?\" style=\"margin-top: 50px;\"/>
            </div>
        </div>
    </div>
{% endblock %}
", "home/index.html.twig", "/home/souaguen/Bureau/harmonypresent/templates/home/index.html.twig");
    }
}
