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
class __TwigTemplate_5d13fba15ca9b7185795cb11d3ab0806 extends Template
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
        yield "<div class=\"relative flex flex-col lg:flex-row w-full min-w-0 mt-6 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable space-y-4 lg:space-y-0 lg:space-x-6\">
    <div class=\"lg:w-1/4 w-full shadow-lg p-6 flex-auto min-h-[250px] glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl\">
        <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center\">
            <img id=\"banner-preview\" src=\"";
        // line 9
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "banner", [], "any", false, false, false, 9)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/banners/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "banner", [], "any", false, false, false, 9))), "html", null, true)) : (yield "https://via.placeholder.com/150"));
        yield "\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
        </div>
        <div class=\"absolute top-44 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full border-4 border-gray-900 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50\">
            ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "avatar", [], "any", false, false, false, 12)) {
            // line 13
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 13, $this->source); })()), "avatar", [], "any", false, false, false, 13))), "html", null, true);
            yield "\" alt=\"Photo de profil\" class=\"w-full h-full rounded-full object-cover\">
            ";
        } else {
            // line 15
            yield "                <img class=\"w-full h-full rounded-full object-cover\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Default profile photo\">
            ";
        }
        // line 17
        yield "        </div>
        <div class=\"mt-20 text-center\">
            <div class=\"flex justify-center items-center\">
                <h3 class=\"text-gray-100 font-bold text-xl\">";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 20, $this->source); })()), "username", [], "any", false, false, false, 20), "html", null, true);
        yield "</h3>
                ";
        // line 21
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 21, $this->source); })()), "user", [], "any", false, false, false, 21), "isVip", [], "any", false, false, false, 21)) {
            // line 22
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/vip-logo.png"), "html", null, true);
            yield "\" alt=\"VIP\" class=\"ml-2 w-8 h-8 \" />
                ";
        }
        // line 24
        yield "            </div>
            <p class=\"mt-3 text-gray-400 text-sm italic\">Chevalier de l'Ordre</p>
            <div class=\"flex justify-center space-x-2 mt-4\">
                <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-red-500 rounded-full\">Badge 1</span>
                <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-green-500 rounded-full\">Badge 2</span>
                <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full\">Badge 3</span>
            </div>
        </div>
    </div>
    <div class=\"lg:w-3/4 w-full px-8 pt-8 pb-8 flex-auto min-h-[200px] glassmorphism space-y-6\">
        <div class=\"text-gray-400 text-md\">
            <div class=\"flex flex-wrap space-x-6 items-center text-gray-100\">
<div class=\"w-full flex justify-center lg:justify-end mt-4 lg:mt-0 mb-4 flex-wrap items-center gap-4\">
    ";
        // line 37
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 37, $this->source); })()), "user", [], "any", false, false, false, 37), "id", [], "any", false, false, false, 37) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)))) {
            // line 38
            yield "        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
            yield "\" class=\"glassmorphism-warning px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
            Modifier le profil
        </a>
    ";
        }
        // line 42
        yield "
    ";
        // line 43
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 43, $this->source); })()), "user", [], "any", false, false, false, 43), "id", [], "any", false, false, false, 43) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 43, $this->source); })()), "id", [], "any", false, false, false, 43)))) {
            // line 44
            yield "        ";
            if (((isset($context["relationshipStatus"]) || array_key_exists("relationshipStatus", $context) ? $context["relationshipStatus"] : (function () { throw new RuntimeError('Variable "relationshipStatus" does not exist.', 44, $this->source); })()) == "pending")) {
                // line 45
                yield "            <button class=\"glassmorphism-warning px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                Demande d'ami en attente
            </button>
        ";
            } elseif ((            // line 48
(isset($context["relationshipStatus"]) || array_key_exists("relationshipStatus", $context) ? $context["relationshipStatus"] : (function () { throw new RuntimeError('Variable "relationshipStatus" does not exist.', 48, $this->source); })()) == "accepted")) {
                // line 49
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_friend", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\" class=\"glassmorphism-player-left px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                Retirer des amis
            </a>
            <a href=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("block_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\" class=\"glassmorphism-warning px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                Bloquer
            </a>
        ";
            } else {
                // line 56
                yield "            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_friend", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" class=\"glassmorphism-acceptance px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                Ajouter comme ami
            </a>
        ";
            }
            // line 60
            yield "    ";
        }
        // line 61
        yield "</div>

                ";
        // line 63
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 63, $this->source); })()), "gender", [], "any", false, false, false, 63)) {
            // line 64
            yield "                    <div class=\"flex items-center space-x-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 50 50\">
                            <circle cx=\"22.875\" cy=\"4.625\" r=\"4.125\" fill=\"currentColor\"/>
                            <path fill=\"currentColor\" d=\"M22 10h-3c-2.82 0-5 1.719-5 4.587V27c0 2 3 2 3 0V15h1v32c0 1.233.768 2 2 2c1.235 0 2-.767 2-2zm13 15l-4.017-10.357C30.634 12.322 28.29 10 25.615 10H23v23.783c.5.002 1 .075 1 .217v13c0 1.04.917 2 2 2c1.086 0 2-.961 2-2V34h3.869c.362 0 1.044-.654 1.044-1c0-.08.029-.931 0-1l-5.909-16.237l-.034-.167c0-.237.199-.429.447-.429c.211 0 .388.141.435.329L31.869 26c.267.601 1.365 1 2.087 1c.965 0 1.065-1.895 1.044-2\"/>
                        </svg>
                        <p>";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "gender", [], "any", false, false, false, 69), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        // line 72
        yield "
                ";
        // line 73
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "birthdate", [], "any", false, false, false, 73)) {
            // line 74
            yield "                    <div class=\"flex items-center space-x-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 24 24\">
                            <path fill=\"none\" stroke=\"currentColor\" d=\"M7.5 6V1m10 5V1m4 16v4.5h-18v-3m17.863-10H3.352M.5 18.25v.25h17.9l.15-.25l.234-.491A28 28 0 0 0 21.5 5.729V3.5h-18v2.128A28 28 0 0 1 .743 17.744z\"/>
                        </svg>
                        <p>";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 78, $this->source); })()), "birthdate", [], "any", false, false, false, 78)], "method", false, false, false, 78), "y", [], "any", false, false, false, 78), "html", null, true);
            yield " ans</p>
                    </div>
                ";
        }
        // line 81
        yield "
                ";
        // line 82
        $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 82, $this->source); })()), "getCreatedAt", [], "any", false, false, false, 82)], "method", false, false, false, 82);
        // line 83
        yield "                <div class=\"flex items-center space-x-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 512 512\">
                        <path fill=\"currentColor\" d=\"M138.798 35.342L28.73 114.268l95.777 29.095l111.305-87.09zm112.986 31.082l-118.047 89.96l51.07 131.102l8.534-7.455l4.23-15.708a18.338 13.102 76.863 0 1-9.08-20.45a18.338 13.102 76.863 0 1 10.997-13.727a18.338 13.102 76.863 0 1 3.62.53a18.338 13.102 76.863 0 1 3.113 1.544l7.94-29.48a9 9 0 0 1 .353-1.04l.058-.128a9 9 0 0 1 .32-.685l.09-.153a9 9 0 0 1 .37-.625a9 9 0 0 1 .534-.723l.066-.074a9 9 0 0 1 .54-.594a9 9 0 0 1 .65-.593l.004-.002a9 9 0 0 1 .46-.342a9 9 0 0 1 .266-.197a9 9 0 0 1 .502-.3a9 9 0 0 1 .27-.157a9 9 0 0 1 .44-.208a9 9 0 0 1 .38-.178a9 9 0 0 1 .437-.152a9 9 0 0 1 .41-.143a9 9 0 0 1 .404-.1a9 9 0 0 1 .47-.114a9 9 0 0 1 .51-.07a9 9 0 0 1 .37-.05h.01l.01-.003l33.624-2.873a18.338 13.102 76.863 0 1 10.326-9.777a18.338 13.102 76.863 0 1 3.622.53a18.338 13.102 76.863 0 1 8.527 7.327l13.043-1.113L251.785 66.42zM137.25 74.03a9.8 19.77 77.916 0 1 12.798 8.734a9.8 19.77 77.916 0 1-21.938 11.998a9.8 19.77 77.916 0 1-16.57-8.602a9.8 19.77 77.916 0 1 21.938-12a9.8 19.77 77.916 0 1 3.77-.13zm100.228 23.517a18.338 13.102 76.863 0 1 .002 0a18.338 13.102 76.863 0 1 3.62.53a18.338 13.102 76.863 0 1 12.112 21.94a18.338 13.102 76.863 0 1-14.617 13.196a18.338 13.102 76.863 0 1-12.114-21.94a18.338 13.102 76.863 0 1 10.998-13.726zM24.22 131.71l46.992 114.124l94.236 40.38l-45.988-125.57l-95.24-28.935zm147.886 17.43a18.338 13.102 76.863 0 1 3.622.528a18.338 13.102 76.863 0 1 12.11 21.94a18.338 13.102 76.863 0 1-14.616 13.197a18.338 13.102 76.863 0 1-12.112-21.94a18.338 13.102 76.863 0 1 10.996-13.726zm-75.123 13.016a19.454 9.134 59.254 0 1 16.955 15.078a19.454 9.134 59.254 0 1-.425 19.485A19.454 9.134 59.254 0 1 95.6 181.78a19.454 9.134 59.254 0 1 .424-19.48a19.454 9.134 59.254 0 1 .96-.144zm263.393 40.21l-112.102 9.577l113.762 79.926l113.598-16.956l-115.258-72.55zM70.82 212.022A19.454 9.134 59.254 0 1 87.777 227.1a19.454 9.134 59.254 0 1-.425 19.484a19.454 9.134 59.254 0 1-17.913-14.938a19.454 9.134 59.254 0 1 .425-19.482a19.454 9.134 59.254 0 1 .96-.14zm157.378 7.813L186.66 374.023l115.616 99.454l47.147-168.47l-121.225-85.17zm126.987 11.168a21.76 8.898 15.267 0 1 19.693 4.783a21.76 8.898 15.267 0 1 7.607 14.244a21.76 8.898 15.267 0 1-28.886-3.182a21.76 8.898 15.267 0 1-7.61-14.244a21.76 8.898 15.267 0 1 9.195-1.6zM487.78 291.3L366.9 309.343l-46.823 167.316l116.297-31.77zm-181.808 10.8a25.834 15.573 84.277 0 1 4.238.943a25.834 15.573 84.277 0 1 12.873 31.72a25.834 15.573 84.277 0 1-18.105 17.893a25.834 15.573 84.277 0 1-12.874-31.72a25.834 15.573 84.277 0 1 13.868-18.836m154.086 11.636a13.237 21.96 28.62 0 1 7.673 4.13a13.237 21.96 28.62 0 1-6.176 28.435a13.237 21.96 28.62 0 1-21.287 3.878a13.237 21.96 28.62 0 1 6.175-28.434a13.237 21.96 28.62 0 1 13.616-8.008zM391.362 324.4a13.237 21.96 28.62 0 1 7.672 4.13a13.237 21.96 28.62 0 1-6.176 28.435a13.237 21.96 28.62 0 1-21.287 3.877a13.237 21.96 28.62 0 1 6.177-28.434a13.237 21.96 28.62 0 1 13.615-8.008zm-173.996 13.305a25.834 15.573 84.277 0 1 4.24.945a25.834 15.573 84.277 0 1 12.872 31.72a25.834 15.573 84.277 0 1-18.106 17.894a25.834 15.573 84.277 0 1-12.873-31.72a25.834 15.573 84.277 0 1 13.866-18.84zm212.278 60.87a13.237 21.96 28.62 0 1 7.67 4.13a13.237 21.96 28.62 0 1-6.174 28.434a13.237 21.96 28.62 0 1-21.287 3.874a13.237 21.96 28.62 0 1 6.176-28.434a13.237 21.96 28.62 0 1 13.616-8.007z\"/>
                    </svg>
                    <p>";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 87, $this->source); })()), "y", [], "any", false, false, false, 87) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 87, $this->source); })()), "y", [], "any", false, false, false, 87) . " an") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 87, $this->source); })()), "y", [], "any", false, false, false, 87) > 1)) ? ("s") : ("")))) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 87, $this->source); })()), "m", [], "any", false, false, false, 87) > 0)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 87, $this->source); })()), "m", [], "any", false, false, false, 87) . " mois")) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 87, $this->source); })()), "d", [], "any", false, false, false, 87) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 87, $this->source); })()), "d", [], "any", false, false, false, 87) . " jour") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 87, $this->source); })()), "d", [], "any", false, false, false, 87) > 1)) ? ("s") : ("")))) : ("1 minute")))))), "html", null, true);
        yield " sur DiceFinder</p>
                </div>
            </div>
        </div>

        <div class=\"w-full text-gray-100 glassmorphism p-6 rounded-lg mb-8\">
            <h2 class=\"text-2xl font-semibold mb-4\">Biographie</h2>
            <p>";
        // line 94
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "bio", [], "any", false, false, false, 94)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "bio", [], "any", false, false, false, 94), "html", null, true)) : (yield "Aucune biographie disponible."));
        yield "</p>
        </div>
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-4\">
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism text-center\" aria-controls=\"owned-jdrs\">
                ";
        // line 98
        yield ((((isset($context["ownedJDRCount"]) || array_key_exists("ownedJDRCount", $context) ? $context["ownedJDRCount"] : (function () { throw new RuntimeError('Variable "ownedJDRCount" does not exist.', 98, $this->source); })()) == 1)) ? ("Univers créé") : ("Univers créés"));
        yield "
            </a>
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism text-center\" aria-controls=\"joined-jdrs\">
                ";
        // line 101
        yield ((((isset($context["joinedJDRCount"]) || array_key_exists("joinedJDRCount", $context) ? $context["joinedJDRCount"] : (function () { throw new RuntimeError('Variable "joinedJDRCount" does not exist.', 101, $this->source); })()) == 1)) ? ("Univers rejoint") : ("Univers rejoints"));
        yield "
            </a>
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism text-center\" aria-controls=\"favorite-jdrs\">
                ";
        // line 104
        yield ((((isset($context["favoriteJDRCount"]) || array_key_exists("favoriteJDRCount", $context) ? $context["favoriteJDRCount"] : (function () { throw new RuntimeError('Variable "favoriteJDRCount" does not exist.', 104, $this->source); })()) == 1)) ? ("Univers en favori") : ("Univers en favoris"));
        yield "
            </a>
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism text-center\" aria-controls=\"friends-container\">
                Liste d'amis
            </a>
        </div>
    </div>
</div>
<div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
    <div id=\"owned-jdrs\" class=\"tab-content\">
        <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                ";
        // line 116
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ownedJDRs"]) || array_key_exists("ownedJDRs", $context) ? $context["ownedJDRs"] : (function () { throw new RuntimeError('Variable "ownedJDRs" does not exist.', 116, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 117
            yield "                    <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                        style=\"will-change: transform;\">
                        <a href=\"";
            // line 119
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 119)]), "html", null, true);
            yield "\" class=\"block\">
                            <div class=\"relative\">
                                <img src=\"";
            // line 121
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "picture", [], "any", false, false, false, 121))), "html", null, true);
            yield "\"
                                    alt=\"";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 122), "html", null, true);
            yield " image\"
                                    class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 123
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 123)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 123))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                <div class=\"absolute top-2 right-2\">
                                    <span class=\"text-sm font-bold px-2 py-1 rounded
                                        ";
            // line 126
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "status", [], "any", false, false, false, 126) == "nouveau")) {
                yield " bg-green-600
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 127
$context["groupe"], "status", [], "any", false, false, false, 127) == "en_cours")) {
                yield " bg-blue-500
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 128
$context["groupe"], "status", [], "any", false, false, false, 128) == "termine")) {
                yield " bg-red-500
                                        ";
            } else {
                // line 129
                yield " bg-gray-700
                                        ";
            }
            // line 130
            yield " text-white\">
                                        ";
            // line 131
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "status", [], "any", false, false, false, 131) == "nouveau")) {
                // line 132
                yield "                                            Nouveau
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 133
$context["groupe"], "status", [], "any", false, false, false, 133) == "en_cours")) {
                // line 134
                yield "                                            En Cours
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 135
$context["groupe"], "status", [], "any", false, false, false, 135) == "termine")) {
                // line 136
                yield "                                            Terminé
                                        ";
            } else {
                // line 138
                yield "                                            Statut inconnu
                                        ";
            }
            // line 140
            yield "                                    </span>
                                </div>
                            </div>
                        </a>
                        <div class=\"mb-2\">
                            <a href=\"";
            // line 145
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 145)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 145), "html", null, true);
            yield "</a>
                        </div>
                        <div class=\"flex justify-between items-center mt-2\">
                            <a href=\"";
            // line 148
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 148), "id", [], "any", false, false, false, 148)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                ";
            // line 149
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 149), "avatar", [], "any", false, false, false, 149)) {
                // line 150
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 150), "avatar", [], "any", false, false, false, 150))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                ";
            } else {
                // line 152
                yield "                                    <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                ";
            }
            // line 154
            yield "                                <div class=\"ml-2\">
                                    <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                    <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 156), "username", [], "any", false, false, false, 156), "html", null, true);
            yield "</p>
                                </div>
                            </a>
                            <div class=\"flex items-center text-right gap-1\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                </svg>
                                ";
            // line 163
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 163)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 163))) {
                // line 164
                yield "                                    <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                ";
            } else {
                // line 166
                yield "                                    <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 166)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 166), "html", null, true);
                yield "</p>
                                ";
            }
            // line 168
            yield "                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 172
            yield "                    <p class=\"text-gray-400\">Aucun nouveau jeu de rôle disponible.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        yield "            </div>
        </div>
    </div>
        <div id=\"joined-jdrs\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                        ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joinedJDRs"]) || array_key_exists("joinedJDRs", $context) ? $context["joinedJDRs"] : (function () { throw new RuntimeError('Variable "joinedJDRs" does not exist.', 181, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["joined"]) {
            // line 182
            yield "                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item tab-content\"
                                style=\"will-change: transform;\">
                                <a href=\"";
            // line 184
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "id", [], "any", false, false, false, 184)]), "html", null, true);
            yield "\" class=\"block\">
                                    <div class=\"relative\">
                                        <img src=\"";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "picture", [], "any", false, false, false, 186))), "html", null, true);
            yield "\" 
                                            alt=\"";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "title", [], "any", false, false, false, 187), "html", null, true);
            yield " image\" 
                                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 188
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 188)) >= CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 188))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                        <div class=\"absolute top-2 right-2\">
                                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                                ";
            // line 191
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "status", [], "any", false, false, false, 191) == "nouveau")) {
                yield " bg-green-600
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 192
$context["joined"], "status", [], "any", false, false, false, 192) == "en_cours")) {
                yield " bg-blue-500
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 193
$context["joined"], "status", [], "any", false, false, false, 193) == "termine")) {
                yield " bg-red-500
                                                ";
            } else {
                // line 194
                yield " bg-gray-700
                                                ";
            }
            // line 195
            yield " text-white\">
                                                ";
            // line 196
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "status", [], "any", false, false, false, 196) == "nouveau")) {
                // line 197
                yield "                                                    Nouveau
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 198
$context["joined"], "status", [], "any", false, false, false, 198) == "en_cours")) {
                // line 199
                yield "                                                    En Cours
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 200
$context["joined"], "status", [], "any", false, false, false, 200) == "termine")) {
                // line 201
                yield "                                                    Terminé
                                                ";
            } else {
                // line 203
                yield "                                                    Statut inconnu
                                                ";
            }
            // line 205
            yield "                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"mb-2\">
                                    <a href=\"";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "id", [], "any", false, false, false, 210)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "title", [], "any", false, false, false, 210), "html", null, true);
            yield "</a>
                                </div>
                                <div class=\"flex justify-between items-center mt-2\">
                                    <a href=\"";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 213), "id", [], "any", false, false, false, 213)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                        ";
            // line 214
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 214), "avatar", [], "any", false, false, false, 214)) {
                // line 215
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 215), "avatar", [], "any", false, false, false, 215))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                        ";
            } else {
                // line 217
                yield "                                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                        ";
            }
            // line 219
            yield "                                        <div class=\"ml-2\">
                                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 221
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 221), "username", [], "any", false, false, false, 221), "html", null, true);
            yield "</p>
                                        </div>
                                    </a>
                                    <div class=\"flex items-center text-right gap-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                        </svg>
                                        ";
            // line 228
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 228)) >= CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 228))) {
                // line 229
                yield "                                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                        ";
            } else {
                // line 231
                yield "                                            <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 231)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 231), "html", null, true);
                yield "</p>
                                        ";
            }
            // line 233
            yield "                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 237
            yield "                            <p class=\"text-gray-400\">Aucun univers rejoint.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joined'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 239
        yield "                    </div>
                </div>
            </div>
        </div>
        <div id=\"favorite-jdrs\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                        ";
        // line 247
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favoriteJDRs"]) || array_key_exists("favoriteJDRs", $context) ? $context["favoriteJDRs"] : (function () { throw new RuntimeError('Variable "favoriteJDRs" does not exist.', 247, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 248
            yield "                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                                aria-controls=\"favorite-jdrs\" style=\"will-change: transform;\">
                                <a href=\"";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 250)]), "html", null, true);
            yield "\" class=\"block\">
                                    <div class=\"relative\">
                                        <img src=\"";
            // line 252
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "picture", [], "any", false, false, false, 252))), "html", null, true);
            yield "\" 
                                            alt=\"";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 253), "html", null, true);
            yield " image\" 
                                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 254
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 254)) >= CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 254))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                        <div class=\"absolute top-2 right-2\">
                                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                                ";
            // line 257
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "status", [], "any", false, false, false, 257) == "nouveau")) {
                yield " bg-green-600
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 258
$context["favorite"], "status", [], "any", false, false, false, 258) == "en_cours")) {
                yield " bg-blue-500
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 259
$context["favorite"], "status", [], "any", false, false, false, 259) == "termine")) {
                yield " bg-red-500
                                                ";
            } else {
                // line 260
                yield " bg-gray-700
                                                ";
            }
            // line 261
            yield " text-white\">
                                                ";
            // line 262
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "status", [], "any", false, false, false, 262) == "nouveau")) {
                // line 263
                yield "                                                    Nouveau
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 264
$context["favorite"], "status", [], "any", false, false, false, 264) == "en_cours")) {
                // line 265
                yield "                                                    En Cours
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 266
$context["favorite"], "status", [], "any", false, false, false, 266) == "termine")) {
                // line 267
                yield "                                                    Terminé
                                                ";
            } else {
                // line 269
                yield "                                                    Statut inconnu
                                                ";
            }
            // line 271
            yield "                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"mb-2\">
                                    <a href=\"";
            // line 276
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 276)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 276), "html", null, true);
            yield "</a>
                                </div>
                                <div class=\"flex justify-between items-center mt-2\">
                                    <a href=\"";
            // line 279
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 279), "id", [], "any", false, false, false, 279)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                        ";
            // line 280
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 280), "avatar", [], "any", false, false, false, 280)) {
                // line 281
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 281), "avatar", [], "any", false, false, false, 281))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                        ";
            } else {
                // line 283
                yield "                                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                        ";
            }
            // line 285
            yield "                                        <div class=\"ml-2\">
                                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 287
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 287), "username", [], "any", false, false, false, 287), "html", null, true);
            yield "</p>
                                        </div>
                                    </a>
                                    <div class=\"flex items-center text-right gap-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                        </svg>
                                        ";
            // line 294
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 294)) >= CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 294))) {
                // line 295
                yield "                                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                        ";
            } else {
                // line 297
                yield "                                            <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 297)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 297), "html", null, true);
                yield "</p>
                                        ";
            }
            // line 299
            yield "                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 303
            yield "                            <p class=\"text-gray-400\">Aucun JDR en favori.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['favorite'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 305
        yield "                    </div>
                </div>
            </div>
        </div>
        <div id=\"friends-container\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <ul class=\"text-gray-200\">
                        ";
        // line 313
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 313, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 314
            yield "                            <div class=\"lg:w-1/4 w-full shadow-lg p-6 flex-auto min-h-[250px] glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl\">
                                <a href=\"";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "id", [], "any", false, false, false, 315)]), "html", null, true);
            yield "\" class=\"block w-full h-full\">
                                    <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center\">
                                        <img id=\"banner-preview\" src=\"";
            // line 317
            ((CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "banner", [], "any", false, false, false, 317)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/banners/" . CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "banner", [], "any", false, false, false, 317))), "html", null, true)) : (yield "https://via.placeholder.com/150"));
            yield "\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
                                    </div>
                                    <div class=\"absolute top-44 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full border-4 border-gray-900 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50\">
                                        ";
            // line 320
            if (CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "avatar", [], "any", false, false, false, 320)) {
                // line 321
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "avatar", [], "any", false, false, false, 321))), "html", null, true);
                yield "\" alt=\"Photo de profil\" class=\"w-full h-full rounded-full object-cover\">
                                        ";
            } else {
                // line 323
                yield "                                            <img class=\"w-full h-full rounded-full object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                        ";
            }
            // line 325
            yield "                                    </div>
                                    <div class=\"mt-20 text-center\">
                                        <div class=\"flex justify-center items-center\">
                                            <h3 class=\"text-gray-100 font-bold text-xl\">";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "username", [], "any", false, false, false, 328), "html", null, true);
            yield "</h3>
                                        </div>
                                        <p class=\"mt-3 text-gray-400 text-sm italic\">Chevalier de l'Ordre</p>
                                        <div class=\"flex justify-center space-x-2 mt-4\">
                                            <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-red-500 rounded-full\">Badge 1</span>
                                            <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-green-500 rounded-full\">Badge 2</span>
                                            <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full\">Badge 3</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 340
            yield "                            <p class=\"text-gray-400\">Aucun ami trouvé.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['friend'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 342
        yield "                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');

    function resetTabs() {
        tabLinks.forEach(link => {
            link.parentElement.classList.remove('active');
            link.classList.remove('glassmorphism-purple');
        });
        tabContents.forEach(content => {
            content.classList.add('hidden');
        });
    }

    function activateTab(tabLink) {
        const tabId = tabLink.getAttribute('aria-controls');
        const targetContent = document.getElementById(tabId);

        if (targetContent) {
            tabLink.parentElement.classList.add('active');
            tabLink.classList.add('glassmorphism-purple');
            targetContent.classList.remove('hidden');
            localStorage.setItem('activeTab', tabId);
        }
    }

    const activeTabId = localStorage.getItem('activeTab');
    if (activeTabId) {
        const activeTabLink = document.querySelector(`[aria-controls=\"\${activeTabId}\"]`);
        if (activeTabLink) {
            resetTabs();
            activateTab(activeTabLink);
        }
    } else {
        resetTabs();
        activateTab(tabLinks[0]);
    }

    tabLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            resetTabs();
            activateTab(this);
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
        return array (  828 => 342,  821 => 340,  804 => 328,  799 => 325,  793 => 323,  787 => 321,  785 => 320,  779 => 317,  774 => 315,  771 => 314,  766 => 313,  756 => 305,  749 => 303,  741 => 299,  733 => 297,  729 => 295,  727 => 294,  717 => 287,  713 => 285,  707 => 283,  701 => 281,  699 => 280,  695 => 279,  687 => 276,  680 => 271,  676 => 269,  672 => 267,  670 => 266,  667 => 265,  665 => 264,  662 => 263,  660 => 262,  657 => 261,  653 => 260,  648 => 259,  644 => 258,  640 => 257,  632 => 254,  628 => 253,  624 => 252,  619 => 250,  615 => 248,  610 => 247,  600 => 239,  593 => 237,  585 => 233,  577 => 231,  573 => 229,  571 => 228,  561 => 221,  557 => 219,  551 => 217,  545 => 215,  543 => 214,  539 => 213,  531 => 210,  524 => 205,  520 => 203,  516 => 201,  514 => 200,  511 => 199,  509 => 198,  506 => 197,  504 => 196,  501 => 195,  497 => 194,  492 => 193,  488 => 192,  484 => 191,  476 => 188,  472 => 187,  468 => 186,  463 => 184,  459 => 182,  454 => 181,  445 => 174,  438 => 172,  430 => 168,  422 => 166,  418 => 164,  416 => 163,  406 => 156,  402 => 154,  396 => 152,  390 => 150,  388 => 149,  384 => 148,  376 => 145,  369 => 140,  365 => 138,  361 => 136,  359 => 135,  356 => 134,  354 => 133,  351 => 132,  349 => 131,  346 => 130,  342 => 129,  337 => 128,  333 => 127,  329 => 126,  321 => 123,  317 => 122,  313 => 121,  308 => 119,  304 => 117,  299 => 116,  284 => 104,  278 => 101,  272 => 98,  265 => 94,  255 => 87,  249 => 83,  247 => 82,  244 => 81,  238 => 78,  232 => 74,  230 => 73,  227 => 72,  221 => 69,  214 => 64,  212 => 63,  208 => 61,  205 => 60,  197 => 56,  190 => 52,  183 => 49,  181 => 48,  176 => 45,  173 => 44,  171 => 43,  168 => 42,  160 => 38,  158 => 37,  143 => 24,  137 => 22,  135 => 21,  131 => 20,  126 => 17,  120 => 15,  114 => 13,  112 => 12,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil de {{ user.username }}{% endblock %}

{% block body %}
<div class=\"relative flex flex-col lg:flex-row w-full min-w-0 mt-6 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable space-y-4 lg:space-y-0 lg:space-x-6\">
    <div class=\"lg:w-1/4 w-full shadow-lg p-6 flex-auto min-h-[250px] glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl\">
        <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center\">
            <img id=\"banner-preview\" src=\"{{ user.banner ? asset('uploads/banners/' ~ user.banner) : 'https://via.placeholder.com/150' }}\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
        </div>
        <div class=\"absolute top-44 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full border-4 border-gray-900 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50\">
            {% if user.avatar %}
                <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" alt=\"Photo de profil\" class=\"w-full h-full rounded-full object-cover\">
            {% else %}
                <img class=\"w-full h-full rounded-full object-cover\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
            {% endif %}
        </div>
        <div class=\"mt-20 text-center\">
            <div class=\"flex justify-center items-center\">
                <h3 class=\"text-gray-100 font-bold text-xl\">{{ user.username }}</h3>
                {% if app.user.isVip %}
                    <img src=\"{{ asset('images/vip-logo.png') }}\" alt=\"VIP\" class=\"ml-2 w-8 h-8 \" />
                {% endif %}
            </div>
            <p class=\"mt-3 text-gray-400 text-sm italic\">Chevalier de l'Ordre</p>
            <div class=\"flex justify-center space-x-2 mt-4\">
                <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-red-500 rounded-full\">Badge 1</span>
                <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-green-500 rounded-full\">Badge 2</span>
                <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full\">Badge 3</span>
            </div>
        </div>
    </div>
    <div class=\"lg:w-3/4 w-full px-8 pt-8 pb-8 flex-auto min-h-[200px] glassmorphism space-y-6\">
        <div class=\"text-gray-400 text-md\">
            <div class=\"flex flex-wrap space-x-6 items-center text-gray-100\">
<div class=\"w-full flex justify-center lg:justify-end mt-4 lg:mt-0 mb-4 flex-wrap items-center gap-4\">
    {% if app.user and app.user.id == user.id %}
        <a href=\"{{ path('app_profile_edit') }}\" class=\"glassmorphism-warning px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
            Modifier le profil
        </a>
    {% endif %}

    {% if app.user and app.user.id != user.id %}
        {% if relationshipStatus == 'pending' %}
            <button class=\"glassmorphism-warning px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                Demande d'ami en attente
            </button>
        {% elseif relationshipStatus == 'accepted' %}
            <a href=\"{{ path('remove_friend', {'id': user.id}) }}\" class=\"glassmorphism-player-left px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                Retirer des amis
            </a>
            <a href=\"{{ path('block_user', {'id': user.id}) }}\" class=\"glassmorphism-warning px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                Bloquer
            </a>
        {% else %}
            <a href=\"{{ path('add_friend', {'id': user.id}) }}\" class=\"glassmorphism-acceptance px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                Ajouter comme ami
            </a>
        {% endif %}
    {% endif %}
</div>

                {% if user.gender %}
                    <div class=\"flex items-center space-x-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 50 50\">
                            <circle cx=\"22.875\" cy=\"4.625\" r=\"4.125\" fill=\"currentColor\"/>
                            <path fill=\"currentColor\" d=\"M22 10h-3c-2.82 0-5 1.719-5 4.587V27c0 2 3 2 3 0V15h1v32c0 1.233.768 2 2 2c1.235 0 2-.767 2-2zm13 15l-4.017-10.357C30.634 12.322 28.29 10 25.615 10H23v23.783c.5.002 1 .075 1 .217v13c0 1.04.917 2 2 2c1.086 0 2-.961 2-2V34h3.869c.362 0 1.044-.654 1.044-1c0-.08.029-.931 0-1l-5.909-16.237l-.034-.167c0-.237.199-.429.447-.429c.211 0 .388.141.435.329L31.869 26c.267.601 1.365 1 2.087 1c.965 0 1.065-1.895 1.044-2\"/>
                        </svg>
                        <p>{{ user.gender }}</p>
                    </div>
                {% endif %}

                {% if user.birthdate %}
                    <div class=\"flex items-center space-x-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 24 24\">
                            <path fill=\"none\" stroke=\"currentColor\" d=\"M7.5 6V1m10 5V1m4 16v4.5h-18v-3m17.863-10H3.352M.5 18.25v.25h17.9l.15-.25l.234-.491A28 28 0 0 0 21.5 5.729V3.5h-18v2.128A28 28 0 0 1 .743 17.744z\"/>
                        </svg>
                        <p>{{ date().diff(user.birthdate).y }} ans</p>
                    </div>
                {% endif %}

                {% set diff = date().diff(user.getCreatedAt) %}
                <div class=\"flex items-center space-x-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 512 512\">
                        <path fill=\"currentColor\" d=\"M138.798 35.342L28.73 114.268l95.777 29.095l111.305-87.09zm112.986 31.082l-118.047 89.96l51.07 131.102l8.534-7.455l4.23-15.708a18.338 13.102 76.863 0 1-9.08-20.45a18.338 13.102 76.863 0 1 10.997-13.727a18.338 13.102 76.863 0 1 3.62.53a18.338 13.102 76.863 0 1 3.113 1.544l7.94-29.48a9 9 0 0 1 .353-1.04l.058-.128a9 9 0 0 1 .32-.685l.09-.153a9 9 0 0 1 .37-.625a9 9 0 0 1 .534-.723l.066-.074a9 9 0 0 1 .54-.594a9 9 0 0 1 .65-.593l.004-.002a9 9 0 0 1 .46-.342a9 9 0 0 1 .266-.197a9 9 0 0 1 .502-.3a9 9 0 0 1 .27-.157a9 9 0 0 1 .44-.208a9 9 0 0 1 .38-.178a9 9 0 0 1 .437-.152a9 9 0 0 1 .41-.143a9 9 0 0 1 .404-.1a9 9 0 0 1 .47-.114a9 9 0 0 1 .51-.07a9 9 0 0 1 .37-.05h.01l.01-.003l33.624-2.873a18.338 13.102 76.863 0 1 10.326-9.777a18.338 13.102 76.863 0 1 3.622.53a18.338 13.102 76.863 0 1 8.527 7.327l13.043-1.113L251.785 66.42zM137.25 74.03a9.8 19.77 77.916 0 1 12.798 8.734a9.8 19.77 77.916 0 1-21.938 11.998a9.8 19.77 77.916 0 1-16.57-8.602a9.8 19.77 77.916 0 1 21.938-12a9.8 19.77 77.916 0 1 3.77-.13zm100.228 23.517a18.338 13.102 76.863 0 1 .002 0a18.338 13.102 76.863 0 1 3.62.53a18.338 13.102 76.863 0 1 12.112 21.94a18.338 13.102 76.863 0 1-14.617 13.196a18.338 13.102 76.863 0 1-12.114-21.94a18.338 13.102 76.863 0 1 10.998-13.726zM24.22 131.71l46.992 114.124l94.236 40.38l-45.988-125.57l-95.24-28.935zm147.886 17.43a18.338 13.102 76.863 0 1 3.622.528a18.338 13.102 76.863 0 1 12.11 21.94a18.338 13.102 76.863 0 1-14.616 13.197a18.338 13.102 76.863 0 1-12.112-21.94a18.338 13.102 76.863 0 1 10.996-13.726zm-75.123 13.016a19.454 9.134 59.254 0 1 16.955 15.078a19.454 9.134 59.254 0 1-.425 19.485A19.454 9.134 59.254 0 1 95.6 181.78a19.454 9.134 59.254 0 1 .424-19.48a19.454 9.134 59.254 0 1 .96-.144zm263.393 40.21l-112.102 9.577l113.762 79.926l113.598-16.956l-115.258-72.55zM70.82 212.022A19.454 9.134 59.254 0 1 87.777 227.1a19.454 9.134 59.254 0 1-.425 19.484a19.454 9.134 59.254 0 1-17.913-14.938a19.454 9.134 59.254 0 1 .425-19.482a19.454 9.134 59.254 0 1 .96-.14zm157.378 7.813L186.66 374.023l115.616 99.454l47.147-168.47l-121.225-85.17zm126.987 11.168a21.76 8.898 15.267 0 1 19.693 4.783a21.76 8.898 15.267 0 1 7.607 14.244a21.76 8.898 15.267 0 1-28.886-3.182a21.76 8.898 15.267 0 1-7.61-14.244a21.76 8.898 15.267 0 1 9.195-1.6zM487.78 291.3L366.9 309.343l-46.823 167.316l116.297-31.77zm-181.808 10.8a25.834 15.573 84.277 0 1 4.238.943a25.834 15.573 84.277 0 1 12.873 31.72a25.834 15.573 84.277 0 1-18.105 17.893a25.834 15.573 84.277 0 1-12.874-31.72a25.834 15.573 84.277 0 1 13.868-18.836m154.086 11.636a13.237 21.96 28.62 0 1 7.673 4.13a13.237 21.96 28.62 0 1-6.176 28.435a13.237 21.96 28.62 0 1-21.287 3.878a13.237 21.96 28.62 0 1 6.175-28.434a13.237 21.96 28.62 0 1 13.616-8.008zM391.362 324.4a13.237 21.96 28.62 0 1 7.672 4.13a13.237 21.96 28.62 0 1-6.176 28.435a13.237 21.96 28.62 0 1-21.287 3.877a13.237 21.96 28.62 0 1 6.177-28.434a13.237 21.96 28.62 0 1 13.615-8.008zm-173.996 13.305a25.834 15.573 84.277 0 1 4.24.945a25.834 15.573 84.277 0 1 12.872 31.72a25.834 15.573 84.277 0 1-18.106 17.894a25.834 15.573 84.277 0 1-12.873-31.72a25.834 15.573 84.277 0 1 13.866-18.84zm212.278 60.87a13.237 21.96 28.62 0 1 7.67 4.13a13.237 21.96 28.62 0 1-6.174 28.434a13.237 21.96 28.62 0 1-21.287 3.874a13.237 21.96 28.62 0 1 6.176-28.434a13.237 21.96 28.62 0 1 13.616-8.007z\"/>
                    </svg>
                    <p>{{ diff.y > 0 ? diff.y ~ ' an' ~ (diff.y > 1 ? 's' : '') : diff.m > 0 ? diff.m ~ ' mois' : diff.d > 0 ? diff.d ~ ' jour' ~ (diff.d > 1 ? 's' : '') : '1 minute' }} sur DiceFinder</p>
                </div>
            </div>
        </div>

        <div class=\"w-full text-gray-100 glassmorphism p-6 rounded-lg mb-8\">
            <h2 class=\"text-2xl font-semibold mb-4\">Biographie</h2>
            <p>{{ user.bio ? user.bio : 'Aucune biographie disponible.' }}</p>
        </div>
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-4\">
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism text-center\" aria-controls=\"owned-jdrs\">
                {{ ownedJDRCount == 1 ? 'Univers créé' : 'Univers créés' }}
            </a>
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism text-center\" aria-controls=\"joined-jdrs\">
                {{ joinedJDRCount == 1 ? 'Univers rejoint' : 'Univers rejoints' }}
            </a>
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism text-center\" aria-controls=\"favorite-jdrs\">
                {{ favoriteJDRCount == 1 ? 'Univers en favori' : 'Univers en favoris' }}
            </a>
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism text-center\" aria-controls=\"friends-container\">
                Liste d'amis
            </a>
        </div>
    </div>
</div>
<div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
    <div id=\"owned-jdrs\" class=\"tab-content\">
        <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                {% for groupe in ownedJDRs %}
                    <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                        style=\"will-change: transform;\">
                        <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe.id}) }}\" class=\"block\">
                            <div class=\"relative\">
                                <img src=\"{{ asset('uploads/images-jdr/' ~ groupe.picture) }}\"
                                    alt=\"{{ groupe.title }} image\"
                                    class=\"rounded-lg mb-4 w-full h-[20rem] object-cover {% if groupe.players|length >= groupe.maxPlayer %} blur-sm {% endif %} tokenImage\">
                                <div class=\"absolute top-2 right-2\">
                                    <span class=\"text-sm font-bold px-2 py-1 rounded
                                        {% if groupe.status == 'nouveau' %} bg-green-600
                                        {% elseif groupe.status == 'en_cours' %} bg-blue-500
                                        {% elseif groupe.status == 'termine' %} bg-red-500
                                        {% else %} bg-gray-700
                                        {% endif %} text-white\">
                                        {% if groupe.status == 'nouveau' %}
                                            Nouveau
                                        {% elseif groupe.status == 'en_cours' %}
                                            En Cours
                                        {% elseif groupe.status == 'termine' %}
                                            Terminé
                                        {% else %}
                                            Statut inconnu
                                        {% endif %}
                                    </span>
                                </div>
                            </div>
                        </a>
                        <div class=\"mb-2\">
                            <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe.id}) }}\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">{{ groupe.title }}</a>
                        </div>
                        <div class=\"flex justify-between items-center mt-2\">
                            <a href=\"{{ path('app_profile_show', { 'id': groupe.owner.id }) }}\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                {% if groupe.owner.avatar %}
                                    <img src=\"{{ asset('uploads/avatars/' ~ groupe.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                {% else %}
                                    <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                                {% endif %}
                                <div class=\"ml-2\">
                                    <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                    <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">{{ groupe.owner.username }}</p>
                                </div>
                            </a>
                            <div class=\"flex items-center text-right gap-1\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                </svg>
                                {% if groupe.players|length >= groupe.maxPlayer %}
                                    <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                {% else %}
                                    <p class=\"font-bold text-white pl-2\">{{ groupe.players|length }} / {{ groupe.maxPlayer }}</p>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% else %}
                    <p class=\"text-gray-400\">Aucun nouveau jeu de rôle disponible.</p>
                {% endfor %}
            </div>
        </div>
    </div>
        <div id=\"joined-jdrs\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                        {% for joined in joinedJDRs %}
                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item tab-content\"
                                style=\"will-change: transform;\">
                                <a href=\"{{ path('app_groupe_j_d_r_show', {'id': joined.id}) }}\" class=\"block\">
                                    <div class=\"relative\">
                                        <img src=\"{{ asset('uploads/images-jdr/' ~ joined.picture) }}\" 
                                            alt=\"{{ joined.title }} image\" 
                                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover {% if joined.players|length >= joined.maxPlayer %} blur-sm {% endif %} tokenImage\">
                                        <div class=\"absolute top-2 right-2\">
                                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                                {% if joined.status == 'nouveau' %} bg-green-600
                                                {% elseif joined.status == 'en_cours' %} bg-blue-500
                                                {% elseif joined.status == 'termine' %} bg-red-500
                                                {% else %} bg-gray-700
                                                {% endif %} text-white\">
                                                {% if joined.status == 'nouveau' %}
                                                    Nouveau
                                                {% elseif joined.status == 'en_cours' %}
                                                    En Cours
                                                {% elseif joined.status == 'termine' %}
                                                    Terminé
                                                {% else %}
                                                    Statut inconnu
                                                {% endif %}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"mb-2\">
                                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': joined.id}) }}\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">{{ joined.title }}</a>
                                </div>
                                <div class=\"flex justify-between items-center mt-2\">
                                    <a href=\"{{ path('app_profile_show', { 'id': joined.owner.id }) }}\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                        {% if joined.owner.avatar %}
                                            <img src=\"{{ asset('uploads/avatars/' ~ joined.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                        {% else %}
                                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                                        {% endif %}
                                        <div class=\"ml-2\">
                                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">{{ joined.owner.username }}</p>
                                        </div>
                                    </a>
                                    <div class=\"flex items-center text-right gap-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                        </svg>
                                        {% if joined.players|length >= joined.maxPlayer %}
                                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                        {% else %}
                                            <p class=\"font-bold text-white pl-2\">{{ joined.players|length }} / {{ joined.maxPlayer }}</p>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <p class=\"text-gray-400\">Aucun univers rejoint.</p>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
        <div id=\"favorite-jdrs\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                        {% for favorite in favoriteJDRs %}
                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                                aria-controls=\"favorite-jdrs\" style=\"will-change: transform;\">
                                <a href=\"{{ path('app_groupe_j_d_r_show', {'id': favorite.id}) }}\" class=\"block\">
                                    <div class=\"relative\">
                                        <img src=\"{{ asset('uploads/images-jdr/' ~ favorite.picture) }}\" 
                                            alt=\"{{ favorite.title }} image\" 
                                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover {% if favorite.players|length >= favorite.maxPlayer %} blur-sm {% endif %} tokenImage\">
                                        <div class=\"absolute top-2 right-2\">
                                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                                {% if favorite.status == 'nouveau' %} bg-green-600
                                                {% elseif favorite.status == 'en_cours' %} bg-blue-500
                                                {% elseif favorite.status == 'termine' %} bg-red-500
                                                {% else %} bg-gray-700
                                                {% endif %} text-white\">
                                                {% if favorite.status == 'nouveau' %}
                                                    Nouveau
                                                {% elseif favorite.status == 'en_cours' %}
                                                    En Cours
                                                {% elseif favorite.status == 'termine' %}
                                                    Terminé
                                                {% else %}
                                                    Statut inconnu
                                                {% endif %}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"mb-2\">
                                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': favorite.id}) }}\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">{{ favorite.title }}</a>
                                </div>
                                <div class=\"flex justify-between items-center mt-2\">
                                    <a href=\"{{ path('app_profile_show', { 'id': favorite.owner.id }) }}\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                        {% if favorite.owner.avatar %}
                                            <img src=\"{{ asset('uploads/avatars/' ~ favorite.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                        {% else %}
                                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                                        {% endif %}
                                        <div class=\"ml-2\">
                                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">{{ favorite.owner.username }}</p>
                                        </div>
                                    </a>
                                    <div class=\"flex items-center text-right gap-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                        </svg>
                                        {% if favorite.players|length >= favorite.maxPlayer %}
                                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                        {% else %}
                                            <p class=\"font-bold text-white pl-2\">{{ favorite.players|length }} / {{ favorite.maxPlayer }}</p>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <p class=\"text-gray-400\">Aucun JDR en favori.</p>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
        <div id=\"friends-container\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <ul class=\"text-gray-200\">
                        {% for friend in friends %}
                            <div class=\"lg:w-1/4 w-full shadow-lg p-6 flex-auto min-h-[250px] glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl\">
                                <a href=\"{{ path('app_profile_show', {'id': friend.id}) }}\" class=\"block w-full h-full\">
                                    <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center\">
                                        <img id=\"banner-preview\" src=\"{{ friend.banner ? asset('uploads/banners/' ~ friend.banner) : 'https://via.placeholder.com/150' }}\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
                                    </div>
                                    <div class=\"absolute top-44 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full border-4 border-gray-900 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50\">
                                        {% if friend.avatar %}
                                            <img src=\"{{ asset('uploads/avatars/' ~ friend.avatar) }}\" alt=\"Photo de profil\" class=\"w-full h-full rounded-full object-cover\">
                                        {% else %}
                                            <img class=\"w-full h-full rounded-full object-cover\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                                        {% endif %}
                                    </div>
                                    <div class=\"mt-20 text-center\">
                                        <div class=\"flex justify-center items-center\">
                                            <h3 class=\"text-gray-100 font-bold text-xl\">{{ friend.username }}</h3>
                                        </div>
                                        <p class=\"mt-3 text-gray-400 text-sm italic\">Chevalier de l'Ordre</p>
                                        <div class=\"flex justify-center space-x-2 mt-4\">
                                            <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-red-500 rounded-full\">Badge 1</span>
                                            <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-green-500 rounded-full\">Badge 2</span>
                                            <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full\">Badge 3</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        {% else %}
                            <p class=\"text-gray-400\">Aucun ami trouvé.</p>
                        {% endfor %}
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');

    function resetTabs() {
        tabLinks.forEach(link => {
            link.parentElement.classList.remove('active');
            link.classList.remove('glassmorphism-purple');
        });
        tabContents.forEach(content => {
            content.classList.add('hidden');
        });
    }

    function activateTab(tabLink) {
        const tabId = tabLink.getAttribute('aria-controls');
        const targetContent = document.getElementById(tabId);

        if (targetContent) {
            tabLink.parentElement.classList.add('active');
            tabLink.classList.add('glassmorphism-purple');
            targetContent.classList.remove('hidden');
            localStorage.setItem('activeTab', tabId);
        }
    }

    const activeTabId = localStorage.getItem('activeTab');
    if (activeTabId) {
        const activeTabLink = document.querySelector(`[aria-controls=\"\${activeTabId}\"]`);
        if (activeTabLink) {
            resetTabs();
            activateTab(activeTabLink);
        }
    } else {
        resetTabs();
        activateTab(tabLinks[0]);
    }

    tabLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            resetTabs();
            activateTab(this);
        });
    });
});
</script>
{% endblock %}
", "profile/show.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\profile\\show.html.twig");
    }
}
