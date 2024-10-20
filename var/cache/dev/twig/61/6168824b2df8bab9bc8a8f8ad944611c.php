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
        yield "<div class=\"relative flex flex-col lg:flex-row w-full min-w-0 mt-6 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable space-y-4 lg:space-y-0 lg:space-x-6\">
    <div class=\"lg:w-1/4 w-full shadow-lg p-6 flex-auto min-h-[250px] glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl\">
        <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center\">
            <img src=\"https://via.placeholder.com/150\" alt=\"Image principale\" class=\"w-full h-full object-cover rounded-lg\">
        </div>
        <div class=\"absolute top-44 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full border-4 border-gray-900 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50\">
            <img src=\"";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 12, $this->source); })()), "avatar", [], "any", false, false, false, 12))), "html", null, true);
        yield "\" alt=\"Photo de profil\" class=\"w-full h-full rounded-full object-cover\">
        </div>
        <div class=\"mt-20 text-center\">
            <h3 class=\"text-gray-100 font-bold text-xl\">";
        // line 15
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 15, $this->source); })()), "username", [], "any", false, false, false, 15), "html", null, true);
        yield "</h3>
            <p class=\"mt-3 text-gray-400 text-sm italic\">Chevalier de l'Ordre</p>
            <div class=\"flex justify-center space-x-2 mt-4\">
                <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-red-500 rounded-full\">Badge 1</span>
                <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-green-500 rounded-full\">Badge 2</span>
                <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full\">Badge 3</span>
            </div>
        </div>
    </div>

    <div class=\"lg:w-3/4 w-full px-8 pt-8 pb-8 flex-auto min-h-[200px] glassmorphism space-y-6\">
        <div class=\"text-gray-400 text-md\">
            ";
        // line 27
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "gender", [], "any", false, false, false, 27)) {
            // line 28
            yield "                <div class=\"flex items-center space-x-2 mb-2 text-gray-100\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 50 50\">
                        <circle cx=\"22.875\" cy=\"4.625\" r=\"4.125\" fill=\"currentColor\"/>
                        <path fill=\"currentColor\" d=\"M22 10h-3c-2.82 0-5 1.719-5 4.587V27c0 2 3 2 3 0V15h1v32c0 1.233.768 2 2 2c1.235 0 2-.767 2-2zm13 15l-4.017-10.357C30.634 12.322 28.29 10 25.615 10H23v23.783c.5.002 1 .075 1 .217v13c0 1.04.917 2 2 2c1.086 0 2-.961 2-2V34h3.869c.362 0 1.044-.654 1.044-1c0-.08.029-.931 0-1l-5.909-16.237l-.034-.167c0-.237.199-.429.447-.429c.211 0 .388.141.435.329L31.869 26c.267.601 1.365 1 2.087 1c.965 0 1.065-1.895 1.044-2\"/>
                    </svg>
                    <p>";
            // line 33
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "gender", [], "any", false, false, false, 33), "html", null, true);
            yield "</p>
                </div>
            ";
        }
        // line 36
        yield "            ";
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 36, $this->source); })()), "birthdate", [], "any", false, false, false, 36)) {
            // line 37
            yield "                <div class=\"flex items-center space-x-2 mb-2 text-gray-100\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 24 24\">
                        <path fill=\"none\" stroke=\"currentColor\" d=\"M7.5 6V1m10 5V1m4 16v4.5h-18v-3m17.863-10H3.352M.5 18.25v.25h17.9l.15-.25l.234-.491A28 28 0 0 0 21.5 5.729V3.5h-18v2.128A28 28 0 0 1 .743 17.744z\"/>
                    </svg>
                    <p>";
            // line 41
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 41, $this->source); })()), "birthdate", [], "any", false, false, false, 41)], "method", false, false, false, 41), "y", [], "any", false, false, false, 41), "html", null, true);
            yield " ans</p>
                </div>
            ";
        }
        // line 44
        yield "            ";
        $context["diff"] = CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Twig\Extension\CoreExtension']->convertDate(), "diff", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 44, $this->source); })()), "getCreatedAt", [], "any", false, false, false, 44)], "method", false, false, false, 44);
        // line 45
        yield "            <div class=\"flex items-center space-x-2 text-gray-100\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 512 512\">
                    <path fill=\"currentColor\" d=\"M138.798 35.342L28.73 114.268l95.777 29.095l111.305-87.09zm112.986 31.082l-118.047 89.96l51.07 131.102l8.534-7.455l4.23-15.708a18.338 13.102 76.863 0 1-9.08-20.45a18.338 13.102 76.863 0 1 10.997-13.727a18.338 13.102 76.863 0 1 3.62.53a18.338 13.102 76.863 0 1 3.113 1.544l7.94-29.48a9 9 0 0 1 .353-1.04l.058-.128a9 9 0 0 1 .32-.685l.09-.153a9 9 0 0 1 .37-.625a9 9 0 0 1 .534-.723l.066-.074a9 9 0 0 1 .54-.594a9 9 0 0 1 .65-.593l.004-.002a9 9 0 0 1 .46-.342a9 9 0 0 1 .266-.197a9 9 0 0 1 .502-.3a9 9 0 0 1 .27-.157a9 9 0 0 1 .44-.208a9 9 0 0 1 .38-.178a9 9 0 0 1 .437-.152a9 9 0 0 1 .41-.143a9 9 0 0 1 .404-.1a9 9 0 0 1 .47-.114a9 9 0 0 1 .51-.07a9 9 0 0 1 .37-.05h.01l.01-.003l33.624-2.873a18.338 13.102 76.863 0 1 10.326-9.777a18.338 13.102 76.863 0 1 3.622.53a18.338 13.102 76.863 0 1 8.527 7.327l13.043-1.113L251.785 66.42zM137.25 74.03a9.8 19.77 77.916 0 1 12.798 8.734a9.8 19.77 77.916 0 1-21.938 11.998a9.8 19.77 77.916 0 1-16.57-8.602a9.8 19.77 77.916 0 1 21.938-12a9.8 19.77 77.916 0 1 3.77-.13zm100.228 23.517a18.338 13.102 76.863 0 1 .002 0a18.338 13.102 76.863 0 1 3.62.53a18.338 13.102 76.863 0 1 12.112 21.94a18.338 13.102 76.863 0 1-14.617 13.196a18.338 13.102 76.863 0 1-12.114-21.94a18.338 13.102 76.863 0 1 10.998-13.726zM24.22 131.71l46.992 114.124l94.236 40.38l-45.988-125.57l-95.24-28.935zm147.886 17.43a18.338 13.102 76.863 0 1 3.622.528a18.338 13.102 76.863 0 1 12.11 21.94a18.338 13.102 76.863 0 1-14.616 13.197a18.338 13.102 76.863 0 1-12.112-21.94a18.338 13.102 76.863 0 1 10.996-13.726zm-75.123 13.016a19.454 9.134 59.254 0 1 16.955 15.078a19.454 9.134 59.254 0 1-.425 19.485A19.454 9.134 59.254 0 1 95.6 181.78a19.454 9.134 59.254 0 1 .424-19.48a19.454 9.134 59.254 0 1 .96-.144zm263.393 40.21l-112.102 9.577l113.762 79.926l113.598-16.956l-115.258-72.55zM70.82 212.022A19.454 9.134 59.254 0 1 87.777 227.1a19.454 9.134 59.254 0 1-.425 19.484a19.454 9.134 59.254 0 1-17.913-14.938a19.454 9.134 59.254 0 1 .425-19.482a19.454 9.134 59.254 0 1 .96-.14zm157.378 7.813L186.66 374.023l115.616 99.454l47.147-168.47l-121.225-85.17zm126.987 11.168a21.76 8.898 15.267 0 1 19.693 4.783a21.76 8.898 15.267 0 1 7.607 14.244a21.76 8.898 15.267 0 1-28.886-3.182a21.76 8.898 15.267 0 1-7.61-14.244a21.76 8.898 15.267 0 1 9.195-1.6zM487.78 291.3L366.9 309.343l-46.823 167.316l116.297-31.77zm-181.808 10.8a25.834 15.573 84.277 0 1 4.238.943a25.834 15.573 84.277 0 1 12.873 31.72a25.834 15.573 84.277 0 1-18.105 17.893a25.834 15.573 84.277 0 1-12.874-31.72a25.834 15.573 84.277 0 1 13.868-18.836m154.086 11.636a13.237 21.96 28.62 0 1 7.673 4.13a13.237 21.96 28.62 0 1-6.176 28.435a13.237 21.96 28.62 0 1-21.287 3.878a13.237 21.96 28.62 0 1 6.175-28.434a13.237 21.96 28.62 0 1 13.616-8.008zM391.362 324.4a13.237 21.96 28.62 0 1 7.672 4.13a13.237 21.96 28.62 0 1-6.176 28.435a13.237 21.96 28.62 0 1-21.287 3.877a13.237 21.96 28.62 0 1 6.177-28.434a13.237 21.96 28.62 0 1 13.615-8.008zm-173.996 13.305a25.834 15.573 84.277 0 1 4.24.945a25.834 15.573 84.277 0 1 12.872 31.72a25.834 15.573 84.277 0 1-18.106 17.894a25.834 15.573 84.277 0 1-12.873-31.72a25.834 15.573 84.277 0 1 13.866-18.84zm212.278 60.87a13.237 21.96 28.62 0 1 7.67 4.13a13.237 21.96 28.62 0 1-6.174 28.434a13.237 21.96 28.62 0 1-21.287 3.874a13.237 21.96 28.62 0 1 6.176-28.434a13.237 21.96 28.62 0 1 13.616-8.007z\"/>
                </svg>
                <p>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 49, $this->source); })()), "y", [], "any", false, false, false, 49) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 49, $this->source); })()), "y", [], "any", false, false, false, 49) . " an") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 49, $this->source); })()), "y", [], "any", false, false, false, 49) > 1)) ? ("s") : ("")))) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 49, $this->source); })()), "m", [], "any", false, false, false, 49) > 0)) ? ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 49, $this->source); })()), "m", [], "any", false, false, false, 49) . " mois")) : ((((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 49, $this->source); })()), "d", [], "any", false, false, false, 49) > 0)) ? (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 49, $this->source); })()), "d", [], "any", false, false, false, 49) . " jour") . (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["diff"]) || array_key_exists("diff", $context) ? $context["diff"] : (function () { throw new RuntimeError('Variable "diff" does not exist.', 49, $this->source); })()), "d", [], "any", false, false, false, 49) > 1)) ? ("s") : ("")))) : ("moins d'une minute")))))), "html", null, true);
        yield " sur DiceFinder</p>
            </div>
        </div>
        ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 52, $this->source); })()), "bio", [], "any", false, false, false, 52)) {
            // line 53
            yield "            <div class=\"w-full text-gray-100 glassmorphism p-6 rounded-lg mb-8\">
                <h2 class=\"text-2xl font-semibold mb-4\">Biographie</h2>
                <p>";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 55, $this->source); })()), "bio", [], "any", false, false, false, 55), "html", null, true);
            yield "</p>
            </div>
        ";
        }
        // line 57
        yield " 
        <div class=\"flex justify-center space-x-4 mt-4\">
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism\" aria-controls=\"owned-jdrs\">
                ";
        // line 60
        yield ((((isset($context["ownedJDRCount"]) || array_key_exists("ownedJDRCount", $context) ? $context["ownedJDRCount"] : (function () { throw new RuntimeError('Variable "ownedJDRCount" does not exist.', 60, $this->source); })()) == 1)) ? ("Univers créé") : ("Univers créés"));
        yield "
            </a>
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism\" aria-controls=\"joined-jdrs\">
                ";
        // line 63
        yield ((((isset($context["joinedJDRCount"]) || array_key_exists("joinedJDRCount", $context) ? $context["joinedJDRCount"] : (function () { throw new RuntimeError('Variable "joinedJDRCount" does not exist.', 63, $this->source); })()) == 1)) ? ("Univers rejoint") : ("Univers rejoints"));
        yield "
            </a>
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism\" aria-controls=\"favorite-jdrs\">
                ";
        // line 66
        yield ((((isset($context["favoriteJDRCount"]) || array_key_exists("favoriteJDRCount", $context) ? $context["favoriteJDRCount"] : (function () { throw new RuntimeError('Variable "favoriteJDRCount" does not exist.', 66, $this->source); })()) == 1)) ? ("Univers en favori") : ("Univers en favoris"));
        yield "
            </a>
        </div>
    </div>
</div>

<div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
    <div id=\"owned-jdrs\" class=\"tab-content\">
        <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
            <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                ";
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["ownedJDRs"]) || array_key_exists("ownedJDRs", $context) ? $context["ownedJDRs"] : (function () { throw new RuntimeError('Variable "ownedJDRs" does not exist.', 76, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["groupe"]) {
            // line 77
            yield "                    <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                        style=\"will-change: transform;\">
                        <a href=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 79)]), "html", null, true);
            yield "\" class=\"block\">
                            <div class=\"relative\">
                                <img src=\"";
            // line 81
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "picture", [], "any", false, false, false, 81))), "html", null, true);
            yield "\" 
                                    alt=\"";
            // line 82
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 82), "html", null, true);
            yield " image\" 
                                    class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 83
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 83)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 83))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                <div class=\"absolute top-2 right-2\">
                                    <span class=\"text-sm font-bold px-2 py-1 rounded 
                                        ";
            // line 86
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "status", [], "any", false, false, false, 86) == "nouveau")) {
                yield " bg-green-600
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 87
$context["groupe"], "status", [], "any", false, false, false, 87) == "en_cours")) {
                yield " bg-blue-500
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 88
$context["groupe"], "status", [], "any", false, false, false, 88) == "termine")) {
                yield " bg-red-500
                                        ";
            } else {
                // line 89
                yield " bg-gray-700
                                        ";
            }
            // line 90
            yield " text-white\">
                                        ";
            // line 91
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "status", [], "any", false, false, false, 91) == "nouveau")) {
                // line 92
                yield "                                            Nouveau
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 93
$context["groupe"], "status", [], "any", false, false, false, 93) == "en_cours")) {
                // line 94
                yield "                                            En Cours
                                        ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 95
$context["groupe"], "status", [], "any", false, false, false, 95) == "termine")) {
                // line 96
                yield "                                            Terminé
                                        ";
            } else {
                // line 98
                yield "                                            Statut inconnu
                                        ";
            }
            // line 100
            yield "                                    </span>
                                </div>
                            </div>
                        </a>
                        <div class=\"mb-2\">
                            <a href=\"";
            // line 105
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "id", [], "any", false, false, false, 105)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "title", [], "any", false, false, false, 105), "html", null, true);
            yield "</a>
                        </div>
                        <div class=\"flex justify-between items-center mt-2\">
                            <a href=\"";
            // line 108
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 108), "id", [], "any", false, false, false, 108)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                ";
            // line 109
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 109), "avatar", [], "any", false, false, false, 109)) {
                // line 110
                yield "                                    <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 110), "avatar", [], "any", false, false, false, 110))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                ";
            } else {
                // line 112
                yield "                                    <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                ";
            }
            // line 114
            yield "                                <div class=\"ml-2\">
                                    <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                    <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 116
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "owner", [], "any", false, false, false, 116), "username", [], "any", false, false, false, 116), "html", null, true);
            yield "</p>
                                </div>
                            </a>
                            <div class=\"flex items-center text-right gap-1\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                    <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                </svg>
                                ";
            // line 123
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 123)) >= CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 123))) {
                // line 124
                yield "                                    <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                ";
            } else {
                // line 126
                yield "                                    <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "players", [], "any", false, false, false, 126)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["groupe"], "maxPlayer", [], "any", false, false, false, 126), "html", null, true);
                yield "</p>
                                ";
            }
            // line 128
            yield "                            </div>
                        </div>
                    </div>
                ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 132
            yield "                    <p class=\"text-gray-400\">Aucun nouveau jeu de rôle disponible.</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['groupe'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        yield "            </div>
        </div>
    </div>
        <div id=\"joined-jdrs\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                        ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["joinedJDRs"]) || array_key_exists("joinedJDRs", $context) ? $context["joinedJDRs"] : (function () { throw new RuntimeError('Variable "joinedJDRs" does not exist.', 141, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["joined"]) {
            // line 142
            yield "                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item tab-content\"
                                style=\"will-change: transform;\">
                                <a href=\"";
            // line 144
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "id", [], "any", false, false, false, 144)]), "html", null, true);
            yield "\" class=\"block\">
                                    <div class=\"relative\">
                                        <img src=\"";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "picture", [], "any", false, false, false, 146))), "html", null, true);
            yield "\" 
                                            alt=\"";
            // line 147
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "title", [], "any", false, false, false, 147), "html", null, true);
            yield " image\" 
                                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 148
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 148)) >= CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 148))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                        <div class=\"absolute top-2 right-2\">
                                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                                ";
            // line 151
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "status", [], "any", false, false, false, 151) == "nouveau")) {
                yield " bg-green-600
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 152
$context["joined"], "status", [], "any", false, false, false, 152) == "en_cours")) {
                yield " bg-blue-500
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 153
$context["joined"], "status", [], "any", false, false, false, 153) == "termine")) {
                yield " bg-red-500
                                                ";
            } else {
                // line 154
                yield " bg-gray-700
                                                ";
            }
            // line 155
            yield " text-white\">
                                                ";
            // line 156
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "status", [], "any", false, false, false, 156) == "nouveau")) {
                // line 157
                yield "                                                    Nouveau
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 158
$context["joined"], "status", [], "any", false, false, false, 158) == "en_cours")) {
                // line 159
                yield "                                                    En Cours
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 160
$context["joined"], "status", [], "any", false, false, false, 160) == "termine")) {
                // line 161
                yield "                                                    Terminé
                                                ";
            } else {
                // line 163
                yield "                                                    Statut inconnu
                                                ";
            }
            // line 165
            yield "                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"mb-2\">
                                    <a href=\"";
            // line 170
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "id", [], "any", false, false, false, 170)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "title", [], "any", false, false, false, 170), "html", null, true);
            yield "</a>
                                </div>
                                <div class=\"flex justify-between items-center mt-2\">
                                    <a href=\"";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 173), "id", [], "any", false, false, false, 173)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                        ";
            // line 174
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 174), "avatar", [], "any", false, false, false, 174)) {
                // line 175
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 175), "avatar", [], "any", false, false, false, 175))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                        ";
            } else {
                // line 177
                yield "                                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                        ";
            }
            // line 179
            yield "                                        <div class=\"ml-2\">
                                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "owner", [], "any", false, false, false, 181), "username", [], "any", false, false, false, 181), "html", null, true);
            yield "</p>
                                        </div>
                                    </a>
                                    <div class=\"flex items-center text-right gap-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                        </svg>
                                        ";
            // line 188
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 188)) >= CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 188))) {
                // line 189
                yield "                                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                        ";
            } else {
                // line 191
                yield "                                            <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "players", [], "any", false, false, false, 191)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["joined"], "maxPlayer", [], "any", false, false, false, 191), "html", null, true);
                yield "</p>
                                        ";
            }
            // line 193
            yield "                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 197
            yield "                            <p class=\"text-gray-400\">Aucun univers rejoint.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['joined'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 199
        yield "                    </div>
                </div>
            </div>
        </div>
        <div id=\"favorite-jdrs\" class=\"tab-content hidden\">
            <div class=\"relative flex flex-col w-full min-w-0 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable\">
                <div class=\"px-9 pt-9 pb-9 flex-auto min-h-[70px] pb-0 glassmorphism\">
                    <div class=\"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4\">
                        ";
        // line 207
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["favoriteJDRs"]) || array_key_exists("favoriteJDRs", $context) ? $context["favoriteJDRs"] : (function () { throw new RuntimeError('Variable "favoriteJDRs" does not exist.', 207, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["favorite"]) {
            // line 208
            yield "                            <div class=\"bg-white bg-opacity-10 border border-gray-500 rounded-lg shadow-lg p-6 pb-5 text-white relative transition-all duration-300 hover:translate-y-[-10px] hover:shadow-2xl hover:bg-opacity-20 card-item\"
                                aria-controls=\"favorite-jdrs\" style=\"will-change: transform;\">
                                <a href=\"";
            // line 210
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 210)]), "html", null, true);
            yield "\" class=\"block\">
                                    <div class=\"relative\">
                                        <img src=\"";
            // line 212
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "picture", [], "any", false, false, false, 212))), "html", null, true);
            yield "\" 
                                            alt=\"";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 213), "html", null, true);
            yield " image\" 
                                            class=\"rounded-lg mb-4 w-full h-[20rem] object-cover ";
            // line 214
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 214)) >= CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 214))) {
                yield " blur-sm ";
            }
            yield " tokenImage\">
                                        <div class=\"absolute top-2 right-2\">
                                            <span class=\"text-sm font-bold px-2 py-1 rounded 
                                                ";
            // line 217
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "status", [], "any", false, false, false, 217) == "nouveau")) {
                yield " bg-green-600
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 218
$context["favorite"], "status", [], "any", false, false, false, 218) == "en_cours")) {
                yield " bg-blue-500
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 219
$context["favorite"], "status", [], "any", false, false, false, 219) == "termine")) {
                yield " bg-red-500
                                                ";
            } else {
                // line 220
                yield " bg-gray-700
                                                ";
            }
            // line 221
            yield " text-white\">
                                                ";
            // line 222
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "status", [], "any", false, false, false, 222) == "nouveau")) {
                // line 223
                yield "                                                    Nouveau
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 224
$context["favorite"], "status", [], "any", false, false, false, 224) == "en_cours")) {
                // line 225
                yield "                                                    En Cours
                                                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 226
$context["favorite"], "status", [], "any", false, false, false, 226) == "termine")) {
                // line 227
                yield "                                                    Terminé
                                                ";
            } else {
                // line 229
                yield "                                                    Statut inconnu
                                                ";
            }
            // line 231
            yield "                                            </span>
                                        </div>
                                    </div>
                                </a>
                                <div class=\"mb-2\">
                                    <a href=\"";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "id", [], "any", false, false, false, 236)]), "html", null, true);
            yield "\" class=\"font-semibold hover:underline truncate max-w-[100%] block\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "title", [], "any", false, false, false, 236), "html", null, true);
            yield "</a>
                                </div>
                                <div class=\"flex justify-between items-center mt-2\">
                                    <a href=\"";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 239), "id", [], "any", false, false, false, 239)]), "html", null, true);
            yield "\" class=\"flex items-center group transition-all duration-300 hover:bg-opacity-20 p-1 rounded-lg\">
                                        ";
            // line 240
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 240), "avatar", [], "any", false, false, false, 240)) {
                // line 241
                yield "                                            <img src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 241), "avatar", [], "any", false, false, false, 241))), "html", null, true);
                yield "\" alt=\"MJ photo\" class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\">
                                        ";
            } else {
                // line 243
                yield "                                            <img class=\"rounded-full h-8 w-8 object-cover border-2 border-gray-500 group-hover:border-blue-500 transition-all duration-300\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                                        ";
            }
            // line 245
            yield "                                        <div class=\"ml-2\">
                                            <p class=\"text-xs text-gray-400 group-hover:text-white transition-colors duration-300\">MJ</p>
                                            <p class=\"text-xs text-white group-hover:underline transition-colors duration-300\">";
            // line 247
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "owner", [], "any", false, false, false, 247), "username", [], "any", false, false, false, 247), "html", null, true);
            yield "</p>
                                        </div>
                                    </a>
                                    <div class=\"flex items-center text-right gap-1\">
                                        <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"w-5 h-5 text-gray-400\">
                                            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z\" />
                                        </svg>
                                        ";
            // line 254
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 254)) >= CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 254))) {
                // line 255
                yield "                                            <p class=\"text-lg font-bold text-red-500\">Complet</p>
                                        ";
            } else {
                // line 257
                yield "                                            <p class=\"font-bold text-white pl-2\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "players", [], "any", false, false, false, 257)), "html", null, true);
                yield " / ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["favorite"], "maxPlayer", [], "any", false, false, false, 257), "html", null, true);
                yield "</p>
                                        ";
            }
            // line 259
            yield "                                    </div>
                                </div>
                            </div>
                        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 263
            yield "                            <p class=\"text-gray-400\">Aucun JDR en favori.</p>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['favorite'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 265
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
        return array (  674 => 265,  667 => 263,  659 => 259,  651 => 257,  647 => 255,  645 => 254,  635 => 247,  631 => 245,  625 => 243,  619 => 241,  617 => 240,  613 => 239,  605 => 236,  598 => 231,  594 => 229,  590 => 227,  588 => 226,  585 => 225,  583 => 224,  580 => 223,  578 => 222,  575 => 221,  571 => 220,  566 => 219,  562 => 218,  558 => 217,  550 => 214,  546 => 213,  542 => 212,  537 => 210,  533 => 208,  528 => 207,  518 => 199,  511 => 197,  503 => 193,  495 => 191,  491 => 189,  489 => 188,  479 => 181,  475 => 179,  469 => 177,  463 => 175,  461 => 174,  457 => 173,  449 => 170,  442 => 165,  438 => 163,  434 => 161,  432 => 160,  429 => 159,  427 => 158,  424 => 157,  422 => 156,  419 => 155,  415 => 154,  410 => 153,  406 => 152,  402 => 151,  394 => 148,  390 => 147,  386 => 146,  381 => 144,  377 => 142,  372 => 141,  363 => 134,  356 => 132,  348 => 128,  340 => 126,  336 => 124,  334 => 123,  324 => 116,  320 => 114,  314 => 112,  308 => 110,  306 => 109,  302 => 108,  294 => 105,  287 => 100,  283 => 98,  279 => 96,  277 => 95,  274 => 94,  272 => 93,  269 => 92,  267 => 91,  264 => 90,  260 => 89,  255 => 88,  251 => 87,  247 => 86,  239 => 83,  235 => 82,  231 => 81,  226 => 79,  222 => 77,  217 => 76,  204 => 66,  198 => 63,  192 => 60,  187 => 57,  181 => 55,  177 => 53,  175 => 52,  169 => 49,  163 => 45,  160 => 44,  154 => 41,  148 => 37,  145 => 36,  139 => 33,  132 => 28,  130 => 27,  115 => 15,  109 => 12,  101 => 6,  88 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Profil de {{ user.username }}{% endblock %}

{% block body %}
<div class=\"relative flex flex-col lg:flex-row w-full min-w-0 mt-6 mb-6 break-words bg-clip-border rounded-2xl border-stone-200 bg-light/30 draggable space-y-4 lg:space-y-0 lg:space-x-6\">
    <div class=\"lg:w-1/4 w-full shadow-lg p-6 flex-auto min-h-[250px] glassmorphism relative transition-transform duration-300 hover:-translate-y-2 hover:shadow-2xl\">
        <div class=\"w-full h-56 glassmorphism rounded-t-lg flex items-center justify-center\">
            <img src=\"https://via.placeholder.com/150\" alt=\"Image principale\" class=\"w-full h-full object-cover rounded-lg\">
        </div>
        <div class=\"absolute top-44 left-1/2 transform -translate-x-1/2 w-32 h-32 rounded-full border-4 border-gray-900 transition-transform duration-300 hover:scale-110 hover:border-purple-500 hover:shadow-lg hover:shadow-purple-500/50\">
            <img src=\"{{ asset('uploads/avatars/' ~ user.avatar) }}\" alt=\"Photo de profil\" class=\"w-full h-full rounded-full object-cover\">
        </div>
        <div class=\"mt-20 text-center\">
            <h3 class=\"text-gray-100 font-bold text-xl\">{{ user.username }}</h3>
            <p class=\"mt-3 text-gray-400 text-sm italic\">Chevalier de l'Ordre</p>
            <div class=\"flex justify-center space-x-2 mt-4\">
                <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-red-500 rounded-full\">Badge 1</span>
                <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-green-500 rounded-full\">Badge 2</span>
                <span class=\"inline-block px-3 py-1 text-xs font-semibold text-white bg-blue-500 rounded-full\">Badge 3</span>
            </div>
        </div>
    </div>

    <div class=\"lg:w-3/4 w-full px-8 pt-8 pb-8 flex-auto min-h-[200px] glassmorphism space-y-6\">
        <div class=\"text-gray-400 text-md\">
            {% if user.gender %}
                <div class=\"flex items-center space-x-2 mb-2 text-gray-100\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 50 50\">
                        <circle cx=\"22.875\" cy=\"4.625\" r=\"4.125\" fill=\"currentColor\"/>
                        <path fill=\"currentColor\" d=\"M22 10h-3c-2.82 0-5 1.719-5 4.587V27c0 2 3 2 3 0V15h1v32c0 1.233.768 2 2 2c1.235 0 2-.767 2-2zm13 15l-4.017-10.357C30.634 12.322 28.29 10 25.615 10H23v23.783c.5.002 1 .075 1 .217v13c0 1.04.917 2 2 2c1.086 0 2-.961 2-2V34h3.869c.362 0 1.044-.654 1.044-1c0-.08.029-.931 0-1l-5.909-16.237l-.034-.167c0-.237.199-.429.447-.429c.211 0 .388.141.435.329L31.869 26c.267.601 1.365 1 2.087 1c.965 0 1.065-1.895 1.044-2\"/>
                    </svg>
                    <p>{{ user.gender }}</p>
                </div>
            {% endif %}
            {% if user.birthdate %}
                <div class=\"flex items-center space-x-2 mb-2 text-gray-100\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 24 24\">
                        <path fill=\"none\" stroke=\"currentColor\" d=\"M7.5 6V1m10 5V1m4 16v4.5h-18v-3m17.863-10H3.352M.5 18.25v.25h17.9l.15-.25l.234-.491A28 28 0 0 0 21.5 5.729V3.5h-18v2.128A28 28 0 0 1 .743 17.744z\"/>
                    </svg>
                    <p>{{ date().diff(user.birthdate).y }} ans</p>
                </div>
            {% endif %}
            {% set diff = date().diff(user.getCreatedAt) %}
            <div class=\"flex items-center space-x-2 text-gray-100\">
                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"1.5rem\" height=\"1.5rem\" viewBox=\"0 0 512 512\">
                    <path fill=\"currentColor\" d=\"M138.798 35.342L28.73 114.268l95.777 29.095l111.305-87.09zm112.986 31.082l-118.047 89.96l51.07 131.102l8.534-7.455l4.23-15.708a18.338 13.102 76.863 0 1-9.08-20.45a18.338 13.102 76.863 0 1 10.997-13.727a18.338 13.102 76.863 0 1 3.62.53a18.338 13.102 76.863 0 1 3.113 1.544l7.94-29.48a9 9 0 0 1 .353-1.04l.058-.128a9 9 0 0 1 .32-.685l.09-.153a9 9 0 0 1 .37-.625a9 9 0 0 1 .534-.723l.066-.074a9 9 0 0 1 .54-.594a9 9 0 0 1 .65-.593l.004-.002a9 9 0 0 1 .46-.342a9 9 0 0 1 .266-.197a9 9 0 0 1 .502-.3a9 9 0 0 1 .27-.157a9 9 0 0 1 .44-.208a9 9 0 0 1 .38-.178a9 9 0 0 1 .437-.152a9 9 0 0 1 .41-.143a9 9 0 0 1 .404-.1a9 9 0 0 1 .47-.114a9 9 0 0 1 .51-.07a9 9 0 0 1 .37-.05h.01l.01-.003l33.624-2.873a18.338 13.102 76.863 0 1 10.326-9.777a18.338 13.102 76.863 0 1 3.622.53a18.338 13.102 76.863 0 1 8.527 7.327l13.043-1.113L251.785 66.42zM137.25 74.03a9.8 19.77 77.916 0 1 12.798 8.734a9.8 19.77 77.916 0 1-21.938 11.998a9.8 19.77 77.916 0 1-16.57-8.602a9.8 19.77 77.916 0 1 21.938-12a9.8 19.77 77.916 0 1 3.77-.13zm100.228 23.517a18.338 13.102 76.863 0 1 .002 0a18.338 13.102 76.863 0 1 3.62.53a18.338 13.102 76.863 0 1 12.112 21.94a18.338 13.102 76.863 0 1-14.617 13.196a18.338 13.102 76.863 0 1-12.114-21.94a18.338 13.102 76.863 0 1 10.998-13.726zM24.22 131.71l46.992 114.124l94.236 40.38l-45.988-125.57l-95.24-28.935zm147.886 17.43a18.338 13.102 76.863 0 1 3.622.528a18.338 13.102 76.863 0 1 12.11 21.94a18.338 13.102 76.863 0 1-14.616 13.197a18.338 13.102 76.863 0 1-12.112-21.94a18.338 13.102 76.863 0 1 10.996-13.726zm-75.123 13.016a19.454 9.134 59.254 0 1 16.955 15.078a19.454 9.134 59.254 0 1-.425 19.485A19.454 9.134 59.254 0 1 95.6 181.78a19.454 9.134 59.254 0 1 .424-19.48a19.454 9.134 59.254 0 1 .96-.144zm263.393 40.21l-112.102 9.577l113.762 79.926l113.598-16.956l-115.258-72.55zM70.82 212.022A19.454 9.134 59.254 0 1 87.777 227.1a19.454 9.134 59.254 0 1-.425 19.484a19.454 9.134 59.254 0 1-17.913-14.938a19.454 9.134 59.254 0 1 .425-19.482a19.454 9.134 59.254 0 1 .96-.14zm157.378 7.813L186.66 374.023l115.616 99.454l47.147-168.47l-121.225-85.17zm126.987 11.168a21.76 8.898 15.267 0 1 19.693 4.783a21.76 8.898 15.267 0 1 7.607 14.244a21.76 8.898 15.267 0 1-28.886-3.182a21.76 8.898 15.267 0 1-7.61-14.244a21.76 8.898 15.267 0 1 9.195-1.6zM487.78 291.3L366.9 309.343l-46.823 167.316l116.297-31.77zm-181.808 10.8a25.834 15.573 84.277 0 1 4.238.943a25.834 15.573 84.277 0 1 12.873 31.72a25.834 15.573 84.277 0 1-18.105 17.893a25.834 15.573 84.277 0 1-12.874-31.72a25.834 15.573 84.277 0 1 13.868-18.836m154.086 11.636a13.237 21.96 28.62 0 1 7.673 4.13a13.237 21.96 28.62 0 1-6.176 28.435a13.237 21.96 28.62 0 1-21.287 3.878a13.237 21.96 28.62 0 1 6.175-28.434a13.237 21.96 28.62 0 1 13.616-8.008zM391.362 324.4a13.237 21.96 28.62 0 1 7.672 4.13a13.237 21.96 28.62 0 1-6.176 28.435a13.237 21.96 28.62 0 1-21.287 3.877a13.237 21.96 28.62 0 1 6.177-28.434a13.237 21.96 28.62 0 1 13.615-8.008zm-173.996 13.305a25.834 15.573 84.277 0 1 4.24.945a25.834 15.573 84.277 0 1 12.872 31.72a25.834 15.573 84.277 0 1-18.106 17.894a25.834 15.573 84.277 0 1-12.873-31.72a25.834 15.573 84.277 0 1 13.866-18.84zm212.278 60.87a13.237 21.96 28.62 0 1 7.67 4.13a13.237 21.96 28.62 0 1-6.174 28.434a13.237 21.96 28.62 0 1-21.287 3.874a13.237 21.96 28.62 0 1 6.176-28.434a13.237 21.96 28.62 0 1 13.616-8.007z\"/>
                </svg>
                <p>{{ diff.y > 0 ? diff.y ~ ' an' ~ (diff.y > 1 ? 's' : '') : diff.m > 0 ? diff.m ~ ' mois' : diff.d > 0 ? diff.d ~ ' jour' ~ (diff.d > 1 ? 's' : '') : 'moins d\\'une minute' }} sur DiceFinder</p>
            </div>
        </div>
        {% if user.bio %}
            <div class=\"w-full text-gray-100 glassmorphism p-6 rounded-lg mb-8\">
                <h2 class=\"text-2xl font-semibold mb-4\">Biographie</h2>
                <p>{{ user.bio }}</p>
            </div>
        {% endif %} 
        <div class=\"flex justify-center space-x-4 mt-4\">
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism\" aria-controls=\"owned-jdrs\">
                {{ ownedJDRCount == 1 ? 'Univers créé' : 'Univers créés' }}
            </a>
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism\" aria-controls=\"joined-jdrs\">
                {{ joinedJDRCount == 1 ? 'Univers rejoint' : 'Univers rejoints' }}
            </a>
            <a href=\"javascript:void(0)\" class=\"tab-link p-3 transition-all duration-300 ease-in-out border-b-2 hover:border-purple-500 text-gray-100 transform hover:-translate-y-1 hover:scale-105 glassmorphism\" aria-controls=\"favorite-jdrs\">
                {{ favoriteJDRCount == 1 ? 'Univers en favori' : 'Univers en favoris' }}
            </a>
        </div>
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
