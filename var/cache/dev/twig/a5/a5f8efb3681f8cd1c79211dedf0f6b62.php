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
class __TwigTemplate_02466f5c6d17e8634c76d265f9e06eda extends Template
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
        yield "<div class=\"glassmorphism-warning pr-5 pl-5\">
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
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "banner", [], "any", false, false, false, 17)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/banners/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 17, $this->source); })()), "banner", [], "any", false, false, false, 17))), "html", null, true)) : (yield "https://via.placeholder.com/150"));
        yield "\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">

                <div class=\"absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-lg\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 text-white mb-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v16h16V4H4zm16-2a2 2 0 012 2v16a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2h16zm-8 7v4m0 4h.01\"/>
                    </svg>
                    <span class=\"text-white font-semibold\">Modifier la bannière</span>
                </div>

                ";
        // line 26
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "user", [], "any", false, false, false, 26), "id", [], "any", false, false, false, 26) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26)))) {
            // line 27
            yield "                <form id=\"banner-form\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit_banner");
            yield "\" method=\"POST\" enctype=\"multipart/form-data\" class=\"absolute inset-0 cursor-pointer opacity-0\">
                    <input type=\"file\" name=\"banner\" id=\"banner-input\" class=\"w-full h-full cursor-pointer\" onchange=\"previewAndSubmitBanner()\">
                </form>
                ";
        }
        // line 31
        yield "            </div>

            <div class=\"absolute top-40 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full border-4 border-gray-900 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50 overflow-hidden group\">
                <img id=\"avatar-preview\" src=\"";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "avatar", [], "any", false, false, false, 34)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "avatar", [], "any", false, false, false, 34)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"))), "html", null, true);
        yield "\" alt=\"Photo de profil\" class=\"w-full h-full object-cover rounded-full\">
                <div class=\"absolute inset-0 bg-black bg-opacity-50 flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-8 w-8 text-white mb-2\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M4 4v16h16V4H4zm16-2a2 2 0 012 2v16a2 2 0 01-2 2H4a2 2 0 01-2-2V4a2 2 0 012-2h16zm-8 7v4m0 4h.01\"/>
                    </svg>
                    <span class=\"text-white font-semibold\">Upload</span>
                </div>

                ";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "user", [], "any", false, false, false, 42), "id", [], "any", false, false, false, 42) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "id", [], "any", false, false, false, 42)))) {
            // line 43
            yield "                    <form id=\"avatar-form\" action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit_avatar");
            yield "\" method=\"POST\" enctype=\"multipart/form-data\" class=\"absolute inset-0 opacity-0\">
                        <input id=\"avatar-input\" type=\"file\" name=\"avatar\" class=\"w-full h-full cursor-pointer\" onchange=\"previewImage(event)\">
                    </form>
                ";
        }
        // line 47
        yield "            </div>

            <div class=\"mt-20 text-center relative group\">
                <div class=\"flex justify-center items-center\">
                    <h3 class=\"text-gray-100 font-bold text-xl\">";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "username", [], "any", false, false, false, 51), "html", null, true);
        yield "</h3>
                    ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52), "isVip", [], "any", false, false, false, 52)) {
            // line 53
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/vip-logo.png"), "html", null, true);
            yield "\" alt=\"VIP\" class=\"ml-2 w-8 h-8 \" />
                    ";
        }
        // line 55
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
        // line 68
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 68, $this->source); })()), "user", [], "any", false, false, false, 68), "id", [], "any", false, false, false, 68) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "id", [], "any", false, false, false, 68)))) {
            // line 69
            yield "                    <div class=\"w-full flex justify-center lg:justify-end lg:absolute lg:top-4 lg:right-4 mt-4 lg:mt-0 mb-4\">
                        <a href=\"";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 70, $this->source); })()), "id", [], "any", false, false, false, 70)]), "html", null, true);
            yield "\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-red-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism-player-left flex items-center space-x-2\">
                            <span>Retour</span>
                            <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\">
                                <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m9 11l-4 4l4 4m-4-4h11a4 4 0 0 0 0-8h-1\"/>
                            </svg>
                        </a>
                    </div>
                    ";
        }
        // line 78
        yield "
                        <div class=\"flex items-center space-x-2 mt-4 relative\">
                            <div id=\"gender-display\" class=\"flex items-center space-x-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 50 50\">
                                    <circle cx=\"22.875\" cy=\"4.625\" r=\"4.125\" fill=\"currentColor\"/>
                                    <path fill=\"currentColor\" d=\"M22 10h-3c-2.82 0-5 1.719-5 4.587V27c0 2 3 2 3 0V15h1v32c0 1.233.768 2 2 2c1.235 0 2-.767 2-2zm13 15l-4.017-10.357C30.634 12.322 28.29 10 25.615 10H23v23.783c.5.002 1 .075 1 .217v13c0 1.04.917 2 2 2c1.086 0 2-.961 2-2V34h3.869c.362 0 1.044-.654 1.044-1c0-.08.029-.931 0-1l-5.909-16.237l-.034-.167c0-.237.199-.429.447-.429c.211 0 .388.141.435.329L31.869 26c.267.601 1.365 1 2.087 1c.965 0 1.065-1.895 1.044-2\"/>
                                </svg>
                                <p>";
        // line 85
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "gender", [], "any", false, false, false, 85)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 85, $this->source); })()), "gender", [], "any", false, false, false, 85), "html", null, true);
        } else {
            yield "Choisissez un genre.";
        }
        yield "</p>
                            </div>

                            ";
        // line 88
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 88, $this->source); })()), "user", [], "any", false, false, false, 88), "id", [], "any", false, false, false, 88) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 88, $this->source); })()), "id", [], "any", false, false, false, 88)))) {
            // line 89
            yield "                            <button id=\"edit-gender-btn\" class=\"ml-2 text-yellow-500 z-10 focus:outline-none\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"inline h-6 w-6\" viewBox=\"0 0 24 24\">
                                    <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m14.304 4.844l2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565l6.844-6.844a2.015 2.015 0 0 1 2.852 0Z\"/>
                                </svg>
                            </button>
                            ";
        }
        // line 95
        yield "
                            <form id=\"gender-form\" action=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit_gender");
        yield "\" method=\"POST\" class=\"hidden\">
                                <select name=\"gender\" class=\"bg-gray-800 text-gray-100 rounded-md p-2\">
                                    <option value=\"Homme\" ";
        // line 98
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "gender", [], "any", false, false, false, 98) == "Homme")) {
            yield "selected";
        }
        yield ">Homme</option>
                                    <option value=\"Femme\" ";
        // line 99
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 99, $this->source); })()), "gender", [], "any", false, false, false, 99) == "Femme")) {
            yield "selected";
        }
        yield ">Femme</option>
                                </select>
                                <button type=\"submit\" class=\"bg-purple-500 text-white px-4 py-2 rounded-md ml-2\">Sauvegarder</button>
                            </form>
                        </div>

                        <div class=\"flex items-center space-x-2 mt-4 relative\">
                            <div id=\"birthdate-display\" class=\"flex items-center space-x-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 24 24\">
                                    <path fill=\"none\" stroke=\"currentColor\" d=\"M7.5 6V1m10 5V1m4 16v4.5h-18v-3m17.863-10H3.352M.5 18.25v.25h17.9l.15-.25l.234-.491A28 28 0 0 0 21.5 5.729V3.5h-18v2.128A28 28 0 0 1 .743 17.744z\"/>
                                </svg>
                                <p>";
        // line 110
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "birthdate", [], "any", false, false, false, 110)) {
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "birthdate", [], "any", false, false, false, 110)], "method", false, false, false, 110), "y", [], "any", false, false, false, 110), "html", null, true);
            yield " ans ";
        } else {
            yield "Choisissez une date de naissance.";
        }
        yield "</p>
                            </div>

                            ";
        // line 113
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113)))) {
            // line 114
            yield "                            <button id=\"edit-birthdate-btn\" class=\"ml-2 text-yellow-500 z-10 focus:outline-none\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"inline h-6 w-6\" viewBox=\"0 0 24 24\">
                                    <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m14.304 4.844l2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565l6.844-6.844a2.015 2.015 0 0 1 2.852 0Z\"/>
                                </svg>
                            </button>
                            ";
        }
        // line 120
        yield "
                            <form id=\"birthdate-form\" action=\"";
        // line 121
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit_birthdate");
        yield "\" method=\"POST\" class=\"hidden\">
                                <input type=\"date\" name=\"birthdate\" class=\"bg-gray-800 text-gray-100 rounded-md p-2\" value=\"";
        // line 122
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 122, $this->source); })()), "birthdate", [], "any", false, false, false, 122)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 122, $this->source); })()), "birthdate", [], "any", false, false, false, 122), "Y-m-d"), "html", null, true)) : (yield ""));
        yield "\">
                                <button type=\"submit\" class=\"bg-purple-500 text-white px-4 py-2 rounded-md ml-2\">Sauvegarder</button>
                            </form>
                        </div>
                </div>
            </div>
            ";
        // line 128
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 128, $this->source); })()), "user", [], "any", false, false, false, 128), "id", [], "any", false, false, false, 128) == CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 128, $this->source); })()), "id", [], "any", false, false, false, 128)))) {
            // line 129
            yield "                <div class=\"w-full text-gray-100 glassmorphism p-6 rounded-lg mb-8 relative group\">
                    <h2 class=\"text-2xl font-semibold mb-4\">Biographie
                        <span class=\"ml-1 text-yellow-500 cursor-pointer\" id=\"edit-bio-btn\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"inline h-7 w-7\" viewBox=\"0 0 24 24\">
                                <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m14.304 4.844l2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565l6.844-6.844a2.015 2.015 0 0 1 2.852 0Z\"/>
                            </svg>
                        </span>
                    </h2>
                    <form id=\"bio-form\" action=\"";
            // line 137
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit_bio");
            yield "\" method=\"POST\">
                        <textarea id=\"bio-textarea\" name=\"bio\" class=\"w-full h-32 p-2 bg-gray-800 text-gray-100 rounded-md hidden\" rows=\"5\">";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 138, $this->source); })()), "bio", [], "any", false, false, false, 138), "html", null, true);
            yield "</textarea>
                        <div id=\"bio-display\">";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 139, $this->source); })()), "bio", [], "any", false, false, false, 139), "html", null, true);
            yield "</div>
                        <button type=\"submit\" class=\"bg-purple-500 text-white px-4 py-2 rounded-md mt-4 hidden\" id=\"save-bio-btn\">Sauvegarder</button>
                    </form>
                </div>
            ";
        } else {
            // line 144
            yield "                <div class=\"w-full text-gray-100 glassmorphism p-6 rounded-lg mb-8\">
                    <h2 class=\"text-2xl font-semibold mb-4\">Biographie</h2>
                    <p>";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 146, $this->source); })()), "bio", [], "any", false, false, false, 146), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        // line 149
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
            preview.src = reader.result;
            form.submit();
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
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

        const editGenderBtn = document.getElementById('edit-gender-btn');
        const genderDisplay = document.getElementById('gender-display');
        const genderForm = document.getElementById('gender-form');

        editGenderBtn.addEventListener('click', function() {
            genderDisplay.classList.add('hidden');
            genderForm.classList.remove('hidden');
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
        return array (  347 => 149,  341 => 146,  337 => 144,  329 => 139,  325 => 138,  321 => 137,  311 => 129,  309 => 128,  300 => 122,  296 => 121,  293 => 120,  285 => 114,  283 => 113,  271 => 110,  255 => 99,  249 => 98,  244 => 96,  241 => 95,  233 => 89,  231 => 88,  220 => 85,  211 => 78,  200 => 70,  197 => 69,  195 => 68,  180 => 55,  174 => 53,  172 => 52,  168 => 51,  162 => 47,  154 => 43,  152 => 42,  141 => 34,  136 => 31,  128 => 27,  126 => 26,  114 => 17,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil de {{ user.username }}{% endblock %}

{% block body %}
<div class=\"glassmorphism-warning pr-5 pl-5\">
    <h1 class=\"text-2xl font-semibold text-center text-gray-100 mb-5 mt-5\">
        Mode Edition du Profil
        <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"inline h-10 w-10 mb-3 text-yellow-500\" viewBox=\"0 0 24 24\">
            <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m14.304 4.844l2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565l6.844-6.844a2.015 2.015 0 0 1 2.852 0Z\"/>
        </svg>
    </h1>

    <div class=\"relative flex flex-col lg:flex-row w-full min-w-0 mt-6 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable space-y-4 lg:space-y-0 lg:space-x-6\">
        <div class=\"lg:w-1/4 w-full shadow-lg p-6 flex-auto min-h-[250px] glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl\">
            <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center relative group\">
                <img id=\"banner-preview\" src=\"{{ user.banner ? asset('uploads/banners/' ~ user.banner) : 'https://via.placeholder.com/150' }}\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">

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
                    <div class=\"w-full flex justify-center lg:justify-end lg:absolute lg:top-4 lg:right-4 mt-4 lg:mt-0 mb-4\">
                        <a href=\"{{ path('app_profile_show', {'id': user.id}) }}\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-red-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism-player-left flex items-center space-x-2\">
                            <span>Retour</span>
                            <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\">
                                <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m9 11l-4 4l4 4m-4-4h11a4 4 0 0 0 0-8h-1\"/>
                            </svg>
                        </a>
                    </div>
                    {% endif %}

                        <div class=\"flex items-center space-x-2 mt-4 relative\">
                            <div id=\"gender-display\" class=\"flex items-center space-x-2\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 50 50\">
                                    <circle cx=\"22.875\" cy=\"4.625\" r=\"4.125\" fill=\"currentColor\"/>
                                    <path fill=\"currentColor\" d=\"M22 10h-3c-2.82 0-5 1.719-5 4.587V27c0 2 3 2 3 0V15h1v32c0 1.233.768 2 2 2c1.235 0 2-.767 2-2zm13 15l-4.017-10.357C30.634 12.322 28.29 10 25.615 10H23v23.783c.5.002 1 .075 1 .217v13c0 1.04.917 2 2 2c1.086 0 2-.961 2-2V34h3.869c.362 0 1.044-.654 1.044-1c0-.08.029-.931 0-1l-5.909-16.237l-.034-.167c0-.237.199-.429.447-.429c.211 0 .388.141.435.329L31.869 26c.267.601 1.365 1 2.087 1c.965 0 1.065-1.895 1.044-2\"/>
                                </svg>
                                <p>{% if user.gender %} {{ user.gender }}{% else %}Choisissez un genre.{% endif %}</p>
                            </div>

                            {% if app.user and app.user.id == user.id %}
                            <button id=\"edit-gender-btn\" class=\"ml-2 text-yellow-500 z-10 focus:outline-none\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"inline h-6 w-6\" viewBox=\"0 0 24 24\">
                                    <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"m14.304 4.844l2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565l6.844-6.844a2.015 2.015 0 0 1 2.852 0Z\"/>
                                </svg>
                            </button>
                            {% endif %}

                            <form id=\"gender-form\" action=\"{{ path('app_profile_edit_gender') }}\" method=\"POST\" class=\"hidden\">
                                <select name=\"gender\" class=\"bg-gray-800 text-gray-100 rounded-md p-2\">
                                    <option value=\"Homme\" {% if user.gender == 'Homme' %}selected{% endif %}>Homme</option>
                                    <option value=\"Femme\" {% if user.gender == 'Femme' %}selected{% endif %}>Femme</option>
                                </select>
                                <button type=\"submit\" class=\"bg-purple-500 text-white px-4 py-2 rounded-md ml-2\">Sauvegarder</button>
                            </form>
                        </div>

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
                        <div id=\"bio-display\">{{ user.bio }}</div>
                        <button type=\"submit\" class=\"bg-purple-500 text-white px-4 py-2 rounded-md mt-4 hidden\" id=\"save-bio-btn\">Sauvegarder</button>
                    </form>
                </div>
            {% else %}
                <div class=\"w-full text-gray-100 glassmorphism p-6 rounded-lg mb-8\">
                    <h2 class=\"text-2xl font-semibold mb-4\">Biographie</h2>
                    <p>{{ user.bio }}</p>
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
            preview.src = reader.result;
            form.submit();
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
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

        const editGenderBtn = document.getElementById('edit-gender-btn');
        const genderDisplay = document.getElementById('gender-display');
        const genderForm = document.getElementById('gender-form');

        editGenderBtn.addEventListener('click', function() {
            genderDisplay.classList.add('hidden');
            genderForm.classList.remove('hidden');
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
