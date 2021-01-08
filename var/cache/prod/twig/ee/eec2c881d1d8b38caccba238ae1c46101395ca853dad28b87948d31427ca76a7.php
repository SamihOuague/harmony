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
class __TwigTemplate_dd930d3bf58a26df077a0c16d140a96afde66df079aeecacd97ec080b50884ec extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo "Hello HomeController!";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
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
        if (($context["pages"] ?? null)) {
            // line 17
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
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
        if (($context["pages"] ?? null)) {
            // line 30
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["pages"] ?? null));
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
        return array (  129 => 34,  126 => 33,  113 => 31,  108 => 30,  106 => 29,  101 => 26,  98 => 25,  87 => 22,  77 => 18,  72 => 17,  70 => 16,  58 => 6,  54 => 5,  47 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "home/index.html.twig", "/home/souaguen/Bureau/harmonypresent/templates/home/index.html.twig");
    }
}
