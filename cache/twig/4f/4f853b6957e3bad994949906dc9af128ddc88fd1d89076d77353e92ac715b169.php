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

/* forms/fields/multilevel/multilevel.html.twig */
class __TwigTemplate_4f092f0a96108247e2838bfcfd0e8b71d5f686d18215d86705ad207a52dccef7 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/multilevel/multilevel.html.twig"));

        // line 84
        $context["macro"] = $this;
        // line 1
        $this->parent = $this->loadTemplate("forms/field.html.twig", "forms/fields/multilevel/multilevel.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 86
    public function block_global_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_attributes"));

        // line 87
        echo "    data-grav-array-name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
        echo "\"
    data-grav-array-keyname=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_key", []))), "html", null, true);
        echo "\"
    data-grav-array-valuename=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_value", []))), "html", null, true);
        echo "\"
    ";
        // line 90
        $this->displayParentBlock("global_attributes", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 93
    public function block_input($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 94
        echo "    <div data-id=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->randomStringFunc(), "html", null, true);
        echo "\" data-grav-multilevel-field data-grav-array-type=\"container\" data-grav-array-mode=\"value_only\"";
        echo (((twig_length_filter($this->env, ($context["value"] ?? null)) <= 1)) ? (" class=\"one-child\"") : (""));
        echo ">
        ";
        // line 95
        if (twig_length_filter($this->env, ($context["value"] ?? null))) {
            // line 96
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? null));
            foreach ($context['_seq'] as $context["key"] => $context["content"]) {
                // line 97
                echo "<div class=\"element-wrapper\">
                    ";
                // line 98
                echo $context["macro"]->getrenderer($context["key"], $context["content"], ($context["field"] ?? null), ($context["scope"] ?? null), 0, (("[" . $context["key"]) . "]"), true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 103
            echo "            <div class=\"element-wrapper\">
                <div class=\"form-row array-field-value_only js__multilevel-field\"
                    data-grav-array-type=\"row\">

                    <input
                        type=\"text\"
                        name=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", []))), "html", null, true);
            echo "\"
                        placeholder=\"Enter value\"
                        value=\"\" />

                    <span class=\"fa fa-minus js__remove-item\"></span>
                    <span class=\"fa fa-plus js__add-sibling hidden\" data-level=\"0\" ></span>
                    <span class=\"fa fa-plus-circle js__add-children hidden\" data-level=\"0\"></span>
                </div>
            </div>";
        }
        // line 119
        echo "    </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 6
    public function getfield($__value__ = null, $__key__ = null, $__level__ = null, $__globalvars__ = null, $__disable_name__ = null, $__hidden__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "key" => $__key__,
            "level" => $__level__,
            "globalvars" => $__globalvars__,
            "disable_name" => $__disable_name__,
            "hidden" => $__hidden__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "field"));

            // line 7
            echo "        ";
            $context["name"] = ((("data[" . twig_replace_filter($this->getAttribute($this->getAttribute(($context["globalvars"] ?? null), "field", []), "name", []), ["." => "]["])) . "]") . ($context["key"] ?? null));
            // line 8
            echo "        <div class=\"form-row array-field-value_only js__multilevel-field ";
            echo (((($context["level"] ?? null) == 0)) ? ("top") : (""));
            echo "\"
            data-grav-array-type=\"row\" ";
            // line 9
            if (((((isset($context["hidden"]) || array_key_exists("hidden", $context))) ? (_twig_default_filter(($context["hidden"] ?? null), false)) : (false)) == true)) {
                echo "style=\"display: none\"";
            }
            echo ">
            <input
                type=\"text\"
                ";
            // line 12
            if ((($context["disable_name"] ?? null) != true)) {
                echo "name=\"";
                echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
                echo "\"";
            }
            // line 13
            echo "                data-attr-name=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\"
                placeholder=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Plugin\Admin\Twig\AdminTwigExtension')->tuFilter(twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder_value", []))), "html", null, true);
            echo "\"
                style=\"margin-left: ";
            // line 15
            echo twig_escape_filter($this->env, (($context["level"] ?? null) * 50), "html", null, true);
            echo "px\"
                value=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["value"] ?? null), "html", null, true);
            echo "\" />

            <span class=\"fa fa-minus js__remove-item\"></span>
            <span class=\"fa fa-plus js__add-sibling hidden\" data-level=\"";
            // line 19
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"></span>
            <span class=\"fa fa-plus-circle js__add-children hidden\" data-level=\"";
            // line 20
            echo twig_escape_filter($this->env, ($context["level"] ?? null), "html", null, true);
            echo "\"></span>
        </div>
    ";
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 3
    public function getrenderer($__key__ = null, $__content__ = null, $__field__ = null, $__scope__ = null, $__level__ = null, $__parent_key__ = null, $__up_level__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals([
            "key" => $__key__,
            "content" => $__content__,
            "field" => $__field__,
            "scope" => $__scope__,
            "level" => $__level__,
            "parent_key" => $__parent_key__,
            "up_level" => $__up_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "renderer"));

            // line 4
            echo "    ";
            $context["self"] = $this;
            // line 5
            echo "
    ";
            // line 23
            echo "
    ";
            // line 24
            if ((($context["level"] ?? null) == 0)) {
                // line 25
                echo "
        ";
                // line 26
                echo $context["self"]->getfield(($context["key"] ?? null), "", ($context["level"] ?? null), $context, true, ((is_numeric(($context["key"] ?? null))) ? (true) : (false)));
                echo "

        ";
                // line 28
                if ( !twig_test_iterable(($context["content"] ?? null))) {
                    // line 29
                    echo "            ";
                    $context["level2"] = (($context["level"] ?? null) + 1);
                    // line 30
                    echo "
            <div class=\"children-wrapper\">
                <div class=\"element-wrapper\">
                    ";
                    // line 33
                    echo $context["self"]->getfield(($context["content"] ?? null), (("[" . ($context["key"] ?? null)) . "]"), ($context["level2"] ?? null), $context);
                    echo "
                </div>
            </div>
        ";
                }
                // line 37
                echo "    ";
            }
            // line 38
            echo "
    ";
            // line 39
            if (($context["up_level"] ?? null)) {
                // line 40
                echo "        ";
                $context["level"] = (($context["level"] ?? null) + 1);
                // line 41
                echo "    ";
            }
            // line 42
            echo "    <div class=\"children-wrapper\">
        ";
            // line 43
            $context["unique_child"] = (((is_array(($context["content"] ?? null)) && ($this->getAttribute(($context["content"] ?? null), "length", []) > 1))) ? (true) : (false));
            // line 44
            echo "
        ";
            // line 45
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["content"] ?? null));
            foreach ($context['_seq'] as $context["inner_key"] => $context["inner_content"]) {
                // line 46
                echo "<div class=\"element-wrapper\">
                ";
                // line 47
                if ( !is_numeric($context["inner_key"])) {
                    // line 48
                    echo "                    ";
                    if ((twig_length_filter($this->env, ($context["content"] ?? null)) > 1)) {
                        // line 49
                        echo "                        ";
                        echo $context["self"]->getfield($context["inner_key"], ($context["parent_key"] ?? null), ($context["level"] ?? null), $context, true);
                        echo "
                    ";
                    } else {
                        // line 51
                        echo "                        ";
                        echo $context["self"]->getfield($context["inner_key"], ($context["parent_key"] ?? null), ($context["level"] ?? null), $context);
                        echo "
                    ";
                    }
                    // line 53
                    echo "                    ";
                    $context["level2"] = (($context["level"] ?? null) + 1);
                    // line 54
                    echo "                    ";
                    $context["up_level"] = true;
                    // line 55
                    echo "                ";
                } else {
                    // line 56
                    echo "                    ";
                    $context["up_level"] = false;
                    // line 57
                    echo "                    ";
                    $context["level2"] = ($context["level"] ?? null);
                    // line 58
                    echo "                ";
                }
                // line 59
                echo "
                ";
                // line 60
                if ( !twig_test_iterable($context["inner_content"])) {
                    // line 61
                    echo "
                    ";
                    // line 62
                    if ( !is_numeric($context["inner_key"])) {
                        // line 63
                        echo "                        <div class=\"children-wrapper\">
                            <div class=\"element-wrapper\">
                    ";
                    }
                    // line 66
                    echo "
                    ";
                    // line 67
                    $context["last_key"] = ((is_numeric($context["inner_key"])) ? ("") : ($context["inner_key"]));
                    // line 68
                    echo "                    ";
                    echo $context["self"]->getfield($context["inner_content"], (((($context["parent_key"] ?? null) . "[") . $context["inner_key"]) . "]"), ($context["level2"] ?? null), $context);
                    echo "

                    ";
                    // line 70
                    if ( !is_numeric($context["inner_key"])) {
                        // line 71
                        echo "                            </div>
                        </div>
                    ";
                    }
                    // line 74
                    echo "                ";
                } else {
                    // line 75
                    echo "
                    ";
                    // line 76
                    $context["inner_parent_key"] = (((($context["parent_key"] ?? null) . "[") . $context["inner_key"]) . "]");
                    // line 77
                    echo "                    ";
                    echo $context["self"]->getrenderer($context["inner_key"], $context["inner_content"], ($context["field"] ?? null), ($context["scope"] ?? null), ($context["level"] ?? null), ($context["inner_parent_key"] ?? null), ($context["up_level"] ?? null));
                    echo "
                ";
                }
                // line 79
                echo "            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['inner_key'], $context['inner_content'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "    </div>
";
            
            $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

        } catch (\Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (\Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "forms/fields/multilevel/multilevel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  399 => 81,  392 => 79,  386 => 77,  384 => 76,  381 => 75,  378 => 74,  373 => 71,  371 => 70,  365 => 68,  363 => 67,  360 => 66,  355 => 63,  353 => 62,  350 => 61,  348 => 60,  345 => 59,  342 => 58,  339 => 57,  336 => 56,  333 => 55,  330 => 54,  327 => 53,  321 => 51,  315 => 49,  312 => 48,  310 => 47,  307 => 46,  303 => 45,  300 => 44,  298 => 43,  295 => 42,  292 => 41,  289 => 40,  287 => 39,  284 => 38,  281 => 37,  274 => 33,  269 => 30,  266 => 29,  264 => 28,  259 => 26,  256 => 25,  254 => 24,  251 => 23,  248 => 5,  245 => 4,  224 => 3,  203 => 20,  199 => 19,  193 => 16,  189 => 15,  185 => 14,  180 => 13,  174 => 12,  166 => 9,  161 => 8,  158 => 7,  138 => 6,  130 => 119,  118 => 109,  110 => 103,  100 => 98,  97 => 97,  92 => 96,  90 => 95,  83 => 94,  77 => 93,  68 => 90,  64 => 89,  60 => 88,  55 => 87,  49 => 86,  41 => 1,  39 => 84,  30 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/multilevel/multilevel.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\multilevel\\multilevel.html.twig");
    }
}
