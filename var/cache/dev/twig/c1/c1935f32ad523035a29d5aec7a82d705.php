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
        yield "
<div class=\"container mx-auto px-4 py-8 mt-20\">

    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 9, $this->source); })()), "flashes", ["success"], "method", false, false, false, 9));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 10
            yield "        <div class=\"alert-message bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6\" role=\"alert\">
            ";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        yield "
    ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 15, $this->source); })()), "flashes", ["error"], "method", false, false, false, 15));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 16
            yield "        <div class=\"alert-message bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6\" role=\"alert\">
            ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        yield "
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
        <div class=\"bg-white p-6 rounded-lg shadow-lg w-full\">
            <h2 class=\"text-2xl font-bold text-center mb-6\">Modifier Profil</h2>

            ";
        // line 25
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), 'form_start');
        yield "
            <div class=\"mb-4\">
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "username", [], "any", false, false, false, 27), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Nom d'utilisateur"]);
        yield "
                ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "username", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "bg-gray-200 text-gray-500 text-sm rounded-lg w-full p-2.5", "readonly" => true]]);
        // line 33
        yield "
                ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "username", [], "any", false, false, false, 34), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 38
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "firstName", [], "any", false, false, false, 38), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Prénom"]);
        yield "
                ";
        // line 39
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "firstName", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5"]]);
        yield "
                ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "firstName", [], "any", false, false, false, 40), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "lastName", [], "any", false, false, false, 44), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Nom"]);
        yield "
                ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "lastName", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5"]]);
        yield "
                ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "lastName", [], "any", false, false, false, 46), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "email", [], "any", false, false, false, 50), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Adresse email"]);
        yield "
                <div class=\"relative mt-1 rounded-md shadow-sm\">
                    <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                        <svg class=\"h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                            <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\" />
                            <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\" />
                        </svg>
                    </div>
                    ";
        // line 58
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "email", [], "any", false, false, false, 58), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full pl-10 p-2.5", "placeholder" => "you@example.com"]]);
        // line 63
        yield "
                </div>
                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "email", [], "any", false, false, false, 65), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "phoneNumber", [], "any", false, false, false, 69), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Numéro de téléphone"]);
        yield "
                <div class=\"relative mt-1 rounded-md shadow-sm\">
                    <div class=\"absolute inset-y-0 left-0 flex items-center\">
                        <select id=\"country\" name=\"country\" autocomplete=\"country\" class=\"h-full rounded-md border-transparent bg-transparent py-0 pl-3 pr-7 text-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm\">
                            <option value=\"EU\">EU</option>
                        </select>
                    </div>
                    ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "phoneNumber", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full pl-20 p-2.5", "placeholder" => "+33 1 23 4 5 67"]]);
        // line 81
        yield "
                </div>
                ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "phoneNumber", [], "any", false, false, false, 83), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "birthDate", [], "any", false, false, false, 87), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Date de naissance"]);
        yield "
                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "birthDate", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5"]]);
        yield "
                ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "birthDate", [], "any", false, false, false, 89), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 93
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "gender", [], "any", false, false, false, 93), 'row', ["label" => "Genre", "attr" => ["class" => "flex items-center space-x-4"]]);
        // line 96
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 100
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "bio", [], "any", false, false, false, 100), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Biographie"]);
        yield "
                ";
        // line 101
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "bio", [], "any", false, false, false, 101), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5"]]);
        yield "
                ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "bio", [], "any", false, false, false, 102), 'errors');
        yield "
            </div>

            <div class=\"flex justify-end\">
                <button type=\"submit\" class=\"bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-700\">
                    Mettre à jour
                </button>
            </div>
            ";
        // line 110
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), 'form_end');
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
        // line 144
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 144, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
                
                <div class=\"flex items-center justify-center mb-6\">
                    <div class=\"flex flex-col items-center mr-6\">
                        ";
        // line 148
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 148, $this->source); })()), "user", [], "any", false, false, false, 148), "avatar", [], "any", false, false, false, 148)) {
            // line 149
            yield "                            <img class=\"w-40 h-40 rounded-full ring-4 ring-indigo-300 object-cover\"
                                src=\"";
            // line 150
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 150, $this->source); })()), "user", [], "any", false, false, false, 150), "avatar", [], "any", false, false, false, 150))), "html", null, true);
            yield "\" alt=\"Photo de profil\">
                            <button type=\"submit\" name=\"delete_avatar\" value=\"1\" class=\"text-red-600 text-xs mt-2 underline hover:text-red-800\">
                                Supprimer la photo
                            </button>
                        ";
        } else {
            // line 155
            yield "                            <img class=\"w-40 h-40 rounded-full ring-4 ring-indigo-300 object-cover\"
                                src=\"";
            // line 156
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Photo de profil par défaut\">
                        ";
        }
        // line 158
        yield "                    </div>
                    <div class=\"ml-6\">
                        ";
        // line 160
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 160, $this->source); })()), "avatar", [], "any", false, false, false, 160), 'widget', ["attr" => ["class" => "hidden"]]);
        yield "
                        ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 161, $this->source); })()), "avatar", [], "any", false, false, false, 161), 'errors');
        yield "
                        <label for=\"";
        // line 162
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 162, $this->source); })()), "avatar", [], "any", false, false, false, 162), "vars", [], "any", false, false, false, 162), "id", [], "any", false, false, false, 162), "html", null, true);
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
        // line 176
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 176, $this->source); })()), 'form_end');
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
        return array (  414 => 176,  397 => 162,  393 => 161,  389 => 160,  385 => 158,  380 => 156,  377 => 155,  369 => 150,  366 => 149,  364 => 148,  357 => 144,  349 => 139,  339 => 132,  335 => 131,  331 => 130,  324 => 126,  320 => 125,  316 => 124,  309 => 120,  305 => 119,  301 => 118,  296 => 116,  287 => 110,  276 => 102,  272 => 101,  268 => 100,  262 => 96,  260 => 93,  253 => 89,  249 => 88,  245 => 87,  238 => 83,  234 => 81,  232 => 76,  222 => 69,  215 => 65,  211 => 63,  209 => 58,  198 => 50,  191 => 46,  187 => 45,  183 => 44,  176 => 40,  172 => 39,  168 => 38,  161 => 34,  158 => 33,  156 => 28,  152 => 27,  147 => 25,  140 => 20,  131 => 17,  128 => 16,  124 => 15,  121 => 14,  112 => 11,  109 => 10,  105 => 9,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Profil{% endblock %}

{% block body %}

<div class=\"container mx-auto px-4 py-8 mt-20\">

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
", "profile/edit.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\profile\\edit.html.twig");
    }
}
