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

/* @ScheduledReports/_listReports.twig */
class __TwigTemplate_2b16dde059bf8106a739b6d084acb0966790d5883e324f9fc6049bb8cb61da4a extends Template
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
        echo "<div id='entityEditContainer' class=\"entityTableContainer\"
     piwik-content-block
     content-title=\"";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 3, $this->source); })()), "html_attr");
        echo "\"
     help-url=\"https://matomo.org/docs/email-reports/\"
     feature=\"true\"
     ng-show=\"manageScheduledReport.showReportsList\">

    <table piwik-content-table>
        <thead>
        <tr>
            <th class=\"first\">";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Description"]), "html", null, true);
        echo "</th>
            <th>";
        // line 12
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_EmailSchedule"]), "html", null, true);
        echo "</th>
            <th>";
        // line 13
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_ReportFormat"]), "html", null, true);
        echo "</th>
            <th>";
        // line 14
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_SendReportTo"]), "html", null, true);
        echo "</th>
            <th>";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Download"]), "html", null, true);
        echo "</th>
            <th>";
        // line 16
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Edit"]), "html", null, true);
        echo "</th>
            <th>";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Delete"]), "html", null, true);
        echo "</th>
        </tr>
        </thead>

    ";
        // line 21
        if (((isset($context["userLogin"]) || array_key_exists("userLogin", $context) ? $context["userLogin"] : (function () { throw new RuntimeError('Variable "userLogin" does not exist.', 21, $this->source); })()) == "anonymous")) {
            // line 22
            echo "        <tr>
            <td colspan='7'>
                <br/>
                ";
            // line 25
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_MustBeLoggedIn"]), "html", null, true);
            echo "
                <br/>&rsaquo; <a href='index.php?module=";
            // line 26
            echo \Piwik\piwik_escape_filter($this->env, (isset($context["loginModule"]) || array_key_exists("loginModule", $context) ? $context["loginModule"] : (function () { throw new RuntimeError('Variable "loginModule" does not exist.', 26, $this->source); })()), "html", null, true);
            echo "'>";
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Login_LogIn"]), "html", null, true);
            echo "</a>
                <br/><br/>
            </td>
        </tr>
    ";
        } elseif (twig_test_empty(        // line 30
(isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "        <tr>

            <td colspan='7'>
                <br/>
                ";
            // line 35
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_ThereIsNoReportToManage", (isset($context["siteName"]) || array_key_exists("siteName", $context) ? $context["siteName"] : (function () { throw new RuntimeError('Variable "siteName" does not exist.', 35, $this->source); })())])]);
            echo ".
                <br/><br/>
            </td>
        </tr>
    ";
        } else {
            // line 40
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["reports"]) || array_key_exists("reports", $context) ? $context["reports"] : (function () { throw new RuntimeError('Variable "reports" does not exist.', 40, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                // line 41
                echo "        <tr>
            <td class=\"first\">
                ";
                // line 43
                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["report"], "description", [], "any", false, false, false, 43)]);
                echo "
                ";
                // line 44
                if (((isset($context["segmentEditorActivated"]) || array_key_exists("segmentEditorActivated", $context) ? $context["segmentEditorActivated"] : (function () { throw new RuntimeError('Variable "segmentEditorActivated" does not exist.', 44, $this->source); })()) && twig_get_attribute($this->env, $this->source, $context["report"], "idsegment", [], "any", false, false, false, 44))) {
                    // line 45
                    echo "                    <div class=\"entityInlineHelp\" style=\"font-size: 9pt;\">
                        ";
                    // line 46
                    if (twig_get_attribute($this->env, $this->source, ($context["savedSegmentsById"] ?? null), twig_get_attribute($this->env, $this->source, $context["report"], "idsegment", [], "any", false, false, false, 46), [], "array", true, true, false, 46)) {
                        // line 47
                        echo "                            ";
                        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["savedSegmentsById"]) || array_key_exists("savedSegmentsById", $context) ? $context["savedSegmentsById"] : (function () { throw new RuntimeError('Variable "savedSegmentsById" does not exist.', 47, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["report"], "idsegment", [], "any", false, false, false, 47), [], "array", false, false, false, 47), "html", null, true);
                        echo "
                        ";
                    } else {
                        // line 49
                        echo "                            ";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_SegmentDeleted"]), "html", null, true);
                        echo "
                        ";
                    }
                    // line 51
                    echo "                    </div>
                ";
                }
                // line 53
                echo "            </td>
            <td>";
                // line 54
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["periods"]) || array_key_exists("periods", $context) ? $context["periods"] : (function () { throw new RuntimeError('Variable "periods" does not exist.', 54, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["report"], "period", [], "any", false, false, false, 54), [], "array", false, false, false, 54), "html", null, true);
                echo "
                <!-- Last sent on ";
                // line 55
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "ts_last_sent", [], "any", false, false, false, 55), "html", null, true);
                echo " -->
            </td>
            <td>
                ";
                // line 58
                if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, $context["report"], "format", [], "any", false, false, false, 58))) {
                    // line 59
                    echo "                    ";
                    echo \Piwik\piwik_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "format", [], "any", false, false, false, 59)), "html", null, true);
                    echo "
                ";
                }
                // line 61
                echo "            </td>
            <td>
                ";
                // line 64
                echo "                ";
                if ((twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "recipients", [], "any", false, false, false, 64)) == 0)) {
                    // line 65
                    echo "                    ";
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_NoRecipients"]), "html", null, true);
                    echo "
                ";
                } else {
                    // line 67
                    echo "                    ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["report"], "recipients", [], "any", false, false, false, 67));
                    foreach ($context['_seq'] as $context["_key"] => $context["recipient"]) {
                        // line 68
                        echo "                        ";
                        echo \Piwik\piwik_escape_filter($this->env, $context["recipient"], "html", null, true);
                        echo "
                        <br/>
                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recipient'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 71
                    echo "                    ";
                    // line 72
                    echo "                    <a href=\"#\"
                       ng-click=\"manageScheduledReport.sendReportNow(";
                    // line 73
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "idreport", [], "any", false, false, false, 73), "html", null, true);
                    echo ")\"
                       name=\"linkSendNow\" class=\"link_but withIcon\" style=\"margin-top:3px;\">
                        <img border=0 src='";
                    // line 75
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["reportTypes"]) || array_key_exists("reportTypes", $context) ? $context["reportTypes"] : (function () { throw new RuntimeError('Variable "reportTypes" does not exist.', 75, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 75), [], "array", false, false, false, 75), "html", null, true);
                    echo "'/>
                        ";
                    // line 76
                    echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_SendReportNow"]), "html", null, true);
                    echo "
                    </a>
                ";
                }
                // line 79
                echo "            </td>
            <td>
                ";
                // line 82
                echo "                <form action=\"";
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFunction('linkTo')->getCallable(), [["module" => "API", "segment" => null, "method" => "ScheduledReports.generateReport", "idReport" => twig_get_attribute($this->env, $this->source,                 // line 83
$context["report"], "idreport", [], "any", false, false, false, 83), "outputType" =>                 // line 84
(isset($context["downloadOutputType"]) || array_key_exists("downloadOutputType", $context) ? $context["downloadOutputType"] : (function () { throw new RuntimeError('Variable "downloadOutputType" does not exist.', 84, $this->source); })()), "language" => (isset($context["language"]) || array_key_exists("language", $context) ? $context["language"] : (function () { throw new RuntimeError('Variable "language" does not exist.', 84, $this->source); })()), "format" => ((twig_in_filter(twig_get_attribute($this->env, $this->source,                 // line 85
$context["report"], "format", [], "any", false, false, false, 85), [0 => "html", 1 => "csv", 2 => "tsv"])) ? (twig_get_attribute($this->env, $this->source, $context["report"], "format", [], "any", false, false, false, 85)) : (false))]]), "html", null, true);
                echo "\"
                      method=\"POST\"
                      target=\"_blank\"
                      id=\"downloadReportForm_";
                // line 88
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "idreport", [], "any", false, false, false, 88), "html_attr");
                echo "\"
                >
                    <input type=\"hidden\" name=\"token_auth\" value=\"";
                // line 90
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["token_auth"]) || array_key_exists("token_auth", $context) ? $context["token_auth"] : (function () { throw new RuntimeError('Variable "token_auth" does not exist.', 90, $this->source); })()), "html_attr");
                echo "\">
                    <input type=\"hidden\" name=\"force_api_session\" value=\"1\">
                </form>
                <a href=\"javascript:void(0)\"
                   ng-click=\"manageScheduledReport.displayReport(";
                // line 94
                echo \Piwik\piwik_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["report"], "idreport", [], "any", false, false, false, 94)), "html", null, true);
                echo ")\"
                   rel=\"noreferrer noopener\" name=\"linkDownloadReport\" id=\"";
                // line 95
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "idreport", [], "any", false, false, false, 95), "html_attr");
                echo "\" class=\"link_but withIcon\">
                    <img src='";
                // line 96
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["reportFormatsByReportType"]) || array_key_exists("reportFormatsByReportType", $context) ? $context["reportFormatsByReportType"] : (function () { throw new RuntimeError('Variable "reportFormatsByReportType" does not exist.', 96, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["report"], "type", [], "any", false, false, false, 96), [], "array", false, false, false, 96), twig_get_attribute($this->env, $this->source, $context["report"], "format", [], "any", false, false, false, 96), [], "array", false, false, false, 96), "html", null, true);
                echo "' border=\"0\" width=\"16px\" height=\"16px\"/>
                    ";
                // line 97
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Download"]), "html", null, true);
                echo "
                </a>
            </td>
            <td style=\"text-align: center;padding-top:2px;\">
                <button ng-click=\"manageScheduledReport.editReport(";
                // line 101
                echo \Piwik\piwik_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["report"], "idreport", [], "any", false, false, false, 101)), "html", null, true);
                echo ")\"
                        class=\"table-action\" title=\"";
                // line 102
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Edit"]), "html_attr");
                echo "\">
                    <span class=\"icon-edit\"></span>
                </button>
            </td>
            <td style=\"text-align: center;padding-top:2px;\">
                <button ng-click=\"manageScheduledReport.deleteReport(";
                // line 107
                echo \Piwik\piwik_escape_filter($this->env, json_encode(twig_get_attribute($this->env, $this->source, $context["report"], "idreport", [], "any", false, false, false, 107)), "html", null, true);
                echo ")\"
                        class=\"table-action\" title=\"";
                // line 108
                echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Delete"]), "html_attr");
                echo "\">
                    <span class=\"icon-delete\"></span>
                </button>
            </td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "    ";
        }
        // line 115
        echo "    </table>

    <div class=\"tableActionBar\">
        ";
        // line 118
        if (((isset($context["userLogin"]) || array_key_exists("userLogin", $context) ? $context["userLogin"] : (function () { throw new RuntimeError('Variable "userLogin" does not exist.', 118, $this->source); })()) != "anonymous")) {
            // line 119
            echo "            <button id=\"add-report\" ng-click=\"manageScheduledReport.createReport()\" >
                <span class=\"icon-add\"></span>
                ";
            // line 121
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_CreateAndScheduleReport"]), "html", null, true);
            echo "
            </button>
        ";
        }
        // line 124
        echo "    </div>

</div>
";
    }

    public function getTemplateName()
    {
        return "@ScheduledReports/_listReports.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  317 => 124,  311 => 121,  307 => 119,  305 => 118,  300 => 115,  297 => 114,  285 => 108,  281 => 107,  273 => 102,  269 => 101,  262 => 97,  258 => 96,  254 => 95,  250 => 94,  243 => 90,  238 => 88,  232 => 85,  231 => 84,  230 => 83,  228 => 82,  224 => 79,  218 => 76,  214 => 75,  209 => 73,  206 => 72,  204 => 71,  194 => 68,  189 => 67,  183 => 65,  180 => 64,  176 => 61,  170 => 59,  168 => 58,  162 => 55,  158 => 54,  155 => 53,  151 => 51,  145 => 49,  139 => 47,  137 => 46,  134 => 45,  132 => 44,  128 => 43,  124 => 41,  119 => 40,  111 => 35,  105 => 31,  103 => 30,  94 => 26,  90 => 25,  85 => 22,  83 => 21,  76 => 17,  72 => 16,  68 => 15,  64 => 14,  60 => 13,  56 => 12,  52 => 11,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div id='entityEditContainer' class=\"entityTableContainer\"
     piwik-content-block
     content-title=\"{{ title|e('html_attr') }}\"
     help-url=\"https://matomo.org/docs/email-reports/\"
     feature=\"true\"
     ng-show=\"manageScheduledReport.showReportsList\">

    <table piwik-content-table>
        <thead>
        <tr>
            <th class=\"first\">{{ 'General_Description'|translate }}</th>
            <th>{{ 'ScheduledReports_EmailSchedule'|translate }}</th>
            <th>{{ 'ScheduledReports_ReportFormat'|translate }}</th>
            <th>{{ 'ScheduledReports_SendReportTo'|translate }}</th>
            <th>{{ 'General_Download'|translate }}</th>
            <th>{{ 'General_Edit'|translate }}</th>
            <th>{{ 'General_Delete'|translate }}</th>
        </tr>
        </thead>

    {% if userLogin == 'anonymous' %}
        <tr>
            <td colspan='7'>
                <br/>
                {{ 'ScheduledReports_MustBeLoggedIn'|translate }}
                <br/>&rsaquo; <a href='index.php?module={{ loginModule }}'>{{ 'Login_LogIn'|translate }}</a>
                <br/><br/>
            </td>
        </tr>
    {% elseif reports is empty %}
        <tr>

            <td colspan='7'>
                <br/>
                {{ 'ScheduledReports_ThereIsNoReportToManage'|translate(siteName)|rawSafeDecoded }}.
                <br/><br/>
            </td>
        </tr>
    {% else %}
    {% for report in reports %}
        <tr>
            <td class=\"first\">
                {{ report.description|rawSafeDecoded }}
                {% if segmentEditorActivated and report.idsegment %}
                    <div class=\"entityInlineHelp\" style=\"font-size: 9pt;\">
                        {% if savedSegmentsById[report.idsegment] is defined %}
                            {{ savedSegmentsById[report.idsegment] }}
                        {% else %}
                            {{ 'ScheduledReports_SegmentDeleted'|translate }}
                        {% endif %}
                    </div>
                {% endif %}
            </td>
            <td>{{ periods[report.period] }}
                <!-- Last sent on {{ report.ts_last_sent }} -->
            </td>
            <td>
                {% if report.format is not empty %}
                    {{ report.format|upper }}
                {% endif %}
            </td>
            <td>
                {# report recipients #}
                {% if report.recipients|length == 0 %}
                    {{ 'ScheduledReports_NoRecipients'|translate }}
                {% else %}
                    {% for recipient in report.recipients %}
                        {{ recipient }}
                        <br/>
                    {% endfor %}
                    {# send now link #}
                    <a href=\"#\"
                       ng-click=\"manageScheduledReport.sendReportNow({{ report.idreport }})\"
                       name=\"linkSendNow\" class=\"link_but withIcon\" style=\"margin-top:3px;\">
                        <img border=0 src='{{ reportTypes[report.type] }}'/>
                        {{ 'ScheduledReports_SendReportNow'|translate }}
                    </a>
                {% endif %}
            </td>
            <td>
                {# download link #}
                <form action=\"{{ linkTo({ 'module':'API', 'segment': null,
                    'method':'ScheduledReports.generateReport', 'idReport':report.idreport,
                    'outputType':downloadOutputType, 'language':language,
                    'format': (report.format in ['html', 'csv', 'tsv']) ? report.format : false }) }}\"
                      method=\"POST\"
                      target=\"_blank\"
                      id=\"downloadReportForm_{{ report.idreport|e('html_attr') }}\"
                >
                    <input type=\"hidden\" name=\"token_auth\" value=\"{{ token_auth|e('html_attr') }}\">
                    <input type=\"hidden\" name=\"force_api_session\" value=\"1\">
                </form>
                <a href=\"javascript:void(0)\"
                   ng-click=\"manageScheduledReport.displayReport({{ report.idreport|json_encode }})\"
                   rel=\"noreferrer noopener\" name=\"linkDownloadReport\" id=\"{{ report.idreport|e('html_attr') }}\" class=\"link_but withIcon\">
                    <img src='{{ reportFormatsByReportType[report.type][report.format] }}' border=\"0\" width=\"16px\" height=\"16px\"/>
                    {{ 'General_Download'|translate }}
                </a>
            </td>
            <td style=\"text-align: center;padding-top:2px;\">
                <button ng-click=\"manageScheduledReport.editReport({{ report.idreport|json_encode }})\"
                        class=\"table-action\" title=\"{{ 'General_Edit'|translate|e('html_attr') }}\">
                    <span class=\"icon-edit\"></span>
                </button>
            </td>
            <td style=\"text-align: center;padding-top:2px;\">
                <button ng-click=\"manageScheduledReport.deleteReport({{ report.idreport|json_encode }})\"
                        class=\"table-action\" title=\"{{ 'General_Delete'|translate|e('html_attr') }}\">
                    <span class=\"icon-delete\"></span>
                </button>
            </td>
        </tr>
    {% endfor %}
    {% endif %}
    </table>

    <div class=\"tableActionBar\">
        {% if userLogin != 'anonymous' %}
            <button id=\"add-report\" ng-click=\"manageScheduledReport.createReport()\" >
                <span class=\"icon-add\"></span>
                {{ 'ScheduledReports_CreateAndScheduleReport'|translate }}
            </button>
        {% endif %}
    </div>

</div>
", "@ScheduledReports/_listReports.twig", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/matomo/app/plugins/ScheduledReports/templates/_listReports.twig");
    }
}
