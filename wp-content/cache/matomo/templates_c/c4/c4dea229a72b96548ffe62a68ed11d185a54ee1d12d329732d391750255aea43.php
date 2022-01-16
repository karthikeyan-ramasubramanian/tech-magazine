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

/* @CoreHome/_siteSelectHeader.twig */
class __TwigTemplate_844a9bd7a81ca6959ae420b17303201bc9187396ae4dcf0c3d91e3d914588f87 extends Template
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
        if ( !(isset($context["isSingleSite"]) || array_key_exists("isSingleSite", $context) ? $context["isSingleSite"] : (function () { throw new RuntimeError('Variable "isSingleSite" does not exist.', 1, $this->source); })())) {
            // line 2
            echo "<div class=\"top_bar_sites_selector piwikTopControl\">
    <div piwik-siteselector show-selected-site=\"true\" show-all-sites-item=\"";
            // line 3
            echo (((isset($context["isMultiSitesEnabled"]) || array_key_exists("isMultiSitesEnabled", $context) ? $context["isMultiSitesEnabled"] : (function () { throw new RuntimeError('Variable "isMultiSitesEnabled" does not exist.', 3, $this->source); })())) ? ("true") : ("false"));
            echo "\" class=\"sites_autocomplete\"></div>
</div>
";
        }
    }

    public function getTemplateName()
    {
        return "@CoreHome/_siteSelectHeader.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if not isSingleSite %}
<div class=\"top_bar_sites_selector piwikTopControl\">
    <div piwik-siteselector show-selected-site=\"true\" show-all-sites-item=\"{{ isMultiSitesEnabled ? 'true' : 'false' }}\" class=\"sites_autocomplete\"></div>
</div>
{% endif %}
", "@CoreHome/_siteSelectHeader.twig", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/matomo/app/plugins/CoreHome/templates/_siteSelectHeader.twig");
    }
}
