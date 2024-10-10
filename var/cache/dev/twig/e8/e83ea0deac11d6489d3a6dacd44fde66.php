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
        yield "<div class=\"relative isolate px-6 pt-5 lg:px-8\">
    <div class=\"absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80\" aria-hidden=\"true\">
        <div class=\"relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]\" style=\"clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)\"></div>
    </div>

    <div class=\"container mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between lg:gap-x-8 py-24\">
        <div class=\"text-left lg:w-1/2\">
            <h1 class=\"text-4xl font-bold tracking-tight text-white sm:text-5xl element\"></h1>
            <p class=\"mt-6 text-lg leading-8 text-gray-400\">Votre quête commence ici, avec DiceFinder</p>
            <div class=\"mt-10\">
                ";
        // line 16
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 16, $this->source); })()), "user", [], "any", false, false, false, 16))) {
            // line 17
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_jdr");
            yield "\" class=\"rounded-md bg-indigo-700 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\">
                        C'est Parti →
                    </a>
                ";
        } else {
            // line 21
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"rounded-md bg-indigo-700 px-6 py-3 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600\">
                        C'est Parti →
                    </a>
                ";
        }
        // line 25
        yield "            </div>
        </div>

        <div class=\"flex flex-col lg:flex-row lg:w-1/2 justify-center items-center relative mt-10 lg:mt-0\">
            <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white w-full h-[28rem] lg:w-[26rem] relative z-20 transform scale-105 lg:ml-12 hidden lg:block\">
                <img src=\"";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-card.png"), "html", null, true);
        yield "\" alt=\"Image de jeu\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                <div class=\"flex justify-between items-center\">
                    <span class=\"font-semibold\">Donjons & Dragons 5e</span>
                    <a href=\"\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs\">Voir</a>
                </div>
                <div class=\"flex justify-between items-center mt-2\">
                    <div class=\"flex items-center\">
                        <img src=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pp-card.png"), "html", null, true);
        yield "\" alt=\"MJ photo\" class=\"rounded h-8 w-8 object-cover\">
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

    <div class=\"container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-8\">
        <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
            <span class=\"inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"size-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path d=\"M12 14l9-5-9-5-9 5z\" />
                    <path d=\"M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z\" />
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222\" />
                </svg>
            </span>
            <a href=\"";
        // line 61
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_new");
        yield "\">
                <h3 class=\"mt-0.5 text-lg font-medium text-gray-900 dark:text-white\">Créer ta partie</h3>
            </a>
            <p class=\"mt-2 text-sm text-gray-500 dark:text-gray-400\">
                Crée ta propre aventure en quelques clics. Choisis ton univers, définis les règles, et invite des joueurs à rejoindre ton monde.
            </p>
            <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_new");
        yield "\" class=\"group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600\">
                En savoir plus <span aria-hidden=\"true\" class=\"block transition-all group-hover:ml-0.5\">&rarr;</span>
            </a>
        </article>
        <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
            <span class=\"inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"size-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path d=\"M12 14l9-5-9-5-9 5z\" />
                    <path d=\"M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z\" />
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222\" />
                </svg>
            </span>
            <a href=\"";
        // line 79
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\">
                <h3 class=\"mt-0.5 text-lg font-medium text-gray-900 dark:text-white\">Rejoins une Partie</h3>
            </a>
            <p class=\"mt-2 text-sm text-gray-500 dark:text-gray-400\">
                Trouve et rejoins des parties correspondant à ton style de jeu. Rejoins l’aventure avec des maîtres de jeu passionnés.
            </p>
            <a href=\"";
        // line 85
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"group mt-4 inline-flex items-center gap-1 text-sm font-medium text-blue-600\">
                En savoir plus <span aria-hidden=\"true\" class=\"block transition-all group-hover:ml-0.5\">&rarr;</span>
            </a>
        </article>
        <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
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
        <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
            <span class=\"inline-block rounded bg-blue-600 p-2 text-white dark:bg-blue-700\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"size-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path d=\"M12 14l9-5-9-5-9 5z\" />
                    <path d=\"M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z\" />
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222\" />
                </svg>
            </span>
            <a href=\"";
        // line 115
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer_faq");
        yield "\">
                <h3 class=\"mt-0.5 text-lg font-medium text-gray-900 dark:text-white\">FAQ</h3>
            </a>
            <p class=\"mt-2 text-sm text-gray-500 dark:text-gray-400\">
                Vous avez des questions ? Consultez notre FAQ pour trouver des réponses sur la création de parties, les abonnements VIP et plus encore.
            </p>
            <a href=\"";
        // line 121
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
        // line 130
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-blue-600 text-sm font-semibold\">Voir plus →</a>
        </div>
        <div class=\"mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["nouveaux_groupes"]) || array_key_exists("nouveaux_groupes", $context) ? $context["nouveaux_groupes"] : (function () { throw new RuntimeError('Variable "nouveaux_groupes" does not exist.', 133, $this->source); })())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 134
            yield "                <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white w-full\">
                    <img src=\"";
            // line 135
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "picture", [], "any", false, false, false, 135))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 135), "html", null, true);
            yield "\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                    <div class=\"flex justify-between items-center\">
                        <a href=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 137)]), "html", null, true);
            yield "\" class=\"font-semibold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 137), "html", null, true);
            yield "</a>
                        <a href=\"";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 138)]), "html", null, true);
            yield "\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs\">Voir</a>
                    </div>
                    <div class=\"flex justify-between items-center mt-2\">
                        <div class=\"flex items-center\">
                            ";
            // line 142
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 142), "avatar", [], "any", false, false, false, 142)) {
                // line 143
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 143), "avatar", [], "any", false, false, false, 143))), "html", null, true);
                yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
            } else {
                // line 145
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
            }
            // line 147
            yield "                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-400\">MJ</p>
                                <p class=\"text-xs text-white\">";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 149), "username", [], "any", false, false, false, 149), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-xs text-gray-400\">Places disponibles</p>
                            <p class=\"text-lg font-bold text-white\">";
            // line 154
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 154) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 154))), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 159
            yield "                <p class=\"text-gray-400\">Aucun nouveau jeu de rôle disponible.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 161
        yield "        </div>
    </div>
    <div class=\"container mx-auto flex flex-col mt-12\">
        <div class=\"flex justify-between items-center\">
            <h2 class=\"text-2xl font-bold text-white\">Parties qui Recrutent</h2>
            <a href=\"";
        // line 166
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-blue-600 text-sm font-semibold\">Voir plus →</a>
        </div>

        <div class=\"mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
            ";
        // line 170
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["groupes_recrutement_ouvert"]) || array_key_exists("groupes_recrutement_ouvert", $context) ? $context["groupes_recrutement_ouvert"] : (function () { throw new RuntimeError('Variable "groupes_recrutement_ouvert" does not exist.', 170, $this->source); })()), 0, 4));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 171
            yield "                <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white w-full\">
                    <img src=\"";
            // line 172
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "picture", [], "any", false, false, false, 172))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 172), "html", null, true);
            yield "\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                    <div class=\"flex justify-between items-center\">
                        <a href=\"";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 174)]), "html", null, true);
            yield "\" class=\"font-semibold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 174), "html", null, true);
            yield "</a>
                        <a href=\"";
            // line 175
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 175)]), "html", null, true);
            yield "\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs\">Voir</a>
                    </div>
                    <div class=\"flex justify-between items-center mt-2\">
                        <div class=\"flex items-center\">
                            ";
            // line 179
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 179), "avatar", [], "any", false, false, false, 179)) {
                // line 180
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 180), "avatar", [], "any", false, false, false, 180))), "html", null, true);
                yield "\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            ";
            } else {
                // line 182
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
            }
            // line 184
            yield "                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-400\">MJ</p>
                                <p class=\"text-xs text-white\">";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 186), "username", [], "any", false, false, false, 186), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-xs text-gray-400\">Places disponibles</p>
                            <p class=\"text-lg font-bold text-white\">";
            // line 191
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 191) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 191))), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 196
            yield "                <p class=\"text-gray-400\">Aucune partie ne recrute actuellement.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 198
        yield "        </div>
    </div>
    <div class=\"container mx-auto flex flex-col mt-12 z-30 relative\">
        <div class=\"flex justify-between items-center\">
            <h2 class=\"text-2xl font-bold text-white\">Parties populaires</h2>
            <div class=\"flex flex-wrap space-x-2\" id=\"categories-container\">
                ";
        // line 204
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 204, $this->source); })()), 0, 4));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 205
            yield "                    <label class=\"m-2 px-3 py-2 rounded-lg flex items-center category-label bg-gray-700 text-white cursor-pointer hover:bg-gray-600 transition-colors duration-300\">
                        <input type=\"checkbox\" name=\"category\" value=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 206), "html", null, true);
            yield "\" class=\"mr-2 category-radio\">
                        ";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 207), "html", null, true);
            yield "
                    </label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 210
        yield "
                ";
        // line 211
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 211, $this->source); })())) > 4)) {
            // line 212
            yield "                    <div class=\"relative\">
                        <label id=\"show-more-categories\" class=\"m-2 px-3 py-2 rounded-lg flex items-center bg-blue-700 text-white cursor-pointer hover:bg-blue-600 transition-colors duration-300\">
                            Plus +
                        </label>
                        <div id=\"dropdown-categories\" class=\"absolute left-0 mt-2 w-[360px] bg-gray-700 rounded-lg shadow-lg p-4 hidden z-40\">
                            <div class=\"grid grid-cols-2 gap-4\">
                                <!-- Afficher les autres catégories ici -->
                                ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 219, $this->source); })()), 4));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 220
                yield "                                    <label class=\"px-3 py-2 rounded-lg flex items-center category-label bg-gray-800 text-white cursor-pointer hover:bg-gray-600 transition-colors duration-300\">
                                        <input type=\"checkbox\" name=\"category\" value=\"";
                // line 221
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 221), "html", null, true);
                yield "\" class=\"mr-2 category-radio\">
                                        ";
                // line 222
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 222), "html", null, true);
                yield "
                                    </label>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            yield "                            </div>
                        </div>
                    </div>
                ";
        }
        // line 229
        yield "            </div>
        </div>
        <p class=\"text-white mb-4\">Sélectionnez une ou plusieurs catégories (maximum 3).</p>
        <div id=\"univers-container\" class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 justify-center items-center min-h-[150px]\">
            ";
        // line 233
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 233, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe_j_d_r"]) {
            // line 234
            yield "                <div class=\"univers bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white transition-transform duration-300 hover:scale-105\" data-category-ids=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::join(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "categories", [], "any", false, false, false, 234), ","), "html", null, true);
            yield "\">
                    <div class=\"relative\">
                        <img src=\"";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "picture", [], "any", false, false, false, 236))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 236), "html", null, true);
            yield "\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover transition-opacity hover:opacity-90\">
                    </div>
                    <div class=\"flex justify-between items-center mb-2\">
                        <a href=\"";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 239)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 239), "html", null, true);
            yield "</a>
                        <a href=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 240)]), "html", null, true);
            yield "\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs transition-colors duration-300 hover:bg-blue-500\">Voir</a>
                    </div>
                    <div class=\"flex justify-between items-center mt-2\">
                        <div class=\"flex items-center\">
                            ";
            // line 244
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 244), "avatar", [], "any", false, false, false, 244)) {
                // line 245
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 245), "avatar", [], "any", false, false, false, 245))), "html", null, true);
                yield "\" alt=\"MJ\" class=\"rounded h-8 w-8 object-cover\">
                            ";
            } else {
                // line 247
                yield "                                <img class=\"rounded h-8 w-8 object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile\">
                            ";
            }
            // line 249
            yield "                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-400\">MJ</p>
                                <p class=\"text-xs text-white\">";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 251), "username", [], "any", false, false, false, 251), "html", null, true);
            yield "</p>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-xs text-gray-400\">Nombre de joueurs</p>
                            <p class=\"text-lg font-bold text-white\">";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 256)), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 256), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 261
            yield "                <p class=\"text-center text-gray-700 text-lg w-full\">Aucun univers disponible pour cette catégorie.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe_j_d_r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 263
        yield "        </div>

        <div class=\"text-center mt-8 flex justify-center\">
            <button id=\"show-more-btn\" class=\"bg-blue-600 text-white px-4 py-2 rounded transition-colors duration-300 hover:bg-blue-500\">Afficher plus</button>
        </div>
    </div>
    <div class=\"container mx-auto flex flex-col items-center justify-center py-12\">
        <div class=\"bg-gradient-to-br from-[rgba(30, 58, 138, 0.8)] via-[rgba(55, 48, 163, 0.8)] to-[rgba(76, 29, 149, 0.8)] rounded-lg p-8 shadow-lg text-center max-w-3xl border border-[#4338CA]\">
            <h2 class=\"text-3xl font-bold text-white mb-4\">Créer Votre Propre Partie</h2>
            <p class=\"text-gray-300 mb-6\">
                Envie de lancer ta propre aventure ? Avec DiceFinder, crée ta partie personnalisée en quelques clics. Définis ton univers, sélectionne tes règles, et invite des joueurs passionnés à rejoindre ton monde. Que tu sois un maître de jeu chevronné ou débutant, tout est pensé pour faciliter la création d'une expérience immersive.
            </p>
            <a href=\"";
        // line 275
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"bg-indigo-600 text-white py-2 px-6 rounded-full font-semibold hover:bg-indigo-700 transition-colors\">Rejoindre La Communauté</a>
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

    const showMoreCategoriesButton = document.getElementById('show-more-categories');
    const dropdownCategories = document.getElementById('dropdown-categories');
    const categoryRadios = document.querySelectorAll('.category-radio');
    const universElements = document.querySelectorAll('.univers');
    const universContainer = document.getElementById('univers-container');
    const showMoreButton = document.getElementById('show-more-btn');
    let selectedCategories = [];
    let currentUniversCount = 8;

    if (showMoreCategoriesButton) {
        showMoreCategoriesButton.addEventListener('click', function() {
            if (dropdownCategories.classList.contains('hidden')) {
                dropdownCategories.classList.remove('hidden');
            } else {
                dropdownCategories.classList.add('hidden');
            }
        });
    }

    function filterUnivers() {
        let visibleUniversCount = 0;

        universElements.forEach(univers => {
            const categoryIds = univers.getAttribute('data-category-ids').split(',').map(id => id.trim());

            if (selectedCategories.length === 0 || selectedCategories.some(id => categoryIds.includes(id))) {
                univers.style.display = 'block';
                visibleUniversCount++;
            } else {
                univers.style.display = 'none';
            }
        });

        Array.from(universElements).slice(8).forEach(univers => {
            univers.style.display = 'none';
        });

        if (visibleUniversCount === 0) {
            universContainer.classList.remove('grid', 'grid-cols-1', 'sm:grid-cols-2', 'md:grid-cols-2', 'lg:grid-cols-3', 'xl:grid-cols-4', 'gap-6');
            universContainer.classList.add('flex', 'justify-center', 'items-center', 'min-h-[150px]');
            
            if (!noUniversMessage.parentNode) {
                universContainer.appendChild(noUniversMessage);
            }
            showMoreButton.style.display = 'none';
        } else {
            universContainer.classList.remove('flex', 'justify-center', 'items-center');
            universContainer.classList.add('grid', 'grid-cols-1', 'sm:grid-cols-2', 'md:grid-cols-2', 'lg:grid-cols-3', 'xl:grid-cols-4', 'gap-6');

            if (noUniversMessage.parentNode) {
                noUniversMessage.parentNode.removeChild(noUniversMessage);
            }

            showMoreButton.style.display = visibleUniversCount > 8 ? 'block' : 'none';
        }

        currentUniversCount = 8;
    }

    categoryRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.checked) {
                if (selectedCategories.length < 3) {
                    selectedCategories.push(this.value);
                } else {
                    this.checked = false;
                    alert('Vous ne pouvez sélectionner que 3 catégories maximum.');
                }
            } else {
                selectedCategories = selectedCategories.filter(id => id !== this.value);
            }
            filterUnivers();
        });
    });

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
        return array (  588 => 275,  574 => 263,  567 => 261,  555 => 256,  547 => 251,  543 => 249,  537 => 247,  531 => 245,  529 => 244,  522 => 240,  516 => 239,  508 => 236,  502 => 234,  497 => 233,  491 => 229,  485 => 225,  476 => 222,  472 => 221,  469 => 220,  465 => 219,  456 => 212,  454 => 211,  451 => 210,  442 => 207,  438 => 206,  435 => 205,  431 => 204,  423 => 198,  416 => 196,  406 => 191,  398 => 186,  394 => 184,  388 => 182,  382 => 180,  380 => 179,  373 => 175,  367 => 174,  360 => 172,  357 => 171,  352 => 170,  345 => 166,  338 => 161,  331 => 159,  321 => 154,  313 => 149,  309 => 147,  303 => 145,  297 => 143,  295 => 142,  288 => 138,  282 => 137,  275 => 135,  272 => 134,  267 => 133,  261 => 130,  249 => 121,  240 => 115,  207 => 85,  198 => 79,  183 => 67,  174 => 61,  147 => 37,  137 => 30,  130 => 25,  122 => 21,  114 => 17,  112 => 16,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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

        <div class=\"flex flex-col lg:flex-row lg:w-1/2 justify-center items-center relative mt-10 lg:mt-0\">
            <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white w-full h-[28rem] lg:w-[26rem] relative z-20 transform scale-105 lg:ml-12 hidden lg:block\">
                <img src=\"{{ asset('images/logo-card.png') }}\" alt=\"Image de jeu\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                <div class=\"flex justify-between items-center\">
                    <span class=\"font-semibold\">Donjons & Dragons 5e</span>
                    <a href=\"\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs\">Voir</a>
                </div>
                <div class=\"flex justify-between items-center mt-2\">
                    <div class=\"flex items-center\">
                        <img src=\"{{ asset('images/pp-card.png') }}\" alt=\"MJ photo\" class=\"rounded h-8 w-8 object-cover\">
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

    <div class=\"container mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 mt-8\">
        <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
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
        <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
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
        <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
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
        <article class=\"flex-1 rounded-lg border border-gray-100 bg-white p-4 shadow-sm transition hover:shadow-lg sm:p-6 dark:border-gray-800 dark:bg-gray-900 dark:shadow-gray-700/25\">
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
                <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white w-full\">
                    <img src=\"{{ asset('uploads/images-jdr/' ~ groupe.picture) }}\" alt=\"{{ groupe.title }}\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                    <div class=\"flex justify-between items-center\">
                        <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe.id}) }}\" class=\"font-semibold\">{{ groupe.title }}</a>
                        <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe.id}) }}\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs\">Voir</a>
                    </div>
                    <div class=\"flex justify-between items-center mt-2\">
                        <div class=\"flex items-center\">
                            {% if groupe.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ groupe.owner.avatar) }}\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            {% else %}
                                <img src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            {% endif %}
                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-400\">MJ</p>
                                <p class=\"text-xs text-white\">{{ groupe.owner.username }}</p>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-xs text-gray-400\">Places disponibles</p>
                            <p class=\"text-lg font-bold text-white\">{{ groupe.maxPlayer - groupe.players|length }}</p>
                        </div>
                    </div>
                </div>
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
                <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white w-full\">
                    <img src=\"{{ asset('uploads/images-jdr/' ~ groupe.picture) }}\" alt=\"{{ groupe.title }}\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                    <div class=\"flex justify-between items-center\">
                        <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe.id}) }}\" class=\"font-semibold\">{{ groupe.title }}</a>
                        <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe.id}) }}\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs\">Voir</a>
                    </div>
                    <div class=\"flex justify-between items-center mt-2\">
                        <div class=\"flex items-center\">
                            {% if groupe.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ groupe.owner.avatar) }}\" alt=\"Avatar MJ\" class=\"w-8 h-8 rounded-full\">
                            {% else %}
                                <img src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Avatar MJ\" class=\"rounded h-8 w-8 object-cover\">
                            {% endif %}
                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-400\">MJ</p>
                                <p class=\"text-xs text-white\">{{ groupe.owner.username }}</p>
                            </div>
                        </div>
                        <div class=\"text-right\">
                            <p class=\"text-xs text-gray-400\">Places disponibles</p>
                            <p class=\"text-lg font-bold text-white\">{{ groupe.maxPlayer - groupe.players|length }}</p>
                        </div>
                    </div>
                </div>
            {% else %}
                <p class=\"text-gray-400\">Aucune partie ne recrute actuellement.</p>
            {% endfor %}
        </div>
    </div>
    <div class=\"container mx-auto flex flex-col mt-12 z-30 relative\">
        <div class=\"flex justify-between items-center\">
            <h2 class=\"text-2xl font-bold text-white\">Parties populaires</h2>
            <div class=\"flex flex-wrap space-x-2\" id=\"categories-container\">
                {% for category in categories|slice(0, 4) %}
                    <label class=\"m-2 px-3 py-2 rounded-lg flex items-center category-label bg-gray-700 text-white cursor-pointer hover:bg-gray-600 transition-colors duration-300\">
                        <input type=\"checkbox\" name=\"category\" value=\"{{ category.id }}\" class=\"mr-2 category-radio\">
                        {{ category.name }}
                    </label>
                {% endfor %}

                {% if categories|length > 4 %}
                    <div class=\"relative\">
                        <label id=\"show-more-categories\" class=\"m-2 px-3 py-2 rounded-lg flex items-center bg-blue-700 text-white cursor-pointer hover:bg-blue-600 transition-colors duration-300\">
                            Plus +
                        </label>
                        <div id=\"dropdown-categories\" class=\"absolute left-0 mt-2 w-[360px] bg-gray-700 rounded-lg shadow-lg p-4 hidden z-40\">
                            <div class=\"grid grid-cols-2 gap-4\">
                                <!-- Afficher les autres catégories ici -->
                                {% for category in categories|slice(4) %}
                                    <label class=\"px-3 py-2 rounded-lg flex items-center category-label bg-gray-800 text-white cursor-pointer hover:bg-gray-600 transition-colors duration-300\">
                                        <input type=\"checkbox\" name=\"category\" value=\"{{ category.id }}\" class=\"mr-2 category-radio\">
                                        {{ category.name }}
                                    </label>
                                {% endfor %}
                            </div>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
        <p class=\"text-white mb-4\">Sélectionnez une ou plusieurs catégories (maximum 3).</p>
        <div id=\"univers-container\" class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6 justify-center items-center min-h-[150px]\">
            {% for groupe_j_d_r in groupes %}
                <div class=\"univers bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white transition-transform duration-300 hover:scale-105\" data-category-ids=\"{{ groupe_j_d_r.categories|join(',') }}\">
                    <div class=\"relative\">
                        <img src=\"{{ asset('uploads/images-jdr/' ~ groupe_j_d_r.picture) }}\" alt=\"{{ groupe_j_d_r.title }}\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover transition-opacity hover:opacity-90\">
                    </div>
                    <div class=\"flex justify-between items-center mb-2\">
                        <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"font-semibold hover:underline\">{{ groupe_j_d_r.title }}</a>
                        <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs transition-colors duration-300 hover:bg-blue-500\">Voir</a>
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
                            <p class=\"text-lg font-bold text-white\">{{ groupe_j_d_r.players|length }} / {{ groupe_j_d_r.maxPlayer }}</p>
                        </div>
                    </div>
                </div>
            {% else %}
                <p class=\"text-center text-gray-700 text-lg w-full\">Aucun univers disponible pour cette catégorie.</p>
            {% endfor %}
        </div>

        <div class=\"text-center mt-8 flex justify-center\">
            <button id=\"show-more-btn\" class=\"bg-blue-600 text-white px-4 py-2 rounded transition-colors duration-300 hover:bg-blue-500\">Afficher plus</button>
        </div>
    </div>
    <div class=\"container mx-auto flex flex-col items-center justify-center py-12\">
        <div class=\"bg-gradient-to-br from-[rgba(30, 58, 138, 0.8)] via-[rgba(55, 48, 163, 0.8)] to-[rgba(76, 29, 149, 0.8)] rounded-lg p-8 shadow-lg text-center max-w-3xl border border-[#4338CA]\">
            <h2 class=\"text-3xl font-bold text-white mb-4\">Créer Votre Propre Partie</h2>
            <p class=\"text-gray-300 mb-6\">
                Envie de lancer ta propre aventure ? Avec DiceFinder, crée ta partie personnalisée en quelques clics. Définis ton univers, sélectionne tes règles, et invite des joueurs passionnés à rejoindre ton monde. Que tu sois un maître de jeu chevronné ou débutant, tout est pensé pour faciliter la création d'une expérience immersive.
            </p>
            <a href=\"{{ path('app_register') }}\" class=\"bg-indigo-600 text-white py-2 px-6 rounded-full font-semibold hover:bg-indigo-700 transition-colors\">Rejoindre La Communauté</a>
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

    const showMoreCategoriesButton = document.getElementById('show-more-categories');
    const dropdownCategories = document.getElementById('dropdown-categories');
    const categoryRadios = document.querySelectorAll('.category-radio');
    const universElements = document.querySelectorAll('.univers');
    const universContainer = document.getElementById('univers-container');
    const showMoreButton = document.getElementById('show-more-btn');
    let selectedCategories = [];
    let currentUniversCount = 8;

    if (showMoreCategoriesButton) {
        showMoreCategoriesButton.addEventListener('click', function() {
            if (dropdownCategories.classList.contains('hidden')) {
                dropdownCategories.classList.remove('hidden');
            } else {
                dropdownCategories.classList.add('hidden');
            }
        });
    }

    function filterUnivers() {
        let visibleUniversCount = 0;

        universElements.forEach(univers => {
            const categoryIds = univers.getAttribute('data-category-ids').split(',').map(id => id.trim());

            if (selectedCategories.length === 0 || selectedCategories.some(id => categoryIds.includes(id))) {
                univers.style.display = 'block';
                visibleUniversCount++;
            } else {
                univers.style.display = 'none';
            }
        });

        Array.from(universElements).slice(8).forEach(univers => {
            univers.style.display = 'none';
        });

        if (visibleUniversCount === 0) {
            universContainer.classList.remove('grid', 'grid-cols-1', 'sm:grid-cols-2', 'md:grid-cols-2', 'lg:grid-cols-3', 'xl:grid-cols-4', 'gap-6');
            universContainer.classList.add('flex', 'justify-center', 'items-center', 'min-h-[150px]');
            
            if (!noUniversMessage.parentNode) {
                universContainer.appendChild(noUniversMessage);
            }
            showMoreButton.style.display = 'none';
        } else {
            universContainer.classList.remove('flex', 'justify-center', 'items-center');
            universContainer.classList.add('grid', 'grid-cols-1', 'sm:grid-cols-2', 'md:grid-cols-2', 'lg:grid-cols-3', 'xl:grid-cols-4', 'gap-6');

            if (noUniversMessage.parentNode) {
                noUniversMessage.parentNode.removeChild(noUniversMessage);
            }

            showMoreButton.style.display = visibleUniversCount > 8 ? 'block' : 'none';
        }

        currentUniversCount = 8;
    }

    categoryRadios.forEach(radio => {
        radio.addEventListener('change', function() {
            if (this.checked) {
                if (selectedCategories.length < 3) {
                    selectedCategories.push(this.value);
                } else {
                    this.checked = false;
                    alert('Vous ne pouvez sélectionner que 3 catégories maximum.');
                }
            } else {
                selectedCategories = selectedCategories.filter(id => id !== this.value);
            }
            filterUnivers();
        });
    });

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
