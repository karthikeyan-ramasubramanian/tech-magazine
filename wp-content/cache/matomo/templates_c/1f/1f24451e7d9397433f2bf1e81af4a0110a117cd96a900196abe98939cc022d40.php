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

/* @CoreHome/_dataTableCell.twig */
class __TwigTemplate_90db662a3493fc33a77008c1fc1ccda1703ac3d955aef8fd43c6077941c1bf25 extends Template
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
        ob_start();
        // line 2
        $context["tooltipIndex"] = ((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 2, $this->source); })()) . "_tooltip");
        // line 3
        if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })()), "getMetadata", [0 => (isset($context["tooltipIndex"]) || array_key_exists("tooltipIndex", $context) ? $context["tooltipIndex"] : (function () { throw new RuntimeError('Variable "tooltipIndex" does not exist.', 3, $this->source); })())], "method", false, false, false, 3)) {
            echo "<span class=\"cell-tooltip\" data-tooltip=\"";
            echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 3, $this->source); })()), "getMetadata", [0 => (isset($context["tooltipIndex"]) || array_key_exists("tooltipIndex", $context) ? $context["tooltipIndex"] : (function () { throw new RuntimeError('Variable "tooltipIndex" does not exist.', 3, $this->source); })())], "method", false, false, false, 3), "html", null, true);
            echo "\">";
        }
        // line 4
        if ((( !twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "getIdSubDataTable", [], "method", false, false, false, 4) && ((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 4, $this->source); })()) == "label")) && twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "getMetadata", [0 => "url"], "method", false, false, false, 4))) {
            // line 5
            echo "    <a rel=\"noreferrer noopener\"
       target=\"_blank\"
       href='";
            // line 7
            if (!twig_in_filter(twig_slice($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 7, $this->source); })()), "getMetadata", [0 => "url"], "method", false, false, false, 7), 0, 4), [0 => "http", 1 => "ftp:"])) {
                echo "http://";
            }
            echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 7, $this->source); })()), "getMetadata", [0 => "url"], "method", false, false, false, 7)]);
            echo "'>
    ";
            // line 8
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 8, $this->source); })()), "getMetadata", [0 => "logo"], "method", false, false, false, 8)) {
                // line 9
                echo "        <span class=\"icon-outlink\"></span>
    ";
            }
        }
        // line 12
        echo "
";
        // line 13
        $context["totals"] = twig_get_attribute($this->env, $this->source, (isset($context["dataTable"]) || array_key_exists("dataTable", $context) ? $context["dataTable"] : (function () { throw new RuntimeError('Variable "dataTable" does not exist.', 13, $this->source); })()), "getMetadata", [0 => "totals"], "method", false, false, false, 13);
        // line 14
        $context["labelColumn"] = twig_first($this->env, (isset($context["columns_to_display"]) || array_key_exists("columns_to_display", $context) ? $context["columns_to_display"] : (function () { throw new RuntimeError('Variable "columns_to_display" does not exist.', 14, $this->source); })()));
        // line 15
        $context["reportLabel"] = call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [call_user_func_array($this->env->getFilter('truncate')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 15, $this->source); })()), "getColumn", [0 => (isset($context["labelColumn"]) || array_key_exists("labelColumn", $context) ? $context["labelColumn"] : (function () { throw new RuntimeError('Variable "labelColumn" does not exist.', 15, $this->source); })())], "method", false, false, false, 15), 40])]);
        // line 16
        $this->loadTemplate("@CoreVisualizations/_dataTableViz_htmlTable_ratio.twig", "@CoreHome/_dataTableCell.twig", 16)->display(twig_array_merge($context, ["label" =>         // line 17
(isset($context["reportLabel"]) || array_key_exists("reportLabel", $context) ? $context["reportLabel"] : (function () { throw new RuntimeError('Variable "reportLabel" does not exist.', 17, $this->source); })()), "labelColumn" =>         // line 18
(isset($context["labelColumn"]) || array_key_exists("labelColumn", $context) ? $context["labelColumn"] : (function () { throw new RuntimeError('Variable "labelColumn" does not exist.', 18, $this->source); })()), "translations" => twig_get_attribute($this->env, $this->source,         // line 19
(isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 19, $this->source); })()), "translations", [], "any", false, false, false, 19)]));
        // line 21
        echo "
";
        // line 22
        $context["dimensions"] = ((twig_get_attribute($this->env, $this->source, ($context["dataTable"] ?? null), "getMetadata", [0 => "dimensions"], "method", true, true, false, 22)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->source, ($context["dataTable"] ?? null), "getMetadata", [0 => "dimensions"], "method", false, false, false, 22), [])) : ([]));
        // line 23
        if ((((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 23, $this->source); })()) == "label") || twig_in_filter((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 23, $this->source); })()), (isset($context["dimensions"]) || array_key_exists("dimensions", $context) ? $context["dimensions"] : (function () { throw new RuntimeError('Variable "dimensions" does not exist.', 23, $this->source); })())))) {
            // line 24
            echo "    ";
            $macros["piwik"] = $this->macros["piwik"] = $this->loadTemplate("macros.twig", "@CoreHome/_dataTableCell.twig", 24)->unwrap();
            // line 25
            echo "
    <span class='label";
            // line 26
            if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 26, $this->source); })()), "getMetadata", [0 => "is_aggregate"], "method", false, false, false, 26)) {
                echo " highlighted";
            }
            echo "'
    ";
            // line 27
            if ((array_key_exists("properties", $context) &&  !twig_test_empty(twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 27, $this->source); })()), "tooltip_metadata_name", [], "any", false, false, false, 27)))) {
                echo "title=\"";
                echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 27, $this->source); })()), "getMetadata", [0 => twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 27, $this->source); })()), "tooltip_metadata_name", [], "any", false, false, false, 27)], "method", false, false, false, 27), "html", null, true);
                echo "\"";
            }
            echo ">
        ";
            // line 28
            if (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 28, $this->source); })()) == "label")) {
                echo twig_call_macro($macros["piwik"], "macro_logoHtml", [twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 28, $this->source); })()), "getMetadata", [], "method", false, false, false, 28), twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 28, $this->source); })()), "getColumn", [0 => "label"], "method", false, false, false, 28)], 28, $context, $this->getSourceContext());
            }
            // line 29
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 29, $this->source); })()), "getMetadata", [0 => "html_label_prefix"], "method", false, false, false, 29)) {
                echo "<span class='label-prefix'>";
                echo twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 29, $this->source); })()), "getMetadata", [0 => "html_label_prefix"], "method", false, false, false, 29);
                echo "&nbsp;</span>";
            }
        }
        // line 30
        echo "<span class=\"value\">";
        // line 31
        if ((twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 31, $this->source); })()), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 31, $this->source); })())], "method", false, false, false, 31) || (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 31, $this->source); })()) == "label") && (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 31, $this->source); })()), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 31, $this->source); })())], "method", false, false, false, 31) === "0")))) {
            if (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 31, $this->source); })()) == "label")) {
                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 31, $this->source); })()), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 31, $this->source); })())], "method", false, false, false, 31)]);
            } else {
                if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 31, $this->source); })()), "getMetadata", [0 => (("html_column_" . (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 31, $this->source); })())) . "_prefix")], "method", false, false, false, 31)) {
                    echo "<span class='column-prefix'>";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 31, $this->source); })()), "getMetadata", [0 => (("html_column_" . (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 31, $this->source); })())) . "_prefix")], "method", false, false, false, 31);
                    echo "</span>";
                }
                echo call_user_func_array($this->env->getFilter('rawSafeDecoded')->getCallable(), [call_user_func_array($this->env->getFilter('number')->getCallable(), [twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 31, $this->source); })()), "getColumn", [0 => (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 31, $this->source); })())], "method", false, false, false, 31), 2, 0])]);
                if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 31, $this->source); })()), "getMetadata", [0 => (("html_column_" . (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 31, $this->source); })())) . "_suffix")], "method", false, false, false, 31)) {
                    echo "<span class='column-suffix'>";
                    echo twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 31, $this->source); })()), "getMetadata", [0 => (("html_column_" . (isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 31, $this->source); })())) . "_suffix")], "method", false, false, false, 31);
                    echo "</span>";
                }
            }
        } else {
            // line 32
            echo "-";
        }
        // line 33
        echo "</span>
";
        // line 34
        if (((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 34, $this->source); })()) == "label")) {
            if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getMetadata", [0 => "html_label_suffix"], "method", false, false, false, 34)) {
                echo "<span class='label-suffix'>";
                echo twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })()), "getMetadata", [0 => "html_label_suffix"], "method", false, false, false, 34);
                echo "</span>";
            }
            echo "</span>";
        }
        // line 35
        if ((( !twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 35, $this->source); })()), "getIdSubDataTable", [], "method", false, false, false, 35) && ((isset($context["column"]) || array_key_exists("column", $context) ? $context["column"] : (function () { throw new RuntimeError('Variable "column" does not exist.', 35, $this->source); })()) == "label")) && twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 35, $this->source); })()), "getMetadata", [0 => "url"], "method", false, false, false, 35))) {
            // line 36
            echo "    </a>
";
        }
        // line 38
        if (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 38, $this->source); })()), "getMetadata", [0 => (isset($context["tooltipIndex"]) || array_key_exists("tooltipIndex", $context) ? $context["tooltipIndex"] : (function () { throw new RuntimeError('Variable "tooltipIndex" does not exist.', 38, $this->source); })())], "method", false, false, false, 38)) {
            echo "</span>";
        }
        // line 39
        echo "
";
        $___internal_8c146a7113685e8e9da33a7b62435fe2b9bf1401ca424442aa1ef2753f550440_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 1
        echo twig_spaceless($___internal_8c146a7113685e8e9da33a7b62435fe2b9bf1401ca424442aa1ef2753f550440_);
    }

    public function getTemplateName()
    {
        return "@CoreHome/_dataTableCell.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 1,  165 => 39,  161 => 38,  157 => 36,  155 => 35,  146 => 34,  143 => 33,  140 => 32,  122 => 31,  120 => 30,  112 => 29,  108 => 28,  100 => 27,  94 => 26,  91 => 25,  88 => 24,  86 => 23,  84 => 22,  81 => 21,  79 => 19,  78 => 18,  77 => 17,  76 => 16,  74 => 15,  72 => 14,  70 => 13,  67 => 12,  62 => 9,  60 => 8,  53 => 7,  49 => 5,  47 => 4,  41 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% apply spaceless %}
{% set tooltipIndex = column ~ '_tooltip' %}
{% if row.getMetadata(tooltipIndex) %}<span class=\"cell-tooltip\" data-tooltip=\"{{ row.getMetadata(tooltipIndex) }}\">{% endif %}
{% if not row.getIdSubDataTable() and column=='label' and row.getMetadata('url') %}
    <a rel=\"noreferrer noopener\"
       target=\"_blank\"
       href='{% if row.getMetadata('url')|slice(0,4) not in ['http','ftp:'] %}http://{% endif %}{{ row.getMetadata('url')|rawSafeDecoded }}'>
    {% if not row.getMetadata('logo') %}
        <span class=\"icon-outlink\"></span>
    {% endif %}
{% endif %}

{% set totals = dataTable.getMetadata('totals') %}
{% set labelColumn   = columns_to_display|first %}
{% set reportLabel   = row.getColumn(labelColumn)|truncate(40)|rawSafeDecoded %}
{% include \"@CoreVisualizations/_dataTableViz_htmlTable_ratio.twig\" with {
    'label': reportLabel,
    'labelColumn': labelColumn,
    'translations': properties.translations
} %}

{% set dimensions = dataTable.getMetadata('dimensions')|default([]) %}
{% if column=='label' or column in dimensions %}
    {% import 'macros.twig' as piwik %}

    <span class='label{% if row.getMetadata('is_aggregate') %} highlighted{% endif %}'
    {% if properties is defined and properties.tooltip_metadata_name is not empty %}title=\"{{ row.getMetadata(properties.tooltip_metadata_name) }}\"{% endif %}>
        {% if column=='label' %}{{ piwik.logoHtml(row.getMetadata(), row.getColumn('label')) }}{% endif %}
        {% if row.getMetadata('html_label_prefix') %}<span class='label-prefix'>{{ row.getMetadata('html_label_prefix') | raw }}&nbsp;</span>{% endif -%}
{% endif %}<span class=\"value\">
    {%- if row.getColumn(column) or (column=='label' and row.getColumn(column) is same as(\"0\")) %}{% if column=='label' %}{{- row.getColumn(column)|rawSafeDecoded -}}{% else %}{% if row.getMetadata('html_column_' ~ column ~ '_prefix') %}<span class='column-prefix'>{{ row.getMetadata('html_column_' ~ column ~ '_prefix') | raw }}</span>{% endif -%}{{- row.getColumn(column)|number(2,0)|rawSafeDecoded -}}{% if row.getMetadata('html_column_' ~ column ~ '_suffix') %}<span class='column-suffix'>{{ row.getMetadata('html_column_' ~ column ~ '_suffix') | raw }}</span>{% endif -%}{% endif %}
    {%- else -%}-
    {%- endif -%}</span>
{% if column=='label' %}{%- if row.getMetadata('html_label_suffix') %}<span class='label-suffix'>{{ row.getMetadata('html_label_suffix') | raw }}</span>{% endif -%}</span>{% endif %}
{% if not row.getIdSubDataTable() and column=='label' and row.getMetadata('url') %}
    </a>
{% endif %}
{% if row.getMetadata(tooltipIndex) %}</span>{% endif %}

{% endapply %}
", "@CoreHome/_dataTableCell.twig", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/matomo/app/plugins/CoreHome/templates/_dataTableCell.twig");
    }
}
