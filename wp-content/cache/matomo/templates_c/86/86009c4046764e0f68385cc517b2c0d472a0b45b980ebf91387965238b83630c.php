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

/* @Live/indexVisitorLog.twig */
class __TwigTemplate_c8ba56f3d9b9c7eda51d07cf4d235d76de882205f62aec6652134482029602a9 extends Template
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
        echo "<div piwik-content-intro>
    <h2 piwik-enriched-headline>";
        // line 2
        echo \Piwik\piwik_escape_filter($this->env, call_user_func_array($this->env->getFilter('translate')->getCallable(), ["Live_VisitorLog"]), "html", null, true);
        echo "</h2>
</div>

";
        // line 5
        echo (isset($context["visitorLog"]) || array_key_exists("visitorLog", $context) ? $context["visitorLog"] : (function () { throw new RuntimeError('Variable "visitorLog" does not exist.', 5, $this->source); })());
        echo "
";
    }

    public function getTemplateName()
    {
        return "@Live/indexVisitorLog.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 5,  40 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div piwik-content-intro>
    <h2 piwik-enriched-headline>{{ 'Live_VisitorLog'|translate }}</h2>
</div>

{{ visitorLog|raw }}
", "@Live/indexVisitorLog.twig", "/home/blogs.techsnapie.com/public_html/wp-content/plugins/matomo/app/plugins/Live/templates/indexVisitorLog.twig");
    }
}
