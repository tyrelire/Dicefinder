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

/* chat/index.html.twig */
class __TwigTemplate_b6e69806a065356f9691db891b00c6e2 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chat/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chat/index.html.twig", 1);
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

        yield "Discussion";
        
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
        yield "<div class=\"flex flex-col md:flex-row-reverse h-screen text-white gap-4 px-4 py-4 w-full mx-auto\">
    <div class=\"flex-grow md:flex-grow-[4] h-[85vh] flex flex-col bg-white/10 backdrop-blur-lg rounded-lg shadow-lg mb-4 md:mb-0 border border-white/20 w-full md:w-[78%]\">
        <div class=\"bg-white/10 backdrop-blur-lg p-4 rounded-t-lg border-b border-white/20 text-center flex flex-col items-center\">
            <h2 id=\"chatTitle\" class=\"text-lg font-semibold flex items-center justify-center w-full\">
                ";
        // line 10
        if ((array_key_exists("selectedContactId", $context) && array_key_exists("selectedContactName", $context))) {
            // line 11
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_profile_show", ["id" => (isset($context["selectedContactId"]) || array_key_exists("selectedContactId", $context) ? $context["selectedContactId"] : (function () { throw new RuntimeError('Variable "selectedContactId" does not exist.', 11, $this->source); })())]), "html", null, true);
            yield "\" class=\"text-white hover:underline\">
                        ";
            // line 12
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedContactName"]) || array_key_exists("selectedContactName", $context) ? $context["selectedContactName"] : (function () { throw new RuntimeError('Variable "selectedContactName" does not exist.', 12, $this->source); })()), "html", null, true);
            yield "
                    </a>
                ";
        } else {
            // line 15
            yield "                    Aucune conversation sélectionnée
                ";
        }
        // line 17
        yield "            </h2>
            ";
        // line 18
        if (array_key_exists("selectedContactId", $context)) {
            // line 19
            yield "                <button id=\"blockButton\" class=\"text-red-500 hover:text-red-700 mt-2\" onclick=\"toggleBlockUser(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["selectedContactId"]) || array_key_exists("selectedContactId", $context) ? $context["selectedContactId"] : (function () { throw new RuntimeError('Variable "selectedContactId" does not exist.', 19, $this->source); })()), "html", null, true);
            yield ")\">
                    Bloquer
                </button>
            ";
        }
        // line 23
        yield "        </div>
        <div id=\"messagesContainer\" class=\"flex-1 overflow-y-auto p-4 space-y-4 bg-transparent custom-scrollbar\"></div>
        <div id=\"newMessageBanner\" class=\"hidden bg-blue-500 text-white p-2 text-center cursor-pointer hover:bg-blue-600\">
            Nouveau message - Cliquez pour descendre
        </div>
        <form id=\"messageForm\" class=\"bg-white/10 backdrop-blur-lg p-2 rounded-b-lg border-t border-white/20\">
            <div class=\"flex items-center px-3 py-2 rounded-lg dark:bg-gray-700 relative w-full\">
                <button id=\"gifButton\" class=\"bg-blue-500 p-2 rounded-full hover:bg-blue-600 mr-2\">GIF</button>
                <div class=\"relative flex-grow\">
                    <textarea id=\"messageInput\" rows=\"1\" class=\"block w-full p-2.5 pr-12 text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\" placeholder=\"Votre message...\" style=\"max-height: 35vh; overflow-y: auto;\"></textarea>
                    <span id=\"charCount\" class=\"absolute bottom-2 right-3 text-sky-500 text-xs pointer-events-none\">2000</span>
                </div>
            </div>
            <div class=\"flex flex-col items-center\">
                <div class=\"flex justify-end w-full\">
                    <div id=\"charCount\" class=\"text-sky-500 text-sm mt-1\"></div>
                </div>
                <div id=\"errorMessage\" class=\"text-red-500 text-sm hidden mt-1 text-center\">Le message ne peut pas dépasser 2000 caractères.</div>
            </div>
        </form>
    </div>
    <div class=\"w-full md:w-[22%] md:flex-grow-[1] h-[85vh] bg-white/10 backdrop-blur-lg p-4 space-y-2 rounded-lg shadow-lg border border-white/20 overflow-y-auto\">
        <div class=\"flex flex-col items-center\">
            <div class=\"flex justify-between items-center w-full\">
                <h2 class=\"text-lg font-bold\">Conversations</h2>
                <button id=\"openSearchButton\" class=\"bg-blue-500 w-10 h-10 rounded-full hover:bg-blue-600 ml-4 flex items-center justify-center text-white\">+</button>
            </div>
            <input type=\"text\" id=\"conversationSearch\" placeholder=\"Rechercher une conversation...\" class=\"w-full p-2 my-2 rounded bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none\">
        </div>
        <ul id=\"conversationList\" class=\"space-y-2 mt-2 overflow-y-auto max-h-[45vh] md:max-h-[70vh] overflow-x-hidden\">
            ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 53, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 54
            yield "                ";
            $context["contactUser"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "participants", [], "any", false, false, false, 54), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54) != (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 54, $this->source); })())); }));
            // line 55
            yield "                ";
            if (((isset($context["contactUser"]) || array_key_exists("contactUser", $context) ? $context["contactUser"] : (function () { throw new RuntimeError('Variable "contactUser" does not exist.', 55, $this->source); })()) === false)) {
                // line 56
                yield "                    ";
                $context["contactUser"] = ["user" => ["username" => "Moi", "id" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 56, $this->source); })())]];
                // line 57
                yield "                    ";
                $context["avatarUrl"] = (((isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 57, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . (isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 57, $this->source); })())))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png")));
                // line 58
                yield "                ";
            } else {
                // line 59
                yield "                    ";
                $context["avatarUrl"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactUser"]) || array_key_exists("contactUser", $context) ? $context["contactUser"] : (function () { throw new RuntimeError('Variable "contactUser" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "avatar", [], "any", false, false, false, 59)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactUser"]) || array_key_exists("contactUser", $context) ? $context["contactUser"] : (function () { throw new RuntimeError('Variable "contactUser" does not exist.', 59, $this->source); })()), "user", [], "any", false, false, false, 59), "avatar", [], "any", false, false, false, 59)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png")));
                // line 60
                yield "                ";
            }
            // line 61
            yield "                <li id=\"conversation-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "id", [], "any", false, false, false, 61), "html", null, true);
            yield "\" 
                    class=\"cursor-pointer flex items-center p-2 conversation-item ";
            // line 62
            if ((array_key_exists("selectedConversationId", $context) && ((isset($context["selectedConversationId"]) || array_key_exists("selectedConversationId", $context) ? $context["selectedConversationId"] : (function () { throw new RuntimeError('Variable "selectedConversationId" does not exist.', 62, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "id", [], "any", false, false, false, 62)))) {
                yield "selected-conversation";
            } else {
                yield "bg-transparent";
            }
            yield "\" 
                    onclick=\"openConversation(";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "id", [], "any", false, false, false, 63), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactUser"]) || array_key_exists("contactUser", $context) ? $context["contactUser"] : (function () { throw new RuntimeError('Variable "contactUser" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "username", [], "any", false, false, false, 63), "html", null, true);
            yield "', ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactUser"]) || array_key_exists("contactUser", $context) ? $context["contactUser"] : (function () { throw new RuntimeError('Variable "contactUser" does not exist.', 63, $this->source); })()), "user", [], "any", false, false, false, 63), "id", [], "any", false, false, false, 63), "html", null, true);
            yield ")\">
                    
                    <div class=\"flex items-center justify-center w-12 h-12\">
                        <img src=\"";
            // line 66
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarUrl"]) || array_key_exists("avatarUrl", $context) ? $context["avatarUrl"] : (function () { throw new RuntimeError('Variable "avatarUrl" does not exist.', 66, $this->source); })()), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactUser"]) || array_key_exists("contactUser", $context) ? $context["contactUser"] : (function () { throw new RuntimeError('Variable "contactUser" does not exist.', 66, $this->source); })()), "user", [], "any", false, false, false, 66), "username", [], "any", false, false, false, 66), "html", null, true);
            yield "\" class=\"w-10 h-10 rounded-full object-cover\">
                    </div>
                    
                    <div class=\"flex items-center flex-1\">
                        <span class=\"text-white hover:underline truncate block\" style=\"max-width: 9rem;\">
                            ";
            // line 71
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactUser"]) || array_key_exists("contactUser", $context) ? $context["contactUser"] : (function () { throw new RuntimeError('Variable "contactUser" does not exist.', 71, $this->source); })()), "user", [], "any", false, false, false, 71), "username", [], "any", false, false, false, 71), "html", null, true);
            yield "
                        </span>
                    </div>
                </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 76
            yield "                <li class=\"bg-white/10 p-2 rounded-lg border border-white/20\">Aucune conversation disponible.</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['conversation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 78
        yield "        </ul>
    </div>
    <div id=\"userSearchPopup\" class=\"fixed inset-0 bg-black/60 backdrop-blur-md flex items-center justify-center hidden z-50\">
        <div class=\"bg-white/10 backdrop-blur-lg p-6 rounded-lg w-11/12 md:w-1/3 text-center border border-white/20\">
            <h2 class=\"text-lg font-bold mb-4\">Rechercher un utilisateur</h2>
            <input type=\"text\" id=\"userSearch\" placeholder=\"Rechercher un utilisateur...\" class=\"w-full p-2 mb-4 rounded bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none\">
            <div id=\"userResults\" class=\"bg-white/10 rounded p-2 space-y-2 max-h-40 overflow-y-auto backdrop-blur-md border border-white/20\"></div>
            <button id=\"closeSearchButton\" class=\"mt-4 px-4 py-2 bg-red-500 rounded-full hover:bg-red-600\">Annuler</button>
        </div>
    </div>
    <div id=\"gifPopup\" class=\"hidden fixed inset-0 bg-black/70 backdrop-blur-md flex items-center justify-center z-50\">
        <div class=\"bg-white/10 backdrop-blur-lg w-11/12 md:w-3/4 lg:w-2/3 xl:w-1/2 p-6 rounded-lg text-center border border-white/20 max-h-[80vh] overflow-y-auto relative\">
            <h2 class=\"text-lg font-bold mb-4 text-center\">Rechercher un GIF</h2>
            <button id=\"closeGifButton\" class=\"absolute top-2 right-2 text-red-500 hover:text-red-700\">
                &times;
            </button>
            <div id=\"gifCategories\" class=\"flex flex-wrap justify-center gap-2 mb-4\">
                <button class=\"gif-category bg-blue-500 p-2 rounded-full hover:bg-blue-600 text-white\" data-query=\"roleplay\">RPG</button>
                <button class=\"gif-category bg-blue-500 p-2 rounded-full hover:bg-blue-600 text-white\" data-query=\"meme\">Meme</button>
                <button class=\"gif-category bg-blue-500 p-2 rounded-full hover:bg-blue-600 text-white\" data-query=\"jdr\">JDR</button>
                <button class=\"gif-category bg-blue-500 p-2 rounded-full hover:bg-blue-600 text-white\" data-query=\"dungeon&dragons\">D&D</button>
            </div>
            <button id=\"cancelCategoryButton\" class=\"hidden bg-red-500 px-4 py-2 rounded-full hover:bg-red-600 mb-4 text-white\">Annuler la catégorie</button>
            <input type=\"text\" id=\"gifSearch\" placeholder=\"Rechercher un GIF...\" class=\"w-full p-2 mb-4 rounded bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none\">
            <div id=\"gifResults\" class=\"bg-transparent rounded p-2 space-y-2 overflow-y-auto backdrop-blur-md border border-white/20 grid grid-cols-2 md:grid-cols-3 gap-2 max-h-[60vh]\"></div>
        </div>
    </div>
</div>
<style>

.custom-scrollbar::-webkit-scrollbar {
    width: 8px;
}

#newMessageBanner {
    display: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

#newMessageBanner:hover {
    background-color: rgba(0, 122, 255, 0.8);
}

.avatar-container {
    width: 54px;
    height: 54px;
    border-radius: 50%;
    overflow: hidden;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
}

#messageInput::-webkit-scrollbar {
    width: 6px;
    height: 6px;
}

#messageInput::-webkit-scrollbar-track {
    background: transparent;
    border-radius: 10px;
}

#messageInput::-webkit-scrollbar-thumb {
    background-color: rgba(14, 165, 233, 0.7);
    border-radius: 10px;
    border: 1px solid transparent;
}

#messageInput::-webkit-scrollbar-thumb:hover {
    background-color: rgba(14, 165, 233, 1);
}

#messageInput {
    scrollbar-width: thin;
    scrollbar-color: rgba(14, 165, 233, 0.7) transparent;
    padding-right: 2rem;
}

#closeGifButton {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    background-color: transparent;
    border-radius: 50%;
    cursor: pointer;
    font-size: 2rem;
    color: red;
    position: absolute;
    top: 2px;
    right: 2px;
    z-index: 10;
}

#closeGifButton:hover {
    background-color: rgba(255, 0, 0, 0.2);
    transition: background-color 0.3s;
}

.custom-scrollbar::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
}

.custom-scrollbar::-webkit-scrollbar-thumb {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    border: 2px solid transparent;
}

.message-wrapper {
    display: flex;
    align-items: flex-end;
    width: 100%;
    gap: 8px;
}

.message-wrapper img {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    object-fit: cover;
}

.message-sent, .message-received {
    padding: 10px 15px;
    margin-top: 6px;
    max-width: 90%;
    min-width: 120px;
    width: fit-content;
    word-wrap: break-word;
    overflow-wrap: break-word;
    white-space: pre-wrap;
    word-break: break-word;
    border-radius: 18px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

.message-sent:hover {
    box-shadow: 0px 0px 12px 6px rgba(0, 150, 255, 0.6);
    transform: scale(1.05);
}

.message-received:hover {
    box-shadow: 0px 0px 12px 6px rgba(128, 128, 128, 0.6);
    transform: scale(1.05);
}

.message-sent {
    align-self: flex-end;
    background: linear-gradient(135deg, #005BB5, #007AFF);
    color: #ffffff;
    border-radius: 18px 18px 4px 18px;
    margin-left: auto;
}

.message-received {
    align-self: flex-start;
    background: linear-gradient(135deg, #444, #666);
    color: #ffffff;
    border-radius: 18px 18px 18px 4px;
    margin-right: auto;
    margin-left: 4px;
}

.message-content {
    font-size: 0.9rem;
    line-height: 1.4;
}

.timestamp-sent {
    text-align: right;
    margin-top: 4px;
    color: rgba(255, 255, 255, 0.6);
    font-size: 0.75rem;
}

.timestamp-received {
    text-align: left;
    margin-top: 4px;
    color: rgba(255, 255, 255, 0.6);
    font-size: 0.75rem;
}

#charCount {
    position: absolute;
    bottom: 0.5rem;
    right: 1rem;
    font-size: 0.75rem;
    pointer-events: none;
    color: #0EA5E9;
}

#messageInput {
    resize: none;
    overflow: hidden;
    max-height: 35vh;
    min-height: 2.5rem;
}

.conversation-item {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    gap: 10px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    border-radius: 10px;
    cursor: pointer;
    height: 60px;
}

.conversation-item .avatar-container {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    background-size: cover;
}

.conversation-item .avatar-container img {
    width: 44px !important;
    height: 44px !important;
    object-fit: cover;
    transition: none;
}

.conversation-item.selected-conversation,
.conversation-item:hover:not(.selected-conversation) {
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    backdrop-filter: blur(10px);
}

.conversation-item span {
    display: inline-block;
    text-align: left;
}
</style>

<script type=\"module\">
    import { initializeApp } from \"https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js\";
    import { getDatabase, ref, push, onChildAdded } from \"https://www.gstatic.com/firebasejs/9.6.1/firebase-database.js\";
    import { format } from \"https://cdn.jsdelivr.net/npm/date-fns@2.22.1/esm/index.js\";
    import { fr } from \"https://cdn.jsdelivr.net/npm/date-fns@2.22.1/esm/locale/index.js\";
    document.addEventListener(\"DOMContentLoaded\", function () {
        const conversationSearch = document.getElementById('conversationSearch');
        const conversationList = document.getElementById('conversationList');
        conversationSearch.addEventListener('input', function() {
            const searchTerm = conversationSearch.value.toLowerCase();
            const conversations = conversationList.getElementsByTagName('li');
            Array.from(conversations).forEach(conversation => {
                const username = conversation.textContent.toLowerCase();
                if (username.includes(searchTerm)) {
                    conversation.style.display = '';
                } else {
                    conversation.style.display = 'none';
                }
            });
        });
        const firebaseConfig = {
            apiKey: \"AIzaSyD0ZtA8CXaJO9KAziDJXWCQ9rEQ7lFA1Uw\",
            authDomain: \"dicefinder-42b86.firebaseapp.com\",
            databaseURL: \"https://dicefinder-42b86-default-rtdb.europe-west1.firebasedatabase.app\",
            projectId: \"dicefinder-42b86\",
            storageBucket: \"dicefinder-42b86.appspot.com\",
            messagingSenderId: \"15582622513\",
            appId: \"1:15582622513:web:690f6bf7297cf610e6f610\"
        };
        const app = initializeApp(firebaseConfig);
        const database = getDatabase(app);
        const userAvatar = \"";
        // line 358
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 358, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . (isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 358, $this->source); })())))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"))), "html", null, true);
        yield "\";   
        const defaultAvatarUrl = \"";
        // line 359
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
        yield "\";     
        let conversationId = null;
        let cooldown = false;
        let activeListener = null;
        const messageInput = document.querySelector('#messageInput');
        const charCount = document.getElementById('charCount');
        const errorMessage = document.getElementById('errorMessage');
        const maxChars = 2000;
        charCount.innerText = `\${maxChars}`; 
        function autoResizeTextarea() {
            if (messageInput.scrollHeight < window.innerHeight * 0.35) {
                messageInput.style.height = 'auto';
                messageInput.style.height = `\${messageInput.scrollHeight}px`;
            }
        }
        messageInput.addEventListener('input', () => {
            const content = messageInput.value;
            const remainingChars = maxChars - content.length;
            charCount.innerText = `\${remainingChars}`;
            if (remainingChars < 0) {
                charCount.style.color = 'red';
                errorMessage.classList.remove('hidden');
            } else {
                charCount.style.color = '#0EA5E9';
                errorMessage.classList.add('hidden');
            }
            autoResizeTextarea();
        });
        messageInput.addEventListener('keydown', (event) => {
            if (event.key === \"Enter\" && !event.shiftKey) {
                event.preventDefault();
                const content = messageInput.value.trim();
                if (content.length > 0 && content.length <= maxChars && conversationId) {
                    sendMessage(conversationId, ";
        // line 392
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 392, $this->source); })())), "html", null, true);
        yield ", content, userAvatar);
                    messageInput.value = \"\";
                    charCount.innerText = `\${maxChars}`;
                    errorMessage.classList.add('hidden');
                }
            }
        });

            const messagesContainer = document.getElementById('messagesContainer');
    const newMessageBanner = document.getElementById('newMessageBanner');
    let isUserScrollingUp = false;

    // Détecte si l'utilisateur scrolle vers le haut
    messagesContainer.addEventListener('scroll', () => {
        const { scrollTop, scrollHeight, clientHeight } = messagesContainer;
        isUserScrollingUp = scrollTop < scrollHeight - clientHeight - 10;

        // Cache la bannière si l'utilisateur est en bas
        if (!isUserScrollingUp) {
            newMessageBanner.classList.add('hidden');
        }
    });

    function scrollToBottom() {
        setTimeout(() => {
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
            newMessageBanner.classList.add('hidden'); // Cache la bannière après le scroll vers le bas
        }, 100);
    }
    newMessageBanner.addEventListener('click', scrollToBottom);
function displayMessage(message, isCurrentUser) {
    const messagesContainer = document.getElementById('messagesContainer');

    // Création des éléments du message
    const messageWrapper = document.createElement('div');
    messageWrapper.classList.add('message-wrapper', isCurrentUser ? 'justify-end' : 'justify-start');

    const avatarImage = document.createElement('img');
    avatarImage.src = message.avatar || \"";
        // line 430
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
        yield "\";
    avatarImage.alt = \"Avatar\";

    const messageContainer = document.createElement('div');
    messageContainer.classList.add('message-container');

    const messageBubble = document.createElement('div');
    messageBubble.classList.add(isCurrentUser ? 'message-sent' : 'message-received');
    messageBubble.innerHTML = message.content;

    const timestamp = document.createElement('div');
    timestamp.classList.add(isCurrentUser ? 'timestamp-sent' : 'timestamp-received');
    timestamp.textContent = format(new Date(message.timestamp), 'Pp', { locale: fr });

    // Assemblage des éléments
    messageContainer.appendChild(messageBubble);
    messageContainer.appendChild(timestamp);
    messageWrapper.appendChild(isCurrentUser ? messageContainer : avatarImage);
    messageWrapper.appendChild(isCurrentUser ? avatarImage : messageContainer);
    
    messagesContainer.appendChild(messageWrapper);

    // Affiche la bannière \"Nouveau message\" si l'utilisateur n'est pas en bas de la conversation
    if (isUserScrollingUp && !isCurrentUser) {
        newMessageBanner.classList.remove('hidden');
    } else {
        scrollToBottom();
    }
}

        document.getElementById('openSearchButton').addEventListener('click', () => {
            document.getElementById('userSearchPopup').classList.remove('hidden');
        });
        document.getElementById('closeSearchButton').addEventListener('click', () => {
            document.getElementById('userSearchPopup').classList.add('hidden');
            document.getElementById('userSearch').value = '';
            document.getElementById('userResults').innerHTML = '';
        });
        const tenorApiKey = 'AIzaSyD5ihPGmQoDQnr8tuAynv7QnWR_KtU27lA';
        const gifButton = document.getElementById('gifButton');
        const gifPopup = document.getElementById('gifPopup');
        const gifSearch = document.getElementById('gifSearch');
        const gifResults = document.getElementById('gifResults');
        const closeGifButton = document.getElementById('closeGifButton');
        const cancelCategoryButton = document.getElementById('cancelCategoryButton');
        const gifCategories = document.querySelectorAll('.gif-category');
        gifButton.addEventListener('click', (event) => {
            event.preventDefault();
            gifPopup.classList.remove('hidden');
            searchGifs(\"trending\");
        });
            closeGifButton.addEventListener('click', () => {
                document.getElementById('gifPopup').classList.add('hidden');
                document.getElementById('gifSearch').value = '';
                document.getElementById('gifResults').innerHTML = '';
                document.getElementById('cancelCategoryButton').classList.add('hidden');
            });
        function displayGifResults(gifs) {
            gifResults.innerHTML = '';
            gifs.forEach(gif => {
                const gifUrl = gif.media_formats.gif.url;
                const img = document.createElement('img');
                img.src = gifUrl;
                img.className = 'w-full h-auto rounded cursor-pointer';
                img.addEventListener('click', () => selectGif(gifUrl));
                gifResults.appendChild(img);
            });
        }
        gifCategories.forEach(button => {
            button.addEventListener('click', () => {
                const query = button.getAttribute('data-query');
                searchGifs(query);
                cancelCategoryButton.classList.remove('hidden');
            });
        });
        cancelCategoryButton.addEventListener('click', () => {
            gifResults.innerHTML = '';
            cancelCategoryButton.classList.add('hidden');
            gifSearch.value = '';
        });
        gifSearch.addEventListener('input', () => {
            const query = gifSearch.value.trim();
            if (query) {
                searchGifs(query);
                cancelCategoryButton.classList.add('hidden');
            }
        });
        async function searchGifs(query) {
            try {
                const response = await fetch(`https://tenor.googleapis.com/v2/search?q=\${query}&key=\${tenorApiKey}&limit=9`);
                const data = await response.json();
                displayGifResults(data.results);
            } catch (error) {
                console.error('Erreur lors de la recherche de GIFs:', error);
            }
        }
        function selectGif(gifUrl) {
            const gifHTML = `<img src=\"\${gifUrl}\" class=\"w-32 h-32 rounded\">`;
            sendMessage(conversationId, ";
        // line 528
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 528, $this->source); })())), "html", null, true);
        yield ", gifHTML, userAvatar);
            gifPopup.classList.add('hidden');
            gifSearch.value = '';
            gifResults.innerHTML = '';
            cancelCategoryButton.classList.add('hidden');
        }


        let notificationVisible = false;

        function showNewMessageNotification() {
            let notification = document.getElementById('newMessageNotification');
            if (!notification) {
                notification = document.createElement('div');
                notification.id = 'newMessageNotification';
                notification.innerText = 'Nouveau message';
                notification.style.position = 'fixed';
                notification.style.bottom = '20px';
                notification.style.right = '20px';
                notification.style.padding = '10px';
                notification.style.backgroundColor = '#007AFF';
                notification.style.color = '#fff';
                notification.style.borderRadius = '5px';
                notification.style.cursor = 'pointer';
                notification.style.zIndex = '1000';
                notification.addEventListener('click', () => {
                    scrollToBottom();
                    notification.style.display = 'none';
                    notificationVisible = false;
                });
                document.body.appendChild(notification);
            }
            notification.style.display = 'block';
            notificationVisible = true;
        }

        window.openConversation = function (convId, contactName, contactId) {
            document.querySelectorAll('.conversation-item').forEach(item => item.classList.remove('selected-conversation'));
            const selectedItem = document.getElementById(`conversation-\${convId}`);
            selectedItem.classList.add('selected-conversation');
            conversationId = convId;
            document.getElementById('chatTitle').innerHTML = `
                <a href=\"/profile/\${contactId}\" class=\"text-white hover:underline truncate\" style=\"max-width: 100%; display: inline-block;\">
                    \${contactName}
                </a>
            `;
            const avatarContainer = selectedItem.querySelector('.avatar-container');
            if (avatarContainer) {
                const avatarImage = avatarContainer.querySelector('img');
                avatarImage.classList.add('w-10', 'h-10', 'rounded-full', 'object-cover');
            }
            listenToMessages(conversationId, contactName);
        };

function listenToMessages(conversationId, contactName) {
    // Référence de conversation dans Firebase
    const messagesRef = ref(database, `conversations/\${conversationId}/messages`);
    // Nettoie les messages actuels dans l'interface
    document.getElementById('messagesContainer').innerHTML = \"\";
    
    // Si un écouteur précédent est actif, on le retire
    if (activeListener) {
        activeListener();
    }

    // Activation de l'écoute sur les nouveaux messages
    const unsubscribe = onChildAdded(messagesRef, (snapshot) => {
        const message = snapshot.val();
        // Appel à displayMessage pour chaque message reçu
        displayMessage(message, message.sender_id === ";
        // line 597
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 597, $this->source); })())), "html", null, true);
        yield ");
    });
    activeListener = unsubscribe;
}

        document.getElementById('userSearch').addEventListener('input', async (event) => {
            const query = event.target.value.trim();
            if (!query) {
                document.getElementById('userResults').innerHTML = '';
                return;
            }
            try {
                const response = await fetch(`/user/search?query=\${encodeURIComponent(query)}`);
                const users = await response.json();
                const resultsContainer = document.getElementById('userResults');
                resultsContainer.innerHTML = '';
                users.forEach(user => {
                    const userElement = document.createElement('div');
                    userElement.classList.add('p-2', 'hover:bg-gray-700', 'cursor-pointer');
                    userElement.textContent = user.username;
                    userElement.onclick = () => startPrivateConversation(user.id, user.username);
                    resultsContainer.appendChild(userElement);
                });
            } catch (error) {
                console.error(\"Erreur lors de la recherche d'utilisateurs :\", error);
            }
        });
        async function startPrivateConversation(userId, username) {
            try {
                const response = await fetch(`/chat/private/\${userId}`, { method: 'POST' });
                if (!response.ok) throw new Error(\"Erreur de serveur\");
                const { conversationId } = await response.json();

                const existingConversation = document.getElementById(`conversation-\${conversationId}`);
                if (existingConversation) {
                    openConversation(conversationId, username, userId);
                } else {
                    const conversationItem = document.createElement('li');
                    conversationItem.id = `conversation-\${conversationId}`;
                    conversationItem.className = 'cursor-pointer flex items-center p-2 conversation-item bg-transparent';
                    conversationItem.onclick = () => openConversation(conversationId, username, userId);

                    const avatarContainer = document.createElement('div');
                    avatarContainer.className = 'flex-shrink-0 w-12 h-12 mr-3';
                    const avatarImage = document.createElement('img');
                    avatarImage.src = \"/images/default-avatar.png\";
                    avatarImage.alt = username;
                    avatarImage.className = 'w-10 h-10 rounded-full object-cover';
                    avatarContainer.appendChild(avatarImage);

                    const usernameContainer = document.createElement('div');
                    usernameContainer.className = 'flex-1';
                    const usernameSpan = document.createElement('span');
                    usernameSpan.className = 'text-white hover:underline truncate w-full block';
                    usernameSpan.textContent = username;

                    usernameContainer.appendChild(usernameSpan);
                    conversationItem.appendChild(avatarContainer);
                    conversationItem.appendChild(usernameContainer);
                    document.getElementById('conversationList').appendChild(conversationItem);

                    openConversation(conversationId, username, userId);
                }

                document.getElementById('userSearchPopup').classList.add('hidden');
            } catch (error) {
                console.error(\"Erreur lors de la création de la conversation privée :\", error);
            }
        }
        async function loadConversations() {
            try {
                const response = await fetch(`/chat/get-conversations`);
                let conversations = await response.json();
                if (!Array.isArray(conversations)) {
                    conversations = Object.values(conversations);
                }
                conversationList.innerHTML = '';
                conversations.forEach(({ id, contactUsername, avatarUrl }) => {
                    const conversationItem = document.createElement('li');
                    conversationItem.id = `conversation-\${id}`;
                    conversationItem.className = 'cursor-pointer conversation-item flex items-center p-2 rounded-lg';
                    const avatarContainer = document.createElement('div');
                    avatarContainer.className = 'avatar-container mr-3';
                    const avatarImage = document.createElement('img');
                    avatarImage.src = avatarUrl || \"";
        // line 681
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
        yield "\";
                    avatarImage.alt = contactUsername;
                    avatarImage.classList.add('w-10', 'h-10', 'rounded-full', 'object-cover');
                    avatarContainer.appendChild(avatarImage);
                    const usernameSpan = document.createElement('span');
                    usernameSpan.className = 'text-white';
                    usernameSpan.textContent = contactUsername;
                    conversationItem.appendChild(avatarContainer);
                    conversationItem.appendChild(usernameSpan);
                    conversationItem.onclick = () => openConversation(id, contactUsername);
                    conversationList.appendChild(conversationItem);
                });
            } catch (error) {
                console.error(\"Erreur lors de la récupération des conversations :\", error);
            }
        }
        function sendMessage(conversationId, senderId, content, avatar) {
            const messagesRef = ref(database, `conversations/\${conversationId}/messages`);
            const messageData = {
                sender_id: senderId,
                timestamp: Date.now(),
                content,
                avatar: avatar || defaultAvatarUrl,                
                status: 'unread'
            };
            push(messagesRef, messageData);
        }
        function startCooldown() {
            cooldown = true;
            let remainingTime = 1.5;
            const messageInput = document.querySelector('#messageInput');
            const interval = setInterval(() => {
                remainingTime -= 0.1;
                messageInput.placeholder = `Attendez \${remainingTime.toFixed(1)}s...`;
                if (remainingTime <= 0) {
                    clearInterval(interval);
                    messageInput.placeholder = \"Écrivez un message...\";
                    cooldown = false;
                }
            }, 100);
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
        return "chat/index.html.twig";
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
        return array (  867 => 681,  780 => 597,  708 => 528,  607 => 430,  566 => 392,  530 => 359,  526 => 358,  244 => 78,  237 => 76,  227 => 71,  217 => 66,  207 => 63,  199 => 62,  194 => 61,  191 => 60,  188 => 59,  185 => 58,  182 => 57,  179 => 56,  176 => 55,  173 => 54,  168 => 53,  136 => 23,  128 => 19,  126 => 18,  123 => 17,  119 => 15,  113 => 12,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Discussion{% endblock %}

{% block body %}
<div class=\"flex flex-col md:flex-row-reverse h-screen text-white gap-4 px-4 py-4 w-full mx-auto\">
    <div class=\"flex-grow md:flex-grow-[4] h-[85vh] flex flex-col bg-white/10 backdrop-blur-lg rounded-lg shadow-lg mb-4 md:mb-0 border border-white/20 w-full md:w-[78%]\">
        <div class=\"bg-white/10 backdrop-blur-lg p-4 rounded-t-lg border-b border-white/20 text-center flex flex-col items-center\">
            <h2 id=\"chatTitle\" class=\"text-lg font-semibold flex items-center justify-center w-full\">
                {% if selectedContactId is defined and selectedContactName is defined %}
                    <a href=\"{{ path('app_profile_show', { 'id': selectedContactId }) }}\" class=\"text-white hover:underline\">
                        {{ selectedContactName }}
                    </a>
                {% else %}
                    Aucune conversation sélectionnée
                {% endif %}
            </h2>
            {% if selectedContactId is defined %}
                <button id=\"blockButton\" class=\"text-red-500 hover:text-red-700 mt-2\" onclick=\"toggleBlockUser({{ selectedContactId }})\">
                    Bloquer
                </button>
            {% endif %}
        </div>
        <div id=\"messagesContainer\" class=\"flex-1 overflow-y-auto p-4 space-y-4 bg-transparent custom-scrollbar\"></div>
        <div id=\"newMessageBanner\" class=\"hidden bg-blue-500 text-white p-2 text-center cursor-pointer hover:bg-blue-600\">
            Nouveau message - Cliquez pour descendre
        </div>
        <form id=\"messageForm\" class=\"bg-white/10 backdrop-blur-lg p-2 rounded-b-lg border-t border-white/20\">
            <div class=\"flex items-center px-3 py-2 rounded-lg dark:bg-gray-700 relative w-full\">
                <button id=\"gifButton\" class=\"bg-blue-500 p-2 rounded-full hover:bg-blue-600 mr-2\">GIF</button>
                <div class=\"relative flex-grow\">
                    <textarea id=\"messageInput\" rows=\"1\" class=\"block w-full p-2.5 pr-12 text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\" placeholder=\"Votre message...\" style=\"max-height: 35vh; overflow-y: auto;\"></textarea>
                    <span id=\"charCount\" class=\"absolute bottom-2 right-3 text-sky-500 text-xs pointer-events-none\">2000</span>
                </div>
            </div>
            <div class=\"flex flex-col items-center\">
                <div class=\"flex justify-end w-full\">
                    <div id=\"charCount\" class=\"text-sky-500 text-sm mt-1\"></div>
                </div>
                <div id=\"errorMessage\" class=\"text-red-500 text-sm hidden mt-1 text-center\">Le message ne peut pas dépasser 2000 caractères.</div>
            </div>
        </form>
    </div>
    <div class=\"w-full md:w-[22%] md:flex-grow-[1] h-[85vh] bg-white/10 backdrop-blur-lg p-4 space-y-2 rounded-lg shadow-lg border border-white/20 overflow-y-auto\">
        <div class=\"flex flex-col items-center\">
            <div class=\"flex justify-between items-center w-full\">
                <h2 class=\"text-lg font-bold\">Conversations</h2>
                <button id=\"openSearchButton\" class=\"bg-blue-500 w-10 h-10 rounded-full hover:bg-blue-600 ml-4 flex items-center justify-center text-white\">+</button>
            </div>
            <input type=\"text\" id=\"conversationSearch\" placeholder=\"Rechercher une conversation...\" class=\"w-full p-2 my-2 rounded bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none\">
        </div>
        <ul id=\"conversationList\" class=\"space-y-2 mt-2 overflow-y-auto max-h-[45vh] md:max-h-[70vh] overflow-x-hidden\">
            {% for conversation in conversations %}
                {% set contactUser = conversation.participants|filter(p => p.user.id != userId)|first %}
                {% if contactUser is same as(false) %}
                    {% set contactUser = {'user': {'username': 'Moi', 'id': userId}} %}
                    {% set avatarUrl = userAvatar ? asset('uploads/avatars/' ~ userAvatar) : asset('images/default-avatar.png') %}
                {% else %}
                    {% set avatarUrl = contactUser.user.avatar ? asset('uploads/avatars/' ~ contactUser.user.avatar) : asset('images/default-avatar.png') %}
                {% endif %}
                <li id=\"conversation-{{ conversation.id }}\" 
                    class=\"cursor-pointer flex items-center p-2 conversation-item {% if selectedConversationId is defined and selectedConversationId == conversation.id %}selected-conversation{% else %}bg-transparent{% endif %}\" 
                    onclick=\"openConversation({{ conversation.id }}, '{{ contactUser.user.username }}', {{ contactUser.user.id }})\">
                    
                    <div class=\"flex items-center justify-center w-12 h-12\">
                        <img src=\"{{ avatarUrl }}\" alt=\"{{ contactUser.user.username }}\" class=\"w-10 h-10 rounded-full object-cover\">
                    </div>
                    
                    <div class=\"flex items-center flex-1\">
                        <span class=\"text-white hover:underline truncate block\" style=\"max-width: 9rem;\">
                            {{ contactUser.user.username }}
                        </span>
                    </div>
                </li>
            {% else %}
                <li class=\"bg-white/10 p-2 rounded-lg border border-white/20\">Aucune conversation disponible.</li>
            {% endfor %}
        </ul>
    </div>
    <div id=\"userSearchPopup\" class=\"fixed inset-0 bg-black/60 backdrop-blur-md flex items-center justify-center hidden z-50\">
        <div class=\"bg-white/10 backdrop-blur-lg p-6 rounded-lg w-11/12 md:w-1/3 text-center border border-white/20\">
            <h2 class=\"text-lg font-bold mb-4\">Rechercher un utilisateur</h2>
            <input type=\"text\" id=\"userSearch\" placeholder=\"Rechercher un utilisateur...\" class=\"w-full p-2 mb-4 rounded bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none\">
            <div id=\"userResults\" class=\"bg-white/10 rounded p-2 space-y-2 max-h-40 overflow-y-auto backdrop-blur-md border border-white/20\"></div>
            <button id=\"closeSearchButton\" class=\"mt-4 px-4 py-2 bg-red-500 rounded-full hover:bg-red-600\">Annuler</button>
        </div>
    </div>
    <div id=\"gifPopup\" class=\"hidden fixed inset-0 bg-black/70 backdrop-blur-md flex items-center justify-center z-50\">
        <div class=\"bg-white/10 backdrop-blur-lg w-11/12 md:w-3/4 lg:w-2/3 xl:w-1/2 p-6 rounded-lg text-center border border-white/20 max-h-[80vh] overflow-y-auto relative\">
            <h2 class=\"text-lg font-bold mb-4 text-center\">Rechercher un GIF</h2>
            <button id=\"closeGifButton\" class=\"absolute top-2 right-2 text-red-500 hover:text-red-700\">
                &times;
            </button>
            <div id=\"gifCategories\" class=\"flex flex-wrap justify-center gap-2 mb-4\">
                <button class=\"gif-category bg-blue-500 p-2 rounded-full hover:bg-blue-600 text-white\" data-query=\"roleplay\">RPG</button>
                <button class=\"gif-category bg-blue-500 p-2 rounded-full hover:bg-blue-600 text-white\" data-query=\"meme\">Meme</button>
                <button class=\"gif-category bg-blue-500 p-2 rounded-full hover:bg-blue-600 text-white\" data-query=\"jdr\">JDR</button>
                <button class=\"gif-category bg-blue-500 p-2 rounded-full hover:bg-blue-600 text-white\" data-query=\"dungeon&dragons\">D&D</button>
            </div>
            <button id=\"cancelCategoryButton\" class=\"hidden bg-red-500 px-4 py-2 rounded-full hover:bg-red-600 mb-4 text-white\">Annuler la catégorie</button>
            <input type=\"text\" id=\"gifSearch\" placeholder=\"Rechercher un GIF...\" class=\"w-full p-2 mb-4 rounded bg-white/10 border border-white/20 text-white placeholder-gray-300 focus:outline-none\">
            <div id=\"gifResults\" class=\"bg-transparent rounded p-2 space-y-2 overflow-y-auto backdrop-blur-md border border-white/20 grid grid-cols-2 md:grid-cols-3 gap-2 max-h-[60vh]\"></div>
        </div>
    </div>
</div>
<style>

.custom-scrollbar::-webkit-scrollbar {
    width: 8px;
}

#newMessageBanner {
    display: none;
    border-radius: 5px;
    transition: background-color 0.3s ease;
}

#newMessageBanner:hover {
    background-color: rgba(0, 122, 255, 0.8);
}

.avatar-container {
    width: 54px;
    height: 54px;
    border-radius: 50%;
    overflow: hidden;
    background-size: contain;
    background-position: center;
    background-repeat: no-repeat;
}

#messageInput::-webkit-scrollbar {
    width: 6px;
    height: 6px;
}

#messageInput::-webkit-scrollbar-track {
    background: transparent;
    border-radius: 10px;
}

#messageInput::-webkit-scrollbar-thumb {
    background-color: rgba(14, 165, 233, 0.7);
    border-radius: 10px;
    border: 1px solid transparent;
}

#messageInput::-webkit-scrollbar-thumb:hover {
    background-color: rgba(14, 165, 233, 1);
}

#messageInput {
    scrollbar-width: thin;
    scrollbar-color: rgba(14, 165, 233, 0.7) transparent;
    padding-right: 2rem;
}

#closeGifButton {
    width: 50px;
    height: 50px;
    display: flex;
    align-items: center;
    justify-content: center;
    border: none;
    background-color: transparent;
    border-radius: 50%;
    cursor: pointer;
    font-size: 2rem;
    color: red;
    position: absolute;
    top: 2px;
    right: 2px;
    z-index: 10;
}

#closeGifButton:hover {
    background-color: rgba(255, 0, 0, 0.2);
    transition: background-color 0.3s;
}

.custom-scrollbar::-webkit-scrollbar-track {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
}

.custom-scrollbar::-webkit-scrollbar-thumb {
    background-color: rgba(255, 255, 255, 0.2);
    border-radius: 10px;
    border: 2px solid transparent;
}

.message-wrapper {
    display: flex;
    align-items: flex-end;
    width: 100%;
    gap: 8px;
}

.message-wrapper img {
    width: 44px;
    height: 44px;
    border-radius: 50%;
    object-fit: cover;
}

.message-sent, .message-received {
    padding: 10px 15px;
    margin-top: 6px;
    max-width: 90%;
    min-width: 120px;
    width: fit-content;
    word-wrap: break-word;
    overflow-wrap: break-word;
    white-space: pre-wrap;
    word-break: break-word;
    border-radius: 18px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
}

.message-sent:hover {
    box-shadow: 0px 0px 12px 6px rgba(0, 150, 255, 0.6);
    transform: scale(1.05);
}

.message-received:hover {
    box-shadow: 0px 0px 12px 6px rgba(128, 128, 128, 0.6);
    transform: scale(1.05);
}

.message-sent {
    align-self: flex-end;
    background: linear-gradient(135deg, #005BB5, #007AFF);
    color: #ffffff;
    border-radius: 18px 18px 4px 18px;
    margin-left: auto;
}

.message-received {
    align-self: flex-start;
    background: linear-gradient(135deg, #444, #666);
    color: #ffffff;
    border-radius: 18px 18px 18px 4px;
    margin-right: auto;
    margin-left: 4px;
}

.message-content {
    font-size: 0.9rem;
    line-height: 1.4;
}

.timestamp-sent {
    text-align: right;
    margin-top: 4px;
    color: rgba(255, 255, 255, 0.6);
    font-size: 0.75rem;
}

.timestamp-received {
    text-align: left;
    margin-top: 4px;
    color: rgba(255, 255, 255, 0.6);
    font-size: 0.75rem;
}

#charCount {
    position: absolute;
    bottom: 0.5rem;
    right: 1rem;
    font-size: 0.75rem;
    pointer-events: none;
    color: #0EA5E9;
}

#messageInput {
    resize: none;
    overflow: hidden;
    max-height: 35vh;
    min-height: 2.5rem;
}

.conversation-item {
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 10px;
    gap: 10px;
    transition: background-color 0.3s ease, box-shadow 0.3s ease;
    border-radius: 10px;
    cursor: pointer;
    height: 60px;
}

.conversation-item .avatar-container {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    background-size: cover;
}

.conversation-item .avatar-container img {
    width: 44px !important;
    height: 44px !important;
    object-fit: cover;
    transition: none;
}

.conversation-item.selected-conversation,
.conversation-item:hover:not(.selected-conversation) {
    background-color: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    backdrop-filter: blur(10px);
}

.conversation-item span {
    display: inline-block;
    text-align: left;
}
</style>

<script type=\"module\">
    import { initializeApp } from \"https://www.gstatic.com/firebasejs/9.6.1/firebase-app.js\";
    import { getDatabase, ref, push, onChildAdded } from \"https://www.gstatic.com/firebasejs/9.6.1/firebase-database.js\";
    import { format } from \"https://cdn.jsdelivr.net/npm/date-fns@2.22.1/esm/index.js\";
    import { fr } from \"https://cdn.jsdelivr.net/npm/date-fns@2.22.1/esm/locale/index.js\";
    document.addEventListener(\"DOMContentLoaded\", function () {
        const conversationSearch = document.getElementById('conversationSearch');
        const conversationList = document.getElementById('conversationList');
        conversationSearch.addEventListener('input', function() {
            const searchTerm = conversationSearch.value.toLowerCase();
            const conversations = conversationList.getElementsByTagName('li');
            Array.from(conversations).forEach(conversation => {
                const username = conversation.textContent.toLowerCase();
                if (username.includes(searchTerm)) {
                    conversation.style.display = '';
                } else {
                    conversation.style.display = 'none';
                }
            });
        });
        const firebaseConfig = {
            apiKey: \"AIzaSyD0ZtA8CXaJO9KAziDJXWCQ9rEQ7lFA1Uw\",
            authDomain: \"dicefinder-42b86.firebaseapp.com\",
            databaseURL: \"https://dicefinder-42b86-default-rtdb.europe-west1.firebasedatabase.app\",
            projectId: \"dicefinder-42b86\",
            storageBucket: \"dicefinder-42b86.appspot.com\",
            messagingSenderId: \"15582622513\",
            appId: \"1:15582622513:web:690f6bf7297cf610e6f610\"
        };
        const app = initializeApp(firebaseConfig);
        const database = getDatabase(app);
        const userAvatar = \"{{ userAvatar ? asset('uploads/avatars/' ~ userAvatar) : asset('images/default-avatar.png') }}\";   
        const defaultAvatarUrl = \"{{ asset('images/default-avatar.png') }}\";     
        let conversationId = null;
        let cooldown = false;
        let activeListener = null;
        const messageInput = document.querySelector('#messageInput');
        const charCount = document.getElementById('charCount');
        const errorMessage = document.getElementById('errorMessage');
        const maxChars = 2000;
        charCount.innerText = `\${maxChars}`; 
        function autoResizeTextarea() {
            if (messageInput.scrollHeight < window.innerHeight * 0.35) {
                messageInput.style.height = 'auto';
                messageInput.style.height = `\${messageInput.scrollHeight}px`;
            }
        }
        messageInput.addEventListener('input', () => {
            const content = messageInput.value;
            const remainingChars = maxChars - content.length;
            charCount.innerText = `\${remainingChars}`;
            if (remainingChars < 0) {
                charCount.style.color = 'red';
                errorMessage.classList.remove('hidden');
            } else {
                charCount.style.color = '#0EA5E9';
                errorMessage.classList.add('hidden');
            }
            autoResizeTextarea();
        });
        messageInput.addEventListener('keydown', (event) => {
            if (event.key === \"Enter\" && !event.shiftKey) {
                event.preventDefault();
                const content = messageInput.value.trim();
                if (content.length > 0 && content.length <= maxChars && conversationId) {
                    sendMessage(conversationId, {{ userId|json_encode }}, content, userAvatar);
                    messageInput.value = \"\";
                    charCount.innerText = `\${maxChars}`;
                    errorMessage.classList.add('hidden');
                }
            }
        });

            const messagesContainer = document.getElementById('messagesContainer');
    const newMessageBanner = document.getElementById('newMessageBanner');
    let isUserScrollingUp = false;

    // Détecte si l'utilisateur scrolle vers le haut
    messagesContainer.addEventListener('scroll', () => {
        const { scrollTop, scrollHeight, clientHeight } = messagesContainer;
        isUserScrollingUp = scrollTop < scrollHeight - clientHeight - 10;

        // Cache la bannière si l'utilisateur est en bas
        if (!isUserScrollingUp) {
            newMessageBanner.classList.add('hidden');
        }
    });

    function scrollToBottom() {
        setTimeout(() => {
            messagesContainer.scrollTop = messagesContainer.scrollHeight;
            newMessageBanner.classList.add('hidden'); // Cache la bannière après le scroll vers le bas
        }, 100);
    }
    newMessageBanner.addEventListener('click', scrollToBottom);
function displayMessage(message, isCurrentUser) {
    const messagesContainer = document.getElementById('messagesContainer');

    // Création des éléments du message
    const messageWrapper = document.createElement('div');
    messageWrapper.classList.add('message-wrapper', isCurrentUser ? 'justify-end' : 'justify-start');

    const avatarImage = document.createElement('img');
    avatarImage.src = message.avatar || \"{{ asset('images/default-avatar.png') }}\";
    avatarImage.alt = \"Avatar\";

    const messageContainer = document.createElement('div');
    messageContainer.classList.add('message-container');

    const messageBubble = document.createElement('div');
    messageBubble.classList.add(isCurrentUser ? 'message-sent' : 'message-received');
    messageBubble.innerHTML = message.content;

    const timestamp = document.createElement('div');
    timestamp.classList.add(isCurrentUser ? 'timestamp-sent' : 'timestamp-received');
    timestamp.textContent = format(new Date(message.timestamp), 'Pp', { locale: fr });

    // Assemblage des éléments
    messageContainer.appendChild(messageBubble);
    messageContainer.appendChild(timestamp);
    messageWrapper.appendChild(isCurrentUser ? messageContainer : avatarImage);
    messageWrapper.appendChild(isCurrentUser ? avatarImage : messageContainer);
    
    messagesContainer.appendChild(messageWrapper);

    // Affiche la bannière \"Nouveau message\" si l'utilisateur n'est pas en bas de la conversation
    if (isUserScrollingUp && !isCurrentUser) {
        newMessageBanner.classList.remove('hidden');
    } else {
        scrollToBottom();
    }
}

        document.getElementById('openSearchButton').addEventListener('click', () => {
            document.getElementById('userSearchPopup').classList.remove('hidden');
        });
        document.getElementById('closeSearchButton').addEventListener('click', () => {
            document.getElementById('userSearchPopup').classList.add('hidden');
            document.getElementById('userSearch').value = '';
            document.getElementById('userResults').innerHTML = '';
        });
        const tenorApiKey = 'AIzaSyD5ihPGmQoDQnr8tuAynv7QnWR_KtU27lA';
        const gifButton = document.getElementById('gifButton');
        const gifPopup = document.getElementById('gifPopup');
        const gifSearch = document.getElementById('gifSearch');
        const gifResults = document.getElementById('gifResults');
        const closeGifButton = document.getElementById('closeGifButton');
        const cancelCategoryButton = document.getElementById('cancelCategoryButton');
        const gifCategories = document.querySelectorAll('.gif-category');
        gifButton.addEventListener('click', (event) => {
            event.preventDefault();
            gifPopup.classList.remove('hidden');
            searchGifs(\"trending\");
        });
            closeGifButton.addEventListener('click', () => {
                document.getElementById('gifPopup').classList.add('hidden');
                document.getElementById('gifSearch').value = '';
                document.getElementById('gifResults').innerHTML = '';
                document.getElementById('cancelCategoryButton').classList.add('hidden');
            });
        function displayGifResults(gifs) {
            gifResults.innerHTML = '';
            gifs.forEach(gif => {
                const gifUrl = gif.media_formats.gif.url;
                const img = document.createElement('img');
                img.src = gifUrl;
                img.className = 'w-full h-auto rounded cursor-pointer';
                img.addEventListener('click', () => selectGif(gifUrl));
                gifResults.appendChild(img);
            });
        }
        gifCategories.forEach(button => {
            button.addEventListener('click', () => {
                const query = button.getAttribute('data-query');
                searchGifs(query);
                cancelCategoryButton.classList.remove('hidden');
            });
        });
        cancelCategoryButton.addEventListener('click', () => {
            gifResults.innerHTML = '';
            cancelCategoryButton.classList.add('hidden');
            gifSearch.value = '';
        });
        gifSearch.addEventListener('input', () => {
            const query = gifSearch.value.trim();
            if (query) {
                searchGifs(query);
                cancelCategoryButton.classList.add('hidden');
            }
        });
        async function searchGifs(query) {
            try {
                const response = await fetch(`https://tenor.googleapis.com/v2/search?q=\${query}&key=\${tenorApiKey}&limit=9`);
                const data = await response.json();
                displayGifResults(data.results);
            } catch (error) {
                console.error('Erreur lors de la recherche de GIFs:', error);
            }
        }
        function selectGif(gifUrl) {
            const gifHTML = `<img src=\"\${gifUrl}\" class=\"w-32 h-32 rounded\">`;
            sendMessage(conversationId, {{ userId|json_encode }}, gifHTML, userAvatar);
            gifPopup.classList.add('hidden');
            gifSearch.value = '';
            gifResults.innerHTML = '';
            cancelCategoryButton.classList.add('hidden');
        }


        let notificationVisible = false;

        function showNewMessageNotification() {
            let notification = document.getElementById('newMessageNotification');
            if (!notification) {
                notification = document.createElement('div');
                notification.id = 'newMessageNotification';
                notification.innerText = 'Nouveau message';
                notification.style.position = 'fixed';
                notification.style.bottom = '20px';
                notification.style.right = '20px';
                notification.style.padding = '10px';
                notification.style.backgroundColor = '#007AFF';
                notification.style.color = '#fff';
                notification.style.borderRadius = '5px';
                notification.style.cursor = 'pointer';
                notification.style.zIndex = '1000';
                notification.addEventListener('click', () => {
                    scrollToBottom();
                    notification.style.display = 'none';
                    notificationVisible = false;
                });
                document.body.appendChild(notification);
            }
            notification.style.display = 'block';
            notificationVisible = true;
        }

        window.openConversation = function (convId, contactName, contactId) {
            document.querySelectorAll('.conversation-item').forEach(item => item.classList.remove('selected-conversation'));
            const selectedItem = document.getElementById(`conversation-\${convId}`);
            selectedItem.classList.add('selected-conversation');
            conversationId = convId;
            document.getElementById('chatTitle').innerHTML = `
                <a href=\"/profile/\${contactId}\" class=\"text-white hover:underline truncate\" style=\"max-width: 100%; display: inline-block;\">
                    \${contactName}
                </a>
            `;
            const avatarContainer = selectedItem.querySelector('.avatar-container');
            if (avatarContainer) {
                const avatarImage = avatarContainer.querySelector('img');
                avatarImage.classList.add('w-10', 'h-10', 'rounded-full', 'object-cover');
            }
            listenToMessages(conversationId, contactName);
        };

function listenToMessages(conversationId, contactName) {
    // Référence de conversation dans Firebase
    const messagesRef = ref(database, `conversations/\${conversationId}/messages`);
    // Nettoie les messages actuels dans l'interface
    document.getElementById('messagesContainer').innerHTML = \"\";
    
    // Si un écouteur précédent est actif, on le retire
    if (activeListener) {
        activeListener();
    }

    // Activation de l'écoute sur les nouveaux messages
    const unsubscribe = onChildAdded(messagesRef, (snapshot) => {
        const message = snapshot.val();
        // Appel à displayMessage pour chaque message reçu
        displayMessage(message, message.sender_id === {{ userId|json_encode }});
    });
    activeListener = unsubscribe;
}

        document.getElementById('userSearch').addEventListener('input', async (event) => {
            const query = event.target.value.trim();
            if (!query) {
                document.getElementById('userResults').innerHTML = '';
                return;
            }
            try {
                const response = await fetch(`/user/search?query=\${encodeURIComponent(query)}`);
                const users = await response.json();
                const resultsContainer = document.getElementById('userResults');
                resultsContainer.innerHTML = '';
                users.forEach(user => {
                    const userElement = document.createElement('div');
                    userElement.classList.add('p-2', 'hover:bg-gray-700', 'cursor-pointer');
                    userElement.textContent = user.username;
                    userElement.onclick = () => startPrivateConversation(user.id, user.username);
                    resultsContainer.appendChild(userElement);
                });
            } catch (error) {
                console.error(\"Erreur lors de la recherche d'utilisateurs :\", error);
            }
        });
        async function startPrivateConversation(userId, username) {
            try {
                const response = await fetch(`/chat/private/\${userId}`, { method: 'POST' });
                if (!response.ok) throw new Error(\"Erreur de serveur\");
                const { conversationId } = await response.json();

                const existingConversation = document.getElementById(`conversation-\${conversationId}`);
                if (existingConversation) {
                    openConversation(conversationId, username, userId);
                } else {
                    const conversationItem = document.createElement('li');
                    conversationItem.id = `conversation-\${conversationId}`;
                    conversationItem.className = 'cursor-pointer flex items-center p-2 conversation-item bg-transparent';
                    conversationItem.onclick = () => openConversation(conversationId, username, userId);

                    const avatarContainer = document.createElement('div');
                    avatarContainer.className = 'flex-shrink-0 w-12 h-12 mr-3';
                    const avatarImage = document.createElement('img');
                    avatarImage.src = \"/images/default-avatar.png\";
                    avatarImage.alt = username;
                    avatarImage.className = 'w-10 h-10 rounded-full object-cover';
                    avatarContainer.appendChild(avatarImage);

                    const usernameContainer = document.createElement('div');
                    usernameContainer.className = 'flex-1';
                    const usernameSpan = document.createElement('span');
                    usernameSpan.className = 'text-white hover:underline truncate w-full block';
                    usernameSpan.textContent = username;

                    usernameContainer.appendChild(usernameSpan);
                    conversationItem.appendChild(avatarContainer);
                    conversationItem.appendChild(usernameContainer);
                    document.getElementById('conversationList').appendChild(conversationItem);

                    openConversation(conversationId, username, userId);
                }

                document.getElementById('userSearchPopup').classList.add('hidden');
            } catch (error) {
                console.error(\"Erreur lors de la création de la conversation privée :\", error);
            }
        }
        async function loadConversations() {
            try {
                const response = await fetch(`/chat/get-conversations`);
                let conversations = await response.json();
                if (!Array.isArray(conversations)) {
                    conversations = Object.values(conversations);
                }
                conversationList.innerHTML = '';
                conversations.forEach(({ id, contactUsername, avatarUrl }) => {
                    const conversationItem = document.createElement('li');
                    conversationItem.id = `conversation-\${id}`;
                    conversationItem.className = 'cursor-pointer conversation-item flex items-center p-2 rounded-lg';
                    const avatarContainer = document.createElement('div');
                    avatarContainer.className = 'avatar-container mr-3';
                    const avatarImage = document.createElement('img');
                    avatarImage.src = avatarUrl || \"{{ asset('images/default-avatar.png') }}\";
                    avatarImage.alt = contactUsername;
                    avatarImage.classList.add('w-10', 'h-10', 'rounded-full', 'object-cover');
                    avatarContainer.appendChild(avatarImage);
                    const usernameSpan = document.createElement('span');
                    usernameSpan.className = 'text-white';
                    usernameSpan.textContent = contactUsername;
                    conversationItem.appendChild(avatarContainer);
                    conversationItem.appendChild(usernameSpan);
                    conversationItem.onclick = () => openConversation(id, contactUsername);
                    conversationList.appendChild(conversationItem);
                });
            } catch (error) {
                console.error(\"Erreur lors de la récupération des conversations :\", error);
            }
        }
        function sendMessage(conversationId, senderId, content, avatar) {
            const messagesRef = ref(database, `conversations/\${conversationId}/messages`);
            const messageData = {
                sender_id: senderId,
                timestamp: Date.now(),
                content,
                avatar: avatar || defaultAvatarUrl,                
                status: 'unread'
            };
            push(messagesRef, messageData);
        }
        function startCooldown() {
            cooldown = true;
            let remainingTime = 1.5;
            const messageInput = document.querySelector('#messageInput');
            const interval = setInterval(() => {
                remainingTime -= 0.1;
                messageInput.placeholder = `Attendez \${remainingTime.toFixed(1)}s...`;
                if (remainingTime <= 0) {
                    clearInterval(interval);
                    messageInput.placeholder = \"Écrivez un message...\";
                    cooldown = false;
                }
            }, 100);
        }
    });
</script>
{% endblock %}", "chat/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\chat\\index.html.twig");
    }
}
