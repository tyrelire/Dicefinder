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

/* reset_password/reset.html.twig */
class __TwigTemplate_39cb4d3cba53c724e0beff073a79f076 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reset_password/reset.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reset_password/reset.html.twig", 1);
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

        yield "Réinitialisez votre mot de passe";
        
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
        yield "    <div class=\"flex flex-col items-center mt-36\">
        <div class=\"bg-white shadow-lg rounded-lg p-8 max-w-md w-full\">
            <h1 class=\"text-3xl font-bold text-gray-800 mb-6 text-center\">Réinitialisez votre mot de passe</h1>

            ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
            
                <div>
                    ";
        // line 13
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 13, $this->source); })()), "plainPassword", [], "any", false, false, false, 13), "first", [], "any", false, false, false, 13), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Nouveau mot de passe"]);
        yield "
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 14, $this->source); })()), "plainPassword", [], "any", false, false, false, 14), "first", [], "any", false, false, false, 14), 'widget', ["attr" => ["class" => "input-field mt-1 w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 15, $this->source); })()), "plainPassword", [], "any", false, false, false, 15), "first", [], "any", false, false, false, 15), 'errors', ["attr" => ["class" => "text-red-600 text-sm mt-2"]]);
        yield "
                </div>

                <div>
                    ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 19, $this->source); })()), "plainPassword", [], "any", false, false, false, 19), "second", [], "any", false, false, false, 19), 'label', ["label_attr" => ["class" => "block text-sm font-medium text-gray-700"], "label" => "Répétez le mot de passe"]);
        yield "
                    ";
        // line 20
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 20, $this->source); })()), "plainPassword", [], "any", false, false, false, 20), "second", [], "any", false, false, false, 20), 'widget', ["attr" => ["class" => "input-field mt-1 w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500"]]);
        yield "
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 21, $this->source); })()), "plainPassword", [], "any", false, false, false, 21), "second", [], "any", false, false, false, 21), 'errors', ["attr" => ["class" => "text-red-600 text-sm mt-2"]]);
        yield "
                </div>

                <div>
                    <button class=\"bg-blue-500 text-white font-semibold px-4 py-3 rounded-lg w-full hover:bg-blue-600 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                        Réinitialiser le mot de passe
                    </button>
                </div>

            ";
        // line 30
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["resetForm"]) || array_key_exists("resetForm", $context) ? $context["resetForm"] : (function () { throw new RuntimeError('Variable "resetForm" does not exist.', 30, $this->source); })()), 'form_end');
        yield "
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
        return "reset_password/reset.html.twig";
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
        return array (  147 => 30,  135 => 21,  131 => 20,  127 => 19,  120 => 15,  116 => 14,  112 => 13,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Réinitialisez votre mot de passe{% endblock %}

{% block body %}
    <div class=\"flex flex-col items-center mt-36\">
        <div class=\"bg-white shadow-lg rounded-lg p-8 max-w-md w-full\">
            <h1 class=\"text-3xl font-bold text-gray-800 mb-6 text-center\">Réinitialisez votre mot de passe</h1>

            {{ form_start(resetForm, {'attr': {'class': 'space-y-6'}}) }}
            
                <div>
                    {{ form_label(resetForm.plainPassword.first, 'Nouveau mot de passe', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                    {{ form_widget(resetForm.plainPassword.first, {'attr': {'class': 'input-field mt-1 w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500'}}) }}
                    {{ form_errors(resetForm.plainPassword.first, {'attr': {'class': 'text-red-600 text-sm mt-2'}}) }}
                </div>

                <div>
                    {{ form_label(resetForm.plainPassword.second, 'Répétez le mot de passe', {'label_attr': {'class': 'block text-sm font-medium text-gray-700'}}) }}
                    {{ form_widget(resetForm.plainPassword.second, {'attr': {'class': 'input-field mt-1 w-full px-4 py-3 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500'}}) }}
                    {{ form_errors(resetForm.plainPassword.second, {'attr': {'class': 'text-red-600 text-sm mt-2'}}) }}
                </div>

                <div>
                    <button class=\"bg-blue-500 text-white font-semibold px-4 py-3 rounded-lg w-full hover:bg-blue-600 transition-colors focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500\">
                        Réinitialiser le mot de passe
                    </button>
                </div>

            {{ form_end(resetForm) }}
        </div>
    </div>
{% endblock %}
", "reset_password/reset.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\reset_password\\reset.html.twig");
    }
}
