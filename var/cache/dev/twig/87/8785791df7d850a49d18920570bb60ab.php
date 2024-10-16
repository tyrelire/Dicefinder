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
        yield "<div class=\"container mx-auto px-4 py-8\">
    <div class=\"bg-white shadow rounded-lg p-6\">
        <h1 class=\"text-2xl font-bold mb-4 text-gray-800\">Mes Invitations</h1>

        ";
        // line 10
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitationsData"]) || array_key_exists("invitationsData", $context) ? $context["invitationsData"] : (function () { throw new RuntimeError('Variable "invitationsData" does not exist.', 10, $this->source); })())) > 0)) {
            // line 11
            yield "            <div class=\"space-y-4\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invitationsData"]) || array_key_exists("invitationsData", $context) ? $context["invitationsData"] : (function () { throw new RuntimeError('Variable "invitationsData" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["invitationData"]) {
                // line 13
                yield "                    ";
                $context["invitation"] = CoreExtension::getAttribute($this->env, $this->source, $context["invitationData"], "invitation", [], "any", false, false, false, 13);
                // line 14
                yield "                    <div class=\"bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 p-4 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 ease-in-out flex flex-col lg:flex-row justify-between items-start lg:items-center space-y-4 lg:space-y-0\">
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
                        yield "\" class=\"w-10 h-10 rounded-full mr-4 ring-2 ring-gray-700\" alt=\"Photo de profil du propriétaire\">
                                ";
                    } else {
                        // line 20
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                        yield "\" class=\"w-10 h-10 rounded-full mr-4 ring-2 ring-gray-700\" alt=\"Photo de profil par défaut\">
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
                        yield "\" class=\"w-10 h-10 rounded-full mr-4 ring-2 ring-gray-700\" alt=\"Photo de profil de l'utilisateur\">
                                ";
                    } else {
                        // line 26
                        yield "                                    <img src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                        yield "\" class=\"w-10 h-10 rounded-full mr-4 ring-2 ring-gray-700\" alt=\"Photo de profil par défaut\">
                                ";
                    }
                    // line 28
                    yield "                            ";
                } else {
                    // line 29
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" class=\"w-10 h-10 rounded-full mr-4 ring-2 ring-gray-700\" alt=\"Photo de profil par défaut\">
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
                    yield "                                    <p class=\"text-sm text-white\">
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
                        yield "                                        <p class=\"text-xs text-gray-400 mt-2\"><em>\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 38, $this->source); })()), "message", [], "any", false, false, false, 38), "html", null, true);
                        yield "\"</em></p>
                                    ";
                    }
                    // line 40
                    yield "                                ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["invitationData"], "initiatedByOwner", [], "any", false, false, false, 40)) {
                    // line 41
                    yield "                                    <p class=\"text-sm text-white\">
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
                        <div class=\"flex space-x-2 lg:ml-6\">
                            <form action=\"";
                // line 48
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respond_invitation", ["invitationId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 48, $this->source); })()), "id", [], "any", false, false, false, 48)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block\">
                                <input type=\"hidden\" name=\"response\" value=\"accept\">
                                <button type=\"submit\" class=\"bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition-colors duration-200 hover:shadow-lg\" aria-label=\"Accepter l'invitation pour rejoindre ";
                // line 50
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 50, $this->source); })()), "groupeJDR", [], "any", false, false, false, 50), "title", [], "any", false, false, false, 50), "html", null, true);
                yield "\">Accepter</button>
                            </form>
                            <form action=\"";
                // line 52
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respond_invitation", ["invitationId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 52, $this->source); })()), "id", [], "any", false, false, false, 52)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block\">
                                <input type=\"hidden\" name=\"response\" value=\"refuse\">
                                <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors durée-200 hover:shadow-lg\" aria-label=\"Refuser l'invitation pour rejoindre ";
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
            yield "            <p class=\"text-gray-500\">Aucune invitation en attente.</p>
        ";
        }
        // line 63
        yield "    </div>

    <div class=\"bg-white shadow rounded-lg p-6 mt-8\">
        <!-- Conteneur pour le titre et le bouton alignés sur une ligne -->
        <div class=\"flex justify-between items-center mb-4\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Mes Notifications</h1>
            ";
        // line 69
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 69, $this->source); })())) > 0)) {
            // line 70
            yield "                <form action=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_clear_all");
            yield "\" method=\"POST\" class=\"inline-block\">
                    <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors duration-200 hover:shadow-lg\">
                        Effacer toutes les notifications
                    </button>
                </form>
            ";
        }
        // line 76
        yield "        </div>

        ";
        // line 78
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 78, $this->source); })())) > 0)) {
            // line 79
            yield "            <div class=\"space-y-4\">
                ";
            // line 80
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 80, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                // line 81
                yield "                    <div class=\"bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 p-4 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 ease-in-out flex flex-col lg:flex-row justify-between items-start lg:items-center space-y-4 lg:space-y-0\">
                        <div class=\"flex items-center\">
                            <div>
                                <p class=\"text-lg font-bold text-white\">";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "groupeJDR", [], "any", false, false, false, 84), "title", [], "any", false, false, false, 84), "html", null, true);
                yield "</p>
                                <p class=\"text-sm text-white\">
                                    ";
                // line 86
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 86), "html", null, true);
                yield "
                                </p>
                                <p class=\"text-xs text-gray-400 mt-2\">";
                // line 88
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "createdAt", [], "any", false, false, false, 88), "d/m/Y H:i"), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex space-x-2 lg:ml-6\">
                            <form action=\"";
                // line 92
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_respond", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "id", [], "any", false, false, false, 92)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block\">
                                <input type=\"hidden\" name=\"response\" value=\"read\">
                                <button type=\"submit\" class=\"bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-200 hover:shadow-lg\" aria-label=\"Marquer comme lue\">Marquer comme lu</button>
                            </form>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            yield "            </div>
        ";
        } else {
            // line 101
            yield "            <p class=\"text-gray-500\">Aucune notification en attente.</p>
        ";
        }
        // line 103
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
        return array (  322 => 103,  318 => 101,  314 => 99,  301 => 92,  294 => 88,  289 => 86,  284 => 84,  279 => 81,  275 => 80,  272 => 79,  270 => 78,  266 => 76,  256 => 70,  254 => 69,  246 => 63,  242 => 61,  238 => 59,  227 => 54,  222 => 52,  217 => 50,  212 => 48,  207 => 45,  199 => 42,  196 => 41,  193 => 40,  187 => 38,  185 => 37,  178 => 35,  175 => 34,  173 => 33,  169 => 32,  166 => 31,  160 => 29,  157 => 28,  151 => 26,  145 => 24,  142 => 23,  139 => 22,  133 => 20,  127 => 18,  124 => 17,  122 => 16,  118 => 14,  115 => 13,  111 => 12,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Invitations et Notifications{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8\">
    <div class=\"bg-white shadow rounded-lg p-6\">
        <h1 class=\"text-2xl font-bold mb-4 text-gray-800\">Mes Invitations</h1>

        {% if invitationsData|length > 0 %}
            <div class=\"space-y-4\">
                {% for invitationData in invitationsData %}
                    {% set invitation = invitationData.invitation %}
                    <div class=\"bg-gradient-to-r from-gray-900 via-gray-800 to-gray-900 p-4 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 ease-in-out flex flex-col lg:flex-row justify-between items-start lg:items-center space-y-4 lg:space-y-0\">
                        <div class=\"flex items-center\">
                            {% if invitationData.initiatedByOwner %}
                                {% if invitation.groupeJDR.owner.avatar %}
                                    <img src=\"{{ asset('uploads/avatars/' ~ invitation.groupeJDR.owner.avatar) }}\" class=\"w-10 h-10 rounded-full mr-4 ring-2 ring-gray-700\" alt=\"Photo de profil du propriétaire\">
                                {% else %}
                                    <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"w-10 h-10 rounded-full mr-4 ring-2 ring-gray-700\" alt=\"Photo de profil par défaut\">
                                {% endif %}
                            {% elseif invitationData.initiatedByUser %}
                                {% if invitation.requestedBy.avatar %}
                                    <img src=\"{{ asset('uploads/avatars/' ~ invitation.requestedBy.avatar) }}\" class=\"w-10 h-10 rounded-full mr-4 ring-2 ring-gray-700\" alt=\"Photo de profil de l'utilisateur\">
                                {% else %}
                                    <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"w-10 h-10 rounded-full mr-4 ring-2 ring-gray-700\" alt=\"Photo de profil par défaut\">
                                {% endif %}
                            {% else %}
                                <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"w-10 h-10 rounded-full mr-4 ring-2 ring-gray-700\" alt=\"Photo de profil par défaut\">
                            {% endif %}
                            <div>
                                <p class=\"text-lg font-bold text-white\">{{ invitation.groupeJDR.title }}</p>
                                {% if invitationData.initiatedByUser %}
                                    <p class=\"text-sm text-white\">
                                        <strong>{{ invitation.requestedBy.username }}</strong> veut rejoindre votre univers \"<strong>{{ invitation.groupeJDR.title }}</strong>\".
                                    </p>
                                    {% if invitation.message %}
                                        <p class=\"text-xs text-gray-400 mt-2\"><em>\"{{ invitation.message }}\"</em></p>
                                    {% endif %}
                                {% elseif invitationData.initiatedByOwner %}
                                    <p class=\"text-sm text-white\">
                                        <strong>{{ invitation.groupeJDR.owner.username }}</strong> vous a invité à rejoindre l'univers \"<strong>{{ invitation.groupeJDR.title }}</strong>\".
                                    </p>
                                {% endif %}
                            </div>
                        </div>
                        <div class=\"flex space-x-2 lg:ml-6\">
                            <form action=\"{{ path('respond_invitation', { invitationId: invitation.id }) }}\" method=\"POST\" class=\"inline-block\">
                                <input type=\"hidden\" name=\"response\" value=\"accept\">
                                <button type=\"submit\" class=\"bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition-colors duration-200 hover:shadow-lg\" aria-label=\"Accepter l'invitation pour rejoindre {{ invitation.groupeJDR.title }}\">Accepter</button>
                            </form>
                            <form action=\"{{ path('respond_invitation', { invitationId: invitation.id }) }}\" method=\"POST\" class=\"inline-block\">
                                <input type=\"hidden\" name=\"response\" value=\"refuse\">
                                <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors durée-200 hover:shadow-lg\" aria-label=\"Refuser l'invitation pour rejoindre {{ invitation.groupeJDR.title }}\">Refuser</button>
                            </form>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p class=\"text-gray-500\">Aucune invitation en attente.</p>
        {% endif %}
    </div>

    <div class=\"bg-white shadow rounded-lg p-6 mt-8\">
        <!-- Conteneur pour le titre et le bouton alignés sur une ligne -->
        <div class=\"flex justify-between items-center mb-4\">
            <h1 class=\"text-2xl font-bold text-gray-800\">Mes Notifications</h1>
            {% if notifications|length > 0 %}
                <form action=\"{{ path('app_notifications_clear_all') }}\" method=\"POST\" class=\"inline-block\">
                    <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors duration-200 hover:shadow-lg\">
                        Effacer toutes les notifications
                    </button>
                </form>
            {% endif %}
        </div>

        {% if notifications|length > 0 %}
            <div class=\"space-y-4\">
                {% for notification in notifications %}
                    <div class=\"bg-gradient-to-r from-blue-900 via-blue-800 to-blue-900 p-4 rounded-lg shadow-lg hover:shadow-2xl transform hover:scale-105 transition-all duration-300 ease-in-out flex flex-col lg:flex-row justify-between items-start lg:items-center space-y-4 lg:space-y-0\">
                        <div class=\"flex items-center\">
                            <div>
                                <p class=\"text-lg font-bold text-white\">{{ notification.groupeJDR.title }}</p>
                                <p class=\"text-sm text-white\">
                                    {{ notification.message }}
                                </p>
                                <p class=\"text-xs text-gray-400 mt-2\">{{ notification.createdAt|date('d/m/Y H:i') }}</p>
                            </div>
                        </div>
                        <div class=\"flex space-x-2 lg:ml-6\">
                            <form action=\"{{ path('app_notifications_respond', { id: notification.id }) }}\" method=\"POST\" class=\"inline-block\">
                                <input type=\"hidden\" name=\"response\" value=\"read\">
                                <button type=\"submit\" class=\"bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition-colors duration-200 hover:shadow-lg\" aria-label=\"Marquer comme lue\">Marquer comme lu</button>
                            </form>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p class=\"text-gray-500\">Aucune notification en attente.</p>
        {% endif %}
    </div>
</div>
{% endblock %}
", "notification/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\notification\\index.html.twig");
    }
}
