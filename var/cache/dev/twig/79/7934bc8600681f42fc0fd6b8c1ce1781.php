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
class __TwigTemplate_0bef8235188a0f77791d84e6a102bb4b extends Template
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
    <div class=\"relative isolate px-6 pt-0 lg:px-8\">
        <div class=\"container mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between lg:gap-x-8 pt-4 lg:pt-8\">
            <div class=\"text-left lg:w-1/2\">
                <h1 class=\"text-4xl font-bold tracking-tight text-white sm:text-5xl element\"></h1>
                <p class=\"mt-6 text-lg leading-8 text-gray-400\">Votre quête commence ici, avec DiceFinder</p>
                <div class=\"mt-10\">
                    ";
        // line 14
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14))) {
            yield " 
                        <a href=\"";
            // line 15
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_jdr");
            yield "\" class=\"relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-[#bb8f4f] group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-[#402c85]\">
                            <span class=\"relative px-8 py-4 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 text-3xl\">
                                C'est Parti →
                            </span>
                        </a>
                    ";
        } else {
            // line 21
            yield "                        <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-[#bb8f4f] group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-[#402c85]\">
                            <span class=\"relative px-8 py-4 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 text-3xl\">
                                C'est Parti →
                            </span>
                        </a>
                    ";
        }
        // line 27
        yield "                </div>
            </div>
            <div class=\"flex flex-col lg:flex-row lg:w-1/2 justify-center items-center relative mt-4 lg:mt-0\">
                <spline-viewer
                    class=\"hidden lg:block w-full h-[400px] lg:h-[600px] lg:max-w-none\"
                    style=\"width: 100%; max-height: 600px; object-fit: cover;\"
                    url=\"https://prod.spline.design/3Rw-8AXeEpBSx7b1/scene.splinecode\">
                </spline-viewer>
            </div>
        </div>
    <div class=\"container mx-auto flex flex-col items-center justify-center py-8 sm:py-12\">
        <div class=\"w-full lg:max-w-7xl\">
            <div class=\"bg-white info-item bg-opacity-10 rounded-lg p-6 sm:p-8 shadow-lg text-center border border-[#bb8f4f]\">
                <h2 class=\"text-2xl sm:text-3xl font-bold text-white mb-4\">Vous voulez soutenir le projet ?</h2>
                <p class=\"text-slate-200 mb-6 text-sm sm:text-base\">
                    Aidez-nous sur Patreon, chaque contribution aidera à rendre DiceFinder encore plus performant.
                </p>
                <a href=\"https://patreon.com/DiceFinder?utm_medium=unknown&utm_source=join_link&utm_campaign=creatorshare_creator&utm_content=copyLink\" 
                    class=\"inline-block bg-[#402c85] text-white py-2 px-4 sm:px-6 rounded-full font-semibold hover:bg-indigo-700 transition-colors whitespace-nowrap\" 
                    target=\"_blank\">
                    Je soutiens
                </a>
            </div>
        </div>
    </div>
    <section>    
        <div class=\"container mx-auto px-4 sm:px-6\">
            <div class=\"pt-12 md:pt-20\">
                <div class=\"relative\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6\">
                        <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\" style=\"will-change: transform;\">
                            <div class=\"relative h-full bg-slate-900 bg-opacity-40 backdrop-blur-lg rounded-[inherit] z-20 overflow-hidden shadow-lg shadow-[#00000066]\">
                                <div class=\"absolute inset-0 -z-10 opacity-0 group-hover/slide:opacity-100 transition-opacity duration-500 ease-in-out\" aria-hidden=\"true\">
                                    <canvas data-particle-animation data-particle-quantity=\"3\"></canvas>
                                </div>
                                <div class=\"absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/3 aspect-square\" aria-hidden=\"true\">
                                    <div class=\"absolute inset-0 translate-z-0 rounded-full bg-slate-800 transition-colors duration-500 ease-in-out blur-[80px]\"></div>
                                </div>
                                <div class=\"flex flex-col p-6 h-full\">
                                    <div class=\"flex items-center justify-center w-16 h-16 rounded-full backdrop-blur-lg border border-[#bb8f4f] mb-4 shadow-md\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"2.5rem\" height=\"2.5rem\" viewBox=\"0 0 24 24\" class=\"text-[#bb8f4f]\">
                                            <path fill=\"currentColor\" d=\"M21 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5v2H5v14h14v-5z\"/>
                                            <path fill=\"currentColor\" d=\"M21 7h-4V3h-2v4h-4v2h4v4h2V9h4z\"/>
                                        </svg>
                                    </div>
                                    <div class=\"grow\">
                                        <div class=\"font-bold text-2xl mb-1 text-white\">Créer ta partie</div>
                                        <div class=\"text-slate-200 mb-3\">Crée ta propre aventure en quelques clics. Choisis ton univers, définis les règles, et invite des joueurs à rejoindre ton monde.</div>
                                    </div>
                                    <div class=\"text-right\">
                                        <a class=\"text-sm font-medium text-[#F69BB4] hover:text-white inline-flex items-center transition duration-150 ease-in-out group\" href=\"#0\">En savoir plus <span class=\"tracking-normal text-white group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1\">&rarr;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\" style=\"will-change: transform;\">
                            <div class=\"relative h-full bg-slate-900 bg-opacity-40 backdrop-blur-lg rounded-[inherit] z-20 overflow-hidden shadow-lg shadow-[#00000066]\">
                                <div class=\"absolute inset-0 -z-10 opacity-0 group-hover/slide:opacity-100 transition-opacity duration-500 ease-in-out\" aria-hidden=\"true\">
                                    <canvas data-particle-animation data-particle-quantity=\"3\"></canvas>
                                </div>                                            
                                <div class=\"absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/3 aspect-square\" aria-hidden=\"true\">
                                    <div class=\"absolute inset-0 translate-z-0 rounded-full bg-slate-800 transition-colors duration-500 ease-in-out blur-[80px]\"></div>
                                </div>
                                <div class=\"flex flex-col p-6 h-full\">
                                    <div class=\"flex items-center justify-center w-16 h-16 rounded-full backdrop-blur-lg border border-[#bb8f4f] mb-4 shadow-md\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"2.5rem\" height=\"2.5rem\" viewBox=\"0 0 24 24\" class=\"text-[#bb8f4f]\">
                                            <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5\"/>
                                        </svg>
                                    </div>
                                    <div class=\"grow\">
                                        <div class=\"font-bold text-2xl mb-1 text-white\">Rejoins une Partie</div>
                                        <div class=\"text-slate-200 mb-3\">Trouve et rejoins des parties correspondant à ton style de jeu. Rejoins l’aventure avec des maîtres de jeu passionnés.</div>
                                    </div>
                                    <div class=\"text-right\">
                                        <a class=\"text-sm font-medium text-[#F69BB4] hover:text-white inline-flex items-center transition duration-150 ease-in-out group\" href=\"#0\">En savoir plus <span class=\"tracking-normal text-white group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1\">&rarr;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\" style=\"will-change: transform;\">
                            <div class=\"relative h-full bg-slate-900 bg-opacity-40 backdrop-blur-lg rounded-[inherit] z-20 overflow-hidden shadow-lg shadow-[#00000066]\">
                                <div class=\"absolute inset-0 -z-10 opacity-0 group-hover/slide:opacity-100 transition-opacity duration-500 ease-in-out\" aria-hidden=\"true\">
                                    <canvas data-particle-animation data-particle-quantity=\"3\"></canvas>
                                </div>                                            
                                <div class=\"absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/3 aspect-square\" aria-hidden=\"true\">
                                    <div class=\"absolute inset-0 translate-z-0 rounded-full bg-slate-800 transition-colors duration-500 ease-in-out blur-[80px]\"></div>
                                </div>
                                <div class=\"flex flex-col p-6 h-full\">
                                    <div class=\"flex items-center justify-center w-16 h-16 rounded-full backdrop-blur-lg border border-[#bb8f4f] mb-4 shadow-md\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"2.5rem\" height=\"2.5rem\" viewBox=\"0 0 24 24\" class=\"text-[#bb8f4f]\">
                                            <path fill=\"currentColor\" d=\"M3.497 8.065L4.784 19h14.443l1.286-10.935l-4.01 2.673l-4.498-6.297l-4.498 6.297zM2.806 5.2L7.005 8l4.186-5.861a1 1 0 0 1 1.628 0l4.186 5.86l4.2-2.799a1 1 0 0 1 1.547.949L21.11 20.116a1 1 0 0 1-.993.884H3.894a1 1 0 0 1-.993-.884L1.258 6.15a1 1 0 0 1 1.548-.95m9.2 9.8a2 2 0 1 1-.001-4a2 2 0 0 1 0 4\"/>
                                        </svg>
                                    </div>
                                    <div class=\"grow\">
                                        <div class=\"font-bold text-2xl mb-1 text-white\">Adhère au VIP</div>
                                        <div class=\"text-slate-200 mb-3\">Accède à des fonctionnalités exclusives, des parties prioritaires et des outils avancés en devenant membre VIP.</div>
                                    </div>
                                    <div class=\"text-right\">
                                        <a class=\"text-sm font-medium text-[#F69BB4] hover:text-white inline-flex items-center transition duration-150 ease-in-out group\" href=\"#0\">En savoir plus <span class=\"tracking-normal text-white group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1\">&rarr;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\" style=\"will-change: transform;\">
                            <div class=\"relative h-full bg-slate-900 bg-opacity-40 backdrop-blur-lg rounded-[inherit] z-20 overflow-hidden shadow-lg shadow-[#00000066]\">
                                <div class=\"absolute inset-0 -z-10 opacity-0 group-hover/slide:opacity-100 transition-opacity duration-500 ease-in-out\" aria-hidden=\"true\">
                                    <canvas data-particle-animation data-particle-quantity=\"3\"></canvas>
                                </div>                                            
                                <div class=\"absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/3 aspect-square\" aria-hidden=\"true\">
                                    <div class=\"absolute inset-0 translate-z-0 rounded-full bg-slate-800 transition-colors duration-500 ease-in-out blur-[80px]\"></div>
                                </div>
                                <div class=\"flex flex-col p-6 h-full\">
                                    <div class=\"flex items-center justify-center w-16 h-16 rounded-full backdrop-blur-lg border border-[#bb8f4f] mb-4 shadow-md\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"2.5rem\" height=\"2.5rem\" viewBox=\"0 0 24 24\" class=\"text-[#bb8f4f]\">
                                            <path fill=\"currentColor\" d=\"M10.6 16q0-2.025.363-2.912T12.5 11.15q1.025-.9 1.563-1.562t.537-1.513q0-1.025-.687-1.7T12 5.7q-1.275 0-1.937.775T9.125 8.05L6.55 6.95q.525-1.6 1.925-2.775T12 3q2.625 0 4.038 1.463t1.412 3.512q0 1.25-.537 2.138t-1.688 2.012Q14 13.3 13.738 13.913T13.475 16zm1.4 6q-.825 0-1.412-.587T10 20t.588-1.412T12 18t1.413.588T14 20t-.587 1.413T12 22\"/>
                                        </svg>
                                    </div>
                                    <div class=\"grow\">
                                        <div class=\"font-bold text-2xl mb-1 text-white\">FAQ</div>
                                        <div class=\"text-slate-200 mb-3\">Vous avez des questions ? Consultez notre FAQ pour trouver des réponses sur la création de parties, les abonnements VIP et plus encore.</div>
                                    </div>
                                    <div class=\"text-right\">
                                        <a class=\"text-sm font-medium text-[#F69BB4] hover:text-white inline-flex items-center transition duration-150 ease-in-out group\" href=\"#0\">En savoir plus <span class=\"tracking-normal text-white group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1\">&rarr;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"container mx-auto flex flex-col mt-12\">
        <div class=\"flex justify-between items-center\">
            <h2 class=\"text-2xl font-bold text-white\">Nouveaux Univers</h2>
            <a href=\"";
        // line 162
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-[#F69BB4] text-sm font-semibold\">Voir plus →</a>
        </div>
        <div class=\"mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
            ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["nouveaux_groupes"]) || array_key_exists("nouveaux_groupes", $context) ? $context["nouveaux_groupes"] : (function () { throw new RuntimeError('Variable "nouveaux_groupes" does not exist.', 165, $this->source); })())));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 166
            yield "                <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                    style=\"will-change: transform;\">
                    <a href=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 168)]), "html", null, true);
            yield "\" class=\"block\">
                        <div class=\"relative\">
                            <img src=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "picture", [], "any", false, false, false, 170))), "html", null, true);
            yield "\" 
                                alt=\"";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 171), "html", null, true);
            yield " image\" 
                                class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 172
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 172)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 172))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                            <div class=\"absolute top-2 right-2\">
                                <span class=\"text-sm font-bold px-2 py-1 rounded 
                                    ";
            // line 175
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "status", [], "any", false, false, false, 175) == "nouveau")) {
                yield " bg-green-600
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 176
$context["groupe"], "status", [], "any", false, false, false, 176) == "en_cours")) {
                yield " bg-blue-500
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 177
$context["groupe"], "status", [], "any", false, false, false, 177) == "termine")) {
                yield " bg-red-500
                                    ";
            } else {
                // line 178
                yield " bg-gray-700
                                    ";
            }
            // line 179
            yield " text-white\">
                                    ";
            // line 180
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "status", [], "any", false, false, false, 180) == "nouveau")) {
                // line 181
                yield "                                        Nouveau
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 182
$context["groupe"], "status", [], "any", false, false, false, 182) == "en_cours")) {
                // line 183
                yield "                                        En Cours
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 184
$context["groupe"], "status", [], "any", false, false, false, 184) == "termine")) {
                // line 185
                yield "                                        Terminé
                                    ";
            } else {
                // line 187
                yield "                                        Statut inconnu
                                    ";
            }
            // line 189
            yield "                                </span>
                            </div>
                        </div>
                    </a>
                    <div class=\"mb-2\">
                        <a href=\"";
            // line 194
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 194)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 194), "html", null, true);
            yield "</a>
                    </div>
                    <div class=\"flex justify-between items-center mt-2\">
                        <a href=\"";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 197), "id", [], "any", false, false, false, 197)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                            ";
            // line 198
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 198), "avatar", [], "any", false, false, false, 198)) {
                // line 199
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 199), "avatar", [], "any", false, false, false, 199))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                            ";
            } else {
                // line 201
                yield "                                <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                            ";
            }
            // line 203
            yield "                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 205), "username", [], "any", false, false, false, 205), "html", null, true);
            yield "</p>
                            </div>
                        </a>
                        <div class=\"flex items-center text-right gap-1\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                            </svg>
                            ";
            // line 212
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 212)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 212))) {
                // line 213
                yield "                                <p class=\"text-lg font-bold text-red-500\">Complet</p>
                            ";
            } else {
                // line 215
                yield "                                <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 215)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 215), "html", null, true);
                yield "</p>
                            ";
            }
            // line 217
            yield "                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 221
            yield "                <p class=\"text-gray-400\">Aucun nouveau jeu de rôle disponible.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        yield "        </div>
    </div>
    <div class=\"container mx-auto flex flex-col mt-12\">
        <div class=\"flex justify-between items-center\">
            <h2 class=\"text-2xl font-bold text-white\">Parties qui Recrutent</h2>
            <a href=\"";
        // line 228
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-[#F69BB4] text-sm font-semibold\">Voir plus →</a>
        </div>

        <div class=\"mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
            ";
        // line 232
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["groupes_recrutement_ouvert"]) || array_key_exists("groupes_recrutement_ouvert", $context) ? $context["groupes_recrutement_ouvert"] : (function () { throw new RuntimeError('Variable "groupes_recrutement_ouvert" does not exist.', 232, $this->source); })()), 0, 4));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 233
            yield "                <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                    style=\"will-change: transform;\">
                    <a href=\"";
            // line 235
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 235)]), "html", null, true);
            yield "\" class=\"block\">
                        <div class=\"relative\">
                            <img src=\"";
            // line 237
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "picture", [], "any", false, false, false, 237))), "html", null, true);
            yield "\" 
                                alt=\"";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 238), "html", null, true);
            yield " image\" 
                                class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 239
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 239)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 239))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                            <div class=\"absolute top-2 right-2\">
                                <span class=\"text-sm font-bold px-2 py-1 rounded 
                                    ";
            // line 242
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "status", [], "any", false, false, false, 242) == "nouveau")) {
                yield " bg-green-600
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 243
$context["groupe"], "status", [], "any", false, false, false, 243) == "en_cours")) {
                yield " bg-blue-500
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 244
$context["groupe"], "status", [], "any", false, false, false, 244) == "termine")) {
                yield " bg-red-500
                                    ";
            } else {
                // line 245
                yield " bg-gray-700
                                    ";
            }
            // line 246
            yield " text-white\">
                                    ";
            // line 247
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "status", [], "any", false, false, false, 247) == "nouveau")) {
                // line 248
                yield "                                        Nouveau
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 249
$context["groupe"], "status", [], "any", false, false, false, 249) == "en_cours")) {
                // line 250
                yield "                                        En Cours
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 251
$context["groupe"], "status", [], "any", false, false, false, 251) == "termine")) {
                // line 252
                yield "                                        Terminé
                                    ";
            } else {
                // line 254
                yield "                                        Statut inconnu
                                    ";
            }
            // line 256
            yield "                                </span>
                            </div>
                        </div>
                    </a>
                    <div class=\"mb-2\">
                        <a href=\"";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 261)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 261), "html", null, true);
            yield "</a>
                    </div>
                    <div class=\"flex justify-between items-center mt-2\">
                        <a href=\"";
            // line 264
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 264), "id", [], "any", false, false, false, 264)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                            ";
            // line 265
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 265), "avatar", [], "any", false, false, false, 265)) {
                // line 266
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 266), "avatar", [], "any", false, false, false, 266))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                            ";
            } else {
                // line 268
                yield "                                <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                            ";
            }
            // line 270
            yield "                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 272), "username", [], "any", false, false, false, 272), "html", null, true);
            yield "</p>
                            </div>
                        </a>
                        <div class=\"flex items-center text-right gap-1\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                            </svg>
                            ";
            // line 279
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 279)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 279))) {
                // line 280
                yield "                                <p class=\"text-lg font-bold text-red-500\">Complet</p>
                            ";
            } else {
                // line 282
                yield "                                <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 282)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 282), "html", null, true);
                yield "</p>
                            ";
            }
            // line 284
            yield "                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 288
            yield "                <p class=\"text-gray-400\">Aucune partie ne recrute actuellement.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 290
        yield "        </div>
    </div>
    <div class=\"container mx-auto flex flex-col mt-12 z-30 relative\">
        <div class=\"flex justify-between items-center\">
            <h2 class=\"text-2xl font-bold text-white\">Parties populaires</h2>
            <a href=\"";
        // line 295
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-[#F69BB4] text-sm font-semibold\">Voir plus →</a>
        </div>

        <div class=\"mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
            ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["groupes"]) || array_key_exists("groupes", $context) ? $context["groupes"] : (function () { throw new RuntimeError('Variable "groupes" does not exist.', 299, $this->source); })()), 0, 8));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe_j_d_r"]) {
            // line 300
            yield "                <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                    style=\"will-change: transform;\">
                    <a href=\"";
            // line 302
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 302)]), "html", null, true);
            yield "\" class=\"block\">
                        <div class=\"relative\">
                            <img src=\"";
            // line 304
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "picture", [], "any", false, false, false, 304))), "html", null, true);
            yield "\" 
                                alt=\"";
            // line 305
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 305), "html", null, true);
            yield " image\" 
                                class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 306
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 306)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 306))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                            <div class=\"absolute top-2 right-2\">
                                <span class=\"text-sm font-bold px-2 py-1 rounded 
                                    ";
            // line 309
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "status", [], "any", false, false, false, 309) == "nouveau")) {
                yield " bg-green-600
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 310
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 310) == "en_cours")) {
                yield " bg-blue-500
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 311
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 311) == "termine")) {
                yield " bg-red-500
                                    ";
            } else {
                // line 312
                yield " bg-gray-700
                                    ";
            }
            // line 313
            yield " text-white\">
                                    ";
            // line 314
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "status", [], "any", false, false, false, 314) == "nouveau")) {
                // line 315
                yield "                                        Nouveau
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 316
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 316) == "en_cours")) {
                // line 317
                yield "                                        En Cours
                                    ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 318
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 318) == "termine")) {
                // line 319
                yield "                                        Terminé
                                    ";
            } else {
                // line 321
                yield "                                        Statut inconnu
                                    ";
            }
            // line 323
            yield "                                </span>
                            </div>
                        </div>
                    </a>
                    <div class=\"mb-2\">
                        <a href=\"";
            // line 328
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 328)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 328), "html", null, true);
            yield "</a>
                    </div>
                    <div class=\"flex justify-between items-center mt-2\">
                        <a href=\"";
            // line 331
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 331), "id", [], "any", false, false, false, 331)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                            ";
            // line 332
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 332), "avatar", [], "any", false, false, false, 332)) {
                // line 333
                yield "                                <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 333), "avatar", [], "any", false, false, false, 333))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                            ";
            } else {
                // line 335
                yield "                                <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                            ";
            }
            // line 337
            yield "                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 339
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 339), "username", [], "any", false, false, false, 339), "html", null, true);
            yield "</p>
                            </div>
                        </a>
                        <div class=\"flex items-center text-right gap-1\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                            </svg>
                            ";
            // line 346
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 346)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 346))) {
                // line 347
                yield "                                <p class=\"text-lg font-bold text-red-500\">Complet</p>
                            ";
            } else {
                // line 349
                yield "                                <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 349)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 349), "html", null, true);
                yield "</p>
                            ";
            }
            // line 351
            yield "                        </div>
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 355
            yield "                <p class=\"text-center text-gray-700 text-lg w-full\">Aucun univers disponible.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe_j_d_r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 357
        yield "        </div>
        <div class=\"text-center mt-8 flex justify-center\">
            <a href=\"";
        // line 359
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"bg-[#402c85] text-white px-4 py-2 rounded transition-colors duration-300 hover:bg-indigo-700\">Afficher plus</a>
        </div>
    </div>

    <div class=\"container mx-auto flex flex-col items-center justify-center py-8 sm:py-12\">
        <div class=\"bg-white info-item bg-opacity-10 rounded-lg p-6 sm:p-8 shadow-lg text-center border border-[#bb8f4f]\">
            <h2 class=\"text-2xl sm:text-3xl font-bold text-white mb-4\">Créer Votre Propre Partie</h2>
            <p class=\"text-gray-300 mb-6 text-sm sm:text-base\">
                Envie de lancer ta propre aventure ? Avec DiceFinder, crée ta partie personnalisée en quelques clics. Définis ton univers, sélectionne tes règles, et invite des joueurs passionnés à rejoindre ton monde. Que tu sois un maître de jeu chevronné ou débutant, tout est pensé pour faciliter la création d'une expérience immersive.
            </p>
            ";
        // line 369
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 369, $this->source); })()), "user", [], "any", false, false, false, 369)) {
            // line 370
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
            yield "\" class=\"inline-block bg-[#402c85] text-white py-2 px-4 sm:px-6 rounded-full font-semibold hover:bg-indigo-700 transition-colors whitespace-nowrap\">
                    Commencer
                </a>
            ";
        } else {
            // line 374
            yield "                <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
            yield "\" class=\"inline-block bg-[#402c85] text-white py-2 px-4 sm:px-6 rounded-full font-semibold hover:bg-indigo-700 transition-colors whitespace-nowrap\">
                    Rejoindre La Communauté
                </a>
            ";
        }
        // line 378
        yield "        </div>
    </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/typed.js@2.0.12\"></script>
<script src=\"https://unpkg.com/@hotwired/stimulus@3.0.1/dist/stimulus.umd.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    function removeSplineLogo() {
        const splineViewer = document.querySelector('spline-viewer');
        if (splineViewer && splineViewer.shadowRoot) {
            const shadowRoot = splineViewer.shadowRoot;
            const logoElement = shadowRoot.querySelector('a#logo');
            if (logoElement) {
                logoElement.style.display = 'none';
                logoElement.remove();
            }
        }
    }
    setTimeout(removeSplineLogo, 500);
});

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
        return array (  777 => 378,  769 => 374,  761 => 370,  759 => 369,  746 => 359,  742 => 357,  735 => 355,  727 => 351,  719 => 349,  715 => 347,  713 => 346,  703 => 339,  699 => 337,  693 => 335,  687 => 333,  685 => 332,  681 => 331,  673 => 328,  666 => 323,  662 => 321,  658 => 319,  656 => 318,  653 => 317,  651 => 316,  648 => 315,  646 => 314,  643 => 313,  639 => 312,  634 => 311,  630 => 310,  626 => 309,  618 => 306,  614 => 305,  610 => 304,  605 => 302,  601 => 300,  596 => 299,  589 => 295,  582 => 290,  575 => 288,  567 => 284,  559 => 282,  555 => 280,  553 => 279,  543 => 272,  539 => 270,  533 => 268,  527 => 266,  525 => 265,  521 => 264,  513 => 261,  506 => 256,  502 => 254,  498 => 252,  496 => 251,  493 => 250,  491 => 249,  488 => 248,  486 => 247,  483 => 246,  479 => 245,  474 => 244,  470 => 243,  466 => 242,  458 => 239,  454 => 238,  450 => 237,  445 => 235,  441 => 233,  436 => 232,  429 => 228,  422 => 223,  415 => 221,  407 => 217,  399 => 215,  395 => 213,  393 => 212,  383 => 205,  379 => 203,  373 => 201,  367 => 199,  365 => 198,  361 => 197,  353 => 194,  346 => 189,  342 => 187,  338 => 185,  336 => 184,  333 => 183,  331 => 182,  328 => 181,  326 => 180,  323 => 179,  319 => 178,  314 => 177,  310 => 176,  306 => 175,  298 => 172,  294 => 171,  290 => 170,  285 => 168,  281 => 166,  276 => 165,  270 => 162,  133 => 27,  123 => 21,  114 => 15,  110 => 14,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DiceFinder | Accueil{% endblock %}

{% block body %}

<div class=\"relative isolate px-6 pt-5 lg:px-8\">
    <div class=\"relative isolate px-6 pt-0 lg:px-8\">
        <div class=\"container mx-auto flex flex-col lg:flex-row items-start lg:items-center justify-between lg:gap-x-8 pt-4 lg:pt-8\">
            <div class=\"text-left lg:w-1/2\">
                <h1 class=\"text-4xl font-bold tracking-tight text-white sm:text-5xl element\"></h1>
                <p class=\"mt-6 text-lg leading-8 text-gray-400\">Votre quête commence ici, avec DiceFinder</p>
                <div class=\"mt-10\">
                    {% if app.user is not null %} 
                        <a href=\"{{ path('app_my_jdr') }}\" class=\"relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-[#bb8f4f] group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-[#402c85]\">
                            <span class=\"relative px-8 py-4 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 text-3xl\">
                                C'est Parti →
                            </span>
                        </a>
                    {% else %}
                        <a href=\"{{ path('app_login') }}\" class=\"relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-[#bb8f4f] group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-[#402c85]\">
                            <span class=\"relative px-8 py-4 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0 text-3xl\">
                                C'est Parti →
                            </span>
                        </a>
                    {% endif %}
                </div>
            </div>
            <div class=\"flex flex-col lg:flex-row lg:w-1/2 justify-center items-center relative mt-4 lg:mt-0\">
                <spline-viewer
                    class=\"hidden lg:block w-full h-[400px] lg:h-[600px] lg:max-w-none\"
                    style=\"width: 100%; max-height: 600px; object-fit: cover;\"
                    url=\"https://prod.spline.design/3Rw-8AXeEpBSx7b1/scene.splinecode\">
                </spline-viewer>
            </div>
        </div>
    <div class=\"container mx-auto flex flex-col items-center justify-center py-8 sm:py-12\">
        <div class=\"w-full lg:max-w-7xl\">
            <div class=\"bg-white info-item bg-opacity-10 rounded-lg p-6 sm:p-8 shadow-lg text-center border border-[#bb8f4f]\">
                <h2 class=\"text-2xl sm:text-3xl font-bold text-white mb-4\">Vous voulez soutenir le projet ?</h2>
                <p class=\"text-slate-200 mb-6 text-sm sm:text-base\">
                    Aidez-nous sur Patreon, chaque contribution aidera à rendre DiceFinder encore plus performant.
                </p>
                <a href=\"https://patreon.com/DiceFinder?utm_medium=unknown&utm_source=join_link&utm_campaign=creatorshare_creator&utm_content=copyLink\" 
                    class=\"inline-block bg-[#402c85] text-white py-2 px-4 sm:px-6 rounded-full font-semibold hover:bg-indigo-700 transition-colors whitespace-nowrap\" 
                    target=\"_blank\">
                    Je soutiens
                </a>
            </div>
        </div>
    </div>
    <section>    
        <div class=\"container mx-auto px-4 sm:px-6\">
            <div class=\"pt-12 md:pt-20\">
                <div class=\"relative\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6\">
                        <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\" style=\"will-change: transform;\">
                            <div class=\"relative h-full bg-slate-900 bg-opacity-40 backdrop-blur-lg rounded-[inherit] z-20 overflow-hidden shadow-lg shadow-[#00000066]\">
                                <div class=\"absolute inset-0 -z-10 opacity-0 group-hover/slide:opacity-100 transition-opacity duration-500 ease-in-out\" aria-hidden=\"true\">
                                    <canvas data-particle-animation data-particle-quantity=\"3\"></canvas>
                                </div>
                                <div class=\"absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/3 aspect-square\" aria-hidden=\"true\">
                                    <div class=\"absolute inset-0 translate-z-0 rounded-full bg-slate-800 transition-colors duration-500 ease-in-out blur-[80px]\"></div>
                                </div>
                                <div class=\"flex flex-col p-6 h-full\">
                                    <div class=\"flex items-center justify-center w-16 h-16 rounded-full backdrop-blur-lg border border-[#bb8f4f] mb-4 shadow-md\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"2.5rem\" height=\"2.5rem\" viewBox=\"0 0 24 24\" class=\"text-[#bb8f4f]\">
                                            <path fill=\"currentColor\" d=\"M21 14v5a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5v2H5v14h14v-5z\"/>
                                            <path fill=\"currentColor\" d=\"M21 7h-4V3h-2v4h-4v2h4v4h2V9h4z\"/>
                                        </svg>
                                    </div>
                                    <div class=\"grow\">
                                        <div class=\"font-bold text-2xl mb-1 text-white\">Créer ta partie</div>
                                        <div class=\"text-slate-200 mb-3\">Crée ta propre aventure en quelques clics. Choisis ton univers, définis les règles, et invite des joueurs à rejoindre ton monde.</div>
                                    </div>
                                    <div class=\"text-right\">
                                        <a class=\"text-sm font-medium text-[#F69BB4] hover:text-white inline-flex items-center transition duration-150 ease-in-out group\" href=\"#0\">En savoir plus <span class=\"tracking-normal text-white group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1\">&rarr;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\" style=\"will-change: transform;\">
                            <div class=\"relative h-full bg-slate-900 bg-opacity-40 backdrop-blur-lg rounded-[inherit] z-20 overflow-hidden shadow-lg shadow-[#00000066]\">
                                <div class=\"absolute inset-0 -z-10 opacity-0 group-hover/slide:opacity-100 transition-opacity duration-500 ease-in-out\" aria-hidden=\"true\">
                                    <canvas data-particle-animation data-particle-quantity=\"3\"></canvas>
                                </div>                                            
                                <div class=\"absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/3 aspect-square\" aria-hidden=\"true\">
                                    <div class=\"absolute inset-0 translate-z-0 rounded-full bg-slate-800 transition-colors duration-500 ease-in-out blur-[80px]\"></div>
                                </div>
                                <div class=\"flex flex-col p-6 h-full\">
                                    <div class=\"flex items-center justify-center w-16 h-16 rounded-full backdrop-blur-lg border border-[#bb8f4f] mb-4 shadow-md\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"2.5rem\" height=\"2.5rem\" viewBox=\"0 0 24 24\" class=\"text-[#bb8f4f]\">
                                            <path fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 4h10v14a2 2 0 0 1-2 2H9m3-5l3-3m0 0l-3-3m3 3H5\"/>
                                        </svg>
                                    </div>
                                    <div class=\"grow\">
                                        <div class=\"font-bold text-2xl mb-1 text-white\">Rejoins une Partie</div>
                                        <div class=\"text-slate-200 mb-3\">Trouve et rejoins des parties correspondant à ton style de jeu. Rejoins l’aventure avec des maîtres de jeu passionnés.</div>
                                    </div>
                                    <div class=\"text-right\">
                                        <a class=\"text-sm font-medium text-[#F69BB4] hover:text-white inline-flex items-center transition duration-150 ease-in-out group\" href=\"#0\">En savoir plus <span class=\"tracking-normal text-white group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1\">&rarr;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\" style=\"will-change: transform;\">
                            <div class=\"relative h-full bg-slate-900 bg-opacity-40 backdrop-blur-lg rounded-[inherit] z-20 overflow-hidden shadow-lg shadow-[#00000066]\">
                                <div class=\"absolute inset-0 -z-10 opacity-0 group-hover/slide:opacity-100 transition-opacity duration-500 ease-in-out\" aria-hidden=\"true\">
                                    <canvas data-particle-animation data-particle-quantity=\"3\"></canvas>
                                </div>                                            
                                <div class=\"absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/3 aspect-square\" aria-hidden=\"true\">
                                    <div class=\"absolute inset-0 translate-z-0 rounded-full bg-slate-800 transition-colors duration-500 ease-in-out blur-[80px]\"></div>
                                </div>
                                <div class=\"flex flex-col p-6 h-full\">
                                    <div class=\"flex items-center justify-center w-16 h-16 rounded-full backdrop-blur-lg border border-[#bb8f4f] mb-4 shadow-md\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"2.5rem\" height=\"2.5rem\" viewBox=\"0 0 24 24\" class=\"text-[#bb8f4f]\">
                                            <path fill=\"currentColor\" d=\"M3.497 8.065L4.784 19h14.443l1.286-10.935l-4.01 2.673l-4.498-6.297l-4.498 6.297zM2.806 5.2L7.005 8l4.186-5.861a1 1 0 0 1 1.628 0l4.186 5.86l4.2-2.799a1 1 0 0 1 1.547.949L21.11 20.116a1 1 0 0 1-.993.884H3.894a1 1 0 0 1-.993-.884L1.258 6.15a1 1 0 0 1 1.548-.95m9.2 9.8a2 2 0 1 1-.001-4a2 2 0 0 1 0 4\"/>
                                        </svg>
                                    </div>
                                    <div class=\"grow\">
                                        <div class=\"font-bold text-2xl mb-1 text-white\">Adhère au VIP</div>
                                        <div class=\"text-slate-200 mb-3\">Accède à des fonctionnalités exclusives, des parties prioritaires et des outils avancés en devenant membre VIP.</div>
                                    </div>
                                    <div class=\"text-right\">
                                        <a class=\"text-sm font-medium text-[#F69BB4] hover:text-white inline-flex items-center transition duration-150 ease-in-out group\" href=\"#0\">En savoir plus <span class=\"tracking-normal text-white group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1\">&rarr;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\" style=\"will-change: transform;\">
                            <div class=\"relative h-full bg-slate-900 bg-opacity-40 backdrop-blur-lg rounded-[inherit] z-20 overflow-hidden shadow-lg shadow-[#00000066]\">
                                <div class=\"absolute inset-0 -z-10 opacity-0 group-hover/slide:opacity-100 transition-opacity duration-500 ease-in-out\" aria-hidden=\"true\">
                                    <canvas data-particle-animation data-particle-quantity=\"3\"></canvas>
                                </div>                                            
                                <div class=\"absolute bottom-0 translate-y-1/2 left-1/2 -translate-x-1/2 pointer-events-none -z-10 w-1/3 aspect-square\" aria-hidden=\"true\">
                                    <div class=\"absolute inset-0 translate-z-0 rounded-full bg-slate-800 transition-colors duration-500 ease-in-out blur-[80px]\"></div>
                                </div>
                                <div class=\"flex flex-col p-6 h-full\">
                                    <div class=\"flex items-center justify-center w-16 h-16 rounded-full backdrop-blur-lg border border-[#bb8f4f] mb-4 shadow-md\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"2.5rem\" height=\"2.5rem\" viewBox=\"0 0 24 24\" class=\"text-[#bb8f4f]\">
                                            <path fill=\"currentColor\" d=\"M10.6 16q0-2.025.363-2.912T12.5 11.15q1.025-.9 1.563-1.562t.537-1.513q0-1.025-.687-1.7T12 5.7q-1.275 0-1.937.775T9.125 8.05L6.55 6.95q.525-1.6 1.925-2.775T12 3q2.625 0 4.038 1.463t1.412 3.512q0 1.25-.537 2.138t-1.688 2.012Q14 13.3 13.738 13.913T13.475 16zm1.4 6q-.825 0-1.412-.587T10 20t.588-1.412T12 18t1.413.588T14 20t-.587 1.413T12 22\"/>
                                        </svg>
                                    </div>
                                    <div class=\"grow\">
                                        <div class=\"font-bold text-2xl mb-1 text-white\">FAQ</div>
                                        <div class=\"text-slate-200 mb-3\">Vous avez des questions ? Consultez notre FAQ pour trouver des réponses sur la création de parties, les abonnements VIP et plus encore.</div>
                                    </div>
                                    <div class=\"text-right\">
                                        <a class=\"text-sm font-medium text-[#F69BB4] hover:text-white inline-flex items-center transition duration-150 ease-in-out group\" href=\"#0\">En savoir plus <span class=\"tracking-normal text-white group-hover:translate-x-0.5 transition-transform duration-150 ease-in-out ml-1\">&rarr;</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class=\"container mx-auto flex flex-col mt-12\">
        <div class=\"flex justify-between items-center\">
            <h2 class=\"text-2xl font-bold text-white\">Nouveaux Univers</h2>
            <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"text-[#F69BB4] text-sm font-semibold\">Voir plus →</a>
        </div>
        <div class=\"mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
            {% for groupe in nouveaux_groupes|reverse %}
                <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                    style=\"will-change: transform;\">
                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe.id}) }}\" class=\"block\">
                        <div class=\"relative\">
                            <img src=\"{{ asset('uploads/images-jdr/' ~ groupe.picture) }}\" 
                                alt=\"{{ groupe.title }} image\" 
                                class=\"rounded-lg mb-4 w-full h-[20rem] object-cover {% if groupe.players|length >= groupe.maxPlayer %} blur-sm {% endif %} tokenImage\">
                            <div class=\"absolute top-2 right-2\">
                                <span class=\"text-sm font-bold px-2 py-1 rounded 
                                    {% if groupe.status == 'nouveau' %} bg-green-600
                                    {% elseif groupe.status == 'en_cours' %} bg-blue-500
                                    {% elseif groupe.status == 'termine' %} bg-red-500
                                    {% else %} bg-gray-700
                                    {% endif %} text-white\">
                                    {% if groupe.status == 'nouveau' %}
                                        Nouveau
                                    {% elseif groupe.status == 'en_cours' %}
                                        En Cours
                                    {% elseif groupe.status == 'termine' %}
                                        Terminé
                                    {% else %}
                                        Statut inconnu
                                    {% endif %}
                                </span>
                            </div>
                        </div>
                    </a>
                    <div class=\"mb-2\">
                        <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe.id}) }}\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">{{ groupe.title }}</a>
                    </div>
                    <div class=\"flex justify-between items-center mt-2\">
                        <a href=\"{{ path('app_profile_show', { 'id': groupe.owner.id }) }}\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                            {% if groupe.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ groupe.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                            {% else %}
                                <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                            {% endif %}
                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">{{ groupe.owner.username }}</p>
                            </div>
                        </a>
                        <div class=\"flex items-center text-right gap-1\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                            </svg>
                            {% if groupe.players|length >= groupe.maxPlayer %}
                                <p class=\"text-lg font-bold text-red-500\">Complet</p>
                            {% else %}
                                <p class=\"font-bold text-white pl-2\">{{ groupe.players|length }} / {{ groupe.maxPlayer }}</p>
                            {% endif %}
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
            <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"text-[#F69BB4] text-sm font-semibold\">Voir plus →</a>
        </div>

        <div class=\"mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
            {% for groupe in groupes_recrutement_ouvert|slice(0, 4) %}
                <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                    style=\"will-change: transform;\">
                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe.id}) }}\" class=\"block\">
                        <div class=\"relative\">
                            <img src=\"{{ asset('uploads/images-jdr/' ~ groupe.picture) }}\" 
                                alt=\"{{ groupe.title }} image\" 
                                class=\"rounded-lg mb-4 w-full h-[20rem] object-cover {% if groupe.players|length >= groupe.maxPlayer %} blur-sm {% endif %} tokenImage\">
                            <div class=\"absolute top-2 right-2\">
                                <span class=\"text-sm font-bold px-2 py-1 rounded 
                                    {% if groupe.status == 'nouveau' %} bg-green-600
                                    {% elseif groupe.status == 'en_cours' %} bg-blue-500
                                    {% elseif groupe.status == 'termine' %} bg-red-500
                                    {% else %} bg-gray-700
                                    {% endif %} text-white\">
                                    {% if groupe.status == 'nouveau' %}
                                        Nouveau
                                    {% elseif groupe.status == 'en_cours' %}
                                        En Cours
                                    {% elseif groupe.status == 'termine' %}
                                        Terminé
                                    {% else %}
                                        Statut inconnu
                                    {% endif %}
                                </span>
                            </div>
                        </div>
                    </a>
                    <div class=\"mb-2\">
                        <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe.id}) }}\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">{{ groupe.title }}</a>
                    </div>
                    <div class=\"flex justify-between items-center mt-2\">
                        <a href=\"{{ path('app_profile_show', { 'id': groupe.owner.id }) }}\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                            {% if groupe.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ groupe.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                            {% else %}
                                <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                            {% endif %}
                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">{{ groupe.owner.username }}</p>
                            </div>
                        </a>
                        <div class=\"flex items-center text-right gap-1\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                            </svg>
                            {% if groupe.players|length >= groupe.maxPlayer %}
                                <p class=\"text-lg font-bold text-red-500\">Complet</p>
                            {% else %}
                                <p class=\"font-bold text-white pl-2\">{{ groupe.players|length }} / {{ groupe.maxPlayer }}</p>
                            {% endif %}
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
            <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"text-[#F69BB4] text-sm font-semibold\">Voir plus →</a>
        </div>

        <div class=\"mt-8 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
            {% for groupe_j_d_r in groupes|slice(0, 8) %}
                <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                    style=\"will-change: transform;\">
                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"block\">
                        <div class=\"relative\">
                            <img src=\"{{ asset('uploads/images-jdr/' ~ groupe_j_d_r.picture) }}\" 
                                alt=\"{{ groupe_j_d_r.title }} image\" 
                                class=\"rounded-lg mb-4 w-full h-[20rem] object-cover {% if groupe_j_d_r.players|length >= groupe_j_d_r.maxPlayer %} blur-sm {% endif %} tokenImage\">
                            <div class=\"absolute top-2 right-2\">
                                <span class=\"text-sm font-bold px-2 py-1 rounded 
                                    {% if groupe_j_d_r.status == 'nouveau' %} bg-green-600
                                    {% elseif groupe_j_d_r.status == 'en_cours' %} bg-blue-500
                                    {% elseif groupe_j_d_r.status == 'termine' %} bg-red-500
                                    {% else %} bg-gray-700
                                    {% endif %} text-white\">
                                    {% if groupe_j_d_r.status == 'nouveau' %}
                                        Nouveau
                                    {% elseif groupe_j_d_r.status == 'en_cours' %}
                                        En Cours
                                    {% elseif groupe_j_d_r.status == 'termine' %}
                                        Terminé
                                    {% else %}
                                        Statut inconnu
                                    {% endif %}
                                </span>
                            </div>
                        </div>
                    </a>
                    <div class=\"mb-2\">
                        <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">{{ groupe_j_d_r.title }}</a>
                    </div>
                    <div class=\"flex justify-between items-center mt-2\">
                        <a href=\"{{ path('app_profile_show', { 'id': groupe_j_d_r.owner.id }) }}\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                            {% if groupe_j_d_r.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ groupe_j_d_r.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                            {% else %}
                                <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                            {% endif %}
                            <div class=\"ml-2\">
                                <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">{{ groupe_j_d_r.owner.username }}</p>
                            </div>
                        </a>
                        <div class=\"flex items-center text-right gap-1\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                            </svg>
                            {% if groupe_j_d_r.players|length >= groupe_j_d_r.maxPlayer %}
                                <p class=\"text-lg font-bold text-red-500\">Complet</p>
                            {% else %}
                                <p class=\"font-bold text-white pl-2\">{{ groupe_j_d_r.players|length }} / {{ groupe_j_d_r.maxPlayer }}</p>
                            {% endif %}
                        </div>
                    </div>
                </div>
            {% else %}
                <p class=\"text-center text-gray-700 text-lg w-full\">Aucun univers disponible.</p>
            {% endfor %}
        </div>
        <div class=\"text-center mt-8 flex justify-center\">
            <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"bg-[#402c85] text-white px-4 py-2 rounded transition-colors duration-300 hover:bg-indigo-700\">Afficher plus</a>
        </div>
    </div>

    <div class=\"container mx-auto flex flex-col items-center justify-center py-8 sm:py-12\">
        <div class=\"bg-white info-item bg-opacity-10 rounded-lg p-6 sm:p-8 shadow-lg text-center border border-[#bb8f4f]\">
            <h2 class=\"text-2xl sm:text-3xl font-bold text-white mb-4\">Créer Votre Propre Partie</h2>
            <p class=\"text-gray-300 mb-6 text-sm sm:text-base\">
                Envie de lancer ta propre aventure ? Avec DiceFinder, crée ta partie personnalisée en quelques clics. Définis ton univers, sélectionne tes règles, et invite des joueurs passionnés à rejoindre ton monde. Que tu sois un maître de jeu chevronné ou débutant, tout est pensé pour faciliter la création d'une expérience immersive.
            </p>
            {% if app.user %}
                <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"inline-block bg-[#402c85] text-white py-2 px-4 sm:px-6 rounded-full font-semibold hover:bg-indigo-700 transition-colors whitespace-nowrap\">
                    Commencer
                </a>
            {% else %}
                <a href=\"{{ path('app_register') }}\" class=\"inline-block bg-[#402c85] text-white py-2 px-4 sm:px-6 rounded-full font-semibold hover:bg-indigo-700 transition-colors whitespace-nowrap\">
                    Rejoindre La Communauté
                </a>
            {% endif %}
        </div>
    </div>
</div>
<script src=\"https://cdn.jsdelivr.net/npm/typed.js@2.0.12\"></script>
<script src=\"https://unpkg.com/@hotwired/stimulus@3.0.1/dist/stimulus.umd.js\"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    function removeSplineLogo() {
        const splineViewer = document.querySelector('spline-viewer');
        if (splineViewer && splineViewer.shadowRoot) {
            const shadowRoot = splineViewer.shadowRoot;
            const logoElement = shadowRoot.querySelector('a#logo');
            if (logoElement) {
                logoElement.style.display = 'none';
                logoElement.remove();
            }
        }
    }
    setTimeout(removeSplineLogo, 500);
});

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
