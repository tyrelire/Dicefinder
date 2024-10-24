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
            ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "avatar", [], "any", false, false, false, 9)) {
            // line 10
            yield "                <img id=\"banner-preview\" src=\"";
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "banner", [], "any", false, false, false, 10)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/banners/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "banner", [], "any", false, false, false, 10))), "html", null, true)) : (yield "https://via.placeholder.com/150"));
            yield "\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
            ";
        } else {
            // line 12
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-banniere.jpg"), "html", null, true);
            yield "\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
            ";
        }
        // line 14
        yield "        </div>
        <div class=\"absolute top-44 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full border-4 border-gray-900 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50\">
            ";
        // line 16
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 16, $this->source); })()), "avatar", [], "any", false, false, false, 16)) {
            // line 17
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "avatar", [], "any", false, false, false, 17))), "html", null, true);
            yield "\" alt=\"Photo de profil\" class=\"w-full h-full rounded-full object-cover\">
            ";
        } else {
            // line 19
            yield "                <img class=\"w-full h-full rounded-full object-cover\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Default profile photo\">
            ";
        }
        // line 21
        yield "        </div>
        <div class=\"mt-20 text-center\">
            <div class=\"flex justify-center items-center\">
                <h3 class=\"text-gray-100 font-bold text-xl\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 24, $this->source); })()), "username", [], "any", false, false, false, 24), "html", null, true);
        yield "</h3>
                ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "isVip", [], "any", false, false, false, 25)) {
            // line 26
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/vip-logo.png"), "html", null, true);
            yield "\" alt=\"VIP\" class=\"ml-2 w-8 h-8 \" />
                ";
        }
        // line 28
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
        // line 41
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)))) {
            // line 42
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
            yield "\" class=\"glassmorphism-warning px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                            Modifier le profil
                        </a>
                    ";
        }
        // line 46
        yield "
                    ";
        // line 47
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "id", [], "any", false, false, false, 47)))) {
            // line 48
            yield "                        ";
            if (((isset($context["relationshipStatus"]) || array_key_exists("relationshipStatus", $context) ? $context["relationshipStatus"] : (function () { throw new RuntimeError('Variable "relationshipStatus" does not exist.', 48, $this->source); })()) == "pending")) {
                // line 49
                yield "                            <button class=\"glassmorphism-warning px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                                Demande d'ami en attente
                            </button>
                        ";
            } elseif ((            // line 52
(isset($context["relationshipStatus"]) || array_key_exists("relationshipStatus", $context) ? $context["relationshipStatus"] : (function () { throw new RuntimeError('Variable "relationshipStatus" does not exist.', 52, $this->source); })()) == "accepted")) {
                // line 53
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_friend", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
                yield "\" class=\"glassmorphism-player-left px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                                Retirer des amis
                            </a>
                            <a href=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("block_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "id", [], "any", false, false, false, 56)]), "html", null, true);
                yield "\" class=\"glassmorphism-warning px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                                Bloquer
                            </a>
                        ";
            } else {
                // line 60
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_friend", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "id", [], "any", false, false, false, 60)]), "html", null, true);
                yield "\" class=\"glassmorphism-acceptance px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                                Ajouter comme ami
                            </a>
                        ";
            }
            // line 64
            yield "                    ";
        }
        // line 65
        yield "                </div>

                ";
        // line 67
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "gender", [], "any", false, false, false, 67)) {
            // line 68
            yield "                    <div class=\"flex items-center space-x-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 50 50\">
                            <circle cx=\"22.875\" cy=\"4.625\" r=\"4.125\" fill=\"currentColor\"/>
                            <path fill=\"currentColor\" d=\"M22 10h-3c-2.82 0-5 1.719-5 4.587V27c0 2 3 2 3 0V15h1v32c0 1.233.768 2 2 2c1.235 0 2-.767 2-2zm13 15l-4.017-10.357C30.634 12.322 28.29 10 25.615 10H23v23.783c.5.002 1 .075 1 .217v13c0 1.04.917 2 2 2c1.086 0 2-.961 2-2V34h3.869c.362 0 1.044-.654 1.044-1c0-.08.029-.931 0-1l-5.909-16.237l-.034-.167c0-.237.199-.429.447-.429c.211 0 .388.141.435.329L31.869 26c.267.601 1.365 1 2.087 1c.965 0 1.065-1.895 1.044-2\"/>
                        </svg>
                        <p>";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 73, $this->source); })()), "gender", [], "any", false, false, false, 73), "html", null, true);
            yield "</p>
                    </div>
                ";
        }
        // line 76
        yield "
                ";
        // line 77
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 77, $this->source); })()), "birthdate", [], "any", false, false, false, 77)) {
            // line 78
            yield "                    <div class=\"flex items-center space-x-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 24 24\">
                            <path fill=\"none\" stroke=\"currentColor\" d=\"M7.5 6V1m10 5V1m4 16v4.5h-18v-3m17.863-10H3.352M.5 18.25v.25h17.9l.15-.25l.234-.491A28 28 0 0 0 21.5 5.729V3.5h-18v2.128A28 28 0 0 1 .743 17.744z\"/>
                        </svg>
                        <p>";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 82, $this->source); })()), "birthdate", [], "any", false, false, false, 82)], "method", false, false, false, 82), "y", [], "any", false, false, false, 82), "html", null, true);
            yield " ans</p>
                    </div>
                ";
        }
        // line 85
        yield "
                ";
        // line 86
        $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 86, $this->source); })()), "getCreatedAt", [], "any", false, false, false, 86)], "method", false, false, false, 86);
        // line 87
        yield "                <div class=\"flex items-center space-x-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 512 512\">
                        <path fill=\"currentColor\" d=\"M138.798 35.342L28.73 114.268l95.777 29.095l111.305-87.09zm112.986 31.082l-118.047 89.96l51.07 131.102l8.534-7.455l4.23-15.708a18.338 13.102 76.863 0 1-9.08-20.45a18.338 13.102 76.863 0 1 10.997-13.727a18.338 13.102 76.863 0 1 3.62.53a18.338 13.102 76.863 0 1 3.113 1.544l7.94-29.48a9 9 0 0 1 .353-1.04l.058-.128a9 9 0 0 1 .32-.685l.09-.153a9 9 0 0 1 .37-.625a9 9 0 0 1 .534-.723l.066-.074a9 9 0 0 1 .54-.594a9 9 0 0 1 .65-.593l.004-.002a9 9 0 0 1 .46-.342a9 9 0 0 1 .266-.197a9 9 0 0 1 .502-.3a9 9 0 0 1 .27-.157a9 9 0 0 1 .44-.208a9 9 0 0 1 .38-.178a9 9 0 0 1 .437-.152a9 9 0 0 1 .41-.143a9 9 0 0 1 .404-.1a9 9 0 0 1 .47-.114a9 9 0 0 1 .51-.07a9 9 0 0 1 .37-.05h.01l.01-.003l33.624-2.873a18.338 13.102 76.863 0 1 10.326-9.777a18.338 13.102 76.863 0 1 3.622.53a18.338 13.102 76.863 0 1 8.527 7.327l13.043-1.113L251.785 66.42zM137.25 74.03a9.8 19.77 77.916 0 1 12.798 8.734a9.8 19.77 77.916 0 1-21.938 11.998a9.8 19.77 77.916 0 1-16.57-8.602a9.8 19.77 77.916 0 1 21.938-12a9.8 19.77 77.916 0 1 3.77-.13zm100.228 23.517a18.338 13.102 76.863 0 1 .002 0a18.338 13.102 76.863 0 1 3.62.53a18.338 13.102 76.863 0 1 12.112 21.94a18.338 13.102 76.863 0 1-14.617 13.196a18.338 13.102 76.863 0 1-12.114-21.94a18.338 13.102 76.863 0 1 10.998-13.726zM24.22 131.71l46.992 114.124l94.236 40.38l-45.988-125.57l-95.24-28.935zm147.886 17.43a18.338 13.102 76.863 0 1 3.622.528a18.338 13.102 76.863 0 1 12.11 21.94a18.338 13.102 76.863 0 1-14.616 13.197a18.338 13.102 76.863 0 1-12.112-21.94a18.338 13.102 76.863 0 1 10.996-13.726zm-75.123 13.016a19.454 9.134 59.254 0 1 16.955 15.078a19.454 9.134 59.254 0 1-.425 19.485A19.454 9.134 59.254 0 1 95.6 181.78a19.454 9.134 59.254 0 1 .424-19.48a19.454 9.134 59.254 0 1 .96-.144zm263.393 40.21l-112.102 9.577l113.762 79.926l113.598-16.956l-115.258-72.55zM70.82 212.022A19.454 9.134 59.254 0 1 87.777 227.1a19.454 9.134 59.254 0 1-.425 19.484a19.454 9.134 59.254 0 1-17.913-14.938a19.454 9.134 59.254 0 1 .425-19.482a19.454 9.134 59.254 0 1 .96-.14zm157.378 7.813L186.66 374.023l115.616 99.454l47.147-168.47l-121.225-85.17zm126.987 11.168a21.76 8.898 15.267 0 1 19.693 4.783a21.76 8.898 15.267 0 1 7.607 14.244a21.76 8.898 15.267 0 1-28.886-3.182a21.76 8.898 15.267 0 1-7.61-14.244a21.76 8.898 15.267 0 1 9.195-1.6zM487.78 291.3L366.9 309.343l-46.823 167.316l116.297-31.77zm-181.808 10.8a25.834 15.573 84.277 0 1 4.238.943a25.834 15.573 84.277 0 1 12.873 31.72a25.834 15.573 84.277 0 1-18.105 17.893a25.834 15.573 84.277 0 1-12.874-31.72a25.834 15.573 84.277 0 1 13.868-18.836m154.086 11.636a13.237 21.96 28.62 0 1 7.673 4.13a13.237 21.96 28.62 0 1-6.176 28.435a13.237 21.96 28.62 0 1-21.287 3.878a13.237 21.96 28.62 0 1 6.175-28.434a13.237 21.96 28.62 0 1 13.616-8.008zM391.362 324.4a13.237 21.96 28.62 0 1 7.672 4.13a13.237 21.96 28.62 0 1-6.176 28.435a13.237 21.96 28.62 0 1-21.287 3.877a13.237 21.96 28.62 0 1 6.177-28.434a13.237 21.96 28.62 0 1 13.615-8.008zm-173.996 13.305a25.834 15.573 84.277 0 1 4.24.945a25.834 15.573 84.277 0 1 12.872 31.72a25.834 15.573 84.277 0 1-18.106 17.894a25.834 15.573 84.277 0 1-12.873-31.72a25.834 15.573 84.277 0 1 13.866-18.84zm212.278 60.87a13.237 21.96 28.62 0 1 7.67 4.13a13.237 21.96 28.62 0 1-6.174 28.434a13.237 21.96 28.62 0 1-21.287 3.874a13.237 21.96 28.62 0 1 6.176-28.434a13.237 21.96 28.62 0 1 13.616-8.007z\"/>
                    </svg>
                    <p>";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 91, $this->source); })()), "y", [], "any", false, false, false, 91) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 91, $this->source); })()), "y", [], "any", false, false, false, 91) . " an") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 91, $this->source); })()), "y", [], "any", false, false, false, 91) > 1)) ? ("s") : ("")))) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 91, $this->source); })()), "m", [], "any", false, false, false, 91) > 0)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 91, $this->source); })()), "m", [], "any", false, false, false, 91) . " mois")) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 91, $this->source); })()), "d", [], "any", false, false, false, 91) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 91, $this->source); })()), "d", [], "any", false, false, false, 91) . " jour") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 91, $this->source); })()), "d", [], "any", false, false, false, 91) > 1)) ? ("s") : ("")))) : ("1 minute")))))), "html", null, true);
        yield " sur DiceFinder</p>
                </div>
            </div>
        </div>

        <div class=\"w-full text-gray-100 glassmorphism p-6 rounded-lg mb-8\">
            <h2 class=\"text-2xl font-semibold mb-4\">Biographie</h2>
            <p>";
        // line 98
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "bio", [], "any", false, false, false, 98)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "bio", [], "any", false, false, false, 98), "html", null, true)) : (yield "Aucune biographie disponible."));
        yield "</p>
        </div>
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-4\">
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism text-center\" aria-controls=\"owned-jdrs\">
                ";
        // line 102
        yield ((((isset($context["ownedJDRCount"]) || array_key_exists("ownedJDRCount", $context) ? $context["ownedJDRCount"] : (function () { throw new RuntimeError('Variable "ownedJDRCount" does not exist.', 102, $this->source); })()) == 1)) ? ("Univers créé") : ("Univers créés"));
        yield "
            </a>
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism text-center\" aria-controls=\"joined-jdrs\">
                ";
        // line 105
        yield ((((isset($context["joinedJDRCount"]) || array_key_exists("joinedJDRCount", $context) ? $context["joinedJDRCount"] : (function () { throw new RuntimeError('Variable "joinedJDRCount" does not exist.', 105, $this->source); })()) == 1)) ? ("Univers rejoint") : ("Univers rejoints"));
        yield "
            </a>
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism text-center\" aria-controls=\"favorite-jdrs\">
                ";
        // line 108
        yield ((((isset($context["favoriteJDRCount"]) || array_key_exists("favoriteJDRCount", $context) ? $context["favoriteJDRCount"] : (function () { throw new RuntimeError('Variable "favoriteJDRCount" does not exist.', 108, $this->source); })()) == 1)) ? ("Univers en favori") : ("Univers en favoris"));
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
        // line 120
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ownedJDRs"]) || array_key_exists("ownedJDRs", $context) ? $context["ownedJDRs"] : (function () { throw new RuntimeError('Variable "ownedJDRs" does not exist.', 120, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 121
            yield "                    <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                        style=\"will-change: transform;\">
                        <a href=\"";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 123)]), "html", null, true);
            yield "\" class=\"block\">
                            <div class=\"relative\">
                                <img src=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "picture", [], "any", false, false, false, 125))), "html", null, true);
            yield "\"
                                    alt=\"";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 126), "html", null, true);
            yield " image\"
                                    class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 127
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 127)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 127))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                <div class=\"absolute top-2 right-2\">
                                    <span class=\"text-sm font-bold px-2 py-1 rounded
                                        ";
            // line 130
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "status", [], "any", false, false, false, 130) == "nouveau")) {
                yield " bg-green-600
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 131
$context["groupe"], "status", [], "any", false, false, false, 131) == "en_cours")) {
                yield " bg-blue-500
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 132
$context["groupe"], "status", [], "any", false, false, false, 132) == "termine")) {
                yield " bg-red-500
                                        ";
            } else {
                // line 133
                yield " bg-gray-700
                                        ";
            }
            // line 134
            yield " text-white\">
                                        ";
            // line 135
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "status", [], "any", false, false, false, 135) == "nouveau")) {
                // line 136
                yield "                                            Nouveau
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 137
$context["groupe"], "status", [], "any", false, false, false, 137) == "en_cours")) {
                // line 138
                yield "                                            En Cours
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 139
$context["groupe"], "status", [], "any", false, false, false, 139) == "termine")) {
                // line 140
                yield "                                            Terminé
                                        ";
            } else {
                // line 142
                yield "                                            Statut inconnu
                                        ";
            }
            // line 144
            yield "                                    </span>
                                </div>
                            </div>
                        </a>
                        <div class=\"mb-2\">
                            <a href=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 149)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 149), "html", null, true);
            yield "</a>
                        </div>
                        <div class=\"flex justify-between items-center mt-2\">
                            <a href=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 152), "id", [], "any", false, false, false, 152)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                ";
            // line 153
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 153), "avatar", [], "any", false, false, false, 153)) {
                // line 154
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 154), "avatar", [], "any", false, false, false, 154))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                ";
            } else {
                // line 156
                yield "                                    <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                ";
            }
            // line 158
            yield "                                <div class=\"ml-2\">
                                    <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                    <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 160), "username", [], "any", false, false, false, 160), "html", null, true);
            yield "</p>
                                </div>
                            </a>
                            <div class=\"flex items-center text-right gap-1\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                </svg>
                                ";
            // line 167
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 167)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 167))) {
                // line 168
                yield "                                    <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                ";
            } else {
                // line 170
                yield "                                    <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 170)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 170), "html", null, true);
                yield "</p>
                                ";
            }
            // line 172
            yield "                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 176
            yield "                    <p class=\"text-gray-400\">Aucun nouveau jeu de rôle disponible.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        yield "            </div>
        </div>
    </div>
        <div id=\"joined-jdrs\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                        ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joinedJDRs"]) || array_key_exists("joinedJDRs", $context) ? $context["joinedJDRs"] : (function () { throw new RuntimeError('Variable "joinedJDRs" does not exist.', 185, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["joined"]) {
            // line 186
            yield "                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item tab-content\"
                                style=\"will-change: transform;\">
                                <a href=\"";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "id", [], "any", false, false, false, 188)]), "html", null, true);
            yield "\" class=\"block\">
                                    <div class=\"relative\">
                                        <img src=\"";
            // line 190
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "picture", [], "any", false, false, false, 190))), "html", null, true);
            yield "\" 
                                            alt=\"";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "title", [], "any", false, false, false, 191), "html", null, true);
            yield " image\" 
                                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 192
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 192)) >= CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 192))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                        <div class=\"absolute top-2 right-2\">
                                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                                ";
            // line 195
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "status", [], "any", false, false, false, 195) == "nouveau")) {
                yield " bg-green-600
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 196
$context["joined"], "status", [], "any", false, false, false, 196) == "en_cours")) {
                yield " bg-blue-500
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 197
$context["joined"], "status", [], "any", false, false, false, 197) == "termine")) {
                yield " bg-red-500
                                                ";
            } else {
                // line 198
                yield " bg-gray-700
                                                ";
            }
            // line 199
            yield " text-white\">
                                                ";
            // line 200
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "status", [], "any", false, false, false, 200) == "nouveau")) {
                // line 201
                yield "                                                    Nouveau
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 202
$context["joined"], "status", [], "any", false, false, false, 202) == "en_cours")) {
                // line 203
                yield "                                                    En Cours
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 204
$context["joined"], "status", [], "any", false, false, false, 204) == "termine")) {
                // line 205
                yield "                                                    Terminé
                                                ";
            } else {
                // line 207
                yield "                                                    Statut inconnu
                                                ";
            }
            // line 209
            yield "                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"mb-2\">
                                    <a href=\"";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "id", [], "any", false, false, false, 214)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "title", [], "any", false, false, false, 214), "html", null, true);
            yield "</a>
                                </div>
                                <div class=\"flex justify-between items-center mt-2\">
                                    <a href=\"";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 217), "id", [], "any", false, false, false, 217)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                        ";
            // line 218
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 218), "avatar", [], "any", false, false, false, 218)) {
                // line 219
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 219), "avatar", [], "any", false, false, false, 219))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                        ";
            } else {
                // line 221
                yield "                                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                        ";
            }
            // line 223
            yield "                                        <div class=\"ml-2\">
                                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 225
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 225), "username", [], "any", false, false, false, 225), "html", null, true);
            yield "</p>
                                        </div>
                                    </a>
                                    <div class=\"flex items-center text-right gap-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                        </svg>
                                        ";
            // line 232
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 232)) >= CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 232))) {
                // line 233
                yield "                                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                        ";
            } else {
                // line 235
                yield "                                            <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 235)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 235), "html", null, true);
                yield "</p>
                                        ";
            }
            // line 237
            yield "                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 241
            yield "                            <p class=\"text-gray-400\">Aucun univers rejoint.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joined'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 243
        yield "                    </div>
                </div>
            </div>
        </div>
        <div id=\"favorite-jdrs\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                        ";
        // line 251
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favoriteJDRs"]) || array_key_exists("favoriteJDRs", $context) ? $context["favoriteJDRs"] : (function () { throw new RuntimeError('Variable "favoriteJDRs" does not exist.', 251, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 252
            yield "                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                                aria-controls=\"favorite-jdrs\" style=\"will-change: transform;\">
                                <a href=\"";
            // line 254
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 254)]), "html", null, true);
            yield "\" class=\"block\">
                                    <div class=\"relative\">
                                        <img src=\"";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "picture", [], "any", false, false, false, 256))), "html", null, true);
            yield "\" 
                                            alt=\"";
            // line 257
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 257), "html", null, true);
            yield " image\" 
                                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 258
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 258)) >= CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 258))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                        <div class=\"absolute top-2 right-2\">
                                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                                ";
            // line 261
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "status", [], "any", false, false, false, 261) == "nouveau")) {
                yield " bg-green-600
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 262
$context["favorite"], "status", [], "any", false, false, false, 262) == "en_cours")) {
                yield " bg-blue-500
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 263
$context["favorite"], "status", [], "any", false, false, false, 263) == "termine")) {
                yield " bg-red-500
                                                ";
            } else {
                // line 264
                yield " bg-gray-700
                                                ";
            }
            // line 265
            yield " text-white\">
                                                ";
            // line 266
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "status", [], "any", false, false, false, 266) == "nouveau")) {
                // line 267
                yield "                                                    Nouveau
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 268
$context["favorite"], "status", [], "any", false, false, false, 268) == "en_cours")) {
                // line 269
                yield "                                                    En Cours
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 270
$context["favorite"], "status", [], "any", false, false, false, 270) == "termine")) {
                // line 271
                yield "                                                    Terminé
                                                ";
            } else {
                // line 273
                yield "                                                    Statut inconnu
                                                ";
            }
            // line 275
            yield "                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"mb-2\">
                                    <a href=\"";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 280)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 280), "html", null, true);
            yield "</a>
                                </div>
                                <div class=\"flex justify-between items-center mt-2\">
                                    <a href=\"";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 283), "id", [], "any", false, false, false, 283)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                        ";
            // line 284
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 284), "avatar", [], "any", false, false, false, 284)) {
                // line 285
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 285), "avatar", [], "any", false, false, false, 285))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                        ";
            } else {
                // line 287
                yield "                                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                        ";
            }
            // line 289
            yield "                                        <div class=\"ml-2\">
                                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 291), "username", [], "any", false, false, false, 291), "html", null, true);
            yield "</p>
                                        </div>
                                    </a>
                                    <div class=\"flex items-center text-right gap-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                        </svg>
                                        ";
            // line 298
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 298)) >= CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 298))) {
                // line 299
                yield "                                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                        ";
            } else {
                // line 301
                yield "                                            <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 301)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 301), "html", null, true);
                yield "</p>
                                        ";
            }
            // line 303
            yield "                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 307
            yield "                            <p class=\"text-gray-400\">Aucun JDR en favori.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['favorite'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 309
        yield "                    </div>
                </div>
            </div>
        </div>
        <div id=\"friends-container\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <ul class=\"text-gray-200\">
                        ";
        // line 317
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 317, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 318
            yield "                            <div class=\"lg:w-1/4 w-full shadow-lg p-6 flex-auto min-h-[250px] glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl  card-item\">
                                <a href=\"";
            // line 319
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "id", [], "any", false, false, false, 319)]), "html", null, true);
            yield "\" class=\"block w-full h-full\">
                                    <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center\">
                                        <img id=\"banner-preview\" src=\"";
            // line 321
            ((CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "banner", [], "any", false, false, false, 321)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/banners/" . CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "banner", [], "any", false, false, false, 321))), "html", null, true)) : (yield "https://via.placeholder.com/150"));
            yield "\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
                                    </div>
                                    <div class=\"absolute top-44 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full border-4 border-gray-900 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50\">
                                        ";
            // line 324
            if (CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "avatar", [], "any", false, false, false, 324)) {
                // line 325
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "avatar", [], "any", false, false, false, 325))), "html", null, true);
                yield "\" alt=\"Photo de profil\" class=\"w-full h-full rounded-full object-cover\">
                                        ";
            } else {
                // line 327
                yield "                                            <img class=\"w-full h-full rounded-full object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                        ";
            }
            // line 329
            yield "                                    </div>
                                    <div class=\"mt-20 text-center\">
                                        <div class=\"flex justify-center items-center\">
                                            <h3 class=\"text-gray-100 font-bold text-xl\">";
            // line 332
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "username", [], "any", false, false, false, 332), "html", null, true);
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
            // line 344
            yield "                            <p class=\"text-gray-400\">Aucun ami trouvé.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['friend'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
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
        return array (  840 => 346,  833 => 344,  816 => 332,  811 => 329,  805 => 327,  799 => 325,  797 => 324,  791 => 321,  786 => 319,  783 => 318,  778 => 317,  768 => 309,  761 => 307,  753 => 303,  745 => 301,  741 => 299,  739 => 298,  729 => 291,  725 => 289,  719 => 287,  713 => 285,  711 => 284,  707 => 283,  699 => 280,  692 => 275,  688 => 273,  684 => 271,  682 => 270,  679 => 269,  677 => 268,  674 => 267,  672 => 266,  669 => 265,  665 => 264,  660 => 263,  656 => 262,  652 => 261,  644 => 258,  640 => 257,  636 => 256,  631 => 254,  627 => 252,  622 => 251,  612 => 243,  605 => 241,  597 => 237,  589 => 235,  585 => 233,  583 => 232,  573 => 225,  569 => 223,  563 => 221,  557 => 219,  555 => 218,  551 => 217,  543 => 214,  536 => 209,  532 => 207,  528 => 205,  526 => 204,  523 => 203,  521 => 202,  518 => 201,  516 => 200,  513 => 199,  509 => 198,  504 => 197,  500 => 196,  496 => 195,  488 => 192,  484 => 191,  480 => 190,  475 => 188,  471 => 186,  466 => 185,  457 => 178,  450 => 176,  442 => 172,  434 => 170,  430 => 168,  428 => 167,  418 => 160,  414 => 158,  408 => 156,  402 => 154,  400 => 153,  396 => 152,  388 => 149,  381 => 144,  377 => 142,  373 => 140,  371 => 139,  368 => 138,  366 => 137,  363 => 136,  361 => 135,  358 => 134,  354 => 133,  349 => 132,  345 => 131,  341 => 130,  333 => 127,  329 => 126,  325 => 125,  320 => 123,  316 => 121,  311 => 120,  296 => 108,  290 => 105,  284 => 102,  277 => 98,  267 => 91,  261 => 87,  259 => 86,  256 => 85,  250 => 82,  244 => 78,  242 => 77,  239 => 76,  233 => 73,  226 => 68,  224 => 67,  220 => 65,  217 => 64,  209 => 60,  202 => 56,  195 => 53,  193 => 52,  188 => 49,  185 => 48,  183 => 47,  180 => 46,  172 => 42,  170 => 41,  155 => 28,  149 => 26,  147 => 25,  143 => 24,  138 => 21,  132 => 19,  126 => 17,  124 => 16,  120 => 14,  114 => 12,  108 => 10,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil de {{ user.username }}{% endblock %}

{% block body %}
<div class=\"relative flex flex-col lg:flex-row w-full min-w-0 mt-6 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable space-y-4 lg:space-y-0 lg:space-x-6\">
    <div class=\"lg:w-1/4 w-full shadow-lg p-6 flex-auto min-h-[250px] glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl\">
        <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center\">
            {% if user.avatar %}
                <img id=\"banner-preview\" src=\"{{ user.banner ? asset('uploads/banners/' ~ user.banner) : 'https://via.placeholder.com/150' }}\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
            {% else %}
                <img src=\"{{ asset('images/default-banniere.jpg') }}\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
            {% endif %}
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
                            <div class=\"lg:w-1/4 w-full shadow-lg p-6 flex-auto min-h-[250px] glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl  card-item\">
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
