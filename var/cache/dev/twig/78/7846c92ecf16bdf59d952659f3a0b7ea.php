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
class __TwigTemplate_dcf26e7eba2c67b90ffafb7ccbb84a2f extends Template
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
        // line 10
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitationsData"]) || array_key_exists("invitationsData", $context) ? $context["invitationsData"] : (function () { throw new RuntimeError('Variable "invitationsData" does not exist.', 10, $this->source); })())) > 0)) {
            // line 11
            yield "            <div class=\"space-y-6\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["invitationsData"]) || array_key_exists("invitationsData", $context) ? $context["invitationsData"] : (function () { throw new RuntimeError('Variable "invitationsData" does not exist.', 12, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["invitationData"]) {
                yield " ";
                // line 13
                yield "                    ";
                $context["invitation"] = CoreExtension::getAttribute($this->env, $this->source, $context["invitationData"], "invitation", [], "any", false, false, false, 13);
                // line 14
                yield "                    <div class=\"glassmorphism-invitation-accepted p-4 rounded-lg shadow-lg hover:shadow-md transition-all transform hover:translate-y-1 duration-150 ease-in-out flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
                        <div class=\"flex items-center\">
                            ";
                // line 16
                if (CoreExtension::getAttribute($this->env, $this->source, $context["invitationData"], "initiatedByOwner", [], "any", false, false, false, 16)) {
                    // line 17
                    yield "                                ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 17, $this->source); })()), "groupeJDR", [], "any", false, false, false, 17), "owner", [], "any", false, false, false, 17), "avatar", [], "any", false, false, false, 17)) {
                        // line 18
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 18, $this->source); })()), "groupeJDR", [], "any", false, false, false, 18), "owner", [], "any", false, false, false, 18), "avatar", [], "any", false, false, false, 18))), "html", null, true);
                        yield "\" class=\"jdr-avatar\" alt=\"Photo de profil du propriétaire\">
                                ";
                    } else {
                        // line 20
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                        yield "\" class=\"jdr-avatar\" alt=\"Photo de profil par défaut\">
                                ";
                    }
                    // line 22
                    yield "                            ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["invitationData"], "initiatedByUser", [], "any", false, false, false, 22)) {
                    // line 23
                    yield "                                ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 23, $this->source); })()), "requestedBy", [], "any", false, false, false, 23), "avatar", [], "any", false, false, false, 23)) {
                        // line 24
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 24, $this->source); })()), "requestedBy", [], "any", false, false, false, 24), "avatar", [], "any", false, false, false, 24))), "html", null, true);
                        yield "\" class=\"jdr-avatar\" alt=\"Photo de profil de l'utilisateur\">
                                ";
                    } else {
                        // line 26
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                        yield "\" class=\"jdr-avatar\" alt=\"Photo de profil par défaut\">
                                ";
                    }
                    // line 28
                    yield "                            ";
                } else {
                    // line 29
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" class=\"jdr-avatar\" alt=\"Photo de profil par défaut\">
                            ";
                }
                // line 31
                yield "                            <div>
                                <p class=\"text-lg font-bold text-white\">";
                // line 32
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 32, $this->source); })()), "groupeJDR", [], "any", false, false, false, 32), "title", [], "any", false, false, false, 32), "html", null, true);
                yield "</p>
                                ";
                // line 33
                if (CoreExtension::getAttribute($this->env, $this->source, $context["invitationData"], "initiatedByUser", [], "any", false, false, false, 33)) {
                    // line 34
                    yield "                                    <p class=\"text-md text-white\">
                                        <strong>";
                    // line 35
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 35, $this->source); })()), "requestedBy", [], "any", false, false, false, 35), "username", [], "any", false, false, false, 35), "html", null, true);
                    yield "</strong> veut rejoindre votre univers \"<strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 35, $this->source); })()), "groupeJDR", [], "any", false, false, false, 35), "title", [], "any", false, false, false, 35), "html", null, true);
                    yield "</strong>\".
                                    </p>
                                    ";
                    // line 37
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 37, $this->source); })()), "message", [], "any", false, false, false, 37)) {
                        // line 38
                        yield "                                        <p class=\"text-sm text-white mt-2 italic\">\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 38, $this->source); })()), "message", [], "any", false, false, false, 38), "html", null, true);
                        yield "\"</p>
                                    ";
                    }
                    // line 40
                    yield "                                ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["invitationData"], "initiatedByOwner", [], "any", false, false, false, 40)) {
                    // line 41
                    yield "                                    <p class=\"text-md text-white\">
                                        <strong>";
                    // line 42
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 42, $this->source); })()), "groupeJDR", [], "any", false, false, false, 42), "owner", [], "any", false, false, false, 42), "username", [], "any", false, false, false, 42), "html", null, true);
                    yield "</strong> vous a invité à rejoindre l'univers \"<strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 42, $this->source); })()), "groupeJDR", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42), "html", null, true);
                    yield "</strong>\".
                                    </p>
                                ";
                }
                // line 45
                yield "                            </div>
                        </div>
                        <div class=\"flex space-x-3 w-full md:w-auto justify-end\">
                            <form action=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respond_invitation", ["invitationId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block w-full md:w-auto\">
                                <input type=\"hidden\" name=\"response\" value=\"accept\">
                                <button type=\"submit\" class=\"w-full md:w-auto glassmorphism-acceptance text-white px-4 py-2 rounded-md hover:bg-green-600 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-accept\" aria-label=\"Accepter l'invitation pour rejoindre ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 50, $this->source); })()), "groupeJDR", [], "any", false, false, false, 50), "title", [], "any", false, false, false, 50), "html", null, true);
                yield "\">Accepter</button>
                            </form>
                            <form action=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respond_invitation", ["invitationId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block w-full md:w-auto\">
                                <input type=\"hidden\" name=\"response\" value=\"refuse\">
                                <button type=\"submit\" class=\"w-full md:w-auto glassmorphism-player-left text-white px-4 py-2 rounded-md hover:bg-red-500 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-refuse\" aria-label=\"Refuser l'invitation pour rejoindre ";
                // line 54
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 54, $this->source); })()), "groupeJDR", [], "any", false, false, false, 54), "title", [], "any", false, false, false, 54), "html", null, true);
                yield "\">Refuser</button>
                            </form>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['invitationData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "            </div>
        ";
        } else {
            // line 61
            yield "            <p class=\"text-white mt-6\">Aucune invitation en attente.</p>
        ";
        }
        // line 63
        yield "    </div>

    <div class=\"glassmorphism shadow-2xl rounded-lg p-6 mb-10\">
        <h1 class=\"text-3xl font-bold mb-6 text-white\">Mes Demandes d'Amis</h1>
        ";
        // line 67
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["friendRequests"]) || array_key_exists("friendRequests", $context) ? $context["friendRequests"] : (function () { throw new RuntimeError('Variable "friendRequests" does not exist.', 67, $this->source); })())) > 0)) {
            // line 68
            yield "            <div class=\"space-y-6\">
                ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["friendRequests"]) || array_key_exists("friendRequests", $context) ? $context["friendRequests"] : (function () { throw new RuntimeError('Variable "friendRequests" does not exist.', 69, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["request"]) {
                yield " ";
                // line 70
                yield "                    <div class=\"glassmorphism-invitation-accepted p-4 rounded-lg shadow-lg hover:shadow-md transition-all transform hover:translate-y-1 duration-150 ease-in-out flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
                        <div class=\"flex items-center\">
                            ";
                // line 72
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requester", [], "any", false, false, false, 72), "avatar", [], "any", false, false, false, 72)) {
                    // line 73
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requester", [], "any", false, false, false, 73), "avatar", [], "any", false, false, false, 73))), "html", null, true);
                    yield "\" class=\"jdr-avatar w-10 h-10 rounded-full\" alt=\"Avatar de ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requester", [], "any", false, false, false, 73), "username", [], "any", false, false, false, 73), "html", null, true);
                    yield "\">
                            ";
                } else {
                    // line 75
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" class=\"jdr-avatar w-10 h-10 rounded-full\" alt=\"Avatar par défaut\">
                            ";
                }
                // line 77
                yield "                            <div>
                                <p class=\"text-lg font-bold text-white\">";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requester", [], "any", false, false, false, 78), "username", [], "any", false, false, false, 78), "html", null, true);
                yield "</p>
                                <p class=\"text-md text-white/90\">Vous a envoyé une demande d'ami.</p>
                                <p class=\"text-sm text-white/70 mt-2\">";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["request"], "createdAt", [], "any", false, false, false, 80), "d/m/Y H:i"), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex space-x-3 w-full md:w-auto justify-end\">
                            <form action=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accept_request", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 84)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block w-full md:w-auto\">
                                <button type=\"submit\" class=\"w-full md:w-auto glassmorphism-acceptance text-white px-4 py-2 rounded-md hover:bg-green-600 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-accept\" aria-label=\"Accepter la demande d'ami de ";
                // line 85
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requester", [], "any", false, false, false, 85), "username", [], "any", false, false, false, 85), "html", null, true);
                yield "\">Accepter</button>
                            </form>
                            <form action=\"";
                // line 87
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("decline_request", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["request"], "id", [], "any", false, false, false, 87)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block w-full md:w-auto\">
                                <button type=\"submit\" class=\"w-full md:w-auto glassmorphism-player-left text-white px-4 py-2 rounded-md hover:bg-red-500 transition-all duration-300 ease-in-out hover:shadow-lg winter-button-refuse\" aria-label=\"Refuser la demande d'ami de ";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["request"], "requester", [], "any", false, false, false, 88), "username", [], "any", false, false, false, 88), "html", null, true);
                yield "\">Refuser</button>
                            </form>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['request'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "            </div>
        ";
        } else {
            // line 95
            yield "            <p class=\"text-white mt-6\">Aucune demande d'amis en attente.</p>
        ";
        }
        // line 97
        yield "    </div>

    <div class=\"glassmorphism shadow-2xl rounded-lg p-6\">
        <div class=\"flex justify-between items-center mb-6\">
            <h1 class=\"text-3xl font-bold text-white\">Mes Notifications</h1>
            ";
        // line 102
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 102, $this->source); })())) > 0)) {
            // line 103
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
        // line 112
        yield "        </div>

        ";
        // line 114
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 114, $this->source); })())) > 0)) {
            // line 115
            yield "            <div class=\"space-y-6\">
                ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 116, $this->source); })())));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                yield " ";
                // line 117
                yield "                    ";
                $context["bg_color"] = "glassmorphism-invitation-accepted";
                // line 118
                yield "                    ";
                $context["emoji"] = "💡";
                // line 119
                yield "                    ";
                $context["message"] = CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 119);
                // line 120
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 120) == "acceptance_confirmation")) {
                    // line 121
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-acceptance";
                    // line 122
                    yield "                        ";
                    $context["emoji"] = "✅";
                    // line 123
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 123) == "refusal_confirmation")) {
                    // line 124
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-player-left";
                    // line 125
                    yield "                        ";
                    $context["emoji"] = "❌";
                    // line 126
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 126) == "join_request_confirmation")) {
                    // line 127
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-warning";
                    // line 128
                    yield "                        ";
                    $context["emoji"] = "⭐";
                    // line 129
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 129) == "user_removed_from_group")) {
                    // line 130
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-warning";
                    // line 131
                    yield "                        ";
                    $context["emoji"] = "⚠️";
                    // line 132
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 132) == "leave")) {
                    // line 133
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-player-left";
                    // line 134
                    yield "                        ";
                    $context["emoji"] = "✋";
                    // line 135
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 135) == "player_left")) {
                    // line 136
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-player-left";
                    // line 137
                    yield "                        ";
                    $context["emoji"] = "❌";
                    // line 138
                    yield "                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 138) == "invitation_sent")) {
                    // line 139
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-invitation-accepted";
                    // line 140
                    yield "                        ";
                    $context["emoji"] = "📩";
                    // line 141
                    yield "                    ";
                } elseif (CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 141), ["vip_purchase", "vip_gift_received", "vip_gift_offered"])) {
                    // line 142
                    yield "                        ";
                    $context["bg_color"] = "glassmorphism-acceptance";
                    // line 143
                    yield "                        ";
                    $context["emoji"] = "👑";
                    // line 144
                    yield "                    ";
                }
                // line 145
                yield "                    <div class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["bg_color"]) || array_key_exists("bg_color", $context) ? $context["bg_color"] : (function () { throw new RuntimeError('Variable "bg_color" does not exist.', 145, $this->source); })()), "html", null, true);
                yield " glassmorphism border border-white/20 p-4 rounded-lg shadow-lg hover:shadow-md transition-all transform hover:translate-y-1 duration-150 ease-in-out flex flex-col md:flex-row justify-between items-start md:items-center space-y-4 md:space-y-0\">
                        <div class=\"flex items-center\">
                            ";
                // line 147
                if ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "type", [], "any", false, false, false, 147), ["friend_request_sent", "vip_gift_offered", "vip_gift_received"]) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "relatedUser", [], "any", false, false, false, 147)))) {
                    // line 148
                    yield "                                ";
                    if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "relatedUser", [], "any", false, false, false, 148), "avatar", [], "any", false, false, false, 148)) {
                        // line 149
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "relatedUser", [], "any", false, false, false, 149), "avatar", [], "any", false, false, false, 149))), "html", null, true);
                        yield "\" class=\"jdr-avatar w-10 h-10 rounded-full mr-4\" alt=\"Photo de profil de ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "relatedUser", [], "any", false, false, false, 149), "username", [], "any", false, false, false, 149), "html", null, true);
                        yield "\">
                                ";
                    } else {
                        // line 151
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                        yield "\" class=\"jdr-avatar w-10 h-10 rounded-full mr-4\" alt=\"Photo de profil par défaut\">
                                ";
                    }
                    // line 153
                    yield "                                <div class=\"text-2xl ml-2\" aria-hidden=\"true\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["emoji"]) || array_key_exists("emoji", $context) ? $context["emoji"] : (function () { throw new RuntimeError('Variable "emoji" does not exist.', 153, $this->source); })()), "html", null, true);
                    yield "</div>
                            ";
                } else {
                    // line 155
                    yield "                                <div class=\"mr-4 text-2xl\" aria-hidden=\"true\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["emoji"]) || array_key_exists("emoji", $context) ? $context["emoji"] : (function () { throw new RuntimeError('Variable "emoji" does not exist.', 155, $this->source); })()), "html", null, true);
                    yield "</div>
                            ";
                }
                // line 157
                yield "                            <div>
                                <p class=\"text-lg font-bold text-white\">";
                // line 158
                ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "relatedUser", [], "any", false, false, false, 158)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "relatedUser", [], "any", false, false, false, 158), "username", [], "any", false, false, false, 158), "html", null, true)) : (yield "Notification"));
                yield "</p>
                                <p class=\"text-md text-white/90\">
                                    ";
                // line 160
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 160, $this->source); })()), "html", null, true);
                yield "
                                </p>
                                <p class=\"text-sm text-white/70 mt-2\">";
                // line 162
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "createdAt", [], "any", false, false, false, 162), "d/m/Y H:i"), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex space-x-3 w-full md:w-auto justify-end\">
                            <form action=\"";
                // line 166
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_respond", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 166)]), "html", null, true);
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
            // line 173
            yield "            </div>
        ";
        } else {
            // line 175
            yield "            <p class=\"text-white mt-6\">Aucune notification en attente.</p>
        ";
        }
        // line 177
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
        return array (  528 => 177,  524 => 175,  520 => 173,  507 => 166,  500 => 162,  495 => 160,  490 => 158,  487 => 157,  481 => 155,  475 => 153,  469 => 151,  461 => 149,  458 => 148,  456 => 147,  450 => 145,  447 => 144,  444 => 143,  441 => 142,  438 => 141,  435 => 140,  432 => 139,  429 => 138,  426 => 137,  423 => 136,  420 => 135,  417 => 134,  414 => 133,  411 => 132,  408 => 131,  405 => 130,  402 => 129,  399 => 128,  396 => 127,  393 => 126,  390 => 125,  387 => 124,  384 => 123,  381 => 122,  378 => 121,  375 => 120,  372 => 119,  369 => 118,  366 => 117,  361 => 116,  358 => 115,  356 => 114,  352 => 112,  339 => 103,  337 => 102,  330 => 97,  326 => 95,  322 => 93,  311 => 88,  307 => 87,  302 => 85,  298 => 84,  291 => 80,  286 => 78,  283 => 77,  277 => 75,  269 => 73,  267 => 72,  263 => 70,  258 => 69,  255 => 68,  253 => 67,  247 => 63,  243 => 61,  239 => 59,  228 => 54,  223 => 52,  218 => 50,  213 => 48,  208 => 45,  200 => 42,  197 => 41,  194 => 40,  188 => 38,  186 => 37,  179 => 35,  176 => 34,  174 => 33,  170 => 32,  167 => 31,  161 => 29,  158 => 28,  152 => 26,  146 => 24,  143 => 23,  140 => 22,  134 => 20,  128 => 18,  125 => 17,  123 => 16,  119 => 14,  116 => 13,  111 => 12,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                {% for invitationData in invitationsData|reverse %} {# Trie les invitations de la plus récente à la plus ancienne #}
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
                {% for request in friendRequests|reverse %} {# Trie les demandes d'amis de la plus récente à la plus ancienne #}
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
                {% for notification in notifications|reverse %} {# Trie les notifications de la plus récente à la plus ancienne #}
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
