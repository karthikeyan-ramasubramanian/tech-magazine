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

/* @ScheduledReports/index.twig */
class __TwigTemplate_0c4d51ef951f8732c64c6b41fbc7e6a6cd06bcba4215cb9b97db9cf2f91af6cf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'topcontrols' => [$this, 'block_topcontrols'],
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "admin.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_PersonalEmailReports"]), "html", null, true);
        $context["title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        $this->parent = $this->loadTemplate("admin.twig", "@ScheduledReports/index.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_topcontrols($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    ";
        $this->loadTemplate("@CoreHome/_siteSelectHeader.twig", "@ScheduledReports/index.twig", 6)->display($context);
        // line 7
        echo "    ";
        $this->loadTemplate("@CoreHome/_periodSelect.twig", "@ScheduledReports/index.twig", 7)->display($context);
    }

    // line 10
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 11
        echo "
<div class=\"emailReports\" piwik-manage-scheduled-report>

    <span id=\"reportSentSuccess\"></span>
    <span id=\"reportUpdatedSuccess\"></span>

    <div>
        ";
        // line 18
        $macros["ajax"] = $this->loadTemplate("ajaxMacros.twig", "@ScheduledReports/index.twig", 18)->unwrap();
        // line 19
        echo "        ";
        echo twig_call_macro($macros["ajax"], "macro_errorDiv", [], 19, $context, $this->getSourceContext());
        echo "
        ";
        // line 20
        echo twig_call_macro($macros["ajax"], "macro_loadingDiv", [], 20, $context, $this->getSourceContext());
        echo "
        ";
        // line 21
        $this->loadTemplate("@ScheduledReports/_listReports.twig", "@ScheduledReports/index.twig", 21)->display($context);
        // line 22
        echo "        ";
        $this->loadTemplate("@ScheduledReports/_addReport.twig", "@ScheduledReports/index.twig", 22)->display($context);
        // line 23
        echo "        <a id='bottom'></a>
    </div>
</div>

<div class=\"ui-confirm\" id=\"confirm\">
    <h2>";
        // line 28
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_AreYouSureDeleteReport"]), "html", null, true);
        echo "</h2>
    <input role=\"yes\" type=\"button\" value=\"";
        // line 29
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_Yes"]), "html", null, true);
        echo "\"/>
    <input role=\"no\" type=\"button\" value=\"";
        // line 30
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_No"]), "html", null, true);
        echo "\"/>
</div>

<script type=\"text/javascript\">
    var ReportPlugin = {};
    ReportPlugin.defaultPeriod = '";
        // line 35
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultPeriod"]) || array_key_exists("defaultPeriod", $context) ? $context["defaultPeriod"] : (function () { throw new RuntimeError('Variable "defaultPeriod" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "';
    ReportPlugin.defaultHour = '";
        // line 36
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultHour"]) || array_key_exists("defaultHour", $context) ? $context["defaultHour"] : (function () { throw new RuntimeError('Variable "defaultHour" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "';
    ReportPlugin.defaultReportType = '";
        // line 37
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultReportType"]) || array_key_exists("defaultReportType", $context) ? $context["defaultReportType"] : (function () { throw new RuntimeError('Variable "defaultReportType" does not exist.', 37, $this->source); })()), "html", null, true);
        echo "';
    ReportPlugin.defaultReportFormat = '";
        // line 38
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["defaultReportFormat"]) || array_key_exists("defaultReportFormat", $context) ? $context["defaultReportFormat"] : (function () { throw new RuntimeError('Variable "defaultReportFormat" does not exist.', 38, $this->source); })()), "html", null, true);
        echo "';
    ReportPlugin.reportList = ";
        // line 39
        echo (isset($context["reportsJSON"]) || array_key_exists("reportsJSON", $context) ? $context["reportsJSON"] : (function () { throw new RuntimeError('Variable "reportsJSON" does not exist.', 39, $this->source); })());
        echo ";
    ReportPlugin.createReportString = \"";
        // line 40
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_CreateReport"]), "html", null, true);
        echo "\";
    ReportPlugin.updateReportString = \"";
        // line 41
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["ScheduledReports_UpdateReport"]), "html", null, true);
        echo "\";
    ReportPlugin.defaultEvolutionPeriodN = ";
        // line 42
        echo json_encode((isset($context["defaultEvolutionPeriodN"]) || array_key_exists("defaultEvolutionPeriodN", $context) ? $context["defaultEvolutionPeriodN"] : (function () { throw new RuntimeError('Variable "defaultEvolutionPeriodN" does not exist.', 42, $this->source); })()));
        echo ";
    ReportPlugin.periodTranslations = ";
        // line 43
        echo json_encode((isset($context["periodTranslations"]) || array_key_exists("periodTranslations", $context) ? $context["periodTranslations"] : (function () { throw new RuntimeError('Variable "periodTranslations" does not exist.', 43, $this->source); })()));
        echo ";
</script>
<style type=\"text/css\">
    .reportCategory {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .entityAddContainer {
        position:relative;
    }

    .emailReports .top_controls {
        padding-bottom: 18px;
    }

</style>
";
    }

    public function getTemplateName()
    {
        return "@ScheduledReports/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  148 => 43,  144 => 42,  140 => 41,  136 => 40,  132 => 39,  128 => 38,  124 => 37,  120 => 36,  116 => 35,  108 => 30,  104 => 29,  100 => 28,  93 => 23,  90 => 22,  88 => 21,  84 => 20,  79 => 19,  77 => 18,  68 => 11,  64 => 10,  59 => 7,  56 => 6,  52 => 5,  47 => 1,  43 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'admin.twig' %}

{% set title %}{{ 'ScheduledReports_PersonalEmailReports'|translate }}{% endset %}

{% block topcontrols %}
    {% include \"@CoreHome/_siteSelectHeader.twig\" %}
    {% include \"@CoreHome/_periodSelect.twig\" %}
{% endblock %}

{% block content %}

<div class=\"emailReports\" piwik-manage-scheduled-report>

    <span id=\"reportSentSuccess\"></span>
    <span id=\"reportUpdatedSuccess\"></span>

    <div>
        {% import 'ajaxMacros.twig' as ajax %}
        {{ ajax.errorDiv() }}
        {{ ajax.loadingDiv() }}
        {% include \"@ScheduledReports/_listReports.twig\" %}
        {% include \"@ScheduledReports/_addReport.twig\" %}
        <a id='bottom'></a>
    </div>
</div>

<div class=\"ui-confirm\" id=\"confirm\">
    <h2>{{ 'ScheduledReports_AreYouSureDeleteReport'|translate }}</h2>
    <input role=\"yes\" type=\"button\" value=\"{{ 'General_Yes'|translate }}\"/>
    <input role=\"no\" type=\"button\" value=\"{{ 'General_No'|translate }}\"/>
</div>

<script type=\"text/javascript\">
    var ReportPlugin = {};
    ReportPlugin.defaultPeriod = '{{ defaultPeriod }}';
    ReportPlugin.defaultHour = '{{ defaultHour }}';
    ReportPlugin.defaultReportType = '{{ defaultReportType }}';
    ReportPlugin.defaultReportFormat = '{{ defaultReportFormat }}';
    ReportPlugin.reportList = {{ reportsJSON | raw }};
    ReportPlugin.createReportString = \"{{ 'ScheduledReports_CreateReport'|translate }}\";
    ReportPlugin.updateReportString = \"{{ 'ScheduledReports_UpdateReport'|translate }}\";
    ReportPlugin.defaultEvolutionPeriodN = {{ defaultEvolutionPeriodN|json_encode|raw }};
    ReportPlugin.periodTranslations = {{ periodTranslations|json_encode|raw }};
</script>
<style type=\"text/css\">
    .reportCategory {
        font-weight: bold;
        margin-bottom: 5px;
    }

    .entityAddContainer {
        position:relative;
    }

    .emailReports .top_controls {
        padding-bottom: 18px;
    }

</style>
{% endblock %}
", "@ScheduledReports/index.twig", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/matomo/app/plugins/ScheduledReports/templates/index.twig");
    }
}
