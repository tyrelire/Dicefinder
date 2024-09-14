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

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "registration/register.html.twig"));

        // line 2
        yield "
";
        // line 3
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        // line 4
        yield "
";
        // line 5
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
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
                <img class=\"mx-auto h-12 w-auto\" src=\"https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600\" alt=\"Your Company\">
                <h2 class=\"mt-6 text-center text-3xl font-bold tracking-tight text-gray-900\">Créez un compte.</h2>
                <p class=\"mt-2 text-center text-sm text-gray-600\">
                    ou
                    <a href=\"";
        // line 18
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Connectez-vous.</a>
                </p>
            </div>
            <div class=\"bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10\">
                ";
        // line 22
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
                    <div>
                        ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), "username", [], "any", false, false, false, 24), 'label', ["label_attr" => ["class" => "block text-lg font-bold text-gray-700"], "label" => "Nom d'utilisateur"]);
        yield "
                        <div class=\"mt-1\">
                            ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 26, $this->source); })()), "username", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm", "pattern" => "[a-zA-Z0-9]+", "title" => "Le nom d’utilisateur ne peut contenir que des lettres et des chiffres."]]);
        yield "
                            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 27, $this->source); })()), "username", [], "any", false, false, false, 27), 'errors');
        yield "
                        </div>
                    </div>

                    <div>
                        ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 32, $this->source); })()), "email", [], "any", false, false, false, 32), 'label', ["label_attr" => ["class" => "block text-lg font-bold text-gray-700"], "label" => "Adresse e-mail"]);
        yield "
                        <div class=\"mt-1\">
                            ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 34, $this->source); })()), "email", [], "any", false, false, false, 34), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                            ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "email", [], "any", false, false, false, 35), 'errors');
        yield "
                        </div>
                    </div>

                    <div>
                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 40, $this->source); })()), "password", [], "any", false, false, false, 40), "first", [], "any", false, false, false, 40), 'label', ["label_attr" => ["class" => "block text-lg font-bold text-gray-700"], "label" => "Mot de passe"]);
        yield "
                        <div class=\"mt-1\">
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 42, $this->source); })()), "password", [], "any", false, false, false, 42), "first", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                        </div>
                    </div>

                    <div>
                        ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 47, $this->source); })()), "password", [], "any", false, false, false, 47), "second", [], "any", false, false, false, 47), 'label', ["label_attr" => ["class" => "block text-lg font-bold text-gray-700"], "label" => "Confirmer le mot de passe"]);
        yield "
                        <div class=\"mt-1\">
                            ";
        // line 49
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 49, $this->source); })()), "password", [], "any", false, false, false, 49), "second", [], "any", false, false, false, 49), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                            ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 50, $this->source); })()), "password", [], "any", false, false, false, 50), "second", [], "any", false, false, false, 50), 'errors');
        yield "
                        </div>
                    </div>

                    <div>
                        ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 55, $this->source); })()), "roles", [], "any", false, false, false, 55), 'label', ["label_attr" => ["class" => "block text-lg font-bold text-gray-700"], "label" => "Choisissez vos rôles:"]);
        yield "
                        ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 56, $this->source); })()), "roles", [], "any", false, false, false, 56), 'widget');
        yield "
                    </div>
                    ";
        // line 58
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 58, $this->source); })()), "roles", [], "any", false, false, false, 58), 'errors')) {
            // line 59
            yield "                        <p class=\"text-red-500 text-xs italic mt-2\">
                            ";
            // line 60
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 60, $this->source); })()), "roles", [], "any", false, false, false, 60), 'errors');
            yield "
                        </p>
                    ";
        }
        // line 63
        yield "
                    <div class=\"flex items-center justify-between\">
                        <div class=\"flex items-center\">
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 66, $this->source); })()), "agreeTerms", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"]]);
        yield "
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 67, $this->source); })()), "agreeTerms", [], "any", false, false, false, 67), 'label', ["label_attr" => ["class" => "ml-2 block text-sm text-gray-900"]]);
        yield "
                        </div>
                    </div>

                    <div>
                        <button type=\"submit\" class=\"flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-lg font-bold text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\">
                            S'inscrire
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
    public function getDebugInfo(): array
    {
        return array (  249 => 76,  237 => 67,  233 => 66,  228 => 63,  222 => 60,  219 => 59,  217 => 58,  212 => 56,  208 => 55,  200 => 50,  196 => 49,  191 => 47,  183 => 42,  178 => 40,  170 => 35,  166 => 34,  161 => 32,  153 => 27,  149 => 26,  144 => 24,  139 => 22,  132 => 18,  120 => 10,  111 => 8,  107 => 7,  104 => 6,  91 => 5,  69 => 3,  58 => 5,  55 => 4,  53 => 3,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% extends 'base.html.twig' %} #}

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
                <img class=\"mx-auto h-12 w-auto\" src=\"https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600\" alt=\"Your Company\">
                <h2 class=\"mt-6 text-center text-3xl font-bold tracking-tight text-gray-900\">Créez un compte.</h2>
                <p class=\"mt-2 text-center text-sm text-gray-600\">
                    ou
                    <a href=\"{{ path('app_login') }}\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Connectez-vous.</a>
                </p>
            </div>
            <div class=\"bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10\">
                {{ form_start(registrationForm, {'attr': {'class': 'space-y-6'}}) }}
                    <div>
                        {{ form_label(registrationForm.username, 'Nom d\\'utilisateur', {'label_attr': {'class': 'block text-lg font-bold text-gray-700'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(registrationForm.username, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm', 'pattern': '[a-zA-Z0-9]+', 'title': 'Le nom d’utilisateur ne peut contenir que des lettres et des chiffres.'}}) }}
                            {{ form_errors(registrationForm.username) }}
                        </div>
                    </div>

                    <div>
                        {{ form_label(registrationForm.email, 'Adresse e-mail', {'label_attr': {'class': 'block text-lg font-bold text-gray-700'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(registrationForm.email, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm'}}) }}
                            {{ form_errors(registrationForm.email) }}
                        </div>
                    </div>

                    <div>
                        {{ form_label(registrationForm.password.first, 'Mot de passe', {'label_attr': {'class': 'block text-lg font-bold text-gray-700'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(registrationForm.password.first, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm'}}) }}
                        </div>
                    </div>

                    <div>
                        {{ form_label(registrationForm.password.second, 'Confirmer le mot de passe', {'label_attr': {'class': 'block text-lg font-bold text-gray-700'}}) }}
                        <div class=\"mt-1\">
                            {{ form_widget(registrationForm.password.second, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm'}}) }}
                            {{ form_errors(registrationForm.password.second) }}
                        </div>
                    </div>

                    <div>
                        {{ form_label(registrationForm.roles, 'Choisissez vos rôles:', {'label_attr': {'class': 'block text-lg font-bold text-gray-700'}}) }}
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
                            {{ form_label(registrationForm.agreeTerms, null, {'label_attr': {'class': 'ml-2 block text-sm text-gray-900'}}) }}
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
", "registration/register.html.twig", "C:\\Users\\benja\\Desktop\\app\\dicefinder\\templates\\registration\\register.html.twig");
    }
}
