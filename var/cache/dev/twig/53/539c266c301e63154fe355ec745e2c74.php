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
        <link href=\"https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css\" rel=\"stylesheet\" />

        ";
        // line 13
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        // line 14
        yield "
        ";
        // line 15
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 18
        yield "    </head>

<style>
    .glassmorphism {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    }

    .glassmorphism-acceptance {
          background: rgba(34, 197, 94, 0.1);
          backdrop-filter: blur(20px);
          border-radius: 20px;
          border: 1px solid rgba(34, 197, 94, 0.3);
          box-shadow: 0 4px 30px rgba(0, 128, 0, 0.1);
          transition: transform 0.3s ease-in-out;
      }
      .glassmorphism-acceptance:hover {
          box-shadow: 0 12px 24px rgba(0, 128, 0, 0.3);
      }

      .glassmorphism-player-left {
          background: rgba(220, 38, 38, 0.1);
          backdrop-filter: blur(20px);
          border-radius: 20px;
          border: 1px solid rgba(220, 38, 38, 0.3);
          box-shadow: 0 4px 30px rgba(220, 38, 38, 0.1);
          transition: transform 0.3s ease-in-out;
      }
      .glassmorphism-player-left:hover {
          box-shadow: 0 12px 24px rgba(220, 38, 38, 0.3);
      }

      .glassmorphism-invitation-accepted {
          background: rgba(79, 70, 229, 0.1);
          backdrop-filter: blur(20px);
          border-radius: 20px;
          border: 1px solid rgba(79, 70, 229, 0.3);
          box-shadow: 0 4px 30px rgba(79, 70, 229, 0.1);
          transition: transform 0.3s ease-in-out;
      }
      .glassmorphism-invitation-accepted:hover {
          box-shadow: 0 12px 24px rgba(79, 70, 229, 0.3);
      }

      .glassmorphism-warning {
          background: rgba(234, 179, 8, 0.1);
          backdrop-filter: blur(20px);
          border-radius: 20px;
          border: 1px solid rgba(234, 179, 8, 0.3);
          box-shadow: 0 4px 30px rgba(234, 179, 8, 0.1);
          transition: transform 0.3s ease-in-out;
      }
      .glassmorphism-warning:hover {
          box-shadow: 0 12px 24px rgba(234, 179, 8, 0.3);
      }

      .jdr-avatar {
          width: 40px;
          height: 40px;
          border-radius: 50%;
          object-fit: cover;
          margin-right: 10px;
          border: 2px solid white;
      }

      .button-hover {
          transition: transform 0.3s ease, background-color 0.3s ease;
      }

      .button-hover:hover {
          background-color: rgba(255, 255, 255, 0.2);
      }

      .rounded-full {
          border-radius: 9999px;
      }

      #dropdown-menu {
          width: 24rem;
          background: rgba(255, 255, 255, 0.1);
          backdrop-filter: blur(20px);
          border-radius: 16px;
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
          transition: opacity 0.3s ease, transform 0.3s ease;
          z-index: 50;
      }

      #dropdown-menu:hover {
      }

      #dropdown-menu .notification-item {
          transition: background-color 0.3s ease;
      }

      #dropdown-menu:hover {
      }
</style>

    <body class=\"bg-slate-900\">
      <div>
        <header class=\"absolute inset-x-0 top-0 z-50\">
          <nav class=\"flex items-center justify-between p-6 lg:px-8\" aria-label=\"Global\">
            <div class=\"flex lg:flex-1\">
                <a href=\"";
        // line 124
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"-m-1.5 p-1.5\">
                    <img class=\"h-16 w-auto\" src=\"";
        // line 125
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
        // line 137
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"nav-link text-sm font-semibold leading-6 text-white hover:text-gray-300 ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 137, $this->source); })()), "request", [], "any", false, false, false, 137), "get", ["_route"], "method", false, false, false, 137) == "app_home")) {
            yield "active";
        }
        yield "\">
                Accueil
              </a>
              <a href=\"";
        // line 140
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"nav-link text-sm font-semibold leading-6 text-white hover:text-gray-300 ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 140, $this->source); })()), "request", [], "any", false, false, false, 140), "get", ["_route"], "method", false, false, false, 140) == "app_groupe_j_d_r_index")) {
            yield "active";
        }
        yield "\">
                Les Univers
              </a>
              <a href=\"";
        // line 143
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_jdr");
        yield "\" class=\"nav-link text-sm font-semibold leading-6 text-white hover:text-gray-300 ";
        if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 143, $this->source); })()), "request", [], "any", false, false, false, 143), "get", ["_route"], "method", false, false, false, 143) == "app_my_jdr")) {
            yield "active";
        }
        yield "\">
                Mes Parties
              </a>
              <a href=\"";
        // line 146
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\" class=\"nav-link text-sm font-semibold leading-6 text-white hover:text-gray-300\">
                Nous Contacter
              </a>
            </div>
            <div class=\"hidden lg:flex lg:flex-1 lg:justify-end\">
              <div class=\"relative flex items-center\">
                  <div class=\"relative w-max mx-auto mr-10\">
                      ";
        // line 153
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 153, $this->source); })()), "user", [], "any", false, false, false, 153)) {
            // line 154
            yield "                          <button id=\"notificationDropdown\" type=\"button\" class=\"relative w-12 h-12 flex items-center justify-center text-white border-none outline-none bg-gray-500 rounded-full transition duration-300 ease-in-out transform hover:scale-110 hover:bg-gray-800 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:outline-none shadow-lg\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0\" />
                              </svg>
                              <div id=\"invitation-notification\" class=\"absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 ";
            // line 158
            yield ((((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 158, $this->source); })())) + Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 158, $this->source); })()))) == 0)) ? ("hidden") : (""));
            yield "\">
                                  ";
            // line 159
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 159, $this->source); })())) + Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 159, $this->source); })()))), "html", null, true);
            yield "
                              </div>
                          </button>

                          <div id=\"dropdown-menu\" class=\"hidden absolute right-0 w-96 mt-2 origin-top-right glassmorphism shadow-lg focus:outline-none z-50\">
                              <div class=\"py-4 px-4\">
                                  <h4 class=\"text-lg font-semibold text-white mb-2\">Notifications</h4>
                                  <div id=\"notifications-list\">
                                      ";
            // line 167
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 167, $this->source); })())) > 0)) {
                // line 168
                yield "                                          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 168, $this->source); })())), 0, 2));
                foreach ($context['_seq'] as $context["_key"] => $context["notification"]) {
                    // line 169
                    yield "                                              <div class=\"notification-item flex items-center px-4 py-4 hover:bg-gray-800 rounded-md cursor-pointer mb-2\">
                                                  ";
                    // line 170
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "groupeJDR", [], "any", false, false, false, 170) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "groupeJDR", [], "any", false, false, false, 170), "picture", [], "any", false, false, false, 170))) {
                        // line 171
                        yield "                                                      <img class=\"w-10 h-10 rounded-full object-cover mr-3\" src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "groupeJDR", [], "any", false, false, false, 171), "picture", [], "any", false, false, false, 171))), "html", null, true);
                        yield "\" alt=\"JDR Picture\">
                                                  ";
                    } else {
                        // line 173
                        yield "                                                      <img class=\"w-10 h-10 rounded-full object-cover mr-3\" src=\"";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-jdr-avatar.png"), "html", null, true);
                        yield "\" alt=\"Default JDR Picture\">
                                                  ";
                    }
                    // line 175
                    yield "                                                  <div>
                                                      <p class=\"text-sm font-medium text-white\">";
                    // line 176
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "message", [], "any", false, false, false, 176), "html", null, true);
                    yield "</p>
                                                      <p class=\"text-xs text-gray-400\">";
                    // line 177
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["notification"], "createdAt", [], "any", false, false, false, 177), "d/m/Y H:i"), "html", null, true);
                    yield "</p>
                                                  </div>
                                              </div>
                                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['notification'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 181
                yield "                                      ";
            } else {
                // line 182
                yield "                                          <p class=\"px-4 py-2 text-sm text-gray-400\">Pas de nouvelles notifications</p>
                                      ";
            }
            // line 184
            yield "                                  </div>
                                  <h4 class=\"text-lg font-semibold text-white mb-2\">Invitations</h4>
                                  <div id=\"invitations-list\">
                                      ";
            // line 187
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 187, $this->source); })())) > 0)) {
                // line 188
                yield "                                          ";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::reverse($this->env->getCharset(), (isset($context["invitations"]) || array_key_exists("invitations", $context) ? $context["invitations"] : (function () { throw new RuntimeError('Variable "invitations" does not exist.', 188, $this->source); })())), 0, 2));
                foreach ($context['_seq'] as $context["_key"] => $context["invitation"]) {
                    // line 189
                    yield "                                              <div class=\"notification-item flex items-center px-4 py-4 hover:bg-gray-800 rounded-md cursor-pointer mb-2 invitation-item\" 
                                                  data-title=\"";
                    // line 190
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "groupeJDR", [], "any", false, false, false, 190), "title", [], "any", false, false, false, 190), "html", null, true);
                    yield "\" 
                                                  data-inviter=\"";
                    // line 191
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "requestedBy", [], "any", false, false, false, 191), "username", [], "any", false, false, false, 191), "html", null, true);
                    yield "\" 
                                                  data-message=\"Vous avez été invité à rejoindre l'univers ";
                    // line 192
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "groupeJDR", [], "any", false, false, false, 192), "title", [], "any", false, false, false, 192), "html", null, true);
                    yield ".\"
                                                  data-invitation-id=\"";
                    // line 193
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "id", [], "any", false, false, false, 193), "html", null, true);
                    yield "\">
                                                  <img class=\"w-10 h-10 rounded-full object-cover mr-3\" src=\"";
                    // line 194
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "groupeJDR", [], "any", false, false, false, 194), "picture", [], "any", false, false, false, 194)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/images-jdr/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "groupeJDR", [], "any", false, false, false, 194), "picture", [], "any", false, false, false, 194)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-jdr-avatar.png"))), "html", null, true);
                    yield "\" alt=\"Avatar Picture\"> 
                                                  <div>
                                                      <p class=\"text-sm font-medium text-white\">Invitation pour l'univers \"";
                    // line 196
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "groupeJDR", [], "any", false, false, false, 196), "title", [], "any", false, false, false, 196), "html", null, true);
                    yield "\"</p>
                                                      <p class=\"text-xs text-gray-400\">Envoyé par ";
                    // line 197
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["invitation"], "requestedBy", [], "any", false, false, false, 197), "username", [], "any", false, false, false, 197), "html", null, true);
                    yield "</p>
                                                  </div>
                                              </div>
                                          ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['invitation'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 201
                yield "                                      ";
            } else {
                // line 202
                yield "                                          <p class=\"px-4 py-2 text-sm text-gray-400\">Pas d'invitations en attente</p>
                                      ";
            }
            // line 204
            yield "                                  </div>
                              </div>
                              <a href=\"";
            // line 206
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_notifications_index");
            yield "\" class=\"block px-4 py-2 text-base text-white hover:bg-gray-700 text-center\">Voir toutes les notifications</a>
                          </div>
                      ";
        }
        // line 209
        yield "                  </div>
              </div>
              <div class=\"relative ml-3\">
                ";
        // line 212
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 212, $this->source); })()), "user", [], "any", false, false, false, 212)) {
            // line 213
            yield "                    <button id=\"user-menu-toggle\" type=\"button\" class=\"flex items-center justify-center w-12 h-12 rounded-full bg-gray-500 text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition duration-300 ease-in-out transform hover:scale-110 hover:bg-gray-700 shadow-lg\" aria-expanded=\"false\" aria-haspopup=\"true\">
                        <span class=\"sr-only\">Open user menu</span>
                        ";
            // line 215
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 215, $this->source); })()), "user", [], "any", false, false, false, 215), "avatar", [], "any", false, false, false, 215)) {
                // line 216
                yield "                            <img class=\"h-10 w-10 rounded-full object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 216, $this->source); })()), "user", [], "any", false, false, false, 216), "avatar", [], "any", false, false, false, 216))), "html", null, true);
                yield "\" alt=\"Profile photo\">
                        ";
            } else {
                // line 218
                yield "                            <img class=\"h-10 w-10 rounded-full object-cover\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                        ";
            }
            // line 220
            yield "                    </button>
                    <div id=\"user-menu\" class=\"hidden absolute right-0 z-10 mt-2 w-48 origin-top-right glassmorphism rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none backdrop-filter backdrop-blur-lg bg-opacity-10 bg-white\" role=\"menu\" aria-orientation=\"vertical\" aria-labelledby=\"user-menu-toggle\" tabindex=\"-1\">
                        <a href=\"";
            // line 222
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 222, $this->source); })()), "user", [], "any", false, false, false, 222), "id", [], "any", false, false, false, 222)]), "html", null, true);
            yield "\" class=\"block px-4 py-2 text-sm text-white hover:bg-gray-100 hover:rounded-t-lg hover:text-gray-900\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-0\">Votre Profil</a>
                        <a href=\"";
            // line 223
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
            yield "\" class=\"block px-4 py-2 text-sm text-white hover:bg-gray-100 hover:text-gray-900\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-1\">Paramètre</a>
                        <a href=\"";
            // line 224
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"block px-4 py-2 text-sm text-white hover:bg-gray-100 hover:rounded-b-lg hover:text-gray-900\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-2\">Déconnexion</a>
                    </div>
                ";
        } else {
            // line 227
            yield "                    <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"text-sm font-semibold leading-6 text-white\">Connexion <span aria-hidden=\"true\">&rarr;</span></a>
                ";
        }
        // line 229
        yield "              </div>

          </nav>
          <div class=\"lg:hidden hidden backdrop-blur-lg bg-slate-900 bg-opacity-80 glassmorphism\" id=\"mobile-menu\">
            <div class=\"space-y-1 pt-2 pb-3\">
              <a href=\"";
        // line 234
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\"
                class=\"block border-l-4 ";
        // line 235
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 235, $this->source); })()), "request", [], "any", false, false, false, 235), "get", ["_route"], "method", false, false, false, 235) == "app_home")) ? ("border-indigo-500 bg-indigo-50 text-indigo-700") : ("border-transparent text-white hover:bg-gray-500"));
        yield " py-2 pl-3 pr-4 text-base font-medium\">
                Accueil
              </a>

              <a href=\"";
        // line 239
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\"
                class=\"block border-l-4 ";
        // line 240
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 240, $this->source); })()), "request", [], "any", false, false, false, 240), "get", ["_route"], "method", false, false, false, 240) == "app_groupe_j_d_r_index")) ? ("border-indigo-500 bg-indigo-50 text-indigo-700") : ("border-transparent text-white hover:bg-gray-500"));
        yield " py-2 pl-3 pr-4 text-base font-medium\">
                Les Univers
              </a>

              <a href=\"";
        // line 244
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_my_jdr");
        yield "\"
                class=\"block border-l-4 ";
        // line 245
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 245, $this->source); })()), "request", [], "any", false, false, false, 245), "get", ["_route"], "method", false, false, false, 245) == "app_my_jdr")) ? ("border-indigo-500 bg-indigo-50 text-indigo-700") : ("border-transparent text-white hover:bg-gray-500"));
        yield " py-2 pl-3 pr-4 text-base font-medium\">
                Mes Parties
              </a>

              <a href=\"";
        // line 249
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_contact");
        yield "\"
                class=\"block border-l-4 ";
        // line 250
        yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 250, $this->source); })()), "request", [], "any", false, false, false, 250), "get", ["_route"], "method", false, false, false, 250) == "app_contact")) ? ("border-indigo-500 bg-indigo-50 text-indigo-700") : ("border-transparent text-white hover:bg-gray-500"));
        yield " py-2 pl-3 pr-4 text-base font-medium\">
                Nous Contacter
              </a>
            </div>
            <div class=\"border-t border-gray-200 pt-4 pb-3\">
              <div class=\"mt-3 space-y-1\">
                ";
        // line 256
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 256, $this->source); })()), "user", [], "any", false, false, false, 256)) {
            // line 257
            yield "                  <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 257, $this->source); })()), "user", [], "any", false, false, false, 257), "id", [], "any", false, false, false, 257)]), "html", null, true);
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Votre Profil</a>
                  <a href=\"";
            // line 258
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Paramètre</a>
                  <a href=\"";
            // line 259
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Déconnexion</a>
                ";
        } else {
            // line 261
            yield "                  <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Connexion</a>
                ";
        }
        // line 263
        yield "              </div>
            </div>
          </div>
        </header>
      </div>
      <div class=\"container mx-auto px-4 py-8 mt-4 sm:mt-16\">
          ";
        // line 269
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 269, $this->source); })()), "flashes", ["success"], "method", false, false, false, 269));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 270
            yield "              <div class=\"alert-message bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-6\" role=\"alert\">
                  ";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
              </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 274
        yield "          
          ";
        // line 275
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 275, $this->source); })()), "flashes", ["error"], "method", false, false, false, 275));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 276
            yield "              <div class=\"alert-message bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-6\" role=\"alert\">
                  ";
            // line 277
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
              </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 280
        yield "
          ";
        // line 281
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 282
        yield "      </div>
      <div id=\"invitationModal\" class=\"fixed z-10 inset-0 overflow-y-auto hidden\" aria-labelledby=\"modal-title\" role=\"dialog\" aria-modal=\"true\">
          <div class=\"flex items-center justify-center min-h-screen\">
              <div class=\"fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity\"></div>
              <div class=\"glassmorphism max-w-lg w-full bg-white backdrop-filter backdrop-blur-lg bg-opacity-10 p-6 rounded-lg shadow-lg transform transition-all relative\">
                  <div class=\"absolute top-0 right-0 p-4\">
                      <button id=\"close-modal-btn\" class=\"text-gray-300 hover:text-gray-600 text-2xl\">×</button>
                  </div>
                  <div class=\"flex items-center\">
                      <img id=\"jdr-avatar-modal\" class=\"w-16 h-16 rounded-full border-2 border-white mr-4\" src=\"#\" alt=\"JDR Avatar\">
                      <div>
                          <h3 id=\"modal-group-title\" class=\"text-xl font-semibold text-white\">Titre de l'invitation</h3>
                          <p id=\"modal-action\" class=\"text-sm text-gray-300\">Envoyé par [Nom]</p>
                      </div>
                  </div>

                  <div class=\"mt-4\">
                      <p id=\"modal-invitation-message\" class=\"text-base text-gray-300\">Vous avez été invité à rejoindre l'univers [Nom de l'univers].</p>
                  </div>

                  <div class=\"mt-6 flex justify-center space-x-4\">
                      <button id=\"accept-btn\" class=\"bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-200\">
                          Accepter
                      </button>
                      <button id=\"later-btn\" class=\"bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition duration-200\">
                          Regarder plus tard
                      </button>
                      <button id=\"refuse-btn\" class=\"bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-200\">
                          Refuser
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
        // line 366
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer_cgv");
        yield "\" class=\"text-base text-gray-500 hover:text-gray-700\"> Conditions Générales de Vente </a>
                    </li>

                    <li>
                      <a href=\"";
        // line 370
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer_cgu");
        yield "\" class=\"text-base text-gray-500 hover:text-gray-700\"> Conditions Générales d'Utilisation </a>
                    </li>

                    <li>
                      <a href=\"";
        // line 374
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
        // line 382
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer_team");
        yield "\" class=\"text-base text-gray-500 hover:text-gray-700\"> Notre équipe </a>
                    </li>
                    <li>
                      <a href=\"";
        // line 385
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_footer_about");
        yield "\" class=\"text-base text-gray-500 hover:text-gray-700\"> À propos de nous </a>
                    </li>
                    <li>
                      <a href=\"";
        // line 388
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
        // line 398
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
      <script src=\"https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js\"></script>
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
              const invitationModal = document.getElementById('invitationModal');
              const closeModalBtn = document.getElementById('close-modal-btn');
              const laterBtn = document.getElementById('later-btn');
              const acceptBtn = document.getElementById('accept-btn');
              const refuseBtn = document.getElementById('refuse-btn');
              const invitationNotification = document.getElementById('invitation-notification');

              let isDropdownOpen = false;
              let isUserMenuOpen = false;

              const notificationCount = parseInt(invitationNotification.textContent.trim(), 10);
              if (notificationCount === 0) {
                  invitationNotification.classList.add('hidden');
              } else {
                  invitationNotification.classList.remove('hidden');
              }

              function closeUserMenu() {
                  if (userMenu && !userMenu.classList.contains('hidden')) {
                      userMenu.classList.add('hidden');
                      isUserMenuOpen = false;
                  }
              }

              function closeNotificationMenu() {
                  if (dropdownMenu && !dropdownMenu.classList.contains('hidden')) {
                      dropdownMenu.classList.add('hidden');
                      isDropdownOpen = false;
                  }
              }

              if (userMenuToggle) {
                  userMenuToggle.addEventListener('click', function (e) {
                      e.stopPropagation();
                      closeNotificationMenu();
                      if (userMenu) {
                          isUserMenuOpen = !isUserMenuOpen;
                          userMenu.classList.toggle('hidden', !isUserMenuOpen);
                      }
                  });
              }

              if (notificationDropdown) {
                  notificationDropdown.addEventListener('click', function (e) {
                      e.stopPropagation();
                      closeUserMenu();
                      if (dropdownMenu) {
                          isDropdownOpen = !isDropdownOpen;
                          dropdownMenu.classList.toggle('hidden', !isDropdownOpen);
                          dropdownMenu.style.opacity = isDropdownOpen ? '1' : '0';
                          dropdownMenu.style.transform = isDropdownOpen ? 'scale(1)' : 'scale(0.95)';
                      }
                  });
              }

              document.addEventListener('click', function (event) {
                  const isClickInsideNotification = notificationDropdown && notificationDropdown.contains(event.target);
                  const isClickInsideDropdown = dropdownMenu && dropdownMenu.contains(event.target);
                  const isClickInsideUserMenu = userMenuToggle && userMenuToggle.contains(event.target);
                  const isClickInsideUserMenuDropdown = userMenu && userMenu.contains(event.target);

                  if (!isClickInsideNotification && !isClickInsideDropdown && isDropdownOpen) {
                      closeNotificationMenu();
                  }

                  if (!isClickInsideUserMenu && !isClickInsideUserMenuDropdown && isUserMenuOpen) {
                      closeUserMenu();
                  }
              });

              if (mobileMenuToggle) {
                  mobileMenuToggle.addEventListener('click', function () {
                      const menu = document.getElementById('mobile-menu');
                      const expanded = this.getAttribute('aria-expanded') === 'true' || false;
                      this.setAttribute('aria-expanded', !expanded);
                      menu.classList.toggle('hidden');
                  });
              }

              const invitationItems = document.querySelectorAll('.invitation-item');
              if (invitationItems && invitationModal && closeModalBtn && laterBtn) {
                  invitationItems.forEach(item => {
                      item.addEventListener('click', function () {
                          const title = this.getAttribute('data-title');
                          const inviter = this.getAttribute('data-inviter');
                          const message = this.getAttribute('data-message');
                          const avatarSrc = this.querySelector('img').src;
                          const invitationId = this.getAttribute('data-invitation-id');

                          closeNotificationMenu();
                          closeUserMenu();

                          const modalTitle = document.getElementById('modal-group-title');
                          const modalAction = document.getElementById('modal-action');
                          const modalMessage = document.getElementById('modal-invitation-message');
                          const modalAvatar = document.getElementById('jdr-avatar-modal');

                          modalTitle.textContent = title;
                          modalAction.textContent = \"Invitation de \" + inviter;
                          modalMessage.textContent = message;
                          modalAvatar.src = avatarSrc;

                          acceptBtn.setAttribute('data-invitation-id', invitationId);
                          refuseBtn.setAttribute('data-invitation-id', invitationId);

                          invitationModal.classList.remove('hidden');
                      });
                  });

                  closeModalBtn.addEventListener('click', function () {
                      invitationModal.classList.add('hidden');
                  });

                  laterBtn.addEventListener('click', function () {
                      invitationModal.classList.add('hidden');
                  });

                  window.addEventListener('click', function (event) {
                      if (event.target === invitationModal) {
                          invitationModal.classList.add('hidden');
                      }
                  });

                  function handleInvitationResponse(invitationId, response) {
                      fetch(`/api/respond_invitation_base/\${invitationId}`, {
                          method: 'POST',
                          headers: {
                              'Content-Type': 'application/json',
                              'X-Requested-With': 'XMLHttpRequest'
                          },
                          body: JSON.stringify({ response: response })
                      })
                      .then(response => {
                          if (!response.ok) {
                              throw new Error('Erreur lors de la soumission de la réponse');
                          }
                          return response.json();
                      })
                      .then(data => {
                          if (data.success) {
                              location.reload();
                          } else {
                              console.error('Erreur lors de la soumission de la réponse:', data.message);
                          }
                      })
                      .catch(error => {
                          console.error('Erreur:', error);
                      });
                  }

                  acceptBtn.addEventListener('click', function () {
                      const invitationId = this.getAttribute('data-invitation-id');
                      handleInvitationResponse(invitationId, 'accept');
                  });

                  refuseBtn.addEventListener('click', function () {
                      const invitationId = this.getAttribute('data-invitation-id');
                      handleInvitationResponse(invitationId, 'refuse');
                  });
              }
          });
      </script>
    </body>
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

    // line 13
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

    // line 281
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
        return array (  996 => 281,  973 => 16,  962 => 17,  959 => 16,  946 => 15,  924 => 13,  902 => 5,  696 => 398,  683 => 388,  677 => 385,  671 => 382,  660 => 374,  653 => 370,  646 => 366,  560 => 282,  558 => 281,  555 => 280,  546 => 277,  543 => 276,  539 => 275,  536 => 274,  527 => 271,  524 => 270,  520 => 269,  512 => 263,  506 => 261,  501 => 259,  497 => 258,  492 => 257,  490 => 256,  481 => 250,  477 => 249,  470 => 245,  466 => 244,  459 => 240,  455 => 239,  448 => 235,  444 => 234,  437 => 229,  431 => 227,  425 => 224,  421 => 223,  417 => 222,  413 => 220,  407 => 218,  401 => 216,  399 => 215,  395 => 213,  393 => 212,  388 => 209,  382 => 206,  378 => 204,  374 => 202,  371 => 201,  361 => 197,  357 => 196,  352 => 194,  348 => 193,  344 => 192,  340 => 191,  336 => 190,  333 => 189,  328 => 188,  326 => 187,  321 => 184,  317 => 182,  314 => 181,  304 => 177,  300 => 176,  297 => 175,  291 => 173,  285 => 171,  283 => 170,  280 => 169,  275 => 168,  273 => 167,  262 => 159,  258 => 158,  252 => 154,  250 => 153,  240 => 146,  230 => 143,  220 => 140,  210 => 137,  195 => 125,  191 => 124,  83 => 18,  81 => 15,  78 => 14,  76 => 13,  69 => 9,  64 => 7,  59 => 5,  53 => 1,);
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
        <link href=\"https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css\" rel=\"stylesheet\" />

        {% block stylesheets %}{% endblock %}

        {% block javascripts %}
            {% block importmap %}{{ importmap('app') }}{% endblock %}
        {% endblock %}
    </head>

<style>
    .glassmorphism {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(20px);
        border-radius: 20px;
        border: 1px solid rgba(255, 255, 255, 0.3);
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
    }

    .glassmorphism-acceptance {
          background: rgba(34, 197, 94, 0.1);
          backdrop-filter: blur(20px);
          border-radius: 20px;
          border: 1px solid rgba(34, 197, 94, 0.3);
          box-shadow: 0 4px 30px rgba(0, 128, 0, 0.1);
          transition: transform 0.3s ease-in-out;
      }
      .glassmorphism-acceptance:hover {
          box-shadow: 0 12px 24px rgba(0, 128, 0, 0.3);
      }

      .glassmorphism-player-left {
          background: rgba(220, 38, 38, 0.1);
          backdrop-filter: blur(20px);
          border-radius: 20px;
          border: 1px solid rgba(220, 38, 38, 0.3);
          box-shadow: 0 4px 30px rgba(220, 38, 38, 0.1);
          transition: transform 0.3s ease-in-out;
      }
      .glassmorphism-player-left:hover {
          box-shadow: 0 12px 24px rgba(220, 38, 38, 0.3);
      }

      .glassmorphism-invitation-accepted {
          background: rgba(79, 70, 229, 0.1);
          backdrop-filter: blur(20px);
          border-radius: 20px;
          border: 1px solid rgba(79, 70, 229, 0.3);
          box-shadow: 0 4px 30px rgba(79, 70, 229, 0.1);
          transition: transform 0.3s ease-in-out;
      }
      .glassmorphism-invitation-accepted:hover {
          box-shadow: 0 12px 24px rgba(79, 70, 229, 0.3);
      }

      .glassmorphism-warning {
          background: rgba(234, 179, 8, 0.1);
          backdrop-filter: blur(20px);
          border-radius: 20px;
          border: 1px solid rgba(234, 179, 8, 0.3);
          box-shadow: 0 4px 30px rgba(234, 179, 8, 0.1);
          transition: transform 0.3s ease-in-out;
      }
      .glassmorphism-warning:hover {
          box-shadow: 0 12px 24px rgba(234, 179, 8, 0.3);
      }

      .jdr-avatar {
          width: 40px;
          height: 40px;
          border-radius: 50%;
          object-fit: cover;
          margin-right: 10px;
          border: 2px solid white;
      }

      .button-hover {
          transition: transform 0.3s ease, background-color 0.3s ease;
      }

      .button-hover:hover {
          background-color: rgba(255, 255, 255, 0.2);
      }

      .rounded-full {
          border-radius: 9999px;
      }

      #dropdown-menu {
          width: 24rem;
          background: rgba(255, 255, 255, 0.1);
          backdrop-filter: blur(20px);
          border-radius: 16px;
          box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5);
          transition: opacity 0.3s ease, transform 0.3s ease;
          z-index: 50;
      }

      #dropdown-menu:hover {
      }

      #dropdown-menu .notification-item {
          transition: background-color 0.3s ease;
      }

      #dropdown-menu:hover {
      }
</style>

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
                          <button id=\"notificationDropdown\" type=\"button\" class=\"relative w-12 h-12 flex items-center justify-center text-white border-none outline-none bg-gray-500 rounded-full transition duration-300 ease-in-out transform hover:scale-110 hover:bg-gray-800 focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 focus:outline-none shadow-lg\">
                              <svg xmlns=\"http://www.w3.org/2000/svg\" fill=\"none\" viewBox=\"0 0 24 24\" stroke-width=\"1.5\" stroke=\"currentColor\" class=\"size-6\">
                                <path stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0\" />
                              </svg>
                              <div id=\"invitation-notification\" class=\"absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 {{ (notifications|length + invitations|length) == 0 ? 'hidden' : '' }}\">
                                  {{ notifications|length + invitations|length }}
                              </div>
                          </button>

                          <div id=\"dropdown-menu\" class=\"hidden absolute right-0 w-96 mt-2 origin-top-right glassmorphism shadow-lg focus:outline-none z-50\">
                              <div class=\"py-4 px-4\">
                                  <h4 class=\"text-lg font-semibold text-white mb-2\">Notifications</h4>
                                  <div id=\"notifications-list\">
                                      {% if notifications|length > 0 %}
                                          {% for notification in notifications|reverse|slice(0, 2) %}
                                              <div class=\"notification-item flex items-center px-4 py-4 hover:bg-gray-800 rounded-md cursor-pointer mb-2\">
                                                  {% if notification.groupeJDR and notification.groupeJDR.picture %}
                                                      <img class=\"w-10 h-10 rounded-full object-cover mr-3\" src=\"{{ asset('uploads/images-jdr/' ~ notification.groupeJDR.picture) }}\" alt=\"JDR Picture\">
                                                  {% else %}
                                                      <img class=\"w-10 h-10 rounded-full object-cover mr-3\" src=\"{{ asset('images/default-jdr-avatar.png') }}\" alt=\"Default JDR Picture\">
                                                  {% endif %}
                                                  <div>
                                                      <p class=\"text-sm font-medium text-white\">{{ notification.message }}</p>
                                                      <p class=\"text-xs text-gray-400\">{{ notification.createdAt|date('d/m/Y H:i') }}</p>
                                                  </div>
                                              </div>
                                          {% endfor %}
                                      {% else %}
                                          <p class=\"px-4 py-2 text-sm text-gray-400\">Pas de nouvelles notifications</p>
                                      {% endif %}
                                  </div>
                                  <h4 class=\"text-lg font-semibold text-white mb-2\">Invitations</h4>
                                  <div id=\"invitations-list\">
                                      {% if invitations|length > 0 %}
                                          {% for invitation in invitations|reverse|slice(0, 2) %}
                                              <div class=\"notification-item flex items-center px-4 py-4 hover:bg-gray-800 rounded-md cursor-pointer mb-2 invitation-item\" 
                                                  data-title=\"{{ invitation.groupeJDR.title }}\" 
                                                  data-inviter=\"{{ invitation.requestedBy.username }}\" 
                                                  data-message=\"Vous avez été invité à rejoindre l'univers {{ invitation.groupeJDR.title }}.\"
                                                  data-invitation-id=\"{{ invitation.id }}\">
                                                  <img class=\"w-10 h-10 rounded-full object-cover mr-3\" src=\"{{ invitation.groupeJDR.picture ? asset('uploads/images-jdr/' ~ invitation.groupeJDR.picture) : asset('images/default-jdr-avatar.png') }}\" alt=\"Avatar Picture\"> 
                                                  <div>
                                                      <p class=\"text-sm font-medium text-white\">Invitation pour l'univers \"{{ invitation.groupeJDR.title }}\"</p>
                                                      <p class=\"text-xs text-gray-400\">Envoyé par {{ invitation.requestedBy.username }}</p>
                                                  </div>
                                              </div>
                                          {% endfor %}
                                      {% else %}
                                          <p class=\"px-4 py-2 text-sm text-gray-400\">Pas d'invitations en attente</p>
                                      {% endif %}
                                  </div>
                              </div>
                              <a href=\"{{ path('app_notifications_index') }}\" class=\"block px-4 py-2 text-base text-white hover:bg-gray-700 text-center\">Voir toutes les notifications</a>
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
                    <div id=\"user-menu\" class=\"hidden absolute right-0 z-10 mt-2 w-48 origin-top-right glassmorphism rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none backdrop-filter backdrop-blur-lg bg-opacity-10 bg-white\" role=\"menu\" aria-orientation=\"vertical\" aria-labelledby=\"user-menu-toggle\" tabindex=\"-1\">
                        <a href=\"{{ path('app_profile_show', {'id': app.user.id}) }}\" class=\"block px-4 py-2 text-sm text-white hover:bg-gray-100 hover:rounded-t-lg hover:text-gray-900\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-0\">Votre Profil</a>
                        <a href=\"{{ path('app_profile_edit') }}\" class=\"block px-4 py-2 text-sm text-white hover:bg-gray-100 hover:text-gray-900\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-1\">Paramètre</a>
                        <a href=\"{{ path('app_logout') }}\" class=\"block px-4 py-2 text-sm text-white hover:bg-gray-100 hover:rounded-b-lg hover:text-gray-900\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-2\">Déconnexion</a>
                    </div>
                {% else %}
                    <a href=\"{{ path('app_login') }}\" class=\"text-sm font-semibold leading-6 text-white\">Connexion <span aria-hidden=\"true\">&rarr;</span></a>
                {% endif %}
              </div>

          </nav>
          <div class=\"lg:hidden hidden backdrop-blur-lg bg-slate-900 bg-opacity-80 glassmorphism\" id=\"mobile-menu\">
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
                  <a href=\"{{ path('app_profile_show', {'id': app.user.id}) }}\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Votre Profil</a>
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
          <div class=\"flex items-center justify-center min-h-screen\">
              <div class=\"fixed inset-0 bg-gray-900 bg-opacity-75 transition-opacity\"></div>
              <div class=\"glassmorphism max-w-lg w-full bg-white backdrop-filter backdrop-blur-lg bg-opacity-10 p-6 rounded-lg shadow-lg transform transition-all relative\">
                  <div class=\"absolute top-0 right-0 p-4\">
                      <button id=\"close-modal-btn\" class=\"text-gray-300 hover:text-gray-600 text-2xl\">×</button>
                  </div>
                  <div class=\"flex items-center\">
                      <img id=\"jdr-avatar-modal\" class=\"w-16 h-16 rounded-full border-2 border-white mr-4\" src=\"#\" alt=\"JDR Avatar\">
                      <div>
                          <h3 id=\"modal-group-title\" class=\"text-xl font-semibold text-white\">Titre de l'invitation</h3>
                          <p id=\"modal-action\" class=\"text-sm text-gray-300\">Envoyé par [Nom]</p>
                      </div>
                  </div>

                  <div class=\"mt-4\">
                      <p id=\"modal-invitation-message\" class=\"text-base text-gray-300\">Vous avez été invité à rejoindre l'univers [Nom de l'univers].</p>
                  </div>

                  <div class=\"mt-6 flex justify-center space-x-4\">
                      <button id=\"accept-btn\" class=\"bg-green-500 text-white px-4 py-2 rounded-md hover:bg-green-600 transition duration-200\">
                          Accepter
                      </button>
                      <button id=\"later-btn\" class=\"bg-gray-500 text-white px-4 py-2 rounded-md hover:bg-gray-600 transition duration-200\">
                          Regarder plus tard
                      </button>
                      <button id=\"refuse-btn\" class=\"bg-red-500 text-white px-4 py-2 rounded-md hover:bg-red-600 transition duration-200\">
                          Refuser
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
      <script src=\"https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js\"></script>
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
              const invitationModal = document.getElementById('invitationModal');
              const closeModalBtn = document.getElementById('close-modal-btn');
              const laterBtn = document.getElementById('later-btn');
              const acceptBtn = document.getElementById('accept-btn');
              const refuseBtn = document.getElementById('refuse-btn');
              const invitationNotification = document.getElementById('invitation-notification');

              let isDropdownOpen = false;
              let isUserMenuOpen = false;

              const notificationCount = parseInt(invitationNotification.textContent.trim(), 10);
              if (notificationCount === 0) {
                  invitationNotification.classList.add('hidden');
              } else {
                  invitationNotification.classList.remove('hidden');
              }

              function closeUserMenu() {
                  if (userMenu && !userMenu.classList.contains('hidden')) {
                      userMenu.classList.add('hidden');
                      isUserMenuOpen = false;
                  }
              }

              function closeNotificationMenu() {
                  if (dropdownMenu && !dropdownMenu.classList.contains('hidden')) {
                      dropdownMenu.classList.add('hidden');
                      isDropdownOpen = false;
                  }
              }

              if (userMenuToggle) {
                  userMenuToggle.addEventListener('click', function (e) {
                      e.stopPropagation();
                      closeNotificationMenu();
                      if (userMenu) {
                          isUserMenuOpen = !isUserMenuOpen;
                          userMenu.classList.toggle('hidden', !isUserMenuOpen);
                      }
                  });
              }

              if (notificationDropdown) {
                  notificationDropdown.addEventListener('click', function (e) {
                      e.stopPropagation();
                      closeUserMenu();
                      if (dropdownMenu) {
                          isDropdownOpen = !isDropdownOpen;
                          dropdownMenu.classList.toggle('hidden', !isDropdownOpen);
                          dropdownMenu.style.opacity = isDropdownOpen ? '1' : '0';
                          dropdownMenu.style.transform = isDropdownOpen ? 'scale(1)' : 'scale(0.95)';
                      }
                  });
              }

              document.addEventListener('click', function (event) {
                  const isClickInsideNotification = notificationDropdown && notificationDropdown.contains(event.target);
                  const isClickInsideDropdown = dropdownMenu && dropdownMenu.contains(event.target);
                  const isClickInsideUserMenu = userMenuToggle && userMenuToggle.contains(event.target);
                  const isClickInsideUserMenuDropdown = userMenu && userMenu.contains(event.target);

                  if (!isClickInsideNotification && !isClickInsideDropdown && isDropdownOpen) {
                      closeNotificationMenu();
                  }

                  if (!isClickInsideUserMenu && !isClickInsideUserMenuDropdown && isUserMenuOpen) {
                      closeUserMenu();
                  }
              });

              if (mobileMenuToggle) {
                  mobileMenuToggle.addEventListener('click', function () {
                      const menu = document.getElementById('mobile-menu');
                      const expanded = this.getAttribute('aria-expanded') === 'true' || false;
                      this.setAttribute('aria-expanded', !expanded);
                      menu.classList.toggle('hidden');
                  });
              }

              const invitationItems = document.querySelectorAll('.invitation-item');
              if (invitationItems && invitationModal && closeModalBtn && laterBtn) {
                  invitationItems.forEach(item => {
                      item.addEventListener('click', function () {
                          const title = this.getAttribute('data-title');
                          const inviter = this.getAttribute('data-inviter');
                          const message = this.getAttribute('data-message');
                          const avatarSrc = this.querySelector('img').src;
                          const invitationId = this.getAttribute('data-invitation-id');

                          closeNotificationMenu();
                          closeUserMenu();

                          const modalTitle = document.getElementById('modal-group-title');
                          const modalAction = document.getElementById('modal-action');
                          const modalMessage = document.getElementById('modal-invitation-message');
                          const modalAvatar = document.getElementById('jdr-avatar-modal');

                          modalTitle.textContent = title;
                          modalAction.textContent = \"Invitation de \" + inviter;
                          modalMessage.textContent = message;
                          modalAvatar.src = avatarSrc;

                          acceptBtn.setAttribute('data-invitation-id', invitationId);
                          refuseBtn.setAttribute('data-invitation-id', invitationId);

                          invitationModal.classList.remove('hidden');
                      });
                  });

                  closeModalBtn.addEventListener('click', function () {
                      invitationModal.classList.add('hidden');
                  });

                  laterBtn.addEventListener('click', function () {
                      invitationModal.classList.add('hidden');
                  });

                  window.addEventListener('click', function (event) {
                      if (event.target === invitationModal) {
                          invitationModal.classList.add('hidden');
                      }
                  });

                  function handleInvitationResponse(invitationId, response) {
                      fetch(`/api/respond_invitation_base/\${invitationId}`, {
                          method: 'POST',
                          headers: {
                              'Content-Type': 'application/json',
                              'X-Requested-With': 'XMLHttpRequest'
                          },
                          body: JSON.stringify({ response: response })
                      })
                      .then(response => {
                          if (!response.ok) {
                              throw new Error('Erreur lors de la soumission de la réponse');
                          }
                          return response.json();
                      })
                      .then(data => {
                          if (data.success) {
                              location.reload();
                          } else {
                              console.error('Erreur lors de la soumission de la réponse:', data.message);
                          }
                      })
                      .catch(error => {
                          console.error('Erreur:', error);
                      });
                  }

                  acceptBtn.addEventListener('click', function () {
                      const invitationId = this.getAttribute('data-invitation-id');
                      handleInvitationResponse(invitationId, 'accept');
                  });

                  refuseBtn.addEventListener('click', function () {
                      const invitationId = this.getAttribute('data-invitation-id');
                      handleInvitationResponse(invitationId, 'refuse');
                  });
              }
          });
      </script>
    </body>
</html>
", "base.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\base.html.twig");
    }
}
