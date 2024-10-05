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

/* footer/cgu.html.twig */
class __TwigTemplate_b50b6d7b0d54c9dd8e859da4a1348671 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/cgu.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/cgu.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "footer/cgu.html.twig", 1);
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

        yield "Conditions Générales d'Utilisation | DiceFinder";
        
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
        yield "<div class=\"bg-gray-900 text-white py-16 px-4 sm:px-6 lg:px-8\">
    <div class=\"max-w-7xl mx-auto\">
        <div class=\"text-center\">
            <h1 class=\"text-4xl font-extrabold sm:text-5xl\">Conditions Générales d'Utilisation</h1>
            <p class=\"mt-4 text-lg\">Dernière mise à jour : [Date]</p>
        </div>
        <div class=\"mt-12 space-y-8\">
            <section>
                <h2 class=\"text-2xl font-bold\">1. Introduction</h2>
                <p class=\"mt-2 text-gray-400\">
                    Bienvenue sur DiceFinder ! Ces conditions générales d'utilisation (les \"CGU\") régissent l'utilisation de notre plateforme, disponible à l'adresse suivante : <a href=\"https://dicefinder.com\" class=\"text-indigo-500\">https://dicefinder.com</a>. En utilisant notre site, vous acceptez les présentes CGU dans leur intégralité. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser notre service.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">2. Objet du Service</h2>
                <p class=\"mt-2 text-gray-400\">
                    DiceFinder est une plateforme permettant de connecter les joueurs et les maîtres de jeu de jeux de rôle. Les utilisateurs peuvent créer des parties, rejoindre des campagnes et participer à des activités liées aux jeux de rôle.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">3. Accès et Utilisation</h2>
                <p class=\"mt-2 text-gray-400\">
                    L'accès au site est gratuit pour les fonctionnalités de base. Certaines fonctionnalités peuvent nécessiter un abonnement payant (VIP). L’utilisateur s’engage à utiliser DiceFinder de manière responsable, sans porter atteinte aux autres utilisateurs ou au fonctionnement du site.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">4. Comptes Utilisateurs</h2>
                <p class=\"mt-2 text-gray-400\">
                    Pour utiliser certaines fonctionnalités de DiceFinder, les utilisateurs doivent créer un compte. Vous êtes responsable de la confidentialité de vos identifiants et de toute activité réalisée sous votre compte. DiceFinder se réserve le droit de supprimer un compte qui ne respecte pas les présentes CGU.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">5. Contenu Utilisateur</h2>
                <p class=\"mt-2 text-gray-400\">
                    Les utilisateurs peuvent publier du contenu, comme des scénarios, des discussions, ou des commentaires. Vous garantissez que ce contenu ne viole aucun droit de tiers et qu'il respecte les lois en vigueur. DiceFinder se réserve le droit de modérer, modifier ou supprimer tout contenu jugé inapproprié.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">6. Propriété Intellectuelle</h2>
                <p class=\"mt-2 text-gray-400\">
                    Tous les contenus présents sur DiceFinder (textes, images, logos, etc.) sont protégés par les droits de propriété intellectuelle. Vous n'êtes pas autorisé à reproduire, distribuer ou utiliser ces contenus sans l'autorisation expresse de DiceFinder.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">7. Abonnements et Paiements</h2>
                <p class=\"mt-2 text-gray-400\">
                    L’accès à certaines fonctionnalités premium de DiceFinder nécessite un abonnement (VIP). Les conditions et les prix des abonnements sont précisés sur le site. Les paiements sont traités de manière sécurisée et sont non remboursables, sauf indication contraire.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">8. Responsabilités</h2>
                <p class=\"mt-2 text-gray-400\">
                    DiceFinder s'efforce de fournir un service fiable et sécurisé, mais ne peut garantir une disponibilité continue ni l'absence d'erreurs. DiceFinder ne peut être tenu responsable des dommages directs ou indirects résultant de l'utilisation du site.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">9. Modifications des CGU</h2>
                <p class=\"mt-2 text-gray-400\">
                    DiceFinder se réserve le droit de modifier les présentes CGU à tout moment. Les utilisateurs seront informés des modifications, et l'utilisation continue de la plateforme après modification vaudra acceptation des nouvelles conditions.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">10. Résiliation</h2>
                <p class=\"mt-2 text-gray-400\">
                    DiceFinder peut suspendre ou résilier votre accès au site en cas de non-respect des présentes CGU. Vous pouvez également résilier votre compte à tout moment en nous contactant.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">11. Données Personnelles</h2>
                <p class=\"mt-2 text-gray-400\">
                    Nous nous engageons à protéger vos données personnelles conformément à notre Politique de Confidentialité, disponible sur le site. En utilisant DiceFinder, vous consentez à la collecte et au traitement de vos données conformément à cette politique.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">12. Droit Applicable</h2>
                <p class=\"mt-2 text-gray-400\">
                    Les présentes CGU sont régies par le droit français. En cas de litige, les parties conviennent de se rapprocher pour trouver une solution amiable avant toute action judiciaire.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">13. Contact</h2>
                <p class=\"mt-2 text-gray-400\">
                    Pour toute question concernant ces CGU ou l'utilisation de DiceFinder, vous pouvez nous contacter à l'adresse suivante : <a href=\"mailto:contact@dicefinder.com\" class=\"text-indigo-500\">contact@dicefinder.com</a>.
                </p>
            </section>
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
        return "footer/cgu.html.twig";
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

{% block title %}Conditions Générales d'Utilisation | DiceFinder{% endblock %}

{% block body %}
<div class=\"bg-gray-900 text-white py-16 px-4 sm:px-6 lg:px-8\">
    <div class=\"max-w-7xl mx-auto\">
        <div class=\"text-center\">
            <h1 class=\"text-4xl font-extrabold sm:text-5xl\">Conditions Générales d'Utilisation</h1>
            <p class=\"mt-4 text-lg\">Dernière mise à jour : [Date]</p>
        </div>
        <div class=\"mt-12 space-y-8\">
            <section>
                <h2 class=\"text-2xl font-bold\">1. Introduction</h2>
                <p class=\"mt-2 text-gray-400\">
                    Bienvenue sur DiceFinder ! Ces conditions générales d'utilisation (les \"CGU\") régissent l'utilisation de notre plateforme, disponible à l'adresse suivante : <a href=\"https://dicefinder.com\" class=\"text-indigo-500\">https://dicefinder.com</a>. En utilisant notre site, vous acceptez les présentes CGU dans leur intégralité. Si vous n'acceptez pas ces conditions, veuillez ne pas utiliser notre service.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">2. Objet du Service</h2>
                <p class=\"mt-2 text-gray-400\">
                    DiceFinder est une plateforme permettant de connecter les joueurs et les maîtres de jeu de jeux de rôle. Les utilisateurs peuvent créer des parties, rejoindre des campagnes et participer à des activités liées aux jeux de rôle.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">3. Accès et Utilisation</h2>
                <p class=\"mt-2 text-gray-400\">
                    L'accès au site est gratuit pour les fonctionnalités de base. Certaines fonctionnalités peuvent nécessiter un abonnement payant (VIP). L’utilisateur s’engage à utiliser DiceFinder de manière responsable, sans porter atteinte aux autres utilisateurs ou au fonctionnement du site.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">4. Comptes Utilisateurs</h2>
                <p class=\"mt-2 text-gray-400\">
                    Pour utiliser certaines fonctionnalités de DiceFinder, les utilisateurs doivent créer un compte. Vous êtes responsable de la confidentialité de vos identifiants et de toute activité réalisée sous votre compte. DiceFinder se réserve le droit de supprimer un compte qui ne respecte pas les présentes CGU.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">5. Contenu Utilisateur</h2>
                <p class=\"mt-2 text-gray-400\">
                    Les utilisateurs peuvent publier du contenu, comme des scénarios, des discussions, ou des commentaires. Vous garantissez que ce contenu ne viole aucun droit de tiers et qu'il respecte les lois en vigueur. DiceFinder se réserve le droit de modérer, modifier ou supprimer tout contenu jugé inapproprié.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">6. Propriété Intellectuelle</h2>
                <p class=\"mt-2 text-gray-400\">
                    Tous les contenus présents sur DiceFinder (textes, images, logos, etc.) sont protégés par les droits de propriété intellectuelle. Vous n'êtes pas autorisé à reproduire, distribuer ou utiliser ces contenus sans l'autorisation expresse de DiceFinder.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">7. Abonnements et Paiements</h2>
                <p class=\"mt-2 text-gray-400\">
                    L’accès à certaines fonctionnalités premium de DiceFinder nécessite un abonnement (VIP). Les conditions et les prix des abonnements sont précisés sur le site. Les paiements sont traités de manière sécurisée et sont non remboursables, sauf indication contraire.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">8. Responsabilités</h2>
                <p class=\"mt-2 text-gray-400\">
                    DiceFinder s'efforce de fournir un service fiable et sécurisé, mais ne peut garantir une disponibilité continue ni l'absence d'erreurs. DiceFinder ne peut être tenu responsable des dommages directs ou indirects résultant de l'utilisation du site.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">9. Modifications des CGU</h2>
                <p class=\"mt-2 text-gray-400\">
                    DiceFinder se réserve le droit de modifier les présentes CGU à tout moment. Les utilisateurs seront informés des modifications, et l'utilisation continue de la plateforme après modification vaudra acceptation des nouvelles conditions.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">10. Résiliation</h2>
                <p class=\"mt-2 text-gray-400\">
                    DiceFinder peut suspendre ou résilier votre accès au site en cas de non-respect des présentes CGU. Vous pouvez également résilier votre compte à tout moment en nous contactant.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">11. Données Personnelles</h2>
                <p class=\"mt-2 text-gray-400\">
                    Nous nous engageons à protéger vos données personnelles conformément à notre Politique de Confidentialité, disponible sur le site. En utilisant DiceFinder, vous consentez à la collecte et au traitement de vos données conformément à cette politique.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">12. Droit Applicable</h2>
                <p class=\"mt-2 text-gray-400\">
                    Les présentes CGU sont régies par le droit français. En cas de litige, les parties conviennent de se rapprocher pour trouver une solution amiable avant toute action judiciaire.
                </p>
            </section>

            <section>
                <h2 class=\"text-2xl font-bold\">13. Contact</h2>
                <p class=\"mt-2 text-gray-400\">
                    Pour toute question concernant ces CGU ou l'utilisation de DiceFinder, vous pouvez nous contacter à l'adresse suivante : <a href=\"mailto:contact@dicefinder.com\" class=\"text-indigo-500\">contact@dicefinder.com</a>.
                </p>
            </section>
        </div>
    </div>
</div>
{% endblock %}
", "footer/cgu.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\footer\\cgu.html.twig");
    }
}
