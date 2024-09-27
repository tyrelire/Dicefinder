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
        yield "<div class=\"container mx-auto px-4 py-8 mt-20\">
    <div class=\"bg-white shadow rounded-lg p-6\">
    <h1 class=\"text-2xl font-bold mb-4 text-gray-800\">Mes Invitations</h1>

    ";
        // line 10
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 10, $this->source); })())) > 0)) {
            // line 11
            yield "        <div class=\"space-y-4\">
            ";
            // line 12
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 12, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["invitation"]) {
                // line 13
                yield "                <div class=\"bg-slate-900 p-4 rounded-lg shadow flex justify-between items-center\">
                    <div>
                        <p class=\"text-lg font-bold text-white\">";
                // line 15
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "groupeJDR", [], "any", false, false, false, 15), "title", [], "any", false, false, false, 15), "html", null, true);
                yield "</p>
                        <p class=\"text-sm text-white\">Invité à rejoindre ce groupe</p>
                    </div>
                    <div class=\"flex space-x-2\">
                        <form action=\"";
                // line 19
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invitations_respond", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "id", [], "any", false, false, false, 19)]), "html", null, true);
                yield "\" method=\"POST\">
                            <input type=\"hidden\" name=\"response\" value=\"accept\">
                            <button type=\"submit\" class=\"bg-green-500 text-white px-4 py-2 rounded-md\">Accepter</button>
                        </form>
                        <form action=\"";
                // line 23
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invitations_respond", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "id", [], "any", false, false, false, 23)]), "html", null, true);
                yield "\" method=\"POST\">
                            <input type=\"hidden\" name=\"response\" value=\"refuse\">
                            <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded-md\">Refuser</button>
                        </form>
                    </div>
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['invitation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 30
            yield "        </div>
    ";
        } else {
            // line 32
            yield "        <p class=\"text-gray-500\">Aucune invitation en attente.</p>
    ";
        }
        // line 34
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
        return array (  154 => 34,  150 => 32,  146 => 30,  133 => 23,  126 => 19,  119 => 15,  115 => 13,  111 => 12,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Invitations{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8 mt-20\">
    <div class=\"bg-white shadow rounded-lg p-6\">
    <h1 class=\"text-2xl font-bold mb-4 text-gray-800\">Mes Invitations</h1>

    {% if invitations|length > 0 %}
        <div class=\"space-y-4\">
            {% for invitation in invitations %}
                <div class=\"bg-slate-900 p-4 rounded-lg shadow flex justify-between items-center\">
                    <div>
                        <p class=\"text-lg font-bold text-white\">{{ invitation.groupeJDR.title }}</p>
                        <p class=\"text-sm text-white\">Invité à rejoindre ce groupe</p>
                    </div>
                    <div class=\"flex space-x-2\">
                        <form action=\"{{ path('app_invitations_respond', {'id': invitation.id}) }}\" method=\"POST\">
                            <input type=\"hidden\" name=\"response\" value=\"accept\">
                            <button type=\"submit\" class=\"bg-green-500 text-white px-4 py-2 rounded-md\">Accepter</button>
                        </form>
                        <form action=\"{{ path('app_invitations_respond', {'id': invitation.id}) }}\" method=\"POST\">
                            <input type=\"hidden\" name=\"response\" value=\"refuse\">
                            <button type=\"submit\" class=\"bg-red-500 text-white px-4 py-2 rounded-md\">Refuser</button>
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
