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

/* forms/fields/checkboxes/checkboxes.html.twig */
class __TwigTemplate_fc593a2e233a1ee815d072924548a6dde9f67bbf6497bf31fd98d1e5878fa6a1 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'global_attributes' => [$this, 'block_global_attributes'],
            'input' => [$this, 'block_input'],
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/checkboxes/checkboxes.html.twig"));

        // line 3
        $context["originalValue"] = ($context["value"] ?? null);
        // line 4
        $context["value"] = (((null === ($context["value"] ?? null))) ? ($this->getAttribute(($context["field"] ?? null), "default", [])) : (($context["value"] ?? null)));
        // line 5
        if ((($this->getAttribute(($context["field"] ?? null), "use", []) == "keys") && $this->getAttribute(($context["field"] ?? null), "default", []))) {
            // line 6
            $context["value"] = twig_array_merge($this->getAttribute(($context["field"] ?? null), "default", []), ($context["value"] ?? null));
        }
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/checkboxes/checkboxes.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 9
    public function block_global_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_attributes"));

        // line 10
        echo "    ";
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
    data-grav-keys=\"";
        // line 11
        echo ((($this->getAttribute(($context["field"] ?? null), "use", []) == "keys")) ? ("true") : ("false"));
        echo "\"
    data-grav-field-name=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 15
    public function block_input($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 16
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "options", []));
        foreach ($context['_seq'] as $context["key"] => $context["text"]) {
            // line 17
            echo "
        ";
            // line 18
            $context["id"] = (((($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "id", []), $this->getAttribute(($context["field"] ?? null), "name", []))) : ($this->getAttribute(($context["field"] ?? null), "name", []))) . "-") . $context["key"]);
            // line 19
            echo "        ";
            $context["name"] = ((($this->getAttribute(($context["field"] ?? null), "use", []) == "keys")) ? ($context["key"]) : (($context["id"] ?? null)));
            // line 20
            echo "        ";
            $context["val"] = ((($this->getAttribute(($context["field"] ?? null), "use", []) == "keys")) ? ("1") : ($context["key"]));
            // line 21
            echo "        ";
            $context["checked"] = ((($this->getAttribute(($context["field"] ?? null), "use", []) == "keys")) ? ($this->getAttribute(($context["value"] ?? null), $context["key"], [], "array")) : (twig_in_filter($context["key"], ($context["value"] ?? null))));
            // line 22
            echo "        ";
            $context["help"] = ((twig_in_filter($context["key"], twig_get_array_keys_filter($this->getAttribute(($context["field"] ?? null), "help_options", [])))) ? ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "help_options", []), $context["key"], [], "array")) : (false));
            // line 23
            echo "
        <div class=\"checkboxes ";
            // line 24
            echo twig_escape_filter($this->env, ($context["form_field_wrapper_classes"] ?? null), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []), "html", null, true);
            echo "\">
            <input type=\"checkbox\"
                   id=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\"
                   value=\"";
            // line 27
            echo twig_escape_filter($this->env, ($context["val"] ?? null));
            echo "\"
                   name=\"";
            // line 28
            echo twig_escape_filter($this->env, ((($this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))) . "[") . ($context["name"] ?? null)) . "]"), "html", null, true);
            echo "\"
                   ";
            // line 29
            if (($context["checked"] ?? null)) {
                echo "checked=\"checked\"";
            }
            // line 30
            echo "                   ";
            if ($this->getAttribute(($context["field"] ?? null), "classes", [], "any", true, true)) {
                echo "class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "classes", []), "html", null, true);
                echo "\" ";
            }
            // line 31
            echo "                   ";
            if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
                echo "disabled=\"disabled\"";
            }
            // line 32
            echo "
            >
            <label style=\"display: inline\" for=\"";
            // line 34
            echo twig_escape_filter($this->env, ($context["id"] ?? null));
            echo "\">
                ";
            // line 35
            if (($context["help"] ?? null)) {
                // line 36
                echo "                    <span class=\"hint--bottom\" data-hint=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, ($context["help"] ?? null)), "html_attr");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["text"]));
                echo "</span>
                ";
            } else {
                // line 38
                echo "                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $context["text"]));
                echo "
                ";
            }
            // line 40
            echo "            </label>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['text'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/checkboxes/checkboxes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 40,  164 => 38,  156 => 36,  154 => 35,  150 => 34,  146 => 32,  141 => 31,  134 => 30,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  111 => 24,  108 => 23,  105 => 22,  102 => 21,  99 => 20,  96 => 19,  94 => 18,  91 => 17,  86 => 16,  80 => 15,  71 => 12,  67 => 11,  62 => 10,  56 => 9,  48 => 1,  45 => 6,  43 => 5,  41 => 4,  39 => 3,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/checkboxes/checkboxes.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\plugins\\form\\templates\\forms\\fields\\checkboxes\\checkboxes.html.twig");
    }
}
