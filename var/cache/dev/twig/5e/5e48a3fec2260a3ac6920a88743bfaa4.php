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

/* security/login.html.twig */
class __TwigTemplate_9a9f9bb32bf59bda12a2c8b62c23df43 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "security/login.html.twig"));

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
        yield "<script src=\"https://cdn.tailwindcss.com\"></script>
<div class=\"min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8\">
    <div class=\"w-full max-w-md space-y-8\">
        <div>
            <img class=\"mx-auto h-12 w-auto\" src=\"https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600\" alt=\"Your Company\">
            <h2 class=\"mt-6 text-center text-3xl font-bold tracking-tight text-gray-900\">Connectez-vous à votre compte</h2>
            <p class=\"mt-2 text-center text-sm text-gray-600\">
                ou
                <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_register");
        yield "\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Créez un compte.</a>
            </p>
        </div>
        <form class=\"mt-8 space-y-6\" method=\"post\">
            ";
        // line 18
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 18, $this->source); })())) {
            // line 19
            yield "                <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
                    ";
            // line 20
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })()), "messageKey", [], "any", false, false, false, 20), CoreExtension::getAttribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 20, $this->source); })()), "messageData", [], "any", false, false, false, 20), "security"), "html", null, true);
            yield "
                </div>
            ";
        }
        // line 23
        yield "        ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 23, $this->source); })()), "user", [], "any", false, false, false, 23)) {
            // line 24
            yield "            <div class=\"mb-3 text-sm text-gray-600\">
                You are logged in as ";
            // line 25
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 25, $this->source); })()), "user", [], "any", false, false, false, 25), "userIdentifier", [], "any", false, false, false, 25), "html", null, true);
            yield ", <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Logout</a>
            </div>
        ";
        }
        // line 28
        yield "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        yield "\">
        <div class=\"-space-y-px rounded-md shadow-sm\">
            <div>
                <label for=\"username\" class=\"sr-only\">Adresse e-mail</label>
                <input id=\"username\" name=\"_username\" type=\"email\" value=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new RuntimeError('Variable "last_username" does not exist.', 32, $this->source); })()), "html", null, true);
        yield "\" autocomplete=\"email\" required autofocus class=\"relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm\" placeholder=\"toi@exemple.com\">
            </div>
            <div>
                <label for=\"password\" class=\"sr-only\">Mot de passe</label>
                <input id=\"password\" name=\"_password\" type=\"password\" autocomplete=\"current-password\" required class=\"relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm\" placeholder=\"Mot de passe\">
            </div>
        </div>
        <div class=\"flex items-center justify-between\">
            <div class=\"flex items-center\">
                <input id=\"remember-me\" name=\"_remember_me\" type=\"checkbox\" class=\"h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500\">
                <label for=\"remember-me\" class=\"ml-2 block text-sm text-gray-900\">Se souvenir de moi</label>
            </div>
            <div class=\"text-sm\">
                <a href=\"#\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Mot de passe oublié?</a>
            </div>
        </div>
        <div>
            <button type=\"submit\" class=\"group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\">
                <span class=\"absolute inset-y-0 left-0 flex items-center pl-3\">
                    <svg class=\"h-5 w-5 text-indigo-500 group-hover:text-indigo-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                        <path fill-rule=\"evenodd\" d=\"M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z\" clip-rule=\"evenodd\" />
                    </svg>
                </span>
                Connexion
            </button>
        </div>
        </form>
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
        return "security/login.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  154 => 32,  146 => 28,  138 => 25,  135 => 24,  132 => 23,  126 => 20,  123 => 19,  121 => 18,  114 => 14,  104 => 6,  91 => 5,  69 => 3,  58 => 5,  55 => 4,  53 => 3,  50 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% extends 'base.html.twig' %} #}

{% block title %}{% endblock %}

{% block body %}
<script src=\"https://cdn.tailwindcss.com\"></script>
<div class=\"min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8\">
    <div class=\"w-full max-w-md space-y-8\">
        <div>
            <img class=\"mx-auto h-12 w-auto\" src=\"https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600\" alt=\"Your Company\">
            <h2 class=\"mt-6 text-center text-3xl font-bold tracking-tight text-gray-900\">Connectez-vous à votre compte</h2>
            <p class=\"mt-2 text-center text-sm text-gray-600\">
                ou
                <a href=\"{{ path('app_register') }}\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Créez un compte.</a>
            </p>
        </div>
        <form class=\"mt-8 space-y-6\" method=\"post\">
            {% if error %}
                <div class=\"bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative\" role=\"alert\">
                    {{ error.messageKey|trans(error.messageData, 'security') }}
                </div>
            {% endif %}
        {% if app.user %}
            <div class=\"mb-3 text-sm text-gray-600\">
                You are logged in as {{ app.user.userIdentifier }}, <a href=\"{{ path('app_logout') }}\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Logout</a>
            </div>
        {% endif %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\">
        <div class=\"-space-y-px rounded-md shadow-sm\">
            <div>
                <label for=\"username\" class=\"sr-only\">Adresse e-mail</label>
                <input id=\"username\" name=\"_username\" type=\"email\" value=\"{{ last_username }}\" autocomplete=\"email\" required autofocus class=\"relative block w-full appearance-none rounded-none rounded-t-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm\" placeholder=\"toi@exemple.com\">
            </div>
            <div>
                <label for=\"password\" class=\"sr-only\">Mot de passe</label>
                <input id=\"password\" name=\"_password\" type=\"password\" autocomplete=\"current-password\" required class=\"relative block w-full appearance-none rounded-none rounded-b-md border border-gray-300 px-3 py-2 text-gray-900 placeholder-gray-500 focus:z-10 focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm\" placeholder=\"Mot de passe\">
            </div>
        </div>
        <div class=\"flex items-center justify-between\">
            <div class=\"flex items-center\">
                <input id=\"remember-me\" name=\"_remember_me\" type=\"checkbox\" class=\"h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500\">
                <label for=\"remember-me\" class=\"ml-2 block text-sm text-gray-900\">Se souvenir de moi</label>
            </div>
            <div class=\"text-sm\">
                <a href=\"#\" class=\"font-medium text-indigo-600 hover:text-indigo-500\">Mot de passe oublié?</a>
            </div>
        </div>
        <div>
            <button type=\"submit\" class=\"group relative flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\">
                <span class=\"absolute inset-y-0 left-0 flex items-center pl-3\">
                    <svg class=\"h-5 w-5 text-indigo-500 group-hover:text-indigo-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                        <path fill-rule=\"evenodd\" d=\"M10 1a4.5 4.5 0 00-4.5 4.5V9H5a2 2 0 00-2 2v6a2 2 0 002 2h10a2 2 0 002-2v-6a2 2 0 00-2-2h-.5V5.5A4.5 4.5 0 0010 1zm3 8V5.5a3 3 0 10-6 0V9h6z\" clip-rule=\"evenodd\" />
                    </svg>
                </span>
                Connexion
            </button>
        </div>
        </form>
    </div>
</div>
{% endblock %}
", "security/login.html.twig", "C:\\Users\\benja\\Desktop\\app\\dicefinder\\templates\\security\\login.html.twig");
    }
}
