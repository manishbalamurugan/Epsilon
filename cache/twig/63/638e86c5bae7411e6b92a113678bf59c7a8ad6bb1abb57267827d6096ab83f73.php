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

/* forms/fields/parents/parents.html.twig */
class __TwigTemplate_91912749707149eaa4ff23a0a0c292a2af2862d7caeb5fffbbebd816f6337b91 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'input' => [$this, 'block_input'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "forms/fields/pages/pages.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "forms/fields/parents/parents.html.twig"));

        $this->parent = $this->loadTemplate("forms/fields/pages/pages.html.twig", "forms/fields/parents/parents.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    // line 3
    public function block_input($context, array $blocks = [])
    {
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4 = $this->env->getExtension("Twig\\Extension\\ProfilerExtension");
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "input"));

        // line 4
        echo "    ";
        $context["last_page_route"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? null), "page", []), "getLastPageRoute", []);
        // line 5
        echo "    ";
        $context["show_slug_val"] = true;
        // line 6
        echo "    ";
        $context["show_fullpath_val"] = false;
        // line 7
        echo "    ";
        $context["show_all_val"] = true;
        // line 8
        echo "
    ";
        // line 9
        $context["show_parents"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.admin.pages.show_parents"], "method");
        // line 10
        echo "    ";
        if ((($context["show_parents"] ?? null) == "folder")) {
            // line 11
            echo "        ";
            $context["show_slug_val"] = false;
            // line 12
            echo "    ";
        } elseif ((($context["show_parents"] ?? null) == "fullpath")) {
            // line 13
            echo "        ";
            $context["show_fullpath_val"] = true;
            // line 14
            echo "    ";
        }
        // line 15
        echo "    
    ";
        // line 16
        $context["limit_levels_val"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.admin.pages.parents_levels"], "method");
        // line 17
        echo "
    ";
        // line 18
        $context["show_modular_val"] = $this->getAttribute(($context["config"] ?? null), "get", [0 => "plugins.admin.pages.show_modular", 1 => true], "method");
        // line 19
        echo "    ";
        if ((($context["show_modular_val"] ?? null) == false)) {
            // line 20
            echo "        ";
            $context["show_all_val"] = false;
            // line 21
            echo "    ";
        }
        // line 22
        echo "
    ";
        // line 23
        $context["defaults"] = ["show_root" => true, "show_all" => ($context["show_all_val"] ?? null), "show_modular" => ($context["show_modular_val"] ?? null), "show_slug" => ($context["show_slug_val"] ?? null), "show_fullpath" => ($context["show_fullpath_val"] ?? null), "default" => ($context["last_page_route"] ?? null), "limit_levels" => ($context["limit_levels_val"] ?? null)];
        // line 24
        echo "    ";
        $context["field"] = twig_array_merge(($context["field"] ?? null), ($context["defaults"] ?? null));
        // line 25
        echo "    ";
        $this->displayParentBlock("input", $context, $blocks);
        echo "
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "forms/fields/parents/parents.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 25,  107 => 24,  105 => 23,  102 => 22,  99 => 21,  96 => 20,  93 => 19,  91 => 18,  88 => 17,  86 => 16,  83 => 15,  80 => 14,  77 => 13,  74 => 12,  71 => 11,  68 => 10,  66 => 9,  63 => 8,  60 => 7,  57 => 6,  54 => 5,  51 => 4,  45 => 3,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "forms/fields/parents/parents.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\plugins\\admin\\themes\\grav\\templates\\forms\\fields\\parents\\parents.html.twig");
    }
}
