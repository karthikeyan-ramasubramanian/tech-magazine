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

/* form/templatesLegacy/settings/submit.hbs */
class __TwigTemplate_ad72b3784aa6ac341a5635d48c02666e171d72f7e22cf4546adcc5e1716e6f16 extends \MailPoetVendor\Twig\Template
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
        echo "<p class=\"mailpoet_align_right\">
  <input type=\"submit\" value=\"";
        // line 2
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Done");
        echo "\" class=\"button-primary\" />
</p>";
    }

    public function getTemplateName()
    {
        return "form/templatesLegacy/settings/submit.hbs";
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
        return new Source("", "form/templatesLegacy/settings/submit.hbs", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/mailpoet/views/form/templatesLegacy/settings/submit.hbs");
    }
}
