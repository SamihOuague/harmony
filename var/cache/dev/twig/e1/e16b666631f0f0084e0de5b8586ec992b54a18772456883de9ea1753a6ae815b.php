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

/* presentation/index.html.twig */
class __TwigTemplate_627bbb8f04494d10a8ac0da95a229ee757e690b5f61ab03cf3fdaeca04468d50 extends Template
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
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presentation/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "presentation/index.html.twig"));

        $this->parent = $this->loadTemplate("base2.html.twig", "presentation/index.html.twig", 1);
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

        echo "Harmony-Promotion | Presentation";
        
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
        echo "
<div class=\"container-fluid\" style=\"height: 100%; max-width: 100%;\">
    <div class=\"row\" style=\"height: 100%; overflow: hidden; max-width: 100%;\">
        <div class=\"col-3 text-center\" style=\"background-color: #8DC63F; position: relative; z-index: 0;\">
            <img style=\"margin-top: 30px;\" width=\"100\" src=\"https://harmony-promotion.com/presentation/images/rond.png\"/>
            <div>
                <button id=\"prev\" class=\"btn btn-outline-light\" style=\"width: 100px; border-radius: 50px; margin-top: 15px;\">Precedent</button>
                <button id=\"next\" class=\"btn btn-outline-light\" style=\"width: 100px; border-radius: 50px; margin-top: 15px;\">Suivant</button>
            </div>
            <div style=\"margin-top: 10px;\">
                ";
        // line 16
        if ((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 16, $this->source); })())) {
            // line 17
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 17, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 18
                echo "                        <a href=\"#";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "numero", [], "any", false, false, false, 18), "html", null, true);
                echo "\" id=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "numero", [], "any", false, false, false, 18), "html", null, true);
                echo "\" class=\"text-light page\" style=\"text-decoration: none; 
                                                            margin-top:20px; 
                                                            display: block; 
                                                            font-size: 14px;\">
                            ";
                // line 22
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "numero", [], "any", false, false, false, 22), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "titre", [], "any", false, false, false, 22)), "html", null, true);
                echo "
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "                ";
        }
        // line 26
        echo "            </div>
        </div>
        <div class=\"col-9\">
            ";
        // line 29
        if ((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 29, $this->source); })())) {
            // line 30
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 30, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                // line 31
                echo "                    <img id=\"p";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "numero", [], "any", false, false, false, 31), "html", null, true);
                echo "\" class=\"";
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["page"], "numero", [], "any", false, false, false, 31), 1))) ? ("") : ("d-none"));
                echo "\" style=\"width: 100%; position: relative; z-index: 99;\" src=\"uploads/pages/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["page"], "page", [], "any", false, false, false, 31), "html", null, true);
                echo "\"/>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "            ";
        }
        // line 34
        echo "        </div>
    <div>
</div>
<script>
    \$(document).ready((\$) => {
        let currentId = 1;
        let animateFunction = (currId) => {
            \$(\"#p\" + currId).animate({
                            width: \"+=100\",
                            marginLeft: \"-=25\"
                        }, 900, () => {
                            \$(\"#p\" + currentId).animate({
                                width: \"-=100\",
                                marginLeft: \"+=25\"
                            }, 600);
                        });
            \$(\"#\" + currId).animate({
                rotation: \"+=360\"
            }, {
                step: (now, fx) => {
                    \$(\"#\" + currId).css(\"transform\", \"rotateY(\"+ now +\"deg)\");
                },
                duration: 1500
            });
        }
        animateFunction(currentId);
        \$(\".page\").click((e) => {
            \$(\"#p\" + currentId).addClass(\"d-none\");
            \$(\"#p\" + e.currentTarget.id).removeClass(\"d-none\");
            currentId = e.currentTarget.id;
            animateFunction(currentId);
        });

        \$(\"#next\").click((e) => {
            if (currentId < \$(\".page\").length) {
                \$(\"#p\"+ currentId++).addClass(\"d-none\");
                \$(\"#p\" + currentId).removeClass(\"d-none\");
                animateFunction(currentId);
            }
        });
        \$(\"#prev\").click((e) => {
            if (currentId > 1) {
                \$(\"#p\"+ currentId--).addClass(\"d-none\");
                \$(\"#p\" + currentId).removeClass(\"d-none\");
                animateFunction(currentId);
            }
        });
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "presentation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 34,  156 => 33,  143 => 31,  138 => 30,  136 => 29,  131 => 26,  128 => 25,  117 => 22,  107 => 18,  102 => 17,  100 => 16,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base2.html.twig' %}

{% block title %}Harmony-Promotion | Presentation{% endblock %}

{% block body %}

<div class=\"container-fluid\" style=\"height: 100%; max-width: 100%;\">
    <div class=\"row\" style=\"height: 100%; overflow: hidden; max-width: 100%;\">
        <div class=\"col-3 text-center\" style=\"background-color: #8DC63F; position: relative; z-index: 0;\">
            <img style=\"margin-top: 30px;\" width=\"100\" src=\"https://harmony-promotion.com/presentation/images/rond.png\"/>
            <div>
                <button id=\"prev\" class=\"btn btn-outline-light\" style=\"width: 100px; border-radius: 50px; margin-top: 15px;\">Precedent</button>
                <button id=\"next\" class=\"btn btn-outline-light\" style=\"width: 100px; border-radius: 50px; margin-top: 15px;\">Suivant</button>
            </div>
            <div style=\"margin-top: 10px;\">
                {% if (pages) %}
                    {% for page in pages %}
                        <a href=\"#{{page.numero}}\" id=\"{{page.numero}}\" class=\"text-light page\" style=\"text-decoration: none; 
                                                            margin-top:20px; 
                                                            display: block; 
                                                            font-size: 14px;\">
                            {{page.numero}} - {{page.titre|upper}}
                        </a>
                    {% endfor %}
                {% endif %}
            </div>
        </div>
        <div class=\"col-9\">
            {% if (pages) %}
                {% for page in pages %}
                    <img id=\"p{{page.numero}}\" class=\"{{(page.numero == 1) ? '' : 'd-none'}}\" style=\"width: 100%; position: relative; z-index: 99;\" src=\"uploads/pages/{{page.page}}\"/>
                {% endfor %}
            {% endif %}
        </div>
    <div>
</div>
<script>
    \$(document).ready((\$) => {
        let currentId = 1;
        let animateFunction = (currId) => {
            \$(\"#p\" + currId).animate({
                            width: \"+=100\",
                            marginLeft: \"-=25\"
                        }, 900, () => {
                            \$(\"#p\" + currentId).animate({
                                width: \"-=100\",
                                marginLeft: \"+=25\"
                            }, 600);
                        });
            \$(\"#\" + currId).animate({
                rotation: \"+=360\"
            }, {
                step: (now, fx) => {
                    \$(\"#\" + currId).css(\"transform\", \"rotateY(\"+ now +\"deg)\");
                },
                duration: 1500
            });
        }
        animateFunction(currentId);
        \$(\".page\").click((e) => {
            \$(\"#p\" + currentId).addClass(\"d-none\");
            \$(\"#p\" + e.currentTarget.id).removeClass(\"d-none\");
            currentId = e.currentTarget.id;
            animateFunction(currentId);
        });

        \$(\"#next\").click((e) => {
            if (currentId < \$(\".page\").length) {
                \$(\"#p\"+ currentId++).addClass(\"d-none\");
                \$(\"#p\" + currentId).removeClass(\"d-none\");
                animateFunction(currentId);
            }
        });
        \$(\"#prev\").click((e) => {
            if (currentId > 1) {
                \$(\"#p\"+ currentId--).addClass(\"d-none\");
                \$(\"#p\" + currentId).removeClass(\"d-none\");
                animateFunction(currentId);
            }
        });
    });
</script>
{% endblock %}
", "presentation/index.html.twig", "/home/souaguen/Bureau/harmonypresent/templates/presentation/index.html.twig");
    }
}
