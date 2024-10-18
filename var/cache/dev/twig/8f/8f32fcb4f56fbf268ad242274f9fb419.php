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
        // line 3
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "groupe_jdr/index.html.twig", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 5
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

    // line 7
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

        // line 8
        yield "<div class=\"container mx-auto px-4 p-6\">
    <div class=\"flex justify-center items-center mb-10\">
        <h1 class=\"text-2xl md:text-4xl font-bold text-center text-white\">Les Univers</h1>
    </div>
    <div id=\"alert-message\" class=\"p-4 mb-4 text-sm text-amber-800 rounded-xl bg-amber-50 font-normal hidden\" role=\"alert\">
        <span class=\"font-semibold mr-2\">Warning</span><span id=\"alert-text\">Your subscription payment is in pending</span>
    </div>

    <form id=\"filter-form\" method=\"get\" action=\"";
        // line 16
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"mb-8 space-y-4\">
        <div class=\"flex flex-col items-center mb-6 space-y-4\">
            <div class=\"flex items-center gap-4 w-full max-w-3xl mx-auto justify-center relative\">
                <div class=\"relative flex-grow transform transition duration-300 hover:scale-105 hover:shadow-xl\">
                    <input type=\"text\" name=\"search\" placeholder=\"Tapez le titre ou le pseudo du MJ...\" value=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 20, $this->source); })()), "html", null, true);
        yield "\"
                        class=\"w-full pl-4 pr-14 py-3 text-white bg-gray-900 border border-gray-700 rounded-full focus:outline-none focus:ring-4 focus:ring-blue-500 transition duration-300 ease-in-out transform hover:shadow-md focus:shadow-lg\" />
                    <button type=\"submit\"
                        class=\"absolute right-2 top-1/2 transform -translate-y-1/2 w-9 h-9 flex items-center justify-center bg-blue-600 text-white rounded-full shadow-md border-2 border-transparent hover:border-blue-800 hover:bg-blue-700 hover:text-white hover:shadow-lg transition-all duration-300 ease-in-out\">
                        <svg class=\"h-4 w-4\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z\" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class=\"flex flex-wrap justify-between items-center gap-2 mb-6\">
            <div class=\"relative w-full md:w-auto\" id=\"sort-wrapper\">
                <button type=\"button\" id=\"sort-btn\" class=\"w-full md:w-auto bg-blue-600 text-white px-6 py-3 rounded-full shadow-md border-2 border-transparent hover:border-blue-800 hover:bg-blue-700 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out flex items-center justify-center\">
                    Trier par
                    <svg id=\"sort-chevron\" xmlns=\"http://www.w3.org/2000/svg\" class=\"ml-2 h-5 w-5 transition-transform duration-300 transform\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\" />
                    </svg>
                </button>
                <div id=\"sort-menu\" class=\"absolute top-full mt-2 hidden w-48 bg-white text-black rounded-lg shadow-lg p-4 z-10 space-y-2\">
                    <button type=\"button\" class=\"sort-btn w-full text-left bg-gray-800 text-white p-2 rounded shadow-md border-2 border-transparent hover:border-blue-500 hover:bg-blue-500 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out\" data-sort=\"newest\">
                        Nouveaux
                        <svg class=\"selected-icon hidden ml-2 w-5 h-5 text-yellow-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                            <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm-1-4l6-6H5l4 4zm0-2L5 7h10l-4 4z\" clip-rule=\"evenodd\" />
                        </svg>
                    </button>
                    <button type=\"button\" class=\"sort-btn w-full text-left bg-gray-800 text-white p-2 rounded shadow-md border-2 border-transparent hover:border-blue-500 hover:bg-blue-500 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out\" data-sort=\"oldest\">
                        Anciens
                        <svg class=\"selected-icon hidden ml-2 w-5 h-5 text-yellow-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                            <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm-1-4l6-6H5l4 4zm0-2L5 7h10l-4 4z\" clip-rule=\"evenodd\" />
                        </svg>
                    </button>

                    <div class=\"flex items-center space-x-2\">
                        <button id=\"recruitment-toggle\" type=\"button\" class=\"bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\" role=\"switch\" aria-checked=\"";
        // line 55
        yield (((isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 55, $this->source); })())) ? ("true") : ("false"));
        yield "\">
                            <span class=\"sr-only\">Recrutement</span>
                            <span class=\"";
        // line 57
        yield (((isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 57, $this->source); })())) ? ("translate-x-5") : ("translate-x-0"));
        yield " pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out\">
                                <span class=\"";
        // line 58
        yield (((isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 58, $this->source); })())) ? ("opacity-0 ease-out duration-100") : ("opacity-100 ease-in duration-200"));
        yield " absolute inset-0 flex h-full w-full items-center justify-center transition-opacity\" aria-hidden=\"true\">
                                    <svg class=\"h-3 w-3 text-gray-400\" fill=\"none\" viewBox=\"0 0 12 12\">
                                        <path d=\"M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </span>
                                <span class=\"";
        // line 63
        yield (((isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 63, $this->source); })())) ? ("opacity-100 ease-in duration-200") : ("opacity-0 ease-out duration-100"));
        yield " absolute inset-0 flex h-full w-full items-center justify-center transition-opacity\" aria-hidden=\"true\">
                                    <svg class=\"h-3 w-3 text-indigo-600\" fill=\"currentColor\" viewBox=\"0 0 12 12\">
                                        <path d=\"M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z\" />
                                    </svg>
                                </span>
                            </span>
                        </button>
                        <span class=\"text-gray-800 font-medium\">Recrutement</span>
                    </div>

                </div>
            </div>

            <div class=\"w-full md:w-auto flex flex-wrap items-center justify-center gap-4\">
                ";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 77, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 78
            yield "                    <button type=\"button\" class=\"category-btn bg-gray-800 text-white px-6 py-3 rounded-full shadow-md border-2 border-transparent hover:border-blue-500 hover:bg-blue-500 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out w-full md:w-auto category-selected\" data-category-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 78), "html", null, true);
            yield "\">
                        ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 79), "html", null, true);
            yield "
                    </button>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "                <div class=\"relative w-full md:w-auto mt-2 md:mt-0\">
                    <button type=\"button\" id=\"more-categories-btn\" class=\"w-full md:w-auto bg-blue-600 text-white px-6 py-3 rounded-full shadow-md border-2 border-transparent hover:border-blue-800 hover:bg-blue-700 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out flex items-center justify-center\">
                        <span id=\"more-categories-text\">Plus</span>
                        <svg id=\"more-chevron\" xmlns=\"http://www.w3.org/2000/svg\" class=\"ml-2 h-5 w-5 transition-transform duration-300 transform\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\" />
                        </svg>
                    </button>
                    <div id=\"more-categories-menu\" class=\"absolute top-full mt-2 hidden w-48 bg-white text-black rounded-lg shadow-lg p-4 z-10 space-y-2\">
                        ";
        // line 90
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 90, $this->source); })()), 5));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 91
            yield "                            <button type=\"button\" class=\"category-btn bg-gray-800 text-white w-full text-left px-4 py-2 rounded shadow-md border-2 border-transparent hover:border-blue-500 hover:bg-blue-500 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out\" data-category-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 91), "html", null, true);
            yield "\">
                                ";
            // line 92
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 92), "html", null, true);
            yield "
                            </button>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 95
        yield "                    </div>
                </div>
            </div>
        </div>

        ";
        // line 100
        if ((isset($context["selectedCategories"]) || array_key_exists("selectedCategories", $context) ? $context["selectedCategories"] : (function () { throw new RuntimeError('Variable "selectedCategories" does not exist.', 100, $this->source); })())) {
            // line 101
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["selectedCategories"]) || array_key_exists("selectedCategories", $context) ? $context["selectedCategories"] : (function () { throw new RuntimeError('Variable "selectedCategories" does not exist.', 101, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categoryId"]) {
                // line 102
                yield "                <input type=\"hidden\" name=\"category[]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["categoryId"], "html", null, true);
                yield "\">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categoryId'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            yield "        ";
        }
        // line 105
        yield "        <input type=\"hidden\" name=\"sort\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 105, $this->source); })()), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"recruitment\" value=\"";
        // line 106
        yield (((isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 106, $this->source); })())) ? ("1") : ("0"));
        yield "\">
    </form>

    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupe_j_d_rs"]) || array_key_exists("groupe_j_d_rs", $context) ? $context["groupe_j_d_rs"] : (function () { throw new RuntimeError('Variable "groupe_j_d_rs" does not exist.', 110, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe_j_d_r"]) {
            // line 111
            yield "            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                style=\"will-change: transform;\">
                <a href=\"";
            // line 113
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 113)]), "html", null, true);
            yield "\" class=\"block\">
                    <div class=\"relative\">
                        <img src=\"";
            // line 115
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "picture", [], "any", false, false, false, 115))), "html", null, true);
            yield "\" 
                            alt=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 116), "html", null, true);
            yield " image\" 
                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 117
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 117)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 117))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                ";
            // line 120
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "status", [], "any", false, false, false, 120) == "nouveau")) {
                yield " bg-green-600
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 121
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 121) == "en_cours")) {
                yield " bg-blue-500
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 122
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 122) == "termine")) {
                yield " bg-red-500
                                ";
            } else {
                // line 123
                yield " bg-gray-700
                                ";
            }
            // line 124
            yield " text-white\">
                                ";
            // line 125
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "status", [], "any", false, false, false, 125) == "nouveau")) {
                // line 126
                yield "                                    Nouveau
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 127
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 127) == "en_cours")) {
                // line 128
                yield "                                    En Cours
                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 129
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 129) == "termine")) {
                // line 130
                yield "                                    Terminé
                                ";
            } else {
                // line 132
                yield "                                    Statut inconnu
                                ";
            }
            // line 134
            yield "                            </span>
                        </div>
                    </div>
                </a>
                <div class=\"mb-2\">
                    <a href=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 139)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 139), "html", null, true);
            yield "</a>
                </div>
                <div class=\"flex justify-between items-center mt-2\">
                    <a href=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 142), "id", [], "any", false, false, false, 142)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                        ";
            // line 143
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 143), "avatar", [], "any", false, false, false, 143)) {
                // line 144
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 144), "avatar", [], "any", false, false, false, 144))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                        ";
            } else {
                // line 146
                yield "                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                        ";
            }
            // line 148
            yield "                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 150), "username", [], "any", false, false, false, 150), "html", null, true);
            yield "</p>
                        </div>
                    </a>
                    <div class=\"flex items-center text-right gap-1\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                        </svg>
                        ";
            // line 157
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 157)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 157))) {
                // line 158
                yield "                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                        ";
            } else {
                // line 160
                yield "                            <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 160)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 160), "html", null, true);
                yield "</p>
                        ";
            }
            // line 162
            yield "                    </div>
                </div>
            </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 166
            yield "                <p class=\"text-gray-700 text-lg\">Aucun résultat trouvé</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe_j_d_r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 168
        yield "        </div>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const categoryButtons = document.querySelectorAll('.category-btn');
    const form = document.getElementById('filter-form');

    const moreCategoriesBtn = document.getElementById('more-categories-btn');
    const moreCategoriesMenu = document.getElementById('more-categories-menu');
    const sortBtn = document.getElementById('sort-btn');
    const sortMenu = document.getElementById('sort-menu');
    const sortChevron = document.getElementById('sort-chevron');
    const moreChevron = document.getElementById('more-chevron');
    const alertDiv = document.getElementById('alert-message');
    const alertText = document.getElementById('alert-text');
    const recruitmentToggle = document.getElementById('recruitment-toggle');

    moreCategoriesMenu.addEventListener('mouseleave', function () {
        moreCategoriesMenu.classList.add('hidden');
        moreChevron.classList.remove('rotate-180');
    });

    sortMenu.addEventListener('mouseleave', function () {
        sortMenu.classList.add('hidden');
        sortChevron.classList.remove('rotate-180');
    });

    const sortWrapper = document.getElementById('sort-wrapper');
    const moreCategoriesBtnWrapper = document.querySelector('.relative.w-full.md\\\\:w-auto.mt-2.md\\\\:mt-0');

    function updateSortButtonPosition() {
        if (window.innerWidth < 1280) {
            moreCategoriesBtnWrapper.parentNode.insertBefore(sortWrapper, moreCategoriesBtnWrapper.nextSibling);
        } else {
            const container = document.querySelector('.flex.flex-wrap.justify-between.items-center.gap-2.mb-6');
            if (container) {
                container.insertBefore(sortWrapper, container.firstChild);
            }
        }
    }

    updateSortButtonPosition();
    window.addEventListener('resize', updateSortButtonPosition);

    const selectedCategories = ";
        // line 213
        yield json_encode((isset($context["selectedCategories"]) || array_key_exists("selectedCategories", $context) ? $context["selectedCategories"] : (function () { throw new RuntimeError('Variable "selectedCategories" does not exist.', 213, $this->source); })()));
        yield ";
    categoryButtons.forEach(button => {
        const categoryId = button.dataset.categoryId;
        if (selectedCategories.includes(categoryId)) {
            button.classList.add('bg-green-600', 'border-green-800', 'text-white');
        }
    });

    const maxCategories = 3;

categoryButtons.forEach(button => {
        button.addEventListener('click', function () {
            const categoryId = this.dataset.categoryId;
            const selectedButtons = document.querySelectorAll('.category-btn.bg-green-600');

            if (button.classList.contains('bg-green-600')) {
                button.classList.remove('bg-green-600', 'border-green-800', 'text-white');
                const hiddenInput = form.querySelector(`input[name=\"category[]\"][value=\"\${categoryId}\"]`);
                if (hiddenInput) {
                    hiddenInput.remove();
                }
            } else {
                if (selectedButtons.length >= maxCategories) {
                    showTemporaryMessage(\"Vous ne pouvez sélectionner que trois catégories au maximum.\");
                    return;
                }
                button.classList.add('bg-green-600', 'border-green-800', 'text-white');
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'category[]';
                input.value = categoryId;
                form.appendChild(input);
            }

            form.submit();
        });
    });

    function showTemporaryMessage(message) {
        alertText.innerText = message;

        alertDiv.classList.remove('hidden');

        setTimeout(() => {
            alertDiv.classList.add('hidden');
        }, 5000);
    }


    moreCategoriesBtn.addEventListener('click', function () {
        moreCategoriesMenu.classList.toggle('hidden');
        moreChevron.classList.toggle('rotate-180');
    });

    sortBtn.addEventListener('click', function () {
        sortMenu.classList.toggle('hidden');
        sortChevron.classList.toggle('rotate-180');
    });

    document.addEventListener('click', function (event) {
        if (!moreCategoriesBtn.contains(event.target) && !moreCategoriesMenu.contains(event.target)) {
            moreCategoriesMenu.classList.add('hidden');
            moreChevron.classList.remove('rotate-180');
        }
        if (!sortBtn.contains(event.target) && !sortMenu.contains(event.target)) {
            sortMenu.classList.add('hidden');
            sortChevron.classList.remove('rotate-180');
        }
    });

    const sortButtons = document.querySelectorAll('#sort-menu button');
    let sortInput = form.querySelector('input[name=\"sort\"]');

    if (!sortInput || !sortInput.value || sortInput.value === 'undefined') {
        sortInput = createHiddenInput('sort', 'newest');
    }

    if (sortInput && sortInput.value) {
        const currentSort = sortInput.value;
        sortButtons.forEach(button => {
            const icon = button.querySelector('.selected-icon');
            if (currentSort === button.dataset.sort) {
                button.classList.add('bg-yellow-600', 'text-white');
                if (icon) icon.classList.remove('hidden');
            }
        });
    }

    sortButtons.forEach(button => {
        button.addEventListener('click', function () {
            sortButtons.forEach(btn => {
                btn.classList.remove('bg-yellow-600', 'text-white');
                const icon = btn.querySelector('.selected-icon');
                if (icon) icon.classList.add('hidden');
            });

            button.classList.add('bg-yellow-600', 'text-white');
            const icon = button.querySelector('.selected-icon');
            if (icon) icon.classList.remove('hidden');

            sortInput.value = button.dataset.sort;

            submitFormWithAllValues();
        });
    });

    recruitmentToggle.addEventListener('click', function () {
        const isChecked = recruitmentToggle.getAttribute('aria-checked') === 'true';
        const toggleCircle = recruitmentToggle.querySelector('span.inline-block');

        if (isChecked) {
            recruitmentToggle.setAttribute('aria-checked', 'false');
            recruitmentToggle.classList.remove('bg-indigo-600');
            recruitmentToggle.classList.add('bg-gray-200');
            toggleCircle.classList.remove('translate-x-5');
            toggleCircle.classList.add('translate-x-0');
        } else {
            recruitmentToggle.setAttribute('aria-checked', 'true');
            recruitmentToggle.classList.remove('bg-gray-200');
            recruitmentToggle.classList.add('bg-indigo-600');
            toggleCircle.classList.remove('translate-x-0');
            toggleCircle.classList.add('translate-x-5');
        }

        let recruitmentInput = form.querySelector('input[name=\"recruitment\"]');
        if (!recruitmentInput) {
            recruitmentInput = createHiddenInput('recruitment', isChecked ? '0' : '1');
        } else {
            recruitmentInput.value = isChecked ? '0' : '1';
        }

        submitFormWithAllValues();
    });

    function submitFormWithAllValues() {
        if (!sortInput.value || sortInput.value === 'undefined') {
            sortInput.value = 'newest';
        }

        let recruitmentInput = form.querySelector('input[name=\"recruitment\"]');
        if (!recruitmentInput) {
            const isChecked = recruitmentToggle.getAttribute('aria-checked') === 'true';
            recruitmentInput = createHiddenInput('recruitment', isChecked ? '1' : '0');
        }

        form.querySelectorAll('input[name=\"category[]\"]').forEach(input => input.remove());
        const selectedCategories = document.querySelectorAll('.category-btn.bg-green-600');
        selectedCategories.forEach(button => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'category[]';
            input.value = button.dataset.categoryId;
            form.appendChild(input);
        });

        form.submit();
    }

    function createHiddenInput(name, value) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = name;
        input.value = value;
        form.appendChild(input);
        return input;
    }
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
        return array (  466 => 213,  419 => 168,  412 => 166,  404 => 162,  396 => 160,  392 => 158,  390 => 157,  380 => 150,  376 => 148,  370 => 146,  364 => 144,  362 => 143,  358 => 142,  350 => 139,  343 => 134,  339 => 132,  335 => 130,  333 => 129,  330 => 128,  328 => 127,  325 => 126,  323 => 125,  320 => 124,  316 => 123,  311 => 122,  307 => 121,  303 => 120,  295 => 117,  291 => 116,  287 => 115,  282 => 113,  278 => 111,  273 => 110,  266 => 106,  261 => 105,  258 => 104,  249 => 102,  244 => 101,  242 => 100,  235 => 95,  226 => 92,  221 => 91,  217 => 90,  207 => 82,  198 => 79,  193 => 78,  189 => 77,  172 => 63,  164 => 58,  160 => 57,  155 => 55,  117 => 20,  110 => 16,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# templates/groupe_jdr/index.html.twig #}

{% extends 'base.html.twig' %}

{% block title %}DiceFinder | Les Univers{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 p-6\">
    <div class=\"flex justify-center items-center mb-10\">
        <h1 class=\"text-2xl md:text-4xl font-bold text-center text-white\">Les Univers</h1>
    </div>
    <div id=\"alert-message\" class=\"p-4 mb-4 text-sm text-amber-800 rounded-xl bg-amber-50 font-normal hidden\" role=\"alert\">
        <span class=\"font-semibold mr-2\">Warning</span><span id=\"alert-text\">Your subscription payment is in pending</span>
    </div>

    <form id=\"filter-form\" method=\"get\" action=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"mb-8 space-y-4\">
        <div class=\"flex flex-col items-center mb-6 space-y-4\">
            <div class=\"flex items-center gap-4 w-full max-w-3xl mx-auto justify-center relative\">
                <div class=\"relative flex-grow transform transition duration-300 hover:scale-105 hover:shadow-xl\">
                    <input type=\"text\" name=\"search\" placeholder=\"Tapez le titre ou le pseudo du MJ...\" value=\"{{ searchTerm }}\"
                        class=\"w-full pl-4 pr-14 py-3 text-white bg-gray-900 border border-gray-700 rounded-full focus:outline-none focus:ring-4 focus:ring-blue-500 transition duration-300 ease-in-out transform hover:shadow-md focus:shadow-lg\" />
                    <button type=\"submit\"
                        class=\"absolute right-2 top-1/2 transform -translate-y-1/2 w-9 h-9 flex items-center justify-center bg-blue-600 text-white rounded-full shadow-md border-2 border-transparent hover:border-blue-800 hover:bg-blue-700 hover:text-white hover:shadow-lg transition-all duration-300 ease-in-out\">
                        <svg class=\"h-4 w-4\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z\" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div class=\"flex flex-wrap justify-between items-center gap-2 mb-6\">
            <div class=\"relative w-full md:w-auto\" id=\"sort-wrapper\">
                <button type=\"button\" id=\"sort-btn\" class=\"w-full md:w-auto bg-blue-600 text-white px-6 py-3 rounded-full shadow-md border-2 border-transparent hover:border-blue-800 hover:bg-blue-700 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out flex items-center justify-center\">
                    Trier par
                    <svg id=\"sort-chevron\" xmlns=\"http://www.w3.org/2000/svg\" class=\"ml-2 h-5 w-5 transition-transform duration-300 transform\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\" />
                    </svg>
                </button>
                <div id=\"sort-menu\" class=\"absolute top-full mt-2 hidden w-48 bg-white text-black rounded-lg shadow-lg p-4 z-10 space-y-2\">
                    <button type=\"button\" class=\"sort-btn w-full text-left bg-gray-800 text-white p-2 rounded shadow-md border-2 border-transparent hover:border-blue-500 hover:bg-blue-500 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out\" data-sort=\"newest\">
                        Nouveaux
                        <svg class=\"selected-icon hidden ml-2 w-5 h-5 text-yellow-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                            <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm-1-4l6-6H5l4 4zm0-2L5 7h10l-4 4z\" clip-rule=\"evenodd\" />
                        </svg>
                    </button>
                    <button type=\"button\" class=\"sort-btn w-full text-left bg-gray-800 text-white p-2 rounded shadow-md border-2 border-transparent hover:border-blue-500 hover:bg-blue-500 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out\" data-sort=\"oldest\">
                        Anciens
                        <svg class=\"selected-icon hidden ml-2 w-5 h-5 text-yellow-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\">
                            <path fill-rule=\"evenodd\" d=\"M10 18a8 8 0 100-16 8 8 0 000 16zm-1-4l6-6H5l4 4zm0-2L5 7h10l-4 4z\" clip-rule=\"evenodd\" />
                        </svg>
                    </button>

                    <div class=\"flex items-center space-x-2\">
                        <button id=\"recruitment-toggle\" type=\"button\" class=\"bg-gray-200 relative inline-flex h-6 w-11 flex-shrink-0 cursor-pointer rounded-full border-2 border-transparent transition-colors duration-200 ease-in-out focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\" role=\"switch\" aria-checked=\"{{ recruitment ? 'true' : 'false' }}\">
                            <span class=\"sr-only\">Recrutement</span>
                            <span class=\"{{ recruitment ? 'translate-x-5' : 'translate-x-0' }} pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out\">
                                <span class=\"{{ recruitment ? 'opacity-0 ease-out duration-100' : 'opacity-100 ease-in duration-200' }} absolute inset-0 flex h-full w-full items-center justify-center transition-opacity\" aria-hidden=\"true\">
                                    <svg class=\"h-3 w-3 text-gray-400\" fill=\"none\" viewBox=\"0 0 12 12\">
                                        <path d=\"M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </span>
                                <span class=\"{{ recruitment ? 'opacity-100 ease-in duration-200' : 'opacity-0 ease-out duration-100' }} absolute inset-0 flex h-full w-full items-center justify-center transition-opacity\" aria-hidden=\"true\">
                                    <svg class=\"h-3 w-3 text-indigo-600\" fill=\"currentColor\" viewBox=\"0 0 12 12\">
                                        <path d=\"M3.707 5.293a1 1 0 00-1.414 1.414l1.414-1.414zM5 8l-.707.707a1 1 0 001.414 0L5 8zm4.707-3.293a1 1 0 00-1.414-1.414l1.414 1.414zm-7.414 2l2 2 1.414-1.414-2-2-1.414 1.414zm3.414 2l4-4-1.414-1.414-4 4 1.414 1.414z\" />
                                    </svg>
                                </span>
                            </span>
                        </button>
                        <span class=\"text-gray-800 font-medium\">Recrutement</span>
                    </div>

                </div>
            </div>

            <div class=\"w-full md:w-auto flex flex-wrap items-center justify-center gap-4\">
                {% for category in categories|slice(0, 5) %}
                    <button type=\"button\" class=\"category-btn bg-gray-800 text-white px-6 py-3 rounded-full shadow-md border-2 border-transparent hover:border-blue-500 hover:bg-blue-500 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out w-full md:w-auto category-selected\" data-category-id=\"{{ category.id }}\">
                        {{ category.name }}
                    </button>
                {% endfor %}
                <div class=\"relative w-full md:w-auto mt-2 md:mt-0\">
                    <button type=\"button\" id=\"more-categories-btn\" class=\"w-full md:w-auto bg-blue-600 text-white px-6 py-3 rounded-full shadow-md border-2 border-transparent hover:border-blue-800 hover:bg-blue-700 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out flex items-center justify-center\">
                        <span id=\"more-categories-text\">Plus</span>
                        <svg id=\"more-chevron\" xmlns=\"http://www.w3.org/2000/svg\" class=\"ml-2 h-5 w-5 transition-transform duration-300 transform\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\" />
                        </svg>
                    </button>
                    <div id=\"more-categories-menu\" class=\"absolute top-full mt-2 hidden w-48 bg-white text-black rounded-lg shadow-lg p-4 z-10 space-y-2\">
                        {% for category in categories|slice(5) %}
                            <button type=\"button\" class=\"category-btn bg-gray-800 text-white w-full text-left px-4 py-2 rounded shadow-md border-2 border-transparent hover:border-blue-500 hover:bg-blue-500 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out\" data-category-id=\"{{ category.id }}\">
                                {{ category.name }}
                            </button>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>

        {% if selectedCategories %}
            {% for categoryId in selectedCategories %}
                <input type=\"hidden\" name=\"category[]\" value=\"{{ categoryId }}\">
            {% endfor %}
        {% endif %}
        <input type=\"hidden\" name=\"sort\" value=\"{{ sort }}\">
        <input type=\"hidden\" name=\"recruitment\" value=\"{{ recruitment ? '1' : '0' }}\">
    </form>

    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
        {% for groupe_j_d_r in groupe_j_d_rs %}
            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                style=\"will-change: transform;\">
                <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"block\">
                    <div class=\"relative\">
                        <img src=\"{{ asset('uploads/images-jdr/' ~ groupe_j_d_r.picture) }}\" 
                            alt=\"{{ groupe_j_d_r.title }} image\" 
                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover {% if groupe_j_d_r.players|length >= groupe_j_d_r.maxPlayer %} blur-sm {% endif %} tokenImage\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                {% if groupe_j_d_r.status == 'nouveau' %} bg-green-600
                                {% elseif groupe_j_d_r.status == 'en_cours' %} bg-blue-500
                                {% elseif groupe_j_d_r.status == 'termine' %} bg-red-500
                                {% else %} bg-gray-700
                                {% endif %} text-white\">
                                {% if groupe_j_d_r.status == 'nouveau' %}
                                    Nouveau
                                {% elseif groupe_j_d_r.status == 'en_cours' %}
                                    En Cours
                                {% elseif groupe_j_d_r.status == 'termine' %}
                                    Terminé
                                {% else %}
                                    Statut inconnu
                                {% endif %}
                            </span>
                        </div>
                    </div>
                </a>
                <div class=\"mb-2\">
                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">{{ groupe_j_d_r.title }}</a>
                </div>
                <div class=\"flex justify-between items-center mt-2\">
                    <a href=\"{{ path('app_profile_show', { 'id': groupe_j_d_r.owner.id }) }}\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                        {% if groupe_j_d_r.owner.avatar %}
                            <img src=\"{{ asset('uploads/avatars/' ~ groupe_j_d_r.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                        {% else %}
                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                        {% endif %}
                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">{{ groupe_j_d_r.owner.username }}</p>
                        </div>
                    </a>
                    <div class=\"flex items-center text-right gap-1\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                        </svg>
                        {% if groupe_j_d_r.players|length >= groupe_j_d_r.maxPlayer %}
                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                        {% else %}
                            <p class=\"font-bold text-white pl-2\">{{ groupe_j_d_r.players|length }} / {{ groupe_j_d_r.maxPlayer }}</p>
                        {% endif %}
                    </div>
                </div>
            </div>
            {% else %}
                <p class=\"text-gray-700 text-lg\">Aucun résultat trouvé</p>
            {% endfor %}
        </div>
    </div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const categoryButtons = document.querySelectorAll('.category-btn');
    const form = document.getElementById('filter-form');

    const moreCategoriesBtn = document.getElementById('more-categories-btn');
    const moreCategoriesMenu = document.getElementById('more-categories-menu');
    const sortBtn = document.getElementById('sort-btn');
    const sortMenu = document.getElementById('sort-menu');
    const sortChevron = document.getElementById('sort-chevron');
    const moreChevron = document.getElementById('more-chevron');
    const alertDiv = document.getElementById('alert-message');
    const alertText = document.getElementById('alert-text');
    const recruitmentToggle = document.getElementById('recruitment-toggle');

    moreCategoriesMenu.addEventListener('mouseleave', function () {
        moreCategoriesMenu.classList.add('hidden');
        moreChevron.classList.remove('rotate-180');
    });

    sortMenu.addEventListener('mouseleave', function () {
        sortMenu.classList.add('hidden');
        sortChevron.classList.remove('rotate-180');
    });

    const sortWrapper = document.getElementById('sort-wrapper');
    const moreCategoriesBtnWrapper = document.querySelector('.relative.w-full.md\\\\:w-auto.mt-2.md\\\\:mt-0');

    function updateSortButtonPosition() {
        if (window.innerWidth < 1280) {
            moreCategoriesBtnWrapper.parentNode.insertBefore(sortWrapper, moreCategoriesBtnWrapper.nextSibling);
        } else {
            const container = document.querySelector('.flex.flex-wrap.justify-between.items-center.gap-2.mb-6');
            if (container) {
                container.insertBefore(sortWrapper, container.firstChild);
            }
        }
    }

    updateSortButtonPosition();
    window.addEventListener('resize', updateSortButtonPosition);

    const selectedCategories = {{ selectedCategories|json_encode|raw }};
    categoryButtons.forEach(button => {
        const categoryId = button.dataset.categoryId;
        if (selectedCategories.includes(categoryId)) {
            button.classList.add('bg-green-600', 'border-green-800', 'text-white');
        }
    });

    const maxCategories = 3;

categoryButtons.forEach(button => {
        button.addEventListener('click', function () {
            const categoryId = this.dataset.categoryId;
            const selectedButtons = document.querySelectorAll('.category-btn.bg-green-600');

            if (button.classList.contains('bg-green-600')) {
                button.classList.remove('bg-green-600', 'border-green-800', 'text-white');
                const hiddenInput = form.querySelector(`input[name=\"category[]\"][value=\"\${categoryId}\"]`);
                if (hiddenInput) {
                    hiddenInput.remove();
                }
            } else {
                if (selectedButtons.length >= maxCategories) {
                    showTemporaryMessage(\"Vous ne pouvez sélectionner que trois catégories au maximum.\");
                    return;
                }
                button.classList.add('bg-green-600', 'border-green-800', 'text-white');
                const input = document.createElement('input');
                input.type = 'hidden';
                input.name = 'category[]';
                input.value = categoryId;
                form.appendChild(input);
            }

            form.submit();
        });
    });

    function showTemporaryMessage(message) {
        alertText.innerText = message;

        alertDiv.classList.remove('hidden');

        setTimeout(() => {
            alertDiv.classList.add('hidden');
        }, 5000);
    }


    moreCategoriesBtn.addEventListener('click', function () {
        moreCategoriesMenu.classList.toggle('hidden');
        moreChevron.classList.toggle('rotate-180');
    });

    sortBtn.addEventListener('click', function () {
        sortMenu.classList.toggle('hidden');
        sortChevron.classList.toggle('rotate-180');
    });

    document.addEventListener('click', function (event) {
        if (!moreCategoriesBtn.contains(event.target) && !moreCategoriesMenu.contains(event.target)) {
            moreCategoriesMenu.classList.add('hidden');
            moreChevron.classList.remove('rotate-180');
        }
        if (!sortBtn.contains(event.target) && !sortMenu.contains(event.target)) {
            sortMenu.classList.add('hidden');
            sortChevron.classList.remove('rotate-180');
        }
    });

    const sortButtons = document.querySelectorAll('#sort-menu button');
    let sortInput = form.querySelector('input[name=\"sort\"]');

    if (!sortInput || !sortInput.value || sortInput.value === 'undefined') {
        sortInput = createHiddenInput('sort', 'newest');
    }

    if (sortInput && sortInput.value) {
        const currentSort = sortInput.value;
        sortButtons.forEach(button => {
            const icon = button.querySelector('.selected-icon');
            if (currentSort === button.dataset.sort) {
                button.classList.add('bg-yellow-600', 'text-white');
                if (icon) icon.classList.remove('hidden');
            }
        });
    }

    sortButtons.forEach(button => {
        button.addEventListener('click', function () {
            sortButtons.forEach(btn => {
                btn.classList.remove('bg-yellow-600', 'text-white');
                const icon = btn.querySelector('.selected-icon');
                if (icon) icon.classList.add('hidden');
            });

            button.classList.add('bg-yellow-600', 'text-white');
            const icon = button.querySelector('.selected-icon');
            if (icon) icon.classList.remove('hidden');

            sortInput.value = button.dataset.sort;

            submitFormWithAllValues();
        });
    });

    recruitmentToggle.addEventListener('click', function () {
        const isChecked = recruitmentToggle.getAttribute('aria-checked') === 'true';
        const toggleCircle = recruitmentToggle.querySelector('span.inline-block');

        if (isChecked) {
            recruitmentToggle.setAttribute('aria-checked', 'false');
            recruitmentToggle.classList.remove('bg-indigo-600');
            recruitmentToggle.classList.add('bg-gray-200');
            toggleCircle.classList.remove('translate-x-5');
            toggleCircle.classList.add('translate-x-0');
        } else {
            recruitmentToggle.setAttribute('aria-checked', 'true');
            recruitmentToggle.classList.remove('bg-gray-200');
            recruitmentToggle.classList.add('bg-indigo-600');
            toggleCircle.classList.remove('translate-x-0');
            toggleCircle.classList.add('translate-x-5');
        }

        let recruitmentInput = form.querySelector('input[name=\"recruitment\"]');
        if (!recruitmentInput) {
            recruitmentInput = createHiddenInput('recruitment', isChecked ? '0' : '1');
        } else {
            recruitmentInput.value = isChecked ? '0' : '1';
        }

        submitFormWithAllValues();
    });

    function submitFormWithAllValues() {
        if (!sortInput.value || sortInput.value === 'undefined') {
            sortInput.value = 'newest';
        }

        let recruitmentInput = form.querySelector('input[name=\"recruitment\"]');
        if (!recruitmentInput) {
            const isChecked = recruitmentToggle.getAttribute('aria-checked') === 'true';
            recruitmentInput = createHiddenInput('recruitment', isChecked ? '1' : '0');
        }

        form.querySelectorAll('input[name=\"category[]\"]').forEach(input => input.remove());
        const selectedCategories = document.querySelectorAll('.category-btn.bg-green-600');
        selectedCategories.forEach(button => {
            const input = document.createElement('input');
            input.type = 'hidden';
            input.name = 'category[]';
            input.value = button.dataset.categoryId;
            form.appendChild(input);
        });

        form.submit();
    }

    function createHiddenInput(name, value) {
        const input = document.createElement('input');
        input.type = 'hidden';
        input.name = name;
        input.value = value;
        form.appendChild(input);
        return input;
    }
});

</script>
{% endblock %}
", "groupe_jdr/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\groupe_jdr\\index.html.twig");
    }
}
