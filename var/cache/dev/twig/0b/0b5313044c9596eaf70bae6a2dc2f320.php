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
        yield "    <script src=\"https://cdn.tailwindcss.com\"></script>
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 7));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 8
            yield "        <div class=\"alert alert-danger\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        yield "    ";
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 10, $this->source); })()), 'errors');
        yield "
    <div class=\"min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8\">
        <div class=\"max-w-md w-full space-y-8\">
            <div>
                <h2 class=\"mt-7 text-center text-2xl tracking-tight text-white\">Créez un compte.</h2>
                <p class=\"mt-1 text-center text-sm text-gray-600\">
                    ou
                    <a href=\"";
        // line 17
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Connectez-vous.</a>
                </p>
            </div>
            <div class=\"px-4 sm:rounded-lg sm:px-10\">
                ";
        // line 21
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
                    <div>
                        ";
        // line 23
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 23, $this->source); })()), "username", [], "any", false, false, false, 23), 'label', ["label_attr" => ["class" => "block text-base font-bold text-white"], "label" => "Nom d'utilisateur"]);
        yield "
                        <div class=\"mt-1\">
                            ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 25, $this->source); })()), "username", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm", "pattern" => "[a-zA-Z0-9]+", "title" => "Le nom d’utilisateur ne peut contenir que des lettres et des chiffres."]]);
        yield "
                            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "username", [], "any", false, false, false, 26), 'errors');
        yield "
                        </div>
                    </div>

                    <div>
                        ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "block text-base font-bold text-white"], "label" => "Adresse e-mail"]);
        yield "
                        <div class=\"mt-1\">
                            ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "email", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'errors');
        yield "
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
                        </div>
                    </div>

                    <div>
                        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 46, $this->source); })()), "password", [], "any", false, false, false, 46), "second", [], "any", false, false, false, 46), 'label', ["label_attr" => ["class" => "block text-base font-bold text-white"], "label" => "Confirmer le mot de passe"]);
        yield "
                        <div class=\"mt-1\">
                            ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 48, $this->source); })()), "password", [], "any", false, false, false, 48), "second", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "password", [], "any", false, false, false, 49), "second", [], "any", false, false, false, 49), 'errors');
        yield "
                        </div>
                    </div>

                    <div>
                        ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 54, $this->source); })()), "roles", [], "any", false, false, false, 54), 'label', ["label_attr" => ["class" => "block text-base font-bold text-white"], "label" => "Choisissez vos rôles:"]);
        yield "
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "roles", [], "any", false, false, false, 55), 'widget');
        yield "
                    </div>
                    ";
        // line 57
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 57, $this->source); })()), "roles", [], "any", false, false, false, 57), 'errors')) {
            // line 58
            yield "                        <p class=\"text-red-500 text-xs italic mt-2\">
                            ";
            // line 59
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 59, $this->source); })()), "roles", [], "any", false, false, false, 59), 'errors');
            yield "
                        </p>
                    ";
        }
        // line 62
        yield "
                    <div class=\"flex items-center justify-between\">
                        <div class=\"flex items-center\">
                            ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 65, $this->source); })()), "agreeTerms", [], "any", false, false, false, 65), 'widget', ["attr" => ["class" => "h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"]]);
        yield "
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "agreeTerms", [], "any", false, false, false, 66), 'label', ["label_attr" => ["class" => "ml-2 block text-sm text-white"]]);
        yield "
                        </div>
                    </div>

                    <div>
                        <button type=\"submit\" class=\"flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-lg font-bold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\">
                            S'inscrire
                        </button>
                    </div>
                ";
        // line 75
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 75, $this->source); })()), 'form_end');
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
        return array (  243 => 75,  231 => 66,  227 => 65,  222 => 62,  216 => 59,  213 => 58,  211 => 57,  206 => 55,  202 => 54,  194 => 49,  190 => 48,  185 => 46,  177 => 41,  172 => 39,  164 => 34,  160 => 33,  155 => 31,  147 => 26,  143 => 25,  138 => 23,  133 => 21,  126 => 17,  115 => 10,  106 => 8,  102 => 7,  99 => 6,  86 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{% endblock %}

{% block body %}
    <script src=\"https://cdn.tailwindcss.com\"></script>
    {% for flash_error in app.flashes('verify_email_error') %}
        <div class=\"alert alert-danger\" role=\"alert\">{{ flash_error }}</div>
    {% endfor %}
    {{ form_errors(registrationForm) }}
    <div class=\"min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8\">
        <div class=\"max-w-md w-full space-y-8\">
            <div>
                <h2 class=\"mt-7 text-center text-2xl tracking-tight text-white\">Créez un compte.</h2>
                <p class=\"mt-1 text-center text-sm text-gray-600\">
                    ou
                    <a href=\"{{ path('app_login') }}\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Connectez-vous.</a>
                </p>
            </div>
            <div class=\"px-4 sm:rounded-lg sm:px-10\">
                {{ form_start(registrationForm, {'attr': {'class': 'space-y-6'}}) }}
                    <div>
                        {{ form_label(registrationForm.username, 'Nom d\\'utilisateur', {'label_attr': {'class': 'block text-base font-bold text-white'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(registrationForm.username, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm', 'pattern': '[a-zA-Z0-9]+', 'title': 'Le nom d’utilisateur ne peut contenir que des lettres et des chiffres.'}}) }}
                            {{ form_errors(registrationForm.username) }}
                        </div>
                    </div>

                    <div>
                        {{ form_label(registrationForm.email, 'Adresse e-mail', {'label_attr': {'class': 'block text-base font-bold text-white'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(registrationForm.email, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm'}}) }}
                            {{ form_errors(registrationForm.email) }}
                        </div>
                    </div>

                    <div>
                        {{ form_label(registrationForm.password.first, 'Mot de passe', {'label_attr': {'class': 'block text-base font-bold text-white'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(registrationForm.password.first, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm'}}) }}
                        </div>
                    </div>

                    <div>
                        {{ form_label(registrationForm.password.second, 'Confirmer le mot de passe', {'label_attr': {'class': 'block text-base font-bold text-white'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(registrationForm.password.second, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm'}}) }}
                            {{ form_errors(registrationForm.password.second) }}
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
                            S'inscrire
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
