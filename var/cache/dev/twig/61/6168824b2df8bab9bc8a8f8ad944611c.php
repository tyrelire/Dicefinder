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

/* profile/show.html.twig */
class __TwigTemplate_79ecbdbe097c7a1162d43907a7c18d88 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/show.html.twig", 1);
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

        yield "Mon Profil";
        
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
    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-6\">
        <div class=\"col-span-1\">
            <div class=\"bg-white shadow rounded-lg p-6 relative overflow-hidden\">
                <div class=\"absolute top-2 right-2\">
                    <a href=\"";
        // line 11
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
        yield "\" title=\"Paramètres\">
                        <svg class=\"h-6 w-6 text-gray-500 hover:text-gray-700\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z\" />
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z\" />
                        </svg>
                    </a>
                </div>
                <div class=\"flex flex-col items-center text-center\">
                    ";
        // line 19
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "user", [], "any", false, false, false, 19), "avatar", [], "any", false, false, false, 19)) {
            // line 20
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "user", [], "any", false, false, false, 20), "avatar", [], "any", false, false, false, 20))), "html", null, true);
            yield "\" class=\"w-24 h-24 md:w-32 md:h-32 bg-gray-300 rounded-full mb-4\" alt=\"Photo de profil\">
                    ";
        } else {
            // line 22
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" class=\"w-24 h-24 md:w-32 md:h-32 bg-gray-300 rounded-full mb-4\" alt=\"Photo de profil par défaut\">
                    ";
        }
        // line 24
        yield "                    <h1 class=\"text-lg md:text-xl font-bold truncate w-full max-w-full md:max-w-[80%]\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24), "username", [], "any", false, false, false, 24), "html", null, true);
        yield "</h1>
                </div>
                <hr class=\"my-6 border-t border-gray-300\">
                <div class=\"mb-6\">
                    <span class=\"text-gray-700 uppercase font-bold tracking-wider mb-2 block\">Contact</span>
                    <ul class=\"space-y-2 text-sm md:text-base\">
                        ";
        // line 30
        if ((((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "discordPseudo", [], "any", false, false, false, 30) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "TwitterPseudo", [], "any", false, false, false, 30)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "YoutubeChannelLink", [], "any", false, false, false, 30)) || CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "user", [], "any", false, false, false, 30), "TwitchChannelLink", [], "any", false, false, false, 30))) {
            // line 31
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31), "discordPseudo", [], "any", false, false, false, 31)) {
                // line 32
                yield "                                <li>
                                    <a class=\"text-blue-600 dark:text-blue-500 hover:underline\" target=\"_blank\">";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "user", [], "any", false, false, false, 33), "discordPseudo", [], "any", false, false, false, 33), "html", null, true);
                yield "</a>
                                </li>
                            ";
            }
            // line 36
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36), "TwitterPseudo", [], "any", false, false, false, 36)) {
                // line 37
                yield "                                <li>
                                    <a href=\"https://twitter.com/";
                // line 38
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 38, $this->source); })()), "user", [], "any", false, false, false, 38), "TwitterPseudo", [], "any", false, false, false, 38), ["@" => ""]), "html", null, true);
                yield "\" class=\"text-blue-600 dark:text-blue-500 hover:underline\" target=\"_blank\">X / Twitter</a>
                                </li>
                            ";
            }
            // line 41
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "YoutubeChannelLink", [], "any", false, false, false, 41)) {
                // line 42
                yield "                                <li>
                                    <a href=\"";
                // line 43
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "YoutubeChannelLink", [], "any", false, false, false, 43), "html", null, true);
                yield "\" class=\"text-blue-600 dark:text-blue-500 hover:underline\" target=\"_blank\">YouTube</a>
                                </li>
                            ";
            }
            // line 46
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46), "TwitchChannelLink", [], "any", false, false, false, 46)) {
                // line 47
                yield "                                <li>
                                    <a href=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "TwitchChannelLink", [], "any", false, false, false, 48), "html", null, true);
                yield "\" class=\"text-blue-600 dark:text-blue-500 hover:underline\" target=\"_blank\">Twitch</a>
                                </li>
                            ";
            }
            // line 51
            yield "                        ";
        } else {
            // line 52
            yield "                            <li class=\"text-gray-500\">Aucun contact renseigné.</li>
                        ";
        }
        // line 54
        yield "                    </ul>
                </div>
                <div class=\"mb-6\">
                    <span class=\"text-gray-700 uppercase font-bold tracking-wider mb-2 block\">Compétences</span>
                    <ul class=\"space-y-2 text-sm md:text-base break-words\">
                        <li class=\"whitespace-pre-line\">";
        // line 59
        ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "competence", [], "any", false, false, false, 59)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "competence", [], "any", false, false, false, 59), "html", null, true)) : (yield "Pas de compétence spécifiée"));
        yield "</li>
                    </ul>
                </div>
                ";
        // line 62
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "gender", [], "any", false, false, false, 62)) {
            // line 63
            yield "                    <div class=\"mb-6\">
                        <span class=\"text-gray-700 uppercase font-bold tracking-wider mb-2 block\">Genre</span>
                        <p class=\"text-sm md:text-base\">";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "gender", [], "any", false, false, false, 65), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        // line 68
        yield "            </div>
        </div>

        <div class=\"col-span-1 md:col-span-3\">
            <div class=\"bg-white shadow rounded-lg p-6\">
            <h2 class=\"text-xl font-bold mb-4\">À propos de moi</h2>
            <p class=\"text-gray-700 text-sm md:text-base break-words overflow-hidden text-ellipsis max-h-40\">";
        // line 74
        ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "bio", [], "any", false, false, false, 74)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "bio", [], "any", false, false, false, 74), "html", null, true)) : (yield "Pas de biographie disponible"));
        yield "</p>


                <h2 class=\"text-xl font-bold mt-6 mb-4\">Mes Parties (MJ)</h2>
                <div class=\"mb-6\">
                    ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ownedJDRs"]) || array_key_exists("ownedJDRs", $context) ? $context["ownedJDRs"] : (function () { throw new RuntimeError('Variable "ownedJDRs" does not exist.', 79, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
            // line 80
            yield "                        <div class=\"mb-4 border-b pb-4\">
                            <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center flex-wrap gap-2 w-full\">
                                <span class=\"text-gray-800 font-bold text-base md:text-lg\">Campagne : ";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 82), "html", null, true);
            yield "</span>
                                <p class=\"text-gray-600 text-sm md:text-base\">
                                    Rôle : Maître du Jeu
                                    <br>
                                    Créée le : <span class=\"text-blue-500\">";
            // line 86
            ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "createdAt", [], "any", false, false, false, 86)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "createdAt", [], "any", false, false, false, 86), "d/m/Y"), "html", null, true)) : (yield "Date inconnue"));
            yield "</span>
                                    ";
            // line 87
            if (CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "createdAt", [], "any", false, false, false, 87)) {
                // line 88
                yield "                                        ";
                $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
                // line 89
                yield "                                        ";
                $context["interval"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 89, $this->source); })()), "diff", [CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "createdAt", [], "any", false, false, false, 89)], "method", false, false, false, 89);
                // line 90
                yield "                                        <br>
                                        <span class=\"font-semibold text-gray-800\">Durée :</span> 
                                        ";
                // line 92
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 92, $this->source); })()), "days", [], "any", false, false, false, 92) > 0)) {
                    // line 93
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 93, $this->source); })()), "days", [], "any", false, false, false, 93), "html", null, true);
                    yield " jour";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 93, $this->source); })()), "days", [], "any", false, false, false, 93) > 1)) {
                        yield "s";
                    }
                    // line 94
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 94, $this->source); })()), "h", [], "any", false, false, false, 94) > 0)) {
                        // line 95
                        yield "                                                et ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 95, $this->source); })()), "h", [], "any", false, false, false, 95), "html", null, true);
                        yield " heure";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 95, $this->source); })()), "h", [], "any", false, false, false, 95) > 1)) {
                            yield "s";
                        }
                        // line 96
                        yield "                                            ";
                    }
                    // line 97
                    yield "                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 97, $this->source); })()), "h", [], "any", false, false, false, 97) > 0)) {
                    // line 98
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 98, $this->source); })()), "h", [], "any", false, false, false, 98), "html", null, true);
                    yield " heure";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 98, $this->source); })()), "h", [], "any", false, false, false, 98) > 1)) {
                        yield "s";
                    }
                    // line 99
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 99, $this->source); })()), "i", [], "any", false, false, false, 99) > 0)) {
                        // line 100
                        yield "                                                et ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 100, $this->source); })()), "i", [], "any", false, false, false, 100), "html", null, true);
                        yield " minute";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 100, $this->source); })()), "i", [], "any", false, false, false, 100) > 1)) {
                            yield "s";
                        }
                        // line 101
                        yield "                                            ";
                    }
                    // line 102
                    yield "                                        ";
                } else {
                    // line 103
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 103, $this->source); })()), "i", [], "any", false, false, false, 103), "html", null, true);
                    yield " minute";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 103, $this->source); })()), "i", [], "any", false, false, false, 103) > 1)) {
                        yield "s";
                    }
                    // line 104
                    yield "                                        ";
                }
                // line 105
                yield "                                    ";
            }
            // line 106
            yield "                                </p>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 110
            yield "                        <p class=\"text-center text-gray-500\">Pas encore de campagnes créées.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        yield "                </div>


                <h2 class=\"text-xl font-bold mt-6 mb-4\">Parties où je suis Joueur</h2>
                <div class=\"mb-6\">
                    ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joinedJDRs"]) || array_key_exists("joinedJDRs", $context) ? $context["joinedJDRs"] : (function () { throw new RuntimeError('Variable "joinedJDRs" does not exist.', 117, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["joinedJDR"]) {
            // line 118
            yield "                        <div class=\"mb-4 border-b pb-4\">
                            <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center flex-wrap gap-2 w-full\">
                                <span class=\"text-gray-800 font-bold text-base md:text-lg\">Campagne : ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joinedJDR"], "groupe", [], "any", false, false, false, 120), "title", [], "any", false, false, false, 120), "html", null, true);
            yield "</span>
                                <p class=\"text-gray-600 text-sm md:text-base\">
                                    Rôle : Joueur
                                    <br>
                                    Depuis le : 
                                    <span class=\"text-blue-500\">";
            // line 125
            ((CoreExtension::getAttribute($this->env, $this->source, $context["joinedJDR"], "joined_at", [], "any", false, false, false, 125)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["joinedJDR"], "joined_at", [], "any", false, false, false, 125), "d/m/Y"), "html", null, true)) : (yield "Date inconnue"));
            yield "</span>
                                    ";
            // line 126
            if (CoreExtension::getAttribute($this->env, $this->source, $context["joinedJDR"], "joined_at", [], "any", false, false, false, 126)) {
                // line 127
                yield "                                        ";
                $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
                // line 128
                yield "                                        ";
                $context["interval"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 128, $this->source); })()), "diff", [CoreExtension::getAttribute($this->env, $this->source, $context["joinedJDR"], "joined_at", [], "any", false, false, false, 128)], "method", false, false, false, 128);
                // line 129
                yield "                                        <br>
                                        <span class=\"font-semibold text-gray-800\">Durée :</span> 
                                        ";
                // line 131
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 131, $this->source); })()), "days", [], "any", false, false, false, 131) > 0)) {
                    // line 132
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 132, $this->source); })()), "days", [], "any", false, false, false, 132), "html", null, true);
                    yield " jour";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 132, $this->source); })()), "days", [], "any", false, false, false, 132) > 1)) {
                        yield "s";
                    }
                    // line 133
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 133, $this->source); })()), "h", [], "any", false, false, false, 133) > 0)) {
                        // line 134
                        yield "                                                et ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 134, $this->source); })()), "h", [], "any", false, false, false, 134), "html", null, true);
                        yield " heure";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 134, $this->source); })()), "h", [], "any", false, false, false, 134) > 1)) {
                            yield "s";
                        }
                        // line 135
                        yield "                                            ";
                    }
                    // line 136
                    yield "                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 136, $this->source); })()), "h", [], "any", false, false, false, 136) > 0)) {
                    // line 137
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 137, $this->source); })()), "h", [], "any", false, false, false, 137), "html", null, true);
                    yield " heure";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 137, $this->source); })()), "h", [], "any", false, false, false, 137) > 1)) {
                        yield "s";
                    }
                    // line 138
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 138, $this->source); })()), "i", [], "any", false, false, false, 138) > 0)) {
                        // line 139
                        yield "                                                et ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 139, $this->source); })()), "i", [], "any", false, false, false, 139), "html", null, true);
                        yield " minute";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 139, $this->source); })()), "i", [], "any", false, false, false, 139) > 1)) {
                            yield "s";
                        }
                        // line 140
                        yield "                                            ";
                    }
                    // line 141
                    yield "                                        ";
                } else {
                    // line 142
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 142, $this->source); })()), "i", [], "any", false, false, false, 142), "html", null, true);
                    yield " minute";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 142, $this->source); })()), "i", [], "any", false, false, false, 142) > 1)) {
                        yield "s";
                    }
                    // line 143
                    yield "                                        ";
                }
                // line 144
                yield "                                    ";
            }
            // line 145
            yield "                                </p>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 149
            yield "                        <p class=\"text-center text-gray-500\">Pas encore de campagnes associées.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joinedJDR'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "                </div>
            </div>
        </div>
    </div>
</div>
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
        return "profile/show.html.twig";
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
        return array (  464 => 151,  457 => 149,  449 => 145,  446 => 144,  443 => 143,  436 => 142,  433 => 141,  430 => 140,  423 => 139,  420 => 138,  413 => 137,  410 => 136,  407 => 135,  400 => 134,  397 => 133,  390 => 132,  388 => 131,  384 => 129,  381 => 128,  378 => 127,  376 => 126,  372 => 125,  364 => 120,  360 => 118,  355 => 117,  348 => 112,  341 => 110,  333 => 106,  330 => 105,  327 => 104,  320 => 103,  317 => 102,  314 => 101,  307 => 100,  304 => 99,  297 => 98,  294 => 97,  291 => 96,  284 => 95,  281 => 94,  274 => 93,  272 => 92,  268 => 90,  265 => 89,  262 => 88,  260 => 87,  256 => 86,  249 => 82,  245 => 80,  240 => 79,  232 => 74,  224 => 68,  218 => 65,  214 => 63,  212 => 62,  206 => 59,  199 => 54,  195 => 52,  192 => 51,  186 => 48,  183 => 47,  180 => 46,  174 => 43,  171 => 42,  168 => 41,  162 => 38,  159 => 37,  156 => 36,  150 => 33,  147 => 32,  144 => 31,  142 => 30,  132 => 24,  126 => 22,  120 => 20,  118 => 19,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Profil{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8\">
    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-6\">
        <div class=\"col-span-1\">
            <div class=\"bg-white shadow rounded-lg p-6 relative overflow-hidden\">
                <div class=\"absolute top-2 right-2\">
                    <a href=\"{{ path('app_profile_edit') }}\" title=\"Paramètres\">
                        <svg class=\"h-6 w-6 text-gray-500 hover:text-gray-700\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z\" />
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z\" />
                        </svg>
                    </a>
                </div>
                <div class=\"flex flex-col items-center text-center\">
                    {% if app.user.avatar %}
                        <img src=\"{{ asset('uploads/avatars/' ~ app.user.avatar) }}\" class=\"w-24 h-24 md:w-32 md:h-32 bg-gray-300 rounded-full mb-4\" alt=\"Photo de profil\">
                    {% else %}
                        <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"w-24 h-24 md:w-32 md:h-32 bg-gray-300 rounded-full mb-4\" alt=\"Photo de profil par défaut\">
                    {% endif %}
                    <h1 class=\"text-lg md:text-xl font-bold truncate w-full max-w-full md:max-w-[80%]\">{{ app.user.username }}</h1>
                </div>
                <hr class=\"my-6 border-t border-gray-300\">
                <div class=\"mb-6\">
                    <span class=\"text-gray-700 uppercase font-bold tracking-wider mb-2 block\">Contact</span>
                    <ul class=\"space-y-2 text-sm md:text-base\">
                        {% if app.user.discordPseudo or app.user.TwitterPseudo or app.user.YoutubeChannelLink or app.user.TwitchChannelLink %}
                            {% if app.user.discordPseudo %}
                                <li>
                                    <a class=\"text-blue-600 dark:text-blue-500 hover:underline\" target=\"_blank\">{{ app.user.discordPseudo }}</a>
                                </li>
                            {% endif %}
                            {% if app.user.TwitterPseudo %}
                                <li>
                                    <a href=\"https://twitter.com/{{ app.user.TwitterPseudo | replace({'@': ''}) }}\" class=\"text-blue-600 dark:text-blue-500 hover:underline\" target=\"_blank\">X / Twitter</a>
                                </li>
                            {% endif %}
                            {% if app.user.YoutubeChannelLink %}
                                <li>
                                    <a href=\"{{ app.user.YoutubeChannelLink }}\" class=\"text-blue-600 dark:text-blue-500 hover:underline\" target=\"_blank\">YouTube</a>
                                </li>
                            {% endif %}
                            {% if app.user.TwitchChannelLink %}
                                <li>
                                    <a href=\"{{ app.user.TwitchChannelLink }}\" class=\"text-blue-600 dark:text-blue-500 hover:underline\" target=\"_blank\">Twitch</a>
                                </li>
                            {% endif %}
                        {% else %}
                            <li class=\"text-gray-500\">Aucun contact renseigné.</li>
                        {% endif %}
                    </ul>
                </div>
                <div class=\"mb-6\">
                    <span class=\"text-gray-700 uppercase font-bold tracking-wider mb-2 block\">Compétences</span>
                    <ul class=\"space-y-2 text-sm md:text-base break-words\">
                        <li class=\"whitespace-pre-line\">{{ app.user.competence ? app.user.competence : 'Pas de compétence spécifiée' }}</li>
                    </ul>
                </div>
                {% if app.user.gender %}
                    <div class=\"mb-6\">
                        <span class=\"text-gray-700 uppercase font-bold tracking-wider mb-2 block\">Genre</span>
                        <p class=\"text-sm md:text-base\">{{ app.user.gender }}</p>
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"col-span-1 md:col-span-3\">
            <div class=\"bg-white shadow rounded-lg p-6\">
            <h2 class=\"text-xl font-bold mb-4\">À propos de moi</h2>
            <p class=\"text-gray-700 text-sm md:text-base break-words overflow-hidden text-ellipsis max-h-40\">{{ app.user.bio ? app.user.bio : 'Pas de biographie disponible' }}</p>


                <h2 class=\"text-xl font-bold mt-6 mb-4\">Mes Parties (MJ)</h2>
                <div class=\"mb-6\">
                    {% for jdr in ownedJDRs %}
                        <div class=\"mb-4 border-b pb-4\">
                            <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center flex-wrap gap-2 w-full\">
                                <span class=\"text-gray-800 font-bold text-base md:text-lg\">Campagne : {{ jdr.title }}</span>
                                <p class=\"text-gray-600 text-sm md:text-base\">
                                    Rôle : Maître du Jeu
                                    <br>
                                    Créée le : <span class=\"text-blue-500\">{{ jdr.createdAt ? jdr.createdAt|date('d/m/Y') : 'Date inconnue' }}</span>
                                    {% if jdr.createdAt %}
                                        {% set now = date() %}
                                        {% set interval = now.diff(jdr.createdAt) %}
                                        <br>
                                        <span class=\"font-semibold text-gray-800\">Durée :</span> 
                                        {% if interval.days > 0 %}
                                            {{ interval.days }} jour{% if interval.days > 1 %}s{% endif %}
                                            {% if interval.h > 0 %}
                                                et {{ interval.h }} heure{% if interval.h > 1 %}s{% endif %}
                                            {% endif %}
                                        {% elseif interval.h > 0 %}
                                            {{ interval.h }} heure{% if interval.h > 1 %}s{% endif %}
                                            {% if interval.i > 0 %}
                                                et {{ interval.i }} minute{% if interval.i > 1 %}s{% endif %}
                                            {% endif %}
                                        {% else %}
                                            {{ interval.i }} minute{% if interval.i > 1 %}s{% endif %}
                                        {% endif %}
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                    {% else %}
                        <p class=\"text-center text-gray-500\">Pas encore de campagnes créées.</p>
                    {% endfor %}
                </div>


                <h2 class=\"text-xl font-bold mt-6 mb-4\">Parties où je suis Joueur</h2>
                <div class=\"mb-6\">
                    {% for joinedJDR in joinedJDRs %}
                        <div class=\"mb-4 border-b pb-4\">
                            <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center flex-wrap gap-2 w-full\">
                                <span class=\"text-gray-800 font-bold text-base md:text-lg\">Campagne : {{ joinedJDR.groupe.title }}</span>
                                <p class=\"text-gray-600 text-sm md:text-base\">
                                    Rôle : Joueur
                                    <br>
                                    Depuis le : 
                                    <span class=\"text-blue-500\">{{ joinedJDR.joined_at ? joinedJDR.joined_at|date('d/m/Y') : 'Date inconnue' }}</span>
                                    {% if joinedJDR.joined_at %}
                                        {% set now = date() %}
                                        {% set interval = now.diff(joinedJDR.joined_at) %}
                                        <br>
                                        <span class=\"font-semibold text-gray-800\">Durée :</span> 
                                        {% if interval.days > 0 %}
                                            {{ interval.days }} jour{% if interval.days > 1 %}s{% endif %}
                                            {% if interval.h > 0 %}
                                                et {{ interval.h }} heure{% if interval.h > 1 %}s{% endif %}
                                            {% endif %}
                                        {% elseif interval.h > 0 %}
                                            {{ interval.h }} heure{% if interval.h > 1 %}s{% endif %}
                                            {% if interval.i > 0 %}
                                                et {{ interval.i }} minute{% if interval.i > 1 %}s{% endif %}
                                            {% endif %}
                                        {% else %}
                                            {{ interval.i }} minute{% if interval.i > 1 %}s{% endif %}
                                        {% endif %}
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                    {% else %}
                        <p class=\"text-center text-gray-500\">Pas encore de campagnes associées.</p>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "profile/show.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\profile\\show.html.twig");
    }
}
