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

/* news/articles.html.twig */
class __TwigTemplate_2c88eaa7a7a38650a0191a9c018804b048719cc937d21becc162241b2808ae0d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/articles.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "news/articles.html.twig"));

        // line 1
        echo "<?php
    include(\"./admin/connexion.php\");
    \$req = \$bdd->query(\"SELECT * FROM news\");
    while (\$data = \$req->fetch()) {
?>
        <div class=\"col-lg-4 d-flex justify-content-center\" style=\"margin-top: 90px;\">
            <div style=\"width: 300px; height: 400px;\">
                <img src=\"./images/<?= \$data[\"miniature\"] ?>\" alt=\"Article 1\" style=\"width: 100%;\"/>
                <div style=\"box-shadow: 5px 5px 5px #8080802e;
                            border-radius: 0px 20px 20px 20px; 
                            background-color: white; 
                            height: 250px; 
                            position: relative; 
                            top: -100px; 
                            left: 50px;
                            font-family: 'Montserrat';
                            padding: 20px;\">
                    <h3 style=\"font-weight: 600; font-size: 18px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;\"><?= \$data[\"title\"] ?></h3>
                    <br/>
                    <p style=\"hyphens: auto;\"><?= substr(\$data[\"snippet\"], 0, 60) ?>... <a style=\"color: #8FB91E; font-weight: 800; margin-left: 20px;\" href=\"view_article.php?id=<?=\$data[\"id\"]?>\">Lire plus</a></p>
                    <br/><br/>
                    <p style=\"position: absolute; bottom: 25px;\">
                        <?php 
                            \$date = new DateTime(\$data[\"created_at\"]);
                        ?>
                        <strong style=\"font-weight: 800;\"><?= \$data[\"author\"] ?></strong> | <?= \$date->format(\"d.m.Y\") ?>
                    </p>
                </div>
            </div>
        </div>
<?php
    }
    \$req->closeCursor();
?>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "news/articles.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<?php
    include(\"./admin/connexion.php\");
    \$req = \$bdd->query(\"SELECT * FROM news\");
    while (\$data = \$req->fetch()) {
?>
        <div class=\"col-lg-4 d-flex justify-content-center\" style=\"margin-top: 90px;\">
            <div style=\"width: 300px; height: 400px;\">
                <img src=\"./images/<?= \$data[\"miniature\"] ?>\" alt=\"Article 1\" style=\"width: 100%;\"/>
                <div style=\"box-shadow: 5px 5px 5px #8080802e;
                            border-radius: 0px 20px 20px 20px; 
                            background-color: white; 
                            height: 250px; 
                            position: relative; 
                            top: -100px; 
                            left: 50px;
                            font-family: 'Montserrat';
                            padding: 20px;\">
                    <h3 style=\"font-weight: 600; font-size: 18px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;\"><?= \$data[\"title\"] ?></h3>
                    <br/>
                    <p style=\"hyphens: auto;\"><?= substr(\$data[\"snippet\"], 0, 60) ?>... <a style=\"color: #8FB91E; font-weight: 800; margin-left: 20px;\" href=\"view_article.php?id=<?=\$data[\"id\"]?>\">Lire plus</a></p>
                    <br/><br/>
                    <p style=\"position: absolute; bottom: 25px;\">
                        <?php 
                            \$date = new DateTime(\$data[\"created_at\"]);
                        ?>
                        <strong style=\"font-weight: 800;\"><?= \$data[\"author\"] ?></strong> | <?= \$date->format(\"d.m.Y\") ?>
                    </p>
                </div>
            </div>
        </div>
<?php
    }
    \$req->closeCursor();
?>", "news/articles.html.twig", "/home/souaguen/Bureau/harmonypresent/templates/news/articles.html.twig");
    }
}
