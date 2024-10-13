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
class __TwigTemplate_82a570a5cc75e585ca0ba5b3206667b5 extends Template
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
        yield "<div class=\"container mx-auto px-4 p-6\">
    <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-white bg-[#4447a1] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6 mr-3\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3\" />
        </svg>
        Retour
    </a>
    <div class=\"bg-slate-900 text-white min-h-screen p-4 md:p-8 space-y-10\">
        <div class=\"flex flex-col space-y-8 lg:space-y-0 lg:flex-row items-start lg:items-start justify-between lg:space-x-10\">
            <div class=\"w-full lg:w-1/2 space-y-8 relative\">
                <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 16, $this->source); })()), "picture", [], "any", false, false, false, 16))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "\" class=\"rounded-lg shadow-lg w-full h-auto lg:h-[500px] object-cover\">
                
                <div class=\"absolute top-2 right-2\">
                    <span class=\"text-xs sm:text-sm font-bold px-2 py-1 rounded 
                        ";
        // line 20
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 20, $this->source); })()), "status", [], "any", false, false, false, 20) == "preparation")) {
            yield " bg-yellow-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 21, $this->source); })()), "status", [], "any", false, false, false, 21) == "pret_a_jouer")) {
            yield " bg-green-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 22, $this->source); })()), "status", [], "any", false, false, false, 22) == "en_cours")) {
            yield " bg-blue-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23) == "complet")) {
            yield " bg-red-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24) == "pause")) {
            yield " bg-gray-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 25, $this->source); })()), "status", [], "any", false, false, false, 25) == "termine")) {
            yield " bg-purple-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26) == "annule")) {
            yield " bg-gray-400
                        ";
        } else {
            // line 27
            yield " bg-gray-700
                        ";
        }
        // line 28
        yield " text-white\">
                        ";
        // line 29
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 29, $this->source); })()), "status", [], "any", false, false, false, 29) == "preparation")) {
            // line 30
            yield "                            En Préparation
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 31
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 31, $this->source); })()), "status", [], "any", false, false, false, 31) == "pret_a_jouer")) {
            // line 32
            yield "                            Prêt à jouer
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 33
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 33, $this->source); })()), "status", [], "any", false, false, false, 33) == "en_cours")) {
            // line 34
            yield "                            En Cours
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 35
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35) == "complet")) {
            // line 36
            yield "                            Complet
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 37
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 37, $this->source); })()), "status", [], "any", false, false, false, 37) == "pause")) {
            // line 38
            yield "                            En Pause
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 39
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 39, $this->source); })()), "status", [], "any", false, false, false, 39) == "termine")) {
            // line 40
            yield "                            Terminé
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 41
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 41, $this->source); })()), "status", [], "any", false, false, false, 41) == "annule")) {
            // line 42
            yield "                            Annulé
                        ";
        } else {
            // line 44
            yield "                            Statut inconnu
                        ";
        }
        // line 46
        yield "                    </span>
                </div>

                ";
        // line 49
        if (((isset($context["is_member"]) || array_key_exists("is_member", $context) ? $context["is_member"] : (function () { throw new RuntimeError('Variable "is_member" does not exist.', 49, $this->source); })()) &&  !(isset($context["is_owner"]) || array_key_exists("is_owner", $context) ? $context["is_owner"] : (function () { throw new RuntimeError('Variable "is_owner" does not exist.', 49, $this->source); })()))) {
            // line 50
            yield "                    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("leave_jdr", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 50, $this->source); })()), "id", [], "any", false, false, false, 50)]), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir quitter cet univers ?');\" class=\"mt-4\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("leave" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 51, $this->source); })()), "id", [], "any", false, false, false, 51))), "html", null, true);
            yield "\">
                        <button type=\"submit\" class=\"bg-red-600 text-white px-4 py-2 rounded w-full hover:bg-red-700 transition-all duration-300\">
                            Quitter l'univers
                        </button>
                    </form>
                ";
        }
        // line 57
        yield "
                                ";
        // line 58
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 58, $this->source); })()), "owner", [], "any", false, false, false, 58), "id", [], "any", false, false, false, 58)))) {
            // line 59
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 59, $this->source); })()), "id", [], "any", false, false, false, 59)]), "html", null, true);
            yield "\" class=\"w-full bg-green-600 text-white font-bold py-3 rounded mt-4 hover:bg-green-700 block text-center\">
                        Editer mon Univers
                    </a>
                ";
        }
        // line 63
        yield "            </div>

            <div class=\"w-full lg:w-1/2 space-y-6\">
                <div class=\"flex justify-between items-center\">
                    <h2 class=\"text-2xl sm:text-3xl font-bold\">";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 67, $this->source); })()), "title", [], "any", false, false, false, 67), "html", null, true);
        yield "</h2>
                    <svg class=\"w-5 h-5 sm:w-6 sm:h-6 text-orange-500 cursor-pointer\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                    </svg>
                </div>
                <p class=\"text-gray-300\">";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 72, $this->source); })()), "description", [], "any", false, false, false, 72), "html", null, true);
        yield "</p>

                <div class=\"flex justify-between\">
                    <div>
                        <span class=\"text-gray-400\">Date de Création</span>
                        <p class=\"text-lg font-semibold\">";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 77, $this->source); })()), "getCreatedAt", [], "any", false, false, false, 77), "d/m/Y"), "html", null, true);
        yield "</p>
                    </div>
                    <div>
                        <span class=\"text-gray-400\">Participants</span>
                        <p class=\"text-lg font-semibold\">";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 81, $this->source); })()), "players", [], "any", false, false, false, 81)), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 81, $this->source); })()), "maxPlayer", [], "any", false, false, false, 81), "html", null, true);
        yield "</p>
                    </div>
                </div>

                <div id=\"category-container\" class=\"mt-6\">
                    <h3 class=\"font-semibold\">Catégories</h3>
                    <div class=\"flex flex-wrap gap-2 mt-2\">
                        ";
        // line 88
        $context["colors"] = ["bg-blue-200 text-blue-800", "bg-green-200 text-green-800", "bg-yellow-200 text-yellow-800", "bg-red-200 text-red-800"];
        // line 89
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 89, $this->source); })()), "categories", [], "any", false, false, false, 89));
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
            // line 90
            yield "                            ";
            $context["color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 90, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 90) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 90, $this->source); })()))), [], "array", false, false, false, 90);
            // line 91
            yield "                            <span class=\"badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 91, $this->source); })()), "html", null, true);
            yield " px-2 py-1 rounded\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 91), "html", null, true);
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
        // line 93
        yield "                    </div>
                </div>

                <div class=\"bg-gray-800 p-6 rounded-lg space-y-4\">
                    <h3 class=\"font-semibold\">MJ et Joueurs</h3>
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4\">
                        <div class=\"flex items-center space-x-4\">
                            ";
        // line 100
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 100, $this->source); })()), "owner", [], "any", false, false, false, 100), "avatar", [], "any", false, false, false, 100)) {
            // line 101
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 101, $this->source); })()), "owner", [], "any", false, false, false, 101), "avatar", [], "any", false, false, false, 101))), "html", null, true);
            yield "\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 101, $this->source); })()), "owner", [], "any", false, false, false, 101), "username", [], "any", false, false, false, 101), "html", null, true);
            yield "\">
                            ";
        } else {
            // line 103
            yield "                                <img class=\"rounded-full w-12 h-12 object-cover\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Default profile photo\">
                            ";
        }
        // line 105
        yield "                            <div class=\"flex-1 min-w-0\">
                                <p class=\"font-semibold truncate max-w-full\">";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 106, $this->source); })()), "owner", [], "any", false, false, false, 106), "username", [], "any", false, false, false, 106), "html", null, true);
        yield "</p>
                                <span class=\"text-gray-400 text-sm\">MJ</span>
                            </div>
                        </div>
                        ";
        // line 110
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 110, $this->source); })()), "players", [], "any", false, false, false, 110));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 111
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 111) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 111, $this->source); })()), "owner", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111))) {
                // line 112
                yield "                                <div class=\"flex items-center space-x-4\">
                                    ";
                // line 113
                if (CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 113)) {
                    // line 114
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 114))), "html", null, true);
                    yield "\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 114), "html", null, true);
                    yield "\">
                                    ";
                } else {
                    // line 116
                    yield "                                        <img class=\"rounded-full w-12 h-12 object-cover\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Default profile photo\">
                                    ";
                }
                // line 118
                yield "                                    <div class=\"flex-1 min-w-0\">
                                        <p class=\"font-semibold truncate max-w-full\">";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 119), "html", null, true);
                yield "</p>
                                        <span class=\"text-gray-400 text-sm\">Joueur</span>
                                    </div>
                                </div>
                            ";
            }
            // line 124
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['player'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 125
        yield "                    </div>
                </div>

                <div class=\"bg-gray-800 p-6 rounded-lg space-y-4\">
                    <h3 class=\"font-semibold\">Recrutement</h3>
                    <p class=\"text-lg font-semibold ";
        // line 130
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 130, $this->source); })()), "recrutement", [], "any", false, false, false, 130)) ? ("text-green-500") : ("text-red-500"));
        yield "\">
                        ";
        // line 131
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 131, $this->source); })()), "recrutement", [], "any", false, false, false, 131)) ? ("Ouvert") : ("Fermé"));
        yield "
                    </p>
                </div>
            </div>
        </div>

        <div class=\"text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700\">
            <ul class=\"flex flex-wrap justify-between sm:justify-center space-x-4 sm:space-x-8 -mb-px overflow-x-auto\">
                <li class=\"me-2\">
                    <a href=\"#\" class=\"inline-block p-3 sm:p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500\" data-tab-target=\"#description-tab\" aria-current=\"page\">Description</a>
                </li>
                <li class=\"me-2\">
                    <a href=\"#\" class=\"inline-block p-3 sm:p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" data-tab-target=\"#horaire-tab\">Horaire</a>
                </li>
            </ul>
        </div>

        <div id=\"description-tab\" class=\"tab-content\">
            <h3 class=\"text-lg font-semibold\">Description</h3>
            <p>";
        // line 150
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 150, $this->source); })()), "description", [], "any", false, false, false, 150), "html", null, true);
        yield "</p>
        </div>

        <div id=\"horaire-tab\" class=\"tab-content hidden\">
            <h3 class=\"text-lg font-semibold\">Horaire des événements</h3>
            <ul>
                ";
        // line 156
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 156, $this->source); })()), "events", [], "any", false, false, false, 156));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 157
            yield "                    <li>
                        ";
            // line 158
            $context["dayOfWeek"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 158), "l");
            // line 159
            yield "                        ";
            $context["dayOfWeekFr"] = CoreExtension::getAttribute($this->env, $this->source, ["Monday" => "Lundi", "Tuesday" => "Mardi", "Wednesday" => "Mercredi", "Thursday" => "Jeudi", "Friday" => "Vendredi", "Saturday" => "Samedi", "Sunday" => "Dimanche"],             // line 167
(isset($context["dayOfWeek"]) || array_key_exists("dayOfWeek", $context) ? $context["dayOfWeek"] : (function () { throw new RuntimeError('Variable "dayOfWeek" does not exist.', 167, $this->source); })()), [], "array", false, false, false, 160);
            // line 168
            yield "
                        ";
            // line 169
            $context["hour"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 169), "H");
            // line 170
            yield "                        ";
            $context["minute"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 170), "i");
            // line 171
            yield "
                        ";
            // line 172
            if ((((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 172, $this->source); })()) >= 0) && ((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 172, $this->source); })()) < 12))) {
                // line 173
                yield "                            ";
                $context["period"] = "du matin";
                // line 174
                yield "                        ";
            } elseif ((((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 174, $this->source); })()) >= 12) && ((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 174, $this->source); })()) < 18))) {
                // line 175
                yield "                            ";
                $context["period"] = "de l'après-midi";
                // line 176
                yield "                        ";
            } else {
                // line 177
                yield "                            ";
                $context["period"] = "du soir";
                // line 178
                yield "                        ";
            }
            // line 179
            yield "
                        ";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dayOfWeekFr"]) || array_key_exists("dayOfWeekFr", $context) ? $context["dayOfWeekFr"] : (function () { throw new RuntimeError('Variable "dayOfWeekFr" does not exist.', 180, $this->source); })()), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 180, $this->source); })()), "html", null, true);
            yield ":";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["minute"]) || array_key_exists("minute", $context) ? $context["minute"] : (function () { throw new RuntimeError('Variable "minute" does not exist.', 180, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 180, $this->source); })()), "html", null, true);
            yield "
                    </li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 183
            yield "                    <li>Aucun événement programmé.</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        yield "            </ul>
        </div>

        <div class=\"mt-16\">
            <div class=\"flex justify-between items-center mb-6\">
                <h2 class=\"text-2xl font-bold\">Parties Qui Recrutent</h2>
                <a href=\"";
        // line 191
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-blue-500 border border-blue-500 rounded-full py-2 px-6 hover:bg-blue-500 hover:text-white\">Voir Plus</a>
            </div>
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
                ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["recruiting_jdrs"]) || array_key_exists("recruiting_jdrs", $context) ? $context["recruiting_jdrs"] : (function () { throw new RuntimeError('Variable "recruiting_jdrs" does not exist.', 194, $this->source); })()), 0, 3));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
            // line 195
            yield "                    <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white\">
                        <img src=\"";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 196))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 196), "html", null, true);
            yield "\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                        <div class=\"flex justify-between items-center\">
                            <span class=\"font-semibold text-lg\">";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 198), "html", null, true);
            yield "</span>
                            <a href=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 199)]), "html", null, true);
            yield "\" class=\"bg-blue-600 text-white px-3 py-2 rounded text-xs\">GO</a>
                        </div>
                        <div class=\"flex justify-between items-center mt-4\">
                            <div class=\"flex items-center\">
                                ";
            // line 203
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 203), "avatar", [], "any", false, false, false, 203)) {
                // line 204
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 204), "avatar", [], "any", false, false, false, 204))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 204), "username", [], "any", false, false, false, 204), "html", null, true);
                yield "\" class=\"rounded h-10 w-10 object-cover\">
                                ";
            } else {
                // line 206
                yield "                                    <img class=\"rounded h-10 w-10 object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"MJ photo\">
                                ";
            }
            // line 208
            yield "                                <div class=\"ml-3\">
                                    <p class=\"text-sm text-gray-400\">MJ</p>
                                    <p class=\"text-sm text-white\">";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 210), "username", [], "any", false, false, false, 210), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            <div class=\"text-right\">
                                <p class=\"text-sm text-gray-400\">Places disponibles</p>
                                <p class=\"text-lg font-bold text-white\">";
            // line 215
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 215) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 215))), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 220
            yield "                    <p class=\"text-center text-gray-500\">Aucune partie ne recrute actuellement.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 222
        yield "            </div>
        </div>
    </div>
    <div class=\"flex justify-center fixed bottom-0 left-0 right-0 bg-gray-900 p-4\">
        ";
        // line 226
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 226, $this->source); })()), "user", [], "any", false, false, false, 226))) {
            // line 227
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Vous devez avoir un compte et être connecté pour rejoindre un univers.
            </button>
        ";
        } elseif (        // line 230
(isset($context["is_owner"]) || array_key_exists("is_owner", $context) ? $context["is_owner"] : (function () { throw new RuntimeError('Variable "is_owner" does not exist.', 230, $this->source); })())) {
            // line 231
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Vous êtes le MJ
            </button>
        ";
        } elseif (        // line 234
(isset($context["is_member"]) || array_key_exists("is_member", $context) ? $context["is_member"] : (function () { throw new RuntimeError('Variable "is_member" does not exist.', 234, $this->source); })())) {
            // line 235
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Vous êtes déjà membre
            </button>
        ";
        } elseif (        // line 238
(isset($context["request_in_progress"]) || array_key_exists("request_in_progress", $context) ? $context["request_in_progress"] : (function () { throw new RuntimeError('Variable "request_in_progress" does not exist.', 238, $this->source); })())) {
            // line 239
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                En attente d'acceptation de la demande
            </button>
        ";
        } elseif (        // line 242
(isset($context["is_closed"]) || array_key_exists("is_closed", $context) ? $context["is_closed"] : (function () { throw new RuntimeError('Variable "is_closed" does not exist.', 242, $this->source); })())) {
            // line 243
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Ce groupe est ";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 244, $this->source); })()), "status", [], "any", false, false, false, 244), "html", null, true);
            yield " et ne recrute plus
            </button>
        ";
        } elseif (!CoreExtension::inFilter("ROLE_JOUEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 246
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 246, $this->source); })()), "user", [], "any", false, false, false, 246), "getRoles", [], "method", false, false, false, 246))) {
            // line 247
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Vous devez avoir le grade de joueur pour rejoindre ce JDR.
            </button>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 250
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 250, $this->source); })()), "recrutement", [], "any", false, false, false, 250) == false)) {
            // line 251
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Le recrutement est fermé pour cet Univers
            </button>
        ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 254
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 254, $this->source); })()), "players", [], "any", false, false, false, 254)) >= CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 254, $this->source); })()), "maxPlayer", [], "any", false, false, false, 254))) {
            // line 255
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Cet univers est complet. Pas de places disponibles.
            </button>
        ";
        } else {
            // line 259
            yield "            <button id=\"participate-button\" class=\"w-full sm:w-[80%] md:w-[60%] bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white font-bold py-3 rounded-lg shadow-lg hover:shadow-2xl hover:bg-blue-800 transition-all duration-300 ease-in-out transform hover:scale-105\">
                <svg class=\"inline-block w-6 h-6 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                </svg>
                Je Participe
            </button>
        ";
        }
        // line 266
        yield "    </div>
    <div id=\"request-join-modal\" class=\"hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center transition-opacity duration-300 ease-in-out\">
        <div class=\"bg-white p-6 rounded-lg space-y-4 shadow-2xl max-w-md w-full relative\">
            <button id=\"close-modal\" class=\"absolute top-2 right-2 text-gray-500 hover:text-gray-700\">
                <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"></path>
                </svg>
            </button>
            <h3 class=\"text-lg font-semibold\">Postuler pour rejoindre cet Univers</h3>
            <form id=\"request-join-form\" method=\"POST\" action=\"";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("request_join", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 275, $this->source); })()), "id", [], "any", false, false, false, 275)]), "html", null, true);
        yield "\">
                <div class=\"mb-4\">
                    <label for=\"message\" class=\"block text-base font-semibold text-gray-900 mb-2\">Votre message</label>
                    <textarea id=\"message\" name=\"message\" rows=\"4\" class=\"bg-gray-100 text-gray-800 text-sm rounded-md shadow-inner focus:ring-blue-500 focus:border-blue-500 block w-full p-3 border border-gray-300\" placeholder=\"Expliquez pourquoi vous voulez rejoindre cet Univers...\"></textarea>
                </div>
                <div class=\"flex justify-end space-x-2\">
                    <button type=\"button\" id=\"cancel-button\" class=\"bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition-all duration-200\">Annuler</button>
                    <button type=\"submit\" class=\"bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-all duration-200 shadow-lg\">Envoyer</button>
                </div>
            </form>
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
                'X-CSRF-TOKEN': '";
        // line 342
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
        return array (  748 => 342,  678 => 275,  667 => 266,  658 => 259,  652 => 255,  650 => 254,  645 => 251,  643 => 250,  638 => 247,  636 => 246,  631 => 244,  628 => 243,  626 => 242,  621 => 239,  619 => 238,  614 => 235,  612 => 234,  607 => 231,  605 => 230,  600 => 227,  598 => 226,  592 => 222,  585 => 220,  575 => 215,  567 => 210,  563 => 208,  557 => 206,  549 => 204,  547 => 203,  540 => 199,  536 => 198,  529 => 196,  526 => 195,  521 => 194,  515 => 191,  507 => 185,  500 => 183,  486 => 180,  483 => 179,  480 => 178,  477 => 177,  474 => 176,  471 => 175,  468 => 174,  465 => 173,  463 => 172,  460 => 171,  457 => 170,  455 => 169,  452 => 168,  450 => 167,  448 => 159,  446 => 158,  443 => 157,  438 => 156,  429 => 150,  407 => 131,  403 => 130,  396 => 125,  390 => 124,  382 => 119,  379 => 118,  373 => 116,  365 => 114,  363 => 113,  360 => 112,  357 => 111,  353 => 110,  346 => 106,  343 => 105,  337 => 103,  329 => 101,  327 => 100,  318 => 93,  299 => 91,  296 => 90,  278 => 89,  276 => 88,  264 => 81,  257 => 77,  249 => 72,  241 => 67,  235 => 63,  227 => 59,  225 => 58,  222 => 57,  213 => 51,  208 => 50,  206 => 49,  201 => 46,  197 => 44,  193 => 42,  191 => 41,  188 => 40,  186 => 39,  183 => 38,  181 => 37,  178 => 36,  176 => 35,  173 => 34,  171 => 33,  168 => 32,  166 => 31,  163 => 30,  161 => 29,  158 => 28,  154 => 27,  149 => 26,  145 => 25,  141 => 24,  137 => 23,  133 => 22,  129 => 21,  125 => 20,  116 => 16,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ groupe_j_d_r.title }} | DiceFinder{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 p-6\">
    <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"text-white bg-[#4447a1] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6 mr-3\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3\" />
        </svg>
        Retour
    </a>
    <div class=\"bg-slate-900 text-white min-h-screen p-4 md:p-8 space-y-10\">
        <div class=\"flex flex-col space-y-8 lg:space-y-0 lg:flex-row items-start lg:items-start justify-between lg:space-x-10\">
            <div class=\"w-full lg:w-1/2 space-y-8 relative\">
                <img src=\"{{ asset('uploads/images-jdr/' ~ groupe_j_d_r.picture) }}\" alt=\"{{ groupe_j_d_r.title }}\" class=\"rounded-lg shadow-lg w-full h-auto lg:h-[500px] object-cover\">
                
                <div class=\"absolute top-2 right-2\">
                    <span class=\"text-xs sm:text-sm font-bold px-2 py-1 rounded 
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

                {% if is_member and not is_owner %}
                    <form action=\"{{ path('leave_jdr', {'id': groupe_j_d_r.id}) }}\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir quitter cet univers ?');\" class=\"mt-4\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('leave' ~ groupe_j_d_r.id) }}\">
                        <button type=\"submit\" class=\"bg-red-600 text-white px-4 py-2 rounded w-full hover:bg-red-700 transition-all duration-300\">
                            Quitter l'univers
                        </button>
                    </form>
                {% endif %}

                                {% if app.user and app.user.id == groupe_j_d_r.owner.id %}
                    <a href=\"{{ path('app_groupe_j_d_r_edit', { id: groupe_j_d_r.id }) }}\" class=\"w-full bg-green-600 text-white font-bold py-3 rounded mt-4 hover:bg-green-700 block text-center\">
                        Editer mon Univers
                    </a>
                {% endif %}
            </div>

            <div class=\"w-full lg:w-1/2 space-y-6\">
                <div class=\"flex justify-between items-center\">
                    <h2 class=\"text-2xl sm:text-3xl font-bold\">{{ groupe_j_d_r.title }}</h2>
                    <svg class=\"w-5 h-5 sm:w-6 sm:h-6 text-orange-500 cursor-pointer\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                    </svg>
                </div>
                <p class=\"text-gray-300\">{{ groupe_j_d_r.description }}</p>

                <div class=\"flex justify-between\">
                    <div>
                        <span class=\"text-gray-400\">Date de Création</span>
                        <p class=\"text-lg font-semibold\">{{ groupe_j_d_r.getCreatedAt|date('d/m/Y') }}</p>
                    </div>
                    <div>
                        <span class=\"text-gray-400\">Participants</span>
                        <p class=\"text-lg font-semibold\">{{ groupe_j_d_r.players|length }}/{{ groupe_j_d_r.maxPlayer }}</p>
                    </div>
                </div>

                <div id=\"category-container\" class=\"mt-6\">
                    <h3 class=\"font-semibold\">Catégories</h3>
                    <div class=\"flex flex-wrap gap-2 mt-2\">
                        {% set colors = ['bg-blue-200 text-blue-800', 'bg-green-200 text-green-800', 'bg-yellow-200 text-yellow-800', 'bg-red-200 text-red-800'] %}
                        {% for category in groupe_j_d_r.categories %}
                            {% set color = colors[loop.index0 % colors|length] %}
                            <span class=\"badge {{ color }} px-2 py-1 rounded\">{{ category.name }}</span>
                        {% endfor %}
                    </div>
                </div>

                <div class=\"bg-gray-800 p-6 rounded-lg space-y-4\">
                    <h3 class=\"font-semibold\">MJ et Joueurs</h3>
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4\">
                        <div class=\"flex items-center space-x-4\">
                            {% if groupe_j_d_r.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ groupe_j_d_r.owner.avatar) }}\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"{{ groupe_j_d_r.owner.username }}\">
                            {% else %}
                                <img class=\"rounded-full w-12 h-12 object-cover\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                            {% endif %}
                            <div class=\"flex-1 min-w-0\">
                                <p class=\"font-semibold truncate max-w-full\">{{ groupe_j_d_r.owner.username }}</p>
                                <span class=\"text-gray-400 text-sm\">MJ</span>
                            </div>
                        </div>
                        {% for player in groupe_j_d_r.players %}
                            {% if player.id != groupe_j_d_r.owner.id %}
                                <div class=\"flex items-center space-x-4\">
                                    {% if player.avatar %}
                                        <img src=\"{{ asset('uploads/avatars/' ~ player.avatar) }}\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"{{ player.username }}\">
                                    {% else %}
                                        <img class=\"rounded-full w-12 h-12 object-cover\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                                    {% endif %}
                                    <div class=\"flex-1 min-w-0\">
                                        <p class=\"font-semibold truncate max-w-full\">{{ player.username }}</p>
                                        <span class=\"text-gray-400 text-sm\">Joueur</span>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>

                <div class=\"bg-gray-800 p-6 rounded-lg space-y-4\">
                    <h3 class=\"font-semibold\">Recrutement</h3>
                    <p class=\"text-lg font-semibold {{ groupe_j_d_r.recrutement ? 'text-green-500' : 'text-red-500' }}\">
                        {{ groupe_j_d_r.recrutement ? 'Ouvert' : 'Fermé' }}
                    </p>
                </div>
            </div>
        </div>

        <div class=\"text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700\">
            <ul class=\"flex flex-wrap justify-between sm:justify-center space-x-4 sm:space-x-8 -mb-px overflow-x-auto\">
                <li class=\"me-2\">
                    <a href=\"#\" class=\"inline-block p-3 sm:p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500\" data-tab-target=\"#description-tab\" aria-current=\"page\">Description</a>
                </li>
                <li class=\"me-2\">
                    <a href=\"#\" class=\"inline-block p-3 sm:p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" data-tab-target=\"#horaire-tab\">Horaire</a>
                </li>
            </ul>
        </div>

        <div id=\"description-tab\" class=\"tab-content\">
            <h3 class=\"text-lg font-semibold\">Description</h3>
            <p>{{ groupe_j_d_r.description }}</p>
        </div>

        <div id=\"horaire-tab\" class=\"tab-content hidden\">
            <h3 class=\"text-lg font-semibold\">Horaire des événements</h3>
            <ul>
                {% for event in groupe_j_d_r.events %}
                    <li>
                        {% set dayOfWeek = event.eventTime|date('l') %}
                        {% set dayOfWeekFr = {
                            'Monday': 'Lundi',
                            'Tuesday': 'Mardi',
                            'Wednesday': 'Mercredi',
                            'Thursday': 'Jeudi',
                            'Friday': 'Vendredi',
                            'Saturday': 'Samedi',
                            'Sunday': 'Dimanche'
                        }[dayOfWeek] %}

                        {% set hour = event.eventTime|date('H') %}
                        {% set minute = event.eventTime|date('i') %}

                        {% if hour >= 0 and hour < 12 %}
                            {% set period = 'du matin' %}
                        {% elseif hour >= 12 and hour < 18 %}
                            {% set period = 'de l\\'après-midi' %}
                        {% else %}
                            {% set period = 'du soir' %}
                        {% endif %}

                        {{ dayOfWeekFr }} à {{ hour }}:{{ minute }} {{ period }}
                    </li>
                {% else %}
                    <li>Aucun événement programmé.</li>
                {% endfor %}
            </ul>
        </div>

        <div class=\"mt-16\">
            <div class=\"flex justify-between items-center mb-6\">
                <h2 class=\"text-2xl font-bold\">Parties Qui Recrutent</h2>
                <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"text-blue-500 border border-blue-500 rounded-full py-2 px-6 hover:bg-blue-500 hover:text-white\">Voir Plus</a>
            </div>
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
                {% for jdr in recruiting_jdrs|slice(0, 3) %}
                    <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white\">
                        <img src=\"{{ asset('uploads/images-jdr/' ~ jdr.picture) }}\" alt=\"{{ jdr.title }}\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                        <div class=\"flex justify-between items-center\">
                            <span class=\"font-semibold text-lg\">{{ jdr.title }}</span>
                            <a href=\"{{ path('app_groupe_j_d_r_show', { id: jdr.id }) }}\" class=\"bg-blue-600 text-white px-3 py-2 rounded text-xs\">GO</a>
                        </div>
                        <div class=\"flex justify-between items-center mt-4\">
                            <div class=\"flex items-center\">
                                {% if jdr.owner.avatar %}
                                    <img src=\"{{ asset('uploads/avatars/' ~ jdr.owner.avatar) }}\" alt=\"{{ jdr.owner.username }}\" class=\"rounded h-10 w-10 object-cover\">
                                {% else %}
                                    <img class=\"rounded h-10 w-10 object-cover\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"MJ photo\">
                                {% endif %}
                                <div class=\"ml-3\">
                                    <p class=\"text-sm text-gray-400\">MJ</p>
                                    <p class=\"text-sm text-white\">{{ jdr.owner.username }}</p>
                                </div>
                            </div>
                            <div class=\"text-right\">
                                <p class=\"text-sm text-gray-400\">Places disponibles</p>
                                <p class=\"text-lg font-bold text-white\">{{ jdr.maxPlayer - jdr.players|length }}</p>
                            </div>
                        </div>
                    </div>
                {% else %}
                    <p class=\"text-center text-gray-500\">Aucune partie ne recrute actuellement.</p>
                {% endfor %}
            </div>
        </div>
    </div>
    <div class=\"flex justify-center fixed bottom-0 left-0 right-0 bg-gray-900 p-4\">
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
    <div id=\"request-join-modal\" class=\"hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center transition-opacity duration-300 ease-in-out\">
        <div class=\"bg-white p-6 rounded-lg space-y-4 shadow-2xl max-w-md w-full relative\">
            <button id=\"close-modal\" class=\"absolute top-2 right-2 text-gray-500 hover:text-gray-700\">
                <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"></path>
                </svg>
            </button>
            <h3 class=\"text-lg font-semibold\">Postuler pour rejoindre cet Univers</h3>
            <form id=\"request-join-form\" method=\"POST\" action=\"{{ path('request_join', {'groupeId': groupe_j_d_r.id}) }}\">
                <div class=\"mb-4\">
                    <label for=\"message\" class=\"block text-base font-semibold text-gray-900 mb-2\">Votre message</label>
                    <textarea id=\"message\" name=\"message\" rows=\"4\" class=\"bg-gray-100 text-gray-800 text-sm rounded-md shadow-inner focus:ring-blue-500 focus:border-blue-500 block w-full p-3 border border-gray-300\" placeholder=\"Expliquez pourquoi vous voulez rejoindre cet Univers...\"></textarea>
                </div>
                <div class=\"flex justify-end space-x-2\">
                    <button type=\"button\" id=\"cancel-button\" class=\"bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition-all duration-200\">Annuler</button>
                    <button type=\"submit\" class=\"bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-all duration-200 shadow-lg\">Envoyer</button>
                </div>
            </form>
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
