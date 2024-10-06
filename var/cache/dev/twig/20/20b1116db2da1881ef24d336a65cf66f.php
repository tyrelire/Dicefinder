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
        yield "\" class=\"relative w-full md:w-1/3 flex\">
        <input 
            type=\"text\" 
            name=\"search\" 
            value=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 14, $this->source); })()), "html", null, true);
        yield "\" 
            placeholder=\"Tapez Votre Recherche...\" 
            class=\"w-full p-2.5 text-gray-400 bg-gray-800 border border-white rounded-l-lg focus:ring-blue-500 focus:border-blue-500\">
        <button 
            type=\"submit\" 
            class=\"bg-blue-500 text-white p-2.5 rounded-r-lg shadow hover:bg-blue-600 flex items-center justify-center space-x-2\">
            <svg 
                xmlns=\"http://www.w3.org/2000/svg\" 
                fill=\"none\" 
                viewBox=\"0 0 24 24\" 
                stroke-width=\"1.5\" 
                stroke=\"currentColor\" 
                class=\"w-6 h-6\">
                <path 
                    stroke-linecap=\"round\" 
                    stroke-linejoin=\"round\" 
                    d=\"M21 21l-5.197-5.197M15.803 15.803A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\" />
            </svg>
        </button>
    </form>
    <a 
        href=\"";
        // line 35
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_new");
        yield "\" 
        class=\"w-full md:w-auto bg-green-500 text-white p-2.5 rounded-lg shadow hover:bg-green-600 text-center\">
        Créer mon Univers
    </a>
</div>


    <h2 class=\"text-xl md:text-2xl font-bold mb-6 text-white\">Mes Parties (MJ)</h2>
    ";
        // line 43
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["ownedJdrs"]) || array_key_exists("ownedJdrs", $context) ? $context["ownedJdrs"] : (function () { throw new RuntimeError('Variable "ownedJdrs" does not exist.', 43, $this->source); })()))) {
            // line 44
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8 mb-10\">
            ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ownedJdrs"]) || array_key_exists("ownedJdrs", $context) ? $context["ownedJdrs"] : (function () { throw new RuntimeError('Variable "ownedJdrs" does not exist.', 45, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
                // line 46
                yield "                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 48))), "html", null, true);
                yield "\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-xs font-bold px-2 py-1 rounded 
                                ";
                // line 51
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 51) == "preparation")) {
                    yield " bg-yellow-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 52
$context["jdr"], "status", [], "any", false, false, false, 52) == "pret_a_jouer")) {
                    yield " bg-green-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 53
$context["jdr"], "status", [], "any", false, false, false, 53) == "en_cours")) {
                    yield " bg-blue-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 54
$context["jdr"], "status", [], "any", false, false, false, 54) == "complet")) {
                    yield " bg-red-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 55
$context["jdr"], "status", [], "any", false, false, false, 55) == "pause")) {
                    yield " bg-gray-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 56
$context["jdr"], "status", [], "any", false, false, false, 56) == "termine")) {
                    yield " bg-purple-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 57
$context["jdr"], "status", [], "any", false, false, false, 57) == "annule")) {
                    yield " bg-gray-400
                                ";
                } else {
                    // line 58
                    yield " bg-gray-700
                                ";
                }
                // line 59
                yield " text-white\">
                                ";
                // line 60
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 60) == "preparation")) {
                    // line 61
                    yield "                                    En Préparation
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 62
$context["jdr"], "status", [], "any", false, false, false, 62) == "pret_a_jouer")) {
                    // line 63
                    yield "                                    Prêt à jouer
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 64
$context["jdr"], "status", [], "any", false, false, false, 64) == "en_cours")) {
                    // line 65
                    yield "                                    En Cours
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 66
$context["jdr"], "status", [], "any", false, false, false, 66) == "complet")) {
                    // line 67
                    yield "                                    Complet
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 68
$context["jdr"], "status", [], "any", false, false, false, 68) == "pause")) {
                    // line 69
                    yield "                                    En Pause
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 70
$context["jdr"], "status", [], "any", false, false, false, 70) == "termine")) {
                    // line 71
                    yield "                                    Terminé
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 72
$context["jdr"], "status", [], "any", false, false, false, 72) == "annule")) {
                    // line 73
                    yield "                                    Annulé
                                ";
                } else {
                    // line 75
                    yield "                                    Statut inconnu
                                ";
                }
                // line 77
                yield "                            </span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <h2 class=\"text-lg font-semibold mb-2 text-white\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 81), "html", null, true);
                yield "</h2>
                        <div class=\"flex items-center gap-2 mb-4\">
                            ";
                // line 83
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 83), "avatar", [], "any", false, false, false, 83)) {
                    // line 84
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 84), "avatar", [], "any", false, false, false, 84))), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
                } else {
                    // line 86
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
                }
                // line 88
                yield "                            <div class=\"text-white\">
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 90), "username", [], "any", false, false, false, 90), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center text-white\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 95) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 95))), "html", null, true);
                yield "</p>
                        </div>

                        <div class=\"mt-4\">
                            <a href=\"";
                // line 99
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 99)]), "html", null, true);
                yield "\" class=\"bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600\">Voir les détails</a>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            yield "        </div>
    ";
        } else {
            // line 106
            yield "        <p class=\"text-center text-gray-500 mb-20 mt-20\">Vous n'êtes MJ dans aucun parties pour le moment.</p>
    ";
        }
        // line 108
        yield "
    <h2 class=\"text-xl md:text-2xl font-bold mb-6 text-white\">Parties où je suis Joueur</h2>
    ";
        // line 110
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["playerJdrs"]) || array_key_exists("playerJdrs", $context) ? $context["playerJdrs"] : (function () { throw new RuntimeError('Variable "playerJdrs" does not exist.', 110, $this->source); })()))) {
            // line 111
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8\">
            ";
            // line 112
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["playerJdrs"]) || array_key_exists("playerJdrs", $context) ? $context["playerJdrs"] : (function () { throw new RuntimeError('Variable "playerJdrs" does not exist.', 112, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
                // line 113
                yield "                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"";
                // line 115
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 115))), "html", null, true);
                yield "\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-xs font-bold px-2 py-1 rounded 
                                ";
                // line 118
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 118) == "preparation")) {
                    yield " bg-yellow-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 119
$context["jdr"], "status", [], "any", false, false, false, 119) == "pret_a_jouer")) {
                    yield " bg-green-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 120
$context["jdr"], "status", [], "any", false, false, false, 120) == "en_cours")) {
                    yield " bg-blue-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 121
$context["jdr"], "status", [], "any", false, false, false, 121) == "complet")) {
                    yield " bg-red-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 122
$context["jdr"], "status", [], "any", false, false, false, 122) == "pause")) {
                    yield " bg-gray-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 123
$context["jdr"], "status", [], "any", false, false, false, 123) == "termine")) {
                    yield " bg-purple-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 124
$context["jdr"], "status", [], "any", false, false, false, 124) == "annule")) {
                    yield " bg-gray-400
                                ";
                } else {
                    // line 125
                    yield " bg-gray-700
                                ";
                }
                // line 126
                yield " text-white\">
                                ";
                // line 127
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 127) == "preparation")) {
                    // line 128
                    yield "                                    En Préparation
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 129
$context["jdr"], "status", [], "any", false, false, false, 129) == "pret_a_jouer")) {
                    // line 130
                    yield "                                    Prêt à jouer
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 131
$context["jdr"], "status", [], "any", false, false, false, 131) == "en_cours")) {
                    // line 132
                    yield "                                    En Cours
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 133
$context["jdr"], "status", [], "any", false, false, false, 133) == "complet")) {
                    // line 134
                    yield "                                    Complet
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 135
$context["jdr"], "status", [], "any", false, false, false, 135) == "pause")) {
                    // line 136
                    yield "                                    En Pause
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 137
$context["jdr"], "status", [], "any", false, false, false, 137) == "termine")) {
                    // line 138
                    yield "                                    Terminé
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 139
$context["jdr"], "status", [], "any", false, false, false, 139) == "annule")) {
                    // line 140
                    yield "                                    Annulé
                                ";
                } else {
                    // line 142
                    yield "                                    Statut inconnu
                                ";
                }
                // line 144
                yield "                            </span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <div class=\"flex justify-between items-center mb-4\">
                            <a href=\"";
                // line 149
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 149)]), "html", null, true);
                yield "\" class=\"text-lg font-semibold text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 149), "html", null, true);
                yield "</a>
                            <a href=\"";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 150)]), "html", null, true);
                yield "\" class=\"bg-blue-600 hover:bg-blue-700 text-white font-semibold py-1.5 px-3 rounded-md text-sm transition-colors\">
                                Voir
                            </a>
                        </div>
                        <div class=\"flex items-center gap-2 mb-4\">
                            ";
                // line 155
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 155), "avatar", [], "any", false, false, false, 155)) {
                    // line 156
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 156), "avatar", [], "any", false, false, false, 156))), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
                } else {
                    // line 158
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
                }
                // line 160
                yield "                            <div class=\"text-white\">
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 162), "username", [], "any", false, false, false, 162), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center text-white\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 167) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 167))), "html", null, true);
                yield "</p>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 172
            yield "        </div>
    ";
        } else {
            // line 174
            yield "        <p class=\"text-center text-gray-500 mb-20 mt-20\">Vous ne participez à aucun parties pour le moment.</p>
    ";
        }
        // line 176
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
        return array (  471 => 176,  467 => 174,  463 => 172,  452 => 167,  444 => 162,  440 => 160,  434 => 158,  428 => 156,  426 => 155,  418 => 150,  412 => 149,  405 => 144,  401 => 142,  397 => 140,  395 => 139,  392 => 138,  390 => 137,  387 => 136,  385 => 135,  382 => 134,  380 => 133,  377 => 132,  375 => 131,  372 => 130,  370 => 129,  367 => 128,  365 => 127,  362 => 126,  358 => 125,  353 => 124,  349 => 123,  345 => 122,  341 => 121,  337 => 120,  333 => 119,  329 => 118,  323 => 115,  319 => 113,  315 => 112,  312 => 111,  310 => 110,  306 => 108,  302 => 106,  298 => 104,  287 => 99,  280 => 95,  272 => 90,  268 => 88,  262 => 86,  256 => 84,  254 => 83,  249 => 81,  243 => 77,  239 => 75,  235 => 73,  233 => 72,  230 => 71,  228 => 70,  225 => 69,  223 => 68,  220 => 67,  218 => 66,  215 => 65,  213 => 64,  210 => 63,  208 => 62,  205 => 61,  203 => 60,  200 => 59,  196 => 58,  191 => 57,  187 => 56,  183 => 55,  179 => 54,  175 => 53,  171 => 52,  167 => 51,  161 => 48,  157 => 46,  153 => 45,  150 => 44,  148 => 43,  137 => 35,  113 => 14,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gérer Mes Parties{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8\">
    <h1 class=\"text-2xl md:text-4xl font-bold text-center mb-10 text-white\">Gérer mes Parties</h1>

<div class=\"flex flex-col md:flex-row justify-center items-center gap-4 mb-8\">
    <form method=\"get\" action=\"{{ path('app_my_jdr') }}\" class=\"relative w-full md:w-1/3 flex\">
        <input 
            type=\"text\" 
            name=\"search\" 
            value=\"{{ searchTerm }}\" 
            placeholder=\"Tapez Votre Recherche...\" 
            class=\"w-full p-2.5 text-gray-400 bg-gray-800 border border-white rounded-l-lg focus:ring-blue-500 focus:border-blue-500\">
        <button 
            type=\"submit\" 
            class=\"bg-blue-500 text-white p-2.5 rounded-r-lg shadow hover:bg-blue-600 flex items-center justify-center space-x-2\">
            <svg 
                xmlns=\"http://www.w3.org/2000/svg\" 
                fill=\"none\" 
                viewBox=\"0 0 24 24\" 
                stroke-width=\"1.5\" 
                stroke=\"currentColor\" 
                class=\"w-6 h-6\">
                <path 
                    stroke-linecap=\"round\" 
                    stroke-linejoin=\"round\" 
                    d=\"M21 21l-5.197-5.197M15.803 15.803A7.5 7.5 0 105.196 5.196a7.5 7.5 0 0010.607 10.607z\" />
            </svg>
        </button>
    </form>
    <a 
        href=\"{{ path('app_groupe_j_d_r_new') }}\" 
        class=\"w-full md:w-auto bg-green-500 text-white p-2.5 rounded-lg shadow hover:bg-green-600 text-center\">
        Créer mon Univers
    </a>
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
