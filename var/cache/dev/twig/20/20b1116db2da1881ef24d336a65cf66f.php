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

/* my_game/index.html.twig */
class __TwigTemplate_2c411cd98e2a8da759477523caf93b33 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "my_game/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "my_game/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "my_game/index.html.twig", 1);
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

        yield "Gérer Mes Parties";
        
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
    <h1 class=\"text-2xl md:text-4xl font-bold text-center mb-10 text-white\">Gérer mes Parties</h1>

    <div class=\"flex flex-col md:flex-row justify-center items-center gap-4 mb-8\">
        <form method=\"get\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_jdr");
        yield "\" class=\"relative w-full md:w-1/3\">
            <input type=\"text\" name=\"search\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 11, $this->source); })()), "html", null, true);
        yield "\" placeholder=\"Tapez Votre Recherche...\" class=\"w-full p-2.5 text-gray-400 bg-gray-800 border border-white rounded-lg focus:ring-blue-500 focus:border-blue-500\">
        </form>
        <button type=\"submit\" class=\"w-full md:w-auto bg-blue-500 text-white p-2.5 rounded-lg shadow hover:bg-blue-600 text-center flex items-center justify-center space-x-2\">
            <span>Rechercher</span>
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z\" />
            </svg>
        </button>
        <a href=\"";
        // line 19
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_new");
        yield "\" class=\"w-full md:w-auto bg-green-500 text-white p-2.5 rounded-lg shadow hover:bg-green-600 text-center\">Créer</a>
    </div>

    <h2 class=\"text-xl md:text-2xl font-bold mb-6 text-white\">Mes Parties (MJ)</h2>
    ";
        // line 23
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["ownedJdrs"]) || array_key_exists("ownedJdrs", $context) ? $context["ownedJdrs"] : (function () { throw new RuntimeError('Variable "ownedJdrs" does not exist.', 23, $this->source); })()))) {
            // line 24
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8 mb-10\">
            ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ownedJdrs"]) || array_key_exists("ownedJdrs", $context) ? $context["ownedJdrs"] : (function () { throw new RuntimeError('Variable "ownedJdrs" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
                // line 26
                yield "                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"";
                // line 28
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 28))), "html", null, true);
                yield "\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-xs font-bold px-2 py-1 rounded 
                                ";
                // line 31
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 31) == "preparation")) {
                    yield " bg-yellow-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 32
$context["jdr"], "status", [], "any", false, false, false, 32) == "pret_a_jouer")) {
                    yield " bg-green-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 33
$context["jdr"], "status", [], "any", false, false, false, 33) == "en_cours")) {
                    yield " bg-blue-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 34
$context["jdr"], "status", [], "any", false, false, false, 34) == "complet")) {
                    yield " bg-red-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 35
$context["jdr"], "status", [], "any", false, false, false, 35) == "pause")) {
                    yield " bg-gray-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 36
$context["jdr"], "status", [], "any", false, false, false, 36) == "termine")) {
                    yield " bg-purple-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 37
$context["jdr"], "status", [], "any", false, false, false, 37) == "annule")) {
                    yield " bg-gray-400
                                ";
                } else {
                    // line 38
                    yield " bg-gray-700
                                ";
                }
                // line 39
                yield " text-white\">
                                ";
                // line 40
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 40) == "preparation")) {
                    // line 41
                    yield "                                    En Préparation
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 42
$context["jdr"], "status", [], "any", false, false, false, 42) == "pret_a_jouer")) {
                    // line 43
                    yield "                                    Prêt à jouer
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 44
$context["jdr"], "status", [], "any", false, false, false, 44) == "en_cours")) {
                    // line 45
                    yield "                                    En Cours
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 46
$context["jdr"], "status", [], "any", false, false, false, 46) == "complet")) {
                    // line 47
                    yield "                                    Complet
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 48
$context["jdr"], "status", [], "any", false, false, false, 48) == "pause")) {
                    // line 49
                    yield "                                    En Pause
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 50
$context["jdr"], "status", [], "any", false, false, false, 50) == "termine")) {
                    // line 51
                    yield "                                    Terminé
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 52
$context["jdr"], "status", [], "any", false, false, false, 52) == "annule")) {
                    // line 53
                    yield "                                    Annulé
                                ";
                } else {
                    // line 55
                    yield "                                    Statut inconnu
                                ";
                }
                // line 57
                yield "                            </span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <h2 class=\"text-lg font-semibold mb-2 text-white\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 61), "html", null, true);
                yield "</h2>
                        <div class=\"flex items-center gap-2 mb-4\">
                            ";
                // line 63
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 63), "avatar", [], "any", false, false, false, 63)) {
                    // line 64
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 64), "avatar", [], "any", false, false, false, 64))), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
                } else {
                    // line 66
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
                }
                // line 68
                yield "                            <div class=\"text-white\">
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 70), "username", [], "any", false, false, false, 70), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center text-white\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">";
                // line 75
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 75) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 75))), "html", null, true);
                yield "</p>
                        </div>

                        <div class=\"mt-4\">
                            <a href=\"";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 79)]), "html", null, true);
                yield "\" class=\"bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600\">Voir les détails</a>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            yield "        </div>
    ";
        } else {
            // line 86
            yield "        <p class=\"text-center text-gray-500 mb-20 mt-20\">Vous n'êtes MJ dans aucun parties pour le moment.</p>
    ";
        }
        // line 88
        yield "
    <h2 class=\"text-xl md:text-2xl font-bold mb-6 text-white\">Parties où je suis Joueur</h2>
    ";
        // line 90
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["playerJdrs"]) || array_key_exists("playerJdrs", $context) ? $context["playerJdrs"] : (function () { throw new RuntimeError('Variable "playerJdrs" does not exist.', 90, $this->source); })()))) {
            // line 91
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8\">
            ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["playerJdrs"]) || array_key_exists("playerJdrs", $context) ? $context["playerJdrs"] : (function () { throw new RuntimeError('Variable "playerJdrs" does not exist.', 92, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
                // line 93
                yield "                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 95))), "html", null, true);
                yield "\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-xs font-bold px-2 py-1 rounded 
                                ";
                // line 98
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 98) == "preparation")) {
                    yield " bg-yellow-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 99
$context["jdr"], "status", [], "any", false, false, false, 99) == "pret_a_jouer")) {
                    yield " bg-green-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 100
$context["jdr"], "status", [], "any", false, false, false, 100) == "en_cours")) {
                    yield " bg-blue-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 101
$context["jdr"], "status", [], "any", false, false, false, 101) == "complet")) {
                    yield " bg-red-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 102
$context["jdr"], "status", [], "any", false, false, false, 102) == "pause")) {
                    yield " bg-gray-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 103
$context["jdr"], "status", [], "any", false, false, false, 103) == "termine")) {
                    yield " bg-purple-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 104
$context["jdr"], "status", [], "any", false, false, false, 104) == "annule")) {
                    yield " bg-gray-400
                                ";
                } else {
                    // line 105
                    yield " bg-gray-700
                                ";
                }
                // line 106
                yield " text-white\">
                                ";
                // line 107
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 107) == "preparation")) {
                    // line 108
                    yield "                                    En Préparation
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 109
$context["jdr"], "status", [], "any", false, false, false, 109) == "pret_a_jouer")) {
                    // line 110
                    yield "                                    Prêt à jouer
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 111
$context["jdr"], "status", [], "any", false, false, false, 111) == "en_cours")) {
                    // line 112
                    yield "                                    En Cours
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 113
$context["jdr"], "status", [], "any", false, false, false, 113) == "complet")) {
                    // line 114
                    yield "                                    Complet
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 115
$context["jdr"], "status", [], "any", false, false, false, 115) == "pause")) {
                    // line 116
                    yield "                                    En Pause
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 117
$context["jdr"], "status", [], "any", false, false, false, 117) == "termine")) {
                    // line 118
                    yield "                                    Terminé
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 119
$context["jdr"], "status", [], "any", false, false, false, 119) == "annule")) {
                    // line 120
                    yield "                                    Annulé
                                ";
                } else {
                    // line 122
                    yield "                                    Statut inconnu
                                ";
                }
                // line 124
                yield "                            </span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <div class=\"flex justify-between items-center mb-4\">
                            <a href=\"";
                // line 129
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 129)]), "html", null, true);
                yield "\" class=\"text-lg font-semibold text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 129), "html", null, true);
                yield "</a>
                            <a href=\"";
                // line 130
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 130)]), "html", null, true);
                yield "\" class=\"bg-blue-600 hover:bg-blue-700 text-white font-semibold py-1.5 px-3 rounded-md text-sm transition-colors\">
                                Voir
                            </a>
                        </div>
                        <div class=\"flex items-center gap-2 mb-4\">
                            ";
                // line 135
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 135), "avatar", [], "any", false, false, false, 135)) {
                    // line 136
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 136), "avatar", [], "any", false, false, false, 136))), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
                } else {
                    // line 138
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
                }
                // line 140
                yield "                            <div class=\"text-white\">
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">";
                // line 142
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 142), "username", [], "any", false, false, false, 142), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center text-white\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">";
                // line 147
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 147) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 147))), "html", null, true);
                yield "</p>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 152
            yield "        </div>
    ";
        } else {
            // line 154
            yield "        <p class=\"text-center text-gray-500 mb-20 mt-20\">Vous ne participez à aucun parties pour le moment.</p>
    ";
        }
        // line 156
        yield "</div>

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
        return "my_game/index.html.twig";
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
        return array (  451 => 156,  447 => 154,  443 => 152,  432 => 147,  424 => 142,  420 => 140,  414 => 138,  408 => 136,  406 => 135,  398 => 130,  392 => 129,  385 => 124,  381 => 122,  377 => 120,  375 => 119,  372 => 118,  370 => 117,  367 => 116,  365 => 115,  362 => 114,  360 => 113,  357 => 112,  355 => 111,  352 => 110,  350 => 109,  347 => 108,  345 => 107,  342 => 106,  338 => 105,  333 => 104,  329 => 103,  325 => 102,  321 => 101,  317 => 100,  313 => 99,  309 => 98,  303 => 95,  299 => 93,  295 => 92,  292 => 91,  290 => 90,  286 => 88,  282 => 86,  278 => 84,  267 => 79,  260 => 75,  252 => 70,  248 => 68,  242 => 66,  236 => 64,  234 => 63,  229 => 61,  223 => 57,  219 => 55,  215 => 53,  213 => 52,  210 => 51,  208 => 50,  205 => 49,  203 => 48,  200 => 47,  198 => 46,  195 => 45,  193 => 44,  190 => 43,  188 => 42,  185 => 41,  183 => 40,  180 => 39,  176 => 38,  171 => 37,  167 => 36,  163 => 35,  159 => 34,  155 => 33,  151 => 32,  147 => 31,  141 => 28,  137 => 26,  133 => 25,  130 => 24,  128 => 23,  121 => 19,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gérer Mes Parties{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8\">
    <h1 class=\"text-2xl md:text-4xl font-bold text-center mb-10 text-white\">Gérer mes Parties</h1>

    <div class=\"flex flex-col md:flex-row justify-center items-center gap-4 mb-8\">
        <form method=\"get\" action=\"{{ path('app_my_jdr') }}\" class=\"relative w-full md:w-1/3\">
            <input type=\"text\" name=\"search\" value=\"{{ searchTerm }}\" placeholder=\"Tapez Votre Recherche...\" class=\"w-full p-2.5 text-gray-400 bg-gray-800 border border-white rounded-lg focus:ring-blue-500 focus:border-blue-500\">
        </form>
        <button type=\"submit\" class=\"w-full md:w-auto bg-blue-500 text-white p-2.5 rounded-lg shadow hover:bg-blue-600 text-center flex items-center justify-center space-x-2\">
            <span>Rechercher</span>
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z\" />
            </svg>
        </button>
        <a href=\"{{ path('app_groupe_j_d_r_new') }}\" class=\"w-full md:w-auto bg-green-500 text-white p-2.5 rounded-lg shadow hover:bg-green-600 text-center\">Créer</a>
    </div>

    <h2 class=\"text-xl md:text-2xl font-bold mb-6 text-white\">Mes Parties (MJ)</h2>
    {% if ownedJdrs is not empty %}
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8 mb-10\">
            {% for jdr in ownedJdrs %}
                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"{{ asset('uploads/images-jdr/' ~ jdr.picture) }}\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-xs font-bold px-2 py-1 rounded 
                                {% if jdr.status == 'preparation' %} bg-yellow-500
                                {% elseif jdr.status == 'pret_a_jouer' %} bg-green-500
                                {% elseif jdr.status == 'en_cours' %} bg-blue-500
                                {% elseif jdr.status == 'complet' %} bg-red-500
                                {% elseif jdr.status == 'pause' %} bg-gray-500
                                {% elseif jdr.status == 'termine' %} bg-purple-500
                                {% elseif jdr.status == 'annule' %} bg-gray-400
                                {% else %} bg-gray-700
                                {% endif %} text-white\">
                                {% if jdr.status == 'preparation' %}
                                    En Préparation
                                {% elseif jdr.status == 'pret_a_jouer' %}
                                    Prêt à jouer
                                {% elseif jdr.status == 'en_cours' %}
                                    En Cours
                                {% elseif jdr.status == 'complet' %}
                                    Complet
                                {% elseif jdr.status == 'pause' %}
                                    En Pause
                                {% elseif jdr.status == 'termine' %}
                                    Terminé
                                {% elseif jdr.status == 'annule' %}
                                    Annulé
                                {% else %}
                                    Statut inconnu
                                {% endif %}
                            </span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <h2 class=\"text-lg font-semibold mb-2 text-white\">{{ jdr.title }}</h2>
                        <div class=\"flex items-center gap-2 mb-4\">
                            {% if jdr.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ jdr.owner.avatar) }}\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            {% else %}
                                <img src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            {% endif %}
                            <div class=\"text-white\">
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">{{ jdr.owner.username }}</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center text-white\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">{{ jdr.maxPlayer - jdr.players|length }}</p>
                        </div>

                        <div class=\"mt-4\">
                            <a href=\"{{ path('app_groupe_j_d_r_show', { 'id': jdr.id }) }}\" class=\"bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600\">Voir les détails</a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <p class=\"text-center text-gray-500 mb-20 mt-20\">Vous n'êtes MJ dans aucun parties pour le moment.</p>
    {% endif %}

    <h2 class=\"text-xl md:text-2xl font-bold mb-6 text-white\">Parties où je suis Joueur</h2>
    {% if playerJdrs is not empty %}
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8\">
            {% for jdr in playerJdrs %}
                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"{{ asset('uploads/images-jdr/' ~ jdr.picture) }}\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-xs font-bold px-2 py-1 rounded 
                                {% if jdr.status == 'preparation' %} bg-yellow-500
                                {% elseif jdr.status == 'pret_a_jouer' %} bg-green-500
                                {% elseif jdr.status == 'en_cours' %} bg-blue-500
                                {% elseif jdr.status == 'complet' %} bg-red-500
                                {% elseif jdr.status == 'pause' %} bg-gray-500
                                {% elseif jdr.status == 'termine' %} bg-purple-500
                                {% elseif jdr.status == 'annule' %} bg-gray-400
                                {% else %} bg-gray-700
                                {% endif %} text-white\">
                                {% if jdr.status == 'preparation' %}
                                    En Préparation
                                {% elseif jdr.status == 'pret_a_jouer' %}
                                    Prêt à jouer
                                {% elseif jdr.status == 'en_cours' %}
                                    En Cours
                                {% elseif jdr.status == 'complet' %}
                                    Complet
                                {% elseif jdr.status == 'pause' %}
                                    En Pause
                                {% elseif jdr.status == 'termine' %}
                                    Terminé
                                {% elseif jdr.status == 'annule' %}
                                    Annulé
                                {% else %}
                                    Statut inconnu
                                {% endif %}
                            </span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <div class=\"flex justify-between items-center mb-4\">
                            <a href=\"{{ path('app_groupe_j_d_r_show', {'id': jdr.id}) }}\" class=\"text-lg font-semibold text-white\">{{ jdr.title }}</a>
                            <a href=\"{{ path('app_groupe_j_d_r_show', {'id': jdr.id}) }}\" class=\"bg-blue-600 hover:bg-blue-700 text-white font-semibold py-1.5 px-3 rounded-md text-sm transition-colors\">
                                Voir
                            </a>
                        </div>
                        <div class=\"flex items-center gap-2 mb-4\">
                            {% if jdr.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ jdr.owner.avatar) }}\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            {% else %}
                                <img src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            {% endif %}
                            <div class=\"text-white\">
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">{{ jdr.owner.username }}</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center text-white\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">{{ jdr.maxPlayer - jdr.players|length }}</p>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <p class=\"text-center text-gray-500 mb-20 mt-20\">Vous ne participez à aucun parties pour le moment.</p>
    {% endif %}
</div>

{% endblock %}
", "my_game/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\my_game\\index.html.twig");
    }
}
