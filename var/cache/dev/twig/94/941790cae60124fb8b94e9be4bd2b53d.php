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

/* invitation/index.html.twig */
class __TwigTemplate_edb8274032781659eacf7d097ba873c0 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invitation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "invitation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "invitation/index.html.twig", 1);
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

        yield "Invitations";
        
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
    <div class=\"bg-white shadow rounded-lg p-6\">
        <h1 class=\"text-2xl font-bold mb-4 text-gray-800\">Mes Invitations</h1>

        ";
        // line 10
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 10, $this->source); })())) > 0)) {
            // line 11
            yield "            <div class=\"space-y-4\">
                ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["invitation"]) {
                // line 13
                yield "                    <div class=\"bg-slate-900 p-4 rounded-lg shadow flex flex-col lg:flex-row justify-between items-start lg:items-center space-y-4 lg:space-y-0\">
                        <div>
                            <p class=\"text-lg font-bold text-white\">";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "groupeJDR", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
                yield "</p>
                            
                            ";
                // line 17
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "initiatedBy", [], "any", false, false, false, 17) == "owner")) {
                    // line 18
                    yield "                                <p class=\"text-sm text-white\">Invité par le propriétaire à rejoindre ce groupe</p>
                            ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 19
$context["invitation"], "initiatedBy", [], "any", false, false, false, 19) == "user")) {
                    // line 20
                    yield "                                <p class=\"text-sm text-white\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "user", [], "any", false, false, false, 20), "username", [], "any", false, false, false, 20), "html", null, true);
                    yield " a demandé à rejoindre ce groupe</p>
                                ";
                    // line 21
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "message", [], "any", false, false, false, 21)) {
                        // line 22
                        yield "                                    <p class=\"text-xs text-gray-400 mt-2\"><em>\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "message", [], "any", false, false, false, 22), "html", null, true);
                        yield "\"</em></p>
                                ";
                    }
                    // line 24
                    yield "                            ";
                }
                // line 25
                yield "                        </div>
                        <div class=\"flex space-x-2 lg:ml-6\">
                            <form action=\"";
                // line 27
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respond_invitation", ["invitationId" => CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "id", [], "any", false, false, false, 27)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block\">
                                <input type=\"hidden\" name=\"response\" value=\"accept\">
                                <button type=\"submit\" class=\"bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition-colors duration-200\" aria-label=\"Accepter l'invitation pour rejoindre ";
                // line 29
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "groupeJDR", [], "any", false, false, false, 29), "title", [], "any", false, false, false, 29), "html", null, true);
                yield "\">Accepter</button>
                            </form>
                            <form action=\"";
                // line 31
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("respond_invitation", ["invitationId" => CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "id", [], "any", false, false, false, 31)]), "html", null, true);
                yield "\" method=\"POST\" class=\"inline-block\">
                                <input type=\"hidden\" name=\"response\" value=\"refuse\">
                                <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors duration-200\" aria-label=\"Refuser l'invitation pour rejoindre ";
                // line 33
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "groupeJDR", [], "any", false, false, false, 33), "title", [], "any", false, false, false, 33), "html", null, true);
                yield "\">Refuser</button>
                            </form>
                        </div>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['invitation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            yield "            </div>
        ";
        } else {
            // line 40
            yield "            <p class=\"text-gray-500\">Aucune invitation en attente.</p>
        ";
        }
        // line 42
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
        return "invitation/index.html.twig";
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
        return array (  185 => 42,  181 => 40,  177 => 38,  166 => 33,  161 => 31,  156 => 29,  151 => 27,  147 => 25,  144 => 24,  138 => 22,  136 => 21,  131 => 20,  129 => 19,  126 => 18,  124 => 17,  119 => 15,  115 => 13,  111 => 12,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Invitations{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8\">
    <div class=\"bg-white shadow rounded-lg p-6\">
        <h1 class=\"text-2xl font-bold mb-4 text-gray-800\">Mes Invitations</h1>

        {% if invitations|length > 0 %}
            <div class=\"space-y-4\">
                {% for invitation in invitations %}
                    <div class=\"bg-slate-900 p-4 rounded-lg shadow flex flex-col lg:flex-row justify-between items-start lg:items-center space-y-4 lg:space-y-0\">
                        <div>
                            <p class=\"text-lg font-bold text-white\">{{ invitation.groupeJDR.title }}</p>
                            
                            {% if invitation.initiatedBy == 'owner' %}
                                <p class=\"text-sm text-white\">Invité par le propriétaire à rejoindre ce groupe</p>
                            {% elseif invitation.initiatedBy == 'user' %}
                                <p class=\"text-sm text-white\">{{ invitation.user.username }} a demandé à rejoindre ce groupe</p>
                                {% if invitation.message %}
                                    <p class=\"text-xs text-gray-400 mt-2\"><em>\"{{ invitation.message }}\"</em></p>
                                {% endif %}
                            {% endif %}
                        </div>
                        <div class=\"flex space-x-2 lg:ml-6\">
                            <form action=\"{{ path('respond_invitation', { invitationId: invitation.id }) }}\" method=\"POST\" class=\"inline-block\">
                                <input type=\"hidden\" name=\"response\" value=\"accept\">
                                <button type=\"submit\" class=\"bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition-colors duration-200\" aria-label=\"Accepter l'invitation pour rejoindre {{ invitation.groupeJDR.title }}\">Accepter</button>
                            </form>
                            <form action=\"{{ path('respond_invitation', { invitationId: invitation.id }) }}\" method=\"POST\" class=\"inline-block\">
                                <input type=\"hidden\" name=\"response\" value=\"refuse\">
                                <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition-colors duration-200\" aria-label=\"Refuser l'invitation pour rejoindre {{ invitation.groupeJDR.title }}\">Refuser</button>
                            </form>
                        </div>
                    </div>
                {% endfor %}
            </div>
        {% else %}
            <p class=\"text-gray-500\">Aucune invitation en attente.</p>
        {% endif %}
    </div>
</div>
{% endblock %}
", "invitation/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\invitation\\index.html.twig");
    }
}
