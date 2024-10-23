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

/* support/contact_email.html.twig */
class __TwigTemplate_3732399e6270922ef3f751a22f45d241 extends Template
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
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "support/contact_email.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "support/contact_email.html.twig"));

        // line 1
        yield "<h1>Nouveau message de contact</h1>

<p>
    Nom : ";
        // line 4
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["contact_name"]) || array_key_exists("contact_name", $context) ? $context["contact_name"] : (function () { throw new RuntimeError('Variable "contact_name" does not exist.', 4, $this->source); })()), "html", null, true);
        yield "
</p>

<p>
    Email : ";
        // line 8
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["contact_email"]) || array_key_exists("contact_email", $context) ? $context["contact_email"] : (function () { throw new RuntimeError('Variable "contact_email" does not exist.', 8, $this->source); })()), "html", null, true);
        yield "
</p>

<p>
    Message : ";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["message_content"]) || array_key_exists("message_content", $context) ? $context["message_content"] : (function () { throw new RuntimeError('Variable "message_content" does not exist.', 12, $this->source); })()), "html", null, true);
        yield "
</p>
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "support/contact_email.html.twig";
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
        return array (  67 => 12,  60 => 8,  53 => 4,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<h1>Nouveau message de contact</h1>

<p>
    Nom : {{ contact_name }}
</p>

<p>
    Email : {{ contact_email }}
</p>

<p>
    Message : {{ message_content }}
</p>
", "support/contact_email.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\support\\contact_email.html.twig");
    }
}
