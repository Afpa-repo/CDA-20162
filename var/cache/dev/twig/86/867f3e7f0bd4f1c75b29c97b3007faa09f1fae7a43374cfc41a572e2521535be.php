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

/* espace_client/index.html.twig */
class __TwigTemplate_4d5722418d01357d70d5f7b8e1d586d482edca0eae4109a685087a58e6e822b2 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_client/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "espace_client/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "espace_client/index.html.twig", 1);
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

        echo "Espace Client";
        
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
        echo "    <h1 class=\"h1Inscription\">Créez vos identifiants</h1>


    <!--  Formulaire  --!>
    <form action=\"../controllers/inscriptionForms.php\" method=\"POST\" id=\"formulaire_contact\">

        <!--  E-mail  --!>
        <div class=\"mb-3 row text-end\">
            <div class=\"col-1\"></div>
            <label for=\"email\" class=\"col-2 col-form-label\">Email</label>
            <div class=\"col-3\">
                <input type=\"text\" class=\"form-control\" id=\"email\">
            </div>
            <div class=\"col-auto\"></div>
            <div class=\"col-1\"></div>
        </div>

        <!--  Mot de passe  --!>
        <div class=\"mb-3 row text-end\">
            <div class=\"col-1\"></div>
            <label for=\"mdp\" class=\"col-2 col-form-label\">Créez votre mot de passe</label>
            <div class=\"col-3\">
                <input type=\"password\" class=\"form-control\" id=\"mdp\">
            </div>
            <label for=\"confirmMdp\" class=\"col-2 col-form-label\">Confirmez votre mot de passe</label>
            <div class=\"col-3\">
                <input type=\"password\" class=\"form-control\" id=\"confirmMdp\">
            </div>
            <div class=\"col-1\"></div>
        </div>

        <h1 class=\"h1Inscription\">Créez vos identifiants</h1>

        <!--  Prénom  --!>
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"mb-3 row text-end\">
                    <div class=\"col-1\"></div>
                    <label for=\"prenom\" class=\"col-2 col-form-label\">Prénom</label>
                    <div class=\"col\">
                        <input type=\"text\" class=\"form-control\" id=\"prenom\">
                    </div>
                </div>

                <!--  Nom  --!>
                <div class=\"mb-3 row text-end\">
                    <div class=\"col-1\"></div>
                    <label for=\"nom\" class=\"col-2 col-form-label\">Nom</label>
                    <div class=\"col\">
                        <input type=\"text\" class=\"form-control\" id=\"nom\">
                    </div>
                </div>

                <!--  Adresse  --!>
                <div class=\"mb-3 row text-end\">
                    <div class=\"col-1\"></div>
                    <label for=\"adresse\" class=\"col-2 col-form-label\">Adresse</label>
                    <div class=\"col\">
                        <input type=\"text\" class=\"form-control\" id=\"adresse\">
                    </div>
                </div>

                <!--  Complément dadresse  --!>
                <div class=\"mb-3 row text-end\">
                    <div class=\"col-1\"></div>
                    <label for=\"complementAdresse\" class=\"col-2 col-form-label\">Complément dadresse</label>
                    <div class=\"col\">
                        <input type=\"text\" class=\"form-control\" id=\"complementAdresse\">
                    </div>
                </div>

                <!--  CP  --!>
                <div class=\"mb-3 row text-end\">
                    <div class=\"col-1\"></div>
                    <label for=\"cp\" class=\"col-2 col-form-label\">Code postal</label>
                    <div class=\"col\">
                        <input type=\"number\" class=\"form-control\" id=\"cp\">
                    </div>
                </div>

                <!--  Ville  --!>
                <div class=\"mb-3 row text-end\">
                    <div class=\"col-1\"></div>
                    <label for=\"ville\" class=\"col-2 col-form-label\">Ville</label>
                    <div class=\"col\">
                        <input type=\"text\" class=\"form-control\" id=\"ville\">
                    </div>
                </div>

                <!--  Pays  --!>
                <div class=\"mb-3 row text-end\">
                    <div class=\"col-1\"></div>
                    <label for=\"pays\" class=\"col-2 col-form-label\">Pays</label>
                    <div class=\"col\">
                        <input type=\"text\" class=\"form-control\" id=\"pays\">
                    </div>
                </div>
            </div>

            <!--  Image numéro  --!>
            <div class=\"col\">
                <img src=\"../assets/img/BODY/ESPACECLIENT/cadre_numero.png\" alt=\"cadreNum\" title=\"cadreNum\">
            </div>
        </div>

        <!--  Bouton valider  --!>
        <div class=\"row\">
            <div class=\"col\"></div>
            <div class=\"col-1 m-5 rounded boutonSub\">
                <button type=\"submit\" class=\"btn\" id=\"envoie\">Valider</button>
            </div>
            <div class=\"col\"></div>

        </div>
    </form>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "espace_client/index.html.twig";
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

{% block title %}Espace Client{% endblock %}

{% block body %}
    <h1 class=\"h1Inscription\">Créez vos identifiants</h1>


    <!--  Formulaire  --!>
    <form action=\"../controllers/inscriptionForms.php\" method=\"POST\" id=\"formulaire_contact\">

        <!--  E-mail  --!>
        <div class=\"mb-3 row text-end\">
            <div class=\"col-1\"></div>
            <label for=\"email\" class=\"col-2 col-form-label\">Email</label>
            <div class=\"col-3\">
                <input type=\"text\" class=\"form-control\" id=\"email\">
            </div>
            <div class=\"col-auto\"></div>
            <div class=\"col-1\"></div>
        </div>

        <!--  Mot de passe  --!>
        <div class=\"mb-3 row text-end\">
            <div class=\"col-1\"></div>
            <label for=\"mdp\" class=\"col-2 col-form-label\">Créez votre mot de passe</label>
            <div class=\"col-3\">
                <input type=\"password\" class=\"form-control\" id=\"mdp\">
            </div>
            <label for=\"confirmMdp\" class=\"col-2 col-form-label\">Confirmez votre mot de passe</label>
            <div class=\"col-3\">
                <input type=\"password\" class=\"form-control\" id=\"confirmMdp\">
            </div>
            <div class=\"col-1\"></div>
        </div>

        <h1 class=\"h1Inscription\">Créez vos identifiants</h1>

        <!--  Prénom  --!>
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"mb-3 row text-end\">
                    <div class=\"col-1\"></div>
                    <label for=\"prenom\" class=\"col-2 col-form-label\">Prénom</label>
                    <div class=\"col\">
                        <input type=\"text\" class=\"form-control\" id=\"prenom\">
                    </div>
                </div>

                <!--  Nom  --!>
                <div class=\"mb-3 row text-end\">
                    <div class=\"col-1\"></div>
                    <label for=\"nom\" class=\"col-2 col-form-label\">Nom</label>
                    <div class=\"col\">
                        <input type=\"text\" class=\"form-control\" id=\"nom\">
                    </div>
                </div>

                <!--  Adresse  --!>
                <div class=\"mb-3 row text-end\">
                    <div class=\"col-1\"></div>
                    <label for=\"adresse\" class=\"col-2 col-form-label\">Adresse</label>
                    <div class=\"col\">
                        <input type=\"text\" class=\"form-control\" id=\"adresse\">
                    </div>
                </div>

                <!--  Complément dadresse  --!>
                <div class=\"mb-3 row text-end\">
                    <div class=\"col-1\"></div>
                    <label for=\"complementAdresse\" class=\"col-2 col-form-label\">Complément dadresse</label>
                    <div class=\"col\">
                        <input type=\"text\" class=\"form-control\" id=\"complementAdresse\">
                    </div>
                </div>

                <!--  CP  --!>
                <div class=\"mb-3 row text-end\">
                    <div class=\"col-1\"></div>
                    <label for=\"cp\" class=\"col-2 col-form-label\">Code postal</label>
                    <div class=\"col\">
                        <input type=\"number\" class=\"form-control\" id=\"cp\">
                    </div>
                </div>

                <!--  Ville  --!>
                <div class=\"mb-3 row text-end\">
                    <div class=\"col-1\"></div>
                    <label for=\"ville\" class=\"col-2 col-form-label\">Ville</label>
                    <div class=\"col\">
                        <input type=\"text\" class=\"form-control\" id=\"ville\">
                    </div>
                </div>

                <!--  Pays  --!>
                <div class=\"mb-3 row text-end\">
                    <div class=\"col-1\"></div>
                    <label for=\"pays\" class=\"col-2 col-form-label\">Pays</label>
                    <div class=\"col\">
                        <input type=\"text\" class=\"form-control\" id=\"pays\">
                    </div>
                </div>
            </div>

            <!--  Image numéro  --!>
            <div class=\"col\">
                <img src=\"../assets/img/BODY/ESPACECLIENT/cadre_numero.png\" alt=\"cadreNum\" title=\"cadreNum\">
            </div>
        </div>

        <!--  Bouton valider  --!>
        <div class=\"row\">
            <div class=\"col\"></div>
            <div class=\"col-1 m-5 rounded boutonSub\">
                <button type=\"submit\" class=\"btn\" id=\"envoie\">Valider</button>
            </div>
            <div class=\"col\"></div>

        </div>
    </form>
{% endblock %}
", "espace_client/index.html.twig", "C:\\Users\\tbhsi\\OneDrive\\Bureau\\filRougeSymfony\\templates\\espace_client\\index.html.twig");
    }
}
