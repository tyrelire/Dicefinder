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

/* my_game/index.html.twig */
class __TwigTemplate_2c411cd98e2a8da759477523caf93b33 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "my_game/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "my_game/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "my_game/index.html.twig", 1);
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

        yield "Gérer Mes Parties";
        
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
        yield "<div class=\"container mx-auto px-4 py-8 mt-20\">
    <h1 class=\"text-4xl font-bold text-center mb-10 text-white\">Gérer Mes Parties</h1>

    <div class=\"flex justify-center items-center gap-4 mb-8\">
        <div class=\"relative w-1/3\">
            <input type=\"text\" placeholder=\"Tapez Votre Recherche...\" class=\"w-full p-4 pl-10 text-gray-900 bg-gray-200 rounded-lg focus:ring-blue-500 focus:border-blue-500\">
            <button class=\"absolute top-1/2 right-2 transform -translate-y-1/2 bg-blue-600 text-white rounded-full p-2\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\" />
            </svg>
            </button>
        </div>
        <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_new");
        yield "\" class=\"bg-green-500 text-white px-6 py-3 rounded-lg shadow hover:bg-green-600\">Créer</a>
    </div>

    <h2 class=\"text-2xl font-bold mb-6 text-white\">Mes JDR (MJ)</h2>
    ";
        // line 22
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["ownedJdrs"]) || array_key_exists("ownedJdrs", $context) ? $context["ownedJdrs"] : (function () { throw new RuntimeError('Variable "ownedJdrs" does not exist.', 22, $this->source); })()))) {
            // line 23
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-10\">
            ";
            // line 24
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ownedJdrs"]) || array_key_exists("ownedJdrs", $context) ? $context["ownedJdrs"] : (function () { throw new RuntimeError('Variable "ownedJdrs" does not exist.', 24, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
                // line 25
                yield "                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 27))), "html", null, true);
                yield "\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full\">
                            ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 29), "html", null, true);
                yield "
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <h2 class=\"text-lg font-semibold mb-2 text-white\">";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 33), "html", null, true);
                yield "</h2>
                        <div class=\"flex items-center gap-2 mb-4\">
                            ";
                // line 35
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 35), "avatar", [], "any", false, false, false, 35)) {
                    // line 36
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 36), "avatar", [], "any", false, false, false, 36))), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
                } else {
                    // line 38
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
                }
                // line 40
                yield "                            <div class=\"text-white\">
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">";
                // line 42
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 42), "username", [], "any", false, false, false, 42), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center text-white\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">";
                // line 47
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 47) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 47))), "html", null, true);
                yield "</p>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 52
            yield "        </div>
    ";
        } else {
            // line 54
            yield "        <p class=\"text-center text-gray-500\">Vous n'êtes MJ dans aucun JDR pour le moment.</p>
    ";
        }
        // line 56
        yield "
    <h2 class=\"text-2xl font-bold mb-6 text-white\">JDR où je suis Joueur</h2>
    ";
        // line 58
        if ( !Twig\Extension\CoreExtension::testEmpty((isset($context["playerJdrs"]) || array_key_exists("playerJdrs", $context) ? $context["playerJdrs"] : (function () { throw new RuntimeError('Variable "playerJdrs" does not exist.', 58, $this->source); })()))) {
            // line 59
            yield "        <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8\">
            ";
            // line 60
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["playerJdrs"]) || array_key_exists("playerJdrs", $context) ? $context["playerJdrs"] : (function () { throw new RuntimeError('Variable "playerJdrs" does not exist.', 60, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
                // line 61
                yield "                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 63))), "html", null, true);
                yield "\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full\">
                            ";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 65), "html", null, true);
                yield "
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <h2 class=\"text-lg font-semibold mb-2\">";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 69), "html", null, true);
                yield "</h2>
                        <div class=\"flex items-center gap-2 mb-4\">
                            ";
                // line 71
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 71), "avatar", [], "any", false, false, false, 71)) {
                    // line 72
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 72), "avatar", [], "any", false, false, false, 72))), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
                } else {
                    // line 74
                    yield "                                <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
                }
                // line 76
                yield "                            <div>
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">";
                // line 78
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 78), "username", [], "any", false, false, false, 78), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 83) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 83))), "html", null, true);
                yield "</p>
                        </div>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 88
            yield "        </div>
    ";
        } else {
            // line 90
            yield "        <p class=\"text-center text-gray-500\">Vous ne participez à aucun JDR pour le moment.</p>
    ";
        }
        // line 92
        yield "</div>

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
        return "my_game/index.html.twig";
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
        return array (  275 => 92,  271 => 90,  267 => 88,  256 => 83,  248 => 78,  244 => 76,  238 => 74,  232 => 72,  230 => 71,  225 => 69,  218 => 65,  213 => 63,  209 => 61,  205 => 60,  202 => 59,  200 => 58,  196 => 56,  192 => 54,  188 => 52,  177 => 47,  169 => 42,  165 => 40,  159 => 38,  153 => 36,  151 => 35,  146 => 33,  139 => 29,  134 => 27,  130 => 25,  126 => 24,  123 => 23,  121 => 22,  114 => 18,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Gérer Mes Parties{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8 mt-20\">
    <h1 class=\"text-4xl font-bold text-center mb-10 text-white\">Gérer Mes Parties</h1>

    <div class=\"flex justify-center items-center gap-4 mb-8\">
        <div class=\"relative w-1/3\">
            <input type=\"text\" placeholder=\"Tapez Votre Recherche...\" class=\"w-full p-4 pl-10 text-gray-900 bg-gray-200 rounded-lg focus:ring-blue-500 focus:border-blue-500\">
            <button class=\"absolute top-1/2 right-2 transform -translate-y-1/2 bg-blue-600 text-white rounded-full p-2\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"w-5 h-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 4v16m8-8H4\" />
            </svg>
            </button>
        </div>
        <a href=\"{{ path('app_groupe_j_d_r_new') }}\" class=\"bg-green-500 text-white px-6 py-3 rounded-lg shadow hover:bg-green-600\">Créer</a>
    </div>

    <h2 class=\"text-2xl font-bold mb-6 text-white\">Mes JDR (MJ)</h2>
    {% if ownedJdrs is not empty %}
        <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 mb-10\">
            {% for jdr in ownedJdrs %}
                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"{{ asset('uploads/images-jdr/' ~ jdr.picture) }}\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full\">
                            {{ jdr.status }}
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <h2 class=\"text-lg font-semibold mb-2 text-white\">{{ jdr.title }}</h2>
                        <div class=\"flex items-center gap-2 mb-4\">
                            {% if jdr.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ jdr.owner.avatar) }}\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            {% else %}
                                <img src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            {% endif %}
                            <div class=\"text-white\">
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">{{ jdr.owner.username }}</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center text-white\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">{{ jdr.maxPlayer - jdr.players|length }}</p>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <p class=\"text-center text-gray-500\">Vous n'êtes MJ dans aucun JDR pour le moment.</p>
    {% endif %}

    <h2 class=\"text-2xl font-bold mb-6 text-white\">JDR où je suis Joueur</h2>
    {% if playerJdrs is not empty %}
        <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8\">
            {% for jdr in playerJdrs %}
                <div class=\"bg-gray-800 rounded-xl shadow-lg overflow-hidden\">
                    <div class=\"relative\">
                        <img src=\"{{ asset('uploads/images-jdr/' ~ jdr.picture) }}\" alt=\"Image de la partie\" class=\"w-full h-48 object-cover\">
                        <div class=\"absolute top-2 right-2 bg-red-500 text-white text-xs font-bold px-2 py-1 rounded-full\">
                            {{ jdr.status }}
                        </div>
                    </div>
                    <div class=\"p-4\">
                        <h2 class=\"text-lg font-semibold mb-2\">{{ jdr.title }}</h2>
                        <div class=\"flex items-center gap-2 mb-4\">
                            {% if jdr.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ jdr.owner.avatar) }}\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            {% else %}
                                <img src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            {% endif %}
                            <div>
                                <p class=\"text-sm\">MJ</p>
                                <p class=\"text-sm font-semibold\">{{ jdr.owner.username }}</p>
                            </div>
                        </div>
                        <div class=\"flex justify-between items-center\">
                            <p class=\"text-sm\">Places Disponibles</p>
                            <p class=\"text-xl font-bold\">{{ jdr.maxPlayer - jdr.players|length }}</p>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>
    {% else %}
        <p class=\"text-center text-gray-500\">Vous ne participez à aucun JDR pour le moment.</p>
    {% endif %}
</div>

{% endblock %}
", "my_game/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\my_game\\index.html.twig");
    }
}
