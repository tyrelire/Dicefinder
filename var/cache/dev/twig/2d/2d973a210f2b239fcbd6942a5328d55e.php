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

/* footer/policy.html.twig */
class __TwigTemplate_390287497ca506d271e3d5b705472e03 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/policy.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/policy.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "footer/policy.html.twig", 1);
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

        yield "Politique de Confidentialité | DiceFinder";
        
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
            <h1 class=\"text-4xl font-extrabold sm:text-5xl\">Politique de Confidentialité</h1>
            <p class=\"mt-4 text-lg text-gray-400\">Dernière mise à jour : 05/10/2024</p>
        </div>

        <div class=\"mt-12 space-y-12\">
            <section>
                <h2 class=\"text-3xl font-bold text-white\">1. Responsable du traitement</h2>
                <p class=\"mt-4 text-gray-400\">
                    Le responsable du traitement des données est DiceFinder. Pour toute question concernant la collecte ou l’utilisation de vos données, vous pouvez nous contacter à l'adresse suivante : 
                    <a href=\"mailto:contact@dicefinder.com\" class=\"text-indigo-500 hover:text-indigo-300\">contact@dicefinder.com</a>.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">2. Données collectées</h2>
                <p class=\"mt-4 text-gray-400\">Nous collectons différentes catégories de données, notamment :</p>
                <ul class=\"mt-4 space-y-2 text-gray-400 list-disc list-inside\">
                    <li><strong>Données d'inscription :</strong> nom d'utilisateur, adresse e-mail, mot de passe.</li>
                    <li><strong>Données de navigation :</strong> adresse IP, type de navigateur, informations relatives à l'utilisation du site.</li>
                    <li><strong>Données d'abonnement :</strong> informations liées aux abonnements VIP, y compris les données de paiement.</li>
                    <li><strong>Contenus utilisateurs :</strong> messages, commentaires, et autres contenus publiés sur la plateforme.</li>
                </ul>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">3. Finalités de la collecte</h2>
                <p class=\"mt-4 text-gray-400\">Les données collectées sont utilisées pour :</p>
                <ul class=\"mt-4 space-y-2 text-gray-400 list-disc list-inside\">
                    <li><strong>Gestion des comptes utilisateurs :</strong> création et gestion des comptes sur DiceFinder.</li>
                    <li><strong>Fourniture des services :</strong> accès aux fonctionnalités de la plateforme, y compris les fonctionnalités premium.</li>
                    <li><strong>Amélioration de l'expérience utilisateur :</strong> analyse des données de navigation pour améliorer nos services.</li>
                    <li><strong>Communication :</strong> envoi d'informations concernant les mises à jour, événements ou demandes.</li>
                    <li><strong>Sécurité :</strong> prévention des abus et des fraudes pour assurer la sécurité de la plateforme.</li>
                </ul>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">4. Partage des données</h2>
                <p class=\"mt-4 text-gray-400\">
                    Nous ne vendons ni ne louons vos données personnelles à des tiers. Nous pouvons toutefois partager vos données avec des prestataires de services tiers, notamment :
                </p>
                <ul class=\"mt-4 space-y-2 text-gray-400 list-disc list-inside\">
                    <li><strong>Prestataires de paiement :</strong> pour gérer les paiements liés aux abonnements.</li>
                    <li><strong>Prestataires techniques :</strong> pour l'hébergement et la maintenance de la plateforme.</li>
                </ul>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">5. Conservation des données</h2>
                <p class=\"mt-4 text-gray-400\">
                    Vos données sont conservées aussi longtemps que nécessaire pour fournir nos services et conformément à la loi applicable. Les données de compte sont conservées tant que le compte est actif. En cas de suppression du compte, certaines données peuvent être conservées à des fins légales ou de sécurité pendant une durée limitée.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">6. Sécurité des données</h2>
                <p class=\"mt-4 text-gray-400\">
                    Nous mettons en œuvre des mesures techniques et organisationnelles pour protéger vos données contre tout accès non autorisé, toute divulgation, modification ou destruction. Les données sensibles, comme les informations de paiement, sont traitées de manière sécurisée par nos prestataires.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">7. Vos droits</h2>
                <p class=\"mt-4 text-gray-400\">Conformément à la réglementation en vigueur, vous disposez des droits suivants :</p>
                <ul class=\"mt-4 space-y-2 text-gray-400 list-disc list-inside\">
                    <li><strong>Droit d'accès :</strong> obtenir une copie des données personnelles que nous détenons.</li>
                    <li><strong>Droit de rectification :</strong> corriger des données inexactes ou incomplètes.</li>
                    <li><strong>Droit à l'effacement :</strong> demander la suppression de vos données, sous réserve des obligations légales.</li>
                    <li><strong>Droit d'opposition :</strong> s'opposer au traitement de vos données dans certains cas.</li>
                    <li><strong>Droit à la portabilité :</strong> recevoir vos données dans un format structuré.</li>
                </ul>
                <p class=\"mt-4 text-gray-400\">
                    Pour exercer ces droits, vous pouvez nous contacter à <a href=\"mailto:contact@dicefinder.com\" class=\"text-indigo-500 hover:text-indigo-300\">contact@dicefinder.com</a>.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">8. Cookies</h2>
                <p class=\"mt-4 text-gray-400\">
                    DiceFinder utilise des cookies pour améliorer votre expérience sur le site, analyser les interactions et fournir des fonctionnalités sociales. Vous pouvez paramétrer votre navigateur pour refuser les cookies, mais cela pourrait limiter certaines fonctionnalités du site.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">9. Modifications de la politique de confidentialité</h2>
                <p class=\"mt-4 text-gray-400\">
                    Nous pouvons mettre à jour cette politique de confidentialité pour refléter les changements dans nos pratiques ou les exigences légales. Nous vous informerons de toute modification importante via notre site ou par e-mail.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">10. Contact</h2>
                <p class=\"mt-4 text-gray-400\">
                    Pour toute question ou préoccupation concernant cette politique de confidentialité, vous pouvez nous contacter à 
                    <a href=\"mailto:contact@dicefinder.com\" class=\"text-indigo-500 hover:text-indigo-300\">contact@dicefinder.com</a>.
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
        return "footer/policy.html.twig";
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

{% block title %}Politique de Confidentialité | DiceFinder{% endblock %}

{% block body %}
<div class=\"bg-gray-900 text-white py-16 px-4 sm:px-6 lg:px-8\">
    <div class=\"max-w-7xl mx-auto\">
        <div class=\"text-center\">
            <h1 class=\"text-4xl font-extrabold sm:text-5xl\">Politique de Confidentialité</h1>
            <p class=\"mt-4 text-lg text-gray-400\">Dernière mise à jour : 05/10/2024</p>
        </div>

        <div class=\"mt-12 space-y-12\">
            <section>
                <h2 class=\"text-3xl font-bold text-white\">1. Responsable du traitement</h2>
                <p class=\"mt-4 text-gray-400\">
                    Le responsable du traitement des données est DiceFinder. Pour toute question concernant la collecte ou l’utilisation de vos données, vous pouvez nous contacter à l'adresse suivante : 
                    <a href=\"mailto:contact@dicefinder.com\" class=\"text-indigo-500 hover:text-indigo-300\">contact@dicefinder.com</a>.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">2. Données collectées</h2>
                <p class=\"mt-4 text-gray-400\">Nous collectons différentes catégories de données, notamment :</p>
                <ul class=\"mt-4 space-y-2 text-gray-400 list-disc list-inside\">
                    <li><strong>Données d'inscription :</strong> nom d'utilisateur, adresse e-mail, mot de passe.</li>
                    <li><strong>Données de navigation :</strong> adresse IP, type de navigateur, informations relatives à l'utilisation du site.</li>
                    <li><strong>Données d'abonnement :</strong> informations liées aux abonnements VIP, y compris les données de paiement.</li>
                    <li><strong>Contenus utilisateurs :</strong> messages, commentaires, et autres contenus publiés sur la plateforme.</li>
                </ul>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">3. Finalités de la collecte</h2>
                <p class=\"mt-4 text-gray-400\">Les données collectées sont utilisées pour :</p>
                <ul class=\"mt-4 space-y-2 text-gray-400 list-disc list-inside\">
                    <li><strong>Gestion des comptes utilisateurs :</strong> création et gestion des comptes sur DiceFinder.</li>
                    <li><strong>Fourniture des services :</strong> accès aux fonctionnalités de la plateforme, y compris les fonctionnalités premium.</li>
                    <li><strong>Amélioration de l'expérience utilisateur :</strong> analyse des données de navigation pour améliorer nos services.</li>
                    <li><strong>Communication :</strong> envoi d'informations concernant les mises à jour, événements ou demandes.</li>
                    <li><strong>Sécurité :</strong> prévention des abus et des fraudes pour assurer la sécurité de la plateforme.</li>
                </ul>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">4. Partage des données</h2>
                <p class=\"mt-4 text-gray-400\">
                    Nous ne vendons ni ne louons vos données personnelles à des tiers. Nous pouvons toutefois partager vos données avec des prestataires de services tiers, notamment :
                </p>
                <ul class=\"mt-4 space-y-2 text-gray-400 list-disc list-inside\">
                    <li><strong>Prestataires de paiement :</strong> pour gérer les paiements liés aux abonnements.</li>
                    <li><strong>Prestataires techniques :</strong> pour l'hébergement et la maintenance de la plateforme.</li>
                </ul>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">5. Conservation des données</h2>
                <p class=\"mt-4 text-gray-400\">
                    Vos données sont conservées aussi longtemps que nécessaire pour fournir nos services et conformément à la loi applicable. Les données de compte sont conservées tant que le compte est actif. En cas de suppression du compte, certaines données peuvent être conservées à des fins légales ou de sécurité pendant une durée limitée.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">6. Sécurité des données</h2>
                <p class=\"mt-4 text-gray-400\">
                    Nous mettons en œuvre des mesures techniques et organisationnelles pour protéger vos données contre tout accès non autorisé, toute divulgation, modification ou destruction. Les données sensibles, comme les informations de paiement, sont traitées de manière sécurisée par nos prestataires.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">7. Vos droits</h2>
                <p class=\"mt-4 text-gray-400\">Conformément à la réglementation en vigueur, vous disposez des droits suivants :</p>
                <ul class=\"mt-4 space-y-2 text-gray-400 list-disc list-inside\">
                    <li><strong>Droit d'accès :</strong> obtenir une copie des données personnelles que nous détenons.</li>
                    <li><strong>Droit de rectification :</strong> corriger des données inexactes ou incomplètes.</li>
                    <li><strong>Droit à l'effacement :</strong> demander la suppression de vos données, sous réserve des obligations légales.</li>
                    <li><strong>Droit d'opposition :</strong> s'opposer au traitement de vos données dans certains cas.</li>
                    <li><strong>Droit à la portabilité :</strong> recevoir vos données dans un format structuré.</li>
                </ul>
                <p class=\"mt-4 text-gray-400\">
                    Pour exercer ces droits, vous pouvez nous contacter à <a href=\"mailto:contact@dicefinder.com\" class=\"text-indigo-500 hover:text-indigo-300\">contact@dicefinder.com</a>.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">8. Cookies</h2>
                <p class=\"mt-4 text-gray-400\">
                    DiceFinder utilise des cookies pour améliorer votre expérience sur le site, analyser les interactions et fournir des fonctionnalités sociales. Vous pouvez paramétrer votre navigateur pour refuser les cookies, mais cela pourrait limiter certaines fonctionnalités du site.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">9. Modifications de la politique de confidentialité</h2>
                <p class=\"mt-4 text-gray-400\">
                    Nous pouvons mettre à jour cette politique de confidentialité pour refléter les changements dans nos pratiques ou les exigences légales. Nous vous informerons de toute modification importante via notre site ou par e-mail.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">10. Contact</h2>
                <p class=\"mt-4 text-gray-400\">
                    Pour toute question ou préoccupation concernant cette politique de confidentialité, vous pouvez nous contacter à 
                    <a href=\"mailto:contact@dicefinder.com\" class=\"text-indigo-500 hover:text-indigo-300\">contact@dicefinder.com</a>.
                </p>
            </section>
        </div>
    </div>
</div>
{% endblock %}
", "footer/policy.html.twig", "/home/benjamin/Dicefinder/templates/footer/policy.html.twig");
    }
}
