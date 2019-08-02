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

/* forms/fields/editor/editor.html.twig */
class __TwigTemplate_7b92d4af307a96d894792fda289c13d2337f7bba805c2c0d63008458ee24f5a3 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'label' => [$this, 'block_label'],
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/editor/editor.html.twig"));

        // line 3
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "default", []))) : (($context["value"] ?? null)));
        // line 4
        if ( !($context["codemirrorOptions"] ?? null)) {
            // line 5
            $context["codemirrorOptions"] = twig_array_merge(["mode" => "gfm", "ignore" => [0 => "code", 1 => "preview"]], (($this->getAttribute(($context["field"] ?? null), "codemirror", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "codemirror", []), [])) : ([])));
        }
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/editor/editor.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 8
    public function block_field($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 9
        echo "    ";
        $this->displayBlock('label', $context, $blocks);
        // line 17
        echo "    <div class=\"form-field ";
        echo twig_escape_filter($this->env, (($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "classes", []), "")) : ("")), "html", null, true);
        echo "\">
        <div class=\"form-data grav-editor\">
            <div class=\"grav-editor-content is-active\">
                <textarea
                    data-grav-editor=\"";
        // line 21
        echo twig_escape_filter($this->env, twig_jsonencode_filter(["codemirror" => ($context["codemirrorOptions"] ?? null)]), "html_attr");
        echo "\"
                    data-grav-editor-mode=\"editor\"
                    name=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
                    ";
        // line 24
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo "class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo "\" ";
        }
        // line 25
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 26
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 27
        echo "                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 28
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "placeholder", [])), "html", null, true);
            echo "\"";
        }
        // line 29
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "autofocus=\"autofocus\"";
        }
        // line 30
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 31
        echo "                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 32
        echo "                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "required=\"required\"";
        }
        // line 33
        echo "                    ";
        if (!twig_in_filter("preview", $this->getAttribute(($context["codemirrorOptions"] ?? null), "ignore", []))) {
            echo "data-grav-urlpreview=\"";
            echo twig_escape_filter($this->env, ($context["base_url"] ?? null), "html", null, true);
            echo "/media/";
            echo twig_escape_filter($this->env, twig_trim_filter($this->getAttribute(($context["admin"] ?? null), "route", []), "/"), "html", null, true);
            echo ".json\"";
        }
        // line 34
        echo "                >";
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), "
"), "html");
        echo "</textarea>
            </div>
            ";
        // line 36
        if (( !$this->getAttribute(($context["field"] ?? null), "resizer", [], "any", true, true) || !twig_in_filter($this->getAttribute(($context["field"] ?? null), "resizer", []), [0 => "off", 1 => "false", 2 => 0]))) {
            echo "<div class=\"grav-editor-resizer\"></div>";
        }
        // line 37
        echo "            ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [])) {
            // line 38
            echo "                <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", []), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
            echo "\">
                    <span class=\"form-description\">
                        ";
            // line 40
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 41
                echo "                            ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "description", [])), false);
                echo "
                        ";
            } else {
                // line 43
                echo "                            ";
                echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "description", []));
                echo "
                        ";
            }
            // line 45
            echo "                    </span>
                </div>
            ";
        }
        // line 48
        echo "        </div>
    </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 9
    public function block_label($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        // line 10
        echo "        ";
        if ($this->getAttribute(($context["field"] ?? null), "label", [])) {
            // line 11
            echo "            ";
            if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
                // line 12
                echo "                ";
                $context["hint"] = (("data-hint=\"" . $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "help", []))) . "\"");
                // line 13
                echo "            ";
            }
            // line 14
            echo "            <div class=\"form-label form-field hint--bottom\" ";
            echo ($context["hint"] ?? null);
            echo ">";
            echo $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter($this->getAttribute(($context["field"] ?? null), "label", []));
            echo "</div>
        ";
        }
        // line 16
        echo "    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/editor/editor.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 16,  209 => 14,  206 => 13,  203 => 12,  200 => 11,  197 => 10,  191 => 9,  182 => 48,  177 => 45,  171 => 43,  165 => 41,  163 => 40,  155 => 38,  152 => 37,  148 => 36,  141 => 34,  132 => 33,  127 => 32,  122 => 31,  117 => 30,  112 => 29,  105 => 28,  100 => 27,  93 => 26,  86 => 25,  80 => 24,  76 => 23,  71 => 21,  63 => 17,  60 => 9,  54 => 8,  46 => 1,  43 => 5,  41 => 4,  39 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/editor/editor.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\editor\\editor.html.twig");
    }
}
