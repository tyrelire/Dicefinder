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

/* footer/team.html.twig */
class __TwigTemplate_28e0e478f29313cca56070c25d8416a5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/team.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/team.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "footer/team.html.twig", 1);
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

        yield "Notre Équipe | DiceFinder";
        
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
            <h1 class=\"text-4xl font-extrabold sm:text-5xl\">Notre Équipe</h1>
            <p class=\"mt-4 text-lg text-gray-400\">Découvrez les passionnés derrière DiceFinder</p>
        </div>

        <div class=\"mt-12 space-y-12\">
            <section class=\"flex flex-col lg:flex-row lg:items-center lg:space-x-8\">
                <img class=\"w-32 h-32 rounded-full mx-auto lg:mx-0\" src=\"";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/talep.jpg"), "html", null, true);
        yield "\" alt=\"Talep\">
                <div class=\"mt-6 lg:mt-0 text-center lg:text-left\">
                    <h2 class=\"text-3xl font-bold\">Talep (Pelcat Théo) - Fondateur</h2>
                    <p class=\"mt-4 text-gray-400\">
                        Talep est le créateur de DiceFinder et le moteur principal derrière cette aventure. Maître de jeu depuis plus de 10 ans, il combine son expérience dans l’animation de parties avec ses compétences en gestion acquises en tant que directeur de magasin.
                    </p>
                    <p class=\"mt-4 text-gray-400\">
                        Son objectif : simplifier la mise en relation des joueurs et maîtres de jeu en construisant une plateforme moderne qui enrichit l'expérience du jeu de rôle.
                    </p>
                </div>
            </section>

            <section class=\"flex flex-col lg:flex-row lg:items-center lg:space-x-8\">
                <img class=\"w-32 h-32 rounded-full mx-auto lg:mx-0\" src=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/benjamin.jpg"), "html", null, true);
        yield "\" alt=\"Benjamin\">
                <div class=\"mt-6 lg:mt-0 text-center lg:text-left\">
                    <h2 class=\"text-3xl font-bold\">Benjamin - Développeur Principal</h2>
                    <p class=\"mt-4 text-gray-400\">
                        Benjamin est notre développeur principal. Actuellement en études de développement, il travaille en étroite collaboration avec Talep pour transformer les idées en réalité. Passionné de technologie et de jeux, il contribue à faire de DiceFinder une plateforme fluide et intuitive.
                    </p>
                </div>
            </section>

            <section class=\"flex flex-col lg:flex-row lg:items-center lg:space-x-8\">
                <img class=\"w-32 h-32 rounded-full mx-auto lg:mx-0\" src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/gui.jpg"), "html", null, true);
        yield "\" alt=\"Gui\">
                <div class=\"mt-6 lg:mt-0 text-center lg:text-left\">
                    <h2 class=\"text-3xl font-bold\">Gui - Modérateur</h2>
                    <p class=\"mt-4 text-gray-400\">
                        Boucher à temps plein et modérateur passionné sur DiceFinder, Gui utilise ses connaissances en jeux de rôle pour maintenir l'ordre et contribuer à la convivialité de la plateforme. Il aide l'équipe à s'assurer que l'expérience utilisateur reste agréable.
                    </p>
                </div>
            </section>

            <section class=\"flex flex-col lg:flex-row lg:items-center lg:space-x-8\">
                <img class=\"w-32 h-32 rounded-full mx-auto lg:mx-0\" src=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/laura.jpg"), "html", null, true);
        yield "\" alt=\"Laura\">
                <div class=\"mt-6 lg:mt-0 text-center lg:text-left\">
                    <h2 class=\"text-3xl font-bold\">Laura - Modératrice</h2>
                    <p class=\"mt-4 text-gray-400\">
                        Assistante sociale à plein temps, Laura utilise son expérience pour veiller au respect et à la bienveillance sur la plateforme. Grâce à elle, DiceFinder reste un espace inclusif où chacun peut s’exprimer librement et en toute sécurité.
                    </p>
                </div>
            </section>

            <section class=\"flex flex-col lg:flex-row lg:items-center lg:space-x-8\">
                <img class=\"w-32 h-32 rounded-full mx-auto lg:mx-0\" src=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/paul.jpg"), "html", null, true);
        yield "\" alt=\"Paul\">
                <div class=\"mt-6 lg:mt-0 text-center lg:text-left\">
                    <h2 class=\"text-3xl font-bold\">Paul - Modérateur</h2>
                    <p class=\"mt-4 text-gray-400\">
                        Prothésiste dentaire à plein temps, Paul est aussi modérateur sur DiceFinder. Grâce à son calme et à sa rigueur, il contribue à maintenir un environnement sûr et respectueux sur la plateforme, où chacun peut partager sa passion.
                    </p>
                </div>
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
        return "footer/team.html.twig";
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
        return array (  166 => 58,  153 => 48,  140 => 38,  127 => 28,  111 => 15,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Notre Équipe | DiceFinder{% endblock %}

{% block body %}
<div class=\"bg-gray-900 text-white py-16 px-4 sm:px-6 lg:px-8\">
    <div class=\"max-w-7xl mx-auto\">
        <div class=\"text-center\">
            <h1 class=\"text-4xl font-extrabold sm:text-5xl\">Notre Équipe</h1>
            <p class=\"mt-4 text-lg text-gray-400\">Découvrez les passionnés derrière DiceFinder</p>
        </div>

        <div class=\"mt-12 space-y-12\">
            <section class=\"flex flex-col lg:flex-row lg:items-center lg:space-x-8\">
                <img class=\"w-32 h-32 rounded-full mx-auto lg:mx-0\" src=\"{{ asset('images/talep.jpg') }}\" alt=\"Talep\">
                <div class=\"mt-6 lg:mt-0 text-center lg:text-left\">
                    <h2 class=\"text-3xl font-bold\">Talep (Pelcat Théo) - Fondateur</h2>
                    <p class=\"mt-4 text-gray-400\">
                        Talep est le créateur de DiceFinder et le moteur principal derrière cette aventure. Maître de jeu depuis plus de 10 ans, il combine son expérience dans l’animation de parties avec ses compétences en gestion acquises en tant que directeur de magasin.
                    </p>
                    <p class=\"mt-4 text-gray-400\">
                        Son objectif : simplifier la mise en relation des joueurs et maîtres de jeu en construisant une plateforme moderne qui enrichit l'expérience du jeu de rôle.
                    </p>
                </div>
            </section>

            <section class=\"flex flex-col lg:flex-row lg:items-center lg:space-x-8\">
                <img class=\"w-32 h-32 rounded-full mx-auto lg:mx-0\" src=\"{{ asset('images/benjamin.jpg') }}\" alt=\"Benjamin\">
                <div class=\"mt-6 lg:mt-0 text-center lg:text-left\">
                    <h2 class=\"text-3xl font-bold\">Benjamin - Développeur Principal</h2>
                    <p class=\"mt-4 text-gray-400\">
                        Benjamin est notre développeur principal. Actuellement en études de développement, il travaille en étroite collaboration avec Talep pour transformer les idées en réalité. Passionné de technologie et de jeux, il contribue à faire de DiceFinder une plateforme fluide et intuitive.
                    </p>
                </div>
            </section>

            <section class=\"flex flex-col lg:flex-row lg:items-center lg:space-x-8\">
                <img class=\"w-32 h-32 rounded-full mx-auto lg:mx-0\" src=\"{{ asset('images/gui.jpg') }}\" alt=\"Gui\">
                <div class=\"mt-6 lg:mt-0 text-center lg:text-left\">
                    <h2 class=\"text-3xl font-bold\">Gui - Modérateur</h2>
                    <p class=\"mt-4 text-gray-400\">
                        Boucher à temps plein et modérateur passionné sur DiceFinder, Gui utilise ses connaissances en jeux de rôle pour maintenir l'ordre et contribuer à la convivialité de la plateforme. Il aide l'équipe à s'assurer que l'expérience utilisateur reste agréable.
                    </p>
                </div>
            </section>

            <section class=\"flex flex-col lg:flex-row lg:items-center lg:space-x-8\">
                <img class=\"w-32 h-32 rounded-full mx-auto lg:mx-0\" src=\"{{ asset('images/laura.jpg') }}\" alt=\"Laura\">
                <div class=\"mt-6 lg:mt-0 text-center lg:text-left\">
                    <h2 class=\"text-3xl font-bold\">Laura - Modératrice</h2>
                    <p class=\"mt-4 text-gray-400\">
                        Assistante sociale à plein temps, Laura utilise son expérience pour veiller au respect et à la bienveillance sur la plateforme. Grâce à elle, DiceFinder reste un espace inclusif où chacun peut s’exprimer librement et en toute sécurité.
                    </p>
                </div>
            </section>

            <section class=\"flex flex-col lg:flex-row lg:items-center lg:space-x-8\">
                <img class=\"w-32 h-32 rounded-full mx-auto lg:mx-0\" src=\"{{ asset('images/paul.jpg') }}\" alt=\"Paul\">
                <div class=\"mt-6 lg:mt-0 text-center lg:text-left\">
                    <h2 class=\"text-3xl font-bold\">Paul - Modérateur</h2>
                    <p class=\"mt-4 text-gray-400\">
                        Prothésiste dentaire à plein temps, Paul est aussi modérateur sur DiceFinder. Grâce à son calme et à sa rigueur, il contribue à maintenir un environnement sûr et respectueux sur la plateforme, où chacun peut partager sa passion.
                    </p>
                </div>
            </section>
        </div>
    </div>
</div>
{% endblock %}
", "footer/team.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\footer\\team.html.twig");
    }
}
