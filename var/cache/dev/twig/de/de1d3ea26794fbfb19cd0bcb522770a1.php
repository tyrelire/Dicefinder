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
class __TwigTemplate_0d6651bda9e01f65d9619c628d651642 extends Template
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
        yield "<link href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/register.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
<div class=\"min-h-screen flex justify-center px-4 sm:px-6 lg:px-8 mt-6 sm:mt-20\">
    <div class=\"max-w-md w-full space-y-8\">
        <div>
            <img class=\"mx-auto h-24 w-auto mb-3 hidden sm:block\" src=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-dicefinder.png"), "html", null, true);
        yield "\" alt=\"DiceFinder Logo\">
            <h2 class=\"mt-6 text-center text-2xl tracking-tight text-white font-bold\">Créez un compte.</h2>
            <p class=\"mt-1 text-center text-sm text-gray-600\">
                ou
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        yield "\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Connectez-vous.</a>
            </p>
        </div>
        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 17, $this->source); })()), 'errors');
        yield "
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 18, $this->source); })()), "flashes", ["emailsent"], "method", false, false, false, 18));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 19
            yield "            <div class=\"bg-green-600 text-dark p-4 rounded mb-6\">
                ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        yield "        <div class=\"p-7\">
            ";
        // line 24
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["class" => "space-y-6"]]);
        yield "
            ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "flashes", ["verify_email_error"], "method", false, false, false, 25));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_error"]) {
            // line 26
            yield "                <div class=\"alert alert-danger text-red-500\" role=\"alert\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["flash_error"], "html", null, true);
            yield "</div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['flash_error'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        yield "            <div>
                <div class=\"flex items-center space-x-1\">
                    ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "block text-base "], "label" => "Nom d'utilisateur"]);
        yield "
                    <span class=\"text-rose-500\">*</span>
                </div>
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 33, $this->source); })()), "username", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-600 bg-gray-800 px-4 py-2 placeholder-gray-400 text-gray-200 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                <p class=\"text-red-500 text-xs italic mt-2\">
                    ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 35, $this->source); })()), "username", [], "any", false, false, false, 35), 'errors');
        yield "
                </p>
            </div>
                <div>
                    <label class=\"block text-base text-gray-200\">Date de naissance (Facultatif)</label>
                    <div class=\"mt-1 grid grid-cols-3 gap-2\">
                        <input type=\"number\" id=\"day\" name=\"day\" min=\"1\" max=\"31\" placeholder=\"Jour\" maxlength=\"2\"
                            oninput=\"if(this.value.length > 2) this.value = this.value.slice(0, 2)\" onchange=\"updateBirthdate()\" 
                            class=\"w-full rounded-md border border-gray-600 bg-gray-800 px-4 py-2 text-gray-200 placeholder-gray-500 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                        
                        <select id=\"month\" name=\"month\" onchange=\"updateBirthdate()\" 
                                class=\"w-full rounded-md border border-gray-600 bg-gray-800 px-4 py-2 text-gray-200 placeholder-gray-500 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                            <option value=\"\">Mois</option>
                            <option value=\"1\">Janvier</option>
                            <option value=\"2\">Février</option>
                            <option value=\"3\">Mars</option>
                            <option value=\"4\">Avril</option>
                            <option value=\"5\">Mai</option>
                            <option value=\"6\">Juin</option>
                            <option value=\"7\">Juillet</option>
                            <option value=\"8\">Août</option>
                            <option value=\"9\">Septembre</option>
                            <option value=\"10\">Octobre</option>
                            <option value=\"11\">Novembre</option>
                            <option value=\"12\">Décembre</option>
                        </select>
                        
                        <input type=\"number\" id=\"year\" name=\"year\" min=\"1920\" max=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield "\" placeholder=\"Année\" maxlength=\"4\"
                            oninput=\"if(this.value.length > 4) this.value = this.value.slice(0, 4)\" onchange=\"updateBirthdate()\" 
                            class=\"w-full rounded-md border border-gray-600 bg-gray-800 px-4 py-2 text-gray-200 placeholder-gray-500 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                    </div>
                    <input type=\"hidden\" id=\"birthdate\" name=\"birthdate\">
                </div>
            <div>
                <div class=\"flex items-center space-x-1\">
                    ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 70, $this->source); })()), "email", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "block text-base  text-gray-200"], "label" => "Adresse e-mail"]);
        yield "
                    <span class=\"text-rose-500\">*</span>
                </div>
                <div class=\"mt-1\">
                    ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 74, $this->source); })()), "email", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-600 bg-gray-800 px-4 py-2 placeholder-gray-400 text-gray-200 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                    <p class=\"text-red-500 text-xs italic mt-2\">
                        ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 76, $this->source); })()), "email", [], "any", false, false, false, 76), 'errors');
        yield "
                    </p>
                </div>
            </div>
            <div>
                <div class=\"flex items-center space-x-1\">
                    ";
        // line 82
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 82, $this->source); })()), "password", [], "any", false, false, false, 82), "first", [], "any", false, false, false, 82), 'label', ["label_attr" => ["class" => "block text-base  text-dark"], "label" => "Mot de passe"]);
        yield "
                    <span class=\"text-rose-500\">*</span>
                </div>
                <div class=\"mt-1\">
                    ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 86, $this->source); })()), "password", [], "any", false, false, false, 86), "first", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-600 bg-gray-800 px-4 py-2 placeholder-gray-400 text-gray-200 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                    <p class=\"text-red-500 text-xs italic mt-2\">
                        ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 88, $this->source); })()), "password", [], "any", false, false, false, 88), "first", [], "any", false, false, false, 88), 'errors');
        yield "
                    </p>
                </div>
            </div>
            <div>
                <div class=\"flex items-center space-x-1\">
                    ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 94, $this->source); })()), "password", [], "any", false, false, false, 94), "second", [], "any", false, false, false, 94), 'label', ["label_attr" => ["class" => "block text-base  text-dark"], "label" => "Confirmer le mot de passe"]);
        yield "
                    <span class=\"text-rose-500\">*</span>
                </div>
                <div class=\"mt-1\">
                    ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 98, $this->source); })()), "password", [], "any", false, false, false, 98), "second", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "block w-full appearance-none rounded-md border border-gray-600 bg-gray-800 px-4 py-2 placeholder-gray-400 text-gray-200 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm"]]);
        yield "
                    ";
        // line 99
        if ($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 99, $this->source); })()), "password", [], "any", false, false, false, 99), "second", [], "any", false, false, false, 99), 'errors')) {
            // line 100
            yield "                        <p class=\"text-red-500 text-xs italic mt-2\">
                            ";
            // line 101
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 101, $this->source); })()), "password", [], "any", false, false, false, 101), "second", [], "any", false, false, false, 101), 'errors');
            yield "
                        </p>
                    ";
        }
        // line 104
        yield "                </div>
            </div>
            <div class=\"flex items-center justify-between\">
                <div class=\"flex items-center\">
                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 108, $this->source); })()), "agreeTerms", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"]]);
        yield "
                    ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 109, $this->source); })()), "agreeTerms", [], "any", false, false, false, 109), 'label', ["label_attr" => ["class" => "ml-2 block text-sm text-dark"]]);
        yield "
                </div>
            </div>
            <div>
                <button type=\"submit\" class=\"flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-lg  text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\">
                    Créer un compte
                </button>
            </div>
            ";
        // line 117
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["registrationForm"]) || array_key_exists("registrationForm", $context) ? $context["registrationForm"] : (function () { throw new RuntimeError('Variable "registrationForm" does not exist.', 117, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>
<script>
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    const day = document.getElementById('day').value;
    const month = document.getElementById('month').value;
    const year = document.getElementById('year').value;

    if (!month) {
        event.preventDefault();
        alert(\"Veuillez sélectionner un mois pour compléter votre date de naissance.\");

        const monthSelect = document.getElementById('month');
        monthSelect.classList.add(\"border-red-500\");
        monthSelect.classList.remove(\"border-gray-600\");
    }
});

function updateBirthdate() {
    const day = document.getElementById('day').value.padStart(2, '0');
    const month = document.getElementById('month').value.padStart(2, '0');
    const year = document.getElementById('year').value;
    const birthdateField = document.getElementById('birthdate');

    if (day && month && year) {
        birthdateField.value = `\${year}-\${month}-\${day}`;
    } else {
        birthdateField.value = '';
    }
}
</script>
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
        return array (  302 => 117,  291 => 109,  287 => 108,  281 => 104,  275 => 101,  272 => 100,  270 => 99,  266 => 98,  259 => 94,  250 => 88,  245 => 86,  238 => 82,  229 => 76,  224 => 74,  217 => 70,  206 => 62,  176 => 35,  171 => 33,  165 => 30,  161 => 28,  152 => 26,  148 => 25,  144 => 24,  141 => 23,  132 => 20,  129 => 19,  125 => 18,  121 => 17,  115 => 14,  108 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DiceFinder | Création de compte{% endblock %}

{% block body %}
<link href=\"{{ asset('css/register.css') }}\" rel=\"stylesheet\">
<div class=\"min-h-screen flex justify-center px-4 sm:px-6 lg:px-8 mt-6 sm:mt-20\">
    <div class=\"max-w-md w-full space-y-8\">
        <div>
            <img class=\"mx-auto h-24 w-auto mb-3 hidden sm:block\" src=\"{{ asset('images/logo-dicefinder.png') }}\" alt=\"DiceFinder Logo\">
            <h2 class=\"mt-6 text-center text-2xl tracking-tight text-white font-bold\">Créez un compte.</h2>
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
        <div class=\"p-7\">
            {{ form_start(registrationForm, {'attr': {'class': 'space-y-6'}}) }}
            {% for flash_error in app.flashes('verify_email_error') %}
                <div class=\"alert alert-danger text-red-500\" role=\"alert\">{{ flash_error }}</div>
            {% endfor %}
            <div>
                <div class=\"flex items-center space-x-1\">
                    {{ form_label(registrationForm.username, 'Nom d\\'utilisateur', {'label_attr': {'class': 'block text-base '}}) }}
                    <span class=\"text-rose-500\">*</span>
                </div>
                {{ form_widget(registrationForm.username, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-600 bg-gray-800 px-4 py-2 placeholder-gray-400 text-gray-200 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm'}}) }}
                <p class=\"text-red-500 text-xs italic mt-2\">
                    {{ form_errors(registrationForm.username) }}
                </p>
            </div>
                <div>
                    <label class=\"block text-base text-gray-200\">Date de naissance (Facultatif)</label>
                    <div class=\"mt-1 grid grid-cols-3 gap-2\">
                        <input type=\"number\" id=\"day\" name=\"day\" min=\"1\" max=\"31\" placeholder=\"Jour\" maxlength=\"2\"
                            oninput=\"if(this.value.length > 2) this.value = this.value.slice(0, 2)\" onchange=\"updateBirthdate()\" 
                            class=\"w-full rounded-md border border-gray-600 bg-gray-800 px-4 py-2 text-gray-200 placeholder-gray-500 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                        
                        <select id=\"month\" name=\"month\" onchange=\"updateBirthdate()\" 
                                class=\"w-full rounded-md border border-gray-600 bg-gray-800 px-4 py-2 text-gray-200 placeholder-gray-500 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                            <option value=\"\">Mois</option>
                            <option value=\"1\">Janvier</option>
                            <option value=\"2\">Février</option>
                            <option value=\"3\">Mars</option>
                            <option value=\"4\">Avril</option>
                            <option value=\"5\">Mai</option>
                            <option value=\"6\">Juin</option>
                            <option value=\"7\">Juillet</option>
                            <option value=\"8\">Août</option>
                            <option value=\"9\">Septembre</option>
                            <option value=\"10\">Octobre</option>
                            <option value=\"11\">Novembre</option>
                            <option value=\"12\">Décembre</option>
                        </select>
                        
                        <input type=\"number\" id=\"year\" name=\"year\" min=\"1920\" max=\"{{ \"now\"|date(\"Y\") }}\" placeholder=\"Année\" maxlength=\"4\"
                            oninput=\"if(this.value.length > 4) this.value = this.value.slice(0, 4)\" onchange=\"updateBirthdate()\" 
                            class=\"w-full rounded-md border border-gray-600 bg-gray-800 px-4 py-2 text-gray-200 placeholder-gray-500 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500\">
                    </div>
                    <input type=\"hidden\" id=\"birthdate\" name=\"birthdate\">
                </div>
            <div>
                <div class=\"flex items-center space-x-1\">
                    {{ form_label(registrationForm.email, 'Adresse e-mail', {'label_attr': {'class': 'block text-base  text-gray-200'}}) }}
                    <span class=\"text-rose-500\">*</span>
                </div>
                <div class=\"mt-1\">
                    {{ form_widget(registrationForm.email, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-600 bg-gray-800 px-4 py-2 placeholder-gray-400 text-gray-200 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm'}}) }}
                    <p class=\"text-red-500 text-xs italic mt-2\">
                        {{ form_errors(registrationForm.email) }}
                    </p>
                </div>
            </div>
            <div>
                <div class=\"flex items-center space-x-1\">
                    {{ form_label(registrationForm.password.first, 'Mot de passe', {'label_attr': {'class': 'block text-base  text-dark'}}) }}
                    <span class=\"text-rose-500\">*</span>
                </div>
                <div class=\"mt-1\">
                    {{ form_widget(registrationForm.password.first, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-600 bg-gray-800 px-4 py-2 placeholder-gray-400 text-gray-200 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm'}}) }}
                    <p class=\"text-red-500 text-xs italic mt-2\">
                        {{ form_errors(registrationForm.password.first) }}
                    </p>
                </div>
            </div>
            <div>
                <div class=\"flex items-center space-x-1\">
                    {{ form_label(registrationForm.password.second, 'Confirmer le mot de passe', {'label_attr': {'class': 'block text-base  text-dark'}}) }}
                    <span class=\"text-rose-500\">*</span>
                </div>
                <div class=\"mt-1\">
                    {{ form_widget(registrationForm.password.second, {'attr': {'class': 'block w-full appearance-none rounded-md border border-gray-600 bg-gray-800 px-4 py-2 placeholder-gray-400 text-gray-200 shadow-md focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 sm:text-sm'}}) }}
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
                <button type=\"submit\" class=\"flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-lg  text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\">
                    Créer un compte
                </button>
            </div>
            {{ form_end(registrationForm) }}
        </div>
    </div>
</div>
<script>
document.getElementById('registrationForm').addEventListener('submit', function(event) {
    const day = document.getElementById('day').value;
    const month = document.getElementById('month').value;
    const year = document.getElementById('year').value;

    if (!month) {
        event.preventDefault();
        alert(\"Veuillez sélectionner un mois pour compléter votre date de naissance.\");

        const monthSelect = document.getElementById('month');
        monthSelect.classList.add(\"border-red-500\");
        monthSelect.classList.remove(\"border-gray-600\");
    }
});

function updateBirthdate() {
    const day = document.getElementById('day').value.padStart(2, '0');
    const month = document.getElementById('month').value.padStart(2, '0');
    const year = document.getElementById('year').value;
    const birthdateField = document.getElementById('birthdate');

    if (day && month && year) {
        birthdateField.value = `\${year}-\${month}-\${day}`;
    } else {
        birthdateField.value = '';
    }
}
</script>
{% endblock %}
", "registration/register.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\registration\\register.html.twig");
    }
}
