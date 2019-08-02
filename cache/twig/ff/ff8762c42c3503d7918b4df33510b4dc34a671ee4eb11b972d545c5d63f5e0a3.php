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

/* partials/plugins-list.html.twig */
class __TwigTemplate_4b1865d6743861b250a189f493c49322b55543673ddd5c537be9091be079d4bd extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "partials/plugins-list.html.twig"));

        // line 1
        $context["gumroad_loaded"] = false;
        // line 2
        echo "<div class=\"grav-update plugins\"></div>
";
        // line 3
        if (($context["installing"] ?? null)) {
            // line 4
            echo "    ";
            $this->loadTemplate("partials/release-toggle.html.twig", "partials/plugins-list.html.twig", 4)->display($context);
        }
        // line 6
        $this->loadTemplate("partials/list-sort.html.twig", "partials/plugins-list.html.twig", 6)->display(twig_array_merge($context, ["list_view" => "plugins"]));
        // line 7
        echo "<h1>
    ";
        // line 8
        echo twig_escape_filter($this->env, ((($context["installing"] ?? null)) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.AVAILABLE_PLUGINS")) : ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALLED_PLUGINS"))), "html", null, true);
        echo "
</h1>
<form>
    <div class=\"gpm-search\">
        <input type=\"text\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.RESOURCE_FILTER"), "html", null, true);
        echo "\" data-gpm-filter>
    </div>
</form>

<table>
    ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Grav\Common\Twig\TwigExtension')->ksortFilter($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "plugins", [0 =>  !($context["installing"] ?? null)], "method"), "toArray", [])));
        $context['_iterated'] = false;
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["slug"] => $context["plugin"]) {
            // line 18
            echo "        ";
            $context["data"] = $this->getAttribute(($context["admin"] ?? null), "data", [0 => ("plugins/" . $context["slug"])], "method");
            // line 19
            echo "        ";
            $context["isTestingRelease"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "gpm", []), "isTestingRelease", [0 => $context["slug"]], "method");
            // line 20
            echo "        ";
            $context["releaseDate"] = (($this->getAttribute($context["plugin"], "date", [])) ? ($this->getAttribute($context["plugin"], "date", [])) : ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "gpm", []), "findPackage", [0 => $context["slug"], 1 => true], "method"), "date", [])));
            // line 21
            echo "
        <tr data-gpm-plugin=\"";
            // line 22
            echo twig_escape_filter($this->env, twig_urlencode_filter($context["slug"]), "html", null, true);
            echo "\" data-gpm-name=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", []), "html", null, true);
            echo "\" data-gpm-release-date=\"";
            echo twig_escape_filter($this->env, ($context["releaseDate"] ?? null), "html", null, true);
            echo "\" data-gpm-author=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "author", []), "name", []), "html", null, true);
            echo "\" data-gpm-official=\"";
            echo (($this->getAttribute(($context["admin"] ?? null), "isTeamGrav", [0 => $context["plugin"]], "method")) ? ("1") : ("2"));
            echo "\" data-gpm-updatable=\"";
            echo (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "gpm", []), "isUpdatable", [0 => $context["slug"]], "method")) ? ("1") : ("2"));
            echo "\" data-gpm-enabled=\"";
            echo (($this->getAttribute(($context["data"] ?? null), "get", [0 => "enabled"], "method")) ? ("1") : ("2"));
            echo "\" data-gpm-testing=\"";
            echo ((($context["isTestingRelease"] ?? null)) ? ("1") : ("2"));
            echo "\">
            <td class=\"gpm-name quadruple\">
                <i class=\"fa fa-fw fa-";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "icon", []), "html", null, true);
            echo "\"></i>
                <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["base_url_relative"] ?? null), "html", null, true);
            echo "/plugins/";
            echo twig_escape_filter($this->env, twig_urlencode_filter($context["slug"]), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "name", []), "html", null, true);
            echo "</a>
                ";
            // line 26
            if ($this->getAttribute(($context["admin"] ?? null), "isTeamGrav", [0 => $context["plugin"]], "method")) {
                // line 27
                echo "                    <small><span class=\"info-reverse\"><i class=\"fa fa-check-circle\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.GRAV_OFFICIAL_PLUGIN"), "html", null, true);
                echo "\"></i></span></small>
                ";
            }
            // line 29
            echo "                ";
            if ($this->getAttribute(($context["admin"] ?? null), "isPremiumProduct", [0 => $context["plugin"]], "method")) {
                // line 30
                echo "                    ";
                if ( !($context["gumroad_loaded"] ?? null)) {
                    // line 31
                    echo "                        ";
                    $context["gumroad_loaded"] = true;
                    // line 32
                    echo "                        <script src=\"//gumroad.com/js/gumroad.js\"></script>
                    ";
                }
                // line 34
                echo "                    <small><span class=\"badge warning premium\"><i class=\"fa fa-star-o\"></i> ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PREMIUM_PRODUCT"), "html", null, true);
                echo "</span></small>
                ";
            }
            // line 36
            echo "                ";
            if ($this->getAttribute($context["plugin"], "symlink", [])) {
                // line 37
                echo "                <span class=\"hint--bottom\"  data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.PLUGIN_SYMBOLICALLY_LINKED"), "html", null, true);
                echo "\">
                    <i class=\"fa fa-fw fa-link\"></i>
                </span>
                ";
            }
            // line 41
            echo "                <span class=\"gpm-version\">v";
            echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "version", []), "html", null, true);
            echo "</span>
                ";
            // line 42
            if (($context["isTestingRelease"] ?? null)) {
                echo "<span class=\"gpm-testing\">test release</span>";
            }
            // line 43
            echo "            </td>
            <td class=\"gpm-actions\">
                ";
            // line 45
            if (( !($context["installing"] ?? null) && (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "form", []), "fields", []), "enabled", []), "type", []) != "hidden") && ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["plugin"], "form", []), "fields", []), "tabs", []), "fields", []), "login", []), "fields", []), "enabled", []), "type", []) != "hidden")))) {
                // line 46
                echo "                    <a class=\"";
                echo (($this->getAttribute(($context["data"] ?? null), "get", [0 => "enabled"], "method")) ? ("enabled") : ("disabled"));
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["uri"] ?? null), "addNonce", [0 => (((((($context["base_url_relative"] ?? null) . "/plugins/") . $context["slug"]) . "/task") . $this->getAttribute($this->getAttribute(($context["config"] ?? null), "system", []), "param_sep", [])) . (($this->getAttribute(($context["data"] ?? null), "get", [0 => "enabled"], "method")) ? ("disable") : ("enable"))), 1 => "admin-form", 2 => "admin-nonce"], "method"), "html", null, true);
                echo "\">
                        <i class=\"fa fa-fw fa-toggle-";
                // line 47
                echo (($this->getAttribute(($context["data"] ?? null), "get", [0 => "enabled"], "method")) ? ("on") : ("off"));
                echo "\"></i>
                    </a>
                ";
            } elseif (            // line 49
($context["installing"] ?? null)) {
                // line 50
                echo "                    ";
                if (($this->getAttribute($context["plugin"], "premium", []) &&  !$this->getAttribute(($context["admin"] ?? null), "license", [0 => $this->getAttribute($context["plugin"], "slug", [])], "method"))) {
                    // line 51
                    echo "                        ";
                    if ( !($context["gumroad_loaded"] ?? null)) {
                        // line 52
                        echo "                            ";
                        $context["gumroad_loaded"] = true;
                        // line 53
                        echo "                            <script src=\"//gumroad.com/js/gumroad.js\"></script>
                        ";
                    }
                    // line 55
                    echo "                        <a class=\"gumroad-button button\" href=\"https://gum.co/";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["plugin"], "premium", []), "permalink", []), "html", null, true);
                    echo "\" target=\"_blank\" data-gumroad-single-product=\"true\"><i class=\"fa fa-shopping-cart\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("Buy Now"), "html", null, true);
                    echo "</a>
                    ";
                } else {
                    // line 57
                    echo "                <a class=\"button\" href=\"#\" data-remodal-target=\"add-package\" data-packages-slugs=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["plugin"], "slug", []), "html", null, true);
                    echo "\" data-plugin-action=\"start-package-installation\"><i class=\"fa fa-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.INSTALL"), "html", null, true);
                    echo "</a>
                    ";
                }
                // line 59
                echo "                ";
            }
            // line 60
            echo "                <span class=\"gpm-details-expand\"><i class=\"fa fa-chevron-down\"></i></span>
            </td>
            <td class=\"gpm-details\">
                <div class=\"table-wrapper\">
                    ";
            // line 64
            $this->loadTemplate("partials/plugin-data.html.twig", "partials/plugins-list.html.twig", 64)->display(twig_array_merge($context, ["plugin" => $context["plugin"]]));
            // line 65
            echo "                </div>
            </td>
        </tr>
    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 69
            echo "        <tr><td>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.OFFLINE_WARNING"), "html", null, true);
            echo "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['plugin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        echo "</table>

";
        // line 73
        $this->loadTemplate("partials/modal-add-package.html.twig", "partials/plugins-list.html.twig", 73)->display(twig_array_merge($context, ["type" => "plugin"]));
        // line 74
        $this->loadTemplate("partials/modal-update-packages.html.twig", "partials/plugins-list.html.twig", 74)->display(twig_array_merge($context, ["type" => "plugin"]));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "partials/plugins-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 74,  261 => 73,  257 => 71,  248 => 69,  232 => 65,  230 => 64,  224 => 60,  221 => 59,  213 => 57,  205 => 55,  201 => 53,  198 => 52,  195 => 51,  192 => 50,  190 => 49,  185 => 47,  178 => 46,  176 => 45,  172 => 43,  168 => 42,  163 => 41,  155 => 37,  152 => 36,  146 => 34,  142 => 32,  139 => 31,  136 => 30,  133 => 29,  127 => 27,  125 => 26,  117 => 25,  113 => 24,  94 => 22,  91 => 21,  88 => 20,  85 => 19,  82 => 18,  64 => 17,  56 => 12,  49 => 8,  46 => 7,  44 => 6,  40 => 4,  38 => 3,  35 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "partials/plugins-list.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\plugins\\admin\\themes\\grav\\templates\\partials\\plugins-list.html.twig");
    }
}
