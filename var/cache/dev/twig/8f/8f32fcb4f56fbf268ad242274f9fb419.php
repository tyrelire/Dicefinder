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

        yield "GroupeJDR index";
        
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
        yield "<div class=\"container mx-auto p-6 mt-20\">
    <h1 class=\"text-3xl font-bold mb-8 text-gray-900\">Les   </h1>

    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupe_j_d_rs"]) || array_key_exists("groupe_j_d_rs", $context) ? $context["groupe_j_d_rs"] : (function () { throw new RuntimeError('Variable "groupe_j_d_rs" does not exist.', 10, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe_j_d_r"]) {
            // line 11
            yield "            <div class=\"bg-white shadow-lg rounded-lg overflow-hidden\">
                <img class=\"w-full h-48 object-cover\" src=\"";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "picture", [], "any", false, false, false, 12), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 12), "html", null, true);
            yield " image\">
                
                <div class=\"p-6\">
                    <h2 class=\"text-xl font-bold mb-2 text-gray-800\">";
            // line 15
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 15), "html", null, true);
            yield "</h2>
                    
                    <p class=\"text-gray-600 mb-4\">
                        ";
            // line 18
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "description", [], "any", false, false, false, 18)) > 100)) ? ((Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "description", [], "any", false, false, false, 18), 0, 100) . "...")) : (CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "description", [], "any", false, false, false, 18))), "html", null, true);
            yield "
                    </p>

                    <div class=\"text-gray-600 text-sm mb-2\">
                        <strong>Created at:</strong> ";
            // line 22
            ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "createdAt", [], "any", false, false, false, 22)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "createdAt", [], "any", false, false, false, 22), "Y-m-d H:i:s"), "html", null, true)) : (yield "N/A"));
            yield "
                    </div>
                    <div class=\"text-gray-600 text-sm mb-4\">
                        <strong>Last edited:</strong> ";
            // line 25
            ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "editAt", [], "any", false, false, false, 25)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "editAt", [], "any", false, false, false, 25), "Y-m-d H:i:s"), "html", null, true)) : (yield "N/A"));
            yield "
                    </div>
                    <div class=\"text-gray-600 text-sm mb-4\">
                        <strong>Max Players:</strong> ";
            // line 28
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 28), "html", null, true);
            yield "
                    </div>

                    <div class=\"flex space-x-4\">
                        <a href=\"";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 32)]), "html", null, true);
            yield "\" class=\"bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600\">
                            Show
                        </a>
                        <a href=\"";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 35)]), "html", null, true);
            yield "\" class=\"bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600\">
                            Edit
                        </a>
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

    <div class=\"mt-8\">
        <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_new");
        yield "\" class=\"bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600\">
            Create new
        </a>
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
        return array (  184 => 47,  179 => 44,  172 => 42,  160 => 35,  154 => 32,  147 => 28,  141 => 25,  135 => 22,  128 => 18,  122 => 15,  114 => 12,  111 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}GroupeJDR index{% endblock %}

{% block body %}
<div class=\"container mx-auto p-6 mt-20\">
    <h1 class=\"text-3xl font-bold mb-8 text-gray-900\">Les   </h1>

    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6\">
        {% for groupe_j_d_r in groupe_j_d_rs %}
            <div class=\"bg-white shadow-lg rounded-lg overflow-hidden\">
                <img class=\"w-full h-48 object-cover\" src=\"{{ groupe_j_d_r.picture }}\" alt=\"{{ groupe_j_d_r.title }} image\">
                
                <div class=\"p-6\">
                    <h2 class=\"text-xl font-bold mb-2 text-gray-800\">{{ groupe_j_d_r.title }}</h2>
                    
                    <p class=\"text-gray-600 mb-4\">
                        {{ groupe_j_d_r.description|length > 100 ? groupe_j_d_r.description[:100] ~ '...' : groupe_j_d_r.description }}
                    </p>

                    <div class=\"text-gray-600 text-sm mb-2\">
                        <strong>Created at:</strong> {{ groupe_j_d_r.createdAt ? groupe_j_d_r.createdAt|date('Y-m-d H:i:s') : 'N/A' }}
                    </div>
                    <div class=\"text-gray-600 text-sm mb-4\">
                        <strong>Last edited:</strong> {{ groupe_j_d_r.editAt ? groupe_j_d_r.editAt|date('Y-m-d H:i:s') : 'N/A' }}
                    </div>
                    <div class=\"text-gray-600 text-sm mb-4\">
                        <strong>Max Players:</strong> {{ groupe_j_d_r.maxPlayer }}
                    </div>

                    <div class=\"flex space-x-4\">
                        <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600\">
                            Show
                        </a>
                        <a href=\"{{ path('app_groupe_j_d_r_edit', {'id': groupe_j_d_r.id}) }}\" class=\"bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600\">
                            Edit
                        </a>
                    </div>
                </div>
            </div>
        {% else %}
            <p class=\"text-gray-700 text-lg\">No records found</p>
        {% endfor %}
    </div>

    <div class=\"mt-8\">
        <a href=\"{{ path('app_groupe_j_d_r_new') }}\" class=\"bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600\">
            Create new
        </a>
    </div>

</div>
{% endblock %}
", "groupe_jdr/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\groupe_jdr\\index.html.twig");
    }
}
