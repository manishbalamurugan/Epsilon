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

/* forms/fields/range/range.html.twig */
class __TwigTemplate_1d58fbc68deea9d84e2293b2875a0e4e4f9476f4c1d440f78801cc1d2594bc15 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/range/range.html.twig"));

        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/range/range.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_input_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input_attributes"));

        // line 4
        echo "    type=\"range\"
    class=\"rangefield ";
        // line 5
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo " ";
        }
        echo "\"
    ";
        // line 6
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", [])) {
            echo "min=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", []), "html", null, true);
            echo "\"";
        }
        // line 7
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", [])) {
            echo "max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", []), "html", null, true);
            echo "\"";
        }
        // line 8
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "step", [])) {
            echo "step=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "step", []), "html", null, true);
            echo "\"";
        }
        // line 9
        echo "    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            // line 10
            echo "        id=\"range_";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", [])), ["." => "_"]), "html", null, true);
            echo "\"
        oninput=\"number_";
            // line 11
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", [])), ["." => "_"]), "html", null, true);
            echo "_output.value = this.value\"
    ";
        } else {
            // line 13
            echo "        id=\"range_";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])), ["." => "_"]), "html", null, true);
            echo "\"
        oninput=\"number_";
            // line 14
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])), ["." => "_"]), "html", null, true);
            echo "_output.value = this.value\"
    ";
        }
        // line 16
        echo "    ";
        $this->displayParentBlock("input_attributes", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 18
    public function block_append($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "append"));

        // line 19
        echo "    <input
        type=\"number\"
        class=\"rangefield ";
        // line 21
        if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
            echo " ";
        }
        echo "\"
        ";
        // line 22
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", [])) {
            echo "min=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "min", []), "html", null, true);
            echo "\"";
        }
        // line 23
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", [])) {
            echo "max=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "max", []), "html", null, true);
            echo "\"";
        }
        // line 24
        echo "        ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "step", [])) {
            echo "step=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "step", []), "html", null, true);
            echo "\"";
        }
        // line 25
        echo "        ";
        if (($context["value"] ?? null)) {
            // line 26
            echo "            value=\"";
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\"
        ";
        } elseif ($this->getAttribute(        // line 27
($context["field"] ?? null), "default", [])) {
            // line 28
            echo "            value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "default", []), "html", null, true);
            echo "\"
        ";
        } else {
            // line 30
            echo "            value=\"0\"
        ";
        }
        // line 32
        echo "        ";
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            // line 33
            echo "            id=\"number_";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", [])), ["." => "_"]), "html", null, true);
            echo "_output\"
            oninput=\"range_";
            // line 34
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", [])), ["." => "_"]), "html", null, true);
            echo ".value = this.value\"
        ";
        } else {
            // line 36
            echo "            id=\"number_";
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])), ["." => "_"]), "html", null, true);
            echo "_output\"
            oninput=\"range_";
            // line 37
            echo twig_escape_filter($this->env, twig_replace_filter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])), ["." => "_"]), "html", null, true);
            echo ".value = this.value\"
        ";
        }
        // line 39
        echo "    />
    <span class=\"range-append\">";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "append", []), "html", null, true);
        echo "</span>

";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/range/range.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 40,  195 => 39,  190 => 37,  185 => 36,  180 => 34,  175 => 33,  172 => 32,  168 => 30,  162 => 28,  160 => 27,  155 => 26,  152 => 25,  145 => 24,  138 => 23,  132 => 22,  125 => 21,  121 => 19,  115 => 18,  105 => 16,  100 => 14,  95 => 13,  90 => 11,  85 => 10,  82 => 9,  75 => 8,  68 => 7,  62 => 6,  55 => 5,  52 => 4,  46 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/range/range.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\range\\range.html.twig");
    }
}
