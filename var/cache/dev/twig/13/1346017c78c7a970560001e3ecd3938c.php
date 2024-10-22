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

/* registration/register.html.twig */
class __TwigTemplate_b985a55678c6669b8f1fe016e7eb1d78 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "registration/register.html.twig", 1);
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

        yield "DiceFinder | Création de compte";
        
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
<div class=\"min-h-screen flex justify-center py-8 px-4 sm:px-6 lg:px-8 mt-6 sm:mt-20\">
    <div class=\"max-w-md w-full space-y-8\">
        <div>
            <img class=\"mx-auto h-24 w-auto mb-3 hidden sm:block\" src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-dicefinder.png"), "html", null, true);
        yield "\" alt=\"DiceFinder Logo\">
            <h1 class=\"text-center text-3xl font-bold tracking-tight text-white\">DiceFinder</h1>
            <h2 class=\"mt-6 text-center text-2xl tracking-tight text-white\">Créez un compte.</h2>
            <p class=\"mt-1 text-center text-sm text-gray-600\">
                ou
                <a href=\"";
        // line 15
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Connectez-vous.</a>
            </p>
        </div>
        ";
        // line 18
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), 'errors');
        yield "
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["emailsent"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 20
            yield "            <div class=\"bg-green-600 text-dark p-4 rounded mb-6\">
                ";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        yield "        <div class=\"p-7 rounded-lg bg-white\">
            ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
            ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 27
            yield "                <div class=\"alert alert-danger text-red-500\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        yield "            <div>
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "block text-base font-bold text-dark"], "label" => "Nom d'utilisateur"]);
        yield "
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "username", [], "any", false, false, false, 31), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                <p class=\"text-red-500 text-xs italic mt-2\">
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "username", [], "any", false, false, false, 33), 'errors');
        yield "
                </p>
            </div>
            <div>
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "block text-base font-bold text-dark"], "label" => "Adresse e-mail"]);
        yield "
                <div class=\"mt-1\">
                    ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "email", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                    <p class=\"text-red-500 text-xs italic mt-2\">
                        ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "email", [], "any", false, false, false, 41), 'errors');
        yield "
                    </p>
                </div>
            </div>
            <div>
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "password", [], "any", false, false, false, 46), "first", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "block text-base font-bold text-dark"], "label" => "Mot de passe"]);
        yield "
                <div class=\"mt-1\">
                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "password", [], "any", false, false, false, 48), "first", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                    <p class=\"text-red-500 text-xs italic mt-2\">
                        ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "password", [], "any", false, false, false, 50), "first", [], "any", false, false, false, 50), 'errors');
        yield "
                    </p>
                </div>
            </div>
            <div>
                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "password", [], "any", false, false, false, 55), "second", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "block text-base font-bold text-dark"], "label" => "Confirmer le mot de passe"]);
        yield "
                <div class=\"mt-1\">
                    ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "password", [], "any", false, false, false, 57), "second", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                    ";
        // line 58
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "password", [], "any", false, false, false, 58), "second", [], "any", false, false, false, 58), 'errors')) {
            // line 59
            yield "                        <p class=\"text-red-500 text-xs italic mt-2\">
                            ";
            // line 60
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "password", [], "any", false, false, false, 60), "second", [], "any", false, false, false, 60), 'errors');
            yield "
                        </p>
                    ";
        }
        // line 63
        yield "                </div>
            </div>
            <div class=\"flex items-center justify-between\">
                <div class=\"flex items-center\">
                    ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "agreeTerms", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"]]);
        yield "
                    ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 68, $this->source); })()), "agreeTerms", [], "any", false, false, false, 68), 'label', ["label_attr" => ["class" => "ml-2 block text-sm text-dark"]]);
        yield "
                </div>
            </div>
            <div>
                <button type=\"submit\" class=\"flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-lg font-bold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\">
                    Créer un compte
                </button>
            </div>
            ";
        // line 76
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), 'form_end');
        yield "
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
        return "registration/register.html.twig";
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
        return array (  256 => 76,  245 => 68,  241 => 67,  235 => 63,  229 => 60,  226 => 59,  224 => 58,  220 => 57,  215 => 55,  207 => 50,  202 => 48,  197 => 46,  189 => 41,  184 => 39,  179 => 37,  172 => 33,  167 => 31,  163 => 30,  160 => 29,  151 => 27,  147 => 26,  143 => 25,  140 => 24,  131 => 21,  128 => 20,  124 => 19,  120 => 18,  114 => 15,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DiceFinder | Création de compte{% endblock %}

{% block body %}

<div class=\"min-h-screen flex justify-center py-8 px-4 sm:px-6 lg:px-8 mt-6 sm:mt-20\">
    <div class=\"max-w-md w-full space-y-8\">
        <div>
            <img class=\"mx-auto h-24 w-auto mb-3 hidden sm:block\" src=\"{{ asset('images/logo-dicefinder.png') }}\" alt=\"DiceFinder Logo\">
            <h1 class=\"text-center text-3xl font-bold tracking-tight text-white\">DiceFinder</h1>
            <h2 class=\"mt-6 text-center text-2xl tracking-tight text-white\">Créez un compte.</h2>
            <p class=\"mt-1 text-center text-sm text-gray-600\">
                ou
                <a href=\"{{ path('app_login') }}\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Connectez-vous.</a>
            </p>
        </div>
        {{ form_errors(registrationForm) }}
        {% for message in app.flashes('emailsent') %}
            <div class=\"bg-green-600 text-dark p-4 rounded mb-6\">
                {{ message }}
            </div>
        {% endfor %}
        <div class=\"p-7 rounded-lg bg-white\">
            {{ form_start(registrationForm, {'attr': {'class': 'space-y-6'}}) }}
            {% for flash_error in app.flashes('verify_email_error') %}
                <div class=\"alert alert-danger text-red-500\" role=\"alert\">{{ flash_error }}</div>
            {% endfor %}
            <div>
                {{ form_label(registrationForm.username, 'Nom d\\'utilisateur', {'label_attr': {'class': 'block text-base font-bold text-dark'}}) }}
                {{ form_widget(registrationForm.username, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm'}}) }}
                <p class=\"text-red-500 text-xs italic mt-2\">
                    {{ form_errors(registrationForm.username) }}
                </p>
            </div>
            <div>
                {{ form_label(registrationForm.email, 'Adresse e-mail', {'label_attr': {'class': 'block text-base font-bold text-dark'}}) }}
                <div class=\"mt-1\">
                    {{ form_widget(registrationForm.email, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm'}}) }}
                    <p class=\"text-red-500 text-xs italic mt-2\">
                        {{ form_errors(registrationForm.email) }}
                    </p>
                </div>
            </div>
            <div>
                {{ form_label(registrationForm.password.first, 'Mot de passe', {'label_attr': {'class': 'block text-base font-bold text-dark'}}) }}
                <div class=\"mt-1\">
                    {{ form_widget(registrationForm.password.first, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm'}}) }}
                    <p class=\"text-red-500 text-xs italic mt-2\">
                        {{ form_errors(registrationForm.password.first) }}
                    </p>
                </div>
            </div>
            <div>
                {{ form_label(registrationForm.password.second, 'Confirmer le mot de passe', {'label_attr': {'class': 'block text-base font-bold text-dark'}}) }}
                <div class=\"mt-1\">
                    {{ form_widget(registrationForm.password.second, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm'}}) }}
                    {% if form_errors(registrationForm.password.second) %}
                        <p class=\"text-red-500 text-xs italic mt-2\">
                            {{ form_errors(registrationForm.password.second) }}
                        </p>
                    {% endif %}
                </div>
            </div>
            <div class=\"flex items-center justify-between\">
                <div class=\"flex items-center\">
                    {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500'}}) }}
                    {{ form_label(registrationForm.agreeTerms, null, {'label_attr': {'class': 'ml-2 block text-sm text-dark'}}) }}
                </div>
            </div>
            <div>
                <button type=\"submit\" class=\"flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-lg font-bold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\">
                    Créer un compte
                </button>
            </div>
            {{ form_end(registrationForm) }}
        </div>
    </div>
</div>
{% endblock %}
", "registration/register.html.twig", "/home/benjamin/Dicefinder/templates/registration/register.html.twig");
    }
}
