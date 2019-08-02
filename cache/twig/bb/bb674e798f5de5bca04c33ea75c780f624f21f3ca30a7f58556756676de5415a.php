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

/* forms/fields/pagemedia/pagemedia.html.twig */
class __TwigTemplate_bbe51d5ec6a8a6bf32836c0fd276a150b2bd921d04674e1243e2735485761b43 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/field.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/pagemedia/pagemedia.html.twig"));

        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/pagemedia/pagemedia.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 5
    public function block_field($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 6
        if ($this->getAttribute(($context["context"] ?? null), "folderExists", [])) {
            // line 7
            echo "    ";
            $context["pagemedia"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.admin.pagemedia"], "method");
            // line 8
            echo "    ";
            $context["pagemedia_settings"] = ["resolution" => ["min" => ["width" => (($this->getAttribute(            // line 11
($context["pagemedia"] ?? null), "res_min_width", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_min_width", [])) : (null)), "height" => (($this->getAttribute(            // line 12
($context["pagemedia"] ?? null), "res_min_height", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_min_height", [])) : (null))], "max" => ["width" => (($this->getAttribute(            // line 15
($context["pagemedia"] ?? null), "res_max_width", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_max_width", [])) : (null)), "height" => (($this->getAttribute(            // line 16
($context["pagemedia"] ?? null), "res_max_height", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "res_max_height", [])) : (null))]], "resizeWidth" => (($this->getAttribute(            // line 19
($context["pagemedia"] ?? null), "resize_width", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "resize_width", [])) : (null)), "resizeHeight" => (($this->getAttribute(            // line 20
($context["pagemedia"] ?? null), "resize_height", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "resize_height", [])) : (null)), "resizeQuality" => (($this->getAttribute(            // line 21
($context["pagemedia"] ?? null), "resize_quality", [])) ? ($this->getAttribute(($context["pagemedia"] ?? null), "resize_quality", [])) : (0.8000000000000000444089209850062616169452667236328125))];
            // line 23
            echo "
    ";
            // line 24
            $context["media_url"] = (($this->getAttribute(($context["form"] ?? null), "getMediaTaskRoute", [], "method")) ? ($this->getAttribute(($context["form"] ?? null), "getMediaTaskRoute", [], "method")) : ((("/media/" . twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/")) . ".json")));
            // line 25
            echo "    ";
            $context["media_local"] = (($this->getAttribute(($context["form"] ?? null), "getMediaRoute", [], "method")) ? ($this->getAttribute(($context["form"] ?? null), "getMediaRoute", [], "method")) : ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->rtrimFilter(($context["base_url_relative_frontend"] ?? null), "/") . "/") . twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/"))));
            // line 26
            echo "    ";
            $context["media_path"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc($this->getAttribute(($context["context"] ?? null), "relativePagePath", []));
            // line 27
            echo "    ";
            $context["media_uri"] = $this->getAttribute(($context["context"] ?? null), "mediaUri", [], "method");
            // line 28
            echo "    ";
            $context["dropzone_settings"] = twig_array_merge(["maxFilesize" => ($context["form_max_filesize"] ?? null)], ($context["pagemedia_settings"] ?? null));
            // line 29
            echo "
    <div class=\"form-field grid vertical ";
            // line 30
            if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            }
            echo "\">
    <div class=\"form-label\">
        <label>";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", [])), "html", null, true);
            echo "</label>
    </div>
    <div class=\"form-data form-uploads-wrapper\">
        <div id=\"grav-dropzone\"
             class=\"dropzone\"
             data-media-url=\"";
            // line 37
            echo twig_escape_filter($this->env, (($context["base_url"] ?? null) . ($context["media_url"] ?? null)), "html_attr");
            echo "\"
             data-media-local=\"";
            // line 38
            echo twig_escape_filter($this->env, ($context["media_local"] ?? null), "html_attr");
            echo "\"
             data-media-path=\"";
            // line 39
            echo twig_escape_filter($this->env, ($context["media_path"] ?? null), "html_attr");
            echo "\"
             data-media-uri=\"";
            // line 40
            echo twig_escape_filter($this->env, ($context["media_uri"] ?? null), "html_attr");
            echo "\"
             data-dropzone-options=\"";
            // line 41
            echo twig_escape_filter($this->env, twig_jsonencode_filter(($context["dropzone_settings"] ?? null)), "html_attr");
            echo "\"
             data-dropzone-field=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"></div>

        ";
            // line 44
            if (($this->getAttribute($this->getAttribute(($context["admin"] ?? null), "session", []), "expert", []) == "0")) {
                // line 45
                echo "        <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, ($context["value"] ?? null));
                echo "\" />
        ";
            }
            // line 47
            echo "    </div>
</div>
";
        } else {
            // line 50
            echo "<div class=\"form-tab\">
    <div class=\"form-field\">
        <div class=\"form-label\">
            ";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter("PLUGIN_ADMIN.CANNOT_ADD_MEDIA_FILES_PAGE_NOT_SAVED"), "html", null, true);
            echo "
        </div>
    </div>
</div>
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/pagemedia/pagemedia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 53,  144 => 50,  139 => 47,  131 => 45,  129 => 44,  124 => 42,  120 => 41,  116 => 40,  112 => 39,  108 => 38,  104 => 37,  96 => 32,  89 => 30,  86 => 29,  83 => 28,  80 => 27,  77 => 26,  74 => 25,  72 => 24,  69 => 23,  67 => 21,  66 => 20,  65 => 19,  64 => 16,  63 => 15,  62 => 12,  61 => 11,  59 => 8,  56 => 7,  54 => 6,  48 => 5,  40 => 1,  38 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/pagemedia/pagemedia.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\pagemedia\\pagemedia.html.twig");
    }
}
