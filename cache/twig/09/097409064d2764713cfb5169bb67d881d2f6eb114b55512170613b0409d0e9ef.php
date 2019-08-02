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

/* partials/modal-add-package.html.twig */
class __TwigTemplate_a25ab1535a44ed6f3cda49dc1b0e38f201aaa015883aa4808a6996fd58649b48 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/modal-add-package.html.twig"));

        // line 1
        echo "<div class=\"remodal\"
     data-packages-modal
     data-remodal-id=\"add-package\"
     data-remodal-options=\"hashTracking: false\">
    <form>
        <div class=\"add-package-installing\">
            <h1>";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALLING"), "html", null, true);
        echo "</h1>

            <div class=\"loading\">
                <p>
                    ";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.LOADING"), "html", null, true);
        echo "
                    <span class=\"fa fa-spin fa-spinner\"></span>
                </p>
            </div>

            <div class=\"install-dependencies-package-container hidden\">
                <p><strong>";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.DEPENDENCIES_NOT_MET_MESSAGE"), "html", null, true);
        echo "</strong></p>

                <div class=\"type-install hidden\">
                    <p>";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PACKAGES_NOT_INSTALLED"), "html", null, true);
        echo ":</p>
                    <ul></ul>
                </div>
                <div class=\"type-update hidden\">
                    <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PACKAGES_NEED_UPDATE"), "html", null, true);
        echo ":</p>
                    <ul></ul>
                </div>
                <div class=\"type-ignore hidden\">
                    <p>";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PACKAGES_SUGGESTED_UPDATE"), "html", null, true);
        echo ":</p>
                    <ul></ul>
                </div>

                <div class=\"button-bar\">
                    <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                    <a data-";
        // line 34
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "-action=\"install-dependencies-and-package\" class=\"button\"><i class=\"fa fa-fw fa-check\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
                </div>
            </div>

            <div class=\"install-package-container hidden\">
                <p>
                    ";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.READY_TO_INSTALL_PACKAGES"), "html", null, true);
        echo "
                </p>

                <ul class=\"packages-names-list\"></ul>

                <div class=\"button-bar\">
                    <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANCEL"), "html", null, true);
        echo "</button>
                    <a data-";
        // line 47
        echo twig_escape_filter($this->env, ($context["type"] ?? null), "html", null, true);
        echo "-action=\"install-package\" class=\"button\"><i class=\"fa fa-fw fa-check\"></i> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CONTINUE"), "html", null, true);
        echo "</a>
                </div>
            </div>

            <div class=\"install-package-error hidden\">
                <p>
                    ";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.ERROR_INSTALLING_PACKAGES"), "html", null, true);
        echo "
                </p>

                <ul class=\"packages-names-list\"></ul>

                <div class=\"button-bar\">
                    <button data-remodal-action=\"cancel\" class=\"button secondary remodal-cancel\"><i class=\"fa fa-fw fa-close\"></i> ";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CLOSE"), "html", null, true);
        echo "</button>
                </div>
            </div>

            <div class=\"installing-dependencies hidden\">
                <p>
                    ";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALLING_DEPENDENCIES"), "html", null, true);
        echo "
                    <span class=\"fa fa-spin fa-spinner\"></span>
                </p>
            </div>

            <div class=\"installing-package hidden\">
                <p>
                    ";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALLING_PACKAGES"), "html", null, true);
        echo "
                    <span class=\"fa fa-spin fa-spinner\"></span>
                </p>

                <ul class=\"packages-names-list\"></ul>
            </div>

            <div class=\"installation-complete hidden\">
                <p>
                    ";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PACKAGES_SUCCESSFULLY_INSTALLED"), "html", null, true);
        echo "
                </p>

                <ul class=\"packages-names-list\"></ul>
            </div>
        </div>

    </form>
</div>";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/modal-add-package.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 81,  152 => 72,  142 => 65,  133 => 59,  124 => 53,  113 => 47,  109 => 46,  100 => 40,  89 => 34,  85 => 33,  77 => 28,  70 => 24,  63 => 20,  57 => 17,  48 => 11,  41 => 7,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/modal-add-package.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\modal-add-package.html.twig");
    }
}
