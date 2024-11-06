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

/* footer/team.html.twig */
class __TwigTemplate_10d122986911f35d210a88035316cfdf extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/team.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "footer/team.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "footer/team.html.twig", 1);
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

        yield "Notre Équipe | DiceFinder";
        
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
        yield "<style>
    .team-card {
        color: #1D9AF2;
        background-color: #292D3E;
        border: 1px solid #1D9AF2;
        border-radius: 4px;
        padding: 2.5rem;
        transition: all 0.2s ease-in-out;
        cursor: pointer;
    }

    .team-card:hover {
        box-shadow: 1px 1px #53a7ea, 2px 2px #53a7ea, 3px 3px #53a7ea;
        transform: translateX(-3px);
    }
</style>

<div class=\"bg-gray-900\">
    <div class=\"mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8 lg:py-24\">
        <div class=\"space-y-12\">
            <div class=\"space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none\">
                <h2 class=\"text-3xl font-bold tracking-tight text-white sm:text-4xl\">Notre Équipe</h2>
                <p class=\"text-xl text-gray-300\">Découvrez les passionnés derrière DiceFinder.</p>
            </div>
                <ul role=\"list\" class=\"space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-3 lg:gap-8\">
                    <li class=\"rounded-lg team-card\">
                        <div class=\"space-y-6 xl:space-y-10\">
                            <img class=\"mx-auto h-40 w-40 rounded-full xl:h-56 xl:w-56\" src=\"";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/talep.jpg"), "html", null, true);
        yield "\" alt=\"Talep\">
                            <div class=\"space-y-2\">
                                <h3 class=\"text-white text-lg font-medium leading-6\">Talep (Pelcat Théo)</h3>
                                <p class=\"text-indigo-400\">Fondateur</p>
                                <ul role=\"list\" class=\"flex justify-center space-x-5\">
                                    <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">X</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                        <path d=\"M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84\" />
                                        </svg>
                                    </a>
                                    </li>
                                    <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">LinkedIn</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                        <path fill-rule=\"evenodd\" d=\"M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                <li class=\"rounded-lg team-card\">
                    <div class=\"space-y-6 xl:space-y-10\">
                        <img class=\"mx-auto h-40 w-40 rounded-full xl:h-56 xl:w-56\" src=\"";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/unknow.png"), "html", null, true);
        yield "\" alt=\"Benjamin\">
                        <div class=\"space-y-2\">
                        <h3 class=\"text-white text-lg font-medium leading-6\">Benjamin</h3>
                        <p class=\"text-indigo-400\">Développeur Principal</p>
                            <ul role=\"list\" class=\"flex justify-center space-x-5\">
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">X</span>
                                            <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                        <path d=\"M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84\" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">LinkedIn</span>
                                            <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                        <path fill-rule=\"evenodd\" d=\"M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class=\"rounded-lg team-card\">
                    <div class=\"space-y-6 xl:space-y-10\">
                        <img class=\"mx-auto h-40 w-40 rounded-full xl:h-56 xl:w-56\" src=\"";
        // line 89
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/unknow.png"), "html", null, true);
        yield "\" alt=\"Gui\">
                        <div class=\"space-y-2\">
                            <h3 class=\"text-white text-lg font-medium leading-6\">Gui</h3>
                            <p class=\"text-indigo-400\">Administrateur</p>
                            <ul role=\"list\" class=\"flex justify-center space-x-5\">
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">X</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                            <path d=\"M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84\" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">LinkedIn</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                            <path fill-rule=\"evenodd\" d=\"M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class=\"rounded-lg team-card\">
                    <div class=\"space-y-6 xl:space-y-10\">
                        <img class=\"mx-auto h-40 w-40 rounded-full xl:h-56 xl:w-56\" src=\"";
        // line 117
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/unknow.png"), "html", null, true);
        yield "\" alt=\"Laura\">
                        <div class=\"space-y-2\">
                        <h3 class=\"text-white text-lg font-medium leading-6\">Laura</h3>
                        <p class=\"text-indigo-400\">Administratrice</p>
                            <ul role=\"list\" class=\"flex justify-center space-x-5\">
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">X</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                            <path d=\"M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84\" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">LinkedIn</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                            <path fill-rule=\"evenodd\" d=\"M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class=\"rounded-lg team-card\">
                    <div class=\"space-y-6 xl:space-y-10\">
                        <img class=\"mx-auto h-40 w-40 rounded-full xl:h-56 xl:w-56\" src=\"";
        // line 145
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/unknow.png"), "html", null, true);
        yield "\" alt=\"Paul\">
                        <div class=\"space-y-2\">
                            <h3 class=\"text-white text-lg font-medium leading-6\">Paul</h3>
                            <p class=\"text-indigo-400\">Modérateur</p>
                            <ul role=\"list\" class=\"flex justify-center space-x-5\">
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">X</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                            <path d=\"M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84\" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">LinkedIn</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                            <path fill-rule=\"evenodd\" d=\"M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
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
        return "footer/team.html.twig";
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
        return array (  253 => 145,  222 => 117,  191 => 89,  160 => 61,  129 => 33,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Notre Équipe | DiceFinder{% endblock %}

{% block body %}
<style>
    .team-card {
        color: #1D9AF2;
        background-color: #292D3E;
        border: 1px solid #1D9AF2;
        border-radius: 4px;
        padding: 2.5rem;
        transition: all 0.2s ease-in-out;
        cursor: pointer;
    }

    .team-card:hover {
        box-shadow: 1px 1px #53a7ea, 2px 2px #53a7ea, 3px 3px #53a7ea;
        transform: translateX(-3px);
    }
</style>

<div class=\"bg-gray-900\">
    <div class=\"mx-auto max-w-7xl py-12 px-4 sm:px-6 lg:px-8 lg:py-24\">
        <div class=\"space-y-12\">
            <div class=\"space-y-5 sm:space-y-4 md:max-w-xl lg:max-w-3xl xl:max-w-none\">
                <h2 class=\"text-3xl font-bold tracking-tight text-white sm:text-4xl\">Notre Équipe</h2>
                <p class=\"text-xl text-gray-300\">Découvrez les passionnés derrière DiceFinder.</p>
            </div>
                <ul role=\"list\" class=\"space-y-4 sm:grid sm:grid-cols-2 sm:gap-6 sm:space-y-0 lg:grid-cols-3 lg:gap-8\">
                    <li class=\"rounded-lg team-card\">
                        <div class=\"space-y-6 xl:space-y-10\">
                            <img class=\"mx-auto h-40 w-40 rounded-full xl:h-56 xl:w-56\" src=\"{{ asset('images/talep.jpg') }}\" alt=\"Talep\">
                            <div class=\"space-y-2\">
                                <h3 class=\"text-white text-lg font-medium leading-6\">Talep (Pelcat Théo)</h3>
                                <p class=\"text-indigo-400\">Fondateur</p>
                                <ul role=\"list\" class=\"flex justify-center space-x-5\">
                                    <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">X</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                        <path d=\"M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84\" />
                                        </svg>
                                    </a>
                                    </li>
                                    <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">LinkedIn</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                        <path fill-rule=\"evenodd\" d=\"M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>

                <li class=\"rounded-lg team-card\">
                    <div class=\"space-y-6 xl:space-y-10\">
                        <img class=\"mx-auto h-40 w-40 rounded-full xl:h-56 xl:w-56\" src=\"{{ asset('images/unknow.png') }}\" alt=\"Benjamin\">
                        <div class=\"space-y-2\">
                        <h3 class=\"text-white text-lg font-medium leading-6\">Benjamin</h3>
                        <p class=\"text-indigo-400\">Développeur Principal</p>
                            <ul role=\"list\" class=\"flex justify-center space-x-5\">
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">X</span>
                                            <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                        <path d=\"M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84\" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">LinkedIn</span>
                                            <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                        <path fill-rule=\"evenodd\" d=\"M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class=\"rounded-lg team-card\">
                    <div class=\"space-y-6 xl:space-y-10\">
                        <img class=\"mx-auto h-40 w-40 rounded-full xl:h-56 xl:w-56\" src=\"{{ asset('images/unknow.png') }}\" alt=\"Gui\">
                        <div class=\"space-y-2\">
                            <h3 class=\"text-white text-lg font-medium leading-6\">Gui</h3>
                            <p class=\"text-indigo-400\">Administrateur</p>
                            <ul role=\"list\" class=\"flex justify-center space-x-5\">
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">X</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                            <path d=\"M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84\" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">LinkedIn</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                            <path fill-rule=\"evenodd\" d=\"M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class=\"rounded-lg team-card\">
                    <div class=\"space-y-6 xl:space-y-10\">
                        <img class=\"mx-auto h-40 w-40 rounded-full xl:h-56 xl:w-56\" src=\"{{ asset('images/unknow.png') }}\" alt=\"Laura\">
                        <div class=\"space-y-2\">
                        <h3 class=\"text-white text-lg font-medium leading-6\">Laura</h3>
                        <p class=\"text-indigo-400\">Administratrice</p>
                            <ul role=\"list\" class=\"flex justify-center space-x-5\">
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">X</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                            <path d=\"M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84\" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">LinkedIn</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                            <path fill-rule=\"evenodd\" d=\"M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>

                <li class=\"rounded-lg team-card\">
                    <div class=\"space-y-6 xl:space-y-10\">
                        <img class=\"mx-auto h-40 w-40 rounded-full xl:h-56 xl:w-56\" src=\"{{ asset('images/unknow.png') }}\" alt=\"Paul\">
                        <div class=\"space-y-2\">
                            <h3 class=\"text-white text-lg font-medium leading-6\">Paul</h3>
                            <p class=\"text-indigo-400\">Modérateur</p>
                            <ul role=\"list\" class=\"flex justify-center space-x-5\">
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">X</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                            <path d=\"M6.29 18.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0020 3.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.073 4.073 0 01.8 7.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 010 16.407a11.616 11.616 0 006.29 1.84\" />
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href=\"#\" class=\"text-gray-400 hover:text-gray-300\">
                                        <span class=\"sr-only\">LinkedIn</span>
                                        <svg class=\"h-5 w-5\" fill=\"currentColor\" viewBox=\"0 0 20 20\" aria-hidden=\"true\">
                                            <path fill-rule=\"evenodd\" d=\"M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z\" clip-rule=\"evenodd\" />
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
{% endblock %}
", "footer/team.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\footer\\team.html.twig");
    }
}
