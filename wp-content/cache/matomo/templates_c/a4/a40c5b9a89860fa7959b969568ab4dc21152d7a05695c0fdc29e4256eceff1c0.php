<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Events/_actionEvent.twig */
class __TwigTemplate_f4e3fc198d2aa1b7350aa15da6568370afc564cdd30d7ae0a383c366412fb07a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<li class=\"action\" title=\"";
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Live.renderActionTooltip", (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 1, $this->source); })()), (isset($context["visitInfo"]) || array_key_exists("visitInfo", $context) ? $context["visitInfo"] : (function () { throw new RuntimeError('Variable "visitInfo" does not exist.', 1, $this->source); })())]);
        echo "\">
    <div>
        ";
        // line 3
        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", true, true, false, 3)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "pageTitle", [], "any", false, false, false, 3), false)) : (false)))) {
            // line 4
            echo "            <span class=\"truncated-text-line\">";
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 4, $this->source); })()), "pageTitle", [], "any", false, false, false, 4)]);
            echo "</span>
        ";
        }
        // line 6
        echo "        <img src='plugins/Morpheus/images/event.svg' title='";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Events_Event"]), "html", null, true);
        echo "' class=\"action-list-action-icon event\">
        <span class=\"truncated-text-line event\">";
        // line 7
        echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 7, $this->source); })()), "eventCategory", [], "any", false, false, false, 7)]);
        echo "
            - ";
        // line 8
        echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "eventAction", [], "any", false, false, false, 8)]);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "eventName", [], "any", true, true, false, 8)) {
            echo "- ";
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "eventName", [], "any", false, false, false, 8)]);
        }
        echo " ";
        if (twig_get_attribute($this->env, $this->source, ($context["action"] ?? null), "eventValue", [], "any", true, true, false, 8)) {
            echo "[";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 8, $this->source); })()), "eventValue", [], "any", false, false, false, 8), "html", null, true);
            echo "]";
        }
        echo "</span>
        ";
        // line 9
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 9, $this->source); })()), "url", [], "any", false, false, false, 9))) {
            // line 10
            echo "            ";
            if ((((twig_get_attribute($this->env, $this->source, ($context["previousAction"] ?? null), "url", [], "any", true, true, false, 10)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["previousAction"] ?? null), "url", [], "any", false, false, false, 10), false)) : (false)) == twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 10, $this->source); })()), "url", [], "any", false, false, false, 10))) {
                // line 11
                echo "                ";
                // line 12
                echo "            ";
            } else {
                // line 13
                echo "                ";
                if ((((is_string($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = twig_lower_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 13, $this->source); })()), "url", [], "any", false, false, false, 13)))) && is_string($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = "javascript:") && ('' === $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 || 0 === strpos($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4, $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144))) || (is_string($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = twig_lower_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source,                 // line 14
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 14, $this->source); })()), "url", [], "any", false, false, false, 14)))) && is_string($__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 = "vbscript:") && ('' === $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002 || 0 === strpos($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b, $__internal_68aa442c1d43d3410ea8f958ba9090f3eaa9a76f8de8fc9be4d6c7389ba28002)))) || (is_string($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4 = twig_lower_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source,                 // line 15
(isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 15, $this->source); })()), "url", [], "any", false, false, false, 15)))) && is_string($__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 = "data:") && ('' === $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666 || 0 === strpos($__internal_d7fc55f1a54b629533d60b43063289db62e68921ee7a5f8de562bd9d4a2b7ad4, $__internal_01476f8db28655ee4ee02ea2d17dd5a92599be76304f08cd8bc0e05aced30666))))) {
                    // line 16
                    echo "                    ";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "url", [], "any", false, false, false, 16), "html", null, true);
                    echo "
                ";
                } else {
                    // line 18
                    echo "                    <a href=\"";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('safelink')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 18, $this->source); })()), "url", [], "any", false, false, false, 18)]), "html_attr");
                    echo "\" rel=\"noreferrer noopener\" target=\"_blank\" class=\"truncated-text-line\">
                        ";
                    // line 19
                    echo \Piwik\piwik_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 19, $this->source); })()), "url", [], "any", false, false, false, 19), ["http://" => "", "https://" => ""]), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 22
                echo "            ";
            }
            // line 23
            echo "        ";
        }
        // line 24
        echo "    </div>
</li>
";
    }

    public function getTemplateName()
    {
        return "@Events/_actionEvent.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 24,  110 => 23,  107 => 22,  101 => 19,  96 => 18,  90 => 16,  88 => 15,  87 => 14,  85 => 13,  82 => 12,  80 => 11,  77 => 10,  75 => 9,  60 => 8,  56 => 7,  51 => 6,  45 => 4,  43 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<li class=\"action\" title=\"{{ postEvent('Live.renderActionTooltip', action, visitInfo) }}\">
    <div>
        {% if action.pageTitle|default(false) is not empty %}
            <span class=\"truncated-text-line\">{{ action.pageTitle|rawSafeDecoded }}</span>
        {% endif %}
        <img src='plugins/Morpheus/images/event.svg' title='{{ 'Events_Event'|translate }}' class=\"action-list-action-icon event\">
        <span class=\"truncated-text-line event\">{{ action.eventCategory|rawSafeDecoded }}
            - {{ action.eventAction|rawSafeDecoded }} {% if action.eventName is defined %}- {{ action.eventName|rawSafeDecoded }}{% endif %} {% if action.eventValue is defined %}[{{ action.eventValue }}]{% endif %}</span>
        {% if action.url is not empty %}
            {% if previousAction.url|default(false) == action.url %}
                {# For events, do not show (url) if the Event URL is the same as the URL last displayed #}
            {% else %}
                {% if action.url|trim|lower starts with 'javascript:' or
                action.url|trim|lower starts with 'vbscript:' or
                action.url|trim|lower starts with 'data:' %}
                    {{ action.url }}
                {% else %}
                    <a href=\"{{ action.url|safelink|e('html_attr') }}\" rel=\"noreferrer noopener\" target=\"_blank\" class=\"truncated-text-line\">
                        {{ action.url|replace({'http://': '', 'https://': ''}) }}
                    </a>
                {% endif %}
            {% endif %}
        {% endif %}
    </div>
</li>
", "@Events/_actionEvent.twig", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/matomo/app/plugins/Events/templates/_actionEvent.twig");
    }
}
