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

/* contact/index.html.twig */
class __TwigTemplate_b3c242ed50d34049c2a724719d769b9b extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "contact/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "contact/index.html.twig", 1);
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

        yield "DiceFinder | Nous Contacter";
        
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
    <section class=\"bg-white rounded-lg shadow-lg p-6 sm:p-12\">
        <div class=\"text-center\">
            <h2 class=\"text-3xl sm:text-4xl font-extrabold text-dark\">Nous Contacter</h2>
            <p class=\"mt-4 mb-8 text-lg text-dark\">Vous avez rencontré un problème technique ? Vous souhaitez nous faire part de vos commentaires ou avez besoin de détails sur nos services ? Faites-le nous savoir.</p>
        </div>
        ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 12, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "

            <div class=\"mb-6\">
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 15, $this->source); })()), "email", [], "any", false, false, false, 15), 'row', ["label" => "Votre Email", "attr" => ["class" => "shadow-sm bg-gray-600 border border-gray-300 text-white text-sm rounded-lg p-2.5 w-full", "placeholder" => "De quoi souhaitez-vous nous parler ?"], "label_attr" => ["class" => "text-dark font-semibold mb-2"]]);
        // line 22
        yield "
            </div>

            <div class=\"mb-6\">
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 26, $this->source); })()), "subject", [], "any", false, false, false, 26), 'row', ["label" => "Sujet", "attr" => ["class" => "shadow-sm bg-gray-600 border border-gray-300 text-white text-sm rounded-lg p-2.5 w-full", "placeholder" => "De quoi souhaitez-vous nous parler ?"], "label_attr" => ["class" => "text-dark font-semibold mb-2"]]);
        // line 33
        yield "
            </div>

            <div class=\"mb-6\">
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 37, $this->source); })()), "message", [], "any", false, false, false, 37), 'row', ["label" => "Votre message", "attr" => ["class" => "shadow-sm bg-gray-600 border border-gray-300 text-white text-sm rounded-lg p-2.5 w-full", "placeholder" => "Décrivez votre message ici", "rows" => 6], "label_attr" => ["class" => "text-dark font-semibold mb-2"]]);
        // line 45
        yield "
            </div>

            <div class=\"flex justify-center\">
                <button type=\"submit\" class=\"w-full sm:w-auto px-6 py-3 text-dark bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none\">
                    Envoyer le message
                </button>
            </div>

        ";
        // line 54
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["contactForm"]) || array_key_exists("contactForm", $context) ? $context["contactForm"] : (function () { throw new RuntimeError('Variable "contactForm" does not exist.', 54, $this->source); })()), 'form_end');
        yield "
    </section>
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
        return "contact/index.html.twig";
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
        return array (  143 => 54,  132 => 45,  130 => 37,  124 => 33,  122 => 26,  116 => 22,  114 => 15,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DiceFinder | Nous Contacter{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8\">
    <section class=\"bg-white rounded-lg shadow-lg p-6 sm:p-12\">
        <div class=\"text-center\">
            <h2 class=\"text-3xl sm:text-4xl font-extrabold text-dark\">Nous Contacter</h2>
            <p class=\"mt-4 mb-8 text-lg text-dark\">Vous avez rencontré un problème technique ? Vous souhaitez nous faire part de vos commentaires ou avez besoin de détails sur nos services ? Faites-le nous savoir.</p>
        </div>
        {{ form_start(contactForm, {'attr': {'class': 'space-y-6'}}) }}

            <div class=\"mb-6\">
                {{ form_row(contactForm.email, {
                    'label': 'Votre Email',
                    'attr': {
                        'class': 'shadow-sm bg-gray-600 border border-gray-300 text-white text-sm rounded-lg p-2.5 w-full',
                        'placeholder': 'De quoi souhaitez-vous nous parler ?'
                    },
                    'label_attr': {'class': 'text-dark font-semibold mb-2'}
                }) }}
            </div>

            <div class=\"mb-6\">
                {{ form_row(contactForm.subject, {
                    'label': 'Sujet',
                    'attr': {
                        'class': 'shadow-sm bg-gray-600 border border-gray-300 text-white text-sm rounded-lg p-2.5 w-full',
                        'placeholder': 'De quoi souhaitez-vous nous parler ?'
                    },
                    'label_attr': {'class': 'text-dark font-semibold mb-2'}
                }) }}
            </div>

            <div class=\"mb-6\">
                {{ form_row(contactForm.message, {
                    'label': 'Votre message',
                    'attr': {
                        'class': 'shadow-sm bg-gray-600 border border-gray-300 text-white text-sm rounded-lg p-2.5 w-full',
                        'placeholder': 'Décrivez votre message ici',
                        'rows': 6
                    },
                    'label_attr': {'class': 'text-dark font-semibold mb-2'}
                }) }}
            </div>

            <div class=\"flex justify-center\">
                <button type=\"submit\" class=\"w-full sm:w-auto px-6 py-3 text-dark bg-blue-600 text-white rounded-lg shadow hover:bg-blue-700 focus:ring-4 focus:ring-blue-300 focus:outline-none\">
                    Envoyer le message
                </button>
            </div>

        {{ form_end(contactForm) }}
    </section>
</div>
{% endblock %}
", "contact/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\contact\\index.html.twig");
    }
}
