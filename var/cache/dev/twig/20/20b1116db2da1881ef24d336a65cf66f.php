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
        // line 42
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["ownedJdrs"]) || array_key_exists("ownedJdrs", $context) ? $context["ownedJdrs"] : (function () { throw new RuntimeError('Variable "ownedJdrs" does not exist.', 42, $this->source); })()))) {
            // line 43
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8 mb-10\">
            ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ownedJdrs"]) || array_key_exists("ownedJdrs", $context) ? $context["ownedJdrs"] : (function () { throw new RuntimeError('Variable "ownedJdrs" does not exist.', 44, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
                // line 45
                yield "                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 47))), "html", null, true);
                yield "\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-xs font-bold px-2 py-1 rounded 
                                ";
                // line 50
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 50) == "nouveau")) {
                    yield " bg-green-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 51
$context["jdr"], "status", [], "any", false, false, false, 51) == "en_cours")) {
                    yield " bg-blue-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 52
$context["jdr"], "status", [], "any", false, false, false, 52) == "termine")) {
                    yield " bg-red-500
                                ";
                } else {
                    // line 53
                    yield " bg-gray-700
                                ";
                }
                // line 54
                yield " text-white\">
                                ";
                // line 55
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 55) == "nouveau")) {
                    // line 56
                    yield "                                    Nouveau
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 57
$context["jdr"], "status", [], "any", false, false, false, 57) == "en_cours")) {
                    // line 58
                    yield "                                    En Cours
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 59
$context["jdr"], "status", [], "any", false, false, false, 59) == "termine")) {
                    // line 60
                    yield "                                    Terminé
                                ";
                } else {
                    // line 62
                    yield "                                    Statut inconnu
                                ";
                }
                // line 64
                yield "                            </span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <h2 class=\"text-lg font-semibold mb-2 text-white\">";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 68), "html", null, true);
                yield "</h2>
                        <div class=\"flex items-center gap-2 mb-4\">
                            ";
                // line 70
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 70), "avatar", [], "any", false, false, false, 70)) {
                    // line 71
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 71), "avatar", [], "any", false, false, false, 71))), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
                } else {
                    // line 73
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
                }
                // line 75
                yield "                            <div class=\"text-white\">
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">";
                // line 77
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 77), "username", [], "any", false, false, false, 77), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center text-white\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">";
                // line 82
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 82) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 82))), "html", null, true);
                yield "</p>
                        </div>

                        <div class=\"mt-4 flex justify-between items-center\">
                            <a href=\"";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 86)]), "html", null, true);
                yield "\" class=\"bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600\">Voir les détails</a>
                            <button type=\"button\" 
                                class=\"text-red-500 hover:text-red-700\" 
                                data-id=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 89), "html", null, true);
                yield "\" 
                                data-title=\"";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 90), "html_attr");
                yield "\" 
                                data-csrf=\"";
                // line 91
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 91))), "html", null, true);
                yield "\" 
                                onclick=\"openModalFromData(this)\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0\" />
                            </svg>
                        </button>

                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            yield "        </div>
    ";
        } else {
            // line 104
            yield "        <p class=\"text-center text-gray-500 mb-20 mt-20\">Vous n'êtes MJ dans aucun parties pour le moment.</p>
    ";
        }
        // line 106
        yield "    <div id=\"deleteModal\" class=\"fixed z-50 inset-0 overflow-y-auto hidden\" aria-labelledby=\"modal-title\" aria-modal=\"true\" role=\"dialog\">
        <div class=\"flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0\">
            <div class=\"fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity\"></div>
            <span class=\"hidden sm:inline-block sm:align-middle sm:h-screen\">&#8203;</span>
            <div class=\"inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6\">
                <h3 class=\"text-lg leading-6 font-medium text-gray-900\" id=\"modal-title\">Confirmer la suppression</h3>
                <div class=\"mt-2\">
                    <p class=\"text-sm text-gray-500\">
                    Êtes-vous sûr de vouloir supprimer <span id=\"jdrTitle\"></span> ? Cette action est irréversible. Tapez le nom de la partie pour confirmer la suppression.
                    </p>
                </div>

                <div class=\"mt-4\">
                    <input type=\"text\" id=\"confirmInput\" placeholder=\"Entrez le nom du JDR\" class=\"w-full p-2 border border-gray-300 rounded-md\">
                    <span id=\"errorText\" class=\"text-red-500 text-sm hidden\">Le nom du JDR ne correspond pas</span>
                </div>

                <div class=\"mt-5 sm:mt-6 sm:flex sm:flex-row-reverse\">
                    <button type=\"button\" onclick=\"confirmDeletion()\" class=\"w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 sm:ml-3 sm:w-auto sm:text-sm\">Supprimer</button>
                    <button type=\"button\" onclick=\"closeModal()\" class=\"mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:w-auto sm:text-sm\">Annuler</button>
                </div>
            </div>
        </div>
    </div>
    <h2 class=\"text-xl md:text-2xl font-bold mb-6 text-white\">Parties où je suis Joueur</h2>
    ";
        // line 131
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["playerJdrs"]) || array_key_exists("playerJdrs", $context) ? $context["playerJdrs"] : (function () { throw new RuntimeError('Variable "playerJdrs" does not exist.', 131, $this->source); })()))) {
            // line 132
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8 mb-10\">
            ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["playerJdrs"]) || array_key_exists("playerJdrs", $context) ? $context["playerJdrs"] : (function () { throw new RuntimeError('Variable "playerJdrs" does not exist.', 133, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
                // line 134
                yield "                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 136))), "html", null, true);
                yield "\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-xs font-bold px-2 py-1 rounded 
                                ";
                // line 139
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 139) == "nouveau")) {
                    yield " bg-green-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 140
$context["jdr"], "status", [], "any", false, false, false, 140) == "en_cours")) {
                    yield " bg-blue-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 141
$context["jdr"], "status", [], "any", false, false, false, 141) == "termine")) {
                    yield " bg-red-500
                                ";
                } else {
                    // line 142
                    yield " bg-gray-700
                                ";
                }
                // line 143
                yield " text-white\">
                                ";
                // line 144
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 144) == "nouveau")) {
                    // line 145
                    yield "                                    Nouveau
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 146
$context["jdr"], "status", [], "any", false, false, false, 146) == "en_cours")) {
                    // line 147
                    yield "                                    En Cours
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 148
$context["jdr"], "status", [], "any", false, false, false, 148) == "termine")) {
                    // line 149
                    yield "                                    Terminé
                                ";
                } else {
                    // line 151
                    yield "                                    Statut inconnu
                                ";
                }
                // line 153
                yield "                            </span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <div class=\"flex justify-between items-center mb-4\">
                            <a href=\"";
                // line 158
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 158)]), "html", null, true);
                yield "\" class=\"text-lg font-semibold text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 158), "html", null, true);
                yield "</a>
                            <a href=\"";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 159)]), "html", null, true);
                yield "\" class=\"bg-blue-600 hover:bg-blue-700 text-white font-semibold py-1.5 px-3 rounded-md text-sm transition-colors\">
                                Voir
                            </a>
                        </div>
                        <div class=\"flex items-center gap-2 mb-4\">
                            ";
                // line 164
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 164), "avatar", [], "any", false, false, false, 164)) {
                    // line 165
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 165), "avatar", [], "any", false, false, false, 165))), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
                } else {
                    // line 167
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
                }
                // line 169
                yield "                            <div class=\"text-white\">
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">";
                // line 171
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 171), "username", [], "any", false, false, false, 171), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center text-white\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">";
                // line 176
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 176) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 176))), "html", null, true);
                yield "</p>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            yield "        </div>
    ";
        } else {
            // line 183
            yield "        <p class=\"text-center text-gray-500 mb-20 mt-20\">Vous ne participez à aucun parties pour le moment.</p>
    ";
        }
        // line 185
        yield "    <h2 class=\"text-xl md:text-2xl font-bold mb-6 text-white\">Mes Favoris</h2>
    ";
        // line 186
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["favoriteJdrs"]) || array_key_exists("favoriteJdrs", $context) ? $context["favoriteJdrs"] : (function () { throw new RuntimeError('Variable "favoriteJdrs" does not exist.', 186, $this->source); })()))) {
            // line 187
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8\">
            ";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favoriteJdrs"]) || array_key_exists("favoriteJdrs", $context) ? $context["favoriteJdrs"] : (function () { throw new RuntimeError('Variable "favoriteJdrs" does not exist.', 188, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
                // line 189
                yield "                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 191))), "html", null, true);
                yield "\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-xs font-bold px-2 py-1 rounded 
                                ";
                // line 194
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 194) == "nouveau")) {
                    yield " bg-green-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 195
$context["jdr"], "status", [], "any", false, false, false, 195) == "en_cours")) {
                    yield " bg-blue-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 196
$context["jdr"], "status", [], "any", false, false, false, 196) == "termine")) {
                    yield " bg-red-500
                                ";
                } else {
                    // line 197
                    yield " bg-gray-700
                                ";
                }
                // line 198
                yield " text-white\">
                                ";
                // line 199
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 199) == "nouveau")) {
                    // line 200
                    yield "                                    Nouveau
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 201
$context["jdr"], "status", [], "any", false, false, false, 201) == "en_cours")) {
                    // line 202
                    yield "                                    En Cours
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 203
$context["jdr"], "status", [], "any", false, false, false, 203) == "termine")) {
                    // line 204
                    yield "                                    Terminé
                                ";
                } else {
                    // line 206
                    yield "                                    Statut inconnu
                                ";
                }
                // line 208
                yield "                            </span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <div class=\"flex justify-between items-center mb-4\">
                            <a href=\"";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 213)]), "html", null, true);
                yield "\" class=\"text-lg font-semibold text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 213), "html", null, true);
                yield "</a>
                            <a href=\"";
                // line 214
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_favorite", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 214)]), "html", null, true);
                yield "\" class=\"bg-red-500 hover:bg-red-600 text-white font-semibold py-1.5 px-3 rounded-md text-sm transition-colors\">
                                Retirer des Favoris
                            </a>
                        </div>
                        <div class=\"flex items-center gap-2 mb-4\">
                            ";
                // line 219
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 219), "avatar", [], "any", false, false, false, 219)) {
                    // line 220
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 220), "avatar", [], "any", false, false, false, 220))), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
                } else {
                    // line 222
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
                }
                // line 224
                yield "                            <div class=\"text-white\">
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">";
                // line 226
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 226), "username", [], "any", false, false, false, 226), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center text-white\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 231) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 231))), "html", null, true);
                yield "</p>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 236
            yield "        </div>
    ";
        } else {
            // line 238
            yield "        <p class=\"text-center text-gray-500 mb-20 mt-20\">Vous n'avez aucun jeu de rôle en favori pour le moment.</p>
    ";
        }
        // line 240
        yield "</div>

<script>
    let currentJdrId = null;
    let currentJdrTitle = null;
    let currentCsrfToken = null;

    function openModal(jdrId, jdrTitle, csrfToken) {
        currentJdrId = jdrId;
        currentJdrTitle = jdrTitle;
        currentCsrfToken = csrfToken;

        document.getElementById('jdrTitle').textContent = jdrTitle;
        document.getElementById('deleteModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('deleteModal').classList.add('hidden');
        document.getElementById('confirmInput').value = '';
        document.getElementById('errorText').classList.add('hidden');
    }

    function normalizeString(str) {
        return str.normalize(\"NFD\").replace(/[\\u0300-\\u036f]/g, \"\").toLowerCase();
    }

    function openModalFromData(button) {
        const jdrId = button.getAttribute('data-id');
        const jdrTitle = button.getAttribute('data-title');
        const csrfToken = button.getAttribute('data-csrf');

        openModal(jdrId, jdrTitle, csrfToken);
    }

    function confirmDeletion() {
        const input = normalizeString(document.getElementById('confirmInput').value);
        const title = normalizeString(currentJdrTitle);
        const errorText = document.getElementById('errorText');

        if (input === title) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = `/groupe/jdr/\${currentJdrId}`;
            form.innerHTML = `<input type=\"hidden\" name=\"_token\" value=\"\${currentCsrfToken}\">`;
            document.body.appendChild(form);
            form.submit();
        } else {
            errorText.classList.remove('hidden');
        }
    }
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
        return array (  569 => 240,  565 => 238,  561 => 236,  550 => 231,  542 => 226,  538 => 224,  532 => 222,  526 => 220,  524 => 219,  516 => 214,  510 => 213,  503 => 208,  499 => 206,  495 => 204,  493 => 203,  490 => 202,  488 => 201,  485 => 200,  483 => 199,  480 => 198,  476 => 197,  471 => 196,  467 => 195,  463 => 194,  457 => 191,  453 => 189,  449 => 188,  446 => 187,  444 => 186,  441 => 185,  437 => 183,  433 => 181,  422 => 176,  414 => 171,  410 => 169,  404 => 167,  398 => 165,  396 => 164,  388 => 159,  382 => 158,  375 => 153,  371 => 151,  367 => 149,  365 => 148,  362 => 147,  360 => 146,  357 => 145,  355 => 144,  352 => 143,  348 => 142,  343 => 141,  339 => 140,  335 => 139,  329 => 136,  325 => 134,  321 => 133,  318 => 132,  316 => 131,  289 => 106,  285 => 104,  281 => 102,  264 => 91,  260 => 90,  256 => 89,  250 => 86,  243 => 82,  235 => 77,  231 => 75,  225 => 73,  219 => 71,  217 => 70,  212 => 68,  206 => 64,  202 => 62,  198 => 60,  196 => 59,  193 => 58,  191 => 57,  188 => 56,  186 => 55,  183 => 54,  179 => 53,  174 => 52,  170 => 51,  166 => 50,  160 => 47,  156 => 45,  152 => 44,  149 => 43,  147 => 42,  137 => 35,  113 => 14,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                                {% if jdr.status == 'nouveau' %} bg-green-500
                                {% elseif jdr.status == 'en_cours' %} bg-blue-500
                                {% elseif jdr.status == 'termine' %} bg-red-500
                                {% else %} bg-gray-700
                                {% endif %} text-white\">
                                {% if jdr.status == 'nouveau' %}
                                    Nouveau
                                {% elseif jdr.status == 'en_cours' %}
                                    En Cours
                                {% elseif jdr.status == 'termine' %}
                                    Terminé
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

                        <div class=\"mt-4 flex justify-between items-center\">
                            <a href=\"{{ path('app_groupe_j_d_r_show', { 'id': jdr.id }) }}\" class=\"bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600\">Voir les détails</a>
                            <button type=\"button\" 
                                class=\"text-red-500 hover:text-red-700\" 
                                data-id=\"{{ jdr.id }}\" 
                                data-title=\"{{ jdr.title|e('html_attr') }}\" 
                                data-csrf=\"{{ csrf_token('delete' ~ jdr.id) }}\" 
                                onclick=\"openModalFromData(this)\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0\" />
                            </svg>
                        </button>

                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <p class=\"text-center text-gray-500 mb-20 mt-20\">Vous n'êtes MJ dans aucun parties pour le moment.</p>
    {% endif %}
    <div id=\"deleteModal\" class=\"fixed z-50 inset-0 overflow-y-auto hidden\" aria-labelledby=\"modal-title\" aria-modal=\"true\" role=\"dialog\">
        <div class=\"flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0\">
            <div class=\"fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity\"></div>
            <span class=\"hidden sm:inline-block sm:align-middle sm:h-screen\">&#8203;</span>
            <div class=\"inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full sm:p-6\">
                <h3 class=\"text-lg leading-6 font-medium text-gray-900\" id=\"modal-title\">Confirmer la suppression</h3>
                <div class=\"mt-2\">
                    <p class=\"text-sm text-gray-500\">
                    Êtes-vous sûr de vouloir supprimer <span id=\"jdrTitle\"></span> ? Cette action est irréversible. Tapez le nom de la partie pour confirmer la suppression.
                    </p>
                </div>

                <div class=\"mt-4\">
                    <input type=\"text\" id=\"confirmInput\" placeholder=\"Entrez le nom du JDR\" class=\"w-full p-2 border border-gray-300 rounded-md\">
                    <span id=\"errorText\" class=\"text-red-500 text-sm hidden\">Le nom du JDR ne correspond pas</span>
                </div>

                <div class=\"mt-5 sm:mt-6 sm:flex sm:flex-row-reverse\">
                    <button type=\"button\" onclick=\"confirmDeletion()\" class=\"w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 sm:ml-3 sm:w-auto sm:text-sm\">Supprimer</button>
                    <button type=\"button\" onclick=\"closeModal()\" class=\"mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 sm:mt-0 sm:w-auto sm:text-sm\">Annuler</button>
                </div>
            </div>
        </div>
    </div>
    <h2 class=\"text-xl md:text-2xl font-bold mb-6 text-white\">Parties où je suis Joueur</h2>
    {% if playerJdrs is not empty %}
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8 mb-10\">
            {% for jdr in playerJdrs %}
                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"{{ asset('uploads/images-jdr/' ~ jdr.picture) }}\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-xs font-bold px-2 py-1 rounded 
                                {% if jdr.status == 'nouveau' %} bg-green-500
                                {% elseif jdr.status == 'en_cours' %} bg-blue-500
                                {% elseif jdr.status == 'termine' %} bg-red-500
                                {% else %} bg-gray-700
                                {% endif %} text-white\">
                                {% if jdr.status == 'nouveau' %}
                                    Nouveau
                                {% elseif jdr.status == 'en_cours' %}
                                    En Cours
                                {% elseif jdr.status == 'termine' %}
                                    Terminé
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
    <h2 class=\"text-xl md:text-2xl font-bold mb-6 text-white\">Mes Favoris</h2>
    {% if favoriteJdrs is not empty %}
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8\">
            {% for jdr in favoriteJdrs %}
                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"{{ asset('uploads/images-jdr/' ~ jdr.picture) }}\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-xs font-bold px-2 py-1 rounded 
                                {% if jdr.status == 'nouveau' %} bg-green-500
                                {% elseif jdr.status == 'en_cours' %} bg-blue-500
                                {% elseif jdr.status == 'termine' %} bg-red-500
                                {% else %} bg-gray-700
                                {% endif %} text-white\">
                                {% if jdr.status == 'nouveau' %}
                                    Nouveau
                                {% elseif jdr.status == 'en_cours' %}
                                    En Cours
                                {% elseif jdr.status == 'termine' %}
                                    Terminé
                                {% else %}
                                    Statut inconnu
                                {% endif %}
                            </span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <div class=\"flex justify-between items-center mb-4\">
                            <a href=\"{{ path('app_groupe_j_d_r_show', {'id': jdr.id}) }}\" class=\"text-lg font-semibold text-white\">{{ jdr.title }}</a>
                            <a href=\"{{ path('remove_favorite', {'id': jdr.id}) }}\" class=\"bg-red-500 hover:bg-red-600 text-white font-semibold py-1.5 px-3 rounded-md text-sm transition-colors\">
                                Retirer des Favoris
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
        <p class=\"text-center text-gray-500 mb-20 mt-20\">Vous n'avez aucun jeu de rôle en favori pour le moment.</p>
    {% endif %}
</div>

<script>
    let currentJdrId = null;
    let currentJdrTitle = null;
    let currentCsrfToken = null;

    function openModal(jdrId, jdrTitle, csrfToken) {
        currentJdrId = jdrId;
        currentJdrTitle = jdrTitle;
        currentCsrfToken = csrfToken;

        document.getElementById('jdrTitle').textContent = jdrTitle;
        document.getElementById('deleteModal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('deleteModal').classList.add('hidden');
        document.getElementById('confirmInput').value = '';
        document.getElementById('errorText').classList.add('hidden');
    }

    function normalizeString(str) {
        return str.normalize(\"NFD\").replace(/[\\u0300-\\u036f]/g, \"\").toLowerCase();
    }

    function openModalFromData(button) {
        const jdrId = button.getAttribute('data-id');
        const jdrTitle = button.getAttribute('data-title');
        const csrfToken = button.getAttribute('data-csrf');

        openModal(jdrId, jdrTitle, csrfToken);
    }

    function confirmDeletion() {
        const input = normalizeString(document.getElementById('confirmInput').value);
        const title = normalizeString(currentJdrTitle);
        const errorText = document.getElementById('errorText');

        if (input === title) {
            const form = document.createElement('form');
            form.method = 'POST';
            form.action = `/groupe/jdr/\${currentJdrId}`;
            form.innerHTML = `<input type=\"hidden\" name=\"_token\" value=\"\${currentCsrfToken}\">`;
            document.body.appendChild(form);
            form.submit();
        } else {
            errorText.classList.remove('hidden');
        }
    }
</script>
{% endblock %}
", "my_game/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\my_game\\index.html.twig");
    }
}
