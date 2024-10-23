<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* footer/faq.html.twig */
class __TwigTemplate_c2e5225f4d0bc6d3a458da93173e39ec extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/faq.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/faq.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "footer/faq.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "FAQ | DiceFinder";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"max-w-4xl mx-auto py-10\">
    <h1 class=\"text-4xl font-bold text-center text-white mb-8\">FAQ - DiceFinder</h1>

    <div class=\"space-y-8\">
        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Qu'est-ce que DiceFinder ?</h2>
            <p class=\"mt-2 text-white\">DiceFinder est une plateforme dédiée aux joueurs et maîtres de jeu (MJ) pour les reconnecter et faciliter la création et la gestion de parties de jeu de rôle. Nous offrons un espace où les passionnés peuvent trouver des joueurs, organiser des parties, et accéder à des outils pour enrichir leurs expériences de jeu.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Comment trouver un MJ ou des joueurs sur DiceFinder ?</h2>
            <p class=\"mt-2 text-white\">En version 0.1, les joueurs peuvent parcourir les parties créées par les MJ et demander à les rejoindre. Chaque partie a un nombre de participants maximum, des prérequis, un style de jeu, et un synopsis. Les MJ peuvent accepter ou refuser les demandes des joueurs.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Comment créer une partie en tant que MJ ?</h2>
            <p class=\"mt-2 text-white\">Les MJ peuvent créer une partie dans l'onglet \"Mes Parties\" en spécifiant le nombre de participants maximum, les prérequis, le style de jeu (fantasy, science-fiction, horreur, etc.), et en ajoutant une image, un synopsis, ainsi que des instructions pour les joueurs.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Est-ce que DiceFinder est gratuit ?</h2>
            <p class=\"mt-2 text-white\">Oui, la version actuelle (0.1) est entièrement gratuite. Des fonctionnalités supplémentaires comme des abonnements VIP seront introduites en même temps que de nouveaux systèmes dans de futures mises à jour.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Quels types de jeux de rôle puis-je organiser sur DiceFinder ?</h2>
            <p class=\"mt-2 text-white\">Vous pouvez créer et organiser n'importe quel type de jeu de rôle. DiceFinder vous permet de spécifier le style du jeu, les prérequis, et d’ajouter des détails sur l'univers du jeu pour attirer des joueurs qui correspondent à votre vision. Seuls les jeux de rôle +18 sont actuellement interdits sur DiceFinder.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Comment rejoindre une partie en tant que joueur ?</h2>
            <p class=\"mt-2 text-white\">Les joueurs peuvent parcourir les JDR disponibles depuis la section \"Les Univers\" et demander à rejoindre ceux qui les intéressent. Le MJ examinera ensuite la demande et pourra l'accepter ou la refuser selon les critères définis.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Puis-je créer des parties privées ?</h2>
            <p class=\"mt-2 text-white\">En version 0.1, les parties sont publiques, mais les MJ peuvent définir des prérequis spécifiques pour restreindre l'accès à certains types de joueurs. Les options de parties privées seront développées dans les futures mises à jour.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Puis-je organiser des campagnes longues ou des one-shots ?</h2>
            <p class=\"mt-2 text-white\">Oui, DiceFinder vous permet de créer des parties uniques (one-shots) ou de lancer des campagnes longues en fonction de vos préférences en tant que MJ.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Comment est modérée la communauté sur DiceFinder ?</h2>
            <p class=\"mt-2 text-white\">Actuellement, DiceFinder est modéré par une équipe pour garantir un environnement sain et respectueux. Les joueurs et MJ peuvent signaler tout comportement inapproprié directement sur la plateforme ou via Discord.</p>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "footer/faq.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}FAQ | DiceFinder{% endblock %}

{% block body %}
<div class=\"max-w-4xl mx-auto py-10\">
    <h1 class=\"text-4xl font-bold text-center text-white mb-8\">FAQ - DiceFinder</h1>

    <div class=\"space-y-8\">
        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Qu'est-ce que DiceFinder ?</h2>
            <p class=\"mt-2 text-white\">DiceFinder est une plateforme dédiée aux joueurs et maîtres de jeu (MJ) pour les reconnecter et faciliter la création et la gestion de parties de jeu de rôle. Nous offrons un espace où les passionnés peuvent trouver des joueurs, organiser des parties, et accéder à des outils pour enrichir leurs expériences de jeu.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Comment trouver un MJ ou des joueurs sur DiceFinder ?</h2>
            <p class=\"mt-2 text-white\">En version 0.1, les joueurs peuvent parcourir les parties créées par les MJ et demander à les rejoindre. Chaque partie a un nombre de participants maximum, des prérequis, un style de jeu, et un synopsis. Les MJ peuvent accepter ou refuser les demandes des joueurs.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Comment créer une partie en tant que MJ ?</h2>
            <p class=\"mt-2 text-white\">Les MJ peuvent créer une partie dans l'onglet \"Mes Parties\" en spécifiant le nombre de participants maximum, les prérequis, le style de jeu (fantasy, science-fiction, horreur, etc.), et en ajoutant une image, un synopsis, ainsi que des instructions pour les joueurs.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Est-ce que DiceFinder est gratuit ?</h2>
            <p class=\"mt-2 text-white\">Oui, la version actuelle (0.1) est entièrement gratuite. Des fonctionnalités supplémentaires comme des abonnements VIP seront introduites en même temps que de nouveaux systèmes dans de futures mises à jour.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Quels types de jeux de rôle puis-je organiser sur DiceFinder ?</h2>
            <p class=\"mt-2 text-white\">Vous pouvez créer et organiser n'importe quel type de jeu de rôle. DiceFinder vous permet de spécifier le style du jeu, les prérequis, et d’ajouter des détails sur l'univers du jeu pour attirer des joueurs qui correspondent à votre vision. Seuls les jeux de rôle +18 sont actuellement interdits sur DiceFinder.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Comment rejoindre une partie en tant que joueur ?</h2>
            <p class=\"mt-2 text-white\">Les joueurs peuvent parcourir les JDR disponibles depuis la section \"Les Univers\" et demander à rejoindre ceux qui les intéressent. Le MJ examinera ensuite la demande et pourra l'accepter ou la refuser selon les critères définis.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Puis-je créer des parties privées ?</h2>
            <p class=\"mt-2 text-white\">En version 0.1, les parties sont publiques, mais les MJ peuvent définir des prérequis spécifiques pour restreindre l'accès à certains types de joueurs. Les options de parties privées seront développées dans les futures mises à jour.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Puis-je organiser des campagnes longues ou des one-shots ?</h2>
            <p class=\"mt-2 text-white\">Oui, DiceFinder vous permet de créer des parties uniques (one-shots) ou de lancer des campagnes longues en fonction de vos préférences en tant que MJ.</p>
        </div>

        <div>
            <h2 class=\"text-2xl font-semibold text-gray-400\">Comment est modérée la communauté sur DiceFinder ?</h2>
            <p class=\"mt-2 text-white\">Actuellement, DiceFinder est modéré par une équipe pour garantir un environnement sain et respectueux. Les joueurs et MJ peuvent signaler tout comportement inapproprié directement sur la plateforme ou via Discord.</p>
        </div>
    </div>
</div>
{% endblock %}
", "footer/faq.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\footer\\faq.html.twig");
    }
}
