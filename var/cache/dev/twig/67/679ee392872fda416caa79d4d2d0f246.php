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

/* groupe_jdr/show.html.twig */
class __TwigTemplate_c35fa29a2b4dba4660ef278e2d98628c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "groupe_jdr/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        yield " | DiceFinder";
        
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
        yield "<div class=\"container mx-auto px-4 p-6 relative\">
    <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"glassmorphism text-white bg-[#4447a1] hover:bg-blue-800 focus:ring-4 
        focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center mb-6\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6 mr-3\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3\" />
        </svg>
        Retour
    </a>
    <div class=\"flex flex-col w-full space-y-8 lg:space-y-0 lg:space-x-8 lg:flex-row\">
        <div class=\"w-full lg:w-1/3\">
            <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:bg-opacity-20 card-item\"
                style=\"will-change: transform;\">
                <a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\" class=\"block\">
                    <div class=\"relative\">
                        <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 20, $this->source); })()), "picture", [], "any", false, false, false, 20))), "html", null, true);
        yield "\" 
                                alt=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), "html", null, true);
        yield " image\" 
                                class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
        // line 22
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 22, $this->source); })()), "players", [], "any", false, false, false, 22)) >= CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 22, $this->source); })()), "maxPlayer", [], "any", false, false, false, 22))) {
            yield " blur-sm ";
        }
        yield " tokenImage\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 25, $this->source); })()), "status", [], "any", false, false, false, 25) == "nouveau")) {
            yield " bg-green-600
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26) == "en_cours")) {
            yield " bg-blue-500
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 27, $this->source); })()), "status", [], "any", false, false, false, 27) == "termine")) {
            yield " bg-red-500
                                ";
        } else {
            // line 28
            yield " bg-gray-700
                                ";
        }
        // line 29
        yield " text-white\">
                                ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 30, $this->source); })()), "status", [], "any", false, false, false, 30) == "nouveau")) {
            // line 31
            yield "                                    Nouveau
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 32
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 32, $this->source); })()), "status", [], "any", false, false, false, 32) == "en_cours")) {
            // line 33
            yield "                                    En Cours
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34) == "termine")) {
            // line 35
            yield "                                    Terminé
                                ";
        } else {
            // line 37
            yield "                                    Statut inconnu
                                ";
        }
        // line 39
        yield "                            </span>
                        </div>
                    </div>
                </a>
                <div class=\"mb-2\">
                    <a href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\" class=\"font-semibold text-xl  hover:underline truncate max-w-[100%] block\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 44, $this->source); })()), "title", [], "any", false, false, false, 44), "html", null, true);
        yield "</a>
                </div>
                <div class=\"flex justify-between items-center mt-2\">
                    <a href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 47, $this->source); })()), "owner", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
        yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                        ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 48, $this->source); })()), "owner", [], "any", false, false, false, 48), "avatar", [], "any", false, false, false, 48)) {
            // line 49
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 49, $this->source); })()), "owner", [], "any", false, false, false, 49), "avatar", [], "any", false, false, false, 49))), "html", null, true);
            yield "\" alt=\"MJ photo\" class=\"rounded-full h-12 w-12 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                        ";
        } else {
            // line 51
            yield "                            <img class=\"rounded-full h-12 w-12 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Default profile photo\">
                        ";
        }
        // line 53
        yield "                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                            <p class=\"text-lg font-bold text-white group-hover:underline transition-colors duration-300\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 55, $this->source); })()), "owner", [], "any", false, false, false, 55), "username", [], "any", false, false, false, 55), "html", null, true);
        yield "</p>
                        </div>
                    </a>
                    <div class=\"flex items-center text-right gap-1\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-8 h-8 text-gray-400\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                        </svg>
                        ";
        // line 62
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 62, $this->source); })()), "players", [], "any", false, false, false, 62)) >= CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 62, $this->source); })()), "maxPlayer", [], "any", false, false, false, 62))) {
            // line 63
            yield "                            <p class=\"text-xl font-bold text-red-500\">Complet</p>
                        ";
        } else {
            // line 65
            yield "                            <p class=\"text-xl font-bold text-white\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 65, $this->source); })()), "players", [], "any", false, false, false, 65)), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 65, $this->source); })()), "maxPlayer", [], "any", false, false, false, 65), "html", null, true);
            yield "</p>
                        ";
        }
        // line 67
        yield "                    </div>
                </div>
            </div>
            ";
        // line 70
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 70, $this->source); })()), "owner", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70)))) {
            // line 71
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\" class=\"w-full bg-green-600 text-white font-bold py-3 rounded hover:bg-green-700 text-center block\">
                    Editer mon Univers
                </a>
            ";
        }
        // line 75
        yield "        </div>

        <div class=\"flex flex-col w-full lg:w-2/3 space-y-6\">
            <div class=\"p-6 rounded-lg bg-opacity-12 border border-[#bb8f4f] glassmorphism w-full\">
                <h3 class=\"text-gray-100 font-semibold text-xl mb-4\">Description</h3>
                <p class=\"text-gray-300 mb-4\">";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 80, $this->source); })()), "description", [], "any", false, false, false, 80), "html", null, true);
        yield "</p>
                    ";
        // line 81
        $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 81, $this->source); })()), "createdAt", [], "any", false, false, false, 81)], "method", false, false, false, 81);
        // line 82
        yield "                    <p class=\"absolute bottom-2 right-4 text-sm text-gray-400\">
                        Fondé depuis 
                        ";
        // line 84
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 84, $this->source); })()), "y", [], "any", false, false, false, 84) > 0)) {
            // line 85
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 85, $this->source); })()), "y", [], "any", false, false, false, 85), "html", null, true);
            yield " an";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 85, $this->source); })()), "y", [], "any", false, false, false, 85) > 1)) ? ("s") : (""));
            yield "
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 86
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 86, $this->source); })()), "m", [], "any", false, false, false, 86) > 0)) {
            // line 87
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 87, $this->source); })()), "m", [], "any", false, false, false, 87), "html", null, true);
            yield " mois
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 88
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 88, $this->source); })()), "d", [], "any", false, false, false, 88) > 0)) {
            // line 89
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 89, $this->source); })()), "d", [], "any", false, false, false, 89), "html", null, true);
            yield " jour";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 89, $this->source); })()), "d", [], "any", false, false, false, 89) > 1)) ? ("s") : (""));
            yield "
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 90
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 90, $this->source); })()), "h", [], "any", false, false, false, 90) > 0)) {
            // line 91
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 91, $this->source); })()), "h", [], "any", false, false, false, 91), "html", null, true);
            yield " heure";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 91, $this->source); })()), "h", [], "any", false, false, false, 91) > 1)) ? ("s") : (""));
            yield "
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 92
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 92, $this->source); })()), "i", [], "any", false, false, false, 92) > 0)) {
            // line 93
            yield "                            ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 93, $this->source); })()), "i", [], "any", false, false, false, 93), "html", null, true);
            yield " minute";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 93, $this->source); })()), "i", [], "any", false, false, false, 93) > 1)) ? ("s") : (""));
            yield "
                        ";
        } else {
            // line 95
            yield "                            à l'instant
                        ";
        }
        // line 97
        yield "                    </p>
            </div>

            <div class=\"flex flex-col lg:flex-row w-full space-y-4 lg:space-y-0 lg:space-x-4\">
                <div class=\"w-full lg:w-1/2 bg-white bg-opacity-10 border rounded-lg shadow-lg p-6 border border-[#bb8f4f]\">
                    <h2 class=\"text-gray-100 font-semibold text-xl mb-4\">Recrutement</h2>
                    <p class=\"text-lg font-semibold ";
        // line 103
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 103, $this->source); })()), "recrutement", [], "any", false, false, false, 103)) ? ("text-green-500") : ("text-red-500"));
        yield "\">
                        ";
        // line 104
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 104, $this->source); })()), "recrutement", [], "any", false, false, false, 104)) ? ("Ouvert") : ("Fermé"));
        yield "
                    </p>
                </div>
                
                <div class=\"w-full lg:w-1/2 bg-white bg-opacity-10 border rounded-lg shadow-lg p-6 border border-[#bb8f4f]\">
                    <h2 class=\"text-gray-100 font-semibold text-xl mb-4\">
                        ";
        // line 110
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 110, $this->source); })()), "licence", [], "any", false, false, false, 110)) {
            // line 111
            yield "                            Licence
                        ";
        } else {
            // line 113
            yield "                            Catégories
                        ";
        }
        // line 115
        yield "                    </h2>
                    
                    <div class=\"flex flex-wrap gap-2\">
                        ";
        // line 118
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 118, $this->source); })()), "licence", [], "any", false, false, false, 118)) {
            // line 119
            yield "                            <span class=\"bg-blue-200 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full\">
                                ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 120, $this->source); })()), "licence", [], "any", false, false, false, 120), "name", [], "any", false, false, false, 120), "html", null, true);
            yield "
                            </span>
                            <p class=\"text-gray-400 text-xs\">
                                Éditeur : ";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 123, $this->source); })()), "licence", [], "any", false, false, false, 123), "publisher", [], "any", false, false, false, 123), "html", null, true);
            yield " | Année de sortie : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 123, $this->source); })()), "licence", [], "any", false, false, false, 123), "releaseYear", [], "any", false, false, false, 123), "html", null, true);
            yield "
                            </p>
                        ";
        } else {
            // line 126
            yield "                            ";
            $context["colors"] = ["bg-blue-200 text-blue-800", "bg-green-100 text-green-800", "bg-yellow-200 text-yellow-800", "bg-red-200 text-red-800"];
            // line 127
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 127, $this->source); })()), "categories", [], "any", false, false, false, 127));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 128
                yield "                                ";
                $context["color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 128, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 128) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 128, $this->source); })()))), [], "array", false, false, false, 128);
                // line 129
                yield "                                <span class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 129, $this->source); })()), "html", null, true);
                yield " text-xs font-medium px-2.5 py-0.5 rounded-full\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 129), "html", null, true);
                yield "</span>
                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            yield "                        ";
        }
        // line 132
        yield "                    </div>
                </div>
            </div>
        </div>
        <div class=\"flex justify-center fixed bottom-0 left-0 right-0 p-4\">
            ";
        // line 137
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137))) {
            // line 138
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous devez avoir un compte et être connecté pour rejoindre un univers.
                </button>
            ";
        } elseif (        // line 141
(isset($context["is_owner"]) || array_key_exists("is_owner", $context) ? $context["is_owner"] : (function () { throw new RuntimeError('Variable "is_owner" does not exist.', 141, $this->source); })())) {
            // line 142
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous êtes le MJ
                </button>
            ";
        } elseif (        // line 145
(isset($context["is_member"]) || array_key_exists("is_member", $context) ? $context["is_member"] : (function () { throw new RuntimeError('Variable "is_member" does not exist.', 145, $this->source); })())) {
            // line 146
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous êtes déjà membre
                </button>
            ";
        } elseif (        // line 149
(isset($context["request_in_progress"]) || array_key_exists("request_in_progress", $context) ? $context["request_in_progress"] : (function () { throw new RuntimeError('Variable "request_in_progress" does not exist.', 149, $this->source); })())) {
            // line 150
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    En attente d'acceptation de la demande
                </button>
            ";
        } elseif (        // line 153
(isset($context["is_closed"]) || array_key_exists("is_closed", $context) ? $context["is_closed"] : (function () { throw new RuntimeError('Variable "is_closed" does not exist.', 153, $this->source); })())) {
            // line 154
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Ce groupe est ";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 155, $this->source); })()), "status", [], "any", false, false, false, 155), "html", null, true);
            yield " et ne recrute plus
                </button>
            ";
        } elseif (!CoreExtension::inFilter("ROLE_JOUEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 157
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 157, $this->source); })()), "user", [], "any", false, false, false, 157), "getRoles", [], "method", false, false, false, 157))) {
            // line 158
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous devez avoir le grade de joueur pour rejoindre ce JDR.
                </button>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 161
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 161, $this->source); })()), "recrutement", [], "any", false, false, false, 161) == false)) {
            // line 162
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Le recrutement est fermé pour cet Univers
                </button>
            ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 165
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 165, $this->source); })()), "players", [], "any", false, false, false, 165)) >= CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 165, $this->source); })()), "maxPlayer", [], "any", false, false, false, 165))) {
            // line 166
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Cet univers est complet. Pas de places disponibles.
                </button>
            ";
        } else {
            // line 170
            yield "                <button id=\"participate-button\" class=\"w-full sm:w-[80%] md:w-[60%] bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white font-bold py-3 rounded-lg shadow-lg hover:shadow-2xl hover:bg-blue-800 transition-all duration-300 ease-in-out transform hover:scale-105\">
                    <svg class=\"inline-block w-6 h-6 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                    </svg>
                    Je Participe
                </button>
            ";
        }
        // line 177
        yield "        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabLinks = document.querySelectorAll('[data-tab-target]');
    const tabContents = document.querySelectorAll('.tab-content');

    tabLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            tabLinks.forEach(item => {
                item.classList.remove('text-blue-600', 'border-blue-600', 'dark:text-blue-500', 'dark:border-blue-500');
                item.classList.add('hover:text-gray-600', 'hover:border-gray-300', 'dark:hover:text-gray-300', 'border-transparent');
            });
            tabContents.forEach(content => content.classList.add('hidden'));
            link.classList.add('text-blue-600', 'border-blue-600', 'dark:text-blue-500', 'dark:border-blue-500');
            link.classList.remove('hover:text-gray-600', 'hover:border-gray-300', 'border-transparent');
            const target = document.querySelector(link.getAttribute('data-tab-target'));
            target.classList.remove('hidden');
        });
    });

    const participateButton = document.getElementById('participate-button');
    const modal = document.getElementById('request-join-modal');
    const closeModalButton = document.getElementById('close-modal');
    const cancelButton = document.getElementById('cancel-button');
    const form = document.getElementById('request-join-form');

    function closeModal() {
        modal.classList.add('hidden');
    }

    if (participateButton) {
        participateButton.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });
    }

    if (closeModalButton) {
        closeModalButton.addEventListener('click', closeModal);
    }

    if (cancelButton) {
        cancelButton.addEventListener('click', closeModal);
    }

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const message = document.getElementById('message').value;

        fetch(form.action, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '";
        // line 234
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("submit_invitation_request"), "html", null, true);
        yield "'
            },
            body: JSON.stringify({ message: message })
        }).then(response => {
            if (response.ok) {
                closeModal();
                setTimeout(() => {
                    location.reload();
                }, 500);
            } else {
                location.reload();
            }
        }).catch(error => {
        });
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
        return "groupe_jdr/show.html.twig";
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
        return array (  556 => 234,  497 => 177,  488 => 170,  482 => 166,  480 => 165,  475 => 162,  473 => 161,  468 => 158,  466 => 157,  461 => 155,  458 => 154,  456 => 153,  451 => 150,  449 => 149,  444 => 146,  442 => 145,  437 => 142,  435 => 141,  430 => 138,  428 => 137,  421 => 132,  418 => 131,  399 => 129,  396 => 128,  378 => 127,  375 => 126,  367 => 123,  361 => 120,  358 => 119,  356 => 118,  351 => 115,  347 => 113,  343 => 111,  341 => 110,  332 => 104,  328 => 103,  320 => 97,  316 => 95,  308 => 93,  306 => 92,  299 => 91,  297 => 90,  290 => 89,  288 => 88,  283 => 87,  281 => 86,  274 => 85,  272 => 84,  268 => 82,  266 => 81,  262 => 80,  255 => 75,  247 => 71,  245 => 70,  240 => 67,  232 => 65,  228 => 63,  226 => 62,  216 => 55,  212 => 53,  206 => 51,  200 => 49,  198 => 48,  194 => 47,  186 => 44,  179 => 39,  175 => 37,  171 => 35,  169 => 34,  166 => 33,  164 => 32,  161 => 31,  159 => 30,  156 => 29,  152 => 28,  147 => 27,  143 => 26,  139 => 25,  131 => 22,  127 => 21,  123 => 20,  118 => 18,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ groupe_j_d_r.title }} | DiceFinder{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 p-6 relative\">
    <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"glassmorphism text-white bg-[#4447a1] hover:bg-blue-800 focus:ring-4 
        focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center mb-6\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6 mr-3\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3\" />
        </svg>
        Retour
    </a>
    <div class=\"flex flex-col w-full space-y-8 lg:space-y-0 lg:space-x-8 lg:flex-row\">
        <div class=\"w-full lg:w-1/3\">
            <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:bg-opacity-20 card-item\"
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
                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"font-semibold text-xl  hover:underline truncate max-w-[100%] block\">{{ groupe_j_d_r.title }}</a>
                </div>
                <div class=\"flex justify-between items-center mt-2\">
                    <a href=\"{{ path('app_profile_show', { 'id': groupe_j_d_r.owner.id }) }}\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                        {% if groupe_j_d_r.owner.avatar %}
                            <img src=\"{{ asset('uploads/avatars/' ~ groupe_j_d_r.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded-full h-12 w-12 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                        {% else %}
                            <img class=\"rounded-full h-12 w-12 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                        {% endif %}
                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                            <p class=\"text-lg font-bold text-white group-hover:underline transition-colors duration-300\">{{ groupe_j_d_r.owner.username }}</p>
                        </div>
                    </a>
                    <div class=\"flex items-center text-right gap-1\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-8 h-8 text-gray-400\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                        </svg>
                        {% if groupe_j_d_r.players|length >= groupe_j_d_r.maxPlayer %}
                            <p class=\"text-xl font-bold text-red-500\">Complet</p>
                        {% else %}
                            <p class=\"text-xl font-bold text-white\">{{ groupe_j_d_r.players|length }} / {{ groupe_j_d_r.maxPlayer }}</p>
                        {% endif %}
                    </div>
                </div>
            </div>
            {% if app.user and app.user.id == groupe_j_d_r.owner.id %}
                <a href=\"{{ path('app_groupe_j_d_r_edit', { id: groupe_j_d_r.id }) }}\" class=\"w-full bg-green-600 text-white font-bold py-3 rounded hover:bg-green-700 text-center block\">
                    Editer mon Univers
                </a>
            {% endif %}
        </div>

        <div class=\"flex flex-col w-full lg:w-2/3 space-y-6\">
            <div class=\"p-6 rounded-lg bg-opacity-12 border border-[#bb8f4f] glassmorphism w-full\">
                <h3 class=\"text-gray-100 font-semibold text-xl mb-4\">Description</h3>
                <p class=\"text-gray-300 mb-4\">{{ groupe_j_d_r.description }}</p>
                    {% set diff = date().diff(groupe_j_d_r.createdAt) %}
                    <p class=\"absolute bottom-2 right-4 text-sm text-gray-400\">
                        Fondé depuis 
                        {% if diff.y > 0 %}
                            {{ diff.y }} an{{ diff.y > 1 ? 's' }}
                        {% elseif diff.m > 0 %}
                            {{ diff.m }} mois
                        {% elseif diff.d > 0 %}
                            {{ diff.d }} jour{{ diff.d > 1 ? 's' }}
                        {% elseif diff.h > 0 %}
                            {{ diff.h }} heure{{ diff.h > 1 ? 's' }}
                        {% elseif diff.i > 0 %}
                            {{ diff.i }} minute{{ diff.i > 1 ? 's' }}
                        {% else %}
                            à l'instant
                        {% endif %}
                    </p>
            </div>

            <div class=\"flex flex-col lg:flex-row w-full space-y-4 lg:space-y-0 lg:space-x-4\">
                <div class=\"w-full lg:w-1/2 bg-white bg-opacity-10 border rounded-lg shadow-lg p-6 border border-[#bb8f4f]\">
                    <h2 class=\"text-gray-100 font-semibold text-xl mb-4\">Recrutement</h2>
                    <p class=\"text-lg font-semibold {{ groupe_j_d_r.recrutement ? 'text-green-500' : 'text-red-500' }}\">
                        {{ groupe_j_d_r.recrutement ? 'Ouvert' : 'Fermé' }}
                    </p>
                </div>
                
                <div class=\"w-full lg:w-1/2 bg-white bg-opacity-10 border rounded-lg shadow-lg p-6 border border-[#bb8f4f]\">
                    <h2 class=\"text-gray-100 font-semibold text-xl mb-4\">
                        {% if groupe_j_d_r.licence %}
                            Licence
                        {% else %}
                            Catégories
                        {% endif %}
                    </h2>
                    
                    <div class=\"flex flex-wrap gap-2\">
                        {% if groupe_j_d_r.licence %}
                            <span class=\"bg-blue-200 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full\">
                                {{ groupe_j_d_r.licence.name }}
                            </span>
                            <p class=\"text-gray-400 text-xs\">
                                Éditeur : {{ groupe_j_d_r.licence.publisher }} | Année de sortie : {{ groupe_j_d_r.licence.releaseYear }}
                            </p>
                        {% else %}
                            {% set colors = ['bg-blue-200 text-blue-800', 'bg-green-100 text-green-800', 'bg-yellow-200 text-yellow-800', 'bg-red-200 text-red-800'] %}
                            {% for category in groupe_j_d_r.categories %}
                                {% set color = colors[loop.index0 % colors|length] %}
                                <span class=\"{{ color }} text-xs font-medium px-2.5 py-0.5 rounded-full\">{{ category.name }}</span>
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"flex justify-center fixed bottom-0 left-0 right-0 p-4\">
            {% if app.user is null %}
                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous devez avoir un compte et être connecté pour rejoindre un univers.
                </button>
            {% elseif is_owner %}
                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous êtes le MJ
                </button>
            {% elseif is_member %}
                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous êtes déjà membre
                </button>
            {% elseif request_in_progress %}
                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    En attente d'acceptation de la demande
                </button>
            {% elseif is_closed %}
                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Ce groupe est {{ groupe_j_d_r.status }} et ne recrute plus
                </button>
            {% elseif 'ROLE_JOUEUR' not in app.user.getRoles() %}
                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous devez avoir le grade de joueur pour rejoindre ce JDR.
                </button>
            {% elseif groupe_j_d_r.recrutement == false %}
                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Le recrutement est fermé pour cet Univers
                </button>
            {% elseif groupe_j_d_r.players|length >= groupe_j_d_r.maxPlayer %}
                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Cet univers est complet. Pas de places disponibles.
                </button>
            {% else %}
                <button id=\"participate-button\" class=\"w-full sm:w-[80%] md:w-[60%] bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white font-bold py-3 rounded-lg shadow-lg hover:shadow-2xl hover:bg-blue-800 transition-all duration-300 ease-in-out transform hover:scale-105\">
                    <svg class=\"inline-block w-6 h-6 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                    </svg>
                    Je Participe
                </button>
            {% endif %}
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabLinks = document.querySelectorAll('[data-tab-target]');
    const tabContents = document.querySelectorAll('.tab-content');

    tabLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            tabLinks.forEach(item => {
                item.classList.remove('text-blue-600', 'border-blue-600', 'dark:text-blue-500', 'dark:border-blue-500');
                item.classList.add('hover:text-gray-600', 'hover:border-gray-300', 'dark:hover:text-gray-300', 'border-transparent');
            });
            tabContents.forEach(content => content.classList.add('hidden'));
            link.classList.add('text-blue-600', 'border-blue-600', 'dark:text-blue-500', 'dark:border-blue-500');
            link.classList.remove('hover:text-gray-600', 'hover:border-gray-300', 'border-transparent');
            const target = document.querySelector(link.getAttribute('data-tab-target'));
            target.classList.remove('hidden');
        });
    });

    const participateButton = document.getElementById('participate-button');
    const modal = document.getElementById('request-join-modal');
    const closeModalButton = document.getElementById('close-modal');
    const cancelButton = document.getElementById('cancel-button');
    const form = document.getElementById('request-join-form');

    function closeModal() {
        modal.classList.add('hidden');
    }

    if (participateButton) {
        participateButton.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });
    }

    if (closeModalButton) {
        closeModalButton.addEventListener('click', closeModal);
    }

    if (cancelButton) {
        cancelButton.addEventListener('click', closeModal);
    }

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const message = document.getElementById('message').value;

        fetch(form.action, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token(\"submit_invitation_request\") }}'
            },
            body: JSON.stringify({ message: message })
        }).then(response => {
            if (response.ok) {
                closeModal();
                setTimeout(() => {
                    location.reload();
                }, 500);
            } else {
                location.reload();
            }
        }).catch(error => {
        });
    });
});
</script>

{% endblock %}
", "groupe_jdr/show.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\groupe_jdr\\show.html.twig");
    }
}