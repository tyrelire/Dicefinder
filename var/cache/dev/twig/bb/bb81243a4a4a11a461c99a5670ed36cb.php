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
class __TwigTemplate_18a70007ccb35d411ab4c5931e8361d2 extends Template
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
        yield "<div class=\"container mx-auto px-4 p-6 relative\">
    <a href=\"";
        // line 7
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"glassmorphism text-white bg-[#4447a1] hover:bg-blue-800 focus:ring-4
        focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center mb-6\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6 mr-3\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3\" />
        </svg>
        Retour
    </a>
    <div class=\"flex flex-col w-full space-y-8 lg:space-y-0 lg:space-x-8 lg:flex-row\">
        <div class=\"w-full lg:w-1/3\">
            <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:bg-opacity-20 card-item\"
                style=\"will-change: transform;\">
                <a href=\"";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
        yield "\" class=\"block\">
                    <div class=\"relative\">
                        <img src=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 20, $this->source); })()), "picture", [], "any", false, false, false, 20))), "html", null, true);
        yield "\"
                                alt=\"";
        // line 21
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 21, $this->source); })()), "title", [], "any", false, false, false, 21), "html", null, true);
        yield " image\"
                                class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
        // line 22
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 22, $this->source); })()), "players", [], "any", false, false, false, 22)) >= CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 22, $this->source); })()), "maxPlayer", [], "any", false, false, false, 22))) {
            yield " blur-sm ";
        }
        yield " tokenImage\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-sm font-bold px-2 py-1 rounded
                                ";
        // line 25
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 25, $this->source); })()), "status", [], "any", false, false, false, 25) == "nouveau")) {
            yield " bg-green-600
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 26
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 26, $this->source); })()), "status", [], "any", false, false, false, 26) == "en_cours")) {
            yield " bg-blue-500
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 27
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 27, $this->source); })()), "status", [], "any", false, false, false, 27) == "termine")) {
            yield " bg-red-500
                                ";
        } else {
            // line 28
            yield " bg-gray-700
                                ";
        }
        // line 29
        yield " text-white\">
                                ";
        // line 30
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 30, $this->source); })()), "status", [], "any", false, false, false, 30) == "nouveau")) {
            // line 31
            yield "                                    Nouveau
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 32
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 32, $this->source); })()), "status", [], "any", false, false, false, 32) == "en_cours")) {
            // line 33
            yield "                                    En Cours
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 34
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 34, $this->source); })()), "status", [], "any", false, false, false, 34) == "termine")) {
            // line 35
            yield "                                    Terminé
                                ";
        } else {
            // line 37
            yield "                                    Statut inconnu
                                ";
        }
        // line 39
        yield "                            </span>
                        </div>
                    </div>
                </a>
                <div class=\"mb-2\">
                    <a href=\"";
        // line 44
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 44, $this->source); })()), "id", [], "any", false, false, false, 44)]), "html", null, true);
        yield "\" class=\"font-semibold text-xl  hover:underline truncate max-w-[100%] block\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 44, $this->source); })()), "title", [], "any", false, false, false, 44), "html", null, true);
        yield "</a>
                </div>
                <div class=\"flex justify-between items-center mt-2\">
                    <a href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 47, $this->source); })()), "owner", [], "any", false, false, false, 47), "id", [], "any", false, false, false, 47)]), "html", null, true);
        yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                        ";
        // line 48
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 48, $this->source); })()), "owner", [], "any", false, false, false, 48), "avatar", [], "any", false, false, false, 48)) {
            // line 49
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 49, $this->source); })()), "owner", [], "any", false, false, false, 49), "avatar", [], "any", false, false, false, 49))), "html", null, true);
            yield "\" alt=\"MJ photo\" class=\"rounded-full h-12 w-12 object-cover transform border-2 border-gray-500 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50\">
                        ";
        } else {
            // line 51
            yield "                            <img class=\"rounded-full h-12 w-12 object-cover transform border-2 border-gray-500 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Default profile photo\">
                        ";
        }
        // line 53
        yield "                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                            <p class=\"text-lg font-bold text-white group-hover:underline transition-colors duration-300\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 55, $this->source); })()), "owner", [], "any", false, false, false, 55), "username", [], "any", false, false, false, 55), "html", null, true);
        yield "</p>
                        </div>
                    </a>
                    <div class=\"flex items-center text-right gap-1\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-8 h-8 text-gray-400\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                        </svg>
                        ";
        // line 62
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 62, $this->source); })()), "players", [], "any", false, false, false, 62)) >= CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 62, $this->source); })()), "maxPlayer", [], "any", false, false, false, 62))) {
            // line 63
            yield "                            <p class=\"text-xl font-bold text-red-500\">Complet</p>
                        ";
        } else {
            // line 65
            yield "                            <p class=\"text-xl font-bold text-white\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 65, $this->source); })()), "players", [], "any", false, false, false, 65)), "html", null, true);
            yield " / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 65, $this->source); })()), "maxPlayer", [], "any", false, false, false, 65), "html", null, true);
            yield "</p>
                        ";
        }
        // line 67
        yield "                    </div>
                </div>
            </div>
            <div class=\"flex justify-center mb-6 pt-10\">
                <div class=\"flex space-x-2 items-center\">
                ";
        // line 72
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 72, $this->source); })()), "user", [], "any", false, false, false, 72)) {
            // line 73
            yield "                    ";
            if (( !(null === (isset($context["favoriteJdrs"]) || array_key_exists("favoriteJdrs", $context) ? $context["favoriteJdrs"] : (function () { throw new RuntimeError('Variable "favoriteJdrs" does not exist.', 73, $this->source); })())) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["favoriteJdrs"]) || array_key_exists("favoriteJdrs", $context) ? $context["favoriteJdrs"] : (function () { throw new RuntimeError('Variable "favoriteJdrs" does not exist.', 73, $this->source); })()), "contains", [(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 73, $this->source); })())], "method", false, false, false, 73) == false))) {
                // line 74
                yield "                        <svg  width=\"36\" height=\"35\" viewBox=\"0 0 46 45\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"\">
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
                        <a href=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("add_favorite", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 97, $this->source); })()), "id", [], "any", false, false, false, 97)]), "html", null, true);
                yield "\" class=\"text-lg font-semibold text-gray-300 cursor-pointer hover:text-orange-500 pt-1 pr-5\">
                            Ajouter aux Favoris
                        </a>
                    ";
            } else {
                // line 101
                yield "                        <div class=\"flex items-center\">
                            <svg class=\"w-5 h-5 sm:w-6 sm:h-6 text-green-500 pr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                            </svg>
                            <span class=\"text-lg font-semibold text-gray-300 pr-5\">Déjà dans les favoris</span>
                        </div>
                        <a href=\"";
                // line 107
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("remove_favorite", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 107, $this->source); })()), "id", [], "any", false, false, false, 107)]), "html", null, true);
                yield "\" class=\"text-sm font-medium text-red-500 hover:underline cursor-pointer\">
                            Retirer des favoris
                        </a>
                    ";
            }
            // line 111
            yield "                    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111) && (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 111, $this->source); })()), "owner", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111)))) {
                // line 112
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 112, $this->source); })()), "id", [], "any", false, false, false, 112)]), "html", null, true);
                yield "\" class=\"bg-green-600 text-white font-bold py-2 px-4 rounded hover:bg-green-700\">
                            Editer mon Univers
                        </a>
                    ";
            }
            // line 116
            yield "                ";
        }
        // line 117
        yield "                </div>
            </div>
        </div>

        <div class=\"flex flex-col w-full lg:w-2/3 space-y-6\">
        <div class=\"p-6 rounded-lg bg-opacity-12 border border-[#bb8f4f] glassmorphism w-full\">
            <h3 class=\"text-gray-100 font-semibold text-xl mb-4\">Description</h3>
            <p class=\"text-gray-300 mb-4 break-words\">";
        // line 124
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 124, $this->source); })()), "description", [], "any", false, false, false, 124), "html", null, true);
        yield "</p>
                ";
        // line 125
        $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 125, $this->source); })()), "createdAt", [], "any", false, false, false, 125)], "method", false, false, false, 125);
        // line 126
        yield "                <p class=\"absolute bottom-2 right-4 text-sm text-gray-400\">
                    Fondé depuis
                    ";
        // line 128
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 128, $this->source); })()), "y", [], "any", false, false, false, 128) > 0)) {
            // line 129
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 129, $this->source); })()), "y", [], "any", false, false, false, 129), "html", null, true);
            yield " an";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 129, $this->source); })()), "y", [], "any", false, false, false, 129) > 1)) ? ("s") : (""));
            yield "
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 130
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 130, $this->source); })()), "m", [], "any", false, false, false, 130) > 0)) {
            // line 131
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 131, $this->source); })()), "m", [], "any", false, false, false, 131), "html", null, true);
            yield " mois
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 132
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 132, $this->source); })()), "d", [], "any", false, false, false, 132) > 0)) {
            // line 133
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 133, $this->source); })()), "d", [], "any", false, false, false, 133), "html", null, true);
            yield " jour";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 133, $this->source); })()), "d", [], "any", false, false, false, 133) > 1)) ? ("s") : (""));
            yield "
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 134
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 134, $this->source); })()), "h", [], "any", false, false, false, 134) > 0)) {
            // line 135
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 135, $this->source); })()), "h", [], "any", false, false, false, 135), "html", null, true);
            yield " heure";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 135, $this->source); })()), "h", [], "any", false, false, false, 135) > 1)) ? ("s") : (""));
            yield "
                    ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 136
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 136, $this->source); })()), "i", [], "any", false, false, false, 136) > 0)) {
            // line 137
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 137, $this->source); })()), "i", [], "any", false, false, false, 137), "html", null, true);
            yield " minute";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 137, $this->source); })()), "i", [], "any", false, false, false, 137) > 1)) ? ("s") : (""));
            yield "
                    ";
        } else {
            // line 139
            yield "                        à l'instant
                    ";
        }
        // line 141
        yield "                </p>
            </div>

            <div class=\"flex flex-col lg:flex-row w-full space-y-4 lg:space-y-0 lg:space-x-4\">
                <div class=\"w-full lg:w-1/2 bg-white bg-opacity-10 border rounded-lg shadow-lg p-6 border border-[#bb8f4f]\">
                    <h2 class=\"text-gray-100 font-semibold text-xl mb-4\">Recrutement</h2>
                    <p class=\"text-lg font-semibold ";
        // line 147
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 147, $this->source); })()), "recrutement", [], "any", false, false, false, 147)) ? ("text-green-500") : ("text-red-500"));
        yield "\">
                        ";
        // line 148
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 148, $this->source); })()), "recrutement", [], "any", false, false, false, 148)) ? ("Ouvert") : ("Fermé"));
        yield "
                    </p>
                </div>
                <div class=\"w-full lg:w-1/2 bg-white bg-opacity-10 border rounded-lg shadow-lg p-6 border border-[#bb8f4f]\">
                    <h2 class=\"text-gray-100 font-semibold text-xl mb-4\">
                        ";
        // line 153
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 153, $this->source); })()), "licence", [], "any", false, false, false, 153)) {
            // line 154
            yield "                            Licence
                        ";
        } else {
            // line 156
            yield "                            Catégories
                        ";
        }
        // line 158
        yield "                    </h2>
                    <div class=\"flex flex-wrap gap-2\">
                        ";
        // line 160
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 160, $this->source); })()), "licence", [], "any", false, false, false, 160)) {
            // line 161
            yield "                            <span class=\"bg-blue-200 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full\">
                                ";
            // line 162
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 162, $this->source); })()), "licence", [], "any", false, false, false, 162), "name", [], "any", false, false, false, 162), "html", null, true);
            yield "
                            </span>
                            <p class=\"text-gray-400 text-xs\">
                                Éditeur : ";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 165, $this->source); })()), "licence", [], "any", false, false, false, 165), "publisher", [], "any", false, false, false, 165), "html", null, true);
            yield " | Année de sortie : ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 165, $this->source); })()), "licence", [], "any", false, false, false, 165), "releaseYear", [], "any", false, false, false, 165), "html", null, true);
            yield "
                            </p>
                        ";
        } else {
            // line 168
            yield "                            ";
            $context["colors"] = ["bg-blue-200 text-blue-800", "bg-green-100 text-green-800", "bg-yellow-200 text-yellow-800", "bg-red-200 text-red-800"];
            // line 169
            yield "                            ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 169, $this->source); })()), "categories", [], "any", false, false, false, 169));
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
                // line 170
                yield "                                ";
                $context["color"] = CoreExtension::getAttribute($this->env, $this->source, (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 170, $this->source); })()), (CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 170) % Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["colors"]) || array_key_exists("colors", $context) ? $context["colors"] : (function () { throw new RuntimeError('Variable "colors" does not exist.', 170, $this->source); })()))), [], "array", false, false, false, 170);
                // line 171
                yield "                                <span class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["color"]) || array_key_exists("color", $context) ? $context["color"] : (function () { throw new RuntimeError('Variable "color" does not exist.', 171, $this->source); })()), "html", null, true);
                yield " text-xs font-medium px-2.5 py-0.5 rounded-full\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 171), "html", null, true);
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
            // line 173
            yield "                        ";
        }
        // line 174
        yield "                    </div>
                </div>
            </div>
            <div class=\"glassmorphism p-6 rounded-lg space-y-4 border border-[#bb8f4f] mt-6\">
                <h3 class=\"text-gray-100 font-semibold text-xl mb-4\">MJ et Joueurs</h3>
                <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4\">
                    <a href=\"";
        // line 180
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 180, $this->source); })()), "owner", [], "any", false, false, false, 180), "id", [], "any", false, false, false, 180)]), "html", null, true);
        yield "\" class=\"flex items-center space-x-4 group transition-transform duration-300 transform hover:scale-105\">
                        ";
        // line 181
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 181, $this->source); })()), "owner", [], "any", false, false, false, 181), "avatar", [], "any", false, false, false, 181)) {
            // line 182
            yield "                            <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 182, $this->source); })()), "owner", [], "any", false, false, false, 182), "avatar", [], "any", false, false, false, 182))), "html", null, true);
            yield "\" class=\"rounded-full w-12 h-12 object-cover border-2 border-gray-500 group-hover:border-purple-500\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 182, $this->source); })()), "owner", [], "any", false, false, false, 182), "username", [], "any", false, false, false, 182), "html", null, true);
            yield "\">
                        ";
        } else {
            // line 184
            yield "                            <img class=\"rounded-full w-12 h-12 object-cover border-2 border-gray-500 group-hover:border-purple-500\" src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" alt=\"Default profile photo\">
                        ";
        }
        // line 186
        yield "                        <div class=\"flex-1 min-w-0\">
                            <p class=\"font-semibold truncate max-w-full flex items-center group-hover:underline\">
                                ";
        // line 188
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 188, $this->source); })()), "owner", [], "any", false, false, false, 188), "username", [], "any", false, false, false, 188), "html", null, true);
        yield "
                                ";
        // line 189
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 189, $this->source); })()), "owner", [], "any", false, false, false, 189), "isVip", [], "any", false, false, false, 189)) {
            // line 190
            yield "                                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/vip-logo.png"), "html", null, true);
            yield "\" alt=\"VIP\" class=\"ml-2 w-4 h-4\" />
                                ";
        }
        // line 192
        yield "                            </p>
                            <span class=\"text-gray-400 text-sm\">MJ</span>
                        </div>
                    </a>
                    
                    ";
        // line 197
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 197, $this->source); })()), "players", [], "any", false, false, false, 197));
        foreach ($context['_seq'] as $context["_key"] => $context["player"]) {
            // line 198
            yield "                        ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 198) != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 198, $this->source); })()), "owner", [], "any", false, false, false, 198), "id", [], "any", false, false, false, 198))) {
                // line 199
                yield "                            <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["player"], "id", [], "any", false, false, false, 199)]), "html", null, true);
                yield "\" class=\"flex items-center space-x-4 group transition-transform duration-300 transform hover:scale-105\">
                                ";
                // line 200
                if (CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 200)) {
                    // line 201
                    yield "                                    <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, $context["player"], "avatar", [], "any", false, false, false, 201))), "html", null, true);
                    yield "\" class=\"rounded-full h-12 w-12 object-cover border-2 border-gray-500 group-hover:border-purple-500\" alt=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 201), "html", null, true);
                    yield "\">
                                ";
                } else {
                    // line 203
                    yield "                                    <img class=\"rounded-full h-12 w-12 object-cover border-2 border-gray-500 group-hover:border-purple-500\" src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                    yield "\" alt=\"Default profile photo\">
                                ";
                }
                // line 205
                yield "                                <div class=\"flex-1 min-w-0\">
                                    <p class=\"font-semibold truncate max-w-full flex items-center group-hover:underline\">
                                        ";
                // line 207
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["player"], "username", [], "any", false, false, false, 207), "html", null, true);
                yield "
                                        ";
                // line 208
                if (CoreExtension::getAttribute($this->env, $this->source, $context["player"], "isVip", [], "any", false, false, false, 208)) {
                    // line 209
                    yield "                                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/vip-logo.png"), "html", null, true);
                    yield "\" alt=\"VIP\" class=\"ml-2 w-4 h-4\" />
                                        ";
                }
                // line 211
                yield "                                    </p>
                                    <span class=\"text-gray-400 text-sm\">Joueur</span>
                                </div>
                            </a>
                        ";
            }
            // line 216
            yield "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['player'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 217
        yield "                </div>
            </div>
        </div>
        <div class=\"flex justify-center fixed bottom-0 left-0 right-0 p-4\">
            ";
        // line 221
        if ((null === CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "user", [], "any", false, false, false, 221))) {
            // line 222
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous devez avoir un compte et être connecté pour rejoindre un univers.
                </button>
            ";
        } elseif (        // line 225
(isset($context["is_owner"]) || array_key_exists("is_owner", $context) ? $context["is_owner"] : (function () { throw new RuntimeError('Variable "is_owner" does not exist.', 225, $this->source); })())) {
            // line 226
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous êtes le MJ
                </button>
            ";
        } elseif (        // line 229
(isset($context["is_member"]) || array_key_exists("is_member", $context) ? $context["is_member"] : (function () { throw new RuntimeError('Variable "is_member" does not exist.', 229, $this->source); })())) {
            // line 230
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous êtes déjà membre
                </button>
            ";
        } elseif (        // line 233
(isset($context["request_in_progress"]) || array_key_exists("request_in_progress", $context) ? $context["request_in_progress"] : (function () { throw new RuntimeError('Variable "request_in_progress" does not exist.', 233, $this->source); })())) {
            // line 234
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    En attente d'acceptation de la demande
                </button>
            ";
        } elseif (        // line 237
(isset($context["is_closed"]) || array_key_exists("is_closed", $context) ? $context["is_closed"] : (function () { throw new RuntimeError('Variable "is_closed" does not exist.', 237, $this->source); })())) {
            // line 238
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Ce groupe est ";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 239, $this->source); })()), "status", [], "any", false, false, false, 239), "html", null, true);
            yield " et ne recrute plus
                </button>
            ";
        } elseif (!CoreExtension::inFilter("ROLE_JOUEUR", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source,         // line 241
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 241, $this->source); })()), "user", [], "any", false, false, false, 241), "getRoles", [], "method", false, false, false, 241))) {
            // line 242
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Vous devez avoir le grade de joueur pour rejoindre ce JDR.
                </button>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 245
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 245, $this->source); })()), "recrutement", [], "any", false, false, false, 245) == false)) {
            // line 246
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Le recrutement est fermé pour cet Univers
                </button>
            ";
        } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source,         // line 249
(isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 249, $this->source); })()), "players", [], "any", false, false, false, 249)) >= CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 249, $this->source); })()), "maxPlayer", [], "any", false, false, false, 249))) {
            // line 250
            yield "                <button class=\"w-full sm:w-[80%] md:w-[60%] bg-gray-500 text-white font-bold py-3 rounded-lg shadow-lg cursor-not-allowed\">
                    Cet univers est complet. Pas de places disponibles.
                </button>
            ";
        } else {
            // line 254
            yield "                <button id=\"participate-button\" class=\"w-full sm:w-[80%] md:w-[60%] bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 text-white font-bold py-3 rounded-lg shadow-lg hover:shadow-2xl hover:bg-blue-800 transition-all duration-300 ease-in-out transform hover:scale-105\">
                    <svg class=\"inline-block w-6 h-6 mr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                    </svg>
                    Je Participe
                </button>
            ";
        }
        // line 261
        yield "        </div>
    </div>
    <div class=\"w-full glassmorphism p-6 rounded-lg space-y-4 border border-[#bb8f4f] mt-8\">
        <ul class=\"flex justify-evenly w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400\" id=\"tabs-list\">
            <li class=\"flex-1\">
                <a href=\"#\" data-tab-target=\"#tab1\" class=\"tab-link inline-block w-full px-4 py-3 text-white rounded-lg border-b-2 border-transparent transition-all duration-300 ease-in-out hover:border-purple-500 hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white\">Horaire</a>
            </li>
            <li class=\"flex-1\">
                <a href=\"#\" data-tab-target=\"#tab2\" class=\"tab-link inline-block w-full px-4 py-3 rounded-lg border-b-2 border-transparent transition-all duration-300 ease-in-out hover:border-purple-500 hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white\">Tab 2</a>
            </li>
            <li class=\"flex-1\">
                <a href=\"#\" data-tab-target=\"#tab3\" class=\"tab-link inline-block w-full px-4 py-3 rounded-lg border-b-2 border-transparent transition-all duration-300 ease-in-out hover:border-purple-500 hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white\">Tab 3</a>
            </li>
            <li class=\"flex-1\">
                <a href=\"#\" data-tab-target=\"#tab4\" class=\"tab-link inline-block w-full px-4 py-3 rounded-lg border-b-2 border-transparent transition-all duration-300 ease-in-out hover:border-purple-500 hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white\">Tab 4</a>
            </li>
        </ul>
        <div id=\"tab-content\" class=\"tab-content-container mt-6\">
            <div id=\"tab1\" class=\"tab-content\">
                <h3 class=\"text-lg font-semibold mb-4\">Horaire des événements</h3>
                <ul class=\"space-y-3\">
                    ";
        // line 282
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["groupe_j_d_r"]) || array_key_exists("groupe_j_d_r", $context) ? $context["groupe_j_d_r"] : (function () { throw new RuntimeError('Variable "groupe_j_d_r" does not exist.', 282, $this->source); })()), "events", [], "any", false, false, false, 282));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 283
            yield "                        <li class=\"bg-gray-800 bg-opacity-90 p-6 rounded-lg shadow-lg flex items-center justify-between transition-all duration-300 hover:bg-opacity-100 hover:shadow-2xl\">
                            <div>
                                <p class=\"text-2xl font-bold text-white\">
                                    Jour: ";
            // line 286
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dayOfWeek", [], "any", false, false, false, 286)), "html", null, true);
            yield "
                                </p>
                                <p class=\"text-xl text-yellow-300 mt-1\">
                                    Heure: ";
            // line 289
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 289), "H:i"), "html", null, true);
            yield "
                                </p>
                            </div>
                            <div class=\"text-right\">
                                <p class=\"text-lg font-medium text-blue-300\">
                                    ";
            // line 294
            $context["hour"] = $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 294), "H");
            // line 295
            yield "                                    ";
            if (((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 295, $this->source); })()) < 12)) {
                // line 296
                yield "                                        ";
                $context["period"] = "du matin";
                // line 297
                yield "                                    ";
            } elseif (((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 297, $this->source); })()) < 18)) {
                // line 298
                yield "                                        ";
                $context["period"] = "de l'après-midi";
                // line 299
                yield "                                    ";
            } else {
                // line 300
                yield "                                        ";
                $context["period"] = "du soir";
                // line 301
                yield "                                    ";
            }
            // line 302
            yield "                                    
                                    ";
            // line 303
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["event"], "dayOfWeek", [], "any", false, false, false, 303)), "html", null, true);
            yield " à ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["hour"]) || array_key_exists("hour", $context) ? $context["hour"] : (function () { throw new RuntimeError('Variable "hour" does not exist.', 303, $this->source); })()), "html", null, true);
            yield ":";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["event"], "eventTime", [], "any", false, false, false, 303), "i"), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["period"]) || array_key_exists("period", $context) ? $context["period"] : (function () { throw new RuntimeError('Variable "period" does not exist.', 303, $this->source); })()), "html", null, true);
            yield "
                                </p>
                            </div>
                        </li>
                    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 308
            yield "                        <li class=\"text-gray-400 text-center bg-gray-700 bg-opacity-75 p-4 rounded-lg\">
                            Aucun événement programmé.
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['event'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        yield "                </ul>
            </div>
            <div id=\"tab2\" class=\"tab-content hidden\">
                <p>Contenu du Tab 2</p>
            </div>
            <div id=\"tab3\" class=\"tab-content hidden\">
                <p>Contenu du Tab 3</p>
            </div>
            <div id=\"tab4\" class=\"tab-content hidden\">
                <p>Contenu du Tab 4</p>
            </div>
        </div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');
    let activeTabId = localStorage.getItem('activeTab');
    if (!activeTabId || !document.querySelector(`[data-tab-target=\"\${activeTabId}\"]`)) {
        activeTabId = tabLinks.length > 0 ? tabLinks[0].getAttribute('data-tab-target') : '#tab1';
    }

    function activateTab(tabId) {
        const activeTabLink = document.querySelector(`[data-tab-target=\"\${tabId}\"]`);
        const activeTabContent = document.querySelector(tabId);

        if (activeTabLink && activeTabContent) {
            resetTabs();
            activeTabLink.classList.add('glassmorphism-purple', 'border-b-2', 'border-purple-500');
            activeTabContent.classList.remove('hidden');
            localStorage.setItem('activeTab', tabId);
        }
    }

    function resetTabs() {
        tabLinks.forEach(link => link.classList.remove('glassmorphism-purple', 'border-b-2', 'border-purple-500'));
        tabContents.forEach(content => content.classList.add('hidden'));
    }

    activateTab(activeTabId);

    tabLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const tabId = link.getAttribute('data-tab-target');
            activateTab(tabId);
        });
    });

    const participateButton = document.getElementById('participate-button');
    const modal = document.getElementById('request-join-modal');
    const closeModalButton = document.getElementById('close-modal');
    const cancelButton = document.getElementById('cancel-button');
    const form = document.getElementById('request-join-form');

    function closeModal() {
        if (modal) {
            modal.classList.add('hidden');
        }
    }

    if (participateButton) {
        participateButton.addEventListener('click', function () {
            if (modal) {
                modal.classList.remove('hidden');
            }
        });
    }

    if (closeModalButton) {
        closeModalButton.addEventListener('click', closeModal);
    }

    if (cancelButton) {
        cancelButton.addEventListener('click', closeModal);
    }

    if (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const message = document.getElementById('message').value;

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("submit_invitation_request"), "html", null, true);
        yield "'
                },
                body: JSON.stringify({ message: message })
            })
            .then(response => {
                if (response.ok) {
                    closeModal();
                    setTimeout(() => {
                        location.reload();
                    }, 500);
                } else {
                    console.error('Erreur lors de la soumission du formulaire.');
                    location.reload();
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
            });
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
        return array (  852 => 402,  760 => 312,  751 => 308,  735 => 303,  732 => 302,  729 => 301,  726 => 300,  723 => 299,  720 => 298,  717 => 297,  714 => 296,  711 => 295,  709 => 294,  701 => 289,  695 => 286,  690 => 283,  685 => 282,  662 => 261,  653 => 254,  647 => 250,  645 => 249,  640 => 246,  638 => 245,  633 => 242,  631 => 241,  626 => 239,  623 => 238,  621 => 237,  616 => 234,  614 => 233,  609 => 230,  607 => 229,  602 => 226,  600 => 225,  595 => 222,  593 => 221,  587 => 217,  581 => 216,  574 => 211,  568 => 209,  566 => 208,  562 => 207,  558 => 205,  552 => 203,  544 => 201,  542 => 200,  537 => 199,  534 => 198,  530 => 197,  523 => 192,  517 => 190,  515 => 189,  511 => 188,  507 => 186,  501 => 184,  493 => 182,  491 => 181,  487 => 180,  479 => 174,  476 => 173,  457 => 171,  454 => 170,  436 => 169,  433 => 168,  425 => 165,  419 => 162,  416 => 161,  414 => 160,  410 => 158,  406 => 156,  402 => 154,  400 => 153,  392 => 148,  388 => 147,  380 => 141,  376 => 139,  368 => 137,  366 => 136,  359 => 135,  357 => 134,  350 => 133,  348 => 132,  343 => 131,  341 => 130,  334 => 129,  332 => 128,  328 => 126,  326 => 125,  322 => 124,  313 => 117,  310 => 116,  302 => 112,  299 => 111,  292 => 107,  284 => 101,  277 => 97,  252 => 74,  249 => 73,  247 => 72,  240 => 67,  232 => 65,  228 => 63,  226 => 62,  216 => 55,  212 => 53,  206 => 51,  200 => 49,  198 => 48,  194 => 47,  186 => 44,  179 => 39,  175 => 37,  171 => 35,  169 => 34,  166 => 33,  164 => 32,  161 => 31,  159 => 30,  156 => 29,  152 => 28,  147 => 27,  143 => 26,  139 => 25,  131 => 22,  127 => 21,  123 => 20,  118 => 18,  104 => 7,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}{{ groupe_j_d_r.title }} | DiceFinder{% endblock %}

{% block body %}
<div class=\"container mx-auto px-4 p-6 relative\">
    <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"glassmorphism text-white bg-[#4447a1] hover:bg-blue-800 focus:ring-4
        focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 inline-flex items-center mb-6\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6 mr-3\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9 15 3 9m0 0 6-6M3 9h12a6 6 0 0 1 0 12h-3\" />
        </svg>
        Retour
    </a>
    <div class=\"flex flex-col w-full space-y-8 lg:space-y-0 lg:space-x-8 lg:flex-row\">
        <div class=\"w-full lg:w-1/3\">
            <div class=\"bg-white bg-opacity-10 border border-[#bb8f4f] rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:-translate-y-2 hover:shadow-2xl hover:bg-opacity-20 card-item\"
                style=\"will-change: transform;\">
                <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"block\">
                    <div class=\"relative\">
                        <img src=\"{{ asset('uploads/images-jdr/' ~ groupe_j_d_r.picture) }}\"
                                alt=\"{{ groupe_j_d_r.title }} image\"
                                class=\"rounded-lg mb-4 w-full h-[20rem] object-cover {% if groupe_j_d_r.players|length >= groupe_j_d_r.maxPlayer %} blur-sm {% endif %} tokenImage\">
                        <div class=\"absolute top-2 right-2\">
                            <span class=\"text-sm font-bold px-2 py-1 rounded
                                {% if groupe_j_d_r.status == 'nouveau' %} bg-green-600
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
                    </div>
                </a>
                <div class=\"mb-2\">
                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe_j_d_r.id}) }}\" class=\"font-semibold text-xl  hover:underline truncate max-w-[100%] block\">{{ groupe_j_d_r.title }}</a>
                </div>
                <div class=\"flex justify-between items-center mt-2\">
                    <a href=\"{{ path('app_profile_show', { 'id': groupe_j_d_r.owner.id }) }}\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                        {% if groupe_j_d_r.owner.avatar %}
                            <img src=\"{{ asset('uploads/avatars/' ~ groupe_j_d_r.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded-full h-12 w-12 object-cover transform border-2 border-gray-500 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50\">
                        {% else %}
                            <img class=\"rounded-full h-12 w-12 object-cover transform border-2 border-gray-500 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                        {% endif %}
                        <div class=\"ml-2\">
                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                            <p class=\"text-lg font-bold text-white group-hover:underline transition-colors duration-300\">{{ groupe_j_d_r.owner.username }}</p>
                        </div>
                    </a>
                    <div class=\"flex items-center text-right gap-1\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-8 h-8 text-gray-400\">
                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                        </svg>
                        {% if groupe_j_d_r.players|length >= groupe_j_d_r.maxPlayer %}
                            <p class=\"text-xl font-bold text-red-500\">Complet</p>
                        {% else %}
                            <p class=\"text-xl font-bold text-white\">{{ groupe_j_d_r.players|length }} / {{ groupe_j_d_r.maxPlayer }}</p>
                        {% endif %}
                    </div>
                </div>
            </div>
            <div class=\"flex justify-center mb-6 pt-10\">
                <div class=\"flex space-x-2 items-center\">
                {% if app.user %}
                    {% if favoriteJdrs is not null and favoriteJdrs.contains(groupe_j_d_r) == false %}
                        <svg  width=\"36\" height=\"35\" viewBox=\"0 0 46 45\" fill=\"none\" xmlns=\"http://www.w3.org/2000/svg\" class=\"\">
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
                        <a href=\"{{ path('add_favorite', {'id': groupe_j_d_r.id}) }}\" class=\"text-lg font-semibold text-gray-300 cursor-pointer hover:text-orange-500 pt-1 pr-5\">
                            Ajouter aux Favoris
                        </a>
                    {% else %}
                        <div class=\"flex items-center\">
                            <svg class=\"w-5 h-5 sm:w-6 sm:h-6 text-green-500 pr-2\" fill=\"none\" stroke=\"currentColor\" viewBox=\"0 0 24 24\" xmlns=\"http://www.w3.org/2000/svg\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M5 13l4 4L19 7\"></path>
                            </svg>
                            <span class=\"text-lg font-semibold text-gray-300 pr-5\">Déjà dans les favoris</span>
                        </div>
                        <a href=\"{{ path('remove_favorite', {'id': groupe_j_d_r.id}) }}\" class=\"text-sm font-medium text-red-500 hover:underline cursor-pointer\">
                            Retirer des favoris
                        </a>
                    {% endif %}
                    {% if app.user and app.user.id == groupe_j_d_r.owner.id %}
                        <a href=\"{{ path('app_groupe_j_d_r_edit', { id: groupe_j_d_r.id }) }}\" class=\"bg-green-600 text-white font-bold py-2 px-4 rounded hover:bg-green-700\">
                            Editer mon Univers
                        </a>
                    {% endif %}
                {% endif %}
                </div>
            </div>
        </div>

        <div class=\"flex flex-col w-full lg:w-2/3 space-y-6\">
        <div class=\"p-6 rounded-lg bg-opacity-12 border border-[#bb8f4f] glassmorphism w-full\">
            <h3 class=\"text-gray-100 font-semibold text-xl mb-4\">Description</h3>
            <p class=\"text-gray-300 mb-4 break-words\">{{ groupe_j_d_r.description }}</p>
                {% set diff = date().diff(groupe_j_d_r.createdAt) %}
                <p class=\"absolute bottom-2 right-4 text-sm text-gray-400\">
                    Fondé depuis
                    {% if diff.y > 0 %}
                        {{ diff.y }} an{{ diff.y > 1 ? 's' }}
                    {% elseif diff.m > 0 %}
                        {{ diff.m }} mois
                    {% elseif diff.d > 0 %}
                        {{ diff.d }} jour{{ diff.d > 1 ? 's' }}
                    {% elseif diff.h > 0 %}
                        {{ diff.h }} heure{{ diff.h > 1 ? 's' }}
                    {% elseif diff.i > 0 %}
                        {{ diff.i }} minute{{ diff.i > 1 ? 's' }}
                    {% else %}
                        à l'instant
                    {% endif %}
                </p>
            </div>

            <div class=\"flex flex-col lg:flex-row w-full space-y-4 lg:space-y-0 lg:space-x-4\">
                <div class=\"w-full lg:w-1/2 bg-white bg-opacity-10 border rounded-lg shadow-lg p-6 border border-[#bb8f4f]\">
                    <h2 class=\"text-gray-100 font-semibold text-xl mb-4\">Recrutement</h2>
                    <p class=\"text-lg font-semibold {{ groupe_j_d_r.recrutement ? 'text-green-500' : 'text-red-500' }}\">
                        {{ groupe_j_d_r.recrutement ? 'Ouvert' : 'Fermé' }}
                    </p>
                </div>
                <div class=\"w-full lg:w-1/2 bg-white bg-opacity-10 border rounded-lg shadow-lg p-6 border border-[#bb8f4f]\">
                    <h2 class=\"text-gray-100 font-semibold text-xl mb-4\">
                        {% if groupe_j_d_r.licence %}
                            Licence
                        {% else %}
                            Catégories
                        {% endif %}
                    </h2>
                    <div class=\"flex flex-wrap gap-2\">
                        {% if groupe_j_d_r.licence %}
                            <span class=\"bg-blue-200 text-blue-800 text-xs font-medium px-2.5 py-0.5 rounded-full\">
                                {{ groupe_j_d_r.licence.name }}
                            </span>
                            <p class=\"text-gray-400 text-xs\">
                                Éditeur : {{ groupe_j_d_r.licence.publisher }} | Année de sortie : {{ groupe_j_d_r.licence.releaseYear }}
                            </p>
                        {% else %}
                            {% set colors = ['bg-blue-200 text-blue-800', 'bg-green-100 text-green-800', 'bg-yellow-200 text-yellow-800', 'bg-red-200 text-red-800'] %}
                            {% for category in groupe_j_d_r.categories %}
                                {% set color = colors[loop.index0 % colors|length] %}
                                <span class=\"{{ color }} text-xs font-medium px-2.5 py-0.5 rounded-full\">{{ category.name }}</span>
                            {% endfor %}
                        {% endif %}
                    </div>
                </div>
            </div>
            <div class=\"glassmorphism p-6 rounded-lg space-y-4 border border-[#bb8f4f] mt-6\">
                <h3 class=\"text-gray-100 font-semibold text-xl mb-4\">MJ et Joueurs</h3>
                <div class=\"grid grid-cols-1 sm:grid-cols-2 gap-4\">
                    <a href=\"{{ path('app_profile_show', { 'id': groupe_j_d_r.owner.id }) }}\" class=\"flex items-center space-x-4 group transition-transform duration-300 transform hover:scale-105\">
                        {% if groupe_j_d_r.owner.avatar %}
                            <img src=\"{{ asset('uploads/avatars/' ~ groupe_j_d_r.owner.avatar) }}\" class=\"rounded-full w-12 h-12 object-cover border-2 border-gray-500 group-hover:border-purple-500\" alt=\"{{ groupe_j_d_r.owner.username }}\">
                        {% else %}
                            <img class=\"rounded-full w-12 h-12 object-cover border-2 border-gray-500 group-hover:border-purple-500\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                        {% endif %}
                        <div class=\"flex-1 min-w-0\">
                            <p class=\"font-semibold truncate max-w-full flex items-center group-hover:underline\">
                                {{ groupe_j_d_r.owner.username }}
                                {% if groupe_j_d_r.owner.isVip %}
                                    <img src=\"{{ asset('images/vip-logo.png') }}\" alt=\"VIP\" class=\"ml-2 w-4 h-4\" />
                                {% endif %}
                            </p>
                            <span class=\"text-gray-400 text-sm\">MJ</span>
                        </div>
                    </a>
                    
                    {% for player in groupe_j_d_r.players %}
                        {% if player.id != groupe_j_d_r.owner.id %}
                            <a href=\"{{ path('app_profile_show', { 'id': player.id }) }}\" class=\"flex items-center space-x-4 group transition-transform duration-300 transform hover:scale-105\">
                                {% if player.avatar %}
                                    <img src=\"{{ asset('uploads/avatars/' ~ player.avatar) }}\" class=\"rounded-full h-12 w-12 object-cover border-2 border-gray-500 group-hover:border-purple-500\" alt=\"{{ player.username }}\">
                                {% else %}
                                    <img class=\"rounded-full h-12 w-12 object-cover border-2 border-gray-500 group-hover:border-purple-500\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                                {% endif %}
                                <div class=\"flex-1 min-w-0\">
                                    <p class=\"font-semibold truncate max-w-full flex items-center group-hover:underline\">
                                        {{ player.username }}
                                        {% if player.isVip %}
                                            <img src=\"{{ asset('images/vip-logo.png') }}\" alt=\"VIP\" class=\"ml-2 w-4 h-4\" />
                                        {% endif %}
                                    </p>
                                    <span class=\"text-gray-400 text-sm\">Joueur</span>
                                </div>
                            </a>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
        <div class=\"flex justify-center fixed bottom-0 left-0 right-0 p-4\">
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
    </div>
    <div class=\"w-full glassmorphism p-6 rounded-lg space-y-4 border border-[#bb8f4f] mt-8\">
        <ul class=\"flex justify-evenly w-full text-sm font-medium text-center text-gray-500 dark:text-gray-400\" id=\"tabs-list\">
            <li class=\"flex-1\">
                <a href=\"#\" data-tab-target=\"#tab1\" class=\"tab-link inline-block w-full px-4 py-3 text-white rounded-lg border-b-2 border-transparent transition-all duration-300 ease-in-out hover:border-purple-500 hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white\">Horaire</a>
            </li>
            <li class=\"flex-1\">
                <a href=\"#\" data-tab-target=\"#tab2\" class=\"tab-link inline-block w-full px-4 py-3 rounded-lg border-b-2 border-transparent transition-all duration-300 ease-in-out hover:border-purple-500 hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white\">Tab 2</a>
            </li>
            <li class=\"flex-1\">
                <a href=\"#\" data-tab-target=\"#tab3\" class=\"tab-link inline-block w-full px-4 py-3 rounded-lg border-b-2 border-transparent transition-all duration-300 ease-in-out hover:border-purple-500 hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white\">Tab 3</a>
            </li>
            <li class=\"flex-1\">
                <a href=\"#\" data-tab-target=\"#tab4\" class=\"tab-link inline-block w-full px-4 py-3 rounded-lg border-b-2 border-transparent transition-all duration-300 ease-in-out hover:border-purple-500 hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-white\">Tab 4</a>
            </li>
        </ul>
        <div id=\"tab-content\" class=\"tab-content-container mt-6\">
            <div id=\"tab1\" class=\"tab-content\">
                <h3 class=\"text-lg font-semibold mb-4\">Horaire des événements</h3>
                <ul class=\"space-y-3\">
                    {% for event in groupe_j_d_r.events %}
                        <li class=\"bg-gray-800 bg-opacity-90 p-6 rounded-lg shadow-lg flex items-center justify-between transition-all duration-300 hover:bg-opacity-100 hover:shadow-2xl\">
                            <div>
                                <p class=\"text-2xl font-bold text-white\">
                                    Jour: {{ event.dayOfWeek|capitalize }}
                                </p>
                                <p class=\"text-xl text-yellow-300 mt-1\">
                                    Heure: {{ event.eventTime|date('H:i') }}
                                </p>
                            </div>
                            <div class=\"text-right\">
                                <p class=\"text-lg font-medium text-blue-300\">
                                    {% set hour = event.eventTime|date('H') %}
                                    {% if hour < 12 %}
                                        {% set period = 'du matin' %}
                                    {% elseif hour < 18 %}
                                        {% set period = 'de l\\'après-midi' %}
                                    {% else %}
                                        {% set period = 'du soir' %}
                                    {% endif %}
                                    
                                    {{ event.dayOfWeek|capitalize }} à {{ hour }}:{{ event.eventTime|date('i') }} {{ period }}
                                </p>
                            </div>
                        </li>
                    {% else %}
                        <li class=\"text-gray-400 text-center bg-gray-700 bg-opacity-75 p-4 rounded-lg\">
                            Aucun événement programmé.
                        </li>
                    {% endfor %}
                </ul>
            </div>
            <div id=\"tab2\" class=\"tab-content hidden\">
                <p>Contenu du Tab 2</p>
            </div>
            <div id=\"tab3\" class=\"tab-content hidden\">
                <p>Contenu du Tab 3</p>
            </div>
            <div id=\"tab4\" class=\"tab-content hidden\">
                <p>Contenu du Tab 4</p>
            </div>
        </div>
    </div>

</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');
    let activeTabId = localStorage.getItem('activeTab');
    if (!activeTabId || !document.querySelector(`[data-tab-target=\"\${activeTabId}\"]`)) {
        activeTabId = tabLinks.length > 0 ? tabLinks[0].getAttribute('data-tab-target') : '#tab1';
    }

    function activateTab(tabId) {
        const activeTabLink = document.querySelector(`[data-tab-target=\"\${tabId}\"]`);
        const activeTabContent = document.querySelector(tabId);

        if (activeTabLink && activeTabContent) {
            resetTabs();
            activeTabLink.classList.add('glassmorphism-purple', 'border-b-2', 'border-purple-500');
            activeTabContent.classList.remove('hidden');
            localStorage.setItem('activeTab', tabId);
        }
    }

    function resetTabs() {
        tabLinks.forEach(link => link.classList.remove('glassmorphism-purple', 'border-b-2', 'border-purple-500'));
        tabContents.forEach(content => content.classList.add('hidden'));
    }

    activateTab(activeTabId);

    tabLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const tabId = link.getAttribute('data-tab-target');
            activateTab(tabId);
        });
    });

    const participateButton = document.getElementById('participate-button');
    const modal = document.getElementById('request-join-modal');
    const closeModalButton = document.getElementById('close-modal');
    const cancelButton = document.getElementById('cancel-button');
    const form = document.getElementById('request-join-form');

    function closeModal() {
        if (modal) {
            modal.classList.add('hidden');
        }
    }

    if (participateButton) {
        participateButton.addEventListener('click', function () {
            if (modal) {
                modal.classList.remove('hidden');
            }
        });
    }

    if (closeModalButton) {
        closeModalButton.addEventListener('click', closeModal);
    }

    if (cancelButton) {
        cancelButton.addEventListener('click', closeModal);
    }

    if (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault();

            const message = document.getElementById('message').value;

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token(\"submit_invitation_request\") }}'
                },
                body: JSON.stringify({ message: message })
            })
            .then(response => {
                if (response.ok) {
                    closeModal();
                    setTimeout(() => {
                        location.reload();
                    }, 500);
                } else {
                    console.error('Erreur lors de la soumission du formulaire.');
                    location.reload();
                }
            })
            .catch(error => {
                console.error('Erreur:', error);
            });
        });
    }
});
</script>

{% endblock %}
", "groupe_jdr/show.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\groupe_jdr\\show.html.twig");
    }
}
