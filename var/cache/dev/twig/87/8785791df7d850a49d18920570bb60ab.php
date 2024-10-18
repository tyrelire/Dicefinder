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

/* notification/index.html.twig */
class __TwigTemplate_4e31d793715654bd6330fa75e96cb239 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "notification/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "notification/index.html.twig", 1);
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

        yield "Invitations et Notifications";
        
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
        yield "

<div class=\"container mx-auto px-4 py-8\">
    <div class=\"glassmorphism shadow-2xl rounded-lg p-6 mb-10\">
        <h1 class=\"text-3xl font-bold mb-6 text-white\">Mes Invitations</h1>
        ";
        // line 11
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitationsData"]) || array_key_exists("invitationsData", $context) ? $context["invitationsData"] : (function () { throw new RuntimeError('Variable "invitationsData" does not exist.', 11, $this->source); })())) > 0)) {
            // line 12
            yield "            <div class=\"space-y-6\">
                ";
            // line 13
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invitationsData"]) || array_key_exists("invitationsData", $context) ? $context["invitationsData"] : (function () { throw new RuntimeError('Variable "invitationsData" does not exist.', 13, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["invitationData"]) {
                // line 14
                yield "                    ";
                $context["invitation"] = CoreExtension::getAttribute($this->env, $this->source, $context["invitationData"], "invitation", [], "any", false, false, false, 14);
                // line 15
                yield "                    <div class=\"glassmorphism-invitation-accepted p-4 rounded-lg shadow-lg hover:shadow-md transition-all transform hover:translate-y-1 duration-150 ease-in-out flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
                        <div class=\"flex items-center\">
                            ";
                // line 17
                if (CoreExtension::getAttribute($this->env, $this->source, $context["invitationData"], "initiatedByOwner", [], "any", false, false, false, 17)) {
                    // line 18
                    yield "                                ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 18, $this->source); })()), "groupeJDR", [], "any", false, false, false, 18), "owner", [], "any", false, false, false, 18), "avatar", [], "any", false, false, false, 18)) {
                        // line 19
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 19, $this->source); })()), "groupeJDR", [], "any", false, false, false, 19), "owner", [], "any", false, false, false, 19), "avatar", [], "any", false, false, false, 19))), "html", null, true);
                        yield "\" class=\"jdr-avatar\" alt=\"Photo de profil du propriétaire\">
                                ";
                    } else {
                        // line 21
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                        yield "\" class=\"jdr-avatar\" alt=\"Photo de profil par défaut\">
                                ";
                    }
                    // line 23
                    yield "                            ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["invitationData"], "initiatedByUser", [], "any", false, false, false, 23)) {
                    // line 24
                    yield "                                ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 24, $this->source); })()), "requestedBy", [], "any", false, false, false, 24), "avatar", [], "any", false, false, false, 24)) {
                        // line 25
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 25, $this->source); })()), "requestedBy", [], "any", false, false, false, 25), "avatar", [], "any", false, false, false, 25))), "html", null, true);
                        yield "\" class=\"jdr-avatar\" alt=\"Photo de profil de l'utilisateur\">
                                ";
                    } else {
                        // line 27
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                        yield "\" class=\"jdr-avatar\" alt=\"Photo de profil par défaut\">
                                ";
                    }
                    // line 29
                    yield "                            ";
                } else {
                    // line 30
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" class=\"jdr-avatar\" alt=\"Photo de profil par défaut\">
                            ";
                }
                // line 32
                yield "                            <div>
                                <p class=\"text-lg font-bold text-white\">";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 33, $this->source); })()), "groupeJDR", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
                yield "</p>
                                ";
                // line 34
                if (CoreExtension::getAttribute($this->env, $this->source, $context["invitationData"], "initiatedByUser", [], "any", false, false, false, 34)) {
                    // line 35
                    yield "                                    <p class=\"text-md text-white\">
                                        <strong>";
                    // line 36
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 36, $this->source); })()), "requestedBy", [], "any", false, false, false, 36), "username", [], "any", false, false, false, 36), "html", null, true);
                    yield "</strong> veut rejoindre votre univers \"<strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 36, $this->source); })()), "groupeJDR", [], "any", false, false, false, 36), "title", [], "any", false, false, false, 36), "html", null, true);
                    yield "</strong>\".
                                    </p>
                                    ";
                    // line 38
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 38, $this->source); })()), "message", [], "any", false, false, false, 38)) {
                        // line 39
                        yield "                                        <p class=\"text-sm text-white mt-2 italic\">\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 39, $this->source); })()), "message", [], "any", false, false, false, 39), "html", null, true);
                        yield "\"</p>
                                    ";
                    }
                    // line 41
                    yield "                                ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["invitationData"], "initiatedByOwner", [], "any", false, false, false, 41)) {
                    // line 42
                    yield "                                    <p class=\"text-md text-white\">
                                        <strong>";
                    // line 43
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 43, $this->source); })()), "groupeJDR", [], "any", false, false, false, 43), "owner", [], "any", false, false, false, 43), "username", [], "any", false, false, false, 43), "html", null, true);
                    yield "</strong> vous a invité à rejoindre l'univers \"<strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 43, $this->source); })()), "groupeJDR", [], "any", false, false, false, 43), "title", [], "any", false, false, false, 43), "html", null, true);
                    yield "</strong>\".
                                    </p>
                                ";
                }
                // line 46
                yield "                            </div>
                        </div>
                        <div class=\"flex space-x-3 w-full md:w-auto justify-end\">
                            <form action=\"";
                // line 49
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respond_invitation", ["invitationId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 49, $this->source); })()), "id", [], "any", false, false, false, 49)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block w-full md:w-auto\">
                                <input type=\"hidden\" name=\"response\" value=\"accept\">
                                <button type=\"submit\" class=\"w-full md:w-auto glassmorphism-acceptance text-white px-4 py-2 rounded-md hover:bg-green-600 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-accept\" aria-label=\"Accepter l'invitation pour rejoindre ";
                // line 51
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 51, $this->source); })()), "groupeJDR", [], "any", false, false, false, 51), "title", [], "any", false, false, false, 51), "html", null, true);
                yield "\">Accepter</button>
                            </form>
                            <form action=\"";
                // line 53
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respond_invitation", ["invitationId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 53, $this->source); })()), "id", [], "any", false, false, false, 53)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block w-full md:w-auto\">
                                <input type=\"hidden\" name=\"response\" value=\"refuse\">
                                <button type=\"submit\" class=\"w-full md:w-auto glassmorphism-player-left text-white px-4 py-2 rounded-md hover:bg-red-500 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-refuse\" aria-label=\"Refuser l'invitation pour rejoindre ";
                // line 55
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 55, $this->source); })()), "groupeJDR", [], "any", false, false, false, 55), "title", [], "any", false, false, false, 55), "html", null, true);
                yield "\">Refuser</button>
                            </form>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['invitationData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            yield "            </div>
        ";
        } else {
            // line 62
            yield "            <p class=\"text-white mt-6\">Aucune invitation en attente.</p>
        ";
        }
        // line 64
        yield "    </div>

    <div class=\"glassmorphism shadow-2xl rounded-lg p-6\">
        <div class=\"flex justify-between items-center mb-6\">
            <h1 class=\"text-3xl font-bold text-white\">Mes Notifications</h1>
            ";
        // line 69
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 69, $this->source); })())) > 0)) {
            // line 70
            yield "                <form action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_clear_all");
            yield "\" method=\"POST\" class=\"inline-block\">
                    <button type=\"submit\" class=\"flex items-center justify-center gap-2 glassmorphism-warning text-white px-4 py-2 rounded-lg hover:bg-yellow-500 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-clear focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-50\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14.74 9L14.394 18M9.606 18L9.26 9M19.228 5.79c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0\" />
                        </svg>
                        <span class=\"hidden sm:inline\">Effacer toutes les notifications</span>
                    </button>
                </form>
            ";
        }
        // line 79
        yield "        </div>

        ";
        // line 81
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 81, $this->source); })())) > 0)) {
            // line 82
            yield "            <div class=\"space-y-6\">
                ";
            // line 83
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 83, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 84
                yield "                    ";
                $context["bg_color"] = "glassmorphism-invitation-accepted";
                // line 85
                yield "                    ";
                $context["emoji"] = "ℹ️";
                // line 86
                yield "                    ";
                $context["message"] = CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 86);
                // line 87
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 87) == "acceptance_confirmation")) {
                    // line 88
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-acceptance";
                    // line 89
                    yield "                        ";
                    $context["emoji"] = "✅";
                    // line 90
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 90) == "refusal_confirmation")) {
                    // line 91
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-player-left";
                    // line 92
                    yield "                        ";
                    $context["emoji"] = "❌";
                    // line 93
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 93) == "join_request_confirmation")) {
                    // line 94
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-warning";
                    // line 95
                    yield "                        ";
                    $context["emoji"] = "⭐";
                    // line 96
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 96) == "user_removed_from_group")) {
                    // line 97
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-warning";
                    // line 98
                    yield "                        ";
                    $context["emoji"] = "⚠️";
                    // line 99
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 99) == "leave")) {
                    // line 100
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-player-left";
                    // line 101
                    yield "                        ";
                    $context["emoji"] = "✋";
                    // line 102
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 102) == "player_left")) {
                    // line 103
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-player-left";
                    // line 104
                    yield "                        ";
                    $context["emoji"] = "❌";
                    // line 105
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 105) == "invitation_sent")) {
                    // line 106
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-invitation-accepted";
                    // line 107
                    yield "                        ";
                    $context["emoji"] = "📩";
                    // line 108
                    yield "                    ";
                }
                // line 109
                yield "
                    <div class=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bg_color"]) || array_key_exists("bg_color", $context) ? $context["bg_color"] : (function () { throw new RuntimeError('Variable "bg_color" does not exist.', 110, $this->source); })()), "html", null, true);
                yield " glassmorphism border border-white/20 p-4 rounded-lg shadow-lg hover:shadow-md transition-all transform hover:translate-y-1 duration-150 ease-in-out flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
                        <div class=\"flex items-center\">
                            <div class=\"mr-4 text-2xl\" aria-hidden=\"true\">";
                // line 112
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["emoji"]) || array_key_exists("emoji", $context) ? $context["emoji"] : (function () { throw new RuntimeError('Variable "emoji" does not exist.', 112, $this->source); })()), "html", null, true);
                yield "</div>
                            <div>
                                <p class=\"text-lg font-bold text-white\">";
                // line 114
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "groupeJDR", [], "any", false, false, false, 114), "title", [], "any", false, false, false, 114), "html", null, true);
                yield "</p>
                                <p class=\"text-md text-white/90\">
                                    ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 116, $this->source); })()), "html", null, true);
                yield "
                                </p>
                                <p class=\"text-sm text-white/70 mt-2\">";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "createdAt", [], "any", false, false, false, 118), "d/m/Y H:i"), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex space-x-3 w-full md:w-auto justify-end\">
                            <form action=\"";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_respond", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 122)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block w-full md:w-auto\">
                                <input type=\"hidden\" name=\"response\" value=\"read\">
                                <button type=\"submit\" class=\"w-full md:w-auto glassmorphism-invitation-accepted text-white px-4 py-2 rounded-md hover:bg-gray-400 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-read\" aria-label=\"Marquer comme lue\">Marquer comme lu</button>
                            </form>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 129
            yield "            </div>
        ";
        } else {
            // line 131
            yield "            <p class=\"text-white mt-6\">Aucune notification en attente.</p>
        ";
        }
        // line 133
        yield "    </div>
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
        return "notification/index.html.twig";
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
        return array (  408 => 133,  404 => 131,  400 => 129,  387 => 122,  380 => 118,  375 => 116,  370 => 114,  365 => 112,  360 => 110,  357 => 109,  354 => 108,  351 => 107,  348 => 106,  345 => 105,  342 => 104,  339 => 103,  336 => 102,  333 => 101,  330 => 100,  327 => 99,  324 => 98,  321 => 97,  318 => 96,  315 => 95,  312 => 94,  309 => 93,  306 => 92,  303 => 91,  300 => 90,  297 => 89,  294 => 88,  291 => 87,  288 => 86,  285 => 85,  282 => 84,  278 => 83,  275 => 82,  273 => 81,  269 => 79,  256 => 70,  254 => 69,  247 => 64,  243 => 62,  239 => 60,  228 => 55,  223 => 53,  218 => 51,  213 => 49,  208 => 46,  200 => 43,  197 => 42,  194 => 41,  188 => 39,  186 => 38,  179 => 36,  176 => 35,  174 => 34,  170 => 33,  167 => 32,  161 => 30,  158 => 29,  152 => 27,  146 => 25,  143 => 24,  140 => 23,  134 => 21,  128 => 19,  125 => 18,  123 => 17,  119 => 15,  116 => 14,  112 => 13,  109 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Invitations et Notifications{% endblock %}

{% block body %}


<div class=\"container mx-auto px-4 py-8\">
    <div class=\"glassmorphism shadow-2xl rounded-lg p-6 mb-10\">
        <h1 class=\"text-3xl font-bold mb-6 text-white\">Mes Invitations</h1>
        {% if invitationsData|length > 0 %}
            <div class=\"space-y-6\">
                {% for invitationData in invitationsData %}
                    {% set invitation = invitationData.invitation %}
                    <div class=\"glassmorphism-invitation-accepted p-4 rounded-lg shadow-lg hover:shadow-md transition-all transform hover:translate-y-1 duration-150 ease-in-out flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
                        <div class=\"flex items-center\">
                            {% if invitationData.initiatedByOwner %}
                                {% if invitation.groupeJDR.owner.avatar %}
                                    <img src=\"{{ asset('uploads/avatars/' ~ invitation.groupeJDR.owner.avatar) }}\" class=\"jdr-avatar\" alt=\"Photo de profil du propriétaire\">
                                {% else %}
                                    <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"jdr-avatar\" alt=\"Photo de profil par défaut\">
                                {% endif %}
                            {% elseif invitationData.initiatedByUser %}
                                {% if invitation.requestedBy.avatar %}
                                    <img src=\"{{ asset('uploads/avatars/' ~ invitation.requestedBy.avatar) }}\" class=\"jdr-avatar\" alt=\"Photo de profil de l'utilisateur\">
                                {% else %}
                                    <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"jdr-avatar\" alt=\"Photo de profil par défaut\">
                                {% endif %}
                            {% else %}
                                <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"jdr-avatar\" alt=\"Photo de profil par défaut\">
                            {% endif %}
                            <div>
                                <p class=\"text-lg font-bold text-white\">{{ invitation.groupeJDR.title }}</p>
                                {% if invitationData.initiatedByUser %}
                                    <p class=\"text-md text-white\">
                                        <strong>{{ invitation.requestedBy.username }}</strong> veut rejoindre votre univers \"<strong>{{ invitation.groupeJDR.title }}</strong>\".
                                    </p>
                                    {% if invitation.message %}
                                        <p class=\"text-sm text-white mt-2 italic\">\"{{ invitation.message }}\"</p>
                                    {% endif %}
                                {% elseif invitationData.initiatedByOwner %}
                                    <p class=\"text-md text-white\">
                                        <strong>{{ invitation.groupeJDR.owner.username }}</strong> vous a invité à rejoindre l'univers \"<strong>{{ invitation.groupeJDR.title }}</strong>\".
                                    </p>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"flex space-x-3 w-full md:w-auto justify-end\">
                            <form action=\"{{ path('respond_invitation', { invitationId: invitation.id }) }}\" method=\"POST\" class=\"inline-block w-full md:w-auto\">
                                <input type=\"hidden\" name=\"response\" value=\"accept\">
                                <button type=\"submit\" class=\"w-full md:w-auto glassmorphism-acceptance text-white px-4 py-2 rounded-md hover:bg-green-600 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-accept\" aria-label=\"Accepter l'invitation pour rejoindre {{ invitation.groupeJDR.title }}\">Accepter</button>
                            </form>
                            <form action=\"{{ path('respond_invitation', { invitationId: invitation.id }) }}\" method=\"POST\" class=\"inline-block w-full md:w-auto\">
                                <input type=\"hidden\" name=\"response\" value=\"refuse\">
                                <button type=\"submit\" class=\"w-full md:w-auto glassmorphism-player-left text-white px-4 py-2 rounded-md hover:bg-red-500 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-refuse\" aria-label=\"Refuser l'invitation pour rejoindre {{ invitation.groupeJDR.title }}\">Refuser</button>
                            </form>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p class=\"text-white mt-6\">Aucune invitation en attente.</p>
        {% endif %}
    </div>

    <div class=\"glassmorphism shadow-2xl rounded-lg p-6\">
        <div class=\"flex justify-between items-center mb-6\">
            <h1 class=\"text-3xl font-bold text-white\">Mes Notifications</h1>
            {% if notifications|length > 0 %}
                <form action=\"{{ path('app_notifications_clear_all') }}\" method=\"POST\" class=\"inline-block\">
                    <button type=\"submit\" class=\"flex items-center justify-center gap-2 glassmorphism-warning text-white px-4 py-2 rounded-lg hover:bg-yellow-500 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-clear focus:outline-none focus:ring-4 focus:ring-blue-300 focus:ring-opacity-50\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14.74 9L14.394 18M9.606 18L9.26 9M19.228 5.79c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0\" />
                        </svg>
                        <span class=\"hidden sm:inline\">Effacer toutes les notifications</span>
                    </button>
                </form>
            {% endif %}
        </div>

        {% if notifications|length > 0 %}
            <div class=\"space-y-6\">
                {% for notification in notifications %}
                    {% set bg_color = 'glassmorphism-invitation-accepted' %}
                    {% set emoji = 'ℹ️' %}
                    {% set message = notification.message %}
                    {% if notification.type == 'acceptance_confirmation' %}
                        {% set bg_color = 'glassmorphism-acceptance' %}
                        {% set emoji = '✅' %}
                    {% elseif notification.type == 'refusal_confirmation' %}
                        {% set bg_color = 'glassmorphism-player-left' %}
                        {% set emoji = '❌' %}
                    {% elseif notification.type == 'join_request_confirmation' %}
                        {% set bg_color = 'glassmorphism-warning' %}
                        {% set emoji = '⭐' %}
                    {% elseif notification.type == 'user_removed_from_group' %}
                        {% set bg_color = 'glassmorphism-warning' %}
                        {% set emoji = '⚠️' %}
                    {% elseif notification.type == 'leave' %}
                        {% set bg_color = 'glassmorphism-player-left' %}
                        {% set emoji = '✋' %}
                    {% elseif notification.type == 'player_left' %}
                        {% set bg_color = 'glassmorphism-player-left' %}
                        {% set emoji = '❌' %}
                    {% elseif notification.type == 'invitation_sent' %}
                        {% set bg_color = 'glassmorphism-invitation-accepted' %}
                        {% set emoji = '📩' %}
                    {% endif %}

                    <div class=\"{{ bg_color }} glassmorphism border border-white/20 p-4 rounded-lg shadow-lg hover:shadow-md transition-all transform hover:translate-y-1 duration-150 ease-in-out flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
                        <div class=\"flex items-center\">
                            <div class=\"mr-4 text-2xl\" aria-hidden=\"true\">{{ emoji }}</div>
                            <div>
                                <p class=\"text-lg font-bold text-white\">{{ notification.groupeJDR.title }}</p>
                                <p class=\"text-md text-white/90\">
                                    {{ message }}
                                </p>
                                <p class=\"text-sm text-white/70 mt-2\">{{ notification.createdAt|date('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                        <div class=\"flex space-x-3 w-full md:w-auto justify-end\">
                            <form action=\"{{ path('app_notifications_respond', { id: notification.id }) }}\" method=\"POST\" class=\"inline-block w-full md:w-auto\">
                                <input type=\"hidden\" name=\"response\" value=\"read\">
                                <button type=\"submit\" class=\"w-full md:w-auto glassmorphism-invitation-accepted text-white px-4 py-2 rounded-md hover:bg-gray-400 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-read\" aria-label=\"Marquer comme lue\">Marquer comme lu</button>
                            </form>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p class=\"text-white mt-6\">Aucune notification en attente.</p>
        {% endif %}
    </div>
</div>

{% endblock %}

", "notification/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\notification\\index.html.twig");
    }
}
