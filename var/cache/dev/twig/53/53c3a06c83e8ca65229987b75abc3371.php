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

/* vip/vip.html.twig */
class __TwigTemplate_234266ec34ccf8fe435df2ebda55251d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vip/vip.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "vip/vip.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "vip/vip.html.twig", 1);
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

        yield "Devenez VIP | DiceFinder";
        
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
        yield "<div class=\"container max-w-full px-4 py-4\">
    <h1 class=\"text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-12 text-white\">Programme VIP DiceFinder</h1>
    
    <div class=\"glassmorphism bg-white/10 backdrop-blur-lg mb-8 rounded-xl p-4 sm:p-6 lg:p-8\">
        <div class=\"relative\">
            <div class=\"absolute inset-0 -top-10 -z-10 transform-gpu overflow-hidden blur-3xl\" aria-hidden=\"true\">
                <div class=\"mx-auto aspect-[1155/678] w-full bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30\"
                    style=\"clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)\">
                </div>
            </div>
        </div>

        <div class=\"grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 items-stretch max-w-full\">
            <div class=\"flex flex-col items-center justify-center rounded-3xl bg-white/60 p-4 sm:p-6 lg:p-8 ring-1 ring-gray-900/10 glassmorphism min-h-[400px] text-center\">
                <h3 class=\"text-sm sm:text-base font-semibold leading-7 text-indigo-600\">Formule Mensuelle</h3>
                <p class=\"mt-4 flex items-baseline justify-center gap-x-2\">
                    <span class=\"text-4xl font-bold tracking-tight text-gray-900\">4,99€</span>
                    <span class=\"text-base text-gray-500\">/mois</span>
                </p>
                <p class=\"mt-4 sm:mt-6 text-sm sm:text-base leading-7 text-gray-600\">Idéal pour ceux qui veulent tester tous les avantages VIP sans engagement à long terme.</p>
                ";
        // line 26
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26)) {
            // line 27
            yield "                    <a href=\"#\" id=\"subscribe-monthly\" class=\"mt-5 block rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500\">Souscrire</a>
                ";
        } else {
            // line 29
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"mt-5 block rounded-md bg-red-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500\">Connectez-vous pour souscrire</a>
                ";
        }
        // line 31
        yield "            </div>
            
            <div class=\"flex flex-col items-center justify-center rounded-3xl bg-white/60 p-4 sm:p-6 lg:p-8 ring-1 ring-gray-900/10 glassmorphism min-h-[400px] text-center\">
                <h3 class=\"text-sm sm:text-base font-semibold leading-7 text-indigo-600\">Formule Annuelle</h3>
                <p class=\"mt-4 flex items-baseline justify-center gap-x-2\">
                    <span class=\"text-4xl font-bold tracking-tight text-gray-900\">49,99€</span>
                    <span class=\"text-base text-gray-500\">/an</span>
                </p>
                <p class=\"mt-4 sm:mt-6 text-sm sm:text-base leading-7 text-gray-600\">Parfait pour les utilisateurs réguliers qui veulent maximiser leur expérience sur DiceFinder.</p>
                ";
        // line 40
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 40, $this->source); })()), "user", [], "any", false, false, false, 40)) {
            // line 41
            yield "                    <a href=\"#\" id=\"subscribe-annual\" class=\"mt-5 block rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500\">Souscrire</a>
                ";
        } else {
            // line 43
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"mt-5 block rounded-md bg-red-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500\">Connectez-vous pour souscrire</a>
                ";
        }
        // line 45
        yield "            </div>

            <div class=\"flex flex-col items-center justify-center rounded-3xl bg-white/60 p-4 sm:p-6 lg:p-8 ring-1 ring-gray-900/10 glassmorphism min-h-[400px] text-center\">
                <h3 class=\"text-sm sm:text-base font-semibold leading-7 text-indigo-600\">Paiement Unique</h3>
                <p class=\"mt-4 flex items-baseline justify-center gap-x-2\">
                    <span class=\"text-4xl font-bold tracking-tight text-gray-900\">5,99€</span>
                </p>
                <p class=\"mt-4 sm:mt-6 text-sm sm:text-base leading-7 text-gray-600\">Pour ceux qui veulent un accès limité sans renouvellement automatique.</p>
                ";
        // line 53
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53)) {
            // line 54
            yield "                    <a href=\"#\" id=\"subscribe-one-time\" class=\"mt-5 block rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500\">Souscrire</a>
                ";
        } else {
            // line 56
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"mt-5 block rounded-md bg-red-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500\">Connectez-vous pour souscrire</a>
                ";
        }
        // line 58
        yield "            </div>
        </div>
    </div>

    <div class=\"flex flex-col gap-4 lg:flex-row\">
        <div class=\"glassmorphism bg-white/10 backdrop-blur-lg rounded-lg shadow-lg p-4 sm:p-6 lg:p-8 text-white w-full lg:w-1/3\">
            <h2 class=\"text-xl sm:text-2xl md:text-3xl font-semibold text-center mb-4 sm:mb-6 text-indigo-400\">Bénéfices du VIP</h2>
            <ul class=\"list-none space-y-3 sm:space-y-4 mb-6 text-sm sm:text-base md:text-lg text-left\">
                <li class=\"flex items-center\">
                    <span class=\"mr-3\">🎲</span> Créer un nombre illimité de parties
                </li>
                <li class=\"flex items-center\">
                    <span class=\"mr-3\">🖼️</span> Upload de GIF pour vos profils et parties
                </li>
                <li class=\"flex items-center\">
                    <span class=\"mr-3\">🏷️</span> Réductions exclusives dans la boutique
                </li>
                <li class=\"flex items-center\">
                    <span class=\"mr-3\">⚡</span> Boost d'expérience pour votre profil
                </li>
                <li class=\"flex items-center\">
                    <span class=\"mr-3\">🔒</span> Créez des parties VIP uniquement
                </li>
                <li class=\"flex items-center\">
                    <span class=\"mr-3\">🌟</span> Mise en avant de vos parties sur l'accueil
                </li>
            </ul>
            ";
        // line 85
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "isVip", [], "any", false, false, false, 85))) {
            // line 86
            yield "            <div class=\"text-center\">
                <div class=\"px-8 py-3 bg-purple-600 text-white font-semibold rounded-full text-center shadow-lg\">
                    Vous êtes déjà VIP !
                </div>
            </div>
            ";
        }
        // line 92
        yield "        </div>


        <div class=\"glassmorphism bg-white/10 backdrop-blur-lg rounded-lg shadow-lg p-4 sm:p-6 lg:p-8 text-white w-full lg:w-2/3\">
            <h2 class=\"text-xl sm:text-2xl md:text-3xl font-semibold text-center mb-4 sm:mb-6 text-green-400\">Pourquoi devenir VIP ?</h2>
            <p class=\"text-sm sm:text-base md:text-lg leading-relaxed\">
                En souscrivant à l'abonnement VIP sur DiceFinder, vous nous aidez à maintenir le site, améliorer ses fonctionnalités,
                et offrir une meilleure expérience à tous les joueurs. Votre contribution nous permet de développer de nouvelles
                fonctionnalités, d'améliorer la performance du site, et de le rendre plus agréable pour la communauté.
            </p>
            <p class=\"text-sm sm:text-base md:text-lg leading-relaxed mt-4\">
                Grâce à votre soutien, DiceFinder continue de grandir et d'évoluer, en offrant des services de qualité aux rôlistes
                du monde entier. Merci d'être une partie de cette aventure !
            </p>
        </div>
    </div>

    <div class=\"mt-8\"></div>
    <div class=\"glassmorphism bg-white/10 backdrop-blur-lg rounded-lg shadow-lg p-4 sm:p-6 lg:p-8 text-white\">
        <h2 class=\"text-xl sm:text-2xl md:text-3xl font-semibold text-center mb-4 sm:mb-6 text-green-400\">Offrir un VIP</h2>
        <p class=\"mb-4 sm:mb-6 text-base leading-relaxed text-center\">
            Offrez un abonnement VIP à un ami ou un proche !
        </p>

        ";
        // line 116
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116)) {
            // line 117
            yield "            <div class=\"relative mb-4 sm:mb-6\">
                <input type=\"text\" id=\"gift-username\" placeholder=\"Nom d'utilisateur\"
                    class=\"w-full py-3 px-4 text-white bg-gray-900/50 backdrop-blur-md border border-gray-600 rounded-full shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 placeholder-gray-400\" />
            </div>

            <div id=\"user-profile\" class=\"hidden bg-gray-800/50 backdrop-blur-md p-4 rounded-lg shadow-lg transition\">
                <div class=\"flex items-center hover:bg-gray-700 p-2 rounded-lg\">
                    <img id=\"user-avatar\" src=\"\" alt=\"Avatar de l'utilisateur\" class=\"w-16 h-16 rounded-full mr-4\">
                    <p id=\"user-info\" class=\"text-white text-lg\"></p>
                </div>
                <div id=\"vip-status\" class=\"mt-2 hidden flex items-center\">
                    <img src=\"/images/vip-logo.png\" alt=\"Logo VIP\" class=\"w-8 h-8 mr-2\">
                    <p class=\"text-yellow-400 font-semibold\">L'utilisateur est déjà VIP</p>
                </div>
            </div>

            <div class=\"text-center mt-6\">
                <button id=\"offer-vip-button\" class=\"bg-green-500 text-white px-6 py-3 rounded-full shadow-md hover:bg-green-600 transition hidden\">
                    Offrir un VIP
                </button>
            </div>
        ";
        } else {
            // line 139
            yield "            <p class=\"text-center mt-6\">
                <a href=\"";
            // line 140
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"block rounded-md bg-red-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-400\">
                    Connectez-vous pour offrir un VIP
                </a>
            </p>
        ";
        }
        // line 145
        yield "
    </div>
</div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script type=\"text/javascript\">
    const stripe = Stripe(\"";
        // line 151
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripe_public_key"]) || array_key_exists("stripe_public_key", $context) ? $context["stripe_public_key"] : (function () { throw new RuntimeError('Variable "stripe_public_key" does not exist.', 151, $this->source); })()), "html", null, true);
        yield "\");

    function setupSubscriptionButton(buttonId, routePath) {
        document.getElementById(buttonId).addEventListener('click', function (event) {
            event.preventDefault();
            fetch(routePath, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    console.error(\"Erreur:\", data.error);
                } else {
                    return stripe.redirectToCheckout({ sessionId: data.id });
                }
            })
            .catch(error => console.error(\"Erreur lors de la création de la session Stripe:\", error));
        });
    }

    setupSubscriptionButton('subscribe-monthly', '";
        // line 174
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_checkout_session_monthly");
        yield "');
    setupSubscriptionButton('subscribe-annual', '";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_checkout_session_annual");
        yield "');
    setupSubscriptionButton('subscribe-one-time', '";
        // line 176
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_checkout_session_one_time");
        yield "');

    const usernameInput = document.getElementById('gift-username');
    const userProfile = document.getElementById('user-profile');
    const userAvatar = document.getElementById('user-avatar');
    const userInfo = document.getElementById('user-info');
    const offerVipButton = document.getElementById('offer-vip-button');
    const vipStatus = document.getElementById('vip-status');

    usernameInput.addEventListener('input', function () {
        const username = this.value.trim();

        if (username.length > 0) {
            fetch(`/api/search-user?username=\${encodeURIComponent(username)}`)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        userProfile.classList.add('hidden');
                        offerVipButton.classList.add('hidden');
                        vipStatus.classList.add('hidden');
                    } else {
                        userProfile.classList.remove('hidden');
                        userAvatar.src = data.avatar || '/images/default-avatar.png';
                        userInfo.innerText = `\${data.username}`;

                        if (data.isVip) {
                            vipStatus.classList.remove('hidden');
                            offerVipButton.classList.add('hidden');
                        } else {
                            vipStatus.classList.add('hidden');
                            offerVipButton.classList.remove('hidden');
                            offerVipButton.setAttribute('data-username', data.username);
                        }
                    }
                })
                .catch(error => console.error('Erreur lors de la recherche de l\\'utilisateur:', error));
        } else {
            userProfile.classList.add('hidden');
            offerVipButton.classList.add('hidden');
            vipStatus.classList.add('hidden');
        }
    });

    offerVipButton.addEventListener('click', function () {
        const giftUsername = offerVipButton.getAttribute('data-username');
        fetch('";
        // line 221
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_create_gift_checkout_session");
        yield "', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ gift_username: giftUsername }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error(\"Erreur:\", data.error);
            } else {
                return stripe.redirectToCheckout({ sessionId: data.id });
            }
        })
        .catch(error => console.error(\"Erreur lors de la création de la session Stripe:\", error));
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
        return "vip/vip.html.twig";
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
        return array (  371 => 221,  323 => 176,  319 => 175,  315 => 174,  289 => 151,  281 => 145,  273 => 140,  270 => 139,  246 => 117,  244 => 116,  218 => 92,  210 => 86,  208 => 85,  179 => 58,  173 => 56,  169 => 54,  167 => 53,  157 => 45,  151 => 43,  147 => 41,  145 => 40,  134 => 31,  128 => 29,  124 => 27,  122 => 26,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Devenez VIP | DiceFinder{% endblock %}

{% block body %}
<div class=\"container max-w-full px-4 py-4\">
    <h1 class=\"text-2xl sm:text-3xl md:text-4xl font-bold text-center mb-12 text-white\">Programme VIP DiceFinder</h1>
    
    <div class=\"glassmorphism bg-white/10 backdrop-blur-lg mb-8 rounded-xl p-4 sm:p-6 lg:p-8\">
        <div class=\"relative\">
            <div class=\"absolute inset-0 -top-10 -z-10 transform-gpu overflow-hidden blur-3xl\" aria-hidden=\"true\">
                <div class=\"mx-auto aspect-[1155/678] w-full bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30\"
                    style=\"clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)\">
                </div>
            </div>
        </div>

        <div class=\"grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3 items-stretch max-w-full\">
            <div class=\"flex flex-col items-center justify-center rounded-3xl bg-white/60 p-4 sm:p-6 lg:p-8 ring-1 ring-gray-900/10 glassmorphism min-h-[400px] text-center\">
                <h3 class=\"text-sm sm:text-base font-semibold leading-7 text-indigo-600\">Formule Mensuelle</h3>
                <p class=\"mt-4 flex items-baseline justify-center gap-x-2\">
                    <span class=\"text-4xl font-bold tracking-tight text-gray-900\">4,99€</span>
                    <span class=\"text-base text-gray-500\">/mois</span>
                </p>
                <p class=\"mt-4 sm:mt-6 text-sm sm:text-base leading-7 text-gray-600\">Idéal pour ceux qui veulent tester tous les avantages VIP sans engagement à long terme.</p>
                {% if app.user %}
                    <a href=\"#\" id=\"subscribe-monthly\" class=\"mt-5 block rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500\">Souscrire</a>
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"mt-5 block rounded-md bg-red-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500\">Connectez-vous pour souscrire</a>
                {% endif %}
            </div>
            
            <div class=\"flex flex-col items-center justify-center rounded-3xl bg-white/60 p-4 sm:p-6 lg:p-8 ring-1 ring-gray-900/10 glassmorphism min-h-[400px] text-center\">
                <h3 class=\"text-sm sm:text-base font-semibold leading-7 text-indigo-600\">Formule Annuelle</h3>
                <p class=\"mt-4 flex items-baseline justify-center gap-x-2\">
                    <span class=\"text-4xl font-bold tracking-tight text-gray-900\">49,99€</span>
                    <span class=\"text-base text-gray-500\">/an</span>
                </p>
                <p class=\"mt-4 sm:mt-6 text-sm sm:text-base leading-7 text-gray-600\">Parfait pour les utilisateurs réguliers qui veulent maximiser leur expérience sur DiceFinder.</p>
                {% if app.user %}
                    <a href=\"#\" id=\"subscribe-annual\" class=\"mt-5 block rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500\">Souscrire</a>
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"mt-5 block rounded-md bg-red-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500\">Connectez-vous pour souscrire</a>
                {% endif %}
            </div>

            <div class=\"flex flex-col items-center justify-center rounded-3xl bg-white/60 p-4 sm:p-6 lg:p-8 ring-1 ring-gray-900/10 glassmorphism min-h-[400px] text-center\">
                <h3 class=\"text-sm sm:text-base font-semibold leading-7 text-indigo-600\">Paiement Unique</h3>
                <p class=\"mt-4 flex items-baseline justify-center gap-x-2\">
                    <span class=\"text-4xl font-bold tracking-tight text-gray-900\">5,99€</span>
                </p>
                <p class=\"mt-4 sm:mt-6 text-sm sm:text-base leading-7 text-gray-600\">Pour ceux qui veulent un accès limité sans renouvellement automatique.</p>
                {% if app.user %}
                    <a href=\"#\" id=\"subscribe-one-time\" class=\"mt-5 block rounded-md bg-indigo-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500\">Souscrire</a>
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"mt-5 block rounded-md bg-red-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-red-500\">Connectez-vous pour souscrire</a>
                {% endif %}
            </div>
        </div>
    </div>

    <div class=\"flex flex-col gap-4 lg:flex-row\">
        <div class=\"glassmorphism bg-white/10 backdrop-blur-lg rounded-lg shadow-lg p-4 sm:p-6 lg:p-8 text-white w-full lg:w-1/3\">
            <h2 class=\"text-xl sm:text-2xl md:text-3xl font-semibold text-center mb-4 sm:mb-6 text-indigo-400\">Bénéfices du VIP</h2>
            <ul class=\"list-none space-y-3 sm:space-y-4 mb-6 text-sm sm:text-base md:text-lg text-left\">
                <li class=\"flex items-center\">
                    <span class=\"mr-3\">🎲</span> Créer un nombre illimité de parties
                </li>
                <li class=\"flex items-center\">
                    <span class=\"mr-3\">🖼️</span> Upload de GIF pour vos profils et parties
                </li>
                <li class=\"flex items-center\">
                    <span class=\"mr-3\">🏷️</span> Réductions exclusives dans la boutique
                </li>
                <li class=\"flex items-center\">
                    <span class=\"mr-3\">⚡</span> Boost d'expérience pour votre profil
                </li>
                <li class=\"flex items-center\">
                    <span class=\"mr-3\">🔒</span> Créez des parties VIP uniquement
                </li>
                <li class=\"flex items-center\">
                    <span class=\"mr-3\">🌟</span> Mise en avant de vos parties sur l'accueil
                </li>
            </ul>
            {% if app.user and app.user.isVip %}
            <div class=\"text-center\">
                <div class=\"px-8 py-3 bg-purple-600 text-white font-semibold rounded-full text-center shadow-lg\">
                    Vous êtes déjà VIP !
                </div>
            </div>
            {% endif %}
        </div>


        <div class=\"glassmorphism bg-white/10 backdrop-blur-lg rounded-lg shadow-lg p-4 sm:p-6 lg:p-8 text-white w-full lg:w-2/3\">
            <h2 class=\"text-xl sm:text-2xl md:text-3xl font-semibold text-center mb-4 sm:mb-6 text-green-400\">Pourquoi devenir VIP ?</h2>
            <p class=\"text-sm sm:text-base md:text-lg leading-relaxed\">
                En souscrivant à l'abonnement VIP sur DiceFinder, vous nous aidez à maintenir le site, améliorer ses fonctionnalités,
                et offrir une meilleure expérience à tous les joueurs. Votre contribution nous permet de développer de nouvelles
                fonctionnalités, d'améliorer la performance du site, et de le rendre plus agréable pour la communauté.
            </p>
            <p class=\"text-sm sm:text-base md:text-lg leading-relaxed mt-4\">
                Grâce à votre soutien, DiceFinder continue de grandir et d'évoluer, en offrant des services de qualité aux rôlistes
                du monde entier. Merci d'être une partie de cette aventure !
            </p>
        </div>
    </div>

    <div class=\"mt-8\"></div>
    <div class=\"glassmorphism bg-white/10 backdrop-blur-lg rounded-lg shadow-lg p-4 sm:p-6 lg:p-8 text-white\">
        <h2 class=\"text-xl sm:text-2xl md:text-3xl font-semibold text-center mb-4 sm:mb-6 text-green-400\">Offrir un VIP</h2>
        <p class=\"mb-4 sm:mb-6 text-base leading-relaxed text-center\">
            Offrez un abonnement VIP à un ami ou un proche !
        </p>

        {% if app.user %}
            <div class=\"relative mb-4 sm:mb-6\">
                <input type=\"text\" id=\"gift-username\" placeholder=\"Nom d'utilisateur\"
                    class=\"w-full py-3 px-4 text-white bg-gray-900/50 backdrop-blur-md border border-gray-600 rounded-full shadow-md focus:outline-none focus:ring-2 focus:ring-indigo-500 placeholder-gray-400\" />
            </div>

            <div id=\"user-profile\" class=\"hidden bg-gray-800/50 backdrop-blur-md p-4 rounded-lg shadow-lg transition\">
                <div class=\"flex items-center hover:bg-gray-700 p-2 rounded-lg\">
                    <img id=\"user-avatar\" src=\"\" alt=\"Avatar de l'utilisateur\" class=\"w-16 h-16 rounded-full mr-4\">
                    <p id=\"user-info\" class=\"text-white text-lg\"></p>
                </div>
                <div id=\"vip-status\" class=\"mt-2 hidden flex items-center\">
                    <img src=\"/images/vip-logo.png\" alt=\"Logo VIP\" class=\"w-8 h-8 mr-2\">
                    <p class=\"text-yellow-400 font-semibold\">L'utilisateur est déjà VIP</p>
                </div>
            </div>

            <div class=\"text-center mt-6\">
                <button id=\"offer-vip-button\" class=\"bg-green-500 text-white px-6 py-3 rounded-full shadow-md hover:bg-green-600 transition hidden\">
                    Offrir un VIP
                </button>
            </div>
        {% else %}
            <p class=\"text-center mt-6\">
                <a href=\"{{ path('app_login') }}\" class=\"block rounded-md bg-red-500 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-red-400\">
                    Connectez-vous pour offrir un VIP
                </a>
            </p>
        {% endif %}

    </div>
</div>

<script src=\"https://js.stripe.com/v3/\"></script>
<script type=\"text/javascript\">
    const stripe = Stripe(\"{{ stripe_public_key }}\");

    function setupSubscriptionButton(buttonId, routePath) {
        document.getElementById(buttonId).addEventListener('click', function (event) {
            event.preventDefault();
            fetch(routePath, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
            })
            .then(response => response.json())
            .then(data => {
                if (data.error) {
                    console.error(\"Erreur:\", data.error);
                } else {
                    return stripe.redirectToCheckout({ sessionId: data.id });
                }
            })
            .catch(error => console.error(\"Erreur lors de la création de la session Stripe:\", error));
        });
    }

    setupSubscriptionButton('subscribe-monthly', '{{ path('app_create_checkout_session_monthly') }}');
    setupSubscriptionButton('subscribe-annual', '{{ path('app_create_checkout_session_annual') }}');
    setupSubscriptionButton('subscribe-one-time', '{{ path('app_create_checkout_session_one_time') }}');

    const usernameInput = document.getElementById('gift-username');
    const userProfile = document.getElementById('user-profile');
    const userAvatar = document.getElementById('user-avatar');
    const userInfo = document.getElementById('user-info');
    const offerVipButton = document.getElementById('offer-vip-button');
    const vipStatus = document.getElementById('vip-status');

    usernameInput.addEventListener('input', function () {
        const username = this.value.trim();

        if (username.length > 0) {
            fetch(`/api/search-user?username=\${encodeURIComponent(username)}`)
                .then(response => response.json())
                .then(data => {
                    if (data.error) {
                        userProfile.classList.add('hidden');
                        offerVipButton.classList.add('hidden');
                        vipStatus.classList.add('hidden');
                    } else {
                        userProfile.classList.remove('hidden');
                        userAvatar.src = data.avatar || '/images/default-avatar.png';
                        userInfo.innerText = `\${data.username}`;

                        if (data.isVip) {
                            vipStatus.classList.remove('hidden');
                            offerVipButton.classList.add('hidden');
                        } else {
                            vipStatus.classList.add('hidden');
                            offerVipButton.classList.remove('hidden');
                            offerVipButton.setAttribute('data-username', data.username);
                        }
                    }
                })
                .catch(error => console.error('Erreur lors de la recherche de l\\'utilisateur:', error));
        } else {
            userProfile.classList.add('hidden');
            offerVipButton.classList.add('hidden');
            vipStatus.classList.add('hidden');
        }
    });

    offerVipButton.addEventListener('click', function () {
        const giftUsername = offerVipButton.getAttribute('data-username');
        fetch('{{ path('app_create_gift_checkout_session') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({ gift_username: giftUsername }),
        })
        .then(response => response.json())
        .then(data => {
            if (data.error) {
                console.error(\"Erreur:\", data.error);
            } else {
                return stripe.redirectToCheckout({ sessionId: data.id });
            }
        })
        .catch(error => console.error(\"Erreur lors de la création de la session Stripe:\", error));
    });
</script>

{% endblock %}
", "vip/vip.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\vip\\vip.html.twig");
    }
}
