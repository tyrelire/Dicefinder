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
<div class=\"container mx-auto px-4 py-8\">
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
        <div class=\"bg-white p-6 rounded-lg shadow-lg w-full\">
            <h2 class=\"text-2xl font-bold text-center mb-6\">Modifier Profil</h2>

            ";
        // line 12
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), 'form_start');
        yield "
            <div class=\"mb-4\">
                ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "username", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Nom d'utilisateur"]);
        yield "
                ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "bg-gray-200 text-gray-500 text-sm rounded-lg w-full p-2.5", "readonly" => true]]);
        // line 20
        yield "
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "username", [], "any", false, false, false, 21), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "firstName", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Prénom"]);
        yield "
                ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "firstName", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5"]]);
        yield "
                ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "firstName", [], "any", false, false, false, 27), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "lastName", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Nom"]);
        yield "
                ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "lastName", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5"]]);
        yield "
                ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "lastName", [], "any", false, false, false, 33), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Adresse email"]);
        yield "
                <div class=\"relative mt-1 rounded-md shadow-sm\">
                    <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                        <svg class=\"h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                            <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\" />
                            <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\" />
                        </svg>
                    </div>
                    ";
        // line 45
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full pl-10 p-2.5", "placeholder" => "you@example.com"]]);
        // line 50
        yield "
                </div>
                ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "phoneNumber", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Numéro de téléphone"]);
        yield "
                <div class=\"relative mt-1 rounded-md shadow-sm\">
                    <div class=\"absolute inset-y-0 left-0 flex items-center\">
                        <select id=\"country\" name=\"country\" autocomplete=\"country\" class=\"h-full rounded-md border-transparent bg-transparent py-0 pl-3 pr-7 text-gray-500 focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm\">
                            <option value=\"EU\">EU</option>
                        </select>
                    </div>
                    ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "phoneNumber", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full pl-20 p-2.5", "placeholder" => "+33 1 23 4 5 67"]]);
        // line 68
        yield "
                </div>
                ";
        // line 70
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 70, $this->source); })()), "phoneNumber", [], "any", false, false, false, 70), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "birthDate", [], "any", false, false, false, 74), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Date de naissance"]);
        yield "
                ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "birthDate", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5"]]);
        yield "
                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "birthDate", [], "any", false, false, false, 76), 'errors');
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "gender", [], "any", false, false, false, 80), 'row', ["label" => "Genre", "attr" => ["class" => "flex items-center space-x-4"]]);
        // line 83
        yield "
            </div>

            <div class=\"mb-4\">
                ";
        // line 87
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "bio", [], "any", false, false, false, 87), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Biographie"]);
        yield "
                ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "bio", [], "any", false, false, false, 88), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-2.5"]]);
        yield "
                ";
        // line 89
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "bio", [], "any", false, false, false, 89), 'errors');
        yield "
            </div>

            <div class=\"flex justify-end\">
                <button type=\"submit\" class=\"bg-indigo-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-indigo-700\">
                    Mettre à jour
                </button>
            </div>
            ";
        // line 97
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'form_end');
        yield "
        </div>
        
        <div class=\"flex flex-col space-y-8\">
            <div class=\"bg-white p-6 rounded-lg shadow-lg w-full h-full\">
                <h2 class=\"text-2xl font-bold text-center mb-6\">Changer le mot de passe</h2>
                ";
        // line 103
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 103, $this->source); })()), 'form_start');
        yield "
                <div class=\"mb-4\">
                    ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 105, $this->source); })()), "current_password", [], "any", false, false, false, 105), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Mot de passe actuel"]);
        yield "
                    ";
        // line 106
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 106, $this->source); })()), "current_password", [], "any", false, false, false, 106), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 w-full p-2.5"]]);
        yield "
                    ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 107, $this->source); })()), "current_password", [], "any", false, false, false, 107), 'errors');
        yield "
                </div>

                <div class=\"mb-4\">
                    ";
        // line 111
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 111, $this->source); })()), "new_password", [], "any", false, false, false, 111), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Nouveau mot de passe"]);
        yield "
                    ";
        // line 112
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 112, $this->source); })()), "new_password", [], "any", false, false, false, 112), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 w-full p-2.5"]]);
        yield "
                    ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 113, $this->source); })()), "new_password", [], "any", false, false, false, 113), 'errors');
        yield "
                </div>

                <div class=\"mb-4\">
                    ";
        // line 117
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 117, $this->source); })()), "confirm_password", [], "any", false, false, false, 117), 'label', ["label_attr" => ["class" => "block text-gray-700 mb-1"], "label" => "Confirmer le nouveau mot de passe"]);
        yield "
                    ";
        // line 118
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 118, $this->source); })()), "confirm_password", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-red-500 focus:border-red-500 w-full p-2.5"]]);
        yield "
                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 119, $this->source); })()), "confirm_password", [], "any", false, false, false, 119), 'errors');
        yield "
                </div>
                <div class=\"flex justify-end\">
                    <button type=\"submit\" class=\"bg-red-600 text-white font-bold py-2 px-4 rounded-lg hover:bg-red-700\">
                        Mettre à jour le mot de passe
                    </button>
                </div>
                ";
        // line 126
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 126, $this->source); })()), 'form_end');
        yield "
            </div>
            
            <div class=\"bg-white p-6 rounded-lg shadow-lg w-full h-full\">
                <h2 class=\"text-2xl font-bold text-center mb-6\">Modifier l'avatar</h2>
                ";
        // line 131
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 131, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
                
                <div class=\"flex items-center justify-center mb-6\">
                    <div class=\"flex flex-col items-center mr-6\">
                        ";
        // line 135
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 135, $this->source); })()), "user", [], "any", false, false, false, 135), "avatar", [], "any", false, false, false, 135)) {
            // line 136
            yield "                            <img class=\"w-40 h-40 rounded-full ring-4 ring-indigo-300 object-cover\"
                                src=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "user", [], "any", false, false, false, 137), "avatar", [], "any", false, false, false, 137))), "html", null, true);
            yield "\" alt=\"Photo de profil\">
                            <button type=\"submit\" name=\"delete_avatar\" value=\"1\" class=\"text-red-600 text-xs mt-2 underline hover:text-red-800\">
                                Supprimer la photo
                            </button>
                        ";
        } else {
            // line 142
            yield "                            <img class=\"w-40 h-40 rounded-full ring-4 ring-indigo-300 object-cover\"
                                src=\"";
            // line 143
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Photo de profil par défaut\">
                        ";
        }
        // line 145
        yield "                    </div>
                    <div class=\"ml-6\">
                        ";
        // line 147
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 147, $this->source); })()), "avatar", [], "any", false, false, false, 147), 'widget', ["attr" => ["class" => "hidden"]]);
        yield "
                        ";
        // line 148
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 148, $this->source); })()), "avatar", [], "any", false, false, false, 148), 'errors');
        yield "
                        <label for=\"";
        // line 149
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 149, $this->source); })()), "avatar", [], "any", false, false, false, 149), "vars", [], "any", false, false, false, 149), "id", [], "any", false, false, false, 149), "html", null, true);
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
        // line 163
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 163, $this->source); })()), 'form_end');
        yield "
            </div>
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
        return array (  375 => 163,  358 => 149,  354 => 148,  350 => 147,  346 => 145,  341 => 143,  338 => 142,  330 => 137,  327 => 136,  325 => 135,  318 => 131,  310 => 126,  300 => 119,  296 => 118,  292 => 117,  285 => 113,  281 => 112,  277 => 111,  270 => 107,  266 => 106,  262 => 105,  257 => 103,  248 => 97,  237 => 89,  233 => 88,  229 => 87,  223 => 83,  221 => 80,  214 => 76,  210 => 75,  206 => 74,  199 => 70,  195 => 68,  193 => 63,  183 => 56,  176 => 52,  172 => 50,  170 => 45,  159 => 37,  152 => 33,  148 => 32,  144 => 31,  137 => 27,  133 => 26,  129 => 25,  122 => 21,  119 => 20,  117 => 15,  113 => 14,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Profil{% endblock %}

{% block body %}

<div class=\"container mx-auto px-4 py-8\">
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

{% endblock %}
", "profile/edit.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\profile\\edit.html.twig");
    }
}
