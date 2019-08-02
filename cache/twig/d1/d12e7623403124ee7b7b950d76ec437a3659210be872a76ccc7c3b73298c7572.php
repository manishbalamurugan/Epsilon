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

/* modular/basic.html.twig */
class __TwigTemplate_fe5c96243a1e2b3d5231dde01a693defca286ae866d42552ddb0b164b6881b94 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/basic.html.twig"));

        // line 1
        echo "<section id=\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", [])) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", []);
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", []));
        }
        echo "\"
         class=\"s-basic ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionBackground", []);
        echo " target-section\">
    <div class=\"row narrow section-intro has-bottom-sep\">
        <div class=\"col-full text-center\">
            <h3>";
        // line 5
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "smallTitle", []);
        echo "</h3>
            <h1>";
        // line 6
        echo $this->getAttribute(($context["page"] ?? null), "title", []);
        echo "</h1>
            <p class=\"lead\">";
        // line 7
        echo strip_tags($this->getAttribute(($context["page"] ?? null), "content", []));
        echo "</p>
        </div>
    </div>
    ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "row", []));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 11
            echo "
        ";
            // line 12
            if ($this->getAttribute($context["column"], "secondColumnContent", [])) {
                // line 13
                echo "            <div class=\"row basic-content\">
                <div class=\"col-six tab-full left\">
                    <h3>";
                // line 15
                echo $this->getAttribute($context["column"], "firstColumnTitle", []);
                echo "</h3>

                    <p class=\"lead\">";
                // line 17
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["column"], "firstColumnContent", []));
                echo "
                    </p>
                </div>

                <div class=\"col-six tab-full right\">
                    <h3>";
                // line 22
                echo $this->getAttribute($context["column"], "secondColumnTitle", []);
                echo "</h3>

                    <p class=\"lead\">";
                // line 24
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["column"], "secondColumnContent", []));
                echo "
                    </p>
                </div>
            </div>
        ";
            } else {
                // line 29
                echo "            <div class=\"row basic-content one-column\">
                <div class=\"col-eight tab-full\">
                    <h3>";
                // line 31
                echo $this->getAttribute($context["column"], "firstColumnTitle", []);
                echo "</h3>

                    <p class=\"lead\">";
                // line 33
                echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->markdownFunction($this->getAttribute($context["column"], "firstColumnContent", []));
                echo "
                    </p>
                </div>
            </div>
        ";
            }
            // line 38
            echo "
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    <!-- end basic-content -->

</section>
<!-- end basic -->
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/basic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 40,  118 => 38,  110 => 33,  105 => 31,  101 => 29,  93 => 24,  88 => 22,  80 => 17,  75 => 15,  71 => 13,  69 => 12,  66 => 11,  62 => 10,  56 => 7,  52 => 6,  48 => 5,  42 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/basic.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\themes\\hola\\templates\\modular\\basic.html.twig");
    }
}
