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

/* @MobileMessaging/reportParametersScheduledReports.twig */
class __TwigTemplate_573cc2fa0aedc4ee8b3c2396b10693c44b1031ed9e0a684e33e195f3890bd07b extends Template
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
        $macros["macro"] = $this->macros["macro"] = $this->loadTemplate("@MobileMessaging/macros.twig", "@MobileMessaging/reportParametersScheduledReports.twig", 1)->unwrap();
        // line 2
        echo "
<div ng-show=\"manageScheduledReport.report.type == 'mobile'\">
    ";
        // line 4
        echo twig_call_macro($macros["macro"], "macro_selectPhoneNumbers", [(isset($context["phoneNumbers"]) || array_key_exists("phoneNumbers", $context) ? $context["phoneNumbers"] : (function () { throw new RuntimeError('Variable "phoneNumbers" does not exist.', 4, $this->source); })()), "manageScheduledReport", "", true], 4, $context, $this->getSourceContext());
        echo "
</div>

<script>
\$(function () {
    resetReportParametersFunctions['mobile'] = function (report) {
        report.phoneNumbers = [];
        report.formatmobile = 'sms';
    };

    updateReportParametersFunctions['mobile'] = function (report) {
        if (report.parameters && report.parameters.phoneNumbers) {
            report.phoneNumbers = report.parameters.phoneNumbers;
        }
        report.formatmobile = 'sms';
    };

    getReportParametersFunctions['mobile'] = function (report) {
        var parameters = {};

        // returning [''] when no phone numbers are selected avoids the \"please provide a value for 'parameters'\" error message
        parameters.phoneNumbers = report.phoneNumbers && report.phoneNumbers.length > 0 ? report.phoneNumbers : [''];

        return parameters;
    };
});
</script>";
    }

    public function getTemplateName()
    {
        return "@MobileMessaging/reportParametersScheduledReports.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import '@MobileMessaging/macros.twig' as macro %}

<div ng-show=\"manageScheduledReport.report.type == 'mobile'\">
    {{ macro.selectPhoneNumbers(phoneNumbers, 'manageScheduledReport', '', true) }}
</div>

<script>
\$(function () {
    resetReportParametersFunctions['mobile'] = function (report) {
        report.phoneNumbers = [];
        report.formatmobile = 'sms';
    };

    updateReportParametersFunctions['mobile'] = function (report) {
        if (report.parameters && report.parameters.phoneNumbers) {
            report.phoneNumbers = report.parameters.phoneNumbers;
        }
        report.formatmobile = 'sms';
    };

    getReportParametersFunctions['mobile'] = function (report) {
        var parameters = {};

        // returning [''] when no phone numbers are selected avoids the \"please provide a value for 'parameters'\" error message
        parameters.phoneNumbers = report.phoneNumbers && report.phoneNumbers.length > 0 ? report.phoneNumbers : [''];

        return parameters;
    };
});
</script>", "@MobileMessaging/reportParametersScheduledReports.twig", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/matomo/app/plugins/MobileMessaging/templates/reportParametersScheduledReports.twig");
    }
}
