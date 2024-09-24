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

/* groupe_jdr/_form.html.twig */
class __TwigTemplate_c9e96d2403c88d7a1a6f3b6a4ace5d7f extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/_form.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/_form.html.twig"));

        // line 1
        yield "<div class=\"container mx-auto p-6 bg-gray-100 rounded-lg shadow-lg mt-20\">
    <h1 class=\"text-2xl font-bold mb-4 text-gray-800\">Create or Edit JDR Group</h1>
    ";
        // line 3
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 3, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
        <div>
            <label for=\"title\" class=\"block text-sm font-medium text-gray-700\">
                ";
        // line 7
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), "title", [], "any", false, false, false, 7), 'label');
        yield "
            </label>
            <div class=\"mt-1\">
                ";
        // line 10
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), "title", [], "any", false, false, false, 10), 'widget', ["attr" => ["class" => "input-field"]]);
        yield "
            </div>
        </div>

        <div>
            <label for=\"description\" class=\"block text-sm font-medium text-gray-700\">
                ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "description", [], "any", false, false, false, 16), 'label');
        yield "
            </label>
            <div class=\"mt-1\">
                ";
        // line 19
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 19, $this->source); })()), "description", [], "any", false, false, false, 19), 'widget', ["attr" => ["class" => "input-field"]]);
        yield "
            </div>
        </div>

        <div>
            <label for=\"picture\" class=\"block text-sm font-medium text-gray-700\">
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "picture", [], "any", false, false, false, 25), 'label');
        yield "
            </label>
            <div class=\"mt-1\">
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "picture", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "input-field"]]);
        yield "
            </div>
        </div>

        <div>
            <label for=\"created_at\" class=\"block text-sm font-medium text-gray-700\">
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "created_at", [], "any", false, false, false, 34), 'label');
        yield "
            </label>
            <div class=\"mt-1\">
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "created_at", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "input-field"]]);
        yield "
            </div>
        </div>

        <div>
            <label for=\"edit_at\" class=\"block text-sm font-medium text-gray-700\">
                ";
        // line 43
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "edit_at", [], "any", false, false, false, 43), 'label');
        yield "
            </label>
            <div class=\"mt-1\">
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "edit_at", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "input-field"]]);
        yield "
            </div>
        </div>

        <div>
            <label for=\"maxPlayer\" class=\"block text-sm font-medium text-gray-700\">
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "maxPlayer", [], "any", false, false, false, 52), 'label');
        yield "
            </label>
            <div class=\"mt-1\">
                ";
        // line 55
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), "maxPlayer", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "input-field"]]);
        yield "
            </div>
        </div>

        <div>
            <label for=\"players\" class=\"block text-sm font-medium text-gray-700\">
                ";
        // line 61
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), "players", [], "any", false, false, false, 61), 'label');
        yield "
            </label>
            <div class=\"mt-1\">
                ";
        // line 64
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "players", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "input-field"]]);
        yield "
            </div>
        </div>
    </div>

    <div class=\"mt-6\">
        <button class=\"bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600\">
            ";
        // line 71
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 71, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "
        </button>
    </div>

    ";
        // line 75
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), 'form_end');
        yield "
</div>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "groupe_jdr/_form.html.twig";
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
        return array (  172 => 75,  165 => 71,  155 => 64,  149 => 61,  140 => 55,  134 => 52,  125 => 46,  119 => 43,  110 => 37,  104 => 34,  95 => 28,  89 => 25,  80 => 19,  74 => 16,  65 => 10,  59 => 7,  52 => 3,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<div class=\"container mx-auto p-6 bg-gray-100 rounded-lg shadow-lg mt-20\">
    <h1 class=\"text-2xl font-bold mb-4 text-gray-800\">Create or Edit JDR Group</h1>
    {{ form_start(form, {'attr': {'class': 'space-y-6'}}) }}
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-6\">
        <div>
            <label for=\"title\" class=\"block text-sm font-medium text-gray-700\">
                {{ form_label(form.title) }}
            </label>
            <div class=\"mt-1\">
                {{ form_widget(form.title, {'attr': {'class': 'input-field'}}) }}
            </div>
        </div>

        <div>
            <label for=\"description\" class=\"block text-sm font-medium text-gray-700\">
                {{ form_label(form.description) }}
            </label>
            <div class=\"mt-1\">
                {{ form_widget(form.description, {'attr': {'class': 'input-field'}}) }}
            </div>
        </div>

        <div>
            <label for=\"picture\" class=\"block text-sm font-medium text-gray-700\">
                {{ form_label(form.picture) }}
            </label>
            <div class=\"mt-1\">
                {{ form_widget(form.picture, {'attr': {'class': 'input-field'}}) }}
            </div>
        </div>

        <div>
            <label for=\"created_at\" class=\"block text-sm font-medium text-gray-700\">
                {{ form_label(form.created_at) }}
            </label>
            <div class=\"mt-1\">
                {{ form_widget(form.created_at, {'attr': {'class': 'input-field'}}) }}
            </div>
        </div>

        <div>
            <label for=\"edit_at\" class=\"block text-sm font-medium text-gray-700\">
                {{ form_label(form.edit_at) }}
            </label>
            <div class=\"mt-1\">
                {{ form_widget(form.edit_at, {'attr': {'class': 'input-field'}}) }}
            </div>
        </div>

        <div>
            <label for=\"maxPlayer\" class=\"block text-sm font-medium text-gray-700\">
                {{ form_label(form.maxPlayer) }}
            </label>
            <div class=\"mt-1\">
                {{ form_widget(form.maxPlayer, {'attr': {'class': 'input-field'}}) }}
            </div>
        </div>

        <div>
            <label for=\"players\" class=\"block text-sm font-medium text-gray-700\">
                {{ form_label(form.players) }}
            </label>
            <div class=\"mt-1\">
                {{ form_widget(form.players, {'attr': {'class': 'input-field'}}) }}
            </div>
        </div>
    </div>

    <div class=\"mt-6\">
        <button class=\"bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600\">
            {{ button_label|default('Save') }}
        </button>
    </div>

    {{ form_end(form) }}
</div>
", "groupe_jdr/_form.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\groupe_jdr\\_form.html.twig");
    }
}
