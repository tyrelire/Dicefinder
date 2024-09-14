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
        yield "<div class=\"bg-gray-100\">
    <div class=\"container mx-auto py-8\">
        <div class=\"grid grid-cols-4 sm:grid-cols-12 gap-6 px-4\">
            <div class=\"col-span-4 sm:col-span-3\">
                <div class=\"bg-white shadow rounded-lg p-6\">
                    <div class=\"flex flex-col items-center\">
                        ";
        // line 12
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 12, $this->source); })()), "user", [], "any", false, false, false, 12), "avatar", [], "any", false, false, false, 12)) {
            // line 13
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "avatar", [], "any", false, false, false, 13))), "html", null, true);
            yield "\" class=\"w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0\" alt=\"Photo de profil\">
                        ";
        } else {
            // line 15
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" class=\"w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0\" alt=\"Photo de profil par défaut\">
                        ";
        }
        // line 17
        yield "                        <h1 class=\"text-xl font-bold\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "firstName", [], "any", false, false, false, 17), "html", null, true);
        yield " \"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "username", [], "any", false, false, false, 17), "html", null, true);
        yield "\" ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17), "lastName", [], "any", false, false, false, 17), "html", null, true);
        yield "</h1>

                        <!-- Section Niveau de compte -->
                        <div class=\"mt-4 mb-6 text-center\">
                            <span class=\"text-gray-700 text-lg font-bold\">Niveau</span>
                            <span class=\"text-indigo-600 text-xl font-extrabold\">12</span>
                        </div>

                        <!-- Rôles -->
                        <p class=\"text-gray-700\">
                            ";
        // line 27
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MJ") && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JOUEUR"))) {
            // line 28
            yield "                                Maître du Jeu & Joueur
                            ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_MJ")) {
            // line 30
            yield "                                Maître du Jeu
                            ";
        } elseif ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_JOUEUR")) {
            // line 32
            yield "                                Joueur
                            ";
        } else {
            // line 34
            yield "                                Aucun rôle attribué
                            ";
        }
        // line 36
        yield "                        </p>

                        <div class=\"mt-6 flex flex-wrap gap-4 justify-center\">
                            <a href=\"#\" class=\"bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded\">Rejoindre une partie</a>
                            <a href=\"#\" class=\"bg-indigo-500 hover:bg-indigo-600 text-white py-2 px-4 rounded\">Créer une campagne</a>
                        </div>
                    </div>

                    <hr class=\"my-6 border-t border-gray-300\">

                    <!-- Section Compétences -->
                    <div class=\"flex flex-col mb-6\">
                        <span class=\"text-gray-700 uppercase font-bold tracking-wider mb-2\">Compétences</span>
                        <ul>
                            <li class=\"mb-2\">Maître du jeu</li>
                            <li class=\"mb-2\">Création d'univers</li>
                            <li class=\"mb-2\">Stratégie de combat</li>
                            <li class=\"mb-2\">Narration</li>
                        </ul>
                    </div>

                    <!-- Section Badges -->
                    <div class=\"flex flex-col mb-6\">
                        <span class=\"text-gray-700 uppercase font-bold tracking-wider mb-2\">Badges</span>
                        <ul>
                            <li class=\"mb-2\">Expert Narration</li>
                            <li class=\"mb-2\">Stratégiste</li>
                            <li class=\"mb-2\">Créateur d'Univers</li>
                            <li class=\"mb-2\">Maître des Combats</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class=\"col-span-4 sm:col-span-9\">
                <div class=\"bg-white shadow rounded-lg p-6\">
                    <h2 class=\"text-xl font-bold mb-4\">À propos de moi</h2>
                    <p class=\"text-gray-700\">";
        // line 74
        ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "bio", [], "any", false, false, false, 74)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74), "bio", [], "any", false, false, false, 74), "html", null, true)) : (yield "Pas de biographie disponible"));
        yield "</p>

                    <h2 class=\"text-xl font-bold mt-6 mb-4\">Mon expérience dans les jeux de rôle</h2>
                    <div class=\"mb-6\">
                        <div class=\"flex justify-between flex-wrap gap-2 w-full\">
                            <span class=\"text-gray-700 font-bold\">Campagne : Les Brumes de Valoria</span>
                            <p>
                                <span class=\"text-gray-700 mr-2\">Rôle : Maître du Jeu</span>
                                <span class=\"text-gray-700\">2021 - présent</span>
                            </p>
                        </div>
                        <p class=\"mt-2\">Une campagne immersive dans un monde fantastique où les joueurs doivent explorer des terres mystérieuses...</p>
                    </div>
                    <div class=\"mb-6\">
                        <div class=\"flex justify-between flex-wrap gap-2 w-full\">
                            <span class=\"text-gray-700 font-bold\">Campagne : La Cité des Ombres</span>
                            <p>
                                <span class=\"text-gray-700 mr-2\">Rôle : Joueur (Assassin)</span>
                                <span class=\"text-gray-700\">2020 - 2022</span>
                            </p>
                        </div>
                        <p class=\"mt-2\">Une aventure de jeu de rôle urbaine avec des complots, de la trahison et des combats intenses.</p>
                    </div>
                </div>
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
        return array (  198 => 74,  158 => 36,  154 => 34,  150 => 32,  146 => 30,  142 => 28,  140 => 27,  122 => 17,  116 => 15,  110 => 13,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Mon Profil{% endblock %}

{% block body %}
<div class=\"bg-gray-100\">
    <div class=\"container mx-auto py-8\">
        <div class=\"grid grid-cols-4 sm:grid-cols-12 gap-6 px-4\">
            <div class=\"col-span-4 sm:col-span-3\">
                <div class=\"bg-white shadow rounded-lg p-6\">
                    <div class=\"flex flex-col items-center\">
                        {% if app.user.avatar %}
                            <img src=\"{{ asset('uploads/avatars/' ~ app.user.avatar) }}\" class=\"w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0\" alt=\"Photo de profil\">
                        {% else %}
                            <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"w-32 h-32 bg-gray-300 rounded-full mb-4 shrink-0\" alt=\"Photo de profil par défaut\">
                        {% endif %}
                        <h1 class=\"text-xl font-bold\">{{ app.user.firstName }} \"{{ app.user.username }}\" {{ app.user.lastName }}</h1>

                        <!-- Section Niveau de compte -->
                        <div class=\"mt-4 mb-6 text-center\">
                            <span class=\"text-gray-700 text-lg font-bold\">Niveau</span>
                            <span class=\"text-indigo-600 text-xl font-extrabold\">12</span>
                        </div>

                        <!-- Rôles -->
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
                            <a href=\"#\" class=\"bg-green-500 hover:bg-green-600 text-white py-2 px-4 rounded\">Rejoindre une partie</a>
                            <a href=\"#\" class=\"bg-indigo-500 hover:bg-indigo-600 text-white py-2 px-4 rounded\">Créer une campagne</a>
                        </div>
                    </div>

                    <hr class=\"my-6 border-t border-gray-300\">

                    <!-- Section Compétences -->
                    <div class=\"flex flex-col mb-6\">
                        <span class=\"text-gray-700 uppercase font-bold tracking-wider mb-2\">Compétences</span>
                        <ul>
                            <li class=\"mb-2\">Maître du jeu</li>
                            <li class=\"mb-2\">Création d'univers</li>
                            <li class=\"mb-2\">Stratégie de combat</li>
                            <li class=\"mb-2\">Narration</li>
                        </ul>
                    </div>

                    <!-- Section Badges -->
                    <div class=\"flex flex-col mb-6\">
                        <span class=\"text-gray-700 uppercase font-bold tracking-wider mb-2\">Badges</span>
                        <ul>
                            <li class=\"mb-2\">Expert Narration</li>
                            <li class=\"mb-2\">Stratégiste</li>
                            <li class=\"mb-2\">Créateur d'Univers</li>
                            <li class=\"mb-2\">Maître des Combats</li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class=\"col-span-4 sm:col-span-9\">
                <div class=\"bg-white shadow rounded-lg p-6\">
                    <h2 class=\"text-xl font-bold mb-4\">À propos de moi</h2>
                    <p class=\"text-gray-700\">{{ app.user.bio ? app.user.bio : 'Pas de biographie disponible' }}</p>

                    <h2 class=\"text-xl font-bold mt-6 mb-4\">Mon expérience dans les jeux de rôle</h2>
                    <div class=\"mb-6\">
                        <div class=\"flex justify-between flex-wrap gap-2 w-full\">
                            <span class=\"text-gray-700 font-bold\">Campagne : Les Brumes de Valoria</span>
                            <p>
                                <span class=\"text-gray-700 mr-2\">Rôle : Maître du Jeu</span>
                                <span class=\"text-gray-700\">2021 - présent</span>
                            </p>
                        </div>
                        <p class=\"mt-2\">Une campagne immersive dans un monde fantastique où les joueurs doivent explorer des terres mystérieuses...</p>
                    </div>
                    <div class=\"mb-6\">
                        <div class=\"flex justify-between flex-wrap gap-2 w-full\">
                            <span class=\"text-gray-700 font-bold\">Campagne : La Cité des Ombres</span>
                            <p>
                                <span class=\"text-gray-700 mr-2\">Rôle : Joueur (Assassin)</span>
                                <span class=\"text-gray-700\">2020 - 2022</span>
                            </p>
                        </div>
                        <p class=\"mt-2\">Une aventure de jeu de rôle urbaine avec des complots, de la trahison et des combats intenses.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "profile/show.html.twig", "C:\\Users\\benja\\Desktop\\app\\dicefinder\\templates\\profile\\show.html.twig");
    }
}
