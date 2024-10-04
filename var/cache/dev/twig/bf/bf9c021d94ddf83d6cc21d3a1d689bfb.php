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
    <div class=\"bg-gray-900 text-white min-h-screen p-4 md:p-8 space-y-10\">
        <div class=\"flex flex-col space-y-8 lg:space-y-0 lg:flex-row items-start lg:items-start justify-between lg:space-x-10\">
            <div class=\"w-full lg:w-1/2 space-y-8 relative\">
                <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 10, $this->source); })()), "picture", [], "any", false, false, false, 10))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        yield "\" class=\"rounded-lg shadow-lg w-full h-auto lg:h-[500px] object-cover\">
                <div class=\"absolute top-2 right-2\">
                    <span class=\"text-xs sm:text-sm font-bold px-2 py-1 rounded 
                        ";
        // line 13
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 13, $this->source); })()), "status", [], "any", false, false, false, 13) == "preparation")) {
            yield " bg-yellow-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 14
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 14, $this->source); })()), "status", [], "any", false, false, false, 14) == "pret_a_jouer")) {
            yield " bg-green-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 15
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 15, $this->source); })()), "status", [], "any", false, false, false, 15) == "en_cours")) {
            yield " bg-blue-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 16
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 16, $this->source); })()), "status", [], "any", false, false, false, 16) == "complet")) {
            yield " bg-red-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 17
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 17, $this->source); })()), "status", [], "any", false, false, false, 17) == "pause")) {
            yield " bg-gray-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 18
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 18, $this->source); })()), "status", [], "any", false, false, false, 18) == "termine")) {
            yield " bg-purple-500
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 19
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 19, $this->source); })()), "status", [], "any", false, false, false, 19) == "annule")) {
            yield " bg-gray-400
                        ";
        } else {
            // line 20
            yield " bg-gray-700
                        ";
        }
        // line 21
        yield " text-white\">
                        ";
        // line 22
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 22, $this->source); })()), "status", [], "any", false, false, false, 22) == "preparation")) {
            // line 23
            yield "                            En Préparation
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 24
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24) == "pret_a_jouer")) {
            // line 25
            yield "                            Prêt à jouer
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26) == "en_cours")) {
            // line 27
            yield "                            En Cours
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 28, $this->source); })()), "status", [], "any", false, false, false, 28) == "complet")) {
            // line 29
            yield "                            Complet
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 30
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 30, $this->source); })()), "status", [], "any", false, false, false, 30) == "pause")) {
            // line 31
            yield "                            En Pause
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 32
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 32, $this->source); })()), "status", [], "any", false, false, false, 32) == "termine")) {
            // line 33
            yield "                            Terminé
                        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34) == "annule")) {
            // line 35
            yield "                            Annulé
                        ";
        } else {
            // line 37
            yield "                            Statut inconnu
                        ";
        }
        // line 39
        yield "                    </span>
                </div>
            </div>

            <div class=\"w-full lg:w-1/2 space-y-6\">
                <div class=\"flex justify-between items-center\">
                    <h2 class=\"text-2xl sm:text-3xl font-bold\">";
        // line 45
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 45, $this->source); })()), "title", [], "any", false, false, false, 45), "html", null, true);
        yield "</h2>
                    <svg class=\"w-5 h-5 sm:w-6 sm:h-6 text-orange-500 cursor-pointer\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                    </svg>
                </div>
                <p class=\"text-gray-300\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 50, $this->source); })()), "description", [], "any", false, false, false, 50), "html", null, true);
        yield "</p>

                <div class=\"flex justify-between\">
                    <div>
                        <span class=\"text-gray-400\">Date de Création</span>
                        <p class=\"text-lg font-semibold\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 55, $this->source); })()), "getCreatedAt", [], "any", false, false, false, 55), "d/m/Y"), "html", null, true);
        yield "</p>
                    </div>
                    <div>
                        <span class=\"text-gray-400\">Participants</span>
                        <p class=\"text-lg font-semibold\">";
        // line 59
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 59, $this->source); })()), "players", [], "any", false, false, false, 59)), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 59, $this->source); })()), "maxPlayer", [], "any", false, false, false, 59), "html", null, true);
        yield "</p>
                    </div>
                </div>

                <div id=\"category-container\" class=\"mt-6\">
                    <h3 class=\"font-semibold\">Catégories</h3>
                    <div class=\"flex flex-wrap gap-2 mt-2\">
                        ";
        // line 66
        $context["colors"] = ["bg-blue-200 text-blue-800", "bg-green-200 text-green-800", "bg-yellow-200 text-yellow-800", "bg-red-200 text-red-800"];
        // line 67
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 67, $this->source); })()), "categories", [], "any", false, false, false, 67));
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
            // line 68
            yield "                            ";
            $context["color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 68, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 68) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 68, $this->source); })()))), [], "array", false, false, false, 68);
            // line 69
            yield "                            <span class=\"badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 69, $this->source); })()), "html", null, true);
            yield " px-2 py-1 rounded\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 69), "html", null, true);
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
        // line 71
        yield "                    </div>
                </div>

                <div class=\"bg-gray-800 p-6 rounded-lg space-y-4\">
                    <h3 class=\"font-semibold\">MJ et Joueurs</h3>
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4\">
                        <div class=\"flex items-center space-x-4\">
                            ";
        // line 78
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 78, $this->source); })()), "owner", [], "any", false, false, false, 78), "avatar", [], "any", false, false, false, 78)) {
            // line 79
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 79, $this->source); })()), "owner", [], "any", false, false, false, 79), "avatar", [], "any", false, false, false, 79))), "html", null, true);
            yield "\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 79, $this->source); })()), "owner", [], "any", false, false, false, 79), "username", [], "any", false, false, false, 79), "html", null, true);
            yield "\">
                            ";
        } else {
            // line 81
            yield "                                <img class=\"rounded-full w-12 h-12 object-cover\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Default profile photo\">
                            ";
        }
        // line 83
        yield "                            <div>
                                <p class=\"font-semibold\">";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 84, $this->source); })()), "owner", [], "any", false, false, false, 84), "username", [], "any", false, false, false, 84), "html", null, true);
        yield "</p>
                                <span class=\"text-gray-400 text-sm\">MJ</span>
                            </div>
                        </div>
                        ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 88, $this->source); })()), "players", [], "any", false, false, false, 88));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 89
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 89) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 89, $this->source); })()), "owner", [], "any", false, false, false, 89), "id", [], "any", false, false, false, 89))) {
                // line 90
                yield "                                <div class=\"flex items-center space-x-4\">
                                    ";
                // line 91
                if (CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 91)) {
                    // line 92
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 92))), "html", null, true);
                    yield "\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 92), "html", null, true);
                    yield "\">
                                    ";
                } else {
                    // line 94
                    yield "                                        <img class=\"rounded-full w-12 h-12 object-cover\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Default profile photo\">
                                    ";
                }
                // line 96
                yield "                                    <div>
                                        <p class=\"font-semibold\">";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 97), "html", null, true);
                yield "</p>
                                        <span class=\"text-gray-400 text-sm\">Joueur</span>
                                    </div>
                                </div>
                            ";
            }
            // line 102
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['player'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "                    </div>
                </div>

                <div class=\"bg-gray-800 p-6 rounded-lg space-y-4\">
                    <h3 class=\"font-semibold\">Recrutement</h3>
                    <p class=\"text-lg font-semibold ";
        // line 108
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 108, $this->source); })()), "recrutement", [], "any", false, false, false, 108)) ? ("text-green-500") : ("text-red-500"));
        yield "\">
                        ";
        // line 109
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 109, $this->source); })()), "recrutement", [], "any", false, false, false, 109)) ? ("Ouvert") : ("Fermé"));
        yield "
                    </p>
                </div>

                ";
        // line 113
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 113, $this->source); })()), "owner", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113)))) {
            // line 114
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 114, $this->source); })()), "id", [], "any", false, false, false, 114)]), "html", null, true);
            yield "\" class=\"w-full bg-green-600 text-white font-bold py-3 rounded mt-4 hover:bg-green-700 block text-center\">
                        Editer mon Univers
                    </a>
                ";
        }
        // line 118
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
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 134, $this->source); })()), "description", [], "any", false, false, false, 134), "html", null, true);
        yield "</p>
        </div>

        <div id=\"horaire-tab\" class=\"tab-content hidden\">
            <h3 class=\"text-lg font-semibold\">Horaire des événements</h3>
            <ul>
                ";
        // line 140
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 140, $this->source); })()), "events", [], "any", false, false, false, 140));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 141
            yield "                    <li>
                        ";
            // line 142
            $context["dayOfWeek"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 142), "l");
            // line 143
            yield "                        ";
            $context["dayOfWeekFr"] = CoreExtension::getAttribute($this->env, $this->source, ["Monday" => "Lundi", "Tuesday" => "Mardi", "Wednesday" => "Mercredi", "Thursday" => "Jeudi", "Friday" => "Vendredi", "Saturday" => "Samedi", "Sunday" => "Dimanche"],             // line 151
(isset($context["dayOfWeek"]) || array_key_exists("dayOfWeek", $context) ? $context["dayOfWeek"] : (function () { throw new RuntimeError('Variable "dayOfWeek" does not exist.', 151, $this->source); })()), [], "array", false, false, false, 144);
            // line 152
            yield "
                        ";
            // line 153
            $context["hour"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 153), "H");
            // line 154
            yield "                        ";
            $context["minute"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 154), "i");
            // line 155
            yield "
                        ";
            // line 156
            if ((((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 156, $this->source); })()) >= 0) && ((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 156, $this->source); })()) < 12))) {
                // line 157
                yield "                            ";
                $context["period"] = "du matin";
                // line 158
                yield "                        ";
            } elseif ((((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 158, $this->source); })()) >= 12) && ((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 158, $this->source); })()) < 18))) {
                // line 159
                yield "                            ";
                $context["period"] = "de l'après-midi";
                // line 160
                yield "                        ";
            } else {
                // line 161
                yield "                            ";
                $context["period"] = "du soir";
                // line 162
                yield "                        ";
            }
            // line 163
            yield "
                        ";
            // line 164
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dayOfWeekFr"]) || array_key_exists("dayOfWeekFr", $context) ? $context["dayOfWeekFr"] : (function () { throw new RuntimeError('Variable "dayOfWeekFr" does not exist.', 164, $this->source); })()), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 164, $this->source); })()), "html", null, true);
            yield ":";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["minute"]) || array_key_exists("minute", $context) ? $context["minute"] : (function () { throw new RuntimeError('Variable "minute" does not exist.', 164, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 164, $this->source); })()), "html", null, true);
            yield "
                    </li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 167
            yield "                    <li>Aucun événement programmé.</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        yield "            </ul>
        </div>

        <div class=\"mt-16\">
            <div class=\"flex justify-between items-center mb-6\">
                <h2 class=\"text-2xl font-bold\">Parties Qui Recrutent</h2>
                <a href=\"";
        // line 175
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-blue-500 border border-blue-500 rounded-full py-2 px-6 hover:bg-blue-500 hover:text-white\">Voir Plus</a>
            </div>
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
                ";
        // line 178
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["recruiting_jdrs"]) || array_key_exists("recruiting_jdrs", $context) ? $context["recruiting_jdrs"] : (function () { throw new RuntimeError('Variable "recruiting_jdrs" does not exist.', 178, $this->source); })()), 0, 3));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
            // line 179
            yield "                    <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white\">
                        <img src=\"";
            // line 180
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 180))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 180), "html", null, true);
            yield "\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                        <div class=\"flex justify-between items-center\">
                            <span class=\"font-semibold text-lg\">";
            // line 182
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 182), "html", null, true);
            yield "</span>
                            <a href=\"";
            // line 183
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 183)]), "html", null, true);
            yield "\" class=\"bg-blue-600 text-white px-3 py-2 rounded text-xs\">GO</a>
                        </div>
                        <div class=\"flex justify-between items-center mt-4\">
                            <div class=\"flex items-center\">
                                ";
            // line 187
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 187), "avatar", [], "any", false, false, false, 187)) {
                // line 188
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 188), "avatar", [], "any", false, false, false, 188))), "html", null, true);
                yield "\" alt=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 188), "username", [], "any", false, false, false, 188), "html", null, true);
                yield "\" class=\"rounded h-10 w-10 object-cover\">
                                ";
            } else {
                // line 190
                yield "                                    <img class=\"rounded h-10 w-10 object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"MJ photo\">
                                ";
            }
            // line 192
            yield "                                <div class=\"ml-3\">
                                    <p class=\"text-sm text-gray-400\">MJ</p>
                                    <p class=\"text-sm text-white\">";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 194), "username", [], "any", false, false, false, 194), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                            <div class=\"text-right\">
                                <p class=\"text-sm text-gray-400\">Places disponibles</p>
                                <p class=\"text-lg font-bold text-white\">";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 199) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 199))), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 204
            yield "                    <p class=\"text-center text-gray-500\">Aucune partie ne recrute actuellement.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 206
        yield "            </div>
        </div>
    </div>
    <div class=\"flex justify-center fixed bottom-0 left-0 right-0 bg-gray-900 p-4\">
        <div class=\"flex justify-center fixed bottom-0 left-0 right-0 bg-gray-900 p-4\">
            ";
        // line 211
        if ((isset($context["is_owner"]) || array_key_exists("is_owner", $context) ? $context["is_owner"] : (function () { throw new RuntimeError('Variable "is_owner" does not exist.', 211, $this->source); })())) {
            yield " 
                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous êtes le MJ
                </button>
            ";
        } elseif (        // line 215
(isset($context["is_member"]) || array_key_exists("is_member", $context) ? $context["is_member"] : (function () { throw new RuntimeError('Variable "is_member" does not exist.', 215, $this->source); })())) {
            // line 216
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous êtes déjà membre
                </button>
            ";
        } elseif (        // line 219
(isset($context["request_in_progress"]) || array_key_exists("request_in_progress", $context) ? $context["request_in_progress"] : (function () { throw new RuntimeError('Variable "request_in_progress" does not exist.', 219, $this->source); })())) {
            // line 220
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    En attente d'acceptation de la demande
                </button>
            ";
        } elseif (( !(null === CoreExtension::getAttribute($this->env, $this->source,         // line 223
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 223, $this->source); })()), "user", [], "any", false, false, false, 223)) && !CoreExtension::inFilter("ROLE_JOUEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 223, $this->source); })()), "user", [], "any", false, false, false, 223), "getRoles", [], "method", false, false, false, 223)))) {
            // line 224
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous devez avoir le grade de joueur pour rejoindre ce JDR.
                </button>
            ";
        } else {
            // line 228
            yield "                <button id=\"participate-button\" class=\"w-full sm:w-[80%] md:w-[60%] bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white font-bold py-3 rounded-lg shadow-lg hover:shadow-2xl hover:bg-blue-800 transition-all duration-300 ease-in-out transform hover:scale-105\">
                    <svg class=\"inline-block w-6 h-6 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                    </svg>
                    Je Participe
                </button>
            ";
        }
        // line 235
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
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("request_join", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 245, $this->source); })()), "id", [], "any", false, false, false, 245)]), "html", null, true);
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
        // line 312
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
        return array (  690 => 312,  620 => 245,  608 => 235,  599 => 228,  593 => 224,  591 => 223,  586 => 220,  584 => 219,  579 => 216,  577 => 215,  570 => 211,  563 => 206,  556 => 204,  546 => 199,  538 => 194,  534 => 192,  528 => 190,  520 => 188,  518 => 187,  511 => 183,  507 => 182,  500 => 180,  497 => 179,  492 => 178,  486 => 175,  478 => 169,  471 => 167,  457 => 164,  454 => 163,  451 => 162,  448 => 161,  445 => 160,  442 => 159,  439 => 158,  436 => 157,  434 => 156,  431 => 155,  428 => 154,  426 => 153,  423 => 152,  421 => 151,  419 => 143,  417 => 142,  414 => 141,  409 => 140,  400 => 134,  382 => 118,  374 => 114,  372 => 113,  365 => 109,  361 => 108,  354 => 103,  348 => 102,  340 => 97,  337 => 96,  331 => 94,  323 => 92,  321 => 91,  318 => 90,  315 => 89,  311 => 88,  304 => 84,  301 => 83,  295 => 81,  287 => 79,  285 => 78,  276 => 71,  257 => 69,  254 => 68,  236 => 67,  234 => 66,  222 => 59,  215 => 55,  207 => 50,  199 => 45,  191 => 39,  187 => 37,  183 => 35,  181 => 34,  178 => 33,  176 => 32,  173 => 31,  171 => 30,  168 => 29,  166 => 28,  163 => 27,  161 => 26,  158 => 25,  156 => 24,  153 => 23,  151 => 22,  148 => 21,  144 => 20,  139 => 19,  135 => 18,  131 => 17,  127 => 16,  123 => 15,  119 => 14,  115 => 13,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ groupe_j_d_r.title }} | DiceFinder{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 p-6\">
    <div class=\"bg-gray-900 text-white min-h-screen p-4 md:p-8 space-y-10\">
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
            {% if is_owner %} 
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
            {% elseif app.user is not null and 'ROLE_JOUEUR' not in app.user.getRoles() %}
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
