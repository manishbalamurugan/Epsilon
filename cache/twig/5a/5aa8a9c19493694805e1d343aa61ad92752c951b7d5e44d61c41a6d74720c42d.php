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

/* partials/logo.html.twig */
class __TwigTemplate_ef8eb46a29d253dbf1f47aa7622d34d1bb4490bcaec22eb492ec08c62dfdd225 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/logo.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "logo_text", [])) {
            // line 2
            echo "    <h3>
        <a href=\"";
            // line 3
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "logo_text", []), "html", null, true);
            echo "
        </a>
        <a class=\"front-end hint--left\" data-hint=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VIEW_SITE_TIP"), "html", null, true);
            echo "\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative_frontend"] ?? null), "html", null, true);
            echo "\"> <i class=\"fa fa-external-link\"></i></a>
    </h3>
";
        } else {
            // line 9
            echo "    <div class=\"admin-logo ";
            echo ((($context["custom_admin_logo"] ?? null)) ? ("custom-logo") : ("default-logo"));
            echo "\">
        <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "\">
            ";
            // line 11
            if (($context["custom_admin_logo"] ?? null)) {
                // line 12
                echo "                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($context["custom_admin_logo"] ?? null)), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["site"] ?? null), "title", []), "html", null, true);
                echo "\" />
            ";
            } else {
                // line 14
                echo "                ";
                $this->loadTemplate("@admin-images/grav-small.svg", "partials/logo.html.twig", 14)->display($context);
                // line 15
                echo "                ";
                $this->loadTemplate("@admin-images/grav-regular.svg", "partials/logo.html.twig", 15)->display($context);
                // line 16
                echo "            ";
            }
            // line 17
            echo "        </a>
        <a class=\"front-end hint--left\" data-hint=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.VIEW_SITE_TIP"), "html", null, true);
            echo "\" target=\"_blank\" href=\"";
            echo twig_escape_filter($this->env, ($context["base_url_relative_frontend"] ?? null), "html", null, true);
            echo "\"> <i class=\"fa fa-external-link\"></i></a>
    </div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 18,  83 => 17,  80 => 16,  77 => 15,  74 => 14,  66 => 12,  64 => 11,  60 => 10,  55 => 9,  47 => 6,  42 => 4,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/logo.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\logo.html.twig");
    }
}
