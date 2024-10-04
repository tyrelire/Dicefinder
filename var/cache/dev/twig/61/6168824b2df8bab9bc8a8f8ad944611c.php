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
class __TwigTemplate_79ecbdbe097c7a1162d43907a7c18d88 extends Template
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

        yield "Mon Profil";
        
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
    <div class=\"grid grid-cols-4 sm:grid-cols-12 gap-6 px-4\">
        <div class=\"col-span-4 sm:col-span-3\">
            <div class=\"bg-white shadow rounded-lg p-6\">
                <div class=\"flex flex-col items-center\">
                    ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "user", [], "any", false, false, false, 11), "avatar", [], "any", false, false, false, 11)) {
            // line 12
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "avatar", [], "any", false, false, false, 12))), "html", null, true);
            yield "\" class=\"w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0\" alt=\"Photo de profil\">
                    ";
        } else {
            // line 14
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" class=\"w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0\" alt=\"Photo de profil par défaut\">
                    ";
        }
        // line 16
        yield "                    <h1 class=\"text-xl font-bold\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16), "username", [], "any", false, false, false, 16), "html", null, true);
        yield "</h1>
                    ";
        // line 21
        yield "                    <p class=\"text-gray-700\">
                        ";
        // line 22
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MJ") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JOUEUR"))) {
            // line 23
            yield "                            Maître du Jeu & Joueur
                        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MJ")) {
            // line 25
            yield "                            Maître du Jeu
                        ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JOUEUR")) {
            // line 27
            yield "                            Joueur
                        ";
        } else {
            // line 29
            yield "                            Aucun rôle attribué
                        ";
        }
        // line 31
        yield "                    </p>
                    <div class=\"mt-6 flex flex-wrap gap-4 justify-center\">
                        ";
        // line 35
        yield "                    </div>
                </div>
                <hr class=\"my-6 border-t border-gray-300\">
                <div class=\"flex flex-col mb-6\">
                    <span class=\"text-gray-700 uppercase font-bold tracking-wider mb-2\">Contact</span>
                    <ul>
                        <li class=\"mb-2\">Discord</li>
                        <li class=\"mb-2\">X / Twitter</li>
                        <li class=\"mb-2\">Roll 20</li>
                        <li class=\"mb-2\">Youtube</li>
                        <li class=\"mb-2\">Twitch</li>
                    </ul>
                </div>
                <div class=\"flex flex-col mb-6\">
                    <span class=\"text-gray-700 uppercase font-bold tracking-wider mb-2\">Compétences</span>
                    ";
        // line 56
        yield "                </div>
            </div>
        </div>

        <div class=\"col-span-4 sm:col-span-9\">
            <div class=\"bg-white shadow rounded-lg p-6\">
                <h2 class=\"text-xl font-bold mb-4\">À propos de moi</h2>
                <p class=\"text-gray-700\">";
        // line 63
        ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "bio", [], "any", false, false, false, 63)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "bio", [], "any", false, false, false, 63), "html", null, true)) : (yield "Pas de biographie disponible"));
        yield "</p>

                <h2 class=\"text-xl font-bold mt-6 mb-4\">Mon expérience dans les jeux de rôle</h2>
                <div class=\"mb-6\">
                    ";
        // line 67
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 67, $this->source); })()), "user", [], "any", false, false, false, 67), "groupeJDRs", [], "any", false, false, false, 67));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
            // line 68
            yield "                        <div class=\"mb-4\">
                            <div class=\"flex justify-between flex-wrap gap-2 w-full\">
                                <span class=\"text-gray-700 font-bold\">Campagne : ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 70), "html", null, true);
            yield "</span>
                                <p>
                                    <span class=\"text-gray-700 mr-2\">Rôle : ";
            // line 72
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72), "id", [], "any", false, false, false, 72))) ? ("Maître du Jeu") : ("Joueur"));
            yield "</span>
                                    ";
            // line 74
            yield "                                </p>
                            </div>
                            <p class=\"mt-2\">";
            // line 76
            (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "description", [], "any", false, false, false, 76)) > 0)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "description", [], "any", false, false, false, 76), "html", null, true)) : (yield "Description indisponible"));
            yield "</p>
                        </div>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 79
            yield "                        <p class=\"text-center text-gray-500\">Pas encore de campagnes associées.</p>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 81
        yield "                </div>
            </div>
        </div>
    </div>
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
        return array (  221 => 81,  214 => 79,  206 => 76,  202 => 74,  198 => 72,  193 => 70,  189 => 68,  184 => 67,  177 => 63,  168 => 56,  151 => 35,  147 => 31,  143 => 29,  139 => 27,  135 => 25,  131 => 23,  129 => 22,  126 => 21,  121 => 16,  115 => 14,  109 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Profil{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8\">
    <div class=\"grid grid-cols-4 sm:grid-cols-12 gap-6 px-4\">
        <div class=\"col-span-4 sm:col-span-3\">
            <div class=\"bg-white shadow rounded-lg p-6\">
                <div class=\"flex flex-col items-center\">
                    {% if app.user.avatar %}
                        <img src=\"{{ asset('uploads/avatars/' ~ app.user.avatar) }}\" class=\"w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0\" alt=\"Photo de profil\">
                    {% else %}
                        <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0\" alt=\"Photo de profil par défaut\">
                    {% endif %}
                    <h1 class=\"text-xl font-bold\">{{ app.user.username }}</h1>
                    {# <div class=\"mt-4 mb-6 text-center\">
                        <span class=\"text-gray-700 text-lg font-bold\">Niveau</span>
                        <span class=\"text-indigo-600 text-xl font-extrabold\">{{ app.user.level|default('1') }}</span>
                    </div> #}
                    <p class=\"text-gray-700\">
                        {% if is_granted('ROLE_MJ') and is_granted('ROLE_JOUEUR') %}
                            Maître du Jeu & Joueur
                        {% elseif is_granted('ROLE_MJ') %}
                            Maître du Jeu
                        {% elseif is_granted('ROLE_JOUEUR') %}
                            Joueur
                        {% else %}
                            Aucun rôle attribué
                        {% endif %}
                    </p>
                    <div class=\"mt-6 flex flex-wrap gap-4 justify-center\">
                        {# <a href=\"{{ path('app_join_game') }}\" class=\"bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded\">Rejoindre une partie</a>
                        <a href=\"{{ path('app_create_game') }}\" class=\"bg-indigo-500 hover:bg-indigo-600 text-white py-2 px-4 rounded\">Créer une campagne</a> #}
                    </div>
                </div>
                <hr class=\"my-6 border-t border-gray-300\">
                <div class=\"flex flex-col mb-6\">
                    <span class=\"text-gray-700 uppercase font-bold tracking-wider mb-2\">Contact</span>
                    <ul>
                        <li class=\"mb-2\">Discord</li>
                        <li class=\"mb-2\">X / Twitter</li>
                        <li class=\"mb-2\">Roll 20</li>
                        <li class=\"mb-2\">Youtube</li>
                        <li class=\"mb-2\">Twitch</li>
                    </ul>
                </div>
                <div class=\"flex flex-col mb-6\">
                    <span class=\"text-gray-700 uppercase font-bold tracking-wider mb-2\">Compétences</span>
                    {# <ul>
                        <li class=\"mb-2\">Expert Narration</li>
                        <li class=\"mb-2\">Stratégiste</li>
                        <li class=\"mb-2\">Créateur d'Univers</li>
                        <li class=\"mb-2\">Maître des Combats</li>
                    </ul> #}
                </div>
            </div>
        </div>

        <div class=\"col-span-4 sm:col-span-9\">
            <div class=\"bg-white shadow rounded-lg p-6\">
                <h2 class=\"text-xl font-bold mb-4\">À propos de moi</h2>
                <p class=\"text-gray-700\">{{ app.user.bio ? app.user.bio : 'Pas de biographie disponible' }}</p>

                <h2 class=\"text-xl font-bold mt-6 mb-4\">Mon expérience dans les jeux de rôle</h2>
                <div class=\"mb-6\">
                    {% for jdr in app.user.groupeJDRs %}
                        <div class=\"mb-4\">
                            <div class=\"flex justify-between flex-wrap gap-2 w-full\">
                                <span class=\"text-gray-700 font-bold\">Campagne : {{ jdr.title }}</span>
                                <p>
                                    <span class=\"text-gray-700 mr-2\">Rôle : {{ jdr.owner.id == app.user.id ? 'Maître du Jeu' : 'Joueur' }}</span>
                                    {# <span class=\"text-gray-700\">{{ jdr.startDate ? jdr.startDate|date('Y') : 'Date inconnue' }} - {{ jdr.endDate ? jdr.endDate|date('Y') : 'Présent' }}</span> #}
                                </p>
                            </div>
                            <p class=\"mt-2\">{{ jdr.description|length > 0 ? jdr.description : 'Description indisponible' }}</p>
                        </div>
                    {% else %}
                        <p class=\"text-center text-gray-500\">Pas encore de campagnes associées.</p>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "profile/show.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\profile\\show.html.twig");
    }
}
