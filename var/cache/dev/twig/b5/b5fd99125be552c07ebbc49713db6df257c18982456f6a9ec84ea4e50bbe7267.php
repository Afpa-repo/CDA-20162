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

/* base.html.twig */
class __TwigTemplate_046e62fdcd6f0caf6f1d0e50d86295148d0e5c4ead60ee53c56fba3b975c4f55 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 10
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 15
        echo "
        ";
        // line 16
        $this->displayBlock('javascripts', $context, $blocks);
        // line 19
        echo "    </head>
    <body>
    <div class=\"bg-image fond\">
        <div class=\"container\">
            <div class=\"bg-image fond2\">

                <header>
                    <!--  Logo en liens pour la page daccueil  -->
                    <div class=\"row\">
                        <div class=\"col-3 logo\">
                            <a href=\"/\"><img src=\"assets/img/HEADER/logo%20village%20green.png\" alt=\"logo\" title=\"logo\"></a>
                        </div>

                        <!--  Premi??re bande  -->
                        <div class=\"col-9\">
                            <div class=\"row bandeUn\">
                                <div class=\"col-5\"></div>
                                <div class=\"col\">
                                    <span class=\"bandeUnEspace\"><a href=\"views/infos.php\">Infos</a></span>
                                    <span class=\"bandeUnEspace\"><a href=\"/espace_client\">Espace client</a></span>
                                    <span class=\"bandeUnEspace\"><a href=\"views/panier.php\"><img src=\"assets/img/HEADER/picto%20panier.png\" alt=\"pictopanier\" title=\"pictopanier\"></a></span>
                                    <span class=\"bandeUnEspace\"><a href=\"views/.php\"><img src=\"assets/img/HEADER/picto%20pays.png\" alt=\"pictopays\" title=\"pictopays\"></a></span>
                                </div>
                            </div>

                            <!--  Deuxi??me bande  -->
                            <div class=\"row bandeDeux\">
                                <div class=\"col\">
                                    <span class=\"bandeDeuxEspace\"><a href=\"views/produits.php\">Produits</a></span>
                                    <span class=\"bandeDeuxEspace\"><a href=\"views/service.php\">Service</a></span>
                                    <span class=\"bandeDeuxEspace\"><a href=\"views/aide.php\">Aide</a></span>
                                    <span class=\"bandeDeuxEspace\"><a href=\"views/aPropos.php\">A propos</a></span>
                                </div>
                            </div>

                            <!--  Troisi??me bande  -->
                            <div class=\"row bandeTrois\">
                                <div class=\"col\">
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Guit/Bass</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Batteries</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Clavier</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Studio</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Sono</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Eclairage</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">DJ</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Cases</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Accessoires</a></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </header>
                ";
        // line 72
        $this->displayBlock('body', $context, $blocks);
        // line 73
        echo "            </div>
                <!--  Footer -->
                <div class=\"footer\">
                    <img src=\"assets/img/FOOTER/footer%20SIMPLE.png\" alt=\"footer\" title=\"footer\">
                </div>
            </div>
            </div>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 11
        echo "            ";
        // line 12
        echo "            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"assets/css/style.css\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 17
        echo "            ";
        // line 18
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 72
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  209 => 72,  199 => 18,  197 => 17,  187 => 16,  175 => 12,  173 => 11,  163 => 10,  144 => 7,  124 => 73,  122 => 72,  67 => 19,  65 => 16,  62 => 15,  59 => 10,  55 => 7,  47 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <title>{% block title %}Accueil{% endblock %}</title>
        {# Run `composer require symfony/webpack-encore-bundle`
           and uncomment the following Encore helpers to start using Symfony UX #}
        {% block stylesheets %}
            {#{{ encore_entry_link_tags('app') }}#}
            <link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x\" crossorigin=\"anonymous\">
            <link rel=\"stylesheet\" href=\"assets/css/style.css\">
        {% endblock %}

        {% block javascripts %}
            {#{{ encore_entry_script_tags('app') }}#}
        {% endblock %}
    </head>
    <body>
    <div class=\"bg-image fond\">
        <div class=\"container\">
            <div class=\"bg-image fond2\">

                <header>
                    <!--  Logo en liens pour la page daccueil  -->
                    <div class=\"row\">
                        <div class=\"col-3 logo\">
                            <a href=\"/\"><img src=\"assets/img/HEADER/logo%20village%20green.png\" alt=\"logo\" title=\"logo\"></a>
                        </div>

                        <!--  Premi??re bande  -->
                        <div class=\"col-9\">
                            <div class=\"row bandeUn\">
                                <div class=\"col-5\"></div>
                                <div class=\"col\">
                                    <span class=\"bandeUnEspace\"><a href=\"views/infos.php\">Infos</a></span>
                                    <span class=\"bandeUnEspace\"><a href=\"/espace_client\">Espace client</a></span>
                                    <span class=\"bandeUnEspace\"><a href=\"views/panier.php\"><img src=\"assets/img/HEADER/picto%20panier.png\" alt=\"pictopanier\" title=\"pictopanier\"></a></span>
                                    <span class=\"bandeUnEspace\"><a href=\"views/.php\"><img src=\"assets/img/HEADER/picto%20pays.png\" alt=\"pictopays\" title=\"pictopays\"></a></span>
                                </div>
                            </div>

                            <!--  Deuxi??me bande  -->
                            <div class=\"row bandeDeux\">
                                <div class=\"col\">
                                    <span class=\"bandeDeuxEspace\"><a href=\"views/produits.php\">Produits</a></span>
                                    <span class=\"bandeDeuxEspace\"><a href=\"views/service.php\">Service</a></span>
                                    <span class=\"bandeDeuxEspace\"><a href=\"views/aide.php\">Aide</a></span>
                                    <span class=\"bandeDeuxEspace\"><a href=\"views/aPropos.php\">A propos</a></span>
                                </div>
                            </div>

                            <!--  Troisi??me bande  -->
                            <div class=\"row bandeTrois\">
                                <div class=\"col\">
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Guit/Bass</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Batteries</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Clavier</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Studio</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Sono</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Eclairage</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">DJ</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Cases</a></span>
                                    <span class=\"bandeTroisEspace\"><a href=\"views/.php\">Accessoires</a></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </header>
                {% block body %}{% endblock %}
            </div>
                <!--  Footer -->
                <div class=\"footer\">
                    <img src=\"assets/img/FOOTER/footer%20SIMPLE.png\" alt=\"footer\" title=\"footer\">
                </div>
            </div>
            </div>
        <script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4\" crossorigin=\"anonymous\"></script>
    </body>
</html>
", "base.html.twig", "C:\\Users\\tbhsi\\OneDrive\\Bureau\\filRougeSymfony\\templates\\base.html.twig");
    }
}
