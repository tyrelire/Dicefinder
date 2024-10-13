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

/* invitation/index.html.twig */
class __TwigTemplate_edb8274032781659eacf7d097ba873c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invitation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invitation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "invitation/index.html.twig", 1);
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

        yield "Invitations";
        
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
                yield "                    <div class=\"bg-slate-900 p-4 rounded-lg shadow flex flex-col lg:flex-row justify-between items-start lg:items-center space-y-4 lg:space-y-0\">
                        <div class=\"flex items-center\">
                            ";
                // line 16
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 16, $this->source); })()), "groupeJDR", [], "any", false, false, false, 16), "owner", [], "any", false, false, false, 16), "avatar", [], "any", false, false, false, 16)) {
                    // line 17
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 17, $this->source); })()), "groupeJDR", [], "any", false, false, false, 17), "owner", [], "any", false, false, false, 17), "avatar", [], "any", false, false, false, 17))), "html", null, true);
                    yield "\" class=\"w-10 h-10 rounded-full mr-4\" alt=\"Photo de profil\">
                            ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,                 // line 18
$context["invitationData"], "requestedBy", [], "any", false, false, false, 18), "avatar", [], "any", false, false, false, 18)) {
                    // line 19
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 19, $this->source); })()), "requestedBy", [], "any", false, false, false, 19), "avatar", [], "any", false, false, false, 19))), "html", null, true);
                    yield "\" class=\"w-10 h-10 rounded-full mr-4\" alt=\"Photo de profil\">
                            ";
                } else {
                    // line 21
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" class=\"w-10 h-10 rounded-full mr-4\" alt=\"Photo de profil\">
                            ";
                }
                // line 23
                yield "                            <div>
                                <p class=\"text-lg font-bold text-white\">";
                // line 24
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 24, $this->source); })()), "groupeJDR", [], "any", false, false, false, 24), "title", [], "any", false, false, false, 24), "html", null, true);
                yield "</p>
                                ";
                // line 25
                if (CoreExtension::getAttribute($this->env, $this->source, $context["invitationData"], "initiatedByUser", [], "any", false, false, false, 25)) {
                    // line 26
                    yield "                                    <p class=\"text-sm text-white\">
                                        <strong>";
                    // line 27
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 27, $this->source); })()), "requestedBy", [], "any", false, false, false, 27), "username", [], "any", false, false, false, 27), "html", null, true);
                    yield "</strong> veut rejoindre votre univers \"<strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 27, $this->source); })()), "groupeJDR", [], "any", false, false, false, 27), "title", [], "any", false, false, false, 27), "html", null, true);
                    yield "</strong>\".
                                    </p>
                                    ";
                    // line 29
                    if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 29, $this->source); })()), "message", [], "any", false, false, false, 29)) {
                        // line 30
                        yield "                                        <p class=\"text-xs text-gray-400 mt-2\"><em>\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 30, $this->source); })()), "message", [], "any", false, false, false, 30), "html", null, true);
                        yield "\"</em></p>
                                    ";
                    }
                    // line 32
                    yield "                                ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["invitationData"], "initiatedByOwner", [], "any", false, false, false, 32)) {
                    // line 33
                    yield "                                    <p class=\"text-sm text-white\">
                                        <strong>";
                    // line 34
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 34, $this->source); })()), "groupeJDR", [], "any", false, false, false, 34), "owner", [], "any", false, false, false, 34), "username", [], "any", false, false, false, 34), "html", null, true);
                    yield "</strong> vous a invité à rejoindre l'univers \"<strong>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 34, $this->source); })()), "groupeJDR", [], "any", false, false, false, 34), "title", [], "any", false, false, false, 34), "html", null, true);
                    yield "</strong>\".
                                    </p>
                                ";
                }
                // line 37
                yield "                            </div>
                        </div>
                        <div class=\"flex space-x-2 lg:ml-6\">
                            <form action=\"";
                // line 40
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respond_invitation", ["invitationId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 40, $this->source); })()), "id", [], "any", false, false, false, 40)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block\">
                                <input type=\"hidden\" name=\"response\" value=\"accept\">
                                <button type=\"submit\" class=\"bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition-colors duration-200\" aria-label=\"Accepter l'invitation pour rejoindre ";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 42, $this->source); })()), "groupeJDR", [], "any", false, false, false, 42), "title", [], "any", false, false, false, 42), "html", null, true);
                yield "\">Accepter</button>
                            </form>
                            <form action=\"";
                // line 44
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respond_invitation", ["invitationId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block\">
                                <input type=\"hidden\" name=\"response\" value=\"refuse\">
                                <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors durée-200\" aria-label=\"Refuser l'invitation pour rejoindre ";
                // line 46
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 46, $this->source); })()), "groupeJDR", [], "any", false, false, false, 46), "title", [], "any", false, false, false, 46), "html", null, true);
                yield "\">Refuser</button>
                            </form>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['invitationData'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            yield "            </div>
        ";
        } else {
            // line 53
            yield "            <p class=\"text-gray-500\">Aucune invitation en attente.</p>
        ";
        }
        // line 55
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
        return "invitation/index.html.twig";
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
        return array (  223 => 55,  219 => 53,  215 => 51,  204 => 46,  199 => 44,  194 => 42,  189 => 40,  184 => 37,  176 => 34,  173 => 33,  170 => 32,  164 => 30,  162 => 29,  155 => 27,  152 => 26,  150 => 25,  146 => 24,  143 => 23,  137 => 21,  131 => 19,  129 => 18,  124 => 17,  122 => 16,  118 => 14,  115 => 13,  111 => 12,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Invitations{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8\">
    <div class=\"bg-white shadow rounded-lg p-6\">
        <h1 class=\"text-2xl font-bold mb-4 text-gray-800\">Mes Invitations</h1>

        {% if invitationsData|length > 0 %}
            <div class=\"space-y-4\">
                {% for invitationData in invitationsData %}
                    {% set invitation = invitationData.invitation %}
                    <div class=\"bg-slate-900 p-4 rounded-lg shadow flex flex-col lg:flex-row justify-between items-start lg:items-center space-y-4 lg:space-y-0\">
                        <div class=\"flex items-center\">
                            {% if invitation.groupeJDR.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ invitation.groupeJDR.owner.avatar) }}\" class=\"w-10 h-10 rounded-full mr-4\" alt=\"Photo de profil\">
                            {% elseif invitationData.requestedBy.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ invitation.requestedBy.avatar) }}\" class=\"w-10 h-10 rounded-full mr-4\" alt=\"Photo de profil\">
                            {% else %}
                                <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"w-10 h-10 rounded-full mr-4\" alt=\"Photo de profil\">
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
                                <button type=\"submit\" class=\"bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition-colors duration-200\" aria-label=\"Accepter l'invitation pour rejoindre {{ invitation.groupeJDR.title }}\">Accepter</button>
                            </form>
                            <form action=\"{{ path('respond_invitation', { invitationId: invitation.id }) }}\" method=\"POST\" class=\"inline-block\">
                                <input type=\"hidden\" name=\"response\" value=\"refuse\">
                                <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors durée-200\" aria-label=\"Refuser l'invitation pour rejoindre {{ invitation.groupeJDR.title }}\">Refuser</button>
                            </form>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p class=\"text-gray-500\">Aucune invitation en attente.</p>
        {% endif %}
    </div>
</div>
{% endblock %}
", "invitation/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\invitation\\index.html.twig");
    }
}
