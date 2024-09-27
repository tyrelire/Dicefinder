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
            'body' => [$this, 'block_body'],
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
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

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

        // line 2
        yield "<div class=\"container mx-auto p-4 sm:p-6 bg-gray-100 rounded-lg shadow-lg mt-6 sm:mt-20\">
    <h1 class=\"text-2xl font-bold mb-4 text-gray-800\">";
        // line 3
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3))) {
            yield "Édition d'un JDR";
        } else {
            yield "Création d'un JDR";
        }
        yield "</h1>

    ";
        // line 5
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5))) {
            // line 6
            yield "        ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 6, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "method" => "POST", "attr" => ["class" => "space-y-4", "id" => "jdr-form"]]);
            yield "
    ";
        } else {
            // line 8
            yield "        ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_new"), "method" => "POST", "attr" => ["class" => "space-y-4", "id" => "jdr-form"]]);
            yield "
    ";
        }
        // line 10
        yield "
    <div class=\"p-4 sm:p-6\">
        <h2 class=\"text-lg font-semibold mb-4\">Informations générales</h2>

        <div class=\"mb-4\">
            ";
        // line 15
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 15, $this->source); })()), "title", [], "any", false, false, false, 15), 'label', ["attr" => ["class" => "block text-base font-semibold text-gray-900 mb-2 tracking-wide"], "label" => "Titre du Jeu de rôle"]);
        yield "
            ";
        // line 16
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), 'widget', ["attr" => ["class" => "bg-gray-800 text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-3 border border-gray-600"]]);
        yield "
            ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), "title", [], "any", false, false, false, 17), 'errors');
        yield "
        </div>

        <div class=\"mb-4\">
            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "description", [], "any", false, false, false, 21), 'label', ["attr" => ["class" => "block text-base font-semibold text-gray-900 mb-2 tracking-wide"], "label" => "Description"]);
        yield "
            ";
        // line 22
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "bg-gray-800 text-white text-sm rounded-md shadow-inner focus:ring-blue-500 focus:border-blue-500 block w-full p-3 border border-gray-600 resize-none", "rows" => "6", "placeholder" => "Écrivez la description ici..."]]);
        // line 28
        yield "
            ";
        // line 29
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "description", [], "any", false, false, false, 29), 'errors');
        yield "
        </div>

        <div class=\"mb-4 grid grid-cols-1 sm:grid-cols-2 gap-6\">
            <div>
                <label for=\"status\" class=\"block text-base font-semibold text-gray-900 mb-2 tracking-wide\">Statut</label>
                ";
        // line 35
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35), 'widget', ["attr" => ["class" => "bg-gray-800 text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full h-12 p-3 border border-gray-600", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 38
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), "status", [], "any", false, false, false, 38), "vars", [], "any", false, false, false, 38), "id", [], "any", false, false, false, 38), "onchange" => "updateStatusExplanation()"]]);
        // line 41
        yield "
                <p id=\"status-explanation\" class=\"mt-2 text-sm text-gray-500\"></p>
            </div>

            <div>
                <label for=\"picture\" class=\"block text-base font-semibold text-gray-900 mb-2 tracking-wide\">Bannière du JDR</label>
                <div class=\"relative\">
                    ";
        // line 48
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "picture", [], "any", false, false, false, 48), 'widget', ["attr" => ["class" => "bg-gray-800 text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-3 border border-gray-600 cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:bg-blue-500 file:text-white hover:file:bg-blue-600", "aria-describedby" => "file_input_help", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 52
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "picture", [], "any", false, false, false, 52), "vars", [], "any", false, false, false, 52), "id", [], "any", false, false, false, 52)]]);
        // line 54
        yield "
                </div>
                <p class=\"mt-1 text-sm text-gray-500 dark:text-gray-300\" id=\"file_input_help\">SVG, PNG, JPG ou GIF (MAX. 800x400px).</p>
            </div>
        </div>
    </div>

    <div class=\"p-4 sm:p-6\">
        <h2 class=\"text-lg font-semibold mb-4\">Catégories</h2>

        <div id=\"alert-max-selection\" class=\"hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4\" role=\"alert\">
            <strong class=\"font-bold\">Attention!</strong>
            <span class=\"block sm:inline\">Vous ne pouvez sélectionner que 3 catégories maximum.</span>
        </div>

        <div id=\"category-container\" class=\"flex flex-wrap gap-2\">
            ";
        // line 70
        $context["colors"] = ["bg-blue-200 text-blue-800", "bg-green-200 text-green-800", "bg-yellow-200 text-yellow-800", "bg-red-200 text-red-800", "bg-purple-200 text-purple-800", "bg-pink-200 text-pink-800", "bg-indigo-200 text-indigo-800", "bg-teal-200 text-teal-800", "bg-orange-200 text-orange-800", "bg-lime-200 text-lime-800", "bg-fuchsia-200 text-fuchsia-800", "bg-rose-200 text-rose-800", "bg-cyan-200 text-cyan-800", "bg-amber-200 text-amber-800"];
        // line 86
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "categories", [], "any", false, false, false, 86));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 87
            yield "                ";
            $context["color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 87, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 87) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 87, $this->source); })()))), [], "array", false, false, false, 87);
            // line 88
            yield "                <label class=\"flex items-center space-x-2 cursor-pointer\">
                    ";
            // line 89
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["category"], 'widget');
            yield "
                    <span class=\"badge ";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 90, $this->source); })()), "html", null, true);
            yield " px-2 py-1 rounded\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "vars", [], "any", false, false, false, 90), "label", [], "any", false, false, false, 90), "html", null, true);
            yield "</span>
                </label>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['revindex0'], $context['loop']['revindex'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 93
        yield "        </div>
        ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "categories", [], "any", false, false, false, 94), 'errors');
        yield "
    </div>

    <div class=\"p-4 sm:p-6\">
        <h2 class=\"text-lg font-semibold mb-4 text-gray-800\">Nombre maximum de membres</h2>
        <div class=\"flex items-center space-x-2\">
            <button type=\"button\" id=\"decrement-button\" data-input-counter-decrement=\"";
        // line 100
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 100, $this->source); })()), "maxPlayer", [], "any", false, false, false, 100), "vars", [], "any", false, false, false, 100), "id", [], "any", false, false, false, 100), "html", null, true);
        yield "\" class=\"bg-gray-800 text-white hover:bg-gray-900 border border-gray-600 rounded-s-lg p-4 h-12 focus:ring-gray-100 focus:ring-2 focus:outline-none\">
                <svg class=\"w-3 h-3\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 18 2\">
                    <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 1h16\"/>
                </svg>
            </button>
            ";
        // line 105
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "maxPlayer", [], "any", false, false, false, 105), 'widget', ["attr" => ["type" => "number", "class" => "bg-gray-800 text-white border-x-0 border-gray-600 h-12 text-center text-sm focus:ring-blue-500 focus:border-blue-500 block w-24 py-3", "placeholder" => "15", "required" => "required", "max" => "15", "min" => "1", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 113
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 113, $this->source); })()), "maxPlayer", [], "any", false, false, false, 113), "vars", [], "any", false, false, false, 113), "id", [], "any", false, false, false, 113)]]);
        // line 115
        yield "
            <button type=\"button\" id=\"increment-button\" data-input-counter-increment=\"";
        // line 116
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "maxPlayer", [], "any", false, false, false, 116), "vars", [], "any", false, false, false, 116), "id", [], "any", false, false, false, 116), "html", null, true);
        yield "\" class=\"bg-gray-800 text-white hover:bg-gray-900 border border-gray-600 rounded-e-lg p-4 h-12 focus:ring-gray-100 focus:ring-2 focus:outline-none\">
                <svg class=\"w-3 h-3\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 18 18\">
                    <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 1v16M1 9h16\"/>
                </svg>
            </button>
        </div>
        <div class=\"mt-2\">
            ";
        // line 123
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), "maxPlayer", [], "any", false, false, false, 123), 'errors');
        yield "
        </div>
    </div>

    ";
        // line 127
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 127, $this->source); })()), "id", [], "any", false, false, false, 127))) {
            // line 128
            yield "        <div class=\"p-4 sm:p-6\">
            <h2 class=\"text-lg font-semibold mb-4\">Gestion des membres</h2>
            <div class=\"mb-4\">
                <h4 class=\"text-gray-700 font-medium\">Membres actuels du JDR</h4>
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4\" id=\"existing-members-container\">
                    ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 133, $this->source); })()), "players", [], "any", false, false, false, 133));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 134
                yield "                        <div class=\"relative bg-gray-800 p-4 rounded-lg shadow flex items-center space-x-4\" data-user-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 134), "html", null, true);
                yield "\">
                            <button class=\"absolute top-2 right-2 text-red-500 hover:text-red-700\" onclick=\"removePlayer('";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 135), "html", null, true);
                yield "')\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                                </svg>
                            </button>
                            ";
                // line 140
                if (CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 140)) {
                    // line 141
                    yield "                                <img class=\"w-12 h-12 rounded-full object-cover\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 141), "html", null, true);
                    yield "\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 141))), "html", null, true);
                    yield "\">
                            ";
                } else {
                    // line 143
                    yield "                                <img class=\"w-12 h-12 rounded-full object-cover\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 143), "html", null, true);
                    yield "\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\">
                            ";
                }
                // line 145
                yield "                            <div>
                                <p class=\"text-white font-semibold\">";
                // line 146
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 146), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['player'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 150
            yield "                </div>
            </div>
            <div class=\"mb-4\">
                <input type=\"text\" id=\"pseudo-input\" class=\"mt-1 block w-full px-4 py-3 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-white bg-gray-800 sm:text-sm\" placeholder=\"Entrer le pseudo\">
                <button type=\"button\" id=\"add-member-btn\" class=\"bg-green-500 text-white px-4 py-2 rounded-md shadow mt-2\">Ajouter</button>
            </div>
            <div id=\"error-message\" class=\"text-red-500 hidden\">Utilisateur non trouvé ou déjà ajouté au JDR</div>
            <div class=\"mb-4\" id=\"added-members-section\" style=\"display: none;\">
                <h4 class=\"text-gray-700 font-medium\">Membres ajoutés</h4>
                <ul class=\"list-disc pl-5\" id=\"added-members-list\"></ul>
            </div>
        ";
        }
        // line 162
        yield "
        <div class=\"flex justify-end mt-6\">
            <button type=\"submit\" class=\"bg-blue-500 text-white px-6 py-3 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500\">
                ";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 165, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "
            </button>
        </div>
    </div>

    ";
        // line 170
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), 'form_end');
        yield "
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const decrementButton = document.getElementById('decrement-button');
        const incrementButton = document.getElementById('increment-button');
        const maxPlayerInput = document.getElementById('";
        // line 177
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 177, $this->source); })()), "maxPlayer", [], "any", false, false, false, 177), "vars", [], "any", false, false, false, 177), "id", [], "any", false, false, false, 177), "html", null, true);
        yield "');
        const selectedMembersList = document.getElementById('selectedMembers') || { children: [] };
        const maxPlayersAllowed = 15;
        const categoryContainer = document.getElementById('category-container');
        const checkboxes = categoryContainer.querySelectorAll('input[type=\"checkbox\"]');
        const alertBox = document.getElementById('alert-max-selection');
        function showAlert() {
            alertBox.classList.remove('hidden');
            setTimeout(function() {
                alertBox.classList.add('hidden');
            }, 3000);
        }
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const checkedCount = categoryContainer.querySelectorAll('input[type=\"checkbox\"]:checked').length;
                if (checkedCount > 3) {
                    this.checked = false;
                    showAlert();
                }
            });
        });
        function updateMemberLimit() {
            const currentMembers = selectedMembersList.children.length;
            const maxAllowed = Math.max(0, maxPlayersAllowed - parseInt(maxPlayerInput.value));
            const memberSearch = document.getElementById('memberSearch');
            if (memberSearch) {
                memberSearch.disabled = currentMembers >= maxAllowed;
            }
        }
        if (decrementButton && maxPlayerInput) {
            decrementButton.addEventListener('click', function () {
                let currentValue = parseInt(maxPlayerInput.value);
                if (currentValue > 1) {
                    maxPlayerInput.value = currentValue - 1;
                    maxPlayerInput.dispatchEvent(new Event('input'));
                }
            });
        }
        if (incrementButton && maxPlayerInput) {
            incrementButton.addEventListener('click', function () {
                let currentValue = parseInt(maxPlayerInput.value);
                if (currentValue < maxPlayersAllowed) {
                    maxPlayerInput.value = currentValue + 1;
                    maxPlayerInput.dispatchEvent(new Event('input'));
                }
            });
        }
        if (maxPlayerInput) {
            maxPlayerInput.addEventListener('input', function () {
                let value = parseInt(maxPlayerInput.value);
                if (isNaN(value) || value < 1) {
                    maxPlayerInput.value = 1;
                } else if (value > maxPlayersAllowed) {
                    maxPlayerInput.value = maxPlayersAllowed;
                }
                updateMemberLimit();
            });
            maxPlayerInput.addEventListener('blur', function () {
                let value = parseInt(maxPlayerInput.value);
                if (isNaN(value) || value < 1) {
                    maxPlayerInput.value = 1;
                } else if (value > maxPlayersAllowed) {
                    maxPlayerInput.value = maxPlayersAllowed;
                }
                updateMemberLimit();
            });
        }
        let addedMembers = [];
        let existingMembers = [];
        document.querySelectorAll(\"#existing-members-table tbody tr\").forEach(tr => {
            existingMembers.push(tr.cells[0].textContent.trim());
        });
        let jdrId = null;
        ";
        // line 250
        if ((array_key_exists("groupe_j_d_r", $context) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 250, $this->source); })()), "id", [], "any", false, false, false, 250)))) {
            // line 251
            yield "            jdrId = ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 251, $this->source); })()), "id", [], "any", false, false, false, 251);
            yield ";
        ";
        }
        // line 253
        yield "        const jdrForm = document.getElementById('jdr-form');
        if (jdrForm) {
            jdrForm.addEventListener('submit', function (e) {
                const addedPlayersInput = document.getElementById('added-members-input');
                addedPlayersInput.value = JSON.stringify(addedMembers);
                console.log('Membres ajoutés :', addedMembers);
                console.log('Données du formulaire:', new FormData(this));
            });
        }
        const addMemberBtn = document.getElementById('add-member-btn');
        if (addMemberBtn) {
            addMemberBtn.addEventListener('click', function () {
                const pseudoInput = document.getElementById('pseudo-input');
                const pseudo = pseudoInput.value.trim();
                const errorMessage = document.getElementById('error-message');
                if (pseudo.length > 0 && jdrId !== null) {
                    fetch(`/api/check_user/\${pseudo}/\${jdrId}`)
                        .then(response => response.json())
                        .then(data => {
                            if (!data.exists) {
                                errorMessage.classList.remove('hidden');
                                errorMessage.textContent = data.message || \"L'utilisateur n'existe pas.\";
                            } else if (data.inGroup) {
                                errorMessage.classList.remove('hidden');
                                errorMessage.textContent = data.message;
                            } else if (data.caseMismatch) {
                                errorMessage.classList.remove('hidden');
                                errorMessage.textContent = data.message;
                            } else if (data.error) {
                                errorMessage.classList.remove('hidden');
                                errorMessage.textContent = data.message;
                            } else {
                                addMemberToList(data.id, pseudo);
                                errorMessage.classList.add('hidden');
                                pseudoInput.value = '';
                            }
                        })
                        .catch(error => {
                            console.error('Erreur lors de la requête:', error);
                        });
                } else {
                    errorMessage.classList.remove('hidden');
                    errorMessage.textContent = jdrId === null ? \"JDR ID non défini.\" : \"Le pseudo est vide.\";
                }
                updateMemberLimit();
            });
        }
        function addMemberToList(userId, pseudo) {
            if (!addedMembers.includes(userId)) {
                addedMembers.push(userId);
                const membersList = document.getElementById('added-members-list');
                const listItem = document.createElement('li');
                listItem.className = \"flex items-center space-x-2\";
                listItem.setAttribute('data-user-id', userId);
                listItem.innerHTML = `
                    <span>\${pseudo}</span>
                    <button class=\"text-red-500\" onclick=\"removeMember('\${userId}', this)\">&#10006;</button>
                `;
                membersList.appendChild(listItem);
                document.getElementById('added-members-section').style.display = 'block';
            }
        }
        window.removeMember = function (userId, element) {
            addedMembers = addedMembers.filter(member => member !== userId);
            element.closest('li').remove();
            if (addedMembers.length === 0) {
                document.getElementById('added-members-section').style.display = 'none';
            }
            updateMemberLimit();
        }
        window.removePlayer = function (userId) {
            fetch(`/api/remove_user/\${userId}/\${jdrId}`, {
                method: 'DELETE',
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.querySelector(`[data-user-id=\"\${userId}\"]`).remove();
                    window.location.href = data.redirect;
                } else {
                    console.error(data.message);
                }
            })
            .catch(error => {
                console.error('Erreur lors de la suppression de l\\'utilisateur:', error);
            });
        }
        updateMemberLimit();
    });
function updateStatusExplanation() {
    const explanations = {
        'preparation': 'Le JDR est en phase de préparation, non encore accessible.',
        'pret_a_jouer': 'Le JDR est préparé et prêt à être lancé.',
        'en_cours': 'Le JDR a commencé et est en train de se dérouler.',
        'complet': 'Le JDR est plein et tous les joueurs sont engagés.',
        'pause': 'Le JDR est temporairement interrompu.',
        'termine': 'Le JDR est fini, plus de sessions à venir.',
        'annule': 'Le JDR a été annulé et ne se déroulera pas.'
    };

    const select = document.getElementById('";
        // line 353
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 353, $this->source); })()), "status", [], "any", false, false, false, 353), "vars", [], "any", false, false, false, 353), "id", [], "any", false, false, false, 353), "html", null, true);
        yield "');
    const explanationText = explanations[select.value] || '';
    
    document.getElementById('status-explanation').textContent = explanationText;
}


    document.addEventListener('DOMContentLoaded', updateStatusExplanation);
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
        return "groupe_jdr/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  543 => 353,  441 => 253,  435 => 251,  433 => 250,  357 => 177,  347 => 170,  339 => 165,  334 => 162,  320 => 150,  310 => 146,  307 => 145,  299 => 143,  291 => 141,  289 => 140,  281 => 135,  276 => 134,  272 => 133,  265 => 128,  263 => 127,  256 => 123,  246 => 116,  243 => 115,  241 => 113,  240 => 105,  232 => 100,  223 => 94,  220 => 93,  201 => 90,  197 => 89,  194 => 88,  191 => 87,  173 => 86,  171 => 70,  153 => 54,  151 => 52,  150 => 48,  141 => 41,  139 => 38,  138 => 35,  129 => 29,  126 => 28,  124 => 22,  120 => 21,  113 => 17,  109 => 16,  105 => 15,  98 => 10,  92 => 8,  86 => 6,  84 => 5,  75 => 3,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<div class=\"container mx-auto p-4 sm:p-6 bg-gray-100 rounded-lg shadow-lg mt-6 sm:mt-20\">
    <h1 class=\"text-2xl font-bold mb-4 text-gray-800\">{% if groupe_j_d_r.id is not null %}Édition d'un JDR{% else %}Création d'un JDR{% endif %}</h1>

    {% if groupe_j_d_r.id is not null %}
        {{ form_start(form, { 'action': path('app_groupe_j_d_r_edit', { 'id': groupe_j_d_r.id }), 'method': 'POST', 'attr': {'class': 'space-y-4', 'id': 'jdr-form'} }) }}
    {% else %}
        {{ form_start(form, { 'action': path('app_groupe_j_d_r_new'), 'method': 'POST', 'attr': {'class': 'space-y-4', 'id': 'jdr-form'} }) }}
    {% endif %}

    <div class=\"p-4 sm:p-6\">
        <h2 class=\"text-lg font-semibold mb-4\">Informations générales</h2>

        <div class=\"mb-4\">
            {{ form_label(form.title, 'Titre du Jeu de rôle', { 'attr': {'class': 'block text-base font-semibold text-gray-900 mb-2 tracking-wide'} }) }}
            {{ form_widget(form.title, { 'attr': {'class': 'bg-gray-800 text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-3 border border-gray-600'} }) }}
            {{ form_errors(form.title) }}
        </div>

        <div class=\"mb-4\">
            {{ form_label(form.description, 'Description', { 'attr': {'class': 'block text-base font-semibold text-gray-900 mb-2 tracking-wide'} }) }}
            {{ form_widget(form.description, {
                'attr': {
                    'class': 'bg-gray-800 text-white text-sm rounded-md shadow-inner focus:ring-blue-500 focus:border-blue-500 block w-full p-3 border border-gray-600 resize-none',
                    'rows': '6',
                    'placeholder': 'Écrivez la description ici...'
                }
            }) }}
            {{ form_errors(form.description) }}
        </div>

        <div class=\"mb-4 grid grid-cols-1 sm:grid-cols-2 gap-6\">
            <div>
                <label for=\"status\" class=\"block text-base font-semibold text-gray-900 mb-2 tracking-wide\">Statut</label>
                {{ form_widget(form.status, {
                    'attr': {
                        'class': 'bg-gray-800 text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full h-12 p-3 border border-gray-600',
                        'id': form.status.vars.id,
                        'onchange': 'updateStatusExplanation()'
                    }
                }) }}
                <p id=\"status-explanation\" class=\"mt-2 text-sm text-gray-500\"></p>
            </div>

            <div>
                <label for=\"picture\" class=\"block text-base font-semibold text-gray-900 mb-2 tracking-wide\">Bannière du JDR</label>
                <div class=\"relative\">
                    {{ form_widget(form.picture, {
                        'attr': {
                            'class': 'bg-gray-800 text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-3 border border-gray-600 cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0 file:text-sm file:bg-blue-500 file:text-white hover:file:bg-blue-600',
                            'aria-describedby': 'file_input_help',
                            'id': form.picture.vars.id
                        }
                    }) }}
                </div>
                <p class=\"mt-1 text-sm text-gray-500 dark:text-gray-300\" id=\"file_input_help\">SVG, PNG, JPG ou GIF (MAX. 800x400px).</p>
            </div>
        </div>
    </div>

    <div class=\"p-4 sm:p-6\">
        <h2 class=\"text-lg font-semibold mb-4\">Catégories</h2>

        <div id=\"alert-max-selection\" class=\"hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4\" role=\"alert\">
            <strong class=\"font-bold\">Attention!</strong>
            <span class=\"block sm:inline\">Vous ne pouvez sélectionner que 3 catégories maximum.</span>
        </div>

        <div id=\"category-container\" class=\"flex flex-wrap gap-2\">
            {% set colors = [
                'bg-blue-200 text-blue-800', 
                'bg-green-200 text-green-800', 
                'bg-yellow-200 text-yellow-800', 
                'bg-red-200 text-red-800', 
                'bg-purple-200 text-purple-800', 
                'bg-pink-200 text-pink-800', 
                'bg-indigo-200 text-indigo-800', 
                'bg-teal-200 text-teal-800', 
                'bg-orange-200 text-orange-800', 
                'bg-lime-200 text-lime-800', 
                'bg-fuchsia-200 text-fuchsia-800', 
                'bg-rose-200 text-rose-800', 
                'bg-cyan-200 text-cyan-800', 
                'bg-amber-200 text-amber-800'
            ] %}
            {% for category in form.categories %}
                {% set color = colors[loop.index0 % colors|length] %}
                <label class=\"flex items-center space-x-2 cursor-pointer\">
                    {{ form_widget(category) }}
                    <span class=\"badge {{ color }} px-2 py-1 rounded\">{{ category.vars.label }}</span>
                </label>
            {% endfor %}
        </div>
        {{ form_errors(form.categories) }}
    </div>

    <div class=\"p-4 sm:p-6\">
        <h2 class=\"text-lg font-semibold mb-4 text-gray-800\">Nombre maximum de membres</h2>
        <div class=\"flex items-center space-x-2\">
            <button type=\"button\" id=\"decrement-button\" data-input-counter-decrement=\"{{ form.maxPlayer.vars.id }}\" class=\"bg-gray-800 text-white hover:bg-gray-900 border border-gray-600 rounded-s-lg p-4 h-12 focus:ring-gray-100 focus:ring-2 focus:outline-none\">
                <svg class=\"w-3 h-3\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 18 2\">
                    <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 1h16\"/>
                </svg>
            </button>
            {{ form_widget(form.maxPlayer, { 
                'attr': { 
                    'type': 'number',
                    'class': 'bg-gray-800 text-white border-x-0 border-gray-600 h-12 text-center text-sm focus:ring-blue-500 focus:border-blue-500 block w-24 py-3',
                    'placeholder': '15',
                    'required': 'required',
                    'max': '15',
                    'min': '1',
                    'id': form.maxPlayer.vars.id
                } 
            }) }}
            <button type=\"button\" id=\"increment-button\" data-input-counter-increment=\"{{ form.maxPlayer.vars.id }}\" class=\"bg-gray-800 text-white hover:bg-gray-900 border border-gray-600 rounded-e-lg p-4 h-12 focus:ring-gray-100 focus:ring-2 focus:outline-none\">
                <svg class=\"w-3 h-3\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 18 18\">
                    <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 1v16M1 9h16\"/>
                </svg>
            </button>
        </div>
        <div class=\"mt-2\">
            {{ form_errors(form.maxPlayer) }}
        </div>
    </div>

    {% if groupe_j_d_r.id is not null %}
        <div class=\"p-4 sm:p-6\">
            <h2 class=\"text-lg font-semibold mb-4\">Gestion des membres</h2>
            <div class=\"mb-4\">
                <h4 class=\"text-gray-700 font-medium\">Membres actuels du JDR</h4>
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4\" id=\"existing-members-container\">
                    {% for player in groupe_j_d_r.players %}
                        <div class=\"relative bg-gray-800 p-4 rounded-lg shadow flex items-center space-x-4\" data-user-id=\"{{ player.id }}\">
                            <button class=\"absolute top-2 right-2 text-red-500 hover:text-red-700\" onclick=\"removePlayer('{{ player.id }}')\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                                </svg>
                            </button>
                            {% if player.avatar %}
                                <img class=\"w-12 h-12 rounded-full object-cover\" alt=\"{{ player.username }}\" src=\"{{ asset('uploads/avatars/' ~ player.avatar) }}\">
                            {% else %}
                                <img class=\"w-12 h-12 rounded-full object-cover\" alt=\"{{ player.username }}\" src=\"{{ asset('images/default-avatar.png') }}\">
                            {% endif %}
                            <div>
                                <p class=\"text-white font-semibold\">{{ player.username }}</p>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
            <div class=\"mb-4\">
                <input type=\"text\" id=\"pseudo-input\" class=\"mt-1 block w-full px-4 py-3 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-white bg-gray-800 sm:text-sm\" placeholder=\"Entrer le pseudo\">
                <button type=\"button\" id=\"add-member-btn\" class=\"bg-green-500 text-white px-4 py-2 rounded-md shadow mt-2\">Ajouter</button>
            </div>
            <div id=\"error-message\" class=\"text-red-500 hidden\">Utilisateur non trouvé ou déjà ajouté au JDR</div>
            <div class=\"mb-4\" id=\"added-members-section\" style=\"display: none;\">
                <h4 class=\"text-gray-700 font-medium\">Membres ajoutés</h4>
                <ul class=\"list-disc pl-5\" id=\"added-members-list\"></ul>
            </div>
        {% endif %}

        <div class=\"flex justify-end mt-6\">
            <button type=\"submit\" class=\"bg-blue-500 text-white px-6 py-3 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500\">
                {{ button_label|default('Save') }}
            </button>
        </div>
    </div>

    {{ form_end(form) }}
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const decrementButton = document.getElementById('decrement-button');
        const incrementButton = document.getElementById('increment-button');
        const maxPlayerInput = document.getElementById('{{ form.maxPlayer.vars.id }}');
        const selectedMembersList = document.getElementById('selectedMembers') || { children: [] };
        const maxPlayersAllowed = 15;
        const categoryContainer = document.getElementById('category-container');
        const checkboxes = categoryContainer.querySelectorAll('input[type=\"checkbox\"]');
        const alertBox = document.getElementById('alert-max-selection');
        function showAlert() {
            alertBox.classList.remove('hidden');
            setTimeout(function() {
                alertBox.classList.add('hidden');
            }, 3000);
        }
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const checkedCount = categoryContainer.querySelectorAll('input[type=\"checkbox\"]:checked').length;
                if (checkedCount > 3) {
                    this.checked = false;
                    showAlert();
                }
            });
        });
        function updateMemberLimit() {
            const currentMembers = selectedMembersList.children.length;
            const maxAllowed = Math.max(0, maxPlayersAllowed - parseInt(maxPlayerInput.value));
            const memberSearch = document.getElementById('memberSearch');
            if (memberSearch) {
                memberSearch.disabled = currentMembers >= maxAllowed;
            }
        }
        if (decrementButton && maxPlayerInput) {
            decrementButton.addEventListener('click', function () {
                let currentValue = parseInt(maxPlayerInput.value);
                if (currentValue > 1) {
                    maxPlayerInput.value = currentValue - 1;
                    maxPlayerInput.dispatchEvent(new Event('input'));
                }
            });
        }
        if (incrementButton && maxPlayerInput) {
            incrementButton.addEventListener('click', function () {
                let currentValue = parseInt(maxPlayerInput.value);
                if (currentValue < maxPlayersAllowed) {
                    maxPlayerInput.value = currentValue + 1;
                    maxPlayerInput.dispatchEvent(new Event('input'));
                }
            });
        }
        if (maxPlayerInput) {
            maxPlayerInput.addEventListener('input', function () {
                let value = parseInt(maxPlayerInput.value);
                if (isNaN(value) || value < 1) {
                    maxPlayerInput.value = 1;
                } else if (value > maxPlayersAllowed) {
                    maxPlayerInput.value = maxPlayersAllowed;
                }
                updateMemberLimit();
            });
            maxPlayerInput.addEventListener('blur', function () {
                let value = parseInt(maxPlayerInput.value);
                if (isNaN(value) || value < 1) {
                    maxPlayerInput.value = 1;
                } else if (value > maxPlayersAllowed) {
                    maxPlayerInput.value = maxPlayersAllowed;
                }
                updateMemberLimit();
            });
        }
        let addedMembers = [];
        let existingMembers = [];
        document.querySelectorAll(\"#existing-members-table tbody tr\").forEach(tr => {
            existingMembers.push(tr.cells[0].textContent.trim());
        });
        let jdrId = null;
        {% if groupe_j_d_r is defined and groupe_j_d_r.id is not null %}
            jdrId = {{ groupe_j_d_r.id | raw }};
        {% endif %}
        const jdrForm = document.getElementById('jdr-form');
        if (jdrForm) {
            jdrForm.addEventListener('submit', function (e) {
                const addedPlayersInput = document.getElementById('added-members-input');
                addedPlayersInput.value = JSON.stringify(addedMembers);
                console.log('Membres ajoutés :', addedMembers);
                console.log('Données du formulaire:', new FormData(this));
            });
        }
        const addMemberBtn = document.getElementById('add-member-btn');
        if (addMemberBtn) {
            addMemberBtn.addEventListener('click', function () {
                const pseudoInput = document.getElementById('pseudo-input');
                const pseudo = pseudoInput.value.trim();
                const errorMessage = document.getElementById('error-message');
                if (pseudo.length > 0 && jdrId !== null) {
                    fetch(`/api/check_user/\${pseudo}/\${jdrId}`)
                        .then(response => response.json())
                        .then(data => {
                            if (!data.exists) {
                                errorMessage.classList.remove('hidden');
                                errorMessage.textContent = data.message || \"L'utilisateur n'existe pas.\";
                            } else if (data.inGroup) {
                                errorMessage.classList.remove('hidden');
                                errorMessage.textContent = data.message;
                            } else if (data.caseMismatch) {
                                errorMessage.classList.remove('hidden');
                                errorMessage.textContent = data.message;
                            } else if (data.error) {
                                errorMessage.classList.remove('hidden');
                                errorMessage.textContent = data.message;
                            } else {
                                addMemberToList(data.id, pseudo);
                                errorMessage.classList.add('hidden');
                                pseudoInput.value = '';
                            }
                        })
                        .catch(error => {
                            console.error('Erreur lors de la requête:', error);
                        });
                } else {
                    errorMessage.classList.remove('hidden');
                    errorMessage.textContent = jdrId === null ? \"JDR ID non défini.\" : \"Le pseudo est vide.\";
                }
                updateMemberLimit();
            });
        }
        function addMemberToList(userId, pseudo) {
            if (!addedMembers.includes(userId)) {
                addedMembers.push(userId);
                const membersList = document.getElementById('added-members-list');
                const listItem = document.createElement('li');
                listItem.className = \"flex items-center space-x-2\";
                listItem.setAttribute('data-user-id', userId);
                listItem.innerHTML = `
                    <span>\${pseudo}</span>
                    <button class=\"text-red-500\" onclick=\"removeMember('\${userId}', this)\">&#10006;</button>
                `;
                membersList.appendChild(listItem);
                document.getElementById('added-members-section').style.display = 'block';
            }
        }
        window.removeMember = function (userId, element) {
            addedMembers = addedMembers.filter(member => member !== userId);
            element.closest('li').remove();
            if (addedMembers.length === 0) {
                document.getElementById('added-members-section').style.display = 'none';
            }
            updateMemberLimit();
        }
        window.removePlayer = function (userId) {
            fetch(`/api/remove_user/\${userId}/\${jdrId}`, {
                method: 'DELETE',
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    document.querySelector(`[data-user-id=\"\${userId}\"]`).remove();
                    window.location.href = data.redirect;
                } else {
                    console.error(data.message);
                }
            })
            .catch(error => {
                console.error('Erreur lors de la suppression de l\\'utilisateur:', error);
            });
        }
        updateMemberLimit();
    });
function updateStatusExplanation() {
    const explanations = {
        'preparation': 'Le JDR est en phase de préparation, non encore accessible.',
        'pret_a_jouer': 'Le JDR est préparé et prêt à être lancé.',
        'en_cours': 'Le JDR a commencé et est en train de se dérouler.',
        'complet': 'Le JDR est plein et tous les joueurs sont engagés.',
        'pause': 'Le JDR est temporairement interrompu.',
        'termine': 'Le JDR est fini, plus de sessions à venir.',
        'annule': 'Le JDR a été annulé et ne se déroulera pas.'
    };

    const select = document.getElementById('{{ form.status.vars.id }}');
    const explanationText = explanations[select.value] || '';
    
    document.getElementById('status-explanation').textContent = explanationText;
}


    document.addEventListener('DOMContentLoaded', updateStatusExplanation);
</script>
{% endblock %}
", "groupe_jdr/_form.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\groupe_jdr\\_form.html.twig");
    }
}
