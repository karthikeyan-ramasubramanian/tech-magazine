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

/* shared_config.html */
class __TwigTemplate_02e0961d65ae1e8f4a3e68d30a6fa3c3b9734243e22e66983d8d6f0f2dfe169f extends \MailPoetVendor\Twig\Template
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
        echo "
<script type=\"text/javascript\">
  ";
        // line 4
        echo "    var mailpoet_premium_plugin_installed = ";
        echo json_encode(($context["premium_plugin_installed"] ?? null));
        echo ";
    var mailpoet_premium_plugin_download_url = ";
        // line 5
        echo json_encode(($context["premium_plugin_download_url"] ?? null));
        echo ";
    var mailpoet_premium_plugin_activation_url = ";
        // line 6
        echo json_encode(($context["premium_plugin_activation_url"] ?? null));
        echo ";
    var mailpoet_plugin_partial_key = ";
        // line 7
        echo json_encode(($context["plugin_partial_key"] ?? null));
        echo ";
  ";
        // line 9
        echo "</script>
";
    }

    public function getTemplateName()
    {
        return "shared_config.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 9,  54 => 7,  50 => 6,  46 => 5,  41 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "shared_config.html", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/mailpoet/views/shared_config.html");
    }
}
