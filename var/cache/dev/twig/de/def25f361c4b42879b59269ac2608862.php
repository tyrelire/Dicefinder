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
class __TwigTemplate_bf570a3df91df0cbfa457a6a567c80e5 extends Template
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
        <div class=\"bg-white/10 backdrop-blur-lg p-4 rounded-t-lg border-b border-white/20 text-center flex items-center justify-between\">
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
            <div class=\"relative w-1/3 ml-4\">
                <input type=\"text\" id=\"messageSearch\" placeholder=\"Rechercher...\" class=\"w-full p-2 rounded-lg bg-white/20 border border-white/20 text-white placeholder-gray-300 focus:outline-none\">
                <button id=\"searchButton\" class=\"absolute right-2 top-1/2 transform -translate-y-1/2 text-white\">
                    🔍
                </button>
            </div>
        </div>
        <div id=\"messagesContainer\" class=\"flex-1 overflow-y-auto p-4 space-y-4 bg-transparent custom-scrollbar\"></div>
        <form id=\"messageForm\" class=\"bg-white/10 backdrop-blur-lg p-2 rounded-b-lg border-t border-white/20\">
            <div class=\"flex items-center px-3 py-2 rounded-lg dark:bg-gray-700 relative w-full\">
                <button id=\"gifButton\" class=\"bg-blue-500 p-2 rounded-full hover:bg-blue-600 mr-2\">GIF</button>
                <div class=\"relative flex-grow\">
                    <textarea id=\"messageInput\" rows=\"1\" class=\"block w-full p-2.5 pr-12 text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\" placeholder=\"Votre message...\" style=\"max-height: 35vh; overflow-y: auto;\"></textarea>
                    <span id=\"charCount\" class=\"absolute bottom-2 right-3 text-sky-500 text-xs pointer-events-none\">2000</span>
                </div>
                <button id=\"sendButton\" type=\"button\" class=\"hidden p-2 rounded-full bg-blue-500 text-white ml-2\">Envoyer</button>
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
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["conversations"]) || array_key_exists("conversations", $context) ? $context["conversations"] : (function () { throw new RuntimeError('Variable "conversations" does not exist.', 52, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
            // line 53
            yield "                ";
            $context["contactUser"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "participants", [], "any", false, false, false, 53), function ($__p__) use ($context, $macros) { $context["p"] = $__p__; return (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["p"]) || array_key_exists("p", $context) ? $context["p"] : (function () { throw new RuntimeError('Variable "p" does not exist.', 53, $this->source); })()), "user", [], "any", false, false, false, 53), "id", [], "any", false, false, false, 53) != (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 53, $this->source); })())); }));
            // line 54
            yield "                ";
            if (((isset($context["contactUser"]) || array_key_exists("contactUser", $context) ? $context["contactUser"] : (function () { throw new RuntimeError('Variable "contactUser" does not exist.', 54, $this->source); })()) === false)) {
                // line 55
                yield "                    ";
                $context["contactUser"] = ["user" => ["username" => "Moi", "id" => (isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 55, $this->source); })())]];
                // line 56
                yield "                    ";
                $context["avatarUrl"] = (((isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 56, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . (isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 56, $this->source); })())))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png")));
                // line 57
                yield "                ";
            } else {
                // line 58
                yield "                    ";
                $context["avatarUrl"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactUser"]) || array_key_exists("contactUser", $context) ? $context["contactUser"] : (function () { throw new RuntimeError('Variable "contactUser" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "avatar", [], "any", false, false, false, 58)) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactUser"]) || array_key_exists("contactUser", $context) ? $context["contactUser"] : (function () { throw new RuntimeError('Variable "contactUser" does not exist.', 58, $this->source); })()), "user", [], "any", false, false, false, 58), "avatar", [], "any", false, false, false, 58)))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png")));
                // line 59
                yield "                ";
            }
            // line 60
            yield "                <li id=\"conversation-";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "id", [], "any", false, false, false, 60), "html", null, true);
            yield "\" 
                    class=\"cursor-pointer flex items-center p-2 conversation-item ";
            // line 61
            if ((array_key_exists("selectedConversationId", $context) && ((isset($context["selectedConversationId"]) || array_key_exists("selectedConversationId", $context) ? $context["selectedConversationId"] : (function () { throw new RuntimeError('Variable "selectedConversationId" does not exist.', 61, $this->source); })()) == CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "id", [], "any", false, false, false, 61)))) {
                yield "selected-conversation";
            } else {
                yield "bg-transparent";
            }
            yield "\" 
                    onclick=\"openConversation(";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["conversation"], "id", [], "any", false, false, false, 62), "html", null, true);
            yield ", '";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactUser"]) || array_key_exists("contactUser", $context) ? $context["contactUser"] : (function () { throw new RuntimeError('Variable "contactUser" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "username", [], "any", false, false, false, 62), "html", null, true);
            yield "', ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactUser"]) || array_key_exists("contactUser", $context) ? $context["contactUser"] : (function () { throw new RuntimeError('Variable "contactUser" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "id", [], "any", false, false, false, 62), "html", null, true);
            yield ")\">
                    
                    <div class=\"flex items-center justify-center w-12 h-12\">
                        <img src=\"";
            // line 65
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["avatarUrl"]) || array_key_exists("avatarUrl", $context) ? $context["avatarUrl"] : (function () { throw new RuntimeError('Variable "avatarUrl" does not exist.', 65, $this->source); })()), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactUser"]) || array_key_exists("contactUser", $context) ? $context["contactUser"] : (function () { throw new RuntimeError('Variable "contactUser" does not exist.', 65, $this->source); })()), "user", [], "any", false, false, false, 65), "username", [], "any", false, false, false, 65), "html", null, true);
            yield "\" class=\"w-10 h-10 rounded-full object-cover\">
                    </div>
                    
                    <div class=\"flex items-center flex-1\">
                        <span class=\"text-white hover:underline truncate block\" style=\"max-width: 9rem;\">
                            ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["contactUser"]) || array_key_exists("contactUser", $context) ? $context["contactUser"] : (function () { throw new RuntimeError('Variable "contactUser" does not exist.', 70, $this->source); })()), "user", [], "any", false, false, false, 70), "username", [], "any", false, false, false, 70), "html", null, true);
            yield "
                        </span>
                    </div>
                </li>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 75
            yield "                <li class=\"bg-white/10 p-2 rounded-lg border border-white/20\">Aucune conversation disponible.</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['conversation'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
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

@media (max-width: 768px) {
    #sendButton {
        display: block;
    }
    #messageInput {
        padding-right: 3rem;
    }
}

#messageSearch {
    padding-right: 2rem;
    color: white;
}

#searchButton {
    font-size: 1rem;
    background: none;
    border: none;
    cursor: pointer;
    outline: none;
}

.custom-scrollbar::-webkit-scrollbar {
    width: 8px;
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
    padding: 8px 12px;
    margin-top: 6px;
    max-width: 90%;
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
        // line 367
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((((isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 367, $this->source); })())) ? ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(("uploads/avatars/" . (isset($context["userAvatar"]) || array_key_exists("userAvatar", $context) ? $context["userAvatar"] : (function () { throw new RuntimeError('Variable "userAvatar" does not exist.', 367, $this->source); })())))) : ($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"))), "html", null, true);
        yield "\";   
        const defaultAvatarUrl = \"";
        // line 368
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
        // line 401
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 401, $this->source); })())), "html", null, true);
        yield ", content, userAvatar);
                    messageInput.value = \"\";
                    charCount.innerText = `\${maxChars}`;
                    errorMessage.classList.add('hidden');
                }
            }
        });

        function scrollToBottom() {
            const messagesContainer = document.getElementById('messagesContainer');
            setTimeout(() => {
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
                if (notificationVisible) {
                    document.getElementById('newMessageNotification').style.display = 'none';
                    notificationVisible = false;
                }
            }, 100);
        }

        function displayMessage(message, isCurrentUser) {
            const messagesContainer = document.getElementById('messagesContainer');

            const messageWrapper = document.createElement('div');
            messageWrapper.classList.add('message-wrapper', isCurrentUser ? 'justify-end' : 'justify-start');

            const avatarImage = document.createElement('img');
            avatarImage.src = message.avatar || \"";
        // line 427
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/default-avatar.png"), "html", null, true);
        yield "\";
            avatarImage.alt = \"Avatar\";

            const messageContainer = document.createElement('div');
            messageContainer.classList.add('message-container');

            const messageBubble = document.createElement('div');
            messageBubble.classList.add(isCurrentUser ? 'message-sent' : 'message-received', 'message-content'); 
            messageBubble.innerHTML = message.content;

            const timestamp = document.createElement('div');
            timestamp.classList.add(isCurrentUser ? 'timestamp-sent' : 'timestamp-received');
            timestamp.textContent = format(new Date(message.timestamp), 'Pp', { locale: fr });

            messageContainer.appendChild(messageBubble);
            messageContainer.appendChild(timestamp);
            messagesContainer.appendChild(messageWrapper);
            scrollToBottom();
            if (isCurrentUser) {
                messageWrapper.appendChild(messageContainer);
                messageWrapper.appendChild(avatarImage);
            } else {
                messageWrapper.appendChild(avatarImage);
                messageWrapper.appendChild(messageContainer);
            }

            messagesContainer.appendChild(messageWrapper);
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
        // line 523
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 523, $this->source); })())), "html", null, true);
        yield ", gifHTML, userAvatar);
            gifPopup.classList.add('hidden');
            gifSearch.value = '';
            gifResults.innerHTML = '';
            cancelCategoryButton.classList.add('hidden');
        }

        let isUserScrollingUp = false;
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
            const messagesRef = ref(database, `conversations/\${conversationId}/messages`);
            if (activeListener) {
                activeListener();
            }
            document.getElementById('messagesContainer').innerHTML = \"\";
            const unsubscribe = onChildAdded(messagesRef, (snapshot) => {
                const message = snapshot.val();
                displayMessage(message, message.sender_id === ";
        // line 585
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 585, $this->source); })())), "html", null, true);
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
        // line 668
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

    document.getElementById('sendButton').addEventListener('click', (event) => {
        event.preventDefault();
        const content = messageInput.value.trim();
        if (content.length > 0 && content.length <= maxChars && conversationId) {
            sendMessage(conversationId, ";
        // line 714
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(json_encode((isset($context["userId"]) || array_key_exists("userId", $context) ? $context["userId"] : (function () { throw new RuntimeError('Variable "userId" does not exist.', 714, $this->source); })())), "html", null, true);
        yield ", content, userAvatar);
            messageInput.value = \"\";
            charCount.innerText = maxChars;
            errorMessage.classList.add('hidden');
                }
        });
        
        document.getElementById('messageSearch').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const messages = document.querySelectorAll('#messagesContainer .message-content');
            
            messages.forEach(message => {
                const messageText = message.textContent.toLowerCase();
                if (messageText.includes(searchTerm)) {
                    message.closest('.message-wrapper').style.display = '';
                } else {
                    message.closest('.message-wrapper').style.display = 'none';
                }
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
        return array (  896 => 714,  847 => 668,  761 => 585,  696 => 523,  597 => 427,  568 => 401,  532 => 368,  528 => 367,  236 => 77,  229 => 75,  219 => 70,  209 => 65,  199 => 62,  191 => 61,  186 => 60,  183 => 59,  180 => 58,  177 => 57,  174 => 56,  171 => 55,  168 => 54,  165 => 53,  160 => 52,  123 => 17,  119 => 15,  113 => 12,  108 => 11,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Discussion{% endblock %}

{% block body %}
<div class=\"flex flex-col md:flex-row-reverse h-screen text-white gap-4 px-4 py-4 w-full mx-auto\">
    <div class=\"flex-grow md:flex-grow-[4] h-[85vh] flex flex-col bg-white/10 backdrop-blur-lg rounded-lg shadow-lg mb-4 md:mb-0 border border-white/20 w-full md:w-[78%]\">
        <div class=\"bg-white/10 backdrop-blur-lg p-4 rounded-t-lg border-b border-white/20 text-center flex items-center justify-between\">
            <h2 id=\"chatTitle\" class=\"text-lg font-semibold flex items-center justify-center w-full\">
                {% if selectedContactId is defined and selectedContactName is defined %}
                    <a href=\"{{ path('app_profile_show', { 'id': selectedContactId }) }}\" class=\"text-white hover:underline\">
                        {{ selectedContactName }}
                    </a>
                {% else %}
                    Aucune conversation sélectionnée
                {% endif %}
            </h2>
            <div class=\"relative w-1/3 ml-4\">
                <input type=\"text\" id=\"messageSearch\" placeholder=\"Rechercher...\" class=\"w-full p-2 rounded-lg bg-white/20 border border-white/20 text-white placeholder-gray-300 focus:outline-none\">
                <button id=\"searchButton\" class=\"absolute right-2 top-1/2 transform -translate-y-1/2 text-white\">
                    🔍
                </button>
            </div>
        </div>
        <div id=\"messagesContainer\" class=\"flex-1 overflow-y-auto p-4 space-y-4 bg-transparent custom-scrollbar\"></div>
        <form id=\"messageForm\" class=\"bg-white/10 backdrop-blur-lg p-2 rounded-b-lg border-t border-white/20\">
            <div class=\"flex items-center px-3 py-2 rounded-lg dark:bg-gray-700 relative w-full\">
                <button id=\"gifButton\" class=\"bg-blue-500 p-2 rounded-full hover:bg-blue-600 mr-2\">GIF</button>
                <div class=\"relative flex-grow\">
                    <textarea id=\"messageInput\" rows=\"1\" class=\"block w-full p-2.5 pr-12 text-sm text-gray-900 bg-white rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-800 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500\" placeholder=\"Votre message...\" style=\"max-height: 35vh; overflow-y: auto;\"></textarea>
                    <span id=\"charCount\" class=\"absolute bottom-2 right-3 text-sky-500 text-xs pointer-events-none\">2000</span>
                </div>
                <button id=\"sendButton\" type=\"button\" class=\"hidden p-2 rounded-full bg-blue-500 text-white ml-2\">Envoyer</button>
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

@media (max-width: 768px) {
    #sendButton {
        display: block;
    }
    #messageInput {
        padding-right: 3rem;
    }
}

#messageSearch {
    padding-right: 2rem;
    color: white;
}

#searchButton {
    font-size: 1rem;
    background: none;
    border: none;
    cursor: pointer;
    outline: none;
}

.custom-scrollbar::-webkit-scrollbar {
    width: 8px;
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
    padding: 8px 12px;
    margin-top: 6px;
    max-width: 90%;
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

        function scrollToBottom() {
            const messagesContainer = document.getElementById('messagesContainer');
            setTimeout(() => {
                messagesContainer.scrollTop = messagesContainer.scrollHeight;
                if (notificationVisible) {
                    document.getElementById('newMessageNotification').style.display = 'none';
                    notificationVisible = false;
                }
            }, 100);
        }

        function displayMessage(message, isCurrentUser) {
            const messagesContainer = document.getElementById('messagesContainer');

            const messageWrapper = document.createElement('div');
            messageWrapper.classList.add('message-wrapper', isCurrentUser ? 'justify-end' : 'justify-start');

            const avatarImage = document.createElement('img');
            avatarImage.src = message.avatar || \"{{ asset('images/default-avatar.png') }}\";
            avatarImage.alt = \"Avatar\";

            const messageContainer = document.createElement('div');
            messageContainer.classList.add('message-container');

            const messageBubble = document.createElement('div');
            messageBubble.classList.add(isCurrentUser ? 'message-sent' : 'message-received', 'message-content'); 
            messageBubble.innerHTML = message.content;

            const timestamp = document.createElement('div');
            timestamp.classList.add(isCurrentUser ? 'timestamp-sent' : 'timestamp-received');
            timestamp.textContent = format(new Date(message.timestamp), 'Pp', { locale: fr });

            messageContainer.appendChild(messageBubble);
            messageContainer.appendChild(timestamp);
            messagesContainer.appendChild(messageWrapper);
            scrollToBottom();
            if (isCurrentUser) {
                messageWrapper.appendChild(messageContainer);
                messageWrapper.appendChild(avatarImage);
            } else {
                messageWrapper.appendChild(avatarImage);
                messageWrapper.appendChild(messageContainer);
            }

            messagesContainer.appendChild(messageWrapper);
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

        let isUserScrollingUp = false;
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
            const messagesRef = ref(database, `conversations/\${conversationId}/messages`);
            if (activeListener) {
                activeListener();
            }
            document.getElementById('messagesContainer').innerHTML = \"\";
            const unsubscribe = onChildAdded(messagesRef, (snapshot) => {
                const message = snapshot.val();
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

    document.getElementById('sendButton').addEventListener('click', (event) => {
        event.preventDefault();
        const content = messageInput.value.trim();
        if (content.length > 0 && content.length <= maxChars && conversationId) {
            sendMessage(conversationId, {{ userId|json_encode }}, content, userAvatar);
            messageInput.value = \"\";
            charCount.innerText = maxChars;
            errorMessage.classList.add('hidden');
                }
        });
        
        document.getElementById('messageSearch').addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const messages = document.querySelectorAll('#messagesContainer .message-content');
            
            messages.forEach(message => {
                const messageText = message.textContent.toLowerCase();
                if (messageText.includes(searchTerm)) {
                    message.closest('.message-wrapper').style.display = '';
                } else {
                    message.closest('.message-wrapper').style.display = 'none';
                }
            });
        });
}); 
</script>
{% endblock %}
", "chat/index.html.twig", "C:\\Users\\benja\\Documents\\GitHub\\dicefinder\\templates\\chat\\index.html.twig");
    }
}
