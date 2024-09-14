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

/* profile/edit.html.twig */
class __TwigTemplate_5e9569918a04a83c1f8c8c4d1f7fa764 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/edit.html.twig", 1);
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
        yield "<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

<div class=\"container mx-auto px-4 py-8\">

    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 11, $this->source); })()), "flashes", ["success"], "method", false, false, false, 11));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 12
            yield "        <div class=\"alert-message bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6\" role=\"alert\">
            ";
            // line 13
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        yield "
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 17, $this->source); })()), "flashes", ["error"], "method", false, false, false, 17));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 18
            yield "        <div class=\"alert-message bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6\" role=\"alert\">
            ";
            // line 19
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        yield "
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
        <div class=\"bg-white p-6 rounded-lg shadow-lg w-full\">
            <h2 class=\"text-2xl font-bold text-center mb-6\">Modifier Profil</h2>

            ";
        // line 27
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start');
        yield "
            <div class=\"mb-4\">
                ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "username", [], "any", false, false, false, 29), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Nom d'utilisateur"]);
        yield "
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "username", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "bg-gray-200 text-gray-500 text-sm rounded-lg w-full p-2.5", "readonly" => true]]);
        // line 35
        yield "
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "username", [], "any", false, false, false, 36), 'errors');
        yield "
            </div>
            <div class=\"mb-4\">
                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "firstName", [], "any", false, false, false, 39), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Prénom"]);
        yield "
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "firstName", [], "any", false, false, false, 40), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5"]]);
        yield "
                ";
        // line 41
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "firstName", [], "any", false, false, false, 41), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "lastName", [], "any", false, false, false, 45), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Nom"]);
        yield "
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "lastName", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5"]]);
        yield "
                ";
        // line 47
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), "lastName", [], "any", false, false, false, 47), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "email", [], "any", false, false, false, 51), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Adresse email"]);
        yield "
                <div class=\"relative mt-1 rounded-md shadow-sm\">
                    <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                        <svg class=\"h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                            <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\" />
                            <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\" />
                        </svg>
                    </div>
                    ";
        // line 59
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "email", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full pl-10 p-2.5", "placeholder" => "you@example.com"]]);
        // line 64
        yield "
                </div>
                ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "email", [], "any", false, false, false, 66), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "phoneNumber", [], "any", false, false, false, 70), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Numéro de téléphone"]);
        yield "
                <div class=\"relative mt-1 rounded-md shadow-sm\">
                    <div class=\"absolute inset-y-0 left-0 flex items-center\">
                        <select id=\"country\" name=\"country\" autocomplete=\"country\" class=\"h-full rounded-md border-transparent bg-transparent py-0 pl-3 pr-7 text-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm\">
                            <option value=\"EU\">EU</option>
                        </select>
                    </div>
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "phoneNumber", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full pl-20 p-2.5", "placeholder" => "+33 1 23 4 5 67"]]);
        // line 82
        yield "
                </div>
                ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "phoneNumber", [], "any", false, false, false, 84), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "birthDate", [], "any", false, false, false, 88), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Date de naissance"]);
        yield "
                ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "birthDate", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5"]]);
        yield "
                ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "birthDate", [], "any", false, false, false, 90), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "gender", [], "any", false, false, false, 94), 'row', ["label" => "Genre", "attr" => ["class" => "flex items-center space-x-4"]]);
        // line 97
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "bio", [], "any", false, false, false, 101), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Biographie"]);
        yield "
                ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "bio", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5"]]);
        yield "
                ";
        // line 103
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "bio", [], "any", false, false, false, 103), 'errors');
        yield "
            </div>

            <div class=\"flex justify-end\">
                <button type=\"submit\" class=\"bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-700\">
                    Mettre à jour
                </button>
            </div>
            ";
        // line 111
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), 'form_end');
        yield "
        </div>
        <div class=\"flex flex-col space-y-8\">
            <div class=\"bg-white p-6 rounded-lg shadow-lg w-full h-full\">
                <h2 class=\"text-2xl font-bold text-center mb-6\">Changer le mot de passe</h2>
                ";
        // line 116
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 116, $this->source); })()), 'form_start');
        yield "
                <div class=\"mb-4\">
                    ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 118, $this->source); })()), "current_password", [], "any", false, false, false, 118), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Mot de passe actuel"]);
        yield "
                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 119, $this->source); })()), "current_password", [], "any", false, false, false, 119), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 w-full p-2.5"]]);
        yield "
                    ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 120, $this->source); })()), "current_password", [], "any", false, false, false, 120), 'errors');
        yield "
                </div>

                <div class=\"mb-4\">
                    ";
        // line 124
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 124, $this->source); })()), "new_password", [], "any", false, false, false, 124), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Nouveau mot de passe"]);
        yield "
                    ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 125, $this->source); })()), "new_password", [], "any", false, false, false, 125), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 w-full p-2.5"]]);
        yield "
                    ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 126, $this->source); })()), "new_password", [], "any", false, false, false, 126), 'errors');
        yield "
                </div>

                <div class=\"mb-4\">
                    ";
        // line 130
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 130, $this->source); })()), "confirm_password", [], "any", false, false, false, 130), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Confirmer le nouveau mot de passe"]);
        yield "
                    ";
        // line 131
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 131, $this->source); })()), "confirm_password", [], "any", false, false, false, 131), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 w-full p-2.5"]]);
        yield "
                    ";
        // line 132
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 132, $this->source); })()), "confirm_password", [], "any", false, false, false, 132), 'errors');
        yield "
                </div>
                <div class=\"flex justify-end\">
                    <button type=\"submit\" class=\"bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-700\">
                        Mettre à jour le mot de passe
                    </button>
                </div>
                ";
        // line 139
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 139, $this->source); })()), 'form_end');
        yield "
            </div>
            <div class=\"bg-white p-6 rounded-lg shadow-lg w-full h-full\">
                <h2 class=\"text-2xl font-bold text-center mb-6\">Modifier l'avatar</h2>
                ";
        // line 143
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 143, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
                
                <div class=\"flex items-center justify-center mb-6\">
                    <div class=\"flex flex-col items-center mr-6\">
                        ";
        // line 147
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 147, $this->source); })()), "user", [], "any", false, false, false, 147), "avatar", [], "any", false, false, false, 147)) {
            // line 148
            yield "                            <img class=\"w-40 h-40 rounded-full ring-4 ring-indigo-300 object-cover\"
                                src=\"";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 149, $this->source); })()), "user", [], "any", false, false, false, 149), "avatar", [], "any", false, false, false, 149))), "html", null, true);
            yield "\" alt=\"Photo de profil\">
                            <button type=\"submit\" name=\"delete_avatar\" value=\"1\" class=\"text-red-600 text-xs mt-2 underline hover:text-red-800\">
                                Supprimer la photo
                            </button>
                        ";
        } else {
            // line 154
            yield "                            <img class=\"w-40 h-40 rounded-full ring-4 ring-indigo-300 object-cover\"
                                src=\"";
            // line 155
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Photo de profil par défaut\">
                        ";
        }
        // line 157
        yield "                    </div>
                    <div class=\"ml-6\">
                        ";
        // line 159
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 159, $this->source); })()), "avatar", [], "any", false, false, false, 159), 'widget', ["attr" => ["class" => "hidden"]]);
        yield "
                        ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 160, $this->source); })()), "avatar", [], "any", false, false, false, 160), 'errors');
        yield "
                        <label for=\"";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 161, $this->source); })()), "avatar", [], "any", false, false, false, 161), "vars", [], "any", false, false, false, 161), "id", [], "any", false, false, false, 161), "html", null, true);
        yield "\" class=\"cursor-pointer bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 inline-flex items-center\">
                            <svg class=\"w-5 h-5 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5\" />
                            </svg>
                            Choisir une photo
                        </label>
                        <p class=\"text-xs text-gray-500 mt-2\">JPG, GIF or PNG. 1MB max.</p>
                    </div>
                </div>
                <div class=\"flex justify-end mt-6\">
                    <button type=\"submit\" class=\"bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-700\">
                        Mettre à jour l'avatar
                    </button>
                </div>
                ";
        // line 175
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 175, $this->source); })()), 'form_end');
        yield "
            </div>
        </div>
    </div>
</div>

<script>
    setTimeout(function() {
        document.querySelectorAll('.alert-message').forEach(function(element) {
            element.style.transition = 'opacity 0.5s';
            element.style.opacity = 0;
            setTimeout(function() {
                element.remove();
            }, 500);
        });
    }, 5000);
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
        return "profile/edit.html.twig";
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
        return array (  413 => 175,  396 => 161,  392 => 160,  388 => 159,  384 => 157,  379 => 155,  376 => 154,  368 => 149,  365 => 148,  363 => 147,  356 => 143,  349 => 139,  339 => 132,  335 => 131,  331 => 130,  324 => 126,  320 => 125,  316 => 124,  309 => 120,  305 => 119,  301 => 118,  296 => 116,  288 => 111,  277 => 103,  273 => 102,  269 => 101,  263 => 97,  261 => 94,  254 => 90,  250 => 89,  246 => 88,  239 => 84,  235 => 82,  233 => 77,  223 => 70,  216 => 66,  212 => 64,  210 => 59,  199 => 51,  192 => 47,  188 => 46,  184 => 45,  177 => 41,  173 => 40,  169 => 39,  163 => 36,  160 => 35,  158 => 30,  154 => 29,  149 => 27,  142 => 22,  133 => 19,  130 => 18,  126 => 17,  123 => 16,  114 => 13,  111 => 12,  107 => 11,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Profil{% endblock %}

{% block body %}
<link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
<link href=\"https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">

<div class=\"container mx-auto px-4 py-8\">

    {% for message in app.flashes('success') %}
        <div class=\"alert-message bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}

    {% for message in app.flashes('error') %}
        <div class=\"alert-message bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6\" role=\"alert\">
            {{ message }}
        </div>
    {% endfor %}

    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
        <div class=\"bg-white p-6 rounded-lg shadow-lg w-full\">
            <h2 class=\"text-2xl font-bold text-center mb-6\">Modifier Profil</h2>

            {{ form_start(form) }}
            <div class=\"mb-4\">
                {{ form_label(form.username, 'Nom d\\'utilisateur', {'label_attr': {'class': 'block text-gray-700 mb-1'}}) }}
                {{ form_widget(form.username, {
                    'attr': {
                        'class': 'bg-gray-200 text-gray-500 text-sm rounded-lg w-full p-2.5',
                        'readonly': true
                    }
                }) }}
                {{ form_errors(form.username) }}
            </div>
            <div class=\"mb-4\">
                {{ form_label(form.firstName, 'Prénom', {'label_attr': {'class': 'block text-gray-700 mb-1'}}) }}
                {{ form_widget(form.firstName, {'attr': {'class': 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5'}}) }}
                {{ form_errors(form.firstName) }}
            </div>

            <div class=\"mb-4\">
                {{ form_label(form.lastName, 'Nom', {'label_attr': {'class': 'block text-gray-700 mb-1'}}) }}
                {{ form_widget(form.lastName, {'attr': {'class': 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5'}}) }}
                {{ form_errors(form.lastName) }}
            </div>

            <div class=\"mb-4\">
                {{ form_label(form.email, 'Adresse email', {'label_attr': {'class': 'block text-gray-700 mb-1'}}) }}
                <div class=\"relative mt-1 rounded-md shadow-sm\">
                    <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                        <svg class=\"h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                            <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\" />
                            <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\" />
                        </svg>
                    </div>
                    {{ form_widget(form.email, {
                        'attr': {
                            'class': 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full pl-10 p-2.5',
                            'placeholder': 'you@example.com'
                        }
                    }) }}
                </div>
                {{ form_errors(form.email) }}
            </div>

            <div class=\"mb-4\">
                {{ form_label(form.phoneNumber, 'Numéro de téléphone', {'label_attr': {'class': 'block text-gray-700 mb-1'}}) }}
                <div class=\"relative mt-1 rounded-md shadow-sm\">
                    <div class=\"absolute inset-y-0 left-0 flex items-center\">
                        <select id=\"country\" name=\"country\" autocomplete=\"country\" class=\"h-full rounded-md border-transparent bg-transparent py-0 pl-3 pr-7 text-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm\">
                            <option value=\"EU\">EU</option>
                        </select>
                    </div>
                    {{ form_widget(form.phoneNumber, {
                        'attr': {
                            'class': 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full pl-20 p-2.5', 
                            'placeholder': '+33 1 23 4 5 67'
                        }
                    }) }}
                </div>
                {{ form_errors(form.phoneNumber) }}
            </div>

            <div class=\"mb-4\">
                {{ form_label(form.birthDate, 'Date de naissance', {'label_attr': {'class': 'block text-gray-700 mb-1'}}) }}
                {{ form_widget(form.birthDate, {'attr': {'class': 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5'}}) }}
                {{ form_errors(form.birthDate) }}
            </div>

            <div class=\"mb-4\">
                {{ form_row(form.gender, {
                    'label': 'Genre',
                    'attr': {'class': 'flex items-center space-x-4'}
                }) }}
            </div>

            <div class=\"mb-4\">
                {{ form_label(form.bio, 'Biographie', {'label_attr': {'class': 'block text-gray-700 mb-1'}}) }}
                {{ form_widget(form.bio, {'attr': {'class': 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5'}}) }}
                {{ form_errors(form.bio) }}
            </div>

            <div class=\"flex justify-end\">
                <button type=\"submit\" class=\"bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-700\">
                    Mettre à jour
                </button>
            </div>
            {{ form_end(form) }}
        </div>
        <div class=\"flex flex-col space-y-8\">
            <div class=\"bg-white p-6 rounded-lg shadow-lg w-full h-full\">
                <h2 class=\"text-2xl font-bold text-center mb-6\">Changer le mot de passe</h2>
                {{ form_start(passwordForm) }}
                <div class=\"mb-4\">
                    {{ form_label(passwordForm.current_password, 'Mot de passe actuel', {'label_attr': {'class': 'block text-gray-700 mb-1'}}) }}
                    {{ form_widget(passwordForm.current_password, {'attr': {'class': 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 w-full p-2.5'}}) }}
                    {{ form_errors(passwordForm.current_password) }}
                </div>

                <div class=\"mb-4\">
                    {{ form_label(passwordForm.new_password, 'Nouveau mot de passe', {'label_attr': {'class': 'block text-gray-700 mb-1'}}) }}
                    {{ form_widget(passwordForm.new_password, {'attr': {'class': 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 w-full p-2.5'}}) }}
                    {{ form_errors(passwordForm.new_password) }}
                </div>

                <div class=\"mb-4\">
                    {{ form_label(passwordForm.confirm_password, 'Confirmer le nouveau mot de passe', {'label_attr': {'class': 'block text-gray-700 mb-1'}}) }}
                    {{ form_widget(passwordForm.confirm_password, {'attr': {'class': 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 w-full p-2.5'}}) }}
                    {{ form_errors(passwordForm.confirm_password) }}
                </div>
                <div class=\"flex justify-end\">
                    <button type=\"submit\" class=\"bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-700\">
                        Mettre à jour le mot de passe
                    </button>
                </div>
                {{ form_end(passwordForm) }}
            </div>
            <div class=\"bg-white p-6 rounded-lg shadow-lg w-full h-full\">
                <h2 class=\"text-2xl font-bold text-center mb-6\">Modifier l'avatar</h2>
                {{ form_start(avatarForm, {'attr': {'enctype': 'multipart/form-data'}}) }}
                
                <div class=\"flex items-center justify-center mb-6\">
                    <div class=\"flex flex-col items-center mr-6\">
                        {% if app.user.avatar %}
                            <img class=\"w-40 h-40 rounded-full ring-4 ring-indigo-300 object-cover\"
                                src=\"{{ asset('uploads/avatars/' ~ app.user.avatar) }}\" alt=\"Photo de profil\">
                            <button type=\"submit\" name=\"delete_avatar\" value=\"1\" class=\"text-red-600 text-xs mt-2 underline hover:text-red-800\">
                                Supprimer la photo
                            </button>
                        {% else %}
                            <img class=\"w-40 h-40 rounded-full ring-4 ring-indigo-300 object-cover\"
                                src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Photo de profil par défaut\">
                        {% endif %}
                    </div>
                    <div class=\"ml-6\">
                        {{ form_widget(avatarForm.avatar, {'attr': {'class': 'hidden'}}) }}
                        {{ form_errors(avatarForm.avatar) }}
                        <label for=\"{{ avatarForm.avatar.vars.id }}\" class=\"cursor-pointer bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 inline-flex items-center\">
                            <svg class=\"w-5 h-5 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5\" />
                            </svg>
                            Choisir une photo
                        </label>
                        <p class=\"text-xs text-gray-500 mt-2\">JPG, GIF or PNG. 1MB max.</p>
                    </div>
                </div>
                <div class=\"flex justify-end mt-6\">
                    <button type=\"submit\" class=\"bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-700\">
                        Mettre à jour l'avatar
                    </button>
                </div>
                {{ form_end(avatarForm) }}
            </div>
        </div>
    </div>
</div>

<script>
    setTimeout(function() {
        document.querySelectorAll('.alert-message').forEach(function(element) {
            element.style.transition = 'opacity 0.5s';
            element.style.opacity = 0;
            setTimeout(function() {
                element.remove();
            }, 500);
        });
    }, 5000);
</script>

{% endblock %}
", "profile/edit.html.twig", "C:\\Users\\benja\\Desktop\\app\\dicefinder\\templates\\profile\\edit.html.twig");
    }
}
