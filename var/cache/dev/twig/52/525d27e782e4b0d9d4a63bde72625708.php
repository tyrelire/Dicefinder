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

/* profile/edit.html.twig */
class __TwigTemplate_077e3078fc0aeccb213518ab76e19c5e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/edit.html.twig", 1);
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
        yield "<div class=\"glassmorphism-edition pr-5 pl-5\">
    <h1 class=\"text-2xl font-semibold text-center text-gray-100 mb-5 mt-5\">
        Mode Edition du Profil
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"inline h-10 w-10 mb-3 text-yellow-500\" viewBox=\"0 0 24 24\">
            <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m14.304 4.844l2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565l6.844-6.844a2.015 2.015 0 0 1 2.852 0Z\"/>
        </svg>
    </h1>

    <div class=\"relative flex flex-col lg:flex-row w-full min-w-0 mt-6 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable space-y-4 lg:space-y-0 lg:space-x-6\">
        <div class=\"lg:w-1/4 w-full shadow-lg p-6 flex-auto min-h-[250px] glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl\">
            <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center relative group\">
                <img id=\"banner-preview\" src=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "banner", [], "any", false, false, false, 17)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/banners/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "banner", [], "any", false, false, false, 17)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-banniere.jpg"))), "html", null, true);
        yield "\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
                <div class=\"absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 text-white mb-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v16h16V4H4zm16-2a2 2 0 012 2v16a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2h16zm-8 7v4m0 4h.01\"/>
                    </svg>
                    <span class=\"text-white font-semibold\">Modifier la bannière</span>
                </div>

                ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "id", [], "any", false, false, false, 25) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "id", [], "any", false, false, false, 25)))) {
            // line 26
            yield "                    <form id=\"banner-form\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit_banner");
            yield "\" method=\"POST\" enctype=\"multipart/form-data\" class=\"absolute inset-0 cursor-pointer opacity-0\">
                        <input type=\"file\" name=\"banner\" id=\"banner-input\" class=\"w-full h-full cursor-pointer\" onchange=\"previewAndSubmitBanner()\">
                    </form>
                ";
        }
        // line 30
        yield "            </div>

            <div class=\"absolute top-40 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full border-4 border-gray-900 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50 overflow-hidden group\">
                <img id=\"avatar-preview\" src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "avatar", [], "any", false, false, false, 33)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "avatar", [], "any", false, false, false, 33)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"))), "html", null, true);
        yield "\" alt=\"Photo de profil\" class=\"w-full h-full object-cover rounded-full\">
                <div class=\"absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 text-white mb-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v16h16V4H4zm16-2a2 2 0 012 2v16a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2h16zm-8 7v4m0 4h.01\"/>
                    </svg>
                    <span class=\"text-white font-semibold\">Upload</span>
                </div>

                ";
        // line 41
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "user", [], "any", false, false, false, 41), "id", [], "any", false, false, false, 41) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "id", [], "any", false, false, false, 41)))) {
            // line 42
            yield "                    <form id=\"avatar-form\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit_avatar");
            yield "\" method=\"POST\" enctype=\"multipart/form-data\" class=\"absolute inset-0 opacity-0\">
                        <input id=\"avatar-input\" type=\"file\" name=\"avatar\" class=\"w-full h-full cursor-pointer\" onchange=\"previewImage(event)\">
                    </form>
                ";
        }
        // line 46
        yield "            </div>

            <div class=\"mt-20 text-center relative group\">
                <div class=\"flex justify-center items-center\">
                    <h3 class=\"text-gray-100 font-bold text-xl\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "username", [], "any", false, false, false, 50), "html", null, true);
        yield "</h3>
                    ";
        // line 51
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 51, $this->source); })()), "user", [], "any", false, false, false, 51), "isVip", [], "any", false, false, false, 51)) {
            // line 52
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/vip-logo.png"), "html", null, true);
            yield "\" alt=\"VIP\" class=\"ml-2 w-8 h-8 \" />
                    ";
        }
        // line 54
        yield "                </div>
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
                    ";
        // line 67
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "id", [], "any", false, false, false, 67) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 67, $this->source); })()), "id", [], "any", false, false, false, 67)))) {
            // line 68
            yield "                    <div class=\"w-full flex justify-center lg:justify-end mt-4 lg:mt-0 mb-4 flex-wrap items-center gap-4\">
                        <a href=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 69, $this->source); })()), "id", [], "any", false, false, false, 69)]), "html", null, true);
            yield "\" class=\"glassmorphism-player-left px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center space-x-2\">
                            <span>Retour</span>
                            <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\">
                                <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m9 11l-4 4l4 4m-4-4h11a4 4 0 0 0 0-8h-1\"/>
                            </svg>
                        </a>
                    </div>
                    ";
        }
        // line 77
        yield "                    <div class=\"flex items-center space-x-2 mt-4 relative\">
                        <div id=\"birthdate-display\" class=\"flex items-center space-x-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 24 24\">
                                <path fill=\"none\" stroke=\"currentColor\" d=\"M7.5 6V1m10 5V1m4 16v4.5h-18v-3m17.863-10H3.352M.5 18.25v.25h17.9l.15-.25l.234-.491A28 28 0 0 0 21.5 5.729V3.5h-18v2.128A28 28 0 0 1 .743 17.744z\"/>
                            </svg>
                            <p>";
        // line 82
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 82, $this->source); })()), "birthdate", [], "any", false, false, false, 82)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 82, $this->source); })()), "birthdate", [], "any", false, false, false, 82)], "method", false, false, false, 82), "y", [], "any", false, false, false, 82), "html", null, true);
            yield " ans ";
        } else {
            yield "Choisissez une date de naissance.";
        }
        yield "</p>
                        </div>

                        ";
        // line 85
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "id", [], "any", false, false, false, 85) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "id", [], "any", false, false, false, 85)))) {
            // line 86
            yield "                        <button id=\"edit-birthdate-btn\" class=\"ml-2 text-yellow-500 z-10 focus:outline-none\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"inline h-6 w-6\" viewBox=\"0 0 24 24\">
                                <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m14.304 4.844l2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565l6.844-6.844a2.015 2.015 0 0 1 2.852 0Z\"/>
                            </svg>
                        </button>
                        ";
        }
        // line 92
        yield "
                        <form id=\"birthdate-form\" action=\"";
        // line 93
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit_birthdate");
        yield "\" method=\"POST\" class=\"hidden\">
                            <input type=\"date\" name=\"birthdate\" class=\"bg-gray-800 text-gray-100 rounded-md p-2\" value=\"";
        // line 94
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "birthdate", [], "any", false, false, false, 94)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "birthdate", [], "any", false, false, false, 94), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "\">
                            <button type=\"submit\" class=\"bg-purple-500 text-white px-4 py-2 rounded-md ml-2\">Sauvegarder</button>
                        </form>
                    </div>
                </div>
            </div>
            ";
        // line 100
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "user", [], "any", false, false, false, 100), "id", [], "any", false, false, false, 100) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 100, $this->source); })()), "id", [], "any", false, false, false, 100)))) {
            // line 101
            yield "                <div class=\"w-full text-gray-100 glassmorphism p-6 rounded-lg mb-8 relative group\">
                    <h2 class=\"text-2xl font-semibold mb-4\">Biographie
                        <span class=\"ml-1 text-yellow-500 cursor-pointer\" id=\"edit-bio-btn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"inline h-7 w-7\" viewBox=\"0 0 24 24\">
                                <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m14.304 4.844l2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565l6.844-6.844a2.015 2.015 0 0 1 2.852 0Z\"/>
                            </svg>
                        </span>
                    </h2>
                    <form id=\"bio-form\" action=\"";
            // line 109
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit_bio");
            yield "\" method=\"POST\">
                        <textarea id=\"bio-textarea\" name=\"bio\" class=\"w-full h-32 p-2 bg-gray-800 text-gray-100 rounded-md hidden\" rows=\"5\">";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "bio", [], "any", false, false, false, 110), "html", null, true);
            yield "</textarea>
                        <div id=\"bio-display\">";
            // line 111
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 111, $this->source); })()), "bio", [], "any", false, false, false, 111)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 111, $this->source); })()), "bio", [], "any", false, false, false, 111), "html", null, true)) : (yield "Aucune information renseignée."));
            yield "</div>
                        <button type=\"submit\" class=\"bg-purple-500 text-white px-4 py-2 rounded-md mt-4 hidden\" id=\"save-bio-btn\">Sauvegarder</button>
                    </form>
                </div>
            ";
        } else {
            // line 116
            yield "                <div class=\"w-full text-gray-100 glassmorphism p-6 rounded-lg mb-8\">
                    <h2 class=\"text-2xl font-semibold mb-4\">Biographie</h2>
                    <p>";
            // line 118
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "bio", [], "any", false, false, false, 118)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 118, $this->source); })()), "bio", [], "any", false, false, false, 118), "html", null, true)) : (yield "Aucune information renseignée."));
            yield "</p>
                </div>
            ";
        }
        // line 121
        yield "        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        const imageField = document.getElementById(\"avatar-preview\");

        reader.onload = function() {
            if (reader.readyState === 2) {
                imageField.src = reader.result;
            }
        };
        reader.readAsDataURL(event.target.files[0]);

        document.getElementById(\"avatar-form\").submit();
    }

    function previewAndSubmitBanner() {
        const input = document.getElementById('banner-input');
        const preview = document.getElementById('banner-preview');
        const form = document.getElementById('banner-form');
        const file = input.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            if (preview) {
                preview.src = reader.result;
                form.submit();
            } else {
                console.error(\"L'élément de prévisualisation de la bannière n'existe pas.\");
            }
        };

        if (file) {
            reader.readAsDataURL(file);
        } else if (preview) {
            preview.src = \"https://via.placeholder.com/150\";
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const editBioBtn = document.getElementById('edit-bio-btn');
        const bioDisplay = document.getElementById('bio-display');
        const bioTextarea = document.getElementById('bio-textarea');
        const saveBioBtn = document.getElementById('save-bio-btn');

        editBioBtn.addEventListener('click', function() {
            bioDisplay.classList.add('hidden');
            bioTextarea.classList.remove('hidden');
            saveBioBtn.classList.remove('hidden');
            bioTextarea.focus();
        });

        bioTextarea.addEventListener('input', function() {
            if (bioTextarea.value.trim() === \"\") {
                bioTextarea.value = \"\";
            }
        });

        const editBirthdateBtn = document.getElementById('edit-birthdate-btn');
        const birthdateDisplay = document.getElementById('birthdate-display');
        const birthdateForm = document.getElementById('birthdate-form');

        editBirthdateBtn.addEventListener('click', function() {
            birthdateDisplay.classList.add('hidden');
            birthdateForm.classList.remove('hidden');
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
        return "profile/edit.html.twig";
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
        return array (  293 => 121,  287 => 118,  283 => 116,  275 => 111,  271 => 110,  267 => 109,  257 => 101,  255 => 100,  246 => 94,  242 => 93,  239 => 92,  231 => 86,  229 => 85,  217 => 82,  210 => 77,  199 => 69,  196 => 68,  194 => 67,  179 => 54,  173 => 52,  171 => 51,  167 => 50,  161 => 46,  153 => 42,  151 => 41,  140 => 33,  135 => 30,  127 => 26,  125 => 25,  114 => 17,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil de {{ user.username }}{% endblock %}

{% block body %}
<div class=\"glassmorphism-edition pr-5 pl-5\">
    <h1 class=\"text-2xl font-semibold text-center text-gray-100 mb-5 mt-5\">
        Mode Edition du Profil
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"inline h-10 w-10 mb-3 text-yellow-500\" viewBox=\"0 0 24 24\">
            <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m14.304 4.844l2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565l6.844-6.844a2.015 2.015 0 0 1 2.852 0Z\"/>
        </svg>
    </h1>

    <div class=\"relative flex flex-col lg:flex-row w-full min-w-0 mt-6 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable space-y-4 lg:space-y-0 lg:space-x-6\">
        <div class=\"lg:w-1/4 w-full shadow-lg p-6 flex-auto min-h-[250px] glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl\">
            <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center relative group\">
                <img id=\"banner-preview\" src=\"{{ user.banner ? asset('uploads/banners/' ~ user.banner) : asset('images/default-banniere.jpg') }}\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
                <div class=\"absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 text-white mb-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v16h16V4H4zm16-2a2 2 0 012 2v16a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2h16zm-8 7v4m0 4h.01\"/>
                    </svg>
                    <span class=\"text-white font-semibold\">Modifier la bannière</span>
                </div>

                {% if app.user and app.user.id == user.id %}
                    <form id=\"banner-form\" action=\"{{ path('app_profile_edit_banner') }}\" method=\"POST\" enctype=\"multipart/form-data\" class=\"absolute inset-0 cursor-pointer opacity-0\">
                        <input type=\"file\" name=\"banner\" id=\"banner-input\" class=\"w-full h-full cursor-pointer\" onchange=\"previewAndSubmitBanner()\">
                    </form>
                {% endif %}
            </div>

            <div class=\"absolute top-40 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full border-4 border-gray-900 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50 overflow-hidden group\">
                <img id=\"avatar-preview\" src=\"{{ user.avatar ? asset('uploads/avatars/' ~ user.avatar) : asset('images/default-avatar.png') }}\" alt=\"Photo de profil\" class=\"w-full h-full object-cover rounded-full\">
                <div class=\"absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 text-white mb-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v16h16V4H4zm16-2a2 2 0 012 2v16a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2h16zm-8 7v4m0 4h.01\"/>
                    </svg>
                    <span class=\"text-white font-semibold\">Upload</span>
                </div>

                {% if app.user and app.user.id == user.id %}
                    <form id=\"avatar-form\" action=\"{{ path('app_profile_edit_avatar') }}\" method=\"POST\" enctype=\"multipart/form-data\" class=\"absolute inset-0 opacity-0\">
                        <input id=\"avatar-input\" type=\"file\" name=\"avatar\" class=\"w-full h-full cursor-pointer\" onchange=\"previewImage(event)\">
                    </form>
                {% endif %}
            </div>

            <div class=\"mt-20 text-center relative group\">
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
                    {% if app.user and app.user.id == user.id %}
                    <div class=\"w-full flex justify-center lg:justify-end mt-4 lg:mt-0 mb-4 flex-wrap items-center gap-4\">
                        <a href=\"{{ path('app_profile_show', {'id': user.id}) }}\" class=\"glassmorphism-player-left px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center space-x-2\">
                            <span>Retour</span>
                            <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\">
                                <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m9 11l-4 4l4 4m-4-4h11a4 4 0 0 0 0-8h-1\"/>
                            </svg>
                        </a>
                    </div>
                    {% endif %}
                    <div class=\"flex items-center space-x-2 mt-4 relative\">
                        <div id=\"birthdate-display\" class=\"flex items-center space-x-2\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 24 24\">
                                <path fill=\"none\" stroke=\"currentColor\" d=\"M7.5 6V1m10 5V1m4 16v4.5h-18v-3m17.863-10H3.352M.5 18.25v.25h17.9l.15-.25l.234-.491A28 28 0 0 0 21.5 5.729V3.5h-18v2.128A28 28 0 0 1 .743 17.744z\"/>
                            </svg>
                            <p>{% if user.birthdate %} {{ date().diff(user.birthdate).y }} ans {% else %}Choisissez une date de naissance.{% endif %}</p>
                        </div>

                        {% if app.user and app.user.id == user.id %}
                        <button id=\"edit-birthdate-btn\" class=\"ml-2 text-yellow-500 z-10 focus:outline-none\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"inline h-6 w-6\" viewBox=\"0 0 24 24\">
                                <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m14.304 4.844l2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565l6.844-6.844a2.015 2.015 0 0 1 2.852 0Z\"/>
                            </svg>
                        </button>
                        {% endif %}

                        <form id=\"birthdate-form\" action=\"{{ path('app_profile_edit_birthdate') }}\" method=\"POST\" class=\"hidden\">
                            <input type=\"date\" name=\"birthdate\" class=\"bg-gray-800 text-gray-100 rounded-md p-2\" value=\"{{ user.birthdate ? user.birthdate|date('Y-m-d') }}\">
                            <button type=\"submit\" class=\"bg-purple-500 text-white px-4 py-2 rounded-md ml-2\">Sauvegarder</button>
                        </form>
                    </div>
                </div>
            </div>
            {% if app.user and app.user.id == user.id %}
                <div class=\"w-full text-gray-100 glassmorphism p-6 rounded-lg mb-8 relative group\">
                    <h2 class=\"text-2xl font-semibold mb-4\">Biographie
                        <span class=\"ml-1 text-yellow-500 cursor-pointer\" id=\"edit-bio-btn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"inline h-7 w-7\" viewBox=\"0 0 24 24\">
                                <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m14.304 4.844l2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565l6.844-6.844a2.015 2.015 0 0 1 2.852 0Z\"/>
                            </svg>
                        </span>
                    </h2>
                    <form id=\"bio-form\" action=\"{{ path('app_profile_edit_bio') }}\" method=\"POST\">
                        <textarea id=\"bio-textarea\" name=\"bio\" class=\"w-full h-32 p-2 bg-gray-800 text-gray-100 rounded-md hidden\" rows=\"5\">{{ user.bio }}</textarea>
                        <div id=\"bio-display\">{{ user.bio ? user.bio : 'Aucune information renseignée.' }}</div>
                        <button type=\"submit\" class=\"bg-purple-500 text-white px-4 py-2 rounded-md mt-4 hidden\" id=\"save-bio-btn\">Sauvegarder</button>
                    </form>
                </div>
            {% else %}
                <div class=\"w-full text-gray-100 glassmorphism p-6 rounded-lg mb-8\">
                    <h2 class=\"text-2xl font-semibold mb-4\">Biographie</h2>
                    <p>{{ user.bio ? user.bio : 'Aucune information renseignée.' }}</p>
                </div>
            {% endif %}
        </div>
    </div>
</div>

<script>
    function previewImage(event) {
        const reader = new FileReader();
        const imageField = document.getElementById(\"avatar-preview\");

        reader.onload = function() {
            if (reader.readyState === 2) {
                imageField.src = reader.result;
            }
        };
        reader.readAsDataURL(event.target.files[0]);

        document.getElementById(\"avatar-form\").submit();
    }

    function previewAndSubmitBanner() {
        const input = document.getElementById('banner-input');
        const preview = document.getElementById('banner-preview');
        const form = document.getElementById('banner-form');
        const file = input.files[0];
        const reader = new FileReader();

        reader.onloadend = function () {
            if (preview) {
                preview.src = reader.result;
                form.submit();
            } else {
                console.error(\"L'élément de prévisualisation de la bannière n'existe pas.\");
            }
        };

        if (file) {
            reader.readAsDataURL(file);
        } else if (preview) {
            preview.src = \"https://via.placeholder.com/150\";
        }
    }

    document.addEventListener('DOMContentLoaded', function() {
        const editBioBtn = document.getElementById('edit-bio-btn');
        const bioDisplay = document.getElementById('bio-display');
        const bioTextarea = document.getElementById('bio-textarea');
        const saveBioBtn = document.getElementById('save-bio-btn');

        editBioBtn.addEventListener('click', function() {
            bioDisplay.classList.add('hidden');
            bioTextarea.classList.remove('hidden');
            saveBioBtn.classList.remove('hidden');
            bioTextarea.focus();
        });

        bioTextarea.addEventListener('input', function() {
            if (bioTextarea.value.trim() === \"\") {
                bioTextarea.value = \"\";
            }
        });

        const editBirthdateBtn = document.getElementById('edit-birthdate-btn');
        const birthdateDisplay = document.getElementById('birthdate-display');
        const birthdateForm = document.getElementById('birthdate-form');

        editBirthdateBtn.addEventListener('click', function() {
            birthdateDisplay.classList.add('hidden');
            birthdateForm.classList.remove('hidden');
        });
    });
</script>
{% endblock %}
", "profile/edit.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\profile\\edit.html.twig");
    }
}