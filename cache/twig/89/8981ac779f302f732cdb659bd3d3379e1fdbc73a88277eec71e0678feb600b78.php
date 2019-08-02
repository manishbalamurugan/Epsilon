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

/* modular/services.html.twig */
class __TwigTemplate_9ba4269bde32a5f23cd38416ba18be16d30e28e8fd980226eae8564b6d55daf3 extends \Twig\Template
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
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->enter($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "modular/services.html.twig"));

        // line 1
        echo "<section id=\"";
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", [])) {
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "redirect", []);
        } else {
            echo twig_lower_filter($this->env, $this->getAttribute(($context["page"] ?? null), "menu", []));
        }
        echo "\"
         class=\"s-services ";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "sectionBackground", []);
        echo " target-section\">

    <div class=\"overlay\"></div>
    <div class=\"row section-intro\">
        <div class=\"col-twelve\">
            ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "smallTitle", [])) {
            // line 8
            echo "                <h3>";
            echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "smallTitle", []);
            echo "</h3>
            ";
        }
        // line 10
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "title", [])) {
            // line 11
            echo "                <h1>";
            echo $this->getAttribute(($context["page"] ?? null), "title", []);
            echo "</h1>
            ";
        }
        // line 13
        echo "           ";
        if ($this->getAttribute(($context["page"] ?? null), "content", [])) {
            // line 14
            echo "            <p class=\"lead\">";
            echo $this->getAttribute(($context["page"] ?? null), "content", []);
            echo "</p>
            ";
        }
        // line 16
        echo "        </div>
    </div> <!-- /section-intro -->

    <div class=\"row services-content\">

        <div id=\"owl-slider\" class=\"owl-carousel services-list\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", []), "services", []));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 23
            echo "

                <div class=\"service\">
                    <span class=\"icon\"><i class=\"";
            // line 26
            echo $this->getAttribute($context["item"], "icon", []);
            echo "\"></i></span>
                    <div class=\"service-content\">
                        <h3>";
            // line 28
            echo $this->getAttribute($context["item"], "title", []);
            echo "</h3>
                        <p class=\"desc\">";
            // line 29
            echo $this->getAttribute($context["item"], "description", []);
            echo "
                        </p>
                    </div>
                </div>

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "
        </div> <!-- /services-list -->
    </div>

</section>
";
        
        $__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4->leave($__internal_57054b9517dd8b3da0f938a595b841d745c7d753e57333ce87e0f394208342f4_prof);

    }

    public function getTemplateName()
    {
        return "modular/services.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 35,  102 => 29,  98 => 28,  93 => 26,  88 => 23,  84 => 22,  76 => 16,  70 => 14,  67 => 13,  61 => 11,  58 => 10,  52 => 8,  50 => 7,  42 => 2,  33 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "modular/services.html.twig", "C:\\MAMP\\htdocs\\grav-admin-ea\\user\\themes\\hola\\templates\\modular\\services.html.twig");
    }
}
