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

/* @Insights/table_header.twig */
class __TwigTemplate_2f2f516f0f6c497e4791dc2edb797be51043b29b88da70e20f87fc75c0a7f665 extends Template
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
        echo "<tr>
    <th class=\"label first\">
        ";
        // line 3
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 3, $this->source); })()), "reportName", [], "any", false, false, false, 3), "html", null, true);
        echo "
    </th>
    <th class=\"orderBy ";
        // line 5
        if (("absolute" == twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 5, $this->source); })()), "order_by", [], "any", false, false, false, 5))) {
            echo "active";
        }
        echo "\"
        name=\"orderBy\" value=\"absolute\">
        ";
        // line 7
        echo \Piwik\piwik_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["metadata"]) || array_key_exists("metadata", $context) ? $context["metadata"] : (function () { throw new RuntimeError('Variable "metadata" does not exist.', 7, $this->source); })()), "metricName", [], "any", false, false, false, 7), "html", null, true);
        echo "
    </th>
    <th class=\"last orderBy ";
        // line 9
        if (("relative" == twig_get_attribute($this->env, $this->source, (isset($context["properties"]) || array_key_exists("properties", $context) ? $context["properties"] : (function () { throw new RuntimeError('Variable "properties" does not exist.', 9, $this->source); })()), "order_by", [], "any", false, false, false, 9))) {
            echo "active";
        }
        echo "\"
        name=\"orderBy\" value=\"relative\">
        ";
        // line 11
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["MultiSites_Evolution"]), "html", null, true);
        echo "
    </th>
</tr>";
    }

    public function getTemplateName()
    {
        return "@Insights/table_header.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 11,  58 => 9,  53 => 7,  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<tr>
    <th class=\"label first\">
        {{ metadata.reportName }}
    </th>
    <th class=\"orderBy {% if 'absolute' == properties.order_by %}active{% endif %}\"
        name=\"orderBy\" value=\"absolute\">
        {{ metadata.metricName }}
    </th>
    <th class=\"last orderBy {% if 'relative' == properties.order_by %}active{% endif %}\"
        name=\"orderBy\" value=\"relative\">
        {{ 'MultiSites_Evolution'|translate }}
    </th>
</tr>", "@Insights/table_header.twig", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/matomo/app/plugins/Insights/templates/table_header.twig");
    }
}
