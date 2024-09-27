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

/* groupe_jdr/show.html.twig */
class __TwigTemplate_82a570a5cc75e585ca0ba5b3206667b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "groupe_jdr/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        yield " | DiceFinder";
        
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
        yield "<div class=\"container mx-auto px-4 p-6 mt-20\">
    <div class=\"bg-gray-900 text-white min-h-screen p-8 space-y-10\">
        <div class=\"flex flex-col lg:flex-row items-start lg:items-start justify-between space-y-8 lg:space-y-0 lg:space-x-10\">
            <div class=\"lg:w-1/2 space-y-8\">
                <img src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 10, $this->source); })()), "picture", [], "any", false, false, false, 10))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), "html", null, true);
        yield "\" class=\"rounded-lg shadow-lg w-full h-[500px] object-cover\">
                
                <div class=\"flex justify-between\">
                    <button class=\"w-[48%] bg-blue-600 text-white font-bold py-3 rounded hover:bg-blue-700\">Je Participe</button>
                </div>
            </div>

            <div class=\"lg:w-1/2 space-y-6\">
                <div class=\"flex justify-between items-center\">
                    <h2 class=\"text-3xl font-bold\">";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 19, $this->source); })()), "title", [], "any", false, false, false, 19), "html", null, true);
        yield "</h2>
                    <svg class=\"w-6 h-6 text-orange-500 cursor-pointer\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                    </svg>
                </div>
                <p class=\"text-gray-300\">";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), "html", null, true);
        yield "</p>

                <div class=\"flex justify-between\">
                    <div>
                        <span class=\"text-gray-400\">Date de Création</span>
                        <p class=\"text-xl font-semibold\">";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 29, $this->source); })()), "getCreatedAt", [], "any", false, false, false, 29), "d/m/Y"), "html", null, true);
        yield "</p>
                    </div>
                    <div>
                        <span class=\"text-gray-400\">Nombre de Participants</span>
                        <p class=\"text-xl font-semibold\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 33, $this->source); })()), "players", [], "any", false, false, false, 33)), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 33, $this->source); })()), "maxPlayer", [], "any", false, false, false, 33), "html", null, true);
        yield "</p>
                    </div>
                </div>

                <div class=\"bg-gray-800 p-6 rounded-lg space-y-4\">
                    <h3 class=\"font-semibold\">MJ et Joueurs</h3>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <div class=\"flex items-center space-x-4\">
                            ";
        // line 41
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 41, $this->source); })()), "owner", [], "any", false, false, false, 41), "avatar", [], "any", false, false, false, 41)) {
            // line 42
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 42, $this->source); })()), "owner", [], "any", false, false, false, 42), "avatar", [], "any", false, false, false, 42))), "html", null, true);
            yield "\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 42, $this->source); })()), "owner", [], "any", false, false, false, 42), "username", [], "any", false, false, false, 42), "html", null, true);
            yield "\">
                            ";
        } else {
            // line 44
            yield "                                <img class=\"rounded-full w-12 h-12 object-cover\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Default profile photo\">
                            ";
        }
        // line 46
        yield "                            <div>
                                <p class=\"font-semibold\">";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 47, $this->source); })()), "owner", [], "any", false, false, false, 47), "username", [], "any", false, false, false, 47), "html", null, true);
        yield "</p>
                                <span class=\"text-gray-400 text-sm\">MJ</span>
                            </div>
                        </div>

                        ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 52, $this->source); })()), "players", [], "any", false, false, false, 52));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 53
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 53) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 53, $this->source); })()), "owner", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53))) {
                // line 54
                yield "                                <div class=\"flex items-center space-x-4\">
                                    ";
                // line 55
                if (CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 55)) {
                    // line 56
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 56))), "html", null, true);
                    yield "\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 56), "html", null, true);
                    yield "\">
                                    ";
                } else {
                    // line 58
                    yield "                                        <img class=\"rounded-full w-12 h-12 object-cover\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Default profile photo\">
                                    ";
                }
                // line 60
                yield "                                    <div>
                                        <p class=\"font-semibold\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 61), "html", null, true);
                yield "</p>
                                        <span class=\"text-gray-400 text-sm\">Joueur</span>
                                    </div>
                                </div>
                            ";
            }
            // line 66
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['player'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        yield "                    </div>
                </div>

                ";
        // line 70
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 70, $this->source); })()), "owner", [], "any", false, false, false, 70), "id", [], "any", false, false, false, 70)))) {
            // line 71
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 71, $this->source); })()), "id", [], "any", false, false, false, 71)]), "html", null, true);
            yield "\" class=\"w-full bg-green-600 text-white font-bold py-3 rounded mt-4 hover:bg-green-700 block text-center\">
                        Editer le JDR
                    </a>
                ";
        }
        // line 75
        yield "            </div>
        </div>
        <div class=\"flex justify-center space-x-8\">
            <button class=\"text-blue-500 border-b-2 border-blue-500 py-2 px-4\">Description</button>
            <button class=\"text-gray-400 hover:text-blue-500 border-b-2 border-transparent hover:border-blue-500 py-2 px-4\">Logiciel requis</button>
            <button class=\"text-gray-400 hover:text-blue-500 border-b-2 border-transparent hover:border-blue-500 py-2 px-4\">Informations supplémentaires</button>
        </div>

        <div class=\"text-gray-400 mt-8\">
            <p>";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 84, $this->source); })()), "description", [], "any", false, false, false, 84), "html", null, true);
        yield "</p>
        </div>

        <div class=\"mt-16\">
    <div class=\"flex justify-between items-center mb-6\">
        <h2 class=\"text-2xl font-bold\">Parties Qui Recrutent</h2>
        <a href=\"#\" class=\"text-blue-500 border border-blue-500 rounded-full py-2 px-6 hover:bg-blue-500 hover:text-white\">Voir Plus</a>
    </div>
    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
        <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white w-full lg:w-[26rem]\">
            <img src=\"https://via.placeholder.com/150\" alt=\"Image de jeu\" class=\"rounded-lg mb-4 w-full h-[24rem] object-cover\">
            <div class=\"flex justify-between items-center\">
                <span class=\"font-semibold text-lg\">Cthulhu</span>
                <a href=\"#\" class=\"bg-blue-600 text-white px-3 py-2 rounded text-xs\">GO</a>
            </div>
            <div class=\"flex justify-between items-center mt-4\">
                <div class=\"flex items-center\">
                    <img src=\"https://via.placeholder.com/30\" alt=\"MJ photo\" class=\"rounded h-10 w-10 object-cover\">
                    <div class=\"ml-3\">
                        <p class=\"text-sm text-gray-400\">MJ</p>
                        <p class=\"text-sm text-white\">Sam</p>
                    </div>
                </div>
                <div class=\"text-right\">
                    <p class=\"text-sm text-gray-400\">Places disponibles</p>
                    <p class=\"text-lg font-bold text-white\">5</p>
                </div>
            </div>
        </div>
        <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white w-full lg:w-[26rem]\">
            <img src=\"https://via.placeholder.com/150\" alt=\"Image de jeu\" class=\"rounded-lg mb-4 w-full h-[24rem] object-cover\">
            <div class=\"flex justify-between items-center\">
                <span class=\"font-semibold text-lg\">Cthulhu</span>
                <a href=\"#\" class=\"bg-blue-600 text-white px-3 py-2 rounded text-xs\">GO</a>
            </div>
            <div class=\"flex justify-between items-center mt-4\">
                <div class=\"flex items-center\">
                    <img src=\"https://via.placeholder.com/30\" alt=\"MJ photo\" class=\"rounded h-10 w-10 object-cover\">
                    <div class=\"ml-3\">
                        <p class=\"text-sm text-gray-400\">MJ</p>
                        <p class=\"text-sm text-white\">Sam</p>
                    </div>
                </div>
                <div class=\"text-right\">
                    <p class=\"text-sm text-gray-400\">Places disponibles</p>
                    <p class=\"text-lg font-bold text-white\">5</p>
                </div>
            </div>
        </div>
        <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white w-full lg:w-[26rem]\">
            <img src=\"https://via.placeholder.com/150\" alt=\"Image de jeu\" class=\"rounded-lg mb-4 w-full h-[24rem] object-cover\">
            <div class=\"flex justify-between items-center\">
                <span class=\"font-semibold text-lg\">Cthulhu</span>
                <a href=\"#\" class=\"bg-blue-600 text-white px-3 py-2 rounded text-xs\">GO</a>
            </div>
            <div class=\"flex justify-between items-center mt-4\">
                <div class=\"flex items-center\">
                    <img src=\"https://via.placeholder.com/30\" alt=\"MJ photo\" class=\"rounded h-10 w-10 object-cover\">
                    <div class=\"ml-3\">
                        <p class=\"text-sm text-gray-400\">MJ</p>
                        <p class=\"text-sm text-white\">Sam</p>
                    </div>
                </div>
                <div class=\"text-right\">
                    <p class=\"text-sm text-gray-400\">Places disponibles</p>
                    <p class=\"text-lg font-bold text-white\">5</p>
                </div>
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
        return "groupe_jdr/show.html.twig";
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
        return array (  253 => 84,  242 => 75,  234 => 71,  232 => 70,  227 => 67,  221 => 66,  213 => 61,  210 => 60,  204 => 58,  196 => 56,  194 => 55,  191 => 54,  188 => 53,  184 => 52,  176 => 47,  173 => 46,  167 => 44,  159 => 42,  157 => 41,  144 => 33,  137 => 29,  129 => 24,  121 => 19,  107 => 10,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ groupe_j_d_r.title }} | DiceFinder{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 p-6 mt-20\">
    <div class=\"bg-gray-900 text-white min-h-screen p-8 space-y-10\">
        <div class=\"flex flex-col lg:flex-row items-start lg:items-start justify-between space-y-8 lg:space-y-0 lg:space-x-10\">
            <div class=\"lg:w-1/2 space-y-8\">
                <img src=\"{{ asset('uploads/images-jdr/' ~ groupe_j_d_r.picture) }}\" alt=\"{{ groupe_j_d_r.title }}\" class=\"rounded-lg shadow-lg w-full h-[500px] object-cover\">
                
                <div class=\"flex justify-between\">
                    <button class=\"w-[48%] bg-blue-600 text-white font-bold py-3 rounded hover:bg-blue-700\">Je Participe</button>
                </div>
            </div>

            <div class=\"lg:w-1/2 space-y-6\">
                <div class=\"flex justify-between items-center\">
                    <h2 class=\"text-3xl font-bold\">{{ groupe_j_d_r.title }}</h2>
                    <svg class=\"w-6 h-6 text-orange-500 cursor-pointer\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                    </svg>
                </div>
                <p class=\"text-gray-300\">{{ groupe_j_d_r.description }}</p>

                <div class=\"flex justify-between\">
                    <div>
                        <span class=\"text-gray-400\">Date de Création</span>
                        <p class=\"text-xl font-semibold\">{{ groupe_j_d_r.getCreatedAt|date('d/m/Y') }}</p>
                    </div>
                    <div>
                        <span class=\"text-gray-400\">Nombre de Participants</span>
                        <p class=\"text-xl font-semibold\">{{ groupe_j_d_r.players|length }}/{{ groupe_j_d_r.maxPlayer }}</p>
                    </div>
                </div>

                <div class=\"bg-gray-800 p-6 rounded-lg space-y-4\">
                    <h3 class=\"font-semibold\">MJ et Joueurs</h3>
                    <div class=\"grid grid-cols-2 gap-4\">
                        <div class=\"flex items-center space-x-4\">
                            {% if groupe_j_d_r.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ groupe_j_d_r.owner.avatar) }}\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"{{ groupe_j_d_r.owner.username }}\">
                            {% else %}
                                <img class=\"rounded-full w-12 h-12 object-cover\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                            {% endif %}
                            <div>
                                <p class=\"font-semibold\">{{ groupe_j_d_r.owner.username }}</p>
                                <span class=\"text-gray-400 text-sm\">MJ</span>
                            </div>
                        </div>

                        {% for player in groupe_j_d_r.players %}
                            {% if player.id != groupe_j_d_r.owner.id %}
                                <div class=\"flex items-center space-x-4\">
                                    {% if player.avatar %}
                                        <img src=\"{{ asset('uploads/avatars/' ~ player.avatar) }}\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"{{ player.username }}\">
                                    {% else %}
                                        <img class=\"rounded-full w-12 h-12 object-cover\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                                    {% endif %}
                                    <div>
                                        <p class=\"font-semibold\">{{ player.username }}</p>
                                        <span class=\"text-gray-400 text-sm\">Joueur</span>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>

                {% if app.user and app.user.id == groupe_j_d_r.owner.id %}
                    <a href=\"{{ path('app_groupe_j_d_r_edit', {id: groupe_j_d_r.id}) }}\" class=\"w-full bg-green-600 text-white font-bold py-3 rounded mt-4 hover:bg-green-700 block text-center\">
                        Editer le JDR
                    </a>
                {% endif %}
            </div>
        </div>
        <div class=\"flex justify-center space-x-8\">
            <button class=\"text-blue-500 border-b-2 border-blue-500 py-2 px-4\">Description</button>
            <button class=\"text-gray-400 hover:text-blue-500 border-b-2 border-transparent hover:border-blue-500 py-2 px-4\">Logiciel requis</button>
            <button class=\"text-gray-400 hover:text-blue-500 border-b-2 border-transparent hover:border-blue-500 py-2 px-4\">Informations supplémentaires</button>
        </div>

        <div class=\"text-gray-400 mt-8\">
            <p>{{ groupe_j_d_r.description }}</p>
        </div>

        <div class=\"mt-16\">
    <div class=\"flex justify-between items-center mb-6\">
        <h2 class=\"text-2xl font-bold\">Parties Qui Recrutent</h2>
        <a href=\"#\" class=\"text-blue-500 border border-blue-500 rounded-full py-2 px-6 hover:bg-blue-500 hover:text-white\">Voir Plus</a>
    </div>
    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
        <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white w-full lg:w-[26rem]\">
            <img src=\"https://via.placeholder.com/150\" alt=\"Image de jeu\" class=\"rounded-lg mb-4 w-full h-[24rem] object-cover\">
            <div class=\"flex justify-between items-center\">
                <span class=\"font-semibold text-lg\">Cthulhu</span>
                <a href=\"#\" class=\"bg-blue-600 text-white px-3 py-2 rounded text-xs\">GO</a>
            </div>
            <div class=\"flex justify-between items-center mt-4\">
                <div class=\"flex items-center\">
                    <img src=\"https://via.placeholder.com/30\" alt=\"MJ photo\" class=\"rounded h-10 w-10 object-cover\">
                    <div class=\"ml-3\">
                        <p class=\"text-sm text-gray-400\">MJ</p>
                        <p class=\"text-sm text-white\">Sam</p>
                    </div>
                </div>
                <div class=\"text-right\">
                    <p class=\"text-sm text-gray-400\">Places disponibles</p>
                    <p class=\"text-lg font-bold text-white\">5</p>
                </div>
            </div>
        </div>
        <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white w-full lg:w-[26rem]\">
            <img src=\"https://via.placeholder.com/150\" alt=\"Image de jeu\" class=\"rounded-lg mb-4 w-full h-[24rem] object-cover\">
            <div class=\"flex justify-between items-center\">
                <span class=\"font-semibold text-lg\">Cthulhu</span>
                <a href=\"#\" class=\"bg-blue-600 text-white px-3 py-2 rounded text-xs\">GO</a>
            </div>
            <div class=\"flex justify-between items-center mt-4\">
                <div class=\"flex items-center\">
                    <img src=\"https://via.placeholder.com/30\" alt=\"MJ photo\" class=\"rounded h-10 w-10 object-cover\">
                    <div class=\"ml-3\">
                        <p class=\"text-sm text-gray-400\">MJ</p>
                        <p class=\"text-sm text-white\">Sam</p>
                    </div>
                </div>
                <div class=\"text-right\">
                    <p class=\"text-sm text-gray-400\">Places disponibles</p>
                    <p class=\"text-lg font-bold text-white\">5</p>
                </div>
            </div>
        </div>
        <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white w-full lg:w-[26rem]\">
            <img src=\"https://via.placeholder.com/150\" alt=\"Image de jeu\" class=\"rounded-lg mb-4 w-full h-[24rem] object-cover\">
            <div class=\"flex justify-between items-center\">
                <span class=\"font-semibold text-lg\">Cthulhu</span>
                <a href=\"#\" class=\"bg-blue-600 text-white px-3 py-2 rounded text-xs\">GO</a>
            </div>
            <div class=\"flex justify-between items-center mt-4\">
                <div class=\"flex items-center\">
                    <img src=\"https://via.placeholder.com/30\" alt=\"MJ photo\" class=\"rounded h-10 w-10 object-cover\">
                    <div class=\"ml-3\">
                        <p class=\"text-sm text-gray-400\">MJ</p>
                        <p class=\"text-sm text-white\">Sam</p>
                    </div>
                </div>
                <div class=\"text-right\">
                    <p class=\"text-sm text-gray-400\">Places disponibles</p>
                    <p class=\"text-lg font-bold text-white\">5</p>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</div>
{% endblock %}
", "groupe_jdr/show.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\groupe_jdr\\show.html.twig");
    }
}
