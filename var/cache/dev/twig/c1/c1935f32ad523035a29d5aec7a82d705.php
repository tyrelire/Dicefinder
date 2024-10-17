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
        yield "<div class=\"container mx-auto px-4 py-8\">
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
        <div class=\"bg-gray-800 border-2 border-[#363672] p-6 rounded-lg shadow-lg w-full hover:shadow-2xl\">
            <h2 class=\"text-3xl font-bold text-center mb-6 text-white transition-colors duration-300 hover:text-indigo-700\">Modification du Compte</h2>
            ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start');
        yield "
            <h3 class=\"text-2xl font-semibold text-indigo-500 mb-4 transition-colors duration-300 hover:text-indigo-600\">Informations personnelles</h3>
            <div class=\"space-y-6\">
                <div class=\"mb-6\">
                    ";
        // line 14
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "username", [], "any", false, false, false, 14), 'label', ["label_attr" => ["class" => "block text-white font-medium mb-2"], "label" => "Nom d'utilisateur"]);
        yield "
                    ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), 'widget', ["attr" => ["class" => "bg-gray-200 text-gray-500 text-base rounded-lg w-full p-3 cursor-not-allowed transition-all duration-300 hover:border-indigo-400", "readonly" => true]]);
        // line 20
        yield "
                    ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "username", [], "any", false, false, false, 21), 'errors');
        yield "
                </div>

                <div class=\"mb-6\">
                    ";
        // line 25
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "firstName", [], "any", false, false, false, 25), 'label', ["label_attr" => ["class" => "block text-white font-medium mb-2"], "label" => "Prénom"]);
        yield "
                    ";
        // line 26
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "firstName", [], "any", false, false, false, 26), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400"]]);
        yield "
                    ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "firstName", [], "any", false, false, false, 27), 'errors');
        yield "
                </div>

                <div class=\"mb-6\">
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "lastName", [], "any", false, false, false, 31), 'label', ["label_attr" => ["class" => "block text-white font-medium mb-2"], "label" => "Nom"]);
        yield "
                    ";
        // line 32
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "lastName", [], "any", false, false, false, 32), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400"]]);
        yield "
                    ";
        // line 33
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "lastName", [], "any", false, false, false, 33), 'errors');
        yield "
                </div>

                <div class=\"mb-6\">
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "email", [], "any", false, false, false, 37), 'label', ["label_attr" => ["class" => "block text-white font-medium mb-2"], "label" => "Adresse email"]);
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "email", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full pl-10 p-3 transition-all duration-300 hover:border-indigo-400", "placeholder" => "you@example.com"]]);
        // line 50
        yield "
                    </div>
                    ";
        // line 52
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "email", [], "any", false, false, false, 52), 'errors');
        yield "
                </div>

                <div class=\"mb-6\">
                    ";
        // line 56
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "phoneNumber", [], "any", false, false, false, 56), 'label', ["label_attr" => ["class" => "block text-white font-medium mb-2"], "label" => "Numéro de téléphone"]);
        yield "
                    <div class=\"relative mt-1 rounded-md shadow-sm\">
                        <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                            <svg class=\"w-5 h-5 text-gray-400\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 19 18\">
                                <path d=\"M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z\"/>
                            </svg>
                        </div>
                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "phoneNumber", [], "any", false, false, false, 63), 'widget', ["attr" => ["id" => "phoneNumber", "class" => "bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full pl-10 p-3 transition-all duration-300 hover:border-indigo-400", "placeholder" => "06 12 34 56 78", "oninput" => "formatPhoneNumber(this)", "maxlength" => "14"]]);
        // line 71
        yield "
                    </div>
                    ";
        // line 73
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "phoneNumber", [], "any", false, false, false, 73), 'errors');
        yield "
                </div>

                <div class=\"mb-6\">
                    ";
        // line 77
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "birthDate", [], "any", false, false, false, 77), 'label', ["label_attr" => ["class" => "block text-white font-medium mb-2"], "label" => "Date de naissance"]);
        yield "
                    ";
        // line 78
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "birthDate", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400"]]);
        yield "
                    ";
        // line 79
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()), "birthDate", [], "any", false, false, false, 79), 'errors');
        yield "
                </div>

                <div class=\"mb-6\">
                    ";
        // line 83
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "gender", [], "any", false, false, false, 83), 'label', ["label_attr" => ["class" => "block text-white font-medium mb-2"], "label" => "Genre"]);
        yield "
                    ";
        // line 84
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "gender", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "flex items-center space-x-4 text-white font-medium"]]);
        // line 87
        yield "
                    ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "birthDate", [], "any", false, false, false, 88), 'errors');
        yield "

                </div>
            </div>

            <div class=\"flex justify-end mt-8\">
                <button type=\"submit\" class=\"bg-indigo-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-indigo-700 transition-transform duration-300 transform hover:-translate-y-1 hover:shadow-lg\">
                    Mettre à jour
                </button>
            </div>
            ";
        // line 98
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), 'form_end');
        yield "
        </div>
        
        <div class=\"bg-gray-800 border-2 border-[#363672] p-6 rounded-lg shadow-lg w-full hover:shadow-2xl\">
            <h2 class=\"text-3xl font-bold text-center mb-6 text-white transition-colors duration-300 hover:text-indigo-700\">Modification du Profil</h2>
            ";
        // line 103
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 103, $this->source); })()), 'form_start');
        yield "
            <h3 class=\"text-2xl font-semibold text-indigo-500 mb-4 transition-colors duration-300 hover:text-indigo-600\">Réseaux Sociaux</h3>
            <div class=\"space-y-6\">
                <div class=\"mb-6\">
                    ";
        // line 107
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 107, $this->source); })()), "discordPseudo", [], "any", false, false, false, 107), 'label', ["label_attr" => ["class" => "block text-white font-medium mb-2"], "label" => "Pseudo Discord"]);
        yield "
                    ";
        // line 108
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 108, $this->source); })()), "discordPseudo", [], "any", false, false, false, 108), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400", "oninput" => "validateDiscordPseudo(this)"]]);
        yield "
                    ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 109, $this->source); })()), "discordPseudo", [], "any", false, false, false, 109), 'errors');
        yield "
                </div>

                <div class=\"mb-6\">
                    ";
        // line 113
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 113, $this->source); })()), "TwitterPseudo", [], "any", false, false, false, 113), 'label', ["label_attr" => ["class" => "block text-white font-medium mb-2"], "label" => "Pseudo Twitter"]);
        yield "
                    ";
        // line 114
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 114, $this->source); })()), "TwitterPseudo", [], "any", false, false, false, 114), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400", "oninput" => "validateTwitterPseudo(this)"]]);
        yield "
                    ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 115, $this->source); })()), "TwitterPseudo", [], "any", false, false, false, 115), 'errors');
        yield "
                </div>

                <div class=\"mb-6\">
                    ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 119, $this->source); })()), "YoutubeChannelLink", [], "any", false, false, false, 119), 'label', ["label_attr" => ["class" => "block text-white font-medium mb-2"], "label" => "Lien de chaîne YouTube"]);
        yield "
                    ";
        // line 120
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 120, $this->source); })()), "YoutubeChannelLink", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400", "oninput" => "validateYouTubeLink(this)"]]);
        yield "
                    ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 121, $this->source); })()), "YoutubeChannelLink", [], "any", false, false, false, 121), 'errors');
        yield "
                </div>

                <div class=\"mb-6\">
                    ";
        // line 125
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 125, $this->source); })()), "TwitchChannelLink", [], "any", false, false, false, 125), 'label', ["label_attr" => ["class" => "block text-white font-medium mb-2"], "label" => "Lien de chaîne Twitch"]);
        yield "
                    ";
        // line 126
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 126, $this->source); })()), "TwitchChannelLink", [], "any", false, false, false, 126), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400", "oninput" => "validateTwitchLink(this)"]]);
        yield "
                    ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 127, $this->source); })()), "TwitchChannelLink", [], "any", false, false, false, 127), 'errors');
        yield "
                </div>
            </div>

            <h3 class=\"text-2xl font-semibold text-indigo-500 mt-8 mb-4 transition-colors duration-300 hover:text-indigo-600\">Compétences</h3>
            <div class=\"space-y-6\">
                <div class=\"mb-6\">
                    ";
        // line 134
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 134, $this->source); })()), "competence", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400", "rows" => "4", "placeholder" => "Écrivez la description ici...", "maxlength" => "255", "oninput" => "updateCharCountComp(this)"]]);
        yield "
                    <div id=\"charCountComp\" class=\"text-gray-400 text-sm mt-1\"></div>
                    ";
        // line 136
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 136, $this->source); })()), "competence", [], "any", false, false, false, 136), 'errors');
        yield "
                </div>
            </div>

            <h3 class=\"text-2xl font-semibold text-indigo-500 mt-8 mb-4 transition-colors duration-300 hover:text-indigo-600\">Biographie</h3>
            <div class=\"space-y-6\">
                <div class=\"mb-6\">
                    ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 143, $this->source); })()), "bio", [], "any", false, false, false, 143), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400", "rows" => "4", "placeholder" => "Écrivez la description ici...", "maxlength" => "255", "oninput" => "updateCharCountBio(this)"]]);
        yield "
                    <div id=\"charCountBio\" class=\"text-gray-400 text-sm mt-1\"></div>
                    ";
        // line 145
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 145, $this->source); })()), "bio", [], "any", false, false, false, 145), 'errors');
        yield "
                </div>
            </div>
            <div class=\"flex justify-end mt-8\">
                <button type=\"submit\" class=\"bg-indigo-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-indigo-700 transition-transform duration-300 transform hover:-translate-y-1 hover:shadow-lg\">
                    Mettre à jour
                </button>
            </div>
            ";
        // line 153
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["socialMediaAndCompetenceForm"]) || array_key_exists("socialMediaAndCompetenceForm", $context) ? $context["socialMediaAndCompetenceForm"] : (function () { throw new RuntimeError('Variable "socialMediaAndCompetenceForm" does not exist.', 153, $this->source); })()), 'form_end');
        yield "
        </div>

        <div class=\"bg-gray-800 border-2 border-[#363672] p-6 rounded-lg shadow-lg w-full\">
            <h2 class=\"text-3xl font-bold text-center mb-6 text-white transition-colors duration-300 hover:text-indigo-700\">Changer le mot de passe</h2>
            ";
        // line 158
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 158, $this->source); })()), 'form_start');
        yield "
            <div class=\"space-y-4\">
                <div class=\"mb-4\">
                    ";
        // line 161
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 161, $this->source); })()), "current_password", [], "any", false, false, false, 161), 'label', ["label_attr" => ["class" => "block text-white mb-1"], "label" => "Mot de passe actuel"]);
        yield "
                    ";
        // line 162
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 162, $this->source); })()), "current_password", [], "any", false, false, false, 162), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400"]]);
        yield "
                    ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 163, $this->source); })()), "current_password", [], "any", false, false, false, 163), 'errors');
        yield "
                </div>

                <div class=\"mb-4\">
                    ";
        // line 167
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 167, $this->source); })()), "new_password", [], "any", false, false, false, 167), 'label', ["label_attr" => ["class" => "block text-white mb-1"], "label" => "Nouveau mot de passe"]);
        yield "
                    ";
        // line 168
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 168, $this->source); })()), "new_password", [], "any", false, false, false, 168), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400"]]);
        yield "
                    ";
        // line 169
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 169, $this->source); })()), "new_password", [], "any", false, false, false, 169), 'errors');
        yield "
                </div>

                <div class=\"mb-4\">
                    ";
        // line 173
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 173, $this->source); })()), "confirm_password", [], "any", false, false, false, 173), 'label', ["label_attr" => ["class" => "block text-white mb-1"], "label" => "Confirmer le nouveau mot de passe"]);
        yield "
                    ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 174, $this->source); })()), "confirm_password", [], "any", false, false, false, 174), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400"]]);
        yield "
                    ";
        // line 175
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 175, $this->source); })()), "confirm_password", [], "any", false, false, false, 175), 'errors');
        yield "
                </div>
            </div>

            <div class=\"flex justify-end mt-6\">
                <button type=\"submit\" class=\"bg-red-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-indigo-700 transition-transform duration-300 transform hover:-translate-y-1 hover:shadow-lg\">
                    Mettre à jour le mot de passe
                </button>
            </div>
            ";
        // line 184
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["passwordForm"]) || array_key_exists("passwordForm", $context) ? $context["passwordForm"] : (function () { throw new RuntimeError('Variable "passwordForm" does not exist.', 184, $this->source); })()), 'form_end');
        yield "
        </div>

        <div class=\"bg-gray-800 border-2 border-[#363672] p-6 rounded-lg shadow-lg w-full\">
            <h2 class=\"text-3xl font-bold text-center mb-6 text-white transition-colors duration-300 hover:text-indigo-700\">Modifier l'avatar</h2>
            ";
        // line 189
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 189, $this->source); })()), 'form_start', ["attr" => ["enctype" => "multipart/form-data"]]);
        yield "
            <div class=\"flex items-center justify-center mb-6\">
                <div class=\"flex flex-col items-center mr-6 pt-10\">
                    <img id=\"avatarPreview\" class=\"w-40 h-40 rounded-full ring-4 ring-indigo-300 object-cover transition-transform duration-300 hover:scale-110\"
                        src=\"";
        // line 193
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "user", [], "any", false, false, false, 193), "avatar", [], "any", false, false, false, 193)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 193, $this->source); })()), "user", [], "any", false, false, false, 193), "avatar", [], "any", false, false, false, 193)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"))), "html", null, true);
        yield "\"
                        alt=\"Photo de profil\">
                    ";
        // line 195
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 195, $this->source); })()), "user", [], "any", false, false, false, 195), "avatar", [], "any", false, false, false, 195)) {
            // line 196
            yield "                        <button type=\"submit\" name=\"delete_avatar\" value=\"1\" class=\"text-red-600 text-xs mt-2 underline hover:text-red-800\">
                            Supprimer la photo
                        </button>
                    ";
        }
        // line 200
        yield "                </div>
                <div class=\"ml-6\">
                    ";
        // line 202
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 202, $this->source); })()), "avatar", [], "any", false, false, false, 202), 'widget', ["attr" => ["class" => "hidden", "onchange" => "previewAvatar(this)"]]);
        yield "
                    ";
        // line 203
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 203, $this->source); })()), "avatar", [], "any", false, false, false, 203), 'errors');
        yield "
                    <label for=\"";
        // line 204
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 204, $this->source); })()), "avatar", [], "any", false, false, false, 204), "vars", [], "any", false, false, false, 204), "id", [], "any", false, false, false, 204), "html", null, true);
        yield "\" class=\"cursor-pointer bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 inline-flex items-center transition-transform duration-300 transform hover:-translate-y-1\">
                        <svg class=\"w-5 h-5 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5\" />
                        </svg>
                        Choisir une photo
                    </label>
                    <p class=\"text-xs text-gray-500 mt-2\">JPG, GIF ou PNG. 1MB max.</p>
                </div>
            </div>
            <div class=\"flex justify-end mt-6\">
                <button type=\"submit\" class=\"bg-indigo-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-indigo-700 transition-transform duration-300 transform hover:-translate-y-1 hover:shadow-lg\">
                    Mettre à jour l'avatar
                </button>
            </div>
            ";
        // line 218
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["avatarForm"]) || array_key_exists("avatarForm", $context) ? $context["avatarForm"] : (function () { throw new RuntimeError('Variable "avatarForm" does not exist.', 218, $this->source); })()), 'form_end');
        yield "
        </div>
    </div>
</div>

<script>
    function updateCharCountComp(textarea) {
        const maxChars = 255;
        const remainingChars = maxChars - textarea.value.length;
        document.getElementById('charCountComp').textContent = remainingChars + \" caractères restants\";
    }

    function updateCharCountBio(textarea) {
        const maxChars = 255;
        const remainingChars = maxChars - textarea.value.length;
        document.getElementById('charCountBio').textContent = remainingChars + \" caractères restants\";
    }

    function validateDiscordPseudo(input) {
        if (input.value !== \"\") {
            const regex = /^[a-zA-Z0-9._-]{3,32}\$/;
            if (!regex.test(input.value)) {
                input.setCustomValidity('Veuillez entrer un pseudo Discord valide (3 à 32 caractères, lettres, chiffres, \".\" , \"-\" et \"_\" sont autorisés)');
            } else {
                input.setCustomValidity('');
            }
        } else {
            input.setCustomValidity('');
        }
    }

    function validateTwitterPseudo(input) {
        if (input.value.trim() !== \"\") {
            const regex = /^@?(\\w){1,15}\$/;
            if (!regex.test(input.value.trim())) {
                input.setCustomValidity('Veuillez entrer un pseudo Twitter valide, exemple: @username');
            } else {
                input.setCustomValidity('');
            }
        } else {
            input.setCustomValidity('');
        }
    }

    function validateYouTubeLink(input) {
        if (input.value !== \"\") {
            const regex = /^(https?\\:\\/\\/)?(www\\.)?(youtube\\.com|youtu\\.?be)\\/.+\$/;
            if (!regex.test(input.value)) {
                input.setCustomValidity('Veuillez entrer un lien YouTube valide');
            } else {
                input.setCustomValidity('');
            }
        } else {
            input.setCustomValidity('');
        }
    }

    function validateTwitchLink(input) {
        if (input.value !== \"\") {
            const regex = /^(https?:\\/\\/)?(www\\.)?twitch\\.tv\\/[a-zA-Z0-9_]+\$/;
            if (!regex.test(input.value)) {
                input.setCustomValidity('Veuillez entrer un lien Twitch valide');
            } else {
                input.setCustomValidity('');
            }
        } else {
            input.setCustomValidity('');
        }
}

    function previewAvatar(input) {
        var preview = document.getElementById('avatarPreview');
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = \"";
        // line 300
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
        yield "\";
        }
    }

    function formatPhoneNumber(input) {
        let phone = input.value.replace(/\\D/g, '');

        if (phone.length > 2) {
            phone = phone.replace(/(\\d{2})(\\d{2})(\\d{2})(\\d{2})(\\d{2})\$/, '\$1 \$2 \$3 \$4 \$5');
        } else if (phone.length > 4) {
            phone = phone.replace(/(\\d{2})(\\d{2})(\\d{2})(\\d{2})\$/, '\$1 \$2 \$3 \$4');
        } else if (phone.length > 6) {
            phone = phone.replace(/(\\d{2})(\\d{2})(\\d{2})\$/, '\$1 \$2 \$3');
        } else if (phone.length > 8) {
            phone = phone.replace(/(\\d{2})(\\d{2})\$/, '\$1 \$2');
        }

        input.value = phone;
    }

    document.addEventListener(\"DOMContentLoaded\", function() {
        const competenceField = document.querySelector('[name=\"socialMediaAndCompetenceForm[competence]\"]');
        const bioField = document.querySelector('[name=\"socialMediaAndCompetenceForm[bio]\"]');

        if (competenceField) {
            updateCharCountComp(competenceField);
            competenceField.addEventListener('input', function() {
                updateCharCountComp(competenceField);
            });
        }

        if (bioField) {
            updateCharCountBio(bioField);
            bioField.addEventListener('input', function() {
                updateCharCountBio(bioField);
            });
        }
    });
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
        return array (  558 => 300,  473 => 218,  456 => 204,  452 => 203,  448 => 202,  444 => 200,  438 => 196,  436 => 195,  431 => 193,  424 => 189,  416 => 184,  404 => 175,  400 => 174,  396 => 173,  389 => 169,  385 => 168,  381 => 167,  374 => 163,  370 => 162,  366 => 161,  360 => 158,  352 => 153,  341 => 145,  336 => 143,  326 => 136,  321 => 134,  311 => 127,  307 => 126,  303 => 125,  296 => 121,  292 => 120,  288 => 119,  281 => 115,  277 => 114,  273 => 113,  266 => 109,  262 => 108,  258 => 107,  251 => 103,  243 => 98,  230 => 88,  227 => 87,  225 => 84,  221 => 83,  214 => 79,  210 => 78,  206 => 77,  199 => 73,  195 => 71,  193 => 63,  183 => 56,  176 => 52,  172 => 50,  170 => 45,  159 => 37,  152 => 33,  148 => 32,  144 => 31,  137 => 27,  133 => 26,  129 => 25,  122 => 21,  119 => 20,  117 => 15,  113 => 14,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier Profil{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 py-8\">
    <div class=\"grid grid-cols-1 md:grid-cols-2 gap-8\">
        <div class=\"bg-gray-800 border-2 border-[#363672] p-6 rounded-lg shadow-lg w-full hover:shadow-2xl\">
            <h2 class=\"text-3xl font-bold text-center mb-6 text-white transition-colors duration-300 hover:text-indigo-700\">Modification du Compte</h2>
            {{ form_start(form) }}
            <h3 class=\"text-2xl font-semibold text-indigo-500 mb-4 transition-colors duration-300 hover:text-indigo-600\">Informations personnelles</h3>
            <div class=\"space-y-6\">
                <div class=\"mb-6\">
                    {{ form_label(form.username, 'Nom d\\'utilisateur', {'label_attr': {'class': 'block text-white font-medium mb-2'}}) }}
                    {{ form_widget(form.username, {
                        'attr': {
                            'class': 'bg-gray-200 text-gray-500 text-base rounded-lg w-full p-3 cursor-not-allowed transition-all duration-300 hover:border-indigo-400',
                            'readonly': true
                        }
                    }) }}
                    {{ form_errors(form.username) }}
                </div>

                <div class=\"mb-6\">
                    {{ form_label(form.firstName, 'Prénom', {'label_attr': {'class': 'block text-white font-medium mb-2'}}) }}
                    {{ form_widget(form.firstName, {'attr': {'class': 'bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400'}}) }}
                    {{ form_errors(form.firstName) }}
                </div>

                <div class=\"mb-6\">
                    {{ form_label(form.lastName, 'Nom', {'label_attr': {'class': 'block text-white font-medium mb-2'}}) }}
                    {{ form_widget(form.lastName, {'attr': {'class': 'bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400'}}) }}
                    {{ form_errors(form.lastName) }}
                </div>

                <div class=\"mb-6\">
                    {{ form_label(form.email, 'Adresse email', {'label_attr': {'class': 'block text-white font-medium mb-2'}}) }}
                    <div class=\"relative mt-1 rounded-md shadow-sm\">
                        <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                            <svg class=\"h-5 w-5 text-gray-400\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 20 20\" fill=\"currentColor\" aria-hidden=\"true\">
                                <path d=\"M3 4a2 2 0 00-2 2v1.161l8.441 4.221a1.25 1.25 0 001.118 0L19 7.162V6a2 2 0 00-2-2H3z\" />
                                <path d=\"M19 8.839l-7.77 3.885a2.75 2.75 0 01-2.46 0L1 8.839V14a2 2 0 002 2h14a2 2 0 002-2V8.839z\" />
                            </svg>
                        </div>
                        {{ form_widget(form.email, {
                            'attr': {
                                'class': 'bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full pl-10 p-3 transition-all duration-300 hover:border-indigo-400',
                                'placeholder': 'you@example.com'
                            }
                        }) }}
                    </div>
                    {{ form_errors(form.email) }}
                </div>

                <div class=\"mb-6\">
                    {{ form_label(form.phoneNumber, 'Numéro de téléphone', {'label_attr': {'class': 'block text-white font-medium mb-2'}}) }}
                    <div class=\"relative mt-1 rounded-md shadow-sm\">
                        <div class=\"absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none\">
                            <svg class=\"w-5 h-5 text-gray-400\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"currentColor\" viewBox=\"0 0 19 18\">
                                <path d=\"M18 13.446a3.02 3.02 0 0 0-.946-1.985l-1.4-1.4a3.054 3.054 0 0 0-4.218 0l-.7.7a.983.983 0 0 1-1.39 0l-2.1-2.1a.983.983 0 0 1 0-1.389l.7-.7a2.98 2.98 0 0 0 0-4.217l-1.4-1.4a2.824 2.824 0 0 0-4.218 0c-3.619 3.619-3 8.229 1.752 12.979C6.785 16.639 9.45 18 11.912 18a7.175 7.175 0 0 0 5.139-2.325A2.9 2.9 0 0 0 18 13.446Z\"/>
                            </svg>
                        </div>
                        {{ form_widget(form.phoneNumber, {
                            'attr': {
                                'id': 'phoneNumber',
                                'class': 'bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full pl-10 p-3 transition-all duration-300 hover:border-indigo-400',
                                'placeholder': '06 12 34 56 78',
                                'oninput': 'formatPhoneNumber(this)',
                                'maxlength': '14'
                            }
                        }) }}
                    </div>
                    {{ form_errors(form.phoneNumber) }}
                </div>

                <div class=\"mb-6\">
                    {{ form_label(form.birthDate, 'Date de naissance', {'label_attr': {'class': 'block text-white font-medium mb-2'}}) }}
                    {{ form_widget(form.birthDate, {'attr': {'class': 'bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400'}}) }}
                    {{ form_errors(form.birthDate) }}
                </div>

                <div class=\"mb-6\">
                    {{ form_label(form.gender, 'Genre', {'label_attr': {'class': 'block text-white font-medium mb-2'}}) }}
                    {{ form_widget(form.gender, {
                        'attr': {'class': 'flex items-center space-x-4 text-white font-medium'}
                        })
                    }}
                    {{ form_errors(form.birthDate) }}

                </div>
            </div>

            <div class=\"flex justify-end mt-8\">
                <button type=\"submit\" class=\"bg-indigo-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-indigo-700 transition-transform duration-300 transform hover:-translate-y-1 hover:shadow-lg\">
                    Mettre à jour
                </button>
            </div>
            {{ form_end(form) }}
        </div>
        
        <div class=\"bg-gray-800 border-2 border-[#363672] p-6 rounded-lg shadow-lg w-full hover:shadow-2xl\">
            <h2 class=\"text-3xl font-bold text-center mb-6 text-white transition-colors duration-300 hover:text-indigo-700\">Modification du Profil</h2>
            {{ form_start(socialMediaAndCompetenceForm) }}
            <h3 class=\"text-2xl font-semibold text-indigo-500 mb-4 transition-colors duration-300 hover:text-indigo-600\">Réseaux Sociaux</h3>
            <div class=\"space-y-6\">
                <div class=\"mb-6\">
                    {{ form_label(socialMediaAndCompetenceForm.discordPseudo, 'Pseudo Discord', {'label_attr': {'class': 'block text-white font-medium mb-2'}}) }}
                    {{ form_widget(socialMediaAndCompetenceForm.discordPseudo, {'attr': {'class': 'bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400', 'oninput': 'validateDiscordPseudo(this)' }}) }}
                    {{ form_errors(socialMediaAndCompetenceForm.discordPseudo) }}
                </div>

                <div class=\"mb-6\">
                    {{ form_label(socialMediaAndCompetenceForm.TwitterPseudo, 'Pseudo Twitter', {'label_attr': {'class': 'block text-white font-medium mb-2'}}) }}
                    {{ form_widget(socialMediaAndCompetenceForm.TwitterPseudo, {'attr': {'class': 'bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400', 'oninput': 'validateTwitterPseudo(this)' }}) }}
                    {{ form_errors(socialMediaAndCompetenceForm.TwitterPseudo) }}
                </div>

                <div class=\"mb-6\">
                    {{ form_label(socialMediaAndCompetenceForm.YoutubeChannelLink, 'Lien de chaîne YouTube', {'label_attr': {'class': 'block text-white font-medium mb-2'}}) }}
                    {{ form_widget(socialMediaAndCompetenceForm.YoutubeChannelLink, {'attr': {'class': 'bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400', 'oninput': 'validateYouTubeLink(this)' }}) }}
                    {{ form_errors(socialMediaAndCompetenceForm.YoutubeChannelLink) }}
                </div>

                <div class=\"mb-6\">
                    {{ form_label(socialMediaAndCompetenceForm.TwitchChannelLink, 'Lien de chaîne Twitch', {'label_attr': {'class': 'block text-white font-medium mb-2'}}) }}
                    {{ form_widget(socialMediaAndCompetenceForm.TwitchChannelLink, {'attr': {'class': 'bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400', 'oninput': 'validateTwitchLink(this)' }}) }}
                    {{ form_errors(socialMediaAndCompetenceForm.TwitchChannelLink) }}
                </div>
            </div>

            <h3 class=\"text-2xl font-semibold text-indigo-500 mt-8 mb-4 transition-colors duration-300 hover:text-indigo-600\">Compétences</h3>
            <div class=\"space-y-6\">
                <div class=\"mb-6\">
                    {{ form_widget(socialMediaAndCompetenceForm.competence, {'attr': {'class': 'bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400', 'rows': '4', 'placeholder': 'Écrivez la description ici...', 'maxlength': '255', 'oninput': 'updateCharCountComp(this)' }}) }}
                    <div id=\"charCountComp\" class=\"text-gray-400 text-sm mt-1\"></div>
                    {{ form_errors(socialMediaAndCompetenceForm.competence) }}
                </div>
            </div>

            <h3 class=\"text-2xl font-semibold text-indigo-500 mt-8 mb-4 transition-colors duration-300 hover:text-indigo-600\">Biographie</h3>
            <div class=\"space-y-6\">
                <div class=\"mb-6\">
                    {{ form_widget(socialMediaAndCompetenceForm.bio, {'attr': {'class': 'bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400', 'rows': '4', 'placeholder': 'Écrivez la description ici...', 'maxlength': '255', 'oninput': 'updateCharCountBio(this)' }}) }}
                    <div id=\"charCountBio\" class=\"text-gray-400 text-sm mt-1\"></div>
                    {{ form_errors(socialMediaAndCompetenceForm.bio) }}
                </div>
            </div>
            <div class=\"flex justify-end mt-8\">
                <button type=\"submit\" class=\"bg-indigo-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-indigo-700 transition-transform duration-300 transform hover:-translate-y-1 hover:shadow-lg\">
                    Mettre à jour
                </button>
            </div>
            {{ form_end(socialMediaAndCompetenceForm) }}
        </div>

        <div class=\"bg-gray-800 border-2 border-[#363672] p-6 rounded-lg shadow-lg w-full\">
            <h2 class=\"text-3xl font-bold text-center mb-6 text-white transition-colors duration-300 hover:text-indigo-700\">Changer le mot de passe</h2>
            {{ form_start(passwordForm) }}
            <div class=\"space-y-4\">
                <div class=\"mb-4\">
                    {{ form_label(passwordForm.current_password, 'Mot de passe actuel', {'label_attr': {'class': 'block text-white mb-1'}}) }}
                    {{ form_widget(passwordForm.current_password, {'attr': {'class': 'bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400'}}) }}
                    {{ form_errors(passwordForm.current_password) }}
                </div>

                <div class=\"mb-4\">
                    {{ form_label(passwordForm.new_password, 'Nouveau mot de passe', {'label_attr': {'class': 'block text-white mb-1'}}) }}
                    {{ form_widget(passwordForm.new_password, {'attr': {'class': 'bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400'}}) }}
                    {{ form_errors(passwordForm.new_password) }}
                </div>

                <div class=\"mb-4\">
                    {{ form_label(passwordForm.confirm_password, 'Confirmer le nouveau mot de passe', {'label_attr': {'class': 'block text-white mb-1'}}) }}
                    {{ form_widget(passwordForm.confirm_password, {'attr': {'class': 'bg-gray-100 border border-gray-300 text-gray-900 text-base rounded-lg focus:ring-indigo-500 focus:border-indigo-500 w-full p-3 transition-all duration-300 hover:border-indigo-400'}}) }}
                    {{ form_errors(passwordForm.confirm_password) }}
                </div>
            </div>

            <div class=\"flex justify-end mt-6\">
                <button type=\"submit\" class=\"bg-red-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-indigo-700 transition-transform duration-300 transform hover:-translate-y-1 hover:shadow-lg\">
                    Mettre à jour le mot de passe
                </button>
            </div>
            {{ form_end(passwordForm) }}
        </div>

        <div class=\"bg-gray-800 border-2 border-[#363672] p-6 rounded-lg shadow-lg w-full\">
            <h2 class=\"text-3xl font-bold text-center mb-6 text-white transition-colors duration-300 hover:text-indigo-700\">Modifier l'avatar</h2>
            {{ form_start(avatarForm, {'attr': {'enctype': 'multipart/form-data'}}) }}
            <div class=\"flex items-center justify-center mb-6\">
                <div class=\"flex flex-col items-center mr-6 pt-10\">
                    <img id=\"avatarPreview\" class=\"w-40 h-40 rounded-full ring-4 ring-indigo-300 object-cover transition-transform duration-300 hover:scale-110\"
                        src=\"{{ app.user.avatar ? asset('uploads/avatars/' ~ app.user.avatar) : asset('images/default-avatar.png') }}\"
                        alt=\"Photo de profil\">
                    {% if app.user.avatar %}
                        <button type=\"submit\" name=\"delete_avatar\" value=\"1\" class=\"text-red-600 text-xs mt-2 underline hover:text-red-800\">
                            Supprimer la photo
                        </button>
                    {% endif %}
                </div>
                <div class=\"ml-6\">
                    {{ form_widget(avatarForm.avatar, {'attr': {'class': 'hidden', 'onchange': 'previewAvatar(this)'}}) }}
                    {{ form_errors(avatarForm.avatar) }}
                    <label for=\"{{ avatarForm.avatar.vars.id }}\" class=\"cursor-pointer bg-indigo-600 text-white py-2 px-4 rounded-lg hover:bg-indigo-700 inline-flex items-center transition-transform duration-300 transform hover:-translate-y-1\">
                        <svg class=\"w-5 h-5 mr-2\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3 16.5v2.25A2.25 2.25 0 0 0 5.25 21h13.5A2.25 2.25 0 0 0 21 18.75V16.5m-13.5-9L12 3m0 0 4.5 4.5M12 3v13.5\" />
                        </svg>
                        Choisir une photo
                    </label>
                    <p class=\"text-xs text-gray-500 mt-2\">JPG, GIF ou PNG. 1MB max.</p>
                </div>
            </div>
            <div class=\"flex justify-end mt-6\">
                <button type=\"submit\" class=\"bg-indigo-600 text-white font-bold py-3 px-6 rounded-lg hover:bg-indigo-700 transition-transform duration-300 transform hover:-translate-y-1 hover:shadow-lg\">
                    Mettre à jour l'avatar
                </button>
            </div>
            {{ form_end(avatarForm) }}
        </div>
    </div>
</div>

<script>
    function updateCharCountComp(textarea) {
        const maxChars = 255;
        const remainingChars = maxChars - textarea.value.length;
        document.getElementById('charCountComp').textContent = remainingChars + \" caractères restants\";
    }

    function updateCharCountBio(textarea) {
        const maxChars = 255;
        const remainingChars = maxChars - textarea.value.length;
        document.getElementById('charCountBio').textContent = remainingChars + \" caractères restants\";
    }

    function validateDiscordPseudo(input) {
        if (input.value !== \"\") {
            const regex = /^[a-zA-Z0-9._-]{3,32}\$/;
            if (!regex.test(input.value)) {
                input.setCustomValidity('Veuillez entrer un pseudo Discord valide (3 à 32 caractères, lettres, chiffres, \".\" , \"-\" et \"_\" sont autorisés)');
            } else {
                input.setCustomValidity('');
            }
        } else {
            input.setCustomValidity('');
        }
    }

    function validateTwitterPseudo(input) {
        if (input.value.trim() !== \"\") {
            const regex = /^@?(\\w){1,15}\$/;
            if (!regex.test(input.value.trim())) {
                input.setCustomValidity('Veuillez entrer un pseudo Twitter valide, exemple: @username');
            } else {
                input.setCustomValidity('');
            }
        } else {
            input.setCustomValidity('');
        }
    }

    function validateYouTubeLink(input) {
        if (input.value !== \"\") {
            const regex = /^(https?\\:\\/\\/)?(www\\.)?(youtube\\.com|youtu\\.?be)\\/.+\$/;
            if (!regex.test(input.value)) {
                input.setCustomValidity('Veuillez entrer un lien YouTube valide');
            } else {
                input.setCustomValidity('');
            }
        } else {
            input.setCustomValidity('');
        }
    }

    function validateTwitchLink(input) {
        if (input.value !== \"\") {
            const regex = /^(https?:\\/\\/)?(www\\.)?twitch\\.tv\\/[a-zA-Z0-9_]+\$/;
            if (!regex.test(input.value)) {
                input.setCustomValidity('Veuillez entrer un lien Twitch valide');
            } else {
                input.setCustomValidity('');
            }
        } else {
            input.setCustomValidity('');
        }
}

    function previewAvatar(input) {
        var preview = document.getElementById('avatarPreview');
        var file = input.files[0];
        var reader = new FileReader();

        reader.onloadend = function() {
            preview.src = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);
        } else {
            preview.src = \"{{ asset('images/default-avatar.png') }}\";
        }
    }

    function formatPhoneNumber(input) {
        let phone = input.value.replace(/\\D/g, '');

        if (phone.length > 2) {
            phone = phone.replace(/(\\d{2})(\\d{2})(\\d{2})(\\d{2})(\\d{2})\$/, '\$1 \$2 \$3 \$4 \$5');
        } else if (phone.length > 4) {
            phone = phone.replace(/(\\d{2})(\\d{2})(\\d{2})(\\d{2})\$/, '\$1 \$2 \$3 \$4');
        } else if (phone.length > 6) {
            phone = phone.replace(/(\\d{2})(\\d{2})(\\d{2})\$/, '\$1 \$2 \$3');
        } else if (phone.length > 8) {
            phone = phone.replace(/(\\d{2})(\\d{2})\$/, '\$1 \$2');
        }

        input.value = phone;
    }

    document.addEventListener(\"DOMContentLoaded\", function() {
        const competenceField = document.querySelector('[name=\"socialMediaAndCompetenceForm[competence]\"]');
        const bioField = document.querySelector('[name=\"socialMediaAndCompetenceForm[bio]\"]');

        if (competenceField) {
            updateCharCountComp(competenceField);
            competenceField.addEventListener('input', function() {
                updateCharCountComp(competenceField);
            });
        }

        if (bioField) {
            updateCharCountBio(bioField);
            bioField.addEventListener('input', function() {
                updateCharCountBio(bioField);
            });
        }
    });
</script>
{% endblock %}
", "profile/edit.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\profile\\edit.html.twig");
    }
}
