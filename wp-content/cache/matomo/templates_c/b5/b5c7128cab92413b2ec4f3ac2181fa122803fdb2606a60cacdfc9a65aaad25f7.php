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

/* @UserCountry/getDistinctCountries.twig */
class __TwigTemplate_d189ce69673f9b8b7a72e5216368c63512c0463ef53513b776995672759ca9ba extends Template
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
        echo "<div piwik-content-block>
    <div class=\"sparkline\">
        ";
        // line 3
        echo call_user_func_array($this->env->getFunction('sparkline')->getCallable(), [(isset($context["urlSparklineCountries"]) || array_key_exists("urlSparklineCountries", $context) ? $context["urlSparklineCountries"] : (function () { throw new RuntimeError('Variable "urlSparklineCountries" does not exist.', 3, $this->source); })())]);
        echo "
\t<div>
        ";
        // line 5
        echo call_user_func_array($this->env->getFilter('translate')->getCallable(), ["UserCountry_DistinctCountries", (("<strong>" . call_user_func_array($this->env->getFilter('number')->getCallable(), [(isset($context["numberDistinctCountries"]) || array_key_exists("numberDistinctCountries", $context) ? $context["numberDistinctCountries"] : (function () { throw new RuntimeError('Variable "numberDistinctCountries" does not exist.', 5, $this->source); })())])) . "</strong>")]);
        echo "
\t</div>
    </div>
    <br style=\"clear:left\"/>
</div>
";
    }

    public function getTemplateName()
    {
        return "@UserCountry/getDistinctCountries.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div piwik-content-block>
    <div class=\"sparkline\">
        {{ sparkline(urlSparklineCountries) }}
\t<div>
        {{ 'UserCountry_DistinctCountries'|translate(\"<strong>\"~numberDistinctCountries|number~\"</strong>\")|raw }}
\t</div>
    </div>
    <br style=\"clear:left\"/>
</div>
", "@UserCountry/getDistinctCountries.twig", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/matomo/app/plugins/UserCountry/templates/getDistinctCountries.twig");
    }
}
