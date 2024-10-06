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
<div class=\"container mx-auto px-4 p-6\">
    <h1 class=\"text-2xl md:text-4xl font-bold text-center mb-10 text-white\">Les Univers</h1>

    <form method=\"get\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"mb-8 flex items-center space-x-2\">
        <input type=\"text\" name=\"search\" placeholder=\"Rechercher un Univers...\" value=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 11, $this->source); })()), "html", null, true);
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
        // line 22
        if ((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 22, $this->source); })())) {
            // line 23
            yield "            <div class=\"px-3 py-2 bg-blue-600 text-white rounded-lg\">
                Recherche: \"";
            // line 24
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 24, $this->source); })()), "html", null, true);
            yield "\"
                <a href=\"";
            // line 25
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
            yield "\" class=\"ml-2 text-sm text-white\">&times;</a>
            </div>
        ";
        }
        // line 28
        yield "
        ";
        // line 29
        if ((isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 29, $this->source); })())) {
            // line 30
            yield "            <div class=\"px-3 py-2 bg-blue-600 text-white rounded-lg\">
                Catégorie: \"";
            // line 31
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["selectedCategory"]) || array_key_exists("selectedCategory", $context) ? $context["selectedCategory"] : (function () { throw new RuntimeError('Variable "selectedCategory" does not exist.', 31, $this->source); })()), "name", [], "any", false, false, false, 31), "html", null, true);
            yield "\"
                <a href=\"";
            // line 32
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
            yield "\" class=\"ml-2 text-sm text-white\">&times;</a>
            </div>
        ";
        }
        // line 35
        yield "    </div>

    <div class=\"flex flex-wrap justify-center mb-8\">
        <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"m-2 px-3 py-2 bg-gray-700 text-white rounded-lg hover:bg-blue-600\">Toutes</a>
        ";
        // line 39
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 39, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 40
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index", ["category" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 40)]), "html", null, true);
            yield "\" class=\"m-2 px-3 py-2 bg-gray-700 text-white rounded-lg hover:bg-blue-600\">
                ";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 41), "html", null, true);
            yield "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        yield "
        ";
        // line 45
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 45, $this->source); })())) > 5)) {
            // line 46
            yield "            <div class=\"relative\">
                <button class=\"m-2 px-3 py-2 bg-gray-700 text-white rounded-lg hover:bg-blue-600 focus:outline-none\" id=\"more-categories-btn\">
                    Plus
                </button>
                <div id=\"more-categories-menu\" class=\"hidden absolute mt-2 bg-gray-700 text-white rounded-lg shadow-lg p-2 w-40 z-10\">
                    ";
            // line 51
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 51, $this->source); })()), 5, null));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 52
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index", ["category" => CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\" class=\"block px-3 py-2 hover:bg-blue-600 rounded\">
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
            yield "                </div>
            </div>
        ";
        }
        // line 59
        yield "    </div>

    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
        ";
        // line 62
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupe_j_d_rs"]) || array_key_exists("groupe_j_d_rs", $context) ? $context["groupe_j_d_rs"] : (function () { throw new RuntimeError('Variable "groupe_j_d_rs" does not exist.', 62, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe_j_d_r"]) {
            // line 63
            yield "            <div class=\" bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white relative\">
                <div class=\"relative\">
                    <img src=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "picture", [], "any", false, false, false, 65))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 65), "html", null, true);
            yield " image\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                    <div class=\"absolute top-2 right-2\">
                        <span class=\"text-sm font-bold px-2 py-1 rounded 
                            ";
            // line 68
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "status", [], "any", false, false, false, 68) == "preparation")) {
                yield " bg-yellow-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 69
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 69) == "pret_a_jouer")) {
                yield " bg-green-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 70
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 70) == "en_cours")) {
                yield " bg-blue-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 71
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 71) == "complet")) {
                yield " bg-red-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 72
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 72) == "pause")) {
                yield " bg-gray-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 73
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 73) == "termine")) {
                yield " bg-purple-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 74
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 74) == "annule")) {
                yield " bg-gray-400
                            ";
            } else {
                // line 75
                yield " bg-gray-700
                            ";
            }
            // line 76
            yield " text-white\">
                            ";
            // line 77
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "status", [], "any", false, false, false, 77) == "preparation")) {
                // line 78
                yield "                                En Préparation
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 79
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 79) == "pret_a_jouer")) {
                // line 80
                yield "                                Prêt à jouer
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 81
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 81) == "en_cours")) {
                // line 82
                yield "                                En Cours
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 83
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 83) == "complet")) {
                // line 84
                yield "                                Complet
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 85
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 85) == "pause")) {
                // line 86
                yield "                                En Pause
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 87
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 87) == "termine")) {
                // line 88
                yield "                                Terminé
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 89
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 89) == "annule")) {
                // line 90
                yield "                                Annulé
                            ";
            } else {
                // line 92
                yield "                                Statut inconnu
                            ";
            }
            // line 94
            yield "                        </span>
                    </div>
                </div>

                <div class=\"flex justify-between items-center mb-2\">
                    <a href=\"";
            // line 99
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 99)]), "html", null, true);
            yield "\" class=\"font-semibold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 99), "html", null, true);
            yield "</a>
                    <a href=\"";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 100)]), "html", null, true);
            yield "\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs\">Voir</a>
                </div>

                <div class=\"flex justify-between items-center mt-2\">
                    <div class=\"flex items-center\">
                        ";
            // line 105
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 105), "avatar", [], "any", false, false, false, 105)) {
                // line 106
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 106), "avatar", [], "any", false, false, false, 106))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded h-8 w-8 object-cover\">
                        ";
            } else {
                // line 108
                yield "                            <img class=\"rounded h-8 w-8 object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                        ";
            }
            // line 110
            yield "                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400\">MJ</p>
                            <p class=\"text-xs text-white\">";
            // line 112
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 112), "username", [], "any", false, false, false, 112), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                    <div class=\"text-right\">
                        <p class=\"text-xs text-gray-400\">Nombre de joueur</p>
                        <p class=\"text-lg font-bold text-white\">";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 117)), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 117), "html", null, true);
            yield "</p>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 122
            yield "            <p class=\"text-gray-700 text-lg\">Aucun résultat trouvé</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe_j_d_r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 124
        yield "    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const moreCategoriesBtn = document.getElementById('more-categories-btn');
        const moreCategoriesMenu = document.getElementById('more-categories-menu');

        moreCategoriesBtn.addEventListener('click', function(event) {
            event.preventDefault();
            moreCategoriesMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            if (!moreCategoriesBtn.contains(event.target) && !moreCategoriesMenu.contains(event.target)) {
                moreCategoriesMenu.classList.add('hidden');
            }
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
        return array (  383 => 124,  376 => 122,  364 => 117,  356 => 112,  352 => 110,  346 => 108,  340 => 106,  338 => 105,  330 => 100,  324 => 99,  317 => 94,  313 => 92,  309 => 90,  307 => 89,  304 => 88,  302 => 87,  299 => 86,  297 => 85,  294 => 84,  292 => 83,  289 => 82,  287 => 81,  284 => 80,  282 => 79,  279 => 78,  277 => 77,  274 => 76,  270 => 75,  265 => 74,  261 => 73,  257 => 72,  253 => 71,  249 => 70,  245 => 69,  241 => 68,  233 => 65,  229 => 63,  224 => 62,  219 => 59,  214 => 56,  205 => 53,  200 => 52,  196 => 51,  189 => 46,  187 => 45,  184 => 44,  175 => 41,  170 => 40,  166 => 39,  162 => 38,  157 => 35,  151 => 32,  147 => 31,  144 => 30,  142 => 29,  139 => 28,  133 => 25,  129 => 24,  126 => 23,  124 => 22,  110 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DiceFinder | Les Univers{% endblock %}

{% block body %}

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
            <div class=\" bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white relative\">
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
            <p class=\"text-gray-700 text-lg\">Aucun résultat trouvé</p>
        {% endfor %}
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const moreCategoriesBtn = document.getElementById('more-categories-btn');
        const moreCategoriesMenu = document.getElementById('more-categories-menu');

        moreCategoriesBtn.addEventListener('click', function(event) {
            event.preventDefault();
            moreCategoriesMenu.classList.toggle('hidden');
        });

        document.addEventListener('click', function(event) {
            if (!moreCategoriesBtn.contains(event.target) && !moreCategoriesMenu.contains(event.target)) {
                moreCategoriesMenu.classList.add('hidden');
            }
        });
    });
</script>
{% endblock %}
", "groupe_jdr/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\groupe_jdr\\index.html.twig");
    }
}
