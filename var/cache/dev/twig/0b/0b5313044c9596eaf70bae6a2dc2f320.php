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
class __TwigTemplate_38dce160e8c43a4732d97145bc19f6f2 extends Template
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
    <div class=\"min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8\">
        <div class=\"max-w-md w-full space-y-8\">
            <div>
                <h2 class=\"mt-7 text-center text-2xl tracking-tight text-white\">Créez un compte.</h2>
                <p class=\"mt-1 text-center text-sm text-gray-600\">
                    ou
                    <a href=\"";
        // line 13
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Connectez-vous.</a>
                </p>
            </div>
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 16, $this->source); })()), 'errors');
        yield "
            <div class=\"px-4 sm:rounded-lg sm:px-10\">
                ";
        // line 18
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 18, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
                    ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 19, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 20
            yield "                        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "                    <div>
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "username", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "block text-base font-bold text-white"], "label" => "Nom d'utilisateur"]);
        yield "
                            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "username", [], "any", false, false, false, 24), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                        <p class=\"text-red-500 text-xs italic mt-2\">
                            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "username", [], "any", false, false, false, 26), 'errors');
        yield "
                        </p>
                    </div>
                    <div>
                        ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "email", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "block text-base font-bold text-white"], "label" => "Adresse e-mail"]);
        yield "
                        <div class=\"mt-1\">
                            ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                            <p class=\"text-red-500 text-xs italic mt-2\">
                                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'errors');
        yield "
                            </p>
                        </div>
                    </div>
                    <div>
                        ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 39, $this->source); })()), "password", [], "any", false, false, false, 39), "first", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "block text-base font-bold text-white"], "label" => "Mot de passe"]);
        yield "
                        <div class=\"mt-1\">
                            ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 41, $this->source); })()), "password", [], "any", false, false, false, 41), "first", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                            <p class=\"text-red-500 text-xs italic mt-2\">
                                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 43, $this->source); })()), "password", [], "any", false, false, false, 43), "first", [], "any", false, false, false, 43), 'errors');
        yield "
                            </p>
                        </div>
                    </div>
                    <div>
                        ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "password", [], "any", false, false, false, 48), "second", [], "any", false, false, false, 48), 'label', ["label_attr" => ["class" => "block text-base font-bold text-white"], "label" => "Confirmer le mot de passe"]);
        yield "
                        <div class=\"mt-1\">
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "password", [], "any", false, false, false, 50), "second", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                            ";
        // line 51
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 51, $this->source); })()), "password", [], "any", false, false, false, 51), "second", [], "any", false, false, false, 51), 'errors')) {
            // line 52
            yield "                                <p class=\"text-red-500 text-xs italic mt-2\">
                                    ";
            // line 53
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 53, $this->source); })()), "password", [], "any", false, false, false, 53), "second", [], "any", false, false, false, 53), 'errors');
            yield "
                                </p>
                            ";
        }
        // line 56
        yield "                        </div>
                    </div>

                    <div>
                        ";
        // line 60
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "roles", [], "any", false, false, false, 60), 'label', ["label_attr" => ["class" => "block text-base font-bold text-white"], "label" => "Choisissez vos rôles:"]);
        yield "
                        ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 61, $this->source); })()), "roles", [], "any", false, false, false, 61), 'widget');
        yield "
                    </div>
                    ";
        // line 63
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 63, $this->source); })()), "roles", [], "any", false, false, false, 63), 'errors')) {
            // line 64
            yield "                        <p class=\"text-red-500 text-xs italic mt-2\">
                            ";
            // line 65
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "roles", [], "any", false, false, false, 65), 'errors');
            yield "
                        </p>
                    ";
        }
        // line 68
        yield "                    <div class=\"flex items-center justify-between\">
                        <div class=\"flex items-center\">
                            ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "agreeTerms", [], "any", false, false, false, 70), 'widget', ["attr" => ["class" => "h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"]]);
        yield "
                            ";
        // line 71
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 71, $this->source); })()), "agreeTerms", [], "any", false, false, false, 71), 'label', ["label_attr" => ["class" => "ml-2 block text-sm text-white"]]);
        yield "
                        </div>
                    </div>

                    <div>
                        <button type=\"submit\" class=\"flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-lg font-bold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\">
                            Créer un compte
                        </button>
                    </div>
                ";
        // line 80
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 80, $this->source); })()), 'form_end');
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
        return array (  258 => 80,  246 => 71,  242 => 70,  238 => 68,  232 => 65,  229 => 64,  227 => 63,  222 => 61,  218 => 60,  212 => 56,  206 => 53,  203 => 52,  201 => 51,  197 => 50,  192 => 48,  184 => 43,  179 => 41,  174 => 39,  166 => 34,  161 => 32,  156 => 30,  149 => 26,  144 => 24,  140 => 23,  137 => 22,  128 => 20,  124 => 19,  120 => 18,  115 => 16,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DiceFinder | Création de compte{% endblock %}

{% block body %}

    <div class=\"min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8\">
        <div class=\"max-w-md w-full space-y-8\">
            <div>
                <h2 class=\"mt-7 text-center text-2xl tracking-tight text-white\">Créez un compte.</h2>
                <p class=\"mt-1 text-center text-sm text-gray-600\">
                    ou
                    <a href=\"{{ path('app_login') }}\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Connectez-vous.</a>
                </p>
            </div>
            {{ form_errors(registrationForm) }}
            <div class=\"px-4 sm:rounded-lg sm:px-10\">
                {{ form_start(registrationForm, {'attr': {'class': 'space-y-6'}}) }}
                    {% for flash_error in app.flashes('verify_email_error') %}
                        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
                    {% endfor %}
                    <div>
                        {{ form_label(registrationForm.username, 'Nom d\\'utilisateur', {'label_attr': {'class': 'block text-base font-bold text-white'}}) }}
                            {{ form_widget(registrationForm.username, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm'}}) }}
                        <p class=\"text-red-500 text-xs italic mt-2\">
                            {{ form_errors(registrationForm.username) }}
                        </p>
                    </div>
                    <div>
                        {{ form_label(registrationForm.email, 'Adresse e-mail', {'label_attr': {'class': 'block text-base font-bold text-white'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(registrationForm.email, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm'}}) }}
                            <p class=\"text-red-500 text-xs italic mt-2\">
                                {{ form_errors(registrationForm.email) }}
                            </p>
                        </div>
                    </div>
                    <div>
                        {{ form_label(registrationForm.password.first, 'Mot de passe', {'label_attr': {'class': 'block text-base font-bold text-white'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(registrationForm.password.first, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm'}}) }}
                            <p class=\"text-red-500 text-xs italic mt-2\">
                                {{ form_errors(registrationForm.password.first) }}
                            </p>
                        </div>
                    </div>
                    <div>
                        {{ form_label(registrationForm.password.second, 'Confirmer le mot de passe', {'label_attr': {'class': 'block text-base font-bold text-white'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(registrationForm.password.second, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm'}}) }}
                            {% if form_errors(registrationForm.password.second) %}
                                <p class=\"text-red-500 text-xs italic mt-2\">
                                    {{ form_errors(registrationForm.password.second) }}
                                </p>
                            {% endif %}
                        </div>
                    </div>

                    <div>
                        {{ form_label(registrationForm.roles, 'Choisissez vos rôles:', {'label_attr': {'class': 'block text-base font-bold text-white'}}) }}
                        {{ form_widget(registrationForm.roles) }}
                    </div>
                    {% if form_errors(registrationForm.roles) %}
                        <p class=\"text-red-500 text-xs italic mt-2\">
                            {{ form_errors(registrationForm.roles) }}
                        </p>
                    {% endif %}
                    <div class=\"flex items-center justify-between\">
                        <div class=\"flex items-center\">
                            {{ form_widget(registrationForm.agreeTerms, {'attr': {'class': 'h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500'}}) }}
                            {{ form_label(registrationForm.agreeTerms, null, {'label_attr': {'class': 'ml-2 block text-sm text-white'}}) }}
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
", "registration/register.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\registration\\register.html.twig");
    }
}
