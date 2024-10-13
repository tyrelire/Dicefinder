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

/* home/index.html.twig */
class __TwigTemplate_baa08d5ec19672bdf5d258caeda4c657 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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

        yield "DiceFinder | Accueil";
        
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
<div class=\"relative isolate px-6 pt-5 lg:px-8\">
    <div class=\"absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80\" aria-hidden=\"true\">
        <div class=\"relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]\" style=\"clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)\"></div>
    </div>

    <div class=\"container mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between lg:gap-x-8 py-24\">
        <div class=\"text-left lg:w-1/2\">
            <h1 class=\"text-4xl font-bold tracking-tight text-white sm:text-5xl element\"></h1>
            <p class=\"mt-6 text-lg leading-8 text-gray-400\">Votre quête commence ici, avec DiceFinder</p>
            <div class=\"mt-10\">
                ";
        // line 17
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "user", [], "any", false, false, false, 17))) {
            // line 18
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_jdr");
            yield "\" class=\"rounded-md bg-indigo-700 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\">
                        C'est Parti →
                    </a>
                ";
        } else {
            // line 22
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"rounded-md bg-indigo-700 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\">
                        C'est Parti →
                    </a>
                ";
        }
        // line 26
        yield "            </div>
        </div>

        <div class=\"flex flex-col lg:flex-row lg:w-1/2 justify-center items-center relative mt-10 lg:mt-0 transition-transform duration-300 hover:scale-105\">
            <div class=\"bg-gray-500 bg-opacity-40 backdrop-blur-lg rounded-lg shadow-md p-6 pb-5 text-white w-full h-[28rem] lg:w-[26rem] relative z-20 transform scale-105 lg:ml-12 hidden lg:block border border-gray-200\">
                <img src=\"";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-card.png"), "html", null, true);
        yield "\" alt=\"Image de jeu\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                <div class=\"flex justify-between items-center\">
                    <span class=\"font-semibold\">Donjons & Dragons 5e</span>
                    <a href=\"#\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs hover:bg-blue-700 transition duration-200\">Voir</a>
                </div>
                <div class=\"flex justify-between items-center mt-2\">
                    <div class=\"flex items-center\">
                        <img src=\"";
        // line 38
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pp-card.png"), "html", null, true);
        yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover\">
                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400\">MJ</p>
                            <p class=\"text-xs text-white\">Klyx</p>
                        </div>
                    </div>
                    <div class=\"text-right\">
                        <p class=\"text-xs text-gray-400\">Places disponibles</p>
                        <p class=\"text-lg font-bold text-white\">2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class=\"container mx-auto flex flex-col items-center justify-center py-8 sm:py-12\">
    <div class=\"w-full lg:max-w-7xl\">
        <div class=\"bg-gradient-to-br from-[rgba(30, 58, 138, 0.8)] via-[rgba(55, 48, 163, 0.8)] to-[rgba(76, 29, 149, 0.8)] rounded-lg p-6 sm:p-8 shadow-lg text-center border border-[#4338CA]\">
            <h2 class=\"text-2xl sm:text-3xl font-bold text-white mb-4\">Vous voulez soutenir le projet ?</h2>
            <p class=\"text-gray-300 mb-6 text-sm sm:text-base\">
                Aidez-nous sur Patreon, chaque contribution aidera à rendre DiceFinder encore plus performant.
            </p>
            <a href=\"https://patreon.com/DiceFinder?utm_medium=unknown&utm_source=join_link&utm_campaign=creatorshare_creator&utm_content=copyLink\" 
                class=\"inline-block bg-indigo-600 text-white py-2 px-4 sm:px-6 rounded-full font-semibold hover:bg-indigo-700 transition-colors whitespace-nowrap\" 
                target=\"_blank\">
                Je soutiens
            </a>
        </div>
    </div>
</div>

<div class=\"container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-8\">
    <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition-all duration-700 ease-in-out hover:shadow-[0_4px_15px_5px_rgba(192,192,192,0.4)] hover:scale-105 sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
        <span class=\"inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"size-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path d=\"M12 14l9-5-9-5-9 5z\" />
                <path d=\"M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z\" />
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222\" />
            </svg>
        </span>
        <a href=\"";
        // line 78
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_new");
        yield "\">
            <h3 class=\"mt-0.5 text-lg font-medium text-gray-900 dark:text-white\">Créer ta partie</h3>
        </a>
        <p class=\"mt-2 text-sm text-gray-500 dark:text-gray-400\">
            Crée ta propre aventure en quelques clics. Choisis ton univers, définis les règles, et invite des joueurs à rejoindre ton monde.
        </p>
        <a href=\"";
        // line 84
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_new");
        yield "\" class=\"group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600\">
            En savoir plus <span aria-hidden=\"true\" class=\"block transition-all group-hover:ml-0.5\">&rarr;</span>
        </a>
    </article>
        <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition-all duration-700 ease-in-out hover:shadow-[0_4px_15px_5px_rgba(192,192,192,0.4)] hover:scale-105 sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
            <span class=\"inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"size-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path d=\"M12 14l9-5-9-5-9 5z\" />
                    <path d=\"M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z\" />
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222\" />
                </svg>
            </span>
            <a href=\"";
        // line 96
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\">
                <h3 class=\"mt-0.5 text-lg font-medium text-gray-900 dark:text-white\">Rejoins une Partie</h3>
            </a>
            <p class=\"mt-2 text-sm text-gray-500 dark:text-gray-400\">
                Trouve et rejoins des parties correspondant à ton style de jeu. Rejoins l’aventure avec des maîtres de jeu passionnés.
            </p>
            <a href=\"";
        // line 102
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600\">
                En savoir plus <span aria-hidden=\"true\" class=\"block transition-all group-hover:ml-0.5\">&rarr;</span>
            </a>
        </article>
        <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition-all duration-700 ease-in-out hover:shadow-[0_4px_15px_5px_rgba(192,192,192,0.4)] hover:scale-105 sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
            <span class=\"inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"size-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path d=\"M12 14l9-5-9-5-9 5z\" />
                    <path d=\"M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z\" />
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222\" />
                </svg>
            </span>
            <a href=\"#\">
                <h3 class=\"mt-0.5 text-lg font-medium text-gray-900 dark:text-white\">Adhère au VIP</h3>
            </a>
            <p class=\"mt-2 text-sm text-gray-500 dark:text-gray-400\">
                Accède à des fonctionnalités exclusives, des parties prioritaires et des outils avancés en devenant membre VIP.
            </p>
            <a href=\"#\" class=\"group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600\">
                En savoir plus <span aria-hidden=\"true\" class=\"block transition-all group-hover:ml-0.5\">&rarr;</span>
            </a>
        </article>
        <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition-all duration-700 ease-in-out hover:shadow-[0_4px_15px_5px_rgba(192,192,192,0.4)] hover:scale-105 sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
            <span class=\"inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"size-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path d=\"M12 14l9-5-9-5-9 5z\" />
                    <path d=\"M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z\" />
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222\" />
                </svg>
            </span>
            <a href=\"";
        // line 132
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer_faq");
        yield "\">
                <h3 class=\"mt-0.5 text-lg font-medium text-gray-900 dark:text-white\">FAQ</h3>
            </a>
            <p class=\"mt-2 text-sm text-gray-500 dark:text-gray-400\">
                Vous avez des questions ? Consultez notre FAQ pour trouver des réponses sur la création de parties, les abonnements VIP et plus encore.
            </p>
            <a href=\"";
        // line 138
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer_faq");
        yield "\" class=\"group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600\">
                En savoir plus <span aria-hidden=\"true\" class=\"block transition-all group-hover:ml-0.5\">&rarr;</span>
            </a>
        </article>
    </div>
    <div class=\"container mx-auto flex flex-col mt-12\">
        <div class=\"flex justify-between items-center\">
            <h2 class=\"text-2xl font-bold text-white\">Nouveaux Univers</h2>
            <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-blue-600 text-sm font-semibold\">Voir plus →</a>
        </div>
        <div class=\"mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
            ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["nouveaux_groupes"]) || array_key_exists("nouveaux_groupes", $context) ? $context["nouveaux_groupes"] : (function () { throw new RuntimeError('Variable "nouveaux_groupes" does not exist.', 149, $this->source); })())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 150
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 150)]), "html", null, true);
            yield "\" 
                class=\"block bg-gray-500 rounded-lg bg-opacity-30 border border-gray-100 shadow-md p-6 pb-5 text-white transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20\"  
                style=\"will-change: transform;\">
                    <img src=\"";
            // line 153
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "picture", [], "any", false, false, false, 153))), "html", null, true);
            yield "\" 
                        alt=\"";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 154), "html", null, true);
            yield " image\" 
                        class=\"rounded-lg mb-4 w-full h-[20rem] object-cover 
                        ";
            // line 156
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 156)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 156))) {
                yield " blur-sm ";
            }
            yield "\">
                    <div class=\"flex justify-between items-center\">
                        <p class=\"font-semibold hover:underline truncate max-w-[90%]\">";
            // line 158
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 158), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"flex justify-between items-center mt-4\">
                        <div class=\"flex items-center\">
                            ";
            // line 162
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 162), "avatar", [], "any", false, false, false, 162)) {
                // line 163
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 163), "avatar", [], "any", false, false, false, 163))), "html", null, true);
                yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
            } else {
                // line 165
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full object-cover\">
                            ";
            }
            // line 167
            yield "                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-300\">MJ</p>
                                <p class=\"text-xs text-white\">";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 169), "username", [], "any", false, false, false, 169), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-xs text-gray-300\">Places disponibles</p>
                            ";
            // line 174
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 174)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 174))) {
                // line 175
                yield "                                <p class=\"text-lg font-bold text-red-500\">Complet</p>
                            ";
            } else {
                // line 177
                yield "                                <p class=\"text-lg font-bold text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 177)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 177), "html", null, true);
                yield "</p>
                            ";
            }
            // line 179
            yield "                        </div>
                    </div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 183
            yield "                <p class=\"text-gray-400\">Aucun nouveau jeu de rôle disponible.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 185
        yield "        </div>
    </div>
    <div class=\"container mx-auto flex flex-col mt-12\">
        <div class=\"flex justify-between items-center\">
            <h2 class=\"text-2xl font-bold text-white\">Parties qui Recrutent</h2>
            <a href=\"";
        // line 190
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-blue-600 text-sm font-semibold\">Voir plus →</a>
        </div>

        <div class=\"mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
            ";
        // line 194
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["groupes_recrutement_ouvert"]) || array_key_exists("groupes_recrutement_ouvert", $context) ? $context["groupes_recrutement_ouvert"] : (function () { throw new RuntimeError('Variable "groupes_recrutement_ouvert" does not exist.', 194, $this->source); })()), 0, 4));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 195
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 195)]), "html", null, true);
            yield "\" 
                class=\"block bg-gray-500 rounded-lg bg-opacity-30 border border-gray-100 shadow-md p-6 pb-5 text-white transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20\"  
                style=\"will-change: transform;\">
                    <img src=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "picture", [], "any", false, false, false, 198))), "html", null, true);
            yield "\" 
                        alt=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 199), "html", null, true);
            yield " image\" 
                        class=\"rounded-lg mb-4 w-full h-[20rem] object-cover 
                        ";
            // line 201
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 201)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 201))) {
                yield " blur-sm ";
            }
            yield "\">
                    <div class=\"flex justify-between items-center\">
                        <p class=\"font-semibold hover:underline truncate max-w-[90%]\">";
            // line 203
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 203), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"flex justify-between items-center mt-4\">
                        <div class=\"flex items-center\">
                            ";
            // line 207
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 207), "avatar", [], "any", false, false, false, 207)) {
                // line 208
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 208), "avatar", [], "any", false, false, false, 208))), "html", null, true);
                yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
            } else {
                // line 210
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full object-cover\">
                            ";
            }
            // line 212
            yield "                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-300\">MJ</p>
                                <p class=\"text-xs text-white\">";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 214), "username", [], "any", false, false, false, 214), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-xs text-gray-300\">Places disponibles</p>
                            ";
            // line 219
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 219)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 219))) {
                // line 220
                yield "                                <p class=\"text-lg font-bold text-red-500\">Complet</p>
                            ";
            } else {
                // line 222
                yield "                                <p class=\"text-lg font-bold text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 222)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 222), "html", null, true);
                yield "</p>
                            ";
            }
            // line 224
            yield "                        </div>
                    </div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 228
            yield "                <p class=\"text-gray-400\">Aucune partie ne recrute actuellement.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 230
        yield "        </div>
    </div>
    <div class=\"container mx-auto flex flex-col mt-12 z-30 relative\">
        <div class=\"flex justify-between items-center\">
            <h2 class=\"text-2xl font-bold text-white\">Parties populaires</h2>
            <a href=\"";
        // line 235
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-blue-600 text-sm font-semibold\">Voir plus →</a>
        </div>

        <div class=\"mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
            ";
        // line 239
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 239, $this->source); })()), 0, 8));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe_j_d_r"]) {
            // line 240
            yield "                <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 240)]), "html", null, true);
            yield "\" 
                class=\"block bg-gray-500 rounded-lg bg-opacity-30 border border-gray-100 shadow-md p-6 pb-5 text-white 
                transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20\" 
                style=\"will-change: transform;\">
                    <img src=\"";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "picture", [], "any", false, false, false, 244))), "html", null, true);
            yield "\" 
                        alt=\"";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 245), "html", null, true);
            yield " image\" 
                        class=\"rounded-lg mb-4 w-full h-[20rem] object-cover 
                        ";
            // line 247
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 247)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 247))) {
                yield " blur-sm ";
            }
            yield "\">
                    <div class=\"flex justify-between items-center mb-2\">
                        <p class=\"font-semibold hover:underline truncate max-w-[90%]\">";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 249), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"flex justify-between items-center mt-2\">
                        <div class=\"flex items-center\">
                            ";
            // line 253
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 253), "avatar", [], "any", false, false, false, 253)) {
                // line 254
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 254), "avatar", [], "any", false, false, false, 254))), "html", null, true);
                yield "\" alt=\"MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
            } else {
                // line 256
                yield "                                <img class=\"rounded h-8 w-8 object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile\">
                            ";
            }
            // line 258
            yield "                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-400\">MJ</p>
                                <p class=\"text-xs text-white\">";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 260), "username", [], "any", false, false, false, 260), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-xs text-gray-400\">Nombre de joueurs</p>
                            ";
            // line 265
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 265)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 265))) {
                // line 266
                yield "                                <p class=\"text-lg font-bold text-red-500\">Complet</p>
                            ";
            } else {
                // line 268
                yield "                                <p class=\"text-lg font-bold text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 268)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 268), "html", null, true);
                yield "</p>
                            ";
            }
            // line 270
            yield "                        </div>
                    </div>
                </a>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 274
            yield "                <p class=\"text-center text-gray-700 text-lg w-full\">Aucun univers disponible.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe_j_d_r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 276
        yield "        </div>
        <div class=\"text-center mt-8 flex justify-center\">
            <a href=\"";
        // line 278
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"bg-blue-600 text-white px-4 py-2 rounded transition-colors duration-300 hover:bg-blue-500\">Afficher plus</a>
        </div>
    </div>

    <div class=\"container mx-auto flex flex-col items-center justify-center py-8 sm:py-12\">
        <div class=\"bg-gradient-to-br from-[rgba(30, 58, 138, 0.8)] via-[rgba(55, 48, 163, 0.8)] to-[rgba(76, 29, 149, 0.8)] rounded-lg p-6 sm:p-8 shadow-lg text-center max-w-xl sm:max-w-2xl lg:max-w-3xl border border-[#4338CA]\">
            <h2 class=\"text-2xl sm:text-3xl font-bold text-white mb-4\">Créer Votre Propre Partie</h2>
            <p class=\"text-gray-300 mb-6 text-sm sm:text-base\">
                Envie de lancer ta propre aventure ? Avec DiceFinder, crée ta partie personnalisée en quelques clics. Définis ton univers, sélectionne tes règles, et invite des joueurs passionnés à rejoindre ton monde. Que tu sois un maître de jeu chevronné ou débutant, tout est pensé pour faciliter la création d'une expérience immersive.
            </p>
            ";
        // line 288
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 288, $this->source); })()), "user", [], "any", false, false, false, 288)) {
            // line 289
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
            yield "\" class=\"inline-block bg-indigo-600 text-white py-2 px-4 sm:px-6 rounded-full font-semibold hover:bg-indigo-700 transition-colors whitespace-nowrap\">
                    Commencer
                </a>
            ";
        } else {
            // line 293
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"inline-block bg-indigo-600 text-white py-2 px-4 sm:px-6 rounded-full font-semibold hover:bg-indigo-700 transition-colors whitespace-nowrap\">
                    Rejoindre La Communauté
                </a>
            ";
        }
        // line 297
        yield "        </div>
    </div>

    <div class=\"absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]\" aria-hidden=\"true\">
        <div class=\"relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]\" style=\"clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)\"></div>
    </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/typed.js@2.0.12\"></script>
<script src=\"https://unpkg.com/@hotwired/stimulus@3.0.1/dist/stimulus.umd.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var options = {
        strings: [
            'Explorez de Nouveaux Mondes avec DiceFinder',
        ],
        typeSpeed: 30,
        showCursor: false,
    };
    if (typeof Typed !== 'undefined') {
        var typed = new Typed('.element', options);
    } else {
        console.error('Typed.js n\\'a pas été chargé correctement.');
    }

    const showMoreButton = document.getElementById('show-more-btn');
    const universElements = document.querySelectorAll('.univers');
    let currentUniversCount = 8;

    function showMoreUnivers() {
        const universToShow = Array.from(universElements).slice(currentUniversCount, currentUniversCount + 8);
        universToShow.forEach(univers => {
            univers.style.display = 'block';
        });
        currentUniversCount += 8;
        if (currentUniversCount >= universElements.length) {
            showMoreButton.style.display = 'none';
        }
    }

    Array.from(universElements).slice(8).forEach(univers => {
        univers.style.display = 'none';
    });

    if (showMoreButton) {
        showMoreButton.addEventListener('click', showMoreUnivers);
    }
});
</script>
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
        return "home/index.html.twig";
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
        return array (  617 => 297,  609 => 293,  601 => 289,  599 => 288,  586 => 278,  582 => 276,  575 => 274,  567 => 270,  559 => 268,  555 => 266,  553 => 265,  545 => 260,  541 => 258,  535 => 256,  529 => 254,  527 => 253,  520 => 249,  513 => 247,  508 => 245,  504 => 244,  496 => 240,  491 => 239,  484 => 235,  477 => 230,  470 => 228,  462 => 224,  454 => 222,  450 => 220,  448 => 219,  440 => 214,  436 => 212,  430 => 210,  424 => 208,  422 => 207,  415 => 203,  408 => 201,  403 => 199,  399 => 198,  392 => 195,  387 => 194,  380 => 190,  373 => 185,  366 => 183,  358 => 179,  350 => 177,  346 => 175,  344 => 174,  336 => 169,  332 => 167,  326 => 165,  320 => 163,  318 => 162,  311 => 158,  304 => 156,  299 => 154,  295 => 153,  288 => 150,  283 => 149,  277 => 146,  266 => 138,  257 => 132,  224 => 102,  215 => 96,  200 => 84,  191 => 78,  148 => 38,  138 => 31,  131 => 26,  123 => 22,  115 => 18,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DiceFinder | Accueil{% endblock %}

{% block body %}

<div class=\"relative isolate px-6 pt-5 lg:px-8\">
    <div class=\"absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80\" aria-hidden=\"true\">
        <div class=\"relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]\" style=\"clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)\"></div>
    </div>

    <div class=\"container mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between lg:gap-x-8 py-24\">
        <div class=\"text-left lg:w-1/2\">
            <h1 class=\"text-4xl font-bold tracking-tight text-white sm:text-5xl element\"></h1>
            <p class=\"mt-6 text-lg leading-8 text-gray-400\">Votre quête commence ici, avec DiceFinder</p>
            <div class=\"mt-10\">
                {% if app.user is not null %}
                    <a href=\"{{ path('app_my_jdr') }}\" class=\"rounded-md bg-indigo-700 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\">
                        C'est Parti →
                    </a>
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"rounded-md bg-indigo-700 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\">
                        C'est Parti →
                    </a>
                {% endif %}
            </div>
        </div>

        <div class=\"flex flex-col lg:flex-row lg:w-1/2 justify-center items-center relative mt-10 lg:mt-0 transition-transform duration-300 hover:scale-105\">
            <div class=\"bg-gray-500 bg-opacity-40 backdrop-blur-lg rounded-lg shadow-md p-6 pb-5 text-white w-full h-[28rem] lg:w-[26rem] relative z-20 transform scale-105 lg:ml-12 hidden lg:block border border-gray-200\">
                <img src=\"{{ asset('images/logo-card.png') }}\" alt=\"Image de jeu\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                <div class=\"flex justify-between items-center\">
                    <span class=\"font-semibold\">Donjons & Dragons 5e</span>
                    <a href=\"#\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs hover:bg-blue-700 transition duration-200\">Voir</a>
                </div>
                <div class=\"flex justify-between items-center mt-2\">
                    <div class=\"flex items-center\">
                        <img src=\"{{ asset('images/pp-card.png') }}\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover\">
                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400\">MJ</p>
                            <p class=\"text-xs text-white\">Klyx</p>
                        </div>
                    </div>
                    <div class=\"text-right\">
                        <p class=\"text-xs text-gray-400\">Places disponibles</p>
                        <p class=\"text-lg font-bold text-white\">2</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div class=\"container mx-auto flex flex-col items-center justify-center py-8 sm:py-12\">
    <div class=\"w-full lg:max-w-7xl\">
        <div class=\"bg-gradient-to-br from-[rgba(30, 58, 138, 0.8)] via-[rgba(55, 48, 163, 0.8)] to-[rgba(76, 29, 149, 0.8)] rounded-lg p-6 sm:p-8 shadow-lg text-center border border-[#4338CA]\">
            <h2 class=\"text-2xl sm:text-3xl font-bold text-white mb-4\">Vous voulez soutenir le projet ?</h2>
            <p class=\"text-gray-300 mb-6 text-sm sm:text-base\">
                Aidez-nous sur Patreon, chaque contribution aidera à rendre DiceFinder encore plus performant.
            </p>
            <a href=\"https://patreon.com/DiceFinder?utm_medium=unknown&utm_source=join_link&utm_campaign=creatorshare_creator&utm_content=copyLink\" 
                class=\"inline-block bg-indigo-600 text-white py-2 px-4 sm:px-6 rounded-full font-semibold hover:bg-indigo-700 transition-colors whitespace-nowrap\" 
                target=\"_blank\">
                Je soutiens
            </a>
        </div>
    </div>
</div>

<div class=\"container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-8\">
    <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition-all duration-700 ease-in-out hover:shadow-[0_4px_15px_5px_rgba(192,192,192,0.4)] hover:scale-105 sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
        <span class=\"inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700\">
            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"size-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                <path d=\"M12 14l9-5-9-5-9 5z\" />
                <path d=\"M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z\" />
                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222\" />
            </svg>
        </span>
        <a href=\"{{ path('app_groupe_j_d_r_new') }}\">
            <h3 class=\"mt-0.5 text-lg font-medium text-gray-900 dark:text-white\">Créer ta partie</h3>
        </a>
        <p class=\"mt-2 text-sm text-gray-500 dark:text-gray-400\">
            Crée ta propre aventure en quelques clics. Choisis ton univers, définis les règles, et invite des joueurs à rejoindre ton monde.
        </p>
        <a href=\"{{ path('app_groupe_j_d_r_new') }}\" class=\"group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600\">
            En savoir plus <span aria-hidden=\"true\" class=\"block transition-all group-hover:ml-0.5\">&rarr;</span>
        </a>
    </article>
        <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition-all duration-700 ease-in-out hover:shadow-[0_4px_15px_5px_rgba(192,192,192,0.4)] hover:scale-105 sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
            <span class=\"inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"size-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path d=\"M12 14l9-5-9-5-9 5z\" />
                    <path d=\"M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z\" />
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222\" />
                </svg>
            </span>
            <a href=\"{{ path('app_groupe_j_d_r_index') }}\">
                <h3 class=\"mt-0.5 text-lg font-medium text-gray-900 dark:text-white\">Rejoins une Partie</h3>
            </a>
            <p class=\"mt-2 text-sm text-gray-500 dark:text-gray-400\">
                Trouve et rejoins des parties correspondant à ton style de jeu. Rejoins l’aventure avec des maîtres de jeu passionnés.
            </p>
            <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600\">
                En savoir plus <span aria-hidden=\"true\" class=\"block transition-all group-hover:ml-0.5\">&rarr;</span>
            </a>
        </article>
        <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition-all duration-700 ease-in-out hover:shadow-[0_4px_15px_5px_rgba(192,192,192,0.4)] hover:scale-105 sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
            <span class=\"inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"size-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path d=\"M12 14l9-5-9-5-9 5z\" />
                    <path d=\"M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z\" />
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222\" />
                </svg>
            </span>
            <a href=\"#\">
                <h3 class=\"mt-0.5 text-lg font-medium text-gray-900 dark:text-white\">Adhère au VIP</h3>
            </a>
            <p class=\"mt-2 text-sm text-gray-500 dark:text-gray-400\">
                Accède à des fonctionnalités exclusives, des parties prioritaires et des outils avancés en devenant membre VIP.
            </p>
            <a href=\"#\" class=\"group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600\">
                En savoir plus <span aria-hidden=\"true\" class=\"block transition-all group-hover:ml-0.5\">&rarr;</span>
            </a>
        </article>
        <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition-all duration-700 ease-in-out hover:shadow-[0_4px_15px_5px_rgba(192,192,192,0.4)] hover:scale-105 sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
            <span class=\"inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"size-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path d=\"M12 14l9-5-9-5-9 5z\" />
                    <path d=\"M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z\" />
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222\" />
                </svg>
            </span>
            <a href=\"{{ path('app_footer_faq') }}\">
                <h3 class=\"mt-0.5 text-lg font-medium text-gray-900 dark:text-white\">FAQ</h3>
            </a>
            <p class=\"mt-2 text-sm text-gray-500 dark:text-gray-400\">
                Vous avez des questions ? Consultez notre FAQ pour trouver des réponses sur la création de parties, les abonnements VIP et plus encore.
            </p>
            <a href=\"{{ path('app_footer_faq') }}\" class=\"group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600\">
                En savoir plus <span aria-hidden=\"true\" class=\"block transition-all group-hover:ml-0.5\">&rarr;</span>
            </a>
        </article>
    </div>
    <div class=\"container mx-auto flex flex-col mt-12\">
        <div class=\"flex justify-between items-center\">
            <h2 class=\"text-2xl font-bold text-white\">Nouveaux Univers</h2>
            <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"text-blue-600 text-sm font-semibold\">Voir plus →</a>
        </div>
        <div class=\"mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
            {% for groupe in nouveaux_groupes|reverse %}
                <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe.id}) }}\" 
                class=\"block bg-gray-500 rounded-lg bg-opacity-30 border border-gray-100 shadow-md p-6 pb-5 text-white transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20\"  
                style=\"will-change: transform;\">
                    <img src=\"{{ asset('uploads/images-jdr/' ~ groupe.picture) }}\" 
                        alt=\"{{ groupe.title }} image\" 
                        class=\"rounded-lg mb-4 w-full h-[20rem] object-cover 
                        {% if groupe.players|length >= groupe.maxPlayer %} blur-sm {% endif %}\">
                    <div class=\"flex justify-between items-center\">
                        <p class=\"font-semibold hover:underline truncate max-w-[90%]\">{{ groupe.title }}</p>
                    </div>
                    <div class=\"flex justify-between items-center mt-4\">
                        <div class=\"flex items-center\">
                            {% if groupe.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ groupe.owner.avatar) }}\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            {% else %}
                                <img src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full object-cover\">
                            {% endif %}
                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-300\">MJ</p>
                                <p class=\"text-xs text-white\">{{ groupe.owner.username }}</p>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-xs text-gray-300\">Places disponibles</p>
                            {% if groupe.players|length >= groupe.maxPlayer %}
                                <p class=\"text-lg font-bold text-red-500\">Complet</p>
                            {% else %}
                                <p class=\"text-lg font-bold text-white\">{{ groupe.players|length }} / {{ groupe.maxPlayer }}</p>
                            {% endif %}
                        </div>
                    </div>
                </a>
            {% else %}
                <p class=\"text-gray-400\">Aucun nouveau jeu de rôle disponible.</p>
            {% endfor %}
        </div>
    </div>
    <div class=\"container mx-auto flex flex-col mt-12\">
        <div class=\"flex justify-between items-center\">
            <h2 class=\"text-2xl font-bold text-white\">Parties qui Recrutent</h2>
            <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"text-blue-600 text-sm font-semibold\">Voir plus →</a>
        </div>

        <div class=\"mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
            {% for groupe in groupes_recrutement_ouvert|slice(0, 4) %}
                <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe.id}) }}\" 
                class=\"block bg-gray-500 rounded-lg bg-opacity-30 border border-gray-100 shadow-md p-6 pb-5 text-white transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20\"  
                style=\"will-change: transform;\">
                    <img src=\"{{ asset('uploads/images-jdr/' ~ groupe.picture) }}\" 
                        alt=\"{{ groupe.title }} image\" 
                        class=\"rounded-lg mb-4 w-full h-[20rem] object-cover 
                        {% if groupe.players|length >= groupe.maxPlayer %} blur-sm {% endif %}\">
                    <div class=\"flex justify-between items-center\">
                        <p class=\"font-semibold hover:underline truncate max-w-[90%]\">{{ groupe.title }}</p>
                    </div>
                    <div class=\"flex justify-between items-center mt-4\">
                        <div class=\"flex items-center\">
                            {% if groupe.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ groupe.owner.avatar) }}\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            {% else %}
                                <img src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full object-cover\">
                            {% endif %}
                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-300\">MJ</p>
                                <p class=\"text-xs text-white\">{{ groupe.owner.username }}</p>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-xs text-gray-300\">Places disponibles</p>
                            {% if groupe.players|length >= groupe.maxPlayer %}
                                <p class=\"text-lg font-bold text-red-500\">Complet</p>
                            {% else %}
                                <p class=\"text-lg font-bold text-white\">{{ groupe.players|length }} / {{ groupe.maxPlayer }}</p>
                            {% endif %}
                        </div>
                    </div>
                </a>
            {% else %}
                <p class=\"text-gray-400\">Aucune partie ne recrute actuellement.</p>
            {% endfor %}
        </div>
    </div>
    <div class=\"container mx-auto flex flex-col mt-12 z-30 relative\">
        <div class=\"flex justify-between items-center\">
            <h2 class=\"text-2xl font-bold text-white\">Parties populaires</h2>
            <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"text-blue-600 text-sm font-semibold\">Voir plus →</a>
        </div>

        <div class=\"mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
            {% for groupe_j_d_r in groupes|slice(0, 8) %}
                <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" 
                class=\"block bg-gray-500 rounded-lg bg-opacity-30 border border-gray-100 shadow-md p-6 pb-5 text-white 
                transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20\" 
                style=\"will-change: transform;\">
                    <img src=\"{{ asset('uploads/images-jdr/' ~ groupe_j_d_r.picture) }}\" 
                        alt=\"{{ groupe_j_d_r.title }} image\" 
                        class=\"rounded-lg mb-4 w-full h-[20rem] object-cover 
                        {% if groupe_j_d_r.players|length >= groupe_j_d_r.maxPlayer %} blur-sm {% endif %}\">
                    <div class=\"flex justify-between items-center mb-2\">
                        <p class=\"font-semibold hover:underline truncate max-w-[90%]\">{{ groupe_j_d_r.title }}</p>
                    </div>
                    <div class=\"flex justify-between items-center mt-2\">
                        <div class=\"flex items-center\">
                            {% if groupe_j_d_r.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ groupe_j_d_r.owner.avatar) }}\" alt=\"MJ\" class=\"rounded h-8 w-8 object-cover\">
                            {% else %}
                                <img class=\"rounded h-8 w-8 object-cover\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile\">
                            {% endif %}
                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-400\">MJ</p>
                                <p class=\"text-xs text-white\">{{ groupe_j_d_r.owner.username }}</p>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-xs text-gray-400\">Nombre de joueurs</p>
                            {% if groupe_j_d_r.players|length >= groupe_j_d_r.maxPlayer %}
                                <p class=\"text-lg font-bold text-red-500\">Complet</p>
                            {% else %}
                                <p class=\"text-lg font-bold text-white\">{{ groupe_j_d_r.players|length }} / {{ groupe_j_d_r.maxPlayer }}</p>
                            {% endif %}
                        </div>
                    </div>
                </a>
            {% else %}
                <p class=\"text-center text-gray-700 text-lg w-full\">Aucun univers disponible.</p>
            {% endfor %}
        </div>
        <div class=\"text-center mt-8 flex justify-center\">
            <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"bg-blue-600 text-white px-4 py-2 rounded transition-colors duration-300 hover:bg-blue-500\">Afficher plus</a>
        </div>
    </div>

    <div class=\"container mx-auto flex flex-col items-center justify-center py-8 sm:py-12\">
        <div class=\"bg-gradient-to-br from-[rgba(30, 58, 138, 0.8)] via-[rgba(55, 48, 163, 0.8)] to-[rgba(76, 29, 149, 0.8)] rounded-lg p-6 sm:p-8 shadow-lg text-center max-w-xl sm:max-w-2xl lg:max-w-3xl border border-[#4338CA]\">
            <h2 class=\"text-2xl sm:text-3xl font-bold text-white mb-4\">Créer Votre Propre Partie</h2>
            <p class=\"text-gray-300 mb-6 text-sm sm:text-base\">
                Envie de lancer ta propre aventure ? Avec DiceFinder, crée ta partie personnalisée en quelques clics. Définis ton univers, sélectionne tes règles, et invite des joueurs passionnés à rejoindre ton monde. Que tu sois un maître de jeu chevronné ou débutant, tout est pensé pour faciliter la création d'une expérience immersive.
            </p>
            {% if app.user %}
                <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"inline-block bg-indigo-600 text-white py-2 px-4 sm:px-6 rounded-full font-semibold hover:bg-indigo-700 transition-colors whitespace-nowrap\">
                    Commencer
                </a>
            {% else %}
                <a href=\"{{ path('app_register') }}\" class=\"inline-block bg-indigo-600 text-white py-2 px-4 sm:px-6 rounded-full font-semibold hover:bg-indigo-700 transition-colors whitespace-nowrap\">
                    Rejoindre La Communauté
                </a>
            {% endif %}
        </div>
    </div>

    <div class=\"absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]\" aria-hidden=\"true\">
        <div class=\"relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]\" style=\"clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)\"></div>
    </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/typed.js@2.0.12\"></script>
<script src=\"https://unpkg.com/@hotwired/stimulus@3.0.1/dist/stimulus.umd.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var options = {
        strings: [
            'Explorez de Nouveaux Mondes avec DiceFinder',
        ],
        typeSpeed: 30,
        showCursor: false,
    };
    if (typeof Typed !== 'undefined') {
        var typed = new Typed('.element', options);
    } else {
        console.error('Typed.js n\\'a pas été chargé correctement.');
    }

    const showMoreButton = document.getElementById('show-more-btn');
    const universElements = document.querySelectorAll('.univers');
    let currentUniversCount = 8;

    function showMoreUnivers() {
        const universToShow = Array.from(universElements).slice(currentUniversCount, currentUniversCount + 8);
        universToShow.forEach(univers => {
            univers.style.display = 'block';
        });
        currentUniversCount += 8;
        if (currentUniversCount >= universElements.length) {
            showMoreButton.style.display = 'none';
        }
    }

    Array.from(universElements).slice(8).forEach(univers => {
        univers.style.display = 'none';
    });

    if (showMoreButton) {
        showMoreButton.addEventListener('click', showMoreUnivers);
    }
});
</script>
{% endblock %}
", "home/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\home\\index.html.twig");
    }
}
