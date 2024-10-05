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
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 19, $this->source); })()), "status", [], "any", false, false, false, 19) == "preparation")) {
            yield " bg-yellow-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 20, $this->source); })()), "status", [], "any", false, false, false, 20) == "pret_a_jouer")) {
            yield " bg-green-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 21, $this->source); })()), "status", [], "any", false, false, false, 21) == "en_cours")) {
            yield " bg-blue-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 22
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 22, $this->source); })()), "status", [], "any", false, false, false, 22) == "complet")) {
            yield " bg-red-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 23
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 23, $this->source); })()), "status", [], "any", false, false, false, 23) == "pause")) {
            yield " bg-gray-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24) == "termine")) {
            yield " bg-purple-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 25
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 25, $this->source); })()), "status", [], "any", false, false, false, 25) == "annule")) {
            yield " bg-gray-400
                        ";
        } else {
            // line 26
            yield " bg-gray-700
                        ";
        }
        // line 27
        yield " text-white\">
                        ";
        // line 28
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 28, $this->source); })()), "status", [], "any", false, false, false, 28) == "preparation")) {
            // line 29
            yield "                            En Préparation
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 30, $this->source); })()), "status", [], "any", false, false, false, 30) == "pret_a_jouer")) {
            // line 31
            yield "                            Prêt à jouer
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 32
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 32, $this->source); })()), "status", [], "any", false, false, false, 32) == "en_cours")) {
            // line 33
            yield "                            En Cours
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34) == "complet")) {
            // line 35
            yield "                            Complet
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 36
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 36, $this->source); })()), "status", [], "any", false, false, false, 36) == "pause")) {
            // line 37
            yield "                            En Pause
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 38, $this->source); })()), "status", [], "any", false, false, false, 38) == "termine")) {
            // line 39
            yield "                            Terminé
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 40
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 40, $this->source); })()), "status", [], "any", false, false, false, 40) == "annule")) {
            // line 41
            yield "                            Annulé
                        ";
        } else {
            // line 43
            yield "                            Statut inconnu
                        ";
        }
        // line 45
        yield "                    </span>
                </div>
            </div>

            <div class=\"w-full lg:w-1/2 space-y-6\">
                <div class=\"flex justify-between items-center\">
                    <h2 class=\"text-2xl sm:text-3xl font-bold\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 51, $this->source); })()), "title", [], "any", false, false, false, 51), "html", null, true);
        yield "</h2>
                    <svg class=\"w-5 h-5 sm:w-6 sm:h-6 text-orange-500 cursor-pointer\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                    </svg>
                </div>
                <p class=\"text-gray-300\">";
        // line 56
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 56, $this->source); })()), "description", [], "any", false, false, false, 56), "html", null, true);
        yield "</p>

                <div class=\"flex justify-between\">
                    <div>
                        <span class=\"text-gray-400\">Date de Création</span>
                        <p class=\"text-lg font-semibold\">";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 61, $this->source); })()), "getCreatedAt", [], "any", false, false, false, 61), "d/m/Y"), "html", null, true);
        yield "</p>
                    </div>
                    <div>
                        <span class=\"text-gray-400\">Participants</span>
                        <p class=\"text-lg font-semibold\">";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 65, $this->source); })()), "players", [], "any", false, false, false, 65)), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 65, $this->source); })()), "maxPlayer", [], "any", false, false, false, 65), "html", null, true);
        yield "</p>
                    </div>
                </div>

                <div id=\"category-container\" class=\"mt-6\">
                    <h3 class=\"font-semibold\">Catégories</h3>
                    <div class=\"flex flex-wrap gap-2 mt-2\">
                        ";
        // line 72
        $context["colors"] = ["bg-blue-200 text-blue-800", "bg-green-200 text-green-800", "bg-yellow-200 text-yellow-800", "bg-red-200 text-red-800"];
        // line 73
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 73, $this->source); })()), "categories", [], "any", false, false, false, 73));
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
            // line 74
            yield "                            ";
            $context["color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 74, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 74) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 74, $this->source); })()))), [], "array", false, false, false, 74);
            // line 75
            yield "                            <span class=\"badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 75, $this->source); })()), "html", null, true);
            yield " px-2 py-1 rounded\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 75), "html", null, true);
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
        // line 77
        yield "                    </div>
                </div>

                <div class=\"bg-gray-800 p-6 rounded-lg space-y-4\">
                    <h3 class=\"font-semibold\">MJ et Joueurs</h3>
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4\">
                        <div class=\"flex items-center space-x-4\">
                            ";
        // line 84
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 84, $this->source); })()), "owner", [], "any", false, false, false, 84), "avatar", [], "any", false, false, false, 84)) {
            // line 85
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 85, $this->source); })()), "owner", [], "any", false, false, false, 85), "avatar", [], "any", false, false, false, 85))), "html", null, true);
            yield "\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 85, $this->source); })()), "owner", [], "any", false, false, false, 85), "username", [], "any", false, false, false, 85), "html", null, true);
            yield "\">
                            ";
        } else {
            // line 87
            yield "                                <img class=\"rounded-full w-12 h-12 object-cover\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Default profile photo\">
                            ";
        }
        // line 89
        yield "                            <div>
                                <p class=\"font-semibold\">";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 90, $this->source); })()), "owner", [], "any", false, false, false, 90), "username", [], "any", false, false, false, 90), "html", null, true);
        yield "</p>
                                <span class=\"text-gray-400 text-sm\">MJ</span>
                            </div>
                        </div>
                        ";
        // line 94
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 94, $this->source); })()), "players", [], "any", false, false, false, 94));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 95
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 95) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 95, $this->source); })()), "owner", [], "any", false, false, false, 95), "id", [], "any", false, false, false, 95))) {
                // line 96
                yield "                                <div class=\"flex items-center space-x-4\">
                                    ";
                // line 97
                if (CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 97)) {
                    // line 98
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 98))), "html", null, true);
                    yield "\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 98), "html", null, true);
                    yield "\">
                                    ";
                } else {
                    // line 100
                    yield "                                        <img class=\"rounded-full w-12 h-12 object-cover\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Default profile photo\">
                                    ";
                }
                // line 102
                yield "                                    <div>
                                        <p class=\"font-semibold\">";
                // line 103
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 103), "html", null, true);
                yield "</p>
                                        <span class=\"text-gray-400 text-sm\">Joueur</span>
                                    </div>
                                </div>
                            ";
            }
            // line 108
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['player'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 109
        yield "                    </div>
                </div>

                <div class=\"bg-gray-800 p-6 rounded-lg space-y-4\">
                    <h3 class=\"font-semibold\">Recrutement</h3>
                    <p class=\"text-lg font-semibold ";
        // line 114
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 114, $this->source); })()), "recrutement", [], "any", false, false, false, 114)) ? ("text-green-500") : ("text-red-500"));
        yield "\">
                        ";
        // line 115
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 115, $this->source); })()), "recrutement", [], "any", false, false, false, 115)) ? ("Ouvert") : ("Fermé"));
        yield "
                    </p>
                </div>

                ";
        // line 119
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 119, $this->source); })()), "user", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 119, $this->source); })()), "owner", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119)))) {
            // line 120
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 120, $this->source); })()), "id", [], "any", false, false, false, 120)]), "html", null, true);
            yield "\" class=\"w-full bg-green-600 text-white font-bold py-3 rounded mt-4 hover:bg-green-700 block text-center\">
                        Editer mon Univers
                    </a>
                ";
        }
        // line 124
        yield "            </div>
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
        // line 140
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 140, $this->source); })()), "description", [], "any", false, false, false, 140), "html", null, true);
        yield "</p>
        </div>

        <div id=\"horaire-tab\" class=\"tab-content hidden\">
            <h3 class=\"text-lg font-semibold\">Horaire des événements</h3>
            <ul>
                ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 146, $this->source); })()), "events", [], "any", false, false, false, 146));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 147
            yield "                    <li>
                        ";
            // line 148
            $context["dayOfWeek"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 148), "l");
            // line 149
            yield "                        ";
            $context["dayOfWeekFr"] = CoreExtension::getAttribute($this->env, $this->source, ["Monday" => "Lundi", "Tuesday" => "Mardi", "Wednesday" => "Mercredi", "Thursday" => "Jeudi", "Friday" => "Vendredi", "Saturday" => "Samedi", "Sunday" => "Dimanche"],             // line 157
(isset($context["dayOfWeek"]) || array_key_exists("dayOfWeek", $context) ? $context["dayOfWeek"] : (function () { throw new RuntimeError('Variable "dayOfWeek" does not exist.', 157, $this->source); })()), [], "array", false, false, false, 150);
            // line 158
            yield "
                        ";
            // line 159
            $context["hour"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 159), "H");
            // line 160
            yield "                        ";
            $context["minute"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 160), "i");
            // line 161
            yield "
                        ";
            // line 162
            if ((((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 162, $this->source); })()) >= 0) && ((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 162, $this->source); })()) < 12))) {
                // line 163
                yield "                            ";
                $context["period"] = "du matin";
                // line 164
                yield "                        ";
            } elseif ((((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 164, $this->source); })()) >= 12) && ((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 164, $this->source); })()) < 18))) {
                // line 165
                yield "                            ";
                $context["period"] = "de l'après-midi";
                // line 166
                yield "                        ";
            } else {
                // line 167
                yield "                            ";
                $context["period"] = "du soir";
                // line 168
                yield "                        ";
            }
            // line 169
            yield "
                        ";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dayOfWeekFr"]) || array_key_exists("dayOfWeekFr", $context) ? $context["dayOfWeekFr"] : (function () { throw new RuntimeError('Variable "dayOfWeekFr" does not exist.', 170, $this->source); })()), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 170, $this->source); })()), "html", null, true);
            yield ":";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["minute"]) || array_key_exists("minute", $context) ? $context["minute"] : (function () { throw new RuntimeError('Variable "minute" does not exist.', 170, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 170, $this->source); })()), "html", null, true);
            yield "
                    </li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 173
            yield "                    <li>Aucun événement programmé.</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 175
        yield "            </ul>
        </div>

        <div class=\"mt-16\">
            <div class=\"flex justify-between items-center mb-6\">
                <h2 class=\"text-2xl font-bold\">Parties Qui Recrutent</h2>
                <a href=\"";
        // line 181
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-blue-500 border border-blue-500 rounded-full py-2 px-6 hover:bg-blue-500 hover:text-white\">Voir Plus</a>
            </div>
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
                ";
        // line 184
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["recruiting_jdrs"]) || array_key_exists("recruiting_jdrs", $context) ? $context["recruiting_jdrs"] : (function () { throw new RuntimeError('Variable "recruiting_jdrs" does not exist.', 184, $this->source); })()), 0, 3));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
            // line 185
            yield "                    <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white\">
                        <img src=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 186))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 186), "html", null, true);
            yield "\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                        <div class=\"flex justify-between items-center\">
                            <span class=\"font-semibold text-lg\">";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 188), "html", null, true);
            yield "</span>
                            <a href=\"";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 189)]), "html", null, true);
            yield "\" class=\"bg-blue-600 text-white px-3 py-2 rounded text-xs\">GO</a>
                        </div>
                        <div class=\"flex justify-between items-center mt-4\">
                            <div class=\"flex items-center\">
                                ";
            // line 193
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 193), "avatar", [], "any", false, false, false, 193)) {
                // line 194
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 194), "avatar", [], "any", false, false, false, 194))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 194), "username", [], "any", false, false, false, 194), "html", null, true);
                yield "\" class=\"rounded h-10 w-10 object-cover\">
                                ";
            } else {
                // line 196
                yield "                                    <img class=\"rounded h-10 w-10 object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"MJ photo\">
                                ";
            }
            // line 198
            yield "                                <div class=\"ml-3\">
                                    <p class=\"text-sm text-gray-400\">MJ</p>
                                    <p class=\"text-sm text-white\">";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 200), "username", [], "any", false, false, false, 200), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            <div class=\"text-right\">
                                <p class=\"text-sm text-gray-400\">Places disponibles</p>
                                <p class=\"text-lg font-bold text-white\">";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 205) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 205))), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 210
            yield "                    <p class=\"text-center text-gray-500\">Aucune partie ne recrute actuellement.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 212
        yield "            </div>
        </div>
    </div>
    <div class=\"flex justify-center fixed bottom-0 left-0 right-0 bg-gray-900 p-4\">
        <div class=\"flex justify-center fixed bottom-0 left-0 right-0 bg-gray-900 p-4\">
            ";
        // line 217
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 217, $this->source); })()), "user", [], "any", false, false, false, 217))) {
            // line 218
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous devez avoir un compte et être connecté pour rejoindre un univers.
                </button>
            ";
        } elseif (        // line 221
(isset($context["is_owner"]) || array_key_exists("is_owner", $context) ? $context["is_owner"] : (function () { throw new RuntimeError('Variable "is_owner" does not exist.', 221, $this->source); })())) {
            yield " 
                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous êtes le MJ
                </button>
            ";
        } elseif (        // line 225
(isset($context["is_member"]) || array_key_exists("is_member", $context) ? $context["is_member"] : (function () { throw new RuntimeError('Variable "is_member" does not exist.', 225, $this->source); })())) {
            // line 226
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous êtes déjà membre
                </button>
            ";
        } elseif (        // line 229
(isset($context["request_in_progress"]) || array_key_exists("request_in_progress", $context) ? $context["request_in_progress"] : (function () { throw new RuntimeError('Variable "request_in_progress" does not exist.', 229, $this->source); })())) {
            // line 230
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    En attente d'acceptation de la demande
                </button>
            ";
        } elseif (        // line 233
(isset($context["is_closed"]) || array_key_exists("is_closed", $context) ? $context["is_closed"] : (function () { throw new RuntimeError('Variable "is_closed" does not exist.', 233, $this->source); })())) {
            // line 234
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Ce groupe est ";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 235, $this->source); })()), "status", [], "any", false, false, false, 235), "html", null, true);
            yield " et ne recrute plus
                </button>
            ";
        } elseif (!CoreExtension::inFilter("ROLE_JOUEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 237
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 237, $this->source); })()), "user", [], "any", false, false, false, 237), "getRoles", [], "method", false, false, false, 237))) {
            // line 238
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous devez avoir le grade de joueur pour rejoindre ce JDR.
                </button>
            ";
        } else {
            // line 242
            yield "                <button id=\"participate-button\" class=\"w-full sm:w-[80%] md:w-[60%] bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white font-bold py-3 rounded-lg shadow-lg hover:shadow-2xl hover:bg-blue-800 transition-all duration-300 ease-in-out transform hover:scale-105\">
                    <svg class=\"inline-block w-6 h-6 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                    </svg>
                    Je Participe
                </button>
            ";
        }
        // line 249
        yield "        </div>
    </div>
    <div id=\"request-join-modal\" class=\"hidden fixed inset-0 bg-gray-800 bg-opacity-75 flex justify-center items-center transition-opacity duration-300 ease-in-out\">
        <div class=\"bg-white p-6 rounded-lg space-y-4 shadow-2xl max-w-md w-full relative\">
            <button id=\"close-modal\" class=\"absolute top-2 right-2 text-gray-500 hover:text-gray-700\">
                <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"></path>
                </svg>
            </button>
            <h3 class=\"text-lg font-semibold\">Postuler pour rejoindre cet Univers</h3>
            <form id=\"request-join-form\" method=\"POST\" action=\"";
        // line 259
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("request_join", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 259, $this->source); })()), "id", [], "any", false, false, false, 259)]), "html", null, true);
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
        // line 326
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
        return array (  716 => 326,  646 => 259,  634 => 249,  625 => 242,  619 => 238,  617 => 237,  612 => 235,  609 => 234,  607 => 233,  602 => 230,  600 => 229,  595 => 226,  593 => 225,  586 => 221,  581 => 218,  579 => 217,  572 => 212,  565 => 210,  555 => 205,  547 => 200,  543 => 198,  537 => 196,  529 => 194,  527 => 193,  520 => 189,  516 => 188,  509 => 186,  506 => 185,  501 => 184,  495 => 181,  487 => 175,  480 => 173,  466 => 170,  463 => 169,  460 => 168,  457 => 167,  454 => 166,  451 => 165,  448 => 164,  445 => 163,  443 => 162,  440 => 161,  437 => 160,  435 => 159,  432 => 158,  430 => 157,  428 => 149,  426 => 148,  423 => 147,  418 => 146,  409 => 140,  391 => 124,  383 => 120,  381 => 119,  374 => 115,  370 => 114,  363 => 109,  357 => 108,  349 => 103,  346 => 102,  340 => 100,  332 => 98,  330 => 97,  327 => 96,  324 => 95,  320 => 94,  313 => 90,  310 => 89,  304 => 87,  296 => 85,  294 => 84,  285 => 77,  266 => 75,  263 => 74,  245 => 73,  243 => 72,  231 => 65,  224 => 61,  216 => 56,  208 => 51,  200 => 45,  196 => 43,  192 => 41,  190 => 40,  187 => 39,  185 => 38,  182 => 37,  180 => 36,  177 => 35,  175 => 34,  172 => 33,  170 => 32,  167 => 31,  165 => 30,  162 => 29,  160 => 28,  157 => 27,  153 => 26,  148 => 25,  144 => 24,  140 => 23,  136 => 22,  132 => 21,  128 => 20,  124 => 19,  116 => 16,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
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
                            <div>
                                <p class=\"font-semibold\">{{ groupe_j_d_r.owner.username }}</p>
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
                                    <div>
                                        <p class=\"font-semibold\">{{ player.username }}</p>
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

                {% if app.user and app.user.id == groupe_j_d_r.owner.id %}
                    <a href=\"{{ path('app_groupe_j_d_r_edit', { id: groupe_j_d_r.id }) }}\" class=\"w-full bg-green-600 text-white font-bold py-3 rounded mt-4 hover:bg-green-700 block text-center\">
                        Editer mon Univers
                    </a>
                {% endif %}
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
