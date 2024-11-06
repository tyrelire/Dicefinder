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
class __TwigTemplate_766444248c8d4dce8f3236e736b108f8 extends Template
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
    
        ";
        // line 35
        if ((((isset($context["countOwnedJdrs"]) || array_key_exists("countOwnedJdrs", $context) ? $context["countOwnedJdrs"] : (function () { throw new RuntimeError('Variable "countOwnedJdrs" does not exist.', 35, $this->source); })()) >= (isset($context["maxParties"]) || array_key_exists("maxParties", $context) ? $context["maxParties"] : (function () { throw new RuntimeError('Variable "maxParties" does not exist.', 35, $this->source); })())) &&  !(isset($context["isVip"]) || array_key_exists("isVip", $context) ? $context["isVip"] : (function () { throw new RuntimeError('Variable "isVip" does not exist.', 35, $this->source); })()))) {
            // line 36
            yield "            <a 
                href=\"";
            // line 37
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_vip");
            yield "\" 
                class=\"w-full md:w-auto bg-red-500 text-white p-2.5 rounded-lg shadow hover:bg-red-600 text-center\">
                Limite atteinte
            </a>
        ";
        } else {
            // line 42
            yield "            <a 
                href=\"";
            // line 43
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_new");
            yield "\" 
                class=\"w-full md:w-auto bg-green-500 text-white p-2.5 rounded-lg shadow hover:bg-green-600 text-center\">
                Créer mon Univers
            </a>
        ";
        }
        // line 48
        yield "    </div>

    <h2 class=\"text-xl md:text-2xl font-bold mb-6 text-white\">
        Mes Parties (MJ) 
        ";
        // line 52
        if ((isset($context["isVip"]) || array_key_exists("isVip", $context) ? $context["isVip"] : (function () { throw new RuntimeError('Variable "isVip" does not exist.', 52, $this->source); })())) {
            // line 53
            yield "            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countOwnedJdrs"]) || array_key_exists("countOwnedJdrs", $context) ? $context["countOwnedJdrs"] : (function () { throw new RuntimeError('Variable "countOwnedJdrs" does not exist.', 53, $this->source); })()), "html", null, true);
            yield " / ∞)
        ";
        } else {
            // line 55
            yield "            [";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["countOwnedJdrs"]) || array_key_exists("countOwnedJdrs", $context) ? $context["countOwnedJdrs"] : (function () { throw new RuntimeError('Variable "countOwnedJdrs" does not exist.', 55, $this->source); })()), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["maxParties"]) || array_key_exists("maxParties", $context) ? $context["maxParties"] : (function () { throw new RuntimeError('Variable "maxParties" does not exist.', 55, $this->source); })()), "html", null, true);
            yield "]
        ";
        }
        // line 57
        yield "    </h2>
    ";
        // line 58
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["ownedJdrs"]) || array_key_exists("ownedJdrs", $context) ? $context["ownedJdrs"] : (function () { throw new RuntimeError('Variable "ownedJdrs" does not exist.', 58, $this->source); })()))) {
            // line 59
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8 mb-10\">
            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ownedJdrs"]) || array_key_exists("ownedJdrs", $context) ? $context["ownedJdrs"] : (function () { throw new RuntimeError('Variable "ownedJdrs" does not exist.', 60, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
                // line 61
                yield "                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 63))), "html", null, true);
                yield "\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-xs font-bold px-2 py-1 rounded 
                                ";
                // line 66
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 66) == "nouveau")) {
                    yield " bg-green-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 67
$context["jdr"], "status", [], "any", false, false, false, 67) == "en_cours")) {
                    yield " bg-blue-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 68
$context["jdr"], "status", [], "any", false, false, false, 68) == "termine")) {
                    yield " bg-red-500
                                ";
                } else {
                    // line 69
                    yield " bg-gray-700
                                ";
                }
                // line 70
                yield " text-white\">
                                ";
                // line 71
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 71) == "nouveau")) {
                    // line 72
                    yield "                                    Nouveau
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 73
$context["jdr"], "status", [], "any", false, false, false, 73) == "en_cours")) {
                    // line 74
                    yield "                                    En Cours
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 75
$context["jdr"], "status", [], "any", false, false, false, 75) == "termine")) {
                    // line 76
                    yield "                                    Terminé
                                ";
                } else {
                    // line 78
                    yield "                                    Statut inconnu
                                ";
                }
                // line 80
                yield "                            </span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <h2 class=\"text-lg font-semibold mb-2 text-white\">";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 84), "html", null, true);
                yield "</h2>
                        <div class=\"flex items-center gap-2 mb-4\">
                            ";
                // line 86
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 86), "avatar", [], "any", false, false, false, 86)) {
                    // line 87
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 87), "avatar", [], "any", false, false, false, 87))), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
                } else {
                    // line 89
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
                }
                // line 91
                yield "                            <div class=\"text-white\">
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">";
                // line 93
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 93), "username", [], "any", false, false, false, 93), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center text-white\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">";
                // line 98
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 98) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 98))), "html", null, true);
                yield "</p>
                        </div>

                        <div class=\"mt-4 flex justify-between items-center\">
                            <a href=\"";
                // line 102
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 102)]), "html", null, true);
                yield "\" class=\"bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600\">Voir les détails</a>
                            <button type=\"button\" 
                                class=\"text-red-500 hover:text-red-700\" 
                                data-id=\"";
                // line 105
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 105), "html", null, true);
                yield "\" 
                                data-title=\"";
                // line 106
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 106), "html_attr");
                yield "\" 
                                data-csrf=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 107))), "html", null, true);
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
            // line 117
            yield "        </div>
    ";
        } else {
            // line 119
            yield "        <p class=\"text-center text-gray-500 mb-20 mt-20\">Vous n'êtes MJ dans aucun parties pour le moment.</p>
    ";
        }
        // line 121
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
        // line 146
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["playerJdrs"]) || array_key_exists("playerJdrs", $context) ? $context["playerJdrs"] : (function () { throw new RuntimeError('Variable "playerJdrs" does not exist.', 146, $this->source); })()))) {
            // line 147
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8 mb-10\">
            ";
            // line 148
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["playerJdrs"]) || array_key_exists("playerJdrs", $context) ? $context["playerJdrs"] : (function () { throw new RuntimeError('Variable "playerJdrs" does not exist.', 148, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
                // line 149
                yield "                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"";
                // line 151
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 151))), "html", null, true);
                yield "\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-xs font-bold px-2 py-1 rounded 
                                ";
                // line 154
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 154) == "nouveau")) {
                    yield " bg-green-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 155
$context["jdr"], "status", [], "any", false, false, false, 155) == "en_cours")) {
                    yield " bg-blue-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 156
$context["jdr"], "status", [], "any", false, false, false, 156) == "termine")) {
                    yield " bg-red-500
                                ";
                } else {
                    // line 157
                    yield " bg-gray-700
                                ";
                }
                // line 158
                yield " text-white\">
                                ";
                // line 159
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 159) == "nouveau")) {
                    // line 160
                    yield "                                    Nouveau
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 161
$context["jdr"], "status", [], "any", false, false, false, 161) == "en_cours")) {
                    // line 162
                    yield "                                    En Cours
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 163
$context["jdr"], "status", [], "any", false, false, false, 163) == "termine")) {
                    // line 164
                    yield "                                    Terminé
                                ";
                } else {
                    // line 166
                    yield "                                    Statut inconnu
                                ";
                }
                // line 168
                yield "                            </span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <div class=\"flex justify-between items-center mb-4\">
                            <a href=\"";
                // line 173
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 173)]), "html", null, true);
                yield "\" class=\"text-lg font-semibold text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 173), "html", null, true);
                yield "</a>
                            <a href=\"";
                // line 174
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 174)]), "html", null, true);
                yield "\" class=\"bg-blue-600 hover:bg-blue-700 text-white font-semibold py-1.5 px-3 rounded-md text-sm transition-colors\">
                                Voir
                            </a>
                        </div>
                        <div class=\"flex items-center gap-2 mb-4\">
                            ";
                // line 179
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 179), "avatar", [], "any", false, false, false, 179)) {
                    // line 180
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 180), "avatar", [], "any", false, false, false, 180))), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
                } else {
                    // line 182
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
                }
                // line 184
                yield "                            <div class=\"text-white\">
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">";
                // line 186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 186), "username", [], "any", false, false, false, 186), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center text-white\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">";
                // line 191
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 191) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 191))), "html", null, true);
                yield "</p>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 196
            yield "        </div>
    ";
        } else {
            // line 198
            yield "        <p class=\"text-center text-gray-500 mb-20 mt-20\">Vous ne participez à aucun parties pour le moment.</p>
    ";
        }
        // line 200
        yield "    <h2 class=\"text-xl md:text-2xl font-bold mb-6 text-white\">Mes Favoris</h2>
    ";
        // line 201
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["favoriteJdrs"]) || array_key_exists("favoriteJdrs", $context) ? $context["favoriteJdrs"] : (function () { throw new RuntimeError('Variable "favoriteJdrs" does not exist.', 201, $this->source); })()))) {
            // line 202
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 md:gap-8\">
            ";
            // line 203
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favoriteJdrs"]) || array_key_exists("favoriteJdrs", $context) ? $context["favoriteJdrs"] : (function () { throw new RuntimeError('Variable "favoriteJdrs" does not exist.', 203, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
                // line 204
                yield "                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 206))), "html", null, true);
                yield "\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-xs font-bold px-2 py-1 rounded 
                                ";
                // line 209
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 209) == "nouveau")) {
                    yield " bg-green-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 210
$context["jdr"], "status", [], "any", false, false, false, 210) == "en_cours")) {
                    yield " bg-blue-500
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 211
$context["jdr"], "status", [], "any", false, false, false, 211) == "termine")) {
                    yield " bg-red-500
                                ";
                } else {
                    // line 212
                    yield " bg-gray-700
                                ";
                }
                // line 213
                yield " text-white\">
                                ";
                // line 214
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 214) == "nouveau")) {
                    // line 215
                    yield "                                    Nouveau
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 216
$context["jdr"], "status", [], "any", false, false, false, 216) == "en_cours")) {
                    // line 217
                    yield "                                    En Cours
                                ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 218
$context["jdr"], "status", [], "any", false, false, false, 218) == "termine")) {
                    // line 219
                    yield "                                    Terminé
                                ";
                } else {
                    // line 221
                    yield "                                    Statut inconnu
                                ";
                }
                // line 223
                yield "                            </span>
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <div class=\"flex justify-between items-center mb-4\">
                            <a href=\"";
                // line 228
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 228)]), "html", null, true);
                yield "\" class=\"text-lg font-semibold text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 228), "html", null, true);
                yield "</a>
                            <a href=\"";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_favorite", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 229)]), "html", null, true);
                yield "\" class=\"bg-red-500 hover:bg-red-600 text-white font-semibold py-1.5 px-3 rounded-md text-sm transition-colors\">
                                Retirer des Favoris
                            </a>
                        </div>
                        <div class=\"flex items-center gap-2 mb-4\">
                            ";
                // line 234
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 234), "avatar", [], "any", false, false, false, 234)) {
                    // line 235
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 235), "avatar", [], "any", false, false, false, 235))), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
                } else {
                    // line 237
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
                }
                // line 239
                yield "                            <div class=\"text-white\">
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">";
                // line 241
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 241), "username", [], "any", false, false, false, 241), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center text-white\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">";
                // line 246
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 246) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 246))), "html", null, true);
                yield "</p>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 251
            yield "        </div>
    ";
        } else {
            // line 253
            yield "        <p class=\"text-center text-gray-500 mb-20 mt-20\">Vous n'avez aucun jeu de rôle en favori pour le moment.</p>
    ";
        }
        // line 255
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
        return array (  607 => 255,  603 => 253,  599 => 251,  588 => 246,  580 => 241,  576 => 239,  570 => 237,  564 => 235,  562 => 234,  554 => 229,  548 => 228,  541 => 223,  537 => 221,  533 => 219,  531 => 218,  528 => 217,  526 => 216,  523 => 215,  521 => 214,  518 => 213,  514 => 212,  509 => 211,  505 => 210,  501 => 209,  495 => 206,  491 => 204,  487 => 203,  484 => 202,  482 => 201,  479 => 200,  475 => 198,  471 => 196,  460 => 191,  452 => 186,  448 => 184,  442 => 182,  436 => 180,  434 => 179,  426 => 174,  420 => 173,  413 => 168,  409 => 166,  405 => 164,  403 => 163,  400 => 162,  398 => 161,  395 => 160,  393 => 159,  390 => 158,  386 => 157,  381 => 156,  377 => 155,  373 => 154,  367 => 151,  363 => 149,  359 => 148,  356 => 147,  354 => 146,  327 => 121,  323 => 119,  319 => 117,  303 => 107,  299 => 106,  295 => 105,  289 => 102,  282 => 98,  274 => 93,  270 => 91,  264 => 89,  258 => 87,  256 => 86,  251 => 84,  245 => 80,  241 => 78,  237 => 76,  235 => 75,  232 => 74,  230 => 73,  227 => 72,  225 => 71,  222 => 70,  218 => 69,  213 => 68,  209 => 67,  205 => 66,  199 => 63,  195 => 61,  191 => 60,  188 => 59,  186 => 58,  183 => 57,  175 => 55,  169 => 53,  167 => 52,  161 => 48,  153 => 43,  150 => 42,  142 => 37,  139 => 36,  137 => 35,  113 => 14,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
    
        {% if countOwnedJdrs >= maxParties and not isVip %}
            <a 
                href=\"{{ path('app_vip') }}\" 
                class=\"w-full md:w-auto bg-red-500 text-white p-2.5 rounded-lg shadow hover:bg-red-600 text-center\">
                Limite atteinte
            </a>
        {% else %}
            <a 
                href=\"{{ path('app_groupe_j_d_r_new') }}\" 
                class=\"w-full md:w-auto bg-green-500 text-white p-2.5 rounded-lg shadow hover:bg-green-600 text-center\">
                Créer mon Univers
            </a>
        {% endif %}
    </div>

    <h2 class=\"text-xl md:text-2xl font-bold mb-6 text-white\">
        Mes Parties (MJ) 
        {% if isVip %}
            {{ countOwnedJdrs }} / ∞)
        {% else %}
            [{{ countOwnedJdrs }} / {{ maxParties }}]
        {% endif %}
    </h2>
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
