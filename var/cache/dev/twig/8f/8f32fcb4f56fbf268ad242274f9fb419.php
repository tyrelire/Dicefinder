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

/* groupe_jdr/index.html.twig */
class __TwigTemplate_6ac6e39aeb26c8776dc434bae93febd7 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "groupe_jdr/index.html.twig", 1);
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

        yield "DiceFinder | Les Univers";
        
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
<div class=\"container mx-auto px-4 p-6\">
    <h1 class=\"text-2xl md:text-4xl font-bold text-center mb-10 text-white\">Les Univers</h1>

    <form method=\"get\" action=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"mb-8 space-y-4\">
        <div class=\"space-y-4 md:flex md:space-y-0 md:space-x-4\">
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher un Univers...\" value=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["searchTerm"]) || array_key_exists("searchTerm", $context) ? $context["searchTerm"] : (function () { throw new RuntimeError('Variable "searchTerm" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "\" class=\"w-full p-3 bg-gray-800 border border-white text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500\">
            
            <select name=\"status\" class=\"w-full md:w-48 p-2.5 bg-gray-800 border border-white text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500\">
                <option value=\"\">Tous les statuts</option>
                <option value=\"preparation\" ";
        // line 16
        if (((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 16, $this->source); })()) == "preparation")) {
            yield "selected";
        }
        yield ">En Préparation</option>
                <option value=\"pret_a_jouer\" ";
        // line 17
        if (((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 17, $this->source); })()) == "pret_a_jouer")) {
            yield "selected";
        }
        yield ">Prêt à Jouer</option>
                <option value=\"en_cours\" ";
        // line 18
        if (((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 18, $this->source); })()) == "en_cours")) {
            yield "selected";
        }
        yield ">En Cours</option>
                <option value=\"complet\" ";
        // line 19
        if (((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 19, $this->source); })()) == "complet")) {
            yield "selected";
        }
        yield ">Complet</option>
                <option value=\"pause\" ";
        // line 20
        if (((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 20, $this->source); })()) == "pause")) {
            yield "selected";
        }
        yield ">En Pause</option>
                <option value=\"termine\" ";
        // line 21
        if (((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 21, $this->source); })()) == "termine")) {
            yield "selected";
        }
        yield ">Terminé</option>
                <option value=\"annule\" ";
        // line 22
        if (((isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 22, $this->source); })()) == "annule")) {
            yield "selected";
        }
        yield ">Annulé</option>
            </select>

            <div class=\"flex items-center space-x-2\">
                <label class=\"inline-flex items-center me-5 cursor-pointer\">
                    <input type=\"checkbox\" name=\"recrutement\" value=\"1\" ";
        // line 27
        if ((isset($context["selectedRecrutement"]) || array_key_exists("selectedRecrutement", $context) ? $context["selectedRecrutement"] : (function () { throw new RuntimeError('Variable "selectedRecrutement" does not exist.', 27, $this->source); })())) {
            yield "checked";
        }
        yield " class=\"sr-only peer\">
                    <div class=\"relative w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:outline-none peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-teal-600\"></div>
                    <span class=\"ms-3 text-sm font-medium text-white\">Recrutement Ouvert</span>
                </label>
            </div>
        </div>

        <div class=\"md:hidden\">
            <button type=\"button\" id=\"toggle-categories\" class=\"w-full bg-blue-500 text-white p-2.5 rounded-lg shadow hover:bg-blue-600\">
                Voir les catégories
            </button>
        </div>

        <div id=\"categories-section\" class=\"hidden md:block mt-8\">
            <p class=\"text-white mb-4\">Sélectionnez jusqu'à 3 catégories.</p>
            <div class=\"flex flex-wrap justify-center mb-8 space-x-2\">
                ";
        // line 43
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["categories"]) || array_key_exists("categories", $context) ? $context["categories"] : (function () { throw new RuntimeError('Variable "categories" does not exist.', 43, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 44
            yield "                    <label class=\"m-2 px-3 py-2 rounded-lg flex items-center category-label
                        ";
            // line 45
            if (((isset($context["selectedCategories"]) || array_key_exists("selectedCategories", $context) ? $context["selectedCategories"] : (function () { throw new RuntimeError('Variable "selectedCategories" does not exist.', 45, $this->source); })()) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 45), (isset($context["selectedCategories"]) || array_key_exists("selectedCategories", $context) ? $context["selectedCategories"] : (function () { throw new RuntimeError('Variable "selectedCategories" does not exist.', 45, $this->source); })())))) {
                // line 46
                yield "                            bg-green-600 text-white
                        ";
            } else {
                // line 48
                yield "                            bg-gray-700 text-white
                        ";
            }
            // line 49
            yield "\">
                        <input type=\"checkbox\" name=\"categories[]\" value=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 50), "html", null, true);
            yield "\" class=\"mr-2 category-checkbox\"
                            ";
            // line 51
            if (((isset($context["selectedCategories"]) || array_key_exists("selectedCategories", $context) ? $context["selectedCategories"] : (function () { throw new RuntimeError('Variable "selectedCategories" does not exist.', 51, $this->source); })()) && CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "id", [], "any", false, false, false, 51), (isset($context["selectedCategories"]) || array_key_exists("selectedCategories", $context) ? $context["selectedCategories"] : (function () { throw new RuntimeError('Variable "selectedCategories" does not exist.', 51, $this->source); })())))) {
                yield "checked";
            }
            yield ">
                        ";
            // line 52
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 52), "html", null, true);
            yield "
                    </label>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        yield "            </div>
        </div>

        <div class=\"flex justify-center\">
            <button type=\"submit\" class=\"bg-blue-500 text-white p-2.5 md:p-3 rounded-lg shadow hover:bg-blue-600 text-center flex items-center justify-center space-x-2 md:w-auto\">
                <span>Rechercher</span>
            </button>
        </div>
    </form>

    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
        ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["groupe_j_d_rs"]) || array_key_exists("groupe_j_d_rs", $context) ? $context["groupe_j_d_rs"] : (function () { throw new RuntimeError('Variable "groupe_j_d_rs" does not exist.', 66, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe_j_d_r"]) {
            // line 67
            yield "            <div class=\" bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white relative\">
                <div class=\"relative\">
                    <img src=\"";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "picture", [], "any", false, false, false, 69))), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 69), "html", null, true);
            yield " image\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                    <div class=\"absolute top-2 right-2\">
                        <span class=\"text-sm font-bold px-2 py-1 rounded 
                            ";
            // line 72
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "status", [], "any", false, false, false, 72) == "preparation")) {
                yield " bg-yellow-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 73
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 73) == "pret_a_jouer")) {
                yield " bg-green-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 74
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 74) == "en_cours")) {
                yield " bg-blue-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 75
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 75) == "complet")) {
                yield " bg-red-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 76
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 76) == "pause")) {
                yield " bg-gray-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 77
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 77) == "termine")) {
                yield " bg-purple-500
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 78
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 78) == "annule")) {
                yield " bg-gray-400
                            ";
            } else {
                // line 79
                yield " bg-gray-700
                            ";
            }
            // line 80
            yield " text-white\">
                            ";
            // line 81
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "status", [], "any", false, false, false, 81) == "preparation")) {
                // line 82
                yield "                                En Préparation
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 83
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 83) == "pret_a_jouer")) {
                // line 84
                yield "                                Prêt à jouer
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 85
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 85) == "en_cours")) {
                // line 86
                yield "                                En Cours
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 87
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 87) == "complet")) {
                // line 88
                yield "                                Complet
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 89
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 89) == "pause")) {
                // line 90
                yield "                                En Pause
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 91
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 91) == "termine")) {
                // line 92
                yield "                                Terminé
                            ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 93
$context["groupe_j_d_r"], "status", [], "any", false, false, false, 93) == "annule")) {
                // line 94
                yield "                                Annulé
                            ";
            } else {
                // line 96
                yield "                                Statut inconnu
                            ";
            }
            // line 98
            yield "                        </span>
                    </div>
                </div>

                <div class=\"flex justify-between items-center mb-2\">
                    <a href=\"";
            // line 103
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 103)]), "html", null, true);
            yield "\" class=\"font-semibold\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "title", [], "any", false, false, false, 103), "html", null, true);
            yield "</a>
                    <a href=\"";
            // line 104
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "id", [], "any", false, false, false, 104)]), "html", null, true);
            yield "\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs\">Voir</a>
                </div>

                <div class=\"flex justify-between items-center mt-2\">
                    <div class=\"flex items-center\">
                        ";
            // line 109
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 109), "avatar", [], "any", false, false, false, 109)) {
                // line 110
                yield "                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 110), "avatar", [], "any", false, false, false, 110))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded h-8 w-8 object-cover\">
                        ";
            } else {
                // line 112
                yield "                            <img class=\"rounded h-8 w-8 object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                        ";
            }
            // line 114
            yield "                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400\">MJ</p>
                            <p class=\"text-xs text-white\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "owner", [], "any", false, false, false, 116), "username", [], "any", false, false, false, 116), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                    <div class=\"text-right\">
                        <p class=\"text-xs text-gray-400\">Nombre de joueurs</p>
                        ";
            // line 121
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 121)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 121))) {
                // line 122
                yield "                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                        ";
            } else {
                // line 124
                yield "                            <p class=\"text-lg font-bold text-white\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "players", [], "any", false, false, false, 124)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe_j_d_r"], "maxPlayer", [], "any", false, false, false, 124), "html", null, true);
                yield "</p>
                        ";
            }
            // line 126
            yield "                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 130
            yield "            <p class=\"text-gray-700 text-lg\">Aucun résultat trouvé</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe_j_d_r'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        yield "    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleCategoriesBtn = document.getElementById('toggle-categories');
        const categoriesSection = document.getElementById('categories-section');

        toggleCategoriesBtn.addEventListener('click', function() {
            categoriesSection.classList.toggle('hidden');
        });

        const checkboxes = document.querySelectorAll('.category-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                let label = this.closest('.category-label');
                if (this.checked) {
                    label.classList.add('bg-green-600');
                    label.classList.remove('bg-gray-700');
                } else {
                    label.classList.remove('bg-green-600');
                    label.classList.add('bg-gray-700');
                }
                
                let checkedCount = document.querySelectorAll('.category-checkbox:checked').length;
                if (checkedCount > 3) {
                    this.checked = false;
                    label.classList.remove('bg-green-600');
                    label.classList.add('bg-gray-700');
                    alert(\"Vous ne pouvez sélectionner que 3 catégories au maximum.\");
                }
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
        return "groupe_jdr/index.html.twig";
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
        return array (  406 => 132,  399 => 130,  391 => 126,  383 => 124,  379 => 122,  377 => 121,  369 => 116,  365 => 114,  359 => 112,  353 => 110,  351 => 109,  343 => 104,  337 => 103,  330 => 98,  326 => 96,  322 => 94,  320 => 93,  317 => 92,  315 => 91,  312 => 90,  310 => 89,  307 => 88,  305 => 87,  302 => 86,  300 => 85,  297 => 84,  295 => 83,  292 => 82,  290 => 81,  287 => 80,  283 => 79,  278 => 78,  274 => 77,  270 => 76,  266 => 75,  262 => 74,  258 => 73,  254 => 72,  246 => 69,  242 => 67,  237 => 66,  224 => 55,  215 => 52,  209 => 51,  205 => 50,  202 => 49,  198 => 48,  194 => 46,  192 => 45,  189 => 44,  185 => 43,  164 => 27,  154 => 22,  148 => 21,  142 => 20,  136 => 19,  130 => 18,  124 => 17,  118 => 16,  111 => 12,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}DiceFinder | Les Univers{% endblock %}

{% block body %}

<div class=\"container mx-auto px-4 p-6\">
    <h1 class=\"text-2xl md:text-4xl font-bold text-center mb-10 text-white\">Les Univers</h1>

    <form method=\"get\" action=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"mb-8 space-y-4\">
        <div class=\"space-y-4 md:flex md:space-y-0 md:space-x-4\">
            <input type=\"text\" name=\"search\" placeholder=\"Rechercher un Univers...\" value=\"{{ searchTerm }}\" class=\"w-full p-3 bg-gray-800 border border-white text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500\">
            
            <select name=\"status\" class=\"w-full md:w-48 p-2.5 bg-gray-800 border border-white text-white rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500\">
                <option value=\"\">Tous les statuts</option>
                <option value=\"preparation\" {% if selectedStatus == 'preparation' %}selected{% endif %}>En Préparation</option>
                <option value=\"pret_a_jouer\" {% if selectedStatus == 'pret_a_jouer' %}selected{% endif %}>Prêt à Jouer</option>
                <option value=\"en_cours\" {% if selectedStatus == 'en_cours' %}selected{% endif %}>En Cours</option>
                <option value=\"complet\" {% if selectedStatus == 'complet' %}selected{% endif %}>Complet</option>
                <option value=\"pause\" {% if selectedStatus == 'pause' %}selected{% endif %}>En Pause</option>
                <option value=\"termine\" {% if selectedStatus == 'termine' %}selected{% endif %}>Terminé</option>
                <option value=\"annule\" {% if selectedStatus == 'annule' %}selected{% endif %}>Annulé</option>
            </select>

            <div class=\"flex items-center space-x-2\">
                <label class=\"inline-flex items-center me-5 cursor-pointer\">
                    <input type=\"checkbox\" name=\"recrutement\" value=\"1\" {% if selectedRecrutement %}checked{% endif %} class=\"sr-only peer\">
                    <div class=\"relative w-11 h-6 bg-gray-200 rounded-full peer dark:bg-gray-700 peer-focus:outline-none peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-teal-600\"></div>
                    <span class=\"ms-3 text-sm font-medium text-white\">Recrutement Ouvert</span>
                </label>
            </div>
        </div>

        <div class=\"md:hidden\">
            <button type=\"button\" id=\"toggle-categories\" class=\"w-full bg-blue-500 text-white p-2.5 rounded-lg shadow hover:bg-blue-600\">
                Voir les catégories
            </button>
        </div>

        <div id=\"categories-section\" class=\"hidden md:block mt-8\">
            <p class=\"text-white mb-4\">Sélectionnez jusqu'à 3 catégories.</p>
            <div class=\"flex flex-wrap justify-center mb-8 space-x-2\">
                {% for category in categories %}
                    <label class=\"m-2 px-3 py-2 rounded-lg flex items-center category-label
                        {% if selectedCategories and category.id in selectedCategories %}
                            bg-green-600 text-white
                        {% else %}
                            bg-gray-700 text-white
                        {% endif %}\">
                        <input type=\"checkbox\" name=\"categories[]\" value=\"{{ category.id }}\" class=\"mr-2 category-checkbox\"
                            {% if selectedCategories and category.id in selectedCategories %}checked{% endif %}>
                        {{ category.name }}
                    </label>
                {% endfor %}
            </div>
        </div>

        <div class=\"flex justify-center\">
            <button type=\"submit\" class=\"bg-blue-500 text-white p-2.5 md:p-3 rounded-lg shadow hover:bg-blue-600 text-center flex items-center justify-center space-x-2 md:w-auto\">
                <span>Rechercher</span>
            </button>
        </div>
    </form>

    <div class=\"grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6\">
        {% for groupe_j_d_r in groupe_j_d_rs %}
            <div class=\" bg-gray-800 rounded-lg shadow-md p-6 pb-5 text-white relative\">
                <div class=\"relative\">
                    <img src=\"{{ asset('uploads/images-jdr/' ~ groupe_j_d_r.picture) }}\" alt=\"{{ groupe_j_d_r.title }} image\" class=\"rounded-lg mb-4 w-full h-[20rem] object-cover\">
                    <div class=\"absolute top-2 right-2\">
                        <span class=\"text-sm font-bold px-2 py-1 rounded 
                            {% if groupe_j_d_r.status == 'preparation' %} bg-yellow-500
                            {% elseif groupe_j_d_r.status == 'pret_a_jouer' %} bg-green-500
                            {% elseif groupe_j_d_r.status == 'en_cours' %} bg-blue-500
                            {% elseif groupe_j_d_r.status == 'complet' %} bg-red-500
                            {% elseif groupe_j_d_r.status == 'pause' %} bg-gray-500
                            {% elseif groupe_j_d_r.status == 'termine' %} bg-purple-500
                            {% elseif groupe_j_d_r.status == 'annule' %} bg-gray-400
                            {% else %} bg-gray-700
                            {% endif %} text-white\">
                            {% if groupe_j_d_r.status == 'preparation' %}
                                En Préparation
                            {% elseif groupe_j_d_r.status == 'pret_a_jouer' %}
                                Prêt à jouer
                            {% elseif groupe_j_d_r.status == 'en_cours' %}
                                En Cours
                            {% elseif groupe_j_d_r.status == 'complet' %}
                                Complet
                            {% elseif groupe_j_d_r.status == 'pause' %}
                                En Pause
                            {% elseif groupe_j_d_r.status == 'termine' %}
                                Terminé
                            {% elseif groupe_j_d_r.status == 'annule' %}
                                Annulé
                            {% else %}
                                Statut inconnu
                            {% endif %}
                        </span>
                    </div>
                </div>

                <div class=\"flex justify-between items-center mb-2\">
                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"font-semibold\">{{ groupe_j_d_r.title }}</a>
                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"bg-blue-600 text-white px-2 py-1 rounded text-xs\">Voir</a>
                </div>

                <div class=\"flex justify-between items-center mt-2\">
                    <div class=\"flex items-center\">
                        {% if groupe_j_d_r.owner.avatar %}
                            <img src=\"{{ asset('uploads/avatars/' ~ groupe_j_d_r.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded h-8 w-8 object-cover\">
                        {% else %}
                            <img class=\"rounded h-8 w-8 object-cover\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                        {% endif %}
                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400\">MJ</p>
                            <p class=\"text-xs text-white\">{{ groupe_j_d_r.owner.username }}</p>
                        </div>
                    </div>
                    <div class=\"text-right\">
                        <p class=\"text-xs text-gray-400\">Nombre de joueurs</p>
                        {% if groupe_j_d_r.players|length >= groupe_j_d_r.maxPlayer %}
                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                        {% else %}
                            <p class=\"text-lg font-bold text-white\">{{ groupe_j_d_r.players|length }} / {{ groupe_j_d_r.maxPlayer }}</p>
                        {% endif %}
                    </div>
                </div>
            </div>
        {% else %}
            <p class=\"text-gray-700 text-lg\">Aucun résultat trouvé</p>
        {% endfor %}
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleCategoriesBtn = document.getElementById('toggle-categories');
        const categoriesSection = document.getElementById('categories-section');

        toggleCategoriesBtn.addEventListener('click', function() {
            categoriesSection.classList.toggle('hidden');
        });

        const checkboxes = document.querySelectorAll('.category-checkbox');
        checkboxes.forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                let label = this.closest('.category-label');
                if (this.checked) {
                    label.classList.add('bg-green-600');
                    label.classList.remove('bg-gray-700');
                } else {
                    label.classList.remove('bg-green-600');
                    label.classList.add('bg-gray-700');
                }
                
                let checkedCount = document.querySelectorAll('.category-checkbox:checked').length;
                if (checkedCount > 3) {
                    this.checked = false;
                    label.classList.remove('bg-green-600');
                    label.classList.add('bg-gray-700');
                    alert(\"Vous ne pouvez sélectionner que 3 catégories au maximum.\");
                }
            });
        });
    });
</script>

{% endblock %}
", "groupe_jdr/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\groupe_jdr\\index.html.twig");
    }
}
