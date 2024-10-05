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
        yield "<div class=\"container mx-auto p-4 sm:p-6 bg-gray-100 rounded-lg shadow-lg mt-6\">
    <h1 class=\"text-2xl font-bold mb-4 text-gray-800\">";
        // line 3
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 3, $this->source); })()), "id", [], "any", false, false, false, 3))) {
            yield "Édition de votre Univers";
        } else {
            yield "Création de votre Univers";
        }
        yield "</h1>
    ";
        // line 4
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 4, $this->source); })()), "id", [], "any", false, false, false, 4))) {
            // line 5
            yield "        ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 5, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)]), "method" => "POST", "attr" => ["class" => "space-y-4", "id" => "jdr-form"]]);
            yield "
    ";
        } else {
            // line 7
            yield "        ";
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'form_start', ["action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_new"), "method" => "POST", "attr" => ["class" => "space-y-4", "id" => "jdr-form"]]);
            yield "
    ";
        }
        // line 9
        yield "    <input type=\"hidden\" id=\"added-members-input\" name=\"added_players\">

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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "description", [], "any", false, false, false, 22), 'widget', ["attr" => ["class" => "bg-gray-800 text-white text-sm rounded-md shadow-inner focus:ring-blue-500 focus:border-blue-500 block w-full p-3 border border-gray-600 resize-none", "rows" => "6", "placeholder" => "Écrivez la description ici...", "maxlength" => "255", "oninput" => "updateCharCount(this)"]]);
        yield "
            <div id=\"charCount\" class=\"text-gray-400 text-sm mt-1\">255 caractères restants</div>
            ";
        // line 24
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), "description", [], "any", false, false, false, 24), 'errors');
        yield "
        </div>

        <div class=\"mb-4 grid grid-cols-1 sm:grid-cols-2 gap-6\">
            <div>
                <label for=\"status\" class=\"block text-base font-semibold text-gray-900 mb-2 tracking-wide\">Statut</label>
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "status", [], "any", false, false, false, 30), 'widget', ["attr" => ["class" => "bg-gray-800 text-white rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full h-12 p-3 border border-gray-600", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "status", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "id", [], "any", false, false, false, 30), "onchange" => "updateStatusExplanation()"]]);
        yield "
                <p id=\"status-explanation\" class=\"mt-2 text-sm text-gray-500\"></p>
            </div>

            <div>
                <label for=\"picture\" class=\"block text-base font-semibold text-gray-900 mb-2 tracking-wide\">Bannière du de l'Univers</label>
                <div class=\"relative\">
                    ";
        // line 37
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "picture", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "bg-gray-800 text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full h-12 p-3 border border-gray-600 cursor-pointer", "style" => "display: flex; align-items: center; justify-content: center;"]]);
        // line 40
        yield "
                </div>
                <p class=\"mt-1 text-sm text-gray-500\" id=\"file_input_help\">SVG, PNG, JPG ou GIF (MAX. 800x400px).</p>
            </div>
        </div>
    </div>

    <div class=\"p-4 sm:p-6\">
        <div class=\"mb-4\">
            <label class=\"inline-flex items-center cursor-pointer\">
                ";
        // line 50
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "recrutement", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "sr-only peer"]]);
        yield "
                <div class=\"relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600\"></div>
                <span class=\"ms-3 text-dark font-bold\">Activer le recrutement</span>
            </label>
            ";
        // line 54
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 54, $this->source); })()), "recrutement", [], "any", false, false, false, 54), 'errors');
        yield "
        </div>

        <!-- Catégories -->
        <h2 class=\"text-lg font-semibold mb-4\">Catégories</h2>
        <div id=\"alert-max-selection\" class=\"hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4\" role=\"alert\">
            <strong class=\"font-bold\">Attention!</strong>
            <span class=\"block sm:inline\">Vous ne pouvez sélectionner que 3 catégories maximum.</span>
        </div>
        <div id=\"category-error-message\" class=\"text-red-500 hidden\">Veuillez sélectionner au moins une catégorie.</div>
        <div id=\"category-container\" class=\"flex flex-wrap gap-2\">
            ";
        // line 65
        $context["colors"] = ["bg-blue-200 text-blue-800", "bg-green-200 text-green-800", "bg-yellow-200 text-yellow-800", "bg-red-200 text-red-800", "bg-purple-200 text-purple-800", "bg-pink-200 text-pink-800", "bg-indigo-200 text-indigo-800", "bg-teal-200 text-teal-800", "bg-orange-200 text-orange-800", "bg-lime-200 text-lime-800", "bg-fuchsia-200 text-fuchsia-800", "bg-rose-200 text-rose-800", "bg-cyan-200 text-cyan-800", "bg-amber-200 text-amber-800"];
        // line 66
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "categories", [], "any", false, false, false, 66));
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
            // line 67
            yield "                ";
            $context["color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 67, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 67) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 67, $this->source); })()))), [], "array", false, false, false, 67);
            // line 68
            yield "                <label class=\"flex items-center space-x-2 cursor-pointer\">
                    ";
            // line 69
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["category"], 'widget');
            yield "
                    <span class=\"badge ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 70, $this->source); })()), "html", null, true);
            yield " px-2 py-1 rounded\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["category"], "vars", [], "any", false, false, false, 70), "label", [], "any", false, false, false, 70), "html", null, true);
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
        // line 73
        yield "        </div>
        ";
        // line 74
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "categories", [], "any", false, false, false, 74), 'errors');
        yield "
    </div>

    <!-- Événements -->
    <div class=\"p-4 sm:p-6\">
        <h2 class=\"text-lg font-semibold mb-4 text-gray-800\">Événements</h2>
        <div id=\"events-wrapper\" data-prototype=\"";
        // line 80
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "events", [], "any", false, false, false, 80), "vars", [], "any", false, false, false, 80), "prototype", [], "any", false, false, false, 80), 'widget'));
        yield "\">
            ";
        // line 81
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "events", [], "any", false, false, false, 81));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 82
            yield "                <div class=\"event-item bg-white border border-gray-200 p-4 rounded-md mb-2 shadow-sm\">
                    <div class=\"flex items-center justify-between mb-4\"> <!-- Align items on the same line -->
                        <div class=\"flex space-x-4 items-center w-full\">
                            <div class=\"w-1/2\">
                                ";
            // line 86
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dayOfWeek", [], "any", false, false, false, 86), 'label', ["label_attr" => ["class" => "text-sm font-medium text-gray-700"], "label" => "Jour"]);
            yield "
                                ";
            // line 87
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dayOfWeek", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 rounded-md p-2 text-sm w-full focus:ring-blue-500 focus:border-blue-500"]]);
            yield "
                            </div>
                            <div class=\"w-1/2\">
                                ";
            // line 90
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 90), 'label', ["label_attr" => ["class" => "text-sm font-medium text-gray-700"], "label" => "Heure"]);
            yield "
                                ";
            // line 91
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "bg-gray-100 border border-gray-300 rounded-md p-2 text-sm w-full focus:ring-blue-500 focus:border-blue-500"]]);
            yield "
                            </div>
                        </div>
                        <button type=\"button\" class=\"remove-event-btn flex items-center text-red-500 hover:text-red-700 ml-4 mt-5\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                            </svg>
                            <span class=\"ml-2 text-sm\">Supprimer</span>
                        </button>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        yield "        </div>

        <button type=\"button\" id=\"add-event-btn\" class=\"mt-4 bg-blue-500 text-white px-6 py-3 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500\">
            Ajouter un événement
        </button>
    </div>

    <!-- Gestion des membres -->
    <div class=\"p-4 sm:p-6\">
        <h2 class=\"text-lg font-semibold mb-4 text-gray-800\">Nombre maximum de membres</h2>
        <div class=\"flex items-center space-x-2\">
            <button type=\"button\" id=\"decrement-button\" data-input-counter-decrement=\"";
        // line 114
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 114, $this->source); })()), "maxPlayer", [], "any", false, false, false, 114), "vars", [], "any", false, false, false, 114), "id", [], "any", false, false, false, 114), "html", null, true);
        yield "\" class=\"bg-gray-800 text-white hover:bg-gray-900 border border-gray-600 rounded-s-lg p-4 h-12 focus:ring-gray-100 focus:ring-2 focus:outline-none\">
                <svg class=\"w-3 h-3\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 18 2\">
                    <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 1h16\"/>
                </svg>
            </button>
            ";
        // line 119
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "maxPlayer", [], "any", false, false, false, 119), 'widget', ["attr" => ["type" => "number", "class" => "bg-gray-800 text-white border-x-0 border-gray-600 h-12 text-center text-sm focus:ring-blue-500 focus:border-blue-500 block w-24 py-3", "placeholder" => "15", "required" => "required", "max" => "15", "min" => "1", "id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 119, $this->source); })()), "maxPlayer", [], "any", false, false, false, 119), "vars", [], "any", false, false, false, 119), "id", [], "any", false, false, false, 119)]]);
        yield "
            <button type=\"button\" id=\"increment-button\" data-input-counter-increment=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "maxPlayer", [], "any", false, false, false, 120), "vars", [], "any", false, false, false, 120), "id", [], "any", false, false, false, 120), "html", null, true);
        yield "\" class=\"bg-gray-800 text-white hover:bg-gray-900 border border-gray-600 rounded-e-lg p-4 h-12 focus:ring-gray-100 focus:ring-2 focus:outline-none\">
                <svg class=\"w-3 h-3\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 18 18\">
                    <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M9 1v16M1 9h16\"/>
                </svg>
            </button>
        </div>
        <div class=\"mt-2\">
            ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "maxPlayer", [], "any", false, false, false, 127), 'errors');
        yield "
        </div>
    </div>

    ";
        // line 131
        if ( !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 131, $this->source); })()), "id", [], "any", false, false, false, 131))) {
            // line 132
            yield "        <div class=\"p-4 sm:p-6\">
            <h2 class=\"text-lg font-semibold mb-4\">Gestion des membres</h2>
            <div class=\"mb-4\">
                <h4 class=\"text-gray-700 font-medium\">Membres actuels de l'Univers</h4>
                <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4\" id=\"existing-members-container\">
                    ";
            // line 137
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 137, $this->source); })()), "players", [], "any", false, false, false, 137));
            foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
                // line 138
                yield "                        <div class=\"relative bg-gray-800 p-4 rounded-lg shadow flex items-center space-x-4\" data-user-id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 138), "html", null, true);
                yield "\">
                            <button class=\"absolute top-2 right-2 text-red-500 hover:text-red-700\" onclick=\"removePlayer('";
                // line 139
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 139), "html", null, true);
                yield "')\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-4 w-4\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                                </svg>
                            </button>
                            ";
                // line 144
                if (CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 144)) {
                    // line 145
                    yield "                                <img class=\"w-12 h-12 rounded-full object-cover\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 145), "html", null, true);
                    yield "\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 145))), "html", null, true);
                    yield "\">
                            ";
                } else {
                    // line 147
                    yield "                                <img class=\"w-12 h-12 rounded-full object-cover\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 147), "html", null, true);
                    yield "\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\">
                            ";
                }
                // line 149
                yield "                            <div>
                                <p class=\"text-white font-semibold\">";
                // line 150
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 150), "html", null, true);
                yield "</p>
                            </div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['player'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            yield "                </div>
            </div>
            <div class=\"mb-4\">
                <input type=\"text\" id=\"pseudo-input\" class=\"mt-1 block w-full px-4 py-3 border border-gray-600 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 text-white bg-gray-800 sm:text-sm\" placeholder=\"Entrer le pseudo\">
                <button type=\"button\" id=\"add-member-btn\" class=\"bg-green-500 text-white px-4 py-2 rounded-md shadow mt-2\">Ajouter</button>
            </div>
            <div id=\"error-message\" class=\"text-red-500 hidden\">Utilisateur non trouvé ou déjà ajouté a l'Univers</div>
            <div class=\"mb-4\" id=\"added-members-section\" style=\"display: none;\">
                <h4 class=\"text-gray-700 font-medium\">Membres ajoutés</h4>
                <ul class=\"list-disc pl-5\" id=\"added-members-list\"></ul>
            </div>
        ";
        }
        // line 166
        yield "
        <div class=\"flex justify-end mt-6\">
            <button type=\"submit\" class=\"bg-blue-500 text-white px-6 py-3 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500\">
                ";
        // line 169
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("button_label", $context)) ? (Twig\Extension\CoreExtension::default((isset($context["button_label"]) || array_key_exists("button_label", $context) ? $context["button_label"] : (function () { throw new RuntimeError('Variable "button_label" does not exist.', 169, $this->source); })()), "Save")) : ("Save")), "html", null, true);
        yield "
            </button>
        </div>
    </div>

    ";
        // line 174
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), 'form_end');
        yield "
</div>

<script>

    function updateCharCount(textarea) {
        const maxChars = 255;
        const remainingChars = maxChars - textarea.value.length;
        document.getElementById('charCount').textContent = remainingChars + \" caractères restants\";
    }
document.addEventListener('DOMContentLoaded', function () {
    const decrementButton = document.getElementById('decrement-button');
    const incrementButton = document.getElementById('increment-button');
    const maxPlayerInput = document.getElementById('";
        // line 187
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "maxPlayer", [], "any", false, false, false, 187), "vars", [], "any", false, false, false, 187), "id", [], "any", false, false, false, 187), "html", null, true);
        yield "');
    const selectedMembersList = document.getElementById('selectedMembers') || { children: [] };
    const maxPlayersAllowed = 15;
    const categoryContainer = document.getElementById('category-container');
    const checkboxes = categoryContainer.querySelectorAll('input[type=\"checkbox\"]');
    const alertBox = document.getElementById('alert-max-selection');
    const categoryErrorMessage = document.getElementById('category-error-message');

    function updateStatusExplanation() {
        const explanations = {
            '': 'Veuillez sélectionner un statut pour voir une explication.',
            'preparation': 'L\\'Univers est en phase de préparation',
            'pret_a_jouer': 'L\\'Univers est préparé et prêt à être lancé.',
            'en_cours': 'L\\'Univers a commencé et est en train de se dérouler.',
            'complet': 'L\\'Univers est plein et tous les joueurs sont engagés.',
            'pause': 'L\\'Univers est temporairement interrompu.',
            'termine': 'L\\'Univers est fini, plus de sessions à venir.',
            'annule': 'L\\'Univers a été annulé et ne se déroulera pas.'
        };

        const select = document.getElementById('";
        // line 207
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "status", [], "any", false, false, false, 207), "vars", [], "any", false, false, false, 207), "id", [], "any", false, false, false, 207), "html", null, true);
        yield "');
        const explanationText = explanations[select.value] || '';
        document.getElementById('status-explanation').textContent = explanationText;
    }

    updateStatusExplanation();
    document.getElementById('";
        // line 213
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 213, $this->source); })()), "status", [], "any", false, false, false, 213), "vars", [], "any", false, false, false, 213), "id", [], "any", false, false, false, 213), "html", null, true);
        yield "').addEventListener('change', updateStatusExplanation);

    function showAlert() {
        alertBox.classList.remove('hidden');
        setTimeout(function () {
            alertBox.classList.add('hidden');
        }, 3000);
    }

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
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
        // line 290
        if ((array_key_exists("groupe_j_d_r", $context) &&  !(null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 290, $this->source); })()), "id", [], "any", false, false, false, 290)))) {
            // line 291
            yield "        jdrId = ";
            yield CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 291, $this->source); })()), "id", [], "any", false, false, false, 291);
            yield ";
    ";
        }
        // line 293
        yield "
    const jdrForm = document.getElementById('jdr-form');
    if (jdrForm) {
        jdrForm.addEventListener('submit', function (e) {
            const addedPlayersInput = document.getElementById('added-members-input');
            addedPlayersInput.value = JSON.stringify(addedMembers);

            const checkedCount = categoryContainer.querySelectorAll('input[type=\"checkbox\"]:checked').length;

            if (checkedCount === 0) {
                e.preventDefault();
                categoryErrorMessage.classList.remove('hidden');
            } else {
                categoryErrorMessage.classList.add('hidden');
            }
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
                errorMessage.textContent = jdrId === null ? \"Univers ID non défini.\" : \"Le pseudo est vide.\";
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

                if (data.redirect) {
                    window.location.href = data.redirect;
                }
            } else {
                console.error(data.message);
            }
        })
        .catch(error => {
            console.error('Erreur lors de la suppression de l\\'utilisateur:', error);
        });
    }


    updateMemberLimit();

    const eventCollectionHolder = document.querySelector('#events-wrapper');
    const addEventButton = document.querySelector('#add-event-btn');
    let index = eventCollectionHolder.querySelectorAll('.event-item').length;

    const addNewEventForm = function() {
        const prototype = eventCollectionHolder.dataset.prototype;
        const newForm = prototype.replace(/__name__/g, index);

        const div = document.createElement('div');
        div.classList.add('event-item', 'bg-gray-200', 'p-4', 'rounded-md', 'mb-2', 'flex', 'justify-between', 'items-center', 'space-x-4');
        div.innerHTML = newForm + `
            <button type=\"button\" class=\"remove-event-btn text-red-500 hover:text-red-700 font-bold\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                </svg>
            </button>
        `;
        eventCollectionHolder.appendChild(div);

        div.querySelector('.remove-event-btn').addEventListener('click', function () {
            div.remove();
        });

        index++;
    };

    addEventButton.addEventListener('click', function () {
        addNewEventForm();
    });

    eventCollectionHolder.querySelectorAll('.remove-event-btn').forEach(button => {
        button.addEventListener('click', function () {
            button.closest('.event-item').remove();
        });
    });
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
        return "groupe_jdr/_form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  552 => 293,  546 => 291,  544 => 290,  464 => 213,  455 => 207,  432 => 187,  416 => 174,  408 => 169,  403 => 166,  389 => 154,  379 => 150,  376 => 149,  368 => 147,  360 => 145,  358 => 144,  350 => 139,  345 => 138,  341 => 137,  334 => 132,  332 => 131,  325 => 127,  315 => 120,  311 => 119,  303 => 114,  290 => 103,  272 => 91,  268 => 90,  262 => 87,  258 => 86,  252 => 82,  248 => 81,  244 => 80,  235 => 74,  232 => 73,  213 => 70,  209 => 69,  206 => 68,  203 => 67,  185 => 66,  183 => 65,  169 => 54,  162 => 50,  150 => 40,  148 => 37,  138 => 30,  129 => 24,  124 => 22,  120 => 21,  113 => 17,  109 => 16,  105 => 15,  97 => 9,  91 => 7,  85 => 5,  83 => 4,  75 => 3,  72 => 2,  49 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% block body %}
<div class=\"container mx-auto p-4 sm:p-6 bg-gray-100 rounded-lg shadow-lg mt-6\">
    <h1 class=\"text-2xl font-bold mb-4 text-gray-800\">{% if groupe_j_d_r.id is not null %}Édition de votre Univers{% else %}Création de votre Univers{% endif %}</h1>
    {% if groupe_j_d_r.id is not null %}
        {{ form_start(form, { 'action': path('app_groupe_j_d_r_edit', { 'id': groupe_j_d_r.id }), 'method': 'POST', 'attr': {'class': 'space-y-4', 'id': 'jdr-form'} }) }}
    {% else %}
        {{ form_start(form, { 'action': path('app_groupe_j_d_r_new'), 'method': 'POST', 'attr': {'class': 'space-y-4', 'id': 'jdr-form'} }) }}
    {% endif %}
    <input type=\"hidden\" id=\"added-members-input\" name=\"added_players\">

    <div class=\"p-4 sm:p-6\">
        <h2 class=\"text-lg font-semibold mb-4\">Informations générales</h2>
        
        <div class=\"mb-4\">
            {{ form_label(form.title, 'Titre du Jeu de rôle', { 'attr': {'class': 'block text-base font-semibold text-gray-900 mb-2 tracking-wide'} }) }}
            {{ form_widget(form.title, { 'attr': {'class': 'bg-gray-800 text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-3 border border-gray-600'} }) }}
            {{ form_errors(form.title) }}
        </div>

        <div class=\"mb-4\">
            {{ form_label(form.description, 'Description', { 'attr': {'class': 'block text-base font-semibold text-gray-900 mb-2 tracking-wide'} }) }}
            {{ form_widget(form.description, { 'attr': { 'class': 'bg-gray-800 text-white text-sm rounded-md shadow-inner focus:ring-blue-500 focus:border-blue-500 block w-full p-3 border border-gray-600 resize-none', 'rows': '6', 'placeholder': 'Écrivez la description ici...', 'maxlength': '255', 'oninput': 'updateCharCount(this)' }}) }}
            <div id=\"charCount\" class=\"text-gray-400 text-sm mt-1\">255 caractères restants</div>
            {{ form_errors(form.description) }}
        </div>

        <div class=\"mb-4 grid grid-cols-1 sm:grid-cols-2 gap-6\">
            <div>
                <label for=\"status\" class=\"block text-base font-semibold text-gray-900 mb-2 tracking-wide\">Statut</label>
                {{ form_widget(form.status, { 'attr': { 'class': 'bg-gray-800 text-white rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full h-12 p-3 border border-gray-600', 'id': form.status.vars.id, 'onchange': 'updateStatusExplanation()' }}) }}
                <p id=\"status-explanation\" class=\"mt-2 text-sm text-gray-500\"></p>
            </div>

            <div>
                <label for=\"picture\" class=\"block text-base font-semibold text-gray-900 mb-2 tracking-wide\">Bannière du de l'Univers</label>
                <div class=\"relative\">
                    {{ form_widget(form.picture, { 'attr': { 
                        'class': 'bg-gray-800 text-white text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full h-12 p-3 border border-gray-600 cursor-pointer', 
                        'style': 'display: flex; align-items: center; justify-content: center;' 
                    }}) }}
                </div>
                <p class=\"mt-1 text-sm text-gray-500\" id=\"file_input_help\">SVG, PNG, JPG ou GIF (MAX. 800x400px).</p>
            </div>
        </div>
    </div>

    <div class=\"p-4 sm:p-6\">
        <div class=\"mb-4\">
            <label class=\"inline-flex items-center cursor-pointer\">
                {{ form_widget(form.recrutement, { 'attr': {'class': 'sr-only peer'} }) }}
                <div class=\"relative w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 rounded-full peer dark:bg-gray-700 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600\"></div>
                <span class=\"ms-3 text-dark font-bold\">Activer le recrutement</span>
            </label>
            {{ form_errors(form.recrutement) }}
        </div>

        <!-- Catégories -->
        <h2 class=\"text-lg font-semibold mb-4\">Catégories</h2>
        <div id=\"alert-max-selection\" class=\"hidden bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4\" role=\"alert\">
            <strong class=\"font-bold\">Attention!</strong>
            <span class=\"block sm:inline\">Vous ne pouvez sélectionner que 3 catégories maximum.</span>
        </div>
        <div id=\"category-error-message\" class=\"text-red-500 hidden\">Veuillez sélectionner au moins une catégorie.</div>
        <div id=\"category-container\" class=\"flex flex-wrap gap-2\">
            {% set colors = ['bg-blue-200 text-blue-800', 'bg-green-200 text-green-800', 'bg-yellow-200 text-yellow-800', 'bg-red-200 text-red-800', 'bg-purple-200 text-purple-800', 'bg-pink-200 text-pink-800', 'bg-indigo-200 text-indigo-800', 'bg-teal-200 text-teal-800', 'bg-orange-200 text-orange-800', 'bg-lime-200 text-lime-800', 'bg-fuchsia-200 text-fuchsia-800', 'bg-rose-200 text-rose-800', 'bg-cyan-200 text-cyan-800', 'bg-amber-200 text-amber-800'] %}
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

    <!-- Événements -->
    <div class=\"p-4 sm:p-6\">
        <h2 class=\"text-lg font-semibold mb-4 text-gray-800\">Événements</h2>
        <div id=\"events-wrapper\" data-prototype=\"{{ form_widget(form.events.vars.prototype)|e }}\">
            {% for event in form.events %}
                <div class=\"event-item bg-white border border-gray-200 p-4 rounded-md mb-2 shadow-sm\">
                    <div class=\"flex items-center justify-between mb-4\"> <!-- Align items on the same line -->
                        <div class=\"flex space-x-4 items-center w-full\">
                            <div class=\"w-1/2\">
                                {{ form_label(event.dayOfWeek, 'Jour', {'label_attr': {'class': 'text-sm font-medium text-gray-700'}}) }}
                                {{ form_widget(event.dayOfWeek, {'attr': {'class': 'bg-gray-100 border border-gray-300 rounded-md p-2 text-sm w-full focus:ring-blue-500 focus:border-blue-500'}}) }}
                            </div>
                            <div class=\"w-1/2\">
                                {{ form_label(event.eventTime, 'Heure', {'label_attr': {'class': 'text-sm font-medium text-gray-700'}}) }}
                                {{ form_widget(event.eventTime, {'attr': {'class': 'bg-gray-100 border border-gray-300 rounded-md p-2 text-sm w-full focus:ring-blue-500 focus:border-blue-500'}}) }}
                            </div>
                        </div>
                        <button type=\"button\" class=\"remove-event-btn flex items-center text-red-500 hover:text-red-700 ml-4 mt-5\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                            </svg>
                            <span class=\"ml-2 text-sm\">Supprimer</span>
                        </button>
                    </div>
                </div>
            {% endfor %}
        </div>

        <button type=\"button\" id=\"add-event-btn\" class=\"mt-4 bg-blue-500 text-white px-6 py-3 rounded-md shadow hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500\">
            Ajouter un événement
        </button>
    </div>

    <!-- Gestion des membres -->
    <div class=\"p-4 sm:p-6\">
        <h2 class=\"text-lg font-semibold mb-4 text-gray-800\">Nombre maximum de membres</h2>
        <div class=\"flex items-center space-x-2\">
            <button type=\"button\" id=\"decrement-button\" data-input-counter-decrement=\"{{ form.maxPlayer.vars.id }}\" class=\"bg-gray-800 text-white hover:bg-gray-900 border border-gray-600 rounded-s-lg p-4 h-12 focus:ring-gray-100 focus:ring-2 focus:outline-none\">
                <svg class=\"w-3 h-3\" aria-hidden=\"true\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 18 2\">
                    <path stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M1 1h16\"/>
                </svg>
            </button>
            {{ form_widget(form.maxPlayer, { 'attr': { 'type': 'number', 'class': 'bg-gray-800 text-white border-x-0 border-gray-600 h-12 text-center text-sm focus:ring-blue-500 focus:border-blue-500 block w-24 py-3', 'placeholder': '15', 'required': 'required', 'max': '15', 'min': '1', 'id': form.maxPlayer.vars.id } }) }}
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
                <h4 class=\"text-gray-700 font-medium\">Membres actuels de l'Univers</h4>
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
            <div id=\"error-message\" class=\"text-red-500 hidden\">Utilisateur non trouvé ou déjà ajouté a l'Univers</div>
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

    function updateCharCount(textarea) {
        const maxChars = 255;
        const remainingChars = maxChars - textarea.value.length;
        document.getElementById('charCount').textContent = remainingChars + \" caractères restants\";
    }
document.addEventListener('DOMContentLoaded', function () {
    const decrementButton = document.getElementById('decrement-button');
    const incrementButton = document.getElementById('increment-button');
    const maxPlayerInput = document.getElementById('{{ form.maxPlayer.vars.id }}');
    const selectedMembersList = document.getElementById('selectedMembers') || { children: [] };
    const maxPlayersAllowed = 15;
    const categoryContainer = document.getElementById('category-container');
    const checkboxes = categoryContainer.querySelectorAll('input[type=\"checkbox\"]');
    const alertBox = document.getElementById('alert-max-selection');
    const categoryErrorMessage = document.getElementById('category-error-message');

    function updateStatusExplanation() {
        const explanations = {
            '': 'Veuillez sélectionner un statut pour voir une explication.',
            'preparation': 'L\\'Univers est en phase de préparation',
            'pret_a_jouer': 'L\\'Univers est préparé et prêt à être lancé.',
            'en_cours': 'L\\'Univers a commencé et est en train de se dérouler.',
            'complet': 'L\\'Univers est plein et tous les joueurs sont engagés.',
            'pause': 'L\\'Univers est temporairement interrompu.',
            'termine': 'L\\'Univers est fini, plus de sessions à venir.',
            'annule': 'L\\'Univers a été annulé et ne se déroulera pas.'
        };

        const select = document.getElementById('{{ form.status.vars.id }}');
        const explanationText = explanations[select.value] || '';
        document.getElementById('status-explanation').textContent = explanationText;
    }

    updateStatusExplanation();
    document.getElementById('{{ form.status.vars.id }}').addEventListener('change', updateStatusExplanation);

    function showAlert() {
        alertBox.classList.remove('hidden');
        setTimeout(function () {
            alertBox.classList.add('hidden');
        }, 3000);
    }

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', function () {
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

            const checkedCount = categoryContainer.querySelectorAll('input[type=\"checkbox\"]:checked').length;

            if (checkedCount === 0) {
                e.preventDefault();
                categoryErrorMessage.classList.remove('hidden');
            } else {
                categoryErrorMessage.classList.add('hidden');
            }
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
                errorMessage.textContent = jdrId === null ? \"Univers ID non défini.\" : \"Le pseudo est vide.\";
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

                if (data.redirect) {
                    window.location.href = data.redirect;
                }
            } else {
                console.error(data.message);
            }
        })
        .catch(error => {
            console.error('Erreur lors de la suppression de l\\'utilisateur:', error);
        });
    }


    updateMemberLimit();

    const eventCollectionHolder = document.querySelector('#events-wrapper');
    const addEventButton = document.querySelector('#add-event-btn');
    let index = eventCollectionHolder.querySelectorAll('.event-item').length;

    const addNewEventForm = function() {
        const prototype = eventCollectionHolder.dataset.prototype;
        const newForm = prototype.replace(/__name__/g, index);

        const div = document.createElement('div');
        div.classList.add('event-item', 'bg-gray-200', 'p-4', 'rounded-md', 'mb-2', 'flex', 'justify-between', 'items-center', 'space-x-4');
        div.innerHTML = newForm + `
            <button type=\"button\" class=\"remove-event-btn text-red-500 hover:text-red-700 font-bold\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" class=\"h-5 w-5\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\" />
                </svg>
            </button>
        `;
        eventCollectionHolder.appendChild(div);

        div.querySelector('.remove-event-btn').addEventListener('click', function () {
            div.remove();
        });

        index++;
    };

    addEventButton.addEventListener('click', function () {
        addNewEventForm();
    });

    eventCollectionHolder.querySelectorAll('.remove-event-btn').forEach(button => {
        button.addEventListener('click', function () {
            button.closest('.event-item').remove();
        });
    });
});
</script>
{% endblock %}
", "groupe_jdr/_form.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\groupe_jdr\\_form.html.twig");
    }
}
