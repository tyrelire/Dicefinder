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
class __TwigTemplate_635cb612197c425eeac1b8bcf239ba11 extends Template
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
        yield "<div class=\"relative flex flex-col lg:flex-row w-full min-w-0 mt-10 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable space-y-4 lg:space-y-0 lg:space-x-6\">
    <div class=\"lg:w-1/4 w-full shadow-lg p-6 flex-auto min-h-[250px] glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl\">
        <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center\">
            ";
        // line 9
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 9, $this->source); })()), "banner", [], "any", false, false, false, 9)) {
            // line 10
            yield "                <img id=\"banner-preview\" src=\"";
            ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "banner", [], "any", false, false, false, 10)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/banners/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 10, $this->source); })()), "banner", [], "any", false, false, false, 10))), "html", null, true)) : (yield ""));
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
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "isVip", [], "any", false, false, false, 25)) {
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
            yield "\" class=\"glassmorphism-purple px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center space-x-2\">
                            <span>Modifier le profil</span>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6\" viewBox=\"0 0 26 26\">
                                <path fill=\"currentColor\" d=\"M20.094.25a2.25 2.25 0 0 0-1.625.656l-1 1.031l6.593 6.625l1-1.03a2.32 2.32 0 0 0 0-3.282L21.75.937A2.36 2.36 0 0 0 20.094.25m-3.75 2.594l-1.563 1.5l6.875 6.875L23.25 9.75zM13.78 5.438L2.97 16.155a.98.98 0 0 0-.5.625L.156 24.625a.975.975 0 0 0 1.219 1.219l7.844-2.313a.98.98 0 0 0 .781-.656l10.656-10.563l-1.468-1.468L8.25 21.813l-4.406 1.28l-.938-.937l1.344-4.593L15.094 6.75zm2.375 2.406l-10.968 11l1.593.343l.219 1.47l11-10.97z\"/>
                            </svg>
                        </a>
                    ";
        }
        // line 49
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 49, $this->source); })()), "user", [], "any", false, false, false, 49), "id", [], "any", false, false, false, 49) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)))) {
            // line 50
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 50, $this->source); })()), "isVip", [], "any", false, false, false, 50)) {
                // line 51
                yield "                        ";
            } else {
                // line 52
                yield "                            <button 
                                class=\"glassmorphism-vip-gift px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center space-x-2\"
                                id=\"giftVipButton\"
                                data-recipient-username=\"";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "username", [], "any", false, false, false, 55), "html", null, true);
                yield "\">
                                <span>Offrir VIP</span>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" class=\"ml-2\">
                                    <path fill=\"currentColor\" d=\"M12 8l3 5.2l3-2.7l-.7 3.5H6.7L6 10.5l3 2.7zm0-4l-3.5 6L3 5l2 11h14l2-11l-5.5 5zm7 14H5v1c0 .6.4 1 1 1h12c.6 0 1-.4 1-1z\"/>
                                </svg>
                            </button>
                        ";
            }
            // line 62
            yield "                        <a href=\"javascript:void(0);\" 
                        class=\"glassmorphism-send-message px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center space-x-2\" 
                        data-to-user=\"";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 64, $this->source); })()), "id", [], "any", false, false, false, 64), "html", null, true);
            yield "\" 
                        id=\"sendMessageBtn\">
                            <span>Envoyer un message</span>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6\" viewBox=\"0 0 24 24\">
                                <path fill=\"currentColor\" d=\"M4 4h16v12H5.17L4 17.17zm0-2c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm2 10h12v2H6zm0-3h12v2H6zm0-3h12v2H6z\"/>
                            </svg>
                        </a>


                    ";
        }
        // line 74
        yield "                    ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "id", [], "any", false, false, false, 74) != CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "id", [], "any", false, false, false, 74)))) {
            // line 75
            yield "                        ";
            if (((isset($context["relationshipStatus"]) || array_key_exists("relationshipStatus", $context) ? $context["relationshipStatus"] : (function () { throw new RuntimeError('Variable "relationshipStatus" does not exist.', 75, $this->source); })()) == "pending")) {
                // line 76
                yield "                            <button class=\"glassmorphism-warning px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                                Demande d'ami en attente
                            </button>
                        ";
            } elseif ((            // line 79
(isset($context["relationshipStatus"]) || array_key_exists("relationshipStatus", $context) ? $context["relationshipStatus"] : (function () { throw new RuntimeError('Variable "relationshipStatus" does not exist.', 79, $this->source); })()) == "accepted")) {
                // line 80
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_friend", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
                yield "\" class=\"glassmorphism-player-left px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center space-x-2\">
                                <span>Retirer des amis</span>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 48 48\">
                                    <g fill=\"none\" stroke=\"currentColor\" stroke-linejoin=\"round\" stroke-width=\"4\">
                                        <path fill=\"currentColor\" d=\"M19 20a7 7 0 1 0 0-14a7 7 0 0 0 0 14Z\"/>
                                        <path stroke-linecap=\"round\" d=\"m33 31l8 8m-8 0l8-8m-14-3h-8.2c-4.48 0-6.72 0-8.432.872a8 8 0 0 0-3.496 3.496C6 34.08 6 36.32 6 40.8V42h21\"/>
                                    </g>
                                </svg>
                            </a>
                            <a href=\"";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("block_user", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 89, $this->source); })()), "id", [], "any", false, false, false, 89)]), "html", null, true);
                yield "\" class=\"glassmorphism-warning px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center space-x-2\">
                                <span>Bloquer</span>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 2048 2048\">
                                    <path fill=\"currentColor\" d=\"M960 256q115 0 221 29t199 84t168 130t130 168t84 199t30 222q0 115-29 221t-84 199t-130 168t-168 130t-199 84t-222 30q-115 0-221-29t-199-84t-168-130t-130-168t-84-199t-30-222q0-115 29-221t84-199t130-168t168-130t199-84t222-30m0 1536q124 0 239-41t211-122L419 638q-80 95-121 210t-42 240q0 97 25 187t71 168t110 142t143 111t168 71t187 25m541-254q80-95 121-210t42-240q0-97-25-187t-71-168t-110-142t-143-111t-168-71t-187-25q-124 0-239 41T510 547z\"/>
                                </svg>
                            </a>
                        ";
            } else {
                // line 96
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_friend", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 96, $this->source); })()), "id", [], "any", false, false, false, 96)]), "html", null, true);
                yield "\" class=\"glassmorphism-acceptance px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center space-x-2\">
                                <span>Ajouter comme ami</span>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6\" viewBox=\"0 0 24 24\">
                                    <path fill=\"currentColor\" d=\"M11.5 4a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7M6 7.5a5.5 5.5 0 1 1 11 0a5.5 5.5 0 0 1-11 0M19 13v4h4v2h-4v4h-2v-4h-4v-2h4v-4zM8 16a4 4 0 0 0-4 4h8.05v2H2v-2a6 6 0 0 1 6-6h4v2z\"/>
                                </svg>
                            </a>
                        ";
            }
            // line 103
            yield "                    ";
        }
        // line 104
        yield "                </div>
                ";
        // line 105
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 105, $this->source); })()), "birthdate", [], "any", false, false, false, 105)) {
            // line 106
            yield "                    <div class=\"flex items-center space-x-2\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 24 24\">
                            <path fill=\"none\" stroke=\"currentColor\" d=\"M7.5 6V1m10 5V1m4 16v4.5h-18v-3m17.863-10H3.352M.5 18.25v.25h17.9l.15-.25l.234-.491A28 28 0 0 0 21.5 5.729V3.5h-18v2.128A28 28 0 0 1 .743 17.744z\"/>
                        </svg>
                        <p>";
            // line 110
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 110, $this->source); })()), "birthdate", [], "any", false, false, false, 110)], "method", false, false, false, 110), "y", [], "any", false, false, false, 110), "html", null, true);
            yield " ans</p>
                    </div>
                ";
        }
        // line 113
        yield "                ";
        $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 113, $this->source); })()), "getCreatedAt", [], "any", false, false, false, 113)], "method", false, false, false, 113);
        // line 114
        yield "                <div class=\"flex items-center space-x-2\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 512 512\">
                        <path fill=\"currentColor\" d=\"M138.798 35.342L28.73 114.268l95.777 29.095l111.305-87.09zm112.986 31.082l-118.047 89.96l51.07 131.102l8.534-7.455l4.23-15.708a18.338 13.102 76.863 0 1-9.08-20.45a18.338 13.102 76.863 0 1 10.997-13.727a18.338 13.102 76.863 0 1 3.62.53a18.338 13.102 76.863 0 1 3.113 1.544l7.94-29.48a9 9 0 0 1 .353-1.04l.058-.128a9 9 0 0 1 .32-.685l.09-.153a9 9 0 0 1 .37-.625a9 9 0 0 1 .534-.723l.066-.074a9 9 0 0 1 .54-.594a9 9 0 0 1 .65-.593l.004-.002a9 9 0 0 1 .46-.342a9 9 0 0 1 .266-.197a9 9 0 0 1 .502-.3a9 9 0 0 1 .27-.157a9 9 0 0 1 .44-.208a9 9 0 0 1 .38-.178a9 9 0 0 1 .437-.152a9 9 0 0 1 .41-.143a9 9 0 0 1 .404-.1a9 9 0 0 1 .47-.114a9 9 0 0 1 .51-.07a9 9 0 0 1 .37-.05h.01l.01-.003l33.624-2.873a18.338 13.102 76.863 0 1 10.326-9.777a18.338 13.102 76.863 0 1 3.622.53a18.338 13.102 76.863 0 1 8.527 7.327l13.043-1.113L251.785 66.42zM137.25 74.03a9.8 19.77 77.916 0 1 12.798 8.734a9.8 19.77 77.916 0 1-21.938 11.998a9.8 19.77 77.916 0 1-16.57-8.602a9.8 19.77 77.916 0 1 21.938-12a9.8 19.77 77.916 0 1 3.77-.13zm100.228 23.517a18.338 13.102 76.863 0 1 .002 0a18.338 13.102 76.863 0 1 3.62.53a18.338 13.102 76.863 0 1 12.112 21.94a18.338 13.102 76.863 0 1-14.617 13.196a18.338 13.102 76.863 0 1-12.114-21.94a18.338 13.102 76.863 0 1 10.998-13.726zM24.22 131.71l46.992 114.124l94.236 40.38l-45.988-125.57l-95.24-28.935zm147.886 17.43a18.338 13.102 76.863 0 1 3.622.528a18.338 13.102 76.863 0 1 12.11 21.94a18.338 13.102 76.863 0 1-14.616 13.197a18.338 13.102 76.863 0 1-12.112-21.94a18.338 13.102 76.863 0 1 10.996-13.726zm-75.123 13.016a19.454 9.134 59.254 0 1 16.955 15.078a19.454 9.134 59.254 0 1-.425 19.485A19.454 9.134 59.254 0 1 95.6 181.78a19.454 9.134 59.254 0 1 .424-19.48a19.454 9.134 59.254 0 1 .96-.144zm263.393 40.21l-112.102 9.577l113.762 79.926l113.598-16.956l-115.258-72.55zM70.82 212.022A19.454 9.134 59.254 0 1 87.777 227.1a19.454 9.134 59.254 0 1-.425 19.484a19.454 9.134 59.254 0 1-17.913-14.938a19.454 9.134 59.254 0 1 .425-19.482a19.454 9.134 59.254 0 1 .96-.14zm157.378 7.813L186.66 374.023l115.616 99.454l47.147-168.47l-121.225-85.17zm126.987 11.168a21.76 8.898 15.267 0 1 19.693 4.783a21.76 8.898 15.267 0 1 7.607 14.244a21.76 8.898 15.267 0 1-28.886-3.182a21.76 8.898 15.267 0 1-7.61-14.244a21.76 8.898 15.267 0 1 9.195-1.6zM487.78 291.3L366.9 309.343l-46.823 167.316l116.297-31.77zm-181.808 10.8a25.834 15.573 84.277 0 1 4.238.943a25.834 15.573 84.277 0 1 12.873 31.72a25.834 15.573 84.277 0 1-18.105 17.893a25.834 15.573 84.277 0 1-12.874-31.72a25.834 15.573 84.277 0 1 13.868-18.836m154.086 11.636a13.237 21.96 28.62 0 1 7.673 4.13a13.237 21.96 28.62 0 1-6.176 28.435a13.237 21.96 28.62 0 1-21.287 3.878a13.237 21.96 28.62 0 1 6.175-28.434a13.237 21.96 28.62 0 1 13.616-8.008zM391.362 324.4a13.237 21.96 28.62 0 1 7.672 4.13a13.237 21.96 28.62 0 1-6.176 28.435a13.237 21.96 28.62 0 1-21.287 3.877a13.237 21.96 28.62 0 1 6.177-28.434a13.237 21.96 28.62 0 1 13.615-8.008zm-173.996 13.305a25.834 15.573 84.277 0 1 4.24.945a25.834 15.573 84.277 0 1 12.872 31.72a25.834 15.573 84.277 0 1-18.106 17.894a25.834 15.573 84.277 0 1-12.873-31.72a25.834 15.573 84.277 0 1 13.866-18.84zm212.278 60.87a13.237 21.96 28.62 0 1 7.67 4.13a13.237 21.96 28.62 0 1-6.174 28.434a13.237 21.96 28.62 0 1-21.287 3.874a13.237 21.96 28.62 0 1 6.176-28.434a13.237 21.96 28.62 0 1 13.616-8.007z\"/>
                    </svg>
                    <p>";
        // line 118
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 118, $this->source); })()), "y", [], "any", false, false, false, 118) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 118, $this->source); })()), "y", [], "any", false, false, false, 118) . " an") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 118, $this->source); })()), "y", [], "any", false, false, false, 118) > 1)) ? ("s") : ("")))) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 118, $this->source); })()), "m", [], "any", false, false, false, 118) > 0)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 118, $this->source); })()), "m", [], "any", false, false, false, 118) . " mois")) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 118, $this->source); })()), "d", [], "any", false, false, false, 118) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 118, $this->source); })()), "d", [], "any", false, false, false, 118) . " jour") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 118, $this->source); })()), "d", [], "any", false, false, false, 118) > 1)) ? ("s") : ("")))) : ("1 minute")))))), "html", null, true);
        yield " sur DiceFinder</p>
                </div>
            </div>
        </div>

        <div class=\"w-full text-gray-100 glassmorphism p-6 rounded-lg mb-8\">
            <h2 class=\"text-2xl font-semibold mb-4\">Biographie</h2>
            <p>";
        // line 125
        ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "bio", [], "any", false, false, false, 125)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 125, $this->source); })()), "bio", [], "any", false, false, false, 125), "html", null, true)) : (yield "Aucune biographie disponible."));
        yield "</p>
        </div>
        <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-4\">
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism text-center\" aria-controls=\"owned-jdrs\">
                ";
        // line 129
        yield ((((isset($context["ownedJDRCount"]) || array_key_exists("ownedJDRCount", $context) ? $context["ownedJDRCount"] : (function () { throw new RuntimeError('Variable "ownedJDRCount" does not exist.', 129, $this->source); })()) == 1)) ? ("Univers créé") : ("Univers créés"));
        yield "
            </a>
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism text-center\" aria-controls=\"joined-jdrs\">
                ";
        // line 132
        yield ((((isset($context["joinedJDRCount"]) || array_key_exists("joinedJDRCount", $context) ? $context["joinedJDRCount"] : (function () { throw new RuntimeError('Variable "joinedJDRCount" does not exist.', 132, $this->source); })()) == 1)) ? ("Univers rejoint") : ("Univers rejoints"));
        yield "
            </a>
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism text-center\" aria-controls=\"favorite-jdrs\">
                ";
        // line 135
        yield ((((isset($context["favoriteJDRCount"]) || array_key_exists("favoriteJDRCount", $context) ? $context["favoriteJDRCount"] : (function () { throw new RuntimeError('Variable "favoriteJDRCount" does not exist.', 135, $this->source); })()) == 1)) ? ("Univers en favori") : ("Univers en favoris"));
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
        // line 147
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ownedJDRs"]) || array_key_exists("ownedJDRs", $context) ? $context["ownedJDRs"] : (function () { throw new RuntimeError('Variable "ownedJDRs" does not exist.', 147, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 148
            yield "                    <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                        style=\"will-change: transform;\">
                        <a href=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 150)]), "html", null, true);
            yield "\" class=\"block\">
                            <div class=\"relative\">
                                <img src=\"";
            // line 152
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "picture", [], "any", false, false, false, 152))), "html", null, true);
            yield "\"
                                    alt=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 153), "html", null, true);
            yield " image\"
                                    class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 154
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 154)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 154))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                <div class=\"absolute top-2 right-2\">
                                    <span class=\"text-sm font-bold px-2 py-1 rounded
                                        ";
            // line 157
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "status", [], "any", false, false, false, 157) == "nouveau")) {
                yield " bg-green-600
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 158
$context["groupe"], "status", [], "any", false, false, false, 158) == "en_cours")) {
                yield " bg-blue-500
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 159
$context["groupe"], "status", [], "any", false, false, false, 159) == "termine")) {
                yield " bg-red-500
                                        ";
            } else {
                // line 160
                yield " bg-gray-700
                                        ";
            }
            // line 161
            yield " text-white\">
                                        ";
            // line 162
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "status", [], "any", false, false, false, 162) == "nouveau")) {
                // line 163
                yield "                                            Nouveau
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 164
$context["groupe"], "status", [], "any", false, false, false, 164) == "en_cours")) {
                // line 165
                yield "                                            En Cours
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 166
$context["groupe"], "status", [], "any", false, false, false, 166) == "termine")) {
                // line 167
                yield "                                            Terminé
                                        ";
            } else {
                // line 169
                yield "                                            Statut inconnu
                                        ";
            }
            // line 171
            yield "                                    </span>
                                </div>
                            </div>
                        </a>
                        <div class=\"mb-2\">
                            <a href=\"";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 176)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 176), "html", null, true);
            yield "</a>
                        </div>
                        <div class=\"flex justify-between items-center mt-2\">
                            <a href=\"";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 179), "id", [], "any", false, false, false, 179)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                ";
            // line 180
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 180), "avatar", [], "any", false, false, false, 180)) {
                // line 181
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 181), "avatar", [], "any", false, false, false, 181))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                ";
            } else {
                // line 183
                yield "                                    <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                ";
            }
            // line 185
            yield "                                <div class=\"ml-2\">
                                    <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                    <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 187
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 187), "username", [], "any", false, false, false, 187), "html", null, true);
            yield "</p>
                                </div>
                            </a>
                            <div class=\"flex items-center text-right gap-1\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                </svg>
                                ";
            // line 194
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 194)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 194))) {
                // line 195
                yield "                                    <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                ";
            } else {
                // line 197
                yield "                                    <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 197)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 197), "html", null, true);
                yield "</p>
                                ";
            }
            // line 199
            yield "                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 203
            yield "                    <p class=\"text-gray-400\">Aucun nouveau jeu de rôle disponible.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        yield "            </div>
        </div>
    </div>
        <div id=\"joined-jdrs\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                        ";
        // line 212
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joinedJDRs"]) || array_key_exists("joinedJDRs", $context) ? $context["joinedJDRs"] : (function () { throw new RuntimeError('Variable "joinedJDRs" does not exist.', 212, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["joined"]) {
            // line 213
            yield "                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\">
                                <a href=\"";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "id", [], "any", false, false, false, 214)]), "html", null, true);
            yield "\" class=\"block\">
                                    <div class=\"relative\">
                                        <img src=\"";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "picture", [], "any", false, false, false, 216))), "html", null, true);
            yield "\" 
                                            alt=\"";
            // line 217
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "title", [], "any", false, false, false, 217), "html", null, true);
            yield " image\" 
                                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 218
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 218)) >= CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 218))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                        <div class=\"absolute top-2 right-2\">
                                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                                ";
            // line 221
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "status", [], "any", false, false, false, 221) == "nouveau")) {
                yield " bg-green-600
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 222
$context["joined"], "status", [], "any", false, false, false, 222) == "en_cours")) {
                yield " bg-blue-500
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 223
$context["joined"], "status", [], "any", false, false, false, 223) == "termine")) {
                yield " bg-red-500
                                                ";
            } else {
                // line 224
                yield " bg-gray-700
                                                ";
            }
            // line 225
            yield " text-white\">
                                                ";
            // line 226
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "status", [], "any", false, false, false, 226) == "nouveau")) {
                // line 227
                yield "                                                    Nouveau
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 228
$context["joined"], "status", [], "any", false, false, false, 228) == "en_cours")) {
                // line 229
                yield "                                                    En Cours
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 230
$context["joined"], "status", [], "any", false, false, false, 230) == "termine")) {
                // line 231
                yield "                                                    Terminé
                                                ";
            } else {
                // line 233
                yield "                                                    Statut inconnu
                                                ";
            }
            // line 235
            yield "                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"mb-2\">
                                    <a href=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "id", [], "any", false, false, false, 240)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "title", [], "any", false, false, false, 240), "html", null, true);
            yield "</a>
                                </div>
                                <div class=\"flex justify-between items-center mt-2\">
                                    <a href=\"";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 243), "id", [], "any", false, false, false, 243)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                        ";
            // line 244
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 244), "avatar", [], "any", false, false, false, 244)) {
                // line 245
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 245), "avatar", [], "any", false, false, false, 245))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                        ";
            } else {
                // line 247
                yield "                                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                        ";
            }
            // line 249
            yield "                                        <div class=\"ml-2\">
                                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 251), "username", [], "any", false, false, false, 251), "html", null, true);
            yield "</p>
                                        </div>
                                    </a>
                                    <div class=\"flex items-center text-right gap-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                        </svg>
                                        ";
            // line 258
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 258)) >= CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 258))) {
                // line 259
                yield "                                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                        ";
            } else {
                // line 261
                yield "                                            <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 261)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 261), "html", null, true);
                yield "</p>
                                        ";
            }
            // line 263
            yield "                                    </div>
                                </div>
                                <div class=\"mt-2 text-xs text-gray-400\">
                                    <p>Rejoint depuis : ";
            // line 266
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "time_since_joined", [], "any", false, false, false, 266), "html", null, true);
            yield "</p>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 270
            yield "                            <p class=\"text-gray-400\">Aucun univers rejoint.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joined'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        yield "                    </div>
                </div>
            </div>
        </div>
        <div id=\"favorite-jdrs\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                        ";
        // line 280
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favoriteJDRs"]) || array_key_exists("favoriteJDRs", $context) ? $context["favoriteJDRs"] : (function () { throw new RuntimeError('Variable "favoriteJDRs" does not exist.', 280, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 281
            yield "                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                                aria-controls=\"favorite-jdrs\" style=\"will-change: transform;\">
                                <a href=\"";
            // line 283
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 283)]), "html", null, true);
            yield "\" class=\"block\">
                                    <div class=\"relative\">
                                        <img src=\"";
            // line 285
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "picture", [], "any", false, false, false, 285))), "html", null, true);
            yield "\" 
                                            alt=\"";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 286), "html", null, true);
            yield " image\" 
                                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 287
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 287)) >= CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 287))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                        <div class=\"absolute top-2 right-2\">
                                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                                ";
            // line 290
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "status", [], "any", false, false, false, 290) == "nouveau")) {
                yield " bg-green-600
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 291
$context["favorite"], "status", [], "any", false, false, false, 291) == "en_cours")) {
                yield " bg-blue-500
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 292
$context["favorite"], "status", [], "any", false, false, false, 292) == "termine")) {
                yield " bg-red-500
                                                ";
            } else {
                // line 293
                yield " bg-gray-700
                                                ";
            }
            // line 294
            yield " text-white\">
                                                ";
            // line 295
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "status", [], "any", false, false, false, 295) == "nouveau")) {
                // line 296
                yield "                                                    Nouveau
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 297
$context["favorite"], "status", [], "any", false, false, false, 297) == "en_cours")) {
                // line 298
                yield "                                                    En Cours
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 299
$context["favorite"], "status", [], "any", false, false, false, 299) == "termine")) {
                // line 300
                yield "                                                    Terminé
                                                ";
            } else {
                // line 302
                yield "                                                    Statut inconnu
                                                ";
            }
            // line 304
            yield "                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"mb-2\">
                                    <a href=\"";
            // line 309
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 309)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 309), "html", null, true);
            yield "</a>
                                </div>
                                <div class=\"flex justify-between items-center mt-2\">
                                    <a href=\"";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 312), "id", [], "any", false, false, false, 312)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                        ";
            // line 313
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 313), "avatar", [], "any", false, false, false, 313)) {
                // line 314
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 314), "avatar", [], "any", false, false, false, 314))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                        ";
            } else {
                // line 316
                yield "                                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                        ";
            }
            // line 318
            yield "                                        <div class=\"ml-2\">
                                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 320
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 320), "username", [], "any", false, false, false, 320), "html", null, true);
            yield "</p>
                                        </div>
                                    </a>
                                    <div class=\"flex items-center text-right gap-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                        </svg>
                                        ";
            // line 327
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 327)) >= CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 327))) {
                // line 328
                yield "                                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                        ";
            } else {
                // line 330
                yield "                                            <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 330)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 330), "html", null, true);
                yield "</p>
                                        ";
            }
            // line 332
            yield "                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 336
            yield "                            <p class=\"text-gray-400\">Aucun JDR en favori.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['favorite'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 338
        yield "                    </div>
                </div>
            </div>
        </div>
        <div id=\"friends-container\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"flex flex-wrap justify-start gap-6\">
                        ";
        // line 346
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["friends"]) || array_key_exists("friends", $context) ? $context["friends"] : (function () { throw new RuntimeError('Variable "friends" does not exist.', 346, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["friend"]) {
            // line 347
            yield "                            <div class=\"lg:w-1/4 md:w-1/2 w-full shadow-lg p-6 glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl card-item\">
                                <a href=\"";
            // line 348
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "id", [], "any", false, false, false, 348)]), "html", null, true);
            yield "\" class=\"block w-full h-full\">
                                    <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center\">
                                        ";
            // line 350
            if (CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "banner", [], "any", false, false, false, 350)) {
                // line 351
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/banners/" . CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "banner", [], "any", false, false, false, 351))), "html", null, true);
                yield "\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
                                        ";
            } else {
                // line 353
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-banniere.jpg"), "html", null, true);
                yield "\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
                                        ";
            }
            // line 355
            yield "                                    </div>
                                    <div class=\"absolute top-44 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full border-4 border-gray-900 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50\">
                                        ";
            // line 357
            if (CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "avatar", [], "any", false, false, false, 357)) {
                // line 358
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "avatar", [], "any", false, false, false, 358))), "html", null, true);
                yield "\" alt=\"Photo de profil\" class=\"w-full h-full rounded-full object-cover\">
                                        ";
            } else {
                // line 360
                yield "                                            <img class=\"w-full h-full rounded-full object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                        ";
            }
            // line 362
            yield "                                    </div>
                                    <div class=\"mt-20 text-center\">
                                        <div class=\"flex justify-center items-center\">
                                            <h3 class=\"text-gray-100 font-bold text-xl\">";
            // line 365
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["friend"], "username", [], "any", false, false, false, 365), "html", null, true);
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
            // line 377
            yield "                            <p class=\"text-gray-400 w-full text-center\">Aucun ami trouvé.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['friend'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 379
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src=\"https://js.stripe.com/v3/\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabLinks = document.querySelectorAll('.tab-link');
        const tabContents = document.querySelectorAll('.tab-content');
        const sendMessageBtn = document.getElementById('sendMessageBtn');
        if (sendMessageBtn) {
            sendMessageBtn.addEventListener('click', function () {
                const userId = this.getAttribute('data-to-user');
                window.location.href = `/chat/message/\${userId}`;
            });
        }
        const urlParams = new URLSearchParams(window.location.search);
        const conversationIdParam = urlParams.get('conversationId');

        if (conversationIdParam) {
            const conversationListItem = document.getElementById(`conversation-\${conversationIdParam}`);
            if (conversationListItem) {
                const contactName = conversationListItem.innerText.replace('Conversation avec ', '');
                openConversation(conversationIdParam, contactName);
            }
        }
        const stripePublicKey = '";
        // line 407
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["stripePublicKey"]) || array_key_exists("stripePublicKey", $context) ? $context["stripePublicKey"] : (function () { throw new RuntimeError('Variable "stripePublicKey" does not exist.', 407, $this->source); })()), "html", null, true);
        yield "';
        if (!stripePublicKey) {
            console.error('Stripe public key is not set.');
        } else {
            const stripe = Stripe(stripePublicKey);

            const giftVipButton = document.getElementById('giftVipButton');
            if (giftVipButton) {
                giftVipButton.addEventListener('click', function () {
                    const recipientUsername = this.getAttribute('data-recipient-username');
                    fetch('/create-gift-checkout-session', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify({ gift_username: recipientUsername })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.id) {
                            stripe.redirectToCheckout({ sessionId: data.id });
                        } else {
                            alert('Erreur : ' + data.error);
                        }
                    })
                    .catch(error => console.error('Erreur:', error));
                });
            }
        }
        function resetTabs() {
            tabLinks.forEach(link => {
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
            } else {
                resetTabs();
                activateTab(tabLinks[0]);
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
        return array (  920 => 407,  890 => 379,  883 => 377,  866 => 365,  861 => 362,  855 => 360,  849 => 358,  847 => 357,  843 => 355,  837 => 353,  831 => 351,  829 => 350,  824 => 348,  821 => 347,  816 => 346,  806 => 338,  799 => 336,  791 => 332,  783 => 330,  779 => 328,  777 => 327,  767 => 320,  763 => 318,  757 => 316,  751 => 314,  749 => 313,  745 => 312,  737 => 309,  730 => 304,  726 => 302,  722 => 300,  720 => 299,  717 => 298,  715 => 297,  712 => 296,  710 => 295,  707 => 294,  703 => 293,  698 => 292,  694 => 291,  690 => 290,  682 => 287,  678 => 286,  674 => 285,  669 => 283,  665 => 281,  660 => 280,  650 => 272,  643 => 270,  634 => 266,  629 => 263,  621 => 261,  617 => 259,  615 => 258,  605 => 251,  601 => 249,  595 => 247,  589 => 245,  587 => 244,  583 => 243,  575 => 240,  568 => 235,  564 => 233,  560 => 231,  558 => 230,  555 => 229,  553 => 228,  550 => 227,  548 => 226,  545 => 225,  541 => 224,  536 => 223,  532 => 222,  528 => 221,  520 => 218,  516 => 217,  512 => 216,  507 => 214,  504 => 213,  499 => 212,  490 => 205,  483 => 203,  475 => 199,  467 => 197,  463 => 195,  461 => 194,  451 => 187,  447 => 185,  441 => 183,  435 => 181,  433 => 180,  429 => 179,  421 => 176,  414 => 171,  410 => 169,  406 => 167,  404 => 166,  401 => 165,  399 => 164,  396 => 163,  394 => 162,  391 => 161,  387 => 160,  382 => 159,  378 => 158,  374 => 157,  366 => 154,  362 => 153,  358 => 152,  353 => 150,  349 => 148,  344 => 147,  329 => 135,  323 => 132,  317 => 129,  310 => 125,  300 => 118,  294 => 114,  291 => 113,  285 => 110,  279 => 106,  277 => 105,  274 => 104,  271 => 103,  260 => 96,  250 => 89,  237 => 80,  235 => 79,  230 => 76,  227 => 75,  224 => 74,  211 => 64,  207 => 62,  197 => 55,  192 => 52,  189 => 51,  186 => 50,  183 => 49,  172 => 42,  170 => 41,  155 => 28,  149 => 26,  147 => 25,  143 => 24,  138 => 21,  132 => 19,  126 => 17,  124 => 16,  120 => 14,  114 => 12,  108 => 10,  106 => 9,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil de {{ user.username }}{% endblock %}

{% block body %}
<div class=\"relative flex flex-col lg:flex-row w-full min-w-0 mt-10 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable space-y-4 lg:space-y-0 lg:space-x-6\">
    <div class=\"lg:w-1/4 w-full shadow-lg p-6 flex-auto min-h-[250px] glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl\">
        <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center\">
            {% if user.banner %}
                <img id=\"banner-preview\" src=\"{{ user.banner ? asset('uploads/banners/' ~ user.banner) }}\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
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
                {% if user.isVip %}
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
                        <a href=\"{{ path('app_profile_edit') }}\" class=\"glassmorphism-purple px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center space-x-2\">
                            <span>Modifier le profil</span>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6\" viewBox=\"0 0 26 26\">
                                <path fill=\"currentColor\" d=\"M20.094.25a2.25 2.25 0 0 0-1.625.656l-1 1.031l6.593 6.625l1-1.03a2.32 2.32 0 0 0 0-3.282L21.75.937A2.36 2.36 0 0 0 20.094.25m-3.75 2.594l-1.563 1.5l6.875 6.875L23.25 9.75zM13.78 5.438L2.97 16.155a.98.98 0 0 0-.5.625L.156 24.625a.975.975 0 0 0 1.219 1.219l7.844-2.313a.98.98 0 0 0 .781-.656l10.656-10.563l-1.468-1.468L8.25 21.813l-4.406 1.28l-.938-.937l1.344-4.593L15.094 6.75zm2.375 2.406l-10.968 11l1.593.343l.219 1.47l11-10.97z\"/>
                            </svg>
                        </a>
                    {% endif %}
                    {% if app.user and app.user.id != user.id %}
                        {% if user.isVip %}
                        {% else  %}
                            <button 
                                class=\"glassmorphism-vip-gift px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center space-x-2\"
                                id=\"giftVipButton\"
                                data-recipient-username=\"{{ user.username }}\">
                                <span>Offrir VIP</span>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" class=\"ml-2\">
                                    <path fill=\"currentColor\" d=\"M12 8l3 5.2l3-2.7l-.7 3.5H6.7L6 10.5l3 2.7zm0-4l-3.5 6L3 5l2 11h14l2-11l-5.5 5zm7 14H5v1c0 .6.4 1 1 1h12c.6 0 1-.4 1-1z\"/>
                                </svg>
                            </button>
                        {% endif  %}
                        <a href=\"javascript:void(0);\" 
                        class=\"glassmorphism-send-message px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center space-x-2\" 
                        data-to-user=\"{{ user.id }}\" 
                        id=\"sendMessageBtn\">
                            <span>Envoyer un message</span>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6\" viewBox=\"0 0 24 24\">
                                <path fill=\"currentColor\" d=\"M4 4h16v12H5.17L4 17.17zm0-2c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm2 10h12v2H6zm0-3h12v2H6zm0-3h12v2H6z\"/>
                            </svg>
                        </a>


                    {% endif %}
                    {% if app.user and app.user.id != user.id %}
                        {% if relationshipStatus == 'pending' %}
                            <button class=\"glassmorphism-warning px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center\">
                                Demande d'ami en attente
                            </button>
                        {% elseif relationshipStatus == 'accepted' %}
                            <a href=\"{{ path('remove_friend', {'id': user.id}) }}\" class=\"glassmorphism-player-left px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center space-x-2\">
                                <span>Retirer des amis</span>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 48 48\">
                                    <g fill=\"none\" stroke=\"currentColor\" stroke-linejoin=\"round\" stroke-width=\"4\">
                                        <path fill=\"currentColor\" d=\"M19 20a7 7 0 1 0 0-14a7 7 0 0 0 0 14Z\"/>
                                        <path stroke-linecap=\"round\" d=\"m33 31l8 8m-8 0l8-8m-14-3h-8.2c-4.48 0-6.72 0-8.432.872a8 8 0 0 0-3.496 3.496C6 34.08 6 36.32 6 40.8V42h21\"/>
                                    </g>
                                </svg>
                            </a>
                            <a href=\"{{ path('block_user', {'id': user.id}) }}\" class=\"glassmorphism-warning px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center space-x-2\">
                                <span>Bloquer</span>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 2048 2048\">
                                    <path fill=\"currentColor\" d=\"M960 256q115 0 221 29t199 84t168 130t130 168t84 199t30 222q0 115-29 221t-84 199t-130 168t-168 130t-199 84t-222 30q-115 0-221-29t-199-84t-168-130t-130-168t-84-199t-30-222q0-115 29-221t84-199t130-168t168-130t199-84t222-30m0 1536q124 0 239-41t211-122L419 638q-80 95-121 210t-42 240q0 97 25 187t71 168t110 142t143 111t168 71t187 25m541-254q80-95 121-210t42-240q0-97-25-187t-71-168t-110-142t-143-111t-168-71t-187-25q-124 0-239 41T510 547z\"/>
                                </svg>
                            </a>
                        {% else %}
                            <a href=\"{{ path('add_friend', {'id': user.id}) }}\" class=\"glassmorphism-acceptance px-4 py-2 text-white font-semibold rounded-full transition-transform duration-300 hover:scale-105 hover:shadow-xl min-w-[150px] h-12 flex items-center justify-center space-x-2\">
                                <span>Ajouter comme ami</span>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-6 h-6\" viewBox=\"0 0 24 24\">
                                    <path fill=\"currentColor\" d=\"M11.5 4a3.5 3.5 0 1 0 0 7a3.5 3.5 0 0 0 0-7M6 7.5a5.5 5.5 0 1 1 11 0a5.5 5.5 0 0 1-11 0M19 13v4h4v2h-4v4h-2v-4h-4v-2h4v-4zM8 16a4 4 0 0 0-4 4h8.05v2H2v-2a6 6 0 0 1 6-6h4v2z\"/>
                                </svg>
                            </a>
                        {% endif %}
                    {% endif %}
                </div>
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
                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\">
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
                                <div class=\"mt-2 text-xs text-gray-400\">
                                    <p>Rejoint depuis : {{ joined.time_since_joined }}</p>
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
                    <div class=\"flex flex-wrap justify-start gap-6\">
                        {% for friend in friends %}
                            <div class=\"lg:w-1/4 md:w-1/2 w-full shadow-lg p-6 glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl card-item\">
                                <a href=\"{{ path('app_profile_show', {'id': friend.id}) }}\" class=\"block w-full h-full\">
                                    <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center\">
                                        {% if friend.banner %}
                                            <img src=\"{{ asset('uploads/banners/' ~ friend.banner) }}\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
                                        {% else %}
                                            <img src=\"{{ asset('images/default-banniere.jpg') }}\" alt=\"Bannière\" class=\"w-full h-full object-cover rounded-lg\">
                                        {% endif %}
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
                            <p class=\"text-gray-400 w-full text-center\">Aucun ami trouvé.</p>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src=\"https://js.stripe.com/v3/\"></script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabLinks = document.querySelectorAll('.tab-link');
        const tabContents = document.querySelectorAll('.tab-content');
        const sendMessageBtn = document.getElementById('sendMessageBtn');
        if (sendMessageBtn) {
            sendMessageBtn.addEventListener('click', function () {
                const userId = this.getAttribute('data-to-user');
                window.location.href = `/chat/message/\${userId}`;
            });
        }
        const urlParams = new URLSearchParams(window.location.search);
        const conversationIdParam = urlParams.get('conversationId');

        if (conversationIdParam) {
            const conversationListItem = document.getElementById(`conversation-\${conversationIdParam}`);
            if (conversationListItem) {
                const contactName = conversationListItem.innerText.replace('Conversation avec ', '');
                openConversation(conversationIdParam, contactName);
            }
        }
        const stripePublicKey = '{{ stripePublicKey }}';
        if (!stripePublicKey) {
            console.error('Stripe public key is not set.');
        } else {
            const stripe = Stripe(stripePublicKey);

            const giftVipButton = document.getElementById('giftVipButton');
            if (giftVipButton) {
                giftVipButton.addEventListener('click', function () {
                    const recipientUsername = this.getAttribute('data-recipient-username');
                    fetch('/create-gift-checkout-session', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify({ gift_username: recipientUsername })
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.id) {
                            stripe.redirectToCheckout({ sessionId: data.id });
                        } else {
                            alert('Erreur : ' + data.error);
                        }
                    })
                    .catch(error => console.error('Erreur:', error));
                });
            }
        }
        function resetTabs() {
            tabLinks.forEach(link => {
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
            } else {
                resetTabs();
                activateTab(tabLinks[0]);
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
