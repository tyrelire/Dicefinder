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

        // line 6
        yield "<div class=\"relative flex flex-col w-full min-w-0 mt-6 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
    <div class=\"px-9 pt-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
        <div class=\"flex flex-wrap mb-6 xl:flex-nowrap\">
            <div class=\"mb-5 mr-5\">
                <div class=\"relative inline-block shrink-0 rounded-2xl\">
                    ";
        // line 11
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 11, $this->source); })()), "avatar", [], "any", false, false, false, 11)) {
            // line 12
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "avatar", [], "any", false, false, false, 12))), "html", null, true);
            yield "\" class=\"inline-block shrink-0 rounded-2xl w-[80px] h-[80px] lg:w-[160px] lg:h-[160px] object-cover\" alt=\"Photo de profil\">
                    ";
        } else {
            // line 14
            yield "                        <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
            yield "\" class=\"inline-block shrink-0 rounded-2xl w-[80px] h-[80px] lg:w-[160px] lg:h-[160px] object-cover\" alt=\"Photo de profil par défaut\">
                    ";
        }
        // line 16
        yield "                </div>
            </div>
            <div class=\"grow\">
                <div class=\"flex flex-wrap items-start justify-between mb-4\">
                    <div class=\"flex flex-col\">
                        <div class=\"flex items-center mb-2\">
                            <a class=\"text-secondary-inverse transition-colors duration-200 ease-in-out font-semibold text-[1.5rem] mr-1 text-gray-100\" href=\"javascript:void(0)\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 22, $this->source); })()), "username", [], "any", false, false, false, 22), "html", null, true);
        yield "</a>
                        </div>
                        <div class=\"flex flex-wrap pr-2 mb-4 font-medium text-gray-100\">
                            ";
        // line 25
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 25, $this->source); })()), "gender", [], "any", false, false, false, 25)) {
            // line 26
            yield "                                <div class=\"flex items-center mr-5 mb-2\">
                                    <span class=\"mr-1\">
                                        <svg class=\"w-6 h-6 text-white\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\">
                                            <path d=\"M160 0a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm8 352l0-224 6.9 0c33.7 0 64.9 17.7 82.3 46.6l58.3 97c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9L232 256.9 232 480c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-128s0 0 0 0zM58.2 182.3c19.9-33.1 55.3-53.5 93.8-54.3l0 256s0 0 0 0l0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96-17.8 0c-10.9 0-18.6-10.7-15.2-21.1L93.3 248.1 59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l53.6-89.2z\" fill=\"currentColor\"/>
                                        </svg>
                                    </span>
                                    ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "gender", [], "any", false, false, false, 32), "html", null, true);
            yield "
                                </div>
                            ";
        }
        // line 35
        yield "                            ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 35, $this->source); })()), "birthdate", [], "any", false, false, false, 35)) {
            // line 36
            yield "                                <div class=\"flex items-center mr-5 mb-2\">
                                    <span class=\"mr-1\">
                                        <svg class=\"w-5 h-5 mr-1 text-white\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\">
                                            <path fill=\"currentColor\" d=\"M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z\"/>
                                        </svg>
                                    </span>
                                    ";
            // line 42
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "birthdate", [], "any", false, false, false, 42)], "method", false, false, false, 42), "y", [], "any", false, false, false, 42), "html", null, true);
            yield " ans
                                </div>
                            ";
        }
        // line 45
        yield "                            <div class=\"flex items-center mr-5 mb-2\">
                                <span class=\"mr-1\">
                                    <svg class=\"w-5 h-5 mr-1 text-white\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\">
                                        <path fill=\"currentColor\" d=\"M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L64 64C28.7 64 0 92.7 0 128l0 16 0 48L0 448c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-256 0-48 0-16c0-35.3-28.7-64-64-64l-40 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L152 64l0-40zM48 192l352 0 0 256c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256z\"/>
                                    </svg>
                                </span>
                                ";
        // line 51
        $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "getCreatedAt", [], "any", false, false, false, 51)], "method", false, false, false, 51);
        // line 52
        yield "                                <span class=\"member-since\">Membre depuis ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 52, $this->source); })()), "y", [], "any", false, false, false, 52) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 52, $this->source); })()), "y", [], "any", false, false, false, 52) . " an") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 52, $this->source); })()), "y", [], "any", false, false, false, 52) > 1)) ? ("s") : ("")))) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 52, $this->source); })()), "m", [], "any", false, false, false, 52) > 0)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 52, $this->source); })()), "m", [], "any", false, false, false, 52) . " mois")) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 52, $this->source); })()), "d", [], "any", false, false, false, 52) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 52, $this->source); })()), "d", [], "any", false, false, false, 52) . " jour") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 52, $this->source); })()), "d", [], "any", false, false, false, 52) > 1)) ? ("s") : ("")))) : ("moins d'une minute")))))), "html", null, true);
        yield "</span>
                            </div>
                        </div>
                    </div>
                </div>
                ";
        // line 57
        if (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "discordPseudo", [], "any", false, false, false, 57) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "roll20Pseudo", [], "any", false, false, false, 57)) || CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 57, $this->source); })()), "TwitterPseudo", [], "any", false, false, false, 57))) {
            // line 58
            yield "                    <div class=\"flex items-center mb-4 space-x-4\">
                        ";
            // line 59
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "discordPseudo", [], "any", false, false, false, 59)) {
                // line 60
                yield "                            <a href=\"\" target=\"_blank\" class=\"flex items-center text-gray-100 hover:text-blue-400 space-x-2\">
                                <svg class=\"w-6 h-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\"><g fill=\"currentColor\" fill-opacity=\"0\"><circle cx=\"9\" cy=\"12\" r=\"1.5\"><animate fill=\"freeze\" attributeName=\"fill-opacity\" begin=\"1.3s\" dur=\"0.15s\" values=\"0;1\"/></circle><circle cx=\"15\" cy=\"12\" r=\"1.5\"><animate fill=\"freeze\" attributeName=\"fill-opacity\" begin=\"1.45s\" dur=\"0.15s\" values=\"0;1\"/></circle><path d=\"M5 5l7 0.2l7 -0.2l3 10l-3 3.4h-14l-3.5 -3.4l3.5 -10Z\"><animate fill=\"freeze\" attributeName=\"fill-opacity\" begin=\"1.7s\" dur=\"0.15s\" values=\"0;0.3\"/></path></g><g fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"><path stroke-dasharray=\"32\" stroke-dashoffset=\"32\" d=\"M12 6h2l1 -2c0 0 2.5 0.5 4 1.5c3.53 2.35 3 9.5 3 10.5c-1.33 2.17 -5.5 3.5 -5.5 3.5l-1 -2M12 6h-2l-0.97 -2c0 0 -2.5 0.5 -4 1.5c-3.53 2.35 -3 9.5 -3 10.5c1.33 2.17 5.5 3.5 5.5 3.5l1 -2\"><animate fill=\"freeze\" attributeName=\"stroke-dashoffset\" dur=\"0.7s\" values=\"32;0\"/></path><path stroke-dasharray=\"16\" stroke-dashoffset=\"16\" d=\"M5.5 16c5 2.5 8 2.5 13 0\"><animate fill=\"freeze\" attributeName=\"stroke-dashoffset\" begin=\"0.8s\" dur=\"0.4s\" values=\"16;0\"/></path></g></svg>
                                <span>";
                // line 62
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 62, $this->source); })()), "discordPseudo", [], "any", false, false, false, 62), "html", null, true);
                yield "</span>
                            </a>
                        ";
            }
            // line 65
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "roll20Pseudo", [], "any", false, false, false, 65)) {
                // line 66
                yield "                            <a href=\"https://app.roll20.net/users/4643567/talep";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 66, $this->source); })()), "roll20Pseudo", [], "any", false, false, false, 66), "html", null, true);
                yield "\" target=\"_blank\" class=\"flex items-center text-gray-100 hover:text-pink-500 space-x-1\">
                                <svg class=\"w-6 h-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" d=\"M11.383 0q-.03.002-.06.014h-.037L4.03 3.654a.25.25 0 0 0-.129.211c0 .136.11.239.239.239l-.008.013a.2.2 0 0 0 .096-.021l7.181-1.567a.245.245 0 0 0 .21-.236V.225A.24.24 0 0 0 11.382 0zm1.22.008c-.128 0-.23.1-.236.222V2.3c0 .122.094.217.21.23l-.007-.013l7.182 1.574a.236.236 0 0 0 .203-.428L12.7.02h-.008l-.027-.012h-.06zm.57 3.404a.24.24 0 0 0-.237.242q0 .073.04.123l6.749 11.868c.04.06.108.101.19.101c.128 0 .229-.1.235-.223l2.428-9.921c0-.014.008-.02.008-.034a.24.24 0 0 0-.203-.23l-9.121-1.9l.013-.006s-.027-.001-.04-.008zm-2.38.012l-.06.008c-.014 0-.028-.001-.042.006l-9.12 1.9a.24.24 0 0 0-.204.23c0 .014 0 .02.006.034h.014l2.427 9.921a.24.24 0 0 0 .239.23c.081 0 .148-.04.19-.1l6.747-11.87c.02-.04.041-.073.041-.12a.24.24 0 0 0-.238-.24zm1.193.306a.24.24 0 0 0-.195.108L4.676 16.404h.008a.22.22 0 0 0-.041.13c0 .135.109.237.238.237H19.1a.236.236 0 0 0 .237-.238a.3.3 0 0 0-.041-.129L12.184 3.838a.24.24 0 0 0-.198-.108M1.543 9.305a.24.24 0 0 0-.23.209v.035l.298 8.062v.008c0 .136.108.236.237.236q.059 0 .109-.033l1.268-.754h.005l.008-.006l.014-.007a.24.24 0 0 0 .115-.203a.1.1 0 0 0-.008-.041L1.773 9.514a.24.24 0 0 0-.23-.21zm20.908.006a.24.24 0 0 0-.23.21l-1.588 7.297c0 .014-.006.028-.006.041c0 .089.047.156.115.203l.02.014s.007 0 .013.006l1.268.76a.234.234 0 0 0 .346-.209v-.008l.299-8.063v-.007l-.006-.006V9.52a.24.24 0 0 0-.23-.21zm-12.105.828c1.064 0 1.492.698 1.492 1.35c0 .86-.611 1.193-1.317 1.58c-.311.169-.671.393-.746.63h1.995s.054.028.054.055v.766s-.027.054-.054.054H8.799s-.053-.027-.053-.054v-.368h-.014c0-.99.638-1.465 1.323-1.838c.786-.42.847-.603.847-.834c0-.142-.054-.474-.556-.474c-.38 0-.623.279-.623.713a.054.054 0 0 1-.055.054h-.82s-.055-.027-.055-.054c0-.76.488-1.58 1.553-1.58m3.431.013c.794 0 1.641.59 1.641 2.252s-.847 2.25-1.64 2.25c-.794 0-1.65-.588-1.65-2.25s.856-2.252 1.65-2.252zm-.002.854c-.657 0-.724.97-.724 1.39c0 .326.053 1.383.724 1.383c.672 0 .727-1.057.727-1.383c0-.413-.069-1.39-.727-1.39M5.4 17.523a.236.236 0 0 0-.236.239c0 .074.04.142.094.19l6.578 5.993a.24.24 0 0 0 .15.055a.23.23 0 0 0 .149-.055l6.578-5.994c.054-.047.096-.109.096-.183l.005-.006a.24.24 0 0 0-.23-.239zm-1.662.143c-.054 0-.1.02-.134.047H3.59l-1.235.74a.25.25 0 0 0-.12.21c0 .087.046.162.12.202l5.975 3.522c.034.013.075.033.115.033c.136 0 .239-.11.239-.238a.24.24 0 0 0-.063-.155l.022-.007l-4.748-4.307H3.88a.26.26 0 0 0-.143-.047zm16.496.006a.24.24 0 0 0-.136.049h-.014l-4.746 4.306a.3.3 0 0 0-.063.162c0 .136.11.237.239.237c.04 0 .081-.013.115-.033l5.975-3.514a.25.25 0 0 0 .12-.21a.23.23 0 0 0-.12-.202l.013-.008l-1.234-.738h-.014a.25.25 0 0 0-.135-.05z\"/></svg>
                                <span>";
                // line 68
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 68, $this->source); })()), "roll20Pseudo", [], "any", false, false, false, 68), "html", null, true);
                yield "</span>
                            </a>
                        ";
            }
            // line 71
            yield "                        ";
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 71, $this->source); })()), "TwitterPseudo", [], "any", false, false, false, 71)) {
                // line 72
                yield "                            <a href=\"https://facebook.com/";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 72, $this->source); })()), "TwitterPseudo", [], "any", false, false, false, 72), "html", null, true);
                yield "\" target=\"_blank\" class=\"flex items-center text-gray-100 hover:text-blue-600 space-x-1\">
                                <svg class=\"w-6 h-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" fill-opacity=\"0\" stroke=\"currentColor\" stroke-dasharray=\"64\" stroke-dashoffset=\"64\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19.89 7.34c-0.09 0.33 -0.49 1.16 -1.17 1.95c-0.45 8.68 -8.87 11.5 -14.64 8.59c-0.79 -1.05 2.85 -0.62 4.18 -2.63c-5.03 -2.57 -4.63 -9.44 -3.62 -9.16c2.37 3.19 6.19 3.48 6.81 3.19c0 -0.73 -0.31 -2.32 1.41 -3.65c0.99 -0.71 3.06 -1.34 4.93 0.69c0.32 0.21 0.78 0.3 1.47 0.15c0.41 -0.21 0.95 -0.07 0.67 0.66Z\"><animate fill=\"freeze\" attributeName=\"fill-opacity\" begin=\"0.6s\" dur=\"0.15s\" values=\"0;0.3\"/><animate fill=\"freeze\" attributeName=\"stroke-dashoffset\" dur=\"0.6s\" values=\"64;0\"/></path></svg>
                                <span>";
                // line 74
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 74, $this->source); })()), "TwitterPseudo", [], "any", false, false, false, 74), "html", null, true);
                yield "</span>
                            </a>
                        ";
            }
            // line 77
            yield "                    </div>
                ";
        }
        // line 79
        yield "                <div class=\"flex flex-wrap mb-4\">
                    <a href=\"javascript:void(0)\" class=\"mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-[#363672] hover:text-white shadow-lg hover:shadow-2xl transition-all duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-110 hover:rotate-1 px-4 py-2 text-sm font-semibold leading-normal\">
                        ";
        // line 81
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["ownedJDRCount"]) || array_key_exists("ownedJDRCount", $context) ? $context["ownedJDRCount"] : (function () { throw new RuntimeError('Variable "ownedJDRCount" does not exist.', 81, $this->source); })()), "html", null, true);
        yield " ";
        yield ((((isset($context["ownedJDRCount"]) || array_key_exists("ownedJDRCount", $context) ? $context["ownedJDRCount"] : (function () { throw new RuntimeError('Variable "ownedJDRCount" does not exist.', 81, $this->source); })()) == 1)) ? ("Univers créé") : ("Univers créés"));
        yield "
                    </a>
                    <a href=\"javascript:void(0)\" class=\"mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-[#363672] hover:text-white shadow-lg hover:shadow-2xl transition-all duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-110 hover:rotate-1 px-4 py-2 text-sm font-semibold leading-normal\">
                        ";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["joinedJDRCount"]) || array_key_exists("joinedJDRCount", $context) ? $context["joinedJDRCount"] : (function () { throw new RuntimeError('Variable "joinedJDRCount" does not exist.', 84, $this->source); })()), "html", null, true);
        yield " ";
        yield ((((isset($context["joinedJDRCount"]) || array_key_exists("joinedJDRCount", $context) ? $context["joinedJDRCount"] : (function () { throw new RuntimeError('Variable "joinedJDRCount" does not exist.', 84, $this->source); })()) == 1)) ? ("Univers rejoint") : ("Univers rejoints"));
        yield "
                    </a>
                    <a href=\"javascript:void(0)\" class=\"mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-[#363672] hover:text-white shadow-lg hover:shadow-2xl transition-all duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-110 hover:rotate-1 px-4 py-2 text-sm font-semibold leading-normal\">
                        ";
        // line 87
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["favoriteJDRCount"]) || array_key_exists("favoriteJDRCount", $context) ? $context["favoriteJDRCount"] : (function () { throw new RuntimeError('Variable "favoriteJDRCount" does not exist.', 87, $this->source); })()), "html", null, true);
        yield " ";
        yield ((((isset($context["favoriteJDRCount"]) || array_key_exists("favoriteJDRCount", $context) ? $context["favoriteJDRCount"] : (function () { throw new RuntimeError('Variable "favoriteJDRCount" does not exist.', 87, $this->source); })()) == 1)) ? ("Univers en favori") : ("Univers en favoris"));
        yield "
                    </a>
                </div>
                ";
        // line 90
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 90, $this->source); })()), "bio", [], "any", false, false, false, 90)) {
            // line 91
            yield "                    <div class=\"flex flex-wrap items-start justify-between mb-4\">
                        <div class=\"w-full text-gray-100 bg-gray-800 p-4 rounded-lg\">
                            <h2 class=\"text-xl font-semibold mb-2\">Bio</h2>
                            <p>";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 94, $this->source); })()), "bio", [], "any", false, false, false, 94), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                ";
        }
        // line 98
        yield "                ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 98, $this->source); })()), "competence", [], "any", false, false, false, 98)) {
            // line 99
            yield "                    <div class=\"flex flex-wrap items-start justify-between mb-4\">
                        <div class=\"w-full text-gray-100 bg-gray-800 p-4 rounded-lg\">
                            <h2 class=\"text-xl font-semibold mb-2\">Compétences</h2>
                            <p>";
            // line 102
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 102, $this->source); })()), "competence", [], "any", false, false, false, 102), "html", null, true);
            yield "</p>
                        </div>
                    </div>
                ";
        }
        // line 106
        yield "            </div>
        </div>
        <hr class=\"w-full h-px border-neutral-200\">
        <ul nav-tabs class=\"group flex flex-wrap items-stretch text-[1rem] font-semibold list-none border-b-2 border-transparent border-solid active-assignments text-gray-100 m-3\">
            <li class=\"flex mt-2 -mb-[2px]\">
                <a class=\"tab-link p-3 mr-1 sm:mr-3 lg:mr-10 transition-all duration-300 ease-in-out border-b-2 hover:border-[#363672] hover:text-gray-100 transform hover:-translate-y-1 hover:scale-105 hover:shadow-md glassmorphism\"
                aria-controls=\"owned-jdrs\" href=\"javascript:void(0)\">
                    ";
        // line 113
        yield ((((isset($context["ownedJDRCount"]) || array_key_exists("ownedJDRCount", $context) ? $context["ownedJDRCount"] : (function () { throw new RuntimeError('Variable "ownedJDRCount" does not exist.', 113, $this->source); })()) == 1)) ? ("Univers créé") : ("Univers créés"));
        yield "
                </a>
            </li>
            <li class=\"flex mt-2 -mb-[2px]\">
                <a class=\"tab-link p-3 mr-1 sm:mr-3 lg:mr-10 transition-all duration-300 ease-in-out border-b-2 hover:border-[#363672] hover:text-gray-100 transform hover:-translate-y-1 hover:scale-105 hover:shadow-md glassmorphism\"
                aria-controls=\"joined-jdrs\" href=\"javascript:void(0)\">
                    ";
        // line 119
        yield ((((isset($context["joinedJDRCount"]) || array_key_exists("joinedJDRCount", $context) ? $context["joinedJDRCount"] : (function () { throw new RuntimeError('Variable "joinedJDRCount" does not exist.', 119, $this->source); })()) == 1)) ? ("Univers rejoint") : ("Univers rejoints"));
        yield "
                </a>
            </li>
            <li class=\"flex mt-2 -mb-[2px]\">
                <a class=\"tab-link p-3 mr-1 sm:mr-3 lg:mr-10 transition-all duration-300 ease-in-out border-b-2 hover:border-[#363672] hover:text-gray-100 transform hover:-translate-y-1 hover:scale-105 hover:shadow-md glassmorphism\"
                aria-controls=\"favorite-jdrs\" href=\"javascript:void(0)\">
                    ";
        // line 125
        yield ((((isset($context["favoriteJDRCount"]) || array_key_exists("favoriteJDRCount", $context) ? $context["favoriteJDRCount"] : (function () { throw new RuntimeError('Variable "favoriteJDRCount" does not exist.', 125, $this->source); })()) == 1)) ? ("Univers en favori") : ("Univers en favoris"));
        yield "
                </a>
            </li>
        </ul>
    </div>
</div>

<div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
    <div id=\"owned-jdrs\" class=\"tab-content\">
        <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ownedJDRs"]) || array_key_exists("ownedJDRs", $context) ? $context["ownedJDRs"] : (function () { throw new RuntimeError('Variable "ownedJDRs" does not exist.', 136, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 137
            yield "                    <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                        style=\"will-change: transform;\">
                        <a href=\"";
            // line 139
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 139)]), "html", null, true);
            yield "\" class=\"block\">
                            <div class=\"relative\">
                                <img src=\"";
            // line 141
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "picture", [], "any", false, false, false, 141))), "html", null, true);
            yield "\" 
                                    alt=\"";
            // line 142
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 142), "html", null, true);
            yield " image\" 
                                    class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 143
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 143)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 143))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                <div class=\"absolute top-2 right-2\">
                                    <span class=\"text-sm font-bold px-2 py-1 rounded 
                                        ";
            // line 146
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "status", [], "any", false, false, false, 146) == "nouveau")) {
                yield " bg-green-600
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 147
$context["groupe"], "status", [], "any", false, false, false, 147) == "en_cours")) {
                yield " bg-blue-500
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 148
$context["groupe"], "status", [], "any", false, false, false, 148) == "termine")) {
                yield " bg-red-500
                                        ";
            } else {
                // line 149
                yield " bg-gray-700
                                        ";
            }
            // line 150
            yield " text-white\">
                                        ";
            // line 151
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "status", [], "any", false, false, false, 151) == "nouveau")) {
                // line 152
                yield "                                            Nouveau
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 153
$context["groupe"], "status", [], "any", false, false, false, 153) == "en_cours")) {
                // line 154
                yield "                                            En Cours
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 155
$context["groupe"], "status", [], "any", false, false, false, 155) == "termine")) {
                // line 156
                yield "                                            Terminé
                                        ";
            } else {
                // line 158
                yield "                                            Statut inconnu
                                        ";
            }
            // line 160
            yield "                                    </span>
                                </div>
                            </div>
                        </a>
                        <div class=\"mb-2\">
                            <a href=\"";
            // line 165
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 165)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 165), "html", null, true);
            yield "</a>
                        </div>
                        <div class=\"flex justify-between items-center mt-2\">
                            <a href=\"";
            // line 168
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 168), "id", [], "any", false, false, false, 168)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                ";
            // line 169
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 169), "avatar", [], "any", false, false, false, 169)) {
                // line 170
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 170), "avatar", [], "any", false, false, false, 170))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                ";
            } else {
                // line 172
                yield "                                    <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                ";
            }
            // line 174
            yield "                                <div class=\"ml-2\">
                                    <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                    <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 176), "username", [], "any", false, false, false, 176), "html", null, true);
            yield "</p>
                                </div>
                            </a>
                            <div class=\"flex items-center text-right gap-1\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                </svg>
                                ";
            // line 183
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 183)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 183))) {
                // line 184
                yield "                                    <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                ";
            } else {
                // line 186
                yield "                                    <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 186)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 186), "html", null, true);
                yield "</p>
                                ";
            }
            // line 188
            yield "                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 192
            yield "                    <p class=\"text-gray-400\">Aucun nouveau jeu de rôle disponible.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
        yield "            </div>
        </div>
    </div>
        <div id=\"joined-jdrs\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                        ";
        // line 201
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joinedJDRs"]) || array_key_exists("joinedJDRs", $context) ? $context["joinedJDRs"] : (function () { throw new RuntimeError('Variable "joinedJDRs" does not exist.', 201, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["joined"]) {
            // line 202
            yield "                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item tab-content\"
                                style=\"will-change: transform;\">
                                <a href=\"";
            // line 204
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "id", [], "any", false, false, false, 204)]), "html", null, true);
            yield "\" class=\"block\">
                                    <div class=\"relative\">
                                        <img src=\"";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "picture", [], "any", false, false, false, 206))), "html", null, true);
            yield "\" 
                                            alt=\"";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "title", [], "any", false, false, false, 207), "html", null, true);
            yield " image\" 
                                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 208
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 208)) >= CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 208))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                        <div class=\"absolute top-2 right-2\">
                                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                                ";
            // line 211
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "status", [], "any", false, false, false, 211) == "nouveau")) {
                yield " bg-green-600
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 212
$context["joined"], "status", [], "any", false, false, false, 212) == "en_cours")) {
                yield " bg-blue-500
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 213
$context["joined"], "status", [], "any", false, false, false, 213) == "termine")) {
                yield " bg-red-500
                                                ";
            } else {
                // line 214
                yield " bg-gray-700
                                                ";
            }
            // line 215
            yield " text-white\">
                                                ";
            // line 216
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "status", [], "any", false, false, false, 216) == "nouveau")) {
                // line 217
                yield "                                                    Nouveau
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 218
$context["joined"], "status", [], "any", false, false, false, 218) == "en_cours")) {
                // line 219
                yield "                                                    En Cours
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 220
$context["joined"], "status", [], "any", false, false, false, 220) == "termine")) {
                // line 221
                yield "                                                    Terminé
                                                ";
            } else {
                // line 223
                yield "                                                    Statut inconnu
                                                ";
            }
            // line 225
            yield "                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"mb-2\">
                                    <a href=\"";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "id", [], "any", false, false, false, 230)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "title", [], "any", false, false, false, 230), "html", null, true);
            yield "</a>
                                </div>
                                <div class=\"flex justify-between items-center mt-2\">
                                    <a href=\"";
            // line 233
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 233), "id", [], "any", false, false, false, 233)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                        ";
            // line 234
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 234), "avatar", [], "any", false, false, false, 234)) {
                // line 235
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 235), "avatar", [], "any", false, false, false, 235))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                        ";
            } else {
                // line 237
                yield "                                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                        ";
            }
            // line 239
            yield "                                        <div class=\"ml-2\">
                                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 241), "username", [], "any", false, false, false, 241), "html", null, true);
            yield "</p>
                                        </div>
                                    </a>
                                    <div class=\"flex items-center text-right gap-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                        </svg>
                                        ";
            // line 248
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 248)) >= CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 248))) {
                // line 249
                yield "                                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                        ";
            } else {
                // line 251
                yield "                                            <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 251)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 251), "html", null, true);
                yield "</p>
                                        ";
            }
            // line 253
            yield "                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 257
            yield "                            <p class=\"text-gray-400\">Aucun univers rejoint.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joined'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 259
        yield "                    </div>
                </div>
            </div>
        </div>
        <div id=\"favorite-jdrs\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                        ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favoriteJDRs"]) || array_key_exists("favoriteJDRs", $context) ? $context["favoriteJDRs"] : (function () { throw new RuntimeError('Variable "favoriteJDRs" does not exist.', 267, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 268
            yield "                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                                aria-controls=\"favorite-jdrs\" style=\"will-change: transform;\">
                                <a href=\"";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 270)]), "html", null, true);
            yield "\" class=\"block\">
                                    <div class=\"relative\">
                                        <img src=\"";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "picture", [], "any", false, false, false, 272))), "html", null, true);
            yield "\" 
                                            alt=\"";
            // line 273
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 273), "html", null, true);
            yield " image\" 
                                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 274
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 274)) >= CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 274))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                        <div class=\"absolute top-2 right-2\">
                                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                                ";
            // line 277
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "status", [], "any", false, false, false, 277) == "nouveau")) {
                yield " bg-green-600
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 278
$context["favorite"], "status", [], "any", false, false, false, 278) == "en_cours")) {
                yield " bg-blue-500
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 279
$context["favorite"], "status", [], "any", false, false, false, 279) == "termine")) {
                yield " bg-red-500
                                                ";
            } else {
                // line 280
                yield " bg-gray-700
                                                ";
            }
            // line 281
            yield " text-white\">
                                                ";
            // line 282
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "status", [], "any", false, false, false, 282) == "nouveau")) {
                // line 283
                yield "                                                    Nouveau
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 284
$context["favorite"], "status", [], "any", false, false, false, 284) == "en_cours")) {
                // line 285
                yield "                                                    En Cours
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 286
$context["favorite"], "status", [], "any", false, false, false, 286) == "termine")) {
                // line 287
                yield "                                                    Terminé
                                                ";
            } else {
                // line 289
                yield "                                                    Statut inconnu
                                                ";
            }
            // line 291
            yield "                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"mb-2\">
                                    <a href=\"";
            // line 296
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 296)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 296), "html", null, true);
            yield "</a>
                                </div>
                                <div class=\"flex justify-between items-center mt-2\">
                                    <a href=\"";
            // line 299
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 299), "id", [], "any", false, false, false, 299)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                        ";
            // line 300
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 300), "avatar", [], "any", false, false, false, 300)) {
                // line 301
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 301), "avatar", [], "any", false, false, false, 301))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                        ";
            } else {
                // line 303
                yield "                                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                        ";
            }
            // line 305
            yield "                                        <div class=\"ml-2\">
                                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 307
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 307), "username", [], "any", false, false, false, 307), "html", null, true);
            yield "</p>
                                        </div>
                                    </a>
                                    <div class=\"flex items-center text-right gap-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                        </svg>
                                        ";
            // line 314
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 314)) >= CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 314))) {
                // line 315
                yield "                                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                        ";
            } else {
                // line 317
                yield "                                            <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 317)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 317), "html", null, true);
                yield "</p>
                                        ";
            }
            // line 319
            yield "                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 323
            yield "                            <p class=\"text-gray-400\">Aucun JDR en favori.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['favorite'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        yield "                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
        const tabLinks = document.querySelectorAll('.tab-link');
        const tabContents = document.querySelectorAll('.tab-content');

        function resetTabs() {
            tabLinks.forEach(link => {
                link.parentElement.classList.remove('active');
                link.classList.remove('glassmorphism-purple');
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
                tabLink.classList.add('glassmorphism-purple');
                targetContent.classList.remove('hidden');
                localStorage.setItem('activeTab', tabId);
            }
        }

        const activeTabId = localStorage.getItem('activeTab');
        if (activeTabId) {
            const activeTabLink = document.querySelector(`[aria-controls=\"\${activeTabId}\"]`);
            if (activeTabLink) {
                resetTabs();
                activateTab(activeTabLink);
            }
        } else {
            resetTabs();
            activateTab(tabLinks[0]);
        }

        tabLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
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
        return array (  794 => 325,  787 => 323,  779 => 319,  771 => 317,  767 => 315,  765 => 314,  755 => 307,  751 => 305,  745 => 303,  739 => 301,  737 => 300,  733 => 299,  725 => 296,  718 => 291,  714 => 289,  710 => 287,  708 => 286,  705 => 285,  703 => 284,  700 => 283,  698 => 282,  695 => 281,  691 => 280,  686 => 279,  682 => 278,  678 => 277,  670 => 274,  666 => 273,  662 => 272,  657 => 270,  653 => 268,  648 => 267,  638 => 259,  631 => 257,  623 => 253,  615 => 251,  611 => 249,  609 => 248,  599 => 241,  595 => 239,  589 => 237,  583 => 235,  581 => 234,  577 => 233,  569 => 230,  562 => 225,  558 => 223,  554 => 221,  552 => 220,  549 => 219,  547 => 218,  544 => 217,  542 => 216,  539 => 215,  535 => 214,  530 => 213,  526 => 212,  522 => 211,  514 => 208,  510 => 207,  506 => 206,  501 => 204,  497 => 202,  492 => 201,  483 => 194,  476 => 192,  468 => 188,  460 => 186,  456 => 184,  454 => 183,  444 => 176,  440 => 174,  434 => 172,  428 => 170,  426 => 169,  422 => 168,  414 => 165,  407 => 160,  403 => 158,  399 => 156,  397 => 155,  394 => 154,  392 => 153,  389 => 152,  387 => 151,  384 => 150,  380 => 149,  375 => 148,  371 => 147,  367 => 146,  359 => 143,  355 => 142,  351 => 141,  346 => 139,  342 => 137,  337 => 136,  323 => 125,  314 => 119,  305 => 113,  296 => 106,  289 => 102,  284 => 99,  281 => 98,  274 => 94,  269 => 91,  267 => 90,  259 => 87,  251 => 84,  243 => 81,  239 => 79,  235 => 77,  229 => 74,  223 => 72,  220 => 71,  214 => 68,  208 => 66,  205 => 65,  199 => 62,  195 => 60,  193 => 59,  190 => 58,  188 => 57,  179 => 52,  177 => 51,  169 => 45,  163 => 42,  155 => 36,  152 => 35,  146 => 32,  138 => 26,  136 => 25,  130 => 22,  122 => 16,  116 => 14,  110 => 12,  108 => 11,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil de {{ user.username }}{% endblock %}

{% block body %}
<div class=\"relative flex flex-col w-full min-w-0 mt-6 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
    <div class=\"px-9 pt-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
        <div class=\"flex flex-wrap mb-6 xl:flex-nowrap\">
            <div class=\"mb-5 mr-5\">
                <div class=\"relative inline-block shrink-0 rounded-2xl\">
                    {% if user.avatar %}
                        <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" class=\"inline-block shrink-0 rounded-2xl w-[80px] h-[80px] lg:w-[160px] lg:h-[160px] object-cover\" alt=\"Photo de profil\">
                    {% else %}
                        <img src=\"{{ asset('images/default-avatar.png') }}\" class=\"inline-block shrink-0 rounded-2xl w-[80px] h-[80px] lg:w-[160px] lg:h-[160px] object-cover\" alt=\"Photo de profil par défaut\">
                    {% endif %}
                </div>
            </div>
            <div class=\"grow\">
                <div class=\"flex flex-wrap items-start justify-between mb-4\">
                    <div class=\"flex flex-col\">
                        <div class=\"flex items-center mb-2\">
                            <a class=\"text-secondary-inverse transition-colors duration-200 ease-in-out font-semibold text-[1.5rem] mr-1 text-gray-100\" href=\"javascript:void(0)\">{{ user.username }}</a>
                        </div>
                        <div class=\"flex flex-wrap pr-2 mb-4 font-medium text-gray-100\">
                            {% if user.gender %}
                                <div class=\"flex items-center mr-5 mb-2\">
                                    <span class=\"mr-1\">
                                        <svg class=\"w-6 h-6 text-white\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 320 512\">
                                            <path d=\"M160 0a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm8 352l0-224 6.9 0c33.7 0 64.9 17.7 82.3 46.6l58.3 97c9.1 15.1 4.2 34.8-10.9 43.9s-34.8 4.2-43.9-10.9L232 256.9 232 480c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-128s0 0 0 0zM58.2 182.3c19.9-33.1 55.3-53.5 93.8-54.3l0 256s0 0 0 0l0 96c0 17.7-14.3 32-32 32s-32-14.3-32-32l0-96-17.8 0c-10.9 0-18.6-10.7-15.2-21.1L93.3 248.1 59.4 304.5c-9.1 15.1-28.8 20-43.9 10.9s-20-28.8-10.9-43.9l53.6-89.2z\" fill=\"currentColor\"/>
                                        </svg>
                                    </span>
                                    {{ user.gender }}
                                </div>
                            {% endif %}
                            {% if user.birthdate %}
                                <div class=\"flex items-center mr-5 mb-2\">
                                    <span class=\"mr-1\">
                                        <svg class=\"w-5 h-5 mr-1 text-white\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\">
                                            <path fill=\"currentColor\" d=\"M128 0c17.7 0 32 14.3 32 32l0 32 128 0 0-32c0-17.7 14.3-32 32-32s32 14.3 32 32l0 32 48 0c26.5 0 48 21.5 48 48l0 48L0 160l0-48C0 85.5 21.5 64 48 64l48 0 0-32c0-17.7 14.3-32 32-32zM0 192l448 0 0 272c0 26.5-21.5 48-48 48L48 512c-26.5 0-48-21.5-48-48L0 192zm64 80l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm128 0l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zM64 400l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16zm144-16c-8.8 0-16 7.2-16 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0zm112 16l0 32c0 8.8 7.2 16 16 16l32 0c8.8 0 16-7.2 16-16l0-32c0-8.8-7.2-16-16-16l-32 0c-8.8 0-16 7.2-16 16z\"/>
                                        </svg>
                                    </span>
                                    {{ date().diff(user.birthdate).y }} ans
                                </div>
                            {% endif %}
                            <div class=\"flex items-center mr-5 mb-2\">
                                <span class=\"mr-1\">
                                    <svg class=\"w-5 h-5 mr-1 text-white\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 448 512\">
                                        <path fill=\"currentColor\" d=\"M152 24c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L64 64C28.7 64 0 92.7 0 128l0 16 0 48L0 448c0 35.3 28.7 64 64 64l320 0c35.3 0 64-28.7 64-64l0-256 0-48 0-16c0-35.3-28.7-64-64-64l-40 0 0-40c0-13.3-10.7-24-24-24s-24 10.7-24 24l0 40L152 64l0-40zM48 192l352 0 0 256c0 8.8-7.2 16-16 16L64 464c-8.8 0-16-7.2-16-16l0-256z\"/>
                                    </svg>
                                </span>
                                {% set diff = date().diff(user.getCreatedAt) %}
                                <span class=\"member-since\">Membre depuis {{ diff.y > 0 ? diff.y ~ ' an' ~ (diff.y > 1 ? 's' : '') : diff.m > 0 ? diff.m ~ ' mois' : diff.d > 0 ? diff.d ~ ' jour' ~ (diff.d > 1 ? 's' : '') : 'moins d\\'une minute' }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                {% if user.discordPseudo or user.roll20Pseudo or user.TwitterPseudo %}
                    <div class=\"flex items-center mb-4 space-x-4\">
                        {% if user.discordPseudo %}
                            <a href=\"\" target=\"_blank\" class=\"flex items-center text-gray-100 hover:text-blue-400 space-x-2\">
                                <svg class=\"w-6 h-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\"><g fill=\"currentColor\" fill-opacity=\"0\"><circle cx=\"9\" cy=\"12\" r=\"1.5\"><animate fill=\"freeze\" attributeName=\"fill-opacity\" begin=\"1.3s\" dur=\"0.15s\" values=\"0;1\"/></circle><circle cx=\"15\" cy=\"12\" r=\"1.5\"><animate fill=\"freeze\" attributeName=\"fill-opacity\" begin=\"1.45s\" dur=\"0.15s\" values=\"0;1\"/></circle><path d=\"M5 5l7 0.2l7 -0.2l3 10l-3 3.4h-14l-3.5 -3.4l3.5 -10Z\"><animate fill=\"freeze\" attributeName=\"fill-opacity\" begin=\"1.7s\" dur=\"0.15s\" values=\"0;0.3\"/></path></g><g fill=\"none\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\"><path stroke-dasharray=\"32\" stroke-dashoffset=\"32\" d=\"M12 6h2l1 -2c0 0 2.5 0.5 4 1.5c3.53 2.35 3 9.5 3 10.5c-1.33 2.17 -5.5 3.5 -5.5 3.5l-1 -2M12 6h-2l-0.97 -2c0 0 -2.5 0.5 -4 1.5c-3.53 2.35 -3 9.5 -3 10.5c1.33 2.17 5.5 3.5 5.5 3.5l1 -2\"><animate fill=\"freeze\" attributeName=\"stroke-dashoffset\" dur=\"0.7s\" values=\"32;0\"/></path><path stroke-dasharray=\"16\" stroke-dashoffset=\"16\" d=\"M5.5 16c5 2.5 8 2.5 13 0\"><animate fill=\"freeze\" attributeName=\"stroke-dashoffset\" begin=\"0.8s\" dur=\"0.4s\" values=\"16;0\"/></path></g></svg>
                                <span>{{ user.discordPseudo }}</span>
                            </a>
                        {% endif %}
                        {% if user.roll20Pseudo %}
                            <a href=\"https://app.roll20.net/users/4643567/talep{{ user.roll20Pseudo }}\" target=\"_blank\" class=\"flex items-center text-gray-100 hover:text-pink-500 space-x-1\">
                                <svg class=\"w-6 h-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" d=\"M11.383 0q-.03.002-.06.014h-.037L4.03 3.654a.25.25 0 0 0-.129.211c0 .136.11.239.239.239l-.008.013a.2.2 0 0 0 .096-.021l7.181-1.567a.245.245 0 0 0 .21-.236V.225A.24.24 0 0 0 11.382 0zm1.22.008c-.128 0-.23.1-.236.222V2.3c0 .122.094.217.21.23l-.007-.013l7.182 1.574a.236.236 0 0 0 .203-.428L12.7.02h-.008l-.027-.012h-.06zm.57 3.404a.24.24 0 0 0-.237.242q0 .073.04.123l6.749 11.868c.04.06.108.101.19.101c.128 0 .229-.1.235-.223l2.428-9.921c0-.014.008-.02.008-.034a.24.24 0 0 0-.203-.23l-9.121-1.9l.013-.006s-.027-.001-.04-.008zm-2.38.012l-.06.008c-.014 0-.028-.001-.042.006l-9.12 1.9a.24.24 0 0 0-.204.23c0 .014 0 .02.006.034h.014l2.427 9.921a.24.24 0 0 0 .239.23c.081 0 .148-.04.19-.1l6.747-11.87c.02-.04.041-.073.041-.12a.24.24 0 0 0-.238-.24zm1.193.306a.24.24 0 0 0-.195.108L4.676 16.404h.008a.22.22 0 0 0-.041.13c0 .135.109.237.238.237H19.1a.236.236 0 0 0 .237-.238a.3.3 0 0 0-.041-.129L12.184 3.838a.24.24 0 0 0-.198-.108M1.543 9.305a.24.24 0 0 0-.23.209v.035l.298 8.062v.008c0 .136.108.236.237.236q.059 0 .109-.033l1.268-.754h.005l.008-.006l.014-.007a.24.24 0 0 0 .115-.203a.1.1 0 0 0-.008-.041L1.773 9.514a.24.24 0 0 0-.23-.21zm20.908.006a.24.24 0 0 0-.23.21l-1.588 7.297c0 .014-.006.028-.006.041c0 .089.047.156.115.203l.02.014s.007 0 .013.006l1.268.76a.234.234 0 0 0 .346-.209v-.008l.299-8.063v-.007l-.006-.006V9.52a.24.24 0 0 0-.23-.21zm-12.105.828c1.064 0 1.492.698 1.492 1.35c0 .86-.611 1.193-1.317 1.58c-.311.169-.671.393-.746.63h1.995s.054.028.054.055v.766s-.027.054-.054.054H8.799s-.053-.027-.053-.054v-.368h-.014c0-.99.638-1.465 1.323-1.838c.786-.42.847-.603.847-.834c0-.142-.054-.474-.556-.474c-.38 0-.623.279-.623.713a.054.054 0 0 1-.055.054h-.82s-.055-.027-.055-.054c0-.76.488-1.58 1.553-1.58m3.431.013c.794 0 1.641.59 1.641 2.252s-.847 2.25-1.64 2.25c-.794 0-1.65-.588-1.65-2.25s.856-2.252 1.65-2.252zm-.002.854c-.657 0-.724.97-.724 1.39c0 .326.053 1.383.724 1.383c.672 0 .727-1.057.727-1.383c0-.413-.069-1.39-.727-1.39M5.4 17.523a.236.236 0 0 0-.236.239c0 .074.04.142.094.19l6.578 5.993a.24.24 0 0 0 .15.055a.23.23 0 0 0 .149-.055l6.578-5.994c.054-.047.096-.109.096-.183l.005-.006a.24.24 0 0 0-.23-.239zm-1.662.143c-.054 0-.1.02-.134.047H3.59l-1.235.74a.25.25 0 0 0-.12.21c0 .087.046.162.12.202l5.975 3.522c.034.013.075.033.115.033c.136 0 .239-.11.239-.238a.24.24 0 0 0-.063-.155l.022-.007l-4.748-4.307H3.88a.26.26 0 0 0-.143-.047zm16.496.006a.24.24 0 0 0-.136.049h-.014l-4.746 4.306a.3.3 0 0 0-.063.162c0 .136.11.237.239.237c.04 0 .081-.013.115-.033l5.975-3.514a.25.25 0 0 0 .12-.21a.23.23 0 0 0-.12-.202l.013-.008l-1.234-.738h-.014a.25.25 0 0 0-.135-.05z\"/></svg>
                                <span>{{ user.roll20Pseudo }}</span>
                            </a>
                        {% endif %}
                        {% if user.TwitterPseudo %}
                            <a href=\"https://facebook.com/{{ user.TwitterPseudo }}\" target=\"_blank\" class=\"flex items-center text-gray-100 hover:text-blue-600 space-x-1\">
                                <svg class=\"w-6 h-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" fill-opacity=\"0\" stroke=\"currentColor\" stroke-dasharray=\"64\" stroke-dashoffset=\"64\" stroke-linecap=\"round\" stroke-linejoin=\"round\" stroke-width=\"2\" d=\"M19.89 7.34c-0.09 0.33 -0.49 1.16 -1.17 1.95c-0.45 8.68 -8.87 11.5 -14.64 8.59c-0.79 -1.05 2.85 -0.62 4.18 -2.63c-5.03 -2.57 -4.63 -9.44 -3.62 -9.16c2.37 3.19 6.19 3.48 6.81 3.19c0 -0.73 -0.31 -2.32 1.41 -3.65c0.99 -0.71 3.06 -1.34 4.93 0.69c0.32 0.21 0.78 0.3 1.47 0.15c0.41 -0.21 0.95 -0.07 0.67 0.66Z\"><animate fill=\"freeze\" attributeName=\"fill-opacity\" begin=\"0.6s\" dur=\"0.15s\" values=\"0;0.3\"/><animate fill=\"freeze\" attributeName=\"stroke-dashoffset\" dur=\"0.6s\" values=\"64;0\"/></path></svg>
                                <span>{{ user.TwitterPseudo }}</span>
                            </a>
                        {% endif %}
                    </div>
                {% endif %}
                <div class=\"flex flex-wrap mb-4\">
                    <a href=\"javascript:void(0)\" class=\"mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-[#363672] hover:text-white shadow-lg hover:shadow-2xl transition-all duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-110 hover:rotate-1 px-4 py-2 text-sm font-semibold leading-normal\">
                        {{ ownedJDRCount }} {{ ownedJDRCount == 1 ? 'Univers créé' : 'Univers créés' }}
                    </a>
                    <a href=\"javascript:void(0)\" class=\"mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-[#363672] hover:text-white shadow-lg hover:shadow-2xl transition-all duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-110 hover:rotate-1 px-4 py-2 text-sm font-semibold leading-normal\">
                        {{ joinedJDRCount }} {{ joinedJDRCount == 1 ? 'Univers rejoint' : 'Univers rejoints' }}
                    </a>
                    <a href=\"javascript:void(0)\" class=\"mr-3 mb-2 inline-flex items-center justify-center text-secondary-inverse rounded-full bg-neutral-100 hover:bg-[#363672] hover:text-white shadow-lg hover:shadow-2xl transition-all duration-500 ease-in-out transform hover:-translate-y-2 hover:scale-110 hover:rotate-1 px-4 py-2 text-sm font-semibold leading-normal\">
                        {{ favoriteJDRCount }} {{ favoriteJDRCount == 1 ? 'Univers en favori' : 'Univers en favoris' }}
                    </a>
                </div>
                {% if user.bio %}
                    <div class=\"flex flex-wrap items-start justify-between mb-4\">
                        <div class=\"w-full text-gray-100 bg-gray-800 p-4 rounded-lg\">
                            <h2 class=\"text-xl font-semibold mb-2\">Bio</h2>
                            <p>{{ user.bio }}</p>
                        </div>
                    </div>
                {% endif %}
                {% if user.competence %}
                    <div class=\"flex flex-wrap items-start justify-between mb-4\">
                        <div class=\"w-full text-gray-100 bg-gray-800 p-4 rounded-lg\">
                            <h2 class=\"text-xl font-semibold mb-2\">Compétences</h2>
                            <p>{{ user.competence }}</p>
                        </div>
                    </div>
                {% endif %}
            </div>
        </div>
        <hr class=\"w-full h-px border-neutral-200\">
        <ul nav-tabs class=\"group flex flex-wrap items-stretch text-[1rem] font-semibold list-none border-b-2 border-transparent border-solid active-assignments text-gray-100 m-3\">
            <li class=\"flex mt-2 -mb-[2px]\">
                <a class=\"tab-link p-3 mr-1 sm:mr-3 lg:mr-10 transition-all duration-300 ease-in-out border-b-2 hover:border-[#363672] hover:text-gray-100 transform hover:-translate-y-1 hover:scale-105 hover:shadow-md glassmorphism\"
                aria-controls=\"owned-jdrs\" href=\"javascript:void(0)\">
                    {{ ownedJDRCount == 1 ? 'Univers créé' : 'Univers créés' }}
                </a>
            </li>
            <li class=\"flex mt-2 -mb-[2px]\">
                <a class=\"tab-link p-3 mr-1 sm:mr-3 lg:mr-10 transition-all duration-300 ease-in-out border-b-2 hover:border-[#363672] hover:text-gray-100 transform hover:-translate-y-1 hover:scale-105 hover:shadow-md glassmorphism\"
                aria-controls=\"joined-jdrs\" href=\"javascript:void(0)\">
                    {{ joinedJDRCount == 1 ? 'Univers rejoint' : 'Univers rejoints' }}
                </a>
            </li>
            <li class=\"flex mt-2 -mb-[2px]\">
                <a class=\"tab-link p-3 mr-1 sm:mr-3 lg:mr-10 transition-all duration-300 ease-in-out border-b-2 hover:border-[#363672] hover:text-gray-100 transform hover:-translate-y-1 hover:scale-105 hover:shadow-md glassmorphism\"
                aria-controls=\"favorite-jdrs\" href=\"javascript:void(0)\">
                    {{ favoriteJDRCount == 1 ? 'Univers en favori' : 'Univers en favoris' }}
                </a>
            </li>
        </ul>
    </div>
</div>

<div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
    <div id=\"owned-jdrs\" class=\"tab-content\">
        <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                {% for groupe in ownedJDRs %}
                    <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                        style=\"will-change: transform;\">
                        <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe.id}) }}\" class=\"block\">
                            <div class=\"relative\">
                                <img src=\"{{ asset('uploads/images-jdr/' ~ groupe.picture) }}\" 
                                    alt=\"{{ groupe.title }} image\" 
                                    class=\"rounded-lg mb-4 w-full h-[20rem] object-cover {% if groupe.players|length >= groupe.maxPlayer %} blur-sm {% endif %} tokenImage\">
                                <div class=\"absolute top-2 right-2\">
                                    <span class=\"text-sm font-bold px-2 py-1 rounded 
                                        {% if groupe.status == 'nouveau' %} bg-green-600
                                        {% elseif groupe.status == 'en_cours' %} bg-blue-500
                                        {% elseif groupe.status == 'termine' %} bg-red-500
                                        {% else %} bg-gray-700
                                        {% endif %} text-white\">
                                        {% if groupe.status == 'nouveau' %}
                                            Nouveau
                                        {% elseif groupe.status == 'en_cours' %}
                                            En Cours
                                        {% elseif groupe.status == 'termine' %}
                                            Terminé
                                        {% else %}
                                            Statut inconnu
                                        {% endif %}
                                    </span>
                                </div>
                            </div>
                        </a>
                        <div class=\"mb-2\">
                            <a href=\"{{ path('app_groupe_j_d_r_show', {'id': groupe.id}) }}\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">{{ groupe.title }}</a>
                        </div>
                        <div class=\"flex justify-between items-center mt-2\">
                            <a href=\"{{ path('app_profile_show', { 'id': groupe.owner.id }) }}\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                {% if groupe.owner.avatar %}
                                    <img src=\"{{ asset('uploads/avatars/' ~ groupe.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                {% else %}
                                    <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                                {% endif %}
                                <div class=\"ml-2\">
                                    <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                    <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">{{ groupe.owner.username }}</p>
                                </div>
                            </a>
                            <div class=\"flex items-center text-right gap-1\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                </svg>
                                {% if groupe.players|length >= groupe.maxPlayer %}
                                    <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                {% else %}
                                    <p class=\"font-bold text-white pl-2\">{{ groupe.players|length }} / {{ groupe.maxPlayer }}</p>
                                {% endif %}
                            </div>
                        </div>
                    </div>
                {% else %}
                    <p class=\"text-gray-400\">Aucun nouveau jeu de rôle disponible.</p>
                {% endfor %}
            </div>
        </div>
    </div>
        <div id=\"joined-jdrs\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                        {% for joined in joinedJDRs %}
                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item tab-content\"
                                style=\"will-change: transform;\">
                                <a href=\"{{ path('app_groupe_j_d_r_show', {'id': joined.id}) }}\" class=\"block\">
                                    <div class=\"relative\">
                                        <img src=\"{{ asset('uploads/images-jdr/' ~ joined.picture) }}\" 
                                            alt=\"{{ joined.title }} image\" 
                                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover {% if joined.players|length >= joined.maxPlayer %} blur-sm {% endif %} tokenImage\">
                                        <div class=\"absolute top-2 right-2\">
                                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                                {% if joined.status == 'nouveau' %} bg-green-600
                                                {% elseif joined.status == 'en_cours' %} bg-blue-500
                                                {% elseif joined.status == 'termine' %} bg-red-500
                                                {% else %} bg-gray-700
                                                {% endif %} text-white\">
                                                {% if joined.status == 'nouveau' %}
                                                    Nouveau
                                                {% elseif joined.status == 'en_cours' %}
                                                    En Cours
                                                {% elseif joined.status == 'termine' %}
                                                    Terminé
                                                {% else %}
                                                    Statut inconnu
                                                {% endif %}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"mb-2\">
                                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': joined.id}) }}\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">{{ joined.title }}</a>
                                </div>
                                <div class=\"flex justify-between items-center mt-2\">
                                    <a href=\"{{ path('app_profile_show', { 'id': joined.owner.id }) }}\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                        {% if joined.owner.avatar %}
                                            <img src=\"{{ asset('uploads/avatars/' ~ joined.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                        {% else %}
                                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                                        {% endif %}
                                        <div class=\"ml-2\">
                                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">{{ joined.owner.username }}</p>
                                        </div>
                                    </a>
                                    <div class=\"flex items-center text-right gap-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                        </svg>
                                        {% if joined.players|length >= joined.maxPlayer %}
                                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                        {% else %}
                                            <p class=\"font-bold text-white pl-2\">{{ joined.players|length }} / {{ joined.maxPlayer }}</p>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <p class=\"text-gray-400\">Aucun univers rejoint.</p>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
        <div id=\"favorite-jdrs\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                        {% for favorite in favoriteJDRs %}
                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                                aria-controls=\"favorite-jdrs\" style=\"will-change: transform;\">
                                <a href=\"{{ path('app_groupe_j_d_r_show', {'id': favorite.id}) }}\" class=\"block\">
                                    <div class=\"relative\">
                                        <img src=\"{{ asset('uploads/images-jdr/' ~ favorite.picture) }}\" 
                                            alt=\"{{ favorite.title }} image\" 
                                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover {% if favorite.players|length >= favorite.maxPlayer %} blur-sm {% endif %} tokenImage\">
                                        <div class=\"absolute top-2 right-2\">
                                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                                {% if favorite.status == 'nouveau' %} bg-green-600
                                                {% elseif favorite.status == 'en_cours' %} bg-blue-500
                                                {% elseif favorite.status == 'termine' %} bg-red-500
                                                {% else %} bg-gray-700
                                                {% endif %} text-white\">
                                                {% if favorite.status == 'nouveau' %}
                                                    Nouveau
                                                {% elseif favorite.status == 'en_cours' %}
                                                    En Cours
                                                {% elseif favorite.status == 'termine' %}
                                                    Terminé
                                                {% else %}
                                                    Statut inconnu
                                                {% endif %}
                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"mb-2\">
                                    <a href=\"{{ path('app_groupe_j_d_r_show', {'id': favorite.id}) }}\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">{{ favorite.title }}</a>
                                </div>
                                <div class=\"flex justify-between items-center mt-2\">
                                    <a href=\"{{ path('app_profile_show', { 'id': favorite.owner.id }) }}\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                        {% if favorite.owner.avatar %}
                                            <img src=\"{{ asset('uploads/avatars/' ~ favorite.owner.avatar) }}\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                        {% else %}
                                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                                        {% endif %}
                                        <div class=\"ml-2\">
                                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">{{ favorite.owner.username }}</p>
                                        </div>
                                    </a>
                                    <div class=\"flex items-center text-right gap-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                        </svg>
                                        {% if favorite.players|length >= favorite.maxPlayer %}
                                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                        {% else %}
                                            <p class=\"font-bold text-white pl-2\">{{ favorite.players|length }} / {{ favorite.maxPlayer }}</p>
                                        {% endif %}
                                    </div>
                                </div>
                            </div>
                        {% else %}
                            <p class=\"text-gray-400\">Aucun JDR en favori.</p>
                        {% endfor %}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
        const tabLinks = document.querySelectorAll('.tab-link');
        const tabContents = document.querySelectorAll('.tab-content');

        function resetTabs() {
            tabLinks.forEach(link => {
                link.parentElement.classList.remove('active');
                link.classList.remove('glassmorphism-purple');
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
                tabLink.classList.add('glassmorphism-purple');
                targetContent.classList.remove('hidden');
                localStorage.setItem('activeTab', tabId);
            }
        }

        const activeTabId = localStorage.getItem('activeTab');
        if (activeTabId) {
            const activeTabLink = document.querySelector(`[aria-controls=\"\${activeTabId}\"]`);
            if (activeTabLink) {
                resetTabs();
                activateTab(activeTabLink);
            }
        } else {
            resetTabs();
            activateTab(tabLinks[0]);
        }

        tabLinks.forEach(link => {
            link.addEventListener('click', function (e) {
                e.preventDefault();
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
