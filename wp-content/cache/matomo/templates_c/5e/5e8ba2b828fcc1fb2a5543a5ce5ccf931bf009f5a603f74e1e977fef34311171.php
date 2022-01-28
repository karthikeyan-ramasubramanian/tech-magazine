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

/* @ScheduledReports/_addReport.twig */
class __TwigTemplate_ae1e2c30624fa1eb8d2f832af424737297e309569ca1e5a2a31ea841b9967e6e extends Template
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
        echo "<div piwik-content-block
     content-title=\"";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_CreateAndScheduleReport"]), "html_attr");
        echo "\"
     class=\"entityAddContainer\"
     ng-if=\"manageScheduledReport.showReportForm\">
    <div class='clear'></div>
    <form id='addEditReport' piwik-form ng-submit=\"manageScheduledReport.submitReport()\">

        <div piwik-field uicontrol=\"text\" name=\"website\"
             data-title=\"";
        // line 9
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Website"]), "html_attr");
        echo "\"
             data-disabled=\"true\"
             value=\"";
        // line 11
        echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [(isset($context["siteName"]) || array_key_exists("siteName", $context) ? $context["siteName"] : (function () { throw new RuntimeError('Variable "siteName" does not exist.', 11, $this->source); })())]);
        echo "\">
        </div>

        <div piwik-field uicontrol=\"textarea\" name=\"report_description\"
             data-title=\"";
        // line 15
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Description"]), "html_attr");
        echo "\"
             ng-model=\"manageScheduledReport.report.description\"
             inline-help=\"";
        // line 17
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_DescriptionOnFirstPage"]), "html_attr");
        echo "\">
        </div>

        ";
        // line 20
        if ((isset($context["segmentEditorActivated"]) || array_key_exists("segmentEditorActivated", $context) ? $context["segmentEditorActivated"] : (function () { throw new RuntimeError('Variable "segmentEditorActivated" does not exist.', 20, $this->source); })())) {
            // line 21
            echo "            <div id=\"reportSegmentInlineHelp\" class=\"inline-help-node\">
                ";
            // line 22
            ob_start();
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_DefaultAllVisits"]), "html", null, true);
            $context["SegmentEditor_DefaultAllVisits"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 23
            echo "                ";
            ob_start();
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_AddNewSegment"]), "html", null, true);
            $context["SegmentEditor_AddNewSegment"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
            // line 24
            echo "                ";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_Segment_Help", "<a href=\"./\" rel=\"noreferrer noopener\" target=\"_blank\">", "</a>", (isset($context["SegmentEditor_DefaultAllVisits"]) || array_key_exists("SegmentEditor_DefaultAllVisits", $context) ? $context["SegmentEditor_DefaultAllVisits"] : (function () { throw new RuntimeError('Variable "SegmentEditor_DefaultAllVisits" does not exist.', 24, $this->source); })()), (isset($context["SegmentEditor_AddNewSegment"]) || array_key_exists("SegmentEditor_AddNewSegment", $context) ? $context["SegmentEditor_AddNewSegment"] : (function () { throw new RuntimeError('Variable "SegmentEditor_AddNewSegment" does not exist.', 24, $this->source); })())]);
            echo "
            </div>

            <div piwik-field uicontrol=\"select\" name=\"report_segment\"
                 ng-model=\"manageScheduledReport.report.idsegment\"
                 options=\"";
            // line 29
            echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["savedSegmentsById"]) || array_key_exists("savedSegmentsById", $context) ? $context["savedSegmentsById"] : (function () { throw new RuntimeError('Variable "savedSegmentsById" does not exist.', 29, $this->source); })())), "html", null, true);
            echo "\"
                 data-title=\"";
            // line 30
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["SegmentEditor_ChooseASegment"]), "html_attr");
            echo "\"
                 inline-help=\"#reportSegmentInlineHelp\">
            </div>
        ";
        }
        // line 34
        echo "
        <div id=\"emailScheduleInlineHelp\" class=\"inline-help-node\">
            ";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_WeeklyScheduleHelp"]), "html", null, true);
        echo "
            <br/>
            ";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_MonthlyScheduleHelp"]), "html", null, true);
        echo "
        </div>

        <div piwik-field uicontrol=\"select\" name=\"report_schedule\"
             options=\"";
        // line 42
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["periods"]) || array_key_exists("periods", $context) ? $context["periods"] : (function () { throw new RuntimeError('Variable "periods" does not exist.', 42, $this->source); })())), "html", null, true);
        echo "\"
             ng-model=\"manageScheduledReport.report.period\"
             ng-change=\"manageScheduledReport.report.periodParam = manageScheduledReport.report.period === 'never' ? null : manageScheduledReport.report.period\"
             data-title=\"";
        // line 45
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_EmailSchedule"]), "html_attr");
        echo "\"
             inline-help=\"#emailScheduleInlineHelp\">
        </div>

        <div id=\"emailReportPeriodInlineHelp\" class=\"inline-help-node\">
            ";
        // line 50
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_ReportPeriodHelp"]), "html", null, true);
        echo "
            <br/><br/>
            ";
        // line 52
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_ReportPeriodHelp2"]), "html", null, true);
        echo "
        </div>

        <div piwik-field uicontrol=\"select\" name=\"report_period\"
             options=\"";
        // line 56
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["paramPeriods"]) || array_key_exists("paramPeriods", $context) ? $context["paramPeriods"] : (function () { throw new RuntimeError('Variable "paramPeriods" does not exist.', 56, $this->source); })())), "html", null, true);
        echo "\"
             ng-model=\"manageScheduledReport.report.periodParam\"
             title=\"";
        // line 58
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_ReportPeriod"]), "html_attr");
        echo "\"
             inline-help=\"#emailReportPeriodInlineHelp\"
        >
        </div>

        <div piwik-field uicontrol=\"select\" name=\"report_hour\"
             options=\"manageScheduledReport.reportHours\"
             ng-change=\"manageScheduledReport.updateReportHourUtc()\"
             ng-model=\"manageScheduledReport.report.hour\"
             ";
        // line 67
        if (((isset($context["timezoneOffset"]) || array_key_exists("timezoneOffset", $context) ? $context["timezoneOffset"] : (function () { throw new RuntimeError('Variable "timezoneOffset" does not exist.', 67, $this->source); })()) != 0)) {
            echo "inline-help=\"#reportHourHelpText\"";
        }
        // line 68
        echo "             data-title=\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_ReportHour", "X"]), "html_attr");
        echo "\">
        </div>

        ";
        // line 71
        if (((isset($context["timezoneOffset"]) || array_key_exists("timezoneOffset", $context) ? $context["timezoneOffset"] : (function () { throw new RuntimeError('Variable "timezoneOffset" does not exist.', 71, $this->source); })()) != 0)) {
            // line 72
            echo "            <div id=\"reportHourHelpText\" class=\"inline-help-node\">
                <span ng-bind=\"manageScheduledReport.report.hourUtc\"></span>
            </div>
        ";
        }
        // line 76
        echo "
        <div piwik-field uicontrol=\"select\" name=\"report_type\"
             options=\"";
        // line 78
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["reportTypeOptions"]) || array_key_exists("reportTypeOptions", $context) ? $context["reportTypeOptions"] : (function () { throw new RuntimeError('Variable "reportTypeOptions" does not exist.', 78, $this->source); })())), "html", null, true);
        echo "\"
             ng-model=\"manageScheduledReport.report.type\"
             ng-change=\"manageScheduledReport.changedReportType()\"
             ";
        // line 81
        if ((twig_length_filter($this->env, (isset($context["reportTypes"]) || array_key_exists("reportTypes", $context) ? $context["reportTypes"] : (function () { throw new RuntimeError('Variable "reportTypes" does not exist.', 81, $this->source); })())) == 1)) {
            echo "disabled=\"true\"";
        }
        // line 82
        echo "             data-title=\"";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_ReportType"]), "html_attr");
        echo "\">
        </div>

        ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportFormatsByReportTypeOptions"]) || array_key_exists("reportFormatsByReportTypeOptions", $context) ? $context["reportFormatsByReportTypeOptions"] : (function () { throw new RuntimeError('Variable "reportFormatsByReportTypeOptions" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["reportType"] => $context["reportFormats"]) {
            // line 86
            echo "            <div piwik-field uicontrol=\"select\" name=\"report_format\"
                 class=\"";
            // line 87
            echo \Piwik\piwik_escape_filter($this->env, $context["reportType"], "html", null, true);
            echo "\"
                 ng-model=\"manageScheduledReport.report.format";
            // line 88
            echo \Piwik\piwik_escape_filter($this->env, $context["reportType"], "html", null, true);
            echo "\"
                 ng-show=\"manageScheduledReport.report.type == '";
            // line 89
            echo \Piwik\piwik_escape_filter($this->env, $context["reportType"], "html", null, true);
            echo "'\"
                 options=\"";
            // line 90
            echo \Piwik\piwik_escape_filter($this->env, json_encode($context["reportFormats"]), "html", null, true);
            echo "\"
                 data-title=\"";
            // line 91
            echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_ReportFormat"]), "html_attr");
            echo "\">
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['reportType'], $context['reportFormats'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 94
        echo "
        ";
        // line 95
        echo call_user_func_array($this->env->getFunction('postEvent')->getCallable(), ["Template.reportParametersScheduledReports"]);
        echo "

        <div ng-show=\"manageScheduledReport.report.type == 'email' && manageScheduledReport.report.formatemail !== 'csv' && manageScheduledReport.report.formatemail !== 'tsv'\">
            <div piwik-field uicontrol=\"select\" name=\"display_format\" class=\"email\"
                 ng-model=\"manageScheduledReport.report.displayFormat\"
                 options=\"";
        // line 100
        echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["displayFormats"]) || array_key_exists("displayFormats", $context) ? $context["displayFormats"] : (function () { throw new RuntimeError('Variable "displayFormats" does not exist.', 100, $this->source); })())), "html", null, true);
        echo "\"
                 introduction=\"";
        // line 101
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_AggregateReportsFormat"]), "html_attr");
        echo "\">
            </div>

            <div piwik-field uicontrol=\"checkbox\" name=\"report_evolution_graph\"
                 class=\"report_evolution_graph\"
                 ng-model=\"manageScheduledReport.report.evolutionGraph\"
                 ng-show=\"manageScheduledReport.report.displayFormat == '2' || manageScheduledReport.report.displayFormat == '3'\"
                 data-title=\"";
        // line 108
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_EvolutionGraph", 5]), "html_attr");
        echo "\">
            </div>

            <div
                class=\"row evolution-graph-period\"
                ng-show=\"manageScheduledReport.report.displayFormat == '1' || manageScheduledReport.report.displayFormat == '2' || manageScheduledReport.report.displayFormat == '3'\"
            >
                <div class=\"col s12\">
                    <label for=\"report_evolution_period_for_each\">
                        <input id=\"report_evolution_period_for_each\" name=\"report_evolution_period_for\" type=\"radio\" checked value=\"each\" ng-model=\"manageScheduledReport.report.evolutionPeriodFor\" />
                        <span piwik-translate=\"ScheduledReports_EvolutionGraphsShowForEachInPeriod\"><strong>::</strong>::";
        // line 118
        echo "{{ manageScheduledReport.getFrequencyPeriodSingle() }}";
        echo "</span>
                    </label>
                </div>
                <div class=\"col s12\">
                    <label for=\"report_evolution_period_for_prev\">
                        <input id=\"report_evolution_period_for_prev\" name=\"report_evolution_period_for\" type=\"radio\" value=\"prev\" ng-model=\"manageScheduledReport.report.evolutionPeriodFor\" />
                        <span>";
        // line 124
        echo "{{ 'ScheduledReports_EvolutionGraphsShowForPreviousN'|translate:manageScheduledReport.getFrequencyPeriodPlural() }}";
        echo ":
                            <input type=\"number\" name=\"report_evolution_period_n\" ng-model=\"manageScheduledReport.report.evolutionPeriodN\" /></span>
                    </label>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <h3 class=\"col s12\">";
        // line 132
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_ReportsIncluded"]), "html", null, true);
        echo "</h3>
        </div>

        ";
        // line 135
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reportsByCategoryByReportType"]) || array_key_exists("reportsByCategoryByReportType", $context) ? $context["reportsByCategoryByReportType"] : (function () { throw new RuntimeError('Variable "reportsByCategoryByReportType" does not exist.', 135, $this->source); })()));
        foreach ($context['_seq'] as $context["reportType"] => $context["reportsByCategory"]) {
            // line 136
            echo "            <div name='reportsList' class='row ";
            echo \Piwik\piwik_escape_filter($this->env, $context["reportType"], "html", null, true);
            echo "'
                 ng-show=\"manageScheduledReport.report.type == '";
            // line 137
            echo \Piwik\piwik_escape_filter($this->env, $context["reportType"], "html", null, true);
            echo "'\">

                ";
            // line 139
            if (twig_get_attribute($this->env, $this->source, (isset($context["allowMultipleReportsByReportType"]) || array_key_exists("allowMultipleReportsByReportType", $context) ? $context["allowMultipleReportsByReportType"] : (function () { throw new RuntimeError('Variable "allowMultipleReportsByReportType" does not exist.', 139, $this->source); })()), $context["reportType"], [], "array", false, false, false, 139)) {
                // line 140
                echo "                    ";
                $context["reportInputType"] = "checkbox";
                // line 141
                echo "                ";
            } else {
                // line 142
                echo "                    ";
                $context["reportInputType"] = "radio";
                // line 143
                echo "                ";
            }
            // line 144
            echo "
                ";
            // line 145
            $context["countCategory"] = 0;
            // line 146
            echo "
                ";
            // line 147
            $context["newColumnAfter"] = (int) floor(((twig_length_filter($this->env, $context["reportsByCategory"]) + 1) / 2));
            // line 148
            echo "
                <div class='col s12 m6'>
                    ";
            // line 150
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["reportsByCategory"]);
            foreach ($context['_seq'] as $context["category"] => $context["reports"]) {
                // line 151
                echo "                    ";
                if ((((isset($context["countCategory"]) || array_key_exists("countCategory", $context) ? $context["countCategory"] : (function () { throw new RuntimeError('Variable "countCategory" does not exist.', 151, $this->source); })()) >= (isset($context["newColumnAfter"]) || array_key_exists("newColumnAfter", $context) ? $context["newColumnAfter"] : (function () { throw new RuntimeError('Variable "newColumnAfter" does not exist.', 151, $this->source); })())) && ((isset($context["newColumnAfter"]) || array_key_exists("newColumnAfter", $context) ? $context["newColumnAfter"] : (function () { throw new RuntimeError('Variable "newColumnAfter" does not exist.', 151, $this->source); })()) != 0))) {
                    // line 152
                    echo "                    ";
                    $context["newColumnAfter"] = 0;
                    // line 153
                    echo "                </div>
                <div class='col s12 m6'>
                    ";
                }
                // line 156
                echo "                    <h3 class='reportCategory'>";
                echo \Piwik\piwik_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</h3>
                    <ul class='listReports'>
                        ";
                // line 158
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["reports"]);
                foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
                    // line 159
                    echo "                            <li>
                                <label>
                                    <input type='";
                    // line 161
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["reportInputType"]) || array_key_exists("reportInputType", $context) ? $context["reportInputType"] : (function () { throw new RuntimeError('Variable "reportInputType" does not exist.', 161, $this->source); })()), "html", null, true);
                    echo "' id=\"";
                    echo \Piwik\piwik_escape_filter($this->env, $context["reportType"], "html", null, true);
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "uniqueId", [], "any", false, false, false, 161), "html", null, true);
                    echo "\" report-unique-id='";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["report"], "uniqueId", [], "any", false, false, false, 161), "html", null, true);
                    echo "'
                                           name='";
                    // line 162
                    echo \Piwik\piwik_escape_filter($this->env, $context["reportType"], "html", null, true);
                    echo "Reports'/>
                                    <span>";
                    // line 163
                    echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["report"], "name", [], "any", false, false, false, 163)]);
                    echo "</span>
                                    ";
                    // line 164
                    if ((twig_get_attribute($this->env, $this->source, $context["report"], "uniqueId", [], "any", false, false, false, 164) == "MultiSites_getAll")) {
                        // line 165
                        echo "                                        <div class=\"entityInlineHelp\">";
                        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_ReportIncludeNWebsites", (isset($context["countWebsites"]) || array_key_exists("countWebsites", $context) ? $context["countWebsites"] : (function () { throw new RuntimeError('Variable "countWebsites" does not exist.', 165, $this->source); })())]), "html", null, true);
                        // line 166
                        echo "</div>
                                    ";
                    }
                    // line 168
                    echo "                                </label>
                            </li>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 171
                echo "                        ";
                $context["countCategory"] = ((isset($context["countCategory"]) || array_key_exists("countCategory", $context) ? $context["countCategory"] : (function () { throw new RuntimeError('Variable "countCategory" does not exist.', 171, $this->source); })()) + 1);
                // line 172
                echo "                    </ul>
                    <br/>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['reports'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['reportType'], $context['reportsByCategory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 178
        echo "
        <input type=\"hidden\" id=\"report_idreport\" ng-model=\"manageScheduledReport.editingReportId\">

        <div ng-value=\"manageScheduledReport.saveButtonTitle\"
               onconfirm=\"manageScheduledReport.submitReport()\"
               piwik-save-button></div>

        <div class='entityCancel'>
            ";
        // line 186
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_OrCancel", "<a class='entityCancelLink' ng-click='manageScheduledReport.showListOfReports()'>", "</a>"]);
        echo "
        </div>

    </form>
</div>
";
    }

    public function getTemplateName()
    {
        return "@ScheduledReports/_addReport.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  436 => 186,  426 => 178,  418 => 175,  410 => 172,  407 => 171,  399 => 168,  395 => 166,  392 => 165,  390 => 164,  386 => 163,  382 => 162,  373 => 161,  369 => 159,  365 => 158,  359 => 156,  354 => 153,  351 => 152,  348 => 151,  344 => 150,  340 => 148,  338 => 147,  335 => 146,  333 => 145,  330 => 144,  327 => 143,  324 => 142,  321 => 141,  318 => 140,  316 => 139,  311 => 137,  306 => 136,  302 => 135,  296 => 132,  285 => 124,  276 => 118,  263 => 108,  253 => 101,  249 => 100,  241 => 95,  238 => 94,  229 => 91,  225 => 90,  221 => 89,  217 => 88,  213 => 87,  210 => 86,  206 => 85,  199 => 82,  195 => 81,  189 => 78,  185 => 76,  179 => 72,  177 => 71,  170 => 68,  166 => 67,  154 => 58,  149 => 56,  142 => 52,  137 => 50,  129 => 45,  123 => 42,  116 => 38,  111 => 36,  107 => 34,  100 => 30,  96 => 29,  87 => 24,  82 => 23,  78 => 22,  75 => 21,  73 => 20,  67 => 17,  62 => 15,  55 => 11,  50 => 9,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div piwik-content-block
     content-title=\"{{ 'ScheduledReports_CreateAndScheduleReport'|translate|e('html_attr') }}\"
     class=\"entityAddContainer\"
     ng-if=\"manageScheduledReport.showReportForm\">
    <div class='clear'></div>
    <form id='addEditReport' piwik-form ng-submit=\"manageScheduledReport.submitReport()\">

        <div piwik-field uicontrol=\"text\" name=\"website\"
             data-title=\"{{ 'General_Website'|translate|e('html_attr') }}\"
             data-disabled=\"true\"
             value=\"{{ siteName|rawSafeDecoded }}\">
        </div>

        <div piwik-field uicontrol=\"textarea\" name=\"report_description\"
             data-title=\"{{ 'General_Description'|translate|e('html_attr') }}\"
             ng-model=\"manageScheduledReport.report.description\"
             inline-help=\"{{ 'ScheduledReports_DescriptionOnFirstPage'|translate|e('html_attr') }}\">
        </div>

        {% if segmentEditorActivated %}
            <div id=\"reportSegmentInlineHelp\" class=\"inline-help-node\">
                {% set SegmentEditor_DefaultAllVisits %}{{ 'SegmentEditor_DefaultAllVisits'|translate }}{% endset %}
                {% set SegmentEditor_AddNewSegment %}{{ 'SegmentEditor_AddNewSegment'|translate }}{% endset %}
                {{ 'ScheduledReports_Segment_Help'|translate('<a href=\"./\" rel=\"noreferrer noopener\" target=\"_blank\">','</a>',SegmentEditor_DefaultAllVisits,SegmentEditor_AddNewSegment)|raw }}
            </div>

            <div piwik-field uicontrol=\"select\" name=\"report_segment\"
                 ng-model=\"manageScheduledReport.report.idsegment\"
                 options=\"{{ savedSegmentsById|json_encode }}\"
                 data-title=\"{{ 'SegmentEditor_ChooseASegment'|translate|e('html_attr') }}\"
                 inline-help=\"#reportSegmentInlineHelp\">
            </div>
        {% endif %}

        <div id=\"emailScheduleInlineHelp\" class=\"inline-help-node\">
            {{ 'ScheduledReports_WeeklyScheduleHelp'|translate }}
            <br/>
            {{ 'ScheduledReports_MonthlyScheduleHelp'|translate }}
        </div>

        <div piwik-field uicontrol=\"select\" name=\"report_schedule\"
             options=\"{{ periods|json_encode }}\"
             ng-model=\"manageScheduledReport.report.period\"
             ng-change=\"manageScheduledReport.report.periodParam = manageScheduledReport.report.period === 'never' ? null : manageScheduledReport.report.period\"
             data-title=\"{{ 'ScheduledReports_EmailSchedule'|translate|e('html_attr') }}\"
             inline-help=\"#emailScheduleInlineHelp\">
        </div>

        <div id=\"emailReportPeriodInlineHelp\" class=\"inline-help-node\">
            {{ 'ScheduledReports_ReportPeriodHelp'|translate }}
            <br/><br/>
            {{ 'ScheduledReports_ReportPeriodHelp2'|translate }}
        </div>

        <div piwik-field uicontrol=\"select\" name=\"report_period\"
             options=\"{{ paramPeriods|json_encode }}\"
             ng-model=\"manageScheduledReport.report.periodParam\"
             title=\"{{ 'ScheduledReports_ReportPeriod'|translate|e('html_attr') }}\"
             inline-help=\"#emailReportPeriodInlineHelp\"
        >
        </div>

        <div piwik-field uicontrol=\"select\" name=\"report_hour\"
             options=\"manageScheduledReport.reportHours\"
             ng-change=\"manageScheduledReport.updateReportHourUtc()\"
             ng-model=\"manageScheduledReport.report.hour\"
             {% if timezoneOffset != 0 %}inline-help=\"#reportHourHelpText\"{% endif %}
             data-title=\"{{ 'ScheduledReports_ReportHour'|translate('X')|e('html_attr') }}\">
        </div>

        {% if timezoneOffset != 0 %}
            <div id=\"reportHourHelpText\" class=\"inline-help-node\">
                <span ng-bind=\"manageScheduledReport.report.hourUtc\"></span>
            </div>
        {% endif %}

        <div piwik-field uicontrol=\"select\" name=\"report_type\"
             options=\"{{ reportTypeOptions|json_encode }}\"
             ng-model=\"manageScheduledReport.report.type\"
             ng-change=\"manageScheduledReport.changedReportType()\"
             {% if reportTypes|length == 1 %}disabled=\"true\"{% endif %}
             data-title=\"{{ 'ScheduledReports_ReportType'|translate|e('html_attr') }}\">
        </div>

        {% for reportType, reportFormats in reportFormatsByReportTypeOptions %}
            <div piwik-field uicontrol=\"select\" name=\"report_format\"
                 class=\"{{ reportType }}\"
                 ng-model=\"manageScheduledReport.report.format{{ reportType }}\"
                 ng-show=\"manageScheduledReport.report.type == '{{ reportType }}'\"
                 options=\"{{ reportFormats|json_encode }}\"
                 data-title=\"{{ 'ScheduledReports_ReportFormat'|translate|e('html_attr') }}\">
            </div>
        {% endfor %}

        {{ postEvent(\"Template.reportParametersScheduledReports\") }}

        <div ng-show=\"manageScheduledReport.report.type == 'email' && manageScheduledReport.report.formatemail !== 'csv' && manageScheduledReport.report.formatemail !== 'tsv'\">
            <div piwik-field uicontrol=\"select\" name=\"display_format\" class=\"email\"
                 ng-model=\"manageScheduledReport.report.displayFormat\"
                 options=\"{{ displayFormats|json_encode }}\"
                 introduction=\"{{ 'ScheduledReports_AggregateReportsFormat'|translate|e('html_attr') }}\">
            </div>

            <div piwik-field uicontrol=\"checkbox\" name=\"report_evolution_graph\"
                 class=\"report_evolution_graph\"
                 ng-model=\"manageScheduledReport.report.evolutionGraph\"
                 ng-show=\"manageScheduledReport.report.displayFormat == '2' || manageScheduledReport.report.displayFormat == '3'\"
                 data-title=\"{{ 'ScheduledReports_EvolutionGraph'|translate(5)|e('html_attr') }}\">
            </div>

            <div
                class=\"row evolution-graph-period\"
                ng-show=\"manageScheduledReport.report.displayFormat == '1' || manageScheduledReport.report.displayFormat == '2' || manageScheduledReport.report.displayFormat == '3'\"
            >
                <div class=\"col s12\">
                    <label for=\"report_evolution_period_for_each\">
                        <input id=\"report_evolution_period_for_each\" name=\"report_evolution_period_for\" type=\"radio\" checked value=\"each\" ng-model=\"manageScheduledReport.report.evolutionPeriodFor\" />
                        <span piwik-translate=\"ScheduledReports_EvolutionGraphsShowForEachInPeriod\"><strong>::</strong>::{{ \"{{ manageScheduledReport.getFrequencyPeriodSingle() }}\" }}</span>
                    </label>
                </div>
                <div class=\"col s12\">
                    <label for=\"report_evolution_period_for_prev\">
                        <input id=\"report_evolution_period_for_prev\" name=\"report_evolution_period_for\" type=\"radio\" value=\"prev\" ng-model=\"manageScheduledReport.report.evolutionPeriodFor\" />
                        <span>{{ \"{{ 'ScheduledReports_EvolutionGraphsShowForPreviousN'|translate:manageScheduledReport.getFrequencyPeriodPlural() }}\" }}:
                            <input type=\"number\" name=\"report_evolution_period_n\" ng-model=\"manageScheduledReport.report.evolutionPeriodN\" /></span>
                    </label>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <h3 class=\"col s12\">{{ 'ScheduledReports_ReportsIncluded'|translate }}</h3>
        </div>

        {% for reportType, reportsByCategory in reportsByCategoryByReportType %}
            <div name='reportsList' class='row {{ reportType }}'
                 ng-show=\"manageScheduledReport.report.type == '{{ reportType }}'\">

                {% if allowMultipleReportsByReportType[reportType] %}
                    {% set reportInputType='checkbox' %}
                {% else %}
                    {% set reportInputType='radio' %}
                {% endif %}

                {% set countCategory=0 %}

                {% set newColumnAfter=(reportsByCategory|length + 1)//2 %}

                <div class='col s12 m6'>
                    {% for category, reports in reportsByCategory %}
                    {% if countCategory >= newColumnAfter and newColumnAfter != 0 %}
                    {% set newColumnAfter=0 %}
                </div>
                <div class='col s12 m6'>
                    {% endif %}
                    <h3 class='reportCategory'>{{ category }}</h3>
                    <ul class='listReports'>
                        {% for report in reports %}
                            <li>
                                <label>
                                    <input type='{{ reportInputType }}' id=\"{{ reportType }}{{ report.uniqueId }}\" report-unique-id='{{ report.uniqueId }}'
                                           name='{{ reportType }}Reports'/>
                                    <span>{{ report.name|rawSafeDecoded }}</span>
                                    {% if report.uniqueId=='MultiSites_getAll' %}
                                        <div class=\"entityInlineHelp\">{{ 'ScheduledReports_ReportIncludeNWebsites'|translate(countWebsites)
                                            }}</div>
                                    {% endif %}
                                </label>
                            </li>
                        {% endfor %}
                        {% set countCategory=countCategory+1 %}
                    </ul>
                    <br/>
                    {% endfor %}
                </div>
            </div>
        {% endfor %}

        <input type=\"hidden\" id=\"report_idreport\" ng-model=\"manageScheduledReport.editingReportId\">

        <div ng-value=\"manageScheduledReport.saveButtonTitle\"
               onconfirm=\"manageScheduledReport.submitReport()\"
               piwik-save-button></div>

        <div class='entityCancel'>
            {{ 'General_OrCancel'|translate(\"<a class='entityCancelLink' ng-click='manageScheduledReport.showListOfReports()'>\",\"</a>\")|raw }}
        </div>

    </form>
</div>
", "@ScheduledReports/_addReport.twig", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/matomo/app/plugins/ScheduledReports/templates/_addReport.twig");
    }
}
