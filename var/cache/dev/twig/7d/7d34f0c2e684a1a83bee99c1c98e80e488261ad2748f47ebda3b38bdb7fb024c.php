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

/* home/programme.html.twig */
class __TwigTemplate_8e798cf14a029a0e55ee93fd27b7617a11de035c72521127c47e75d76271297b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/programme.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/programme.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/programme.html.twig", 1);
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

        echo "Harmony Promotion | Programme";
        
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
        echo "<link href=\"https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js\"></script>
<style>

    .custom-checkbox .custom-control-input:checked~.custom-control-label::before{
        background-color: #8DC640;
        border: none;
    }
    .custom-control-input:active~.custom-control-label::before{
        background-color: #8DC640;
    }
    /**.exampleFormControlSelect1 {
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
    }**/

#body {
    background: #DFEDD6;
    font-family: \"Montserrat\";
    padding: 35px;
    color: #3B4754;
}

.h3 {
    font-family: \"Handlee\";
    text-align: center;
    font-size: 30px;
    color: #336336;
}

#formulaire {
    padding-top: 51px;
}

.p {
    font-size: 14px;
    margin-top: 24px;
}

#accept {
    font-size: 12px;
}

.input-info{
    margin: 35px 0 35px 0;
}

.input-inv{
    margin: 0 0 35px 0;
}

#inlineCheckbox1 {
    margin: 2px 10px 2px 0px
}

.custom-control-input::after {
    background-color: greenyellow;
}

.form-control::placeholder {
    color: rgba(0, 0, 0, 0.3);
}
</style>
<div class=\"container-fluid\">
    <div class=\"row\" style=\"border-bottom: 2px solid #d39c2f;\">
        <div class=\"col-lg-4\" style=\"padding: 0;\">
            <div id=\"map\" style=\"height: 600px;\">
                
            </div>
        </div>
        <div class=\"col-lg-8\" style=\"padding: 0;\">
            <div class=\"d-flex justify-content-around\" style=\"height: 70px; background-color: #336335;\">
                <select class=\"w-100 exampleFormControlSelect1\" id=\"department\" style=\"margin: 15px;\">
                    <option disabled selected>Département</option>
                    <option value=\"75\">75</option>
                    <option value=\"92\">92</option>
                    <option value=\"94\">94</option>
                    <option value=\"97\">971</option>
                </select>
                <select class=\"w-100 exampleFormControlSelect1\" id=\"piece\" style=\"margin: 15px;\">
                    <option disabled selected>Type de bien</option>
                    <option value=\"Studio\">Studio</option>
                    <option value=\"T2\">T2</option>
                    <option value=\"T3\">T3</option>
                    <option value=\"T4\">T4</option>
                    <option value=\"Duplex\">T4 Duplex</option>
                </select>
            </div>
            ";
        // line 102
        if ((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 102, $this->source); })())) {
            // line 103
            echo "            <div class=\"d-flex flex-wrap justify-content-lg-start justify-content-center\" style=\"overflow-y: scroll; overflow-x: hidden; max-height: 600px;\">
                ";
            // line 104
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["programmes"]) || array_key_exists("programmes", $context) ? $context["programmes"] : (function () { throw new RuntimeError('Variable "programmes" does not exist.', 104, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["prog"]) {
                // line 105
                echo "                    <a class=\"";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["prog"], "biens", [], "any", false, false, false, 105));
                foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "title", [], "any", false, false, false, 105), "html", null, true);
                    echo " ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo "dep-";
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "departement", [], "any", false, false, false, 105), 0, 2), "html", null, true);
                echo " prog\" href=\"/detail/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "id", [], "any", false, false, false, 105), "html", null, true);
                echo "\" style=\"text-decoration: none;\">
                        <div style=\"margin: 15px 25px; min-width: 240px; max-width: 260px; height: 350px; border-radius: 25px; box-shadow: 6px 6px 2px 0px rgba(0,0,0,0.16); overflow: hidden;\">
                            <div class=\"d-flex justify-content-end align-items-start\" style=\"min-height: 150px; background-image: url('/uploads/pages/";
                // line 107
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "miniature", [], "any", false, false, false, 107), "html", null, true);
                echo "'); background-size: cover; width: 100%;\">
                                ";
                // line 108
                if (twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 108)) {
                    echo "<img src=\"https://harmony-promotion.com/images/pastille.svg\" alt=\"Pastille prestige\" width=\"75\" style=\"margin: 5px;\"/>";
                }
                // line 109
                echo "                            </div>
                            <div class=\"h-100\" ";
                // line 110
                if (twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 110)) {
                    echo "style=\"background-color: rgb(0, 48, 60);\"";
                }
                echo ">
                                <div class=\"d-flex justify-content-end\" style=\"padding-right: 10px;\">
                                    <div class=\"text-center d-inline-block ";
                // line 112
                if (twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 112)) {
                    echo "text-dark bg-light";
                } else {
                    echo "text-light";
                }
                echo "\" style=\"margin-top: -10px; background-color: ";
                if ( !twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 112)) {
                    echo "rgb(144, 188, 85)";
                }
                echo "; padding: 5px 12px;\">
                                        ";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "tag", [], "any", false, false, false, 113), "html", null, true);
                echo "
                                    </div>
                                </div>
                                <div style=\"padding: 20px;\">
                                    <h2 style=\"font-family: 'Barlow'; font-size: 18px; color: ";
                // line 117
                if ( !twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 117)) {
                    echo "#336336";
                } else {
                    echo "white";
                }
                echo "; font-weight: 700;\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "title", [], "any", false, false, false, 117), "html", null, true);
                echo "</h2>
                                    <h3 style=\"font-family: 'Montserrat'; font-size: 18px; color: ";
                // line 118
                if ( !twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 118)) {
                    echo "#d39c2f";
                } else {
                    echo "white";
                }
                echo ";\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "ville", [], "any", false, false, false, 118), "html", null, true);
                echo "</h3>
                                    <div style=\"border: 2px solid ";
                // line 119
                if (twig_get_attribute($this->env, $this->source, $context["prog"], "isPrestige", [], "any", false, false, false, 119)) {
                    echo " #B1A06B ";
                } else {
                    echo " #f8f9fa ";
                }
                echo "; width: 50px; margin: 5px 0;\"></div>
                                    <p class=\"text-muted text-justify\" style=\"font-size: 13px; word-wrap: break-word; hyphens: auto;\">";
                // line 120
                echo twig_escape_filter($this->env, twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["prog"], "text", [], "any", false, false, false, 120), 0, 80), "html", null, true);
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
            // line 126
            echo "            </div>
            ";
        }
        // line 128
        echo "        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\" style=\"padding: 50px;\">
            <img src=\"https://harmony-promotion.com/images/research.jpg\" width=\"100%\"/>
        </div>
        <div class=\"col-lg-6\" style=\"padding: 50px;\">
            <div style=\"font-family: 'Montserrat'; font-size: 18px;\">
                <h3 style=\"font-family: 'Barlow'; color: #336335; font-size: 28px;\">Toujours à la recherche de votre logement ?</h3>
                <br/>
                <p class=\"text-muted\">Nos conseillez sont là pour vous aider et vous orienter vers un bien qui collera parfaitement avec vous.</p>

                <p class=\"text-muted\">N'hésitez plus, prenons contact ! </p>
                <div class=\"text-center\" style=\"margin-top: 50px;\">
                    <a class=\"btn btn-success\" style=\"width: 250px;\" href=\"";
        // line 142
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("rappel");
        echo "\">Être rappelé</a>
                </div>
                <div class=\"text-center\" style=\"margin-top: 25px;\">
                    <a class=\"btn btn-success\" style=\"width: 250px;\" href=\"";
        // line 145
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("contact");
        echo "\">0 801 900 500</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id=\"body\">
    <div class=\"container\" id=\"formulaire\">
        <div class=\"row d-flex justify-content-center\">
          <div class=\"col-lg-8\">
            <h3 class=\"text-center\" style=\"color: #336335; font-family: 'Barlow';\">Gardez un oeil sur les opportunités en toute simplicité</h3>
            <p class=\"text-center p\">Créez votre alerte personnalisée pour être sûr de ne pas passer à côté de votre logement idéal ! 
              Adieu les longues heures de recherche, nous vous tenons informés dès qu'un bien correspond à vos critère</p>
          </div>
        </div>
        <div class=\"row d-flex justify-content-center\" style=\"margin-top: 35px;\">
          <form class=\"col-lg-6\" id=\"myform\">
            <div class=\"form-group row\">
              <input type=\"text\" name=\"name\" required=\"required\" style=\"margin-bottom: 35px;\" class=\"form-control col-lg-5\" placeholder=\"Nom\">
              <input type=\"text\" name=\"firstname\" style=\"margin-bottom: 35px;\" class=\"form-control offset-lg-2 col-lg-5\" placeholder=\"Prénom\">
              <input type=\"email\" name=\"email\" class=\"form-control col-lg-5\" placeholder=\"Adresse e-mail\">
            </div>
            <p>Type de logement</p>
            <br>
            <div class=\"d-flex justify-content-between flex-wrap flex-column flex-lg-row\">
                <div class=\"form-check form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"studio\" id=\"radios1\" value=\"option1\">
                  <label class=\"form-check-label\" for=\"radios1\">Studio</label>
                </div>
                <div class=\"form-check form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"t2\" id=\"radios2\" value=\"option2\">
                  <label class=\"form-check-label\" for=\"radios2\">T2</label>
                </div>
                <div class=\"form-check form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"t3\" id=\"radios3\" value=\"option3\">
                  <label class=\"form-check-label\" for=\"radios3\">T3</label>
                </div>
                <div class=\"form-check form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"t4\" id=\"radios4\" value=\"option3\">
                  <label class=\"form-check-label\" for=\"radios4\">T4 et +</label>
                </div>
                <div class=\"form-check form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"maison\" id=\"radios5\" value=\"option4\">
                  <label class=\"form-check-label\" for=\"radios5\">Maison</label>
                </div>
            </div>

            <div class=\"form-group input-info\">
              <select class=\"col-lg-5 exampleFormControlSelect1\" name=\"ideal\" style=\"height: 40px;\">
                  <option disabled=\"\" selected=\"\">Lieu idéal</option>
                  <option value=\"75001\">(75001) Paris I</option>
                  <option value=\"75002\">(75002) Paris II</option>
                  <option value=\"75003\">(75003) Paris III</option>
                  <option value=\"75004\">(75004) Paris IV</option>
                  <option value=\"75005\">(75005) Paris V</option>
                  <option value=\"75006\">(75006) Paris VI</option>
                  <option value=\"75007\">(75007) Paris VII</option>
                  <option value=\"75008\">(75008) Paris VIII</option>
                  <option value=\"75009\">(75009) Paris IX</option>
                  <option value=\"75010\">(75010) Paris X</option>
                  <option value=\"75011\">(75011) Paris XI</option>
                  <option value=\"75012\">(75012) Paris XII</option>
                  <option value=\"75013\">(75013) Paris XIII</option>
                  <option value=\"75014\">(75014) Paris XIV</option>
                  <option value=\"75015\">(75015) Paris XV</option>
                  <option value=\"75016\">(75016) Paris XVI</option>
                  <option value=\"75017\">(75017) Paris XVII</option>
                  <option value=\"75018\">(75018) Paris XVIII</option>
                  <option value=\"75019\">(75019) Paris XIX</option>
                  <option value=\"75020\">(75020) Paris XX</option>
                  <option value=\"77\">(77) Seine-et-Marne</option>
                  <option value=\"78\">(78) Yvelines</option>
                  <option value=\"91\">(91) Essone</option>
                  <option value=\"92\">(92) Hauts-de-Seine</option>
                  <option value=\"93\">(93) Seine-Saint-Denis</option>
                  <option value=\"94\">(94) Val-de-Marne</option>
                  <option value=\"95\">(95) Val d'Oise</option>
              </select>
            </div>
            <div class=\"custom-control custom-switch input-inv form-control-lg custom-checkbox\">  
              <input type=\"checkbox\" name=\"achatpour\" class=\"custom-control-input\" id=\"customCheck1\">  
              <label class=\"custom-control-label\" for=\"customCheck1\" style=\"font-size: 14px;\">Habiter/Investir</label>  
            </div>
            <div>
              <div class=\"form-check form-check-inline d-flex align-items-start\">
                <input class=\"form-check-input conditions\" type=\"checkbox\" name=\"conditions\" id=\"conditions\" value=\"option1\" required=\"\">
                <label class=\"form-check-label\" id=\"accept\" for=\"inlineCheckbox1\">J'accepte que mes données soient utilisées dans le cadre de ma demande. Pour en savoir plus sur le traitement de vos données et vos droits, <a href=\"https://harmony-promotion.com/mention-information.php\" class=\"text-success\">consultez notre politique de traitement des données</a></label>
              </div>
            </div>
            <div class=\"d-flex justify-content-center\" style=\"margin: 35px;\">
              <button class=\"btn btn-success\">Envoyer</button>
            </div>
          </form>
        </div>
    </div>
</div>
<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD75nFLcsn06DgLjQVJRpNJNV5iNnoPuks&callback=initMap\"></script>
<script src=\"https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js\"></script>
<script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById(\"map\"), {
          center: { lat: 48.86351452360316, lng: 2.3418411453479986 },
          zoom: 11,
        });
        map.setTilt(45);

        const markers = locations.map((location) => {
            return new google.maps.Marker({ position: location })
        });

        new MarkerClusterer(map, markers)
    }
    const locations = [{ lat: 48.850718025545966, lng: 2.3893828982502505 },
                    { lat: 48.817687281884, lng: 2.2627395481495602 },
                    { lat: 48.800650783051175, lng: 2.422302689972822 },
                    { lat: 48.889262090834016, lng: 2.305715694540116}];
    let dep = \"\";
    let piece = \"\";
    let anchors = window.location.hash.split(\"#\");
    if (anchors.length > 1)
        \$(\".prog\").hide();
    for (let i = 1; i < anchors.length; i++) {
        if (Number(anchors[i])) {
            \$(\".dep-\" + anchors[i]).show();
            \$(\"#department\").val(anchors[i]);
        }
        if (!(Number(anchors[i]))) {
            \$(\".\" + anchors[i]).show();
            \$(\"#piece\").val(anchors[i]);
        }
    }

    \$(\"#department\").change((e) => {
        dep = \".dep-\" + e.target.value;
        \$(\".prog\").hide();
        if (piece != \"\") {
            for (let i = 0, elt = null; i < \$(piece).length; i++) {
                elt = \$(\$(dep)[i]);
                if (elt.hasClass(piece.substr(1)))
                    elt.show();
            }
        } else
            \$(dep).show();
    });

    \$(\"#piece\").change((e) => {
        piece = \".\" + e.target.value;
        \$(\".prog\").hide();
        if (dep != \"\") {
            for (let i = 0, elt = null; i < \$(dep).length; i++) {
                elt = \$(\$(piece)[i]);
                if (elt.hasClass(dep.substr(1)))
                    elt.show();
            }
        } else {
            \$(piece).show();
        }
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "home/programme.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 145,  310 => 142,  294 => 128,  290 => 126,  278 => 120,  270 => 119,  260 => 118,  250 => 117,  243 => 113,  231 => 112,  224 => 110,  221 => 109,  217 => 108,  213 => 107,  195 => 105,  191 => 104,  188 => 103,  186 => 102,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Harmony Promotion | Programme{% endblock %}

{% block body %}
<link href=\"https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css\" rel=\"stylesheet\">
<script src=\"https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js\"></script>
<style>

    .custom-checkbox .custom-control-input:checked~.custom-control-label::before{
        background-color: #8DC640;
        border: none;
    }
    .custom-control-input:active~.custom-control-label::before{
        background-color: #8DC640;
    }
    /**.exampleFormControlSelect1 {
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
    }**/

#body {
    background: #DFEDD6;
    font-family: \"Montserrat\";
    padding: 35px;
    color: #3B4754;
}

.h3 {
    font-family: \"Handlee\";
    text-align: center;
    font-size: 30px;
    color: #336336;
}

#formulaire {
    padding-top: 51px;
}

.p {
    font-size: 14px;
    margin-top: 24px;
}

#accept {
    font-size: 12px;
}

.input-info{
    margin: 35px 0 35px 0;
}

.input-inv{
    margin: 0 0 35px 0;
}

#inlineCheckbox1 {
    margin: 2px 10px 2px 0px
}

.custom-control-input::after {
    background-color: greenyellow;
}

.form-control::placeholder {
    color: rgba(0, 0, 0, 0.3);
}
</style>
<div class=\"container-fluid\">
    <div class=\"row\" style=\"border-bottom: 2px solid #d39c2f;\">
        <div class=\"col-lg-4\" style=\"padding: 0;\">
            <div id=\"map\" style=\"height: 600px;\">
                
            </div>
        </div>
        <div class=\"col-lg-8\" style=\"padding: 0;\">
            <div class=\"d-flex justify-content-around\" style=\"height: 70px; background-color: #336335;\">
                <select class=\"w-100 exampleFormControlSelect1\" id=\"department\" style=\"margin: 15px;\">
                    <option disabled selected>Département</option>
                    <option value=\"75\">75</option>
                    <option value=\"92\">92</option>
                    <option value=\"94\">94</option>
                    <option value=\"97\">971</option>
                </select>
                <select class=\"w-100 exampleFormControlSelect1\" id=\"piece\" style=\"margin: 15px;\">
                    <option disabled selected>Type de bien</option>
                    <option value=\"Studio\">Studio</option>
                    <option value=\"T2\">T2</option>
                    <option value=\"T3\">T3</option>
                    <option value=\"T4\">T4</option>
                    <option value=\"Duplex\">T4 Duplex</option>
                </select>
            </div>
            {% if (programmes) %}
            <div class=\"d-flex flex-wrap justify-content-lg-start justify-content-center\" style=\"overflow-y: scroll; overflow-x: hidden; max-height: 600px;\">
                {% for prog in programmes %}
                    <a class=\"{% for bien in prog.biens %}{{ bien.title }} {% endfor %}dep-{{prog.departement|slice(0,2)}} prog\" href=\"/detail/{{prog.id}}\" style=\"text-decoration: none;\">
                        <div style=\"margin: 15px 25px; min-width: 240px; max-width: 260px; height: 350px; border-radius: 25px; box-shadow: 6px 6px 2px 0px rgba(0,0,0,0.16); overflow: hidden;\">
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
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-lg-6\" style=\"padding: 50px;\">
            <img src=\"https://harmony-promotion.com/images/research.jpg\" width=\"100%\"/>
        </div>
        <div class=\"col-lg-6\" style=\"padding: 50px;\">
            <div style=\"font-family: 'Montserrat'; font-size: 18px;\">
                <h3 style=\"font-family: 'Barlow'; color: #336335; font-size: 28px;\">Toujours à la recherche de votre logement ?</h3>
                <br/>
                <p class=\"text-muted\">Nos conseillez sont là pour vous aider et vous orienter vers un bien qui collera parfaitement avec vous.</p>

                <p class=\"text-muted\">N'hésitez plus, prenons contact ! </p>
                <div class=\"text-center\" style=\"margin-top: 50px;\">
                    <a class=\"btn btn-success\" style=\"width: 250px;\" href=\"{{ path('rappel') }}\">Être rappelé</a>
                </div>
                <div class=\"text-center\" style=\"margin-top: 25px;\">
                    <a class=\"btn btn-success\" style=\"width: 250px;\" href=\"{{ path('contact') }}\">0 801 900 500</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id=\"body\">
    <div class=\"container\" id=\"formulaire\">
        <div class=\"row d-flex justify-content-center\">
          <div class=\"col-lg-8\">
            <h3 class=\"text-center\" style=\"color: #336335; font-family: 'Barlow';\">Gardez un oeil sur les opportunités en toute simplicité</h3>
            <p class=\"text-center p\">Créez votre alerte personnalisée pour être sûr de ne pas passer à côté de votre logement idéal ! 
              Adieu les longues heures de recherche, nous vous tenons informés dès qu'un bien correspond à vos critère</p>
          </div>
        </div>
        <div class=\"row d-flex justify-content-center\" style=\"margin-top: 35px;\">
          <form class=\"col-lg-6\" id=\"myform\">
            <div class=\"form-group row\">
              <input type=\"text\" name=\"name\" required=\"required\" style=\"margin-bottom: 35px;\" class=\"form-control col-lg-5\" placeholder=\"Nom\">
              <input type=\"text\" name=\"firstname\" style=\"margin-bottom: 35px;\" class=\"form-control offset-lg-2 col-lg-5\" placeholder=\"Prénom\">
              <input type=\"email\" name=\"email\" class=\"form-control col-lg-5\" placeholder=\"Adresse e-mail\">
            </div>
            <p>Type de logement</p>
            <br>
            <div class=\"d-flex justify-content-between flex-wrap flex-column flex-lg-row\">
                <div class=\"form-check form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"studio\" id=\"radios1\" value=\"option1\">
                  <label class=\"form-check-label\" for=\"radios1\">Studio</label>
                </div>
                <div class=\"form-check form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"t2\" id=\"radios2\" value=\"option2\">
                  <label class=\"form-check-label\" for=\"radios2\">T2</label>
                </div>
                <div class=\"form-check form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"t3\" id=\"radios3\" value=\"option3\">
                  <label class=\"form-check-label\" for=\"radios3\">T3</label>
                </div>
                <div class=\"form-check form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"t4\" id=\"radios4\" value=\"option3\">
                  <label class=\"form-check-label\" for=\"radios4\">T4 et +</label>
                </div>
                <div class=\"form-check form-check\">
                  <input class=\"form-check-input\" type=\"checkbox\" name=\"maison\" id=\"radios5\" value=\"option4\">
                  <label class=\"form-check-label\" for=\"radios5\">Maison</label>
                </div>
            </div>

            <div class=\"form-group input-info\">
              <select class=\"col-lg-5 exampleFormControlSelect1\" name=\"ideal\" style=\"height: 40px;\">
                  <option disabled=\"\" selected=\"\">Lieu idéal</option>
                  <option value=\"75001\">(75001) Paris I</option>
                  <option value=\"75002\">(75002) Paris II</option>
                  <option value=\"75003\">(75003) Paris III</option>
                  <option value=\"75004\">(75004) Paris IV</option>
                  <option value=\"75005\">(75005) Paris V</option>
                  <option value=\"75006\">(75006) Paris VI</option>
                  <option value=\"75007\">(75007) Paris VII</option>
                  <option value=\"75008\">(75008) Paris VIII</option>
                  <option value=\"75009\">(75009) Paris IX</option>
                  <option value=\"75010\">(75010) Paris X</option>
                  <option value=\"75011\">(75011) Paris XI</option>
                  <option value=\"75012\">(75012) Paris XII</option>
                  <option value=\"75013\">(75013) Paris XIII</option>
                  <option value=\"75014\">(75014) Paris XIV</option>
                  <option value=\"75015\">(75015) Paris XV</option>
                  <option value=\"75016\">(75016) Paris XVI</option>
                  <option value=\"75017\">(75017) Paris XVII</option>
                  <option value=\"75018\">(75018) Paris XVIII</option>
                  <option value=\"75019\">(75019) Paris XIX</option>
                  <option value=\"75020\">(75020) Paris XX</option>
                  <option value=\"77\">(77) Seine-et-Marne</option>
                  <option value=\"78\">(78) Yvelines</option>
                  <option value=\"91\">(91) Essone</option>
                  <option value=\"92\">(92) Hauts-de-Seine</option>
                  <option value=\"93\">(93) Seine-Saint-Denis</option>
                  <option value=\"94\">(94) Val-de-Marne</option>
                  <option value=\"95\">(95) Val d'Oise</option>
              </select>
            </div>
            <div class=\"custom-control custom-switch input-inv form-control-lg custom-checkbox\">  
              <input type=\"checkbox\" name=\"achatpour\" class=\"custom-control-input\" id=\"customCheck1\">  
              <label class=\"custom-control-label\" for=\"customCheck1\" style=\"font-size: 14px;\">Habiter/Investir</label>  
            </div>
            <div>
              <div class=\"form-check form-check-inline d-flex align-items-start\">
                <input class=\"form-check-input conditions\" type=\"checkbox\" name=\"conditions\" id=\"conditions\" value=\"option1\" required=\"\">
                <label class=\"form-check-label\" id=\"accept\" for=\"inlineCheckbox1\">J'accepte que mes données soient utilisées dans le cadre de ma demande. Pour en savoir plus sur le traitement de vos données et vos droits, <a href=\"https://harmony-promotion.com/mention-information.php\" class=\"text-success\">consultez notre politique de traitement des données</a></label>
              </div>
            </div>
            <div class=\"d-flex justify-content-center\" style=\"margin: 35px;\">
              <button class=\"btn btn-success\">Envoyer</button>
            </div>
          </form>
        </div>
    </div>
</div>
<script async defer src=\"https://maps.googleapis.com/maps/api/js?key=AIzaSyD75nFLcsn06DgLjQVJRpNJNV5iNnoPuks&callback=initMap\"></script>
<script src=\"https://unpkg.com/@google/markerclustererplus@4.0.1/dist/markerclustererplus.min.js\"></script>
<script>
    function initMap() {
        const map = new google.maps.Map(document.getElementById(\"map\"), {
          center: { lat: 48.86351452360316, lng: 2.3418411453479986 },
          zoom: 11,
        });
        map.setTilt(45);

        const markers = locations.map((location) => {
            return new google.maps.Marker({ position: location })
        });

        new MarkerClusterer(map, markers)
    }
    const locations = [{ lat: 48.850718025545966, lng: 2.3893828982502505 },
                    { lat: 48.817687281884, lng: 2.2627395481495602 },
                    { lat: 48.800650783051175, lng: 2.422302689972822 },
                    { lat: 48.889262090834016, lng: 2.305715694540116}];
    let dep = \"\";
    let piece = \"\";
    let anchors = window.location.hash.split(\"#\");
    if (anchors.length > 1)
        \$(\".prog\").hide();
    for (let i = 1; i < anchors.length; i++) {
        if (Number(anchors[i])) {
            \$(\".dep-\" + anchors[i]).show();
            \$(\"#department\").val(anchors[i]);
        }
        if (!(Number(anchors[i]))) {
            \$(\".\" + anchors[i]).show();
            \$(\"#piece\").val(anchors[i]);
        }
    }

    \$(\"#department\").change((e) => {
        dep = \".dep-\" + e.target.value;
        \$(\".prog\").hide();
        if (piece != \"\") {
            for (let i = 0, elt = null; i < \$(piece).length; i++) {
                elt = \$(\$(dep)[i]);
                if (elt.hasClass(piece.substr(1)))
                    elt.show();
            }
        } else
            \$(dep).show();
    });

    \$(\"#piece\").change((e) => {
        piece = \".\" + e.target.value;
        \$(\".prog\").hide();
        if (dep != \"\") {
            for (let i = 0, elt = null; i < \$(dep).length; i++) {
                elt = \$(\$(piece)[i]);
                if (elt.hasClass(dep.substr(1)))
                    elt.show();
            }
        } else {
            \$(piece).show();
        }
    });
</script>
{% endblock %}", "home/programme.html.twig", "/var/www/html/harmony/templates/home/programme.html.twig");
    }
}
