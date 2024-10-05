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

/* groupe_jdr/index.html.twig */
class __TwigTemplate_6ac6e39aeb26c8776dc434bae93febd7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "groupe_jdr/index.html.twig", 1);
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

        yield "DiceFinder | Les Univers";
        
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
        yield "
<style>
    .card {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .card.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>
<div class=\"container mx-auto px-4 p-6\">
    <h1 class=\"text-2xl md:text-4xl font-bold text-center mb-10 text-white\">Les Univers</h1>

    <form method=\"get\" action=\"";
        // line 22
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"mb-8 flex items-center space-x-2\">
        <input type=\"text\" name=\"search\" placeholder=\"Rechercher un Univers...\" value=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 23, $this->source); })()), "html", null, true);
        yield "\" class=\"w-full p-3 bg-gray-800 border border-white text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500\">

        <button type=\"submit\" class=\"bg-blue-500 text-white p-2.5 md:p-3 rounded-lg shadow hover:bg-blue-600 text-center flex items-center justify-center space-x-2 md:w-auto\">
            <span class=\"hidden md:block\">Rechercher</span>
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z\" />
            </svg>
        </button>
    </form>

    <div class=\"flex flex-wrap justify-center space-x-2 mb-4\">
        ";
        // line 34
        if ((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 34, $this->source); })())) {
            // line 35
            yield "            <div class=\"px-3 py-2 bg-blue-600 text-white rounded-lg\">
                Recherche: \"";
            // line 36
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 36, $this->source); })()), "html", null, true);
            yield "\"
                <a href=\"";
            // line 37
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
            yield "\" class=\"ml-2 text-sm text-white\">&times;</a>
            </div>
        ";
        }
        // line 40
        yield "
        ";
        // line 41
        if ((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 41, $this->source); })())) {
            // line 42
            yield "            <div class=\"px-3 py-2 bg-blue-600 text-white rounded-lg\">
                Catégorie: \"";
            // line 43
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 43, $this->source); })()), "name", [], "any", false, false, false, 43), "html", null, true);
            yield "\"
                <a href=\"";
            // line 44
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
            yield "\" class=\"ml-2 text-sm text-white\">&times;</a>
            </div>
        ";
        }
        // line 47
        yield "    </div>

    <div class=\"flex flex-wrap justify-center mb-8\">
        <a href=\"";
        // line 50
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"m-2 px-3 py-2 bg-gray-700 text-white rounded-lg hover:bg-blue-600\">Toutes</a>
        ";
        // line 51
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 51, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 52
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index", ["category" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 52)]), "html", null, true);
            yield "\" class=\"m-2 px-3 py-2 bg-gray-700 text-white rounded-lg hover:bg-blue-600\">
                ";
            // line 53
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 53), "html", null, true);
            yield "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        yield "
        ";
        // line 57
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 57, $this->source); })())) > 5)) {
            // line 58
            yield "            <div class=\"relative\">
                <button class=\"m-2 px-3 py-2 bg-gray-700 text-white rounded-lg hover:bg-blue-600 focus:outline-none\" id=\"more-categories-btn\">
                    Plus
                </button>
                <div id=\"more-categories-menu\" class=\"hidden absolute mt-2 bg-gray-700 text-white rounded-lg shadow-lg p-2 w-40 z-10\">
                    ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 63, $this->source); })()), 5, null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 64
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index", ["category" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 64)]), "html", null, true);
                yield "\" class=\"block px-3 py-2 hover:bg-blue-600 rounded\">
                            ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 65), "html", null, true);
                yield "
                        </a>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 68
            yield "                </div>
            </div>
        ";
        }
        // line 71
        yield "    </div>

    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupe_j_d_rs"]) || array_key_exists("groupe_j_d_rs", $context) ? $context["groupe_j_d_rs"] : (function () { throw new RuntimeError('Variable "groupe_j_d_rs" does not exist.', 74, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe_j_d_r"]) {
            // line 75
            yield "            <div class=\"card bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white relative\">
                <div class=\"relative\">
                    <img src=\"";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "picture", [], "any", false, false, false, 77))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 77), "html", null, true);
            yield " image\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                    <div class=\"absolute top-2 right-2\">
                        <span class=\"text-sm font-bold px-2 py-1 rounded 
                            ";
            // line 80
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "status", [], "any", false, false, false, 80) == "preparation")) {
                yield " bg-yellow-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 81
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 81) == "pret_a_jouer")) {
                yield " bg-green-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 82
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 82) == "en_cours")) {
                yield " bg-blue-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 83
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 83) == "complet")) {
                yield " bg-red-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 84
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 84) == "pause")) {
                yield " bg-gray-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 85
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 85) == "termine")) {
                yield " bg-purple-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 86
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 86) == "annule")) {
                yield " bg-gray-400
                            ";
            } else {
                // line 87
                yield " bg-gray-700
                            ";
            }
            // line 88
            yield " text-white\">
                            ";
            // line 89
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "status", [], "any", false, false, false, 89) == "preparation")) {
                // line 90
                yield "                                En Préparation
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 91
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 91) == "pret_a_jouer")) {
                // line 92
                yield "                                Prêt à jouer
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 93
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 93) == "en_cours")) {
                // line 94
                yield "                                En Cours
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 95
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 95) == "complet")) {
                // line 96
                yield "                                Complet
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 97
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 97) == "pause")) {
                // line 98
                yield "                                En Pause
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 99
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 99) == "termine")) {
                // line 100
                yield "                                Terminé
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 101
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 101) == "annule")) {
                // line 102
                yield "                                Annulé
                            ";
            } else {
                // line 104
                yield "                                Statut inconnu
                            ";
            }
            // line 106
            yield "                        </span>
                    </div>
                </div>

                <div class=\"flex justify-between items-center mb-2\">
                    <a href=\"";
            // line 111
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 111)]), "html", null, true);
            yield "\" class=\"font-semibold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 111), "html", null, true);
            yield "</a>
                    <a href=\"";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            yield "\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs\">Voir</a>
                </div>

                <div class=\"flex justify-between items-center mt-2\">
                    <div class=\"flex items-center\">
                        ";
            // line 117
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 117), "avatar", [], "any", false, false, false, 117)) {
                // line 118
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 118), "avatar", [], "any", false, false, false, 118))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded h-8 w-8 object-cover\">
                        ";
            } else {
                // line 120
                yield "                            <img class=\"rounded h-8 w-8 object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                        ";
            }
            // line 122
            yield "                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400\">MJ</p>
                            <p class=\"text-xs text-white\">";
            // line 124
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 124), "username", [], "any", false, false, false, 124), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                    <div class=\"text-right\">
                        <p class=\"text-xs text-gray-400\">Nombre de joueur</p>
                        <p class=\"text-lg font-bold text-white\">";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 129)), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 129), "html", null, true);
            yield "</p>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 134
            yield "            <p class=\"text-gray-700 text-lg\">No records found</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe_j_d_r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 136
        yield "    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const moreCategoriesBtn = document.getElementById('more-categories-btn');
        const moreCategoriesMenu = document.getElementById('more-categories-menu');
        const cards = document.querySelectorAll('.card');

        moreCategoriesBtn.addEventListener('click', function(event) {
            event.preventDefault();
            moreCategoriesMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            if (!moreCategoriesBtn.contains(event.target) && !moreCategoriesMenu.contains(event.target)) {
                moreCategoriesMenu.classList.add('hidden');
            }
        });

        function revealCards() {
            for (let i = 0; i < cards.length; i++) {
                setTimeout(function() {
                    cards[i].classList.add('visible');
                }, i * 150);
            }
        }
        revealCards();
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
        return "groupe_jdr/index.html.twig";
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
        return array (  395 => 136,  388 => 134,  376 => 129,  368 => 124,  364 => 122,  358 => 120,  352 => 118,  350 => 117,  342 => 112,  336 => 111,  329 => 106,  325 => 104,  321 => 102,  319 => 101,  316 => 100,  314 => 99,  311 => 98,  309 => 97,  306 => 96,  304 => 95,  301 => 94,  299 => 93,  296 => 92,  294 => 91,  291 => 90,  289 => 89,  286 => 88,  282 => 87,  277 => 86,  273 => 85,  269 => 84,  265 => 83,  261 => 82,  257 => 81,  253 => 80,  245 => 77,  241 => 75,  236 => 74,  231 => 71,  226 => 68,  217 => 65,  212 => 64,  208 => 63,  201 => 58,  199 => 57,  196 => 56,  187 => 53,  182 => 52,  178 => 51,  174 => 50,  169 => 47,  163 => 44,  159 => 43,  156 => 42,  154 => 41,  151 => 40,  145 => 37,  141 => 36,  138 => 35,  136 => 34,  122 => 23,  118 => 22,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DiceFinder | Les Univers{% endblock %}

{% block body %}

<style>
    .card {
        opacity: 0;
        transform: translateY(20px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .card.visible {
        opacity: 1;
        transform: translateY(0);
    }
</style>
<div class=\"container mx-auto px-4 p-6\">
    <h1 class=\"text-2xl md:text-4xl font-bold text-center mb-10 text-white\">Les Univers</h1>

    <form method=\"get\" action=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"mb-8 flex items-center space-x-2\">
        <input type=\"text\" name=\"search\" placeholder=\"Rechercher un Univers...\" value=\"{{ searchTerm }}\" class=\"w-full p-3 bg-gray-800 border border-white text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500\">

        <button type=\"submit\" class=\"bg-blue-500 text-white p-2.5 md:p-3 rounded-lg shadow hover:bg-blue-600 text-center flex items-center justify-center space-x-2 md:w-auto\">
            <span class=\"hidden md:block\">Rechercher</span>
            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z\" />
            </svg>
        </button>
    </form>

    <div class=\"flex flex-wrap justify-center space-x-2 mb-4\">
        {% if searchTerm %}
            <div class=\"px-3 py-2 bg-blue-600 text-white rounded-lg\">
                Recherche: \"{{ searchTerm }}\"
                <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"ml-2 text-sm text-white\">&times;</a>
            </div>
        {% endif %}

        {% if selectedCategory %}
            <div class=\"px-3 py-2 bg-blue-600 text-white rounded-lg\">
                Catégorie: \"{{ selectedCategory.name }}\"
                <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"ml-2 text-sm text-white\">&times;</a>
            </div>
        {% endif %}
    </div>

    <div class=\"flex flex-wrap justify-center mb-8\">
        <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"m-2 px-3 py-2 bg-gray-700 text-white rounded-lg hover:bg-blue-600\">Toutes</a>
        {% for category in categories[:5] %}
            <a href=\"{{ path('app_groupe_j_d_r_index', {'category': category.id}) }}\" class=\"m-2 px-3 py-2 bg-gray-700 text-white rounded-lg hover:bg-blue-600\">
                {{ category.name }}
            </a>
        {% endfor %}

        {% if categories|length > 5 %}
            <div class=\"relative\">
                <button class=\"m-2 px-3 py-2 bg-gray-700 text-white rounded-lg hover:bg-blue-600 focus:outline-none\" id=\"more-categories-btn\">
                    Plus
                </button>
                <div id=\"more-categories-menu\" class=\"hidden absolute mt-2 bg-gray-700 text-white rounded-lg shadow-lg p-2 w-40 z-10\">
                    {% for category in categories[5:] %}
                        <a href=\"{{ path('app_groupe_j_d_r_index', {'category': category.id}) }}\" class=\"block px-3 py-2 hover:bg-blue-600 rounded\">
                            {{ category.name }}
                        </a>
                    {% endfor %}
                </div>
            </div>
        {% endif %}
    </div>

    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
        {% for groupe_j_d_r in groupe_j_d_rs %}
            <div class=\"card bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white relative\">
                <div class=\"relative\">
                    <img src=\"{{ asset('uploads/images-jdr/' ~ groupe_j_d_r.picture) }}\" alt=\"{{ groupe_j_d_r.title }} image\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                    <div class=\"absolute top-2 right-2\">
                        <span class=\"text-sm font-bold px-2 py-1 rounded 
                            {% if groupe_j_d_r.status == 'preparation' %} bg-yellow-500
                            {% elseif groupe_j_d_r.status == 'pret_a_jouer' %} bg-green-500
                            {% elseif groupe_j_d_r.status == 'en_cours' %} bg-blue-500
                            {% elseif groupe_j_d_r.status == 'complet' %} bg-red-500
                            {% elseif groupe_j_d_r.status == 'pause' %} bg-gray-500
                            {% elseif groupe_j_d_r.status == 'termine' %} bg-purple-500
                            {% elseif groupe_j_d_r.status == 'annule' %} bg-gray-400
                            {% else %} bg-gray-700
                            {% endif %} text-white\">
                            {% if groupe_j_d_r.status == 'preparation' %}
                                En Préparation
                            {% elseif groupe_j_d_r.status == 'pret_a_jouer' %}
                                Prêt à jouer
                            {% elseif groupe_j_d_r.status == 'en_cours' %}
                                En Cours
                            {% elseif groupe_j_d_r.status == 'complet' %}
                                Complet
                            {% elseif groupe_j_d_r.status == 'pause' %}
                                En Pause
                            {% elseif groupe_j_d_r.status == 'termine' %}
                                Terminé
                            {% elseif groupe_j_d_r.status == 'annule' %}
                                Annulé
                            {% else %}
                                Statut inconnu
                            {% endif %}
                        </span>
                    </div>
                </div>

                <div class=\"flex justify-between items-center mb-2\">
                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"font-semibold\">{{ groupe_j_d_r.title }}</a>
                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs\">Voir</a>
                </div>

                <div class=\"flex justify-between items-center mt-2\">
                    <div class=\"flex items-center\">
                        {% if groupe_j_d_r.owner.avatar %}
                            <img src=\"{{ asset('uploads/avatars/' ~ groupe_j_d_r.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded h-8 w-8 object-cover\">
                        {% else %}
                            <img class=\"rounded h-8 w-8 object-cover\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                        {% endif %}
                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400\">MJ</p>
                            <p class=\"text-xs text-white\">{{ groupe_j_d_r.owner.username }}</p>
                        </div>
                    </div>
                    <div class=\"text-right\">
                        <p class=\"text-xs text-gray-400\">Nombre de joueur</p>
                        <p class=\"text-lg font-bold text-white\">{{ groupe_j_d_r.players|length }} / {{ groupe_j_d_r.maxPlayer }}</p>
                    </div>
                </div>
            </div>
        {% else %}
            <p class=\"text-gray-700 text-lg\">No records found</p>
        {% endfor %}
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const moreCategoriesBtn = document.getElementById('more-categories-btn');
        const moreCategoriesMenu = document.getElementById('more-categories-menu');
        const cards = document.querySelectorAll('.card');

        moreCategoriesBtn.addEventListener('click', function(event) {
            event.preventDefault();
            moreCategoriesMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            if (!moreCategoriesBtn.contains(event.target) && !moreCategoriesMenu.contains(event.target)) {
                moreCategoriesMenu.classList.add('hidden');
            }
        });

        function revealCards() {
            for (let i = 0; i < cards.length; i++) {
                setTimeout(function() {
                    cards[i].classList.add('visible');
                }, i * 150);
            }
        }
        revealCards();
    });
</script>
{% endblock %}
", "groupe_jdr/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\groupe_jdr\\index.html.twig");
    }
}
