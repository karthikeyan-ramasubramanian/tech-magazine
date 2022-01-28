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

/* @ScheduledReports/reportParametersScheduledReports.twig */
class __TwigTemplate_df9c3628e4df90a13ce4fd9e876ba0a4449ba11b9f765b7cb739a33a010f6310 extends Template
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
        echo "<div piwik-field uicontrol=\"checkbox\"
     name=\"report_email_me\"
     introduction=\"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_SendReportTo"]), "html_attr");
        echo "\"
     ng-show=\"manageScheduledReport.report.type == 'email'\"
     ng-model=\"manageScheduledReport.report.emailMe\"
     data-title=\"";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_SentToMe"]), "html_attr");
        echo " (";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["currentUserEmail"]) || array_key_exists("currentUserEmail", $context) ? $context["currentUserEmail"] : (function () { throw new RuntimeError('Variable "currentUserEmail" does not exist.', 6, $this->source); })()), "html_attr");
        echo ")\">
</div>

<div piwik-field uicontrol=\"textarea\" var-type=\"array\"
     ng-show=\"manageScheduledReport.report.type == 'email'\"
     ng-model=\"manageScheduledReport.report.additionalEmails\"
     data-title=\"";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_AlsoSendReportToTheseEmails"]), "html_attr");
        echo "\">
</div>

<script>

    \$(function () {

        resetReportParametersFunctions ['";
        // line 19
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportType"]) || array_key_exists("reportType", $context) ? $context["reportType"] : (function () { throw new RuntimeError('Variable "reportType" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "'] = function (report) {
            report.displayFormat = '";
        // line 20
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultDisplayFormat"]) || array_key_exists("defaultDisplayFormat", $context) ? $context["defaultDisplayFormat"] : (function () { throw new RuntimeError('Variable "defaultDisplayFormat" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "';
            report.emailMe = ";
        // line 21
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultEmailMe"]) || array_key_exists("defaultEmailMe", $context) ? $context["defaultEmailMe"] : (function () { throw new RuntimeError('Variable "defaultEmailMe" does not exist.', 21, $this->source); })()), "html", null, true);
        echo ";
            report.evolutionGraph = ";
        // line 22
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultEvolutionGraph"]) || array_key_exists("defaultEvolutionGraph", $context) ? $context["defaultEvolutionGraph"] : (function () { throw new RuntimeError('Variable "defaultEvolutionGraph" does not exist.', 22, $this->source); })()), "html", null, true);
        echo ";
            report.additionalEmails = '';
        };

        updateReportParametersFunctions['";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportType"]) || array_key_exists("reportType", $context) ? $context["reportType"] : (function () { throw new RuntimeError('Variable "reportType" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "'] = function (report) {
            if (report == null || report.parameters == null) {
                return;
            }

            var i, field, fields = ['displayFormat', 'emailMe', 'evolutionGraph', 'additionalEmails'];
            for (i in fields) {
                field = fields[i];
                if (field in report.parameters) {
                    report[field] = report.parameters[field];
                }
            }
        };

        getReportParametersFunctions['";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportType"]) || array_key_exists("reportType", $context) ? $context["reportType"] : (function () { throw new RuntimeError('Variable "reportType" does not exist.', 40, $this->source); })()), "html", null, true);
        echo "'] = function (report) {

            var parameters = {};

            parameters.displayFormat = report.displayFormat;
            parameters.emailMe = report.emailMe;
            parameters.evolutionGraph = report.evolutionGraph;
            parameters.additionalEmails = report.additionalEmails ? report.additionalEmails : [];

            return parameters;
        };
    });
</script>";
    }

    public function getTemplateName()
    {
        return "@ScheduledReports/reportParametersScheduledReports.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 40,  87 => 26,  80 => 22,  76 => 21,  72 => 20,  68 => 19,  58 => 12,  47 => 6,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div piwik-field uicontrol=\"checkbox\"
     name=\"report_email_me\"
     introduction=\"{{ 'ScheduledReports_SendReportTo'|translate|e('html_attr') }}\"
     ng-show=\"manageScheduledReport.report.type == 'email'\"
     ng-model=\"manageScheduledReport.report.emailMe\"
     data-title=\"{{ 'ScheduledReports_SentToMe'|translate|e('html_attr') }} ({{ currentUserEmail|e('html_attr') }})\">
</div>

<div piwik-field uicontrol=\"textarea\" var-type=\"array\"
     ng-show=\"manageScheduledReport.report.type == 'email'\"
     ng-model=\"manageScheduledReport.report.additionalEmails\"
     data-title=\"{{ 'ScheduledReports_AlsoSendReportToTheseEmails'|translate|e('html_attr') }}\">
</div>

<script>

    \$(function () {

        resetReportParametersFunctions ['{{ reportType }}'] = function (report) {
            report.displayFormat = '{{ defaultDisplayFormat }}';
            report.emailMe = {{ defaultEmailMe }};
            report.evolutionGraph = {{ defaultEvolutionGraph }};
            report.additionalEmails = '';
        };

        updateReportParametersFunctions['{{ reportType }}'] = function (report) {
            if (report == null || report.parameters == null) {
                return;
            }

            var i, field, fields = ['displayFormat', 'emailMe', 'evolutionGraph', 'additionalEmails'];
            for (i in fields) {
                field = fields[i];
                if (field in report.parameters) {
                    report[field] = report.parameters[field];
                }
            }
        };

        getReportParametersFunctions['{{ reportType }}'] = function (report) {

            var parameters = {};

            parameters.displayFormat = report.displayFormat;
            parameters.emailMe = report.emailMe;
            parameters.evolutionGraph = report.evolutionGraph;
            parameters.additionalEmails = report.additionalEmails ? report.additionalEmails : [];

            return parameters;
        };
    });
</script>", "@ScheduledReports/reportParametersScheduledReports.twig", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/matomo/app/plugins/ScheduledReports/templates/reportParametersScheduledReports.twig");
    }
}
