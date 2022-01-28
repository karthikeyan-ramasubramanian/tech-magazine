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

/* @MobileMessaging/macros.twig */
class __TwigTemplate_e11fc48688608b03a526e3818fd2941eb4238c4be29dea80d31eabe22c04a920 extends Template
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
        // line 57
        echo "
";
    }

    // line 1
    public function macro_manageSmsApi($__credentialSupplied__ = null, $__credentialError__ = null, $__creditLeft__ = null, $__smsProviderOptions__ = null, $__smsProviders__ = null, $__provider__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "credentialSupplied" => $__credentialSupplied__,
            "credentialError" => $__credentialError__,
            "creditLeft" => $__creditLeft__,
            "smsProviderOptions" => $__smsProviderOptions__,
            "smsProviders" => $__smsProviders__,
            "provider" => $__provider__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 2
            echo "<div ng-controller=\"ManageSmsProviderController as manageProvider\">

    <div piwik-activity-indicator loading=\"manageProvider.isDeletingAccount\"></div>
    <div id=\"ajaxErrorManageSmsProviderSettings\"></div>

    ";
            // line 7
            if ((isset($context["credentialSupplied"]) || array_key_exists("credentialSupplied", $context) ? $context["credentialSupplied"] : (function () { throw new RuntimeError('Variable "credentialSupplied" does not exist.', 7, $this->source); })())) {
                // line 8
                echo "        <p>
            ";
                // line 9
                if ((isset($context["credentialError"]) || array_key_exists("credentialError", $context) ? $context["credentialError"] : (function () { throw new RuntimeError('Variable "credentialError" does not exist.', 9, $this->source); })())) {
                    // line 10
                    echo "                ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["MobileMessaging_Settings_CredentialInvalid", (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 10, $this->source); })())]), "html", null, true);
                    echo "<br />
                ";
                    // line 11
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["credentialError"]) || array_key_exists("credentialError", $context) ? $context["credentialError"] : (function () { throw new RuntimeError('Variable "credentialError" does not exist.', 11, $this->source); })()), "html", null, true);
                    echo "
            ";
                } else {
                    // line 13
                    echo "                ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["MobileMessaging_Settings_CredentialProvided", (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 13, $this->source); })())]), "html", null, true);
                    echo "
                ";
                    // line 14
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["creditLeft"]) || array_key_exists("creditLeft", $context) ? $context["creditLeft"] : (function () { throw new RuntimeError('Variable "creditLeft" does not exist.', 14, $this->source); })()), "html", null, true);
                    echo "
            ";
                }
                // line 16
                echo "            <br/>
            ";
                // line 17
                echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["MobileMessaging_Settings_UpdateOrDeleteAccount", "<a ng-click=\"manageProvider.showUpdateAccount()\" id=\"displayAccountForm\">", "</a>", "<a ng-click=\"manageProvider.deleteAccount()\" id=\"deleteAccount\">", "</a>"]);
                echo "
        </p>
    ";
            } else {
                // line 20
                echo "        <p>";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["MobileMessaging_Settings_PleaseSignUp"]), "html", null, true);
                echo "</p>
    ";
            }
            // line 22
            echo "
    <div piwik-form id='accountForm' ";
            // line 23
            if ((isset($context["credentialSupplied"]) || array_key_exists("credentialSupplied", $context) ? $context["credentialSupplied"] : (function () { throw new RuntimeError('Variable "credentialSupplied" does not exist.', 23, $this->source); })())) {
                echo "ng-show=\"manageProvider.showAccountForm\"";
            }
            echo ">

        <div piwik-field uicontrol=\"select\" name=\"smsProviders\"
             options=\"";
            // line 26
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["smsProviderOptions"]) || array_key_exists("smsProviderOptions", $context) ? $context["smsProviderOptions"] : (function () { throw new RuntimeError('Variable "smsProviderOptions" does not exist.', 26, $this->source); })())), "html", null, true);
            echo "\"
             ng-model=\"manageProvider.smsProvider\"
             ng-change=\"manageProvider.isUpdateAccountPossible()\"
             data-title=\"";
            // line 29
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["MobileMessaging_Settings_SMSProvider"]), "html_attr");
            echo "\"
             value=\"";
            // line 30
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["provider"]) || array_key_exists("provider", $context) ? $context["provider"] : (function () { throw new RuntimeError('Variable "provider" does not exist.', 30, $this->source); })()), "html", null, true);
            echo "\">
        </div>

        <div sms-provider-credentials
             provider=\"manageProvider.smsProvider\"
             ng-model=\"manageProvider.credentials\"
             value=\"{}\"
             ng-init=\"manageProvider.isUpdateAccountPossible()\"
             ng-change=\"manageProvider.isUpdateAccountPossible()\"
        ></div>

        <div piwik-save-button id='apiAccountSubmit'
             data-disabled=\"!manageProvider.canBeUpdated\"
             saving=\"manageProvider.isUpdatingAccount\"
             onconfirm=\"manageProvider.updateAccount()\"></div>

        ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["smsProviders"]) || array_key_exists("smsProviders", $context) ? $context["smsProviders"] : (function () { throw new RuntimeError('Variable "smsProviders" does not exist.', 46, $this->source); })()));
            foreach ($context['_seq'] as $context["smsProvider"] => $context["description"]) {
                // line 47
                echo "            <div class='providerDescription'
                 ng-show=\"manageProvider.smsProvider == '";
                // line 48
                echo \Piwik\piwik_escape_filter($this->env, \Piwik\piwik_escape_filter($this->env, $context["smsProvider"], "js"), "html", null, true);
                echo "'\"
                 id='";
                // line 49
                echo \Piwik\piwik_escape_filter($this->env, $context["smsProvider"], "html", null, true);
                echo "'>
                ";
                // line 50
                echo $context["description"];
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['smsProvider'], $context['description'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
    </div>
</div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 58
    public function macro_selectPhoneNumbers($__phoneNumbers__ = null, $__angularContext__ = null, $__value__ = null, $__withIntroduction__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "phoneNumbers" => $__phoneNumbers__,
            "angularContext" => $__angularContext__,
            "value" => $__value__,
            "withIntroduction" => $__withIntroduction__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 59
            echo "    <div id=\"mobilePhoneNumbersHelp\" class=\"inline-help-node\">
        <span class=\"icon-info\"></span>

        ";
            // line 62
            if ((twig_length_filter($this->env, (isset($context["phoneNumbers"]) || array_key_exists("phoneNumbers", $context) ? $context["phoneNumbers"] : (function () { throw new RuntimeError('Variable "phoneNumbers" does not exist.', 62, $this->source); })())) == 0)) {
                // line 63
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["MobileMessaging_MobileReport_NoPhoneNumbers"]), "html", null, true);
                echo "
        ";
            } else {
                // line 65
                echo "            ";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["MobileMessaging_MobileReport_AdditionalPhoneNumbers"]), "html_attr");
                echo "
        ";
            }
            // line 67
            echo "        <a href=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "MobileMessaging", "action" => "index", "updated" => null]]), "html", null, true);
            echo "\">";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["MobileMessaging_MobileReport_MobileMessagingSettingsLink"]), "html", null, true);
            echo "</a>
    </div>

    <div class='mobile'
         piwik-field uicontrol=\"checkbox\"
         var-type=\"array\"
         name=\"phoneNumbers\"
         ng-model=\"";
            // line 74
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["angularContext"]) || array_key_exists("angularContext", $context) ? $context["angularContext"] : (function () { throw new RuntimeError('Variable "angularContext" does not exist.', 74, $this->source); })()), "html", null, true);
            echo ".report.phoneNumbers\"
         ";
            // line 75
            if ((isset($context["withIntroduction"]) || array_key_exists("withIntroduction", $context) ? $context["withIntroduction"] : (function () { throw new RuntimeError('Variable "withIntroduction" does not exist.', 75, $this->source); })())) {
                // line 76
                echo "             introduction=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_SendReportTo"]), "html_attr");
                echo "\"
         ";
            }
            // line 78
            echo "         data-title=\"";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["MobileMessaging_PhoneNumbers"]), "html_attr");
            echo "\"
         ";
            // line 79
            if ((twig_length_filter($this->env, (isset($context["phoneNumbers"]) || array_key_exists("phoneNumbers", $context) ? $context["phoneNumbers"] : (function () { throw new RuntimeError('Variable "phoneNumbers" does not exist.', 79, $this->source); })())) == 0)) {
                echo "disabled=\"true\"";
            }
            // line 80
            echo "         options=\"";
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["phoneNumbers"]) || array_key_exists("phoneNumbers", $context) ? $context["phoneNumbers"] : (function () { throw new RuntimeError('Variable "phoneNumbers" does not exist.', 80, $this->source); })())), "html", null, true);
            echo "\"
         inline-help=\"#mobilePhoneNumbersHelp\"
         ";
            // line 82
            if ((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 82, $this->source); })())) {
                echo "value=\"";
                echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["value"]) || array_key_exists("value", $context) ? $context["value"] : (function () { throw new RuntimeError('Variable "value" does not exist.', 82, $this->source); })())), "html", null, true);
                echo "\"";
            }
            echo ">
    </div>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@MobileMessaging/macros.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 82,  254 => 80,  250 => 79,  245 => 78,  239 => 76,  237 => 75,  233 => 74,  220 => 67,  214 => 65,  208 => 63,  206 => 62,  201 => 59,  185 => 58,  173 => 53,  164 => 50,  160 => 49,  156 => 48,  153 => 47,  149 => 46,  130 => 30,  126 => 29,  120 => 26,  112 => 23,  109 => 22,  103 => 20,  97 => 17,  94 => 16,  89 => 14,  84 => 13,  79 => 11,  74 => 10,  72 => 9,  69 => 8,  67 => 7,  60 => 2,  42 => 1,  37 => 57,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro manageSmsApi(credentialSupplied, credentialError, creditLeft, smsProviderOptions, smsProviders, provider) %}
<div ng-controller=\"ManageSmsProviderController as manageProvider\">

    <div piwik-activity-indicator loading=\"manageProvider.isDeletingAccount\"></div>
    <div id=\"ajaxErrorManageSmsProviderSettings\"></div>

    {% if credentialSupplied %}
        <p>
            {% if credentialError %}
                {{ 'MobileMessaging_Settings_CredentialInvalid'|translate(provider) }}<br />
                {{ credentialError }}
            {% else %}
                {{ 'MobileMessaging_Settings_CredentialProvided'|translate(provider) }}
                {{ creditLeft }}
            {% endif %}
            <br/>
            {{ 'MobileMessaging_Settings_UpdateOrDeleteAccount'|translate('<a ng-click=\"manageProvider.showUpdateAccount()\" id=\"displayAccountForm\">',\"</a>\",'<a ng-click=\"manageProvider.deleteAccount()\" id=\"deleteAccount\">',\"</a>\")|raw }}
        </p>
    {% else %}
        <p>{{ 'MobileMessaging_Settings_PleaseSignUp'|translate }}</p>
    {% endif %}

    <div piwik-form id='accountForm' {% if credentialSupplied %}ng-show=\"manageProvider.showAccountForm\"{% endif %}>

        <div piwik-field uicontrol=\"select\" name=\"smsProviders\"
             options=\"{{ smsProviderOptions|json_encode }}\"
             ng-model=\"manageProvider.smsProvider\"
             ng-change=\"manageProvider.isUpdateAccountPossible()\"
             data-title=\"{{ 'MobileMessaging_Settings_SMSProvider'|translate|e('html_attr') }}\"
             value=\"{{ provider }}\">
        </div>

        <div sms-provider-credentials
             provider=\"manageProvider.smsProvider\"
             ng-model=\"manageProvider.credentials\"
             value=\"{}\"
             ng-init=\"manageProvider.isUpdateAccountPossible()\"
             ng-change=\"manageProvider.isUpdateAccountPossible()\"
        ></div>

        <div piwik-save-button id='apiAccountSubmit'
             data-disabled=\"!manageProvider.canBeUpdated\"
             saving=\"manageProvider.isUpdatingAccount\"
             onconfirm=\"manageProvider.updateAccount()\"></div>

        {% for smsProvider, description in smsProviders %}
            <div class='providerDescription'
                 ng-show=\"manageProvider.smsProvider == '{{ smsProvider|e('js') }}'\"
                 id='{{ smsProvider }}'>
                {{ description|raw }}
            </div>
        {% endfor %}

    </div>
</div>
{% endmacro %}

{% macro selectPhoneNumbers(phoneNumbers, angularContext, value, withIntroduction) %}
    <div id=\"mobilePhoneNumbersHelp\" class=\"inline-help-node\">
        <span class=\"icon-info\"></span>

        {% if phoneNumbers|length == 0 %}
            {{ 'MobileMessaging_MobileReport_NoPhoneNumbers'|translate }}
        {% else %}
            {{ 'MobileMessaging_MobileReport_AdditionalPhoneNumbers'|translate|e('html_attr') }}
        {% endif %}
        <a href=\"{{ linkTo({'module':\"MobileMessaging\", 'action': 'index', 'updated':null}) }}\">{{ 'MobileMessaging_MobileReport_MobileMessagingSettingsLink'|translate }}</a>
    </div>

    <div class='mobile'
         piwik-field uicontrol=\"checkbox\"
         var-type=\"array\"
         name=\"phoneNumbers\"
         ng-model=\"{{ angularContext }}.report.phoneNumbers\"
         {% if withIntroduction %}
             introduction=\"{{ 'ScheduledReports_SendReportTo'|translate|e('html_attr') }}\"
         {% endif %}
         data-title=\"{{ 'MobileMessaging_PhoneNumbers'|translate|e('html_attr') }}\"
         {% if phoneNumbers|length == 0 %}disabled=\"true\"{% endif %}
         options=\"{{ phoneNumbers|json_encode }}\"
         inline-help=\"#mobilePhoneNumbersHelp\"
         {% if value %}value=\"{{ value|json_encode }}\"{% endif %}>
    </div>
{% endmacro %}", "@MobileMessaging/macros.twig", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/matomo/app/plugins/MobileMessaging/templates/macros.twig");
    }
}
