<?php

use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* newsletter/templates/components/sidebar/layout.hbs */
class __TwigTemplate_7957202195d34fce646b35ddc01ea853c5d447a8c38cec217a5c05febf6077ed extends Template
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
        echo "<div class=\"handlediv\" title=\"Click to toggle\"><br></div>
<h3>";
        // line 2
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Columns");
        echo "</h3>
<div class=\"mailpoet_region_content clearfix\">
</div>
";
    }

    public function getTemplateName()
    {
        return "newsletter/templates/components/sidebar/layout.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/templates/components/sidebar/layout.hbs", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/mailpoet/views/newsletter/templates/components/sidebar/layout.hbs");
    }
}
