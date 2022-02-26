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

/* form/templatesLegacy/settings/date_default.hbs */
class __TwigTemplate_743b2b4dea2bf7f18e35f16e210110c27db48b323465c7dba0f0f17543b6563d extends \MailPoetVendor\Twig\Template
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
        echo "<p class=\"clearfix\">
  <label>";
        // line 2
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Preselect today's date:");
        echo "</label>
  <span class=\"group\">
    <label>
      <input
        class=\"mailpoet_radio\"
        type=\"radio\"
        name=\"params[is_default_today]\"
        value=\"1\"
        {{#if params.is_default_today}}checked=\"checked\"{{/if}}
      />";
        // line 11
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Yes");
        echo "
    </label>
    <label>
      <input
        class=\"mailpoet_radio\"
        type=\"radio\"
        name=\"params[is_default_today]\"
        value=\"\"
        {{#unless params.is_default_today}}checked=\"checked\"{{/unless}}
      />";
        // line 20
        echo $this->extensions['MailPoet\Twig\I18n']->translate("No");
        echo "
    </label>
  </span>
</p>";
    }

    public function getTemplateName()
    {
        return "form/templatesLegacy/settings/date_default.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 20,  52 => 11,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "form/templatesLegacy/settings/date_default.hbs", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/mailpoet/views/form/templatesLegacy/settings/date_default.hbs");
    }
}
