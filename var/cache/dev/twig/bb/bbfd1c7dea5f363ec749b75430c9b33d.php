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

/* payment/index.html.twig */
class __TwigTemplate_1e9448f23de19cabb87be9d20eb8607c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "payment/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "payment/index.html.twig", 1);
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

        yield "Paiement VIP";
        
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
        yield "<div class=\"container mx-auto px-4 py-8\">
    <div class=\"bg-gray-800 border-2 border-[#363672] p-8 rounded-lg shadow-lg w-full md:max-w-xl mx-auto\">
        <h1 class=\"text-3xl font-bold text-center mb-6 text-white transition-colors duration-300 hover:text-indigo-700\">
            Paiement VIP
        </h1>
        <p class=\"text-gray-300 text-center mb-8\">
            Profitez des avantages exclusifs en devenant membre VIP pour seulement 4.99€ !
        </p>
        
        <div class=\"text-center mb-8\">
            <button id=\"checkout-button\" class=\"bg-indigo-600 text-white py-3 px-6 rounded-lg hover:bg-indigo-700 transition-transform duration-300 transform hover:-translate-y-1 hover:shadow-lg\">
                Procéder au Paiement
            </button>
        </div>

        <p class=\"text-sm text-gray-500 text-center\">
            Vous serez redirigé vers Stripe pour finaliser votre paiement en toute sécurité.
        </p>
    </div>
</div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script type=\"text/javascript\">
    var stripe = Stripe('pk_test_51QBlZ71qYsqow2KMbEgpRLuCzHNSkIpbubTwkqwIMySi0fLK4L4T22jBPuz4NtOYfnVAaKqyxYBbyyjvwbZq35EW00WG6eGtGf'); // Remplace par ta clé publique Stripe

    document.getElementById('checkout-button').addEventListener('click', function () {
        fetch('/create-checkout-session', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
        })
        .then(function (response) {
            return response.json();
        })
        .then(function (session) {
            // Ici on vérifie que le session.id est bien présent
            if (session.id) {
                return stripe.redirectToCheckout({ sessionId: session.id });
            } else {
                console.error('Session ID manquant :', session);
                alert('Erreur lors de la création de la session Stripe.');
            }
        })
        .catch(function (error) {
            console.error('Erreur:', error);
        });
    });
</script>
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
        return "payment/index.html.twig";
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

{% block title %}Paiement VIP{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8\">
    <div class=\"bg-gray-800 border-2 border-[#363672] p-8 rounded-lg shadow-lg w-full md:max-w-xl mx-auto\">
        <h1 class=\"text-3xl font-bold text-center mb-6 text-white transition-colors duration-300 hover:text-indigo-700\">
            Paiement VIP
        </h1>
        <p class=\"text-gray-300 text-center mb-8\">
            Profitez des avantages exclusifs en devenant membre VIP pour seulement 4.99€ !
        </p>
        
        <div class=\"text-center mb-8\">
            <button id=\"checkout-button\" class=\"bg-indigo-600 text-white py-3 px-6 rounded-lg hover:bg-indigo-700 transition-transform duration-300 transform hover:-translate-y-1 hover:shadow-lg\">
                Procéder au Paiement
            </button>
        </div>

        <p class=\"text-sm text-gray-500 text-center\">
            Vous serez redirigé vers Stripe pour finaliser votre paiement en toute sécurité.
        </p>
    </div>
</div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script type=\"text/javascript\">
    var stripe = Stripe('pk_test_51QBlZ71qYsqow2KMbEgpRLuCzHNSkIpbubTwkqwIMySi0fLK4L4T22jBPuz4NtOYfnVAaKqyxYBbyyjvwbZq35EW00WG6eGtGf'); // Remplace par ta clé publique Stripe

    document.getElementById('checkout-button').addEventListener('click', function () {
        fetch('/create-checkout-session', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
        })
        .then(function (response) {
            return response.json();
        })
        .then(function (session) {
            // Ici on vérifie que le session.id est bien présent
            if (session.id) {
                return stripe.redirectToCheckout({ sessionId: session.id });
            } else {
                console.error('Session ID manquant :', session);
                alert('Erreur lors de la création de la session Stripe.');
            }
        })
        .catch(function (error) {
            console.error('Erreur:', error);
        });
    });
</script>
{% endblock %}
", "payment/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\payment\\index.html.twig");
    }
}
