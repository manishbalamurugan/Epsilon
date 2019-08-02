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

/* partials/dashboard-maintenance.html.twig */
class __TwigTemplate_23745649305c0dad50f00a49ccb3b010b1c63980a697e10785393c1720973643 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/dashboard-maintenance.html.twig"));

        // line 1
        if ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->authorize([0 => "admin.maintenance", 1 => "admin.super"])) {
            // line 2
            echo "    ";
            $context["backup"] = $this->getAttribute(($context["admin"] ?? null), "lastBackup", [], "method");
            // line 3
            echo "
    <div id=\"updates\" class=\"dashboard-item dashboard-left\">
        <div class=\"secondary-accent default-box-shadow\">
            <h1>";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.MAINTENANCE"), "html", null, true);
            echo "</h1>
            <div class=\"admin-update-charts\">
                <div class=\"updates-chart\" data-chart-name=\"updates\" data-chart-type=\"pie\" data-chart-data=\"";
            // line 8
            echo twig_escape_filter($this->env, twig_jsonencode_filter(["series" => [0 => 100, 1 => 0]]), "html_attr");
            echo "\">
                    <div class=\"chart-wrapper\">
                        <div class=\"ct-chart chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                        <span class=\"numeric hidden\"><span>-</span><em>";
            // line 11
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.UPDATED")), "html", null, true);
            echo "</em></span>
                    </div>
                    <p class=\"js__updates-available-description\">&nbsp;</p>
                </div>
                <div class=\"backups-chart\" data-chart-name=\"backups\" data-chart-type=\"pie\" data-chart-data=\"";
            // line 15
            echo twig_escape_filter($this->env, twig_jsonencode_filter(["series" => [0 => $this->getAttribute(($context["backup"] ?? null), "chart_fill", []), 1 => $this->getAttribute(($context["backup"] ?? null), "chart_empty", [])]]), "html_attr");
            echo "\">
                    <div class=\"chart-wrapper\">
                        <div class=\"ct-chart chart-loader\"><i class=\"fa fa-refresh fa-spin\"></i></div>
                        <span class=\"numeric hidden\">";
            // line 18
            echo $this->getAttribute(($context["backup"] ?? null), "days", []);
            echo "<em>";
            echo twig_escape_filter($this->env, twig_lower_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DAYS")), "html", null, true);
            echo "</em></span>
                    </div>
                    <p class=\"hidden\">";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LAST_BACKUP"), "html", null, true);
            echo "</p>
                </div>
            </div>

            <div class=\"flush-bottom button-bar\">
                <a class=\"button hidden\" href=\"#\" data-update-packages data-remodal-target=\"update-packages\"  data-plugin-action=\"start-packages-update\"><i class=\"fa fa-cloud-download\"></i> ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.UPDATE"), "html", null, true);
            echo "</a>
                ";
            // line 26
            $this->loadTemplate("partials/backups-button.html.twig", "partials/dashboard-maintenance.html.twig", 26)->display($context);
            // line 27
            echo "            </div>
        </div>
    </div>

    ";
            // line 31
            $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/dashboard-maintenance.html.twig", 31)->display(twig_array_merge($context, ["type" => "plugin"]));
            // line 32
            echo "
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/dashboard-maintenance.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 32,  94 => 31,  88 => 27,  86 => 26,  82 => 25,  74 => 20,  67 => 18,  61 => 15,  54 => 11,  48 => 8,  43 => 6,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/dashboard-maintenance.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\dashboard-maintenance.html.twig");
    }
}
