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

/* partials/release-toggle.html.twig */
class __TwigTemplate_a54508c0e03ad509c6608de6cde3c2a33442424e4db1ee6cb777cb431d7a275e extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/release-toggle.html.twig"));

        // line 1
        echo "<form id=\"gpm-release-toggle\">
    <div class=\"switch-toggle switch-grav\" data-url=\"";
        // line 2
        echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
        echo "/ajax.json/task:gpmRelease\">
        <input type=\"radio\" value=\"stable\" id=\"stable\" name=\"channel-switch\" class=\"highlight\" ";
        // line 3
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "gpm", []), "releases", []) == "stable")) {
            echo " checked=\"checked\"";
        }
        echo ">
        <label for=\"stable\">";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.STABLE"), "html", null, true);
        echo "</label>
        <input type=\"radio\" value=\"testing\" id=\"testing\" name=\"channel-switch\" class=\"highlight\" ";
        // line 5
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "gpm", []), "releases", []) == "testing")) {
            echo " checked=\"checked\"";
        }
        echo ">
        <label for=\"testing\">";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.TESTING"), "html", null, true);
        echo "</label>
        <a></a>
    </div>
</form>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/release-toggle.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 6,  50 => 5,  46 => 4,  40 => 3,  36 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/release-toggle.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\release-toggle.html.twig");
    }
}
