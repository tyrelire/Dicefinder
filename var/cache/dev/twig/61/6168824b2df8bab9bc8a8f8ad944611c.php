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

/* profile/show.html.twig */
class __TwigTemplate_79ecbdbe097c7a1162d43907a7c18d88 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "profile/show.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "profile/show.html.twig", 1);
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

        yield "Profil de ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 3, $this->source); })()), "username", [], "any", false, false, false, 3), "html", null, true);
        
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

        // line 156
        yield "<div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
    <div class=\"px-9 pt-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
        <div class=\"flex flex-wrap mb-6 xl:flex-nowrap\">
            <div class=\"mb-5 mr-5\">
                <div class=\"relative inline-block shrink-0 rounded-2xl\">
                ";
        // line 161
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 161, $this->source); })()), "avatar", [], "any", false, false, false, 161)) {
            // line 162
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 162, $this->source); })()), "avatar", [], "any", false, false, false, 162))), "html", null, true);
            yield "\" class=\"inline-block shrink-0 rounded-2xl w-[80px] h-[80px] lg:w-[160px] lg:h-[160px] object-cover\" alt=\"Photo de profil\">
                ";
        } else {
            // line 164
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" class=\"inline-block shrink-0 rounded-2xl w-[80px] h-[80px] lg:w-[160px] lg:h-[160px] object-cover\" alt=\"Photo de profil par défaut\">
                ";
        }
        // line 166
        yield "                <div class=\"group/tooltip relative\">
                    <span class=\"w-[15px] h-[15px] absolute bg-success rounded-full bottom-0 end-0 -mb-1 -mr-2  border border-white\"></span>
                    <span class=\"text-xs absolute z-10 transition-opacity duration-300 ease-in-out px-3 py-2 whitespace-nowrap text-center transform bg-white rounded-2xl shadow-sm bottom-0 -mb-2 start-full ml-4 font-medium text-secondary-inverse group-hover/tooltip:opacity-100 opacity-0 block\"> Status: Active </span>
                </div>
                </div>
            </div>
            <div class=\"grow\">
                <div class=\"flex flex-wrap items-start justify-between mb-2\">
                    <div class=\"flex flex-col\">
                        <div class=\"flex items-center mb-2\">
                            <a class=\"text-secondary-inverse transition-colors duration-200 ease-in-out font-semibold text-[1.5rem] mr-1 text-gray-100\" href=\"javascript:void(0)\"> ";
        // line 176
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 176, $this->source); })()), "username", [], "any", false, false, false, 176), "html", null, true);
        yield " </a>
                        </div>
                        <div class=\"flex flex-wrap pr-2 mb-4 font-medium\">
                            ";
        // line 179
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 179, $this->source); })()), "gender", [], "any", false, false, false, 179)) {
            // line 180
            yield "                                <a class=\"flex items-center mb-2 mr-5 text-gray-100\" href=\"javascript:void(0)\">
                                    <span class=\"mr-1\">
                                        <svg class=\"w-6 h-6\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\" style=\"color: white;\">
                                            <path d=\"M160 0a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm8 352l0-224 6.9 0c33.7 0 64.9 17.7 82.3 46.6l58.3 97c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9L232 256.9 232 480c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-128s0 0 0 0zM58.2 182.3c19.9-33.1 55.3-53.5 93.8-54.3l0 256s0 0 0 0l0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96-17.8 0c-10.9 0-18.6-10.7-15.2-21.1L93.3 248.1 59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l53.6-89.2z\" fill=\"currentColor\"/>
                                        </svg>
                                    </span>
                                    ";
            // line 186
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 186, $this->source); })()), "gender", [], "any", false, false, false, 186), "html", null, true);
            yield "
                                </a>
                            ";
        }
        // line 189
        yield "                            ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 189, $this->source); })()), "birthdate", [], "any", false, false, false, 189)) {
            // line 190
            yield "                            <a class=\"flex items-center mb-2 mr-5 text-gray-100\" href=\"javascript:void(0)\">
                                <span class=\"mr-1\">
                                    <svg class=\"w-5 h-5 mr-1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\">
                                        <path fill=\"white\" d=\"M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z\"/>
                                    </svg>
                                </span>
                                ";
            // line 196
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 196, $this->source); })()), "birthdate", [], "any", false, false, false, 196)], "method", false, false, false, 196), "y", [], "any", false, false, false, 196), "html", null, true);
            yield " ans
                            </a>
                            ";
        }
        // line 199
        yield "                            <a class=\"flex items-center mb-2 mr-5 text-gray-100\" href=\"javascript:void(0)\">
                                <span class=\"mr-1\">
                                    <svg class=\"w-5 h-5 mr-1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\">
                                        <path  fill=\"white\" d=\"M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L64 64C28.7 64 0 92.7 0 128l0 16 0 48L0 448c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-256 0-48 0-16c0-35.3-28.7-64-64-64l-40 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L152 64l0-40zM48 192l352 0 0 256c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256z\"/>
                                    </svg>
                                </span>
                                ";
        // line 205
        $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 205, $this->source); })()), "getCreatedAt", [], "any", false, false, false, 205)], "method", false, false, false, 205);
        // line 206
        yield "                                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 206, $this->source); })()), "y", [], "any", false, false, false, 206) > 0)) {
            // line 207
            yield "                                    <span class=\"member-since\">Membre depuis ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 207, $this->source); })()), "y", [], "any", false, false, false, 207), "html", null, true);
            yield " an";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 207, $this->source); })()), "y", [], "any", false, false, false, 207) > 1)) ? ("s") : (""));
            yield "</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 208
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 208, $this->source); })()), "m", [], "any", false, false, false, 208) > 0)) {
            // line 209
            yield "                                    <span class=\"member-since\">Membre depuis ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 209, $this->source); })()), "m", [], "any", false, false, false, 209), "html", null, true);
            yield " mois</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 210
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 210, $this->source); })()), "d", [], "any", false, false, false, 210) > 0)) {
            // line 211
            yield "                                    <span class=\"member-since\">Membre depuis ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 211, $this->source); })()), "d", [], "any", false, false, false, 211), "html", null, true);
            yield " jour";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 211, $this->source); })()), "d", [], "any", false, false, false, 211) > 1)) ? ("s") : (""));
            yield "</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 212
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 212, $this->source); })()), "h", [], "any", false, false, false, 212) > 0)) {
            // line 213
            yield "                                    <span class=\"member-since\">Membre depuis ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 213, $this->source); })()), "h", [], "any", false, false, false, 213), "html", null, true);
            yield " heure";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 213, $this->source); })()), "h", [], "any", false, false, false, 213) > 1)) ? ("s") : (""));
            yield "</span>
                                ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 214
(isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 214, $this->source); })()), "i", [], "any", false, false, false, 214) > 0)) {
            // line 215
            yield "                                    <span class=\"member-since\">Membre depuis ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 215, $this->source); })()), "i", [], "any", false, false, false, 215), "html", null, true);
            yield " minute";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 215, $this->source); })()), "i", [], "any", false, false, false, 215) > 1)) ? ("s") : (""));
            yield "</span>
                                ";
        } else {
            // line 217
            yield "                                    <span class=\"member-since\">Membre depuis moins d'une minute</span>
                                ";
        }
        // line 219
        yield "                            </a>
                        </div>
                    </div>
                    <div class=\"flex flex-wrap my-auto\">
                        <a href=\"javascript:void(0)\" class=\"inline-block px-6 py-3 mr-3 text-base font-medium leading-normal text-center align-middle transition-colors duration-150 ease-in-out border-0 shadow-none cursor-pointer rounded-2xl text-muted bg-light border-light hover:bg-light-dark active:bg-light-dark focus:bg-light-dark \"> Follow </a>
                        <a href=\"javascript:void(0)\" class=\"inline-block px-6 py-3 text-base font-medium leading-normal text-center text-white align-middle transition-colors duration-150 ease-in-out border-0 shadow-none cursor-pointer rounded-2xl bg-primary hover:bg-primary-dark active:bg-primary-dark focus:bg-primary-dark \"> Hire </a>
                    </div>
                </div>
                <div class=\"flex flex-wrap justify-between\">
                    <div class=\"flex flex-wrap items-center\">
                        <a href=\"javascript:void(0)\" class=\"mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-neutral-200 transition-all duration-200 ease-in-out px-3 py-1 text-sm font-medium leading-normal\">
                            ";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ownedJDRCount"]) || array_key_exists("ownedJDRCount", $context) ? $context["ownedJDRCount"] : (function () { throw new RuntimeError('Variable "ownedJDRCount" does not exist.', 230, $this->source); })()), "html", null, true);
        yield " ";
        yield ((((isset($context["ownedJDRCount"]) || array_key_exists("ownedJDRCount", $context) ? $context["ownedJDRCount"] : (function () { throw new RuntimeError('Variable "ownedJDRCount" does not exist.', 230, $this->source); })()) == 1)) ? ("Univers créé") : ("Univers créés"));
        yield "
                        </a>
                        <a href=\"javascript:void(0)\" class=\"mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-neutral-200 transition-all duration-200 ease-in-out px-3 py-1 text-sm font-medium leading-normal\">
                            ";
        // line 233
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["joinedJDRCount"]) || array_key_exists("joinedJDRCount", $context) ? $context["joinedJDRCount"] : (function () { throw new RuntimeError('Variable "joinedJDRCount" does not exist.', 233, $this->source); })()), "html", null, true);
        yield " ";
        yield ((((isset($context["joinedJDRCount"]) || array_key_exists("joinedJDRCount", $context) ? $context["joinedJDRCount"] : (function () { throw new RuntimeError('Variable "joinedJDRCount" does not exist.', 233, $this->source); })()) == 1)) ? ("Univers rejoint") : ("Univers rejoints"));
        yield "
                        </a>
                        <a href=\"javascript:void(0)\" class=\"mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-neutral-200 transition-all duration-200 ease-in-out px-3 py-1 text-sm font-medium leading-normal\"> 48 Deals </a>
                    </div>
                </div>
            </div>
        </div>
        <hr class=\"w-full h-px border-neutral-200\">
        <ul nav-tabs class=\"group flex flex-wrap items-stretch text-[1.15rem] font-semibold list-none border-b-2 border-transparent border-solid active-assignments\">
            <li class=\"flex mt-2 -mb-[2px]\">
                <a aria-controls=\"summary\" class=\"py-5 mr-1 sm:mr-3 lg:mr-10 transition-colors duration-200 ease-in-out border-b-2 border-transparent group-[.active-summary]:border-primary group-[.active-summary]:text-primary text-muted hover:border-primary\" href=\"javascript:void(0)\"> Summary </a>
            </li>
            <li class=\"flex mt-2 -mb-[2px]\">
                <a aria-controls=\"assignments\" class=\"py-5 mr-1 sm:mr-3 lg:mr-10 transition-colors duration-200 ease-in-out border-b-2 border-transparent group-[.active-assignments]:border-primary group-[.active-assignments]:text-primary text-muted hover:border-primary\" href=\"javascript:void(0)\"> Assignments </a>
            </li>
            <li class=\"flex mt-2 -mb-[2px]\">
                <a aria-controls=\"marketing\" class=\"py-5 mr-1 sm:mr-3 lg:mr-10 transition-colors duration-200 ease-in-out border-b-2 border-transparent group-[.active-marketing]:border-primary group-[.active-marketing]:text-primary text-muted hover:border-primary\" href=\"javascript:void(0)\"> Marketing </a>
            </li>
            <li class=\"flex mt-2 -mb-[2px]\">
                <a aria-controls=\"followers\" class=\"py-5 mr-1 sm:mr-3 lg:mr-10 transition-colors duration-200 ease-in-out border-b-2 border-transparent group-[.active-followers]:border-primary group-[.active-followers]:text-primary text-muted hover:border-primary\" href=\"javascript:void(0)\"> Followers </a>
            </li>
            <li class=\"flex mt-2 -mb-[2px] group\">
                <a aria-controls=\"history\" class=\"py-5 mr-1 sm:mr-3 lg:mr-10 transition-colors duration-200 ease-in-out border-b-2 border-transparent group-[.active-history]:border-primary group-[.active-history]:text-primary text-muted hover:border-primary\" href=\"javascript:void(0)\"> History </a>
            </li>
        </ul>
    </div>
</div>
<div id=\"summary\" class=\"tab-content hidden\">
    <p>Voici le résumé de la page...</p>
</div>
<div id=\"assignments\" class=\"tab-content hidden\">
    <p>Voici les assignments...</p>
</div>
<div id=\"marketing\" class=\"tab-content hidden\">
    <p>Voici les informations marketing...</p>
</div>
<div id=\"followers\" class=\"tab-content hidden\">
    <p>Voici la liste des followers...</p>
</div>
<div id=\"history\" class=\"tab-content hidden\">
    <p>Voici l'historique...</p>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabLinks = document.querySelectorAll('[nav-tabs] a');
        const tabContents = document.querySelectorAll('.tab-content');

        function resetTabs() {
            tabLinks.forEach(link => {
                link.parentElement.classList.remove('active');
                link.classList.remove('text-primary', 'border-primary');
            });
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });
        }

        function activateTab(tabLink) {
            const tabId = tabLink.getAttribute('aria-controls');
            const targetContent = document.getElementById(tabId);

            if (targetContent) {
                tabLink.parentElement.classList.add('active');
                tabLink.classList.add('text-primary', 'border-primary');
                targetContent.classList.remove('hidden');
            }
        }

        tabLinks.forEach(link => {
            link.addEventListener('click', function () {
                resetTabs();
                activateTab(this);
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
        return "profile/show.html.twig";
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
        return array (  253 => 233,  245 => 230,  232 => 219,  228 => 217,  220 => 215,  218 => 214,  211 => 213,  209 => 212,  202 => 211,  200 => 210,  195 => 209,  193 => 208,  186 => 207,  183 => 206,  181 => 205,  173 => 199,  167 => 196,  159 => 190,  156 => 189,  150 => 186,  142 => 180,  140 => 179,  134 => 176,  122 => 166,  116 => 164,  110 => 162,  108 => 161,  101 => 156,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil de {{ user.username }}{% endblock %}

{% block body %}
{# <div class=\"container mx-auto px-4 py-8\">
    <div class=\"grid grid-cols-1 md:grid-cols-4 gap-8\">
        <div class=\"col-span-1\">
            <div class=\"glassmorphism p-8 relative overflow-hidden hover:shadow-2xl transition-transform duration-300 rounded-lg\">
                {% if app.user and app.user.id == user.id %}
                    <div class=\"absolute top-4 right-4\">
                        <a href=\"{{ path('app_profile_edit') }}\" title=\"Paramètres\" class=\"button-hover\">
                            <svg class=\"h-6 w-6 text-white hover:text-blue-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z\" />
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z\" />
                            </svg>
                        </a>
                    </div>
                {% endif %}
                <div class=\"flex flex-col items-center text-center\">
                    {% if user.avatar %}
                        <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" class=\"w-40 h-40 md:w-48 md:h-48 rounded-full object-cover border-4 border-white shadow-lg mb-6\" alt=\"Photo de profil\">
                    {% else %}
                        <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"w-40 h-40 md:w-48 md:h-48 rounded-full object-cover border-4 border-white shadow-lg mb-6\" alt=\"Photo de profil par défaut\">
                    {% endif %}
                    <h1 class=\"text-2xl md:text-3xl font-bold text-white truncate w-full max-w-full md:max-w-[80%]\">{{ user.username }}</h1>
                </div>
                <hr class=\"my-8 border-t border-gray-500\">
                <div class=\"mb-8\">
                    <span class=\"text-white uppercase font-bold tracking-wider mb-4 block\">Contact</span>
                    <ul class=\"space-y-3 text-sm md:text-base\">
                        {% if user.discordPseudo or user.TwitterPseudo or user.YoutubeChannelLink or user.TwitchChannelLink %}
                            {% if user.discordPseudo %}
                                <li>
                                    <a class=\"text-blue-300 hover:underline\" target=\"_blank\">{{ user.discordPseudo }}</a>
                                </li>
                            {% endif %}
                            {% if user.TwitterPseudo %}
                                <li>
                                    <a href=\"https://twitter.com/{{ user.TwitterPseudo | replace({'@': ''}) }}\" class=\"text-blue-300 hover:underline\" target=\"_blank\">X / Twitter</a>
                                </li>
                            {% endif %}
                            {% if user.YoutubeChannelLink %}
                                <li>
                                    <a href=\"{{ user.YoutubeChannelLink }}\" class=\"text-blue-300 hover:underline\" target=\"_blank\">YouTube</a>
                                </li>
                            {% endif %}
                            {% if user.TwitchChannelLink %}
                                <li>
                                    <a href=\"{{ user.TwitchChannelLink }}\" class=\"text-blue-300 hover:underline\" target=\"_blank\">Twitch</a>
                                </li>
                            {% endif %}
                        {% else %}
                            <li class=\"text-gray-400\">Aucun contact renseigné.</li>
                        {% endif %}
                    </ul>
                </div>
                <div class=\"mb-8\">
                    <span class=\"text-white uppercase font-bold tracking-wider mb-4 block\">Compétences</span>
                    <ul class=\" space-y-3 text-sm md:text-base break-words\">
                        <li class=\"text-gray-400 whitespace-pre-line\">{{ user.competence ? user.competence : 'Pas de compétence spécifiée' }}</li>
                    </ul>
                </div>
                {% if user.gender %}
                    <div class=\"mb-8\">
                        <span class=\"text-white uppercase font-bold tracking-wider mb-4 block\">Genre</span>
                        <p class=\"text-sm md:text-base text-white\">{{ user.gender }}</p>
                    </div>
                {% endif %}
            </div>
        </div>

        <div class=\"col-span-1 md:col-span-3\">
            <div class=\"glassmorphism p-10 rounded-lg hover:shadow-2xl transition-transform duration-300\">
                <h2 class=\"text-2xl font-bold text-white mb-8\">À propos de moi</h2>
                <p class=\"text-gray-100 text-sm md:text-base break-words overflow-hidden text-ellipsis max-h-40 mb-8\">{{ user.bio ? user.bio : 'Pas de biographie disponible' }}</p>

                <h2 class=\"text-2xl font-bold text-white mb-8\">Mes Parties (MJ)</h2>
                <div class=\"mb-10 max-h-80 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-600 scrollbar-track-gray-800 p-6 glassmorphism rounded-lg\">
                    {% for jdr in ownedJDRs %}
                        <div class=\"glassmorphism-invitation-accepted mb-8 border-b pb-4 hover:bg-white hover:bg-opacity-10 transition-colors duration-300 p-6 rounded-lg\">
                            <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center flex-wrap gap-4 w-full\">
                                <span class=\"text-white font-bold text-lg md:text-xl\">Campagne : {{ jdr.title }}</span>
                                <p class=\"text-gray-300 text-sm md:text-base\">
                                    Rôle : Maître du Jeu
                                    <br>
                                    Créée le : <span class=\"text-blue-400\">{{ jdr.createdAt ? jdr.createdAt|date('d/m/Y') : 'Date inconnue' }}</span>
                                    {% if jdr.createdAt %}
                                        {% set now = date() %}
                                        {% set interval = now.diff(jdr.createdAt) %}
                                        <br>
                                        <span class=\"font-semibold text-white\">Durée :</span> 
                                        {% if interval.days > 0 %}
                                            {{ interval.days }} jour{% if interval.days > 1 %}s{% endif %}
                                            {% if interval.h > 0 %}
                                                et {{ interval.h }} heure{% if interval.h > 1 %}s{% endif %}
                                            {% endif %}
                                        {% elseif interval.h > 0 %}
                                            {{ interval.h }} heure{% if interval.h > 1 %}s{% endif %}
                                            {% if interval.i > 0 %}
                                                et {{ interval.i }} minute{% if interval.i > 1 %}s{% endif %}
                                            {% endif %}
                                        {% else %}
                                            {{ interval.i }} minute{% if interval.i > 1 %}s{% endif %}
                                        {% endif %}
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                    {% else %}
                        <p class=\"text-center text-gray-400\">Pas encore de campagnes créées.</p>
                    {% endfor %}
                </div>

                <h2 class=\"text-2xl font-bold text-white mb-8\">Parties où je suis Joueur</h2>
                <div class=\"mb-10 max-h-80 overflow-y-auto scrollbar-thin scrollbar-thumb-gray-600 scrollbar-track-gray-800 p-6 glassmorphism rounded-lg\">
                    {% for joinedJDR in joinedJDRs %}
                        <div class=\"glassmorphism-player-left mb-8 border-b pb-4 hover:bg-white hover:bg-opacity-10 transition-colors duration-300 p-6 rounded-lg\">
                            <div class=\"flex flex-col md:flex-row justify-between items-start md:items-center flex-wrap gap-4 w-full\">
                                <span class=\"text-white font-bold text-lg md:text-xl\">Campagne : {{ joinedJDR.groupe.title }}</span>
                                <p class=\"text-gray-300 text-sm md:text-base\">
                                    Rôle : Joueur
                                    <br>
                                    Depuis le : 
                                    <span class=\"text-blue-400\">{{ joinedJDR.joined_at ? joinedJDR.joined_at|date('d/m/Y') : 'Date inconnue' }}</span>
                                    {% if joinedJDR.joined_at %}
                                        {% set now = date() %}
                                        {% set interval = now.diff(joinedJDR.joined_at) %}
                                        <br>
                                        <span class=\"font-semibold text-white\">Durée :</span> 
                                        {% if interval.days > 0 %}
                                            {{ interval.days }} jour{% if interval.days > 1 %}s{% endif %}
                                            {% if interval.h > 0 %}
                                                et {{ interval.h }} heure{% if interval.h > 1 %}s{% endif %}
                                            {% endif %}
                                        {% elseif interval.h > 0 %}
                                            {{ interval.h }} heure{% if interval.h > 1 %}s{% endif %}
                                            {% if interval.i > 0 %}
                                                et {{ interval.i }} minute{% if interval.i > 1 %}s{% endif %}
                                            {% endif %}
                                        {% else %}
                                            {{ interval.i }} minute{% if interval.i > 1 %}s{% endif %}
                                        {% endif %}
                                    {% endif %}
                                </p>
                            </div>
                        </div>
                    {% else %}
                        <p class=\"text-center text-gray-400\">Pas encore de campagnes associées.</p>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
</div> #}
<div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
    <div class=\"px-9 pt-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
        <div class=\"flex flex-wrap mb-6 xl:flex-nowrap\">
            <div class=\"mb-5 mr-5\">
                <div class=\"relative inline-block shrink-0 rounded-2xl\">
                {% if user.avatar %}
                    <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" class=\"inline-block shrink-0 rounded-2xl w-[80px] h-[80px] lg:w-[160px] lg:h-[160px] object-cover\" alt=\"Photo de profil\">
                {% else %}
                    <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"inline-block shrink-0 rounded-2xl w-[80px] h-[80px] lg:w-[160px] lg:h-[160px] object-cover\" alt=\"Photo de profil par défaut\">
                {% endif %}
                <div class=\"group/tooltip relative\">
                    <span class=\"w-[15px] h-[15px] absolute bg-success rounded-full bottom-0 end-0 -mb-1 -mr-2  border border-white\"></span>
                    <span class=\"text-xs absolute z-10 transition-opacity duration-300 ease-in-out px-3 py-2 whitespace-nowrap text-center transform bg-white rounded-2xl shadow-sm bottom-0 -mb-2 start-full ml-4 font-medium text-secondary-inverse group-hover/tooltip:opacity-100 opacity-0 block\"> Status: Active </span>
                </div>
                </div>
            </div>
            <div class=\"grow\">
                <div class=\"flex flex-wrap items-start justify-between mb-2\">
                    <div class=\"flex flex-col\">
                        <div class=\"flex items-center mb-2\">
                            <a class=\"text-secondary-inverse transition-colors duration-200 ease-in-out font-semibold text-[1.5rem] mr-1 text-gray-100\" href=\"javascript:void(0)\"> {{ user.username  }} </a>
                        </div>
                        <div class=\"flex flex-wrap pr-2 mb-4 font-medium\">
                            {% if user.gender %}
                                <a class=\"flex items-center mb-2 mr-5 text-gray-100\" href=\"javascript:void(0)\">
                                    <span class=\"mr-1\">
                                        <svg class=\"w-6 h-6\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\" style=\"color: white;\">
                                            <path d=\"M160 0a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm8 352l0-224 6.9 0c33.7 0 64.9 17.7 82.3 46.6l58.3 97c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9L232 256.9 232 480c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-128s0 0 0 0zM58.2 182.3c19.9-33.1 55.3-53.5 93.8-54.3l0 256s0 0 0 0l0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96-17.8 0c-10.9 0-18.6-10.7-15.2-21.1L93.3 248.1 59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l53.6-89.2z\" fill=\"currentColor\"/>
                                        </svg>
                                    </span>
                                    {{ user.gender }}
                                </a>
                            {% endif %}
                            {% if user.birthdate %}
                            <a class=\"flex items-center mb-2 mr-5 text-gray-100\" href=\"javascript:void(0)\">
                                <span class=\"mr-1\">
                                    <svg class=\"w-5 h-5 mr-1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\">
                                        <path fill=\"white\" d=\"M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z\"/>
                                    </svg>
                                </span>
                                {{ date().diff(user.birthdate).y }} ans
                            </a>
                            {% endif %}
                            <a class=\"flex items-center mb-2 mr-5 text-gray-100\" href=\"javascript:void(0)\">
                                <span class=\"mr-1\">
                                    <svg class=\"w-5 h-5 mr-1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\">
                                        <path  fill=\"white\" d=\"M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L64 64C28.7 64 0 92.7 0 128l0 16 0 48L0 448c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-256 0-48 0-16c0-35.3-28.7-64-64-64l-40 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L152 64l0-40zM48 192l352 0 0 256c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256z\"/>
                                    </svg>
                                </span>
                                {% set diff = date().diff(user.getCreatedAt) %}
                                {% if diff.y > 0 %}
                                    <span class=\"member-since\">Membre depuis {{ diff.y }} an{{ diff.y > 1 ? 's' }}</span>
                                {% elseif diff.m > 0 %}
                                    <span class=\"member-since\">Membre depuis {{ diff.m }} mois</span>
                                {% elseif diff.d > 0 %}
                                    <span class=\"member-since\">Membre depuis {{ diff.d }} jour{{ diff.d > 1 ? 's' }}</span>
                                {% elseif diff.h > 0 %}
                                    <span class=\"member-since\">Membre depuis {{ diff.h }} heure{{ diff.h > 1 ? 's' }}</span>
                                {% elseif diff.i > 0 %}
                                    <span class=\"member-since\">Membre depuis {{ diff.i }} minute{{ diff.i > 1 ? 's' }}</span>
                                {% else %}
                                    <span class=\"member-since\">Membre depuis moins d'une minute</span>
                                {% endif %}
                            </a>
                        </div>
                    </div>
                    <div class=\"flex flex-wrap my-auto\">
                        <a href=\"javascript:void(0)\" class=\"inline-block px-6 py-3 mr-3 text-base font-medium leading-normal text-center align-middle transition-colors duration-150 ease-in-out border-0 shadow-none cursor-pointer rounded-2xl text-muted bg-light border-light hover:bg-light-dark active:bg-light-dark focus:bg-light-dark \"> Follow </a>
                        <a href=\"javascript:void(0)\" class=\"inline-block px-6 py-3 text-base font-medium leading-normal text-center text-white align-middle transition-colors duration-150 ease-in-out border-0 shadow-none cursor-pointer rounded-2xl bg-primary hover:bg-primary-dark active:bg-primary-dark focus:bg-primary-dark \"> Hire </a>
                    </div>
                </div>
                <div class=\"flex flex-wrap justify-between\">
                    <div class=\"flex flex-wrap items-center\">
                        <a href=\"javascript:void(0)\" class=\"mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-neutral-200 transition-all duration-200 ease-in-out px-3 py-1 text-sm font-medium leading-normal\">
                            {{ ownedJDRCount }} {{ ownedJDRCount == 1 ? 'Univers créé' : 'Univers créés' }}
                        </a>
                        <a href=\"javascript:void(0)\" class=\"mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-neutral-200 transition-all duration-200 ease-in-out px-3 py-1 text-sm font-medium leading-normal\">
                            {{ joinedJDRCount }} {{ joinedJDRCount == 1 ? 'Univers rejoint' : 'Univers rejoints' }}
                        </a>
                        <a href=\"javascript:void(0)\" class=\"mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-neutral-200 transition-all duration-200 ease-in-out px-3 py-1 text-sm font-medium leading-normal\"> 48 Deals </a>
                    </div>
                </div>
            </div>
        </div>
        <hr class=\"w-full h-px border-neutral-200\">
        <ul nav-tabs class=\"group flex flex-wrap items-stretch text-[1.15rem] font-semibold list-none border-b-2 border-transparent border-solid active-assignments\">
            <li class=\"flex mt-2 -mb-[2px]\">
                <a aria-controls=\"summary\" class=\"py-5 mr-1 sm:mr-3 lg:mr-10 transition-colors duration-200 ease-in-out border-b-2 border-transparent group-[.active-summary]:border-primary group-[.active-summary]:text-primary text-muted hover:border-primary\" href=\"javascript:void(0)\"> Summary </a>
            </li>
            <li class=\"flex mt-2 -mb-[2px]\">
                <a aria-controls=\"assignments\" class=\"py-5 mr-1 sm:mr-3 lg:mr-10 transition-colors duration-200 ease-in-out border-b-2 border-transparent group-[.active-assignments]:border-primary group-[.active-assignments]:text-primary text-muted hover:border-primary\" href=\"javascript:void(0)\"> Assignments </a>
            </li>
            <li class=\"flex mt-2 -mb-[2px]\">
                <a aria-controls=\"marketing\" class=\"py-5 mr-1 sm:mr-3 lg:mr-10 transition-colors duration-200 ease-in-out border-b-2 border-transparent group-[.active-marketing]:border-primary group-[.active-marketing]:text-primary text-muted hover:border-primary\" href=\"javascript:void(0)\"> Marketing </a>
            </li>
            <li class=\"flex mt-2 -mb-[2px]\">
                <a aria-controls=\"followers\" class=\"py-5 mr-1 sm:mr-3 lg:mr-10 transition-colors duration-200 ease-in-out border-b-2 border-transparent group-[.active-followers]:border-primary group-[.active-followers]:text-primary text-muted hover:border-primary\" href=\"javascript:void(0)\"> Followers </a>
            </li>
            <li class=\"flex mt-2 -mb-[2px] group\">
                <a aria-controls=\"history\" class=\"py-5 mr-1 sm:mr-3 lg:mr-10 transition-colors duration-200 ease-in-out border-b-2 border-transparent group-[.active-history]:border-primary group-[.active-history]:text-primary text-muted hover:border-primary\" href=\"javascript:void(0)\"> History </a>
            </li>
        </ul>
    </div>
</div>
<div id=\"summary\" class=\"tab-content hidden\">
    <p>Voici le résumé de la page...</p>
</div>
<div id=\"assignments\" class=\"tab-content hidden\">
    <p>Voici les assignments...</p>
</div>
<div id=\"marketing\" class=\"tab-content hidden\">
    <p>Voici les informations marketing...</p>
</div>
<div id=\"followers\" class=\"tab-content hidden\">
    <p>Voici la liste des followers...</p>
</div>
<div id=\"history\" class=\"tab-content hidden\">
    <p>Voici l'historique...</p>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabLinks = document.querySelectorAll('[nav-tabs] a');
        const tabContents = document.querySelectorAll('.tab-content');

        function resetTabs() {
            tabLinks.forEach(link => {
                link.parentElement.classList.remove('active');
                link.classList.remove('text-primary', 'border-primary');
            });
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });
        }

        function activateTab(tabLink) {
            const tabId = tabLink.getAttribute('aria-controls');
            const targetContent = document.getElementById(tabId);

            if (targetContent) {
                tabLink.parentElement.classList.add('active');
                tabLink.classList.add('text-primary', 'border-primary');
                targetContent.classList.remove('hidden');
            }
        }

        tabLinks.forEach(link => {
            link.addEventListener('click', function () {
                resetTabs();
                activateTab(this);
            });
        });
    });
</script>
{% endblock %}
", "profile/show.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\profile\\show.html.twig");
    }
}
