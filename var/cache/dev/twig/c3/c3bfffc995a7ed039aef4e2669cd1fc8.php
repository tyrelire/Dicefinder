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

/* footer/about.html.twig */
class __TwigTemplate_a4cd7d6aef4464ac0321fd4dff05c114 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/about.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/about.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "footer/about.html.twig", 1);
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

        yield "À propos de nous | DiceFinder";
        
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
        yield "<div class=\"bg-gray-900 text-white py-16 px-4 sm:px-6 lg:px-8\">
    <div class=\"max-w-7xl mx-auto\">
        <div class=\"text-center\">
            <h1 class=\"text-4xl font-extrabold sm:text-5xl\">À propos de nous</h1>
            <p class=\"mt-4 text-lg text-gray-400\">Découvrez qui se cache derrière DiceFinder et notre mission.</p>
        </div>

        <div class=\"mt-12 space-y-12\">
            <section>
                <h2 class=\"text-3xl font-bold text-white\">Bienvenue sur DiceFinder</h2>
                <p class=\"mt-4 text-gray-400\">
                    DiceFinder est une plateforme conçue par des passionnés de jeux de rôle, pour tous ceux qui veulent vivre des aventures inoubliables. Notre mission est de simplifier l'organisation des parties, de connecter les joueurs et les maîtres de jeu, et de rendre les jeux de rôle plus accessibles à tous.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">L'Équipe derrière DiceFinder</h2>

                <div class=\"mt-6 space-y-8\">
                    <div class=\"flex items-center space-x-6\">
                        <img class=\"w-20 h-20 rounded-full object-cover\" src=\"";
        // line 26
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team/talep.jpg"), "html", null, true);
        yield "\" alt=\"Photo de Talep\">
                        <div>
                            <h3 class=\"text-2xl font-semibold\">Talep (Pelcat Théo) - Fondateur</h3>
                            <p class=\"text-gray-400 mt-2\">
                                Je suis Talep, fondateur de DiceFinder et maître de jeu depuis plus de 10 ans. Mon objectif est de créer une plateforme qui facilite la vie des maîtres de jeu et des joueurs, en simplifiant l’organisation des parties. J’utilise mon expérience en gestion pour développer DiceFinder et en faire un endroit convivial où chacun peut trouver de quoi vivre sa passion du JDR.
                            </p>
                        </div>
                    </div>

                    <div class=\"flex items-center space-x-6\">
                        <img class=\"w-20 h-20 rounded-full object-cover\" src=\"";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team/benjamin.jpg"), "html", null, true);
        yield "\" alt=\"Photo de Benjamin\">
                        <div>
                            <h3 class=\"text-2xl font-semibold\">Benjamin - Développeur Principal</h3>
                            <p class=\"text-gray-400 mt-2\">
                                Benjamin est notre développeur principal, le magicien qui transforme les idées en réalité. Il est responsable de la partie technique de DiceFinder et travaille sans relâche pour offrir une plateforme moderne et intuitive. Grâce à lui, DiceFinder évolue constamment avec de nouvelles fonctionnalités qui enrichissent l’expérience des utilisateurs.
                            </p>
                        </div>
                    </div>

                    <div class=\"flex items-center space-x-6\">
                        <img class=\"w-20 h-20 rounded-full object-cover\" src=\"";
        // line 46
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/team/volunteers.jpg"), "html", null, true);
        yield "\" alt=\"Photo de l'équipe bénévole\">
                        <div>
                            <h3 class=\"text-2xl font-semibold\">Les Bénévoles - Modération</h3>
                            <p class=\"text-gray-400 mt-2\">
                                Nous avons la chance d'être épaulés par une équipe de bénévoles qui s'occupent de la modération de la plateforme. Ils veillent à ce que DiceFinder reste un espace accueillant et agréable pour tous, en s'assurant que les échanges se déroulent dans le respect et la bonne humeur.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">Notre Mission</h2>
                <p class=\"mt-4 text-gray-400\">
                    Nous souhaitons rendre les jeux de rôle accessibles à tous, en proposant une plateforme qui connecte les joueurs et maîtres de jeu facilement. DiceFinder, c’est avant tout une communauté de passionnés qui grandit ensemble et partage le plaisir du JDR.
                </p>
                <p class=\"mt-2 text-gray-400\">Merci de nous rejoindre dans cette aventure !</p>
            </section>
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
        return "footer/about.html.twig";
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
        return array (  148 => 46,  135 => 36,  122 => 26,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}À propos de nous | DiceFinder{% endblock %}

{% block body %}
<div class=\"bg-gray-900 text-white py-16 px-4 sm:px-6 lg:px-8\">
    <div class=\"max-w-7xl mx-auto\">
        <div class=\"text-center\">
            <h1 class=\"text-4xl font-extrabold sm:text-5xl\">À propos de nous</h1>
            <p class=\"mt-4 text-lg text-gray-400\">Découvrez qui se cache derrière DiceFinder et notre mission.</p>
        </div>

        <div class=\"mt-12 space-y-12\">
            <section>
                <h2 class=\"text-3xl font-bold text-white\">Bienvenue sur DiceFinder</h2>
                <p class=\"mt-4 text-gray-400\">
                    DiceFinder est une plateforme conçue par des passionnés de jeux de rôle, pour tous ceux qui veulent vivre des aventures inoubliables. Notre mission est de simplifier l'organisation des parties, de connecter les joueurs et les maîtres de jeu, et de rendre les jeux de rôle plus accessibles à tous.
                </p>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">L'Équipe derrière DiceFinder</h2>

                <div class=\"mt-6 space-y-8\">
                    <div class=\"flex items-center space-x-6\">
                        <img class=\"w-20 h-20 rounded-full object-cover\" src=\"{{ asset('images/team/talep.jpg') }}\" alt=\"Photo de Talep\">
                        <div>
                            <h3 class=\"text-2xl font-semibold\">Talep (Pelcat Théo) - Fondateur</h3>
                            <p class=\"text-gray-400 mt-2\">
                                Je suis Talep, fondateur de DiceFinder et maître de jeu depuis plus de 10 ans. Mon objectif est de créer une plateforme qui facilite la vie des maîtres de jeu et des joueurs, en simplifiant l’organisation des parties. J’utilise mon expérience en gestion pour développer DiceFinder et en faire un endroit convivial où chacun peut trouver de quoi vivre sa passion du JDR.
                            </p>
                        </div>
                    </div>

                    <div class=\"flex items-center space-x-6\">
                        <img class=\"w-20 h-20 rounded-full object-cover\" src=\"{{ asset('images/team/benjamin.jpg') }}\" alt=\"Photo de Benjamin\">
                        <div>
                            <h3 class=\"text-2xl font-semibold\">Benjamin - Développeur Principal</h3>
                            <p class=\"text-gray-400 mt-2\">
                                Benjamin est notre développeur principal, le magicien qui transforme les idées en réalité. Il est responsable de la partie technique de DiceFinder et travaille sans relâche pour offrir une plateforme moderne et intuitive. Grâce à lui, DiceFinder évolue constamment avec de nouvelles fonctionnalités qui enrichissent l’expérience des utilisateurs.
                            </p>
                        </div>
                    </div>

                    <div class=\"flex items-center space-x-6\">
                        <img class=\"w-20 h-20 rounded-full object-cover\" src=\"{{ asset('images/team/volunteers.jpg') }}\" alt=\"Photo de l'équipe bénévole\">
                        <div>
                            <h3 class=\"text-2xl font-semibold\">Les Bénévoles - Modération</h3>
                            <p class=\"text-gray-400 mt-2\">
                                Nous avons la chance d'être épaulés par une équipe de bénévoles qui s'occupent de la modération de la plateforme. Ils veillent à ce que DiceFinder reste un espace accueillant et agréable pour tous, en s'assurant que les échanges se déroulent dans le respect et la bonne humeur.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <h2 class=\"text-3xl font-bold text-white\">Notre Mission</h2>
                <p class=\"mt-4 text-gray-400\">
                    Nous souhaitons rendre les jeux de rôle accessibles à tous, en proposant une plateforme qui connecte les joueurs et maîtres de jeu facilement. DiceFinder, c’est avant tout une communauté de passionnés qui grandit ensemble et partage le plaisir du JDR.
                </p>
                <p class=\"mt-2 text-gray-400\">Merci de nous rejoindre dans cette aventure !</p>
            </section>
        </div>
    </div>
</div>
{% endblock %}
", "footer/about.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\footer\\about.html.twig");
    }
}
