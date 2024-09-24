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
        // line 11
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
        // line 36
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"text-sm font-semibold leading-6 text-white\">Accueil</a>
          <a href=\"";
        // line 37
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_groupe_j_d_r_index");
        yield "\" class=\"text-sm font-semibold leading-6 text-white\">Les Univers</a>
          <a href=\"#\" class=\"text-sm font-semibold leading-6 text-white\">Mes Parties</a>
          <a href=\"#\" class=\"text-sm font-semibold leading-6 text-white\">Les Joueurs</a>
          <a href=\"#\" class=\"text-sm font-semibold leading-6 text-white\">Nous Contacter</a>
        </div>
        <div class=\"hidden lg:flex lg:flex-1 lg:justify-end\">
          <div class=\"relative ml-3\">
              ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44)) {
            // line 45
            yield "                  <button id=\"user-menu-toggle\" type=\"button\" class=\"flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\" aria-expanded=\"false\" aria-haspopup=\"true\">
                      <span class=\"sr-only\">Open user menu</span>
                      ";
            // line 47
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "user", [], "any", false, false, false, 47), "avatar", [], "any", false, false, false, 47)) {
                // line 48
                yield "                          <img class=\"h-10 w-10 rounded-full\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 48, $this->source); })()), "user", [], "any", false, false, false, 48), "avatar", [], "any", false, false, false, 48))), "html", null, true);
                yield "\" alt=\"Profile photo\">
                      ";
            } else {
                // line 50
                yield "                          <img class=\"h-10 w-10 rounded-full\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                      ";
            }
            // line 52
            yield "                  </button>
                  <div id=\"user-menu\" class=\"hidden absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none\" role=\"menu\" aria-orientation=\"vertical\" aria-labelledby=\"user-menu-toggle\" tabindex=\"-1\">
                      <a href=\"";
            // line 54
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-0\">Votre Profil</a>
                      <a href=\"";
            // line 55
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-1\">Paramètre</a>
                      <a href=\"";
            // line 56
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"block px-4 py-2 text-sm text-gray-700\" role=\"menuitem\" tabindex=\"-1\" id=\"user-menu-item-2\">Déconnexion</a>
                  </div>
              ";
        } else {
            // line 59
            yield "                  <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"text-sm font-semibold leading-6 text-white\">Log in <span aria-hidden=\"true\">&rarr;</span></a>
              ";
        }
        // line 61
        yield "          </div>
      </div>
      </nav>

      <div class=\"lg:hidden hidden backdrop-blur-lg bg-slate-900 bg-opacity-80\" id=\"mobile-menu\"> <!-- Ajout du blur et bg-opacity -->
        <div class=\"space-y-1 pt-2 pb-3\">
          <a href=\"";
        // line 67
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\" class=\"block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700\">Accueil</a>
          <a href=\"#\" class=\"block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:bg-gray-50\">Les Univers</a>
          <a href=\"#\" class=\"block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:bg-gray-50\">Mes Parties</a>
          <a href=\"#\" class=\"block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:bg-gray-50\">Les Joueurs</a>
          <a href=\"#\" class=\"block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:bg-gray-50\">Nous Contacter</a>
        </div>
        <div class=\"border-t border-gray-200 pt-4 pb-3\">
          <div class=\"flex items-center px-4 sm:px-6\">
            ";
        // line 75
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 75, $this->source); })()), "user", [], "any", false, false, false, 75)) {
            // line 76
            yield "              <div class=\"flex-shrink-0\">
                ";
            // line 77
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77), "avatar", [], "any", false, false, false, 77)) {
                // line 78
                yield "                  <img class=\"h-10 w-10 rounded-full\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "avatar", [], "any", false, false, false, 78))), "html", null, true);
                yield "\" alt=\"Profile photo\">
                ";
            } else {
                // line 80
                yield "                  <img class=\"h-10 w-10 rounded-full\" src=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
                yield "\" alt=\"Default profile photo\">
                ";
            }
            // line 82
            yield "              </div>
              <div class=\"ml-3\">
                <div class=\"text-base font-medium text-gray-800\">";
            // line 84
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 84, $this->source); })()), "user", [], "any", false, false, false, 84), "username", [], "any", false, false, false, 84), "html", null, true);
            yield "</div>
                <div class=\"text-sm font-medium text-gray-500\">";
            // line 85
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 85, $this->source); })()), "user", [], "any", false, false, false, 85), "email", [], "any", false, false, false, 85), "html", null, true);
            yield "</div>
              </div>
            ";
        }
        // line 88
        yield "          </div>
          <div class=\"mt-3 space-y-1\">
            ";
        // line 90
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 90, $this->source); })()), "user", [], "any", false, false, false, 90)) {
            // line 91
            yield "              <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Votre Profil</a>
              <a href=\"";
            // line 92
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_edit");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Paramètre</a>
              <a href=\"";
            // line 93
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Déconnexion</a>
            ";
        } else {
            // line 95
            yield "              <a href=\"";
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
            yield "\" class=\"block px-4 py-2 text-base font-medium text-white hover:bg-gray-50\">Log in</a>
            ";
        }
        // line 97
        yield "          </div>
        </div>
      </div>
    </header>
  </div>

  ";
        // line 103
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 104
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
</script>
</html
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

    // line 11
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

        // line 12
        yield "        ";
        
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

    // line 103
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
        return array (  455 => 103,  432 => 15,  421 => 16,  418 => 15,  405 => 14,  394 => 12,  381 => 11,  358 => 5,  248 => 104,  246 => 103,  238 => 97,  232 => 95,  227 => 93,  223 => 92,  218 => 91,  216 => 90,  212 => 88,  206 => 85,  202 => 84,  198 => 82,  192 => 80,  186 => 78,  184 => 77,  181 => 76,  179 => 75,  168 => 67,  160 => 61,  154 => 59,  148 => 56,  144 => 55,  140 => 54,  136 => 52,  130 => 50,  124 => 48,  122 => 47,  118 => 45,  116 => 44,  106 => 37,  102 => 36,  86 => 23,  78 => 17,  76 => 14,  73 => 13,  71 => 11,  67 => 10,  59 => 5,  53 => 1,);
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
          <a href=\"#\" class=\"text-sm font-semibold leading-6 text-white\">Mes Parties</a>
          <a href=\"#\" class=\"text-sm font-semibold leading-6 text-white\">Les Joueurs</a>
          <a href=\"#\" class=\"text-sm font-semibold leading-6 text-white\">Nous Contacter</a>
        </div>
        <div class=\"hidden lg:flex lg:flex-1 lg:justify-end\">
          <div class=\"relative ml-3\">
              {% if app.user %}
                  <button id=\"user-menu-toggle\" type=\"button\" class=\"flex rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2\" aria-expanded=\"false\" aria-haspopup=\"true\">
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
      </div>
      </nav>

      <div class=\"lg:hidden hidden backdrop-blur-lg bg-slate-900 bg-opacity-80\" id=\"mobile-menu\"> <!-- Ajout du blur et bg-opacity -->
        <div class=\"space-y-1 pt-2 pb-3\">
          <a href=\"{{ path('app_home') }}\" class=\"block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700\">Accueil</a>
          <a href=\"#\" class=\"block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:bg-gray-50\">Les Univers</a>
          <a href=\"#\" class=\"block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-white hover:bg-gray-50\">Mes Parties</a>
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
                <div class=\"text-base font-medium text-gray-800\">{{ app.user.username }}</div>
                <div class=\"text-sm font-medium text-gray-500\">{{ app.user.email }}</div>
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
</script>
</html
", "base.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\base.html.twig");
    }
}
