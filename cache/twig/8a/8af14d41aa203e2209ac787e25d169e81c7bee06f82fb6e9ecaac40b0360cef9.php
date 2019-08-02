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

/* partials/login-logo.html.twig */
class __TwigTemplate_1112cafeb391a6454dc6bae626c2e559e0d69c1dbe924f5302f787b91148b709 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/login-logo.html.twig"));

        // line 1
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "logo_text", [])) {
            // line 2
            echo "    <h1 class=\"text-logo\">
        ";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["config"] ?? null), "plugins", []), "admin", []), "logo_text", []), "html", null, true);
            echo "
    </h1>
";
        } else {
            // line 6
            echo "    <h1 class=\"";
            echo ((($context["custom_login_logo"] ?? null)) ? ("custom-logo") : ("default-logo"));
            echo "\">
        ";
            // line 7
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "
        ";
            // line 8
            if (($context["custom_login_logo"] ?? null)) {
                // line 9
                echo "            <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc(($context["custom_login_logo"] ?? null)), "html", null, true);
                echo "\" title=\"Login\" />
        ";
            } else {
                // line 11
                echo "            ";
                $this->loadTemplate("@admin-images/logo.svg", "partials/login-logo.html.twig", 11)->display($context);
                // line 12
                echo "        ";
            }
            // line 13
            echo "    </h1>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/login-logo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 13,  64 => 12,  61 => 11,  55 => 9,  53 => 8,  49 => 7,  44 => 6,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/login-logo.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\login-logo.html.twig");
    }
}
