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

/* footer/cgv.html.twig */
class __TwigTemplate_3a81aad4e7c2127bfbe6ef58e6e2adf5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/cgv.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/cgv.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "footer/cgv.html.twig", 1);
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

        yield "Conditions Générales de Vente | DiceFinder";
        
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
            <h1 class=\"text-4xl font-extrabold sm:text-5xl\">Conditions Générales de Vente (CGV)</h1>
            <p class=\"mt-4 text-lg text-gray-400\">Dernière mise à jour : 05/10/2024</p>
        </div>

        <div class=\"mt-12 space-y-12\">
            <section>
                <h2 class=\"text-3xl font-bold text-white\">1. Informations sur DiceFinder</h2>
                <p class=\"mt-4 text-gray-400\">
                    DiceFinder est une plateforme dédiée aux jeux de rôle, éditée par DiceFinder, située à 70 Rue Jean Jaures, 42700 Firminy. Pour toute question, vous pouvez nous contacter à : <a href=\"mailto:contact@dicefinder.com\" class=\"text-indigo-500 hover:text-indigo-300\">contact@dicefinder.com</a>.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">2. Objet des CGV</h2>
                <p class=\"mt-4 text-gray-400\">
                    Ces CGV régissent la vente des services payants proposés par DiceFinder, tels que les abonnements VIP et tout autre service premium mis à disposition via notre plateforme.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">3. Description des services</h2>
                <p class=\"mt-4 text-gray-400\">
                    DiceFinder propose des abonnements VIP permettant d'accéder à des fonctionnalités exclusives, telles que des outils avancés de création de parties et un accès prioritaire aux nouvelles fonctionnalités. Les détails de chaque offre sont disponibles sur le site <a href=\"https://dicefinder.com\" class=\"text-indigo-500 hover:text-indigo-300\">https://dicefinder.com</a>.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">4. Tarifs</h2>
                <p class=\"mt-4 text-gray-400\">
                    Les prix des abonnements et services sont indiqués en euros (€), toutes taxes comprises (TTC). DiceFinder se réserve le droit de modifier ses prix à tout moment, mais les tarifs appliqués seront ceux en vigueur au moment de la commande.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">5. Modalités de paiement</h2>
                <p class=\"mt-4 text-gray-400\">
                    Le paiement des services s'effectue en ligne via une solution de paiement sécurisée (carte bancaire, PayPal, etc.). Le paiement est exigible au moment de la souscription à l’abonnement ou lors de l'achat d'un service. Les informations de paiement sont traitées par un prestataire externe et ne sont pas conservées par DiceFinder.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">6. Droit de rétractation</h2>
                <p class=\"mt-4 text-gray-400\">
                    Conformément aux dispositions légales en vigueur, le droit de rétractation ne s'applique pas aux contenus numériques ou services immédiatement exécutés après l'achat, sauf accord contraire. En souscrivant un abonnement ou en achetant un service, vous acceptez que l'exécution commence immédiatement et renoncez donc à votre droit de rétractation.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">7. Résiliation et annulation</h2>
                <ul class=\"mt-4 space-y-2 text-gray-400 list-disc list-inside\">
                    <li>Abonnements mensuels/annuels : Vous pouvez annuler votre abonnement à tout moment depuis votre espace personnel. L’annulation prendra effet à la fin de la période en cours.</li>
                    <li>DiceFinder se réserve le droit de suspendre ou résilier un abonnement en cas de non-respect des Conditions Générales d'Utilisation (CGU) par l'utilisateur.</li>
                </ul>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">8. Responsabilité</h2>
                <p class=\"mt-4 text-gray-400\">
                    DiceFinder met tout en œuvre pour assurer la disponibilité de la plateforme et des services. Toutefois, DiceFinder ne pourra être tenu responsable de tout dommage direct ou indirect résultant de l'utilisation du site, d'une indisponibilité temporaire ou de tout autre problème technique.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">9. Données personnelles</h2>
                <p class=\"mt-4 text-gray-400\">
                    Les informations personnelles collectées lors de la souscription aux services sont traitées conformément à notre <a href=\"";
        // line 74
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer_policy");
        yield "\" class=\"text-indigo-500 hover:text-indigo-300\">Politique de Confidentialité</a>. En souscrivant à nos services, vous consentez à la collecte et au traitement de vos données selon les modalités définies dans cette politique.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">10. Propriété intellectuelle</h2>
                <p class=\"mt-4 text-gray-400\">
                    Tous les contenus et éléments mis à disposition sur la plateforme DiceFinder sont protégés par les lois sur la propriété intellectuelle. Toute reproduction, distribution, ou utilisation de ces contenus sans autorisation est interdite.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">11. Modification des CGV</h2>
                <p class=\"mt-4 text-gray-400\">
                    DiceFinder se réserve le droit de modifier les présentes CGV à tout moment. Les nouvelles conditions seront applicables aux abonnements souscrits après leur mise en ligne. Les utilisateurs seront informés de toute modification majeure.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">12. Droit applicable et litiges</h2>
                <p class=\"mt-4 text-gray-400\">
                    Les présentes CGV sont régies par le droit français. En cas de litige, les parties s'engagent à chercher une solution amiable avant toute action judiciaire. À défaut, les tribunaux compétents seront ceux du ressort de Firminy.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">13. Contact</h2>
                <p class=\"mt-4 text-gray-400\">
                    Pour toute question concernant ces CGV ou nos services, vous pouvez nous contacter à <a href=\"mailto:contact@dicefinder.com\" class=\"text-indigo-500 hover:text-indigo-300\">contact@dicefinder.com</a>.
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
        return "footer/cgv.html.twig";
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
        return array (  170 => 74,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Conditions Générales de Vente | DiceFinder{% endblock %}

{% block body %}
<div class=\"bg-gray-900 text-white py-16 px-4 sm:px-6 lg:px-8\">
    <div class=\"max-w-7xl mx-auto\">
        <div class=\"text-center\">
            <h1 class=\"text-4xl font-extrabold sm:text-5xl\">Conditions Générales de Vente (CGV)</h1>
            <p class=\"mt-4 text-lg text-gray-400\">Dernière mise à jour : 05/10/2024</p>
        </div>

        <div class=\"mt-12 space-y-12\">
            <section>
                <h2 class=\"text-3xl font-bold text-white\">1. Informations sur DiceFinder</h2>
                <p class=\"mt-4 text-gray-400\">
                    DiceFinder est une plateforme dédiée aux jeux de rôle, éditée par DiceFinder, située à 70 Rue Jean Jaures, 42700 Firminy. Pour toute question, vous pouvez nous contacter à : <a href=\"mailto:contact@dicefinder.com\" class=\"text-indigo-500 hover:text-indigo-300\">contact@dicefinder.com</a>.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">2. Objet des CGV</h2>
                <p class=\"mt-4 text-gray-400\">
                    Ces CGV régissent la vente des services payants proposés par DiceFinder, tels que les abonnements VIP et tout autre service premium mis à disposition via notre plateforme.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">3. Description des services</h2>
                <p class=\"mt-4 text-gray-400\">
                    DiceFinder propose des abonnements VIP permettant d'accéder à des fonctionnalités exclusives, telles que des outils avancés de création de parties et un accès prioritaire aux nouvelles fonctionnalités. Les détails de chaque offre sont disponibles sur le site <a href=\"https://dicefinder.com\" class=\"text-indigo-500 hover:text-indigo-300\">https://dicefinder.com</a>.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">4. Tarifs</h2>
                <p class=\"mt-4 text-gray-400\">
                    Les prix des abonnements et services sont indiqués en euros (€), toutes taxes comprises (TTC). DiceFinder se réserve le droit de modifier ses prix à tout moment, mais les tarifs appliqués seront ceux en vigueur au moment de la commande.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">5. Modalités de paiement</h2>
                <p class=\"mt-4 text-gray-400\">
                    Le paiement des services s'effectue en ligne via une solution de paiement sécurisée (carte bancaire, PayPal, etc.). Le paiement est exigible au moment de la souscription à l’abonnement ou lors de l'achat d'un service. Les informations de paiement sont traitées par un prestataire externe et ne sont pas conservées par DiceFinder.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">6. Droit de rétractation</h2>
                <p class=\"mt-4 text-gray-400\">
                    Conformément aux dispositions légales en vigueur, le droit de rétractation ne s'applique pas aux contenus numériques ou services immédiatement exécutés après l'achat, sauf accord contraire. En souscrivant un abonnement ou en achetant un service, vous acceptez que l'exécution commence immédiatement et renoncez donc à votre droit de rétractation.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">7. Résiliation et annulation</h2>
                <ul class=\"mt-4 space-y-2 text-gray-400 list-disc list-inside\">
                    <li>Abonnements mensuels/annuels : Vous pouvez annuler votre abonnement à tout moment depuis votre espace personnel. L’annulation prendra effet à la fin de la période en cours.</li>
                    <li>DiceFinder se réserve le droit de suspendre ou résilier un abonnement en cas de non-respect des Conditions Générales d'Utilisation (CGU) par l'utilisateur.</li>
                </ul>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">8. Responsabilité</h2>
                <p class=\"mt-4 text-gray-400\">
                    DiceFinder met tout en œuvre pour assurer la disponibilité de la plateforme et des services. Toutefois, DiceFinder ne pourra être tenu responsable de tout dommage direct ou indirect résultant de l'utilisation du site, d'une indisponibilité temporaire ou de tout autre problème technique.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">9. Données personnelles</h2>
                <p class=\"mt-4 text-gray-400\">
                    Les informations personnelles collectées lors de la souscription aux services sont traitées conformément à notre <a href=\"{{ path('app_footer_policy') }}\" class=\"text-indigo-500 hover:text-indigo-300\">Politique de Confidentialité</a>. En souscrivant à nos services, vous consentez à la collecte et au traitement de vos données selon les modalités définies dans cette politique.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">10. Propriété intellectuelle</h2>
                <p class=\"mt-4 text-gray-400\">
                    Tous les contenus et éléments mis à disposition sur la plateforme DiceFinder sont protégés par les lois sur la propriété intellectuelle. Toute reproduction, distribution, ou utilisation de ces contenus sans autorisation est interdite.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">11. Modification des CGV</h2>
                <p class=\"mt-4 text-gray-400\">
                    DiceFinder se réserve le droit de modifier les présentes CGV à tout moment. Les nouvelles conditions seront applicables aux abonnements souscrits après leur mise en ligne. Les utilisateurs seront informés de toute modification majeure.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">12. Droit applicable et litiges</h2>
                <p class=\"mt-4 text-gray-400\">
                    Les présentes CGV sont régies par le droit français. En cas de litige, les parties s'engagent à chercher une solution amiable avant toute action judiciaire. À défaut, les tribunaux compétents seront ceux du ressort de Firminy.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">13. Contact</h2>
                <p class=\"mt-4 text-gray-400\">
                    Pour toute question concernant ces CGV ou nos services, vous pouvez nous contacter à <a href=\"mailto:contact@dicefinder.com\" class=\"text-indigo-500 hover:text-indigo-300\">contact@dicefinder.com</a>.
                </p>
            </section>
        </div>
    </div>
</div>
{% endblock %}
", "footer/cgv.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\footer\\cgv.html.twig");
    }
}
