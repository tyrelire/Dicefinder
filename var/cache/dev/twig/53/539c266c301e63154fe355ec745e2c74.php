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

/* base.html.twig */
class __TwigTemplate_5f185751839422ba25658b08f3c113d5 extends Template
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
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
            'importmap' => [$this, 'block_importmap'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        yield "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
        <script src=\"https://cdn.tailwindcss.com\"></script>
        <link rel=\"stylesheet\" href=\"";
        // line 10
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/app.css"), "html", null, true);
        yield "\">

        ";
        // line 12
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 14
        yield "
        ";
        // line 15
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 18
        yield "    </head>
<body class=\"bg-slate-900\">
  <div>
    <header class=\"absolute inset-x-0 top-0 z-50\">
      <nav class=\"flex items-center justify-between p-6 lg:px-8\" aria-label=\"Global\">
        <div class=\"flex lg:flex-1\">
          <a href=\"";
        // line 24
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"font-bold text-white -m-1.5 p-1.5\">
            DiceFinder
          </a>
        </div>
        <div class=\"flex lg:hidden\">
          <button id=\"mobile-menu-toggle\" type=\"button\" class=\"-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700\">
            <span class=\"sr-only\">Open main menu</span>
            <svg class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" aria-hidden=\"true\">
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5\" />
            </svg>
          </button>
        </div>
        <div class=\"hidden lg:flex lg:gap-x-12\">
          <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-sm font-semibold leading-6 text-white\">Accueil</a>
          <a href=\"";
        // line 38
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-sm font-semibold leading-6 text-white\">Les Univers</a>
          <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_jdr");
        yield "\" class=\"text-sm font-semibold leading-6 text-white\">Mes Parties</a>
          <a href=\"#\" class=\"text-sm font-semibold leading-6 text-white\">Les Joueurs</a>
          <a href=\"#\" class=\"text-sm font-semibold leading-6 text-white\">Nous Contacter</a>
        </div>
        <div class=\"hidden lg:flex lg:flex-1 lg:justify-end\">
          <div class=\"relative flex items-center\">
            <div class=\"relative w-max mx-auto mr-10\">
              ";
        // line 46
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 46, $this->source); })()), "user", [], "any", false, false, false, 46)) {
            // line 47
            yield "                <button type=\"button\" id=\"dropdownToggle\" class=\"w-12 h-12 flex items-center justify-center text-white border-none outline-none\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18px\" class=\"cursor-pointer fill-[#fff]\"
                        viewBox=\"0 0 371.263 371.263\">
                        <path
                            d=\"M305.402 234.794v-70.54c0-52.396-33.533-98.085-79.702-115.151.539-2.695.838-5.449.838-8.204C226.539 18.324 208.215 0 185.64 0s-40.899 18.324-40.899 40.899c0 2.695.299 5.389.778 7.964-15.868 5.629-30.539 14.551-43.054 26.647-23.593 22.755-36.587 53.354-36.587 86.169v73.115c0 2.575-2.096 4.731-4.731 4.731-22.096 0-40.959 16.647-42.995 37.845-1.138 11.797 2.755 23.533 10.719 32.276 7.904 8.683 19.222 13.713 31.018 13.713h72.217c2.994 26.887 25.869 47.905 53.534 47.905s50.54-21.018 53.534-47.905h72.217c11.797 0 23.114-5.03 31.018-13.713 7.904-8.743 11.797-20.479 10.719-32.276-2.036-21.198-20.958-37.845-42.995-37.845a4.704 4.704 0 0 1-4.731-4.731zM185.64 23.952c9.341 0 16.946 7.605 16.946 16.946 0 .778-.12 1.497-.24 2.275-4.072-.599-8.204-1.018-12.336-1.138-7.126-.24-14.132.24-21.078 1.198-.12-.778-.24-1.497-.24-2.275.002-9.401 7.607-17.006 16.948-17.006zm0 323.358c-14.431 0-26.527-10.3-29.342-23.952h58.683c-2.813 13.653-14.909 23.952-29.341 23.952zm143.655-67.665c.479 5.15-1.138 10.12-4.551 13.892-3.533 3.773-8.204 5.868-13.353 5.868H59.89c-5.15 0-9.82-2.096-13.294-5.868-3.473-3.772-5.09-8.743-4.611-13.892.838-9.042 9.282-16.168 19.162-16.168 15.809 0 28.683-12.874 28.683-28.683v-73.115c0-26.228 10.419-50.719 29.282-68.923 18.024-17.425 41.498-26.887 66.528-26.887 1.198 0 2.335 0 3.533.06 50.839 1.796 92.277 45.929 92.277 98.325v70.54c0 15.809 12.874 28.683 28.683 28.683 9.88 0 18.264 7.126 19.162 16.168z\"
                            data-original=\"#000000\"></path>
                    </svg>
                    ";
            // line 54
            $context["invitations"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "invitations", [], "any", false, false, false, 54), function ($__invitation__) use ($context, $macros) { $context["invitation"] = $__invitation__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54) == "pending"); });
            // line 55
            yield "                    ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 55, $this->source); })())) > 0)) {
                // line 56
                yield "                        <div class=\"absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 56, $this->source); })())), "html", null, true);
                yield "</div>
                    ";
            }
            // line 58
            yield "                </button>
                <div id=\"dropdownMenu\" class='hidden absolute right-0 shadow-lg bg-white py-4 z-[1000] min-w-full rounded-lg w-[410px] max-h-[500px] overflow-auto mt-2'>
                    <ul class=\"divide-y\" id=\"notification-list\">
                        ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable((isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 61, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["invitation"]) {
                // line 62
                yield "                        <li class='p-4 flex items-center hover:bg-gray-50 cursor-pointer'
                            data-invitation-id=\"";
                // line 63
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "id", [], "any", false, false, false, 63), "html", null, true);
                yield "\"
                            data-owner-username=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "groupeJDR", [], "any", false, false, false, 64), "owner", [], "any", false, false, false, 64), "username", [], "any", false, false, false, 64), "html", null, true);
                yield "\"
                            data-owner-avatar=\"";
                // line 65
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "groupeJDR", [], "any", false, false, false, 65), "owner", [], "any", false, false, false, 65), "avatar", [], "any", false, false, false, 65), "html", null, true);
                yield "\"
                            data-jdr-title=\"";
                // line 66
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "groupeJDR", [], "any", false, false, false, 66), "title", [], "any", false, false, false, 66), "html", null, true);
                yield "\"
                            onclick=\"openModal(this)\">
                            <div class=\"ml-6\">
                                <h3 class=\"text-sm text-[#333] font-semibold\">";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "groupeJDR", [], "any", false, false, false, 69), "owner", [], "any", false, false, false, 69), "username", [], "any", false, false, false, 69), "html", null, true);
                yield " vous a invité à rejoindre son JDR</h3>
                                <p class=\"text-sm text-[#333]\">";
                // line 70
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "groupeJDR", [], "any", false, false, false, 70), "title", [], "any", false, false, false, 70), "html", null, true);
                yield "</p>
                            </div>
                        </li>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['invitation'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "                    </ul>
                    <div class=\"flex justify-center mt-6\">
                        <a href=\"";
            // line 76
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invitations_index");
            yield "\" class=\"text-xs px-4 text-slate-900 hover:text-slate-400 cursor-pointer\">Toutes les notifications</a>
                    </div>
                </div>
              ";
        }
        // line 80
        yield "            </div>
          </div>
          <div class=\"relative ml-3\">
              ";
        // line 83
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 83, $this->source); })()), "user", [], "any", false, false, false, 83)) {
            // line 84
            yield "                  <button id=\"user-menu-toggle\" type=\"button\" class=\"flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\" aria-expanded=\"false\" aria-haspopup=\"true\">
                      <span class=\"sr-only\">Open user menu</span>
                      ";
            // line 86
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 86, $this->source); })()), "user", [], "any", false, false, false, 86), "avatar", [], "any", false, false, false, 86)) {
                // line 87
                yield "                          <img class=\"h-10 w-10 rounded-full\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 87, $this->source); })()), "user", [], "any", false, false, false, 87), "avatar", [], "any", false, false, false, 87))), "html", null, true);
                yield "\" alt=\"Profile photo\">
                      ";
            } else {
                // line 89
                yield "                          <img class=\"h-10 w-10 rounded-full\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                      ";
            }
            // line 91
            yield "                  </button>
                  <div id=\"user-menu\" class=\"hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none\" role=\"menu\" aria-orientation=\"vertical\" aria-labelledby=\"user-menu-toggle\" tabindex=\"-1\">
                      <a href=\"";
            // line 93
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-0\">Votre Profil</a>
                      <a href=\"";
            // line 94
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-1\">Paramètre</a>
                      <a href=\"";
            // line 95
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-2\">Déconnexion</a>
                  </div>
              ";
        } else {
            // line 98
            yield "                  <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"text-sm font-semibold leading-6 text-white\">Log in <span aria-hidden=\"true\">&rarr;</span></a>
              ";
        }
        // line 100
        yield "          </div>
      </nav>

      <div class=\"lg:hidden hidden backdrop-blur-lg bg-slate-900 bg-opacity-80\" id=\"mobile-menu\">
        <div class=\"space-y-1 pt-2 pb-3\">
          <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700\">Accueil</a>
          <a href=\"";
        // line 106
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:bg-gray-50\">Les Univers</a>
          <a href=\"";
        // line 107
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_jdr");
        yield "\" class=\"block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:bg-gray-50\">Mes Parties</a>
          <a href=\"#\" class=\"block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:bg-gray-50\">Les Joueurs</a>
          <a href=\"#\" class=\"block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:bg-gray-50\">Nous Contacter</a>
        </div>
        <div class=\"border-t border-gray-200 pt-4 pb-3\">
          <div class=\"flex items-center px-4 sm:px-6\">
            ";
        // line 113
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 113, $this->source); })()), "user", [], "any", false, false, false, 113)) {
            // line 114
            yield "              <div class=\"flex-shrink-0\">
                ";
            // line 115
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 115, $this->source); })()), "user", [], "any", false, false, false, 115), "avatar", [], "any", false, false, false, 115)) {
                // line 116
                yield "                  <img class=\"h-10 w-10 rounded-full\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 116, $this->source); })()), "user", [], "any", false, false, false, 116), "avatar", [], "any", false, false, false, 116))), "html", null, true);
                yield "\" alt=\"Profile photo\">
                ";
            } else {
                // line 118
                yield "                  <img class=\"h-10 w-10 rounded-full\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                ";
            }
            // line 120
            yield "              </div>
              <div class=\"ml-3\">
                <div class=\"text-base font-medium text-white\">";
            // line 122
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 122, $this->source); })()), "user", [], "any", false, false, false, 122), "username", [], "any", false, false, false, 122), "html", null, true);
            yield "</div>
                <div class=\"text-sm font-medium text-gray-200\">";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 123, $this->source); })()), "user", [], "any", false, false, false, 123), "email", [], "any", false, false, false, 123), "html", null, true);
            yield "</div>
              </div>
              <div class=\"relative flex items-center\">
                <a href=\"";
            // line 126
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_invitations_index");
            yield "\" class=\"ml-5 flex-shrink-0 p-1 text-white focus:outline-none\" ";
            if ( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "user", [], "any", false, false, false, 126)) {
                yield " style=\"display: none;\" ";
            }
            yield ">
                    <span class=\"sr-only\">Voir les notifications</span>
                    <svg class=\"h-6 w-6 text-white hover:text-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" aria-hidden=\"true\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0\" />
                    </svg>
                    ";
            // line 131
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "user", [], "any", false, false, false, 131)) {
                // line 132
                yield "                      ";
                $context["invitations"] = Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 132, $this->source); })()), "user", [], "any", false, false, false, 132), "invitations", [], "any", false, false, false, 132), function ($__invitation__) use ($context, $macros) { $context["invitation"] = $__invitation__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["invitation"]) || array_key_exists("invitation", $context) ? $context["invitation"] : (function () { throw new RuntimeError('Variable "invitation" does not exist.', 132, $this->source); })()), "status", [], "any", false, false, false, 132) == "pending"); });
                // line 133
                yield "                      ";
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 133, $this->source); })())) > 0)) {
                    // line 134
                    yield "                          <span class=\"absolute top-0 right-0 inline-flex items-center justify-center p-1 bg-red-500 text-white rounded-full text-xs font-bold\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 134, $this->source); })())), "html", null, true);
                    yield "</span>
                      ";
                }
                // line 136
                yield "                  ";
            }
            // line 137
            yield "                </a>
              </div>
            ";
        }
        // line 140
        yield "          </div>
          <div class=\"mt-3 space-y-1\">
            ";
        // line 142
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 142, $this->source); })()), "user", [], "any", false, false, false, 142)) {
            // line 143
            yield "              <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Votre Profil</a>
              <a href=\"";
            // line 144
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Paramètre</a>
              <a href=\"";
            // line 145
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Déconnexion</a>
            ";
        } else {
            // line 147
            yield "              <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Log in</a>
            ";
        }
        // line 149
        yield "          </div>
        </div>
      </div>
    </header>
  </div>
<div id=\"hs-scale-animation-modal\" class=\"hs-overlay hidden fixed top-0 left-0 z-[80] w-full h-full overflow-x-hidden overflow-y-auto bg-black bg-opacity-50\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"hs-scale-animation-modal-label\">
  <div class=\"sm:max-w-4xl sm:w-full mx-auto flex items-center justify-center min-h-screen\">
    <div class=\"w-full bg-white shadow-sm rounded-xl pointer-events-auto\">
      <div class=\"flex justify-between items-center py-3 px-4 bg-slate-900\">
        <h3 id=\"hs-scale-animation-modal-label\" class=\"font-bold text-white\">
          Détails de l'invitation
        </h3>
        <button type=\"button\" class=\"inline-flex justify-center items-center rounded-full bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none\" aria-label=\"Close\" onclick=\"closeModal()\">
          <span class=\"sr-only\">Close</span>
          <svg class=\"w-4 h-4\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" />
          </svg>
        </button>
      </div>
      <div class=\"p-4\" id=\"modalContent\">
        <p class=\"text-gray-800\">Vous avez été invité à rejoindre un JDR.</p>
      </div>
      <div class=\"flex justify-end items-center gap-x-2 py-3 px-4 border-t\">
        <button type=\"button\" class=\"py-2 px-3 text-sm font-medium rounded-lg bg-slate-900 text-white hover:bg-slate-600\" onclick=\"closeModal()\">Fermer</button>
      </div>
    </div>
  </div>
</div>


  ";
        // line 179
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 180
        yield "
  <footer class=\"bg-slate-900 mt-12\" aria-labelledby=\"footer-heading\">
    <h2 id=\"footer-heading\" class=\"sr-only\">Footer</h2>
    <div class=\"max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8\">
      <div class=\"xl:grid xl:grid-cols-3 xl:gap-8\">
        <div class=\"space-y-8 xl:col-span-1\">
          <h2 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">DiceFinder</h2>
          <p class=\"text-gray-500 text-base\">DiceFinder est une plateforme dédiée aux amateurs de jeux de rôle. Créez ou rejoignez des parties, connectez-vous avec d'autres joueurs et vivez des aventures épiques. Simple, intuitif et conçu pour tous les passionnés de JDR !</p>
          <div class=\"flex space-x-6\">
            <a href=\"#\" class=\"text-gray-400 hover:text-gray-500\">
              <span class=\"sr-only\">Facebook</span>
              <svg class=\"h-6 w-6\" fill=\"currentColor\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                <path fill-rule=\"evenodd\" d=\"M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z\" clip-rule=\"evenodd\" />
              </svg>
            </a>

            <a href=\"#\" class=\"text-gray-400 hover:text-gray-500\">
              <span class=\"sr-only\">Instagram</span>
              <svg class=\"h-6 w-6\" fill=\"currentColor\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                <path fill-rule=\"evenodd\" d=\"M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z\" clip-rule=\"evenodd\" />
              </svg>
            </a>

            <a href=\"#\" class=\"text-gray-400 hover:text-gray-500\">
              <span class=\"sr-only\">Twitter</span>
              <svg class=\"h-6 w-6\" fill=\"currentColor\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                <path d=\"M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84\" />
              </svg>
            </a>
          </div>
        </div>
        <div class=\"mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2\">
          <div class=\"md:grid md:grid-cols-2 md:gap-8\">
            <div>
              <h3 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">Ressources</h3>
              <ul role=\"list\" class=\"mt-4 space-y-4\">
                <li>
                  <a href=\"#\" class=\"text-base text-gray-500 hover:text-gray-900\"> Centre d’Aide </a>
                </li>

                <li>
                  <a href=\"#\" class=\"text-base text-gray-500 hover:text-gray-900\"> Statut du site </a>
                </li>

                <li>
                  <a href=\"#\" class=\"text-base text-gray-500 hover:text-gray-900\"> Partenaire </a>
                </li>
              </ul>
            </div>
            <div class=\"mt-12 md:mt-0\">
              <h3 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">Company</h3>
              <ul role=\"list\" class=\"mt-4 space-y-4\">
                <li>
                  <a href=\"#\" class=\"text-base text-gray-500 hover:text-gray-900\"> Notre équipe </a>
                </li>

                <li>
                  <a href=\"#\" class=\"text-base text-gray-500 hover:text-gray-900\"> A Propos de Nous </a>
                </li>

                <li>
                  <a href=\"#\" class=\"text-base text-gray-500 hover:text-gray-900\"> Nous contacter </a>
                </li>
              </ul>
            </div>
          </div>
          <div class=\"md:grid md:grid-cols-2 md:gap-8\">
            <div>
              <h3 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">Contact</h3>
              <ul role=\"list\" class=\"mt-4 space-y-4\">
                <li>
                  <a href=\"#\" class=\"text-base text-gray-500 hover:text-gray-900\"> Mon adresse, 27500 VilleRandom, France </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class=\"mt-12 border-t border-gray-200 pt-8\">
        <p class=\"text-base text-gray-400 xl:text-center\">&copy; 2024 All Right Reserved</p>
      </div>
    </div>
  </footer>
</body>

<script>
  function openModal(notificationElement) {
      const invitationId = notificationElement.getAttribute('data-invitation-id');
      const ownerUsername = notificationElement.getAttribute('data-owner-username');
      const ownerAvatar = notificationElement.getAttribute('data-owner-avatar');
      const jdrTitle = notificationElement.getAttribute('data-jdr-title');

      const modalContent = `
          <div class=\"text-lg font-bold text-gray-900 mb-4\">Invitation à rejoindre un JDR</div>
          <div class=\"flex items-center mb-4\">
              <img class=\"w-16 h-16 rounded-full mr-4\" src=\"/uploads/avatars/\${ownerAvatar}\" alt=\"Photo de \${ownerUsername}\">
              <div class=\"text-gray-800\">
                  <p><strong>\${ownerUsername}</strong> vous invite à rejoindre <span class=\"text-xl font-semibold\">\${jdrTitle}</span></p>
              </div>
          </div>
          <div class=\"mt-4\">
              <p class=\"text-gray-700\">Rejoindre ce JDR vous permettra de participer à des sessions de jeu organisées par \${ownerUsername}.</p>
          </div>
          <div class=\"flex justify-start gap-4 mt-6\">
              <button onclick=\"respondToInvitation('accept', '\${invitationId}')\" class=\"px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700\">
                  Accepter
              </button>
              <button onclick=\"respondToInvitation('refuse', '\${invitationId}')\" class=\"px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700\">
                  Refuser
              </button>
          </div>
      `;

      document.querySelector('#modalContent').innerHTML = modalContent;

      const modal = document.getElementById('hs-scale-animation-modal');
      modal.classList.remove('hidden');
      modal.classList.add('block');
      modal.style.display = 'block';
      modal.style.opacity = '1';
      modal.style.pointerEvents = 'auto';
  }

  function respondToInvitation(response, invitationId) {
      fetch(`/invitations/\${invitationId}/respond`, {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
              'X-CSRF-Token': '";
        // line 308
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("respond_invitation"), "html", null, true);
        yield "'
          },
          body: JSON.stringify({
              response: response
          })
      })
      .then(res => res.json())
      .then(data => {
          if (data.success) {
              if (response === 'accept') {
                  window.location.href = '/my/jdr';
              } else {
                  window.location.reload();
              }
          }
      })
      .catch(error => {
          console.error('Erreur:', error);
          showToast('Erreur de connexion.', 'error');
      });
  }

  function closeModal() {
      const modal = document.getElementById('hs-scale-animation-modal');
      modal.classList.add('hidden');
      modal.classList.remove('block');
      modal.style.display = 'none';
  }

  function closeModal() {
      const modal = document.getElementById('hs-scale-animation-modal');
      modal.classList.add('hidden');
      modal.classList.remove('block');
      modal.style.display = 'none';
  }

  document.getElementById('mobile-menu-toggle').addEventListener('click', function () {
      var menu = document.getElementById('mobile-menu');
      var expanded = this.getAttribute('aria-expanded') === 'true' || false;
      this.setAttribute('aria-expanded', !expanded);
      menu.classList.toggle('hidden');
  });

  document.getElementById('user-menu-toggle').addEventListener('click', function () {
      var menu = document.getElementById('user-menu');
      menu.classList.toggle('hidden');
  });

  let dropdownToggle = document.getElementById('dropdownToggle');
  let dropdownMenu = document.getElementById('dropdownMenu');

  function handleClick() {
      if (dropdownMenu.className.includes('block')) {
          dropdownMenu.classList.add('hidden');
          dropdownMenu.classList.remove('block');
      } else {
          dropdownMenu.classList.add('block');
          dropdownMenu.classList.remove('hidden');
      }
  }

  dropdownToggle.addEventListener('click', handleClick);

  function addNotification(message, type = 'info') {
      const notificationList = document.getElementById('notification-list');
      const notification = document.createElement('div');

      let bgColor;

      switch (type) {
          case 'success':
              bgColor = 'bg-green-100 border-green-500 text-green-700';
              break;
          case 'error':
              bgColor = 'bg-red-100 border-red-500 text-red-700';
              break;
          default:
              bgColor = 'bg-blue-100 border-blue-500 text-blue-700';
              break;
      }

      notification.className = `\${bgColor} border-t border-b px-4 py-2 text-sm rounded-md mb-2 shadow`;
      notification.innerHTML = `
          <div class=\"flex justify-between items-center\">
              <span>\${message}</span>
              <button class=\"text-gray-500 hover:text-gray-700\" onclick=\"this.parentElement.parentElement.remove()\">✖</button>
          </div>
      `;

      notificationList.appendChild(notification);
  }
  
</script>

</html>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    // line 5
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

        yield "Welcome!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 12
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 13
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 16
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 17
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 16
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_importmap(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "importmap"));

        yield $this->env->getRuntime('Symfony\Bridge\Twig\Extension\ImportMapRuntime')->importmap("app");
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 179
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "base.html.twig";
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
        return array (  732 => 179,  709 => 16,  698 => 17,  695 => 16,  682 => 15,  671 => 13,  658 => 12,  635 => 5,  528 => 308,  398 => 180,  396 => 179,  364 => 149,  358 => 147,  353 => 145,  349 => 144,  344 => 143,  342 => 142,  338 => 140,  333 => 137,  330 => 136,  324 => 134,  321 => 133,  318 => 132,  316 => 131,  304 => 126,  298 => 123,  294 => 122,  290 => 120,  284 => 118,  278 => 116,  276 => 115,  273 => 114,  271 => 113,  262 => 107,  258 => 106,  254 => 105,  247 => 100,  241 => 98,  235 => 95,  231 => 94,  227 => 93,  223 => 91,  217 => 89,  211 => 87,  209 => 86,  205 => 84,  203 => 83,  198 => 80,  191 => 76,  187 => 74,  177 => 70,  173 => 69,  167 => 66,  163 => 65,  159 => 64,  155 => 63,  152 => 62,  148 => 61,  143 => 58,  137 => 56,  134 => 55,  132 => 54,  123 => 47,  121 => 46,  111 => 39,  107 => 38,  103 => 37,  87 => 24,  79 => 18,  77 => 15,  74 => 14,  72 => 12,  67 => 10,  59 => 5,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
        <link rel=\"icon\" href=\"data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 128 128%22><text y=%221.2em%22 font-size=%2296%22>⚫️</text><text y=%221.3em%22 x=%220.2em%22 font-size=%2276%22 fill=%22%23fff%22>sf</text></svg>\">
        <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
        <script src=\"https://cdn.tailwindcss.com\"></script>
        <link rel=\"stylesheet\" href=\"{{ asset('css/app.css') }}\">

        {% block stylesheets %}
        {% endblock %}

        {% block javascripts %}
            {% block importmap %}{{ importmap('app') }}{% endblock %}
        {% endblock %}
    </head>
<body class=\"bg-slate-900\">
  <div>
    <header class=\"absolute inset-x-0 top-0 z-50\">
      <nav class=\"flex items-center justify-between p-6 lg:px-8\" aria-label=\"Global\">
        <div class=\"flex lg:flex-1\">
          <a href=\"{{ path('app_home') }}\" class=\"font-bold text-white -m-1.5 p-1.5\">
            DiceFinder
          </a>
        </div>
        <div class=\"flex lg:hidden\">
          <button id=\"mobile-menu-toggle\" type=\"button\" class=\"-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700\">
            <span class=\"sr-only\">Open main menu</span>
            <svg class=\"h-6 w-6\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" aria-hidden=\"true\">
              <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5\" />
            </svg>
          </button>
        </div>
        <div class=\"hidden lg:flex lg:gap-x-12\">
          <a href=\"{{ path('app_home') }}\" class=\"text-sm font-semibold leading-6 text-white\">Accueil</a>
          <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"text-sm font-semibold leading-6 text-white\">Les Univers</a>
          <a href=\"{{ path('app_my_jdr') }}\" class=\"text-sm font-semibold leading-6 text-white\">Mes Parties</a>
          <a href=\"#\" class=\"text-sm font-semibold leading-6 text-white\">Les Joueurs</a>
          <a href=\"#\" class=\"text-sm font-semibold leading-6 text-white\">Nous Contacter</a>
        </div>
        <div class=\"hidden lg:flex lg:flex-1 lg:justify-end\">
          <div class=\"relative flex items-center\">
            <div class=\"relative w-max mx-auto mr-10\">
              {% if app.user %}
                <button type=\"button\" id=\"dropdownToggle\" class=\"w-12 h-12 flex items-center justify-center text-white border-none outline-none\">
                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18px\" class=\"cursor-pointer fill-[#fff]\"
                        viewBox=\"0 0 371.263 371.263\">
                        <path
                            d=\"M305.402 234.794v-70.54c0-52.396-33.533-98.085-79.702-115.151.539-2.695.838-5.449.838-8.204C226.539 18.324 208.215 0 185.64 0s-40.899 18.324-40.899 40.899c0 2.695.299 5.389.778 7.964-15.868 5.629-30.539 14.551-43.054 26.647-23.593 22.755-36.587 53.354-36.587 86.169v73.115c0 2.575-2.096 4.731-4.731 4.731-22.096 0-40.959 16.647-42.995 37.845-1.138 11.797 2.755 23.533 10.719 32.276 7.904 8.683 19.222 13.713 31.018 13.713h72.217c2.994 26.887 25.869 47.905 53.534 47.905s50.54-21.018 53.534-47.905h72.217c11.797 0 23.114-5.03 31.018-13.713 7.904-8.743 11.797-20.479 10.719-32.276-2.036-21.198-20.958-37.845-42.995-37.845a4.704 4.704 0 0 1-4.731-4.731zM185.64 23.952c9.341 0 16.946 7.605 16.946 16.946 0 .778-.12 1.497-.24 2.275-4.072-.599-8.204-1.018-12.336-1.138-7.126-.24-14.132.24-21.078 1.198-.12-.778-.24-1.497-.24-2.275.002-9.401 7.607-17.006 16.948-17.006zm0 323.358c-14.431 0-26.527-10.3-29.342-23.952h58.683c-2.813 13.653-14.909 23.952-29.341 23.952zm143.655-67.665c.479 5.15-1.138 10.12-4.551 13.892-3.533 3.773-8.204 5.868-13.353 5.868H59.89c-5.15 0-9.82-2.096-13.294-5.868-3.473-3.772-5.09-8.743-4.611-13.892.838-9.042 9.282-16.168 19.162-16.168 15.809 0 28.683-12.874 28.683-28.683v-73.115c0-26.228 10.419-50.719 29.282-68.923 18.024-17.425 41.498-26.887 66.528-26.887 1.198 0 2.335 0 3.533.06 50.839 1.796 92.277 45.929 92.277 98.325v70.54c0 15.809 12.874 28.683 28.683 28.683 9.88 0 18.264 7.126 19.162 16.168z\"
                            data-original=\"#000000\"></path>
                    </svg>
                    {% set invitations = app.user.invitations|filter(invitation => invitation.status == 'pending') %}
                    {% if invitations|length > 0 %}
                        <div class=\"absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -end-2 dark:border-gray-900\">{{ invitations|length }}</div>
                    {% endif %}
                </button>
                <div id=\"dropdownMenu\" class='hidden absolute right-0 shadow-lg bg-white py-4 z-[1000] min-w-full rounded-lg w-[410px] max-h-[500px] overflow-auto mt-2'>
                    <ul class=\"divide-y\" id=\"notification-list\">
                        {% for invitation in invitations %}
                        <li class='p-4 flex items-center hover:bg-gray-50 cursor-pointer'
                            data-invitation-id=\"{{ invitation.id }}\"
                            data-owner-username=\"{{ invitation.groupeJDR.owner.username }}\"
                            data-owner-avatar=\"{{ invitation.groupeJDR.owner.avatar }}\"
                            data-jdr-title=\"{{ invitation.groupeJDR.title }}\"
                            onclick=\"openModal(this)\">
                            <div class=\"ml-6\">
                                <h3 class=\"text-sm text-[#333] font-semibold\">{{ invitation.groupeJDR.owner.username }} vous a invité à rejoindre son JDR</h3>
                                <p class=\"text-sm text-[#333]\">{{ invitation.groupeJDR.title }}</p>
                            </div>
                        </li>
                        {% endfor %}
                    </ul>
                    <div class=\"flex justify-center mt-6\">
                        <a href=\"{{ path('app_invitations_index') }}\" class=\"text-xs px-4 text-slate-900 hover:text-slate-400 cursor-pointer\">Toutes les notifications</a>
                    </div>
                </div>
              {% endif %}
            </div>
          </div>
          <div class=\"relative ml-3\">
              {% if app.user %}
                  <button id=\"user-menu-toggle\" type=\"button\" class=\"flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\" aria-expanded=\"false\" aria-haspopup=\"true\">
                      <span class=\"sr-only\">Open user menu</span>
                      {% if app.user.avatar %}
                          <img class=\"h-10 w-10 rounded-full\" src=\"{{ asset('uploads/avatars/' ~ app.user.avatar) }}\" alt=\"Profile photo\">
                      {% else %}
                          <img class=\"h-10 w-10 rounded-full\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                      {% endif %}
                  </button>
                  <div id=\"user-menu\" class=\"hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none\" role=\"menu\" aria-orientation=\"vertical\" aria-labelledby=\"user-menu-toggle\" tabindex=\"-1\">
                      <a href=\"{{ path('app_profile') }}\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-0\">Votre Profil</a>
                      <a href=\"{{ path('app_profile_edit') }}\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-1\">Paramètre</a>
                      <a href=\"{{ path('app_logout') }}\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-2\">Déconnexion</a>
                  </div>
              {% else %}
                  <a href=\"{{ path('app_login') }}\" class=\"text-sm font-semibold leading-6 text-white\">Log in <span aria-hidden=\"true\">&rarr;</span></a>
              {% endif %}
          </div>
      </nav>

      <div class=\"lg:hidden hidden backdrop-blur-lg bg-slate-900 bg-opacity-80\" id=\"mobile-menu\">
        <div class=\"space-y-1 pt-2 pb-3\">
          <a href=\"{{ path('app_home') }}\" class=\"block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700\">Accueil</a>
          <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:bg-gray-50\">Les Univers</a>
          <a href=\"{{ path('app_my_jdr') }}\" class=\"block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:bg-gray-50\">Mes Parties</a>
          <a href=\"#\" class=\"block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:bg-gray-50\">Les Joueurs</a>
          <a href=\"#\" class=\"block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:bg-gray-50\">Nous Contacter</a>
        </div>
        <div class=\"border-t border-gray-200 pt-4 pb-3\">
          <div class=\"flex items-center px-4 sm:px-6\">
            {% if app.user %}
              <div class=\"flex-shrink-0\">
                {% if app.user.avatar %}
                  <img class=\"h-10 w-10 rounded-full\" src=\"{{ asset('uploads/avatars/' ~ app.user.avatar) }}\" alt=\"Profile photo\">
                {% else %}
                  <img class=\"h-10 w-10 rounded-full\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                {% endif %}
              </div>
              <div class=\"ml-3\">
                <div class=\"text-base font-medium text-white\">{{ app.user.username }}</div>
                <div class=\"text-sm font-medium text-gray-200\">{{ app.user.email }}</div>
              </div>
              <div class=\"relative flex items-center\">
                <a href=\"{{ path('app_invitations_index') }}\" class=\"ml-5 flex-shrink-0 p-1 text-white focus:outline-none\" {% if not app.user %} style=\"display: none;\" {% endif %}>
                    <span class=\"sr-only\">Voir les notifications</span>
                    <svg class=\"h-6 w-6 text-white hover:text-gray-500\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" aria-hidden=\"true\">
                        <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0\" />
                    </svg>
                    {% if app.user %}
                      {% set invitations = app.user.invitations|filter(invitation => invitation.status == 'pending') %}
                      {% if invitations|length > 0 %}
                          <span class=\"absolute top-0 right-0 inline-flex items-center justify-center p-1 bg-red-500 text-white rounded-full text-xs font-bold\">{{ invitations|length }}</span>
                      {% endif %}
                  {% endif %}
                </a>
              </div>
            {% endif %}
          </div>
          <div class=\"mt-3 space-y-1\">
            {% if app.user %}
              <a href=\"{{ path('app_profile') }}\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Votre Profil</a>
              <a href=\"{{ path('app_profile_edit') }}\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Paramètre</a>
              <a href=\"{{ path('app_logout') }}\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Déconnexion</a>
            {% else %}
              <a href=\"{{ path('app_login') }}\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Log in</a>
            {% endif %}
          </div>
        </div>
      </div>
    </header>
  </div>
<div id=\"hs-scale-animation-modal\" class=\"hs-overlay hidden fixed top-0 left-0 z-[80] w-full h-full overflow-x-hidden overflow-y-auto bg-black bg-opacity-50\" role=\"dialog\" tabindex=\"-1\" aria-labelledby=\"hs-scale-animation-modal-label\">
  <div class=\"sm:max-w-4xl sm:w-full mx-auto flex items-center justify-center min-h-screen\">
    <div class=\"w-full bg-white shadow-sm rounded-xl pointer-events-auto\">
      <div class=\"flex justify-between items-center py-3 px-4 bg-slate-900\">
        <h3 id=\"hs-scale-animation-modal-label\" class=\"font-bold text-white\">
          Détails de l'invitation
        </h3>
        <button type=\"button\" class=\"inline-flex justify-center items-center rounded-full bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-none\" aria-label=\"Close\" onclick=\"closeModal()\">
          <span class=\"sr-only\">Close</span>
          <svg class=\"w-4 h-4\" xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke=\"currentColor\" stroke-width=\"2\">
            <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M6 18L18 6M6 6l12 12\" />
          </svg>
        </button>
      </div>
      <div class=\"p-4\" id=\"modalContent\">
        <p class=\"text-gray-800\">Vous avez été invité à rejoindre un JDR.</p>
      </div>
      <div class=\"flex justify-end items-center gap-x-2 py-3 px-4 border-t\">
        <button type=\"button\" class=\"py-2 px-3 text-sm font-medium rounded-lg bg-slate-900 text-white hover:bg-slate-600\" onclick=\"closeModal()\">Fermer</button>
      </div>
    </div>
  </div>
</div>


  {% block body %}{% endblock %}

  <footer class=\"bg-slate-900 mt-12\" aria-labelledby=\"footer-heading\">
    <h2 id=\"footer-heading\" class=\"sr-only\">Footer</h2>
    <div class=\"max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8\">
      <div class=\"xl:grid xl:grid-cols-3 xl:gap-8\">
        <div class=\"space-y-8 xl:col-span-1\">
          <h2 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">DiceFinder</h2>
          <p class=\"text-gray-500 text-base\">DiceFinder est une plateforme dédiée aux amateurs de jeux de rôle. Créez ou rejoignez des parties, connectez-vous avec d'autres joueurs et vivez des aventures épiques. Simple, intuitif et conçu pour tous les passionnés de JDR !</p>
          <div class=\"flex space-x-6\">
            <a href=\"#\" class=\"text-gray-400 hover:text-gray-500\">
              <span class=\"sr-only\">Facebook</span>
              <svg class=\"h-6 w-6\" fill=\"currentColor\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                <path fill-rule=\"evenodd\" d=\"M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z\" clip-rule=\"evenodd\" />
              </svg>
            </a>

            <a href=\"#\" class=\"text-gray-400 hover:text-gray-500\">
              <span class=\"sr-only\">Instagram</span>
              <svg class=\"h-6 w-6\" fill=\"currentColor\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                <path fill-rule=\"evenodd\" d=\"M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z\" clip-rule=\"evenodd\" />
              </svg>
            </a>

            <a href=\"#\" class=\"text-gray-400 hover:text-gray-500\">
              <span class=\"sr-only\">Twitter</span>
              <svg class=\"h-6 w-6\" fill=\"currentColor\" viewBox=\"0 0 24 24\" aria-hidden=\"true\">
                <path d=\"M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84\" />
              </svg>
            </a>
          </div>
        </div>
        <div class=\"mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2\">
          <div class=\"md:grid md:grid-cols-2 md:gap-8\">
            <div>
              <h3 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">Ressources</h3>
              <ul role=\"list\" class=\"mt-4 space-y-4\">
                <li>
                  <a href=\"#\" class=\"text-base text-gray-500 hover:text-gray-900\"> Centre d’Aide </a>
                </li>

                <li>
                  <a href=\"#\" class=\"text-base text-gray-500 hover:text-gray-900\"> Statut du site </a>
                </li>

                <li>
                  <a href=\"#\" class=\"text-base text-gray-500 hover:text-gray-900\"> Partenaire </a>
                </li>
              </ul>
            </div>
            <div class=\"mt-12 md:mt-0\">
              <h3 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">Company</h3>
              <ul role=\"list\" class=\"mt-4 space-y-4\">
                <li>
                  <a href=\"#\" class=\"text-base text-gray-500 hover:text-gray-900\"> Notre équipe </a>
                </li>

                <li>
                  <a href=\"#\" class=\"text-base text-gray-500 hover:text-gray-900\"> A Propos de Nous </a>
                </li>

                <li>
                  <a href=\"#\" class=\"text-base text-gray-500 hover:text-gray-900\"> Nous contacter </a>
                </li>
              </ul>
            </div>
          </div>
          <div class=\"md:grid md:grid-cols-2 md:gap-8\">
            <div>
              <h3 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">Contact</h3>
              <ul role=\"list\" class=\"mt-4 space-y-4\">
                <li>
                  <a href=\"#\" class=\"text-base text-gray-500 hover:text-gray-900\"> Mon adresse, 27500 VilleRandom, France </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class=\"mt-12 border-t border-gray-200 pt-8\">
        <p class=\"text-base text-gray-400 xl:text-center\">&copy; 2024 All Right Reserved</p>
      </div>
    </div>
  </footer>
</body>

<script>
  function openModal(notificationElement) {
      const invitationId = notificationElement.getAttribute('data-invitation-id');
      const ownerUsername = notificationElement.getAttribute('data-owner-username');
      const ownerAvatar = notificationElement.getAttribute('data-owner-avatar');
      const jdrTitle = notificationElement.getAttribute('data-jdr-title');

      const modalContent = `
          <div class=\"text-lg font-bold text-gray-900 mb-4\">Invitation à rejoindre un JDR</div>
          <div class=\"flex items-center mb-4\">
              <img class=\"w-16 h-16 rounded-full mr-4\" src=\"/uploads/avatars/\${ownerAvatar}\" alt=\"Photo de \${ownerUsername}\">
              <div class=\"text-gray-800\">
                  <p><strong>\${ownerUsername}</strong> vous invite à rejoindre <span class=\"text-xl font-semibold\">\${jdrTitle}</span></p>
              </div>
          </div>
          <div class=\"mt-4\">
              <p class=\"text-gray-700\">Rejoindre ce JDR vous permettra de participer à des sessions de jeu organisées par \${ownerUsername}.</p>
          </div>
          <div class=\"flex justify-start gap-4 mt-6\">
              <button onclick=\"respondToInvitation('accept', '\${invitationId}')\" class=\"px-4 py-2 bg-green-600 text-white rounded-lg hover:bg-green-700\">
                  Accepter
              </button>
              <button onclick=\"respondToInvitation('refuse', '\${invitationId}')\" class=\"px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700\">
                  Refuser
              </button>
          </div>
      `;

      document.querySelector('#modalContent').innerHTML = modalContent;

      const modal = document.getElementById('hs-scale-animation-modal');
      modal.classList.remove('hidden');
      modal.classList.add('block');
      modal.style.display = 'block';
      modal.style.opacity = '1';
      modal.style.pointerEvents = 'auto';
  }

  function respondToInvitation(response, invitationId) {
      fetch(`/invitations/\${invitationId}/respond`, {
          method: 'POST',
          headers: {
              'Content-Type': 'application/json',
              'X-CSRF-Token': '{{ csrf_token(\"respond_invitation\") }}'
          },
          body: JSON.stringify({
              response: response
          })
      })
      .then(res => res.json())
      .then(data => {
          if (data.success) {
              if (response === 'accept') {
                  window.location.href = '/my/jdr';
              } else {
                  window.location.reload();
              }
          }
      })
      .catch(error => {
          console.error('Erreur:', error);
          showToast('Erreur de connexion.', 'error');
      });
  }

  function closeModal() {
      const modal = document.getElementById('hs-scale-animation-modal');
      modal.classList.add('hidden');
      modal.classList.remove('block');
      modal.style.display = 'none';
  }

  function closeModal() {
      const modal = document.getElementById('hs-scale-animation-modal');
      modal.classList.add('hidden');
      modal.classList.remove('block');
      modal.style.display = 'none';
  }

  document.getElementById('mobile-menu-toggle').addEventListener('click', function () {
      var menu = document.getElementById('mobile-menu');
      var expanded = this.getAttribute('aria-expanded') === 'true' || false;
      this.setAttribute('aria-expanded', !expanded);
      menu.classList.toggle('hidden');
  });

  document.getElementById('user-menu-toggle').addEventListener('click', function () {
      var menu = document.getElementById('user-menu');
      menu.classList.toggle('hidden');
  });

  let dropdownToggle = document.getElementById('dropdownToggle');
  let dropdownMenu = document.getElementById('dropdownMenu');

  function handleClick() {
      if (dropdownMenu.className.includes('block')) {
          dropdownMenu.classList.add('hidden');
          dropdownMenu.classList.remove('block');
      } else {
          dropdownMenu.classList.add('block');
          dropdownMenu.classList.remove('hidden');
      }
  }

  dropdownToggle.addEventListener('click', handleClick);

  function addNotification(message, type = 'info') {
      const notificationList = document.getElementById('notification-list');
      const notification = document.createElement('div');

      let bgColor;

      switch (type) {
          case 'success':
              bgColor = 'bg-green-100 border-green-500 text-green-700';
              break;
          case 'error':
              bgColor = 'bg-red-100 border-red-500 text-red-700';
              break;
          default:
              bgColor = 'bg-blue-100 border-blue-500 text-blue-700';
              break;
      }

      notification.className = `\${bgColor} border-t border-b px-4 py-2 text-sm rounded-md mb-2 shadow`;
      notification.innerHTML = `
          <div class=\"flex justify-between items-center\">
              <span>\${message}</span>
              <button class=\"text-gray-500 hover:text-gray-700\" onclick=\"this.parentElement.parentElement.remove()\">✖</button>
          </div>
      `;

      notificationList.appendChild(notification);
  }
  
</script>

</html>
", "base.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\base.html.twig");
    }
}
