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

/* @CoreVisualizations/_dataTableViz_htmlTable_comparisons.twig */
class __TwigTemplate_fd54ea0228fcf6d0ee83d5b5e500e5c8d5d2c905fcd81976c934eaaaa8415335 extends Template
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
        if ( !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 1, $this->source); })()), "columns_to_display", [], "any", false, false, false, 1))) {
            // line 2
            $context["lastSeenComparePeriod"] = false;
            // line 3
            $context["comparedPeriodPretty"] = twig_get_attribute($this->env, $this->source, twig_last($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 3, $this->source); })()), "getRows", [], "method", false, false, false, 3)), "getMetadata", [0 => "comparePeriodPretty"], "method", false, false, false, 3);
            // line 4
            $context["isComparingSegments"] = (twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["rootDataTable"] ?? null), "getMetadata", [0 => "compareSegments"], "method", true, true, false, 4)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["rootDataTable"] ?? null), "getMetadata", [0 => "compareSegments"], "method", false, false, false, 4), [])) : ([]))) > 1);
            // line 5
            $context["isComparingPeriods"] = (twig_length_filter($this->env, ((twig_get_attribute($this->env, $this->source, ($context["rootDataTable"] ?? null), "getMetadata", [0 => "comparePeriods"], "method", true, true, false, 5)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["rootDataTable"] ?? null), "getMetadata", [0 => "comparePeriods"], "method", false, false, false, 5), [])) : ([]))) > 1);
            // line 6
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 6, $this->source); })()), "getRows", [], "method", false, false, false, 6));
            $context['loop'] = [
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            ];
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["rowId"] => $context["row"]) {
                // line 7
                $context["comparePeriod"] = twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "comparePeriodPretty"], "method", false, false, false, 7);
                // line 8
                echo "    ";
                if (((((isset($context["lastSeenComparePeriod"]) || array_key_exists("lastSeenComparePeriod", $context) ? $context["lastSeenComparePeriod"] : (function () { throw new RuntimeError('Variable "lastSeenComparePeriod" does not exist.', 8, $this->source); })()) != (isset($context["comparePeriod"]) || array_key_exists("comparePeriod", $context) ? $context["comparePeriod"] : (function () { throw new RuntimeError('Variable "comparePeriod" does not exist.', 8, $this->source); })())) && (isset($context["isComparingSegments"]) || array_key_exists("isComparingSegments", $context) ? $context["isComparingSegments"] : (function () { throw new RuntimeError('Variable "isComparingSegments" does not exist.', 8, $this->source); })())) && (isset($context["isComparingPeriods"]) || array_key_exists("isComparingPeriods", $context) ? $context["isComparingPeriods"] : (function () { throw new RuntimeError('Variable "isComparingPeriods" does not exist.', 8, $this->source); })()))) {
                    // line 9
                    echo "    <tr class=\"comparePeriod\">
        <td class=\"label\">
            ";
                    // line 11
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["comparePeriod"]) || array_key_exists("comparePeriod", $context) ? $context["comparePeriod"] : (function () { throw new RuntimeError('Variable "comparePeriod" does not exist.', 11, $this->source); })()), "html", null, true);
                    echo "
        </td>

        ";
                    // line 15
                    echo "        ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 15, $this->source); })()), "columns_to_display", [], "any", false, false, false, 15));
                    foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                        // line 16
                        echo "        ";
                        if (($context["column"] != "label")) {
                            // line 17
                            echo "        <td class=\"column\">&nbsp;</td>
        ";
                        }
                        // line 19
                        echo "        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 20
                    echo "    </tr>
    ";
                }
                // line 22
                echo "    ";
                $context["overrideParams"] = [];
                // line 23
                echo "
    ";
                // line 24
                if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "compareSegment"], "method", true, true, false, 24)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "compareSegment"], "method", false, false, false, 24))) : ("")))) {
                    $context["overrideParams"] = twig_array_merge((isset($context["overrideParams"]) || array_key_exists("overrideParams", $context) ? $context["overrideParams"] : (function () { throw new RuntimeError('Variable "overrideParams" does not exist.', 24, $this->source); })()), ["segment" => twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "compareSegment"], "method", false, false, false, 24), "compareSegments" => ""]);
                }
                // line 25
                echo "    ";
                if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "comparePeriod"], "method", true, true, false, 25)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "comparePeriod"], "method", false, false, false, 25))) : ("")))) {
                    $context["overrideParams"] = twig_array_merge((isset($context["overrideParams"]) || array_key_exists("overrideParams", $context) ? $context["overrideParams"] : (function () { throw new RuntimeError('Variable "overrideParams" does not exist.', 25, $this->source); })()), ["period" => twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "comparePeriod"], "method", false, false, false, 25), "comparePeriods" => ""]);
                }
                // line 26
                echo "    ";
                if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "compareDate"], "method", true, true, false, 26)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "compareDate"], "method", false, false, false, 26))) : ("")))) {
                    $context["overrideParams"] = twig_array_merge((isset($context["overrideParams"]) || array_key_exists("overrideParams", $context) ? $context["overrideParams"] : (function () { throw new RuntimeError('Variable "overrideParams" does not exist.', 26, $this->source); })()), ["date" => twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "compareDate"], "method", false, false, false, 26), "compareDates" => ""]);
                }
                // line 27
                echo "    ";
                $context["idSubtable"] = twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "idsubdatatable"], "method", false, false, false, 27);
                // line 28
                echo "    ";
                $context["seriesIndex"] = twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 28);
                // line 29
                echo "    <tr
        ";
                // line 30
                if (((isset($context["idSubtable"]) || array_key_exists("idSubtable", $context) ? $context["idSubtable"] : (function () { throw new RuntimeError('Variable "idSubtable" does not exist.', 30, $this->source); })()) != false)) {
                    echo "data-idsubtable=\"";
                    echo \Piwik\piwik_escape_filter($this->env, (isset($context["idSubtable"]) || array_key_exists("idSubtable", $context) ? $context["idSubtable"] : (function () { throw new RuntimeError('Variable "idSubtable" does not exist.', 30, $this->source); })()), "html_attr");
                    echo "\"";
                }
                // line 31
                echo "        data-comparison-series=\"";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["seriesIndex"]) || array_key_exists("seriesIndex", $context) ? $context["seriesIndex"] : (function () { throw new RuntimeError('Variable "seriesIndex" does not exist.', 31, $this->source); })()), "html", null, true);
                echo "\"
        class=\"comparisonRow\"
        data-param-override=\"";
                // line 33
                echo \Piwik\piwik_escape_filter($this->env, json_encode((isset($context["overrideParams"]) || array_key_exists("overrideParams", $context) ? $context["overrideParams"] : (function () { throw new RuntimeError('Variable "overrideParams" does not exist.', 33, $this->source); })())), "html_attr");
                echo "\" data-label=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["comparedRow"]) || array_key_exists("comparedRow", $context) ? $context["comparedRow"] : (function () { throw new RuntimeError('Variable "comparedRow" does not exist.', 33, $this->source); })()), "getColumn", [0 => "label"], "method", false, false, false, 33), "html_attr");
                echo "\"
        ";
                // line 34
                if ( !call_user_func_array($this->env->getTest('false')->getCallable(), [twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "segment"], "method", false, false, false, 34)])) {
                    echo "data-segment-filter=\"";
                    echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "segment"], "method", false, false, false, 34), "html_attr");
                    echo "\"";
                }
                // line 35
                echo "    >
        <td class=\"label\">
            ";
                // line 37
                if ((isset($context["isComparingSegments"]) || array_key_exists("isComparingSegments", $context) ? $context["isComparingSegments"] : (function () { throw new RuntimeError('Variable "isComparingSegments" does not exist.', 37, $this->source); })())) {
                    // line 38
                    $context["comparisonLabel"] = twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "compareSegmentPretty"], "method", false, false, false, 38);
                } else {
                    // line 40
                    $context["comparisonLabel"] = (isset($context["comparePeriod"]) || array_key_exists("comparePeriod", $context) ? $context["comparePeriod"] : (function () { throw new RuntimeError('Variable "comparePeriod" does not exist.', 40, $this->source); })());
                }
                // line 42
                echo "            <span class=\"label\">";
                echo \Piwik\piwik_escape_filter($this->env, (isset($context["comparisonLabel"]) || array_key_exists("comparisonLabel", $context) ? $context["comparisonLabel"] : (function () { throw new RuntimeError('Variable "comparisonLabel" does not exist.', 42, $this->source); })()), "html", null, true);
                echo "</span>
        </td>
        ";
                // line 44
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["dimensions"]) || array_key_exists("dimensions", $context) ? $context["dimensions"] : (function () { throw new RuntimeError('Variable "dimensions" does not exist.', 44, $this->source); })()));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["dimension"]) {
                    // line 45
                    echo "        ";
                    if (((twig_get_attribute($this->env, $this->source, $context["loop"], "index0", [], "any", false, false, false, 45) != 0) && twig_in_filter($context["dimension"], twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 45, $this->source); })()), "columns_to_display", [], "any", false, false, false, 45)))) {
                        // line 46
                        echo "        <td class=\"label\">
            &nbsp;
        </td>
        ";
                    }
                    // line 50
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dimension'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 51, $this->source); })()), "columns_to_display", [], "any", false, false, false, 51));
                $context['loop'] = [
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                ];
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
                    // line 52
                    echo "        ";
                    if ((($context["column"] != "label") && !twig_in_filter($context["column"], (isset($context["dimensions"]) || array_key_exists("dimensions", $context) ? $context["dimensions"] : (function () { throw new RuntimeError('Variable "dimensions" does not exist.', 52, $this->source); })())))) {
                        // line 53
                        echo "        ";
                        $context["columnValue"] = twig_get_attribute($this->env, $this->source, $context["row"], "getColumn", [0 => $context["column"]], "method", false, false, false, 53);
                        // line 54
                        echo "        <td class=\"column\">
            ";
                        // line 55
                        $context["rowComparisonTotals"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["comparisonTotals"] ?? null), (isset($context["seriesIndex"]) || array_key_exists("seriesIndex", $context) ? $context["seriesIndex"] : (function () { throw new RuntimeError('Variable "seriesIndex" does not exist.', 55, $this->source); })()), [], "array", false, true, false, 55), "totals", [], "any", true, true, false, 55)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["comparisonTotals"] ?? null), (isset($context["seriesIndex"]) || array_key_exists("seriesIndex", $context) ? $context["seriesIndex"] : (function () { throw new RuntimeError('Variable "seriesIndex" does not exist.', 55, $this->source); })()), [], "array", false, true, false, 55), "totals", [], "any", false, false, false, 55), null)) : (null));
                        // line 56
                        echo "
            ";
                        // line 57
                        $context["comparisonTooltipSuffix"] = "";
                        // line 58
                        echo "            ";
                        $context["columnChange"] = false;
                        // line 59
                        echo "
            ";
                        // line 60
                        if ( !twig_test_empty(((twig_get_attribute($this->env, $this->source, $context["row"], "getColumn", [0 => ($context["column"] . "_change")], "method", true, true, false, 60)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["row"], "getColumn", [0 => ($context["column"] . "_change")], "method", false, false, false, 60))) : ("")))) {
                            // line 61
                            echo "                ";
                            $context["columnChange"] = ((twig_get_attribute($this->env, $this->source, $context["row"], "getColumn", [0 => ($context["column"] . "_change")], "method", true, true, false, 61)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, $context["row"], "getColumn", [0 => ($context["column"] . "_change")], "method", false, false, false, 61), "+0%")) : ("+0%"));
                            // line 62
                            echo "                ";
                            $context["comparisonTooltipSuffix"] = call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ComparisonRatioTooltip", (isset($context["columnChange"]) || array_key_exists("columnChange", $context) ? $context["columnChange"] : (function () { throw new RuntimeError('Variable "columnChange" does not exist.', 62, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["row"], "getMetadata", [0 => "compareSegmentPretty"], "method", false, false, false, 62), (isset($context["comparedPeriodPretty"]) || array_key_exists("comparedPeriodPretty", $context) ? $context["comparedPeriodPretty"] : (function () { throw new RuntimeError('Variable "comparedPeriodPretty" does not exist.', 62, $this->source); })())]);
                            // line 63
                            echo "            ";
                        }
                        // line 64
                        echo "
            ";
                        // line 65
                        $this->loadTemplate("@CoreVisualizations/_dataTableViz_htmlTable_ratio.twig", "@CoreVisualizations/_dataTableViz_htmlTable_comparisons.twig", 65)->display(twig_array_merge($context, ["changePercentage" =>                         // line 66
(isset($context["columnChange"]) || array_key_exists("columnChange", $context) ? $context["columnChange"] : (function () { throw new RuntimeError('Variable "columnChange" does not exist.', 66, $this->source); })()), "totals" =>                         // line 67
(isset($context["rowComparisonTotals"]) || array_key_exists("rowComparisonTotals", $context) ? $context["rowComparisonTotals"] : (function () { throw new RuntimeError('Variable "rowComparisonTotals" does not exist.', 67, $this->source); })()), "label" => twig_get_attribute($this->env, $this->source,                         // line 68
(isset($context["comparedRow"]) || array_key_exists("comparedRow", $context) ? $context["comparedRow"] : (function () { throw new RuntimeError('Variable "comparedRow" does not exist.', 68, $this->source); })()), "getColumn", [0 => "label"], "method", false, false, false, 68), "labelColumn" => twig_first($this->env, twig_get_attribute($this->env, $this->source,                         // line 69
(isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 69, $this->source); })()), "columns_to_display", [], "any", false, false, false, 69)), "forceZero" => true, "tooltipSuffix" =>                         // line 71
(isset($context["comparisonTooltipSuffix"]) || array_key_exists("comparisonTooltipSuffix", $context) ? $context["comparisonTooltipSuffix"] : (function () { throw new RuntimeError('Variable "comparisonTooltipSuffix" does not exist.', 71, $this->source); })()), "translations" => twig_get_attribute($this->env, $this->source,                         // line 72
(isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 72, $this->source); })()), "translations", [], "any", false, false, false, 72), "segmentTitlePretty" => twig_get_attribute($this->env, $this->source,                         // line 73
$context["row"], "getMetadata", [0 => "compareSegmentPretty"], "method", false, false, false, 73), "periodTitlePretty" => twig_get_attribute($this->env, $this->source,                         // line 74
$context["row"], "getMetadata", [0 => "comparePeriodPretty"], "method", false, false, false, 74)]));
                        // line 76
                        echo "            <span class=\"value\">";
                        echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [call_user_func_array($this->env->getFilter('number')->getCallable(), [((array_key_exists("columnValue", $context)) ? (_twig_default_filter((isset($context["columnValue"]) || array_key_exists("columnValue", $context) ? $context["columnValue"] : (function () { throw new RuntimeError('Variable "columnValue" does not exist.', 76, $this->source); })()), 0)) : (0)), 2, 0])]);
                        echo "</span>
        </td>
        ";
                    }
                    // line 79
                    echo "        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 80
                echo "    </tr>
    ";
                // line 81
                $context["lastSeenComparePeriod"] = (isset($context["comparePeriod"]) || array_key_exists("comparePeriod", $context) ? $context["comparePeriod"] : (function () { throw new RuntimeError('Variable "comparePeriod" does not exist.', 81, $this->source); })());
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['rowId'], $context['row'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
    }

    public function getTemplateName()
    {
        return "@CoreVisualizations/_dataTableViz_htmlTable_comparisons.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 81,  297 => 80,  283 => 79,  276 => 76,  274 => 74,  273 => 73,  272 => 72,  271 => 71,  270 => 69,  269 => 68,  268 => 67,  267 => 66,  266 => 65,  263 => 64,  260 => 63,  257 => 62,  254 => 61,  252 => 60,  249 => 59,  246 => 58,  244 => 57,  241 => 56,  239 => 55,  236 => 54,  233 => 53,  230 => 52,  212 => 51,  198 => 50,  192 => 46,  189 => 45,  172 => 44,  166 => 42,  163 => 40,  160 => 38,  158 => 37,  154 => 35,  148 => 34,  142 => 33,  136 => 31,  130 => 30,  127 => 29,  124 => 28,  121 => 27,  116 => 26,  111 => 25,  107 => 24,  104 => 23,  101 => 22,  97 => 20,  91 => 19,  87 => 17,  84 => 16,  79 => 15,  73 => 11,  69 => 9,  66 => 8,  64 => 7,  47 => 6,  45 => 5,  43 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if properties.columns_to_display is not empty %}
{% set lastSeenComparePeriod = false %}
{% set comparedPeriodPretty = (dataTable.getRows()|last).getMetadata('comparePeriodPretty') %}
{% set isComparingSegments = rootDataTable.getMetadata('compareSegments')|default([])|length > 1 %}
{% set isComparingPeriods = rootDataTable.getMetadata('comparePeriods')|default([])|length > 1 %}
{%- for rowId, row in dataTable.getRows() -%}
    {% set comparePeriod = row.getMetadata('comparePeriodPretty') %}
    {% if lastSeenComparePeriod != comparePeriod and isComparingSegments and isComparingPeriods %}
    <tr class=\"comparePeriod\">
        <td class=\"label\">
            {{ comparePeriod }}
        </td>

        {# add extra empty columns for sticky column scrolling to work #}
        {% for column in properties.columns_to_display %}
        {% if column != 'label' %}
        <td class=\"column\">&nbsp;</td>
        {% endif %}
        {% endfor %}
    </tr>
    {% endif %}
    {% set overrideParams = {} %}

    {% if row.getMetadata('compareSegment')|default is not empty %}{% set overrideParams = overrideParams|merge({ segment: row.getMetadata('compareSegment'), compareSegments: '' }) %}{% endif %}
    {% if row.getMetadata('comparePeriod')|default is not empty %}{% set overrideParams = overrideParams|merge({ period: row.getMetadata('comparePeriod'), comparePeriods: '' }) %}{% endif %}
    {% if row.getMetadata('compareDate')|default is not empty %}{% set overrideParams = overrideParams|merge({ date: row.getMetadata('compareDate'), compareDates: '' }) %}{% endif %}
    {% set idSubtable = row.getMetadata('idsubdatatable') %}
    {% set seriesIndex = loop.index0 %}
    <tr
        {% if idSubtable != false %}data-idsubtable=\"{{ idSubtable|e('html_attr') }}\"{% endif %}
        data-comparison-series=\"{{ seriesIndex }}\"
        class=\"comparisonRow\"
        data-param-override=\"{{ overrideParams|json_encode|e('html_attr') }}\" data-label=\"{{ comparedRow.getColumn('label')|e('html_attr') }}\"
        {% if row.getMetadata('segment') is not false %}data-segment-filter=\"{{ row.getMetadata('segment')|e('html_attr') }}\"{% endif %}
    >
        <td class=\"label\">
            {% if isComparingSegments %}
                {%- set comparisonLabel = row.getMetadata('compareSegmentPretty') -%}
            {% else %}
                {%- set comparisonLabel = comparePeriod -%}
            {% endif %}
            <span class=\"label\">{{ comparisonLabel }}</span>
        </td>
        {% for dimension in dimensions %}
        {% if loop.index0 != 0 and dimension in properties.columns_to_display %}
        <td class=\"label\">
            &nbsp;
        </td>
        {% endif %}
        {% endfor %}
        {% for column in properties.columns_to_display %}
        {% if column != 'label' and column not in dimensions %}
        {% set columnValue = row.getColumn(column) %}
        <td class=\"column\">
            {% set rowComparisonTotals = comparisonTotals[seriesIndex].totals|default(null) %}

            {% set comparisonTooltipSuffix = '' %}
            {% set columnChange = false %}

            {% if row.getColumn(column ~ '_change')|default is not empty %}
                {% set columnChange = row.getColumn(column ~ '_change')|default('+0%') %}
                {% set comparisonTooltipSuffix = 'General_ComparisonRatioTooltip'|translate(columnChange, row.getMetadata('compareSegmentPretty'), comparedPeriodPretty) %}
            {% endif %}

            {% include \"@CoreVisualizations/_dataTableViz_htmlTable_ratio.twig\" with {
                'changePercentage': columnChange,
                'totals': rowComparisonTotals,
                'label': comparedRow.getColumn('label'),
                'labelColumn': properties.columns_to_display|first,
                'forceZero': true,
                'tooltipSuffix': comparisonTooltipSuffix,
                'translations': properties.translations,
                'segmentTitlePretty': row.getMetadata('compareSegmentPretty'),
                'periodTitlePretty': row.getMetadata('comparePeriodPretty')
            } %}
            <span class=\"value\">{{ columnValue|default(0)|number(2,0)|rawSafeDecoded }}</span>
        </td>
        {% endif %}
        {% endfor %}
    </tr>
    {% set lastSeenComparePeriod = comparePeriod %}
{%- endfor -%}
{% endif %}", "@CoreVisualizations/_dataTableViz_htmlTable_comparisons.twig", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/matomo/app/plugins/CoreVisualizations/templates/_dataTableViz_htmlTable_comparisons.twig");
    }
}
