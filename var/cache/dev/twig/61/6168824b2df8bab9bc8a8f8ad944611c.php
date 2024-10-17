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

        yield "Profil de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "username", [], "any", false, false, false, 3), "html", null, true);
        
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
    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-8\">
        <div class=\"col-span-1\">
            <div class=\"glassmorphism p-8 relative overflow-hidden hover:shadow-2xl transition-transform duration-300 rounded-lg\">
                ";
        // line 10
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 10, $this->source); })()), "user", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)))) {
            // line 11
            yield "                    <div class=\"absolute top-4 right-4\">
                        <a href=\"";
            // line 12
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
            yield "\" title=\"Paramètres\" class=\"button-hover\">
                            <svg class=\"h-6 w-6 text-white hover:text-blue-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z\" />
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z\" />
                            </svg>
                        </a>
                    </div>
                ";
        }
        // line 20
        yield "                <div class=\"flex flex-col items-center text-center\">
                    ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 21, $this->source); })()), "avatar", [], "any", false, false, false, 21)) {
            // line 22
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "avatar", [], "any", false, false, false, 22))), "html", null, true);
            yield "\" class=\"w-40 h-40 md:w-48 md:h-48 rounded-full object-cover border-4 border-white shadow-lg mb-6\" alt=\"Photo de profil\">
                    ";
        } else {
            // line 24
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" class=\"w-40 h-40 md:w-48 md:h-48 rounded-full object-cover border-4 border-white shadow-lg mb-6\" alt=\"Photo de profil par défaut\">
                    ";
        }
        // line 26
        yield "                    <h1 class=\"text-2xl md:text-3xl font-bold text-white truncate w-full max-w-full md:max-w-[80%]\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "username", [], "any", false, false, false, 26), "html", null, true);
        yield "</h1>
                </div>
                <hr class=\"my-8 border-t border-gray-500\">
                <div class=\"mb-8\">
                    <span class=\"text-white uppercase font-bold tracking-wider mb-4 block\">Contact</span>
                    <ul class=\"space-y-3 text-sm md:text-base\">
                        ";
        // line 32
        if ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "discordPseudo", [], "any", false, false, false, 32) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "TwitterPseudo", [], "any", false, false, false, 32)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "YoutubeChannelLink", [], "any", false, false, false, 32)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "TwitchChannelLink", [], "any", false, false, false, 32))) {
            // line 33
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "discordPseudo", [], "any", false, false, false, 33)) {
                // line 34
                yield "                                <li>
                                    <a class=\"text-blue-300 hover:underline\" target=\"_blank\">";
                // line 35
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "discordPseudo", [], "any", false, false, false, 35), "html", null, true);
                yield "</a>
                                </li>
                            ";
            }
            // line 38
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 38, $this->source); })()), "TwitterPseudo", [], "any", false, false, false, 38)) {
                // line 39
                yield "                                <li>
                                    <a href=\"https://twitter.com/";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "TwitterPseudo", [], "any", false, false, false, 40), ["@" => ""]), "html", null, true);
                yield "\" class=\"text-blue-300 hover:underline\" target=\"_blank\">X / Twitter</a>
                                </li>
                            ";
            }
            // line 43
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "YoutubeChannelLink", [], "any", false, false, false, 43)) {
                // line 44
                yield "                                <li>
                                    <a href=\"";
                // line 45
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 45, $this->source); })()), "YoutubeChannelLink", [], "any", false, false, false, 45), "html", null, true);
                yield "\" class=\"text-blue-300 hover:underline\" target=\"_blank\">YouTube</a>
                                </li>
                            ";
            }
            // line 48
            yield "                            ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 48, $this->source); })()), "TwitchChannelLink", [], "any", false, false, false, 48)) {
                // line 49
                yield "                                <li>
                                    <a href=\"";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "TwitchChannelLink", [], "any", false, false, false, 50), "html", null, true);
                yield "\" class=\"text-blue-300 hover:underline\" target=\"_blank\">Twitch</a>
                                </li>
                            ";
            }
            // line 53
            yield "                        ";
        } else {
            // line 54
            yield "                            <li class=\"text-gray-400\">Aucun contact renseigné.</li>
                        ";
        }
        // line 56
        yield "                    </ul>
                </div>
                <div class=\"mb-8\">
                    <span class=\"text-white uppercase font-bold tracking-wider mb-4 block\">Compétences</span>
                    <ul class=\" space-y-3 text-sm md:text-base break-words\">
                        <li class=\"text-gray-400 whitespace-pre-line\">";
        // line 61
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "competence", [], "any", false, false, false, 61)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 61, $this->source); })()), "competence", [], "any", false, false, false, 61), "html", null, true)) : (yield "Pas de compétence spécifiée"));
        yield "</li>
                    </ul>
                </div>
                ";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "gender", [], "any", false, false, false, 64)) {
            // line 65
            yield "                    <div class=\"mb-8\">
                        <span class=\"text-white uppercase font-bold tracking-wider mb-4 block\">Genre</span>
                        <p class=\"text-sm md:text-base text-white\">";
            // line 67
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "gender", [], "any", false, false, false, 67), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        // line 70
        yield "            </div>
        </div>

        <div class=\"col-span-1 md:col-span-3\">
            <div class=\"glassmorphism p-10 rounded-lg hover:shadow-2xl transition-transform duration-300\">
                <h2 class=\"text-2xl font-bold text-white mb-8\">À propos de moi</h2>
                <p class=\"text-gray-100 text-sm md:text-base break-words overflow-hidden text-ellipsis max-h-40 mb-8\">";
        // line 76
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "bio", [], "any", false, false, false, 76)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 76, $this->source); })()), "bio", [], "any", false, false, false, 76), "html", null, true)) : (yield "Pas de biographie disponible"));
        yield "</p>

                <h2 class=\"text-2xl font-bold text-white mb-8\">Mes Parties (MJ)</h2>
                <div class=\"mb-10 max-h-80 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-600 scrollbar-track-gray-800 p-6 glassmorphism rounded-lg\">
                    ";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ownedJDRs"]) || array_key_exists("ownedJDRs", $context) ? $context["ownedJDRs"] : (function () { throw new RuntimeError('Variable "ownedJDRs" does not exist.', 80, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
            // line 81
            yield "                        <div class=\"glassmorphism-invitation-accepted mb-8 border-b pb-4 hover:bg-white hover:bg-opacity-10 transition-colors duration-300 p-6 rounded-lg\">
                            <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center flex-wrap gap-4 w-full\">
                                <span class=\"text-white font-bold text-lg md:text-xl\">Campagne : ";
            // line 83
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 83), "html", null, true);
            yield "</span>
                                <p class=\"text-gray-300 text-sm md:text-base\">
                                    Rôle : Maître du Jeu
                                    <br>
                                    Créée le : <span class=\"text-blue-400\">";
            // line 87
            ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "createdAt", [], "any", false, false, false, 87)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "createdAt", [], "any", false, false, false, 87), "d/m/Y"), "html", null, true)) : (yield "Date inconnue"));
            yield "</span>
                                    ";
            // line 88
            if (CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "createdAt", [], "any", false, false, false, 88)) {
                // line 89
                yield "                                        ";
                $context["now"] = $this->extensions['Twig\Extension\CoreExtension']->convertDate();
                // line 90
                yield "                                        ";
                $context["interval"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["now"]) || array_key_exists("now", $context) ? $context["now"] : (function () { throw new RuntimeError('Variable "now" does not exist.', 90, $this->source); })()), "diff", [CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "createdAt", [], "any", false, false, false, 90)], "method", false, false, false, 90);
                // line 91
                yield "                                        <br>
                                        <span class=\"font-semibold text-white\">Durée :</span> 
                                        ";
                // line 93
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 93, $this->source); })()), "days", [], "any", false, false, false, 93) > 0)) {
                    // line 94
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 94, $this->source); })()), "days", [], "any", false, false, false, 94), "html", null, true);
                    yield " jour";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 94, $this->source); })()), "days", [], "any", false, false, false, 94) > 1)) {
                        yield "s";
                    }
                    // line 95
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 95, $this->source); })()), "h", [], "any", false, false, false, 95) > 0)) {
                        // line 96
                        yield "                                                et ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 96, $this->source); })()), "h", [], "any", false, false, false, 96), "html", null, true);
                        yield " heure";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 96, $this->source); })()), "h", [], "any", false, false, false, 96) > 1)) {
                            yield "s";
                        }
                        // line 97
                        yield "                                            ";
                    }
                    // line 98
                    yield "                                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 98, $this->source); })()), "h", [], "any", false, false, false, 98) > 0)) {
                    // line 99
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 99, $this->source); })()), "h", [], "any", false, false, false, 99), "html", null, true);
                    yield " heure";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 99, $this->source); })()), "h", [], "any", false, false, false, 99) > 1)) {
                        yield "s";
                    }
                    // line 100
                    yield "                                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 100, $this->source); })()), "i", [], "any", false, false, false, 100) > 0)) {
                        // line 101
                        yield "                                                et ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 101, $this->source); })()), "i", [], "any", false, false, false, 101), "html", null, true);
                        yield " minute";
                        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 101, $this->source); })()), "i", [], "any", false, false, false, 101) > 1)) {
                            yield "s";
                        }
                        // line 102
                        yield "                                            ";
                    }
                    // line 103
                    yield "                                        ";
                } else {
                    // line 104
                    yield "                                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 104, $this->source); })()), "i", [], "any", false, false, false, 104), "html", null, true);
                    yield " minute";
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["interval"]) || array_key_exists("interval", $context) ? $context["interval"] : (function () { throw new RuntimeError('Variable "interval" does not exist.', 104, $this->source); })()), "i", [], "any", false, false, false, 104) > 1)) {
                        yield "s";
                    }
                    // line 105
                    yield "                                        ";
                }
                // line 106
                yield "                                    ";
            }
            // line 107
            yield "                                </p>
                            </div>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 111
            yield "                        <p class=\"text-center text-gray-400\">Pas encore de campagnes créées.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        yield "                </div>

                <h2 class=\"text-2xl font-bold text-white mb-8\">Parties où je suis Joueur</h2>
                <div class=\"mb-10 max-h-80 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-600 scrollbar-track-gray-800 p-6 glassmorphism rounded-lg\">
                    ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joinedJDRs"]) || array_key_exists("joinedJDRs", $context) ? $context["joinedJDRs"] : (function () { throw new RuntimeError('Variable "joinedJDRs" does not exist.', 117, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["joinedJDR"]) {
            // line 118
            yield "                        <div class=\"glassmorphism-player-left mb-8 border-b pb-4 hover:bg-white hover:bg-opacity-10 transition-colors duration-300 p-6 rounded-lg\">
                            <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center flex-wrap gap-4 w-full\">
                                <span class=\"text-white font-bold text-lg md:text-xl\">Campagne : ";
            // line 120
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joinedJDR"], "groupe", [], "any", false, false, false, 120), "title", [], "any", false, false, false, 120), "html", null, true);
            yield "</span>
                                <p class=\"text-gray-300 text-sm md:text-base\">
                                    Rôle : Joueur
                                    <br>
                                    Depuis le : 
                                    <span class=\"text-blue-400\">";
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
                                        <span class=\"font-semibold text-white\">Durée :</span> 
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
            yield "                        <p class=\"text-center text-gray-400\">Pas encore de campagnes associées.</p>
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
        return array (  470 => 151,  463 => 149,  455 => 145,  452 => 144,  449 => 143,  442 => 142,  439 => 141,  436 => 140,  429 => 139,  426 => 138,  419 => 137,  416 => 136,  413 => 135,  406 => 134,  403 => 133,  396 => 132,  394 => 131,  390 => 129,  387 => 128,  384 => 127,  382 => 126,  378 => 125,  370 => 120,  366 => 118,  361 => 117,  355 => 113,  348 => 111,  340 => 107,  337 => 106,  334 => 105,  327 => 104,  324 => 103,  321 => 102,  314 => 101,  311 => 100,  304 => 99,  301 => 98,  298 => 97,  291 => 96,  288 => 95,  281 => 94,  279 => 93,  275 => 91,  272 => 90,  269 => 89,  267 => 88,  263 => 87,  256 => 83,  252 => 81,  247 => 80,  240 => 76,  232 => 70,  226 => 67,  222 => 65,  220 => 64,  214 => 61,  207 => 56,  203 => 54,  200 => 53,  194 => 50,  191 => 49,  188 => 48,  182 => 45,  179 => 44,  176 => 43,  170 => 40,  167 => 39,  164 => 38,  158 => 35,  155 => 34,  152 => 33,  150 => 32,  140 => 26,  134 => 24,  128 => 22,  126 => 21,  123 => 20,  112 => 12,  109 => 11,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil de {{ user.username }}{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8\">
    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-8\">
        <div class=\"col-span-1\">
            <div class=\"glassmorphism p-8 relative overflow-hidden hover:shadow-2xl transition-transform duration-300 rounded-lg\">
                {% if app.user and app.user.id == user.id %}
                    <div class=\"absolute top-4 right-4\">
                        <a href=\"{{ path('app_profile_edit') }}\" title=\"Paramètres\" class=\"button-hover\">
                            <svg class=\"h-6 w-6 text-white hover:text-blue-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z\" />
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z\" />
                            </svg>
                        </a>
                    </div>
                {% endif %}
                <div class=\"flex flex-col items-center text-center\">
                    {% if user.avatar %}
                        <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" class=\"w-40 h-40 md:w-48 md:h-48 rounded-full object-cover border-4 border-white shadow-lg mb-6\" alt=\"Photo de profil\">
                    {% else %}
                        <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"w-40 h-40 md:w-48 md:h-48 rounded-full object-cover border-4 border-white shadow-lg mb-6\" alt=\"Photo de profil par défaut\">
                    {% endif %}
                    <h1 class=\"text-2xl md:text-3xl font-bold text-white truncate w-full max-w-full md:max-w-[80%]\">{{ user.username }}</h1>
                </div>
                <hr class=\"my-8 border-t border-gray-500\">
                <div class=\"mb-8\">
                    <span class=\"text-white uppercase font-bold tracking-wider mb-4 block\">Contact</span>
                    <ul class=\"space-y-3 text-sm md:text-base\">
                        {% if user.discordPseudo or user.TwitterPseudo or user.YoutubeChannelLink or user.TwitchChannelLink %}
                            {% if user.discordPseudo %}
                                <li>
                                    <a class=\"text-blue-300 hover:underline\" target=\"_blank\">{{ user.discordPseudo }}</a>
                                </li>
                            {% endif %}
                            {% if user.TwitterPseudo %}
                                <li>
                                    <a href=\"https://twitter.com/{{ user.TwitterPseudo | replace({'@': ''}) }}\" class=\"text-blue-300 hover:underline\" target=\"_blank\">X / Twitter</a>
                                </li>
                            {% endif %}
                            {% if user.YoutubeChannelLink %}
                                <li>
                                    <a href=\"{{ user.YoutubeChannelLink }}\" class=\"text-blue-300 hover:underline\" target=\"_blank\">YouTube</a>
                                </li>
                            {% endif %}
                            {% if user.TwitchChannelLink %}
                                <li>
                                    <a href=\"{{ user.TwitchChannelLink }}\" class=\"text-blue-300 hover:underline\" target=\"_blank\">Twitch</a>
                                </li>
                            {% endif %}
                        {% else %}
                            <li class=\"text-gray-400\">Aucun contact renseigné.</li>
                        {% endif %}
                    </ul>
                </div>
                <div class=\"mb-8\">
                    <span class=\"text-white uppercase font-bold tracking-wider mb-4 block\">Compétences</span>
                    <ul class=\" space-y-3 text-sm md:text-base break-words\">
                        <li class=\"text-gray-400 whitespace-pre-line\">{{ user.competence ? user.competence : 'Pas de compétence spécifiée' }}</li>
                    </ul>
                </div>
                {% if user.gender %}
                    <div class=\"mb-8\">
                        <span class=\"text-white uppercase font-bold tracking-wider mb-4 block\">Genre</span>
                        <p class=\"text-sm md:text-base text-white\">{{ user.gender }}</p>
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"col-span-1 md:col-span-3\">
            <div class=\"glassmorphism p-10 rounded-lg hover:shadow-2xl transition-transform duration-300\">
                <h2 class=\"text-2xl font-bold text-white mb-8\">À propos de moi</h2>
                <p class=\"text-gray-100 text-sm md:text-base break-words overflow-hidden text-ellipsis max-h-40 mb-8\">{{ user.bio ? user.bio : 'Pas de biographie disponible' }}</p>

                <h2 class=\"text-2xl font-bold text-white mb-8\">Mes Parties (MJ)</h2>
                <div class=\"mb-10 max-h-80 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-600 scrollbar-track-gray-800 p-6 glassmorphism rounded-lg\">
                    {% for jdr in ownedJDRs %}
                        <div class=\"glassmorphism-invitation-accepted mb-8 border-b pb-4 hover:bg-white hover:bg-opacity-10 transition-colors duration-300 p-6 rounded-lg\">
                            <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center flex-wrap gap-4 w-full\">
                                <span class=\"text-white font-bold text-lg md:text-xl\">Campagne : {{ jdr.title }}</span>
                                <p class=\"text-gray-300 text-sm md:text-base\">
                                    Rôle : Maître du Jeu
                                    <br>
                                    Créée le : <span class=\"text-blue-400\">{{ jdr.createdAt ? jdr.createdAt|date('d/m/Y') : 'Date inconnue' }}</span>
                                    {% if jdr.createdAt %}
                                        {% set now = date() %}
                                        {% set interval = now.diff(jdr.createdAt) %}
                                        <br>
                                        <span class=\"font-semibold text-white\">Durée :</span> 
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
                        <p class=\"text-center text-gray-400\">Pas encore de campagnes créées.</p>
                    {% endfor %}
                </div>

                <h2 class=\"text-2xl font-bold text-white mb-8\">Parties où je suis Joueur</h2>
                <div class=\"mb-10 max-h-80 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-600 scrollbar-track-gray-800 p-6 glassmorphism rounded-lg\">
                    {% for joinedJDR in joinedJDRs %}
                        <div class=\"glassmorphism-player-left mb-8 border-b pb-4 hover:bg-white hover:bg-opacity-10 transition-colors duration-300 p-6 rounded-lg\">
                            <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center flex-wrap gap-4 w-full\">
                                <span class=\"text-white font-bold text-lg md:text-xl\">Campagne : {{ joinedJDR.groupe.title }}</span>
                                <p class=\"text-gray-300 text-sm md:text-base\">
                                    Rôle : Joueur
                                    <br>
                                    Depuis le : 
                                    <span class=\"text-blue-400\">{{ joinedJDR.joined_at ? joinedJDR.joined_at|date('d/m/Y') : 'Date inconnue' }}</span>
                                    {% if joinedJDR.joined_at %}
                                        {% set now = date() %}
                                        {% set interval = now.diff(joinedJDR.joined_at) %}
                                        <br>
                                        <span class=\"font-semibold text-white\">Durée :</span> 
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
                        <p class=\"text-center text-gray-400\">Pas encore de campagnes associées.</p>
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
