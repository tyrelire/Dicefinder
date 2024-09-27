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

/* groupe_jdr/index.html.twig */
class __TwigTemplate_6ac6e39aeb26c8776dc434bae93febd7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "groupe_jdr/index.html.twig", 1);
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

        yield "DiceFinder | Les Univers";
        
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
        yield "<div class=\"container mx-auto px-4 p-6 mt-10\">
    <h1 class=\"text-3xl font-bold mb-8 text-gray-900\">Les groupes JDR</h1>

    <form method=\"get\" action=\"";
        // line 9
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"mb-8\">
        <input type=\"text\" name=\"search\" placeholder=\"Rechercher un JDR...\" class=\"w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500\">
    </form>

    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
        ";
        // line 14
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupe_j_d_rs"]) || array_key_exists("groupe_j_d_rs", $context) ? $context["groupe_j_d_rs"] : (function () { throw new RuntimeError('Variable "groupe_j_d_rs" does not exist.', 14, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe_j_d_r"]) {
            // line 15
            yield "            <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white\">
                <img src=\"";
            // line 16
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "picture", [], "any", false, false, false, 16))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 16), "html", null, true);
            yield " image\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                
                <div class=\"flex justify-between items-center\">
                    <span class=\"font-semibold\">";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 19), "html", null, true);
            yield "</span>
                    <a href=\"";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 20)]), "html", null, true);
            yield "\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs\">GO</a>
                </div>

                <div class=\"flex justify-between items-center mt-2\">
                    <div class=\"flex items-center\">
                    ";
            // line 25
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "avatar", [], "any", false, false, false, 25)) {
                // line 26
                yield "                        <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 26), "avatar", [], "any", false, false, false, 26))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded h-8 w-8 object-cover\">
                    ";
            } else {
                // line 28
                yield "                        <img class=\"rounded h-8 w-8 object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                    ";
            }
            // line 30
            yield "                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400\">MJ</p>
                            <p class=\"text-xs text-white\">";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 32), "username", [], "any", false, false, false, 32), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                    <div class=\"text-right\">
                        <p class=\"text-xs text-gray-400\">Places disponibles</p>
                        <p class=\"text-lg font-bold text-white\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 37) - Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 37))), "html", null, true);
            yield "</p>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 42
            yield "            <p class=\"text-gray-700 text-lg\">No records found</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe_j_d_r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
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
        return "groupe_jdr/index.html.twig";
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
        return array (  184 => 44,  177 => 42,  167 => 37,  159 => 32,  155 => 30,  149 => 28,  143 => 26,  141 => 25,  133 => 20,  129 => 19,  121 => 16,  118 => 15,  113 => 14,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DiceFinder | Les Univers{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 p-6 mt-10\">
    <h1 class=\"text-3xl font-bold mb-8 text-gray-900\">Les groupes JDR</h1>

    <form method=\"get\" action=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"mb-8\">
        <input type=\"text\" name=\"search\" placeholder=\"Rechercher un JDR...\" class=\"w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500\">
    </form>

    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
        {% for groupe_j_d_r in groupe_j_d_rs %}
            <div class=\"bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white\">
                <img src=\"{{ asset('uploads/images-jdr/' ~ groupe_j_d_r.picture) }}\" alt=\"{{ groupe_j_d_r.title }} image\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                
                <div class=\"flex justify-between items-center\">
                    <span class=\"font-semibold\">{{ groupe_j_d_r.title }}</span>
                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs\">GO</a>
                </div>

                <div class=\"flex justify-between items-center mt-2\">
                    <div class=\"flex items-center\">
                    {% if app.user.avatar %}
                        <img src=\"{{ asset('uploads/avatars/' ~ groupe_j_d_r.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded h-8 w-8 object-cover\">
                    {% else %}
                        <img class=\"rounded h-8 w-8 object-cover\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                    {% endif %}
                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400\">MJ</p>
                            <p class=\"text-xs text-white\">{{ groupe_j_d_r.owner.username }}</p>
                        </div>
                    </div>
                    <div class=\"text-right\">
                        <p class=\"text-xs text-gray-400\">Places disponibles</p>
                        <p class=\"text-lg font-bold text-white\">{{ groupe_j_d_r.maxPlayer - groupe_j_d_r.players|length }}</p>
                    </div>
                </div>
            </div>
        {% else %}
            <p class=\"text-gray-700 text-lg\">No records found</p>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "groupe_jdr/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\groupe_jdr\\index.html.twig");
    }
}
