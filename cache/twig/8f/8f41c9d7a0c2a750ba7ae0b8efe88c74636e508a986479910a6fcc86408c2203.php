<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* partials/dashboard-statistics.html.twig */
class __TwigTemplate_7b83aa9dd08ccabc84eb0ccdca395814538449979109a5f947331408e6c567e1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/dashboard-statistics.html.twig"));

        // line 1
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.statistics", 1 => "admin.super"])) {
            // line 2
            echo "    <div id=\"popularity\" class=\"dashboard-item dashboard-right\" data-chart-name=\"popularity\" data-chart-type=\"bar\" data-chart-data=\"";
            echo twig_escape_filter($this->env, twig_jsonencode_filter(["series" => [0 => $this->getAttribute($this->getAttribute(($context["popularity"] ?? null), "getDailyChartData", []), "data", [], "array")], "labels" => $this->getAttribute($this->getAttribute(($context["popularity"] ?? null), "getDailyChartData", []), "labels", [], "array")]), "html_attr");
            echo "\">
        <div class=\"primary-accent default-box-shadow\">
            <h1>";
            // line 4
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.STATISTICS"), "html", null, true);
            echo "</h1>
            <div class=\"admin-statistics-chart\">
                <div class=\"ct-chart chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                <div class=\"flush-bottom button-bar stats-bar\">
                    <span class=\"stat\">
                        <b>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute(($context["popularity"] ?? null), "getDailyTotal", []), "html", null, true);
            echo "</b>
                        <i>";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TODAY"), "html", null, true);
            echo "</i>
                    </span>
                    <span class=\"stat\">
                        <b>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute(($context["popularity"] ?? null), "getWeeklyTotal", []), "html", null, true);
            echo "</b>
                        <i>";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.WEEK"), "html", null, true);
            echo "</i>
                    </span>
                    <span class=\"stat\">
                        <b>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute(($context["popularity"] ?? null), "getMonthlyTotal", []), "html", null, true);
            echo "</b>
                        <i>";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MONTH"), "html", null, true);
            echo "</i>
                    </span>
                </div>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/dashboard-statistics.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 18,  69 => 17,  63 => 14,  59 => 13,  53 => 10,  49 => 9,  41 => 4,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/dashboard-statistics.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\dashboard-statistics.html.twig");
    }
}
