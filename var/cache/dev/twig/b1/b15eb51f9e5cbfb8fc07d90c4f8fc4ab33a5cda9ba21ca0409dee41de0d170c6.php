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
class __TwigTemplate_75c5f42bfbb9fcf3842769a44cff402976a93533827d560f6fab1cb835f97b26 extends Template
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

        echo "Page d'accueil";
        
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
        echo "    <!--  Pub centrale  -->
    <div class=\"row pub\">
        <div class=\"col\">
            <img class=\"pubUn\" src=\"assets/img/BODY/pub%20guitare.png\" alt=\"pubguitare\" title=\"pubguitare\">
        </div>

        <div class=\"col\">
            <img class=\"pubDeux\" src=\"assets/img/BODY/banniere%20droite%20prix.png\" alt=\"bannieredroite\" title=\"bannieredroite\">
        </div>
    </div>

    <!--  Bannière centrale  -->
    <div class=\"banniereCentre\">
        <img src=\"assets/img/BODY/banniere%20centre%204%20pictos.png\" alt=\"bannierecentre\" title=\"bannierecentre\">
    </div>

    <!--  Les catégories  -->
    <div class=\"categorie\">
        <h1>Nos catégories</h1>

        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20guitare.png\" alt=\"categorieguitare\" title=\"categorieguitare\"></a>
        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20batterie.png\" alt=\"categoriebatterie\" title=\"categoriebatterie\"></a>
        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20piano.png\" alt=\"categoriepiano\" title=\"categoriepiano\"></a>
        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20micro.png\" alt=\"categoriemicro\" title=\"categoriemicro\"></a>
        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20sono.png\" alt=\"categoriesono\" title=\"categoriesono\"></a>
        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20cases.png\" alt=\"categoriecases\" title=\"categoriecases\"></a>
        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20cable.png\" alt=\"categoriecable\" title=\"categoriecable\"></a>
        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20saxo.png\" alt=\"categoriesaxo\" title=\"categoriesaxo\"></a>
    </div>

    <!--  Les meilleures ventes  -->
    <div class=\"row vente\">
        <div class=\"col-6\">
            <h1>Nos meilleures ventes</h1>

            <a href=\"views/.php\"><img src=\"assets/img/BODY/TOP%20VENTES%20guitare.png\" alt=\"topguitare\" title=\"topguitare\"></a>
            <a href=\"views/.php\"><img src=\"assets/img/BODY/TOP%20VENTES%20saxo.png\" alt=\"topsaxo\" title=\"topsaxo\"></a>
            <a href=\"views/.php\"><img src=\"assets/img/BODY/TOP%20VENTES%20piano.png\" alt=\"toppiano\" title=\"toppiano\"></a>
        </div>

        <!--  Les partenaires  -->
        <div class=\"col-6 partenaires\">
            <h1>Nos partenaires</h1>

            <a href=\"views/.php\"><img src=\"assets/img/BODY/partenaires%204%20logos.png\" alt=\"partenaires\" title=\"partenaires\"></a>
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
        return array (  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Page d'accueil{% endblock %}

{% block body %}
    <!--  Pub centrale  -->
    <div class=\"row pub\">
        <div class=\"col\">
            <img class=\"pubUn\" src=\"assets/img/BODY/pub%20guitare.png\" alt=\"pubguitare\" title=\"pubguitare\">
        </div>

        <div class=\"col\">
            <img class=\"pubDeux\" src=\"assets/img/BODY/banniere%20droite%20prix.png\" alt=\"bannieredroite\" title=\"bannieredroite\">
        </div>
    </div>

    <!--  Bannière centrale  -->
    <div class=\"banniereCentre\">
        <img src=\"assets/img/BODY/banniere%20centre%204%20pictos.png\" alt=\"bannierecentre\" title=\"bannierecentre\">
    </div>

    <!--  Les catégories  -->
    <div class=\"categorie\">
        <h1>Nos catégories</h1>

        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20guitare.png\" alt=\"categorieguitare\" title=\"categorieguitare\"></a>
        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20batterie.png\" alt=\"categoriebatterie\" title=\"categoriebatterie\"></a>
        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20piano.png\" alt=\"categoriepiano\" title=\"categoriepiano\"></a>
        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20micro.png\" alt=\"categoriemicro\" title=\"categoriemicro\"></a>
        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20sono.png\" alt=\"categoriesono\" title=\"categoriesono\"></a>
        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20cases.png\" alt=\"categoriecases\" title=\"categoriecases\"></a>
        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20cable.png\" alt=\"categoriecable\" title=\"categoriecable\"></a>
        <a href=\"views/.php\"><img class=\"categorieImg\" src=\"assets/img/BODY/CATEGORIES%20saxo.png\" alt=\"categoriesaxo\" title=\"categoriesaxo\"></a>
    </div>

    <!--  Les meilleures ventes  -->
    <div class=\"row vente\">
        <div class=\"col-6\">
            <h1>Nos meilleures ventes</h1>

            <a href=\"views/.php\"><img src=\"assets/img/BODY/TOP%20VENTES%20guitare.png\" alt=\"topguitare\" title=\"topguitare\"></a>
            <a href=\"views/.php\"><img src=\"assets/img/BODY/TOP%20VENTES%20saxo.png\" alt=\"topsaxo\" title=\"topsaxo\"></a>
            <a href=\"views/.php\"><img src=\"assets/img/BODY/TOP%20VENTES%20piano.png\" alt=\"toppiano\" title=\"toppiano\"></a>
        </div>

        <!--  Les partenaires  -->
        <div class=\"col-6 partenaires\">
            <h1>Nos partenaires</h1>

            <a href=\"views/.php\"><img src=\"assets/img/BODY/partenaires%204%20logos.png\" alt=\"partenaires\" title=\"partenaires\"></a>
        </div>
    </div>
{% endblock %}", "home/index.html.twig", "C:\\Users\\tbhsi\\OneDrive\\Bureau\\filRougeSymfony\\templates\\home\\index.html.twig");
    }
}
