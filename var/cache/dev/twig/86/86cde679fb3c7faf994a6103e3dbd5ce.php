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

/* settings_account/index.html.twig */
class __TwigTemplate_375f6e91dda99df7bf880a9413886635 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_account/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "settings_account/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "settings_account/index.html.twig", 1);
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

        yield "Modifier Profil";
        
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
        yield "    <h1 class=\"text-2xl font-semibold text-center text-gray-100 mb-5 mt-5\">Paramètres du compte</h1>
    <div class=\"mt-10 grid gap-4 lg:grid-cols-3 lg:grid-rows-2\">
        <div class=\"relative lg:row-span-2\">
            <div class=\"absolute inset-px rounded-lg glassmorphism lg:rounded-l-[2rem]\"></div>
                <div class=\"relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-l-[calc(2rem+1px)] bg-gray-900 shadow-lg backdrop-blur-lg border border-white/10\">
                    <div class=\"p-6 rounded-lg backdrop-blur-md\">
                    <h2 class=\"text-2xl font-bold text-gray-100 mb-6\">Informations Personnelles</h2>
                        ";
        // line 13
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start');
        yield "
                            <div class=\"mb-6\">
                                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "lastName", [], "any", false, false, false, 15), 'label', ["label_attr" => ["class" => "block text-gray-100 mb-2 font-medium tracking-wide"], "label" => "Nom"]);
        yield "
                                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "lastName", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "form-input bg-gray-700 text-gray-200 border border-gray-600 rounded-lg w-full p-4 shadow-sm focus:ring-2 focus:ring-indigo-500 transition duration-300"]]);
        yield "
                            </div>

                            <div class=\"mb-6\">
                                ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "firstName", [], "any", false, false, false, 20), 'label', ["label_attr" => ["class" => "block text-gray-100 mb-2 font-medium tracking-wide"], "label" => "Prénom"]);
        yield "
                                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "firstName", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-input bg-gray-700 text-gray-200 border border-gray-600 rounded-lg w-full p-4 shadow-sm focus:ring-2 focus:ring-indigo-500 transition duration-300"]]);
        yield "
                            </div>

                            <div class=\"mb-6\">
                                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "email", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "block text-gray-100 mb-2 font-medium tracking-wide"], "label" => "Email"]);
        yield "
                                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "form-input bg-gray-700 text-gray-200 border border-gray-600 rounded-lg w-full p-4 shadow-sm focus:ring-2 focus:ring-indigo-500 transition duration-300", "disabled" => "disabled"]]);
        // line 29
        yield "
                            </div>

                            <div class=\"flex justify-end mt-4\">
                                <button type=\"submit\" class=\"bg-indigo-600 text-white font-bold py-3 px-6 rounded-full shadow-md hover:bg-indigo-700 transition duration-300\">
                                    Sauvegarder
                                </button>
                            </div>
                        ";
        // line 37
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), 'form_end');
        yield "
                    </div>
                </div>
            <div class=\"absolute inset-0 lg:rounded-l-[2rem] rounded-lg border border-white/20 pointer-events-none shadow-xl ring-2 ring-purple-500/20\"></div>
        </div>
        <div class=\"relative max-lg:row-start-1\">
            <div class=\"absolute inset-px rounded-lg glassmorphism max-lg:rounded-t-[2rem]\"></div>
            <div class=\"relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]\">
                <div class=\"px-8 pt-8 sm:px-10 sm:pt-10\">
                    <p class=\"mt-2 text-lg/7 font-medium tracking-tight text-gray-950 max-lg:text-center\">Performance</p>
                    <p class=\"mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center\">Lorem ipsum, dolor sit amet consectetur adipisicing elit maiores impedit.</p>
                </div>
                <div class=\"flex flex-1 items-center justify-center px-8 max-lg:pb-12 max-lg:pt-10 sm:px-10 lg:pb-2\">
                    <img class=\"w-full max-lg:max-w-xs\" src=\"https://tailwindui.com/plus/img/component-images/bento-03-performance.png\" alt=\"\">
                </div>
            </div>
            <div class=\"pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-t-[2rem]\"></div>
        </div>
        <div class=\"relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2\">
            <div class=\"absolute inset-0 rounded-xl bg-gray-800/30 backdrop-blur-lg border border-white/10 shadow-xl\"></div>
            <div class=\"relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.xl)+1px)] bg-gray-900 shadow-lg\">
                <div class=\"p-6 rounded-xl backdrop-blur-md\">
                    <h2 class=\"text-2xl font-bold text-gray-100 mb-6\">Changer le mot de passe</h2>
                    ";
        // line 60
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 60, $this->source); })()), 'form_start');
        yield "
                        <div class=\"mb-6\">
                            ";
        // line 62
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 62, $this->source); })()), "current_password", [], "any", false, false, false, 62), 'label', ["label_attr" => ["class" => "block text-gray-100 mb-2 font-medium tracking-wide"], "label" => "Mot de passe actuel"]);
        yield "
                            ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 63, $this->source); })()), "current_password", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-input bg-gray-700 text-gray-200 border border-gray-600 rounded-lg w-full p-4 shadow-sm focus:ring-2 focus:ring-purple-500 transition duration-300"]]);
        yield "
                        </div>

                        <div class=\"mb-6\">
                            ";
        // line 67
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 67, $this->source); })()), "new_password", [], "any", false, false, false, 67), 'label', ["label_attr" => ["class" => "block text-gray-100 mb-2 font-medium tracking-wide"], "label" => "Nouveau mot de passe"]);
        yield "
                            ";
        // line 68
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 68, $this->source); })()), "new_password", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-input bg-gray-700 text-gray-200 border border-gray-600 rounded-lg w-full p-4 shadow-sm focus:ring-2 focus:ring-purple-500 transition duration-300"]]);
        yield "
                        </div>

                        <div class=\"mb-6\">
                            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 72, $this->source); })()), "confirm_password", [], "any", false, false, false, 72), 'label', ["label_attr" => ["class" => "block text-gray-100 mb-2 font-medium tracking-wide"], "label" => "Confirmer le nouveau mot de passe"]);
        yield "
                            ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 73, $this->source); })()), "confirm_password", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-input bg-gray-700 text-gray-200 border border-gray-600 rounded-lg w-full p-4 shadow-sm focus:ring-2 focus:ring-purple-500 transition duration-300"]]);
        yield "
                        </div>

                        <div class=\"flex justify-end mt-4\">
                            <button type=\"submit\" class=\"bg-red-600 text-white font-bold py-3 px-6 rounded-full shadow-md hover:bg-red-700 transition duration-300\">
                                Mettre à jour
                            </button>
                        </div>
                    ";
        // line 81
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 81, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
            <div class=\"absolute inset-0 rounded-xl border border-white/20 pointer-events-none shadow-xl ring-2 ring-purple-500/20\"></div>
        </div>
        <div class=\"relative lg:row-span-2\">
            <div class=\"absolute inset-px rounded-lg glassmorphism max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]\"></div>
                <div class=\"relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]\">
                    <div class=\"px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10\">
                        <p class=\"mt-2 text-lg/7 font-medium tracking-tight text-gray-950 max-lg:text-center\">Powerful APIs</p>
                        <p class=\"mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center\">Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget sem sodales gravida.</p>
                    </div>
                    <div class=\"relative min-h-[30rem] w-full grow\">
                        <div class=\"absolute bottom-0 left-10 right-0 top-10 overflow-hidden rounded-tl-xl bg-gray-900 shadow-2xl\">
                        <div class=\"flex bg-gray-800/40 ring-1 ring-white/5\">
                            <div class=\"-mb-px flex text-sm font-medium leading-6 text-gray-400\">
                            <div class=\"border-b border-r border-b-white/20 border-r-white/10 glassmorphism/5 px-4 py-2 text-white\">NotificationSetting.jsx</div>
                            <div class=\"border-r border-gray-600/10 px-4 py-2\">App.jsx</div>
                            </div>
                        </div>
                            <div class=\"px-6 pb-14 pt-6\">
                            </div>
                        </div>
                    </div>
                </div>
            <div class=\"pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]\"></div>
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
        return "settings_account/index.html.twig";
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
        return array (  220 => 81,  209 => 73,  205 => 72,  198 => 68,  194 => 67,  187 => 63,  183 => 62,  178 => 60,  152 => 37,  142 => 29,  140 => 26,  136 => 25,  129 => 21,  125 => 20,  118 => 16,  114 => 15,  109 => 13,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Profil{% endblock %}

{% block body %}
    <h1 class=\"text-2xl font-semibold text-center text-gray-100 mb-5 mt-5\">Paramètres du compte</h1>
    <div class=\"mt-10 grid gap-4 lg:grid-cols-3 lg:grid-rows-2\">
        <div class=\"relative lg:row-span-2\">
            <div class=\"absolute inset-px rounded-lg glassmorphism lg:rounded-l-[2rem]\"></div>
                <div class=\"relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] lg:rounded-l-[calc(2rem+1px)] bg-gray-900 shadow-lg backdrop-blur-lg border border-white/10\">
                    <div class=\"p-6 rounded-lg backdrop-blur-md\">
                    <h2 class=\"text-2xl font-bold text-gray-100 mb-6\">Informations Personnelles</h2>
                        {{ form_start(form) }}
                            <div class=\"mb-6\">
                                {{ form_label(form.lastName, 'Nom', {'label_attr': {'class': 'block text-gray-100 mb-2 font-medium tracking-wide'}}) }}
                                {{ form_widget(form.lastName, {'attr': {'class': 'form-input bg-gray-700 text-gray-200 border border-gray-600 rounded-lg w-full p-4 shadow-sm focus:ring-2 focus:ring-indigo-500 transition duration-300'}}) }}
                            </div>

                            <div class=\"mb-6\">
                                {{ form_label(form.firstName, 'Prénom', {'label_attr': {'class': 'block text-gray-100 mb-2 font-medium tracking-wide'}}) }}
                                {{ form_widget(form.firstName, {'attr': {'class': 'form-input bg-gray-700 text-gray-200 border border-gray-600 rounded-lg w-full p-4 shadow-sm focus:ring-2 focus:ring-indigo-500 transition duration-300'}}) }}
                            </div>

                            <div class=\"mb-6\">
                                {{ form_label(form.email, 'Email', {'label_attr': {'class': 'block text-gray-100 mb-2 font-medium tracking-wide'}}) }}
                                {{ form_widget(form.email, {'attr': {
                                    'class': 'form-input bg-gray-700 text-gray-200 border border-gray-600 rounded-lg w-full p-4 shadow-sm focus:ring-2 focus:ring-indigo-500 transition duration-300', 
                                    'disabled': 'disabled'
                                }}) }}
                            </div>

                            <div class=\"flex justify-end mt-4\">
                                <button type=\"submit\" class=\"bg-indigo-600 text-white font-bold py-3 px-6 rounded-full shadow-md hover:bg-indigo-700 transition duration-300\">
                                    Sauvegarder
                                </button>
                            </div>
                        {{ form_end(form) }}
                    </div>
                </div>
            <div class=\"absolute inset-0 lg:rounded-l-[2rem] rounded-lg border border-white/20 pointer-events-none shadow-xl ring-2 ring-purple-500/20\"></div>
        </div>
        <div class=\"relative max-lg:row-start-1\">
            <div class=\"absolute inset-px rounded-lg glassmorphism max-lg:rounded-t-[2rem]\"></div>
            <div class=\"relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]\">
                <div class=\"px-8 pt-8 sm:px-10 sm:pt-10\">
                    <p class=\"mt-2 text-lg/7 font-medium tracking-tight text-gray-950 max-lg:text-center\">Performance</p>
                    <p class=\"mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center\">Lorem ipsum, dolor sit amet consectetur adipisicing elit maiores impedit.</p>
                </div>
                <div class=\"flex flex-1 items-center justify-center px-8 max-lg:pb-12 max-lg:pt-10 sm:px-10 lg:pb-2\">
                    <img class=\"w-full max-lg:max-w-xs\" src=\"https://tailwindui.com/plus/img/component-images/bento-03-performance.png\" alt=\"\">
                </div>
            </div>
            <div class=\"pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-t-[2rem]\"></div>
        </div>
        <div class=\"relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2\">
            <div class=\"absolute inset-0 rounded-xl bg-gray-800/30 backdrop-blur-lg border border-white/10 shadow-xl\"></div>
            <div class=\"relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.xl)+1px)] bg-gray-900 shadow-lg\">
                <div class=\"p-6 rounded-xl backdrop-blur-md\">
                    <h2 class=\"text-2xl font-bold text-gray-100 mb-6\">Changer le mot de passe</h2>
                    {{ form_start(passwordForm) }}
                        <div class=\"mb-6\">
                            {{ form_label(passwordForm.current_password, 'Mot de passe actuel', {'label_attr': {'class': 'block text-gray-100 mb-2 font-medium tracking-wide'}}) }}
                            {{ form_widget(passwordForm.current_password, {'attr': {'class': 'form-input bg-gray-700 text-gray-200 border border-gray-600 rounded-lg w-full p-4 shadow-sm focus:ring-2 focus:ring-purple-500 transition duration-300'}}) }}
                        </div>

                        <div class=\"mb-6\">
                            {{ form_label(passwordForm.new_password, 'Nouveau mot de passe', {'label_attr': {'class': 'block text-gray-100 mb-2 font-medium tracking-wide'}}) }}
                            {{ form_widget(passwordForm.new_password, {'attr': {'class': 'form-input bg-gray-700 text-gray-200 border border-gray-600 rounded-lg w-full p-4 shadow-sm focus:ring-2 focus:ring-purple-500 transition duration-300'}}) }}
                        </div>

                        <div class=\"mb-6\">
                            {{ form_label(passwordForm.confirm_password, 'Confirmer le nouveau mot de passe', {'label_attr': {'class': 'block text-gray-100 mb-2 font-medium tracking-wide'}}) }}
                            {{ form_widget(passwordForm.confirm_password, {'attr': {'class': 'form-input bg-gray-700 text-gray-200 border border-gray-600 rounded-lg w-full p-4 shadow-sm focus:ring-2 focus:ring-purple-500 transition duration-300'}}) }}
                        </div>

                        <div class=\"flex justify-end mt-4\">
                            <button type=\"submit\" class=\"bg-red-600 text-white font-bold py-3 px-6 rounded-full shadow-md hover:bg-red-700 transition duration-300\">
                                Mettre à jour
                            </button>
                        </div>
                    {{ form_end(passwordForm) }}
                </div>
            </div>
            <div class=\"absolute inset-0 rounded-xl border border-white/20 pointer-events-none shadow-xl ring-2 ring-purple-500/20\"></div>
        </div>
        <div class=\"relative lg:row-span-2\">
            <div class=\"absolute inset-px rounded-lg glassmorphism max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]\"></div>
                <div class=\"relative flex h-full flex-col overflow-hidden rounded-[calc(theme(borderRadius.lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]\">
                    <div class=\"px-8 pb-3 pt-8 sm:px-10 sm:pb-0 sm:pt-10\">
                        <p class=\"mt-2 text-lg/7 font-medium tracking-tight text-gray-950 max-lg:text-center\">Powerful APIs</p>
                        <p class=\"mt-2 max-w-lg text-sm/6 text-gray-600 max-lg:text-center\">Sit quis amet rutrum tellus ullamcorper ultricies libero dolor eget sem sodales gravida.</p>
                    </div>
                    <div class=\"relative min-h-[30rem] w-full grow\">
                        <div class=\"absolute bottom-0 left-10 right-0 top-10 overflow-hidden rounded-tl-xl bg-gray-900 shadow-2xl\">
                        <div class=\"flex bg-gray-800/40 ring-1 ring-white/5\">
                            <div class=\"-mb-px flex text-sm font-medium leading-6 text-gray-400\">
                            <div class=\"border-b border-r border-b-white/20 border-r-white/10 glassmorphism/5 px-4 py-2 text-white\">NotificationSetting.jsx</div>
                            <div class=\"border-r border-gray-600/10 px-4 py-2\">App.jsx</div>
                            </div>
                        </div>
                            <div class=\"px-6 pb-14 pt-6\">
                            </div>
                        </div>
                    </div>
                </div>
            <div class=\"pointer-events-none absolute inset-px rounded-lg shadow ring-1 ring-black/5 max-lg:rounded-b-[2rem] lg:rounded-r-[2rem]\"></div>
        </div>
    </div>
{% endblock %}
", "settings_account/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\settings_account\\index.html.twig");
    }
}
