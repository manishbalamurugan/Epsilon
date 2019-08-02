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

/* forms/default/field.html.twig */
class __TwigTemplate_5ef0c46bc92be83bb0cb630b3da1489fc4252619c11669423d5788117c2ec155 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'field' => [$this, 'block_field'],
            'outer_field_classes' => [$this, 'block_outer_field_classes'],
            'contents' => [$this, 'block_contents'],
            'label' => [$this, 'block_label'],
            'global_attributes' => [$this, 'block_global_attributes'],
            'group' => [$this, 'block_group'],
            'input' => [$this, 'block_input'],
            'prepend' => [$this, 'block_prepend'],
            'input_attributes' => [$this, 'block_input_attributes'],
            'append' => [$this, 'block_append'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/default/field.html.twig"));

        // line 1
        if ( !$this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "ignore", [])) {
            // line 2
            echo "
";
            // line 3
            $context["field_name"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
            // line 4
            $context["vertical"] = ($this->getAttribute(($context["field"] ?? null), "style", []) == "vertical");
            // line 5
            echo "
";
            // line 6
            if (( !($context["blueprints"] ?? null) || (((($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array", true, true) &&  !(null === $this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["blueprints"] ?? null), "schema", [], "any", false, true), "type", [0 => $this->getAttribute(($context["field"] ?? null), "type", [])], "method", false, true), "input@", [], "array")) : (true)) === true))) {
                // line 7
                echo "    ";
                $context["toggleable"] = ((($this->getAttribute(($context["field"] ?? null), "toggleable", [], "any", true, true) &&  !(null === $this->getAttribute(($context["field"] ?? null), "toggleable", [])))) ? ($this->getAttribute(($context["field"] ?? null), "toggleable", [])) : (false));
                // line 8
                echo "    ";
                if (($context["toggleable"] ?? null)) {
                    // line 9
                    echo "        ";
                    $context["originalValue"] = (((isset($context["originalValue"]) || array_key_exists("originalValue", $context))) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
                    // line 10
                    echo "        ";
                    $context["toggleableChecked"] = ( !(null === ($context["originalValue"] ?? null)) &&  !twig_test_empty(($context["originalValue"] ?? null)));
                    // line 11
                    echo "    ";
                } elseif ($this->getAttribute(($context["field"] ?? null), "overridable", [])) {
                    // line 12
                    echo "        ";
                    $context["toggleable"] = true;
                    // line 13
                    echo "        ";
                    $context["default"] = ((($this->getAttribute(($context["form"] ?? null), "getDefaultValue", [0 => $this->getAttribute(($context["field"] ?? null), "name", [])], "method", true, true) &&  !(null === $this->getAttribute(($context["form"] ?? null), "getDefaultValue", [0 => $this->getAttribute(($context["field"] ?? null), "name", [])], "method")))) ? ($this->getAttribute(($context["form"] ?? null), "getDefaultValue", [0 => $this->getAttribute(($context["field"] ?? null), "name", [])], "method")) : ($this->getAttribute(($context["field"] ?? null), "default", [])));
                    // line 14
                    echo "        ";
                    $context["toggleableChecked"] = (($context["value"] ?? null) != ($context["default"] ?? null));
                    // line 15
                    echo "    ";
                }
                // line 16
                echo "
    ";
                // line 17
                $context["cookie_name"] = ((("forms-" . $this->getAttribute(($context["form"] ?? null), "name", [])) . "-") . $this->getAttribute(($context["field"] ?? null), "name", []));
                // line 18
                echo "    ";
                $context["value"] = (($context["value"]) ?? ((( !(null === $this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null)))) ? ($this->env->getExtension('Grav\Common\Twig\TwigExtension')->getCookie(($context["cookie_name"] ?? null))) : ($this->getAttribute(($context["field"] ?? null), "default", [])))));
                // line 19
                echo "
    ";
                // line 20
                if ((($this->getAttribute(($context["field"] ?? null), "yaml", []) || ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "type", []) == "yaml")) && twig_test_iterable(($context["value"] ?? null)))) {
                    // line 21
                    echo "        ";
                    $context["value"] = call_user_func_array($this->env->getFilter('toYaml')->getCallable(), [($context["value"] ?? null)]);
                    // line 22
                    echo "    ";
                }
            } else {
                // line 24
                echo "    ";
                $context["toggleable"] = false;
            }
            // line 26
            echo "
";
            // line 28
            $context["isDisabledToggleable"] = (($context["toggleable"] ?? null) &&  !($context["toggleableChecked"] ?? null));
            // line 29
            echo "
";
            // line 30
            $context["errors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", []), $this->getAttribute(($context["field"] ?? null), "name", []));
            // line 31
            $context["required"] = (($context["client_side_validation"] ?? null) && twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1]));
            // line 32
            $context["autofocus"] = ((($context["inline_errors"] ?? null) == false) && twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", []), [0 => "on", 1 => "true", 2 => 1]));
            // line 33
            echo "
";
            // line 34
            if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
                // line 35
                echo "    ";
                $context["autofocus"] = true;
            }
            // line 37
            echo "
";
            // line 38
            $this->displayBlock('field', $context, $blocks);
            // line 138
            echo "
";
        }
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 38
    public function block_field($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "field"));

        // line 39
        echo "    <div class=\"form-field ";
        echo ($context["form_field_outer_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "outerclasses", []);
        echo " ";
        if (($context["errors"] ?? null)) {
            echo " has-errors";
        }
        echo " ";
        $this->displayBlock('outer_field_classes', $context, $blocks);
        echo " ";
        if (($context["toggleable"] ?? null)) {
            echo " form-field-toggleable";
        }
        echo "\">
        ";
        // line 40
        $this->displayBlock('contents', $context, $blocks);
        // line 136
        echo "    </div>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 39
    public function block_outer_field_classes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "outer_field_classes"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 40
    public function block_contents($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contents"));

        // line 41
        echo "            ";
        if (( !($this->getAttribute(($context["field"] ?? null), "label", []) === false) &&  !($this->getAttribute(($context["field"] ?? null), "display_label", []) === false))) {
            // line 42
            echo "                <div class=\"";
            echo ((($context["form_field_outer_label_classes"] ?? null)) ? (($context["form_field_outer_label_classes"] ?? null)) : ("form-label"));
            echo " ";
            echo $this->getAttribute(($context["field"] ?? null), "labelclasses", []);
            echo "\">
                    ";
            // line 43
            if (($context["toggleable"] ?? null)) {
                // line 44
                echo "                        ";
                $this->loadTemplate("forms/default/toggleable.html.twig", "forms/default/field.html.twig", 44)->display(twig_array_merge($context, ["field_name" => ($context["field_name"] ?? null), "field" => ($context["field"] ?? null), "checked" => ($context["toggleableChecked"] ?? null)]));
                // line 45
                echo "                    ";
            }
            // line 46
            echo "                    <label class=\"";
            echo ((($context["form_field_label_classes"] ?? null)) ? (($context["form_field_label_classes"] ?? null)) : ("inline"));
            echo " ";
            echo ((($context["toggleable"] ?? null)) ? ("toggleable") : (""));
            echo "\" ";
            if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
                echo "for=\"";
                echo ((($context["toggleable"] ?? null)) ? (("toggleable_" . $this->getAttribute(($context["field"] ?? null), "name", []))) : (twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []))));
                echo "\" ";
            }
            echo " >
                    ";
            // line 47
            $this->displayBlock('label', $context, $blocks);
            // line 64
            echo "                    </label>
                </div>
            ";
        }
        // line 67
        echo "            <div class=\"";
        echo ((($context["form_field_outer_data_classes"] ?? null)) ? (($context["form_field_outer_data_classes"] ?? null)) : ("form-data"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "dataclasses", []);
        echo "\"
                ";
        // line 68
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 73
        echo "            >
                ";
        // line 74
        $this->displayBlock('group', $context, $blocks);
        // line 122
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", [])) {
            // line 123
            echo "                    <div class=\"form-extra-wrapper ";
            echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []);
            echo "\">
                        <span class=\"form-description\">
                            ";
            // line 125
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 126
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", [])), false);
                echo "
                            ";
            } else {
                // line 128
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "description", []));
                echo "
                            ";
            }
            // line 130
            echo "                        </span>
                    </div>
                ";
        }
        // line 133
        echo "
            </div>
        ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 47
    public function block_label($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "label"));

        // line 48
        echo "                        ";
        if ($this->getAttribute(($context["field"] ?? null), "help", [])) {
            // line 49
            echo "                            ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 50
                echo "                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])), false));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["field"] ?? null), "label", []), false), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []))));
                echo "</span>
                            ";
            } else {
                // line 52
                echo "                                <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "help", [])));
                echo "\">";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, (($this->getAttribute(($context["field"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", []), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))));
                echo "</span>
                            ";
            }
            // line 54
            echo "                        ";
        } else {
            // line 55
            echo "                            ";
            if ($this->getAttribute(($context["field"] ?? null), "markdown", [])) {
                // line 56
                echo "                                ";
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, _twig_default_filter($this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute(($context["field"] ?? null), "label", []), false), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []))));
                echo "
                            ";
            } else {
                // line 58
                echo "                                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, (($this->getAttribute(($context["field"] ?? null), "label", [], "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", []), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", [])))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", []))))), "html_attr");
                echo "
                            ";
            }
            // line 60
            echo "                        ";
        }
        // line 61
        echo "
                        ";
        // line 62
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "required", []), [0 => "on", 1 => "true", 2 => 1])) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 68
    public function block_global_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "global_attributes"));

        // line 69
        echo "                data-grav-field=\"";
        echo $this->getAttribute(($context["field"] ?? null), "type", []);
        echo "\"
                data-grav-disabled=\"";
        // line 70
        echo (($context["toggleable"] ?? null) && ($context["toggleableChecked"] ?? null));
        echo "\"
                data-grav-default=\"";
        // line 71
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", [])), "html_attr");
        echo "\"
                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 74
    public function block_group($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "group"));

        // line 75
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 121
        echo "                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 75
    public function block_input($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 76
        echo "                        <div class=\"";
        echo ((($context["form_field_wrapper_classes"] ?? null)) ? (($context["form_field_wrapper_classes"] ?? null)) : ("form-input-wrapper"));
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", []);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", []);
        echo "\">
                            ";
        // line 77
        $this->displayBlock('prepend', $context, $blocks);
        // line 78
        echo "                            <input
                                ";
        // line 80
        echo "                                name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", [])));
        echo "\"
                                value=\"";
        // line 81
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html_attr");
        echo "\"
                                ";
        // line 83
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 112
        echo "                            />
                            ";
        // line 113
        $this->displayBlock('append', $context, $blocks);
        // line 114
        echo "                            ";
        if ((($context["inline_errors"] ?? null) && ($context["errors"] ?? null))) {
            // line 115
            echo "                                <div class=\"";
            echo ((($context["form_errors_classes"] ?? null)) ? (($context["form_errors_classes"] ?? null)) : ("form-errors"));
            echo "\">
                                  <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
            // line 116
            echo twig_first($this->env, ($context["errors"] ?? null));
            echo "</p>
                                </div>
                            ";
        }
        // line 119
        echo "                        </div>
                    ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 77
    public function block_prepend($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "prepend"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 83
    public function block_input_attributes($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input_attributes"));

        // line 84
        echo "                                    class=\"";
        echo ($context["form_field_input_classes"] ?? null);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "classes", []);
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "size", []);
        echo "\"
                                    ";
        // line 85
        if ($this->getAttribute(($context["field"] ?? null), "id", [], "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", []));
            echo "\" ";
        }
        // line 86
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", [], "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", []));
            echo "\" ";
        }
        // line 87
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", []) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 88
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", [])) {
            echo "placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "placeholder", [])), "html_attr");
            echo "\"";
        }
        // line 89
        echo "                                    ";
        if (($context["autofocus"] ?? null)) {
            echo "autofocus=\"autofocus\"";
        }
        // line 90
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "novalidate=\"novalidate\"";
        }
        // line 91
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", []), [0 => "on", 1 => "true", 2 => 1])) {
            echo "readonly=\"readonly\"";
        }
        // line 92
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "autocomplete", [], "any", true, true)) {
            echo "autocomplete=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocomplete", []);
            echo "\"";
        }
        // line 93
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocapitalize", []), [0 => "off", 1 => "characters", 2 => "words", 3 => "sentences"])) {
            echo "autocapitalize=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocapitalize", []);
            echo "\"";
        }
        // line 94
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "inputmode", []), [0 => "none", 1 => "text", 2 => "decimal", 3 => "numeric", 4 => "tel", 5 => "search", 6 => "email", 7 => "url"])) {
            echo "inputmode=\"";
            echo $this->getAttribute(($context["field"] ?? null), "inputmode", []);
            echo "\"";
        }
        // line 95
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "spellcheck", []), [0 => "true", 1 => "false"])) {
            echo "spellcheck=\"";
            echo $this->getAttribute(($context["field"] ?? null), "spellcheck", []);
            echo "\"";
        }
        // line 96
        echo "
                                    ";
        // line 97
        if ($this->getAttribute(($context["field"] ?? null), "attributes", [], "any", true, true)) {
            // line 98
            echo "                                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "attributes", []));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 99
                echo "                                          ";
                echo $this->getAttribute($context["attribute"], "name", []);
                echo "=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", []));
                echo "\"
                                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 101
            echo "                                    ";
        }
        // line 102
        echo "                                    ";
        if (($context["required"] ?? null)) {
            echo "required=\"required\"";
        }
        // line 103
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", [])) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "pattern", []));
            echo "\"";
        }
        // line 104
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", []), "message", [])));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 105
($context["field"] ?? null), "title", [], "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->env, $this->getAttribute(($context["field"] ?? null), "title", [])));
            echo "\" ";
        }
        // line 106
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "datasets", [])) {
            // line 107
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["field"] ?? null), "datasets", []));
            foreach ($context['_seq'] as $context["datakey"] => $context["datavalue"]) {
                // line 108
                echo "                                            data-";
                echo $context["datakey"];
                echo "=\"";
                echo twig_escape_filter($this->env, $context["datavalue"], "html_attr");
                echo "\"
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['datakey'], $context['datavalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "                                    ";
        }
        // line 111
        echo "                                ";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 113
    public function block_append($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "append"));

        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/default/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  616 => 113,  609 => 111,  606 => 110,  595 => 108,  590 => 107,  587 => 106,  581 => 105,  574 => 104,  567 => 103,  562 => 102,  559 => 101,  548 => 99,  543 => 98,  541 => 97,  538 => 96,  531 => 95,  524 => 94,  517 => 93,  510 => 92,  505 => 91,  500 => 90,  495 => 89,  488 => 88,  483 => 87,  476 => 86,  470 => 85,  461 => 84,  455 => 83,  444 => 77,  436 => 119,  430 => 116,  425 => 115,  422 => 114,  420 => 113,  417 => 112,  414 => 83,  410 => 81,  405 => 80,  402 => 78,  400 => 77,  391 => 76,  385 => 75,  378 => 121,  375 => 75,  369 => 74,  360 => 71,  356 => 70,  351 => 69,  345 => 68,  336 => 62,  333 => 61,  330 => 60,  324 => 58,  318 => 56,  315 => 55,  312 => 54,  304 => 52,  296 => 50,  293 => 49,  290 => 48,  284 => 47,  275 => 133,  270 => 130,  264 => 128,  258 => 126,  256 => 125,  250 => 123,  247 => 122,  245 => 74,  242 => 73,  240 => 68,  233 => 67,  228 => 64,  226 => 47,  213 => 46,  210 => 45,  207 => 44,  205 => 43,  198 => 42,  195 => 41,  189 => 40,  178 => 39,  170 => 136,  168 => 40,  151 => 39,  145 => 38,  136 => 138,  134 => 38,  131 => 37,  127 => 35,  125 => 34,  122 => 33,  120 => 32,  118 => 31,  116 => 30,  113 => 29,  111 => 28,  108 => 26,  104 => 24,  100 => 22,  97 => 21,  95 => 20,  92 => 19,  89 => 18,  87 => 17,  84 => 16,  81 => 15,  78 => 14,  75 => 13,  72 => 12,  69 => 11,  66 => 10,  63 => 9,  60 => 8,  57 => 7,  55 => 6,  52 => 5,  50 => 4,  48 => 3,  45 => 2,  43 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/default/field.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\plugins\\form\\templates\\forms\\default\\field.html.twig");
    }
}
