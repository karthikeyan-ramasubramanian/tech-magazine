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

/* @Ecommerce/getSparklines.twig */
class __TwigTemplate_8e64ff2ffb78f8304f0d954b96879b203137c91f7d54d18446bd7f33dc97e84c extends Template
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
        echo "<div class=\"card\"><div class=\"card-content\">
<div id='leftcolumn' style=\"clear:both;";
        // line 2
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 2, $this->source); })())) {
            echo "width:33%;'";
        }
        echo "\">
    <div class=\"sparkline\">";
        // line 3
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [(isset($context["urlSparklineConversions"]) || array_key_exists("urlSparklineConversions", $context) ? $context["urlSparklineConversions"] : (function () { throw new RuntimeError('Variable "urlSparklineConversions" does not exist.', 3, $this->source); })())]);
        echo "
\t<div>
        <strong>";
        // line 5
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [(isset($context["nb_conversions"]) || array_key_exists("nb_conversions", $context) ? $context["nb_conversions"] : (function () { throw new RuntimeError('Variable "nb_conversions" does not exist.', 5, $this->source); })())]), "html", null, true);
        echo "</strong>
        ";
        // line 6
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_EcommerceOrders"]), "html", null, true);
        echo "
        <img src='plugins/Morpheus/images/ecommerceOrder.png'>

        ";
        // line 9
        if ((array_key_exists("goalAllowMultipleConversionsPerVisit", $context) && (isset($context["goalAllowMultipleConversionsPerVisit"]) || array_key_exists("goalAllowMultipleConversionsPerVisit", $context) ? $context["goalAllowMultipleConversionsPerVisit"] : (function () { throw new RuntimeError('Variable "goalAllowMultipleConversionsPerVisit" does not exist.', 9, $this->source); })()))) {
            // line 10
            echo "            (";
            echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_NVisits", (("<strong>" . (isset($context["nb_visits_converted"]) || array_key_exists("nb_visits_converted", $context) ? $context["nb_visits_converted"] : (function () { throw new RuntimeError('Variable "nb_visits_converted" does not exist.', 10, $this->source); })())) . "</strong>")]);
            echo ")
        ";
        }
        // line 12
        echo "\t</div>
    </div>

    <div class=\"sparkline\">
        ";
        // line 16
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [(isset($context["urlSparklineRevenue"]) || array_key_exists("urlSparklineRevenue", $context) ? $context["urlSparklineRevenue"] : (function () { throw new RuntimeError('Variable "urlSparklineRevenue" does not exist.', 16, $this->source); })())]);
        echo "
\t<div>
        ";
        // line 18
        $context["revenue"] = call_user_func_array($this->env->getFilter('money')->getCallable(), [(isset($context["revenue"]) || array_key_exists("revenue", $context) ? $context["revenue"] : (function () { throw new RuntimeError('Variable "revenue" does not exist.', 18, $this->source); })()), (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 18, $this->source); })())]);
        // line 19
        echo "        <strong>";
        echo (isset($context["revenue"]) || array_key_exists("revenue", $context) ? $context["revenue"] : (function () { throw new RuntimeError('Variable "revenue" does not exist.', 19, $this->source); })());
        echo "</strong> ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_TotalRevenue"]), "html", null, true);
        echo "
\t</div>
    </div>

    <div class=\"sparkline\">";
        // line 23
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [(isset($context["urlSparklineAverageOrderValue"]) || array_key_exists("urlSparklineAverageOrderValue", $context) ? $context["urlSparklineAverageOrderValue"] : (function () { throw new RuntimeError('Variable "urlSparklineAverageOrderValue" does not exist.', 23, $this->source); })())]);
        echo "
\t<div>
        <strong>";
        // line 25
        echo call_user_func_array($this->env->getFilter('money')->getCallable(), [(isset($context["avg_order_revenue"]) || array_key_exists("avg_order_revenue", $context) ? $context["avg_order_revenue"] : (function () { throw new RuntimeError('Variable "avg_order_revenue" does not exist.', 25, $this->source); })()), (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 25, $this->source); })())]);
        echo "</strong>
        ";
        // line 26
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_AverageOrderValue"]), "html", null, true);
        echo "
\t</div>
    </div>
</div>
<div id='leftcolumn' ";
        // line 30
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 30, $this->source); })())) {
            echo "style='width:33%;'";
        }
        echo ">
    <div class=\"sparkline\">";
        // line 31
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [(isset($context["urlSparklineConversionRate"]) || array_key_exists("urlSparklineConversionRate", $context) ? $context["urlSparklineConversionRate"] : (function () { throw new RuntimeError('Variable "urlSparklineConversionRate" does not exist.', 31, $this->source); })())]);
        echo "
\t<div>
        ";
        // line 33
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_EcommerceOrders"]), "html", null, true);
        $context["ecommerceOrdersText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 34
        echo "        ";
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_ConversionRate", ((("<strong>" . call_user_func_array($this->env->getFilter('percent')->getCallable(), [(isset($context["conversion_rate"]) || array_key_exists("conversion_rate", $context) ? $context["conversion_rate"] : (function () { throw new RuntimeError('Variable "conversion_rate" does not exist.', 34, $this->source); })())])) . "</strong> ") . (isset($context["ecommerceOrdersText"]) || array_key_exists("ecommerceOrdersText", $context) ? $context["ecommerceOrdersText"] : (function () { throw new RuntimeError('Variable "ecommerceOrdersText" does not exist.', 34, $this->source); })()))]);
        echo "
\t</div>
    </div>
    <div class=\"sparkline\">";
        // line 37
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [(isset($context["urlSparklinePurchasedProducts"]) || array_key_exists("urlSparklinePurchasedProducts", $context) ? $context["urlSparklinePurchasedProducts"] : (function () { throw new RuntimeError('Variable "urlSparklinePurchasedProducts" does not exist.', 37, $this->source); })())]);
        echo "
\t<div>
    <strong>";
        // line 39
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [(isset($context["items"]) || array_key_exists("items", $context) ? $context["items"] : (function () { throw new RuntimeError('Variable "items" does not exist.', 39, $this->source); })())]), "html", null, true);
        echo "</strong> ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_PurchasedProducts"]), "html", null, true);
        echo "</div></div>
</div>
<div id='rightcolumn' ";
        // line 41
        if ( !(isset($context["isWidget"]) || array_key_exists("isWidget", $context) ? $context["isWidget"] : (function () { throw new RuntimeError('Variable "isWidget" does not exist.', 41, $this->source); })())) {
            echo "style='width:30%;'";
        }
        echo ">
    <div>
        <img src='plugins/Morpheus/images/ecommerceAbandonedCart.png'> ";
        // line 43
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_AbandonedCarts"]), "html", null, true);
        echo "
    </div>

    <div class=\"sparkline\">
        ";
        // line 47
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [(isset($context["cart_urlSparklineConversions"]) || array_key_exists("cart_urlSparklineConversions", $context) ? $context["cart_urlSparklineConversions"] : (function () { throw new RuntimeError('Variable "cart_urlSparklineConversions" does not exist.', 47, $this->source); })())]);
        echo "
\t<div>
        ";
        // line 49
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_AbandonedCart"]), "html", null, true);
        $context["ecommerceAbandonedCartsText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 50
        echo "        <strong>";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('number')->getCallable(), [(isset($context["cart_nb_conversions"]) || array_key_exists("cart_nb_conversions", $context) ? $context["cart_nb_conversions"] : (function () { throw new RuntimeError('Variable "cart_nb_conversions" does not exist.', 50, $this->source); })())]), "html", null, true);
        echo "</strong> ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_VisitsWith", (isset($context["ecommerceAbandonedCartsText"]) || array_key_exists("ecommerceAbandonedCartsText", $context) ? $context["ecommerceAbandonedCartsText"] : (function () { throw new RuntimeError('Variable "ecommerceAbandonedCartsText" does not exist.', 50, $this->source); })())]), "html", null, true);
        echo "
\t</div>
    </div>

    <div class=\"sparkline\">
        ";
        // line 55
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [(isset($context["cart_urlSparklineRevenue"]) || array_key_exists("cart_urlSparklineRevenue", $context) ? $context["cart_urlSparklineRevenue"] : (function () { throw new RuntimeError('Variable "cart_urlSparklineRevenue" does not exist.', 55, $this->source); })())]);
        echo "
\t<div>
        ";
        // line 57
        ob_start();
        echo call_user_func_array($this->env->getFilter('money')->getCallable(), [(isset($context["cart_revenue"]) || array_key_exists("cart_revenue", $context) ? $context["cart_revenue"] : (function () { throw new RuntimeError('Variable "cart_revenue" does not exist.', 57, $this->source); })()), (isset($context["idSite"]) || array_key_exists("idSite", $context) ? $context["idSite"] : (function () { throw new RuntimeError('Variable "idSite" does not exist.', 57, $this->source); })())]);
        $context["revenue"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 58
        echo "        ";
        ob_start();
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_ColumnRevenue"]), "html", null, true);
        $context["revenueText"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 59
        echo "        <strong>";
        echo \Piwik\piwik_escape_filter($this->env, (isset($context["revenue"]) || array_key_exists("revenue", $context) ? $context["revenue"] : (function () { throw new RuntimeError('Variable "revenue" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "</strong> ";
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Goals_LeftInCart", (isset($context["revenueText"]) || array_key_exists("revenueText", $context) ? $context["revenueText"] : (function () { throw new RuntimeError('Variable "revenueText" does not exist.', 59, $this->source); })())]), "html", null, true);
        echo "
\t</div>
    </div>

    <div class=\"sparkline\">
        ";
        // line 64
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [(isset($context["cart_urlSparklineConversionRate"]) || array_key_exists("cart_urlSparklineConversionRate", $context) ? $context["cart_urlSparklineConversionRate"] : (function () { throw new RuntimeError('Variable "cart_urlSparklineConversionRate" does not exist.', 64, $this->source); })())]);
        echo "
\t<div>
        <strong>";
        // line 66
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('percent')->getCallable(), [(isset($context["cart_conversion_rate"]) || array_key_exists("cart_conversion_rate", $context) ? $context["cart_conversion_rate"] : (function () { throw new RuntimeError('Variable "cart_conversion_rate" does not exist.', 66, $this->source); })())]), "html", null, true);
        echo "</strong>
        ";
        // line 67
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["General_VisitsWith", (isset($context["ecommerceAbandonedCartsText"]) || array_key_exists("ecommerceAbandonedCartsText", $context) ? $context["ecommerceAbandonedCartsText"] : (function () { throw new RuntimeError('Variable "ecommerceAbandonedCartsText" does not exist.', 67, $this->source); })())]), "html", null, true);
        echo "
\t</div>
    </div>
</div>
<div style=\"clear: left;\"></div>
";
        // line 72
        $this->loadTemplate("_sparklineFooter.twig", "@Ecommerce/getSparklines.twig", 72)->display($context);
        // line 73
        echo "    </div></div>
";
    }

    public function getTemplateName()
    {
        return "@Ecommerce/getSparklines.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 73,  218 => 72,  210 => 67,  206 => 66,  201 => 64,  190 => 59,  185 => 58,  181 => 57,  176 => 55,  165 => 50,  161 => 49,  156 => 47,  149 => 43,  142 => 41,  135 => 39,  130 => 37,  123 => 34,  119 => 33,  114 => 31,  108 => 30,  101 => 26,  97 => 25,  92 => 23,  82 => 19,  80 => 18,  75 => 16,  69 => 12,  63 => 10,  61 => 9,  55 => 6,  51 => 5,  46 => 3,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"card\"><div class=\"card-content\">
<div id='leftcolumn' style=\"clear:both;{% if not isWidget %}width:33%;'{% endif %}\">
    <div class=\"sparkline\">{{ sparkline(urlSparklineConversions) }}
\t<div>
        <strong>{{ nb_conversions|number }}</strong>
        {{ 'General_EcommerceOrders'|translate }}
        <img src='plugins/Morpheus/images/ecommerceOrder.png'>

        {% if goalAllowMultipleConversionsPerVisit is defined and goalAllowMultipleConversionsPerVisit %}
            ({{ 'General_NVisits'|translate(\"<strong>\"~nb_visits_converted~\"</strong>\")|raw }})
        {% endif %}
\t</div>
    </div>

    <div class=\"sparkline\">
        {{ sparkline(urlSparklineRevenue) }}
\t<div>
        {% set revenue=revenue|money(idSite) %}
        <strong>{{ revenue|raw }}</strong> {{ 'General_TotalRevenue'|translate }}
\t</div>
    </div>

    <div class=\"sparkline\">{{ sparkline(urlSparklineAverageOrderValue) }}
\t<div>
        <strong>{{ avg_order_revenue|money(idSite)|raw }}</strong>
        {{ 'General_AverageOrderValue'|translate }}
\t</div>
    </div>
</div>
<div id='leftcolumn' {% if not isWidget %}style='width:33%;'{% endif %}>
    <div class=\"sparkline\">{{ sparkline(urlSparklineConversionRate) }}
\t<div>
        {% set ecommerceOrdersText %}{{ 'General_EcommerceOrders'|translate }}{% endset %}
        {{ 'Goals_ConversionRate'|translate(\"<strong>\"~conversion_rate|percent~\"</strong> \"~ecommerceOrdersText)|raw }}
\t</div>
    </div>
    <div class=\"sparkline\">{{ sparkline(urlSparklinePurchasedProducts) }}
\t<div>
    <strong>{{ items|number }}</strong> {{ 'General_PurchasedProducts'|translate }}</div></div>
</div>
<div id='rightcolumn' {% if not isWidget %}style='width:30%;'{% endif %}>
    <div>
        <img src='plugins/Morpheus/images/ecommerceAbandonedCart.png'> {{ 'General_AbandonedCarts'|translate }}
    </div>

    <div class=\"sparkline\">
        {{ sparkline(cart_urlSparklineConversions) }}
\t<div>
        {% set ecommerceAbandonedCartsText %}{{ 'Goals_AbandonedCart'|translate }}{% endset %}
        <strong>{{ cart_nb_conversions|number }}</strong> {{ 'General_VisitsWith'|translate(ecommerceAbandonedCartsText) }}
\t</div>
    </div>

    <div class=\"sparkline\">
        {{ sparkline(cart_urlSparklineRevenue) }}
\t<div>
        {% set revenue %}{{ cart_revenue|money(idSite)|raw }}{% endset %}
        {% set revenueText %}{{ 'General_ColumnRevenue'|translate }}{% endset %}
        <strong>{{ revenue }}</strong> {{ 'Goals_LeftInCart'|translate(revenueText) }}
\t</div>
    </div>

    <div class=\"sparkline\">
        {{ sparkline(cart_urlSparklineConversionRate) }}
\t<div>
        <strong>{{ cart_conversion_rate|percent }}</strong>
        {{ 'General_VisitsWith'|translate(ecommerceAbandonedCartsText) }}
\t</div>
    </div>
</div>
<div style=\"clear: left;\"></div>
{% include \"_sparklineFooter.twig\" %}
    </div></div>
", "@Ecommerce/getSparklines.twig", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/matomo/app/plugins/Ecommerce/templates/getSparklines.twig");
    }
}
