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
class __TwigTemplate_c62b4f2a902688439d4806d9ff1a5ea2 extends Template
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

    <div class=\"glassmorphism shadow-2xl rounded-lg p-6 mb-10\">
        <h1 class=\"text-3xl font-bold mb-6 text-white\">Mes Demandes d'Amis</h1>
        ";
        // line 68
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["friendRequests"]) || array_key_exists("friendRequests", $context) ? $context["friendRequests"] : (function () { throw new RuntimeError('Variable "friendRequests" does not exist.', 68, $this->source); })())) > 0)) {
            // line 69
            yield "            <div class=\"space-y-6\">
                ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["friendRequests"]) || array_key_exists("friendRequests", $context) ? $context["friendRequests"] : (function () { throw new RuntimeError('Variable "friendRequests" does not exist.', 70, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
                // line 71
                yield "                    <div class=\"glassmorphism-invitation-accepted p-4 rounded-lg shadow-lg hover:shadow-md transition-all transform hover:translate-y-1 duration-150 ease-in-out flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
                        <div class=\"flex items-center\">
                            ";
                // line 73
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requester", [], "any", false, false, false, 73), "avatar", [], "any", false, false, false, 73)) {
                    // line 74
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requester", [], "any", false, false, false, 74), "avatar", [], "any", false, false, false, 74))), "html", null, true);
                    yield "\" class=\"jdr-avatar w-10 h-10 rounded-full\" alt=\"Avatar de ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requester", [], "any", false, false, false, 74), "username", [], "any", false, false, false, 74), "html", null, true);
                    yield "\">
                            ";
                } else {
                    // line 76
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" class=\"jdr-avatar w-10 h-10 rounded-full\" alt=\"Avatar par défaut\">
                            ";
                }
                // line 78
                yield "                            <div>
                                <p class=\"text-lg font-bold text-white\">";
                // line 79
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requester", [], "any", false, false, false, 79), "username", [], "any", false, false, false, 79), "html", null, true);
                yield "</p>
                                <p class=\"text-md text-white/90\">Vous a envoyé une demande d'ami.</p>
                                <p class=\"text-sm text-white/70 mt-2\">";
                // line 81
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "createdAt", [], "any", false, false, false, 81), "d/m/Y H:i"), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex space-x-3 w-full md:w-auto justify-end\">
                            <form action=\"";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accept_request", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 85)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block w-full md:w-auto\">
                                <button type=\"submit\" class=\"w-full md:w-auto glassmorphism-acceptance text-white px-4 py-2 rounded-md hover:bg-green-600 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-accept\" aria-label=\"Accepter la demande d'ami de ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requester", [], "any", false, false, false, 86), "username", [], "any", false, false, false, 86), "html", null, true);
                yield "\">Accepter</button>
                            </form>
                            <form action=\"";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decline_request", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 88)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block w-full md:w-auto\">
                                <button type=\"submit\" class=\"w-full md:w-auto glassmorphism-player-left text-white px-4 py-2 rounded-md hover:bg-red-500 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-refuse\" aria-label=\"Refuser la demande d'ami de ";
                // line 89
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requester", [], "any", false, false, false, 89), "username", [], "any", false, false, false, 89), "html", null, true);
                yield "\">Refuser</button>
                            </form>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['request'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            yield "            </div>
        ";
        } else {
            // line 96
            yield "            <p class=\"text-white mt-6\">Aucune demande d'amis en attente.</p>
        ";
        }
        // line 98
        yield "    </div>

    <div class=\"glassmorphism shadow-2xl rounded-lg p-6\">
        <div class=\"flex justify-between items-center mb-6\">
            <h1 class=\"text-3xl font-bold text-white\">Mes Notifications</h1>
            ";
        // line 103
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 103, $this->source); })())) > 0)) {
            // line 104
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
        // line 113
        yield "        </div>

        ";
        // line 115
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 115, $this->source); })())) > 0)) {
            // line 116
            yield "            <div class=\"space-y-6\">
                ";
            // line 117
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 117, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 118
                yield "                    ";
                $context["bg_color"] = "glassmorphism-invitation-accepted";
                // line 119
                yield "                    ";
                $context["emoji"] = "💡";
                // line 120
                yield "                    ";
                $context["message"] = CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 120);
                // line 121
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 121) == "acceptance_confirmation")) {
                    // line 122
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-acceptance";
                    // line 123
                    yield "                        ";
                    $context["emoji"] = "✅";
                    // line 124
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 124) == "refusal_confirmation")) {
                    // line 125
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-player-left";
                    // line 126
                    yield "                        ";
                    $context["emoji"] = "❌";
                    // line 127
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 127) == "join_request_confirmation")) {
                    // line 128
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-warning";
                    // line 129
                    yield "                        ";
                    $context["emoji"] = "⭐";
                    // line 130
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 130) == "user_removed_from_group")) {
                    // line 131
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-warning";
                    // line 132
                    yield "                        ";
                    $context["emoji"] = "⚠️";
                    // line 133
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 133) == "leave")) {
                    // line 134
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-player-left";
                    // line 135
                    yield "                        ";
                    $context["emoji"] = "✋";
                    // line 136
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 136) == "player_left")) {
                    // line 137
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-player-left";
                    // line 138
                    yield "                        ";
                    $context["emoji"] = "❌";
                    // line 139
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 139) == "invitation_sent")) {
                    // line 140
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-invitation-accepted";
                    // line 141
                    yield "                        ";
                    $context["emoji"] = "📩";
                    // line 142
                    yield "                    ";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 142), ["vip_purchase", "vip_gift_received", "vip_gift_offered"])) {
                    // line 143
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-acceptance";
                    // line 144
                    yield "                        ";
                    $context["emoji"] = "👑";
                    // line 145
                    yield "                    ";
                }
                // line 146
                yield "                    <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bg_color"]) || array_key_exists("bg_color", $context) ? $context["bg_color"] : (function () { throw new RuntimeError('Variable "bg_color" does not exist.', 146, $this->source); })()), "html", null, true);
                yield " glassmorphism border border-white/20 p-4 rounded-lg shadow-lg hover:shadow-md transition-all transform hover:translate-y-1 duration-150 ease-in-out flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
                        <div class=\"flex items-center\">
                            ";
                // line 148
                if ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 148), ["friend_request_sent", "vip_gift_offered", "vip_gift_received"]) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "relatedUser", [], "any", false, false, false, 148)))) {
                    // line 149
                    yield "                                ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "relatedUser", [], "any", false, false, false, 149), "avatar", [], "any", false, false, false, 149)) {
                        // line 150
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "relatedUser", [], "any", false, false, false, 150), "avatar", [], "any", false, false, false, 150))), "html", null, true);
                        yield "\" class=\"jdr-avatar w-10 h-10 rounded-full mr-4\" alt=\"Photo de profil de ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "relatedUser", [], "any", false, false, false, 150), "username", [], "any", false, false, false, 150), "html", null, true);
                        yield "\">
                                ";
                    } else {
                        // line 152
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                        yield "\" class=\"jdr-avatar w-10 h-10 rounded-full mr-4\" alt=\"Photo de profil par défaut\">
                                ";
                    }
                    // line 154
                    yield "                                <div class=\"text-2xl ml-2\" aria-hidden=\"true\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["emoji"]) || array_key_exists("emoji", $context) ? $context["emoji"] : (function () { throw new RuntimeError('Variable "emoji" does not exist.', 154, $this->source); })()), "html", null, true);
                    yield "</div>
                            ";
                } else {
                    // line 156
                    yield "                                <div class=\"mr-4 text-2xl\" aria-hidden=\"true\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["emoji"]) || array_key_exists("emoji", $context) ? $context["emoji"] : (function () { throw new RuntimeError('Variable "emoji" does not exist.', 156, $this->source); })()), "html", null, true);
                    yield "</div>
                            ";
                }
                // line 158
                yield "                            <div>
                                <p class=\"text-lg font-bold text-white\">";
                // line 159
                ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "relatedUser", [], "any", false, false, false, 159)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "relatedUser", [], "any", false, false, false, 159), "username", [], "any", false, false, false, 159), "html", null, true)) : (yield "Notification"));
                yield "</p>
                                <p class=\"text-md text-white/90\">
                                    ";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 161, $this->source); })()), "html", null, true);
                yield "
                                </p>
                                <p class=\"text-sm text-white/70 mt-2\">";
                // line 163
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "createdAt", [], "any", false, false, false, 163), "d/m/Y H:i"), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex space-x-3 w-full md:w-auto justify-end\">
                            <form action=\"";
                // line 167
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_respond", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 167)]), "html", null, true);
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
            // line 174
            yield "            </div>
        ";
        } else {
            // line 176
            yield "            <p class=\"text-white mt-6\">Aucune notification en attente.</p>
        ";
        }
        // line 178
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
        return array (  526 => 178,  522 => 176,  518 => 174,  505 => 167,  498 => 163,  493 => 161,  488 => 159,  485 => 158,  479 => 156,  473 => 154,  467 => 152,  459 => 150,  456 => 149,  454 => 148,  448 => 146,  445 => 145,  442 => 144,  439 => 143,  436 => 142,  433 => 141,  430 => 140,  427 => 139,  424 => 138,  421 => 137,  418 => 136,  415 => 135,  412 => 134,  409 => 133,  406 => 132,  403 => 131,  400 => 130,  397 => 129,  394 => 128,  391 => 127,  388 => 126,  385 => 125,  382 => 124,  379 => 123,  376 => 122,  373 => 121,  370 => 120,  367 => 119,  364 => 118,  360 => 117,  357 => 116,  355 => 115,  351 => 113,  338 => 104,  336 => 103,  329 => 98,  325 => 96,  321 => 94,  310 => 89,  306 => 88,  301 => 86,  297 => 85,  290 => 81,  285 => 79,  282 => 78,  276 => 76,  268 => 74,  266 => 73,  262 => 71,  258 => 70,  255 => 69,  253 => 68,  247 => 64,  243 => 62,  239 => 60,  228 => 55,  223 => 53,  218 => 51,  213 => 49,  208 => 46,  200 => 43,  197 => 42,  194 => 41,  188 => 39,  186 => 38,  179 => 36,  176 => 35,  174 => 34,  170 => 33,  167 => 32,  161 => 30,  158 => 29,  152 => 27,  146 => 25,  143 => 24,  140 => 23,  134 => 21,  128 => 19,  125 => 18,  123 => 17,  119 => 15,  116 => 14,  112 => 13,  109 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

    <div class=\"glassmorphism shadow-2xl rounded-lg p-6 mb-10\">
        <h1 class=\"text-3xl font-bold mb-6 text-white\">Mes Demandes d'Amis</h1>
        {% if friendRequests|length > 0 %}
            <div class=\"space-y-6\">
                {% for request in friendRequests %}
                    <div class=\"glassmorphism-invitation-accepted p-4 rounded-lg shadow-lg hover:shadow-md transition-all transform hover:translate-y-1 duration-150 ease-in-out flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
                        <div class=\"flex items-center\">
                            {% if request.requester.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ request.requester.avatar) }}\" class=\"jdr-avatar w-10 h-10 rounded-full\" alt=\"Avatar de {{ request.requester.username }}\">
                            {% else %}
                                <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"jdr-avatar w-10 h-10 rounded-full\" alt=\"Avatar par défaut\">
                            {% endif %}
                            <div>
                                <p class=\"text-lg font-bold text-white\">{{ request.requester.username }}</p>
                                <p class=\"text-md text-white/90\">Vous a envoyé une demande d'ami.</p>
                                <p class=\"text-sm text-white/70 mt-2\">{{ request.createdAt|date('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                        <div class=\"flex space-x-3 w-full md:w-auto justify-end\">
                            <form action=\"{{ path('accept_request', { id: request.id }) }}\" method=\"POST\" class=\"inline-block w-full md:w-auto\">
                                <button type=\"submit\" class=\"w-full md:w-auto glassmorphism-acceptance text-white px-4 py-2 rounded-md hover:bg-green-600 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-accept\" aria-label=\"Accepter la demande d'ami de {{ request.requester.username }}\">Accepter</button>
                            </form>
                            <form action=\"{{ path('decline_request', { id: request.id }) }}\" method=\"POST\" class=\"inline-block w-full md:w-auto\">
                                <button type=\"submit\" class=\"w-full md:w-auto glassmorphism-player-left text-white px-4 py-2 rounded-md hover:bg-red-500 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-refuse\" aria-label=\"Refuser la demande d'ami de {{ request.requester.username }}\">Refuser</button>
                            </form>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p class=\"text-white mt-6\">Aucune demande d'amis en attente.</p>
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
                    {% set emoji = '💡' %}
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
                    {% elseif notification.type in ['vip_purchase', 'vip_gift_received', 'vip_gift_offered'] %}
                        {% set bg_color = 'glassmorphism-acceptance' %}
                        {% set emoji = '👑' %}
                    {% endif %}
                    <div class=\"{{ bg_color }} glassmorphism border border-white/20 p-4 rounded-lg shadow-lg hover:shadow-md transition-all transform hover:translate-y-1 duration-150 ease-in-out flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
                        <div class=\"flex items-center\">
                            {% if notification.type in ['friend_request_sent', 'vip_gift_offered', 'vip_gift_received'] and notification.relatedUser is not null %}
                                {% if notification.relatedUser.avatar %}
                                    <img src=\"{{ asset('uploads/avatars/' ~ notification.relatedUser.avatar) }}\" class=\"jdr-avatar w-10 h-10 rounded-full mr-4\" alt=\"Photo de profil de {{ notification.relatedUser.username }}\">
                                {% else %}
                                    <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"jdr-avatar w-10 h-10 rounded-full mr-4\" alt=\"Photo de profil par défaut\">
                                {% endif %}
                                <div class=\"text-2xl ml-2\" aria-hidden=\"true\">{{ emoji }}</div>
                            {% else %}
                                <div class=\"mr-4 text-2xl\" aria-hidden=\"true\">{{ emoji }}</div>
                            {% endif %}
                            <div>
                                <p class=\"text-lg font-bold text-white\">{{ notification.relatedUser ? notification.relatedUser.username : 'Notification' }}</p>
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
