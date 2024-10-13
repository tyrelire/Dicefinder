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
        // line 56
        yield (((isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 56, $this->source); })())) ? ("true") : ("false"));
        yield "\">
                            <span class=\"sr-only\">Recrutement</span>
                            <span class=\"";
        // line 58
        yield (((isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 58, $this->source); })())) ? ("translate-x-5") : ("translate-x-0"));
        yield " pointer-events-none relative inline-block h-5 w-5 transform rounded-full bg-white shadow ring-0 transition duration-200 ease-in-out\">
                                <span class=\"";
        // line 59
        yield (((isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 59, $this->source); })())) ? ("opacity-0 ease-out duration-100") : ("opacity-100 ease-in duration-200"));
        yield " absolute inset-0 flex h-full w-full items-center justify-center transition-opacity\" aria-hidden=\"true\">
                                    <svg class=\"h-3 w-3 text-gray-400\" fill=\"none\" viewBox=\"0 0 12 12\">
                                        <path d=\"M4 8l2-2m0 0l2-2M6 6L4 4m2 2l2 2\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" />
                                    </svg>
                                </span>
                                <span class=\"";
        // line 64
        yield (((isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 64, $this->source); })())) ? ("opacity-100 ease-in duration-200") : ("opacity-0 ease-out duration-100"));
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
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 78, $this->source); })()), 0, 5));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 79
            yield "                    <button type=\"button\" class=\"category-btn bg-gray-800 text-white px-6 py-3 rounded-full shadow-md border-2 border-transparent hover:border-blue-500 hover:bg-blue-500 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out w-full md:w-auto category-selected\" data-category-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 79), "html", null, true);
            yield "\">
                        ";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 80), "html", null, true);
            yield "
                    </button>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "                <div class=\"relative w-full md:w-auto mt-2 md:mt-0\">
                    <button type=\"button\" id=\"more-categories-btn\" class=\"w-full md:w-auto bg-blue-600 text-white px-6 py-3 rounded-full shadow-md border-2 border-transparent hover:border-blue-800 hover:bg-blue-700 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out flex items-center justify-center\">
                        <span id=\"more-categories-text\">Plus</span>
                        <svg id=\"more-chevron\" xmlns=\"http://www.w3.org/2000/svg\" class=\"ml-2 h-5 w-5 transition-transform duration-300 transform\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19 9l-7 7-7-7\" />
                        </svg>
                    </button>
                    <div id=\"more-categories-menu\" class=\"absolute top-full mt-2 hidden w-48 bg-white text-black rounded-lg shadow-lg p-4 z-10 space-y-2\">
                        ";
        // line 91
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 91, $this->source); })()), 5));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 92
            yield "                            <button type=\"button\" class=\"category-btn bg-gray-800 text-white w-full text-left px-4 py-2 rounded shadow-md border-2 border-transparent hover:border-blue-500 hover:bg-blue-500 hover:text-white hover:shadow-lg transform hover:scale-105 transition-all duration-300 ease-in-out\" data-category-id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 92), "html", null, true);
            yield "\">
                                ";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 93), "html", null, true);
            yield "
                            </button>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 96
        yield "                    </div>
                </div>
            </div>
        </div>

        ";
        // line 101
        if ((isset($context["selectedCategories"]) || array_key_exists("selectedCategories", $context) ? $context["selectedCategories"] : (function () { throw new RuntimeError('Variable "selectedCategories" does not exist.', 101, $this->source); })())) {
            // line 102
            yield "            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["selectedCategories"]) || array_key_exists("selectedCategories", $context) ? $context["selectedCategories"] : (function () { throw new RuntimeError('Variable "selectedCategories" does not exist.', 102, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["categoryId"]) {
                // line 103
                yield "                <input type=\"hidden\" name=\"category[]\" value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["categoryId"], "html", null, true);
                yield "\">
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['categoryId'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 105
            yield "        ";
        }
        // line 106
        yield "        <input type=\"hidden\" name=\"sort\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["sort"]) || array_key_exists("sort", $context) ? $context["sort"] : (function () { throw new RuntimeError('Variable "sort" does not exist.', 106, $this->source); })()), "html", null, true);
        yield "\">
        <input type=\"hidden\" name=\"recruitment\" value=\"";
        // line 107
        yield (((isset($context["recruitment"]) || array_key_exists("recruitment", $context) ? $context["recruitment"] : (function () { throw new RuntimeError('Variable "recruitment" does not exist.', 107, $this->source); })())) ? ("1") : ("0"));
        yield "\">
    </form>

    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
        ";
        // line 111
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupe_j_d_rs"]) || array_key_exists("groupe_j_d_rs", $context) ? $context["groupe_j_d_rs"] : (function () { throw new RuntimeError('Variable "groupe_j_d_rs" does not exist.', 111, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe_j_d_r"]) {
            // line 112
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 112)]), "html", null, true);
            yield "\"
                class=\"block bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20\"
                style=\"will-change: transform;\">
                <div class=\"relative\">
                    <img src=\"";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "picture", [], "any", false, false, false, 116))), "html", null, true);
            yield "\" 
                        alt=\"";
            // line 117
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 117), "html", null, true);
            yield " image\" 
                        class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 118
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 118)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 118))) {
                yield " blur-sm ";
            }
            yield "\">
                    <div class=\"absolute top-2 right-2\">
                        <span class=\"text-sm font-bold px-2 py-1 rounded 
                            ";
            // line 121
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "status", [], "any", false, false, false, 121) == "preparation")) {
                yield " bg-yellow-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 122
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 122) == "pret_a_jouer")) {
                yield " bg-green-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 123
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 123) == "en_cours")) {
                yield " bg-blue-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 124
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 124) == "complet")) {
                yield " bg-red-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 125
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 125) == "pause")) {
                yield " bg-gray-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 126
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 126) == "termine")) {
                yield " bg-purple-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 127
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 127) == "annule")) {
                yield " bg-gray-400
                            ";
            } else {
                // line 128
                yield " bg-gray-700
                            ";
            }
            // line 129
            yield " text-white\">
                            ";
            // line 130
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "status", [], "any", false, false, false, 130) == "preparation")) {
                // line 131
                yield "                                En Préparation
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 132
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 132) == "pret_a_jouer")) {
                // line 133
                yield "                                Prêt à jouer
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 134
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 134) == "en_cours")) {
                // line 135
                yield "                                En Cours
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 136
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 136) == "complet")) {
                // line 137
                yield "                                Complet
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 138
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 138) == "pause")) {
                // line 139
                yield "                                En Pause
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 140
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 140) == "termine")) {
                // line 141
                yield "                                Terminé
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 142
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 142) == "annule")) {
                // line 143
                yield "                                Annulé
                            ";
            } else {
                // line 145
                yield "                                Statut inconnu
                            ";
            }
            // line 147
            yield "                        </span>
                    </div>
                </div>
                <div class=\"flex justify-between items-center mb-2\">
                    <p class=\"font-semibold hover:underline truncate max-w-[100%]\">";
            // line 151
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 151), "html", null, true);
            yield "</p>
                </div>
                <div class=\"flex justify-between items-center mt-2\">
                    <div class=\"flex items-center\">
                        ";
            // line 155
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 155), "avatar", [], "any", false, false, false, 155)) {
                // line 156
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 156), "avatar", [], "any", false, false, false, 156))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded h-8 w-8 object-cover\">
                        ";
            } else {
                // line 158
                yield "                            <img class=\"rounded h-8 w-8 object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                        ";
            }
            // line 160
            yield "                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400\">MJ</p>
                            <p class=\"text-xs text-white\">";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 162), "username", [], "any", false, false, false, 162), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                    <div class=\"text-right\">
                        <p class=\"text-xs text-gray-400\">Nombre de joueurs</p>
                        ";
            // line 167
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 167)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 167))) {
                // line 168
                yield "                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                        ";
            } else {
                // line 170
                yield "                            <p class=\"text-lg font-bold text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 170)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 170), "html", null, true);
                yield "</p>
                        ";
            }
            // line 172
            yield "                    </div>
                </div>
            </a>

        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 177
            yield "            <p class=\"text-gray-700 text-lg\">Aucun résultat trouvé</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe_j_d_r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 179
        yield "    </div>
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
        // line 224
        yield json_encode((isset($context["selectedCategories"]) || array_key_exists("selectedCategories", $context) ? $context["selectedCategories"] : (function () { throw new RuntimeError('Variable "selectedCategories" does not exist.', 224, $this->source); })()));
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
        return array (  495 => 224,  448 => 179,  441 => 177,  432 => 172,  424 => 170,  420 => 168,  418 => 167,  410 => 162,  406 => 160,  400 => 158,  394 => 156,  392 => 155,  385 => 151,  379 => 147,  375 => 145,  371 => 143,  369 => 142,  366 => 141,  364 => 140,  361 => 139,  359 => 138,  356 => 137,  354 => 136,  351 => 135,  349 => 134,  346 => 133,  344 => 132,  341 => 131,  339 => 130,  336 => 129,  332 => 128,  327 => 127,  323 => 126,  319 => 125,  315 => 124,  311 => 123,  307 => 122,  303 => 121,  295 => 118,  291 => 117,  287 => 116,  279 => 112,  274 => 111,  267 => 107,  262 => 106,  259 => 105,  250 => 103,  245 => 102,  243 => 101,  236 => 96,  227 => 93,  222 => 92,  218 => 91,  208 => 83,  199 => 80,  194 => 79,  190 => 78,  173 => 64,  165 => 59,  161 => 58,  156 => 56,  117 => 20,  110 => 16,  100 => 8,  87 => 7,  64 => 5,  41 => 3,);
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
            <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\"
                class=\"block bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20\"
                style=\"will-change: transform;\">
                <div class=\"relative\">
                    <img src=\"{{ asset('uploads/images-jdr/' ~ groupe_j_d_r.picture) }}\" 
                        alt=\"{{ groupe_j_d_r.title }} image\" 
                        class=\"rounded-lg mb-4 w-full h-[20rem] object-cover {% if groupe_j_d_r.players|length >= groupe_j_d_r.maxPlayer %} blur-sm {% endif %}\">
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
                    <p class=\"font-semibold hover:underline truncate max-w-[100%]\">{{ groupe_j_d_r.title }}</p>
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
                        <p class=\"text-xs text-gray-400\">Nombre de joueurs</p>
                        {% if groupe_j_d_r.players|length >= groupe_j_d_r.maxPlayer %}
                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                        {% else %}
                            <p class=\"text-lg font-bold text-white\">{{ groupe_j_d_r.players|length }} / {{ groupe_j_d_r.maxPlayer }}</p>
                        {% endif %}
                    </div>
                </div>
            </a>

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
