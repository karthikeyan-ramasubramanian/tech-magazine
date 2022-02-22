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

/* form/templatesLegacy/blocks/date_days.hbs */
class __TwigTemplate_9ed4912a00ea17f8620de65c86860c756d028972fb2e19f89ef4bb54c43c2696 extends \MailPoetVendor\Twig\Template
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
        $context["currentDay"] = \MailPoetVendor\twig_number_format_filter($this->env, \MailPoetVendor\twig_date_format_filter($this->env, "now", "d"));
        // line 2
        echo "<select id=\"{{ id }}_days\">
  <option value=\"\">";
        // line 3
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Day");
        echo "</option>
  ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = \MailPoetVendor\twig_ensure_traversable(range(1, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["day"]) {
            // line 5
            echo "    <option
    ";
            // line 6
            if ((($context["currentDay"] ?? null) == $context["day"])) {
                // line 7
                echo "      {{#if params.is_default_today}}selected=\"selected\"{{/if}}
    ";
            }
            // line 9
            echo "    >";
            echo \MailPoetVendor\twig_escape_filter($this->env, $context["day"], "html", null, true);
            echo "</option>
  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['day'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "</select>";
    }

    public function getTemplateName()
    {
        return "form/templatesLegacy/blocks/date_days.hbs";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 11,  59 => 9,  55 => 7,  53 => 6,  50 => 5,  46 => 4,  42 => 3,  39 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "form/templatesLegacy/blocks/date_days.hbs", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/mailpoet/views/form/templatesLegacy/blocks/date_days.hbs");
    }
}
