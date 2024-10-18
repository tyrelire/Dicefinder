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

/* groupe_jdr/show.html.twig */
class __TwigTemplate_82a570a5cc75e585ca0ba5b3206667b5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "groupe_jdr/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "groupe_jdr/show.html.twig", 1);
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

        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 3, $this->source); })()), "title", [], "any", false, false, false, 3), "html", null, true);
        yield " | DiceFinder";
        
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
        yield "<div class=\"container mx-auto px-4 p-6\">
    <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"glassmorphism text-white bg-[#4447a1] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6 mr-3\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3\" />
        </svg>
        Retour
    </a>
    <div class=\"bg-slate-900 text-white min-h-screen p-4 md:p-8 space-y-10\">
        <div class=\"flex flex-col space-y-8 lg:space-y-0 lg:flex-row items-start lg:items-start justify-between lg:space-x-10\">
            <div class=\"w-full lg:w-1/2 space-y-8 relative\">
                <img src=\"";
        // line 16
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 16, $this->source); })()), "picture", [], "any", false, false, false, 16))), "html", null, true);
        yield "\" alt=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 16, $this->source); })()), "title", [], "any", false, false, false, 16), "html", null, true);
        yield "\" class=\"rounded-lg shadow-lg w-full h-auto lg:h-[500px] object-cover\">
                <div class=\"absolute top-2 right-2\">
                    <span class=\"text-xs sm:text-sm font-bold px-2 py-1 rounded 
                            ";
        // line 19
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 19, $this->source); })()), "status", [], "any", false, false, false, 19) == "nouveau")) {
            yield " bg-green-500
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 20
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 20, $this->source); })()), "status", [], "any", false, false, false, 20) == "en_cours")) {
            yield " bg-blue-500
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 21
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 21, $this->source); })()), "status", [], "any", false, false, false, 21) == "termine")) {
            yield " bg-red-500
                            ";
        } else {
            // line 22
            yield " bg-gray-700
                            ";
        }
        // line 23
        yield " text-white\">
                            ";
        // line 24
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 24, $this->source); })()), "status", [], "any", false, false, false, 24) == "nouveau")) {
            // line 25
            yield "                                Nouveau
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26) == "en_cours")) {
            // line 27
            yield "                                En Cours
                            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 28
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 28, $this->source); })()), "status", [], "any", false, false, false, 28) == "termine")) {
            // line 29
            yield "                                Terminé
                            ";
        } else {
            // line 31
            yield "                                Statut inconnu
                            ";
        }
        // line 33
        yield "                    </span>
                </div>

                ";
        // line 36
        if (((isset($context["is_member"]) || array_key_exists("is_member", $context) ? $context["is_member"] : (function () { throw new RuntimeError('Variable "is_member" does not exist.', 36, $this->source); })()) &&  !(isset($context["is_owner"]) || array_key_exists("is_owner", $context) ? $context["is_owner"] : (function () { throw new RuntimeError('Variable "is_owner" does not exist.', 36, $this->source); })()))) {
            // line 37
            yield "                    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("leave_jdr", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 37, $this->source); })()), "id", [], "any", false, false, false, 37)]), "html", null, true);
            yield "\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir quitter cet univers ?');\" class=\"mt-4\">
                        <input type=\"hidden\" name=\"_token\" value=\"";
            // line 38
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("leave" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 38, $this->source); })()), "id", [], "any", false, false, false, 38))), "html", null, true);
            yield "\">
                        <button type=\"submit\" class=\"bg-red-600 text-white px-4 py-2 rounded w-full hover:bg-red-700 transition-all duration-300\">
                            Quitter l'univers
                        </button>
                    </form>
                ";
        }
        // line 44
        yield "
                ";
        // line 45
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 45, $this->source); })()), "user", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 45, $this->source); })()), "owner", [], "any", false, false, false, 45), "id", [], "any", false, false, false, 45)))) {
            // line 46
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 46, $this->source); })()), "id", [], "any", false, false, false, 46)]), "html", null, true);
            yield "\" class=\"w-full bg-green-600 text-white font-bold py-3 rounded mt-4 hover:bg-green-700 block text-center\">
                        Editer mon Univers
                    </a>
                ";
        }
        // line 50
        yield "            </div>

            <div class=\"w-full lg:w-1/2 space-y-6\">
                <div class=\"flex items-center mb-4\">
                    <svg  width=\"36\" height=\"35\" viewBox=\"0 0 46 45\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"mr-3\">
                        <g clip-path=\"url(#clip0_502_849)\">
                            <g filter=\"url(#filter0_d_502_849)\">
                                <path d=\"M27.3125 0.00012207C17.5094 5.52568 18.6875 21.0939 18.6875 21.0939C18.6875 21.0939 14.375 19.6876 14.375 13.3595C9.22992 16.2781 5.75 21.8878 5.75 28.1251C5.75 37.4449 13.4731 45.0001 23 45.0001C32.527 45.0001 40.25 37.4449 40.25 28.1251C40.2499 14.4142 27.3125 11.6017 27.3125 0.00012207V0.00012207ZM24.5152 39.1855C21.0489 40.031 17.5381 37.9674 16.6737 34.5763C15.8095 31.1853 17.9189 27.7507 21.3854 26.9052C29.7542 24.864 30.803 20.2602 30.803 20.2602C30.803 20.2602 34.9762 36.6339 24.5152 39.1855V39.1855Z\" fill=\"#FF6D00\"/>
                                <path d=\"M18.5318 21.569C18.5321 21.5691 18.5325 21.5692 18.6875 21.0939L18.5325 21.5692L19.2424 21.8007L19.1861 21.0563L19.186 21.0561L19.186 21.0561L19.1859 21.0546L19.1854 21.0474L19.1833 21.0165C19.1815 20.9887 19.1789 20.9465 19.1759 20.8907C19.1699 20.7791 19.1622 20.6132 19.1558 20.3992C19.143 19.9711 19.1353 19.351 19.1564 18.5888C19.1985 17.0632 19.3556 14.9744 19.8138 12.7186C20.686 8.42494 22.6274 3.62541 26.8367 0.874025C27.1307 6.12395 30.0519 9.60489 32.9697 13.0818C33.1125 13.2519 33.2552 13.4221 33.3977 13.5924C36.6229 17.4486 39.75 21.4598 39.75 28.1251C39.75 37.1585 32.2612 44.5001 23 44.5001C13.7388 44.5001 6.25 37.1585 6.25 28.1251C6.25 22.3697 9.30569 17.1606 13.9022 14.2277C14.0804 17.0177 15.1074 18.8193 16.1676 19.9429C16.7461 20.556 17.3263 20.9587 17.7658 21.2095C17.9857 21.335 18.171 21.4228 18.3043 21.4803C18.371 21.509 18.4248 21.5302 18.4635 21.5447C18.4828 21.552 18.4984 21.5576 18.51 21.5616L18.5244 21.5665L18.5292 21.5682L18.531 21.5688L18.5318 21.569ZM30.803 20.2602L31.2875 20.1367L30.3179 20.1491C30.3157 20.1485 30.3157 20.1484 30.3157 20.1484L30.3158 20.1478L30.3153 20.1498C30.3146 20.1524 30.3136 20.1565 30.3121 20.162C30.311 20.1659 30.3097 20.1704 30.3082 20.1757C30.301 20.2011 30.2885 20.2425 30.2692 20.2982C30.2306 20.4096 30.1649 20.578 30.0601 20.7899C29.8509 21.2132 29.4852 21.8117 28.8665 22.4766C27.6326 23.8027 25.3683 25.4191 21.2669 26.4195C17.5392 27.3286 15.254 31.0303 16.1892 34.6998L16.6708 34.577L16.1892 34.6998C17.1235 38.3653 20.9098 40.5796 24.6337 39.6713L24.5152 39.1855L24.6337 39.6713C27.3939 38.998 29.2034 37.4023 30.3453 35.3997C31.4778 33.4135 31.9465 31.0424 32.0811 28.7959C32.216 26.5446 32.0172 24.3821 31.7865 22.7869C31.6709 21.988 31.5469 21.3284 31.4515 20.8674C31.4038 20.6368 31.3632 20.4557 31.3344 20.3315C31.3199 20.2694 31.3084 20.2215 31.3004 20.1887L31.2911 20.151L31.2886 20.1409L31.2879 20.138L31.2877 20.1372C31.2876 20.1369 31.2875 20.1367 30.803 20.2602Z\" stroke=\"black\"/>
                            </g>
                        </g>
                        <defs>
                            <filter id=\"filter0_d_502_849\" x=\"1.75\" y=\"0.00012207\" width=\"42.5001\" height=\"53\" filterUnits=\"userSpaceOnUse\" color-interpolation-filters=\"sRGB\">
                                <feFlood flood-opacity=\"0\" result=\"BackgroundImageFix\"/>
                                <feColorMatrix in=\"SourceAlpha\" type=\"matrix\" values=\"0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0\" result=\"hardAlpha\"/>
                                <feOffset dy=\"4\"/>
                                <feGaussianBlur stdDeviation=\"2\"/>
                                <feComposite in2=\"hardAlpha\" operator=\"out\"/>
                                <feColorMatrix type=\"matrix\" values=\"0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0\"/>
                                <feBlend mode=\"normal\" in2=\"BackgroundImageFix\" result=\"effect1_dropShadow_502_849\"/>
                                <feBlend mode=\"normal\" in=\"SourceGraphic\" in2=\"effect1_dropShadow_502_849\" result=\"shape\"/>
                            </filter>
                            <clipPath id=\"clip0_502_849\">
                                <rect width=\"46\" height=\"45\" fill=\"white\"/>
                            </clipPath>
                        </defs>
                    </svg>
                    ";
        // line 77
        if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["favoriteJdrs"]) || array_key_exists("favoriteJdrs", $context) ? $context["favoriteJdrs"] : (function () { throw new RuntimeError('Variable "favoriteJdrs" does not exist.', 77, $this->source); })()), "contains", [(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 77, $this->source); })())], "method", false, false, false, 77)) {
            // line 78
            yield "                        <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_favorite", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 78, $this->source); })()), "id", [], "any", false, false, false, 78)]), "html", null, true);
            yield "\" class=\"text-lg font-semibold text-gray-300 cursor-pointer hover:text-orange-500 pt-1\">
                            Ajouter aux Favoris
                        </a>
                    ";
        } else {
            // line 82
            yield "                        <div class=\"flex items-center\">
                            <span class=\"text-lg font-semibold text-gray-300\">Déjà dans les favoris</span>
                            <svg class=\"w-5 h-5 sm:w-6 sm:h-6 text-green-500 ml-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                            </svg>
                        </div>
                    ";
        }
        // line 89
        yield "                </div>
                <div class=\"flex justify-between items-center\">
                    <h2 class=\"text-2xl sm:text-3xl font-bold\">";
        // line 91
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 91, $this->source); })()), "title", [], "any", false, false, false, 91), "html", null, true);
        yield "</h2>
                </div>
                <p class=\"text-gray-300\">";
        // line 93
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 93, $this->source); })()), "description", [], "any", false, false, false, 93), "html", null, true);
        yield "</p>

                <div class=\"flex justify-between\">
                    <div>
                        <span class=\"text-gray-400\">Date de Création</span>
                        <p class=\"text-lg font-semibold\">";
        // line 98
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 98, $this->source); })()), "getCreatedAt", [], "any", false, false, false, 98), "d/m/Y"), "html", null, true);
        yield "</p>
                    </div>
                    <div>
                        <span class=\"text-gray-400 block\">Participants</span>
                        <div class=\"flex items-center gap-2\">
                            <p class=\"text-lg font-semibold\">";
        // line 103
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 103, $this->source); })()), "players", [], "any", false, false, false, 103)), "html", null, true);
        yield "/";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 103, $this->source); })()), "maxPlayer", [], "any", false, false, false, 103), "html", null, true);
        yield "</p>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div id=\"category-container\" class=\"mt-6 glassmorphism p-6 rounded-lg\">
                    <h3 class=\"font-semibold mb-4\">Catégories</h3>
                    <div class=\"flex flex-wrap gap-2\">
                        ";
        // line 114
        $context["colors"] = ["bg-blue-200 text-blue-800", "bg-green-200 text-green-800", "bg-yellow-200 text-yellow-800", "bg-red-200 text-red-800"];
        // line 115
        yield "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 115, $this->source); })()), "categories", [], "any", false, false, false, 115));
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
            // line 116
            yield "                            ";
            $context["color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 116, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 116) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 116, $this->source); })()))), [], "array", false, false, false, 116);
            // line 117
            yield "                            <span class=\"badge ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 117, $this->source); })()), "html", null, true);
            yield " px-2 py-1 rounded\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 117), "html", null, true);
            yield "</span>
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
        // line 119
        yield "                    </div>
                </div>

                <div class=\"glassmorphism p-6 rounded-lg space-y-4\">
                    <h3 class=\"font-semibold\">MJ et Joueurs</h3>
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4\">
                        <div class=\"flex items-center space-x-4\">
                            ";
        // line 126
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 126, $this->source); })()), "owner", [], "any", false, false, false, 126), "avatar", [], "any", false, false, false, 126)) {
            // line 127
            yield "                                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 127, $this->source); })()), "owner", [], "any", false, false, false, 127), "avatar", [], "any", false, false, false, 127))), "html", null, true);
            yield "\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 127, $this->source); })()), "owner", [], "any", false, false, false, 127), "username", [], "any", false, false, false, 127), "html", null, true);
            yield "\">
                            ";
        } else {
            // line 129
            yield "                                <img class=\"rounded-full w-12 h-12 object-cover\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Default profile photo\">
                            ";
        }
        // line 131
        yield "                            <div class=\"flex-1 min-w-0\">
                                <p class=\"font-semibold truncate max-w-full\">";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 132, $this->source); })()), "owner", [], "any", false, false, false, 132), "username", [], "any", false, false, false, 132), "html", null, true);
        yield "</p>
                                <span class=\"text-gray-400 text-sm\">MJ</span>
                            </div>
                        </div>
                        ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 136, $this->source); })()), "players", [], "any", false, false, false, 136));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 137
            yield "                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 137) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 137, $this->source); })()), "owner", [], "any", false, false, false, 137), "id", [], "any", false, false, false, 137))) {
                // line 138
                yield "                                <div class=\"flex items-center space-x-4\">
                                    ";
                // line 139
                if (CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 139)) {
                    // line 140
                    yield "                                        <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 140))), "html", null, true);
                    yield "\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 140), "html", null, true);
                    yield "\">
                                    ";
                } else {
                    // line 142
                    yield "                                        <img class=\"rounded-full w-12 h-12 object-cover\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Default profile photo\">
                                    ";
                }
                // line 144
                yield "                                    <div class=\"flex-1 min-w-0\">
                                        <p class=\"font-semibold truncate max-w-full\">";
                // line 145
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 145), "html", null, true);
                yield "</p>
                                        <span class=\"text-gray-400 text-sm\">Joueur</span>
                                    </div>
                                </div>
                            ";
            }
            // line 150
            yield "                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['player'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        yield "                    </div>
                </div>

                <div class=\"glassmorphism p-6 rounded-lg space-y-4\">
                    <h3 class=\"font-semibold\">Recrutement</h3>
                    <p class=\"text-lg font-semibold ";
        // line 156
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 156, $this->source); })()), "recrutement", [], "any", false, false, false, 156)) ? ("text-green-500") : ("text-red-500"));
        yield "\">
                        ";
        // line 157
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 157, $this->source); })()), "recrutement", [], "any", false, false, false, 157)) ? ("Ouvert") : ("Fermé"));
        yield "
                    </p>
                </div>
            </div>
        </div>

        <div class=\"text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700\">
            <ul class=\"flex flex-wrap justify-between sm:justify-center space-x-4 sm:space-x-8 -mb-px overflow-x-auto\">
                <li class=\"me-2\">
                    <a href=\"#\" class=\"inline-block p-3 sm:p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500\" data-tab-target=\"#description-tab\" aria-current=\"page\">Description</a>
                </li>
                <li class=\"me-2\">
                    <a href=\"#\" class=\"inline-block p-3 sm:p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" data-tab-target=\"#horaire-tab\">Horaire</a>
                </li>
            </ul>
        </div>

        <div id=\"description-tab\" class=\"tab-content\">
            <h3 class=\"text-lg font-semibold\">Description</h3>
            <p>";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 176, $this->source); })()), "description", [], "any", false, false, false, 176), "html", null, true);
        yield "</p>
        </div>

        <div id=\"horaire-tab\" class=\"tab-content hidden\">
            <h3 class=\"text-lg font-semibold\">Horaire des événements</h3>
            <ul>
                ";
        // line 182
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 182, $this->source); })()), "events", [], "any", false, false, false, 182));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 183
            yield "                    <li>
                        ";
            // line 184
            $context["dayOfWeek"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 184), "l");
            // line 185
            yield "                        ";
            $context["dayOfWeekFr"] = CoreExtension::getAttribute($this->env, $this->source, ["Monday" => "Lundi", "Tuesday" => "Mardi", "Wednesday" => "Mercredi", "Thursday" => "Jeudi", "Friday" => "Vendredi", "Saturday" => "Samedi", "Sunday" => "Dimanche"],             // line 193
(isset($context["dayOfWeek"]) || array_key_exists("dayOfWeek", $context) ? $context["dayOfWeek"] : (function () { throw new RuntimeError('Variable "dayOfWeek" does not exist.', 193, $this->source); })()), [], "array", false, false, false, 186);
            // line 194
            yield "
                        ";
            // line 195
            $context["hour"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 195), "H");
            // line 196
            yield "                        ";
            $context["minute"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 196), "i");
            // line 197
            yield "
                        ";
            // line 198
            if ((((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 198, $this->source); })()) >= 0) && ((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 198, $this->source); })()) < 12))) {
                // line 199
                yield "                            ";
                $context["period"] = "du matin";
                // line 200
                yield "                        ";
            } elseif ((((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 200, $this->source); })()) >= 12) && ((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 200, $this->source); })()) < 18))) {
                // line 201
                yield "                            ";
                $context["period"] = "de l'après-midi";
                // line 202
                yield "                        ";
            } else {
                // line 203
                yield "                            ";
                $context["period"] = "du soir";
                // line 204
                yield "                        ";
            }
            // line 205
            yield "
                        ";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["dayOfWeekFr"]) || array_key_exists("dayOfWeekFr", $context) ? $context["dayOfWeekFr"] : (function () { throw new RuntimeError('Variable "dayOfWeekFr" does not exist.', 206, $this->source); })()), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 206, $this->source); })()), "html", null, true);
            yield ":";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["minute"]) || array_key_exists("minute", $context) ? $context["minute"] : (function () { throw new RuntimeError('Variable "minute" does not exist.', 206, $this->source); })()), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 206, $this->source); })()), "html", null, true);
            yield "
                    </li>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 209
            yield "                    <li>Aucun événement programmé.</li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        yield "            </ul>
        </div>

        <div class=\"mt-16\">
            <div class=\"flex justify-between items-center mb-6\">
                <h2 class=\"text-2xl font-bold\">Parties Qui Recrutent</h2>
                <a href=\"";
        // line 217
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-blue-500 border border-blue-500 rounded-full py-2 px-6 hover:bg-blue-500 hover:text-white\">Voir Plus</a>
            </div>
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6\">

                ";
        // line 221
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), (isset($context["recruiting_jdrs"]) || array_key_exists("recruiting_jdrs", $context) ? $context["recruiting_jdrs"] : (function () { throw new RuntimeError('Variable "recruiting_jdrs" does not exist.', 221, $this->source); })()), 0, 4));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["jdr"]) {
            // line 222
            yield "                    <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                        style=\"will-change: transform;\">
                        <a href=\"";
            // line 224
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 224)]), "html", null, true);
            yield "\" class=\"block\">
                            <div class=\"relative\">
                                <img src=\"";
            // line 226
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "picture", [], "any", false, false, false, 226))), "html", null, true);
            yield "\" 
                                    alt=\"";
            // line 227
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 227), "html", null, true);
            yield " image\" 
                                    class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 228
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 228)) >= CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 228))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                <div class=\"absolute top-2 right-2\">
                                    <span class=\"text-sm font-bold px-2 py-1 rounded 
                                        ";
            // line 231
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 231) == "nouveau")) {
                yield " bg-green-600
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 232
$context["jdr"], "status", [], "any", false, false, false, 232) == "en_cours")) {
                yield " bg-blue-500
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 233
$context["jdr"], "status", [], "any", false, false, false, 233) == "termine")) {
                yield " bg-red-500
                                        ";
            } else {
                // line 234
                yield " bg-gray-700
                                        ";
            }
            // line 235
            yield " text-white\">
                                        ";
            // line 236
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "status", [], "any", false, false, false, 236) == "nouveau")) {
                // line 237
                yield "                                            Nouveau
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 238
$context["jdr"], "status", [], "any", false, false, false, 238) == "en_cours")) {
                // line 239
                yield "                                            En Cours
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 240
$context["jdr"], "status", [], "any", false, false, false, 240) == "termine")) {
                // line 241
                yield "                                            Terminé
                                        ";
            } else {
                // line 243
                yield "                                            Statut inconnu
                                        ";
            }
            // line 245
            yield "                                    </span>
                                </div>
                            </div>
                        </a>
                        <div class=\"mb-2\">
                            <a href=\"";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "id", [], "any", false, false, false, 250)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "title", [], "any", false, false, false, 250), "html", null, true);
            yield "</a>
                        </div>
                        <div class=\"flex justify-between items-center mt-2\">
                            <a href=\"";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 253), "id", [], "any", false, false, false, 253)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                ";
            // line 254
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 254), "avatar", [], "any", false, false, false, 254)) {
                // line 255
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 255), "avatar", [], "any", false, false, false, 255))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                ";
            } else {
                // line 257
                yield "                                    <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                ";
            }
            // line 259
            yield "                                <div class=\"ml-2\">
                                    <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                    <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "owner", [], "any", false, false, false, 261), "username", [], "any", false, false, false, 261), "html", null, true);
            yield "</p>
                                </div>
                            </a>
                            <div class=\"flex items-center text-right gap-1\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                </svg>
                                ";
            // line 268
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 268)) >= CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 268))) {
                // line 269
                yield "                                    <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                ";
            } else {
                // line 271
                yield "                                    <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "players", [], "any", false, false, false, 271)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["jdr"], "maxPlayer", [], "any", false, false, false, 271), "html", null, true);
                yield "</p>
                                ";
            }
            // line 273
            yield "                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 277
            yield "                    <p class=\"text-center text-gray-500\">Aucune partie ne recrute actuellement.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['jdr'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 279
        yield "            </div>
        </div>
    </div>
    <div class=\"flex justify-center fixed bottom-0 left-0 right-0 bg-gray-900 p-4\">
        ";
        // line 283
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 283, $this->source); })()), "user", [], "any", false, false, false, 283))) {
            // line 284
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Vous devez avoir un compte et être connecté pour rejoindre un univers.
            </button>
        ";
        } elseif (        // line 287
(isset($context["is_owner"]) || array_key_exists("is_owner", $context) ? $context["is_owner"] : (function () { throw new RuntimeError('Variable "is_owner" does not exist.', 287, $this->source); })())) {
            // line 288
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Vous êtes le MJ
            </button>
        ";
        } elseif (        // line 291
(isset($context["is_member"]) || array_key_exists("is_member", $context) ? $context["is_member"] : (function () { throw new RuntimeError('Variable "is_member" does not exist.', 291, $this->source); })())) {
            // line 292
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Vous êtes déjà membre
            </button>
        ";
        } elseif (        // line 295
(isset($context["request_in_progress"]) || array_key_exists("request_in_progress", $context) ? $context["request_in_progress"] : (function () { throw new RuntimeError('Variable "request_in_progress" does not exist.', 295, $this->source); })())) {
            // line 296
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                En attente d'acceptation de la demande
            </button>
        ";
        } elseif (        // line 299
(isset($context["is_closed"]) || array_key_exists("is_closed", $context) ? $context["is_closed"] : (function () { throw new RuntimeError('Variable "is_closed" does not exist.', 299, $this->source); })())) {
            // line 300
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Ce groupe est ";
            // line 301
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 301, $this->source); })()), "status", [], "any", false, false, false, 301), "html", null, true);
            yield " et ne recrute plus
            </button>
        ";
        } elseif (!CoreExtension::inFilter("ROLE_JOUEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 303
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 303, $this->source); })()), "user", [], "any", false, false, false, 303), "getRoles", [], "method", false, false, false, 303))) {
            // line 304
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Vous devez avoir le grade de joueur pour rejoindre ce JDR.
            </button>
        ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 307
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 307, $this->source); })()), "recrutement", [], "any", false, false, false, 307) == false)) {
            // line 308
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Le recrutement est fermé pour cet Univers
            </button>
        ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 311
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 311, $this->source); })()), "players", [], "any", false, false, false, 311)) >= CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 311, $this->source); })()), "maxPlayer", [], "any", false, false, false, 311))) {
            // line 312
            yield "            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Cet univers est complet. Pas de places disponibles.
            </button>
        ";
        } else {
            // line 316
            yield "            <button id=\"participate-button\" class=\"w-full sm:w-[80%] md:w-[60%] bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white font-bold py-3 rounded-lg shadow-lg hover:shadow-2xl hover:bg-blue-800 transition-all duration-300 ease-in-out transform hover:scale-105\">
                <svg class=\"inline-block w-6 h-6 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                </svg>
                Je Participe
            </button>
        ";
        }
        // line 323
        yield "    </div>
    <div id=\"request-join-modal\" class=\"hidden fixed inset-0 glassmorphism bg-opacity-75 flex justify-center items-center transition-opacity duration-300 ease-in-out\">
        <div class=\"bg-white p-6 rounded-lg space-y-4 shadow-2xl max-w-md w-full relative\">
            <button id=\"close-modal\" class=\"absolute top-2 right-2 text-gray-500 hover:text-gray-700\">
                <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"></path>
                </svg>
            </button>
            <h3 class=\"text-lg font-semibold\">Postuler pour rejoindre cet Univers</h3>
            <form id=\"request-join-form\" method=\"POST\" action=\"";
        // line 332
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("request_join", ["groupeId" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 332, $this->source); })()), "id", [], "any", false, false, false, 332)]), "html", null, true);
        yield "\">
                <div class=\"mb-4\">
                    <label for=\"message\" class=\"block text-base font-semibold text-gray-900 mb-2\">Votre message</label>
                    <textarea id=\"message\" name=\"message\" rows=\"4\" class=\"bg-gray-100 text-gray-800 text-sm rounded-md shadow-inner focus:ring-blue-500 focus:border-blue-500 block w-full p-3 border border-gray-300\" placeholder=\"Expliquez pourquoi vous voulez rejoindre cet Univers...\"></textarea>
                </div>
                <div class=\"flex justify-end space-x-2\">
                    <button type=\"button\" id=\"cancel-button\" class=\"bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition-all duration-200\">Annuler</button>
                    <button type=\"submit\" class=\"bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-all duration-200 shadow-lg\">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabLinks = document.querySelectorAll('[data-tab-target]');
    const tabContents = document.querySelectorAll('.tab-content');

    tabLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            tabLinks.forEach(item => {
                item.classList.remove('text-blue-600', 'border-blue-600', 'dark:text-blue-500', 'dark:border-blue-500');
                item.classList.add('hover:text-gray-600', 'hover:border-gray-300', 'dark:hover:text-gray-300', 'border-transparent');
            });
            tabContents.forEach(content => content.classList.add('hidden'));
            link.classList.add('text-blue-600', 'border-blue-600', 'dark:text-blue-500', 'dark:border-blue-500');
            link.classList.remove('hover:text-gray-600', 'hover:border-gray-300', 'border-transparent');
            const target = document.querySelector(link.getAttribute('data-tab-target'));
            target.classList.remove('hidden');
        });
    });

    const participateButton = document.getElementById('participate-button');
    const modal = document.getElementById('request-join-modal');
    const closeModalButton = document.getElementById('close-modal');
    const cancelButton = document.getElementById('cancel-button');
    const form = document.getElementById('request-join-form');

    function closeModal() {
        modal.classList.add('hidden');
    }

    if (participateButton) {
        participateButton.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });
    }

    if (closeModalButton) {
        closeModalButton.addEventListener('click', closeModal);
    }

    if (cancelButton) {
        cancelButton.addEventListener('click', closeModal);
    }

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const message = document.getElementById('message').value;

        fetch(form.action, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '";
        // line 399
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("submit_invitation_request"), "html", null, true);
        yield "'
            },
            body: JSON.stringify({ message: message })
        }).then(response => {
            if (response.ok) {
                closeModal();
                setTimeout(() => {
                    location.reload();
                }, 500);
            } else {
                location.reload();
            }
        }).catch(error => {
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
        return "groupe_jdr/show.html.twig";
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
        return array (  835 => 399,  765 => 332,  754 => 323,  745 => 316,  739 => 312,  737 => 311,  732 => 308,  730 => 307,  725 => 304,  723 => 303,  718 => 301,  715 => 300,  713 => 299,  708 => 296,  706 => 295,  701 => 292,  699 => 291,  694 => 288,  692 => 287,  687 => 284,  685 => 283,  679 => 279,  672 => 277,  664 => 273,  656 => 271,  652 => 269,  650 => 268,  640 => 261,  636 => 259,  630 => 257,  624 => 255,  622 => 254,  618 => 253,  610 => 250,  603 => 245,  599 => 243,  595 => 241,  593 => 240,  590 => 239,  588 => 238,  585 => 237,  583 => 236,  580 => 235,  576 => 234,  571 => 233,  567 => 232,  563 => 231,  555 => 228,  551 => 227,  547 => 226,  542 => 224,  538 => 222,  533 => 221,  526 => 217,  518 => 211,  511 => 209,  497 => 206,  494 => 205,  491 => 204,  488 => 203,  485 => 202,  482 => 201,  479 => 200,  476 => 199,  474 => 198,  471 => 197,  468 => 196,  466 => 195,  463 => 194,  461 => 193,  459 => 185,  457 => 184,  454 => 183,  449 => 182,  440 => 176,  418 => 157,  414 => 156,  407 => 151,  401 => 150,  393 => 145,  390 => 144,  384 => 142,  376 => 140,  374 => 139,  371 => 138,  368 => 137,  364 => 136,  357 => 132,  354 => 131,  348 => 129,  340 => 127,  338 => 126,  329 => 119,  310 => 117,  307 => 116,  289 => 115,  287 => 114,  271 => 103,  263 => 98,  255 => 93,  250 => 91,  246 => 89,  237 => 82,  229 => 78,  227 => 77,  198 => 50,  190 => 46,  188 => 45,  185 => 44,  176 => 38,  171 => 37,  169 => 36,  164 => 33,  160 => 31,  156 => 29,  154 => 28,  151 => 27,  149 => 26,  146 => 25,  144 => 24,  141 => 23,  137 => 22,  132 => 21,  128 => 20,  124 => 19,  116 => 16,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ groupe_j_d_r.title }} | DiceFinder{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 p-6\">
    <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"glassmorphism text-white bg-[#4447a1] hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6 mr-3\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3\" />
        </svg>
        Retour
    </a>
    <div class=\"bg-slate-900 text-white min-h-screen p-4 md:p-8 space-y-10\">
        <div class=\"flex flex-col space-y-8 lg:space-y-0 lg:flex-row items-start lg:items-start justify-between lg:space-x-10\">
            <div class=\"w-full lg:w-1/2 space-y-8 relative\">
                <img src=\"{{ asset('uploads/images-jdr/' ~ groupe_j_d_r.picture) }}\" alt=\"{{ groupe_j_d_r.title }}\" class=\"rounded-lg shadow-lg w-full h-auto lg:h-[500px] object-cover\">
                <div class=\"absolute top-2 right-2\">
                    <span class=\"text-xs sm:text-sm font-bold px-2 py-1 rounded 
                            {% if groupe_j_d_r.status == 'nouveau' %} bg-green-500
                            {% elseif groupe_j_d_r.status == 'en_cours' %} bg-blue-500
                            {% elseif groupe_j_d_r.status == 'termine' %} bg-red-500
                            {% else %} bg-gray-700
                            {% endif %} text-white\">
                            {% if groupe_j_d_r.status == 'nouveau' %}
                                Nouveau
                            {% elseif groupe_j_d_r.status == 'en_cours' %}
                                En Cours
                            {% elseif groupe_j_d_r.status == 'termine' %}
                                Terminé
                            {% else %}
                                Statut inconnu
                            {% endif %}
                    </span>
                </div>

                {% if is_member and not is_owner %}
                    <form action=\"{{ path('leave_jdr', {'id': groupe_j_d_r.id}) }}\" method=\"post\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir quitter cet univers ?');\" class=\"mt-4\">
                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('leave' ~ groupe_j_d_r.id) }}\">
                        <button type=\"submit\" class=\"bg-red-600 text-white px-4 py-2 rounded w-full hover:bg-red-700 transition-all duration-300\">
                            Quitter l'univers
                        </button>
                    </form>
                {% endif %}

                {% if app.user and app.user.id == groupe_j_d_r.owner.id %}
                    <a href=\"{{ path('app_groupe_j_d_r_edit', { id: groupe_j_d_r.id }) }}\" class=\"w-full bg-green-600 text-white font-bold py-3 rounded mt-4 hover:bg-green-700 block text-center\">
                        Editer mon Univers
                    </a>
                {% endif %}
            </div>

            <div class=\"w-full lg:w-1/2 space-y-6\">
                <div class=\"flex items-center mb-4\">
                    <svg  width=\"36\" height=\"35\" viewBox=\"0 0 46 45\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"mr-3\">
                        <g clip-path=\"url(#clip0_502_849)\">
                            <g filter=\"url(#filter0_d_502_849)\">
                                <path d=\"M27.3125 0.00012207C17.5094 5.52568 18.6875 21.0939 18.6875 21.0939C18.6875 21.0939 14.375 19.6876 14.375 13.3595C9.22992 16.2781 5.75 21.8878 5.75 28.1251C5.75 37.4449 13.4731 45.0001 23 45.0001C32.527 45.0001 40.25 37.4449 40.25 28.1251C40.2499 14.4142 27.3125 11.6017 27.3125 0.00012207V0.00012207ZM24.5152 39.1855C21.0489 40.031 17.5381 37.9674 16.6737 34.5763C15.8095 31.1853 17.9189 27.7507 21.3854 26.9052C29.7542 24.864 30.803 20.2602 30.803 20.2602C30.803 20.2602 34.9762 36.6339 24.5152 39.1855V39.1855Z\" fill=\"#FF6D00\"/>
                                <path d=\"M18.5318 21.569C18.5321 21.5691 18.5325 21.5692 18.6875 21.0939L18.5325 21.5692L19.2424 21.8007L19.1861 21.0563L19.186 21.0561L19.186 21.0561L19.1859 21.0546L19.1854 21.0474L19.1833 21.0165C19.1815 20.9887 19.1789 20.9465 19.1759 20.8907C19.1699 20.7791 19.1622 20.6132 19.1558 20.3992C19.143 19.9711 19.1353 19.351 19.1564 18.5888C19.1985 17.0632 19.3556 14.9744 19.8138 12.7186C20.686 8.42494 22.6274 3.62541 26.8367 0.874025C27.1307 6.12395 30.0519 9.60489 32.9697 13.0818C33.1125 13.2519 33.2552 13.4221 33.3977 13.5924C36.6229 17.4486 39.75 21.4598 39.75 28.1251C39.75 37.1585 32.2612 44.5001 23 44.5001C13.7388 44.5001 6.25 37.1585 6.25 28.1251C6.25 22.3697 9.30569 17.1606 13.9022 14.2277C14.0804 17.0177 15.1074 18.8193 16.1676 19.9429C16.7461 20.556 17.3263 20.9587 17.7658 21.2095C17.9857 21.335 18.171 21.4228 18.3043 21.4803C18.371 21.509 18.4248 21.5302 18.4635 21.5447C18.4828 21.552 18.4984 21.5576 18.51 21.5616L18.5244 21.5665L18.5292 21.5682L18.531 21.5688L18.5318 21.569ZM30.803 20.2602L31.2875 20.1367L30.3179 20.1491C30.3157 20.1485 30.3157 20.1484 30.3157 20.1484L30.3158 20.1478L30.3153 20.1498C30.3146 20.1524 30.3136 20.1565 30.3121 20.162C30.311 20.1659 30.3097 20.1704 30.3082 20.1757C30.301 20.2011 30.2885 20.2425 30.2692 20.2982C30.2306 20.4096 30.1649 20.578 30.0601 20.7899C29.8509 21.2132 29.4852 21.8117 28.8665 22.4766C27.6326 23.8027 25.3683 25.4191 21.2669 26.4195C17.5392 27.3286 15.254 31.0303 16.1892 34.6998L16.6708 34.577L16.1892 34.6998C17.1235 38.3653 20.9098 40.5796 24.6337 39.6713L24.5152 39.1855L24.6337 39.6713C27.3939 38.998 29.2034 37.4023 30.3453 35.3997C31.4778 33.4135 31.9465 31.0424 32.0811 28.7959C32.216 26.5446 32.0172 24.3821 31.7865 22.7869C31.6709 21.988 31.5469 21.3284 31.4515 20.8674C31.4038 20.6368 31.3632 20.4557 31.3344 20.3315C31.3199 20.2694 31.3084 20.2215 31.3004 20.1887L31.2911 20.151L31.2886 20.1409L31.2879 20.138L31.2877 20.1372C31.2876 20.1369 31.2875 20.1367 30.803 20.2602Z\" stroke=\"black\"/>
                            </g>
                        </g>
                        <defs>
                            <filter id=\"filter0_d_502_849\" x=\"1.75\" y=\"0.00012207\" width=\"42.5001\" height=\"53\" filterUnits=\"userSpaceOnUse\" color-interpolation-filters=\"sRGB\">
                                <feFlood flood-opacity=\"0\" result=\"BackgroundImageFix\"/>
                                <feColorMatrix in=\"SourceAlpha\" type=\"matrix\" values=\"0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0\" result=\"hardAlpha\"/>
                                <feOffset dy=\"4\"/>
                                <feGaussianBlur stdDeviation=\"2\"/>
                                <feComposite in2=\"hardAlpha\" operator=\"out\"/>
                                <feColorMatrix type=\"matrix\" values=\"0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0\"/>
                                <feBlend mode=\"normal\" in2=\"BackgroundImageFix\" result=\"effect1_dropShadow_502_849\"/>
                                <feBlend mode=\"normal\" in=\"SourceGraphic\" in2=\"effect1_dropShadow_502_849\" result=\"shape\"/>
                            </filter>
                            <clipPath id=\"clip0_502_849\">
                                <rect width=\"46\" height=\"45\" fill=\"white\"/>
                            </clipPath>
                        </defs>
                    </svg>
                    {% if not favoriteJdrs.contains(groupe_j_d_r) %}
                        <a href=\"{{ path('add_favorite', {'id': groupe_j_d_r.id}) }}\" class=\"text-lg font-semibold text-gray-300 cursor-pointer hover:text-orange-500 pt-1\">
                            Ajouter aux Favoris
                        </a>
                    {% else %}
                        <div class=\"flex items-center\">
                            <span class=\"text-lg font-semibold text-gray-300\">Déjà dans les favoris</span>
                            <svg class=\"w-5 h-5 sm:w-6 sm:h-6 text-green-500 ml-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                            </svg>
                        </div>
                    {% endif %}
                </div>
                <div class=\"flex justify-between items-center\">
                    <h2 class=\"text-2xl sm:text-3xl font-bold\">{{ groupe_j_d_r.title }}</h2>
                </div>
                <p class=\"text-gray-300\">{{ groupe_j_d_r.description }}</p>

                <div class=\"flex justify-between\">
                    <div>
                        <span class=\"text-gray-400\">Date de Création</span>
                        <p class=\"text-lg font-semibold\">{{ groupe_j_d_r.getCreatedAt|date('d/m/Y') }}</p>
                    </div>
                    <div>
                        <span class=\"text-gray-400 block\">Participants</span>
                        <div class=\"flex items-center gap-2\">
                            <p class=\"text-lg font-semibold\">{{ groupe_j_d_r.players|length }}/{{ groupe_j_d_r.maxPlayer }}</p>
                            <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-6 h-6\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                            </svg>
                        </div>
                    </div>
                </div>

                <div id=\"category-container\" class=\"mt-6 glassmorphism p-6 rounded-lg\">
                    <h3 class=\"font-semibold mb-4\">Catégories</h3>
                    <div class=\"flex flex-wrap gap-2\">
                        {% set colors = ['bg-blue-200 text-blue-800', 'bg-green-200 text-green-800', 'bg-yellow-200 text-yellow-800', 'bg-red-200 text-red-800'] %}
                        {% for category in groupe_j_d_r.categories %}
                            {% set color = colors[loop.index0 % colors|length] %}
                            <span class=\"badge {{ color }} px-2 py-1 rounded\">{{ category.name }}</span>
                        {% endfor %}
                    </div>
                </div>

                <div class=\"glassmorphism p-6 rounded-lg space-y-4\">
                    <h3 class=\"font-semibold\">MJ et Joueurs</h3>
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4\">
                        <div class=\"flex items-center space-x-4\">
                            {% if groupe_j_d_r.owner.avatar %}
                                <img src=\"{{ asset('uploads/avatars/' ~ groupe_j_d_r.owner.avatar) }}\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"{{ groupe_j_d_r.owner.username }}\">
                            {% else %}
                                <img class=\"rounded-full w-12 h-12 object-cover\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                            {% endif %}
                            <div class=\"flex-1 min-w-0\">
                                <p class=\"font-semibold truncate max-w-full\">{{ groupe_j_d_r.owner.username }}</p>
                                <span class=\"text-gray-400 text-sm\">MJ</span>
                            </div>
                        </div>
                        {% for player in groupe_j_d_r.players %}
                            {% if player.id != groupe_j_d_r.owner.id %}
                                <div class=\"flex items-center space-x-4\">
                                    {% if player.avatar %}
                                        <img src=\"{{ asset('uploads/avatars/' ~ player.avatar) }}\" class=\"rounded-full w-12 h-12 object-cover\" alt=\"{{ player.username }}\">
                                    {% else %}
                                        <img class=\"rounded-full w-12 h-12 object-cover\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                                    {% endif %}
                                    <div class=\"flex-1 min-w-0\">
                                        <p class=\"font-semibold truncate max-w-full\">{{ player.username }}</p>
                                        <span class=\"text-gray-400 text-sm\">Joueur</span>
                                    </div>
                                </div>
                            {% endif %}
                        {% endfor %}
                    </div>
                </div>

                <div class=\"glassmorphism p-6 rounded-lg space-y-4\">
                    <h3 class=\"font-semibold\">Recrutement</h3>
                    <p class=\"text-lg font-semibold {{ groupe_j_d_r.recrutement ? 'text-green-500' : 'text-red-500' }}\">
                        {{ groupe_j_d_r.recrutement ? 'Ouvert' : 'Fermé' }}
                    </p>
                </div>
            </div>
        </div>

        <div class=\"text-sm font-medium text-center text-gray-500 border-b border-gray-200 dark:text-gray-400 dark:border-gray-700\">
            <ul class=\"flex flex-wrap justify-between sm:justify-center space-x-4 sm:space-x-8 -mb-px overflow-x-auto\">
                <li class=\"me-2\">
                    <a href=\"#\" class=\"inline-block p-3 sm:p-4 text-blue-600 border-b-2 border-blue-600 rounded-t-lg active dark:text-blue-500 dark:border-blue-500\" data-tab-target=\"#description-tab\" aria-current=\"page\">Description</a>
                </li>
                <li class=\"me-2\">
                    <a href=\"#\" class=\"inline-block p-3 sm:p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300\" data-tab-target=\"#horaire-tab\">Horaire</a>
                </li>
            </ul>
        </div>

        <div id=\"description-tab\" class=\"tab-content\">
            <h3 class=\"text-lg font-semibold\">Description</h3>
            <p>{{ groupe_j_d_r.description }}</p>
        </div>

        <div id=\"horaire-tab\" class=\"tab-content hidden\">
            <h3 class=\"text-lg font-semibold\">Horaire des événements</h3>
            <ul>
                {% for event in groupe_j_d_r.events %}
                    <li>
                        {% set dayOfWeek = event.eventTime|date('l') %}
                        {% set dayOfWeekFr = {
                            'Monday': 'Lundi',
                            'Tuesday': 'Mardi',
                            'Wednesday': 'Mercredi',
                            'Thursday': 'Jeudi',
                            'Friday': 'Vendredi',
                            'Saturday': 'Samedi',
                            'Sunday': 'Dimanche'
                        }[dayOfWeek] %}

                        {% set hour = event.eventTime|date('H') %}
                        {% set minute = event.eventTime|date('i') %}

                        {% if hour >= 0 and hour < 12 %}
                            {% set period = 'du matin' %}
                        {% elseif hour >= 12 and hour < 18 %}
                            {% set period = 'de l\\'après-midi' %}
                        {% else %}
                            {% set period = 'du soir' %}
                        {% endif %}

                        {{ dayOfWeekFr }} à {{ hour }}:{{ minute }} {{ period }}
                    </li>
                {% else %}
                    <li>Aucun événement programmé.</li>
                {% endfor %}
            </ul>
        </div>

        <div class=\"mt-16\">
            <div class=\"flex justify-between items-center mb-6\">
                <h2 class=\"text-2xl font-bold\">Parties Qui Recrutent</h2>
                <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"text-blue-500 border border-blue-500 rounded-full py-2 px-6 hover:bg-blue-500 hover:text-white\">Voir Plus</a>
            </div>
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6\">

                {% for jdr in recruiting_jdrs|slice(0, 4) %}
                    <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                        style=\"will-change: transform;\">
                        <a href=\"{{ path('app_groupe_j_d_r_show', {'id': jdr.id}) }}\" class=\"block\">
                            <div class=\"relative\">
                                <img src=\"{{ asset('uploads/images-jdr/' ~ jdr.picture) }}\" 
                                    alt=\"{{ jdr.title }} image\" 
                                    class=\"rounded-lg mb-4 w-full h-[20rem] object-cover {% if jdr.players|length >= jdr.maxPlayer %} blur-sm {% endif %} tokenImage\">
                                <div class=\"absolute top-2 right-2\">
                                    <span class=\"text-sm font-bold px-2 py-1 rounded 
                                        {% if jdr.status == 'nouveau' %} bg-green-600
                                        {% elseif jdr.status == 'en_cours' %} bg-blue-500
                                        {% elseif jdr.status == 'termine' %} bg-red-500
                                        {% else %} bg-gray-700
                                        {% endif %} text-white\">
                                        {% if jdr.status == 'nouveau' %}
                                            Nouveau
                                        {% elseif jdr.status == 'en_cours' %}
                                            En Cours
                                        {% elseif jdr.status == 'termine' %}
                                            Terminé
                                        {% else %}
                                            Statut inconnu
                                        {% endif %}
                                    </span>
                                </div>
                            </div>
                        </a>
                        <div class=\"mb-2\">
                            <a href=\"{{ path('app_groupe_j_d_r_show', {'id': jdr.id}) }}\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">{{ jdr.title }}</a>
                        </div>
                        <div class=\"flex justify-between items-center mt-2\">
                            <a href=\"{{ path('app_profile_show', { 'id': jdr.owner.id }) }}\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                {% if jdr.owner.avatar %}
                                    <img src=\"{{ asset('uploads/avatars/' ~ jdr.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                {% else %}
                                    <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                                {% endif %}
                                <div class=\"ml-2\">
                                    <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                    <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">{{ jdr.owner.username }}</p>
                                </div>
                            </a>
                            <div class=\"flex items-center text-right gap-1\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                </svg>
                                {% if jdr.players|length >= jdr.maxPlayer %}
                                    <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                {% else %}
                                    <p class=\"font-bold text-white pl-2\">{{ jdr.players|length }} / {{ jdr.maxPlayer }}</p>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% else %}
                    <p class=\"text-center text-gray-500\">Aucune partie ne recrute actuellement.</p>
                {% endfor %}
            </div>
        </div>
    </div>
    <div class=\"flex justify-center fixed bottom-0 left-0 right-0 bg-gray-900 p-4\">
        {% if app.user is null %}
            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Vous devez avoir un compte et être connecté pour rejoindre un univers.
            </button>
        {% elseif is_owner %}
            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Vous êtes le MJ
            </button>
        {% elseif is_member %}
            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Vous êtes déjà membre
            </button>
        {% elseif request_in_progress %}
            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                En attente d'acceptation de la demande
            </button>
        {% elseif is_closed %}
            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Ce groupe est {{ groupe_j_d_r.status }} et ne recrute plus
            </button>
        {% elseif 'ROLE_JOUEUR' not in app.user.getRoles() %}
            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Vous devez avoir le grade de joueur pour rejoindre ce JDR.
            </button>
        {% elseif groupe_j_d_r.recrutement == false %}
            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Le recrutement est fermé pour cet Univers
            </button>
        {% elseif groupe_j_d_r.players|length >= groupe_j_d_r.maxPlayer %}
            <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                Cet univers est complet. Pas de places disponibles.
            </button>
        {% else %}
            <button id=\"participate-button\" class=\"w-full sm:w-[80%] md:w-[60%] bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white font-bold py-3 rounded-lg shadow-lg hover:shadow-2xl hover:bg-blue-800 transition-all duration-300 ease-in-out transform hover:scale-105\">
                <svg class=\"inline-block w-6 h-6 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                </svg>
                Je Participe
            </button>
        {% endif %}
    </div>
    <div id=\"request-join-modal\" class=\"hidden fixed inset-0 glassmorphism bg-opacity-75 flex justify-center items-center transition-opacity duration-300 ease-in-out\">
        <div class=\"bg-white p-6 rounded-lg space-y-4 shadow-2xl max-w-md w-full relative\">
            <button id=\"close-modal\" class=\"absolute top-2 right-2 text-gray-500 hover:text-gray-700\">
                <svg class=\"w-6 h-6\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M6 18L18 6M6 6l12 12\"></path>
                </svg>
            </button>
            <h3 class=\"text-lg font-semibold\">Postuler pour rejoindre cet Univers</h3>
            <form id=\"request-join-form\" method=\"POST\" action=\"{{ path('request_join', {'groupeId': groupe_j_d_r.id}) }}\">
                <div class=\"mb-4\">
                    <label for=\"message\" class=\"block text-base font-semibold text-gray-900 mb-2\">Votre message</label>
                    <textarea id=\"message\" name=\"message\" rows=\"4\" class=\"bg-gray-100 text-gray-800 text-sm rounded-md shadow-inner focus:ring-blue-500 focus:border-blue-500 block w-full p-3 border border-gray-300\" placeholder=\"Expliquez pourquoi vous voulez rejoindre cet Univers...\"></textarea>
                </div>
                <div class=\"flex justify-end space-x-2\">
                    <button type=\"button\" id=\"cancel-button\" class=\"bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700 transition-all duration-200\">Annuler</button>
                    <button type=\"submit\" class=\"bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-all duration-200 shadow-lg\">Envoyer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const tabLinks = document.querySelectorAll('[data-tab-target]');
    const tabContents = document.querySelectorAll('.tab-content');

    tabLinks.forEach(link => {
        link.addEventListener('click', (e) => {
            e.preventDefault();
            tabLinks.forEach(item => {
                item.classList.remove('text-blue-600', 'border-blue-600', 'dark:text-blue-500', 'dark:border-blue-500');
                item.classList.add('hover:text-gray-600', 'hover:border-gray-300', 'dark:hover:text-gray-300', 'border-transparent');
            });
            tabContents.forEach(content => content.classList.add('hidden'));
            link.classList.add('text-blue-600', 'border-blue-600', 'dark:text-blue-500', 'dark:border-blue-500');
            link.classList.remove('hover:text-gray-600', 'hover:border-gray-300', 'border-transparent');
            const target = document.querySelector(link.getAttribute('data-tab-target'));
            target.classList.remove('hidden');
        });
    });

    const participateButton = document.getElementById('participate-button');
    const modal = document.getElementById('request-join-modal');
    const closeModalButton = document.getElementById('close-modal');
    const cancelButton = document.getElementById('cancel-button');
    const form = document.getElementById('request-join-form');

    function closeModal() {
        modal.classList.add('hidden');
    }

    if (participateButton) {
        participateButton.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });
    }

    if (closeModalButton) {
        closeModalButton.addEventListener('click', closeModal);
    }

    if (cancelButton) {
        cancelButton.addEventListener('click', closeModal);
    }

    form.addEventListener('submit', function(event) {
        event.preventDefault();

        const message = document.getElementById('message').value;

        fetch(form.action, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token(\"submit_invitation_request\") }}'
            },
            body: JSON.stringify({ message: message })
        }).then(response => {
            if (response.ok) {
                closeModal();
                setTimeout(() => {
                    location.reload();
                }, 500);
            } else {
                location.reload();
            }
        }).catch(error => {
        });
    });
});

</script>

{% endblock %}
", "groupe_jdr/show.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\groupe_jdr\\show.html.twig");
    }
}
