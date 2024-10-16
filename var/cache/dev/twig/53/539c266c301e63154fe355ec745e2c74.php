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
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 7
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("icons/favicon.ico"), "html", null, true);
        yield "\" />
        <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
        <link href=\"";
        // line 9
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/style.css"), "html", null, true);
        yield "\" rel=\"stylesheet\">
        <script src=\"https://cdn.tailwindcss.com\"></script>

        ";
        // line 12
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 13
        yield "
        ";
        // line 14
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 17
        yield "    </head>
    <body class=\"bg-slate-900\">
      <div>
        <header class=\"absolute inset-x-0 top-0 z-50\">
          <nav class=\"flex items-center justify-between p-6 lg:px-8\" aria-label=\"Global\">
            <div class=\"flex lg:flex-1\">
                <a href=\"";
        // line 23
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"-m-1.5 p-1.5\">
                    <img class=\"h-16 w-auto\" src=\"";
        // line 24
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/logo-dicefinder.png"), "html", null, true);
        yield "\" alt=\"DiceFinder Logo\">
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
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link text-sm font-semibold leading-6 text-white hover:text-gray-300 ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "request", [], "any", false, false, false, 36), "get", ["_route"], "method", false, false, false, 36) == "app_home")) {
            yield "active";
        }
        yield "\">
                Accueil
              </a>
              <a href=\"";
        // line 39
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"nav-link text-sm font-semibold leading-6 text-white hover:text-gray-300 ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 39, $this->source); })()), "request", [], "any", false, false, false, 39), "get", ["_route"], "method", false, false, false, 39) == "app_groupe_j_d_r_index")) {
            yield "active";
        }
        yield "\">
                Les Univers
              </a>
              <a href=\"";
        // line 42
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_jdr");
        yield "\" class=\"nav-link text-sm font-semibold leading-6 text-white hover:text-gray-300 ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 42, $this->source); })()), "request", [], "any", false, false, false, 42), "get", ["_route"], "method", false, false, false, 42) == "app_my_jdr")) {
            yield "active";
        }
        yield "\">
                Mes Parties
              </a>
              <a href=\"";
        // line 45
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"nav-link text-sm font-semibold leading-6 text-white hover:text-gray-300\">
                Nous Contacter
              </a>
            </div>
            <div class=\"hidden lg:flex lg:flex-1 lg:justify-end\">
              <div class=\"relative flex items-center\">
                  <div class=\"relative w-max mx-auto mr-10\">
                    ";
        // line 52
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 52, $this->source); })()), "user", [], "any", false, false, false, 52)) {
            // line 53
            yield "                      <button id=\"notificationDropdown\" type=\"button\" class=\"relative w-12 h-12 flex items-center justify-center text-white border-none outline-none bg-gray-500 rounded-full transition duration-300 ease-in-out transform hover:scale-110 hover:bg-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:outline-none shadow-lg\">
                          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18px\" class=\"text-gray-100 cursor-pointer fill-current\" viewBox=\"0 0 371.263 371.263\">
                              <path
                                  d=\"M305.402 234.794v-70.54c0-52.396-33.533-98.085-79.702-115.151.539-2.695.838-5.449.838-8.204C226.539 18.324 208.215 0 185.64 0s-40.899 18.324-40.899 40.899c0 2.695.299 5.389.778 7.964-15.868 5.629-30.539 14.551-43.054 26.647-23.593 22.755-36.587 53.354-36.587 86.169v73.115c0 2.575-2.096 4.731-4.731 4.731-22.096 0-40.959 16.647-42.995 37.845-1.138 11.797 2.755 23.533 10.719 32.276 7.904 8.683 19.222 13.713 31.018 13.713h72.217c2.994 26.887 25.869 47.905 53.534 47.905s50.54-21.018 53.534-47.905h72.217c11.797 0 23.114-5.03 31.018-13.713 7.904-8.743 11.797-20.479 10.719-32.276-2.036-21.198-20.958-37.845-42.995-37.845a4.704 4.704 0 0 1-4.731-4.731zM185.64 23.952c9.341 0 16.946 7.605 16.946 16.946 0 .778-.12 1.497-.24 2.275-4.072-.599-8.204-1.018-12.336-1.138-7.126-.24-14.132.24-21.078 1.198-.12-.778-.24-1.497-.24-2.275.002-9.401 7.607-17.006 16.948-17.006zm0 323.358c-14.431 0-26.527-10.3-29.342-23.952h58.683c-2.813 13.653-14.909 23.952-29.341 23.952zm143.655-67.665c.479 5.15-1.138 10.12-4.551 13.892-3.533 3.773-8.204 5.868-13.353 5.868H59.89c-5.15 0-9.82-2.096-13.294-5.868-3.473-3.772-5.09-8.743-4.611-13.892.838-9.042 9.282-16.168 19.162-16.168 15.809 0 28.683-12.874 28.683-28.683v-73.115c0-26.228 10.419-50.719 29.282-68.923 18.024-17.425 41.498-26.887 66.528-26.887 1.198 0 2.335 0 3.533.06 50.839 1.796 92.277 45.929 92.277 98.325v70.54c0 15.809 12.874 28.683 28.683 28.683 9.88 0 18.264 7.126 19.162 16.168z\"
                              />
                          </svg>
                          <div id=\"invitation-notification\" class=\"absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 hidden\">
                            0
                          </div>
                      </button>
                      <div id=\"dropdown-menu\" class=\"hidden absolute right-0 w-64 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none\">
                          <div class=\"py-1\" role=\"none\">
                              <p id=\"no-notifications-msg\" class=\"px-4 py-2 text-sm text-gray-700 hidden\">Pas de nouvelles notifications</p>
                              <div id=\"notifications-list\"></div>
                          </div>
                          <a href=\"";
            // line 68
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_index");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Voir toutes les notifications</a>
                      </div>
                    ";
        }
        // line 71
        yield "                  </div>
              </div>
              <div class=\"relative ml-3\">
                  ";
        // line 74
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 74, $this->source); })()), "user", [], "any", false, false, false, 74)) {
            // line 75
            yield "                      <button id=\"user-menu-toggle\" type=\"button\" class=\"flex items-center justify-center w-12 h-12 rounded-full bg-gray-500 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-300 ease-in-out transform hover:scale-110 hover:bg-gray-700 shadow-lg\" aria-expanded=\"false\" aria-haspopup=\"true\">
                          <span class=\"sr-only\">Open user menu</span>
                          ";
            // line 77
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "avatar", [], "any", false, false, false, 77)) {
                // line 78
                yield "                              <img class=\"h-10 w-10 rounded-full object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "avatar", [], "any", false, false, false, 78))), "html", null, true);
                yield "\" alt=\"Profile photo\">
                          ";
            } else {
                // line 80
                yield "                              <img class=\"h-10 w-10 rounded-full object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                          ";
            }
            // line 82
            yield "                      </button>
                      <div id=\"user-menu\" class=\"hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none\" role=\"menu\" aria-orientation=\"vertical\" aria-labelledby=\"user-menu-toggle\" tabindex=\"-1\">
                          <a href=\"";
            // line 84
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-0\">Votre Profil</a>
                          <a href=\"";
            // line 85
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-1\">Paramètre</a>
                          <a href=\"";
            // line 86
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-2\">Déconnexion</a>
                      </div>
                  ";
        } else {
            // line 89
            yield "                      <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"text-sm font-semibold leading-6 text-white\">Connexion <span aria-hidden=\"true\">&rarr;</span></a>
                  ";
        }
        // line 91
        yield "              </div>
          </nav>
          <div class=\"lg:hidden hidden backdrop-blur-lg bg-slate-900 bg-opacity-80\" id=\"mobile-menu\">
            <div class=\"space-y-1 pt-2 pb-3\">
              <a href=\"";
        // line 95
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"
                class=\"block border-l-4 ";
        // line 96
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 96, $this->source); })()), "request", [], "any", false, false, false, 96), "get", ["_route"], "method", false, false, false, 96) == "app_home")) ? ("border-indigo-500 bg-indigo-50 text-indigo-700") : ("border-transparent text-white hover:bg-gray-500"));
        yield " py-2 pl-3 pr-4 text-base font-medium\">
                Accueil
              </a>

              <a href=\"";
        // line 100
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\"
                class=\"block border-l-4 ";
        // line 101
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 101, $this->source); })()), "request", [], "any", false, false, false, 101), "get", ["_route"], "method", false, false, false, 101) == "app_groupe_j_d_r_index")) ? ("border-indigo-500 bg-indigo-50 text-indigo-700") : ("border-transparent text-white hover:bg-gray-500"));
        yield " py-2 pl-3 pr-4 text-base font-medium\">
                Les Univers
              </a>

              <a href=\"";
        // line 105
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_jdr");
        yield "\"
                class=\"block border-l-4 ";
        // line 106
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 106, $this->source); })()), "request", [], "any", false, false, false, 106), "get", ["_route"], "method", false, false, false, 106) == "app_my_jdr")) ? ("border-indigo-500 bg-indigo-50 text-indigo-700") : ("border-transparent text-white hover:bg-gray-500"));
        yield " py-2 pl-3 pr-4 text-base font-medium\">
                Mes Parties
              </a>

              <a href=\"";
        // line 110
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\"
                class=\"block border-l-4 ";
        // line 111
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "request", [], "any", false, false, false, 111), "get", ["_route"], "method", false, false, false, 111) == "app_contact")) ? ("border-indigo-500 bg-indigo-50 text-indigo-700") : ("border-transparent text-white hover:bg-gray-500"));
        yield " py-2 pl-3 pr-4 text-base font-medium\">
                Nous Contacter
              </a>
            </div>
            <div class=\"border-t border-gray-200 pt-4 pb-3\">
              <div class=\"mt-3 space-y-1\">
                ";
        // line 117
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 117, $this->source); })()), "user", [], "any", false, false, false, 117)) {
            // line 118
            yield "                  <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Votre Profil</a>
                  <a href=\"";
            // line 119
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Paramètre</a>
                  <a href=\"";
            // line 120
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Déconnexion</a>
                ";
        } else {
            // line 122
            yield "                  <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Connexion</a>
                ";
        }
        // line 124
        yield "              </div>
            </div>
          </div>
        </header>
      </div>
      <div class=\"container mx-auto px-4 py-8 mt-4 sm:mt-16\">
          ";
        // line 130
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 130, $this->source); })()), "flashes", ["success"], "method", false, false, false, 130));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 131
            yield "              <div class=\"alert-message bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6\" role=\"alert\">
                  ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
              </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "          
          ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 136, $this->source); })()), "flashes", ["error"], "method", false, false, false, 136));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 137
            yield "              <div class=\"alert-message bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6\" role=\"alert\">
                  ";
            // line 138
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
              </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 141
        yield "
          ";
        // line 142
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 143
        yield "      </div>
      <div id=\"invitationModal\" class=\"fixed z-10 inset-0 overflow-y-auto hidden\" aria-labelledby=\"modal-title\" role=\"dialog\" aria-modal=\"true\">
          <div class=\"flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0\">
              <div class=\"fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity\" aria-hidden=\"true\"></div>
              <span class=\"hidden sm:inline-block sm:align-middle sm:h-screen\" aria-hidden=\"true\">&#8203;</span>
              <div class=\"inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full fade-in\">
                  
                  <button id=\"close-modal-btn\" class=\"absolute top-0 right-0 p-2 text-gray-400 hover:text-gray-600\">
                      &times;
                  </button>

                  <h3 class=\"text-lg leading-6 font-medium text-gray-900\" id=\"modal-title\">
                      <span id=\"modal-action\"></span> pour rejoindre <span id=\"modal-group-title\"></span>
                  </h3>

                  <div class=\"mt-2\">
                      <p class=\"text-sm text-gray-500\"><span id=\"modal-invitation-message\"></span></p>
                  </div>

                  <div class=\"mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense\">
                      <button id=\"accept-btn\" type=\"button\" class=\"w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:col-start-2 sm:text-sm\">
                          Accepter
                      </button>
                      <button id=\"reject-btn\" type=\"button\" class=\"mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:mt-0 sm:col-start-1 sm:text-sm\">
                          Refuser
                      </button>

                      <button id=\"respond-later-btn\" type=\"button\" class=\"mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-gray-600 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:col-span-2 sm:text-sm\">
                          Répondre plus tard
                      </button>
                  </div>
              </div>
          </div>
      </div>


      <a href=\"https://discord.gg/7Qu49xxXga\" target=\"_blank\" class=\"fixed bottom-5 right-5 z-50\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 256 256\" class=\"w-12 h-12 rounded-full hover:scale-110 transition-transform duration-300\">
          <g fill=\"none\">
            <rect width=\"256\" height=\"256\" fill=\"#5865f2\" rx=\"60\"/>
              <g clip-path=\"url(#skillIconsDiscord0)\">
                <path fill=\"#fff\" d=\"M197.308 64.797a165 165 0 0 0-40.709-12.627a.62.62 0 0 0-.654.31c-1.758 3.126-3.706 7.206-5.069 10.412c-15.373-2.302-30.666-2.302-45.723 0c-1.364-3.278-3.382-7.286-5.148-10.412a.64.64 0 0 0-.655-.31a164.5 164.5 0 0 0-40.709 12.627a.6.6 0 0 0-.268.23c-25.928 38.736-33.03 76.52-29.546 113.836a.7.7 0 0 0 .26.468c17.106 12.563 33.677 20.19 49.94 25.245a.65.65 0 0 0 .702-.23c3.847-5.254 7.276-10.793 10.217-16.618a.633.633 0 0 0-.347-.881c-5.44-2.064-10.619-4.579-15.601-7.436a.642.642 0 0 1-.063-1.064a86 86 0 0 0 3.098-2.428a.62.62 0 0 1 .646-.088c32.732 14.944 68.167 14.944 100.512 0a.62.62 0 0 1 .655.08a80 80 0 0 0 3.106 2.436a.642.642 0 0 1-.055 1.064a102.6 102.6 0 0 1-15.609 7.428a.64.64 0 0 0-.339.889a133 133 0 0 0 10.208 16.61a.64.64 0 0 0 .702.238c16.342-5.055 32.913-12.682 50.02-25.245a.65.65 0 0 0 .26-.46c4.17-43.141-6.985-80.616-29.571-113.836a.5.5 0 0 0-.26-.238M94.834 156.142c-9.855 0-17.975-9.047-17.975-20.158s7.963-20.158 17.975-20.158c10.09 0 18.131 9.127 17.973 20.158c0 11.111-7.962 20.158-17.973 20.158m66.456 0c-9.855 0-17.974-9.047-17.974-20.158s7.962-20.158 17.974-20.158c10.09 0 18.131 9.127 17.974 20.158c0 11.111-7.884 20.158-17.974 20.158\"/>
              </g>
            <defs>
              <clipPath id=\"skillIconsDiscord0\">
                <path fill=\"#fff\" d=\"M28 51h200v154.93H28z\"/>
              </clipPath>
            </defs>
          </g>
        </svg>
      </a>
      <footer class=\"bg-slate-900 mt-12\" aria-labelledby=\"footer-heading\">
        <h2 id=\"footer-heading\" class=\"sr-only\">Footer</h2>
        <div class=\"max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8\">
          <div class=\"xl:grid xl:grid-cols-3 xl:gap-8\">
            <div class=\"space-y-8 xl:col-span-1\">
              <h2 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">DiceFinder</h2>
              <p class=\"text-gray-500 text-base\">DiceFinder est une plateforme dédiée aux amateurs de jeux de rôle. Créez ou rejoignez des parties, connectez-vous avec d'autres joueurs et vivez des aventures épiques. Simple, intuitif et conçu pour tous les passionnés de Univers !</p>
              <div class=\"flex space-x-6\">
                <a href=\"https://www.reddit.com/r/DiceFinder/\" class=\"text-gray-400 hover:text-gray-500\" target=\"_blank\">
                  <span class=\"sr-only\">Reddit</span>
                  <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" d=\"M10.75 13.04c0-.57-.47-1.04-1.04-1.04s-1.04.47-1.04 1.04a1.04 1.04 0 1 0 2.08 0m3.34 2.37c-.45.45-1.41.61-2.09.61s-1.64-.16-2.09-.61a.26.26 0 0 0-.38 0a.26.26 0 0 0 0 .38c.71.71 2.07.77 2.47.77s1.76-.06 2.47-.77a.26.26 0 0 0 0-.38c-.1-.1-.27-.1-.38 0m.2-3.41c-.57 0-1.04.47-1.04 1.04s.47 1.04 1.04 1.04s1.04-.47 1.04-1.04S14.87 12 14.29 12\"/><path fill=\"currentColor\" d=\"M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2m5.8 11.33c.02.14.03.29.03.44c0 2.24-2.61 4.06-5.83 4.06s-5.83-1.82-5.83-4.06c0-.15.01-.3.03-.44c-.51-.23-.86-.74-.86-1.33a1.455 1.455 0 0 1 2.47-1.05c1.01-.73 2.41-1.19 3.96-1.24l.74-3.49c.01-.07.05-.13.11-.16c.06-.04.13-.05.2-.04l2.42.52a1.04 1.04 0 1 1 .93 1.5c-.56 0-1.01-.44-1.04-.99l-2.17-.46l-.66 3.12c1.53.05 2.9.52 3.9 1.24a1.455 1.455 0 1 1 1.6 2.38\"/></svg>
                </a>

                <a href=\"https://www.facebook.com/DiceFinder\" class=\"text-gray-400 hover:text-gray-500\" target=\"_blank\">
                  <span class=\"sr-only\">Facebook</span>
                  <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" d=\"M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95\"/></svg>
                </a>

                <a href=\"https://x.com/DiceFinder_\" class=\"text-gray-400 hover:text-gray-500\" target=\"_blank\">
                  <span class=\"sr-only\">Twitter</span>
                  <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 16 16\"><path fill=\"currentColor\" d=\"M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07l-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z\"/></svg>
                </a>

                <a href=\"https://discord.gg/wmq4tzNs4z\" class=\"text-gray-400 hover:text-gray-500\" target=\"_blank\">
                  <span class=\"sr-only\">Discord</span>
                  <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" d=\"M19.27 5.33C17.94 4.71 16.5 4.26 15 4a.1.1 0 0 0-.07.03c-.18.33-.39.76-.53 1.09a16.1 16.1 0 0 0-4.8 0c-.14-.34-.35-.76-.54-1.09c-.01-.02-.04-.03-.07-.03c-1.5.26-2.93.71-4.27 1.33c-.01 0-.02.01-.03.02c-2.72 4.07-3.47 8.03-3.1 11.95c0 .02.01.04.03.05c1.8 1.32 3.53 2.12 5.24 2.65c.03.01.06 0 .07-.02c.4-.55.76-1.13 1.07-1.74c.02-.04 0-.08-.04-.09c-.57-.22-1.11-.48-1.64-.78c-.04-.02-.04-.08-.01-.11c.11-.08.22-.17.33-.25c.02-.02.05-.02.07-.01c3.44 1.57 7.15 1.57 10.55 0c.02-.01.05-.01.07.01c.11.09.22.17.33.26c.04.03.04.09-.01.11c-.52.31-1.07.56-1.64.78c-.04.01-.05.06-.04.09c.32.61.68 1.19 1.07 1.74c.03.01.06.02.09.01c1.72-.53 3.45-1.33 5.25-2.65c.02-.01.03-.03.03-.05c.44-4.53-.73-8.46-3.1-11.95c-.01-.01-.02-.02-.04-.02M8.52 14.91c-1.03 0-1.89-.95-1.89-2.12s.84-2.12 1.89-2.12c1.06 0 1.9.96 1.89 2.12c0 1.17-.84 2.12-1.89 2.12m6.97 0c-1.03 0-1.89-.95-1.89-2.12s.84-2.12 1.89-2.12c1.06 0 1.9.96 1.89 2.12c0 1.17-.83 2.12-1.89 2.12\"/></svg>
                </a>
              </div>
            </div>
            <div class=\"mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2\">
              <div class=\"md:grid md:grid-cols-2 md:gap-8\">
                <div>
                  <h3 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">Ressources</h3>
                  <ul role=\"list\" class=\"mt-4 space-y-4\">
                    <li>
                      <a href=\"";
        // line 229
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer_cgv");
        yield "\" class=\"text-base text-gray-500 hover:text-gray-700\"> Conditions Générales de Vente </a>
                    </li>

                    <li>
                      <a href=\"";
        // line 233
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer_cgu");
        yield "\" class=\"text-base text-gray-500 hover:text-gray-700\"> Conditions Générales d'Utilisation </a>
                    </li>

                    <li>
                      <a href=\"";
        // line 237
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer_policy");
        yield "\" class=\"text-base text-gray-500 hover:text-gray-700\"> Politique de Confidentialité </a>
                    </li>
                  </ul>
                </div>
                <div class=\"mt-12 md:mt-0\">
                  <h3 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">Entreprise</h3>
                  <ul role=\"list\" class=\"mt-4 space-y-4\">
                    <li>
                      <a href=\"";
        // line 245
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer_team");
        yield "\" class=\"text-base text-gray-500 hover:text-gray-700\"> Notre équipe </a>
                    </li>
                    <li>
                      <a href=\"";
        // line 248
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer_about");
        yield "\" class=\"text-base text-gray-500 hover:text-gray-700\"> À propos de nous </a>
                    </li>
                    <li>
                      <a href=\"";
        // line 251
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer_faq");
        yield "\" class=\"text-base text-gray-500 hover:text-gray-700\"> FAQ </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class=\"md:grid md:grid-cols-2 md:gap-8\">
                <div>
                  <h3 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">Contact</h3>
                  <ul role=\"list\" class=\"mt-4 space-y-4\">
                    <li>
                        <a href=\"";
        // line 261
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"text-base text-gray-500 hover:text-gray-700\"> Nous contacter </a>
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
setTimeout(function() {
    document.querySelectorAll('.alert-message').forEach(function(element) {
        element.style.transition = 'opacity 0.5s';
        element.style.opacity = 0;
        setTimeout(function() {
            element.remove();
        }, 500);
    });
}, 5000);

document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const userMenuToggle = document.getElementById('user-menu-toggle');
    const userMenu = document.getElementById('user-menu');
    const notificationDropdown = document.getElementById('notificationDropdown');
    const dropdownMenu = document.getElementById('dropdown-menu');
    const notificationBadge = document.getElementById('invitation-notification');
    const notificationsList = document.getElementById('notifications-list');
    const modal = document.getElementById('invitationModal');
    const acceptBtn = document.getElementById('accept-btn');
    const rejectBtn = document.getElementById('reject-btn');
    const closeModalBtn = document.getElementById('close-modal-btn');
    const respondLaterBtn = document.getElementById('respond-later-btn');

    function closeUserMenu() {
        if (userMenu && !userMenu.classList.contains('hidden')) {
            userMenu.classList.add('hidden');
        }
    }

    function closeNotificationMenu() {
        if (dropdownMenu && !dropdownMenu.classList.contains('hidden')) {
            dropdownMenu.classList.add('hidden');
        }
    }

    if (userMenuToggle) {
        userMenuToggle.addEventListener('click', function () {
            closeNotificationMenu();
            if (userMenu) {
                userMenu.classList.toggle('hidden');
            } else {
                console.error('Element \"user-menu\" not found.');
            }
        });
    }

    if (notificationDropdown) {
        notificationDropdown.addEventListener('click', function () {
            closeUserMenu();
            if (dropdownMenu) {
                dropdownMenu.classList.toggle('hidden');
            } else {
                console.error('Element \"dropdown-menu\" not found.');
            }
        });
    }

    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            const expanded = this.getAttribute('aria-expanded') === 'true' || false;
            this.setAttribute('aria-expanded', !expanded);
            menu.classList.toggle('hidden');
        });
    }

    function openInvitationModal(invitation) {
        if (!modal) {
            console.error('Modal not found');
            return;
        }

        const groupTitle = invitation.groupeJDR.title;
        const requesterName = invitation.requestedBy;
        const message = invitation.message || 'Pas de message fourni';
        const initiatedBy = invitation.initiatedBy;

        let modalMessage;
        let modalAction;

        if (initiatedBy === 'owner') {
            modalMessage = `\${requesterName} vous a invité à rejoindre l'univers \"\${groupTitle}\"`;
            modalAction = 'Invitation';
        } else {
            modalMessage = `\${requesterName} veut rejoindre votre univers \"\${groupTitle}\"`;
            modalAction = 'Demande';
        }

        document.getElementById('modal-group-title').textContent = groupTitle;
        document.getElementById('modal-invitation-message').textContent = modalMessage + `\\n\\nMessage: \${message}`;
        document.getElementById('modal-action').textContent = modalAction;
        modal.classList.remove('hidden');

        document.getElementById('accept-btn').onclick = function () {
            handleInvitationResponse(invitation.id, 'accept');
        };

        document.getElementById('reject-btn').onclick = function () {
            handleInvitationResponse(invitation.id, 'refuse');
        };

        respondLaterBtn.onclick = closeModal;
        closeModalBtn.onclick = closeModal;
    }

    function closeModal() {
        modal.classList.add('hidden');
    }

    function handleInvitationResponse(invitationId, response) {
        fetch(`/api/respond_invitation/\${invitationId}`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({ response })
        })
        .then(response => {
            if (response.ok) {
                location.reload();
            } else {
                response.text().then(data => {
                    console.error('Error processing invitation:', data);
                    alert('Error processing the invitation. Please try again.');
                });
            }
        })
        .catch(error => {
            console.error('Error processing the invitation:', error);
        });
    }

    function fetchNotificationsAndInvitations() {
        Promise.all([
            fetch('/api/notifications_pending').then(response => response.json()),
            fetch('/api/invitations_pending').then(response => response.json())
        ])
        .then(([notificationData, invitationData]) => {
            notificationsList.innerHTML = '';
            let totalNotifications = 0;

            const notificationSection = document.createElement('div');
            notificationSection.innerHTML = '<h4 class=\"px-4 py-2 text-sm font-semibold text-gray-500\">Notifications</h4>';
            if (notificationData.notifications.length > 0) {
                notificationData.notifications.slice().reverse().slice(0, 2).forEach(notification => {
                    const notificationItem = document.createElement('div');
                    notificationItem.classList.add('block', 'px-4', 'py-2', 'text-sm', 'text-gray-700', 'hover:bg-gray-100');
                    notificationItem.innerHTML = `<p>\${notification.message}</p><p class=\"text-xs text-gray-500\">\${notification.date}</p>`;
                    notificationSection.appendChild(notificationItem);
                });
                totalNotifications += notificationData.notifications.length;
            } else {
                notificationSection.innerHTML += '<p class=\"px-4 py-2 text-sm text-gray-500\">Pas de nouvelles notifications</p>';
            }
            notificationsList.appendChild(notificationSection);

            const invitationSection = document.createElement('div');
            invitationSection.innerHTML = '<h4 class=\"px-4 py-2 text-sm font-semibold text-gray-500\">Invitations</h4>';
            if (invitationData.invitations.length > 0) {
                invitationData.invitations.slice().reverse().slice(0, 2).forEach(invitation => {
                    const invitationItem = document.createElement('div');
                    invitationItem.classList.add('block', 'px-4', 'py-2', 'text-sm', 'text-gray-700', 'hover:bg-gray-100', 'cursor-pointer');
                    invitationItem.innerHTML = `<p>Invitation pour l'univers \"\${invitation.groupeJDR.title}\"</p>`;
                    invitationItem.onclick = function () {
                        openInvitationModal(invitation);
                    };
                    invitationSection.appendChild(invitationItem);
                });
                totalNotifications += invitationData.invitations.length;
            } else {
                invitationSection.innerHTML += '<p class=\"px-4 py-2 text-sm text-gray-500\">Pas d\\'invitations en attente</p>';
            }
            notificationsList.appendChild(invitationSection);

            const totalCount = notificationData.notifications.length + invitationData.invitations.length;
            if (totalCount > 0) {
                notificationBadge.innerText = totalCount;
                notificationBadge.classList.remove('hidden');
            } else {
                notificationBadge.classList.add('hidden');
            }
        })
        .catch(error => {
            console.error('Error fetching notifications and invitations:', error);
        });
    }

    fetchNotificationsAndInvitations();

    setInterval(fetchNotificationsAndInvitations, 30000);
});
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

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 14
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

        // line 15
        yield "            ";
        yield from $this->unwrap()->yieldBlock('importmap', $context, $blocks);
        // line 16
        yield "        ";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 15
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

    // line 142
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
        return array (  796 => 142,  773 => 15,  762 => 16,  759 => 15,  746 => 14,  724 => 12,  702 => 5,  483 => 261,  470 => 251,  464 => 248,  458 => 245,  447 => 237,  440 => 233,  433 => 229,  345 => 143,  343 => 142,  340 => 141,  331 => 138,  328 => 137,  324 => 136,  321 => 135,  312 => 132,  309 => 131,  305 => 130,  297 => 124,  291 => 122,  286 => 120,  282 => 119,  277 => 118,  275 => 117,  266 => 111,  262 => 110,  255 => 106,  251 => 105,  244 => 101,  240 => 100,  233 => 96,  229 => 95,  223 => 91,  217 => 89,  211 => 86,  207 => 85,  203 => 84,  199 => 82,  193 => 80,  187 => 78,  185 => 77,  181 => 75,  179 => 74,  174 => 71,  168 => 68,  151 => 53,  149 => 52,  139 => 45,  129 => 42,  119 => 39,  109 => 36,  94 => 24,  90 => 23,  82 => 17,  80 => 14,  77 => 13,  75 => 12,  69 => 9,  64 => 7,  59 => 5,  53 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}{% endblock %}</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\">
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('icons/favicon.ico') }}\" />
        <link href=\"https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap\" rel=\"stylesheet\">
        <link href=\"{{ asset('css/style.css') }}\" rel=\"stylesheet\">
        <script src=\"https://cdn.tailwindcss.com\"></script>

        {% block stylesheets %}{% endblock %}

        {% block javascripts %}
            {% block importmap %}{{ importmap('app') }}{% endblock %}
        {% endblock %}
    </head>
    <body class=\"bg-slate-900\">
      <div>
        <header class=\"absolute inset-x-0 top-0 z-50\">
          <nav class=\"flex items-center justify-between p-6 lg:px-8\" aria-label=\"Global\">
            <div class=\"flex lg:flex-1\">
                <a href=\"{{ path('app_home') }}\" class=\"-m-1.5 p-1.5\">
                    <img class=\"h-16 w-auto\" src=\"{{ asset('images/logo-dicefinder.png') }}\" alt=\"DiceFinder Logo\">
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
              <a href=\"{{ path('app_home') }}\" class=\"nav-link text-sm font-semibold leading-6 text-white hover:text-gray-300 {% if app.request.get('_route') == 'app_home' %}active{% endif %}\">
                Accueil
              </a>
              <a href=\"{{ path('app_groupe_j_d_r_index') }}\" class=\"nav-link text-sm font-semibold leading-6 text-white hover:text-gray-300 {% if app.request.get('_route') == 'app_groupe_j_d_r_index' %}active{% endif %}\">
                Les Univers
              </a>
              <a href=\"{{ path('app_my_jdr') }}\" class=\"nav-link text-sm font-semibold leading-6 text-white hover:text-gray-300 {% if app.request.get('_route') == 'app_my_jdr' %}active{% endif %}\">
                Mes Parties
              </a>
              <a href=\"{{ path('app_contact') }}\" class=\"nav-link text-sm font-semibold leading-6 text-white hover:text-gray-300\">
                Nous Contacter
              </a>
            </div>
            <div class=\"hidden lg:flex lg:flex-1 lg:justify-end\">
              <div class=\"relative flex items-center\">
                  <div class=\"relative w-max mx-auto mr-10\">
                    {% if app.user %}
                      <button id=\"notificationDropdown\" type=\"button\" class=\"relative w-12 h-12 flex items-center justify-center text-white border-none outline-none bg-gray-500 rounded-full transition duration-300 ease-in-out transform hover:scale-110 hover:bg-gray-700 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:outline-none shadow-lg\">
                          <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"18px\" class=\"text-gray-100 cursor-pointer fill-current\" viewBox=\"0 0 371.263 371.263\">
                              <path
                                  d=\"M305.402 234.794v-70.54c0-52.396-33.533-98.085-79.702-115.151.539-2.695.838-5.449.838-8.204C226.539 18.324 208.215 0 185.64 0s-40.899 18.324-40.899 40.899c0 2.695.299 5.389.778 7.964-15.868 5.629-30.539 14.551-43.054 26.647-23.593 22.755-36.587 53.354-36.587 86.169v73.115c0 2.575-2.096 4.731-4.731 4.731-22.096 0-40.959 16.647-42.995 37.845-1.138 11.797 2.755 23.533 10.719 32.276 7.904 8.683 19.222 13.713 31.018 13.713h72.217c2.994 26.887 25.869 47.905 53.534 47.905s50.54-21.018 53.534-47.905h72.217c11.797 0 23.114-5.03 31.018-13.713 7.904-8.743 11.797-20.479 10.719-32.276-2.036-21.198-20.958-37.845-42.995-37.845a4.704 4.704 0 0 1-4.731-4.731zM185.64 23.952c9.341 0 16.946 7.605 16.946 16.946 0 .778-.12 1.497-.24 2.275-4.072-.599-8.204-1.018-12.336-1.138-7.126-.24-14.132.24-21.078 1.198-.12-.778-.24-1.497-.24-2.275.002-9.401 7.607-17.006 16.948-17.006zm0 323.358c-14.431 0-26.527-10.3-29.342-23.952h58.683c-2.813 13.653-14.909 23.952-29.341 23.952zm143.655-67.665c.479 5.15-1.138 10.12-4.551 13.892-3.533 3.773-8.204 5.868-13.353 5.868H59.89c-5.15 0-9.82-2.096-13.294-5.868-3.473-3.772-5.09-8.743-4.611-13.892.838-9.042 9.282-16.168 19.162-16.168 15.809 0 28.683-12.874 28.683-28.683v-73.115c0-26.228 10.419-50.719 29.282-68.923 18.024-17.425 41.498-26.887 66.528-26.887 1.198 0 2.335 0 3.533.06 50.839 1.796 92.277 45.929 92.277 98.325v70.54c0 15.809 12.874 28.683 28.683 28.683 9.88 0 18.264 7.126 19.162 16.168z\"
                              />
                          </svg>
                          <div id=\"invitation-notification\" class=\"absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 hidden\">
                            0
                          </div>
                      </button>
                      <div id=\"dropdown-menu\" class=\"hidden absolute right-0 w-64 mt-2 origin-top-right bg-white rounded-md shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none\">
                          <div class=\"py-1\" role=\"none\">
                              <p id=\"no-notifications-msg\" class=\"px-4 py-2 text-sm text-gray-700 hidden\">Pas de nouvelles notifications</p>
                              <div id=\"notifications-list\"></div>
                          </div>
                          <a href=\"{{ path('app_notifications_index') }}\" class=\"block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100\">Voir toutes les notifications</a>
                      </div>
                    {% endif %}
                  </div>
              </div>
              <div class=\"relative ml-3\">
                  {% if app.user %}
                      <button id=\"user-menu-toggle\" type=\"button\" class=\"flex items-center justify-center w-12 h-12 rounded-full bg-gray-500 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-300 ease-in-out transform hover:scale-110 hover:bg-gray-700 shadow-lg\" aria-expanded=\"false\" aria-haspopup=\"true\">
                          <span class=\"sr-only\">Open user menu</span>
                          {% if app.user.avatar %}
                              <img class=\"h-10 w-10 rounded-full object-cover\" src=\"{{ asset('uploads/avatars/' ~ app.user.avatar) }}\" alt=\"Profile photo\">
                          {% else %}
                              <img class=\"h-10 w-10 rounded-full object-cover\" src=\"{{ asset('images/default-avatar.png') }}\" alt=\"Default profile photo\">
                          {% endif %}
                      </button>
                      <div id=\"user-menu\" class=\"hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none\" role=\"menu\" aria-orientation=\"vertical\" aria-labelledby=\"user-menu-toggle\" tabindex=\"-1\">
                          <a href=\"{{ path('app_profile') }}\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-0\">Votre Profil</a>
                          <a href=\"{{ path('app_profile_edit') }}\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-1\">Paramètre</a>
                          <a href=\"{{ path('app_logout') }}\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-2\">Déconnexion</a>
                      </div>
                  {% else %}
                      <a href=\"{{ path('app_login') }}\" class=\"text-sm font-semibold leading-6 text-white\">Connexion <span aria-hidden=\"true\">&rarr;</span></a>
                  {% endif %}
              </div>
          </nav>
          <div class=\"lg:hidden hidden backdrop-blur-lg bg-slate-900 bg-opacity-80\" id=\"mobile-menu\">
            <div class=\"space-y-1 pt-2 pb-3\">
              <a href=\"{{ path('app_home') }}\"
                class=\"block border-l-4 {{ app.request.get('_route') == 'app_home' ? 'border-indigo-500 bg-indigo-50 text-indigo-700' : 'border-transparent text-white hover:bg-gray-500' }} py-2 pl-3 pr-4 text-base font-medium\">
                Accueil
              </a>

              <a href=\"{{ path('app_groupe_j_d_r_index') }}\"
                class=\"block border-l-4 {{ app.request.get('_route') == 'app_groupe_j_d_r_index' ? 'border-indigo-500 bg-indigo-50 text-indigo-700' : 'border-transparent text-white hover:bg-gray-500' }} py-2 pl-3 pr-4 text-base font-medium\">
                Les Univers
              </a>

              <a href=\"{{ path('app_my_jdr') }}\"
                class=\"block border-l-4 {{ app.request.get('_route') == 'app_my_jdr' ? 'border-indigo-500 bg-indigo-50 text-indigo-700' : 'border-transparent text-white hover:bg-gray-500' }} py-2 pl-3 pr-4 text-base font-medium\">
                Mes Parties
              </a>

              <a href=\"{{ path('app_contact') }}\"
                class=\"block border-l-4 {{ app.request.get('_route') == 'app_contact' ? 'border-indigo-500 bg-indigo-50 text-indigo-700' : 'border-transparent text-white hover:bg-gray-500' }} py-2 pl-3 pr-4 text-base font-medium\">
                Nous Contacter
              </a>
            </div>
            <div class=\"border-t border-gray-200 pt-4 pb-3\">
              <div class=\"mt-3 space-y-1\">
                {% if app.user %}
                  <a href=\"{{ path('app_profile') }}\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Votre Profil</a>
                  <a href=\"{{ path('app_profile_edit') }}\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Paramètre</a>
                  <a href=\"{{ path('app_logout') }}\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Déconnexion</a>
                {% else %}
                  <a href=\"{{ path('app_login') }}\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Connexion</a>
                {% endif %}
              </div>
            </div>
          </div>
        </header>
      </div>
      <div class=\"container mx-auto px-4 py-8 mt-4 sm:mt-16\">
          {% for message in app.flashes('success') %}
              <div class=\"alert-message bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6\" role=\"alert\">
                  {{ message }}
              </div>
          {% endfor %}
          
          {% for message in app.flashes('error') %}
              <div class=\"alert-message bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6\" role=\"alert\">
                  {{ message }}
              </div>
          {% endfor %}

          {% block body %}{% endblock %}
      </div>
      <div id=\"invitationModal\" class=\"fixed z-10 inset-0 overflow-y-auto hidden\" aria-labelledby=\"modal-title\" role=\"dialog\" aria-modal=\"true\">
          <div class=\"flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0\">
              <div class=\"fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity\" aria-hidden=\"true\"></div>
              <span class=\"hidden sm:inline-block sm:align-middle sm:h-screen\" aria-hidden=\"true\">&#8203;</span>
              <div class=\"inline-block align-bottom bg-white rounded-lg px-4 pt-5 pb-4 text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full fade-in\">
                  
                  <button id=\"close-modal-btn\" class=\"absolute top-0 right-0 p-2 text-gray-400 hover:text-gray-600\">
                      &times;
                  </button>

                  <h3 class=\"text-lg leading-6 font-medium text-gray-900\" id=\"modal-title\">
                      <span id=\"modal-action\"></span> pour rejoindre <span id=\"modal-group-title\"></span>
                  </h3>

                  <div class=\"mt-2\">
                      <p class=\"text-sm text-gray-500\"><span id=\"modal-invitation-message\"></span></p>
                  </div>

                  <div class=\"mt-5 sm:mt-6 sm:grid sm:grid-cols-2 sm:gap-3 sm:grid-flow-row-dense\">
                      <button id=\"accept-btn\" type=\"button\" class=\"w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-green-600 text-base font-medium text-white hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 sm:col-start-2 sm:text-sm\">
                          Accepter
                      </button>
                      <button id=\"reject-btn\" type=\"button\" class=\"mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:mt-0 sm:col-start-1 sm:text-sm\">
                          Refuser
                      </button>

                      <button id=\"respond-later-btn\" type=\"button\" class=\"mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-gray-600 text-base font-medium text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 sm:col-span-2 sm:text-sm\">
                          Répondre plus tard
                      </button>
                  </div>
              </div>
          </div>
      </div>


      <a href=\"https://discord.gg/7Qu49xxXga\" target=\"_blank\" class=\"fixed bottom-5 right-5 z-50\">
        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 256 256\" class=\"w-12 h-12 rounded-full hover:scale-110 transition-transform duration-300\">
          <g fill=\"none\">
            <rect width=\"256\" height=\"256\" fill=\"#5865f2\" rx=\"60\"/>
              <g clip-path=\"url(#skillIconsDiscord0)\">
                <path fill=\"#fff\" d=\"M197.308 64.797a165 165 0 0 0-40.709-12.627a.62.62 0 0 0-.654.31c-1.758 3.126-3.706 7.206-5.069 10.412c-15.373-2.302-30.666-2.302-45.723 0c-1.364-3.278-3.382-7.286-5.148-10.412a.64.64 0 0 0-.655-.31a164.5 164.5 0 0 0-40.709 12.627a.6.6 0 0 0-.268.23c-25.928 38.736-33.03 76.52-29.546 113.836a.7.7 0 0 0 .26.468c17.106 12.563 33.677 20.19 49.94 25.245a.65.65 0 0 0 .702-.23c3.847-5.254 7.276-10.793 10.217-16.618a.633.633 0 0 0-.347-.881c-5.44-2.064-10.619-4.579-15.601-7.436a.642.642 0 0 1-.063-1.064a86 86 0 0 0 3.098-2.428a.62.62 0 0 1 .646-.088c32.732 14.944 68.167 14.944 100.512 0a.62.62 0 0 1 .655.08a80 80 0 0 0 3.106 2.436a.642.642 0 0 1-.055 1.064a102.6 102.6 0 0 1-15.609 7.428a.64.64 0 0 0-.339.889a133 133 0 0 0 10.208 16.61a.64.64 0 0 0 .702.238c16.342-5.055 32.913-12.682 50.02-25.245a.65.65 0 0 0 .26-.46c4.17-43.141-6.985-80.616-29.571-113.836a.5.5 0 0 0-.26-.238M94.834 156.142c-9.855 0-17.975-9.047-17.975-20.158s7.963-20.158 17.975-20.158c10.09 0 18.131 9.127 17.973 20.158c0 11.111-7.962 20.158-17.973 20.158m66.456 0c-9.855 0-17.974-9.047-17.974-20.158s7.962-20.158 17.974-20.158c10.09 0 18.131 9.127 17.974 20.158c0 11.111-7.884 20.158-17.974 20.158\"/>
              </g>
            <defs>
              <clipPath id=\"skillIconsDiscord0\">
                <path fill=\"#fff\" d=\"M28 51h200v154.93H28z\"/>
              </clipPath>
            </defs>
          </g>
        </svg>
      </a>
      <footer class=\"bg-slate-900 mt-12\" aria-labelledby=\"footer-heading\">
        <h2 id=\"footer-heading\" class=\"sr-only\">Footer</h2>
        <div class=\"max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8\">
          <div class=\"xl:grid xl:grid-cols-3 xl:gap-8\">
            <div class=\"space-y-8 xl:col-span-1\">
              <h2 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">DiceFinder</h2>
              <p class=\"text-gray-500 text-base\">DiceFinder est une plateforme dédiée aux amateurs de jeux de rôle. Créez ou rejoignez des parties, connectez-vous avec d'autres joueurs et vivez des aventures épiques. Simple, intuitif et conçu pour tous les passionnés de Univers !</p>
              <div class=\"flex space-x-6\">
                <a href=\"https://www.reddit.com/r/DiceFinder/\" class=\"text-gray-400 hover:text-gray-500\" target=\"_blank\">
                  <span class=\"sr-only\">Reddit</span>
                  <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" d=\"M10.75 13.04c0-.57-.47-1.04-1.04-1.04s-1.04.47-1.04 1.04a1.04 1.04 0 1 0 2.08 0m3.34 2.37c-.45.45-1.41.61-2.09.61s-1.64-.16-2.09-.61a.26.26 0 0 0-.38 0a.26.26 0 0 0 0 .38c.71.71 2.07.77 2.47.77s1.76-.06 2.47-.77a.26.26 0 0 0 0-.38c-.1-.1-.27-.1-.38 0m.2-3.41c-.57 0-1.04.47-1.04 1.04s.47 1.04 1.04 1.04s1.04-.47 1.04-1.04S14.87 12 14.29 12\"/><path fill=\"currentColor\" d=\"M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10s10-4.48 10-10S17.52 2 12 2m5.8 11.33c.02.14.03.29.03.44c0 2.24-2.61 4.06-5.83 4.06s-5.83-1.82-5.83-4.06c0-.15.01-.3.03-.44c-.51-.23-.86-.74-.86-1.33a1.455 1.455 0 0 1 2.47-1.05c1.01-.73 2.41-1.19 3.96-1.24l.74-3.49c.01-.07.05-.13.11-.16c.06-.04.13-.05.2-.04l2.42.52a1.04 1.04 0 1 1 .93 1.5c-.56 0-1.01-.44-1.04-.99l-2.17-.46l-.66 3.12c1.53.05 2.9.52 3.9 1.24a1.455 1.455 0 1 1 1.6 2.38\"/></svg>
                </a>

                <a href=\"https://www.facebook.com/DiceFinder\" class=\"text-gray-400 hover:text-gray-500\" target=\"_blank\">
                  <span class=\"sr-only\">Facebook</span>
                  <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" d=\"M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95\"/></svg>
                </a>

                <a href=\"https://x.com/DiceFinder_\" class=\"text-gray-400 hover:text-gray-500\" target=\"_blank\">
                  <span class=\"sr-only\">Twitter</span>
                  <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 16 16\"><path fill=\"currentColor\" d=\"M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07l-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z\"/></svg>
                </a>

                <a href=\"https://discord.gg/wmq4tzNs4z\" class=\"text-gray-400 hover:text-gray-500\" target=\"_blank\">
                  <span class=\"sr-only\">Discord</span>
                  <svg class=\"h-6 w-6\" xmlns=\"http://www.w3.org/2000/svg\" width=\"5rem\" height=\"5rem\" viewBox=\"0 0 24 24\"><path fill=\"currentColor\" d=\"M19.27 5.33C17.94 4.71 16.5 4.26 15 4a.1.1 0 0 0-.07.03c-.18.33-.39.76-.53 1.09a16.1 16.1 0 0 0-4.8 0c-.14-.34-.35-.76-.54-1.09c-.01-.02-.04-.03-.07-.03c-1.5.26-2.93.71-4.27 1.33c-.01 0-.02.01-.03.02c-2.72 4.07-3.47 8.03-3.1 11.95c0 .02.01.04.03.05c1.8 1.32 3.53 2.12 5.24 2.65c.03.01.06 0 .07-.02c.4-.55.76-1.13 1.07-1.74c.02-.04 0-.08-.04-.09c-.57-.22-1.11-.48-1.64-.78c-.04-.02-.04-.08-.01-.11c.11-.08.22-.17.33-.25c.02-.02.05-.02.07-.01c3.44 1.57 7.15 1.57 10.55 0c.02-.01.05-.01.07.01c.11.09.22.17.33.26c.04.03.04.09-.01.11c-.52.31-1.07.56-1.64.78c-.04.01-.05.06-.04.09c.32.61.68 1.19 1.07 1.74c.03.01.06.02.09.01c1.72-.53 3.45-1.33 5.25-2.65c.02-.01.03-.03.03-.05c.44-4.53-.73-8.46-3.1-11.95c-.01-.01-.02-.02-.04-.02M8.52 14.91c-1.03 0-1.89-.95-1.89-2.12s.84-2.12 1.89-2.12c1.06 0 1.9.96 1.89 2.12c0 1.17-.84 2.12-1.89 2.12m6.97 0c-1.03 0-1.89-.95-1.89-2.12s.84-2.12 1.89-2.12c1.06 0 1.9.96 1.89 2.12c0 1.17-.83 2.12-1.89 2.12\"/></svg>
                </a>
              </div>
            </div>
            <div class=\"mt-12 grid grid-cols-2 gap-8 xl:mt-0 xl:col-span-2\">
              <div class=\"md:grid md:grid-cols-2 md:gap-8\">
                <div>
                  <h3 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">Ressources</h3>
                  <ul role=\"list\" class=\"mt-4 space-y-4\">
                    <li>
                      <a href=\"{{ path('app_footer_cgv') }}\" class=\"text-base text-gray-500 hover:text-gray-700\"> Conditions Générales de Vente </a>
                    </li>

                    <li>
                      <a href=\"{{ path('app_footer_cgu') }}\" class=\"text-base text-gray-500 hover:text-gray-700\"> Conditions Générales d'Utilisation </a>
                    </li>

                    <li>
                      <a href=\"{{ path('app_footer_policy') }}\" class=\"text-base text-gray-500 hover:text-gray-700\"> Politique de Confidentialité </a>
                    </li>
                  </ul>
                </div>
                <div class=\"mt-12 md:mt-0\">
                  <h3 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">Entreprise</h3>
                  <ul role=\"list\" class=\"mt-4 space-y-4\">
                    <li>
                      <a href=\"{{ path('app_footer_team') }}\" class=\"text-base text-gray-500 hover:text-gray-700\"> Notre équipe </a>
                    </li>
                    <li>
                      <a href=\"{{ path('app_footer_about') }}\" class=\"text-base text-gray-500 hover:text-gray-700\"> À propos de nous </a>
                    </li>
                    <li>
                      <a href=\"{{ path('app_footer_faq') }}\" class=\"text-base text-gray-500 hover:text-gray-700\"> FAQ </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class=\"md:grid md:grid-cols-2 md:gap-8\">
                <div>
                  <h3 class=\"text-sm font-semibold text-gray-400 tracking-wider uppercase\">Contact</h3>
                  <ul role=\"list\" class=\"mt-4 space-y-4\">
                    <li>
                        <a href=\"{{ path('app_contact') }}\" class=\"text-base text-gray-500 hover:text-gray-700\"> Nous contacter </a>
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
setTimeout(function() {
    document.querySelectorAll('.alert-message').forEach(function(element) {
        element.style.transition = 'opacity 0.5s';
        element.style.opacity = 0;
        setTimeout(function() {
            element.remove();
        }, 500);
    });
}, 5000);

document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const userMenuToggle = document.getElementById('user-menu-toggle');
    const userMenu = document.getElementById('user-menu');
    const notificationDropdown = document.getElementById('notificationDropdown');
    const dropdownMenu = document.getElementById('dropdown-menu');
    const notificationBadge = document.getElementById('invitation-notification');
    const notificationsList = document.getElementById('notifications-list');
    const modal = document.getElementById('invitationModal');
    const acceptBtn = document.getElementById('accept-btn');
    const rejectBtn = document.getElementById('reject-btn');
    const closeModalBtn = document.getElementById('close-modal-btn');
    const respondLaterBtn = document.getElementById('respond-later-btn');

    function closeUserMenu() {
        if (userMenu && !userMenu.classList.contains('hidden')) {
            userMenu.classList.add('hidden');
        }
    }

    function closeNotificationMenu() {
        if (dropdownMenu && !dropdownMenu.classList.contains('hidden')) {
            dropdownMenu.classList.add('hidden');
        }
    }

    if (userMenuToggle) {
        userMenuToggle.addEventListener('click', function () {
            closeNotificationMenu();
            if (userMenu) {
                userMenu.classList.toggle('hidden');
            } else {
                console.error('Element \"user-menu\" not found.');
            }
        });
    }

    if (notificationDropdown) {
        notificationDropdown.addEventListener('click', function () {
            closeUserMenu();
            if (dropdownMenu) {
                dropdownMenu.classList.toggle('hidden');
            } else {
                console.error('Element \"dropdown-menu\" not found.');
            }
        });
    }

    if (mobileMenuToggle) {
        mobileMenuToggle.addEventListener('click', function () {
            const menu = document.getElementById('mobile-menu');
            const expanded = this.getAttribute('aria-expanded') === 'true' || false;
            this.setAttribute('aria-expanded', !expanded);
            menu.classList.toggle('hidden');
        });
    }

    function openInvitationModal(invitation) {
        if (!modal) {
            console.error('Modal not found');
            return;
        }

        const groupTitle = invitation.groupeJDR.title;
        const requesterName = invitation.requestedBy;
        const message = invitation.message || 'Pas de message fourni';
        const initiatedBy = invitation.initiatedBy;

        let modalMessage;
        let modalAction;

        if (initiatedBy === 'owner') {
            modalMessage = `\${requesterName} vous a invité à rejoindre l'univers \"\${groupTitle}\"`;
            modalAction = 'Invitation';
        } else {
            modalMessage = `\${requesterName} veut rejoindre votre univers \"\${groupTitle}\"`;
            modalAction = 'Demande';
        }

        document.getElementById('modal-group-title').textContent = groupTitle;
        document.getElementById('modal-invitation-message').textContent = modalMessage + `\\n\\nMessage: \${message}`;
        document.getElementById('modal-action').textContent = modalAction;
        modal.classList.remove('hidden');

        document.getElementById('accept-btn').onclick = function () {
            handleInvitationResponse(invitation.id, 'accept');
        };

        document.getElementById('reject-btn').onclick = function () {
            handleInvitationResponse(invitation.id, 'refuse');
        };

        respondLaterBtn.onclick = closeModal;
        closeModalBtn.onclick = closeModal;
    }

    function closeModal() {
        modal.classList.add('hidden');
    }

    function handleInvitationResponse(invitationId, response) {
        fetch(`/api/respond_invitation/\${invitationId}`, {
            method: 'POST',
            headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
            body: new URLSearchParams({ response })
        })
        .then(response => {
            if (response.ok) {
                location.reload();
            } else {
                response.text().then(data => {
                    console.error('Error processing invitation:', data);
                    alert('Error processing the invitation. Please try again.');
                });
            }
        })
        .catch(error => {
            console.error('Error processing the invitation:', error);
        });
    }

    function fetchNotificationsAndInvitations() {
        Promise.all([
            fetch('/api/notifications_pending').then(response => response.json()),
            fetch('/api/invitations_pending').then(response => response.json())
        ])
        .then(([notificationData, invitationData]) => {
            notificationsList.innerHTML = '';
            let totalNotifications = 0;

            const notificationSection = document.createElement('div');
            notificationSection.innerHTML = '<h4 class=\"px-4 py-2 text-sm font-semibold text-gray-500\">Notifications</h4>';
            if (notificationData.notifications.length > 0) {
                notificationData.notifications.slice().reverse().slice(0, 2).forEach(notification => {
                    const notificationItem = document.createElement('div');
                    notificationItem.classList.add('block', 'px-4', 'py-2', 'text-sm', 'text-gray-700', 'hover:bg-gray-100');
                    notificationItem.innerHTML = `<p>\${notification.message}</p><p class=\"text-xs text-gray-500\">\${notification.date}</p>`;
                    notificationSection.appendChild(notificationItem);
                });
                totalNotifications += notificationData.notifications.length;
            } else {
                notificationSection.innerHTML += '<p class=\"px-4 py-2 text-sm text-gray-500\">Pas de nouvelles notifications</p>';
            }
            notificationsList.appendChild(notificationSection);

            const invitationSection = document.createElement('div');
            invitationSection.innerHTML = '<h4 class=\"px-4 py-2 text-sm font-semibold text-gray-500\">Invitations</h4>';
            if (invitationData.invitations.length > 0) {
                invitationData.invitations.slice().reverse().slice(0, 2).forEach(invitation => {
                    const invitationItem = document.createElement('div');
                    invitationItem.classList.add('block', 'px-4', 'py-2', 'text-sm', 'text-gray-700', 'hover:bg-gray-100', 'cursor-pointer');
                    invitationItem.innerHTML = `<p>Invitation pour l'univers \"\${invitation.groupeJDR.title}\"</p>`;
                    invitationItem.onclick = function () {
                        openInvitationModal(invitation);
                    };
                    invitationSection.appendChild(invitationItem);
                });
                totalNotifications += invitationData.invitations.length;
            } else {
                invitationSection.innerHTML += '<p class=\"px-4 py-2 text-sm text-gray-500\">Pas d\\'invitations en attente</p>';
            }
            notificationsList.appendChild(invitationSection);

            const totalCount = notificationData.notifications.length + invitationData.invitations.length;
            if (totalCount > 0) {
                notificationBadge.innerText = totalCount;
                notificationBadge.classList.remove('hidden');
            } else {
                notificationBadge.classList.add('hidden');
            }
        })
        .catch(error => {
            console.error('Error fetching notifications and invitations:', error);
        });
    }

    fetchNotificationsAndInvitations();

    setInterval(fetchNotificationsAndInvitations, 30000);
});
</script>
</html>
", "base.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\base.html.twig");
    }
}